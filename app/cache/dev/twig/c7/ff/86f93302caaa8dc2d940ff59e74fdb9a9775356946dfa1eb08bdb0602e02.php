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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebMetaCommonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet_extend($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/warbot.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    ";
        // line 10
        if (((isset($context["gagnant"]) ? $context["gagnant"] : $this->getContext($context, "gagnant")) == "")) {
            // line 11
            echo "        ";
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
                // line 12
                echo "            <div class=\"row\">
                <div class=\"row\">
                    <div class=\"col-md-2 struct\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 0, array(), "array"), "html", null, true);
                echo "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-2 struct\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 1, array(), "array"), "html", null, true);
                echo "</div>
                </div>
            </div>
            ";
                // line 20
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2) == 0)) {
                    // line 21
                    echo "                ";
                    if ((twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) == 0)) {
                        // line 22
                        echo "                    <div class=\"row\">
                        <div class=\"row\">
                            <div class=\"col-md-2 col-md-offset-3 struct\">?</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-2 col-md-offset-3 struct\">?</div>
                        </div>
                    </div>
                ";
                    } else {
                        // line 31
                        echo "                    ";
                        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) >= (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1))) {
                            // line 32
                            echo "                        <div class=\"row\">
                            <div class=\"row\">
                                <div class=\"col-md-2 col-md-offset-3 struct\">";
                            // line 34
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1), array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-2 col-md-offset-3 struct\">";
                            // line 37
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1), array(), "array"), 1, array(), "array"), "html", null, true);
                            echo "</div>
                            </div>
                        </div>
                    ";
                        } else {
                            // line 41
                            echo "                        <div class=\"row\">
                            <div class=\"row\">
                                <div class=\"col-md-2 col-md-offset-3 struct\">";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-2 col-md-offset-3 struct\">";
                            // line 46
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 1, array(), "array"), "html", null, true);
                            echo "</div>
                            </div>
                        </div>
                    ";
                        }
                        // line 50
                        echo "                ";
                    }
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "            ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == (twig_length_filter($this->env, (isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP"))) / 2))) {
                    // line 53
                    echo "                ";
                    if ((twig_length_filter($this->env, (isset($context["liste_RencF"]) ? $context["liste_RencF"] : $this->getContext($context, "liste_RencF"))) == 0)) {
                        // line 54
                        echo "                    <div class=\"row\">
                        <div class=\"col-md-2 col-md-offset-6 struct\">?</div>
                        <div class=\"col-md-2 col-md-offset-6 struct\">?</div>
                    </div>
                ";
                    } else {
                        // line 59
                        echo "                    <div class=\"row\">
                        <div class=\"col-md-2 col-md-offset-6 struct\">";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencF"]) ? $context["liste_RencF"] : $this->getContext($context, "liste_RencF")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
                        echo "</div>
                        <div class=\"col-md-2 col-md-offset-6 struct\">";
                        // line 61
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencF"]) ? $context["liste_RencF"] : $this->getContext($context, "liste_RencF")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
                        echo "</div>
                    </div>
                ";
                    }
                    // line 64
                    echo "            ";
                }
                // line 65
                echo "        ";
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
            // line 66
            echo "        <center><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournoi_coupe", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "phase" => (isset($context["phase"]) ? $context["phase"] : $this->getContext($context, "phase")), "admin" => "true")), "html", null, true);
            echo "\" title=\"tournoi\">gestion du tournoi</a></center>
        ";
            // line 67
            if (((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")) == "true")) {
                // line 68
                echo "            ";
                // line 69
                echo "            ";
                $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
                // line 70
                echo "            ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
                echo "
        ";
            }
            // line 72
            echo "
    ";
        } else {
            // line 74
            echo "        <center>LE GAGNANT EST ";
            echo twig_escape_filter($this->env, (isset($context["gagnant"]) ? $context["gagnant"] : $this->getContext($context, "gagnant")), "html", null, true);
            echo "</center>
    ";
        }
        // line 76
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
        return array (  212 => 76,  206 => 74,  202 => 72,  196 => 70,  193 => 69,  191 => 68,  189 => 67,  184 => 66,  170 => 65,  167 => 64,  161 => 61,  157 => 60,  154 => 59,  147 => 54,  144 => 53,  141 => 52,  138 => 51,  135 => 50,  128 => 46,  122 => 43,  118 => 41,  111 => 37,  105 => 34,  101 => 32,  98 => 31,  87 => 22,  84 => 21,  82 => 20,  76 => 17,  70 => 14,  66 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
