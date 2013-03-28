<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e3640d545ab1ea65ee38627f5248d4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
            'content_type' => array($this, 'block_content_type'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: profil de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</span>
";
    }

    // line 10
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
    }

    // line 17
    public function block_right($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t<h6 style=\"text-align: center;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</h6>
\t\t<div style=\"text-align: center;\">
\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/team3.jpg"), "html", null, true);
        echo "\" alt=\"Photo de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "\" style=\"border: 1px solid #CCCCCC; padding: 2px;\" />
\t\t</div>
\t<div class=\"separator\" style=\"height:40px;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  77 => 20,  73 => 18,  70 => 17,  66 => 13,  63 => 12,  57 => 10,  48 => 7,  45 => 6,  39 => 5,  31 => 3,);
    }
}
