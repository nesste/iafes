<?php

/* /srv/www/iafes.org/public_html/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_5b87b59ab83c861ca08f1acd582ac4af2c3c8993a6e3c9481c9de6265e8de5c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((!(isset($context["user"]) ? $context["user"] : null))) {
            // line 2
            echo "
    <div class=\"row\">

        <div class=\"col-md-12\" style=\"margin-top:20px;\">
            ";
            // line 6
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "        </div>

    </div>

";
        } else {
            // line 12
            echo "
    ";
            // line 13
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "
    ";
            // line 15
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 15,  45 => 14,  41 => 13,  38 => 12,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
