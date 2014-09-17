<?php 
class Cms5418cbc8088ee_2859151216Class extends \Cms\Classes\LayoutCode
{
public function onStart(){

	$url = Request::path();
	
	if (strstr($url,'/') !== false){

		$token = explode("/",$url);
		
		$this['token'] = $token[0];
	}
	
		
}

}
