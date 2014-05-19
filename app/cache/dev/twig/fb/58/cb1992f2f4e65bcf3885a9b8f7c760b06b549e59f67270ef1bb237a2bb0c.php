<?php

/* WebMetaCommonBundle:Compte:index_compte.html.twig */
class __TwigTemplate_fb58cb1992f2f4e65bcf3885a9b8f7c760b06b549e59f67270ef1bb237a2bb0c extends Twig_Template
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
        echo " WebMeta - Compte de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPseudo"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div id=\"page-compte-index\">
    <h1>Compte : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPseudo"), "html", null, true);
        echo " </h1>
    
    ";
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "    
    ";
        // line 12
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 13
            echo "    <div class=\"message-compte col-md-12\">
        <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("message_liste");
            echo "\" title=\"Liste de vos messages\">
            ";
            // line 15
            if ((isset($context["new_message"]) ? $context["new_message"] : $this->getContext($context, "new_message"))) {
                // line 16
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/enveloppe-non-lu2.png"), "html", null, true);
                echo "\" alt=\"enveloppe\" />
            ";
            } else {
                // line 18
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/enveloppe-lu.png"), "html", null, true);
                echo "\" alt=\"enveloppe\" />
            ";
            }
            // line 20
            echo "        </a>
    </div>
    ";
        }
        // line 23
        echo "    
    <div class=\"avatar-compte col-md-2\">
        ";
        // line 25
        if ((null === $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getAvatar"))) {
            // line 26
            echo "            <div class=\"avatar-img col-md-12\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatar/default_avatar.png"), "html", null, true);
            echo "\" alt=\"Mon avatar\" /></div>
        ";
        } else {
            // line 28
            echo "            <div class=\"avatar-img col-md-12\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatar/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getAvatar"), "html", null, true);
            echo "\" alt=\"Mon avatar\" /></div>
        ";
        }
        // line 30
        echo "        ";
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 31
            echo "            <p class=\"avatar-link\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_modification_password");
            echo "\" title=\"Modifier mon avatar\">Modifier mon avatar</a></p>
        ";
        }
        // line 33
        echo "    </div>
    
    <div class=\"information-compte col-md-7\">
        <h3>Informations</h3>
        ";
        // line 37
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 38
            echo "            <p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_modification");
            echo "\" title=\"Modifier mes information\">Modifier mes informations</a> - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_modification_password");
            echo "\" title=\"Modifier mot de passe\">Modifier mot de passe</a></p>
        ";
        }
        // line 40
        echo "        <ul>
            <li><strong>Email</strong> : ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getEmail"), "html", null, true);
        echo "</li>
            <li><strong>Nom</strong> : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getNom"), "html", null, true);
        echo "</li>
            <li><strong>Prénom</strong> : ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPrenom"), "html", null, true);
        echo "</li>
            <li><strong>Date de naissance</strong> : ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDateNaissance"), "d-m-Y"), "html", null, true);
        echo "</li>
            <li><strong>Inscrit depuis le</strong> : ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDateInscription"), "d-m-Y"), "html", null, true);
        echo "</li>
            <li><strong>Ma description</strong> : <br/> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDescription"), "html", null, true);
        echo "</li>
        </ul>
    </div>
    ";
        // line 49
        if (((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected")) && (twig_length_filter($this->env, (isset($context["liste_demande"]) ? $context["liste_demande"] : $this->getContext($context, "liste_demande"))) > 0))) {
            // line 50
            echo "        <div class=\"demandes-compte col-md-3\">
            <h3>Demandes en attente</h3>
            <ul>
            ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_demande"]) ? $context["liste_demande"] : $this->getContext($context, "liste_demande")));
            foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
                // line 54
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_view", array("id" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "getId"))), "html", null, true);
                echo "\" title=\"Voir l'équipe  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "getNom"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "getNom"), "html", null, true);
                echo "</a> - <i>En attente </i></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            </ul>
        </div>
    ";
        }
        // line 59
        echo "    <div class=\"clear\"></div>
    

</div>    
 ";
    }

    // line 66
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
<h1>Menu</h1>
<ul>
    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("equipe_liste");
        echo "\" title=\"Afficher la liste des équipes\" />Liste des équipes</a></li>
    ";
        // line 70
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 71
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("equipe_creation");
            echo "\" title=\"Créer une équipe\" />Créer une équipe</a></li>
    ";
        }
        // line 73
        echo "</ul>

<h3>Equipes</h3>

<ul>
";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_equipe"]) ? $context["liste_equipe"] : $this->getContext($context, "liste_equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 79
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_view", array("id" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"))), "html", null, true);
            echo "\" title=\"Voir l'équipe  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</ul>


<h3>Ressources</h3>

";
        // line 86
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 87
            echo "    <ul>
        <li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("ressource_view", array("jeu" => "warbot"));
            echo "\" title=\"Ressources relatives à Warbot\">Ressources Warbot</a></li>
        <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("ressource_view", array("jeu" => "metaciv"));
            echo "\" title=\"Ressources relatives à Metaciv\">Ressources Metaciv</a></li>
    </ul>
";
        } else {
            // line 92
            echo "    <ul>
        <li><a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ressource_compte_view", array("id_compte" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getId"))), "html", null, true);
            echo "\" title=\"Voir les ressources de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPseudo"), "html", null, true);
            echo "\">Voir les ressources</a></li>
    </ul>
";
        }
        // line 96
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Compte:index_compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 96,  260 => 93,  257 => 92,  251 => 89,  247 => 88,  244 => 87,  242 => 86,  235 => 81,  222 => 79,  218 => 78,  211 => 73,  205 => 71,  203 => 70,  199 => 69,  192 => 66,  184 => 59,  179 => 56,  166 => 54,  162 => 53,  157 => 50,  155 => 49,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  126 => 40,  118 => 38,  116 => 37,  110 => 33,  104 => 31,  101 => 30,  94 => 28,  88 => 26,  86 => 25,  82 => 23,  77 => 20,  71 => 18,  65 => 16,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  48 => 10,  43 => 7,  37 => 5,  30 => 3,);
    }
}
