<?php namespace RainLab\Blog\Components;

use App;
use Request;
use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Subpost as BlogSubPost;
use RainLab\Blog\Models\Post as BlogPost;
use RainLab\Blog\Models\Category as BlogCategory;
use RainLab\Blog\Models\Subcategory as BlogSubCategory;

class Subpost extends ComponentBase
{
    public $subpost;

    public function componentDetails()
    {
        return [
            'name'        => 'Blog Sub post',
            'description' => 'Displays a blog sub post on the page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'SparamId' => [
                'description' => 'The URL route parameter used for looking up the Sub post by its slug.',
                'title'       => 'subPost',
                'default'     => 'menu',
                'type'        => 'string'
            ],
            'categoryFilter' => [
                'title'       => 'Category filter',
                'description' => 'Enter a category slug or URL parameter to filter the posts by. Leave empty to show all posts.',
                'type'        => 'string',
                'default'     => 'page'
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

        $cat = $this->page['page'];

        
        
        if(isset($slug)){

            $catId = BlogCategory::where('slug','=', $cat)->first()->id;

            $subCat = BlogSubCategory::where('category_id','=', $catId)->where('slug','=',$slug)->first()->id;
          
            $menu = $this->param($this->property('subPostName'));

            $post = BlogPost::where('slug','=',$menu)->first()->id;

            return BlogSubPost::where('post_id','=',$post)->where('subcategory_id','=',$subCat)->first();     
        }    
    }

    public function loadCategory()
    {
        if (!$categoryId = $this->propertyOrParam('categoryFilter'))
            return null;

        if (!$category = BlogCategory::whereSlug($categoryId)->first())
            return null;

        return $category;
    }


}