<?php

/* C:\xampp\htdocs\iafes-licenta/plugins/rainlab/blog/components/subpost/default.htm */
class __TwigTemplate_72bcc62de6674851bbbb4633a249ee3ec6e885bd426a99241d969fbee93d9710 extends Twig_Template
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
        echo "
";
        // line 2
        echo $this->getAttribute((isset($context["subPostBlog"]) ? $context["subPostBlog"] : null), "content_html");
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/plugins/rainlab/blog/components/subpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
