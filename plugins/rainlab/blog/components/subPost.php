<?php namespace RainLab\Blog\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\subPost as BlogSubPost;
use RainLab\Blog\Models\Post as BlogPost;

class subPost extends ComponentBase
{
    public $subpost;

    public function componentDetails()
    {
        return [
            'name'        => 'Blog subPost',
            'description' => 'Displays a blog post on the page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'SparamId' => [
                'description' => 'The URL route parameter used for looking up the subPost by its slug.',
                'title'       => 'subPost',
                'default'     => 'menu',
                'type'        => 'string'
            ],
            'subPostName' => [
                'description' => 'The URL route parameter used for looking up the post by its slug.',
                'title'       => 'postName',
                'default'     => 'slug',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        
        $this->subpost = $this->page['subPostBlog'] = $this->loadPost();    
    }

    protected function loadPost()
    {
       
        $slug = $this->param($this->property('SparamId'));
        if(isset($slug)){
            $menu = $this->param($this->property('subPostName'));
            $post = BlogPost::where('slug','=',$menu)->first()->id;
            return BlogSubPost::make()->where('post_id', '=', $post)->where('slug','=',$slug)->first();     
        }    
    }
}