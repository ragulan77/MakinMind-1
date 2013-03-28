<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2e373fc4f6790c099b4ce9f828a4fc48 extends Twig_Template
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
        echo " :: Connexion ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Se connecter</span>
";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"block_contact_us_type_1\">
\t<div class=\"send_message\">
\t\t<h4>Se connecter</h4>
\t\t<p class=\"text_subtitle_1\">Merci de remplir le formulaire de connexion pour accéder à votre interface</p>

\t\t";
        // line 16
        if ($this->getContext($context, "error")) {
            // line 17
            echo "\t\t\t<div class=\"general_info_box error demo\"><a href=\"#\" class=\"close\">Fermer</a>
\t\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "
\t\t
\t\t<div class=\"form\">
\t\t\t<form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t<div class=\"one_third\">
\t\t\t\t\t<p class=\"label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo " <span>(requis)</span></p>
\t\t\t\t\t<div class=\"field\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" class=\"req\"></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"one_third\">
\t\t\t\t\t<p class=\"label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo " <span>(requis)</span></p>
\t\t\t\t\t<div class=\"field\"><input type=\"password\" id=\"password\" name=\"_password\" class=\"req\"></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"one_third last\">
\t\t\t\t\t<p class=\"label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t\t\t\t\t<div><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"req\" /></div>
\t\t        </div>

\t\t        <div class=\"clearboth\"></div>

\t\t\t\t<div class=\"button\">
\t\t\t\t\t<input type=\"submit\" class=\"general_button\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
\t\t\t</form>
\t\t</div>

\t\t<div class=\"separator\" style=\"height:37px;\"></div>

\t\t<ul class=\"list_2\">
\t\t\t<li>Pas encore membre ? <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\">Inscris toi vite ici !</a></li>
\t\t\t<li>Mot de passe oublié ? <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_request"), "html", null, true);
        echo "\">Nous nous occupons de ça !</a></li>
\t\t</ul>

\t</div>
</div>
";
    }

    // line 60
    public function block_right($context, array $blocks = array())
    {
        // line 61
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>

\t\t<div class=\"block_categories\">
\t\t\t<h6>Ou alors !</h6>
\t\t\t<ul class=\"list_5\">
\t\t\t\t<li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\">S'inscrire</a></li>
\t\t\t\t<li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_request"), "html", null, true);
        echo "\">Mot de passe oublié</a></li>
\t\t</ul>
\t</div>
\t<div class=\"clearboth\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 68,  153 => 67,  145 => 61,  142 => 60,  132 => 53,  128 => 52,  118 => 45,  113 => 43,  103 => 36,  95 => 31,  88 => 27,  84 => 26,  79 => 24,  74 => 21,  68 => 18,  65 => 17,  63 => 16,  56 => 11,  53 => 10,  46 => 7,  43 => 6,  37 => 5,  30 => 3,);
    }
}
