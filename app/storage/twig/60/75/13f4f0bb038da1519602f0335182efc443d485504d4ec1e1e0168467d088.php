<?php

/* C:\xampp\htdocs\iafes-licenta/themes/iafes/pages/usersection.htm */
class __TwigTemplate_607513f4f0bb038da1519602f0335182efc443d485504d4ec1e1e0168467d088 extends Twig_Template
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
        $context['__cms_partial_params']['crntPage'] = (isset($context["slug"]) ? $context["slug"] : null)        ;
        $context['__cms_partial_params']['appPath'] = (isset($context["path"]) ? $context["path"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("iafes-nav.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 1
        echo $this->env->getExtension('CMS')->endBlock();
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('CMS')->startBlock('pageName'        );
        // line 6
        echo "     <h1>";
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "</h1>
";
        // line 5
        echo $this->env->getExtension('CMS')->endBlock();
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('CMS')->startBlock('user'        );
        // line 10
        echo "    ";
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 11
            echo "        <p>Hello <a data-toggle=\"collapse\" href=\"#signOut\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "\" alt=\"\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name"), "html", null, true);
            echo "<i class=\"fa fa-caret-down\"></i></a></p>
        <ul id=\"signOut\" class=\"panel-collapse collapse\">
            <i class=\"fa fa-caret-up\"></i>
            <li><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/iafes-association/user/settings\">Settings</a></li>
\t\t\t<li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
\t\t</ul>\t
    ";
        }
        // line 9
        echo $this->env->getExtension('CMS')->endBlock();
        // line 19
        echo "
";
        // line 20
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 21
        echo "\t";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo $this->env->getExtension('CMS')->endBlock();
        // line 23
        echo "   
";
        // line 24
        echo $this->env->getExtension('CMS')->startBlock('mainContent'        );
        // line 25
        echo "    ";
        if (((isset($context["slug"]) ? $context["slug"] : null) == "settings")) {
            // line 26
            echo "        ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("account"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        ";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
    ";
        }
        // line 24
        echo $this->env->getExtension('CMS')->endBlock();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/themes/iafes/pages/usersection.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  96 => 28,  93 => 27,  88 => 26,  85 => 25,  83 => 24,  80 => 23,  78 => 20,  73 => 21,  71 => 20,  68 => 19,  66 => 9,  59 => 14,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  40 => 5,  35 => 6,  33 => 5,  30 => 4,  28 => 1,  21 => 2,  19 => 1,);
    }
}
