<?php namespace RainLab\Blog\Models;

use App;
use Str;
use Model;
use October\Rain\Support\Markdown;
use October\Rain\Support\ValidationException;
use RainLab\Blog\Classes\TagProcessor;

class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'rainlab_blog_posts';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required|between:3,64',
        'slug' => 'required|unique:rainlab_blog_posts',
        'content' => 'required',
        'excerpt' => ''
    ];


    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['published_at'];

    /*
     * Relations
     */
    public $belongsTo = [
        'user' => ['Backend\Models\User'],
    ];

    public $belongsToMany = [
        'categories' => ['RainLab\Blog\Models\Category', 'table' => 'rainlab_blog_posts_categories', 'order' => 'name'],
        'tags' => ['RainLab\Blog\Models\Tag', 'table' => 'rainlab_blog_posts_tags', 'order' => 'name']
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
            'search'     => '',
            'published'  => true
        ], $options));

        $allowedSortingOptions = ['created_at', 'updated_at', 'published_at','categories'];
        $searchableFields = ['title', 'slug', 'excerpt', 'content'];

        App::make('paginator')->setCurrentPage($page);

        if ($published)
            $query->isPublished();

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
         * Categories
         */
        if ($categories !== null) {
            if (!is_array($categories)) $categories = [$categories];
            $query->whereHas('categories', function($q) use ($categories) {
                $q->whereIn('id', $categories);
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

    public function afterValidate()
    {
        if ($this->published && !$this->published_at){
            throw new ValidationException([
               'published_at' => 'Please specify the published date'
            ]);
        }
    }

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', '=', 1)
        ;
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

        if (array_key_exists('categories', $this->getRelations())) {
            $params['category'] = $this->categories->count() ? $this->categories->first()->slug : null;
        }

        return $this->url = $controller->pageUrl($pageName, $params);
    }
}