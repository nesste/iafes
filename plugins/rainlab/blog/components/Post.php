<?php namespace RainLab\Blog\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Post as BlogPost;

class Post extends ComponentBase
{
    /**
     * @var RainLab\Blog\Models\Post The post model used for display.
     */
    public $post;

    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'Blog Post',
            'description' => 'Displays a blog post on the page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'paramId' => [
                'description' => 'The URL route parameter used for looking up the post by its slug.',
                'title'       => 'Slug param name',
                'default'     => 'slug',
                'type'        => 'string'
            ],
            'SparamId' => [
                'description' => 'The URL route parameter used for looking up the post by its slug.',
                'title'       => 'Slug param name',
                'default'     => 'page',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->post = $this->page['blogPost'] = $this->loadPost();
    }

    protected function loadPost()
    {
        $slug = $this->param($this->property('paramId'));
        if(!isset($slug)){
            $slug = $this->param($this->property('SparamId'));
        }
        if($slug == ''){
           $slug = $this->page['page'];
        } 
        return BlogPost::isPublished()->where('slug', '=', $slug)->first();
    }
}