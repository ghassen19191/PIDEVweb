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

/* user/wish/wishlist/wishlistedit.html.twig */
class __TwigTemplate_539430d2448eb74e0ebc6cdce7a0414fc74ed02668dd6462654e313b3b868e66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/wish/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlistedit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlistedit.html.twig"));

        $this->parent = $this->loadTemplate("user/wish/base.html.twig", "user/wish/wishlist/wishlistedit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello IndexController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "            

<script>
\$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = \$(\".container1\");
    var add_button      = \$(\".add_form_field\");
 
    var x = 1;
    \$(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            \$(wrapper).append('<div><div class=\"input-group form-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text\" style=\"width:250px;\">Nazwa prezentu:</span></div><input type=\"text\" name=\"name_wish[]\" class=\"form-control\"></div><div class=\"input-group form-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text\" style=\"width:250px;\">Opis prezentu:</span></div><input type=\"textarea\" name=\"desc_wish[]\" class=\"form-control\"></div><div class=\"input-group form-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text\" style=\"width:250px;\">Link do prezentu(opcjonalnie):</span></div><input type=\"text\" name=\"link_wish[]\" class=\"form-control\"></div><a href=\"#\" class=\"delete\">Delete</a></div>'); //add input box
        }
  else
  {
  alert('You Reached the limits')
  }
    });
 
    \$(wrapper).on(\"click\",\".delete\", function(e){
        e.preventDefault(); \$(this).parent('div').remove(); x--;
    })
});
</script>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form');
        echo "
            <div class=\"form-group\">
\t\t\t\t<button class=\"add_form_field btn-primary btn\">Add New Field &nbsp; <span style=\"font-size:16px; font-weight:bold;\">+ </span></button>
\t\t\t</div>
            <div class=\"container1\">
 <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Nazwa prezentu:</span>
\t\t\t\t\t\t</div>
                        <input type=\"text\" name=\"name_wish[]\" class=\"form-control\">
\t\t\t\t\t</div>
                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Opis prezentu:</span>
\t\t\t\t\t\t</div>
                        <input type=\"textarea\" name=\"desc_wish[]\" class=\"form-control\">
\t\t\t\t\t</div>
                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Link do prezentu(opcjonalnie):</span>
\t\t\t\t\t\t</div>
                        <input type=\"text\" name=\"link_wish[]\" class=\"form-control\">
\t\t\t\t\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/wish/wishlist/wishlistedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/wish/base.html.twig' %}

{% block title %}Hello IndexController!{% endblock %}

{% block body %}
            

<script>
\$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = \$(\".container1\");
    var add_button      = \$(\".add_form_field\");
 
    var x = 1;
    \$(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            \$(wrapper).append('<div><div class=\"input-group form-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text\" style=\"width:250px;\">Nazwa prezentu:</span></div><input type=\"text\" name=\"name_wish[]\" class=\"form-control\"></div><div class=\"input-group form-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text\" style=\"width:250px;\">Opis prezentu:</span></div><input type=\"textarea\" name=\"desc_wish[]\" class=\"form-control\"></div><div class=\"input-group form-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text\" style=\"width:250px;\">Link do prezentu(opcjonalnie):</span></div><input type=\"text\" name=\"link_wish[]\" class=\"form-control\"></div><a href=\"#\" class=\"delete\">Delete</a></div>'); //add input box
        }
  else
  {
  alert('You Reached the limits')
  }
    });
 
    \$(wrapper).on(\"click\",\".delete\", function(e){
        e.preventDefault(); \$(this).parent('div').remove(); x--;
    })
});
</script>
            {{form(form)}}
            <div class=\"form-group\">
\t\t\t\t<button class=\"add_form_field btn-primary btn\">Add New Field &nbsp; <span style=\"font-size:16px; font-weight:bold;\">+ </span></button>
\t\t\t</div>
            <div class=\"container1\">
 <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Nazwa prezentu:</span>
\t\t\t\t\t\t</div>
                        <input type=\"text\" name=\"name_wish[]\" class=\"form-control\">
\t\t\t\t\t</div>
                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Opis prezentu:</span>
\t\t\t\t\t\t</div>
                        <input type=\"textarea\" name=\"desc_wish[]\" class=\"form-control\">
\t\t\t\t\t</div>
                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Link do prezentu(opcjonalnie):</span>
\t\t\t\t\t\t</div>
                        <input type=\"text\" name=\"link_wish[]\" class=\"form-control\">
\t\t\t\t\t</div>
</div>
{% endblock %}
", "user/wish/wishlist/wishlistedit.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\user\\wish\\wishlist\\wishlistedit.html.twig");
    }
}
