<?php

/* /srv/www/iafes.org/public_html/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_16814f7526c297df796ec2830f7a97cdaaf74af5d65bf40f2b52a08f385546b8 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate", array("model" => (isset($context["user"]) ? $context["user"] : null))));
        echo "

<div style=\"margin-top:20px;\">
    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountAddress\">Address</label>
        <input name=\"Address\" type=\"text\" class=\"form-control\" id=\"accountAddress\" value=\"";
        // line 16
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "address"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>
</div>

";
        // line 32
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 32,  43 => 16,  35 => 11,  27 => 6,  19 => 1,);
    }
}
