<?php

/* ::layout.html.twig */
class __TwigTemplate_11bfd67c3430c66040e337fc2960a374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'resources' => array($this, 'block_resources'),
            'resources_slider' => array($this, 'block_resources_slider'),
            'jsBodyTag' => array($this, 'block_jsBodyTag'),
            'projects' => array($this, 'block_projects'),
            'titlebar' => array($this, 'block_titlebar'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
            'slider' => array($this, 'block_slider'),
            'content_type' => array($this, 'block_content_type'),
            'content' => array($this, 'block_content'),
            'right' => array($this, 'block_right'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<meta name=\"keywords\" content=\"\">
<meta name=\"description\" content=\"\">

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"layout/plugins/html5.js\"></script>
<![endif]-->

";
        // line 17
        $this->displayBlock('resources', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('resources_slider', $context, $blocks);
        // line 33
        echo "

</head>

<body class=\"theme_color_green\"";
        // line 37
        $this->displayBlock('jsBodyTag', $context, $blocks);
        echo ">
    <div class=\"wrapper sticky_footer\">

        <header>
            <div id=\"header\">

                <section class=\"section_top section_slider_1\" style=\"height: 25px; text-align: right;\">
                    <nav class=\"inner\">
                        ";
        // line 45
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") && (!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session"))))) {
            // line 46
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
            echo "\" class=\"general_button small\"><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</span></a>  
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\" class=\"general_button small type_3\"><span>Quitter</span></a>
                        ";
        } else {
            // line 49
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\" class=\"general_button small\"><span>Se connecter</span></a>  
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
            echo "\" class=\"general_button small\"><span>S'inscrire</span></a>
                        ";
        }
        // line 52
        echo "
                    </nav>
                </section>

                <section class=\"section_top\">
                    <div class=\"inner\">
                        <div id=\"logo\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portal_home"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/logo1.png"), "html", null, true);
        echo "\" alt=\"MakinMind\" title=\"MakinMind\"></a></div>
                        
                        <nav class=\"main_menu\">
                            <ul>
                                <li><a href=\"index.html\">LE PRINCIPE<span class=\"subtext\">comment ça marche ?</span></a>
                                    
                                    <ul>
                                        <li><a href=\"index_2.html\">Vous avez un projet</a></li>
                                        <li><a href=\"index_3.html\">Vous avez des compétences</a></li>
                                    </ul>
                                </li>
                                <li";
        // line 69
        $this->displayBlock('projects', $context, $blocks);
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects"), "html", null, true);
        echo "\">LES PROJETS<span class=\"subtext\">les projets en cours</span></a>
                                    
                                    <ul>
                                        <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects"), "html", null, true);
        echo "\">Voir les projets</a>
                                        <li><a href=\"portfolio_1_1_c.html\">Par thème...</a>
                                            
                                            <ul>
                                                <li><a href=\"portfolio_1_1_c.html\">Développement web</a></li>
                                                <li><a href=\"portfolio_1_2_c.html\">Développement logiciel</a></li>
                                                <li><a href=\"portfolio_1_3_c.html\">Recherche scientifique</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"portfolio_3_4_c.html\">Recherche avancée</a>
                                    </ul>
                                </li>
                                <li><a href=\"#\">ENTREPRENEURS<span class=\"subtext\">vous avez un projet ?</span></a>
                                    
                                    <ul>
                                        <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_createProject"), "html", null, true);
        echo "\">Créer un nouveau projet...</a>
                                            
                                                <ul>
                                                <li><a href=\"portfolio_1_1_c.html\">Développement web</a></li>
                                                <li><a href=\"portfolio_1_2_c.html\">Développement logiciel</a></li>
                                                <li><a href=\"portfolio_1_3_c.html\">Recherche scientifique</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Outils de conception</a></li>
                                        <li><a href=\"#\">Outils de protection</a></li>
                                        <li><a href=\"#\">Outils de création</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href=\"blog.html\">COLLABORATEURS<span class=\"subtext\">vous avez des compétences ?</span></a>
                                    
                                    <ul>
                                        <li><a href=\"blog.html\">Rejoindre un projet...</a>
                                        <ul>
                                                <li><a href=\"portfolio_1_1_c.html\">Développement web</a></li>
                                                <li><a href=\"portfolio_1_2_c.html\">Développement logiciel</a></li>
                                                <li><a href=\"portfolio_1_3_c.html\">Recherche scientifique</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"blog_post.html\">Compétences</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"contact.html\">A PROPOS<span class=\"subtext\">qui sommes nous ?</span></a>
                                    <ul>
                                        <li><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about_us"), "html", null, true);
        echo "\">Qui sommes-nous ?</a></li>
                                        <li><a href=\"blog_post.html\">Contact</a></li>
                                        <li><a href=\"blog_post.html\">Conditions générales</a></li>
                                        <li><a href=\"portfolio_1_2_c.html\">Mentions légales</a></li>
                                        <li><a href=\"portfolio_1_3_c.html\">Respect de la vie privée</a></li>
                                            
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        
                        <div class=\"clearboth\"></div>
                    </div>
                </section>

                ";
        // line 132
        $this->displayBlock('titlebar', $context, $blocks);
        // line 151
        echo "                
                ";
        // line 152
        $this->displayBlock('slider', $context, $blocks);
        // line 214
        echo "
            </div>
        </header>
        
        <div id=\"content\"";
        // line 218
        $this->displayBlock('content_type', $context, $blocks);
        echo ">
            <div class=\"inner\">
                <div class=\"general_content\">
                    <div class=\"main_content\">
                        <div class=\"separator\" style=\"height:35px;\"></div>
                        ";
        // line 223
        $this->displayBlock('content', $context, $blocks);
        // line 226
        echo "                        </div>
                        ";
        // line 227
        $this->displayBlock('right', $context, $blocks);
        // line 230
        echo "                    <div class=\"clearboth\"></div>
                </div>
            </div>
        </div>

        ";
        // line 235
        $this->displayBlock('footer', $context, $blocks);
        // line 303
        echo "
    </div>
</body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MakinMind";
    }

    // line 17
    public function block_resources($context, array $blocks = array())
    {
        // line 18
        echo "<link href=\"http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\">

<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/prettyphoto/jquery.prettyPhoto.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/tools/jquery.tools.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/scrollto/jquery.scroll.to.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/ajaxform/jquery.form.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 31
    public function block_resources_slider($context, array $blocks = array())
    {
    }

    // line 37
    public function block_jsBodyTag($context, array $blocks = array())
    {
    }

    // line 69
    public function block_projects($context, array $blocks = array())
    {
    }

    // line 132
    public function block_titlebar($context, array $blocks = array())
    {
        // line 133
        echo "                <section class=\"section_title\">
                    <div class=\"inner\">
                        <div class=\"block_title\"><h1>";
        // line 135
        $this->displayBlock('titlebar_title', $context, $blocks);
        echo "</h1></div>
                        
                        <div class=\"block_breadcrumbs\">
                            <p>
                                ";
        // line 139
        $this->displayBlock('titlebar_ariane', $context, $blocks);
        // line 142
        echo "                            </p>
                        </div>
                        
                        <div class=\"clearboth\"></div>
                    </div>
                </section>
                <div class=\"line_3\"></div>
                
                ";
    }

    // line 135
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Mon titre";
    }

    // line 139
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 140
        echo "                                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portal_home"), "html", null, true);
        echo "\">Index</a> / 
                                ";
    }

    // line 152
    public function block_slider($context, array $blocks = array())
    {
        // line 153
        echo "                <section class=\"section_slider_1\">
                    <div class=\"slider_line_1\"></div>
                    <div class=\"slider_line_2\"></div>
                    
                    <div id=\"slider\" class=\"slider\">
                        <div class=\"oneByOne_item\">
                            <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_1_1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_1_1\" data-ease-type=\"bounceInRight\">

                            <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_1_2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_1_2\" data-ease-type=\"bounceInRight\">
                            <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_1_3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_1_3\" data-ease-type=\"bounceInRight\">
                            <div class=\"text_1_1\" data-ease-type=\"fadeInUp\">MakinMind.com</div>
                            <div class=\"text_1_2\" data-ease-type=\"fadeInUp\">le projet, autrement</div>
                            <div class=\"text_1_3\" data-ease-type=\"fadeInUp\">MakinMind vous protège, vous assiste, et vous permet de réussir vos projets aux côtés de passionnés voulant s'investir.</div>
                        </div>
                        
                        <div class=\"oneByOne_item\">
                            <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_2_1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_2_1\" data-ease-type=\"fadeInRight\">
                            <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_2_2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_2_2\" data-ease-type=\"fadeInRight\">
                            <div class=\"text_2_1\" data-ease-type=\"fadeIn\">Entourez-vous de passionnés</div>
                            <div class=\"text_2_2\" data-ease-type=\"fadeIn\">Développez avec eux en toute sécurité</div>
                            <div class=\"text_2_3\" data-ease-type=\"fadeIn\">Nous nous chargeons de protéger votre idée tout en vous permettant de menez à bien votre projet sans aucune crainte !</div>
                            <div class=\"text_2_4\" data-ease-type=\"fadeIn\"><a href=\"#\" class=\"general_button big arrow_right\"><span>En savoir plus</span></a></div>
                        </div>
                        
                        <div class=\"oneByOne_item\">
                            <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_3_1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_3_1\" data-ease-type=\"bounceInDown\">
                            <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_3_2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_3_2\" data-ease-type=\"bounceInDown\">
                            <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_3_3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_3_3\" data-ease-type=\"bounceInDown\">
                            <div class=\"text_3_1\" data-ease-type=\"fadeInLeft\">Trois thèmes</div>
                            <div class=\"text_3_2\" data-ease-type=\"fadeInLeft\">pour vos projets</div>
                            <div class=\"text_3_3\" data-ease-type=\"fadeInLeft\">Classez votre projet dans une catégorie</div>
                            <div class=\"text_3_4\" data-ease-type=\"fadeInLeft\">Les travailleurs pourront alors y avoir accès plus rapidement et votre idée aura alors davantage de chance d'intéresser.</div>
                            <div class=\"text_3_5\" data-ease-type=\"fadeInLeft\"><a href=\"#\" class=\"general_button big arrow_right\"><span>En savoir plus</span></a></div>
                        </div>
                        
                        <div class=\"oneByOne_item\">
                            <div class=\"video_4_1\" data-ease-type=\"fadeIn\"><iframe src=\"http://player.vimeo.com/video/36778012?badge=0\" width=\"512\" height=\"288\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                            <div class=\"text_4_1\" data-ease-type=\"fadeInLeft\">MakinMind <b>répond</b> à toutes</div>
                            <div class=\"text_4_2\" data-ease-type=\"fadeInLeft\">vos <b>questions</b> en vidéo</div>
                            <div class=\"text_4_3\" data-ease-type=\"fadeInLeft\">Présentation des services disponibles</div>
                            <div class=\"text_4_4\" data-ease-type=\"fadeInLeft\">pourquoi utiliser MakinMind ? Quels gains pour votre projet ? Quels outils sont proposés ? Comment suis-je rémunéré ?</div>
                            <div class=\"text_4_5\" data-ease-type=\"fadeInLeft\"><a href=\"#\" class=\"general_button big arrow_right\"><span>En savoir plus</span></a></div>
                        </div>
                    </div>
                    
                    <div class=\"static_pic\"><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_static.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                    
                    <script type=\"text/javascript\">
                        \$(function() {
                            \$('#slider').oneByOne({
                                width : 2000,
                                className : 'oneByOne1',                 
                                easeType : 'bounceInRight',
                                slideShow : false,
                                showArrow : true,
                                showButton : false
                            });
                        });
                    </script>
                </section>
                ";
    }

    // line 218
    public function block_content_type($context, array $blocks = array())
    {
        echo " class=\"right_sidebar\"";
    }

    // line 223
    public function block_content($context, array $blocks = array())
    {
        // line 224
        echo "                
                        ";
    }

    // line 227
    public function block_right($context, array $blocks = array())
    {
        // line 228
        echo "
                        ";
    }

    // line 235
    public function block_footer($context, array $blocks = array())
    {
        // line 236
        echo "        <footer>
            <div id=\"footer\">
                <section class=\"section_top\">
                    <div class=\"inner\">
                        <div class=\"block_to_top\">
                            <a href=\"#\">RETOUR EN HAUT</a>                     
                        </div>
                        
                        <div class=\"block_footer_widgets\">
                            <div class=\"column\">
                                <h3>A propos</h3>
                                
                                <div class=\"block_footer_about\">
                                    <p>Equipe MakinMind France.</p>
                                    <p>&nbsp;</p>
                                    <p>Adresse: 46, rue Saint Charles, 78000 Versailles, France</p>
                                    <p>Téléphone: +33 687757602</p>
                                    <p>Email: infos@makinmind.com</p>
                                </div>
                                
                                <div class=\"block_footer_social_1\">
                                    <ul>
                                        <li><a href=\"#\" class=\"twitter\">Twitter</a></li>
                                        <li><a href=\"#\" class=\"facebook\">Facebook</a></li>
                                        <li><a href=\"#\" class=\"pinterest\">Pinterest</a></li>
                                        <li><a href=\"#\" class=\"vimeo\">Vimeo</a></li>
                                        <li><a href=\"#\" class=\"rss\">RSS</a></li>
                                        <li><a href=\"#\" class=\"flickr\">Flickr</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            ";
        // line 268
        echo $this->env->getExtension('actions')->renderAction("MakinMindPortalBundle:Default:lastProjects", array(), array());
        // line 269
        echo "                            
                            <div class=\"column\">
                                <h3>Latest Tweets</h3>
                                
                                <div class=\"block_footer_tweets\">
                                   
                                </div>
                            </div>
                     
                            
                            <div class=\"clearboth\"></div>
                        </div>
                    </div>
                </section>
                
                <section class=\"section_bottom\">
                    <div class=\"inner\">
                        <div class=\"block_bottom_menu\">
                            <ul>
                                <li><a href=\"#\">Plan du site</a></li>
                                <li><a href=\"#\">Conditions</a></li>
                                <li><a href=\"#\">Confidentialité</a></li>
                            </ul>
                        </div>
                        
                        <div class=\"block_copyrights\"><p>Copyright &copy; 2013 MakinMind Corporation. All rights reserved.</p></div>
                        
                        <div class=\"clearboth\"></div>
                    </div>
                </section>
            </div>
        </footer>
        
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 269,  505 => 268,  471 => 236,  468 => 235,  463 => 228,  460 => 227,  455 => 224,  452 => 223,  446 => 218,  426 => 198,  405 => 180,  401 => 179,  397 => 178,  386 => 170,  382 => 169,  372 => 162,  368 => 161,  363 => 159,  355 => 153,  352 => 152,  345 => 140,  342 => 139,  336 => 135,  324 => 142,  322 => 139,  315 => 135,  311 => 133,  308 => 132,  303 => 69,  298 => 37,  293 => 31,  287 => 28,  283 => 27,  279 => 26,  275 => 25,  271 => 24,  267 => 23,  262 => 21,  258 => 20,  251 => 17,  235 => 235,  228 => 230,  226 => 227,  223 => 226,  207 => 214,  202 => 151,  200 => 132,  149 => 87,  123 => 69,  107 => 58,  99 => 52,  94 => 50,  89 => 49,  77 => 46,  64 => 37,  58 => 33,  53 => 30,  51 => 17,  36 => 5,  30 => 1,  254 => 18,  249 => 86,  245 => 5,  241 => 84,  237 => 303,  233 => 82,  229 => 81,  225 => 80,  221 => 223,  217 => 78,  213 => 218,  209 => 76,  205 => 152,  201 => 74,  197 => 73,  193 => 72,  189 => 71,  181 => 116,  177 => 65,  173 => 64,  169 => 63,  161 => 58,  157 => 57,  152 => 55,  148 => 54,  144 => 53,  140 => 52,  135 => 50,  131 => 72,  103 => 24,  98 => 22,  93 => 19,  90 => 18,  84 => 47,  80 => 14,  75 => 45,  72 => 12,  66 => 10,  61 => 8,  56 => 31,  49 => 5,  46 => 4,  40 => 3,  33 => 2,);
    }
}
