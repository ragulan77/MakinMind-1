<?php

/* MakinMindProjectBundle:Project:contract.html.twig */
class __TwigTemplate_739f9966badae632659a2de522adf78f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: contrat et conditions";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Contrat &amp; conditions";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " 
\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_projects"), "html", null, true);
        echo "\">Projets</a> / 
\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "</a> / <span>Contrat &amp; conditions</span>
";
    }

    // line 9
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"block_blog_post_type_1\">
\t\t<div class=\"content\">
\t\t\t<h3 class=\"heading_w_icon\">Conditions</h3>
\t\t\t\t\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>
\t\t\t<p>
\t\t\t\t<div class=\"block_accordeon_type_1\">
\t\t\t\t\t<div class=\"button_outer first\">
\t\t\t\t\t\t<div class=\"button_inner\">Niveau d'étude minimum : Bac + <span id=\"pbStudies\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "pbStudies"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t<div class=\"accordeon_content\">
\t\t\t\t\t\t<p>Le niveau d'étude minimum permet d'adapter la difficulté de chaque projet à chaque développeur et ainsi éviter les abandons en cours de projet.</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Diplôme requis : <span id=\"firstDiploma\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "firstDiploma"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t<p>Le diplôme permet de cibler les connaissance et les capacités des développeurs. Certains seront spécialisé dans un domaine qui ne se prêtera pas forcément à tel ou tel projet.

\t\t\t\t\t\t";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma") != "")) {
            // line 31
            echo "\t\t\t\t\t\t\t<h6>Autre diplôme valable : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Spécialisation requise : <span id=\"specialization\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "specialization"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t<p>Tout comme le diplôme, la spécialité d'un cursus permet d'obtenir des connaissances pointues dans un domaine en particulier qui peu (ou non) se prêter à un projet ou à une tâche d'un projet en particulier.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Expérience professionnelle requise : <span id=\"numberWorkedYears\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo "</span> année(s)</div></div>
\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t<p>Certains projet nécessite des personnes ayant déjà travaillé avec une technologie ou avec un outil en particulier. Ces expériences professionnelles peuvent apporter maîtrise et gain de temps au projet.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Temps de travail hebdomadaire : <span id=\"hoursPerWeek\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo "</span> heure(s)</div></div>
\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t<p>Le bénéficiaire du projet annonce une approximation du temps que vous devrez consacrer au projet si vous le rejoingnez. En postulant au projet, vous vous engagez à être disponible pendant cette durée hebdomadaire.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Contrat parallèle autorisé : <span id=\"paralleleContract\">";
        // line 51
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "paralleleContract") == 1)) {
            echo "oui ";
        } else {
            echo " non ";
        }
        echo "</span></div></div>
\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t<p>En tant qu'employeur temporaire, le bénéficiaire du projet peut ou non décider de si vous avez le droit d'être engagé ailleurs, c'est-à-dire qu'il peut vouloir votre exclusivité durant le développement du projet.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</p>

\t\t\t<div class=\"separator\" style=\"height:30px;\"></div>

\t\t\t<h3 class=\"heading_w_icon\">Contrat</h3>
\t\t\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t\t\t<p>Merci de lire attentivement le présent contrat afin d'en saisir tous les enjeux ainsi que de comprendre en quoi consiste vos engagements.</p>

\t\t\t<iframe src=\"http://www.emploi.gouv.fr/_pdf/fiche_contrat_professionnalisation.pdf?id=850#toolbar=0\" frameborder=\"0\" width=\"100%\" height=\"350\">
\t\t\t\t<p>Votre navigateur ne supporte pas les iframes</p>
\t\t\t</iframe>
\t\t\t<p><a href=\"http://www.emploi.gouv.fr/_pdf/fiche_contrat_professionnalisation.pdf\">Afficher le contrat</a></p>
\t\t</div>

\t\t<div class=\"separator\" style=\"height:30px;\"></div>
\t\t<h3 class=\"heading_w_icon\">Motivations</h3>
\t\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t\t<form method=\"post\" action=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_contract", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">
\t\t\t<div class=\"oh\">
\t\t\t\t<div class=\"block_contact_us_type_1\">

\t\t\t    \t<div class=\"send_message\">
\t\t\t\t\t\t<div class=\"form\" style=\"width: 80%;\">

\t\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t\t<textarea cols=\"50\" rows=\"20\" name=\"motivations\" placeHolder=\"Présentez-vous brièvement et expliquer votre intérêt et vos motivation pour rejoindre ce projet.\" /></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"label\">
\t\t\t\t\t\t\t\t<label for=\"contract_accpt\">J'accepte les conditions et le contrat pour postuler</label>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"field\" style=\"border: none;\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"contract_accpt\" id=\"contract_accpt\" required=\"required\"/>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>
\t\t\t\t\t\t\t<a href=\"this.form.submit();\" class=\"general_button small\"><span>Postuler à ce projet</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>

<script type=\"text/javascript\">
\t\t\t\$('.block_accordeon_type_1').tabs('.block_accordeon_type_1 div.accordeon_content', {
\t\t\t\t\t\t\t\t\t\ttabs : '.button_outer',
\t\t\t\t\t\t\t\t\t\teffect : 'slide',
\t\t\t\t\t\t\t\t\t\tcurrentClose: false,
\t\t\t\t\t\t\t\t\t\tinitialIndex : 0
\t\t\t});
</script>
";
    }

    // line 113
    public function block_right($context, array $blocks = array())
    {
        // line 114
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t";
        // line 116
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 117
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 117,  219 => 116,  215 => 114,  212 => 113,  171 => 75,  140 => 51,  132 => 46,  124 => 41,  116 => 36,  111 => 33,  105 => 31,  103 => 30,  96 => 26,  88 => 21,  79 => 14,  76 => 13,  70 => 10,  65 => 9,  57 => 7,  53 => 6,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
