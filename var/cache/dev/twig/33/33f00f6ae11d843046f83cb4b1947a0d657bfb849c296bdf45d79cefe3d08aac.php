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

/* conversation/browse.html.twig */
class __TwigTemplate_e33732652609e7366c662ba26438c46ce6045bb9ec3d8e054074c0fe1f7504a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/browse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/browse.html.twig"));

        $this->parent = $this->loadTemplate("user/layout.html.twig", "conversation/browse.html.twig", 1);
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"connected-user\">
            <p>Connecté en tant que : ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "getUsername", [], "any", false, false, false, 6), "html", null, true);
            echo " </p>
        </div>
    ";
        }
        // line 9
        echo "    <h2>Liste des groupes de conversations :</h2>
    <div class=\"messages-list col-12\">
        <div class=\"container my-3\">
            <a  class=\"btn btn-primary\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conversation_add");
        echo "\">Créer une conversation</a>
            <a  class=\"btn btn-success\" href=\"https://jwt.io/?token=";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["jwt"]) || array_key_exists("jwt", $context) ? $context["jwt"] : (function () { throw new RuntimeError('Variable "jwt" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\">Check JWT sur jwt.io </a>
        </div>

        
            <ul class=\"list-group\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["conversation"]) {
            // line 19
            echo "                    <li class=\"list-group-item d-flex justify-content-between align-items-start\">
                        <div class=\"col-6\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_browse", ["groupConversation" => twig_get_attribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "] - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo ".</a>
                        </div>
                        <div class=\"col-2\">
                            <span class=\"badge bg-primary rounded-pill\">messages : ";
            // line 24
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 24)), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col-2\">
                            <span class=\"badge bg-info rounded-pill\">membres : ";
            // line 27
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "users", [], "any", false, false, false, 27)), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col-2\">
                            <span class=\"badge ";
            // line 30
            echo ((twig_get_attribute($this->env, $this->source, $context["conversation"], "private", [], "any", false, false, false, 30)) ? ("bg-danger") : ("bg-success"));
            echo " rounded-pill\"> ";
            echo ((twig_get_attribute($this->env, $this->source, $context["conversation"], "private", [], "any", false, false, false, 30)) ? ("privé") : ("public"));
            echo "</span>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </ul>
        </div>

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='application/javascript'></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conversation/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 40,  154 => 39,  140 => 34,  128 => 30,  122 => 27,  116 => 24,  106 => 21,  102 => 19,  98 => 18,  90 => 13,  86 => 12,  81 => 9,  75 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/layout.html.twig' %}

{% block body %}
    {% if app.user %}
        <div class=\"connected-user\">
            <p>Connecté en tant que : {{ app.user.getUsername }} </p>
        </div>
    {% endif %}
    <h2>Liste des groupes de conversations :</h2>
    <div class=\"messages-list col-12\">
        <div class=\"container my-3\">
            <a  class=\"btn btn-primary\" href=\"{{ path(\"conversation_add\") }}\">Créer une conversation</a>
            <a  class=\"btn btn-success\" href=\"https://jwt.io/?token={{ jwt }}\" target=\"_blank\">Check JWT sur jwt.io </a>
        </div>

        
            <ul class=\"list-group\">
                {% for key, conversation in conversations %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-start\">
                        <div class=\"col-6\">
                            <a href=\"{{ path(\"messages_browse\", {'groupConversation' : conversation.id}) }}\">[{{ conversation.id }}] - {{ conversation.name }}.</a>
                        </div>
                        <div class=\"col-2\">
                            <span class=\"badge bg-primary rounded-pill\">messages : {{ conversation.messages|length }}</span>
                        </div>
                        <div class=\"col-2\">
                            <span class=\"badge bg-info rounded-pill\">membres : {{ conversation.users|length }}</span>
                        </div>
                        <div class=\"col-2\">
                            <span class=\"badge {{ conversation.private ? 'bg-danger' : 'bg-success' }} rounded-pill\"> {{ conversation.private ? 'privé' : 'public' }}</span>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>

  
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='application/javascript'></script>
{% endblock %}
", "conversation/browse.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\conversation\\browse.html.twig");
    }
}
