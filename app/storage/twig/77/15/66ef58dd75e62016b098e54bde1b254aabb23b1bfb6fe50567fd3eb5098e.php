<?php

/* C:\xampp\htdocs\iafes-licenta/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_771566ef58dd75e62016b098e54bde1b254aabb23b1bfb6fe50567fd3eb5098e extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("onUpdate", array("model" => (isset($context["user"]) ? $context["user"] : null))));
        echo "

<div style=\"margin-top:20px;\">
    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("name"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("email"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountAddress\">Address</label>
        <input name=\"Address\" type=\"text\" class=\"form-control\" id=\"accountAddress\" value=\"";
        // line 16
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("address"));
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
        // line 31
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array());
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 31,  43 => 16,  35 => 11,  27 => 6,  19 => 1,);
    }
}
