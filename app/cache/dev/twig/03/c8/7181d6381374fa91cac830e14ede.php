<?php

/* MakinMindResourceBundle:Upload:upload_content.html.twig */
class __TwigTemplate_03c87181d6381374fa91cac830e14ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"modalUpload\" class=\"modal large hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-header\">
    \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    \t<h3 id=\"myModalLabel\">Informations générales</h3>
  \t</div>
 \t<div class=\"modal-body\">
\t\t<div class=\"form\">

\t\t\t<div class=\"block_tabs_type_1\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#1\" class=\"current\">Formulaire d'upload</a></li>
\t\t\t\t\t\t<li><a href=\"#2\">Consultation de mes uploads</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t\t\t<h4 class=\"fw_n\">Informations générales</h4>

\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t\t\t\t\t\t\t<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resource_homepage"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\">

\t\t\t\t\t\t\t    ";
        // line 23
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "file"));
        echo "
\t\t\t\t\t\t\t    <p class=\"label\">";
        // line 24
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "file"), "Fichier :");
        echo " <span>(requis)</span></p>
\t\t\t\t\t\t\t \t<div class=\"field\">";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "file"));
        echo "</div>

\t\t\t\t\t\t\t \t";
        // line 27
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t\t\t\t\t\t\t    <div class=\"button\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"general_button\" value=\"Upload !\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearboth\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t\t\t<h4 class=\"fw_n\"> </h4>

\t\t\t\t\t\t<h4>Images</h4>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_uploads"));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 43
            echo "\t\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getContext($context, "resource"), "mimeType") != null) && ($this->getAttribute($this->getContext($context, "resource"), "mimeType") == "image/jpeg"))) {
                // line 44
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "resource"), "absoluteUrl", array(), "method"), "html", null, true);
                echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t<p>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "resource"), "WebUrl"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "
\t\t\t\t\t\t<h4>Autres fichiers</h4>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_uploads"));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 52
            echo "\t\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getContext($context, "resource"), "mimeType") == null) || ($this->getAttribute($this->getContext($context, "resource"), "mimeType") != "image/jpeg"))) {
                // line 53
                echo "\t\t\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "resource"), "WebUrl"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t   \t\t<div class=\"modal-footer\">
\t\t   \t\t\t<!-- <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
\t\t   \t\t\t<input type=\"submit\" class=\"btn btn-primary\" />\t-->
\t\t   \t\t\t<button class=\"general_button small type_3\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
\t\t   \t\t\t<input type=\"submit\" class=\"general_button small\" />\t
\t\t   \t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<a href=\"#modalUpload\" role=\"button\" data-toggle=\"modal\" class=\"general_button small\"><span>Uploader un fichier</span></a>
<script type=\"text/javascript\">
\t\$('.block_tabs_type_1 .tabs').tabs('.block_tabs_type_1 .tab_content', {
\t\tinitialIndex : 0
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "MakinMindResourceBundle:Upload:upload_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 56,  121 => 55,  115 => 53,  112 => 52,  108 => 51,  97 => 47,  92 => 45,  87 => 44,  84 => 43,  80 => 42,  62 => 27,  57 => 25,  49 => 23,  42 => 21,  38 => 20,  17 => 1,  105 => 32,  103 => 48,  98 => 29,  91 => 24,  88 => 23,  75 => 12,  71 => 11,  66 => 10,  63 => 9,  58 => 7,  53 => 24,  45 => 4,  39 => 3,  32 => 2,);
    }
}
