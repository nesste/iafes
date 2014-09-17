<?php

/* /srv/www/iafes.org/public_html/themes/iafes/layouts/static.htm */
class __TwigTemplate_de56febc0c8386b953edc8ccd7d247f345b32e0d5f19a632d5aab6e705500d83 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html lang=\"en\">
<head>
<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title"), "html", null, true);
        echo "</title>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/reset.css"));
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css"));
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/font-awesome.min.css"));
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/style.css"));
        echo "\" rel=\"stylesheet\">
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"ROR\" href=\"";
        // line 12
        echo $this->env->getExtension('System')->appFilter("/rss");
        echo "\" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
     <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
</head>
<body>
<div id=\"main-wrapper\">
\t<div id=\"activeLogin\"></div>
\t<div class=\"container\">
\t\t<header>
\t\t\t<div class=\"navbar-header\">
\t          <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('System')->appFilter("/");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\" /></a>
\t        </div>
\t\t</header>
\t\t<div class=\"collapse-menu\">
\t\t\t<div class=\"row collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t<div class=\"col-md 6 col-xs-6\">
\t\t\t\t\t<p>Menu</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md 6 col-xs-6\">
\t\t\t          <i class=\"fa fa-bars\"></i>
\t\t\t\t</div>
\t\t\t</div>
        </div>
\t\t<div class=\"navbar-collapse collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->env->getExtension('System')->appFilter("/");
        echo "\">Home</a></li>
\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('System')->appFilter("/iafes-association");
        echo "\">IAFeS Association</a></li>
\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('System')->appFilter("/seminars-workshop");
        echo "\">Seminars/Workshop</a></li>
\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('System')->appFilter("/netties-conference");
        echo "\">NETTIES Conference</a></li>
\t\t\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('System')->appFilter("/summer-schools");
        echo "\">Summer Schools</a></li>
\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('System')->appFilter("/student-research-conference");
        echo "\">Student Research Conference</a></li>
\t\t\t\t<li><a href=\"";
        // line 45
        echo $this->env->getExtension('System')->appFilter("/projects");
        echo "\">Projects</a></li>
\t\t\t\t<li><a href=\"";
        // line 46
        echo $this->env->getExtension('System')->appFilter("/training");
        echo "\">Training</a></li>
\t        </ul>
        </div>
\t</div>
    <div>
    \t<div class=\"container\">\t\t
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3 col-lg-3 col-sm-3\">
    \t\t\t\t<div class=\"row\">
    \t\t\t\t\t<div class=\"col-md-12 col-lg-12\">
    \t\t\t\t\t    ";
        // line 56
        if ((($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "iafes association") || ((isset($context["token"]) ? $context["token"] : null) != ""))) {
            // line 57
            echo "    \t\t\t\t\t    \t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("iafes-nav"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 58
            echo "    \t\t\t\t\t    ";
        } elseif (((($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "IAFeS") || ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "netties")) || ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "library"))) {
            // line 59
            echo "    \t\t\t\t\t    \t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home-nav"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 60
            echo "    \t\t\t\t\t    ";
        } else {
            // line 61
            echo "\t    \t\t\t\t\t   \t";
            if (((isset($context["news"]) ? $context["news"] : null) != "1")) {
                echo " 
\t        \t\t\t\t\t    <div class=\"news\">
\t        \t\t\t\t\t        <h2>News</h2>
\t        \t\t\t\t\t        ";
                // line 64
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("blogPosts"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 65
                echo "\t        \t\t\t\t\t    </div>
\t        \t\t\t\t\t";
            }
            // line 67
            echo "    \t\t\t\t\t    ";
        }
        // line 68
        echo "    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"col-md-12 col-lg-12\">
    \t\t\t\t\t\t";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("social-links.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "    \t\t\t\t\t</div>
    \t\t\t\t\t";
        // line 72
        if ((((($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "iafes association") || ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "IAFeS")) || ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "netties")) || ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "library"))) {
            // line 73
            echo "\t    \t\t\t\t\t<div class=\"col-md-12 col-lg-12\">
\t    \t\t\t\t\t    <div class=\"news\">
\t    \t\t\t\t\t        <h2>News</h2>
\t    \t\t\t\t\t        ";
            // line 76
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("blogPosts"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 77
            echo "\t    \t\t\t\t\t    </div>
\t    \t\t\t\t\t</div>
    \t\t\t\t\t";
        }
        // line 80
        echo "    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-7 col-lg-7 col-sm-7 col-xs-12\">
    \t\t\t\t<div class=\"main-content\">
        \t\t\t\t<div class=\"row pageInfo\">
        \t\t\t\t    <div class=\"col-md-7 col-lg-7 col-sm-7 col-xs-7\">
                                <h1>
                                \t";
        // line 87
        if (((isset($context["token"]) ? $context["token"] : null) != "")) {
            // line 88
            echo "                                \t\t";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo " > ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title"), "html", null, true);
            echo "
                                \t";
        } else {
            // line 90
            echo "                                \t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title"), "html", null, true);
            echo "
                                \t";
        }
        // line 92
        echo "                                </h1>
                            </div>
                            <div class=\"col-md-5 col-lg-5 col-sm-5 col-xs-5 login-user\">
                                ";
        // line 95
        $context['__placeholder_user_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('user', $context['__placeholder_user_default_contents']);
        unset($context['__placeholder_user_default_contents']);        // line 96
        echo "                            </div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
            \t\t\t\t<div class=\"col-md-12 col-xs-12 col-lg-12\">
                                ";
        // line 100
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 101
        echo "                                ";
        if (($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "title") == "Contact us")) {
            // line 102
            echo "                                    <div class=\"contact-us-now\">
                                        ";
            // line 103
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("mailTemplate"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 104
            echo "                                    </div>
                                ";
        }
        // line 106
        echo "                            </div>
                        </div>
    \t\t\t\t</div>
    \t\t\t\t";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "    \t\t\t</div>
    \t\t\t<div class=\"col-md-2 col-lg-2 col-sm-2 col-xs-12\">
    \t\t\t\t";
        // line 112
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("search-advertising.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 113
        echo "    \t\t\t</div>
    \t\t</div><!-- end .row -->
    \t</div><!-- end .container -->
    </div><!-- end #page -->
</div><!-- end #main-wrapper -->
<!-- scripts -->
<script type=\"text/javascript\" src=\"";
        // line 119
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 120
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 121
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/modernizr.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 122
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 123
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/js.js");
        echo "\"></script>
";
        // line 124
        echo '<script src="'. Request::getBasePath() .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath() .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath() .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 125
        echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54717963-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/layouts/static.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 125,  290 => 124,  286 => 123,  282 => 122,  278 => 121,  274 => 120,  270 => 119,  262 => 113,  258 => 112,  254 => 110,  250 => 109,  245 => 106,  241 => 104,  237 => 103,  234 => 102,  231 => 101,  227 => 100,  221 => 96,  219 => 95,  214 => 92,  208 => 90,  200 => 88,  198 => 87,  189 => 80,  184 => 77,  180 => 76,  175 => 73,  173 => 72,  170 => 71,  166 => 70,  162 => 68,  159 => 67,  155 => 65,  151 => 64,  144 => 61,  141 => 60,  136 => 59,  133 => 58,  128 => 57,  126 => 56,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  65 => 24,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
