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
        echo " WebMeta - Metaciv ";
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
        echo "    ";
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
        <h3>Liste des membres de l'équipe</h3>
        <ul>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_membre"]) ? $context["liste_membre"] : $this->getContext($context, "liste_membre")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 21
            echo "            <li>- <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/leader.jpg"), "html", null, true);
            echo "\" alt=\"Leader\" style=\"width:20px;\"/><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compte_view", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getId"))), "html", null, true);
            echo "\" title=\"Voir la page de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getPseudo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "getPseudo"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </ul>
    </div>

</div>    
 ";
    }

    // line 29
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
<h1>Menu</h1>
<ul>
    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_quit", array("id_equipe" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"))), "html", null, true);
        echo "\" title=\"Quitter l'équipe : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
        echo "\" onclick=\"return confirm('Etes-vous sur de vouloir quitter cette équipe ?');\">Quitter l'équipe</a></li>
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
        return array (  98 => 32,  91 => 29,  83 => 23,  68 => 21,  64 => 20,  55 => 14,  50 => 11,  47 => 10,  42 => 7,  36 => 5,  30 => 3,);
    }
}
