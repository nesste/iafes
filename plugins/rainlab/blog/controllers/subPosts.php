<?php namespace RainLab\Blog\Controllers;

use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use RainLab\Blog\Models\Subpost;

class Subposts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'subposts');
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview.css');
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview-theme-default.css');

        $this->addCss('/plugins/rainlab/blog/assets/vendor/prettify/prettify.css');
        $this->addCss('/plugins/rainlab/blog/assets/vendor/prettify/theme-desert.css');

        $this->addJs('/plugins/rainlab/blog/assets/js/post-form.js');
        $this->addJs('/plugins/rainlab/blog/assets/vendor/prettify/prettify.js');
    }

    public function index()
    {
        $this->vars['postsTotal'] = Subpost::count();

        $this->asExtension('ListController')->index();
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if (!$post = Subpost::find($postId))
                    continue;

                $post->delete();
            }

            Flash::success('Successfully deleted those posts.');
        }

        return $this->listRefresh();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->published)
            return 'safe disabled';
    }

    public function onRefreshPreview()
    {
        $data = post('Post');

        $previewHtml = Subpost::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }
}