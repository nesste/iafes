<?php namespace RainLab\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use RainLab\Blog\Models\subCategory;

class subCategories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'subCategories');
    
    }

     public function onRefreshPreview()
    {
        $data = post('Category');

        $previewHtml = Category::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }
}