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
        echo $this->env->getExtension('System')->appFilter("/home/iafes");
        echo "\">IAFeS</a></li>
\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('System')->appFilter("/home/netties");
        echo "\">NETTIES</a></li>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('System')->appFilter("/home/library");
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
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
