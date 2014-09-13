<?php namespace RainLab\Blog\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Subcategory as BlogSubCategory;
use Cms\Classes\CmsPropertyHelper;
use Request;
use App;
use DB;

class Subcategories extends ComponentBase
{
    public $subCategories;
    public $subCategoryPage;
    public $currentSubCategorySlug;
    
    public function componentDetails()
    {
        return [
            'name'        => 'Blog subCategory List',
            'description' => 'Displays a list of blog subCategories on the page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'subCategoryPage' => [
                'title' => 'subCategory page',
                'description' => 'Name of the subCategory page file for the category links. This property is used by the default component partial.',
                'type'=>'dropdown',
                'default' => '/category'
            ],
            'displayEmpty' => [
                'title' => 'Display empty subCategories',
                'description' => 'Show subCategories that do not have any posts.',
                'type'=>'checkbox',
                'default' => 0
            ],
            'paramId' => [
                'description' => 'The URL route parameter used for looking up the current subCategory by its slug. This property is used by the default component partial for marking the currently active category.',
                'title'       => 'Slug param name',
                'default'     => 'slug',
                'type'        => 'string'
            ],
        ];
    }

    public function getSubCategoryPageOptions()
    {
        return CmsPropertyHelper::listPages();;
    }

     public function onRun()
    {
        $this->posts = $this->page['blogPosts'] = $this->loadPosts();

        $currentPage = $this->param('page');
        if ($currentPage > ($lastPage = $this->posts->getLastPage()) && $currentPage > 1)
            return Redirect::to($this->controller->currentPageUrl(['page'=>$lastPage]));
    }

  
    protected function loadSubCategories()
    {
        $subCategories = BlogSubCategory::orderBy('name');
        if (!$this->property('displayEmpty')) {
            $subCategories->whereExists(function($query) {
                $query->select(DB::raw(1))
                ->from('rainlab_blog_posts_subcategories')
                ->join('rainlab_blog_posts', 'rainlab_blog_posts.id', '=', 'rainlab_blog_posts_subcategories.post_id')
                ->whereNotNull('rainlab_blog_posts.published')
                ->where('rainlab_blog_posts.published', '=', 1)
                ->whereRaw('rainlab_blog_subcategories.id = rainlab_blog_posts_subcategories.category_id');
            });
        }

        return $subCategories->get();
    }

    protected function loadPosts()
    {
        $currentPage = $this->param('slug');
        App::make('paginator')->setCurrentPage($currentPage);

        return $this->subCategories->posts()->paginate($this->property('postsPerPage'));
    }
}