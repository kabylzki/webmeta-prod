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
        echo "    ";
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
            // line 9
            echo "        <div class=\"row\">
            <div class=\"row\">
                <div class=\"col-md-2 struct\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 struct\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</div>
            </div>
        </div>
        ";
            // line 17
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2) == 0)) {
                // line 18
                echo "            ";
                if ((twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) == 0)) {
                    // line 19
                    echo "                <div class=\"row\">
                    <div class=\"row\">
                        <div class=\"col-md-2 col-md-offset-3 struct\">?</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-2 col-md-offset-3 struct\">?</div>
                    </div>
                </div>
            ";
                } else {
                    // line 28
                    echo "                ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) >= (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1))) {
                        // line 29
                        echo "                    <div class=\"row\">
                        <div class=\"row\">
                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1), array(), "array"), 0, array(), "array"), "html", null, true);
                        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (twig_length_filter($this->env, (isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD"))) - 1), array(), "array"), 1, array(), "array"), "html", null, true);
                        echo "</div>
                        </div>
                    </div>
                ";
                    } else {
                        // line 38
                        echo "                    <div class=\"row\">
                        <div class=\"row\">
                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 0, array(), "array"), "html", null, true);
                        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-2 col-md-offset-3 struct\">";
                        // line 43
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liste_RencD"]) ? $context["liste_RencD"] : $this->getContext($context, "liste_RencD")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 1, array(), "array"), "html", null, true);
                        echo "</div>
                        </div>
                    </div>
                ";
                    }
                    // line 47
                    echo "            ";
                }
                // line 48
                echo "        ";
            }
            // line 49
            echo "            ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == (twig_length_filter($this->env, (isset($context["liste_RencP"]) ? $context["liste_RencP"] : $this->getContext($context, "liste_RencP"))) / 2))) {
                // line 50
                echo "                <div class=\"row\">
                    <div class=\"col-md-2 col-md-offset-6 struct\">finale</div>
                </div>
            ";
            }
            // line 54
            echo "    ";
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
        // line 55
        echo "
    ";
        // line 57
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 58
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
        return array (  164 => 58,  161 => 57,  158 => 55,  144 => 54,  138 => 50,  135 => 49,  132 => 48,  129 => 47,  122 => 43,  116 => 40,  112 => 38,  105 => 34,  99 => 31,  95 => 29,  92 => 28,  81 => 19,  78 => 18,  76 => 17,  70 => 14,  64 => 11,  60 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
