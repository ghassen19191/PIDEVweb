<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* basefront.html.twig */
class __TwigTemplate_b1814bc8c23adda81679d450529e2aa170ca7e113012a5b82962fcf7df847c55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<link rel=\"icon\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " type=\"image/png\">
\t<title>Hunters</title>
\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/linericon/style.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/css/nice-select.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/animate-css/animate.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flaticon/flaticon.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo " type=\"text/css\">
\t<!-- main css -->
\t<link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
\t
\t
\t
\t
\t
\t
</head>

<body>

\t<!--================Header Menu Area =================-->
\t<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home.html"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " width=75px></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav justify-content-center\">
                       
\t\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/r"), "html", null, true);
        echo ">Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about-us.html"), "html", null, true);
        echo ">About</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post/front"), "html", null, true);
        echo ">News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation/new"), "html", null, true);
        echo ">Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galery");
        echo "\">Gallery</a>
\t\t\t\t\t\t    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cartindex");
        echo "\">Panier</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesAchat");
        echo "\">Mes achats</a></li>-->
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo ">Contact</a></li>
\t\t\t\t\t\t                                                                                                       </a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li><li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "fullName", [], "any", false, false, false, 70), "html", null, true);
        echo "</span>
                ";
        // line 72
        echo "            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_index");
        echo "\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_parameter_index");
        echo "\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                ";
        // line 87
        echo "                
                <a class=\"dropdown-item\"   href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t<!--================Header Menu Area =================-->

\t<!--================Home Banner Area =================-->
\t<section class=\"home_banner_area\">
\t\t<div class=\"banner_inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"home_left_img\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/home-left.png"), "html", null, true);
        echo " alt=\"\" width=350px>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tWelcome to our site dear customer
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tvous étes les bienvenue à notre site , on vous offres l'opportunité de télécharger des milliers de jeux en ligne avec des prix raisonnables.vivez la tendance des jeux avec nous l'équipe G_CODE .
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Home Banner Area =================-->
<section class=\"blog_area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"main_title\">
\t\t\t\t\t\t<h2>Latest  news</h2>
\t\t\t\t\t\t<h1>Latest  news</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/00a8bcbdc5e5afa2538351d90379daef.jpeg"), "html", null, true);
        echo " alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<a class=\"title\" >Fortnite</a>
\t\t\t\t\t\t\t<p>Fortnite est un jeu en ligne développé par Epic Games sous la forme de différents modes de jeu qui partagent le même gameplay général et le même moteur de jeu. Les modes de jeu comprennent : Fortnite : Sauver le monde, un jeu coopératif de tir et de survie conçu pour quatre joueurs au maximum et dont le but est de combattre des zombies et de défendre des objets à l'aide de fortifications, et Fortnite Battle Royale, un jeu de battle royale en free-to-play où jusqu'à 100 joueurs se battent entre eux dans des espaces de plus en plus petits avec pour objectif d'être le dernier survivant.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/3ba095b71e0f843f7d6c04436d3f1723.jpeg"), "html", null, true);
        echo " alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<a class=\"title\" >Fifa 2022</a>
\t\t\t\t\t\t\t<p>FIFA 22 est un jeu vidéo de simulation de football publié par Electronics Arts . Il s'agit du 29e volet de cette série FIFA. Il est sorti sur Microsoft Windows, Nintendo Switch, Play Station 4, PlayStation 5, Google Stadiaet, le 1er octobre 20211,2,3.

Les versions du jeu PlayStation 5, Xbox Series  utilise  Hyper Motion Technology. </p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 hidden-md\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/dc398d293b1fc36ec6da102687dd3b7c.jpeg"), "html", null, true);
        echo " alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<a class=\"title\" >Pes 22</a>
\t\t\t\t\t\t\t<p>eFootball 2022, rappelez-vous. A l’automne, après une année supplémentaire de préparation, un passage à l’Unreal Engine et à un modèle de free-to-play, la simulation de Konami débarquait dans un état particulièrement inquiétant. Lacunes criantes sur le fond, gros soucis techniques : charcuté par les...
\t\t\t\t\t\t\tDernier grand bastion du jeu premium chez un Konami désormais décidé à vivre du mobile et du rétro, PES a fini, lui aussi, par tomber. Sa mouture 2021-2022, qu’on espérait porteuse d’un certain renouveau avec le soutien de l’Unreal Engine, a ainsi perdu son nom en même temps que son modèle économique...</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================Start About Us Area =================-->
\t<section class=\"about_us_area section_gap_top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row about_content align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"section_content\">
\t\t\t\t\t
\t\t\t\t\t\t<h6>About Us</h6>
\t\t\t\t\t\t<h1>Hunters est l'endroit idéal <br>pour jouer, créer et parler jeu vidéo.</h1>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"about_us_image_box justify-content-center\">
\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/about_img.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End About Us Area =================-->

\t<!--================First Upcoming Games Area =================-->
\t
\t<!--================End Upcoming Games Area =================-->

\t<!--================Start Recent Update Area =================-->
\t
\t<!--================End Recent Update Area =================-->


\t<!--================ Start Gallery Area =================-->
\t
\t<!--================ End Gallery Area =================-->


\t<!--========== Start Testimonials Area ==================-->
\t<br>
\t<section class=\"testimonials_area section_gap\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"testi_slider owl-carousel\">
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src=";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/121.png"), "html", null, true);
        echo " alt=\"\" width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Ultra rapide</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tTéléchargement instantané.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src=";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/00.jpg"), "html", null, true);
        echo " alt=\"\" width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Service client</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tConseillers disponibles 24/7.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src=";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/77.jpg"), "html", null, true);
        echo " alt=\"\"width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Fiable et sûr</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tPlus de 30,000 jeux!
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src=";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/c.jpg"), "html", null, true);
        echo " alt=\"\"width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Accès instantané aux jeux</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tProfitez d'offres exclusives, de mises à jour automatiques et bien plus encore parmi un choix de plus de 30 000 jeux, AAA ou indépendants.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t<!--================ End Testimonials Area ================-->


\t<!--================ Start Pricing Plans Area ================-->
\t
\t<!--================ End Pricing Plans Area ================-->


\t<!--================ Start Frequently Asked Questions Area ================-->
\t
\t<!--================ End Frequently Asked Questions Area ================-->

\t<!--================ Start Blog Area ================-->
\t
\t<!--================ End Blog Area ================-->

\t<!--================ Start Newsletter Area ================-->
\t
\t<!--================ End Newsletter Area ================-->

\t<!--================Footer Area =================-->
\t<footer class=\"footer_area section_gap_top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row footer_inner\">
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>About Farfly</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>For Business</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Premium Plans
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Reviews</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>How it Works</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Farfly Blog</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>Company</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Product Tour</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Pricing
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Founding Members</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Case Studies</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Product Updates</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>Support</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Documentation</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Data Securiry
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Site Performance</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Action Plan</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Resources</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>Legal</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Terms and conditions</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Privacy Policy
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Cookie Information</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Opt - Out</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row single-footer-widget\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"copy_right_text\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"social_widget\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!--================End Footer Area =================-->

\t<!-- Optional JavaScript -->
\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t<script src=";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stellar.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/isotope-min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "></script>
\t<!--gmaps Js-->
\t<script src=";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/theme.js"), "html", null, true);
        echo "></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 387,  569 => 386,  565 => 385,  560 => 383,  556 => 382,  552 => 381,  548 => 380,  544 => 379,  540 => 378,  536 => 377,  532 => 376,  528 => 375,  524 => 374,  520 => 373,  516 => 372,  512 => 371,  392 => 254,  379 => 244,  366 => 234,  353 => 224,  295 => 169,  278 => 155,  263 => 143,  227 => 110,  202 => 88,  199 => 87,  192 => 79,  185 => 75,  180 => 72,  176 => 70,  162 => 59,  158 => 58,  153 => 56,  149 => 55,  143 => 52,  139 => 51,  135 => 50,  131 => 49,  115 => 38,  95 => 21,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<link rel=\"icon\" href={{ asset (\"img/a.png\")}} type=\"image/png\">
\t<title>Hunters</title>
\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href={{asset (\"css/bootstrap.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"vendors/linericon/style.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"css/font-awesome.min.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"vendors/owl-carousel/owl.carousel.min.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"css/magnific-popup.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"vendors/nice-select/css/nice-select.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"vendors/animate-css/animate.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"vendors/flaticon/flaticon.css\")}}>
\t<link rel=\"stylesheet\" href={{asset (\"sbadmin2/vendor/fontawesome-free/css/all.min.css\") }} type=\"text/css\">
\t<!-- main css -->
\t<link rel=\"stylesheet\" href={{asset (\"css/style.css\")}}>
\t
\t
\t
\t
\t
\t
</head>

<body>

\t<!--================Header Menu Area =================-->
\t<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href={{asset(\"home.html\")}}><img src={{asset(\"img/a.png\")}} width=75px></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav justify-content-center\">
                       
\t\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href={{asset(\"index.php/r\")}}>Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"about-us.html\")}}>About</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"index.php/post/front\")}}>News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"index.php/reclamation/new\")}}>Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path ('galery')}}\">Gallery</a>
\t\t\t\t\t\t    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path ('app_cartindex')}}\">Panier</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path ('MesAchat')}}\">Mes achats</a></li>-->
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"contact.html\")}}>Contact</a></li>
\t\t\t\t\t\t                                                                                                       </a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li><li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>{{ app.user.fullName }}</span>
                {# <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\"> #}
            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"{{ path('user_account_index') }}\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"{{ path('user_parameter_index') }}\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                {# <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Activity Log
                </a> #}
                
                <a class=\"dropdown-item\"   href=\"{{ path('logout') }}\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t<!--================Header Menu Area =================-->

\t<!--================Home Banner Area =================-->
\t<section class=\"home_banner_area\">
\t\t<div class=\"banner_inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"home_left_img\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src={{asset(\"img/banner/home-left.png\")}} alt=\"\" width=350px>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tWelcome to our site dear customer
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tvous étes les bienvenue à notre site , on vous offres l'opportunité de télécharger des milliers de jeux en ligne avec des prix raisonnables.vivez la tendance des jeux avec nous l'équipe G_CODE .
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Home Banner Area =================-->
<section class=\"blog_area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"main_title\">
\t\t\t\t\t\t<h2>Latest  news</h2>
\t\t\t\t\t\t<h1>Latest  news</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src={{asset(\"uploads/00a8bcbdc5e5afa2538351d90379daef.jpeg\")}} alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<a class=\"title\" >Fortnite</a>
\t\t\t\t\t\t\t<p>Fortnite est un jeu en ligne développé par Epic Games sous la forme de différents modes de jeu qui partagent le même gameplay général et le même moteur de jeu. Les modes de jeu comprennent : Fortnite : Sauver le monde, un jeu coopératif de tir et de survie conçu pour quatre joueurs au maximum et dont le but est de combattre des zombies et de défendre des objets à l'aide de fortifications, et Fortnite Battle Royale, un jeu de battle royale en free-to-play où jusqu'à 100 joueurs se battent entre eux dans des espaces de plus en plus petits avec pour objectif d'être le dernier survivant.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src={{asset(\"uploads/3ba095b71e0f843f7d6c04436d3f1723.jpeg\")}} alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<a class=\"title\" >Fifa 2022</a>
\t\t\t\t\t\t\t<p>FIFA 22 est un jeu vidéo de simulation de football publié par Electronics Arts . Il s'agit du 29e volet de cette série FIFA. Il est sorti sur Microsoft Windows, Nintendo Switch, Play Station 4, PlayStation 5, Google Stadiaet, le 1er octobre 20211,2,3.

Les versions du jeu PlayStation 5, Xbox Series  utilise  Hyper Motion Technology. </p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 hidden-md\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src={{asset(\"uploads/dc398d293b1fc36ec6da102687dd3b7c.jpeg\")}} alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<a class=\"title\" >Pes 22</a>
\t\t\t\t\t\t\t<p>eFootball 2022, rappelez-vous. A l’automne, après une année supplémentaire de préparation, un passage à l’Unreal Engine et à un modèle de free-to-play, la simulation de Konami débarquait dans un état particulièrement inquiétant. Lacunes criantes sur le fond, gros soucis techniques : charcuté par les...
\t\t\t\t\t\t\tDernier grand bastion du jeu premium chez un Konami désormais décidé à vivre du mobile et du rétro, PES a fini, lui aussi, par tomber. Sa mouture 2021-2022, qu’on espérait porteuse d’un certain renouveau avec le soutien de l’Unreal Engine, a ainsi perdu son nom en même temps que son modèle économique...</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================Start About Us Area =================-->
\t<section class=\"about_us_area section_gap_top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row about_content align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"section_content\">
\t\t\t\t\t
\t\t\t\t\t\t<h6>About Us</h6>
\t\t\t\t\t\t<h1>Hunters est l'endroit idéal <br>pour jouer, créer et parler jeu vidéo.</h1>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"about_us_image_box justify-content-center\">
\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/about_img.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End About Us Area =================-->

\t<!--================First Upcoming Games Area =================-->
\t
\t<!--================End Upcoming Games Area =================-->

\t<!--================Start Recent Update Area =================-->
\t
\t<!--================End Recent Update Area =================-->


\t<!--================ Start Gallery Area =================-->
\t
\t<!--================ End Gallery Area =================-->


\t<!--========== Start Testimonials Area ==================-->
\t<br>
\t<section class=\"testimonials_area section_gap\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"testi_slider owl-carousel\">
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src={{asset(\"img/121.png\")}} alt=\"\" width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Ultra rapide</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tTéléchargement instantané.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src={{asset(\"img/00.jpg\")}} alt=\"\" width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Service client</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tConseillers disponibles 24/7.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src={{asset(\"img/77.jpg\")}} alt=\"\"width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Fiable et sûr</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tPlus de 30,000 jeux!
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"testi_item\">
\t\t\t\t\t\t<img src={{asset(\"img/c.jpg\")}} alt=\"\"width=\"75\" height=\"100\">
\t\t\t\t\t\t<h4>Accès instantané aux jeux</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"wow fadeIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tProfitez d'offres exclusives, de mises à jour automatiques et bien plus encore parmi un choix de plus de 30 000 jeux, AAA ou indépendants.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t<!--================ End Testimonials Area ================-->


\t<!--================ Start Pricing Plans Area ================-->
\t
\t<!--================ End Pricing Plans Area ================-->


\t<!--================ Start Frequently Asked Questions Area ================-->
\t
\t<!--================ End Frequently Asked Questions Area ================-->

\t<!--================ Start Blog Area ================-->
\t
\t<!--================ End Blog Area ================-->

\t<!--================ Start Newsletter Area ================-->
\t
\t<!--================ End Newsletter Area ================-->

\t<!--================Footer Area =================-->
\t<footer class=\"footer_area section_gap_top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row footer_inner\">
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>About Farfly</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>For Business</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Premium Plans
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Reviews</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>How it Works</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Farfly Blog</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>Company</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Product Tour</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Pricing
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Founding Members</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Case Studies</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Product Updates</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>Support</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Documentation</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Data Securiry
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Site Performance</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Action Plan</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Resources</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<aside class=\"f_widget ab_widget\">
\t\t\t\t\t\t<div class=\"f_title\">
\t\t\t\t\t\t\t<h4>Legal</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Terms and conditions</a></li><a href=\"#\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"></a>Privacy Policy
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Cookie Information</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"></a>Opt - Out</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row single-footer-widget\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"copy_right_text\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"social_widget\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!--================End Footer Area =================-->

\t<!-- Optional JavaScript -->
\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t<script src={{asset (\"js/jquery-3.2.1.min.js\")}}></script>
\t<script src={{asset (\"js/popper.js\")}}></script>
\t<script src={{asset (\"js/bootstrap.min.js\")}}></script>
\t<script src={{asset (\"js/stellar.js\")}}></script>
\t<script src={{asset (\"js/jquery.magnific-popup.min.js\")}}></script>
\t<script src={{asset (\"vendors/nice-select/js/jquery.nice-select.min.js\")}}></script>
\t<script src={{asset (\"vendors/isotope/imagesloaded.pkgd.min.js\")}}></script>
\t<script src={{asset (\"vendors/isotope/isotope-min.js\")}}></script>
\t<script src={{asset (\"vendors/owl-carousel/owl.carousel.min.js\")}}></script>
\t<script src={{asset (\"js/jquery.ajaxchimp.min.js\")}}></script>
\t<script src={{asset (\"vendors/counter-up/jquery.waypoints.min.js\")}}></script>
\t<script src={{asset (\"vendors/counter-up/jquery.counterup.min.js\")}}></script>
\t<script src={{asset (\"js/mail-script.js\")}}></script>
\t<!--gmaps Js-->
\t<script src={{asset (\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\")}}></script>
\t<script src={{asset (\"js/gmaps.min.js\")}}></script>
\t<script src={{asset (\"js/theme.js\")}}></script>
</body>

</html>", "basefront.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\basefront.html.twig");
    }
}
