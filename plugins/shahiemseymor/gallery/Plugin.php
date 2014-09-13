<?php
/**
 * Created by ShahiemSeymor.
 * Date: 6/7/14
 */
namespace ShahiemSeymor\Gallery;

use App;
use Backend;
use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Gallery Plugin',
            'description' => 'Gallery Plugin.',
            'author' => 'ShahiemSeymor',
            'icon' => 'icon-picture-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'ShahiemSeymor\Gallery\Components\Grid'  => 'gallery',
            'ShahiemSeymor\Gallery\Components\Slider'  => 'slider',
        ];
    }

    public function registerNavigation()
    {
        return [
            'gallery' => [
                'label'       => 'Gallery',
                'url'         => \Backend::url('shahiemseymor/gallery/galleries'),
                'icon' => ' icon-picture-o'
            ]
        ];
    }

}
