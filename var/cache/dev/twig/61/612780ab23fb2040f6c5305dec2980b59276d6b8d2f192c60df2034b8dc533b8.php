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

/* payment/verification.html.twig */
class __TwigTemplate_683d8b00b746d342655b38016579fd1cb4943ed00dbc72c2ebb214918e2df110 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/verification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/verification.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, shrink-to-fit=9\">
\t\t<meta name=\"description\" content=\"Gambolthemes\">
\t\t<meta name=\"author\" content=\"Gambolthemes\">
\t\t<title>Jobby - Checkout Plans</title>
\t\t
\t\t<!-- Favicon Icon -->
\t\t<link rel=\"icon\" type=\"image/png\" href=\"images/fav.png\">
\t\t
\t\t<!-- Stylesheets -->
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/jquery.range.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/OwlCarousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/OwlCarousel/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t
\t\t<!-- Semantic Css -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/semantic/semantic.min.css"), "html", null, true);
        echo "\">
\t\t
\t</head>
\t<body>
        <main class=\"browse-section\">\t\t\t\t
\t\t\t<div class=\"container\">
                <div class=\"row chk_pymnt\">\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"main-heading\">
\t\t\t\t\t\t\t<h2>Payment Method</h2>
\t\t\t\t\t\t\t<div class=\"line-shape1\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/line.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"view_chart\">
\t\t\t\t\t\t
                            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"pymt_mthd_body\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"fdsf452\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label15\">Cvv*</label>
\t\t\t\t\t\t\t\t\t\t\t\t
                                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "code", [], "any", false, false, false, 52), 'widget', ["attr" => ["placeholder" => "Enter the code", "class" => "job-input", "id" => "cvv", "pattern" => ".{4}", "title" => "Field must be 4 numbers"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"post_jp_btn\" type=\"submit\" onclick=\"formHasError()\">PROCEED PAYMENT</button>
\t\t\t\t\t\t
                        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t
\t\t\t</div>\t\t\t\t\t
\t\t</main>
    </div>\t
    </main>\t\t\t\t
\t    
\t\t<!-- footer End -->
\t\t<!-- Scroll to Top Button Start -->
\t\t<button onclick=\"topFunction()\" id=\"pageup\" title=\"Go to top\"><i class=\"fas fa-arrow-up\"></i></button>
\t\t<!-- Scroll to Top Button End -->
\t\t<!-- Scripts js -->\t
\t\t
\t\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/OwlCarousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/semantic/semantic.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/js/jquery.range-min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/js/custom1.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t
\t</body>
\t
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "payment/verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 84,  175 => 83,  171 => 82,  167 => 81,  163 => 80,  146 => 66,  129 => 52,  117 => 43,  107 => 36,  93 => 25,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, shrink-to-fit=9\">
\t\t<meta name=\"description\" content=\"Gambolthemes\">
\t\t<meta name=\"author\" content=\"Gambolthemes\">
\t\t<title>Jobby - Checkout Plans</title>
\t\t
\t\t<!-- Favicon Icon -->
\t\t<link rel=\"icon\" type=\"image/png\" href=\"images/fav.png\">
\t\t
\t\t<!-- Stylesheets -->
\t\t<link href=\"{{ asset ('Payement/css/responsive.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset ('Payement/css/style.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset ('Payement/css/datepicker.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset ('Payement/css/jquery.range.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset ('Payement/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset ('Payement/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset ('Payement/vendor/OwlCarousel/assets/owl.carousel.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset ('Payement/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}\" rel=\"stylesheet\">
\t\t
\t\t<!-- Semantic Css -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('Payement/vendor/semantic/semantic.min.css') }}\">
\t\t
\t</head>
\t<body>
        <main class=\"browse-section\">\t\t\t\t
\t\t\t<div class=\"container\">
                <div class=\"row chk_pymnt\">\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"main-heading\">
\t\t\t\t\t\t\t<h2>Payment Method</h2>
\t\t\t\t\t\t\t<div class=\"line-shape1\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/line.svg')}}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"view_chart\">
\t\t\t\t\t\t
                            {{ form_start(form)}}
\t\t\t\t\t\t\t<div class=\"pymt_mthd_body\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"fdsf452\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label15\">Cvv*</label>
\t\t\t\t\t\t\t\t\t\t\t\t
                                                {{ form_widget(form.code,{'attr':{ 'placeholder': 'Enter the code' ,'class': 'job-input' , 'id':'cvv' , 'pattern':'.{4}' , 'title' :\"Field must be 4 numbers\" }})}}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"post_jp_btn\" type=\"submit\" onclick=\"formHasError()\">PROCEED PAYMENT</button>
\t\t\t\t\t\t
                        {{ form_end(form)}}
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t
\t\t\t</div>\t\t\t\t\t
\t\t</main>
    </div>\t
    </main>\t\t\t\t
\t    
\t\t<!-- footer End -->
\t\t<!-- Scroll to Top Button Start -->
\t\t<button onclick=\"topFunction()\" id=\"pageup\" title=\"Go to top\"><i class=\"fas fa-arrow-up\"></i></button>
\t\t<!-- Scroll to Top Button End -->
\t\t<!-- Scripts js -->\t
\t\t
\t\t<script src=\"{{ asset ('Payement/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t\t<script src=\"{{ asset ('Payement/vendor/OwlCarousel/owl.carousel.js') }}\"></script>
\t\t<script src=\"{{ asset ('Payement/vendor/semantic/semantic.min.js') }}\"></script>
\t\t<script src=\"{{ asset ('Payement/js/jquery.range-min.js') }}\"></script>
\t\t<script src=\"{{ asset ('Payement/js/custom1.js') }}\"></script>
\t\t
\t\t
\t</body>
\t
</html>", "payment/verification.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\payment\\verification.html.twig");
    }
}
