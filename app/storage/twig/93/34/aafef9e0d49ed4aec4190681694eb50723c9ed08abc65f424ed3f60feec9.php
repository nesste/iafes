<?php

/* /srv/www/iafes.org/public_html/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_9334aafef9e0d49ed4aec4190681694eb50723c9ed08abc65f424ed3f60feec9 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
                echo $this->env->getExtension('System')->appFilter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"));
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
                    echo $this->env->getExtension('System')->appFilter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"));
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
            <span class=\"content-blk\"> 
                ";
            // line 17
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt")) {
                // line 18
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt"), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 20
                echo "                   ";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content");
                echo " 
                ";
            }
            // line 22
            echo "            </span>
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
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getLastPage") > 1)) {
            // line 30
            echo "    <ul class=\"pagination\">
        ";
            // line 31
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") > 1)) {
                // line 32
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getLastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") == (isset($context["page"]) ? $context["page"] : null))) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 37
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => (isset($context["page"]) ? $context["page"] : null)));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
        ";
            // line 41
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getLastPage") > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage"))) {
                // line 42
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "baseFileName"), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "getCurrentPage") + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 44
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 44,  180 => 42,  178 => 41,  175 => 40,  164 => 37,  159 => 36,  155 => 35,  146 => 32,  139 => 29,  126 => 25,  113 => 20,  107 => 18,  95 => 13,  81 => 12,  72 => 11,  55 => 10,  51 => 9,  47 => 7,  34 => 5,  27 => 3,  30 => 4,  26 => 3,  22 => 2,  193 => 29,  190 => 63,  187 => 62,  182 => 61,  162 => 46,  156 => 45,  152 => 34,  147 => 42,  144 => 31,  141 => 30,  138 => 39,  135 => 27,  130 => 37,  127 => 36,  122 => 35,  119 => 22,  116 => 33,  111 => 32,  108 => 31,  105 => 17,  103 => 29,  100 => 28,  98 => 14,  92 => 25,  88 => 23,  85 => 22,  79 => 20,  71 => 18,  68 => 17,  65 => 16,  63 => 15,  59 => 13,  57 => 10,  52 => 11,  50 => 10,  46 => 8,  44 => 1,  41 => 6,  37 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
