<?php

/* WebMetaCommonBundle:Metaciv:index_metaciv.html.twig */
class __TwigTemplate_6a987b312a317e42cd040c100e23b64e8289b34d905f0322ecde92be9907df45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet_extend' => array($this, 'block_stylesheet_extend'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebMetaCommonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet_extend($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/metaciv.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Metaciv ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-metaciv-home\">
        <h2>TODO : </h2>
        <ul>
            <li>- Page d'accueil Metaciv</li>
            <li>- Vidéo de démo</li>
            <li>- Texte de présentation</li>
        </ul>
    </div>
 ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Metaciv:index_metaciv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 7,  33 => 4,  30 => 3,);
    }
}
