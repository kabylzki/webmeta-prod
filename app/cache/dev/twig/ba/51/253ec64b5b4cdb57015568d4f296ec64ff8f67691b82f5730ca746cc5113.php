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
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "        
        ";
        // line 19
        $this->displayBlock('menu_h', $context, $blocks);
        // line 42
        echo "            
    <div >

    </div>
        
        ";
        // line 47
        $this->displayBlock('content_center', $context, $blocks);
        // line 86
        echo "            
    ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "        
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
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

    // line 13
    public function block_header($context, array $blocks = array())
    {
        echo " 
            <header id=\"header\">
                <h1 class=\"h1-header\">WebMeta</h1>
            </header> 
        ";
    }

    // line 19
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
        <section id=\"menu_h\" class=\"col-md-12\">
            <div class=\"liste-lien col-md-6\">
            <ul>
                <li><a href=\"#\" title=\"\">Accueil</a></li>
                <li><a href=\"#\" title=\"\">Warbot</a></li>
                <li><a href=\"#\" title=\"\">MetaCiv</a></li>
                <li><a href=\"#\" title=\"\">Documentations</a></li>
                <li><a href=\"#\" title=\"\">Tutoriels</a></li>
                <li><a href=\"#\" title=\"\">FAQ</a></li>
                <li><a href=\"#\" title=\"\">Contact</a></li>
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
        $this->displayBlock('sidebar', $context, $blocks);
        // line 82
        echo "            <div class=\"clear\"></div>
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
                            <article>
                                <header>
                                    <h1>Liens</h1>
                                </header>
                                <ul>
                                    <li>Lien 1</li>
                                    <li>Lien 2</li>
                                    <li>Lien 3</li>
                                    <li>Lien 4</li>
                                    <li>Lien 5</li>
                                </ul>
                            </article>
                        </section>
                    ";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "        <footer id=\"footer\">
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
        return array (  199 => 88,  196 => 87,  163 => 54,  155 => 50,  148 => 82,  146 => 54,  143 => 53,  141 => 50,  137 => 48,  134 => 47,  106 => 19,  90 => 9,  83 => 96,  79 => 95,  76 => 94,  74 => 87,  71 => 86,  69 => 47,  62 => 42,  60 => 19,  57 => 18,  55 => 13,  48 => 9,  40 => 7,  32 => 5,  26 => 1,  96 => 13,  75 => 35,  68 => 30,  51 => 15,  44 => 8,  36 => 6,  30 => 3,);
    }
}
