<?php

/* WebMetaCommonBundle::layout.html.twig */
class __TwigTemplate_db51fefcc5feef7520c80e72efa38d37682e7129474acb8bf3d80e6334b05e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'stylesheet_extend' => array($this, 'block_stylesheet_extend'),
            'script_extend' => array($this, 'block_script_extend'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu_h' => array($this, 'block_menu_h'),
            'content_center' => array($this, 'block_content_center'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        ";
        // line 5
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        $this->displayBlock('stylesheet_extend', $context, $blocks);
        echo " 
        ";
        // line 15
        echo "        ";
        $this->displayBlock('script_extend', $context, $blocks);
        echo "     
        <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body>
        ";
        // line 21
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "
        ";
        // line 28
        echo "        ";
        $this->displayBlock('menu_h', $context, $blocks);
        // line 49
        echo "
        ";
        // line 51
        echo "        ";
        $this->displayBlock('content_center', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        echo "  
        ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 113
        echo "
        ";
        // line 114
        echo "  
        ";
        // line 115
        $this->displayBlock('script', $context, $blocks);
        // line 119
        echo "    </body>
</html>";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/reset.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/reset_bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/general.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/style.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 13
    public function block_stylesheet_extend($context, array $blocks = array())
    {
    }

    // line 15
    public function block_script_extend($context, array $blocks = array())
    {
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta ";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        echo " 
        <header id=\"header\">
            <h1 class=\"h1-header\">WebMeta</h1>
        </header> 
        ";
    }

    // line 28
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
        <section id=\"menu_h\" class=\"row\">
            <div class=\"col-md-6\">
                <ul class=\"nav nav-pills\">
                    <li class=\"";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_homepage")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_homepage");
        echo "\" title=\"Accueil du site\">Accueil</a></li>
                    <li class=\"";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_documentation")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_documentation");
        echo "\" title=\"Documentation\">Documentation</a></li>    
                    <li class=\"";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_tutoriels")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_tutoriels");
        echo "\" title=\"Tutoriels\">Tutoriels</a></li>
                    <li class=\"";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_faq")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_faq");
        echo "\" title=\"Questions\">FAQ</a></li>
                    <li class=\"";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_contact")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_contact");
        echo "\" title=\"Formulaire de contact\">Contact</a></li>
                    <li class=\"";
        // line 37
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("compte_creation");
        echo "\" title=\"Accueil du site\">S'inscrire</a>
            </div>
        </section>    
        ";
    }

    // line 51
    public function block_content_center($context, array $blocks = array())
    {
        // line 52
        echo "            ";
        echo "   
            <div id=\"content_page\" class=\"col-md-12\">
                <section id=\"content\" class=\"col-md-10\">
                    ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "                </section>  
                ";
        // line 57
        echo "    
                <section id=\"sidebar\" class=\"col-md-2\">
                    ";
        // line 59
        $this->displayBlock('sidebar', $context, $blocks);
        // line 60
        echo "                </section>
            </div>    
            <div class=\"clear\"></div>
        
        ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "            <footer id=\"footer\">
                <div class=\"container\">
                    <div class=\"block-footer col-md-4\">
                        <h3>One list</h3>
                        <ul>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                        </ul>
                    </div>

                    <div class=\"block-footer col-md-4\">
                        <h3>One list</h3>
                        <ul>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                            <li><a href=\"\" title=\"\">Link test</a></li>
                        </ul>
                    </div>

                    <div class=\"block-footer col-md-4\">
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

    // line 115
    public function block_script($context, array $blocks = array())
    {
        // line 116
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  316 => 117,  311 => 116,  308 => 115,  260 => 68,  257 => 67,  251 => 59,  245 => 55,  237 => 60,  235 => 59,  231 => 57,  228 => 56,  226 => 55,  220 => 52,  217 => 51,  209 => 45,  194 => 37,  186 => 36,  178 => 35,  170 => 34,  162 => 33,  154 => 32,  146 => 28,  136 => 21,  130 => 16,  125 => 15,  120 => 13,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 5,  88 => 119,  86 => 115,  83 => 114,  80 => 113,  78 => 67,  75 => 66,  72 => 65,  69 => 51,  66 => 49,  63 => 28,  60 => 26,  57 => 21,  50 => 16,  45 => 15,  40 => 13,  38 => 12,  36 => 5,  30 => 1,);
    }
}
