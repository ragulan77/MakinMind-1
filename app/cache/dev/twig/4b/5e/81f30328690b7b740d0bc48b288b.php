<?php

/* FOSUserBundle::form.html.twig */
class __TwigTemplate_4b5e81f30328690b7b740d0bc48b288b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('field_label', $context, $blocks);
    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        ob_start();
        // line 3
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 4
            echo "\t\t\t<div class=\"general_info_box error demo\"><a href=\"#\" class=\"close\">Fermer</a>
\t\t\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 8
            echo "\t\t\t</div>
\t\t";
        }
        // line 10
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_field_label($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        ob_start();
        // line 15
        echo "\t    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "id"), array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  53 => 8,  44 => 6,  40 => 5,  34 => 3,  31 => 2,  28 => 1,  24 => 13,  21 => 12,  296 => 122,  290 => 119,  283 => 115,  278 => 113,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  244 => 94,  240 => 93,  235 => 91,  231 => 90,  227 => 89,  222 => 87,  218 => 86,  214 => 85,  209 => 83,  205 => 82,  201 => 81,  190 => 73,  186 => 72,  182 => 71,  177 => 69,  173 => 68,  169 => 67,  164 => 65,  160 => 64,  156 => 63,  151 => 61,  147 => 60,  143 => 59,  138 => 57,  134 => 56,  130 => 55,  117 => 45,  113 => 44,  109 => 43,  104 => 41,  100 => 40,  96 => 39,  91 => 37,  87 => 36,  83 => 35,  74 => 32,  70 => 31,  65 => 14,  61 => 28,  57 => 10,  45 => 20,  25 => 5,  19 => 1,  17 => 1,  94 => 32,  90 => 31,  86 => 30,  78 => 33,  75 => 23,  68 => 15,  66 => 17,  58 => 11,  55 => 10,  46 => 7,  43 => 6,  37 => 4,  30 => 3,);
    }
}
