<?php 
class Cms5414134934f39_2697656062Class extends \Cms\Classes\PageCode
{
public function onStart(){
	
	$this['page'] = 'iafes-association';
	
	$this['title'] = $this->param('slug');
	$slug = $this['title'];
	$this['path'] =  URL::to('/');

	if($slug != ''){
	    $this['title'] = $this->param('slug');
	}
    $this['news'] = true;
	
}

}
