<?php

/* WebMetaCommonBundle:Warbot:index_warbot.html.twig */
class __TwigTemplate_432f65d09a1d175978f5e763ebade52f4d1349b0cf3011068e5103960f3a824d extends Twig_Template
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
        echo " WebMeta - Warbot ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div id=\"page-warbot-home\">
    <h2>TODO : </h2>
    <ul>
        <li>- Page d'accueil Warbot</li>
        <li>- Vidéo de démo</li>
        <li>- Texte de présentation</li>
    </ul>
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
            echo "        <li> <a href=\"";
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
        echo "
    ";
        // line 27
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 28
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("tournoi_warbot");
            echo "\" title=\"tournoi\">tournoi</a></li>
    ";
        }
        // line 30
        echo "

</ul>

<h3>Documentation </h3>
<ul>
    <li> <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("warbot_documentation");
        echo "\" title=\"Documentation de Warbot\"/>Documentation - Warbot</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Warbot:index_warbot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  97 => 30,  91 => 28,  89 => 27,  86 => 26,  73 => 24,  69 => 23,  62 => 20,  47 => 9,  41 => 7,  34 => 4,  31 => 3,);
    }
}
