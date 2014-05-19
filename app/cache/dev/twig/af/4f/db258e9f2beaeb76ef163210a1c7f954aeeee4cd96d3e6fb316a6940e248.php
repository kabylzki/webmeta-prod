<?php

/* WebMetaCommonBundle:Default:index.html.twig */
class __TwigTemplate_af4fdb258e9f2beaeb76ef163210a1c7f954aeeee4cd96d3e6fb316a6940e248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Accueil ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"liste-game\">
        ";
        // line 8
        echo "        ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 9
        echo "
        ";
        // line 11
        echo "        <div id=\"warbot\" class=\"col-md-6\">
            <h2>Warbot</h2>
            <hr />
            <div class=\"img-presentation col-md-12\">
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("warbot_homepage");
        echo "\" title=\"Accès Warbot\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/warbot.jpg"), "html", null, true);
        echo "\" alt=\"warbot-pres\" />
                </a>
            </div>
            <div class=\"txt-presentation col-md-12\">
                <p>
                    Warbot est à la fois un jeu et une plate-forme d'évaluation et d'analyse de techniques de coordination entre agents, dans une situation de compétition où deux équipes de \"robots\" s'affrontent pour tuer la base de l'adversaire.
                    Dans ce projet, les joueurs sont en fait les développeurs des agents...
                 </p>
            </div>
            <div class=\"clear\"></div>
        </div>

        ";
        // line 29
        echo "        <div id=\"metaciv\" class=\"col-md-6\">
            <h2>MetaCiv</h2>
            <hr />
            <div class=\"img-presentation col-md-12\">
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("metaciv_homepage");
        echo "\" title=\"Accès MetaCiv\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/metaciv.jpg"), "html", null, true);
        echo "\" alt=\"metaciv-pres\"/>
                </a>
            </div>
            <div class=\"txt-presentation col-md-12\">
                <p>
                    MetaCiv est framework de modélisation de sociétés humaines (ou virtuelles) utilisant la technique des SMA dans lesquelles l’espace, la culture et la structure sociale jouent un rôle important...
                </p>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"clear\"></div>
    </div>
 ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 34,  78 => 33,  72 => 29,  57 => 16,  53 => 15,  47 => 11,  44 => 9,  41 => 8,  35 => 5,  29 => 3,);
    }
}
