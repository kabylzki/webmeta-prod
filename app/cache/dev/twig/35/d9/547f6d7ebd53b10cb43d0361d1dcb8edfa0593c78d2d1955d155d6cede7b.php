<?php

/* WebMetaCommonBundle:Equipe:index_equipe.html.twig */
class __TwigTemplate_35d9547f6d7ebd53b10cb43d0361d1dcb8edfa0593c78d2d1955d155d6cede7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Page de l'équipe ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-equipe-index\">
        <h1>Equipe : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
        echo "</h1>

        ";
        // line 10
        echo "        ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "
        <div class=\"presentation-equipe col-md-12\">
            <h3>Présentation</h3>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getPresentation"), "html", null, true);
        echo "</p>
        </div>

        <div class=\"membre-equipe col-md-12\">
            ";
        // line 18
        echo "  
            <h3>Liste des membres de l'équipe</h3>
            <div class=\"leader-equipe\">
                <ul>
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_leader"]) ? $context["liste_leader"] : $this->getContext($context, "liste_leader")));
        foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
            // line 23
            echo "                        <li>- <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/leader.jpg"), "html", null, true);
            echo "\" alt=\"Leader\" style=\"width:20px;\"/><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compte_view", array("id" => $this->getAttribute((isset($context["leader"]) ? $context["leader"] : $this->getContext($context, "leader")), "getId"))), "html", null, true);
            echo "\" title=\"Voir la page de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leader"]) ? $context["leader"] : $this->getContext($context, "leader")), "getPseudo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leader"]) ? $context["leader"] : $this->getContext($context, "leader")), "getPseudo"), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </ul>
            </div>
                
            ";
        // line 28
        echo "    
            <div class=\"membre-equipe\">
                <ul>
                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_membre"]) ? $context["liste_membre"] : $this->getContext($context, "liste_membre")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 32
            echo "                        <li>
                            - <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compte_view", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getId"))), "html", null, true);
            echo "\" title=\"Voir la page de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getPseudo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getPseudo"), "html", null, true);
            echo "</a>
                            ";
            // line 34
            echo "    
                            ";
            // line 35
            if ((isset($context["is_leader"]) ? $context["is_leader"] : $this->getContext($context, "is_leader"))) {
                // line 36
                echo "                                - <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_devenir_leader", array("id_equipe" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"), "id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getId"))), "html", null, true);
                echo "\" onclick=\"return confirm('Accorder les droits de leader à ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getPseudo"), "html", null, true);
                echo " ?');\" title=\"Faire de ce membre un leader\"> Donner les droits de leader </a>   
                            ";
            }
            // line 37
            echo "    
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </ul>
            </div>
        </div>

        ";
        // line 45
        echo "        ";
        if ((isset($context["is_leader"]) ? $context["is_leader"] : $this->getContext($context, "is_leader"))) {
            // line 46
            echo "            <div class=\"membre-equipe-attente col-md-12\">
                <h3>Liste des membres qui souhaitent rejoindre l'équipe</h3>
                ";
            // line 48
            if (((isset($context["nb_membre_attente"]) ? $context["nb_membre_attente"] : $this->getContext($context, "nb_membre_attente")) > 0)) {
                // line 49
                echo "                    <ul>
                        ";
                // line 50
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["liste_membre_attente"]) ? $context["liste_membre_attente"] : $this->getContext($context, "liste_membre_attente")));
                foreach ($context['_seq'] as $context["_key"] => $context["membre_attente"]) {
                    // line 51
                    echo "                            <li>- <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compte_view", array("id" => $this->getAttribute((isset($context["membre_attente"]) ? $context["membre_attente"] : $this->getContext($context, "membre_attente")), "getId"))), "html", null, true);
                    echo "\" title=\"Voir la page de ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre_attente"]) ? $context["membre_attente"] : $this->getContext($context, "membre_attente")), "getPseudo"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre_attente"]) ? $context["membre_attente"] : $this->getContext($context, "membre_attente")), "getPseudo"), "html", null, true);
                    echo "</a> 
                                - <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_recrutement", array("id_equipe" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"), "id_compte" => $this->getAttribute((isset($context["membre_attente"]) ? $context["membre_attente"] : $this->getContext($context, "membre_attente")), "getId"), "accept" => "allow")), "html", null, true);
                    echo "\" title=\"Accepter\">Accepter</a> / 
                                <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_recrutement", array("id_equipe" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"), "id_compte" => $this->getAttribute((isset($context["membre_attente"]) ? $context["membre_attente"] : $this->getContext($context, "membre_attente")), "getId"), "accept" => "deny")), "html", null, true);
                    echo "\" title=\"Refuser\">Refuser</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre_attente'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                    </ul>
                ";
            } else {
                // line 58
                echo "                    <i>Aucun membre en attente de recrutement</i>
                ";
            }
            // line 60
            echo "            </div>
        ";
        }
        // line 62
        echo "        
    </div>    
";
    }

    // line 66
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
    <h1>Menu</h1>
    <ul>
        ";
        // line 69
        if (((isset($context["is_membre"]) ? $context["is_membre"] : $this->getContext($context, "is_membre")) || (isset($context["is_leader"]) ? $context["is_leader"] : $this->getContext($context, "is_leader")))) {
            // line 70
            echo "            ";
            if (((isset($context["nb_membre"]) ? $context["nb_membre"] : $this->getContext($context, "nb_membre")) > 1)) {
                // line 71
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_quit", array("id_equipe" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"))), "html", null, true);
                echo "\" title=\"Quitter l'équipe : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
                echo "\" onclick=\"return confirm('Etes-vous sur de vouloir quitter cette équipe ?');\">Quitter l'équipe</a></li>
                ";
            } else {
                // line 73
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_quit", array("id_equipe" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"), "last" => true)), "html", null, true);
                echo "\" title=\"Quitter l'équipe : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
                echo "\" onclick=\"return confirm('Attention ! vous êtes le dernier membre, quitter l\\'équipe la supprimera également, êtes-vous sûr ? ');\">Quitter l'équipe ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 75
            echo "            ";
        } else {
            // line 76
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_postuler", array("id_equipe" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"))), "html", null, true);
            echo "\" title=\"Postuler : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sur de vouloir postuler pour l\\'équipe ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
            echo "  ?  ');\">Postuler</a></li>
            ";
        }
        // line 78
        echo "
    </ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Equipe:index_equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 78,  230 => 76,  227 => 75,  217 => 73,  209 => 71,  206 => 70,  204 => 69,  197 => 66,  191 => 62,  187 => 60,  183 => 58,  179 => 56,  170 => 53,  166 => 52,  157 => 51,  153 => 50,  150 => 49,  148 => 48,  144 => 46,  141 => 45,  135 => 40,  127 => 37,  119 => 36,  117 => 35,  114 => 34,  106 => 33,  103 => 32,  99 => 31,  94 => 28,  89 => 25,  74 => 23,  70 => 22,  64 => 18,  57 => 14,  52 => 11,  49 => 10,  44 => 7,  38 => 5,  30 => 3,);
    }
}
