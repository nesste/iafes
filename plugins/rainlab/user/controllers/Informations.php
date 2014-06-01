<?php namespace RainLab\User\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use RainLab\User\Models\Information;

class Informations extends Controller
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

        BackendMenu::setContext('RainLab.User', 'user', 'informations');
    }

}