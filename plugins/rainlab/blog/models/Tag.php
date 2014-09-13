<?php namespace RainLab\Blog\Models;

use Str;
use Model;
use RainLab\Blog\Models\Post;

class Tag extends Model
{

    use \October\Rain\Database\Traits\Validation;

    public $table = 'rainlab_blog_tags';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:rainlab_blog_tags',
        'code' => 'unique:rainlab_blog_tags',
    ];

    protected $guarded = [];

    public function beforeValidate()
    {
        // Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->name);
    }

    public function posts()
    {
        // @todo: declare this relationship as the class field when the conditions option is implemented
        return $this->belongsToMany('RainLab\Blog\Models\Post', 'rainlab_blog_posts_tags')->isPublished()->orderBy('name', 'desc');
    }

    public function postCount()
    {
        return $this->posts()->count();
    }
}