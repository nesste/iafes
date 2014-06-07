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
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
