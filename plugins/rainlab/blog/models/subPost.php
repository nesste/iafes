<?php namespace RainLab\Blog\Models;

use Str;
use Model;
use October\Rain\Support\Markdown;
use October\Rain\Support\ValidationException;
use RainLab\Blog\Classes\TagProcessor;

class subPost extends Model
{
    public $table = 'rainlab_blog_subposts';

    /*
     * Validation
     */
    public $rules = [
        'title'=> 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i'],
        'content' => 'required',
        'excerpt' => ''
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
     protected $dates = ['published_at'];
    /*
     * Relations
     */

    public $belongsTo = [
        'user' => ['Backend\Models\User' , 'table' => 'users'],
        'post' => ['RainLab\Blog\Models\Post', 'table' => 'rainlab_blog_posts', 'order' => 'name']
    ];

    public $attachMany = [
        'featured_images' => ['System\Models\File'],
        'content_images' => ['System\Models\File']
    ];

    public $preview = null;

    public static function formatHtml($input, $preview = false)
    {
        $result = Markdown::parse(trim($input));

        if ($preview)
            $result = str_replace('<pre>', '<pre class="prettyprint">', $result);

        $result = TagProcessor::instance()->processTags($result, $preview);

        return $result;
    }

    public function beforeSave()
    {
        $this->content_html = self::formatHtml($this->content);
    }
}