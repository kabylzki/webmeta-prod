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
        // line 26
        echo "
        ";
        // line 28
        echo "        ";
        $this->displayBlock('menu_h', $context, $blocks);
        // line 32
        echo "
        ";
        // line 34
        echo "        ";
        $this->displayBlock('content_center', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        echo "  
        ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        echo "  
        ";
        // line 55
        $this->displayBlock('script', $context, $blocks);
        // line 59
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/structure.css"), "html", null, true);
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
            ";
        // line 24
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:header.html.twig");
        echo "
        ";
    }

    // line 28
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
            ";
        // line 30
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:menu_h.html.twig");
        echo "
        ";
    }

    // line 34
    public function block_content_center($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        echo "   
            <div id=\"content_page\" class=\"col-md-12\">
                <section id=\"content\" class=\"col-md-10\">
                    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "                </section>  
                ";
        // line 40
        echo "    
                <section id=\"sidebar\" class=\"col-md-2\">
                    ";
        // line 42
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "                </section>
            </div>    
            <div class=\"clear\"></div>
        ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:footer.html.twig");
        echo "
        ";
    }

    // line 55
    public function block_script($context, array $blocks = array())
    {
        // line 56
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
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
        return array (  223 => 57,  218 => 56,  215 => 55,  208 => 51,  206 => 50,  203 => 49,  197 => 42,  191 => 38,  184 => 43,  182 => 42,  178 => 40,  175 => 39,  173 => 38,  167 => 35,  164 => 34,  157 => 30,  152 => 28,  145 => 24,  140 => 22,  134 => 17,  129 => 16,  124 => 14,  118 => 11,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 5,  88 => 59,  86 => 55,  83 => 54,  80 => 53,  78 => 49,  75 => 48,  72 => 47,  69 => 34,  66 => 32,  63 => 28,  60 => 26,  57 => 22,  50 => 17,  45 => 16,  40 => 14,  38 => 13,  36 => 5,  30 => 1,);
    }
}
