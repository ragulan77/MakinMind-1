<?php

/* MakinMindPortalBundle:Default:index.html.twig */
class __TwigTemplate_881d16ed230bc0ddb659cca7cfce073d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'resources_slider' => array($this, 'block_resources_slider'),
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

    // line 3
    public function block_titlebar($context, array $blocks = array())
    {
    }

    // line 5
    public function block_resources_slider($context, array $blocks = array())
    {
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/flexslider/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/nivo/nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/onebyone/css/jquery.onebyone.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/onebyone/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/sort/jquery.sort.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/nivo/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/onebyone/jquery.onebyone.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_content_type($context, array $blocks = array())
    {
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
\t\t<div class=\"block_slogan_1\">
\t\t\t<p class=\"text_1\">Bienvenue sur la communauté de projets MakinMind !</p>
\t\t\t<p class=\"text_2\">
\t\t\t\tVous êtes détenteur d'une création ou d'un projet débutant ? Nous <strong>protégeons votre projet</strong> tout en vous permettant de <strong>travailler avec des professionnels</strong> triés selon leurs compétences. <br />Vous souhaitez <strong>intégrer un projet innovant</strong> aux côtés de passionnées, nous vous proposons de tenter l'aventure maintenant. Il y a forcément un projet qui saura vous intéresser !
\t\t\t</p>
\t\t</div>
\t\t<div class=\"line_2\" style=\"margin:0px 0px 37px;\"></div>  


";
    }

    public function getTemplateName()
    {
        return "MakinMindPortalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  73 => 17,  68 => 15,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  37 => 6,  34 => 5,  29 => 3,);
    }
}
