<?php

/* C:\xampp\htdocs\iafes/themes/iafes/layouts/master.htm */
class __TwigTemplate_0d8bdb64feecc227f6ebcd5834a42609296734ec4632dfb18a7e9a94e593f05f extends Twig_Template
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
<title>IAFeS</title>
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
        echo $this->env->getExtension('CMS')->appFilter("/rss");
        echo "\" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
     <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
</head>
<body data-page=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
<div id=\"main-wrapper\">
\t<div id=\"activeLogin\"></div>
\t<div class=\"container\">
\t\t<header>
\t\t\t<div class=\"navbar-header\">
\t          <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->appFilter("/");
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
        echo $this->env->getExtension('CMS')->appFilter("/");
        echo "\">Home</a></li>
\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('CMS')->appFilter("/iafes-association");
        echo "\">IAFeS Association</a></li>
\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('CMS')->appFilter("/seminars-workshop");
        echo "\">Seminars/Workshop</a></li>
\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('CMS')->appFilter("/netties-conference");
        echo "\">NETTIES Conference</a></li>
\t\t\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('CMS')->appFilter("/summer-schools");
        echo "\">Summer Schools</a></li>
\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('CMS')->appFilter("/student-research-conference");
        echo "\">Student Research Conference</a></li>
\t\t\t\t<li><a href=\"";
        // line 45
        echo $this->env->getExtension('CMS')->appFilter("/projects");
        echo "\">Projects</a></li>
\t\t\t\t<li><a href=\"";
        // line 46
        echo $this->env->getExtension('CMS')->appFilter("/training");
        echo "\">Training</a></li>
\t        </ul>
        </div>
\t</div>
    <div id=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "\">
    \t<div class=\"container\">\t\t
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3 col-lg-3 col-sm-3\">
    \t\t\t\t<div class=\"row\">
    \t\t\t\t\t<div class=\"col-md-12 col-lg-12\">
    \t\t\t\t\t    
    \t\t\t\t\t    ";
        // line 57
        if (((isset($context["news"]) ? $context["news"] : null) != "1")) {
            echo " 
        \t\t\t\t\t    <div class=\"news\">
        \t\t\t\t\t        <h2>News</h2>
        \t\t\t\t\t        ";
            // line 60
            $context['__placeholder_news_default_contents'] = null;            echo $this->env->getExtension('CMS')->displayBlock('news', $context['__placeholder_news_default_contents']);
            unset($context['__placeholder_news_default_contents']);            // line 61
            echo "        \t\t\t\t\t    </div>
    \t\t\t\t\t\t";
        } else {
            // line 63
            echo "    \t\t\t\t\t\t    ";
            $context['__placeholder_nav_default_contents'] = null;            echo $this->env->getExtension('CMS')->displayBlock('nav', $context['__placeholder_nav_default_contents']);
            unset($context['__placeholder_nav_default_contents']);            // line 64
            echo "    \t\t\t\t        ";
        }
        echo "\t 
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"col-md-12 col-lg-12\">
    \t\t\t\t\t\t";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("social-links.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "    \t\t\t\t\t</div>
    \t\t\t\t\t";
        // line 69
        if (((isset($context["news"]) ? $context["news"] : null) == "1")) {
            // line 70
            echo "        \t\t\t\t\t<div class=\"col-md-12 col-lg-12\">
        \t\t\t\t\t    <div class=\"news\">
        \t\t\t\t\t        <h2>News</h2>
        \t\t\t\t\t        ";
            // line 73
            $context['__placeholder_news_default_contents'] = null;            echo $this->env->getExtension('CMS')->displayBlock('news', $context['__placeholder_news_default_contents']);
            unset($context['__placeholder_news_default_contents']);            // line 74
            echo "        \t\t\t\t\t    </div>
        \t\t\t\t\t</div>
    \t\t\t\t\t";
        }
        // line 77
        echo "    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-7 col-lg-7 col-sm-7 col-xs-12\">
    \t\t\t\t<div class=\"main-content\">
        \t\t\t\t<div class=\"row pageInfo\">
        \t\t\t\t    <div class=\"col-md-6 col-lg-6 col-sm-6 col-xs-7\">
                                ";
        // line 83
        $context['__placeholder_pageName_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('pageName', $context['__placeholder_pageName_default_contents']);
        unset($context['__placeholder_pageName_default_contents']);        // line 84
        echo "                            </div>
                            <div class=\"col-md-6 col-lg-6 col-sm-6 col-xs-5 login-user\">
                                ";
        // line 86
        $context['__placeholder_user_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('user', $context['__placeholder_user_default_contents']);
        unset($context['__placeholder_user_default_contents']);        // line 87
        echo "                            </div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"row\">
            \t\t\t\t<div class=\"col-md-12 col-xs-12 col-lg-12\">
                                ";
        // line 91
        $context['__placeholder_mainContent_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('mainContent', $context['__placeholder_mainContent_default_contents']);
        unset($context['__placeholder_mainContent_default_contents']);        // line 92
        echo "                            </div>
                        </div>
    \t\t\t\t</div>
    \t\t\t\t";
        // line 95
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 96
        echo "    \t\t\t</div>
    \t\t\t<div class=\"col-md-2 col-lg-2 col-sm-2 col-xs-12\">
    \t\t\t\t";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("search-advertising.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 99
        echo "    \t\t\t</div>
    \t\t</div><!-- end .row -->
    \t</div><!-- end .container -->
    </div><!-- end #page -->
</div><!-- end #main-wrapper -->
<!-- scripts -->
<script type=\"text/javascript\" src=\"";
        // line 105
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 106
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/modernizr.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 108
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 109
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/js.js");
        echo "\"></script>
";
        // line 110
        echo '<script src="'. Request::getBaseUrl() .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBaseUrl() .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBaseUrl() .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 111
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes/themes/iafes/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 111,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 105,  214 => 99,  210 => 98,  206 => 96,  202 => 95,  197 => 92,  195 => 91,  189 => 87,  183 => 84,  168 => 74,  166 => 73,  159 => 69,  152 => 67,  138 => 61,  130 => 57,  120 => 50,  109 => 45,  101 => 43,  93 => 41,  65 => 24,  56 => 18,  43 => 11,  39 => 10,  35 => 9,  187 => 86,  181 => 83,  179 => 42,  176 => 41,  165 => 38,  147 => 33,  141 => 30,  139 => 29,  135 => 27,  119 => 22,  113 => 46,  107 => 18,  81 => 12,  55 => 10,  30 => 4,  27 => 7,  22 => 2,  160 => 37,  154 => 36,  144 => 33,  136 => 60,  132 => 30,  122 => 28,  112 => 26,  110 => 25,  98 => 14,  95 => 13,  75 => 16,  60 => 12,  50 => 9,  40 => 6,  32 => 5,  221 => 35,  218 => 69,  215 => 68,  211 => 67,  208 => 66,  188 => 52,  182 => 51,  178 => 49,  173 => 77,  170 => 47,  167 => 46,  164 => 45,  161 => 70,  156 => 68,  153 => 35,  148 => 41,  145 => 64,  142 => 63,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 25,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 44,  97 => 42,  94 => 23,  91 => 22,  89 => 40,  85 => 39,  83 => 16,  78 => 17,  76 => 16,  72 => 11,  70 => 1,  67 => 12,  62 => 13,  59 => 10,  54 => 9,  51 => 9,  47 => 12,  42 => 6,  34 => 5,  31 => 8,  24 => 4,  21 => 2,  19 => 1,);
    }
}
