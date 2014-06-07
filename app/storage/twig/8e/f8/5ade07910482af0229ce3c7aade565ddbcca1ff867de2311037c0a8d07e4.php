<?php

/* C:\xampp\htdocs\iafes-licenta/themes/iafes/pages/index.htm */
class __TwigTemplate_8ef85ade07910482af0229ce3c7aade565ddbcca1ff867de2311037c0a8d07e4 extends Twig_Template
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
        echo "    ";
        if (((isset($context["page"]) ? $context["page"] : null) == "iafes-association")) {
            // line 3
            echo "\t\t";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['crntPage'] = (isset($context["slug"]) ? $context["slug"] : null)            ;
            $context['__cms_partial_params']['appPath'] = (isset($context["path"]) ? $context["path"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction("iafes-nav.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "\t";
        } elseif ((((((isset($context["page"]) ? $context["page"] : null) == "student-research-conference") || ((isset($context["page"]) ? $context["page"] : null) == "seminars-workshop")) || ((isset($context["page"]) ? $context["page"] : null) == "netties-conference")) || ((isset($context["page"]) ? $context["page"] : null) == "summer-schools"))) {
            // line 5
            echo "\t    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['crntPage'] = (isset($context["slug"]) ? $context["slug"] : null)            ;
            $context['__cms_partial_params']['appPath'] = (isset($context["path"]) ? $context["path"] : null)            ;
            $context['__cms_partial_params']['currentPage'] = (isset($context["page"]) ? $context["page"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction("globalNav.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        } elseif (((((((isset($context["page"]) ? $context["page"] : null) == "iafes") || ((isset($context["page"]) ? $context["page"] : null) == "netties")) || ((isset($context["page"]) ? $context["page"] : null) == "library")) || ((isset($context["page"]) ? $context["page"] : null) == "homepage")) || ((isset($context["page"]) ? $context["page"] : null) == "home"))) {
            echo "\t
\t    ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home-nav.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "\t";
        } elseif (((isset($context["page"]) ? $context["page"] : null) == "projects")) {
            // line 9
            echo "\t\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("projects-nav.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "\t";
        } elseif (((isset($context["page"]) ? $context["page"] : null) == "training")) {
            // line 11
            echo "\t\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("training-nav.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "\t";
        }
        // line 1
        echo $this->env->getExtension('CMS')->endBlock();
        // line 14
        echo "

";
        // line 16
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 17
        echo "\t";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo $this->env->getExtension('CMS')->endBlock();
        // line 19
        echo "

";
        // line 21
        echo $this->env->getExtension('CMS')->startBlock('pageName'        );
        // line 22
        echo "    ";
        if (((isset($context["slug"]) ? $context["slug"] : null) != "")) {
            // line 23
            echo "\t    ";
            if (((isset($context["menu"]) ? $context["menu"] : null) != "")) {
                // line 24
                echo "\t        <h1> ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo " > ";
                echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true);
                echo " </h1>
\t    ";
            } else {
                // line 26
                echo "\t        <h1>";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "</h1>
\t    ";
            }
            // line 28
            echo "\t";
        } elseif (((isset($context["page"]) ? $context["page"] : null) == "homepage")) {
            // line 29
            echo "\t    <h1>Welcome to IAFeS</h1>
\t";
        } else {
            // line 31
            echo "\t    <h1>";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</h1>
\t";
        }
        // line 21
        echo $this->env->getExtension('CMS')->endBlock();
        // line 34
        echo "
";
        // line 35
        echo $this->env->getExtension('CMS')->startBlock('mainContent'        );
        // line 36
        echo "\t";
        if (((isset($context["slug"]) ? $context["slug"] : null) == "")) {
            // line 37
            echo "\t   ";
            if (((isset($context["page"]) ? $context["page"] : null) == "homepage")) {
                // line 38
                echo "\t       ";
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("blogPosts"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 39
                echo "\t   ";
            } else {
                // line 40
                echo "\t       ";
                if (((((isset($context["page"]) ? $context["page"] : null) == "iafes-association") || ((isset($context["page"]) ? $context["page"] : null) == "training")) || ((isset($context["page"]) ? $context["page"] : null) == "projects"))) {
                    // line 41
                    echo "\t            ";
                    $context['__cms_component_params'] = [];
                    echo $this->env->getExtension('CMS')->componentFunction("blogPost"                    , $context['__cms_component_params']                    );
                    unset($context['__cms_component_params']);
                    // line 42
                    echo "\t       ";
                } else {
                    // line 43
                    echo "\t            ";
                    $context['__cms_component_params'] = [];
                    echo $this->env->getExtension('CMS')->componentFunction("blogCategory"                    , $context['__cms_component_params']                    );
                    unset($context['__cms_component_params']);
                    // line 44
                    echo "\t       ";
                }
                // line 45
                echo "\t   ";
            }
            // line 46
            echo "\t";
        } else {
            // line 47
            echo "\t    ";
            if (((isset($context["menu"]) ? $context["menu"] : null) == "")) {
                // line 48
                echo "\t        ";
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("blogPost"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 49
                echo "\t        <div class=\"facebook\">
\t            <ul class=\"list-inline\">
\t                <li>";
                // line 51
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("share"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                echo "</li>
\t                <li>";
                // line 52
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
                // line 66
                echo "   
\t        ";
                // line 67
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('CMS')->componentFunction("subPost"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 68
                echo "\t    ";
            }
            // line 69
            echo "\t";
        }
        // line 35
        echo $this->env->getExtension('CMS')->endBlock();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\iafes-licenta/themes/iafes/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 35,  218 => 69,  215 => 68,  211 => 67,  208 => 66,  188 => 52,  182 => 51,  178 => 49,  173 => 48,  170 => 47,  167 => 46,  164 => 45,  161 => 44,  156 => 43,  153 => 42,  148 => 41,  145 => 40,  142 => 39,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 34,  124 => 21,  118 => 31,  114 => 29,  111 => 28,  105 => 26,  97 => 24,  94 => 23,  91 => 22,  89 => 21,  85 => 19,  83 => 16,  78 => 17,  76 => 16,  72 => 14,  70 => 1,  67 => 12,  62 => 11,  59 => 10,  54 => 9,  51 => 8,  47 => 7,  42 => 6,  34 => 5,  31 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
