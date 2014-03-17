<?php

/* WebMetaCommonBundle::layout.html.twig */
class __TwigTemplate_ba51253ec64b5b4cdb57015568d4f296ec64ff8f67691b82f5730ca746cc5113 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/general.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/style.css"), "html", null, true);
        echo "\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body>
        ";
        // line 14
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "        
        ";
        // line 21
        echo "        ";
        $this->displayBlock('menu_h', $context, $blocks);
        // line 44
        echo "        
        ";
        // line 46
        echo "        ";
        $this->displayBlock('content_center', $context, $blocks);
        // line 74
        echo "            
        ";
        // line 75
        echo "  
        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "        
        ";
        // line 84
        echo "  
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        echo " 
            <header id=\"header\">
                <h1 class=\"h1-header\">WebMeta</h1>
            </header> 
        ";
    }

    // line 21
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
        <section id=\"menu_h\" class=\"col-md-12\">
            <div class=\"liste-lien col-md-6\">
            <ul>
                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("common_homepage");
        echo "\" title=\"Accueil du site\">Accueil</a></li>
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("warbot_homepage");
        echo "\" title=\"Accès Warbot\">Warbot</a></li>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("metaciv_homepage");
        echo "\" title=\"Accès Metaciv\">MetaCiv</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("common_documentation");
        echo "\" title=\"Documentation\">Documentation</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("common_tutoriels");
        echo "\" title=\"Tutoriels\">Tutoriels</a></li>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("common_faq");
        echo "\" title=\"Questions\">FAQ</a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("common_contact");
        echo "\" title=\"Formulaire de contact\">Contact</a></li>
            </ul>
                </div>
            <div class=\"form-connexion col-md-6\">
                <form method=\"post\" action=\"#\">
                    <label for=\"pseudo\">Login</label> : <input type=\"text\" name=\"login\" id=\"pseudo\" size=\"8\"/>
                    <label for=\"pseudo\">Mdp</label> : <input type=\"text\" name=\"mdp\" id=\"mdp\" size=\"8\" />
                    <input type=\"submit\" value=\"Connexion\" />
                </form>
                
            </div>
        </section>    
        ";
    }

    // line 46
    public function block_content_center($context, array $blocks = array())
    {
        // line 47
        echo "        <div id=\"page\">
            <div class=\"main\">
                    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "                        
                    ";
        // line 53
        echo "    
                    ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 70
        echo "            <div class=\"clear\"></div>
            </div>   
        </div> 
        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        echo " 
                        <section id=\"content\" class=\"col-md-10\"></section>    
                    ";
    }

    // line 54
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

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "            <footer id=\"footer\">
                <div class=\"container\">

                </div>
            </footer> 
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
        return array (  216 => 77,  213 => 76,  192 => 54,  184 => 49,  177 => 70,  175 => 54,  172 => 53,  169 => 52,  167 => 49,  163 => 47,  160 => 46,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  111 => 21,  101 => 14,  95 => 9,  88 => 86,  84 => 85,  81 => 84,  78 => 83,  76 => 76,  73 => 75,  70 => 74,  67 => 46,  64 => 44,  61 => 21,  58 => 19,  55 => 14,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
