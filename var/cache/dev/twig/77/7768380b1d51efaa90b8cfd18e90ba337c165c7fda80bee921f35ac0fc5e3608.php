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

/* user/wish/wishlist/wishlistadd.html.twig */
class __TwigTemplate_e0dbba3b517dd4234c98bbd5bcea4fa6046ff8bdbadde43ba2052317cbe4e5ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlistadd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlistadd.html.twig"));

        $this->parent = $this->loadTemplate("user/wish/base.html.twig", "user/wish/wishlist/wishlistadd.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
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


            <form method=\"post\">
\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Nazwa:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'widget');
        echo "
\t\t\t\t\t</div>
                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Opis:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'widget');
        echo "
\t\t\t\t\t</div>
                      <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Czas zakończenia:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "time_end", [], "any", false, false, false, 52), 'widget');
        echo "
\t\t\t\t\t</div>
                      <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Kategoria:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "category", [], "any", false, false, false, 58), 'widget');
        echo "
\t\t\t\t\t</div>
                    Prezenty:<br>
\t\t\t\t <div class=\"container1\">
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
\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "Add", [], "any", false, false, false, 82), 'widget');
        echo " \t\t\t\t<button class=\"add_form_field btn-primary btn\">Add New Field &nbsp; <span style=\"font-size:16px; font-weight:bold;\">+ </span></button>

\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t</form>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/wish/wishlist/wishlistadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 82,  150 => 58,  141 => 52,  132 => 46,  123 => 40,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
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


            <form method=\"post\">
\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Nazwa:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t {{ form_widget(form.name) }}
\t\t\t\t\t</div>
                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Opis:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t {{ form_widget(form.description) }}
\t\t\t\t\t</div>
                      <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Czas zakończenia:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t {{ form_widget(form.time_end) }}
\t\t\t\t\t</div>
                      <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\" style=\"width:250px;\">Kategoria:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t {{ form_widget(form.category) }}
\t\t\t\t\t</div>
                    Prezenty:<br>
\t\t\t\t <div class=\"container1\">
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
\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_widget(form.Add) }} \t\t\t\t<button class=\"add_form_field btn-primary btn\">Add New Field &nbsp; <span style=\"font-size:16px; font-weight:bold;\">+ </span></button>

\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t</form>



{% endblock %}
", "user/wish/wishlist/wishlistadd.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\user\\wish\\wishlist\\wishlistadd.html.twig");
    }
}
