<?php

/* /srv/www/iafes.org/public_html/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_ddc6e901bd2b0a40b6553253090d9ba3a449b4f155993e31d69cdab1ac3105a2 extends Twig_Template
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
        echo "<div class=\"content\">";
        echo $this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "content_html");
        echo "</div>

";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "featured_images"), "count")) {
            // line 4
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "featured_images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "            <p>
                <img
                    data-src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "filename"), "html", null, true);
                echo "\"
                    src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "path"), "html", null, true);
                echo "\"
                    alt=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description"), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </div>
";
        }
        // line 16
        echo "
<!--<p class=\"info\">
    Posted
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories"), "count")) {
            echo " in
        ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 21
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 22
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        // line 24
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at"), "M d, Y"), "html", null, true);
        echo "
</p>
-->
";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 23,  86 => 21,  69 => 20,  65 => 19,  56 => 14,  46 => 10,  42 => 9,  38 => 8,  34 => 6,  30 => 5,  27 => 4,  25 => 3,  160 => 39,  156 => 37,  154 => 36,  144 => 33,  136 => 32,  132 => 30,  122 => 28,  112 => 24,  110 => 25,  98 => 21,  95 => 22,  85 => 18,  75 => 16,  72 => 15,  62 => 13,  60 => 16,  50 => 9,  40 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }
}
