<?php

/* C:\xampp\htdocs\iafes-licenta/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_e2092ff443719b37a1d3ac5b6894c8021e1934618ed1b7321d3ed7e068f82c26 extends Twig_Template
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

        <div style=\"margin-top:20px;\" class=\"col-md-12\">
            ";
            // line 6
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "\t\t\t<div class=\"forgot-password\">Forgot your password? <a href=\"";
            echo $this->env->getExtension('CMS')->appFilter("/");
            echo "/iafes-association/user/reset-password\">click here </a>to reset it!</div>
        </div>
<!--
        <div class=\"col-md-6\">
            <h3>Register</h3>
            ";
            // line 12
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::register")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "        </div>
-->
    </div>

";
        } else {
            // line 18
            echo "
    ";
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "
    ";
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  61 => 21,  58 => 20,  54 => 19,  51 => 18,  44 => 13,  27 => 6,  62 => 13,  57 => 14,  55 => 13,  52 => 12,  50 => 9,  45 => 10,  43 => 9,  40 => 12,  38 => 5,  33 => 6,  31 => 7,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }
}
