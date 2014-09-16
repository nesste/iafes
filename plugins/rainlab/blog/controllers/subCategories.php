<?php namespace RainLab\Blog\Controllers;

use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use RainLab\Blog\Models\Subcategory;

class Subcategories extends Controller
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

        BackendMenu::setContext('RainLab.Blog', 'blog', 'subcategories');
    
    }

     public function onRefreshPreview()
    {
        $data = post('Category');

        $previewHtml = Category::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if (!$post = Subcategory::find($postId))
                    continue;

                $post->delete();
            }

            Flash::success('Successfully deleted those sub categories.');
        }

        return $this->listRefresh();
    }
}