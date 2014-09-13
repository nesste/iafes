<?php 
class Cms54136df5baa3e_2246801245Class extends \Cms\Classes\PageCode
{
public function onStart(){

    $this['page'] = $this->param('page');
    
    if($this['page'] == ''){
        $this['page'] = 'homepage';
    }
	$page = $this['page'];
   
	$this['path'] =  URL::to('/');
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
