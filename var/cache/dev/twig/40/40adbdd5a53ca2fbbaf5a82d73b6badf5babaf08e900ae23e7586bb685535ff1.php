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

/* payment/index.html.twig */
class __TwigTemplate_7ccba1ca6c00f53e05aff690f14c24441010c351f9a17b6d806e639349392821 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

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
\t\t\t\t\t\t\t<div class=\"view_chart_header\">
\t\t\t\t\t\t\t\t<div class=\"ui radio checkbox mt-1\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"example1\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"chk_method\" style=\"color:#242424 !important;\">Credit or Debit Cards</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cards_right\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"pymt_mthd_body\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"label15\">Card Number*</label>
\t\t\t\t\t\t\t\t\t
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "CardNumber", [], "any", false, false, false, 56), 'widget', ["attr" => ["placeholder" => "Enter Card Number", "class" => "job-input", "id" => "cardnumber", "pattern" => ".{12}", "title" => "Field must be 12 numbers"]]);
        echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"label15\">Full Name*</label>
\t\t\t\t\t\t\t\t
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Name", [], "any", false, false, false, 62), 'widget', ["attr" => ["placeholder" => "Enter Full Name", "class" => "job-input", "id" => "name"]]);
        echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"fdsf452\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label15\">Expiring*</label>
\t\t\t\t\t\t\t\t\t\t\t\t
                                               <input  type=\"month\" class=\"job-input datepicker-here\" data-language=\"en\"  placeholder=\"Expiring\" min=";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 71, $this->source); })()), "html", null, true);
        echo " required>
                                               
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label15\">Cvv*</label>
\t\t\t\t\t\t\t\t\t\t\t\t
                                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "Cvv", [], "any", false, false, false, 79), 'widget', ["attr" => ["placeholder" => "Enter Cvv", "class" => "job-input", "id" => "cvv", "pattern" => ".{3}", "title" => "Field must be 3 numbers"]]);
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
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
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
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/OwlCarousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/vendor/semantic/semantic.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Payement/js/jquery.range-min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 111
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
        return "payment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 111,  214 => 110,  210 => 109,  206 => 108,  202 => 107,  185 => 93,  168 => 79,  157 => 71,  145 => 62,  136 => 56,  128 => 51,  122 => 48,  107 => 36,  93 => 25,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  43 => 1,);
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
\t\t\t\t\t\t\t<div class=\"view_chart_header\">
\t\t\t\t\t\t\t\t<div class=\"ui radio checkbox mt-1\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"example1\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"chk_method\" style=\"color:#242424 !important;\">Credit or Debit Cards</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cards_right\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/cards.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            {{ form_start(form)}}
\t\t\t\t\t\t\t<div class=\"pymt_mthd_body\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"label15\">Card Number*</label>
\t\t\t\t\t\t\t\t\t
                                    {{ form_widget(form.CardNumber,{'attr':{'placeholder': 'Enter Card Number' ,'class': 'job-input', 'id':'cardnumber' ,'pattern':'.{12}' , 'title' :\"Field must be 12 numbers\" }})}}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"label15\">Full Name*</label>
\t\t\t\t\t\t\t\t
                                    {{ form_widget(form.Name,{'attr':{ 'placeholder': 'Enter Full Name' ,'class': 'job-input' , 'id':'name' }})}}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"fdsf452\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label15\">Expiring*</label>
\t\t\t\t\t\t\t\t\t\t\t\t
                                               <input  type=\"month\" class=\"job-input datepicker-here\" data-language=\"en\"  placeholder=\"Expiring\" min={{date}} required>
                                               
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label15\">Cvv*</label>
\t\t\t\t\t\t\t\t\t\t\t\t
                                                {{ form_widget(form.Cvv,{'attr':{ 'placeholder': 'Enter Cvv' ,'class': 'job-input' , 'id':'cvv' , 'pattern':'.{3}' , 'title' :\"Field must be 3 numbers\" }})}}
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
</html>", "payment/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\payment\\index.html.twig");
    }
}
