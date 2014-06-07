<?php

/* C:\xampp\htdocs\iafes-licenta/themes/iafes/pages/login.htm */
class __TwigTemplate_7f3262b0f6deac0a6bd0f4ea5a4799a404475e8c3c3183f61bc5474e82e5bf66 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('nav'        );
        // line 2
        echo "\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("iafes-nav.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 1
        echo $this->env->getExtension('CMS')->endBlock();
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 6
        echo "\t";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo $this->env->getExtension('CMS')->endBlock();
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('CMS')->startBlock('pageName'        );
        // line 10
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "</h1>
";
        // line 9
        echo $this->env->getExtension('CMS')->endBlock();
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('CMS')->startBlock('mainContent'        );
        // line 14
        echo "\t";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo $this->env->getExtension('CMS')->endBlock();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/themes/iafes/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 14,  55 => 13,  52 => 12,  50 => 9,  45 => 10,  43 => 9,  40 => 8,  38 => 5,  33 => 6,  31 => 5,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }
}
