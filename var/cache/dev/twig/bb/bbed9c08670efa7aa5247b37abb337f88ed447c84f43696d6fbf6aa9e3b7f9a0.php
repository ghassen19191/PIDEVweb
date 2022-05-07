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

/* post/postitem.html.twig */
class __TwigTemplate_0f7be9da04c21c1758a409c7436d4cbf9794bc7a19c865da59d65ba21db0c24e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/postitem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/postitem.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<link rel=\"icon\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " type=\"image/png\">
\t<title>Hunters</title>
\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/linericon/style.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/css/nice-select.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/animate-css/animate.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
\t<link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flaticon/flaticon.css"), "html", null, true);
        echo ">
\t<!-- main css -->
\t<link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
</head>

<body>

\t<!--================Header Menu Area =================-->
\t<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/r"), "html", null, true);
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
                       
\t\t\t\t\t\t\t<li class=\"nav-item \"><a class=\"nav-link\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/r"), "html", null, true);
        echo ">Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about-us.html"), "html", null, true);
        echo ">About</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item active\"  ><a class=\"nav-link\" href=";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post/front"), "html", null, true);
        echo ">News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item \"><a class=\"nav-link\" href=";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation/new"), "html", null, true);
        echo ">Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo ">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t
\t<!--================Home Banner Area =================-->
\t
\t<!--================End Home Banner Area =================-->

\t<!--================Start About Us Area =================-->
\t<section class=\"about_us_area section_gap_top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row about_content align-items-center\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"section_content\">
\t\t\t\t\t\t
                        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t</div> <br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
        </div>

\t\t\t<br>
\t\t\t<br>

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


\t
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
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stellar.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/isotope-min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "></script>
\t<!--gmaps Js-->
\t<script src=";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/theme.js"), "html", null, true);
        echo "></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t<center><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 72, $this->source); })()), "datePost", [], "any", false, false, false, 72), "format", [0 => "d/m/y"], "method", false, false, false, 72), "html", null, true);
        echo " </center>
\t\t\t\t\t\t<center><font size =\"5\" color=\"white\"<p >";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 73, $this->source); })()), "titre", [], "any", false, false, false, 73), "html", null, true);
        echo " </p></font></center>
\t\t\t\t\t\t<center>\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 74, $this->source); })()), "image", [], "any", false, false, false, 74))), "html", null, true);
        echo "\" alt=\"\" width=\"850\" height=\"450\"  ></center>
\t\t\t\t\t\t\t <br>
\t\t\t\t\t   <center > <font size =\"5\" color=\"white\"<p>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 76, $this->source); })()), "imgpost", [], "any", false, false, false, 76), "html", null, true);
        echo "</p></font></center>
\t\t\t\t\t   <br>
\t\t\t\t\t   <br>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t    <p>liste of comments</p>
\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 83
            echo "
\t\t\t\t<i class=\"fa fa-calendar\" aria-hidden=\"true\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "dateCom", [], "any", false, false, false, 84), "format", [0 => "d/m/y"], "method", false, false, false, 84), "html", null, true);
            echo " </i>
\t\t\t\t\t\t\t<h4>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomCom", [], "any", false, false, false, 85), "html", null, true);
            echo "</h4> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "descri", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>

                              
    
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
\t\t              
\t\t             

 
<br>
    <button class=\"btn\" style=\"background-color:grey;border-color: black;color: blue\"><a href=";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post/front"), "html", null, true);
        echo ">back to Posts</a></button>
<button class=\"btn\" style=\"background-color:grey;border-color: black;color: purple\"> <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_new_one", ["idPost" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 99, $this->source); })()), "idPost", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">Create new</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t

                       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/postitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 99,  436 => 98,  428 => 92,  417 => 87,  412 => 85,  408 => 84,  405 => 83,  401 => 82,  392 => 76,  387 => 74,  383 => 73,  379 => 72,  376 => 71,  366 => 70,  351 => 256,  347 => 255,  343 => 254,  338 => 252,  334 => 251,  330 => 250,  326 => 249,  322 => 248,  318 => 247,  314 => 246,  310 => 245,  306 => 244,  302 => 243,  298 => 242,  294 => 241,  290 => 240,  167 => 119,  165 => 70,  142 => 50,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  108 => 33,  94 => 22,  89 => 20,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
\t<link rel=\"stylesheet\" href={{asset(\"vendors/flaticon/flaticon.css\")}}>
\t<!-- main css -->
\t<link rel=\"stylesheet\" href={{asset(\"css/style.css\")}}>
</head>

<body>

\t<!--================Header Menu Area =================-->
\t<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href={{asset(\"index.php/r\")}}><img src={{asset(\"img/a.png\")}} width=75px></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav justify-content-center\">
                       
\t\t\t\t\t\t\t<li class=\"nav-item \"><a class=\"nav-link\" href={{asset(\"index.php/r\")}}>Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"about-us.html\")}}>About</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item active\"  ><a class=\"nav-link\" href={{asset(\"index.php/post/front\")}}>News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item \"><a class=\"nav-link\" href={{asset(\"index.php/reclamation/new\")}}>Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"contact.html\")}}>Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t
\t<!--================Home Banner Area =================-->
\t
\t<!--================End Home Banner Area =================-->

\t<!--================Start About Us Area =================-->
\t<section class=\"about_us_area section_gap_top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row about_content align-items-center\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"section_content\">
\t\t\t\t\t\t
                        {% block body %}
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t<center><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>{{post.datePost.format('d/m/y')}} </center>
\t\t\t\t\t\t<center><font size =\"5\" color=\"white\"<p >{{post.titre}} </p></font></center>
\t\t\t\t\t\t<center>\t<img src=\"{{ asset('uploads/' ~ post.image) }}\" alt=\"\" width=\"850\" height=\"450\"  ></center>
\t\t\t\t\t\t\t <br>
\t\t\t\t\t   <center > <font size =\"5\" color=\"white\"<p>{{post.imgpost}}</p></font></center>
\t\t\t\t\t   <br>
\t\t\t\t\t   <br>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t    <p>liste of comments</p>
\t\t\t{% for p in commentaire %}

\t\t\t\t<i class=\"fa fa-calendar\" aria-hidden=\"true\">{{p.dateCom.format('d/m/y')}} </i>
\t\t\t\t\t\t\t<h4>{{p.nomCom}}</h4> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>{{p.descri}}</p>

                              
    
\t\t\t\t\t\t\t{% endfor %}

\t\t              
\t\t             

 
<br>
    <button class=\"btn\" style=\"background-color:grey;border-color: black;color: blue\"><a href={{asset(\"index.php/post/front\")}}>back to Posts</a></button>
<button class=\"btn\" style=\"background-color:grey;border-color: black;color: purple\"> <a href=\"{{ path('app_commentaire_new_one', {'idPost': post.idPost}) }}\">Create new</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t

                       {% endblock %}
\t\t\t\t\t
\t\t\t\t\t\t\t</div> <br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
        </div>

\t\t\t<br>
\t\t\t<br>

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


\t
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
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
</body>

</html>", "post/postitem.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\post\\postitem.html.twig");
    }
}
