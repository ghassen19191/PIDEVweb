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

/* user/wish/wishlist/wishlist.html.twig */
class __TwigTemplate_f9ad30b2b51f657613e4e9ac3866a6155d5faad52cf8d7212e7aa350e11fec14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlist.html.twig"));

        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/wish/wishlist/wishlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <div class=\"alert alert-success\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "no-code"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name List</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Category</th>
      <th scope=\"col\">Time</th>
      <th scope=\"col\">Time end</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["ListWishes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["ListWishes"]) {
            // line 30
            echo "        <tr>
        <th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</th>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ListWishes"], "idcategory", [], "any", false, false, false, 34), 1))) {
                // line 35
                echo "          Urodziny
        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 36
$context["ListWishes"], "idcategory", [], "any", false, false, false, 36), 2))) {
                // line 37
                echo "          Święta
        ";
            } else {
                // line 39
                echo "          Inne
        ";
            }
            // line 40
            echo "        
        </td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "time", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "timeend", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
        <td>
        <a href=\"/wishlist/open/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-info-sign\"></span></a>&nbsp;
        <a href=\"/wishlist/edit/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>&nbsp;
        <a href=\"/wishlist/delete/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>&nbsp;
        <a href=\"/wishlist/share/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWishes"], "code", [], "any", false, false, false, 48), "html", null, true);
            echo "/view\"><span class=\"glyphicon glyphicon-share-alt\"></span></a></td>
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ListWishes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "<tr>
<th></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a href=\"wishlist/add\"><span class=\"glyphicon glyphicon-plus\"></span></a></td>
</tr>
  </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/wish/wishlist/wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 51,  179 => 48,  175 => 47,  171 => 46,  167 => 45,  162 => 43,  158 => 42,  154 => 40,  150 => 39,  146 => 37,  144 => 36,  141 => 35,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  124 => 30,  120 => 29,  104 => 15,  95 => 12,  92 => 11,  87 => 10,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/layout.html.twig' %}

{% block body %}
            
    {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
         {% for message in app.flashes('no-code') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name List</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Category</th>
      <th scope=\"col\">Time</th>
      <th scope=\"col\">Time end</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>

{% for ListWishes in ListWishes %}
        <tr>
        <th scope=\"row\">{{ListWishes.id}}</th>
        <td>{{ListWishes.name}}</td>
        <td>{{ListWishes.description}}</td>
        <td>{% if ListWishes.idcategory == 1 %}
          Urodziny
        {% elseif ListWishes.idcategory == 2 %}
          Święta
        {% else %}
          Inne
        {% endif %}        
        </td>
        <td>{{ListWishes.time}}</td>
        <td>{{ListWishes.timeend}}</td>
        <td>
        <a href=\"/wishlist/open/{{ListWishes.id}}\"><span class=\"glyphicon glyphicon-info-sign\"></span></a>&nbsp;
        <a href=\"/wishlist/edit/{{ListWishes.id}}\"><span class=\"glyphicon glyphicon-edit\"></span></a>&nbsp;
        <a href=\"/wishlist/delete/{{ListWishes.id}}\"><span class=\"glyphicon glyphicon-remove\"></span></a>&nbsp;
        <a href=\"/wishlist/share/{{ListWishes.code}}/view\"><span class=\"glyphicon glyphicon-share-alt\"></span></a></td>
        </tr>
{% endfor %}
<tr>
<th></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a href=\"wishlist/add\"><span class=\"glyphicon glyphicon-plus\"></span></a></td>
</tr>
  </tbody>
</table>

{% endblock %}", "user/wish/wishlist/wishlist.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\user\\wish\\wishlist\\wishlist.html.twig");
    }
}
