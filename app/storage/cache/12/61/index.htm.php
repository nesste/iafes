<?php 
class Cms5418caa7897a5_3268938722Class extends \Cms\Classes\PageCode
{
public function onStart(){
	
    $this['page'] = $this->param('page');
    $this['path'] =  URL::to('/');
    
    if($this['page'] == ''){
        $this['page'] = 'homepage';
    }
	$page = $this['page'];
	$categories = array("homepage","seminars-workshop","netties-conference","summer-schools","student-research-conference","projects","training");
   
	if(!in_array($page, $categories)){
		return Redirect::to( $this['path'] . '/404' );
	}
    
   
	
    $this['slug'] = $this->param('slug');
    $slug = $this['slug'];

    $this['menu'] = $this->param('menu');
   
    if( $page == 'homepage' || $page == 'iafes-association' || $page == 'training'  || $page == 'projects' || $page == 'home' ){
        $this['news'] = true;
    }else if($slug != ''){
        $this['news'] = true;
    }else{
        $this['news'] = false;
    }
     
	if($page == 'student-research-conference' || $page == 'summer-schools'){
	    $this['vicadis'] = true;
	}
}

}
