<?php

/* /srv/www/iafes.org/public_html/themes/iafes/partials/globalNav.htm */
class __TwigTemplate_dc8237ef06c412f0350288bd2b01f5052c9f0586500e77ecbe5ebb4da43a0a17 extends Twig_Template
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
            echo "\t    <li><a href=\"http://vicadis.net/courses\" target=\"_blank\">Access to course materials in VICADIS</a></li>
\t";
        }
        // line 39
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/partials/globalNav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 39,  156 => 37,  154 => 36,  144 => 33,  136 => 32,  132 => 30,  122 => 28,  112 => 26,  110 => 25,  98 => 21,  95 => 20,  85 => 18,  75 => 16,  72 => 15,  62 => 13,  60 => 12,  50 => 9,  40 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }
}
