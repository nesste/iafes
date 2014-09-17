<?php

/* /srv/www/iafes.org/public_html/plugins/octodevel/octomail/components/template/confirm.htm */
class __TwigTemplate_8a2a0c68e735cf4731d40332d62998e941918862079885663e683f3a98f38a89 extends Twig_Template
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
        if (((isset($context["result"]) ? $context["result"] : null) == true)) {
            // line 2
            echo "    <h4>Email Sent successfully</h4>
    <p>
        ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["confirmation_text"]) ? $context["confirmation_text"] : null), "html", null, true);
            echo "
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/octodevel/octomail/components/template/confirm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
