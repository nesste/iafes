<?php

/* /srv/www/iafes.org/public_html/themes/iafes/partials/footer.htm */
class __TwigTemplate_c507a798f6ffb257607c24f572cc749d06017077cb9db0d8e52c78189a4928a2 extends Twig_Template
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
        echo "<footer>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-4\">
\t\t\t\t<p>© Copyright 2014 IAFeS</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-sm-8 col-xs-8\">
\t\t\t\t<ul class=\"list-inline unstyled\">
\t\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('System')->appFilter("/about-iafes");
        echo "\">About IAFeS</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('System')->appFilter("/privacy-policy");
        echo "\">Privacy Policy</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('System')->appFilter("/contact-us");
        echo "\">Contact us</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</footer>";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  28 => 8,  33 => 7,  29 => 6,  246 => 111,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 105,  214 => 99,  210 => 98,  206 => 96,  202 => 95,  197 => 92,  195 => 91,  189 => 87,  183 => 84,  181 => 83,  173 => 77,  168 => 74,  166 => 73,  161 => 70,  145 => 64,  142 => 63,  136 => 60,  120 => 50,  109 => 45,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  56 => 18,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  186 => 44,  180 => 42,  178 => 41,  175 => 40,  164 => 37,  159 => 69,  155 => 35,  146 => 32,  139 => 29,  126 => 25,  113 => 46,  107 => 18,  95 => 13,  81 => 12,  72 => 11,  55 => 10,  51 => 9,  47 => 12,  34 => 5,  27 => 7,  30 => 4,  26 => 3,  22 => 2,  193 => 29,  190 => 63,  187 => 86,  182 => 61,  162 => 46,  156 => 68,  152 => 67,  147 => 42,  144 => 31,  141 => 30,  138 => 61,  135 => 27,  130 => 57,  127 => 36,  122 => 35,  119 => 22,  116 => 33,  111 => 32,  108 => 31,  105 => 44,  103 => 29,  100 => 28,  98 => 14,  92 => 25,  88 => 23,  85 => 39,  79 => 20,  71 => 18,  68 => 17,  65 => 24,  63 => 15,  59 => 13,  57 => 10,  52 => 11,  50 => 10,  46 => 8,  44 => 1,  41 => 6,  37 => 5,  32 => 9,  24 => 3,  21 => 2,  19 => 1,);
    }
}
