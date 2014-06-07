<?php namespace RainLab\User\Models;

use Model;

/**
 * Country Model
 */
class Position extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rainlab_user_positions';

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
        'user' => ['RainLab\User\Models\User']
    ];

    

    /**
     * @var bool Indicates if the model should be timestamped.
     */
    public $timestamps = false;

}