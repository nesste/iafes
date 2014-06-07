<?php 
use rainlab\user\models\Assembly;use rainlab\user\models\Information;use rainlab\user\models\Financial;class Cms5393863117a26_476256217Class extends \Cms\Classes\PageCode
{




public function onStart(){

     $this['news'] = true;
	 $this['path'] =  URL::to('/');
     $this['slug'] = $this->param('code');

	if(Auth::check()){
	    $id = Auth::getUser()->id;
    	$this['page'] = $this->param('code');
    	$page = $this['page'];
    	if(Auth::getUser()->avatar == null){
    	   $this['image'] = $this['path'].'/themes/iafes/assets/images/user.jpg';
    	}else{
    	    $this['image'] =  Auth::getUser()->avatar->getPath();
    	}
    	if($page == 'information'){
    	    $post = Information::where('user_id','=',$id)->first();
    	}else if($page == 'general-assembly'){
    	    $post = Assembly::where('user_id','=',$id)->first();
    	}else if($page == 'financial-info'){
    	    $post = Financial::where('user_id','=',$id)->first();
    	}
    	if(isset($post)){
    	    $this['content'] = $post->content_html;
	    }
	    
	}


}

}
