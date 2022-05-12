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

/* achat/Mesachat.html.twig */
class __TwigTemplate_5046dc861777b83adc507fa034f86f9d81ba2f562a4c3d3186c3880376207a04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "achat/Mesachat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "achat/Mesachat.html.twig"));

        // line 1
        echo "



";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "   

<!DOCTYPE html>
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
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/css/jquery.range.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/OwlCarousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/OwlCarousel/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t
\t\t<!-- Semantic Css -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/semantic/semantic.min.css"), "html", null, true);
        echo "\">
\t\t
\t</head>
\t<body>
        <main class=\"browse-section\">\t\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-md-center\">\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"main-heading\">
\t\t\t\t\t\t\t<h2>Checkout</h2>
\t\t\t\t\t\t\t<div class=\"line-shape1\">
\t\t\t\t\t\t\t\t<img src=\"images/line.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statement_table checkout_dt\">
\t\t\t\t\t\t\t<div class=\"statement_body\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive-md\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Description</th>
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Type</th>
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Price</th>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Total Amount</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
                                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["achats"]) || array_key_exists("achats", $context) ? $context["achats"] : (function () { throw new RuntimeError('Variable "achats" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["achat"]) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_dt_trans\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["achat"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_dt_trans\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["achat"], "prix", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["achat"], "game", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 74
                echo "                                                    <div class=\"user_dt_trans\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 75), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                   
                                                
                                                    
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_dt_trans\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["achat"], "game", [], "any", false, false, false, 85), "count", [], "method", false, false, false, 85), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t\t
\t    
\t\t<!-- footer End -->
\t\t<!-- Scroll to Top Button Start -->
\t\t<button onclick=\"topFunction()\" id=\"pageup\" title=\"Go to top\"><i class=\"fas fa-arrow-up\"></i></button>
\t\t<!-- Scroll to Top Button End -->
\t\t<!-- Scripts js -->\t
\t\t
\t\t<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/OwlCarousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/semantic/semantic.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/js/jquery.range-min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/js/custom1.js"), "html", null, true);
        echo "\"></script>
\t\t<a class=\"print_btn\" href=\"javascript:window.print();\">Print</a>
\t\t
\t</body>
\t
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "achat/Mesachat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  252 => 109,  248 => 108,  244 => 107,  240 => 106,  236 => 105,  219 => 90,  207 => 85,  201 => 81,  189 => 75,  186 => 74,  182 => 73,  175 => 69,  167 => 64,  162 => 61,  158 => 60,  127 => 32,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  75 => 6,  65 => 5,  52 => 116,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



{% block content %}
   

<!DOCTYPE html>
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
\t\t\t\t<div class=\"row justify-content-md-center\">\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"main-heading\">
\t\t\t\t\t\t\t<h2>Checkout</h2>
\t\t\t\t\t\t\t<div class=\"line-shape1\">
\t\t\t\t\t\t\t\t<img src=\"images/line.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statement_table checkout_dt\">
\t\t\t\t\t\t\t<div class=\"statement_body\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive-md\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Description</th>
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Type</th>
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Price</th>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <th scope=\"col\">Total Amount</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
                                            {% for achat in achats %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_dt_trans\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ achat.id }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_dt_trans\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ achat.prix}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                    {% for i in achat.game %}
                                                    <div class=\"user_dt_trans\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ i.name}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                   
                                                
                                                    
                                                    {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_dt_trans\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{achat.game.count()}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
                                            {% endfor %}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t\t
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
\t\t<a class=\"print_btn\" href=\"javascript:window.print();\">Print</a>
\t\t
\t</body>
\t
</html>
{% endblock %}



", "achat/Mesachat.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\achat\\Mesachat.html.twig");
    }
}
