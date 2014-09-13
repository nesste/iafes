<?php

/* /srv/www/iafes.org/public_html/themes/iafes/partials/iafes-nav.htm */
class __TwigTemplate_1cfd414147a90efc6fc308e355c9843bebdb98418a1a931683a76f309f07cd3b extends Twig_Template
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
\t<li><a data-toggle=\"collapse\" href=\"#dropdown-menu1\">History<i class=\"fa fa-caret-down\"></i></a>
\t\t<ul id=\"dropdown-menu1\" class=\"drop-mn unstyled nav panel-collapse collapse\">
\t\t\t<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/eata\">EATA</a></li>
\t\t\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/netties-conferences\">NETTIES Conferences</a></li>
\t\t\t<li><a data-toggle=\"collapse\" href=\"#dropdown-menu2\">Events<i class=\"fa fa-caret-down\"></i></a>
\t\t\t\t<ul id=\"dropdown-menu2\" class=\"drop-mn unstyled nav panel-collapse collapse\">
\t\t\t\t\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/photos\">Photos</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/blog }}\">Blog</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</li>
\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/statute\">Statute</a></li>
\t<li><a data-toggle=\"collapse\" href=\"#dropdown-menu3\">Members<i class=\"fa fa-caret-down\"></i></a>
\t\t<ul id=\"dropdown-menu3\" class=\"drop-mn unstyled nav panel-collapse collapse\">
\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/how-to-join\">How to join</a></li>
\t\t\t<li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/personal\">Personal</a></li>
\t\t\t<li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/institution\">Institution</a></li>
\t\t\t<li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/members-list\">Members list</a></li>
\t\t</ul>
\t</li>
\t
\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/board\">Board</a></li>
\t<li><a data-toggle=\"collapse\" href=\"#dropdown-menu4\">Members area<i class=\"fa fa-caret-down\"></i></a>
\t<ul id=\"dropdown-menu4\" class=\"drop-mn unstyled nav panel-collapse collapse\">
\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/user/general-assembly\">General Assembly</a></li>
\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/user/financial-info\">Financial info</a></li>
\t\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/user/information\">Information</a></li>
\t\t</ul>
\t</li>
\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/gregory-zeibekakis-scholarship\">Gregory Zeibekakis Scholarship</a></li>
\t<li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/iafes-association/meeting\">Meetings</a></li>
</ul><!-- end .second-nav -->";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/partials/iafes-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  91 => 32,  85 => 29,  81 => 28,  71 => 24,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  46 => 14,  38 => 9,  24 => 4,  84 => 23,  79 => 24,  77 => 27,  72 => 20,  70 => 11,  67 => 18,  61 => 16,  55 => 14,  53 => 13,  50 => 12,  48 => 11,  43 => 8,  41 => 6,  36 => 7,  34 => 8,  30 => 4,  28 => 5,  21 => 2,  19 => 1,);
    }
}
