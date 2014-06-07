<?php namespace RainLab\User\Models;

use Model;

/**
 * Country Model
 */
class University extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rainlab_user_universities';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules
     */
    public $rules = [];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'country' => ['RainLab\User\Models\Country']
    ];

    

    /**
     * @var bool Indicates if the model should be timestamped.
     */
    public $timestamps = false;

}