<?php namespace RainLab\Blog\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Category as BlogCategory;
use Cms\Classes\CmsPropertyHelper;
use App;
use Redirect;

class Category extends ComponentBase
{
    public $category;
    public $postPage;
    public $posts;

    public function componentDetails()
    {
        return [
            'name'        => 'Blog Category',
            'description' => 'Displays posts from a specific category.'
        ];
    }

    public function defineProperties()
    {
        return [
            'paramId' => [
                'description' => 'The URL route parameter used for looking up the category by its slug.',
                'title'       => 'Slug param name',
                'default'     => 'slug',
                'type'        => 'string'
            ],
            'postPage' => [
                'title' => 'Post page',
                'description' => 'Name of the blog post page file for the "Learn more" links. This property is used by the default component partial.',
                'type'=>'dropdown',
                'default' => '/category/post'
            ],
            'postsPerPage' => [
                'title' => 'Posts per',
                'default' => '10',
                'type'=>'string',
                'validationPattern'=>'^[0-9]+$',
                'validationMessage'=>'Invalid format of the posts per page value'
            ],
            'noPostsMessage' => [
                'title' => 'No posts message',
                'description' => 'Message to display in the blog post list in case if there are no posts. This property is used by the default component partial.',
                'type'=>'string',
                'default' => 'No posts found'
            ]
        ];
    }

    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->category = $this->page['blogCategory'] = $this->loadCategory();
        $this->postPage = $this->page['blogPostPage'] = $this->property('postPage');

        if ($this->category) {
            $this->posts = $this->page['blogPosts'] = $this->loadPosts();
        }
    }

    protected function loadCategory()
    {
        $slug = $this->param($this->property('paramId'));
        if($slug == ''){
            $slug = $this->page['page'];
        }
        return BlogCategory::where('slug', '=', $slug)->first();
    }

    protected function loadPosts()
    {
        $currentPage = $this->param('page');
        App::make('paginator')->setCurrentPage($currentPage);

        return $this->category->posts()->paginate($this->property('postsPerPage'));
    }
}