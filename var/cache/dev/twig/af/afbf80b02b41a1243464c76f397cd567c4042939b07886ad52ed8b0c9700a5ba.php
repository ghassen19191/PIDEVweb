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

/* map/index.html.twig */
class __TwigTemplate_e52f4883cf078a30c99c4c07aa2befd21a8554f95f9d458fd94cf9594d489957 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Symfony Map</title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
</head>
<body>
";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <style>
            html, body {
                width: 100%;
                height: 100%;
            }
            #map {
                width: 100%;
                height: 50%;
                margin: 0;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "    <div id=\"map\"></div>

    <div>
        <form method=\"get\" action=\"/get\">
            <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"Address\">
            <input id=\"submit\" name=\"submit\" type=\"submit\" value=\"Locate\">
        </form>
    </div>

    ";
        // line 35
        if (array_key_exists("lat", $context)) {
            // line 36
            echo "    <div style=\"\">
        <h4>Latitude: <span id=\"lat\">";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new RuntimeError('Variable "lat" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "</span></h4>
        <h4>Longitude: <span id=\"long\">";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["long"]) || array_key_exists("long", $context) ? $context["long"] : (function () { throw new RuntimeError('Variable "long" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</span></h4>

        <label for=\"markers\">Choose Marker:</label>
        <select name=\"markers\" onchange=\"initMap()\" id=\"markers\">
            <option selected value=\"1\">Default</option>
            <option value=\"2\">Diamond</option>
        </select>
        <br><br>
        <label for=\"colors\">Choose Color:</label>
        <select name=\"colors\" onchange=\"initMap()\" disabled id=\"colors\">
            <option selected value=\"Blue\">Blue</option>
            <option value=\"Purple\">Purple</option>
        </select>

    </div>
    ";
        }
        // line 54
        echo "




";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDGDxBUUL2IfxGnkjWFi9KEja4_sbOAWyY&callback=initMap\">
    </script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "map/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 64,  183 => 60,  164 => 59,  157 => 54,  138 => 38,  134 => 37,  131 => 36,  129 => 35,  118 => 26,  108 => 25,  87 => 10,  77 => 9,  65 => 68,  63 => 25,  58 => 22,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Symfony Map</title>
    {% block stylesheets %}
        <style>
            html, body {
                width: 100%;
                height: 100%;
            }
            #map {
                width: 100%;
                height: 50%;
                margin: 0;
            }
        </style>
    {% endblock %}

</head>
<body>
{% block body %}
    <div id=\"map\"></div>

    <div>
        <form method=\"get\" action=\"/get\">
            <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"Address\">
            <input id=\"submit\" name=\"submit\" type=\"submit\" value=\"Locate\">
        </form>
    </div>

    {% if lat is defined %}
    <div style=\"\">
        <h4>Latitude: <span id=\"lat\">{{ lat }}</span></h4>
        <h4>Longitude: <span id=\"long\">{{ long }}</span></h4>

        <label for=\"markers\">Choose Marker:</label>
        <select name=\"markers\" onchange=\"initMap()\" id=\"markers\">
            <option selected value=\"1\">Default</option>
            <option value=\"2\">Diamond</option>
        </select>
        <br><br>
        <label for=\"colors\">Choose Color:</label>
        <select name=\"colors\" onchange=\"initMap()\" disabled id=\"colors\">
            <option selected value=\"Blue\">Blue</option>
            <option value=\"Purple\">Purple</option>
        </select>

    </div>
    {% endif %}





{% block javascripts %}

    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDGDxBUUL2IfxGnkjWFi9KEja4_sbOAWyY&callback=initMap\">
    </script>
    <script src=\"{{ asset('index.js') }}\"></script>

{% endblock %}
{% endblock %}
</body>

</html>", "map/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\map\\index.html.twig");
    }
}
