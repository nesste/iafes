<?php
namespace AnandPatel\WysiwygEditors\FormWidgets;

use Backend\Classes\FormWidgetBase;
use AnandPatel\WysiwygEditors\Models\Settings;

class Editor extends FormWidgetBase{

    public function widgetDetails()
    {
        return [
            'name'        => 'Wysiwyg Editors',
            'description' => 'Renders a wysiwyg editor of user`s choice'
        ];
    }

    public function render()
    {
        $this->prepareVars();
        $editor = Settings::instance()->editor;
        return $this->makePartial($editor);
    }

    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->model->{$this->columnName};
    }

    public function loadAssets()
    {
        $editor = Settings::instance()->editor;

        if($editor=="tinymce")
            $this->addJs('tinymce/tinymce.min.js');

        if($editor=="ckeditor")
        {
            $this->addJs('ckeditor/ckeditor.js');
            $this->addJs('ckeditor/adapters/jquery.js');
        }
    }

} 