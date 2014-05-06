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
        <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body>
        ";
        // line 23
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "
        ";
        // line 29
        echo "        ";
        $this->displayBlock('menu_h', $context, $blocks);
        // line 33
        echo "
        ";
        // line 35
        echo "        ";
        $this->displayBlock('content_center', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        echo "  
        ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        echo "  
        ";
        // line 56
        $this->displayBlock('script', $context, $blocks);
        // line 60
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

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        echo " 
            ";
        // line 25
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:header.html.twig");
        echo "
        ";
    }

    // line 29
    public function block_menu_h($context, array $blocks = array())
    {
        echo " 
            ";
        // line 31
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:menu_h.html.twig");
        echo "
        ";
    }

    // line 35
    public function block_content_center($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        echo "   
            <div id=\"content_page\" class=\"col-md-12\">
                <section id=\"content\" class=\"col-md-10\">
                    ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "                </section>  
                ";
        // line 41
        echo "    
                <section id=\"sidebar\" class=\"col-md-2\">
                    ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "                </section>
            </div>    
            <div class=\"clear\"></div>
        ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Structure:footer.html.twig");
        echo "
        ";
    }

    // line 56
    public function block_script($context, array $blocks = array())
    {
        // line 57
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
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
        return array (  227 => 58,  222 => 57,  219 => 56,  212 => 52,  210 => 51,  207 => 50,  201 => 43,  195 => 39,  188 => 44,  186 => 43,  182 => 41,  179 => 40,  177 => 39,  171 => 36,  168 => 35,  161 => 31,  156 => 29,  149 => 25,  144 => 23,  138 => 18,  133 => 17,  128 => 15,  122 => 12,  118 => 11,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 5,  88 => 60,  86 => 56,  83 => 55,  80 => 54,  78 => 50,  75 => 49,  72 => 48,  69 => 35,  63 => 29,  50 => 18,  40 => 15,  38 => 14,  36 => 5,  30 => 1,  95 => 37,  91 => 36,  85 => 32,  70 => 19,  66 => 33,  60 => 27,  57 => 23,  48 => 9,  45 => 17,  41 => 7,  35 => 5,  29 => 3,);
    }
}
