<?php

/* /srv/www/iafes.org/public_html/plugins/alxy/facebook/components/like/default.htm */
class __TwigTemplate_ca886b904e46d590f6fea80e93a00450444433a46a1473c7818e3018f44b8c5c extends Twig_Template
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
<div class=\"fb-like\"";
        // line 9
        echo $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "attributes");
        echo "></div>";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/plugins/alxy/facebook/components/like/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  122 => 16,  119 => 15,  105 => 14,  96 => 13,  79 => 12,  74 => 11,  60 => 10,  51 => 9,  34 => 9,  30 => 7,  22 => 2,  19 => 1,);
    }
}
