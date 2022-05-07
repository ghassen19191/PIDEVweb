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

/* reclamation/index.html.twig */
class __TwigTemplate_8a1e07f39c21bafadf1c3d191e6c3c5623d6e1aae32c4a81202abecfea828c20 extends Template
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
        return "back/recl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("back/recl.html.twig", "reclamation/index.html.twig", 1);
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

        echo "Reclamation";
        
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
        echo "    <h1>Reclamation</h1>
<div class=\"col-md-6 col-lg-3\">
\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<h4>number reclamation</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nbrprest"]) || array_key_exists("nbrprest", $context) ? $context["nbrprest"] : (function () { throw new RuntimeError('Variable "nbrprest" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</b>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t
</div>\t\t
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>NomRec</th>
                <th>DateRec</th>
                <th>DescriRec</th>
                <th>Traite</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 31
            echo "            <tr>
                
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nomRec", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriRec", [], "any", false, false, false, 35);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "traite", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>
                    <button class=\"btn\" style=\"background-color:#28B463;border-color: black; color: white\">  <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["idRec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idRec", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">show</a></button>
                 <button class=\"btn\" style=\"background-color:#C0392B ;border-color: black;color: purple\">   <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idRec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idRec", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">edit</a></button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

 <button class=\"btn\" style=\"background-color:#2E4053  ;border-color: black;color: purple\"><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_reclamations");
        echo "\">print</a></button>
</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 50,  165 => 47,  156 => 43,  147 => 39,  143 => 38,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 31,  117 => 30,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/recl.html.twig' %}

{% block title %}Reclamation{% endblock %}

{% block body %}
    <h1>Reclamation</h1>
<div class=\"col-md-6 col-lg-3\">
\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<h4>number reclamation</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>{{nbrprest}}</b>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t
</div>\t\t
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>NomRec</th>
                <th>DateRec</th>
                <th>DescriRec</th>
                <th>Traite</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
                
                <td>{{ reclamation.nomRec }}</td>
                <td>{{ reclamation.dateRec ? reclamation.dateRec|date('Y-m-d') : '' }}</td>
                <td>{{ reclamation.descriRec | raw }}</td>
                <td>{{ reclamation.traite }}</td>
                <td>
                    <button class=\"btn\" style=\"background-color:#28B463;border-color: black; color: white\">  <a href=\"{{ path('app_reclamation_show', {'idRec': reclamation.idRec}) }}\">show</a></button>
                 <button class=\"btn\" style=\"background-color:#C0392B ;border-color: black;color: purple\">   <a href=\"{{ path('app_reclamation_edit', {'idRec': reclamation.idRec}) }}\">edit</a></button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

 <button class=\"btn\" style=\"background-color:#2E4053  ;border-color: black;color: purple\"><a href=\"{{ path('print_reclamations') }}\">print</a></button>
</div>
    
{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reclamation\\index.html.twig");
    }
}
