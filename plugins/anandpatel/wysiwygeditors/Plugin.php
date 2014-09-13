<?php namespace AnandPatel\WysiwygEditors;

use System\Classes\PluginBase;
use App;
use Backend;
use Illuminate\Foundation\AliasLoader;
use Event;
use AnandPatel\WysiwygEditors\Models\Settings;
use System\Classes\PluginManager;
use Cms\Classes\Theme;

/**
 * WysiwygEditors Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Wysiwyg Editors',
            'description' => 'Inject your Favorite Wysiwyg Editor to CMS and other Code Editor',
            'author'      => 'Anand Patel'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Wysiwyg Editors',
                'description' => 'Configure Wysiwyg Editors preferences.',
                'icon'        => 'icon-pencil-square-o',
                'class'       => 'AnandPatel\WysiwygEditors\Models\Settings',
                'order'       => 100
            ]
        ];
    }


    public function boot()
    {
        Event::listen('backend.form.extendFields', function($form)
        {
            /*
             * Check for the installed plugin if install then extends fields for that
             */
            if ($form->model instanceof \AnandPatel\WysiwygEditors\Models\Settings)
            {
                if (!($theme = Theme::getEditTheme()))
                {
                    throw new ApplicationException(Lang::get('cms::lang.theme.edit.not_found'));
                }


                if(PluginManager::instance()->hasPlugin('RainLab.Pages'))
                {
                    $form->addFields([
                        'static_page_as_wysiwyg' => [
                            'label' => 'RainLab Static Pages',
                            'type'=> 'switch',
                            'span'=> 'left',
                            'default'=> 'false',
                            'comment'=> 'Use Wysiwyg editor in RainLab Static Pages plugin as page editor'
                        ]
                    ]);
                }

                if(PluginManager::instance()->hasPlugin('RainLab.Blog'))
                {
                    $form->addFields([
                            'blog_as_wysiwyg' => [
                                'label'     => 'RainLab Blog',
                                'type'      => 'switch',
                                'span'      => 'left',
                                'default'   => 'false',
                                'comment'   => 'Use Wysiwyg editor in RainLab blog plugin as post editor'
                            ]
                    ]);
                }

                if(PluginManager::instance()->hasPlugin('Autumn.Pages'))
                {
                    $form->addFields([
                            'autumn_page_as_wysiwyg' => [
                                'label' => 'Autumn Pages',
                                'type'=> 'switch',
                                'span'=> 'left',
                                'default'=> 'false',
                                'comment'=> 'Use Wysiwyg editor in Autumn page plugin as page editor'
                            ]
                    ]);
                }
            }

             if(Settings::get('all_codeeditor_as_wysiwyg', false))
             {
                 useWysiwyg($form);
             }
             else if(Settings::get('all_codeeditor_except_page_layout_as_wysiwyg', false))
             {
                 if(get_class($form->config->model) != 'Cms\Classes\Layout' && get_class($form->config->model) != 'Cms\Classes\Page' )
                 {
                     useWysiwyg($form);
                 }
             }
             else{
                    if(Settings::get('cms_content_as_wysiwyg', false) && get_class($form->config->model) == 'Cms\Classes\Content')
                    {
                        useWysiwyg($form);
                    }

                    if(Settings::get('cms_partial_as_wysiwyg', false) && get_class($form->config->model) == 'Cms\Classes\Partial')
                    {
                        useWysiwyg($form);
                    }

                    if(Settings::get('cms_layout_as_wysiwyg', false) && get_class($form->config->model) == 'Cms\Classes\Layout')
                    {
                        useWysiwyg($form);
                    }

                    if(Settings::get('cms_page_as_wysiwyg', false) && get_class($form->config->model) == 'Cms\Classes\Page')
                    {
                        useWysiwyg($form);
                    }

                    if(Settings::get('blog_as_wysiwyg', false) && $form->model instanceof \RainLab\Blog\Models\Post)
                    {
                        useWysiwyg($form);
                    }

                    if(Settings::get('autumn_page_as_wysiwyg', false) && $form->model instanceof \Autumn\Pages\Models\Page)
                    {
                        useWysiwyg($form);
                    }
                     if(Settings::get('static_page_as_wysiwyg', false) && $form->model instanceof \RainLab\Pages\Classes\Page)
                     {
                         useWysiwyg($form);
                     }
             }
        });

        function useWysiwyg($form)
        {
            foreach ($form->getFields() as $field )
            {
                if(!empty($field->config['type']))
                {
                    if($field->config['type'] == 'codeeditor' || $field->config['type'] == 'Eein\Wysiwyg\FormWidgets\Trumbowyg' || $field->config['type'] == 'richeditor')
                    {
                        if(Settings::instance()->editor == "richeditor")
                            $field->config['type'] = $field->config['widget'] = 'richeditor';
                        else
                            $field->config['type'] = $field->config['widget'] = 'AnandPatel\WysiwygEditors\FormWidgets\Editor';

                        return;
                    }
                }
            }
        }
    }
}

