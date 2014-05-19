<?php

/* WebMetaCommonBundle:Tournoi:tournoi.html.twig */
class __TwigTemplate_1becd8f13a2bc9fd3dd6a03f5e8a532919b8013b1f84f91ae56200ed89fbec70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet_extend' => array($this, 'block_stylesheet_extend'),
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
        echo " WebMeta - Liste des tournois Warbot ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"page-warbot-tournoi\">
    <h1>Liste des tournois Warbot</h1>
    
    <h3>Publiques</h3>
    <ul>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_tournoi"]) ? $context["liste_tournoi"] : $this->getContext($context, "liste_tournoi")));
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 16
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournoi_gestion", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getId"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getNom"), "html", null, true);
            echo "\"/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getNom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getDate"), "format", array(0 => "d/M/Y"), "method"), "html", null, true);
            echo "</a>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournoi_suppression", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getId"))), "html", null, true);
            echo "\">supprimer</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
</div>
";
    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        // line 24
        echo "    <h1>Menu</h1>
    <ul>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("tournoi_creation");
        echo "\" title=\"Créer un tournoi Warbot\">Créer un tournoi</a>
    </ul>
    <h3>Documentation </h3>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Tournoi:tournoi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  87 => 24,  84 => 23,  78 => 18,  61 => 16,  57 => 15,  50 => 10,  47 => 9,  41 => 7,  34 => 4,  31 => 3,);
    }
}
