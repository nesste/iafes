<?php namespace RainLab\Blog\Models;

use App;
use Str;
use Model;
use October\Rain\Support\Markdown;
use October\Rain\Support\ValidationException;
use RainLab\Blog\Classes\TagProcessor;
use RainLab\Blog\Models\Post;

class Subpost extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'rainlab_blog_subposts';

    /*
     * Validation
     */
    public $rules = [
        'name'=> 'required',
        'slug' => 'required',
        'content' => 'required'
    ];


    /*
     * Relations
     */

    public $belongsTo = [
        'user' => ['Backend\Models\User'],
        'post' => ['RainLab\Blog\Models\Post'],
        'subcategory' => ['RainLab\Blog\Models\Subcategory', 'table' => 'rainlab_blog_subcategories', 'order' => 'name']
    ];

    public $attachMany = [
        'featured_images' => ['System\Models\File'],
        'content_images' => ['System\Models\File']
    ];

    
    /**
     * @var array The accessors to append to the model's array form.
     */
    protected $appends = ['summary', 'has_summary'];

    public $preview = null;

    /**
     * Lists posts for the front end
     * @param  array $options Display options
     * @return self
     */
    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'       => 1,
            'perPage'    => 30,
            'sort'       => 'created_at',
            'categories' => null,
            'search'     => ''
        ], $options));

        $allowedSortingOptions = ['created_at', 'updated_at'];
        $searchableFields = ['title', 'slug', 'content'];

        App::make('paginator')->setCurrentPage($page);

        /*
         * Sorting
         */
        if (!is_array($sort)) $sort = [$sort];
        foreach ($sort as $_sort) {

            $parts = explode(' ', $_sort);
            if (count($parts) < 2) array_push($parts, 'desc');
            list($sortField, $sortDirection) = $parts;

            if (in_array($sortField, $allowedSortingOptions))
                $query->orderBy($_sort, 'desc');
        }


        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }

        /*
         * Posts
         */
        if ($posts !== null) {
            if (!is_array($posts)) $posts = [$posts];
            $query->whereHas('posts', function($q) use ($posts) {
                $q->whereIn('id', $posts);
            });
        }

        return $query->paginate($perPage);
    }

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

    /**
     * Used by "has_summary", returns true if this post uses a summary (more tag)
     * @return boolean
     */
    public function getHasSummaryAttribute()
    {
        return strlen($this->getSummaryAttribute()) < strlen($this->content_html);
    }

    /**
     * Used by "summary", returns the HTML content before the <!-- more --> tag
     * @return string
     */
    public function getSummaryAttribute()
    {
        $more = '<!-- more -->';
        $parts = explode($more, $this->content_html);
        return array_get($parts, 0);
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

        if (array_key_exists('posts', $this->getRelations())) {
            $params['posts'] = $this->posts->count() ? $this->posts->first()->slug : null;
        }

        return $this->url = $controller->pageUrl($pageName, $params);
    }

}