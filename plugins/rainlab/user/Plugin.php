<?php namespace RainLab\User;

use App;
use Backend;
use Controller;
use System\Classes\PluginBase;
use RainLab\User\Classes\TagProcessor;
use Illuminate\Foundation\AliasLoader;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'User',
            'description' => 'Front-end user management.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-user'
        ];
    }

    public function register()
    {
        $alias = AliasLoader::getInstance();
        $alias->alias('Auth', 'RainLab\User\Facades\Auth');

        App::singleton('user.auth', function() {
            return \RainLab\User\Classes\AuthManager::instance();
        });
    }

    public function registerComponents()
    {
        return [
            'RainLab\User\Components\Session'       => 'session',
            'RainLab\User\Components\Account'       => 'account',
            'RainLab\User\Components\ResetPassword' => 'resetPassword',
        ];
    }

    public function registerNavigation()
    {
        return [
            'user' => [
                'label'       => 'Users',
                'url'         => Backend::url('rainlab/user/users'),
                'icon'        => 'icon-user',
                'permissions' => ['user:*'],
                'order'       => 500,

                'sideMenu' => [
                    'users' => [
                        'label'       => 'All Users',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('rainlab/user/users'),
                        'permissions' => ['user:access_users'],
                    ],

                    'locations' => [
                        'label'       => 'All Countries',
                        'icon'        => 'icon-globe',
                        'url'         => Backend::url('rainlab/user/locations'),
                        'permissions' => ['user:access_locations'],
                    ],
                     'universities' => [
                        'label'       => 'All Universities',
                        'icon'        => 'icon-globe',
                        'url'         => Backend::url('rainlab/user/universities'),
                        'permissions' => ['user:access_universities'],
                    ],
                    'informations' => [
                        'label'       => 'User Information',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('rainlab/user/informations'),
                        'permissions' => ['user.access_informations'],
                    ],
                    'assemblies' => [
                        'label'       => 'User General Assembly',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('rainlab/user/assemblies'),
                        'permissions' => ['user.access_assemblies'],
                    ],
                    'financials' => [
                        'label'       => 'User Financial',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('rainlab/user/financials'),
                        'permissions' => ['user.access_financials'],
                    ],

                ]

            ]
        ];
    }

     public function registerFormWidgets()
    {
        return [
            'RainLab\User\FormWidgets\Preview' => [
                'label' => 'Preview',
                'alias' => 'preview'
            ]
        ];
    }


    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'User Settings',
                'description' => 'Manage user based settings.',
                'category'    => 'Users',
                'icon'        => 'icon-cog',
                'class'       => 'RainLab\User\Models\Settings',
                'sort'        => 100
            ],
            'locations' => [
                'label'       => 'Locations',
                'description' => 'Manage available user countries and states.',
                'category'    => 'Users',
                'icon'        => 'icon-globe',
                'url'         => Backend::url('rainlab/user/locations'),
                'sort'        => 100
            ],
            'universities' => [
                'label'       => 'Universities',
                'description' => 'Manage available user universities.',
                'category'    => 'Users',
                'icon'        => 'icon-globe',
                'url'         => Backend::url('rainlab/user/universities'),
                'sort'        => 100
            ],
            'informations' => [
                'label'       => 'User Information',
                'description' => 'Manage available user informations',
                'category'    => 'Users',
                'icon'        => 'icon-user',
                'url'         => Backend::url('rainlab/user/informations'),
                'sort'        => 100
            ],
             'assemblies' => [
                'label'       => 'User General Assembly',
                'description' => 'Manage available user general assemblies',
                'category'    => 'Users',
                'icon'        => 'icon-user',
                'url'         => Backend::url('rainlab/user/assemblies'),
                'sort'        => 100
            ],
             'financials' => [
                'label'       => 'User Financial',
                'description' => 'Manage available user financial',
                'category'    => 'Users',
                'icon'        => 'icon-user',
                'url'         => Backend::url('rainlab/user/financials'),
                'sort'        => 100
            ]

        ];
    }

}