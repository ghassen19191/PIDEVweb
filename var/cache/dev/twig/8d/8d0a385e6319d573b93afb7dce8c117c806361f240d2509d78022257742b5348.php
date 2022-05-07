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

/* front/post.html.twig */
class __TwigTemplate_7a15034f49eabe7c8e33d53a774c7639ba86f79c374d3d2e97de781fdcfcd881 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/post.html.twig"));

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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
\t<link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flaticon/flaticon.css"), "html", null, true);
        echo ">
\t<!-- main css -->
\t<link rel=\"stylesheet\" href=";
        // line 21
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
        // line 32
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
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/r"), "html", null, true);
        echo ">Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about-us.html"), "html", null, true);
        echo ">About</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item active\"  ><a class=\"nav-link\" href=";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post/front"), "html", null, true);
        echo ">News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item \"><a class=\"nav-link\" href=";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation/new"), "html", null, true);
        echo ">Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo ">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t<!--================Header Menu Area =================-->
<section class=\"banner_area\">
\t\t\t<div class=\"banner_inner d-flex align-items-center\">
\t\t\t\t<div class=\"overlay bg-parallax\" data-stellar-ratio=\"0.9\" data-stellar-vertical-offset=\"0\" data-background=\"\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"banner_content text-center\">
\t\t\t\t\t\t<div class=\"page_link\">
\t\t\t\t\t\t\t<a href=";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/r"), "html", null, true);
        echo ">Home</a>
\t\t\t\t\t\t\t<a href=";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post/front"), "html", null, true);
        echo ">News</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2>vivez avec nous les actualités des jeux vidéos</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t<!--================Home Banner Area =================-->
\t
\t<!--================End Home Banner Area =================-->

\t<!--================Start About Us Area =================-->
\t<section class=\"blog_area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "\t\t\t\t\t\t\t</div> <br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"navigation\">
            ";
        // line 117
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 117, $this->source); })()));
        echo "
\t\t\t</div>
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
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stellar.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/isotope-min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "></script>
\t<!--gmaps Js-->
\t<script src=";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/theme.js"), "html", null, true);
        echo "></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "\t\t\t<div class=\"row\">
\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 85
            echo "\t\t\t ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "enable", [], "any", false, false, false, 85), 0))) {
                // line 86
                echo "\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/blog_img1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<center> <a class=\"title\"font size =\"4\" > ";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titre", [], "any", false, false, false, 92), "html", null, true);
                echo "</a></font></center> <br> <br>
\t\t\t\t\t\t<center>\t<img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 93))), "html", null, true);
                echo "\" alt=\"\" width=\"290\" height=\"200\"  ></center><br>
\t\t\t\t\t\t<center><font size =\"2\" color=\"white\"\t<p>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "imgpost", [], "any", false, false, false, 94), "html", null, true);
                echo "</p></center>
\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "datePost", [], "any", false, false, false, 96), "format", [0 => "d/m/y"], "method", false, false, false, 96), "html", null, true);
                echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postcom", ["idPost" => twig_get_attribute($this->env, $this->source, $context["p"], "idPost", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\"><i  aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postcom", ["idPost" => twig_get_attribute($this->env, $this->source, $context["p"], "idPost", [], "any", false, false, false, 100)]), "html", null, true);
                echo "\"><i  aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postcom", ["idPost" => twig_get_attribute($this->env, $this->source, $context["p"], "idPost", [], "any", false, false, false, 103)]), "html", null, true);
                echo "\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i>comments </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t
\t\t\t\t

                       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 110,  454 => 109,  445 => 103,  439 => 100,  435 => 99,  429 => 96,  424 => 94,  420 => 93,  416 => 92,  408 => 86,  405 => 85,  401 => 84,  398 => 83,  388 => 82,  373 => 252,  369 => 251,  365 => 250,  360 => 248,  356 => 247,  352 => 246,  348 => 245,  344 => 244,  340 => 243,  336 => 242,  332 => 241,  328 => 240,  324 => 239,  320 => 238,  316 => 237,  312 => 236,  190 => 117,  185 => 114,  183 => 82,  163 => 65,  159 => 64,  141 => 49,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  107 => 32,  93 => 21,  88 => 19,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  53 => 8,  44 => 1,);
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
\t<!--================Header Menu Area =================-->
<section class=\"banner_area\">
\t\t\t<div class=\"banner_inner d-flex align-items-center\">
\t\t\t\t<div class=\"overlay bg-parallax\" data-stellar-ratio=\"0.9\" data-stellar-vertical-offset=\"0\" data-background=\"\"></div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"banner_content text-center\">
\t\t\t\t\t\t<div class=\"page_link\">
\t\t\t\t\t\t\t<a href={{asset(\"index.php/r\")}}>Home</a>
\t\t\t\t\t\t\t<a href={{asset(\"index.php/post/front\")}}>News</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2>vivez avec nous les actualités des jeux vidéos</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t<!--================Home Banner Area =================-->
\t
\t<!--================End Home Banner Area =================-->

\t<!--================Start About Us Area =================-->
\t<section class=\"blog_area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t
\t\t\t\t\t\t\t{% block body %}
\t\t\t<div class=\"row\">
\t\t\t{% for p in posts %}
\t\t\t {% if p.enable==0 %}
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"blog_items\">
\t\t\t\t\t\t<div class=\"blog_img_box\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/blog_img1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t<center> <a class=\"title\"font size =\"4\" > {{p.titre}}</a></font></center> <br> <br>
\t\t\t\t\t\t<center>\t<img src=\"{{ asset('uploads/' ~ p.image) }}\" alt=\"\" width=\"290\" height=\"200\"  ></center><br>
\t\t\t\t\t\t<center><font size =\"2\" color=\"white\"\t<p>{{p.imgpost}}</p></center>
\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>{{p.datePost.format('d/m/y')}} 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_postcom', {'idPost': p.idPost}) }}\"><i  aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_postcom', {'idPost': p.idPost}) }}\"><i  aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_postcom', {'idPost': p.idPost}) }}\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i>comments </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t
\t\t\t\t

                       {% endblock %}
\t\t\t\t\t\t\t</div> <br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"navigation\">
            {{ knp_pagination_render(posts) }}
\t\t\t</div>
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

</html>", "front/post.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\front\\post.html.twig");
    }
}
