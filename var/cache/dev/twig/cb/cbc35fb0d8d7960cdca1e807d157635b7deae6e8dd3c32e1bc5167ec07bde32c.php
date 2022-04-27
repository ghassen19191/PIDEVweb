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

/* baseback.html.twig */
class __TwigTemplate_abaf569df7b0de4730726f4663e3d972c9553ba1bcd0c98de89993a66878ff24 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

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
\t<!-- main css -->
\t<link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
</head>

<body>

\t<!--================Header Menu Area =================-->
\t<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\" >
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\"><img src=";
        // line 31
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
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/t"), "html", null, true);
        echo ">Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/commentaire"), "html", null, true);
        echo ">Commentaire</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post"), "html", null, true);
        echo ">News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation"), "html", null, true);
        echo ">Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
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
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/home-left.png"), "html", null, true);
        echo " alt=\"\" width=350px>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tWelcome Admin
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Home Banner Area =================-->

\t<!--================Start About Us Area =================-->
\t

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
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stellar.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/isotope-min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "></script>
\t<!--gmaps Js-->
\t<script src=";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/theme.js"), "html", null, true);
        echo "></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 188,  321 => 187,  317 => 186,  312 => 184,  308 => 183,  304 => 182,  300 => 181,  296 => 180,  292 => 179,  288 => 178,  284 => 177,  280 => 176,  276 => 175,  272 => 174,  268 => 173,  264 => 172,  155 => 66,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  105 => 31,  91 => 20,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<link rel=\"icon\" href={{asset(\"img/a.png\")}} type=\"image/png\">
\t<title>Hunters</title>
\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href={{asset(\"css/bootstrap.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/linericon/style.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"css/font-awesome.min.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/owl-carousel/owl.carousel.min.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"css/magnific-popup.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/nice-select/css/nice-select.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/animate-css/animate.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/flaticon/flaticon.css\")}}>
\t<!-- main css -->
\t<link rel=\"stylesheet\" href={{asset(\"css/style.css\")}}>
</head>

<body>

\t<!--================Header Menu Area =================-->
\t<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\" >
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\"><img src={{asset(\"img/a.png\")}} width=75px></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav justify-content-center\">
                       
\t\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href={{asset(\"index.php/t\")}}>Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"index.php/commentaire\")}}>Commentaire</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"index.php/post\")}}>News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"index.php/reclamation\")}}>Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\tWelcome Admin
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Home Banner Area =================-->

\t<!--================Start About Us Area =================-->
\t

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
\t<script src={{asset(\"js/jquery-3.2.1.min.js\")}}></script>
\t<script src={{asset(\"js/popper.js\")}}></script>
\t<script src={{asset(\"js/bootstrap.min.js\")}}></script>
\t<script src={{asset(\"js/stellar.js\")}}></script>
\t<script src={{asset(\"js/jquery.magnific-popup.min.js\")}}></script>
\t<script src={{asset(\"vendors/nice-select/js/jquery.nice-select.min.js\")}}></script>
\t<script src={{asset(\"vendors/isotope/imagesloaded.pkgd.min.js\")}}></script>
\t<script src={{asset(\"vendors/isotope/isotope-min.js\")}}></script>
\t<script src={{asset(\"vendors/owl-carousel/owl.carousel.min.js\")}}></script>
\t<script src={{asset(\"js/jquery.ajaxchimp.min.js\")}}></script>
\t<script src={{asset(\"vendors/counter-up/jquery.waypoints.min.js\")}}></script>
\t<script src={{asset(\"vendors/counter-up/jquery.counterup.min.js\")}}></script>
\t<script src={{asset(\"js/mail-script.js\")}}></script>
\t<!--gmaps Js-->
\t<script src={{asset(\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\")}}></script>
\t<script src={{asset(\"js/gmaps.min.js\")}}></script>
\t<script src={{asset(\"js/theme.js\")}}></script>
</body>

</html>", "baseback.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\baseback.html.twig");
    }
}
