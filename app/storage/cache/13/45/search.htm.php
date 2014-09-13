<?php 
use rainlab\blog\models\Post;use rainlab\blog\models\Tag;use rainlab\blog\models\Category;class Cms54144fdf1898f_2001715134Class extends \Cms\Classes\PageCode
{




public function onStart(){
	$path =  URL::to('/');
	$this['news'] = false;
	$this['search'] = $this->param('slug');
	$search = $this['search'];
	if($search == ''){
		$this['search'] = 'Nothing';
	}
	$split = explode(' ',$search);
	$results = array();
	for($j = 0; $j < count($split); $j++){
	    $tagName = Tag::where('slug','=',$split[$j])->first();
	    if(isset($tagName)){
    	    $tag = $tagName->id;
    	    $query = Post::join('rainlab_blog_posts_tags','rainlab_blog_posts.id','=','rainlab_blog_posts_tags.post_id')
    	           ->join('rainlab_blog_tags','rainlab_blog_posts_tags.tag_id','=','rainlab_blog_tags.id')
    	           ->where('rainlab_blog_tags.id','=',$tag)
    	           ->get();
    	    for($i = 0; $i < count($query); $i++){
    	        $query2 = Category::join('rainlab_blog_posts_categories','rainlab_blog_categories.id','=','rainlab_blog_posts_categories.category_id')
    	                ->join('rainlab_blog_posts','rainlab_blog_posts_categories.post_id','=','rainlab_blog_posts.id')
    	                ->where('rainlab_blog_posts.id','=',$query[$i]->post_id)
    	                ->get();
    	        foreach($query2 as $post){
    	            $postName = $post->name;
    	            $postSlug = $post->slug;
    	            $postDate = date_create($post->published_at);
    	            $dateFormat = date_format($postDate,'F j, Y');
    	            $postContent = $post->excerpt;
    	            $categorySlug = Category::where('id','=',$post->category_id)->first()->slug;
    	            $template = "<ul class='post-list'>
                                    <li>
                                        <h3><a href='$path/$categorySlug/$postSlug'> $postName </a></h3>
                                        <p class='info'>
                                            Posted in <a href='$path/$categorySlug'> $categorySlug </a>
                                            on $dateFormat
                                        </p>
                                        <p class='content-blk'> $postContent </p>
                                    </li>
                                </ul>";
                    if(!in_array($template, $results, true)){
                        array_push($results,$template);
                    }            
    	        }
    	   }
    	   $this['template'] = $results;
    	}else{
    	   $this['error'] = 'No results has been found!';   
    	}
	}
}

}
