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

/* scss/_reset.scss */
class __TwigTemplate_e3c0fcbc3205c1f1bcb447758725bb65fd373953060142c0333049e23d286136 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_reset.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_reset.scss"));

        // line 1
        echo "body {
    line-height: 24px;
    font-size: 14px;
    font-family: \$primary-font;
    font-weight: 500;
    color: \$text-color;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: \$title-font;
    font-weight: 600;
}

.list {
    list-style: none;
    margin: 0px;
    padding: 0px;
}

a {
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    &:hover,
    &:focus {
        text-decoration: none;
        outline: none;
    }
}

button:focus {
    outline: none;
    box-shadow: none;
}

.mt-25 {
    margin-top: 25px;
}

.p0 {
    padding-left: 0px;
    padding-right: 0px;
}

.white_bg {
    background: #fff !important;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_reset.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("body {
    line-height: 24px;
    font-size: 14px;
    font-family: \$primary-font;
    font-weight: 500;
    color: \$text-color;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: \$title-font;
    font-weight: 600;
}

.list {
    list-style: none;
    margin: 0px;
    padding: 0px;
}

a {
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    &:hover,
    &:focus {
        text-decoration: none;
        outline: none;
    }
}

button:focus {
    outline: none;
    box-shadow: none;
}

.mt-25 {
    margin-top: 25px;
}

.p0 {
    padding-left: 0px;
    padding-right: 0px;
}

.white_bg {
    background: #fff !important;
}
", "scss/_reset.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_reset.scss");
    }
}
