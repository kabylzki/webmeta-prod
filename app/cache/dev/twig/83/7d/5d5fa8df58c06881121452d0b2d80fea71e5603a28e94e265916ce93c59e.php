<?php

/* WebMetaCommonBundle:Default:index.html.twig */
class __TwigTemplate_837d5d5fa8df58c06881121452d0b2d80fea71e5603a28e94e265916ce93c59e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
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
    <section id=\"content\" class=\"col-md-12\">
        <div id=\"liste-game\">
            
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "                <div class=\"flash-notice\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            ";
        // line 16
        echo "            <div id=\"warbot\" class=\"col-md-6\">
                <h2>Warbot</h2>
                <hr />
                <div class=\"img-presentation col-md-6\">
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("warbot_homepage");
        echo "\" title=\"Accès Warbot\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/warbot.png"), "html", null, true);
        echo "\" alt=\"warbot-pres\" />
                    </a>
                </div>
                <div class=\"txt-presentation col-md-6\">
                    <p>
                        Warbot est à la fois un jeu et une plate-forme d'évaluation et d'analyse de techniques de coordination entre agents, dans une situation de compétition où deux équipes de \"robots\" s'affrontent pour tuer la base de l'adversaire.
                        Dans ce projet, les joueurs sont en fait les développeurs des agents. 
                        Mais ils ne doivent faire qu'une seul chose: développer les \"cerveaux\" (brain) de ces robots sachant que les \"corps\" (body) sont définis une fois pour toutes par les règles du jeu. 
                        De ce fait, la compétition réside dans la qualité de la programmation de ces cerveaux, et dans les stratégies de coordination proposées...
                    </p>
                </div>
                <div class=\"clear\"></div>
            </div>
            
            ";
        // line 36
        echo "            <div id=\"metaciv\" class=\"col-md-6\">
                <h2>MetaCiv</h2>
                <hr />
                <div class=\"img-presentation col-md-6\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("metaciv_homepage");
        echo "\" title=\"Accès MetaCiv\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/metaciv.png"), "html", null, true);
        echo "\" alt=\"metaciv-pres\"/>
                    </a>
                </div>
                <div class=\"txt-presentation col-md-6\">
                    <p>
                        MetaCiv est framework de modélisation de sociétés humaines (ou virtuelles) utilisant la technique des SMA dans lesquelles l’espace, la culture et la structure sociale jouent un rôle important. 
                        Il peut être utilisé aussi bien en modélisation (modélisation de l'évolution historique d'un pays par exemple) que pour créer des jeux (exemple: populous, civilization, Spores). 
                        La particularité de MetaCiv est de se situer entre les plate-formes génériques de modélisation multi-agent (NetLog, Turtlekit, Cormas, Repast, etc.) et les systèmes ad-hoc réalisés sur ces plate-formes, en proposant une couche intermédiaire implémentant un framework de société virtuelle.
                    </p>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </section>    
 ";
    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
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
        return array (  120 => 59,  100 => 41,  96 => 40,  90 => 36,  73 => 21,  69 => 20,  63 => 16,  60 => 14,  51 => 11,  48 => 10,  44 => 9,  36 => 5,  30 => 3,);
    }
}
