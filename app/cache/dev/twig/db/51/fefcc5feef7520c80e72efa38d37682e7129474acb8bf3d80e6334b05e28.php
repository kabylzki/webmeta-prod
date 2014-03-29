<?php

/* WebMetaCommonBundle::layout.html.twig */
class __TwigTemplate_db51fefcc5feef7520c80e72efa38d37682e7129474acb8bf3d80e6334b05e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu_h' => array($this, 'block_menu_h'),
            'content_center' => array($this, 'block_content_center'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/reset.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/reset_bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/general.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/style.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body>
        ";
        // line 16
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $this->displayBlock('menu_h', $context, $blocks);
        // line 45
        echo "
        ";
        // line 47
        echo "        ";
        $this->displayBlock('content_center', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        echo "  
        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 123
        echo "
        ";
        // line 124
        echo "  
        ";
        // line 125
        $this->displayBlock('scripts', $context, $blocks);
        // line 129
        echo "    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        echo " 
        <header id=\"header\">
            <h1 class=\"h1-header\">WebMeta</h1>
        </header> 
        ";
    }

    // line 23
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
        <section id=\"menu_h\" class=\"row\">
            <div class=\"liste-lien col-md-6\">
                <ul class=\"nav nav-pills\">
                    <li class=\"";
        // line 27
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_homepage")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_homepage");
        echo "\" title=\"Accueil du site\">Accueil</a></li>
                    <li class=\"";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_documentation")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_documentation");
        echo "\" title=\"Documentation\">Documentation</a></li>    
                    <li class=\"";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_tutoriels")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_tutoriels");
        echo "\" title=\"Tutoriels\">Tutoriels</a></li>
                    <li class=\"";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_faq")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_faq");
        echo "\" title=\"Questions\">FAQ</a></li>
                    <li class=\"";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_contact")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_contact");
        echo "\" title=\"Formulaire de contact\">Contact</a></li>
                    <li class=\"";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_creation")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_creation");
        echo "\" title=\"Formulaire de création d'une page\">Créer une page</a></li>
                </ul>
            </div>
            <div class=\"form-connexion col-md-5\">
                Form login TODO
            </div>

            <div class=\"col-md-1\">
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("compte_creation");
        echo "\" title=\"Accueil du site\">S'inscrire</a>
            </div>

        </section>    
        ";
    }

    // line 47
    public function block_content_center($context, array $blocks = array())
    {
        // line 48
        echo "        <div id=\"page\">
            <div class=\"main\">
                    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "
                    ";
        // line 54
        echo "    
                    ";
        // line 55
        $this->displayBlock('sidebar', $context, $blocks);
        // line 71
        echo "                <div class=\"clear\"></div>
            </div>   
        </div> 
        ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        echo " 
                <section id=\"content\" class=\"col-md-10\"></section>    
                    ";
    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
                <section id=\"sidebar\" class=\"col-md-2\">
                    <article>
                        <header>
                            <h1>Menu</h1>
                        </header>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                            <li>Item 5</li>
                        </ul>
                    </article>
                </section>
                    ";
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "        <footer id=\"footer\">
            <div class=\"container\">
                <div class=\"block-footer\">
                    <h3>One list</h3>
                    <ul>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                    </ul>
                </div>

                <div class=\"block-footer\">
                    <h3>One list</h3>
                    <ul>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                    </ul>
                </div>

                <div class=\"block-footer\">
                    <h3>One list</h3>
                    <ul>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                        <li><a href=\"\" title=\"\">Link test</a></li>
                    </ul>
                </div>
                <div class=\"clear\"></div>

            </div>

            <div id=\"bottom-bar\">
                <ul>
                    <li><a href=\"\" title=\"\">Link test</a></li>
                    <li><a href=\"\" title=\"\">Link test</a></li>
                    <li><a href=\"\" title=\"\">Link test</a></li>
                    <li><a href=\"\" title=\"\">Link test</a></li>
                </ul>
            </div>
        </footer> 
        ";
    }

    // line 125
    public function block_scripts($context, array $blocks = array())
    {
        // line 126
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 127,  295 => 126,  292 => 125,  244 => 78,  241 => 77,  220 => 55,  212 => 50,  205 => 71,  203 => 55,  200 => 54,  197 => 53,  195 => 50,  191 => 48,  188 => 47,  179 => 40,  164 => 32,  156 => 31,  148 => 30,  140 => 29,  132 => 28,  124 => 27,  116 => 23,  106 => 16,  100 => 11,  95 => 129,  93 => 125,  90 => 124,  87 => 123,  85 => 77,  82 => 76,  79 => 75,  76 => 47,  73 => 45,  70 => 23,  67 => 21,  64 => 16,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
