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

/* bassse.html.twig */
class __TwigTemplate_2a1685c5428363a00d463b36496dcee0c87915de0961a9760c6c59d9730c35b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bassse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bassse.html.twig"));

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
        <link rel=\"icon\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " type=\"image/png\">
        <link href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <link href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css1/styles.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
           
            <a class=\"navbar-brand ps-3\" href=";
        // line 19
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
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
        echo "</a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        
                        <li><a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parameter_index");
        echo "\">Change Password</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index");
        echo "\">Profil</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 34
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
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/commentaire"), "html", null, true);
        echo ">
                                
                                Commentaire
                            </a>
                           
                            <a class=\"nav-link\" href=";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post"), "html", null, true);
        echo ">
                                
                                News
                            </a>
                            
                            <a class=\"nav-link\" href=";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation"), "html", null, true);
        echo ">
                                
                                Reclamation
                            </a>
                            
                            <a class=\"nav-link\" href=";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/admin/profil"), "html", null, true);
        echo ">
                                
                               Account
                            </a><a class=\"nav-link\" href=";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/admin/utilisateur"), "html", null, true);
        echo ">
                                
                                Users
                            </a>
                           
                             <a class=\"nav-link\" href=";
        // line 69
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
            <div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid px-4\">
<! <section class=\"home_banner_area\"!>
\t\t<div class=\"banner_inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-lg-6\">
                    <br><br><br><br><br><br>
\t\t\t\t\t\t<div class=\"home_left_img\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/home-left.png"), "html", null, true);
        echo " alt=\"\" width=350px>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"banner_content\">
                        <br><br><br><br><br><br><br><br><br><br>
\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\tWelcome Admin
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
                            </div>
                        </div>
                    </div>
                    
                </main>
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src=";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
        <script src=";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/scripts.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"), "html", null, true);
        echo "crossorigin=\"anonymous\"></script>
        <script src=";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-area-demo.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-bar-demo.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/simple-datatables@latest"), "html", null, true);
        echo " crossorigin=\"anonymous\"></script>
        <script src=";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/datatables-simple-demo.js"), "html", null, true);
        echo "></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bassse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 137,  240 => 136,  236 => 135,  232 => 134,  228 => 133,  224 => 132,  220 => 131,  181 => 95,  152 => 69,  144 => 64,  138 => 61,  130 => 56,  122 => 51,  114 => 46,  99 => 34,  95 => 33,  91 => 32,  85 => 29,  72 => 19,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
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
        <link rel=\"icon\" href={{asset(\"img/a.png\")}} type=\"image/png\">
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
            <div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid px-4\">
<! <section class=\"home_banner_area\"!>
\t\t<div class=\"banner_inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-lg-6\">
                    <br><br><br><br><br><br>
\t\t\t\t\t\t<div class=\"home_left_img\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src={{asset(\"img/banner/home-left.png\")}} alt=\"\" width=350px>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"banner_content\">
                        <br><br><br><br><br><br><br><br><br><br>
\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\tWelcome Admin
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
                            </div>
                        </div>
                    </div>
                    
                </main>
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src={{asset(\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\")}} crossorigin=\"anonymous\"></script>
        <script src={{asset(\"js1/scripts.js\")}}></script>
        <script src={{asset(\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\")}}crossorigin=\"anonymous\"></script>
        <script src={{asset(\"assets/demo/chart-area-demo.js\")}}></script>
        <script src={{asset(\"assets/demo/chart-bar-demo.js\")}}></script>
        <script src={{asset(\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\")}} crossorigin=\"anonymous\"></script>
        <script src={{asset(\"js1/datatables-simple-demo.js\")}}></script>
    </body>
</html>
", "bassse.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\bassse.html.twig");
    }
}
