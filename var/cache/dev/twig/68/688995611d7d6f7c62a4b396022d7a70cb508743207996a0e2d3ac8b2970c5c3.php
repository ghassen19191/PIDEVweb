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

/* home/index2.html.twig */
class __TwigTemplate_f34a4e65d801306de1855953349dc0a7b92aeaddbc79e2bf32be0b5e2395f64e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index2.html.twig", 1);
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

        echo "Hello HomeController!
";
        
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
        echo "\t<style>
\t.collection li.collection-item {
    color: #26a69a;
}
.collection {
   
    position: inherit !important;
\twidth: 100%;
}
.dropdown-content{
\t    min-width: 100px;
}
\t</style>
\t\t<ul class=\"people-list sidenav sidenav-fixed \" id=\"people-list\">
\t\t    <li >
\t\t\t<ul class=\"collection \">
\t\t\t  <li class=\"collection-item  userCard\">
\t\t\t\t\t <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg\" class=\"responsive-img circle\" alt=\"avatar\" />
\t\t\t\t\t <div class=\"about\">
\t\t\t\t\t\t\t<div class=\"name\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"status\">
\t\t\t\t\t\t\t ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "firstName", [], "any", false, false, false, 28), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
                              
                       </div>
                     <a href=\"#!\" class=\"card-header icon_add_conv dropdown-trigger\" data-target='dropdownMy'><i class=\"material-icons icon_add_conv\" >more_vert</i> </a>
\t\t\t\t\t  
                                <ul id='dropdownMy' class='dropdown-content'>
                                        <li><a class=\"modal-trigger\" href=\"#blockListModal\">Add To Block List </a></li>
                                        <li><a href=\"#!\">two</a></li>
                                    </ul>
                  
\t\t\t\t  </li>

\t\t\t\t </ul> 
           </li>
\t\t\t<li class=\"search\">
\t\t\t\t<input type=\"text\" placeholder=\"search\"/>\t
\t\t\t\t<a class=\"modal-trigger \" href=\"#modal1\" id=\"createConv\">\t
\t\t\t\t   <i class=\"material-icons \">person_add</i>
\t\t\t\t</a>
\t\t\t\t
\t\t\t</li>

\t\t\t<li class=\"person_add\">
\t\t\t
          </li>
\t\t\t<!-- Modal Structure -->
\t\t\t<ul class=\"list list_user collection\"></ul>
\t\t</ul>

\t\t";
        // line 59
        echo "\t\t";
        $this->loadTemplate("chat/chat.html.twig", "home/index2.html.twig", 59)->display($context);
        // line 60
        echo "
";
        // line 61
        $this->loadTemplate("modal/modalUserList.html.twig", "home/index2.html.twig", 61)->display($context);
        // line 62
        $this->loadTemplate("block_list/index.html.twig", "home/index2.html.twig", 62)->display($context);
        // line 63
        echo "\t <a href=\"#\" data-target=\"people-list\" class=\"sidenav-trigger btn-floating btn-small\"><i class=\"material-icons\">menu</i></a>
\t<!-- end container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/timeago.js/4.0.2/timeago.min.js\"></script>
\t<script src=\"/js/init.js\"></script>
\t<script src=\"/js/userCard.js\"></script>
\t<script src=\"/js/message.js\"></script>

\t<script src=\"js/manageChat.js\"></script>
  <script>
  
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 69,  172 => 68,  159 => 63,  157 => 62,  155 => 61,  152 => 60,  149 => 59,  116 => 28,  111 => 26,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<style>
\t.collection li.collection-item {
    color: #26a69a;
}
.collection {
   
    position: inherit !important;
\twidth: 100%;
}
.dropdown-content{
\t    min-width: 100px;
}
\t</style>
\t\t<ul class=\"people-list sidenav sidenav-fixed \" id=\"people-list\">
\t\t    <li >
\t\t\t<ul class=\"collection \">
\t\t\t  <li class=\"collection-item  userCard\">
\t\t\t\t\t <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg\" class=\"responsive-img circle\" alt=\"avatar\" />
\t\t\t\t\t <div class=\"about\">
\t\t\t\t\t\t\t<div class=\"name\">{{app.user.email}}</div>
\t\t\t\t\t\t\t<div class=\"status\">
\t\t\t\t\t\t\t {{app.user.firstName}}
\t\t\t\t\t\t\t</div>
                              
                       </div>
                     <a href=\"#!\" class=\"card-header icon_add_conv dropdown-trigger\" data-target='dropdownMy'><i class=\"material-icons icon_add_conv\" >more_vert</i> </a>
\t\t\t\t\t  
                                <ul id='dropdownMy' class='dropdown-content'>
                                        <li><a class=\"modal-trigger\" href=\"#blockListModal\">Add To Block List </a></li>
                                        <li><a href=\"#!\">two</a></li>
                                    </ul>
                  
\t\t\t\t  </li>

\t\t\t\t </ul> 
           </li>
\t\t\t<li class=\"search\">
\t\t\t\t<input type=\"text\" placeholder=\"search\"/>\t
\t\t\t\t<a class=\"modal-trigger \" href=\"#modal1\" id=\"createConv\">\t
\t\t\t\t   <i class=\"material-icons \">person_add</i>
\t\t\t\t</a>
\t\t\t\t
\t\t\t</li>

\t\t\t<li class=\"person_add\">
\t\t\t
          </li>
\t\t\t<!-- Modal Structure -->
\t\t\t<ul class=\"list list_user collection\"></ul>
\t\t</ul>

\t\t{# chat #}
\t\t{% include \"chat/chat.html.twig\" %}

{% include \"modal/modalUserList.html.twig\" %}
{% include \"block_list/index.html.twig\" %}
\t <a href=\"#\" data-target=\"people-list\" class=\"sidenav-trigger btn-floating btn-small\"><i class=\"material-icons\">menu</i></a>
\t<!-- end container -->

{% endblock %}

{% block javascripts %}
\t{{parent()}}
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/timeago.js/4.0.2/timeago.min.js\"></script>
\t<script src=\"/js/init.js\"></script>
\t<script src=\"/js/userCard.js\"></script>
\t<script src=\"/js/message.js\"></script>

\t<script src=\"js/manageChat.js\"></script>
  <script>
  
  </script>
{% endblock %}
", "home/index2.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\home\\index2.html.twig");
    }
}
