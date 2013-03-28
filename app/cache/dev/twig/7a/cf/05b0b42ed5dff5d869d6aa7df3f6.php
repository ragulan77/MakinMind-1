<?php

/* MakinMindProjectBundle:Project:createProject.html.twig */
class __TwigTemplate_7acf05b0b42ed5dff5d869d6aa7df3f6 extends Twig_Template
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
            'projects' => array($this, 'block_projects'),
            'resources' => array($this, 'block_resources'),
            'content' => array($this, 'block_content'),
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
        echo " :: Nouveau projet";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Nouveau projet";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Nouveau projet</span>
";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content_type($context, array $blocks = array())
    {
    }

    // line 10
    public function block_projects($context, array $blocks = array())
    {
        echo " class=\"current_page_item\"";
    }

    // line 12
    public function block_resources($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        $this->displayParentBlock("resources", $context, $blocks);
        echo " 
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t<script type=\"text/javascript\">
    function AddItem(Text,Value)
    {
        var opt = document.createElement(\"option\");

        opt.text = Text;
        opt.value = Value;
        document.getElementById(\"makinmind_projectbundle_projecttype_domains\").options.add(opt);

    }
    </script>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "
<div style=\"float: right; margin-right: 80px;\">
\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_1_1.png"), "html", null, true);
        echo "\" alt=\"Projet\" />
</div>


<form method=\"post\" ";
        // line 38
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formProject"));
        echo ">
\t<div class=\"oh\">
\t\t<div class=\"block_contact_us_type_1\">

\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "formProject"));
        echo "

\t\t    <div class=\"send_message\">
\t\t\t\t<div class=\"form\" style=\"width: 75%;\">

\t\t\t\t\t<div id=\"modalAddDomain\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t \t\t<div class=\"modal-header\">
\t\t\t\t    \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t    \t\t<h3 id=\"myModalLabel\">Nouveau domaine</h3>
\t\t\t\t  \t\t</div>
\t\t\t\t\t \t<div class=\"modal-body\">
\t\t\t\t\t\t    <form>
\t\t\t\t\t   \t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeHolder=\"ex: Symfony 2\" name=\"newDomain\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t   \t\t\t 
\t\t\t\t\t   \t\t\t<div class=\"modal-footer\">
\t\t\t\t\t   \t\t\t \t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
\t\t\t\t\t   \t\t\t \t<input type=\"button\" value=\"Ajouter\" class=\"btn btn-primary\" onclick=\"AddItem(this.form.newDomain.value, this.form.newDomain.value); \$('#modalAddDomain').modal('hide');\" />
\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t \t\t</form>
\t\t\t\t\t   \t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<h3 class=\"heading_w_icon\">Informations générales</h3>
\t\t\t\t\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>
\t\t\t\t
\t\t\t\t\t<p class=\"label\">";
        // line 70
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "name"), "Nom du projet");
        echo "</p>
\t\t\t\t\t<div class=\"field\">";
        // line 71
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "name"));
        echo "</div>
\t\t
\t\t\t   \t\t<p class=\"label\">";
        // line 73
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"), "Résumé du projet :");
        echo "</p>
\t\t\t\t\t<div class=\"textarea\">";
        // line 74
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 75
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "longDescription"), "Déscription détaillée du projet :");
        echo "</p>
\t\t\t\t\t<div class=\"textarea\">";
        // line 76
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "longDescription"));
        echo "</div>

\t\t\t\t\t<p class=\"label\">";
        // line 78
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "logo"), "Logo du projet :");
        echo "</p>
\t\t\t\t\t<div class=\"field\" style=\"border: none;\">";
        // line 79
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "logo"));
        echo "</div>

\t\t\t\t\t<div class=\"separator\" style=\"height:40px;\"></div>
\t\t\t\t\t<h3 class=\"heading_w_icon\">Informations temporelles</h3>
\t\t\t\t\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t\t\t\t\t<p class=\"label\">";
        // line 85
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "beginDate"), "Date de début :");
        echo "</p>
\t\t\t\t\t<div class=\"field\" style=\"border: none;\">";
        // line 86
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "beginDate"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 87
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "endingDate"), "Date de fin :");
        echo "</p>
\t\t\t\t\t<div class=\"field\" style=\"border: none;\">";
        // line 88
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "endingDate"));
        echo "</div>

\t\t\t\t\t<div class=\"separator\" style=\"height:40px;\"></div>
\t\t\t\t\t<h3 class=\"heading_w_icon\">Conditions pour postuler</h3>
\t\t\t\t\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>
\t\t\t\t\t
\t\t\t\t\t<p class=\"label\">";
        // line 94
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "domains"), "Domaine(s) :");
        echo "</p>
\t\t\t\t\t<div style=\"padding: 5px; margin-bottom: 8px;\">";
        // line 95
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "domains"));
        echo " <a href=\"#modalAddDomain\" role=\"button\" data-toggle=\"modal\" class=\"general_button small\"><span>Ajouter...</span></a></div>
\t\t\t\t\t<p class=\"label\">";
        // line 96
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "pbStudies"), "Niveau d'étude en année :");
        echo "</p>
\t\t\t\t\t<div class=\"field\">";
        // line 97
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "pbStudies"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 98
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "firstDiploma"), "Diplôme requis :");
        echo "</p>
\t\t\t\t\t<div class=\"field\">";
        // line 99
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "firstDiploma"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 100
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "secondDiploma"), "Dexième diplôme requis (optionnel) :");
        echo "</p>
\t\t\t\t\t<div class=\"field\">";
        // line 101
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "secondDiploma"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 102
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "specialization"), "Spécialisation :");
        echo "</p>
\t\t\t\t\t<div class=\"field\">";
        // line 103
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "specialization"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 104
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "numberWorkedYears"), "Expérience professionnelle en année :");
        echo "</p>
\t\t\t\t\t<div class=\"field\">";
        // line 105
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "numberWorkedYears"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 106
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "hoursPerWeek"), "Expérience professionnelle en année :");
        echo "</p>
\t\t\t\t\t<div class=\"field\">";
        // line 107
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "hoursPerWeek"));
        echo "</div>
\t\t\t\t\t<p class=\"label\">";
        // line 108
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "paralleleContract"), "Contrat parallèle autorisé :");
        echo "</p>
\t\t\t\t\t<div class=\"field\" style=\"border: none;\">";
        // line 109
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "paralleleContract"));
        echo "</div>\t
\t\t\t    \t<div class=\"separator\" style=\"height:20px;\"></div>
\t\t\t\t\t<a href=\"this.form.submit();\" class=\"general_button small\"><span>Créer le projet</span></a>  
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</form>

";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:createProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 109,  271 => 108,  267 => 107,  263 => 106,  259 => 105,  255 => 104,  251 => 103,  247 => 102,  243 => 101,  239 => 100,  235 => 99,  231 => 98,  227 => 97,  223 => 96,  219 => 95,  215 => 94,  206 => 88,  202 => 87,  198 => 86,  194 => 85,  185 => 79,  181 => 78,  176 => 76,  172 => 75,  168 => 74,  164 => 73,  159 => 71,  155 => 70,  124 => 42,  117 => 38,  110 => 34,  106 => 32,  103 => 31,  85 => 16,  81 => 15,  75 => 13,  72 => 12,  66 => 10,  61 => 8,  56 => 7,  49 => 5,  46 => 4,  40 => 3,  33 => 2,);
    }
}
