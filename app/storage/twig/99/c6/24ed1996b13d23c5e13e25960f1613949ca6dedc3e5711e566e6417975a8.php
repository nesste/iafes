<?php

/* /srv/www/iafes.org/public_html/plugins/octodevel/octomail/components/template/default.htm */
class __TwigTemplate_99c624ed1996b13d23c5e13e25960f1613949ca6dedc3e5711e566e6417975a8 extends Twig_Template
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
        echo "<form role=\"form\"
      data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onOctoMailSent\"
      data-request-update=\"'";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::confirm': '.confirm-container'\"
      data-request-success=\"\$('.form-groups').slideUp(1000)\">

    <div class=\"form-groups\">
\t<div class=\"form-group\">
\t    <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Enter name\">
\t</div>
\t<div class=\"form-group\">
\t    <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\">
\t</div>
\t<div class=\"form-group\">
\t    <input type=\"text\" class=\"form-control\" value=\"\"  name=\"phone\" placeholder=\"Enter phone\">
\t</div>
\t<div class=\"form-group\">
\t    <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Enter Subject\">
\t</div>
\t<div class=\"form-group\">
\t    <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Enter Message\" cols=\"30\" rows=\"10\"></textarea>
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Send</button>
    </div>

    <div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/octodevel/octomail/components/template/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  294 => 125,  290 => 124,  286 => 123,  282 => 122,  278 => 121,  274 => 120,  270 => 119,  262 => 113,  258 => 112,  254 => 110,  250 => 109,  245 => 106,  241 => 104,  237 => 103,  234 => 102,  231 => 101,  227 => 100,  221 => 96,  219 => 95,  214 => 92,  208 => 90,  200 => 88,  198 => 87,  189 => 80,  184 => 77,  180 => 76,  175 => 73,  173 => 72,  170 => 71,  166 => 70,  162 => 68,  159 => 67,  155 => 65,  151 => 64,  144 => 61,  141 => 60,  136 => 59,  133 => 58,  128 => 57,  126 => 56,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  65 => 24,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
