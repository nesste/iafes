<?php

/* C:\xampp\htdocs\iafes/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_89d168838adb6ccb466c0a4f5f579787a7a5b30ec321c0cc1ad985226bb9f6cd extends Twig_Template
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
";
        // line 2
        echo $this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "content_html");
        echo "

<!--
<p class=\"info\">
    Posted
    ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subCategories"), "count")) {
            echo " in
        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subCategories"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 9
                echo "            <a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter((isset($context["blogSubCategoryPage"]) ? $context["blogSubCategoryPage"] : null), array("slug" => $this->getAttribute((isset($context["subCategory"]) ? $context["subCategory"] : null), "slug")));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subCategory"]) ? $context["subCategory"] : null), "name"), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 10
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        } else {
            echo " in
        ";
            // line 12
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
                // line 13
                echo "            <a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter((isset($context["blogCategoryPage"]) ? $context["blogCategoryPage"] : null), array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug")));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 14
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
            // line 15
            echo "    ";
        }
        // line 16
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "publshed_at"), "M d, Y"), "html", null, true);
        echo "
</p>
-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 15,  105 => 14,  96 => 13,  79 => 12,  74 => 11,  51 => 9,  34 => 8,  30 => 7,  22 => 2,  160 => 39,  156 => 37,  154 => 36,  144 => 33,  136 => 32,  132 => 30,  122 => 16,  112 => 26,  110 => 25,  98 => 21,  95 => 20,  85 => 18,  75 => 16,  72 => 15,  62 => 13,  60 => 10,  50 => 9,  40 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }
}
