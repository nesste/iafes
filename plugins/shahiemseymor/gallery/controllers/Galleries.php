<?php namespace ShahiemSeymor\Gallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Galleries extends Controller
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
        BackendMenu::setContext('ShahiemSeymor.Gallery', 'gallery', 'gallery');
    }
}