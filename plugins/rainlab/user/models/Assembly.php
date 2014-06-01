<?php namespace RainLab\User\Models;

use Str;
use Model;
use October\Rain\Support\Markdown;
use October\Rain\Support\ValidationException;
use RainLab\User\Classes\TagProcessor;

class Assembly extends Model
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'rainlab_user_general';

    /**
     * Validation rules
     */
    public $rules = [
        'name' => 'required',
        'content' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i'],
        'code' => 'unique:rainlab_user_general',
    ];


    public function beforeValidate()
    {
        // Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->name);
    }

    /**
     * @var array Relations
     */

    public $belongsTo = [
    	'user' => ['RainLab\User\Models\User', 'table' => 'users','order' => 'name']
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

    

    public function getPersistCode()
    {
        if (!$this->persist_code)
            return parent::getPersistCode();

        return $this->persist_code;
    }

 
     public function beforeSave()
    {
        $this->content_html = self::formatHtml($this->content);
    }

}
