<?php

/* C:\xampp\htdocs\iafes-licenta/themes/iafes/partials/social-links.htm */
class __TwigTemplate_009386948edbb42e61fffef830b0f3eae9bf1683cd486eddedf322ea46b41dc1 extends Twig_Template
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
\t<li><a href=\"https://twitter.com\" class=\"facebook\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
\t<li><a href=\"https://facebook.com\" class=\"twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
\t<li><a href=\"https://plus.google.com\" class=\"google-plus\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->appFilter("/feed/rss");
        echo "\" class=\"rss-feed\" ><i class=\"fa fa-rss\"></i></a></li>
\t<li><img src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/line.png");
        echo "\"  alt=\"\" /></li>
</ul><!-- end .social-links -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/themes/iafes/partials/social-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  246 => 111,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 105,  214 => 99,  210 => 98,  206 => 96,  202 => 95,  197 => 92,  195 => 91,  189 => 87,  183 => 84,  168 => 74,  166 => 73,  159 => 69,  152 => 67,  138 => 61,  136 => 60,  130 => 57,  120 => 50,  109 => 45,  101 => 43,  93 => 41,  65 => 24,  56 => 18,  43 => 11,  39 => 10,  35 => 9,  187 => 86,  181 => 83,  179 => 42,  176 => 41,  165 => 38,  160 => 37,  147 => 33,  141 => 30,  139 => 29,  135 => 27,  119 => 22,  113 => 46,  107 => 18,  98 => 14,  95 => 13,  81 => 12,  55 => 10,  27 => 7,  30 => 4,  26 => 3,  22 => 2,  219 => 35,  216 => 69,  213 => 68,  208 => 67,  188 => 52,  182 => 51,  178 => 49,  173 => 77,  170 => 47,  167 => 46,  164 => 45,  161 => 70,  156 => 68,  153 => 35,  148 => 41,  145 => 64,  142 => 63,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 25,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 44,  97 => 42,  94 => 23,  91 => 22,  89 => 40,  85 => 39,  83 => 16,  78 => 17,  76 => 16,  72 => 11,  70 => 1,  67 => 12,  62 => 11,  59 => 10,  54 => 9,  51 => 9,  47 => 12,  42 => 6,  34 => 5,  31 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }
}
