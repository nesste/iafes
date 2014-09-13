<?php

/* /srv/www/iafes.org/public_html/plugins/rainlab/blog/components/subpost/default.htm */
class __TwigTemplate_1dfd3d8b1dd8154f8821c4f2d7bf389fb81cbc0153601bac97a2ef89ff87d51b extends Twig_Template
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
        echo "
<div class=\"content\">";
        // line 2
        echo $this->getAttribute((isset($context["subPostBlog"]) ? $context["subPostBlog"] : null), "content_html");
        echo "</div>



";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["subPostBlog"]) ? $context["subPostBlog"] : null), "featured_images"), "count")) {
            // line 7
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subPostBlog"]) ? $context["subPostBlog"] : null), "featured_images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "            <p>
                <img
                    data-src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "filename"), "html", null, true);
                echo "\"
                    src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "path"), "html", null, true);
                echo "\"
                    alt=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description"), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/rainlab/blog/components/subpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  50 => 13,  46 => 12,  42 => 11,  38 => 9,  34 => 8,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
