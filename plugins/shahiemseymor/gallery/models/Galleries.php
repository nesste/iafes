<?php 
/**
 * Created by ShahiemSeymor.
 * Date: 6/7/14
 */

namespace ShahiemSeymor\Gallery\Models;

use Model;

class Galleries extends Model
{
    public $table = 'shahiemseymor_galleries';  

    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'created_at asc'],
    ]; 

    public $rules = [
        'title' => 'required',
    ];

    protected $dates = ['created_at'];

    public static function getQuery($galleryId)
    {
    	$query = self::find($galleryId);
    	return $query->images;
    }

}