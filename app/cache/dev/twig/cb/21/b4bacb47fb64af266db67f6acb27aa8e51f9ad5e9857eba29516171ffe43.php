<?php

/* WebMetaCommonBundle:Message:view.html.twig */
class __TwigTemplate_cb21b4bacb47fb64af266db67f6acb27aa8e51f9ad5e9857eba29516171ffe43 extends Twig_Template
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
        echo " WebMeta - Message ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-view-message\">
        ";
        // line 7
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getContenu");
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
        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_suppression", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getId"))), "html", null, true);
        echo "\" title=\"Supprimer le message\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer le message ?');\">Supprimer le message</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Message:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  50 => 13,  42 => 7,  36 => 5,  30 => 3,);
    }
}
