<?php namespace RainLab\Blog\Models;

use Str;
use Model;
use RainLab\Blog\Models\Post;

class Subcategory extends Model
{
    public $table = 'rainlab_blog_subcategories';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:rainlab_blog_subcategories',
        'code' => 'unique:rainlab_blog_subcategories',
    ];

    protected $guarded = [];

    public function beforeValidate()
    {
        // Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->name);
    }

     public $belongsTo = [
        'category' => ['RainLab\Blog\Models\Category', 'table' => 'rainlab_blog_category', 'order' => 'name']
    ];

    public function posts()
    {
        // @todo: declare this relationship as the class field when the conditions option is implemented
        return $this->belongsToMany('RainLab\Blog\Models\Post', 'rainlab_blog_posts_subcategories')->isPublished()->orderBy('published_at', 'desc');
    }

    public function postCount()
    {
        return $this->posts()->count();
    }

    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }
}