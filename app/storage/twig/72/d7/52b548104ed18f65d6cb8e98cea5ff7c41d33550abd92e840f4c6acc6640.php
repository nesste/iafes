<?php

/* /srv/www/iafes.org/public_html/themes/iafes/layouts/master.htm */
class __TwigTemplate_72d752b548104ed18f65d6cb8e98cea5ff7c41d33550abd92e840f4c6acc6640 extends Twig_Template
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
        echo $this->env->getExtension('System')->appFilter("/rss");
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
        echo '<script src="'. Request::getBasePath() .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath() .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath() .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 111
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
        return "/srv/www/iafes.org/public_html/themes/iafes/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 111,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 105,  214 => 99,  210 => 98,  206 => 96,  202 => 95,  197 => 92,  195 => 91,  189 => 87,  183 => 84,  168 => 74,  166 => 73,  161 => 70,  159 => 69,  136 => 60,  120 => 50,  109 => 45,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  56 => 18,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  173 => 77,  167 => 41,  151 => 36,  146 => 35,  142 => 63,  133 => 31,  131 => 30,  128 => 29,  106 => 21,  94 => 17,  62 => 11,  40 => 9,  181 => 83,  179 => 42,  176 => 41,  165 => 40,  160 => 37,  153 => 35,  145 => 64,  139 => 33,  126 => 28,  113 => 46,  107 => 18,  95 => 13,  81 => 12,  72 => 11,  55 => 10,  51 => 9,  47 => 12,  34 => 5,  30 => 4,  27 => 7,  22 => 2,  193 => 29,  190 => 63,  187 => 86,  182 => 61,  162 => 39,  156 => 68,  152 => 67,  147 => 33,  144 => 41,  141 => 30,  138 => 61,  135 => 27,  130 => 57,  127 => 36,  122 => 26,  119 => 22,  116 => 33,  111 => 32,  108 => 31,  105 => 44,  103 => 29,  100 => 19,  98 => 14,  92 => 16,  88 => 23,  85 => 39,  79 => 20,  71 => 12,  68 => 17,  65 => 24,  63 => 15,  59 => 13,  57 => 10,  52 => 11,  50 => 10,  46 => 8,  44 => 10,  41 => 6,  37 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
