<?php

/* C:\xampp\htdocs\iafes-licenta/themes/iafes/partials/search-advertising.htm */
class __TwigTemplate_819565017df80ac9421a14f271d1f02f4fb50b67c0cb99bd15e14c3fcaa03fd6 extends Twig_Template
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
        echo "<form class=\"search-form\" action=\"";
        echo $this->env->getExtension('CMS')->appFilter("/search");
        echo "/\" method=\"GET\">
\t<input type=\"text\" name=\"search\" value=\"\"  id=\"search-value\" placeholder=\"Search\"/>
\t<input type=\"submit\" value=\"\" id=\"submit-search\" />
</form>
<ul class=\"unstyled advertising\">
\t<li><a href=\"#\"><img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/1.jpg");
        echo "\"></a></li>
\t<li><a href=\"#\"><img src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/2.jpg");
        echo "\"></a></li>
\t<li><a href=\"#\"><img src=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/3.jpg");
        echo "\"></a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/themes/iafes/partials/search-advertising.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  32 => 7,  28 => 6,  33 => 7,  29 => 6,  246 => 111,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 105,  214 => 99,  210 => 98,  206 => 96,  202 => 95,  197 => 92,  195 => 91,  189 => 87,  183 => 84,  168 => 74,  166 => 73,  159 => 69,  152 => 67,  138 => 61,  136 => 60,  130 => 57,  120 => 50,  109 => 45,  101 => 43,  93 => 41,  65 => 24,  56 => 18,  43 => 11,  39 => 10,  35 => 9,  187 => 86,  181 => 83,  179 => 42,  176 => 41,  165 => 38,  160 => 37,  147 => 33,  141 => 30,  139 => 29,  135 => 27,  119 => 22,  113 => 46,  107 => 18,  98 => 14,  95 => 13,  81 => 12,  55 => 10,  27 => 7,  30 => 4,  26 => 3,  22 => 2,  219 => 35,  216 => 69,  213 => 68,  208 => 67,  188 => 52,  182 => 51,  178 => 49,  173 => 77,  170 => 47,  167 => 46,  164 => 45,  161 => 70,  156 => 68,  153 => 35,  148 => 41,  145 => 64,  142 => 63,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 25,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 44,  97 => 42,  94 => 23,  91 => 22,  89 => 40,  85 => 39,  83 => 16,  78 => 17,  76 => 16,  72 => 11,  70 => 1,  67 => 12,  62 => 11,  59 => 10,  54 => 9,  51 => 9,  47 => 12,  42 => 6,  34 => 5,  31 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }
}
