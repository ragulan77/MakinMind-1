<?php

/* MakinMindPortalBundle:Default:last-projects.html.twig */
class __TwigTemplate_9ee37ac1e16bd22c90c475c170ea06f3 extends Twig_Template
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
        return array (  55 => 17,  35 => 9,  32 => 8,  28 => 7,  25 => 6,  23 => 5,  17 => 1,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  658 => 163,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 149,  624 => 148,  621 => 147,  613 => 143,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 126,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 99,  511 => 98,  502 => 92,  498 => 91,  494 => 90,  490 => 89,  485 => 88,  479 => 86,  476 => 85,  474 => 84,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 61,  400 => 59,  394 => 57,  388 => 55,  378 => 53,  374 => 51,  366 => 49,  361 => 48,  357 => 47,  349 => 45,  347 => 44,  344 => 43,  335 => 39,  323 => 37,  319 => 35,  304 => 33,  300 => 32,  295 => 31,  292 => 30,  285 => 28,  282 => 27,  272 => 23,  270 => 22,  259 => 17,  256 => 16,  253 => 15,  250 => 14,  248 => 13,  219 => 288,  216 => 287,  214 => 281,  211 => 280,  206 => 271,  203 => 269,  198 => 259,  196 => 248,  191 => 242,  188 => 241,  185 => 239,  183 => 236,  180 => 235,  178 => 226,  175 => 225,  170 => 219,  167 => 217,  165 => 212,  162 => 211,  160 => 205,  155 => 196,  147 => 187,  142 => 182,  139 => 181,  137 => 175,  134 => 174,  132 => 168,  129 => 167,  127 => 161,  124 => 160,  122 => 154,  119 => 153,  117 => 147,  114 => 146,  112 => 141,  109 => 140,  104 => 133,  102 => 126,  97 => 114,  92 => 98,  87 => 83,  82 => 77,  79 => 76,  74 => 70,  69 => 42,  67 => 27,  62 => 21,  59 => 20,  57 => 12,  54 => 11,  52 => 3,  507 => 269,  505 => 268,  471 => 83,  468 => 235,  463 => 228,  460 => 227,  455 => 79,  452 => 223,  446 => 218,  426 => 198,  405 => 60,  401 => 179,  397 => 58,  386 => 54,  382 => 169,  372 => 162,  368 => 161,  363 => 159,  355 => 153,  352 => 46,  345 => 140,  342 => 139,  336 => 135,  324 => 142,  322 => 139,  315 => 135,  311 => 133,  308 => 132,  303 => 69,  298 => 37,  293 => 31,  287 => 29,  283 => 27,  279 => 26,  275 => 25,  271 => 24,  267 => 21,  262 => 21,  258 => 20,  251 => 17,  235 => 235,  228 => 5,  226 => 4,  223 => 3,  207 => 214,  202 => 151,  200 => 132,  149 => 193,  123 => 69,  107 => 134,  99 => 125,  94 => 113,  89 => 97,  77 => 71,  64 => 26,  58 => 33,  53 => 30,  51 => 15,  36 => 5,  30 => 1,  254 => 18,  249 => 86,  245 => 12,  241 => 84,  237 => 7,  233 => 6,  229 => 81,  225 => 80,  221 => 223,  217 => 78,  213 => 218,  209 => 272,  205 => 152,  201 => 260,  197 => 73,  193 => 247,  189 => 71,  181 => 116,  177 => 65,  173 => 220,  169 => 63,  161 => 58,  157 => 204,  152 => 195,  148 => 54,  144 => 186,  140 => 52,  135 => 50,  131 => 72,  103 => 24,  98 => 22,  93 => 19,  90 => 18,  84 => 82,  80 => 14,  75 => 45,  72 => 43,  66 => 10,  61 => 8,  56 => 31,  49 => 2,  46 => 12,  40 => 3,  33 => 2,);
    }
}
