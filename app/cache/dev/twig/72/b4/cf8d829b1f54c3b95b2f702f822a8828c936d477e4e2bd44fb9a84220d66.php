<?php

/* WebMetaCommonBundle:Page:page.html.twig */
class __TwigTemplate_72b4cf8d829b1f54c3b95b2f702f822a8828c936d477e4e2bd44fb9a84220d66 extends Twig_Template
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
        echo " WebMeta - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getTitre"), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page\">
        ";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getContenu");
        echo "
        <p><a href=\"#\" onclick=\"window.history.back();\" title=\"\">Retour</a></p>
    </div>
 ";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
    <h1>Menu</h1>
    <ul>
        ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"), "getIsAdmin") == 1)) {
            // line 17
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_modification", array("id_page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId"))), "html", null, true);
            echo "\" title=\"Modifier la page\">Modifier la page</a></li>
        <li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_suppression", array("id_page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId"))), "html", null, true);
            echo "\" title=\"Supprimer la page\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer la page ?');\">Supprimer la page</a></li>
        ";
        }
        // line 20
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Page:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  66 => 18,  61 => 17,  59 => 16,  52 => 13,  44 => 7,  38 => 5,  30 => 3,);
    }
}
