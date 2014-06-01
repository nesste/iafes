<?php

/* C:\xampp\htdocs\iafes/themes/iafes/partials/footer.htm */
class __TwigTemplate_c78aaa83cc63ac4a5fd4c1adf55d63e16cac22b6dce48e5a832567caf4fd2313 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->appFilter("/page/about-iafes");
        echo "\">About IAFeS</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->appFilter("/page/privacy-policy");
        echo "\">Privacy Policy</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->appFilter("/page/contact-us");
        echo "\">Contact us</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes/themes/iafes/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  28 => 8,  33 => 7,  29 => 6,  246 => 111,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 105,  214 => 99,  210 => 98,  206 => 96,  202 => 95,  197 => 92,  195 => 91,  189 => 87,  183 => 84,  168 => 74,  166 => 73,  159 => 69,  152 => 67,  138 => 61,  130 => 57,  120 => 50,  109 => 45,  101 => 43,  93 => 41,  65 => 24,  56 => 18,  43 => 11,  39 => 10,  35 => 9,  187 => 86,  181 => 83,  179 => 42,  176 => 41,  165 => 38,  147 => 33,  141 => 30,  139 => 29,  135 => 27,  119 => 22,  113 => 46,  107 => 18,  81 => 12,  55 => 10,  30 => 4,  27 => 7,  22 => 2,  160 => 37,  154 => 36,  144 => 33,  136 => 60,  132 => 30,  122 => 28,  112 => 26,  110 => 25,  98 => 14,  95 => 13,  75 => 16,  60 => 12,  50 => 9,  40 => 6,  32 => 9,  221 => 35,  218 => 69,  215 => 68,  211 => 67,  208 => 66,  188 => 52,  182 => 51,  178 => 49,  173 => 77,  170 => 47,  167 => 46,  164 => 45,  161 => 70,  156 => 68,  153 => 35,  148 => 41,  145 => 64,  142 => 63,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 25,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 44,  97 => 42,  94 => 23,  91 => 22,  89 => 40,  85 => 39,  83 => 16,  78 => 17,  76 => 16,  72 => 11,  70 => 1,  67 => 12,  62 => 13,  59 => 10,  54 => 9,  51 => 9,  47 => 12,  42 => 6,  34 => 5,  31 => 8,  24 => 4,  21 => 2,  19 => 1,);
    }
}
