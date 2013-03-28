<?php

/* MakinMindProjectBundle:Project:sidebar_owner_project.html.twig */
class __TwigTemplate_f7befbef754cda3d55e1f55217667fe5 extends Twig_Template
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
        echo "<div class=\"block_categories\">
\t<h6>Projet</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "</a></li>
\t</ul>

\t<p>&nbsp;</p>

\t<h6>Métier</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_contract", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Contrat de travail</a></li>
\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_list_developpers", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Collaborateurs</a></li>
\t</ul>

\t<p>&nbsp;</p>

\t<h6>Recrutement</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_candidates", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Candidats postulants</a></li>
\t\t<li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_retained_candidates", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Candidats choisis</a></li>
\t</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:sidebar_owner_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  48 => 19,  38 => 12,  34 => 11,  22 => 4,  17 => 1,);
    }
}
