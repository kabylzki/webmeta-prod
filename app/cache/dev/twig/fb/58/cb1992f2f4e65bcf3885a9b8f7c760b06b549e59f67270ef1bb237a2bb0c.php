<?php

/* WebMetaCommonBundle:Compte:index_compte.html.twig */
class __TwigTemplate_fb58cb1992f2f4e65bcf3885a9b8f7c760b06b549e59f67270ef1bb237a2bb0c extends Twig_Template
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
<div id=\"page-compte-index\">
    ";
        // line 8
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 9
        echo "    
    <h1>Compte : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPseudo"), "html", null, true);
        echo "</h1>

    <div class=\"avatar-compte col-md-2\">
        ";
        // line 13
        if ((null === $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getAvatar"))) {
            // line 14
            echo "            <div class=\"avatar-img col-md-12\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatar/default_avatar.png"), "html", null, true);
            echo "\" alt=\"Mon avatar\" /></div>
        ";
        } else {
            // line 16
            echo "            <div class=\"avatar-img col-md-12\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatar/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getAvatar"), "html", null, true);
            echo "\" alt=\"Mon avatar\" /></div>
        ";
        }
        // line 18
        echo "            ";
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 19
            echo "                <p class=\"avatar-link\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_modification_avatar");
            echo "\" title=\"Modifier mon avatar\">Modifier mon avatar</a></p>
            ";
        }
        // line 21
        echo "    </div>
    
    <div class=\"information-compte col-md-10\">
        <h3>Informations</h3>
        ";
        // line 25
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 26
            echo "            <p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_modification");
            echo "\" title=\"Modifier mes information\">Modifier</a></p>
        ";
        }
        // line 28
        echo "        <ul>
            <li><strong>Email</strong> : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getEmail"), "html", null, true);
        echo "</li>
            <li><strong>Nom</strong> : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getNom"), "html", null, true);
        echo "</li>
            <li><strong>Prénom</strong> : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPrenom"), "html", null, true);
        echo "</li>
            <li><strong>Date de naissance</strong> : ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDateNaissance"), "d-m-Y"), "html", null, true);
        echo "</li>
            <li><strong>Inscrit depuis le</strong> : ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDateInscription"), "d-m-Y"), "html", null, true);
        echo "</li>
            <li><strong>Ma description</strong> : <br/> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDescription"), "html", null, true);
        echo "</li>
        </ul>
    </div>
    <div class=\"clear\"></div>
</div>    
 ";
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Compte:index_compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  92 => 28,  86 => 26,  84 => 25,  78 => 21,  72 => 19,  69 => 18,  62 => 16,  56 => 14,  54 => 13,  48 => 10,  45 => 9,  42 => 8,  36 => 5,  30 => 3,);
    }
}
