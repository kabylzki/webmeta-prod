<?php

/* WebMetaCommonBundle:Warbot:tournoi.html.twig */
class __TwigTemplate_45d6ce55c21279fc6072440cd9cc5699788dd0adc76251ae71cfdb3943a6dee9 extends Twig_Template
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
        echo " WebMeta - Metaciv ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"page-warbot-tournoi\">
    <h1>Tournoi warbot</h1>
    <h2>liste des tournois</h2>
    <ul>
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_tournoi"]) ? $context["liste_tournoi"] : $this->getContext($context, "liste_tournoi")));
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 11
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("warbot_tournoi_gestion_tournoi", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getId"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getNom"), "html", null, true);
            echo "\"/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getNom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getDate"), "format", array(0 => "d/M/Y"), "method"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
    <h2>liste des tournois publiques</h2>
</div>
";
    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        // line 20
        echo "    <h1>Menu</h1>
    <ul>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("warbot_creationTournoi");
        echo "\" title=\"creerTournoi\">creerTournoi</a>
    </ul>
    <h3>Documentation </h3>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Warbot:tournoi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 20,  71 => 19,  64 => 13,  49 => 11,  45 => 10,  39 => 6,  36 => 5,  30 => 3,);
    }
}
