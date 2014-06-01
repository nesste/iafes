<?php

/* C:\xampp\htdocs\iafes/themes/iafes/layouts/default.htm */
class __TwigTemplate_4cef45b202aefd100ccc77153c12595834b7f774b8fd4c54eaef6ed0905a5b1b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>October CMS - ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title"), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 8
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 9
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 11
        echo "\" rel=\"stylesheet\">
    </head>
    <body>

     
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 18
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 19
        echo "        </section>

        <!-- Scripts -->
        <script src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/app.js"));
        // line 25
        echo "\"></script>
        ";
        // line 26
        echo '<script src="'. Request::getBaseUrl() .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBaseUrl() .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBaseUrl() .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 27
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 28
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes/themes/iafes/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  65 => 27,  61 => 26,  58 => 25,  56 => 22,  51 => 19,  49 => 18,  40 => 11,  37 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
