<?php

/* WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig */
class __TwigTemplate_c7ff86f93302caaa8dc2d940ff59e74fdb9a9775356946dfa1eb08bdb0602e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet_extend' => array($this, 'block_stylesheet_extend'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebMetaCommonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "WebMetaCommonBundle:Tournoi:form.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheet_extend($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/warbot.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/styleTest.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "tableaux des rencontres";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
    <center><h1>tableaux des rencontres</h1></center>
        <div class=\"row\">
                <div class=\"col-md-8\">
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP"))) - 1)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "                        <div class=\"row\">
                            <div class=\"row\">
                                <div class=\"col-md-2 col-md-offset-1 struct\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-2 col-md-offset-1 struct\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                        ";
            // line 26
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2) == 0)) {
                // line 27
                echo "                            ";
                if ((twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) == 0)) {
                    // line 28
                    echo "                                <div class=\"row\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2 col-md-offset-3 struct\">?</div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-2 col-md-offset-3 struct\">?</div>
                                    </div>
                                </div>
                            ";
                } else {
                    // line 37
                    echo "                                ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) >= (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1))) {
                        // line 38
                        echo "                                    <div class=\"row\">
                                        <div class=\"row\">
                                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1), array(), "array"), 0, array(), "array"), "html", null, true);
                        echo "</div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 43
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1), array(), "array"), 1, array(), "array"), "html", null, true);
                        echo "</div>
                                        </div>
                                    </div>
                                ";
                    } else {
                        // line 47
                        echo "                                    <div class=\"row\">
                                        <div class=\"row\">
                                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 0, array(), "array"), "html", null, true);
                        echo "</div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 1, array(), "array"), "html", null, true);
                        echo "</div>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 56
                    echo "                            ";
                }
                // line 57
                echo "                        ";
            }
            // line 58
            echo "                        ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == (twig_length_filter($this->env, (isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP"))) / 2))) {
                // line 59
                echo "                            ";
                if ((twig_length_filter($this->env, (isset($context["liste_RencF"]) ? $context["liste_RencF"] : $this->getContext($context, "liste_RencF"))) == 0)) {
                    // line 60
                    echo "                                <div class=\"row\">
                                    <div class=\"col-md-2 col-md-offset-5 struct\">?</div>
                                    <div class=\"col-md-2 col-md-offset-5 struct\">?</div>
                                </div>
                            ";
                } else {
                    // line 65
                    echo "                                <div class=\"row\">
                                    <div class=\"col-md-2 col-md-offset-5 struct\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencF"]) ? $context["liste_RencF"] : $this->getContext($context, "liste_RencF")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
                    echo "</div>
                                    <div class=\"col-md-2 col-md-offset-5 struct\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencF"]) ? $context["liste_RencF"] : $this->getContext($context, "liste_RencF")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
                    echo "</div>
                                </div>
                            ";
                }
                // line 70
                echo "                        ";
            }
            // line 71
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </div>
                <div class=\"col-md-4\">
                    ";
        // line 74
        if (((isset($context["gagnant"]) ? $context["gagnant"] : $this->getContext($context, "gagnant")) != "")) {
            // line 75
            echo "                    <div class=\"row\">
                        <div class=\"col-md-* \"><center>LE GAGNANT EST <uppercase>";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["gagnant"]) ? $context["gagnant"] : $this->getContext($context, "gagnant")), "html", null, true);
            echo "</uppercase></center></div>
                        <div class=\"col-md-* \"><center><img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/coupe.jpg"), "html", null, true);
            echo "\" width=\"200px\" height=\"200px\"/></center></div>
                    </div>
                     ";
        }
        // line 80
        echo "                </div>
        </div>


        ";
        // line 84
        if (((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")) == "true")) {
            // line 85
            echo "            <h3>gestion du tournoi</h3>
            ";
            // line 87
            echo "            ";
            $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
            // line 88
            echo "            ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
        ";
        }
        // line 90
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 90,  229 => 88,  226 => 87,  223 => 85,  221 => 84,  215 => 80,  209 => 77,  205 => 76,  202 => 75,  200 => 74,  196 => 72,  182 => 71,  179 => 70,  173 => 67,  169 => 66,  166 => 65,  159 => 60,  156 => 59,  153 => 58,  150 => 57,  147 => 56,  140 => 52,  134 => 49,  130 => 47,  123 => 43,  117 => 40,  113 => 38,  110 => 37,  99 => 28,  96 => 27,  94 => 26,  88 => 23,  82 => 20,  78 => 18,  61 => 17,  55 => 13,  52 => 12,  46 => 10,  40 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
