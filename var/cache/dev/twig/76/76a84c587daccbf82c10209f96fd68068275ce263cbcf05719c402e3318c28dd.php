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

/* user/partials/sidebar.html.twig */
class __TwigTemplate_7356d15d3264df742550477090b69953f3f241984d4fe3226cbe7ebb2bbc2132 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/partials/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/partials/sidebar.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("partials/_macro.html.twig", "user/partials/sidebar.html.twig", 1)->unwrap();
        // line 2
        echo "
<ul class=\"navbar-nav bg-transparent sidebar sidebar-light accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        
    </a>

    <hr class=\"sidebar-divider my-0\">

    <li class=\"nav-item ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_is_active", ["groupchats"], 13, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conversation_browse");
        echo "\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>conversations</span>
        </a>
    </li>

    <hr class=\"sidebar-divider my-0\">

        ";
        // line 23
        echo "                                                                ";
        // line 24
        echo "        ";
        // line 25
        echo "
            ";
        // line 48
        echo "
        ";
        // line 50
        echo "

    
<li class=\"nav-item ";
        // line 53
        echo twig_call_macro($macros["macros"], "macro_is_active", ["wishlist"], 53, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist");
        echo "\">
            <i class=\"fas fa-user\"></i>
            <span>wishlist</span>
        </a>
    </li>

    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 54,  88 => 53,  83 => 50,  80 => 48,  77 => 25,  75 => 24,  73 => 23,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"partials/_macro.html.twig\" as macros %}

<ul class=\"navbar-nav bg-transparent sidebar sidebar-light accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        
    </a>

    <hr class=\"sidebar-divider my-0\">

    <li class=\"nav-item {{ macros.is_active('groupchats') }}\">
        <a class=\"nav-link\" href=\"{{ path('conversation_browse') }}\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>conversations</span>
        </a>
    </li>

    <hr class=\"sidebar-divider my-0\">

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                                {# ITEM COLLAPSED #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

            {# <div class=\"sidebar-heading\">
                Addons
            </div>

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Pages</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Login Screens:</h6>
                        <a class=\"collapse-item\" href=\"login.html\">Login</a>
                        <a class=\"collapse-item\" href=\"register.html\">Register</a>
                        <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                        <div class=\"collapse-divider\"></div>
                        <h6 class=\"collapse-header\">Other Pages:</h6>
                        <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                        <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                    </div>
                </div>
            </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}


    
<li class=\"nav-item {{ macros.is_active('wishlist') }}\">
        <a class=\"nav-link\" href=\"{{ path('wishlist') }}\">
            <i class=\"fas fa-user\"></i>
            <span>wishlist</span>
        </a>
    </li>

    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
", "user/partials/sidebar.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\user\\partials\\sidebar.html.twig");
    }
}
