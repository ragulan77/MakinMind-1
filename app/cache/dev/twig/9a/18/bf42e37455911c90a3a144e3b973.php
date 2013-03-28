<?php

/* MakinMindPortalBundle:About:index.html.twig */
class __TwigTemplate_9a18bf42e37455911c90a3a144e3b973 extends Twig_Template
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
        echo " :: Notre équipe";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Qui sommes-nous ?";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Qui sommes-nous ?</span>
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
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"block_our_team\">
\t<h3 class=\"heading_w_icon\">L'équipe MakinMind.com</h3>
\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t<p class=\"text_2\">L'équipe de MakinMind est composée de huit étudiants de quatrième année à l'EFREI (Ecole d'Ingénieur des NTIC). Nous avons chacun des connaissances particulières dans un domaine précis ce qui nous permet de disposer d'une palette de qualifications plus que suffisante pour manager cette plateforme !</p>

\t<div class=\"separator\" style=\"height:20px;\"></div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-benjamin.jpg"), "html", null, true);
        echo "\" style=\"width: 120px; height: 160px;\" alt=\"\">
\t\t</div>
\t\t<h6 align=\"center\">Benjamin<br />BERTRAND</h6>
\t\t<span class=\"position\">Chef de projet</span>
\t</div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-christophedb.png"), "html", null, true);
        echo "\" style=\"width: 120px; height: 160px;\" alt=\"\">
\t\t</div>
\t\t<h6 align=\"center\">Christophe<br />DE BATZ</h6>
\t\t<span class=\"position\">Resp. Technique</span>
\t</div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-ragulan.jpg"), "html", null, true);
        echo "\" style=\"width: 120px; height: 160px;\" alt=\"\">
\t\t</div>
\t\t<h6 align=\"center\">Ragulan<br />CHARLES</h6>
\t\t<span class=\"position\">Co-resp. Technique</span>
\t</div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-clemence.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t</div>
\t\t<h6 align=\"center\">Clémence<br />RENAULT</h6>
\t\t<span class=\"position\">Resp. Juridique</span>
\t</div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-christophe.jpg"), "html", null, true);
        echo "\" style=\"width: 120px; height: 160px;\" alt=\"\">
\t\t</div>
\t\t<h6 align=\"center\">Christophe VERCLYTTE</h6>
\t\t<span class=\"position\">Analyste / Développeur</span>
\t</div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-julien.jpg"), "html", null, true);
        echo "\" style=\"width: 120px; height: 160px;\" alt=\"\">
\t\t</div>
\t\t<h6 align=\"center\">Julien BLANC</h6>
\t\t<span class=\"position\">Resp. Commercial</span>
\t</div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-houssem.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
\t\t<h6 align=\"center\">Houssem<br />EDDINE GRANDI</h6>
\t\t<span class=\"position\">Développeur</span>
\t</div>

\t<div class=\"teammate\">
\t\t<div class=\"photo\" align=\"center\">
\t\t\t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/team-ahmed.png"), "html", null, true);
        echo "\" style=\"width: 120px; height: 160px;\" alt=\"\">
\t\t</div>
\t\t<h6 align=\"center\">Ahmed<br />EL RHAZI</h6>
\t\t<span class=\"position\">Resp. Qualité</span>
\t</div>

\t<div class=\"separator\" style=\"height:30px;\"></div>
\t<h3 class=\"heading_w_icon\">Nos partenaires</h3>
\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t<a href=\"#\" onclick=\"window.open('http://labs.debatz.fr');\">
\t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/logolabs.png"), "html", null, true);
        echo "\" alt=\"Labs de Batz\" style=\"margin: 20px;\">
\t</a>

\t<a href=\"#\" onclick=\"window.open('http://efrei.fr');\">
\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/logoefrei.png"), "html", null, true);
        echo "\" alt=\"EFREI Paris\" style=\"margin: 20px;\">
\t</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "MakinMindPortalBundle:About:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 92,  170 => 88,  156 => 77,  146 => 70,  135 => 62,  124 => 54,  113 => 46,  102 => 38,  91 => 30,  80 => 22,  67 => 11,  64 => 10,  59 => 8,  54 => 7,  47 => 5,  44 => 4,  38 => 3,  31 => 2,);
    }
}
