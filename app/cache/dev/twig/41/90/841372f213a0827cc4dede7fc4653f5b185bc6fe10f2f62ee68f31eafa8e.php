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
            <li class=\"";
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_homepage")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_homepage");
        echo "\" title=\"Accueil du site\">Accueil</a></li>
            <li class=\"";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_documentation")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_documentation");
        echo "\" title=\"Documentation\">Documentation</a></li>    
            <li class=\"";
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_tutoriels")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_tutoriels");
        echo "\" title=\"Tutoriels\">Tutoriels</a></li>
            <li class=\"";
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_faq")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_faq");
        echo "\" title=\"Questions\">FAQ</a></li>
            <li class=\"";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_contact")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_contact");
        echo "\" title=\"Formulaire de contact\">Contact</a></li>
            <li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_creation")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_creation");
        echo "\" title=\"Formulaire de création d'une page\">Créer une page</a></li>
        </ul>
    </div>
    <div class=\"form-connexion col-md-4\">
                ";
        // line 14
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "is_connected"), "method") == false)) {
            // line 15
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("WebMetaCommonBundle:Login:formLogin"), array());
            // line 16
            echo "        <div class=\"link-connexion\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("compte_creation");
            echo "\" title=\"Accueil du site\">S'inscrire</a>
        </div>
                ";
        } else {
            // line 20
            echo "        <div class=\"link-connexion\">
            Connecté : <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compte_view", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"), "getId"))), "html", null, true);
            echo "\" title=\"Compte\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"), "getPseudo"), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"Se déconnecter\">Se déconnecter</a>
        </div>
                ";
        }
        // line 25
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
        return array (  105 => 25,  99 => 22,  90 => 20,  84 => 17,  81 => 16,  64 => 9,  56 => 8,  32 => 5,  24 => 4,  19 => 1,  227 => 58,  222 => 57,  219 => 56,  212 => 52,  210 => 51,  207 => 50,  201 => 43,  195 => 39,  188 => 44,  186 => 43,  182 => 41,  179 => 40,  177 => 39,  171 => 36,  168 => 35,  161 => 31,  156 => 29,  149 => 25,  144 => 23,  138 => 18,  133 => 17,  128 => 15,  122 => 12,  118 => 11,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 21,  88 => 60,  86 => 56,  83 => 55,  80 => 54,  78 => 15,  75 => 14,  72 => 48,  69 => 35,  63 => 29,  50 => 18,  40 => 6,  38 => 14,  36 => 5,  30 => 1,  95 => 37,  91 => 36,  85 => 32,  70 => 19,  66 => 33,  60 => 27,  57 => 23,  48 => 7,  45 => 17,  41 => 7,  35 => 5,  29 => 3,);
    }
}
