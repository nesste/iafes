<?php

/* /srv/www/iafes.org/public_html/themes/iafes/pages/index.htm */
class __TwigTemplate_b88065a4529ada6f2536569d450fbe435fa54817ef1a46b2a6636bda41859e99 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('nav'        );
        // line 2
        echo "\t";
        if ((((((isset($context["page"]) ? $context["page"] : null) == "student-research-conference") || ((isset($context["page"]) ? $context["page"] : null) == "seminars-workshop")) || ((isset($context["page"]) ? $context["page"] : null) == "netties-conference")) || ((isset($context["page"]) ? $context["page"] : null) == "summer-schools"))) {
            // line 3
            echo "\t    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['crntPage'] = (isset($context["slug"]) ? $context["slug"] : null)            ;
            $context['__cms_partial_params']['appPath'] = (isset($context["path"]) ? $context["path"] : null)            ;
            $context['__cms_partial_params']['currentPage'] = (isset($context["page"]) ? $context["page"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction("globalNav.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } elseif (((((((isset($context["page"]) ? $context["page"] : null) == "iafes") || ((isset($context["page"]) ? $context["page"] : null) == "netties")) || ((isset($context["page"]) ? $context["page"] : null) == "library")) || ((isset($context["page"]) ? $context["page"] : null) == "homepage")) || ((isset($context["page"]) ? $context["page"] : null) == "home"))) {
            echo "\t
\t    ";
            // line 5
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home-nav.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "\t";
        }
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 8
        echo "

";
        // line 10
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 11
        echo "\t";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 13
        echo "

";
        // line 15
        echo $this->env->getExtension('CMS')->startBlock('pageName'        );
        // line 16
        echo "    ";
        if (((isset($context["slug"]) ? $context["slug"] : null) != "")) {
            // line 17
            echo "\t    ";
            if (((isset($context["menu"]) ? $context["menu"] : null) != "")) {
                // line 18
                echo "\t        <h1> ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo " > ";
                echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true);
                echo " </h1>
\t    ";
            } else {
                // line 20
                echo "\t        <h1>";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "</h1>
\t    ";
            }
            // line 22
            echo "\t";
        } elseif (((isset($context["page"]) ? $context["page"] : null) == "homepage")) {
            // line 23
            echo "\t    <h1>Welcome to IAFeS</h1>
\t";
        } else {
            // line 25
            echo "\t    <h1>";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</h1>
\t";
        }
        // line 15
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 28
        echo "
";
        // line 29
        echo $this->env->getExtension('CMS')->startBlock('mainContent'        );
        // line 30
        echo "\t";
        if (((isset($context["slug"]) ? $context["slug"] : null) == "")) {
            // line 31
            echo "\t   ";
            if (((isset($context["page"]) ? $context["page"] : null) == "homepage")) {
                // line 32
                echo "\t       ";
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("blogPosts"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 33
                echo "\t   ";
            } else {
                // line 34
                echo "\t       ";
                if (((((isset($context["page"]) ? $context["page"] : null) == "iafes-association") || ((isset($context["page"]) ? $context["page"] : null) == "training")) || ((isset($context["page"]) ? $context["page"] : null) == "projects"))) {
                    // line 35
                    echo "\t            ";
                    $context['__cms_component_params'] = [];
                    echo $this->env->getExtension('CMS')->componentFunction("blogPost"                    , $context['__cms_component_params']                    );
                    unset($context['__cms_component_params']);
                    // line 36
                    echo "\t       ";
                } else {
                    // line 37
                    echo "\t            ";
                    $context['__cms_component_params'] = [];
                    echo $this->env->getExtension('CMS')->componentFunction("blogCategory"                    , $context['__cms_component_params']                    );
                    unset($context['__cms_component_params']);
                    // line 38
                    echo "\t       ";
                }
                // line 39
                echo "\t   ";
            }
            // line 40
            echo "\t";
        } else {
            // line 41
            echo "\t    ";
            if (((isset($context["menu"]) ? $context["menu"] : null) == "")) {
                // line 42
                echo "\t        ";
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("blogPost"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 43
                echo "\t        <div class=\"facebook\">
\t            <ul class=\"list-inline\">
\t                <li>";
                // line 45
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("share"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                echo "</li>
\t                <li>";
                // line 46
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("like"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                echo "</li>         
\t            </ul>
\t        </div>
\t        <div class=\"disqus\">
\t            <div id=\"disqus_thread\"></div>
                <script type=\"text/javascript\">
                    var disqus_shortname = 'iafes-website';
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
\t        </div>
\t    ";
            } else {
                // line 61
                echo "\t\t\t";
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("subPost"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 62
                echo "\t    ";
            }
            // line 63
            echo "\t";
        }
        // line 29
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/srv/www/iafes.org/public_html/themes/iafes/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 29,  190 => 63,  187 => 62,  182 => 61,  162 => 46,  156 => 45,  152 => 43,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  135 => 38,  130 => 37,  127 => 36,  122 => 35,  119 => 34,  116 => 33,  111 => 32,  108 => 31,  105 => 30,  103 => 29,  100 => 28,  98 => 15,  92 => 25,  88 => 23,  85 => 22,  79 => 20,  71 => 18,  68 => 17,  65 => 16,  63 => 15,  59 => 13,  57 => 10,  52 => 11,  50 => 10,  46 => 8,  44 => 1,  41 => 6,  37 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
