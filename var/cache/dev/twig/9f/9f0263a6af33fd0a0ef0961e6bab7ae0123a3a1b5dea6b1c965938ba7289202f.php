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

/* cart/index.html.twig */
class __TwigTemplate_83750ee643ab7fd472d41911939c7bda2496bcc874d7a60dae6fbc75ecfcd707 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Hunters";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "<br/><br/><br/><br/>
<section class=\"bg-light p-3\">
    <h1>My Cart</h1>
</section>

<table class=\"table\">
    <thead>
        <tr>
            <th>Game</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Actions</th>
            
        </tr>
    </thead>



    <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "game", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td class=\"text-end\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "game", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29), "html", null, true);
            echo " €</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td class=\"text-end\">";
            // line 31
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 31) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "game", [], "any", false, false, false, 31), "price", [], "any", false, false, false, 31)), "html", null, true);
            echo " €</td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cartadd", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "game", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                      
                    </a>

                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cartremove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "game", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                        <i class=\"bi bi-cart-dash\"></i>
                    </a>

                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cartdeletec", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "game", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i>
                    </a>


                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <tr>
                <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </tbody>



    <tfoot>
        <tr>
            <td colspan=\"3\">Total</td>
            <td class=\"text-end\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " €</td>
            <td>
                <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cartdelete_all");
        echo "\" class=\"btn btn-danger\">
                    <i class=\"bi bi-cart-x\"></i>
                </a>
            </td>
        </tr>
    </tfoot>
</table>
<a href=\" ";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment");
        echo " \" >Buy</a>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 69,  185 => 62,  180 => 60,  171 => 53,  162 => 49,  149 => 41,  142 => 37,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hunters{% endblock %}

{% block content %}
<br/><br/><br/><br/>
<section class=\"bg-light p-3\">
    <h1>My Cart</h1>
</section>

<table class=\"table\">
    <thead>
        <tr>
            <th>Game</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Actions</th>
            
        </tr>
    </thead>



    <tbody>
        {% for element in dataPanier %}
            <tr>
                <td>{{ element.game.name }}</td>
                <td class=\"text-end\">{{ element.game.price }} €</td>
                <td>{{ element.quantite }}</td>
                <td class=\"text-end\">{{ element.quantite * element.game.price }} €</td>
                <td>
                    <a href=\"{{path(\"app_cartadd\", {id: element.game.id})}}\" class=\"btn btn-success\">
                      
                    </a>

                    <a href=\"{{path(\"app_cartremove\", {id: element.game.id})}}\" class=\"btn btn-warning\">
                        <i class=\"bi bi-cart-dash\"></i>
                    </a>

                    <a href=\"{{path(\"app_cartdeletec\", {id: element.game.id})}}\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i>
                    </a>


                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
            </tr>
        {% endfor %}
    </tbody>



    <tfoot>
        <tr>
            <td colspan=\"3\">Total</td>
            <td class=\"text-end\">{{ total }} €</td>
            <td>
                <a href=\"{{path(\"app_cartdelete_all\")}}\" class=\"btn btn-danger\">
                    <i class=\"bi bi-cart-x\"></i>
                </a>
            </td>
        </tr>
    </tfoot>
</table>
<a href=\" {{ path ('app_payment') }} \" >Buy</a>


{% endblock %}
", "cart/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\cart\\index.html.twig");
    }
}
