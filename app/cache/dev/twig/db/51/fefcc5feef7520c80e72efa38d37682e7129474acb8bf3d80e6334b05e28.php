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
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        $this->displayBlock('stylesheet_extend', $context, $blocks);
        echo " 
        ";
        // line 16
        echo "        ";
        $this->displayBlock('script_extend', $context, $blocks);
        echo "     
        <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body>
        ";
        // line 22
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "
        ";
        // line 29
        echo "        ";
        $this->displayBlock('menu_h', $context, $blocks);
        // line 54
        echo "
        ";
        // line 56
        echo "        ";
        $this->displayBlock('content_center', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        echo "  
        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 118
        echo "
        ";
        // line 119
        echo "  
        ";
        // line 120
        $this->displayBlock('script', $context, $blocks);
        // line 124
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
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/form.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_stylesheet_extend($context, array $blocks = array())
    {
    }

    // line 16
    public function block_script_extend($context, array $blocks = array())
    {
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta ";
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        echo " 
        <header id=\"header\">
            <h1 class=\"h1-header\">WebMeta</h1>
        </header> 
        ";
    }

    // line 29
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
        <section id=\"menu_h\">
            <div class=\"col-md-6\">
                <ul class=\"nav nav-pills\">
                    <li class=\"";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_homepage")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_homepage");
        echo "\" title=\"Accueil du site\">Accueil</a></li>
                    <li class=\"";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_documentation")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_documentation");
        echo "\" title=\"Documentation\">Documentation</a></li>    
                    <li class=\"";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_tutoriels")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_tutoriels");
        echo "\" title=\"Tutoriels\">Tutoriels</a></li>
                    <li class=\"";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_faq")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_faq");
        echo "\" title=\"Questions\">FAQ</a></li>
                    <li class=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_contact")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("common_contact");
        echo "\" title=\"Formulaire de contact\">Contact</a></li>
                    <li class=\"";
        // line 38
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "common_creation")) {
            echo "actif";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_creation");
        echo "\" title=\"Formulaire de création d'une page\">Créer une page</a></li>
                </ul>
            </div>
            <div class=\"form-connexion col-md-5\">
                ";
        // line 43
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "is_connected"), "method") == false)) {
            // line 44
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("WebMetaCommonBundle:Login:formLogin"), array());
            // line 45
            echo "                    - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_creation");
            echo "\" title=\"Accueil du site\">S'inscrire</a>
                ";
        } else {
            // line 47
            echo "                    Connecté : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "compte"), "method"), "getLogin"), "html", null, true);
            echo "
                    - <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"Se déconnecter\">Logout</a>
                ";
        }
        // line 50
        echo "            </div>

        </section>    
        ";
    }

    // line 56
    public function block_content_center($context, array $blocks = array())
    {
        // line 57
        echo "            ";
        echo "   
            <div id=\"content_page\" class=\"col-md-12\">
                <section id=\"content\" class=\"col-md-10\">
                    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "                </section>  
                ";
        // line 62
        echo "    
                <section id=\"sidebar\" class=\"col-md-2\">
                    ";
        // line 64
        $this->displayBlock('sidebar', $context, $blocks);
        // line 65
        echo "                </section>
            </div>    
            <div class=\"clear\"></div>
        
        ";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 64
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
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

    // line 120
    public function block_script($context, array $blocks = array())
    {
        // line 121
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 122
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
        return array (  337 => 122,  332 => 121,  329 => 120,  281 => 73,  278 => 72,  272 => 64,  266 => 60,  258 => 65,  256 => 64,  252 => 62,  249 => 61,  247 => 60,  241 => 57,  238 => 56,  231 => 50,  226 => 48,  221 => 47,  215 => 45,  212 => 44,  209 => 43,  198 => 38,  190 => 37,  182 => 36,  174 => 35,  166 => 34,  158 => 33,  150 => 29,  140 => 22,  134 => 17,  129 => 16,  124 => 14,  118 => 11,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 5,  88 => 124,  86 => 120,  83 => 119,  80 => 118,  78 => 72,  75 => 71,  72 => 70,  69 => 56,  66 => 54,  63 => 29,  60 => 27,  57 => 22,  50 => 17,  45 => 16,  40 => 14,  38 => 13,  36 => 5,  30 => 1,);
    }
}
