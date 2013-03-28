<?php

/* MakinMindPortalBundle:Default:last-projects.html.twig */
class __TwigTemplate_444f0ecf5560f959a6277712035a214d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"column\">
    <h3>Derniers projets</h3>
    
    <div class=\"block_footer_recent_posts\">
        ";
        // line 5
        if ((!(null === $this->getContext($context, "lastProjects")))) {
            // line 6
            echo "\t\t<ul>
\t\t    ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lastProjects"));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 8
                echo "
\t\t        <li><a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
                echo "</a></li>

\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "\t\t</ul>

\t";
        } else {
            // line 15
            echo "   \t \tAucun project pour le moment...
\t";
        }
        // line 17
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MakinMindPortalBundle:Default:last-projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  35 => 9,  32 => 8,  28 => 7,  25 => 6,  23 => 5,  17 => 1,  507 => 269,  505 => 268,  471 => 236,  468 => 235,  463 => 228,  460 => 227,  455 => 224,  452 => 223,  446 => 218,  426 => 198,  405 => 180,  401 => 179,  397 => 178,  386 => 170,  382 => 169,  372 => 162,  368 => 161,  363 => 159,  355 => 153,  352 => 152,  345 => 140,  342 => 139,  336 => 135,  324 => 142,  322 => 139,  315 => 135,  311 => 133,  308 => 132,  303 => 69,  298 => 37,  293 => 31,  287 => 28,  283 => 27,  279 => 26,  275 => 25,  271 => 24,  267 => 23,  262 => 21,  258 => 20,  254 => 18,  251 => 17,  245 => 5,  237 => 303,  235 => 235,  228 => 230,  226 => 227,  223 => 226,  221 => 223,  213 => 218,  207 => 214,  205 => 152,  202 => 151,  200 => 132,  181 => 116,  149 => 87,  131 => 72,  123 => 69,  107 => 58,  99 => 52,  94 => 50,  89 => 49,  84 => 47,  77 => 46,  75 => 45,  64 => 37,  56 => 31,  53 => 30,  51 => 15,  36 => 5,  30 => 1,  76 => 18,  73 => 17,  68 => 15,  62 => 12,  58 => 33,  54 => 10,  50 => 9,  46 => 12,  42 => 7,  37 => 6,  34 => 5,  29 => 3,);
    }
}
