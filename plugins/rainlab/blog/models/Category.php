<?php namespace RainLab\Blog\Models;

use Str;
use Model;
use RainLab\Blog\Models\Post;

class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'rainlab_blog_categories';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:rainlab_blog_categories',
        'code' => 'unique:rainlab_blog_categories',
    ];

    protected $guarded = [];

    public $belongsToMany = [
        'posts' => ['RainLab\Blog\Models\Post', 'table' => 'rainlab_blog_posts_categories', 'order' => 'published_at desc', 'scope' => 'isPublished']
    ];

    public function beforeValidate()
    {
        // Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->name);
    }

    public function posts()
    {
        // @todo: declare this relationship as the class field when the conditions option is implemented
        return $this->belongsToMany('RainLab\Blog\Models\Post', 'rainlab_blog_posts_categories')->isPublished()->orderBy('published_at', 'desc');   
    }

    public function postCount()
    {
        return $this->posts()->count();
    }

    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }
}