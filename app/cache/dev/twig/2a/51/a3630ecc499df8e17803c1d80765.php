<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2a51a3630ecc499df8e17803c1d80765 extends Twig_Template
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
        echo "
<div class=\"fos_user_user_show\">

\t<div class=\"block_tabs_type_1\">
\t\t<div class=\"tabs\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#1\" class=\"current\">Général</a></li>
\t\t\t\t<li><a href=\"#3\">Professionnel</a></li>
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t
\t\t\t\t<ul class=\"list_5\">
\t\t\t\t\t<li>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo " : <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</strong></li>
\t\t\t\t\t<li>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " : <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</strong></li>
\t\t\t\t\t<li>Noms : <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "lastname")), "html", null, true);
        echo "</strong></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>

\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">

\t\t\t\t\t<ul class=\"list_5\">
\t\t\t\t\t\t<li>Intitulé du poste actuel : <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "job"), "html", null, true);
        echo "</strong></li>
\t\t\t\t\t\t<li>Entreprise actuelle : <strong>";
        // line 29
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "company")), "html", null, true);
        echo "</strong></li>
\t\t\t\t\t\t";
        // line 30
        if ((!(null === $this->getAttribute($this->getContext($context, "user"), "workSocialURL")))) {
            // line 31
            echo "\t\t\t\t\t\t\t<li>CV en ligne : <strong><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "workSocialURL"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "workSocialURL"), "html", null, true);
            echo "</a></strong></li>
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t";
        if ((!(null === $this->getAttribute($this->getContext($context, "user"), "facebookURL")))) {
            // line 34
            echo "\t\t\t\t\t\t\t<li>Profil Facebook : <strong><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "facebookURL"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "facebookURL"), "html", null, true);
            echo "</a></strong></li>
\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t";
        if ((!(null === $this->getAttribute($this->getContext($context, "user"), "twitterURL")))) {
            // line 37
            echo "\t\t\t\t\t\t\t<li>Profil Twitter : <strong><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "twitterURL"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "twitterURL"), "html", null, true);
            echo "</a></strong></li>
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$('.block_tabs_type_1 .tabs').tabs('.block_tabs_type_1 .tab_content', {
\t\t\tinitialIndex : 0
\t\t});
\t</script>

</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  93 => 37,  90 => 36,  82 => 34,  79 => 33,  71 => 31,  69 => 30,  65 => 29,  61 => 28,  46 => 18,  40 => 17,  34 => 16,  17 => 1,);
    }
}
