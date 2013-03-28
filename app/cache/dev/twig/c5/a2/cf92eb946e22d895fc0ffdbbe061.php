<?php

/* MakinMindProjectBundle:Project:show_project.html.twig */
class __TwigTemplate_c5a2cf92eb946e22d895fc0ffdbbe061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
            'slider' => array($this, 'block_slider'),
            'content_type' => array($this, 'block_content_type'),
            'resources' => array($this, 'block_resources'),
            'content' => array($this, 'block_content'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 394
        if (($this->getAttribute($this->getContext($context, "project"), "owner") == $this->getAttribute($this->getContext($context, "app"), "user"))) {
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Projet ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects"), "html", null, true);
        echo "\">Projets</a> / <span>";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "</span>
";
    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 11
    public function block_resources($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->displayParentBlock("resources", $context, $blocks);
        echo " 
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

\t<style type=\"text/css\">
\t.modal.large{
\t    width: 750px;
\t    margin-left: -390px;
\t}
\t</style>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"block_blog_post_type_2\">
\t<article>
\t\t<div class=\"content\">

\t\t\t<div class=\"f_pic\">
\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "\">
\t\t\t</div>

\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>

\t\t\t<div class=\"block_tabs_type_3\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#1\" class=\"current\">Informations générales</a></li>
\t\t\t\t\t\t<li><a href=\"#2\">Candidater au projet</a></li>
\t\t\t\t\t\t<li><a href=\"#3\">A propos...</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab_content\">

\t\t\t\t\t<div id=\"modalChangeProject\" class=\"modal large hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t    \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t    \t<h3 id=\"myModalLabel\">Informations générales</h3>
\t\t\t\t\t  \t</div>
\t\t\t\t\t \t<div class=\"modal-body\">
\t\t\t\t\t\t\t<form method=\"post\" ";
        // line 52
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formProject"));
        echo " id=\"projectForm\">
\t\t\t\t\t\t    \t<div class=\"block_contact_us_type_1\">
\t\t\t\t\t\t    \t\t<div class=\"send_message\">
\t\t\t\t\t\t    \t\t\t<div class=\"form\">

\t\t\t\t\t\t\t\t   \t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "formProject"));
        echo "

\t\t\t\t\t\t\t\t   \t\t\t<p align=\"center\" hidden=\"true\">
\t\t\t\t\t\t\t\t   \t\t\t\t<img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/images/ajax-loader.gif"), "html", null, true);
        echo "\" alt=\"loading\"/>
\t\t\t\t\t\t\t\t   \t\t\t</p>

\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">
\t\t\t\t\t\t\t   \t\t\t \t\t";
        // line 64
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"), "Résumé");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>

\t\t\t\t\t\t\t   \t\t\t \t<div class=\"textarea\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"));
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</div>

\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">
\t\t\t\t\t\t\t   \t\t\t \t\t";
        // line 72
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "longDescription"), "Déscription");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "longDescription"));
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t   \t\t\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "formProject"));
        echo "
\t\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t</div>

\t\t\t\t\t\t   \t\t<div class=\"modal-footer\">
\t\t\t\t\t\t   \t\t\t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
\t\t\t\t\t\t   \t\t\t<input type=\"submit\" class=\"btn btn-primary\" />\t
\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t   \t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px;\">
\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Résumé</h3>
\t\t\t\t\t\t<blockquote id=\"twigShortDescription\" class=\"full\" style=\"text-align: justify;\">
\t\t\t\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "shortDescription")), "html", null, true);
        echo "
\t\t\t\t\t\t</blockquote>

\t\t\t\t\t\t<p>&nbsp;</p>

\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Description</h3>
\t\t\t\t\t\t<blockquote id=\"twigLongDescription\" class=\"full\" style=\"text-align: justify;\">
\t\t\t\t\t\t\t";
        // line 102
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "longDescription")), "html", null, true);
        echo "
\t\t\t\t\t\t</blockquote>

\t\t\t\t\t\t";
        // line 105
        if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getContext($context, "project"), "owner"))) {
            // line 106
            echo "\t\t\t\t\t\t\t<a href=\"#modalChangeProject\" role=\"button\" data-toggle=\"modal\" class=\"general_button small\"><span>Modifier</span></a>
\t\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"tab_content\">

\t\t\t\t\t<div id=\"modalChangeApplyTerms\" class=\"modal large hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalChangeApplyTermsLabel\" aria-hidden=\"true\">
\t\t\t\t\t  \t<div class=\"modal-header\">
\t\t\t\t\t    \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t   \t\t<h3 id=\"modalChangeApplyTermsLabel\">Candidature au projet</h3>
\t\t\t\t\t \t</div>
\t\t\t\t \t \t<div class=\"modal-body\">
\t\t\t\t\t\t    <form method=\"post\" ";
        // line 120
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formApplyTerms"));
        echo " id=\"ApplyTermsForm\">
\t\t\t\t\t\t    \t<div class=\"block_contact_us_type_1\">
\t\t\t\t\t\t    \t\t<div class=\"send_message\">
\t\t\t\t\t\t    \t\t\t<div class=\"form\">
\t\t\t\t\t   \t\t\t 
\t\t\t\t\t\t\t   \t\t\t\t";
        // line 125
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "formApplyTerms"));
        echo "

\t\t\t\t\t\t\t   \t\t\t\t<p align=\"center\" hidden=\"true\">
\t\t\t\t\t\t\t   \t\t\t\t\t<img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/images/ajax-loader.gif"), "html", null, true);
        echo "\" alt=\"loading\"/>
\t\t\t\t\t\t\t   \t\t\t\t</p>
\t\t\t\t\t\t\t   \t\t\t
\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">
\t\t\t\t\t\t\t   \t\t\t \t\t";
        // line 132
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "pbStudies"), "Niveau d'étude minimum");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 135
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "pbStudies"));
        echo "
\t\t\t\t\t\t\t   \t\t\t\t</div>
\t\t\t\t\t\t\t   \t\t\t
\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">
\t\t\t\t\t\t\t   \t\t\t \t\t";
        // line 139
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "firstDiploma"), "Dîplome requis");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>
\t\t\t\t\t\t\t   \t\t\t \t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 142
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "firstDiploma"));
        echo "
\t\t\t\t\t\t\t   \t\t\t\t</div>
\t\t\t\t\t\t\t   \t\t\t
\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">
\t\t\t\t\t\t\t   \t\t\t \t\t";
        // line 146
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "specialization"), "Spécialisation requise");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>
\t\t\t\t\t\t\t   \t\t\t \t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "specialization"));
        echo "
\t\t\t\t\t\t\t   \t\t\t\t</div>
\t\t\t\t\t\t\t   \t\t\t
\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">";
        // line 152
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "numberWorkedYears"), "Expérience professionnelle requise");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "numberWorkedYears"));
        echo "
\t\t\t\t\t\t\t   \t\t\t\t</div>
\t\t\t\t\t\t\t   \t\t\t
\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">
\t\t\t\t\t\t\t   \t\t\t \t\t";
        // line 159
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "hoursPerWeek"), "Temps de travail hebdomadaire");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 162
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "hoursPerWeek"));
        echo "
\t\t\t\t\t\t\t   \t\t\t\t</div>
\t\t\t\t\t\t\t   \t\t\t
\t\t\t\t\t\t\t   \t\t\t \t<p class=\"label\">
\t\t\t\t\t\t\t   \t\t\t \t\t";
        // line 166
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "paralleleContract"), "Contrat parallèle autorisé");
        echo "
\t\t\t\t\t\t\t   \t\t\t \t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\" style=\"border: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 169
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "paralleleContract"));
        echo "
\t\t\t\t\t\t\t   \t\t\t\t</div>

\t\t\t\t\t\t\t   \t\t\t \t";
        // line 172
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "formApplyTerms"));
        echo "
\t\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t\t   \t</div>


\t\t\t\t\t   \t\t\t<div class=\"modal-footer\">
\t\t\t\t\t   \t\t\t\t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
\t\t\t\t\t   \t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t \t\t</form>
\t\t\t\t   \t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- fin Modal-->

\t\t\t\t\t<h3 class=\"heading_w_icon\">Conditions pour candidater</h3>

\t\t\t\t\t<div class=\"block_accordeon_type_1\">
\t\t\t\t\t\t<div class=\"button_outer first\">
\t\t\t\t\t\t\t<div class=\"button_inner\">Niveau d'étude minimum : Bac + <span id=\"pbStudies\">";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "pbStudies"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t<div class=\"accordeon_content\">
\t\t\t\t\t\t\t<p>Le niveau d'étude minimum permet d'adapter la difficulté de chaque projet à chaque développeur et ainsi éviter les abandons en cours de projet.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Diplôme requis : <span id=\"firstDiploma\">";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "firstDiploma"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t<p>Le diplôme permet de cibler les connaissance et les capacités des développeurs. Certains seront spécialisé dans un domaine qui ne se prêtera pas forcément à tel ou tel projet.

\t\t\t\t\t\t\t";
        // line 200
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma") != "")) {
            // line 201
            echo "\t\t\t\t\t\t\t\t<h6>Autre diplôme valable : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Spécialisation requise : <span id=\"specialization\">";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "specialization"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t<p>Tout comme le diplôme, la spécialité d'un cursus permet d'obtenir des connaissances pointues dans un domaine en particulier qui peu (ou non) se prêter à un projet ou à une tâche d'un projet en particulier.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Expérience professionnelle requise : <span id=\"numberWorkedYears\">";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo "</span> année(s)</div></div>
\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t<p>Certains projet nécessite des personnes ayant déjà travaillé avec une technologie ou avec un outil en particulier. Ces expériences professionnelles peuvent apporter maîtrise et gain de temps au projet.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Temps de travail hebdomadaire : <span id=\"hoursPerWeek\">";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo "</span> heure(s)</div></div>
\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t<p>Le bénéficiaire du projet annonce une approximation du temps que vous devrez consacrer au projet si vous le rejoingnez. En postulant au projet, vous vous engagez à être disponible pendant cette durée hebdomadaire.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Contrat parallèle autorisé : <span id=\"paralleleContract\">";
        // line 221
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "paralleleContract") == 1)) {
            echo "oui ";
        } else {
            echo " non ";
        }
        echo "</span></div></div>
\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t<p>En tant qu'employeur temporaire, le bénéficiaire du projet peut ou non décider de si vous avez le droit d'être engagé ailleurs, c'est-à-dire qu'il peut vouloir votre exclusivité durant le développement du projet.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t <p>&nbsp;</p>

\t\t\t\t\t";
        // line 229
        if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getContext($context, "project"), "owner"))) {
            // line 230
            echo "\t\t\t\t\t\t<a href=\"#modalChangeApplyTerms\" role=\"button\" data-toggle=\"modal\" class=\"general_button small\"><span>Modifier</span></a>
\t\t\t\t\t";
        }
        // line 232
        echo "
\t\t\t\t\t<p>&nbsp;</p>

\t\t\t\t\t<h3 class=\"heading_w_icon\">Candidater</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 238
        if (($this->getAttribute($this->getContext($context, "project"), "recruitment") == 1)) {
            echo " 
\t\t\t\t\t\t\t\t";
            // line 239
            if ((null === $this->getContext($context, "request"))) {
                // line 240
                echo "\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<p><input type=\"submit\" value=\"Postuler pour ce projet\"/></p>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t";
            } else {
                // line 244
                echo "\t\t\t\t\t\t\t\t<div class=\"general_info_box success\">
\t\t\t\t\t\t\t\t\t<p>Félicitations, vous faites déjà partie de ce projet.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 249
            echo "\t\t\t\t\t\t\t\t<div class=\"general_info_box warning\">
\t\t\t\t\t\t\t\t\t<p>Ce projet ne recrute pas actuellement.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 254
        echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px;\">

\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Le projet</h3>
\t\t\t\t\t\t\t<ul class=\"list_2\" style=\"padding-left: 25px;\">
\t\t\t\t\t\t\t\t<li>Dates :
\t\t\t\t\t\t\t\t\tdu ";
        // line 263
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t<li>Domaines :
\t\t\t\t\t\t\t\t\t";
        // line 265
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "project"), "domains"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 266
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domain"), "name"), "html", null, true);
            echo (((!$this->getAttribute($this->getContext($context, "loop"), "last"))) ? (",") : (""));
            echo "
\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 268
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>Rémunération : 600 EUR. NET</li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<p>&nbsp;</p>

\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Le porteur du projet</h3>
\t\t\t\t\t\t\t<div class=\"about_author\">
\t\t\t\t\t\t\t\t<div class=\"userpic\">
\t\t\t\t\t\t\t\t\t<img style=\"width:45px; height:45px;\" src=\"";
        // line 277
        if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "picture")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "extension"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
        }
        echo "\" alt=\"user avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t\t\t\t<p class=\"title\">Ce projet a été créé par <a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "username"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "name"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t\t\t\t\t<p>";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>

\t\t\t\t<div class=\"links\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Auteur : <a href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "username"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "name"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li>Dates : du ";
        // line 294
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t<li>Domaines : 
\t\t\t\t\t\t\t";
        // line 296
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "project"), "domains"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 297
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domain"), "name"), "html", null, true);
            echo (((!$this->getAttribute($this->getContext($context, "loop"), "last"))) ? (",") : (""));
            echo "
\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 299
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$('.block_accordeon_type_1').tabs('.block_accordeon_type_1 div.accordeon_content', {
\t\t\t\t\t\t\t\t\ttabs : '.button_outer',
\t\t\t\t\t\t\t\t\teffect : 'slide',
\t\t\t\t\t\t\t\t\tcurrentClose: false,
\t\t\t\t\t\t\t\t\tinitialIndex : 0
\t\t});

\t\t\$('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
\t\t\tinitialIndex : 0
\t\t});

\t\t//Routing.generate('project_modify', {\"id\":1})
\t\t\$('#projectForm').submit(function(e) {
\t\t\tvar url2 = '";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_modifyResume", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"))), "html", null, true);
        echo "';
\t\t\t\$.ajax({
\t            type: \"POST\",
\t            url: url2,
\t            data: \$(this).serialize(),
\t            cache: false,
\t            dataType : 'html',
\t            success: function(data){
\t            \tvar response=\$(data);
\t                \$('#twigShortDescription').text(\$(data).find(\"#resp_shortDesc\").text());
\t                \$('#twigLongDescription').text(\$(data).find(\"#resp_longDesc\").text());
\t                   
\t            },
\t            beforeSend: function(){
\t            \t\$('#projectForm p').show();
\t            \t\$('#projectForm div').hide();
\t            },
\t            complete: function(){
\t            \t\$('#projectForm p').hide();
\t            \t\$('#projectForm div').show();
\t            \t\$('#projectForm .modal-footer > button.btn').trigger('click');
\t            }
        \t});
        \treturn false;
\t\t});

\t\t\$('#ApplyTermsForm').submit(function(e) {
\t\t\tvar url2 = '";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_modifyApplyTerms", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"))), "html", null, true);
        echo "';
\t\t\t\$.ajax({
\t            type: \"POST\",
\t            url: url2,
\t            data: \$(this).serialize(),
\t            cache: false,
\t            dataType : 'json',
\t            success: function(data){
\t                \$('#pbStudies').text(data.pbStudies);
\t                \$('#firstDiploma').text(data.firstDiploma);
\t                \$('#specialization').text(data.specialization);
\t                \$('#numberWorkedYears').text(data.numberWorkedYears);
\t                \$('#hoursPerWeek').text(data.hoursPerWeek);
\t                if(data.paralleleContract)
\t                \t\$('#paralleleContract').text(\"oui\");
\t               \telse
\t               \t\t\$('#paralleleContract').text(\"non\");
\t            },
\t            beforeSend: function(){
\t            \t\$('#ApplyTermsForm p').show();
\t            \t\$('#ApplyTermsForm div').hide();
\t            },
\t            complete: function(){
\t            \t\$('#ApplyTermsForm p').hide();
\t            \t\$('#ApplyTermsForm div').show();
\t            \t\$('#ApplyTermsForm .modal-footer > button.btn').trigger('click');
\t            }
        \t});
        \treturn false;
\t\t});

\t\t//prevent backing on tab index 0 when the modal is popped
\t\t\$('#modalChangeProject').on('show', function () {
\t\t\t\$('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
\t\t\t\tinitialIndex : 0
\t\t\t});
\t\t});

\t\t\$('#modalChangeApplyTerms').on('show', function () {
\t\t\t\$('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
\t\t\t\tinitialIndex : 1
\t\t\t});
\t\t});
\t</script>

";
    }

    // line 395
    public function block_right($context, array $blocks = array())
    {
        // line 396
        echo "\t<div class=\"sidebar\">
\t\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t\t";
        // line 398
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 399
        echo "\t\t<div class=\"separator\" style=\"height:40px;\"></div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:show_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 399,  725 => 398,  721 => 396,  718 => 395,  668 => 347,  638 => 320,  615 => 299,  597 => 297,  580 => 296,  573 => 294,  567 => 293,  552 => 281,  546 => 280,  534 => 277,  523 => 268,  505 => 266,  488 => 265,  481 => 263,  470 => 254,  463 => 249,  460 => 248,  454 => 244,  446 => 240,  444 => 239,  440 => 238,  432 => 232,  428 => 230,  426 => 229,  411 => 221,  403 => 216,  395 => 211,  387 => 206,  382 => 203,  376 => 201,  374 => 200,  367 => 196,  359 => 191,  337 => 172,  331 => 169,  325 => 166,  318 => 162,  312 => 159,  305 => 155,  299 => 152,  293 => 149,  287 => 146,  280 => 142,  274 => 139,  267 => 135,  261 => 132,  254 => 128,  248 => 125,  240 => 120,  226 => 108,  222 => 106,  220 => 105,  214 => 102,  204 => 95,  185 => 79,  179 => 76,  172 => 72,  165 => 68,  158 => 64,  151 => 60,  145 => 57,  137 => 52,  110 => 30,  103 => 25,  100 => 24,  87 => 14,  83 => 13,  78 => 12,  75 => 11,  69 => 9,  64 => 8,  53 => 5,  50 => 4,  44 => 3,  36 => 2,  30 => 394,);
    }
}
