<?php

/* C:\xampp\htdocs\iafes-licenta/themes/iafes/partials/globalNav.htm */
class __TwigTemplate_f6c01025d53a0c962532f4b8c659c9e0c8e219099b09ae32feec3034fa370f46 extends Twig_Template
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
        echo "<ul class=\"unstyled second-nav nav\">
\t<li><a data-toggle=\"collapse\" href=\"#dropdown-menu1\">Information<i class=\"fa fa-caret-down\"></i></a>
\t\t<ul id=\"dropdown-menu1\" class=\"drop-mn unstyled nav panel-collapse collapse\">
\t\t\t<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
        echo "/venue\">Venue</a></li>
\t\t\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
        echo "/travel\">Travel</a></li>
\t\t\t<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
        echo "/accommodation\">Accommodation</a></li>
\t\t</ul>
\t</li>
\t<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
        echo "/register\">Register</a></li>
\t<li><a data-toggle=\"collapse\" href=\"#dropdown-menu2\">Programme<i class=\"fa fa-caret-down\"></i></a>
\t\t<ul id=\"dropdown-menu2\" class=\"drop-mn unstyled nav panel-collapse collapse\">
\t\t\t";
        // line 12
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "summer-schools")) {
            // line 13
            echo "\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
            echo "/courses\">Courses</a></li>
\t\t\t";
        } else {
            // line 15
            echo "\t\t\t    ";
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "student-research-conference")) {
                // line 16
                echo "\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
                echo "/conference\">Conference</a></li>
\t\t\t    ";
            } else {
                // line 18
                echo "\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
                echo "/workhop\">Workshop</a></li>
\t\t\t    ";
            }
            // line 20
            echo "\t\t\t";
        }
        // line 21
        echo "\t\t\t    <li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
        echo "/cultural\">Cultural</a></li>
\t\t\t
\t\t</ul>
\t</li>
\t";
        // line 25
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "summer-schools")) {
            // line 26
            echo "\t    <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
            echo "/professors\">Professors</a></li>
\t";
        } else {
            // line 28
            echo "\t    <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
            echo "/speakers\">Speakers</a></li>
\t";
        }
        // line 30
        echo "\t<li><a data-toggle=\"collapse\" href=\"#dropdown-menu3\">Events<i class=\"fa fa-caret-down\"></i></a>
\t\t<ul id=\"dropdown-menu3\" class=\"drop-mn unstyled nav panel-collapse collapse\">
\t\t\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
        echo "/photos\">Photos</a></li>
\t\t\t<li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["crntPage"]) ? $context["crntPage"] : null), "html", null, true);
        echo "/blog\">Blog</a></li>
\t\t</ul>
\t</li>
\t";
        // line 36
        if (((isset($context["vicadis"]) ? $context["vicadis"] : null) == "1")) {
            // line 37
            echo "\t    <li><a href=\"http://vicadis.net/courses\">Access to course materials in VICADIS</a></li>
\t";
        }
        // line 39
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/themes/iafes/partials/globalNav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 39,  154 => 36,  144 => 33,  136 => 32,  132 => 30,  122 => 28,  112 => 26,  110 => 25,  98 => 21,  95 => 20,  75 => 16,  60 => 12,  50 => 9,  40 => 6,  32 => 5,  221 => 35,  218 => 69,  215 => 68,  211 => 67,  208 => 66,  188 => 52,  182 => 51,  178 => 49,  173 => 48,  170 => 47,  167 => 46,  164 => 45,  161 => 44,  156 => 37,  153 => 42,  148 => 41,  145 => 40,  142 => 39,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 34,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 26,  97 => 24,  94 => 23,  91 => 22,  89 => 21,  85 => 18,  83 => 16,  78 => 17,  76 => 16,  72 => 15,  70 => 1,  67 => 12,  62 => 13,  59 => 10,  54 => 9,  51 => 8,  47 => 7,  42 => 6,  34 => 5,  31 => 4,  24 => 4,  21 => 2,  19 => 1,);
    }
}
