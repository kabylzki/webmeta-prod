<?php

/* WebMetaCommonBundle:Metaciv:documentation_metaciv.html.twig */
class __TwigTemplate_3a8574d2f22163290750d7055e81aa1b2569a344cf23ec9eee3a45a6038c68f3 extends Twig_Template
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
        echo " WebMeta - Documentation Metaciv ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-documentation\">
        <h1>Documentation - Metaciv</h1>
        <ul>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_page"]) ? $context["liste_page"] : $this->getContext($context, "liste_page")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "            <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_view", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId"), "url_alias" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getUrlAlias"), "nom_categorie" => strtr(twig_lower_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getNomCategorie")), array(" " => "")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getNomLien"), "html", null, true);
            echo "\"/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getNomLien"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </div>
 ";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
<h1>Menu</h1>
<h3>Documentation</h3>
<ul>
    <li> <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("metaciv_documentation");
        echo "\" title=\"Documentation de Metaciv\"/>Documentation - Metaciv</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Metaciv:documentation_metaciv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  67 => 17,  61 => 12,  48 => 10,  44 => 9,  36 => 5,  30 => 3,);
    }
}
