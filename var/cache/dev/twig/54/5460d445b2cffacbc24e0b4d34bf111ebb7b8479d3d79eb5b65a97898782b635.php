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

/* chat/chat.html.twig */
class __TwigTemplate_cdc66ab3fbe34c3e9cdb7d49c98db7ec6ad8e882bce25c02ace7e305b0eb24ae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/chat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/chat.html.twig"));

        // line 1
        echo "<div class=\"chat\">
\t<ul class=\"list list_user collection chat-header-user\">
\t\t<a class=\"collection-item \" id=\"chat-header\">
         ";
        // line 5
        echo "                 <div class=\"about\">
                    <div class=\"name\"></div>
                    
                    <i class=\"material-icons\">person</i> 
                </div>
      </a>
\t</ul>
\t<!-- end chat-header -->

\t<div class=\"chat-history\"></div>
\t<!-- end chat-history -->

\t<div class=\"chat-message clearfix\">
\t\t<div class=\"row\">
\t\t\t<div class=\"input-field col s12\">
\t\t\t\t<textarea class=\"materialize-textarea\" row=\"1\" id=\"message-to-send\" disabled></textarea>
\t\t\t\t<label for=\"textarea1\">write your message</label>
\t\t\t</div>
\t\t</div>

\t\t<i class=\"fa fa-file-o\"></i>
\t\t&nbsp;&nbsp;&nbsp;
\t\t<i class=\"fa fa-file-image-o\"></i>

\t\t<button id=\"btn\" class=\"btn right\" disabled>Send</button>

\t</div>
\t<!-- end chat-message -->

</div>
<!-- end chat -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chat/chat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"chat\">
\t<ul class=\"list list_user collection chat-header-user\">
\t\t<a class=\"collection-item \" id=\"chat-header\">
         {# <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg\" class=\"responsive-img circle\" alt=\"avatar\" /> #}
                 <div class=\"about\">
                    <div class=\"name\"></div>
                    
                    <i class=\"material-icons\">person</i> 
                </div>
      </a>
\t</ul>
\t<!-- end chat-header -->

\t<div class=\"chat-history\"></div>
\t<!-- end chat-history -->

\t<div class=\"chat-message clearfix\">
\t\t<div class=\"row\">
\t\t\t<div class=\"input-field col s12\">
\t\t\t\t<textarea class=\"materialize-textarea\" row=\"1\" id=\"message-to-send\" disabled></textarea>
\t\t\t\t<label for=\"textarea1\">write your message</label>
\t\t\t</div>
\t\t</div>

\t\t<i class=\"fa fa-file-o\"></i>
\t\t&nbsp;&nbsp;&nbsp;
\t\t<i class=\"fa fa-file-image-o\"></i>

\t\t<button id=\"btn\" class=\"btn right\" disabled>Send</button>

\t</div>
\t<!-- end chat-message -->

</div>
<!-- end chat -->
", "chat/chat.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\chat\\chat.html.twig");
    }
}
