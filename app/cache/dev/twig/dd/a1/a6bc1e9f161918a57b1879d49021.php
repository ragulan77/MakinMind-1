<?php

/* MakinMindResourceBundle:Upload:upload.html.twig */
class __TwigTemplate_dda1a6bc1e9f161918a57b1879d49021 extends Twig_Template
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
        echo " :: Upload de fichier ";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo " Upload de fichier ";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Upload de fichier</span> ";
    }

    // line 6
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content_type($context, array $blocks = array())
    {
    }

    // line 9
    public function block_resources($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("resources", $context, $blocks);
        echo " 
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 12
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

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"block_contact_us_type_1\">
    <div class=\"send_message\">
        <h4>Mes uploads</h4>
        <p class=\"text_subtitle_1\">Uploadez vos fichiers et retrouvez-les dans la rubrique \"Consultation de mes uploads\" !</p>

 <p class=\"tac\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlash", array(0 => "info"), "method"), "html", null, true);
        echo "</p>

            ";
        // line 31
        $this->env->loadTemplate("MakinMindResourceBundle:Upload:upload_content.html.twig")->display($context);
        // line 32
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "MakinMindResourceBundle:Upload:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  103 => 31,  98 => 29,  91 => 24,  88 => 23,  75 => 12,  71 => 11,  66 => 10,  63 => 9,  58 => 7,  53 => 6,  45 => 4,  39 => 3,  32 => 2,);
    }
}
