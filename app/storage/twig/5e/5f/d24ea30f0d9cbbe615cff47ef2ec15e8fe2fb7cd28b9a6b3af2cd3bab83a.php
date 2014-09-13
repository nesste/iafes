<?php

/* C:\xampp\htdocs\iafes-licenta/themes/iafes/partials/home-nav.htm */
class __TwigTemplate_5e5fd24ea30f0d9cbbe615cff47ef2ec15e8fe2fb7cd28b9a6b3af2cd3bab83a extends Twig_Template
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
\t<li><a href=\"";
        // line 2
        echo $this->env->getExtension('CMS')->appFilter("/home/iafes");
        echo "\">IAFeS</a></li>
\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('CMS')->appFilter("/home/netties");
        echo "\">NETTIES</a></li>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('CMS')->appFilter("/home/library");
        echo "\">Library</a></li>
</ul><!-- end .second-nav -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/themes/iafes/partials/home-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  219 => 35,  216 => 69,  213 => 68,  208 => 67,  188 => 52,  182 => 51,  178 => 49,  173 => 48,  170 => 47,  167 => 46,  164 => 45,  161 => 44,  156 => 43,  153 => 42,  148 => 41,  145 => 40,  142 => 39,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 34,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 26,  97 => 24,  94 => 23,  91 => 22,  89 => 21,  85 => 19,  83 => 16,  78 => 17,  76 => 16,  72 => 14,  70 => 1,  67 => 12,  62 => 11,  59 => 10,  54 => 9,  51 => 8,  47 => 7,  42 => 6,  34 => 5,  31 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
