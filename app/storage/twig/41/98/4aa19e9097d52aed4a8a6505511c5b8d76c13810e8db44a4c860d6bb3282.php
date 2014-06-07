<?php

/* C:\xampp\htdocs\iafes-licenta/plugins/rainlab/user/components/account/activation_check.htm */
class __TwigTemplate_41984aa19e9097d52aed4a8a6505511c5b8d76c13810e8db44a4c860d6bb3282 extends Twig_Template
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
        if ((!$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isActivated"))) {
            // line 2
            echo "
    <h3>Your email address has not yet been verified.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/plugins/rainlab/user/components/account/activation_check.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
