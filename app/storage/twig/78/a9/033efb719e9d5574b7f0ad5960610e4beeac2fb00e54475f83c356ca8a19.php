<?php

/* /srv/www/iafes.org/public_html/themes/iafes/partials/social-links.htm */
class __TwigTemplate_78a9033efb719e9d5574b7f0ad5960610e4beeac2fb00e54475f83c356ca8a19 extends Twig_Template
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
        echo "<ul class=\"list-inline social-links\">
\t<li><img src=\"";
        // line 2
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/line.png");
        echo "\"  alt=\"\" /></li>
\t<li><a href=\"https://facebook.com\" class=\"facebook\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
\t<li><a href=\"https://twitter.com\" class=\"twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
\t<li><a href=\"https://plus.google.com\" class=\"google-plus\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('System')->appFilter("/feed/rss");
        echo "\" class=\"rss-feed\" ><i class=\"fa fa-rss\"></i></a></li>
\t<li><img src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/line.png");
        echo "\"  alt=\"\" /></li>
</ul><!-- end .social-links -->";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/partials/social-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  246 => 111,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 105,  214 => 99,  210 => 98,  206 => 96,  202 => 95,  197 => 92,  195 => 91,  189 => 87,  183 => 84,  168 => 74,  166 => 73,  161 => 70,  159 => 69,  136 => 60,  120 => 50,  109 => 45,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  56 => 18,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  173 => 77,  167 => 41,  151 => 36,  146 => 35,  142 => 63,  133 => 31,  131 => 30,  128 => 29,  106 => 21,  94 => 17,  62 => 11,  40 => 9,  181 => 83,  179 => 42,  176 => 41,  165 => 40,  160 => 37,  153 => 35,  145 => 64,  139 => 33,  126 => 28,  113 => 46,  107 => 18,  95 => 13,  81 => 12,  72 => 11,  55 => 10,  51 => 9,  47 => 12,  34 => 5,  30 => 4,  27 => 7,  22 => 2,  193 => 29,  190 => 63,  187 => 86,  182 => 61,  162 => 39,  156 => 68,  152 => 67,  147 => 33,  144 => 41,  141 => 30,  138 => 61,  135 => 27,  130 => 57,  127 => 36,  122 => 26,  119 => 22,  116 => 33,  111 => 32,  108 => 31,  105 => 44,  103 => 29,  100 => 19,  98 => 14,  92 => 16,  88 => 23,  85 => 39,  79 => 20,  71 => 12,  68 => 17,  65 => 24,  63 => 15,  59 => 13,  57 => 10,  52 => 11,  50 => 10,  46 => 8,  44 => 10,  41 => 6,  37 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
