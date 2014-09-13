<?php

/* /srv/www/iafes.org/public_html/themes/iafes/pages/search.htm */
class __TwigTemplate_fae640737c63e495f1210b87e69f05eb3431aa8132084b6c9425f7460d05aab8 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 2
        echo "\t";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('CMS')->startBlock('pageName'        );
        // line 6
        echo "    <ul class=\"list-inline\">
        <li><h1>Search results for: </h1></li>
        <li><span> ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo " </span></li>
    </ul>
   
";
        // line 5
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('CMS')->startBlock('mainContent'        );
        // line 14
        echo "\t";
        if ((twig_length_filter($this->env, (isset($context["template"]) ? $context["template"] : null)) != "0")) {
            // line 15
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["template"]) ? $context["template"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 16
                echo "            ";
                echo $this->getAttribute((isset($context["template"]) ? $context["template"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t";
        } else {
            // line 19
            echo "\t    <p>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</p>
\t";
        }
        // line 13
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  70 => 19,  67 => 18,  58 => 16,  53 => 15,  50 => 14,  48 => 13,  45 => 12,  43 => 5,  37 => 8,  33 => 6,  31 => 5,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }
}
