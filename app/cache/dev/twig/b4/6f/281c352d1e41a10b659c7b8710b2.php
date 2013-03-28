<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b46f281c352d1e41a10b659c7b8710b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "
\t\t";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "
";
    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  62 => 14,  60 => 13,  57 => 12,  48 => 9,  39 => 7,  36 => 6,  33 => 5,  28 => 3,  157 => 68,  153 => 67,  145 => 61,  142 => 60,  132 => 53,  128 => 52,  118 => 45,  113 => 43,  103 => 36,  95 => 31,  88 => 27,  84 => 26,  79 => 24,  74 => 21,  68 => 18,  65 => 17,  63 => 16,  56 => 11,  53 => 10,  46 => 7,  43 => 8,  37 => 5,  30 => 3,);
    }
}
