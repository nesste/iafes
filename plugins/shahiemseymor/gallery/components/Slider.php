<?php namespace ShahiemSeymor\Gallery\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Cms\Classes\CmsPropertyHelper;
use ShahiemSeymor\Gallery\Models\Galleries;
use ShahiemSeymor\Gallery\Models\Settings;

class Slider extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Slider',
            'description' => 'Display a slider.'
        ];
    }

    public function defineProperties()
    {
        return [
            'gallery' => [
                'title'       => 'Gallery',
                'description' => 'Gallery to display',
                'type'        => 'dropdown',
                'default'     => ''
            ],
            'width' => [
                'title'       => 'Width',
                'description' => 'Width of slider',
                'default'     => 900
            ],
            'height' => [
                'title'       => 'Height',
                'description' => 'Height of slider',
                'default'     => 150
            ],
            'fade' => [
                'title'       => 'Fade',
                'description' => 'Fade effect on the slider',
                'type' => 'checkbox',
                'default'     => ''
            ],
            'fadespeed' => [
                'title'       => 'Fade speed',
                'description' => 'Fade speed',
                'default'     => 400
            ],
        ];
    }

    public function getGalleryOptions()
    {
        return Galleries::all()->lists('title', 'id');
    }

    public function onRun()
    {
        $this->addCss('/plugins/shahiemseymor/gallery/assets/css/slider.css');
        $this->addCss('/plugins/shahiemseymor/gallery/assets/css/font-awesome.css');
        $this->addJs('/plugins/shahiemseymor/gallery/assets/js/jquery.slides.min.js');
    }

    public function onRender()
    {
        $this->galleryId = $this->page['galleryId'] = $this->property('gallery');
        $this->photos = $this->page['photos'] = new Galleries;
        $this->width = $this->page['width'] = $this->property('width', 940);
        $this->height = $this->page['height'] = $this->property('height', 240);
        $this->fade = $this->page['fade'] = $this->property('fade');
        $this->fadespeed = $this->page['fadespeed'] = $this->property('fadespeed', 800);
    }

}