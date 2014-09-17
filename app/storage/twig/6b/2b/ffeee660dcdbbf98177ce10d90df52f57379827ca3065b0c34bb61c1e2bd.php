<?php

/* /srv/www/iafes.org/public_html/plugins/alxy/facebook/components/share/default.htm */
class __TwigTemplate_6b2bffeee660dcdbbf98177ce10d90df52f57379827ca3065b0c34bb61c1e2bd extends Twig_Template
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
        echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "lang"), "html", null, true);
        echo "/sdk.js#xfbml=1&appId=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "appId"), "html", null, true);
        echo "&version=v2.0\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class=\"fb-share-button\"";
        // line 9
        echo $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "attributes");
        echo "></div>";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/alxy/facebook/components/share/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  109 => 23,  86 => 21,  69 => 20,  65 => 19,  56 => 14,  46 => 10,  42 => 9,  38 => 8,  34 => 9,  30 => 5,  27 => 4,  25 => 3,  160 => 39,  156 => 37,  154 => 36,  144 => 33,  136 => 32,  132 => 30,  122 => 28,  112 => 24,  110 => 25,  98 => 21,  95 => 22,  85 => 18,  75 => 16,  72 => 15,  62 => 13,  60 => 16,  50 => 9,  40 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }
}
