<?php

/* WebMetaCommonBundle:Equipe:liste.html.twig */
class __TwigTemplate_d81d187de05ab470fa3c61b9ac29d6350cf0f379c36ec57cbe0c7b540fbc58df extends Twig_Template
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
        echo " WebMeta - Liste des équipes ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div id=\"page-equipe-liste\">
    <h1>Liste des équipes</h1>
    
    ";
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "    
    <div class=\"liste-equipe col-md-12\">
        <ul>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_equipe"]) ? $context["liste_equipe"] : $this->getContext($context, "liste_equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 15
            echo "                <li><a href=\"";
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
        // line 17
        echo "        </ul>
    </div>

</div>    
 ";
    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
<h1>Menu</h1>
<ul>

        
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Equipe:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  69 => 17,  56 => 15,  52 => 14,  47 => 11,  44 => 10,  36 => 5,  30 => 3,);
    }
}
