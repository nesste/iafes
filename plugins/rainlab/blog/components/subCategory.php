<?php namespace RainLab\Blog\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Subcategory as BlogSubCategory;
use Cms\Classes\CmsPropertyHelper;
use App;
use Redirect;

class Subcategory extends ComponentBase
{
    public $Subcategory;
    public $postPage;
    public $posts;

    public function componentDetails()
    {
        return [
            'name'        => 'Blog Sub category',
            'description' => 'Displays posts from a specific Subc ategory.'
        ];
    }

    public function defineProperties()
    {
        return [
            'paramId' => [
                'description' => 'The URL route parameter used for looking up the Sub category by its slug.',
                'title'       => 'Slug param name',
                'default'     => 'slug',
                'type'        => 'string'
            ],
            'postPage' => [
                'title' => 'Post page',
                'description' => 'Name of the blog post page file for the "Learn more" links. This property is used by the default component partial.',
                'type'=>'dropdown',
                'default' => '/category/Subcategory'
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
        $this->Subcategory = $this->page['blogSubCategory'] = $this->loadSubCategory();
        $this->postPage = $this->page['blogPostPage'] = $this->property('postPage');

        if ($this->Subcategory) {
            $this->posts = $this->page['blogPosts'] = $this->loadPosts();

            $currentPage = $this->param('page');
            if ($currentPage > ($lastPage = $this->posts->getLastPage()) && $currentPage > 1)
                return Redirect::to($this->controller->currentPageUrl(['page'=>$lastPage]));
        }
    }

    protected function loadSubCategory()
    {
        $slug = $this->param($this->property('paramId'));
        return BlogSubCategory::where('slug', '=', $slug)->first();
    }

}