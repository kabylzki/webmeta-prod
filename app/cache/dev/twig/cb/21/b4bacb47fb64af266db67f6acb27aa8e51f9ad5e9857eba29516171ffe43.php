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
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getTitre"), "html", null, true);
        echo "</h1>
        <p>le : <em><b>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getDateExpedition"), "d-m-Y H:i:s"), "html", null, true);
        echo "</b></em> de : <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getIdExpediteur"), "html", null, true);
        echo "</b></p>
        <p class=\"content-message\">";
        // line 9
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getContenu");
        echo "</p>
        <p class=\"link-retour\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("message_liste");
        echo "\"  title=\"Retour à la liste des messages\">Retour à la liste des messages</a></p>
    </div>
 ";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
    <h1>Menu</h1>
    <ul>
        <li><a href=\"";
        // line 18
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
        return array (  70 => 18,  63 => 15,  56 => 10,  52 => 9,  46 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
