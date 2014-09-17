<?php

/* /srv/www/iafes.org/public_html/themes/iafes/partials/home-nav.htm */
class __TwigTemplate_7757a672d2f82264181a33fa60ee3e27c4e5ee6d46674ad9f430c04cf1dcfe09 extends Twig_Template
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
        echo $this->env->getExtension('System')->appFilter("/iafes");
        echo "\">IAFeS</a></li>
\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('System')->appFilter("/netties");
        echo "\">NETTIES</a></li>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('System')->appFilter("/library");
        echo "\">Library</a></li>
</ul><!-- end .second-nav -->";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/partials/home-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  193 => 29,  190 => 63,  187 => 62,  182 => 61,  162 => 46,  156 => 45,  152 => 43,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  135 => 38,  130 => 37,  127 => 36,  122 => 35,  119 => 34,  116 => 33,  111 => 32,  108 => 31,  105 => 30,  103 => 29,  100 => 28,  98 => 15,  92 => 25,  88 => 23,  85 => 22,  79 => 20,  71 => 18,  68 => 17,  65 => 16,  63 => 15,  59 => 13,  57 => 10,  52 => 11,  50 => 10,  46 => 8,  44 => 1,  41 => 6,  37 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
