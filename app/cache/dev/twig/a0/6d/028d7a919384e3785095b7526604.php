<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a06d028d7a919384e3785095b7526604 extends Twig_Template
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
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array($this->getContext($context, "theme"), ));
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

<div class=\"form\">
\t<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"fos_user_profile_edit\">

\t<div class=\"block_tabs_type_1\">
\t\t<div class=\"tabs\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#1\" class=\"current\">Général</a></li>
\t\t\t\t<li><a href=\"#2\">Personnel</a></li>
\t\t\t\t<li><a href=\"#3\">Professionnel</a></li>
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<div class=\"tab_content\">
\t\t\t<div style=\"text-align: center;margin: auto;float: right; width: 150px;\">
\t\t\t\t<h6>Ma photo</h6>
       \t\t\t<a href=\"#\">
       \t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/team3.jpg"), "html", null, true);
        echo "\" alt=\"Photo de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "\" style=\"border: 1px solid #CCCCCC; padding: 2px;\" />
       \t\t\t</a>
        \t</div>

\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations générales</h4>
\t\t\t\t
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"));
        echo "</div>

\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"));
        echo "</div>

\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "firstname"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 36
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "firstname"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t    <div class=\"field\">";
        // line 37
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "firstname"));
        echo "</div>

\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "lastname"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "lastname"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "lastname"));
        echo "</div>

\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "birthdate"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 44
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "birthdate"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "birthdate"));
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>


\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations personnelles</h4>

\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "phone"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 56
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "phone"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 57
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "phone"));
        echo "</div>

\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "address"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 60
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "address"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 61
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "address"));
        echo "</div>

\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "city"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 64
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "city"));
        echo "</p>
\t\t\t\t \t<div class=\"field\">";
        // line 65
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "city"));
        echo "</div>

\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "zipcode"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 68
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "zipcode"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 69
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "zipcode"));
        echo "</div>

\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "country"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 72
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "country"));
        echo "</p>
\t\t\t\t    <div class=\"label\">";
        // line 73
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "country"));
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations professionnelles</h4>

\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "job"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 82
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "job"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 83
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "job"));
        echo "</div>

\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "company"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 86
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "company"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 87
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "company"));
        echo "</div>

\t\t\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "workSocialURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 90
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "workSocialURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 91
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "workSocialURL"));
        echo "</div>

\t\t\t\t\t";
        // line 93
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "facebookURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 94
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "facebookURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 95
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "facebookURL"));
        echo "</div>

\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "twitterURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 98
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "twitterURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 99
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "twitterURL"));
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$('.block_tabs_type_1 .tabs').tabs('.block_tabs_type_1 .tab_content', {
\t\t\tinitialIndex : 0
\t\t});
\t</script>

\t<div style=\"padding-top: 15px;width: 450px;\">
\t\t<h4 class=\"fw_n\">Validation</h4>

\t\t";
        // line 113
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "current"));
        echo "
\t\t\t<p class=\"label\">Mot de passe :</p>
\t\t\t<div class=\"field\">";
        // line 115
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "current"));
        echo "</div>
\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>
\t</div>

\t";
        // line 119
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

    <div class=\"button\">
\t\t<input type=\"submit\" class=\"general_button\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t</div>

\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 122,  290 => 119,  283 => 115,  278 => 113,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  244 => 94,  240 => 93,  235 => 91,  231 => 90,  227 => 89,  222 => 87,  218 => 86,  214 => 85,  209 => 83,  205 => 82,  201 => 81,  190 => 73,  186 => 72,  182 => 71,  177 => 69,  173 => 68,  169 => 67,  164 => 65,  160 => 64,  156 => 63,  151 => 61,  147 => 60,  143 => 59,  138 => 57,  134 => 56,  130 => 55,  117 => 45,  113 => 44,  109 => 43,  104 => 41,  100 => 40,  96 => 39,  91 => 37,  87 => 36,  83 => 35,  74 => 32,  70 => 31,  65 => 29,  61 => 28,  57 => 27,  45 => 20,  25 => 5,  19 => 2,  17 => 1,  94 => 32,  90 => 31,  86 => 30,  78 => 33,  75 => 23,  68 => 18,  66 => 17,  58 => 11,  55 => 10,  46 => 7,  43 => 6,  37 => 5,  30 => 3,);
    }
}
