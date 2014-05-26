<?php

/* WebMetaCommonBundle:Metaciv:index_metaciv.html.twig */
class __TwigTemplate_6a987b312a317e42cd040c100e23b64e8289b34d905f0322ecde92be9907df45 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/metaciv.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Accueil Metaciv ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-metaciv-home\">
        <h1>Metaciv</h1>
        <p>
            MetaCiv est framework de modélisation de sociétés humaines (ou virtuelles) utilisant la technique des SMA dans lesquelles l’espace, la culture et la structure sociale jouent un rôle important... 
        </p>
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/metaciv.jpg"), "html", null, true);
        echo "\" alt=\"Metaciv bg \" class=\"col-md-6\"/>
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/metaciv.png"), "html", null, true);
        echo "\" alt=\"Metaciv screen\" class=\"col-md-6\"/>
    </div>
";
    }

    // line 20
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
    <h1>Menu</h1>
    <ul>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_page"]) ? $context["liste_page"] : $this->getContext($context, "liste_page")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
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
        // line 26
        echo "    </ul>

    <h3>Documentation </h3>
    <ul>
        <li> <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("metaciv_documentation");
        echo "\" title=\"Documentation de Metaciv\"/>Documentation - Metaciv</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Metaciv:index_metaciv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  92 => 26,  79 => 24,  75 => 23,  68 => 20,  61 => 16,  57 => 15,  47 => 9,  41 => 7,  34 => 4,  31 => 3,);
    }
}
