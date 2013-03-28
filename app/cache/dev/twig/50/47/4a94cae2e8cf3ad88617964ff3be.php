<?php

/* MakinMindProjectBundle:Project:owner_project_list_successful_candidates.html.twig */
class __TwigTemplate_50474a94cae2e8cf3ad88617964ff3be extends Twig_Template
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
            'right' => array($this, 'block_right'),
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
        echo " :: Candidats choisis";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Candidats choisis";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Candidats choisis</span>
";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contracts"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 14
            echo "\t\t";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                // line 15
                echo "\t\t<div class=\"one_half\">
\t\t";
            } else {
                // line 17
                echo "\t\t<div class=\"one_half last\">
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"block_testimonials_1\">
\t\t\t\t";
            // line 20
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture")))) {
                // line 21
                echo "\t\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "extension"), "html", null, true);
                echo "\" alt=\"user avatar\"></a></div>
\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"user unknown avatar\"></a></div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<p>Travaille chez ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "company"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p>Date de votre signature : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "creaDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p>Salaire proposé : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "amount"), "html", null, true);
            echo " euros</p>
\t\t\t\t\t\t<div class=\"tail\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"author\"><p><a href=\"#\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "lastName"), "html", null, true);
            echo " </a> <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "job"), "html", null, true);
            echo "</span></p></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearboth\"></div>
\t\t\t</div>
\t\t</div>

\t\t";
            // line 38
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                // line 39
                echo "\t\t<div class=\"clearboth\"></div>
\t\t<div class=\"separator\" style=\"height:34px;\"></div>
\t\t";
            }
            // line 42
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 45
    public function block_right($context, array $blocks = array())
    {
        // line 46
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t";
        // line 48
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 49
        echo "\t<div class=\"separator\" style=\"height:40px;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_project_list_successful_candidates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 49,  178 => 48,  174 => 46,  171 => 45,  155 => 42,  150 => 39,  148 => 38,  135 => 32,  129 => 29,  125 => 28,  121 => 27,  117 => 25,  111 => 23,  103 => 21,  101 => 20,  98 => 19,  94 => 17,  90 => 15,  87 => 14,  69 => 13,  66 => 12,  60 => 8,  55 => 7,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
