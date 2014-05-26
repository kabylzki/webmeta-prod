<?php

/* WebMetaCommonBundle:Structure:menu_h.html.twig */
class __TwigTemplate_4190841372f213a0827cc4dede7fc4653f5b185bc6fe10f2f62ee68f31eafa8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"menu_h\">
    <div class=\"col-md-8\">
        <ul class=\"nav nav-pills\">
            <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("common_homepage");
        echo "\" title=\"Accueil du site\">Accueil</a></li>
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("common_documentation");
        echo "\" title=\"Documentation\">Documentation</a></li>    
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("common_tutoriels");
        echo "\" title=\"Tutoriels\">Tutoriels</a></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("common_faq");
        echo "\" title=\"Questions\">FAQ</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("common_contact");
        echo "\" title=\"Formulaire de contact\">Contact</a></li>
            
            ";
        // line 10
        if (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"), "getIsAdmin") == 1))) {
            // line 11
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("page_creation");
            echo "\" title=\"Formulaire de création d'une page\">Créer une page</a></li>
            ";
        }
        // line 13
        echo "            </ul>
    </div>
    <div class=\"form-connexion col-md-4\">
                ";
        // line 17
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "is_connected"), "method") == false)) {
            // line 18
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("WebMetaCommonBundle:Login:formLogin"), array());
            // line 19
            echo "        <div class=\"link-connexion\">
            <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("compte_creation");
            echo "\" title=\"Accueil du site\">S'inscrire</a>
        </div>
                ";
        } else {
            // line 23
            echo "        <div class=\"link-connexion\">
            Connecté : <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compte_view", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"), "getId"))), "html", null, true);
            echo "\" title=\"Compte\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"), "getPseudo"), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"Se déconnecter\">Se déconnecter</a>
        </div>
                ";
        }
        // line 28
        echo "        <div class=\"clear\"></div>
    </div>

</section>    ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Structure:menu_h.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  58 => 17,  32 => 6,  28 => 5,  24 => 4,  19 => 1,  228 => 59,  223 => 58,  220 => 57,  213 => 53,  211 => 52,  208 => 51,  202 => 44,  196 => 40,  189 => 45,  187 => 44,  183 => 42,  180 => 41,  178 => 40,  172 => 37,  169 => 36,  162 => 32,  157 => 30,  150 => 26,  145 => 24,  139 => 19,  134 => 17,  129 => 15,  122 => 11,  118 => 10,  114 => 9,  110 => 8,  106 => 7,  102 => 6,  97 => 5,  92 => 61,  90 => 57,  87 => 56,  84 => 55,  79 => 50,  76 => 24,  73 => 23,  70 => 34,  67 => 20,  64 => 19,  61 => 18,  54 => 19,  50 => 18,  45 => 10,  40 => 8,  38 => 14,  36 => 7,  30 => 1,  82 => 25,  78 => 33,  72 => 29,  57 => 16,  53 => 13,  47 => 11,  44 => 9,  41 => 8,  35 => 5,  29 => 3,);
    }
}
