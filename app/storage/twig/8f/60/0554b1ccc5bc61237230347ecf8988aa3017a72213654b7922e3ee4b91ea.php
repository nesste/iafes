<?php

/* /srv/www/iafes.org/public_html/themes/iafes/pages/iafes-association-menu.htm */
class __TwigTemplate_8f600554b1ccc5bc61237230347ecf8988aa3017a72213654b7922e3ee4b91ea extends Twig_Template
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
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 4
        echo "\t
\t
";
        // line 6
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 7
        echo "\t";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 8
        echo "\t


";
        // line 11
        echo $this->env->getExtension('CMS')->startBlock('pageName'        );
        // line 12
        echo "    <h1>
        ";
        // line 13
        if (((isset($context["title"]) ? $context["title"] : null) == "")) {
            // line 14
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "
        ";
        } else {
            // line 16
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
        ";
        }
        // line 18
        echo "    </h1>
";
        // line 11
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 20
        echo "


";
        // line 23
        echo $this->env->getExtension('CMS')->startBlock('mainContent'        );
        // line 24
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/pages/iafes-association-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  79 => 24,  77 => 23,  72 => 20,  70 => 11,  67 => 18,  61 => 16,  55 => 14,  53 => 13,  50 => 12,  48 => 11,  43 => 8,  41 => 6,  36 => 7,  34 => 6,  30 => 4,  28 => 1,  21 => 2,  19 => 1,);
    }
}
