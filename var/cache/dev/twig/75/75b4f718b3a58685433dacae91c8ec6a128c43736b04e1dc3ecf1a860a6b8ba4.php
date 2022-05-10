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

/* emails/newsletter.html.twig */
class __TwigTemplate_2df1b6f79add6a14b88f6e64781f3cedb0c81329eec887265d57c9ba178a4bce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/newsletter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/newsletter.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</h1>

<div>
    ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 4, $this->source); })()), "content", [], "any", false, false, false, 4);
        echo "
</div>

<p>Pour vous désinscrire, cliquez sur ce lien <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "newsletter" => twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "token" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "validationToken", [], "any", false, false, false, 7)])), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "newsletter" => twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "token" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "validationToken", [], "any", false, false, false, 7)])), "html", null, true);
        echo "</a></p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{newsletter.name}}</h1>

<div>
    {{newsletter.content|raw}}
</div>

<p>Pour vous désinscrire, cliquez sur ce lien <a href=\"{{ absolute_url(path('newsletters_unsubscribe', {id: user.id, newsletter:newsletter.id, token: user.validationToken})) }}\">{{ absolute_url(path('newsletters_unsubscribe', {id: user.id, newsletter:newsletter.id, token: user.validationToken})) }}</a></p>", "emails/newsletter.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\emails\\newsletter.html.twig");
    }
}
