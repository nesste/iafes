<?php

/* C:\xampp\htdocs\iafes-licenta/plugins/rainlab/blog/components/category/default.htm */
class __TwigTemplate_99e23e74b07f07a2e4b2b9a3a09661e785212dba1ef8e6771bd531966d4bd4ba extends Twig_Template
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
        echo "<ul class=\"post-list\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogPosts"]) ? $context["blogPosts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <li>
            <h3><a href=\"";
            // line 4
            echo $this->env->getExtension('CMS')->pageFilter((isset($context["blogPostPage"]) ? $context["blogPostPage"] : null), array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "name"), "html", null, true);
            echo "</a></h3>

<!--
            <p class=\"info\">
                Posted
                ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories"), "count")) {
                echo " in ";
            }
            // line 10
            echo "                ";
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
                // line 11
                echo "                    <a href=\"";
                echo $this->env->getExtension('CMS')->appFilter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 12
                echo "                ";
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
            // line 13
            echo "                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "publshed_at"), "M d, Y"), "html", null, true);
            echo "
            </p>
-->         <p class=\"content-blk\">
                ";
            // line 16
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt")) {
                // line 17
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt"), "html", null, true);
                echo "
                ";
            } else {
                // line 19
                echo "                    ";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content");
                echo "
                ";
            }
            // line 21
            echo "            </p>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["blogNoPostsMessage"]) ? $context["blogNoPostsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>

";
        // line 28
        if (($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getLastPage") > 1)) {
            // line 29
            echo "    <ul class=\"pagination\">
        ";
            // line 30
            if (($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") > 1)) {
                // line 31
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array("page" => ($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getLastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 35
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") == (isset($context["page"]) ? $context["page"] : null))) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 36
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array("page" => (isset($context["page"]) ? $context["page"] : null)));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
        ";
            // line 40
            if (($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getLastPage") > $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage"))) {
                // line 41
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array("page" => ($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 43
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/plugins/rainlab/blog/components/category/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 39,  151 => 36,  146 => 35,  133 => 31,  128 => 29,  106 => 21,  100 => 19,  92 => 16,  71 => 12,  44 => 10,  187 => 45,  181 => 43,  179 => 42,  176 => 41,  165 => 40,  147 => 33,  141 => 30,  139 => 33,  135 => 27,  119 => 22,  113 => 24,  107 => 18,  81 => 12,  55 => 10,  30 => 4,  27 => 3,  22 => 2,  160 => 37,  154 => 36,  144 => 33,  136 => 32,  132 => 30,  122 => 26,  112 => 26,  110 => 25,  98 => 14,  95 => 13,  75 => 16,  60 => 12,  50 => 9,  40 => 9,  32 => 5,  221 => 35,  218 => 69,  215 => 68,  211 => 67,  208 => 66,  188 => 52,  182 => 51,  178 => 49,  173 => 43,  170 => 47,  167 => 41,  164 => 45,  161 => 44,  156 => 36,  153 => 35,  148 => 41,  145 => 32,  142 => 34,  137 => 38,  134 => 37,  131 => 30,  129 => 35,  126 => 28,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 17,  97 => 24,  94 => 17,  91 => 22,  89 => 21,  85 => 13,  83 => 16,  78 => 17,  76 => 16,  72 => 11,  70 => 1,  67 => 12,  62 => 11,  59 => 10,  54 => 9,  51 => 9,  47 => 7,  42 => 6,  34 => 5,  31 => 4,  24 => 4,  21 => 2,  19 => 1,);
    }
}
