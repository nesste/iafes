<?php

/* /srv/www/iafes.org/public_html/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_8bda6d3cae0b1498e2814e1baef027c3e3a57b1702f7dbf35e9f507cdff1b41b extends Twig_Template
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
        echo "<form
    data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userSigninEmail\" placeholder=\"Enter your email\">
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Enter your password\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/rainlab/user/components/account/signin.htm";
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  59 => 21,  56 => 20,  49 => 18,  42 => 13,  32 => 8,  62 => 13,  57 => 14,  55 => 13,  52 => 19,  50 => 9,  45 => 10,  43 => 9,  40 => 8,  38 => 12,  33 => 6,  31 => 5,  28 => 7,  26 => 1,  21 => 2,  19 => 1,);
    }
}
