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
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        $this->displayBlock('stylesheet_extend', $context, $blocks);
        echo " 
        ";
        // line 17
        echo "        ";
        $this->displayBlock('script_extend', $context, $blocks);
        echo "     
        <link id=\"page_favicon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/x-icon\" />
        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body>
        ";
        // line 24
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "
        ";
        // line 30
        echo "        ";
        $this->displayBlock('menu_h', $context, $blocks);
        // line 34
        echo "
        ";
        // line 36
        echo "        ";
        $this->displayBlock('content_center', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo "  
        ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        echo "  
        ";
        // line 57
        $this->displayBlock('script', $context, $blocks);
        // line 61
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
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/styleTest.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 15
    public function block_stylesheet_extend($context, array $blocks = array())
    {
    }

    // line 17
    public function block_script_extend($context, array $blocks = array())
    {
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta ";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        echo " 
            ";
        // line 26
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:header.html.twig");
        echo "
        ";
    }

    // line 30
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
            ";
        // line 32
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:menu_h.html.twig");
        echo "
        ";
    }

    // line 36
    public function block_content_center($context, array $blocks = array())
    {
        // line 37
        echo "            ";
        echo "   
            <div id=\"content_page\" class=\"col-md-12\">
                <section id=\"content\" class=\"col-md-10\">
                    ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "                </section>  
                ";
        // line 42
        echo "    
                <section id=\"sidebar\" class=\"col-md-2\">
                    ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 45
        echo "                </section>
            </div>    
            <div class=\"clear\"></div>
        ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "            ";
        // line 53
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:footer.html.twig");
        echo "
        ";
    }

    // line 57
    public function block_script($context, array $blocks = array())
    {
        // line 58
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
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
        return array (  231 => 59,  226 => 58,  223 => 57,  216 => 53,  214 => 52,  211 => 51,  205 => 44,  199 => 40,  192 => 45,  190 => 44,  186 => 42,  183 => 41,  181 => 40,  175 => 37,  172 => 36,  165 => 32,  160 => 30,  153 => 26,  148 => 24,  142 => 19,  137 => 17,  132 => 15,  126 => 12,  122 => 11,  118 => 10,  114 => 9,  110 => 8,  106 => 7,  102 => 6,  97 => 5,  92 => 61,  90 => 57,  87 => 56,  84 => 55,  82 => 51,  79 => 50,  76 => 49,  73 => 36,  70 => 34,  67 => 30,  64 => 28,  61 => 24,  54 => 19,  50 => 18,  45 => 17,  40 => 15,  38 => 14,  36 => 5,  30 => 1,);
    }
}
