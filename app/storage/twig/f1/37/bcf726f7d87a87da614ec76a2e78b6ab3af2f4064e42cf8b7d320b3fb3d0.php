<?php

/* C:\xampp\htdocs\iafes/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_f137bcf726f7d87a87da614ec76a2e78b6ab3af2f4064e42cf8b7d320b3fb3d0 extends Twig_Template
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
            ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "                <h3><a href=\"";
                echo $this->env->getExtension('CMS')->appFilter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"));
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "name"), "html", null, true);
                echo "</a></h3>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "            <p class=\"info\">
                Posted
                ";
            // line 9
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "count")) {
                echo " in
                    ";
                // line 10
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
                    echo "                        <a href=\"";
                    echo $this->env->getExtension('CMS')->appFilter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                        echo ", ";
                    }
                    // line 12
                    echo "                    ";
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
                echo "                ";
            }
            // line 14
            echo "                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "publshed_at"), "M d, Y"), "html", null, true);
            echo "
            </p>
            <p class=\"content-blk\"> 
                ";
            // line 17
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt")) {
                // line 18
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt"), "html", null, true);
                echo "
                ";
            } else {
                // line 20
                echo "                   ";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content");
                echo " 
                ";
            }
            // line 22
            echo "            </p>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["blogNoPostsMessage"]) ? $context["blogNoPostsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</ul>

";
        // line 29
        if (($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getLastPage") > 1)) {
            // line 30
            echo "
    <ul class=\"pagination\">
        ";
            // line 32
            if (($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") > 1)) {
                // line 33
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array("page" => ($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 35
            echo "
        ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getLastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") == (isset($context["page"]) ? $context["page"] : null))) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 38
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
            // line 41
            echo "
        ";
            // line 42
            if (($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getLastPage") > $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage"))) {
                // line 43
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array("page" => ($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "getCurrentPage") + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 45
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 45,  181 => 43,  179 => 42,  176 => 41,  165 => 38,  147 => 33,  141 => 30,  139 => 29,  135 => 27,  119 => 22,  113 => 20,  107 => 18,  81 => 12,  55 => 10,  30 => 4,  27 => 3,  22 => 2,  160 => 37,  154 => 36,  144 => 33,  136 => 32,  132 => 30,  122 => 28,  112 => 26,  110 => 25,  98 => 14,  95 => 13,  75 => 16,  60 => 12,  50 => 9,  40 => 6,  32 => 5,  221 => 35,  218 => 69,  215 => 68,  211 => 67,  208 => 66,  188 => 52,  182 => 51,  178 => 49,  173 => 48,  170 => 47,  167 => 46,  164 => 45,  161 => 44,  156 => 36,  153 => 35,  148 => 41,  145 => 32,  142 => 39,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 25,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 17,  97 => 24,  94 => 23,  91 => 22,  89 => 21,  85 => 18,  83 => 16,  78 => 17,  76 => 16,  72 => 11,  70 => 1,  67 => 12,  62 => 13,  59 => 10,  54 => 9,  51 => 9,  47 => 7,  42 => 6,  34 => 5,  31 => 4,  24 => 4,  21 => 2,  19 => 1,);
    }
}
