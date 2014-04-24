<?php

/* WebMetaCommonBundle:Tournoi:gestionTournoi.html.twig */
class __TwigTemplate_a910b3e563b97a33e53700d89f90d84764e184078518618cc1db3c8892677bea extends Twig_Template
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
        echo " WebMeta - Warbot ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"page-warbot-gestion\">
        <center><h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "getNom"), "html", null, true);
        echo "</h1></center>
        <h1>rencontres</h1>
                <ul>
                ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_match"]) ? $context["liste_match"] : $this->getContext($context, "liste_match")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 11
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "getIdEquipe1"), "html", null, true);
            echo " vs ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "getIdEquipe2"), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
        <h1>liste des participants</h1>
               <ul>
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_team"]) ? $context["liste_team"] : $this->getContext($context, "liste_team")));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 17
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "getIdInvite"), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "               </ul>
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formInvitation"]) ? $context["formInvitation"] : $this->getContext($context, "formInvitation")), 'form');
        echo "
    </div>

";
    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Tournoi:gestionTournoi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  92 => 25,  84 => 20,  81 => 19,  72 => 17,  68 => 16,  63 => 13,  52 => 11,  48 => 10,  42 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
