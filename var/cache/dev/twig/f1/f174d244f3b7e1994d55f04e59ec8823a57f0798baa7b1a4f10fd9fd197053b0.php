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

/* back/news.html.twig */
class __TwigTemplate_1ca158079812329f2df59c6b4a91d56415da32e1597810cb0b230daf2c3fe595 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/news.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Dashboard - Hunters Admin</title>
\t\t<link rel=\"icon\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " type=\"image/png\">
\t\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/linericon/style.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/css/nice-select.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/animate-css/animate.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flaticon/flaticon.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo ">
\t<!-- main css -->
\t<link rel=\"stylesheet\" href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
        <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css1/styles.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/t"), "html", null, true);
        echo ">Dashboard Admin</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "fullName", [], "any", false, false, false, 41), "html", null, true);
        echo "</a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        
                        <li><a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parameter_index");
        echo "\">Change Password</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index");
        echo "\">Profil</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            
                            <div class=\"sb-sidenav-menu-heading\" href=\"#\">Tables</div>
                            <a class=\"nav-link\" href=";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/commentaire"), "html", null, true);
        echo ">
                                
                                Commentaire
                            </a>
                           
                            <a class=\"nav-link\" href=";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post"), "html", null, true);
        echo ">
                                
                                News
                            </a>
                            
                            <a class=\"nav-link\" href=";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation"), "html", null, true);
        echo ">
                                
                                Reclamation
                            </a>
                            <a class=\"nav-link\" href=";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/admin/profil"), "html", null, true);
        echo ">
                                
                               Account
                            </a><a class=\"nav-link\" href=";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/admin/utilisateur"), "html", null, true);
        echo ">
                                
                                Users
                            </a>
                            
                            <a class=\"nav-link\" href=";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://dashboard.tawk.to/#/admin/6268102c7b967b11798c9af1/chat-widget"), "html", null, true);
        echo ">
                                
                                live chat
                            </a>
                            
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"#\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
\t</body>
    <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg ";
        // line 97
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "session", [], "any", false, false, false, 97), "flashbag", [], "any", false, false, false, 97), "peek", [0 => "success"], "method", false, false, false, 97)), 0))) ? ("") : ("mb-5"));
        echo "\">
<div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid px-4\"><br>
                        
\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t
                    
\t\t\t\t\t\t<div class=\"home_left_img\">
                         ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            echo "            <div class=\"alert alert-success\">
                ";
            // line 111
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "\t\t\t\t\t</div><br><br><br>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"banner_content\">
                        
\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div><br><br><br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t

\t<!--================Start About Us Area =================-->

\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t
\t
\t

\t<!-- Optional JavaScript -->
\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t<script src=";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
        <script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/scripts.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"), "html", null, true);
        echo "crossorigin=\"anonymous\"></script>
        <script src=";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-area-demo.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-bar-demo.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/simple-datatables@latest"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
        <script src=";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/datatables-simple-demo.js"), "html", null, true);
        echo "></script>
        <script src=\"//code.jquery.com/jquery.js\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
         ";
        // line 155
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 115
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 115,  326 => 114,  312 => 155,  308 => 154,  303 => 152,  299 => 151,  295 => 150,  291 => 149,  287 => 148,  283 => 147,  279 => 146,  248 => 117,  245 => 114,  236 => 111,  233 => 110,  229 => 109,  214 => 97,  194 => 80,  186 => 75,  180 => 72,  173 => 68,  165 => 63,  157 => 58,  142 => 46,  138 => 45,  134 => 44,  128 => 41,  115 => 31,  106 => 25,  102 => 24,  98 => 23,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
    
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Dashboard - Hunters Admin</title>
\t\t<link rel=\"icon\" href={{asset(\"img/a.png\")}} type=\"image/png\">
\t\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href={{asset(\"css/bootstrap.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/linericon/style.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"css/font-awesome.min.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/owl-carousel/owl.carousel.min.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"css/magnific-popup.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/nice-select/css/nice-select.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/animate-css/animate.css\")}}>
\t<link rel=\"stylesheet\" href={{asset(\"vendors/flaticon/flaticon.css\")}}>
    <link rel=\"stylesheet\" href={{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}>
\t<!-- main css -->
\t<link rel=\"stylesheet\" href={{asset(\"css/style.css\")}}>
        <link href={{asset(\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\")}} rel=\"stylesheet\" />
        <link href={{asset(\"css1/styles.css\")}} rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href={{asset(\"index.php/t\")}}>Dashboard Admin</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i>{{ app.user.fullName }}</a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        
                        <li><a class=\"dropdown-item\" href=\"{{ path('admin_parameter_index') }}\">Change Password</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('admin_account_index') }}\">Profil</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            
                            <div class=\"sb-sidenav-menu-heading\" href=\"#\">Tables</div>
                            <a class=\"nav-link\" href={{asset(\"index.php/commentaire\")}}>
                                
                                Commentaire
                            </a>
                           
                            <a class=\"nav-link\" href={{asset(\"index.php/post\")}}>
                                
                                News
                            </a>
                            
                            <a class=\"nav-link\" href={{asset(\"index.php/reclamation\")}}>
                                
                                Reclamation
                            </a>
                            <a class=\"nav-link\" href={{asset(\"index.php/admin/profil\")}}>
                                
                               Account
                            </a><a class=\"nav-link\" href={{asset(\"index.php/admin/utilisateur\")}}>
                                
                                Users
                            </a>
                            
                            <a class=\"nav-link\" href={{asset(\"https://dashboard.tawk.to/#/admin/6268102c7b967b11798c9af1/chat-widget\")}}>
                                
                                live chat
                            </a>
                            
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"#\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
\t</body>
    <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg {{ app.session.flashbag.peek('success')|length > 0 ? '' : 'mb-5' }}\">
<div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid px-4\"><br>
                        
\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t
                    
\t\t\t\t\t\t<div class=\"home_left_img\">
                         {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
\t\t\t\t\t\t\t{%block body%}

                        {%endblock%}
\t\t\t\t\t</div><br><br><br>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"banner_content\">
                        
\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div><br><br><br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t

\t<!--================Start About Us Area =================-->

\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t
\t
\t

\t<!-- Optional JavaScript -->
\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t<script src={{asset(\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\")}} crossorigin=\"anonymous\"></script>
        <script src={{asset(\"js1/scripts.js\")}}></script>
        <script src={{asset(\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\")}}crossorigin=\"anonymous\"></script>
        <script src={{asset(\"assets/demo/chart-area-demo.js\")}}></script>
        <script src={{asset(\"assets/demo/chart-bar-demo.js\")}}></script>
        <script src={{asset(\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\")}} crossorigin=\"anonymous\"></script>
        <script src={{asset(\"js1/datatables-simple-demo.js\")}}></script>
        <script src=\"//code.jquery.com/jquery.js\"></script>
        <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
         {{ include('@MercurySeriesFlashy/flashy.html.twig') }}

    </body>
</html>", "back/news.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\back\\news.html.twig");
    }
}
