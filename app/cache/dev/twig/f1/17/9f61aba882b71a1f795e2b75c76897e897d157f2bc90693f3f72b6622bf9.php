<?php

/* WebMetaCommonBundle:Message:liste.html.twig */
class __TwigTemplate_f1179f61aba882b71a1f795e2b75c76897e897d157f2bc90693f3f72b6622bf9 extends Twig_Template
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
        echo " WebMeta - Liste des messages ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div id=\"page-message-liste\">
    <h1>Liste des messages</h1>
    
    ";
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "    
    <div class=\"liste-message col-md-12\">
        <ul>

        </ul>
        
        <table>
            <tr class='head'>
                <td>Titre</td>
                <td>Expéditeur</td>
                <td>Date d'expédition</td>
                <td>Statut</td>
            </tr>
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_message"]) ? $context["liste_message"] : $this->getContext($context, "liste_message")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "            <tr class=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getStatut"), "html", null, true);
            echo ">
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_view", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getId"))), "html", null, true);
            echo "\" title=\"Voir le détail du message\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getTitre"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getIdExpediteur"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getDateExpedition"), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getStatut"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </table>
    </div>

</div>    
 ";
    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
<h1>Menu</h1>
<ul>

        
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Message:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  94 => 32,  85 => 29,  81 => 28,  77 => 27,  71 => 26,  66 => 25,  62 => 24,  47 => 11,  44 => 10,  36 => 5,  30 => 3,);
    }
}
