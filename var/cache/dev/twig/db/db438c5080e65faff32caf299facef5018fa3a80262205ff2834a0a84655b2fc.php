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

/* vendors/flaticon/flaticon.css */
class __TwigTemplate_df76a3ae05a16137cdc15e6be34694eb4b0fb9cefdef155a8adadb6c04a0aadc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/flaticon/flaticon.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/flaticon/flaticon.css"));

        // line 1
        echo "\t/*
  \tFlaticon icon font: Flaticon
  \tCreation date: 26/06/2018 17:19
  \t*/

@font-face {
  font-family: \"Flaticon\";
  src: url(\"./Flaticon.eot\");
  src: url(\"./Flaticon.eot?#iefix\") format(\"embedded-opentype\"),
       url(\"./Flaticon.woff\") format(\"woff\"),
       url(\"./Flaticon.ttf\") format(\"truetype\"),
       url(\"./Flaticon.svg#Flaticon\") format(\"svg\");
  font-weight: normal;
  font-style: normal;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: \"Flaticon\";
    src: url(\"./Flaticon.svg#Flaticon\") format(\"svg\");
  }
}

[class^=\"flaticon-\"]:before, [class*=\" flaticon-\"]:before,
[class^=\"flaticon-\"]:after, [class*=\" flaticon-\"]:after {   
  font-family: Flaticon;
        font-size: 20px;
font-style: normal;
margin-left: 20px;
}

.flaticon-skyline:before { content: \"\\f100\"; }
.flaticon-sketch:before { content: \"\\f101\"; }
.flaticon-city:before { content: \"\\f102\"; }";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/flaticon/flaticon.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t/*
  \tFlaticon icon font: Flaticon
  \tCreation date: 26/06/2018 17:19
  \t*/

@font-face {
  font-family: \"Flaticon\";
  src: url(\"./Flaticon.eot\");
  src: url(\"./Flaticon.eot?#iefix\") format(\"embedded-opentype\"),
       url(\"./Flaticon.woff\") format(\"woff\"),
       url(\"./Flaticon.ttf\") format(\"truetype\"),
       url(\"./Flaticon.svg#Flaticon\") format(\"svg\");
  font-weight: normal;
  font-style: normal;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: \"Flaticon\";
    src: url(\"./Flaticon.svg#Flaticon\") format(\"svg\");
  }
}

[class^=\"flaticon-\"]:before, [class*=\" flaticon-\"]:before,
[class^=\"flaticon-\"]:after, [class*=\" flaticon-\"]:after {   
  font-family: Flaticon;
        font-size: 20px;
font-style: normal;
margin-left: 20px;
}

.flaticon-skyline:before { content: \"\\f100\"; }
.flaticon-sketch:before { content: \"\\f101\"; }
.flaticon-city:before { content: \"\\f102\"; }", "vendors/flaticon/flaticon.css", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\flaticon\\flaticon.css");
    }
}
