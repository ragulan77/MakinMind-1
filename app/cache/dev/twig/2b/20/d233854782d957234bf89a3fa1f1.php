<?php

/* MakinMindProjectBundle:Project:owner_project_list_developers.html.twig */
class __TwigTemplate_2b20d233854782d957234bf89a3fa1f1 extends Twig_Template
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
        echo " :: vos collaborateurs";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Collaborateurs";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " 
\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_projects"), "html", null, true);
        echo "\">Projets</a> / 
\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "</a> / <span>Collaborateurs</span>
";
    }

    // line 9
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
\t<h3 class=\"heading_w_icon\">Vos ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "contracts")), "html", null, true);
        echo " collaborateurs</h3>
\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t";
        // line 18
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
            // line 19
            echo "\t";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                // line 20
                echo "\t\t<div class=\"one_half\">
\t";
            } else {
                // line 22
                echo "\t\t<div class=\"one_half last\">
\t";
            }
            // line 24
            echo "\t\t<div class=\"block_testimonials_1\">
\t\t\t";
            // line 25
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture")))) {
                // line 26
                echo "\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "extension"), "html", null, true);
                echo "\" alt=\"user avatar\"></a></div>
\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"user unknown avatar\"></a></div>
\t\t\t";
            }
            // line 30
            echo "\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t";
            // line 32
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "company")))) {
                // line 33
                echo "\t\t\t\t\t\t\t<p>Travaille chez ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "company")), "html", null, true);
                echo "</p>
\t\t\t\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t\t\t\t<p>Employeur non connu.</p>
\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t\t<p>Date de votre signature ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "creaDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p>Date de sa signature ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "signDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<div class=\"tail\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"author\"><p><a href=\"#\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "lastName"), "html", null, true);
            echo " </a>&nbsp;&nbsp; <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "job"), "html", null, true);
            echo "</span></p></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearboth\"></div>
\t\t\t</div>
\t\t</div>

\t\t";
            // line 48
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                // line 49
                echo "\t\t\t<div class=\"clearboth\"></div>
\t\t\t<div class=\"separator\" style=\"height:34px;\"></div>
\t\t";
            }
            // line 52
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
        // line 53
        echo "

\t<div class=\"separator\" style=\"height:45px;\"></div>

\t<h3 class=\"heading_w_icon\">Chef de projet</h3>
\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t";
        // line 60
        if ((null === $this->getContext($context, "projectChief"))) {
            // line 61
            echo "\t\t<div class=\"general_info_box warning\">
\t\t\t<p>Vous n'avez aucun chef de project actuellement, il est important de nommer un chef de projet !</p>
\t\t</div>
\t\t<div class=\"separator\" style=\"height:35px;\"></div>

\t";
        } else {
            // line 67
            echo "
\t\t<div class=\"one_half last\">
\t\t\t<div class=\"block_testimonials_1\">
\t\t\t\t";
            // line 70
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "picture")))) {
                // line 71
                echo "\t\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "picture"), "url"), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "picture"), "extension"), "html", null, true);
                echo "\" alt=\"user avatar\"></a></div>
\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"user unknown avatar\"></a></div>
\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t";
            // line 77
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "company")))) {
                // line 78
                echo "\t\t\t\t\t\t\t\t<p style=\"font-weight: bold;\">Travaille chez ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "company")), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t\t\t\t\t<p style=\"font-weight: bold;\">Employeur non connu.</p>
\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t<p>Date de votre signature ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "projectChief"), "creaDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>Date de sa signature ";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "projectChief"), "signDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<div class=\"tail\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"author\"><p><a href=\"#\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "lastName"), "html", null, true);
            echo " </a>&nbsp;&nbsp; <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "job"), "html", null, true);
            echo "</span></p></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearboth\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"separator\" style=\"height:35px;\"></div>
\t\t\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>
\t";
        }
        // line 96
        echo "

\t
\t

\t<form method=\"post\" action=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_list_developpers", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">
\t\t<div class=\"oh\">
\t\t\t<div class=\"block_contact_us_type_1\">
\t\t    \t<div class=\"send_message\">
\t\t\t\t\t<div class=\"form\" style=\"width: 75%;\">
\t\t
\t\t\t\t\t\t<p class=\"label\">
\t\t\t\t\t\t\tNommer un nouveau chef de projet : 
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"field\" style=\"border: none;\">
\t\t\t\t\t\t\t<select name=\"projectChief\" onchange=\"if (this.value != -1) this.form.submit();\">
\t\t\t\t\t\t\t\t<optgroup label=\"Général\">
\t\t\t\t\t\t\t\t\t<option value=\"-1\" selected=\"selected\"></option>
\t\t\t\t\t\t\t\t\t";
        // line 115
        if ((!(null === $this->getContext($context, "projectChief")))) {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"-2\">Destituer ";
            echo twig_escape_filter($this->env, ((twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "firstName")) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projectChief"), "worker"), "lastName"))), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t\t</optgroup>

\t\t\t\t\t\t\t\t<optgroup label=\"Collaborateurs\">
\t\t\t\t\t\t\t\t";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contracts"));
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 122
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 123
            if ((!(null === $this->getContext($context, "projectChief")))) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "contract"), "id") != $this->getAttribute($this->getContext($context, "projectChief"), "id"))) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "id"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 127
                    echo twig_escape_filter($this->env, ((twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "firstName")) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "lastName"))), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</option>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 132
                echo "
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 134
                echo twig_escape_filter($this->env, ((twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "firstName")) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "lastName"))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</option>

\t\t\t\t\t\t\t\t\t";
            }
            // line 138
            echo "
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 140
        echo "\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>


";
    }

    // line 152
    public function block_right($context, array $blocks = array())
    {
        // line 153
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t";
        // line 155
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 156
        echo "\t<div class=\"separator\" style=\"height:40px;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_project_list_developers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 156,  389 => 155,  385 => 153,  382 => 152,  368 => 140,  361 => 138,  354 => 134,  350 => 133,  347 => 132,  344 => 131,  337 => 127,  333 => 126,  330 => 125,  327 => 124,  325 => 123,  322 => 122,  318 => 121,  313 => 118,  307 => 116,  305 => 115,  288 => 101,  281 => 96,  265 => 87,  258 => 83,  253 => 82,  249 => 80,  243 => 78,  241 => 77,  237 => 75,  231 => 73,  223 => 71,  221 => 70,  216 => 67,  208 => 61,  206 => 60,  197 => 53,  183 => 52,  178 => 49,  176 => 48,  163 => 42,  156 => 38,  151 => 37,  147 => 35,  141 => 33,  139 => 32,  135 => 30,  129 => 28,  121 => 26,  119 => 25,  116 => 24,  112 => 22,  108 => 20,  105 => 19,  88 => 18,  82 => 15,  79 => 14,  76 => 13,  70 => 10,  65 => 9,  57 => 7,  53 => 6,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
