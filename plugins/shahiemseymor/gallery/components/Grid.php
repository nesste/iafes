<?php namespace ShahiemSeymor\Gallery\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Cms\Classes\CmsPropertyHelper;
use ShahiemSeymor\Gallery\Models\Galleries;
use ShahiemSeymor\Gallery\Models\Settings;

class Grid extends ComponentBase
{
    public $albums;
    public $photos;

    public function componentDetails()
    {
        return [
            'name'        => 'Gallery grid',
            'description' => 'Display all galleries.'
        ];
    }

    public function defineProperties()
    {
        return [
            'effect' => [
                'title'       => 'Effect',
                'description' => 'Effect for image change',
                'type' => 'dropdown',
                'default'     => ''
            ],
            'fullscreen' => [
                'title'       => 'Full screen',
                'description' => 'Full screen view',
                'type' => 'checkbox',
                'default'     => ''
            ],
            'imagespeed' => [
                'title'       => 'Image change speed',
                'description' => 'Speed for image change',
                'default'     => 550
            ],
            'speed' => [
                'title'       => 'Speed',
                'description' => 'Speed',
                'default'     => 550
            ],
        ];
    }

    public function getEffectOptions()
    {
        return array('bounce' => 'bounce', 'flipX' => 'flipX', 'flipY' => 'flipY',  'rotate' => 'rotate', 'roll' => 'roll', 'fadeBig' => 'fadeBig', 'fade' =>'fade');
    }

    public function onRun()
    {
        $this->addCss('/plugins/shahiemseymor/gallery/assets/css/glisse.css');
        $this->addCss('/plugins/shahiemseymor/gallery/assets/css/app.css');
        $this->addJs('/plugins/shahiemseymor/gallery/assets/js/glisse.js');
    }

    public function onRender()
    {
        $galleries = new Galleries;
        $this->albums = $this->page['albums'] = Galleries::all()->toArray();
        $this->photos = $this->page['photos'] = $galleries;
        $this->speedGallery = $this->page['speedGallery'] = $this->property('speed', 550);
        $this->imagespeedGallery = $this->page['imagespeedGallery'] = $this->property('imagespeed', 550);
        $this->effect = $this->page['effect'] = $this->property('effect', 'bounce');
        $this->fullscreen = $this->page['fullscreen'] =  ($this->property('fullscreen') == 1 ? 'true' : $this->property('fullscreen', 'false'));
    }

}