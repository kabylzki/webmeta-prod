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
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Warbot ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"page-warbot-gestion\">
        <center><h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getNom"), "html", null, true);
        echo "</h1></center>
        <h1>rencontres</h1>
        ";
        // line 13
        $this->displayBlock('rencontres', $context, $blocks);
        // line 21
        echo "
        <h1>liste des participants</h1>
               <ul>
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_team"]) ? $context["liste_team"] : $this->getContext($context, "liste_team")));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 25
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "getNom", array(), "method"), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "               </ul>
        ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["liste_team"]) ? $context["liste_team"] : $this->getContext($context, "liste_team"))) < 8)) {
            // line 29
            echo "            ";
            // line 30
            echo "            ";
            $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
            // line 31
            echo "            ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formInvitation"]) ? $context["formInvitation"] : $this->getContext($context, "formInvitation")), 'form');
            echo "
        ";
        }
        // line 33
        echo "

    </div>

";
    }

    // line 13
    public function block_rencontres($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if (($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getStatut") == "pret")) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournoi_coupe", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getId"))), "html", null, true);
            echo "\" title=\"tournoi\"/>tableau des rencontres</a>
            ";
        } elseif (($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getStatut") == "enAttente")) {
            // line 17
            echo "                <p>grille non disponible, il n'y a pas assez d'équipes</p>
            ";
        } else {
            // line 19
            echo "        ";
        }
        // line 20
        echo "        ";
    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        // line 40
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
        return array (  129 => 40,  126 => 39,  122 => 20,  119 => 19,  115 => 17,  109 => 15,  106 => 14,  103 => 13,  95 => 33,  89 => 31,  86 => 30,  84 => 29,  82 => 28,  79 => 27,  70 => 25,  66 => 24,  61 => 21,  59 => 13,  54 => 11,  51 => 10,  48 => 9,  42 => 7,  35 => 4,  32 => 3,);
    }
}
