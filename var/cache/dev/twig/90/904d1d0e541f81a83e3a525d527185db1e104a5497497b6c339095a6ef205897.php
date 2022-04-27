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

/* back/com.html.twig */
class __TwigTemplate_e1b0bc4a856cc9ee99f4ee8df2b6a66d5e3a6b729858a8aa8b9ff1d69db8354d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/com.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/com.html.twig"));

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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " type=\"image/png\">
\t\t<!-- Bootstrap CSS -->
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
\t<link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flaticon/flaticon.css"), "html", null, true);
        echo ">
\t<!-- main css -->
\t<link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
        <link href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css1/styles.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/t"), "html", null, true);
        echo ">Dashboard Admin</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        
                        <li><a class=\"dropdown-item\" href=\"#!\">Logout</a></li>
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
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/commentaire"), "html", null, true);
        echo ">
                                
                                Commentaire
                            </a>
                           
                            <a class=\"nav-link\" href=";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post"), "html", null, true);
        echo ">
                               
                                News
                            </a>
                            
                            <a class=\"nav-link\" href=";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation"), "html", null, true);
        echo ">
                                
                                Reclamation
                            </a>
                            <a class=\"nav-link\" href=";
        // line 71
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
    
    


\t<!--================Start About Us Area =================-->
<div id=\"layoutSidenav_content\">
               
                    <div class=\"container-fluid px-4\"><br>
                        
\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
<section class=\"a\">
\t\t\t\t
                    
\t\t\t\t\t\t<div class=\"home_left_img\">
\t\t\t\t\t\t\t";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 107
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

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t
\t
\t

\t<!-- Optional JavaScript -->
\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t<script src=";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
        <script src=";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/scripts.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"), "html", null, true);
        echo "crossorigin=\"anonymous\"></script>
        <script src=";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-area-demo.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-bar-demo.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/simple-datatables@latest"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
        <script src=";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/datatables-simple-demo.js"), "html", null, true);
        echo "></script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/com.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 105,  266 => 104,  253 => 138,  249 => 137,  245 => 136,  241 => 135,  237 => 134,  233 => 133,  229 => 132,  202 => 107,  200 => 104,  164 => 71,  157 => 67,  149 => 62,  141 => 57,  110 => 29,  101 => 23,  97 => 22,  93 => 21,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  44 => 1,);
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
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        
                        <li><a class=\"dropdown-item\" href=\"#!\">Logout</a></li>
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
    
    


\t<!--================Start About Us Area =================-->
<div id=\"layoutSidenav_content\">
               
                    <div class=\"container-fluid px-4\"><br>
                        
\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
<section class=\"a\">
\t\t\t\t
                    
\t\t\t\t\t\t<div class=\"home_left_img\">
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
    </body>
</html>", "back/com.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\back\\com.html.twig");
    }
}
