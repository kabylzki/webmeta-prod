<?php

/* WebMetaCommonBundle:Tournoi:gestion_tournoi.html.twig */
class __TwigTemplate_15b387f606de1c3882b98a53c6a6b9b0fb115e1570777dd86934d3bd48c525f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet_extend' => array($this, 'block_stylesheet_extend'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'rencontres' => array($this, 'block_rencontres'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebMetaCommonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["formInvitation"]) ? $context["formInvitation"] : $this->getContext($context, "formInvitation")), array(0 => "WebMetaCommonBundle:Tournoi:form.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheet_extend($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/warbot.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Warbot ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"page-warbot-gestion\">
        <center><h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getNom"), "html", null, true);
        echo "</h1></center>
        <h1>rencontres</h1>
        ";
        // line 15
        $this->displayBlock('rencontres', $context, $blocks);
        // line 27
        echo "
        <h1>liste des participants</h1>
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-4 struct\">
               <table width=\"80%\" height=\"100%\">
                <tr>
                <th>nom<th>description<th>membres de l'équipe
                </tr>
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_team"]) ? $context["liste_team"] : $this->getContext($context, "liste_team")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 36
            echo "                    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "getNom", array(), "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "getPresentation", array(), "method"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 38
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < twig_length_filter($this->env, (isset($context["liste_team"]) ? $context["liste_team"] : $this->getContext($context, "liste_team"))))) {
                // line 39
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["membreEquipe"]) ? $context["membreEquipe"] : $this->getContext($context, "membreEquipe")), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), array(), "array"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                    // line 40
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getPseudo", array(), "method"), "html", null, true);
                    echo "<br/>
                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                            ";
            }
            // line 43
            echo "                        </td>
                        <td>
                        ";
            // line 45
            if (((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")) == "true")) {
                // line 46
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournoi_supression_equipe", array("idTournoi" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getId"), "idTeam" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "getId"))), "html", null, true);
                echo "\" title=\"tournoi\">supprimer</a>
                        ";
            }
            // line 48
            echo "                        </td>
                    </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "               </table>
             </div>
            </div>


        ";
        // line 56
        if (((twig_length_filter($this->env, (isset($context["liste_team"]) ? $context["liste_team"] : $this->getContext($context, "liste_team"))) < 8) && ((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")) == "true"))) {
            // line 57
            echo "        <h3>ajouter des équipes</h3>
            ";
            // line 58
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formInvitation"]) ? $context["formInvitation"] : $this->getContext($context, "formInvitation")), 'form');
            echo "
        ";
        }
        // line 60
        echo "        ";
        // line 61
        echo "        ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 62
        echo "

    </div>

";
    }

    // line 15
    public function block_rencontres($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        if (($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getStatut") == "pret")) {
            // line 17
            echo "                ";
            if (((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")) == "true")) {
                // line 18
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournoi_coupe", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getId"), "phase" => "pool", "admin" => "true")), "html", null, true);
                echo "\" title=\"tournoi\">tableau des rencontres</a>
                ";
            } else {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournoi_coupe", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getId"), "phase" => "pool", "admin" => "false")), "html", null, true);
                echo "\" title=\"tournoi\">tableau des rencontres</a>
                ";
            }
            // line 22
            echo "        ";
        } elseif (($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getStatut") == "enAttente")) {
            // line 23
            echo "                <p>grille non disponible, il n'y a pas assez d'équipes</p>
        ";
        } else {
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
    }

    // line 68
    public function block_sidebar($context, array $blocks = array())
    {
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Tournoi:gestion_tournoi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 69,  231 => 68,  227 => 26,  224 => 25,  220 => 23,  217 => 22,  211 => 20,  205 => 18,  202 => 17,  199 => 16,  196 => 15,  188 => 62,  185 => 61,  183 => 60,  178 => 58,  175 => 57,  173 => 56,  166 => 51,  150 => 48,  144 => 46,  142 => 45,  138 => 43,  135 => 42,  118 => 40,  100 => 39,  98 => 38,  90 => 36,  73 => 35,  63 => 27,  61 => 15,  56 => 13,  53 => 12,  50 => 11,  44 => 9,  37 => 6,  34 => 5,  29 => 3,);
    }
}
