<?php namespace RainLab\Blog;

use Backend;
use Controller;
use System\Classes\PluginBase;
use RainLab\Blog\Classes\TagProcessor;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Blog',
            'description' => 'A robust blogging platform.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-pencil'
        ];
    }

    public function registerComponents()
    {
        return [
            'RainLab\Blog\Components\Post' => 'blogPost',
            'RainLab\Blog\Components\Posts' => 'blogPosts',
            'RainLab\Blog\Components\Categories' => 'blogCategories',
            'RainLab\Blog\Components\Category' => 'blogCategory',
            'RainLab\Blog\Components\Subcategories' => 'blogSubCategories',
            'RainLab\Blog\Components\Subcategory' => 'blogSubCategory',
            'RainLab\Blog\Components\Subpost' => 'subPost'
        ];
    }

    public function registerNavigation()
    {
        return [
            'blog' => [
                'label'       => 'Blog',
                'url'         => Backend::url('rainlab/blog/posts'),
                'icon'        => 'icon-pencil',
                'permissions' => ['blog.*'],
                'order'       => 500,

                'sideMenu' => [
                    'posts' => [
                        'label'       => 'Posts',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('rainlab/blog/posts'),
                        'permissions' => ['blog.access_posts'],
                    ],
                    'subposts' => [
                        'label'       => 'Sub posts',
                        'icon'        => 'icon-list-alt',
                        'url'         => Backend::url('rainlab/blog/subposts'),
                        'permissions' => ['blog.access_subposts'],
                    ],
                    'categories' => [
                        'label'       => 'Categories',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('rainlab/blog/categories'),
                        'permissions' => ['blog.access_categories'],
                    ],
                    'subcategories' => [
                        'label'       => 'Sub categories',
                        'icon'        => 'icon-th-list',
                        'url'         => Backend::url('rainlab/blog/subcategories'),
                        'permissions' => ['blog.access_subcategories'],
                    ],
                    'tags' => [
                        'label'       => 'Tags',
                        'icon'        => 'oc-icon-tags',
                        'url'         => Backend::url('rainlab/blog/tags'),
                        'permissions' => ['blog.access_tags'],
                    ]
                ]

            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'RainLab\Blog\FormWidgets\Preview' => [
                'label' => 'Preview',
                'alias' => 'preview'
            ]
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register()
    {
        /*
         * Register the image tag processing callback
         */

        TagProcessor::instance()->registerCallback(function($input, $preview){
            if (!$preview)
                return $input;

            return preg_replace('|\<img alt="([0-9]+)" src="image"([^>]*)\/>|m',
                '<span class="image-placeholder" data-index="$1">
                    <span class="dropzone">
                        <span class="label">Click or drop an image...</span>
                        <span class="indicator"></span>
                    </span>
                    <input type="file" class="file" name="image[$1]"/>
                    <input type="file" class="trigger"/>
                </span>', 
            $input);
        });
    }
}