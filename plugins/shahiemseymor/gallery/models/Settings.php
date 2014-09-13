<?php 
/**
 * Created by ShahiemSeymor.
 * Date: 6/7/14
 */
namespace ShahiemSeymor\Gallery\Models;

use Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'gallery_settings';
    public $settingsFields = 'fields.yaml';
    public $rules = [
        'change_speed' => 'numeric',
        'speed' => 'numeric',
    ];
    
}