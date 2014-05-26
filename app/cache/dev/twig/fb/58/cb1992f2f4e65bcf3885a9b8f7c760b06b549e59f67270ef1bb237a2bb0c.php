<?php

/* WebMetaCommonBundle:Compte:index_compte.html.twig */
class __TwigTemplate_fb58cb1992f2f4e65bcf3885a9b8f7c760b06b549e59f67270ef1bb237a2bb0c extends Twig_Template
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
        echo " WebMeta - Compte de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPseudo"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-compte-index\">
        <h1>Compte : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPseudo"), "html", null, true);
        echo " </h1>

        ";
        // line 10
        echo "        ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "
        ";
        // line 12
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 13
            echo "            <div class=\"message-compte col-md-12\">
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("message_liste");
            echo "\" title=\"Liste de vos messages\">
                    ";
            // line 15
            if ((isset($context["new_message"]) ? $context["new_message"] : $this->getContext($context, "new_message"))) {
                // line 16
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/enveloppe-non-lu2.png"), "html", null, true);
                echo "\" alt=\"enveloppe\" />
                    ";
            } else {
                // line 18
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/enveloppe-lu.png"), "html", null, true);
                echo "\" alt=\"enveloppe\" />
                    ";
            }
            // line 20
            echo "                </a>
            </div>
        ";
        }
        // line 23
        echo "
        ";
        // line 25
        echo "        <div class=\"avatar-compte col-md-2\">
            ";
        // line 26
        if ((null === $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getAvatar"))) {
            // line 27
            echo "                <div class=\"avatar-img col-md-12\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatar/default_avatar.png"), "html", null, true);
            echo "\" alt=\"Mon avatar\" /></div>
                ";
        } else {
            // line 29
            echo "                <div class=\"avatar-img col-md-12\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatar/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getAvatar"), "html", null, true);
            echo "\" alt=\"Mon avatar\" /></div>
                ";
        }
        // line 31
        echo "        </div>

        ";
        // line 34
        echo "        <div class=\"information-compte col-md-7\">
            <h3>Informations</h3>
            ";
        // line 36
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 37
            echo "                <p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_modification");
            echo "\" title=\"Modifier mes information\">Modifier mes informations</a> - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte_modification_password");
            echo "\" title=\"Modifier mot de passe\">Modifier mot de passe</a></p>
            ";
        }
        // line 39
        echo "            <ul>
                <li><strong>Email</strong> : ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getEmail"), "html", null, true);
        echo "</li>
                <li><strong>Nom</strong> : ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getNom"), "html", null, true);
        echo "</li>
                <li><strong>Prénom</strong> : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getPrenom"), "html", null, true);
        echo "</li>
                <li><strong>Date de naissance</strong> : ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDateNaissance"), "d-m-Y"), "html", null, true);
        echo "</li>
                <li><strong>Inscrit depuis le</strong> : ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDateInscription"), "d-m-Y"), "html", null, true);
        echo "</li>
                <li><strong>Ma description</strong> : <br/> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getDescription"), "html", null, true);
        echo "</li>
            </ul>
        </div>

        ";
        // line 50
        echo "        ";
        if (((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected")) && (twig_length_filter($this->env, (isset($context["liste_demande"]) ? $context["liste_demande"] : $this->getContext($context, "liste_demande"))) > 0))) {
            // line 51
            echo "            <div class=\"demandes-compte col-md-3\">
                <h3>Demandes en attente</h3>
                <ul>
                    ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_demande"]) ? $context["liste_demande"] : $this->getContext($context, "liste_demande")));
            foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
                // line 55
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_view", array("id" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "getId"))), "html", null, true);
                echo "\" title=\"Voir l'équipe  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "getNom"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "getNom"), "html", null, true);
                echo "</a> - <i>En attente </i></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </ul>
            </div>
        ";
        }
        // line 60
        echo "        <div class=\"clear\"></div>

        ";
        // line 63
        echo "        <div class=\"ressources-compte col-md-12\">
            <h3>Liste des ressources</h3>
            <table class=\"table-ressource col-md-12\">
                <tr class=\"head\">
                    <td>Nom</td>
                    <td>Type</td>
                    <td>lien</td>
                    <td>Publique ?</td>
                    <td>Date publication</td>
                    <td>Action</td>
                </tr>

                ";
        // line 75
        if ((twig_length_filter($this->env, (isset($context["liste_ressource"]) ? $context["liste_ressource"] : $this->getContext($context, "liste_ressource"))) > 0)) {
            // line 76
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_ressource"]) ? $context["liste_ressource"] : $this->getContext($context, "liste_ressource")));
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                // line 77
                echo "                        ";
                // line 78
                echo "                        ";
                if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
                    // line 79
                    echo "                            <tr class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "type"), "html", null, true);
                    echo "\">
                                <td>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "name"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "type"), "html", null, true);
                    echo "</td>
                                <td><a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "lien"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "lien"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "lien"), "html", null, true);
                    echo "</a></td>
                                <td>
                                    ";
                    // line 84
                    if ($this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "is_public")) {
                        // line 85
                        echo "                                        Oui
                                    ";
                    } else {
                        // line 87
                        echo "                                        Non
                                    ";
                    }
                    // line 89
                    echo "                                </td>
                                <td>";
                    // line 90
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "date_publication"), "d-m-Y H:i:s"), "html", null, true);
                    echo "</td>
                                <td>
                                    <a href=\"../../uploads/ressources/";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "type"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "path"), "html", null, true);
                    echo "\" download=\"\" title=\"Télécharger la ressource\">
                                        <img src=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/download.png"), "html", null, true);
                    echo "\" alt=\"download\" />
                                    </a>
                                    <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ressource_suppression", array("id" => $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer la ressource\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer le message ?');\">
                                        <img src=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/corbeille.png"), "html", null, true);
                    echo "\" alt=\"corbeille\" />
                                    </a>
                                </td>
                            </tr>
                        ";
                } else {
                    // line 101
                    echo "                            ";
                    // line 102
                    echo "                            ";
                    if ($this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "is_public")) {
                        // line 103
                        echo "                                <tr class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "type"), "html", null, true);
                        echo "\">
                                    <td>";
                        // line 104
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "name"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 105
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "type"), "html", null, true);
                        echo "</td>
                                    <td><a href=\"";
                        // line 106
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "lien"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "lien"), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "lien"), "html", null, true);
                        echo "</a></td>
                                    <td>Oui</td>
                                    <td>";
                        // line 108
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "date_publication"), "d-m-Y H:i:s"), "html", null, true);
                        echo "</td>
                                    <td>
                                        <a href=\"/uploads/ressources/";
                        // line 110
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "type"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "path"), "html", null, true);
                        echo "\" download=\"\" title=\"Télécharger la ressource\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer le message ?');\">
                                            <img src=\"";
                        // line 111
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/download.png"), "html", null, true);
                        echo "\" alt=\"download\" />
                                        </a>
                                        ";
                        // line 113
                        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
                            // line 114
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ressource_suppression", array("id" => $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "id"))), "html", null, true);
                            echo "\" title=\"Supprimer la ressource\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer le message ?');\">
                                                <img src=\"";
                            // line 115
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/images/corbeille.png"), "html", null, true);
                            echo "\" alt=\"corbeille\" />
                                            </a>
                                        ";
                        }
                        // line 118
                        echo "                                    </td>
                                </tr>
                            ";
                    }
                    // line 121
                    echo "                        ";
                }
                // line 122
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                ";
        } else {
            // line 124
            echo "                    <tr><td colspan=\"6\"><i>Aucune ressource</i></td></tr>
                ";
        }
        // line 126
        echo "            </table> 
        </div>

        <div class=\"clear\"></div>

    </div>    
";
    }

    // line 134
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
    <h1>Menu</h1>
    <ul>
        <li><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("equipe_liste");
        echo "\" title=\"Afficher la liste des équipes\" />Liste des équipes</a></li>
            ";
        // line 138
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 139
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("equipe_creation");
            echo "\" title=\"Créer une équipe\" />Créer une équipe</a></li>
            ";
        }
        // line 141
        echo "    </ul>

    ";
        // line 143
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 144
            echo "        <h3>Equipes</h3>

        <ul>
            ";
            // line 147
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_equipe"]) ? $context["liste_equipe"] : $this->getContext($context, "liste_equipe")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
                // line 148
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_view", array("id" => $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getId"))), "html", null, true);
                echo "\" title=\"Voir l'équipe  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")), "getNom"), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "        </ul>
    ";
        }
        // line 152
        echo "
    ";
        // line 153
        if ((isset($context["user_connected"]) ? $context["user_connected"] : $this->getContext($context, "user_connected"))) {
            // line 154
            echo "        <h3>Ressources</h3>
        <ul>
            <li><a href=\"";
            // line 156
            echo $this->env->getExtension('routing')->getPath("ressource_upload");
            echo "\" title=\"Envoyer une ressource\">Envoyer une ressource</a></li>
        </ul>
    ";
        }
        // line 159
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Compte:index_compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 159,  421 => 156,  417 => 154,  415 => 153,  412 => 152,  408 => 150,  395 => 148,  391 => 147,  386 => 144,  384 => 143,  380 => 141,  374 => 139,  372 => 138,  368 => 137,  361 => 134,  351 => 126,  347 => 124,  344 => 123,  338 => 122,  335 => 121,  330 => 118,  324 => 115,  319 => 114,  317 => 113,  312 => 111,  306 => 110,  301 => 108,  292 => 106,  288 => 105,  284 => 104,  279 => 103,  276 => 102,  274 => 101,  266 => 96,  262 => 95,  257 => 93,  251 => 92,  246 => 90,  243 => 89,  239 => 87,  235 => 85,  233 => 84,  224 => 82,  220 => 81,  216 => 80,  211 => 79,  208 => 78,  206 => 77,  201 => 76,  199 => 75,  185 => 63,  181 => 60,  176 => 57,  163 => 55,  159 => 54,  154 => 51,  151 => 50,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  124 => 40,  121 => 39,  113 => 37,  111 => 36,  107 => 34,  103 => 31,  96 => 29,  90 => 27,  88 => 26,  85 => 25,  82 => 23,  77 => 20,  71 => 18,  65 => 16,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  48 => 10,  43 => 7,  37 => 5,  30 => 3,);
    }
}
