<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_fc48a75ef1837d20125cdd42dd87ec5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
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
        echo " :: Edition du profil ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Mon profil";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Profil</a> / <span>Modifier</span>
";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"block_contact_us_type_1\">
    <div class=\"send_message\">
        <h4>Editer le profil</h4>
        <p class=\"text_subtitle_1\">Merci d'éditer votre profil si celui-ci demeure incomplet.</p>

            ";
        // line 17
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
        // line 18
        echo "
    </div>
</div>
";
    }

    // line 23
    public function block_right($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"sidebar\">
    <div class=\"separator\" style=\"height:37px;\"></div>
        <div class=\"block_categories\">
            <p>
                <h6>Ou alors !</h6>
                <ul class=\"list_5\">
                    <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\">Modifier mot de passe</a></li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Voir mon profil</a></li>
                    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Supprimer mon compte</a></li>
                </ul>
            </p>
        </div>
    <div class=\"clearboth\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  90 => 31,  86 => 30,  78 => 24,  75 => 23,  68 => 18,  66 => 17,  58 => 11,  55 => 10,  46 => 7,  43 => 6,  37 => 5,  30 => 3,);
    }
}
