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

/* user/wish/wishlist/wishlistotherOpen.html.twig */
class __TwigTemplate_f814bae2fb32e66007f543fa94821f23a3e36cdc639b4e897432bc13d144941b extends Template
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
        return "user/wish/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlistotherOpen.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/wish/wishlist/wishlistotherOpen.html.twig"));

        $this->parent = $this->loadTemplate("user/wish/base.html.twig", "user/wish/wishlist/wishlistotherOpen.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "no-code"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <div class=\"alert alert-danger\">
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-success\">
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
        echo "<div class=\"container-fluid\">
";
        // line 16
        if ((0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), 1))) {
            // line 17
            echo "<center>Wybrana lista nie istnieje!<br>
<a href=\"/wishlistother\">Wróć</a></center>
";
        } else {
            // line 20
            echo "<div class=\"row\">
  <div class=\"col-sm-12\">
              <div class=\"navbar navbar-default\">
                <div class=\"navbar-header\">
                    Nazwa listy: ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["NameList"]) || array_key_exists("NameList", $context) ? $context["NameList"] : (function () { throw new RuntimeError('Variable "NameList" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "<br>
                    Stworzona przez: ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["Username"]) || array_key_exists("Username", $context) ? $context["Username"] : (function () { throw new RuntimeError('Variable "Username" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "<br>
                    Opis listy: ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["DescList"]) || array_key_exists("DescList", $context) ? $context["DescList"] : (function () { throw new RuntimeError('Variable "DescList" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "
                 </div>               
                </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-sm-12\">
                <table class=\"table table-striped\">
                <thead>
              <tr>
              <th>Nazwa:</th>
              <th>Opis:</th>
              <th>Link:</th>
              <th>Zajetę przez:</th>
              <th>Podłącz pod konto</th>
              </tr>
            </thead>
            <tbody>
            ";
            // line 44
            if ((0 === twig_compare((isset($context["ListWishes"]) || array_key_exists("ListWishes", $context) ? $context["ListWishes"] : (function () { throw new RuntimeError('Variable "ListWishes" does not exist.', 44, $this->source); })()), null))) {
                // line 45
                echo "            <tr>
              <td colspan = \"5\"><center>Brak prezentów na liście</center></td>
            </tr>
            ";
            }
            // line 49
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ListWishes"]) || array_key_exists("ListWishes", $context) ? $context["ListWishes"] : (function () { throw new RuntimeError('Variable "ListWishes" does not exist.', 49, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ListWish"]) {
                // line 50
                echo "             <tr>
              <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWish"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
              <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWish"], "description", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
              <td>";
                // line 53
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["ListLink"]) || array_key_exists("ListLink", $context) ? $context["ListLink"] : (function () { throw new RuntimeError('Variable "ListLink" does not exist.', 53, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53) - 1), [], "array", false, false, false, 53), null))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ListLink"]) || array_key_exists("ListLink", $context) ? $context["ListLink"] : (function () { throw new RuntimeError('Variable "ListLink" does not exist.', 53, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53) - 1), [], "array", false, false, false, 53), "html", null, true);
                    echo "\" target=\"_blank\">Link</a>";
                } else {
                    echo " <b>Brak</b> ";
                }
                echo "</td>
              <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ListUser"]) || array_key_exists("ListUser", $context) ? $context["ListUser"] : (function () { throw new RuntimeError('Variable "ListUser" does not exist.', 54, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54) - 1), [], "array", false, false, false, 54), "username", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
              <td>";
                // line 55
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ListUser"]) || array_key_exists("ListUser", $context) ? $context["ListUser"] : (function () { throw new RuntimeError('Variable "ListUser" does not exist.', 55, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55) - 1), [], "array", false, false, false, 55), "username", [], "any", false, false, false, 55), null))) {
                    echo "  
                    ";
                    // line 56
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ListUser"]) || array_key_exists("ListUser", $context) ? $context["ListUser"] : (function () { throw new RuntimeError('Variable "ListUser" does not exist.', 56, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56) - 1), [], "array", false, false, false, 56), "username", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "username", [], "any", false, false, false, 56)))) {
                        // line 57
                        echo "                        <a href=\"/wishlistother/leave/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWish"], "id", [], "any", false, false, false, 57), "html", null, true);
                        echo "\">Odepnij od konta</a>
                    ";
                    } else {
                        // line 59
                        echo "                        -----
                    ";
                    }
                    // line 61
                    echo "                ";
                } else {
                    // line 62
                    echo "                    <a href=\"/wishlistother/join/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ListWish"], "id", [], "any", false, false, false, 62), "html", null, true);
                    echo "\">Podepnij pod konto</a>
                ";
                }
                // line 64
                echo "             </td>
            </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ListWish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
      </tbody>
    </table>
  </div>
  </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/wish/wishlist/wishlistotherOpen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 67,  225 => 64,  219 => 62,  216 => 61,  212 => 59,  206 => 57,  204 => 56,  200 => 55,  196 => 54,  186 => 53,  182 => 52,  178 => 51,  175 => 50,  157 => 49,  151 => 45,  149 => 44,  128 => 26,  124 => 25,  120 => 24,  114 => 20,  109 => 17,  107 => 16,  104 => 15,  95 => 12,  92 => 11,  87 => 10,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/wish/base.html.twig' %}

{% block body %}
            
            {% for message in app.flashes('no-code') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
<div class=\"container-fluid\">
{% if error == 1 %}
<center>Wybrana lista nie istnieje!<br>
<a href=\"/wishlistother\">Wróć</a></center>
{% else %}
<div class=\"row\">
  <div class=\"col-sm-12\">
              <div class=\"navbar navbar-default\">
                <div class=\"navbar-header\">
                    Nazwa listy: {{ NameList }}<br>
                    Stworzona przez: {{ Username }}<br>
                    Opis listy: {{ DescList }}
                 </div>               
                </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-sm-12\">
                <table class=\"table table-striped\">
                <thead>
              <tr>
              <th>Nazwa:</th>
              <th>Opis:</th>
              <th>Link:</th>
              <th>Zajetę przez:</th>
              <th>Podłącz pod konto</th>
              </tr>
            </thead>
            <tbody>
            {% if ListWishes == NULL %}
            <tr>
              <td colspan = \"5\"><center>Brak prezentów na liście</center></td>
            </tr>
            {% endif %}
            {% for ListWish in ListWishes %}
             <tr>
              <td>{{ ListWish.name }}</td>
              <td>{{ ListWish.description }}</td>
              <td>{% if ListLink[loop.index-1] != NULL %}<a href=\"{{ ListLink[loop.index-1] }}\" target=\"_blank\">Link</a>{% else %} <b>Brak</b> {% endif %}</td>
              <td>{{ ListUser[loop.index-1].username }}</td>
              <td>{% if ListUser[loop.index-1].username != NULL %}  
                    {% if ListUser[loop.index-1].username == app.user.username %}
                        <a href=\"/wishlistother/leave/{{ListWish.id}}\">Odepnij od konta</a>
                    {% else %}
                        -----
                    {% endif %}
                {% else %}
                    <a href=\"/wishlistother/join/{{ListWish.id}}\">Podepnij pod konto</a>
                {% endif %}
             </td>
            </tr>
            {% endfor %}

      </tbody>
    </table>
  </div>
  </div>
{% endif %}
{% endblock %}
", "user/wish/wishlist/wishlistotherOpen.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\user\\wish\\wishlist\\wishlistotherOpen.html.twig");
    }
}
