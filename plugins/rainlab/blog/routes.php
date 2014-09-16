<?php

use RainLab\Blog\Models\Post;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\Subcategory;

Route::post('/subposts/getPostId', function(){

	$getId = $_POST['postId'];

	$postId = Post::where('id','=',$getId)->first()->id;
	$categoryId = Category::join('rainlab_blog_posts_categories', 'rainlab_blog_categories.id', '=', 'rainlab_blog_posts_categories.category_id')
        ->join('rainlab_blog_posts','rainlab_blog_posts_categories.post_id','=','rainlab_blog_posts.id')
        ->whereNotNull('rainlab_blog_posts.published')
        ->where('rainlab_blog_posts.published', '=', 1)
        ->where('rainlab_blog_posts_categories.post_id', '=', $postId)->first()->category_id;

    $subCategory = Subcategory::where('category_id','=',$categoryId)->get();

	return $subCategory;
	

}); 
