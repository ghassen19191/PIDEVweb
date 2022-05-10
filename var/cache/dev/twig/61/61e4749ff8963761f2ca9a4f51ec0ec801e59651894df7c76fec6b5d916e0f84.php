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

/* vendors/flaticon/_flaticon.scss */
class __TwigTemplate_df3555a6ea078064341551c36e4277395b103f8615d8be97ad7562681dd63ce5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/flaticon/_flaticon.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/flaticon/_flaticon.scss"));

        // line 1
        echo "    /*
    Flaticon icon font: Flaticon
    Creation date: 26/06/2018 17:19
    */

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

    .fi:before{
        display: inline-block;
  font-family: \"Flaticon\";
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  line-height: 1;
  text-decoration: inherit;
  text-rendering: optimizeLegibility;
  text-transform: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
    }

    .flaticon-skyline:before { content: \"\\f100\"; }
.flaticon-sketch:before { content: \"\\f101\"; }
.flaticon-city:before { content: \"\\f102\"; }
    
    \$font-Flaticon-skyline: \"\\f100\";
    \$font-Flaticon-sketch: \"\\f101\";
    \$font-Flaticon-city: \"\\f102\";";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/flaticon/_flaticon.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    /*
    Flaticon icon font: Flaticon
    Creation date: 26/06/2018 17:19
    */

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

    .fi:before{
        display: inline-block;
  font-family: \"Flaticon\";
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  line-height: 1;
  text-decoration: inherit;
  text-rendering: optimizeLegibility;
  text-transform: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
    }

    .flaticon-skyline:before { content: \"\\f100\"; }
.flaticon-sketch:before { content: \"\\f101\"; }
.flaticon-city:before { content: \"\\f102\"; }
    
    \$font-Flaticon-skyline: \"\\f100\";
    \$font-Flaticon-sketch: \"\\f101\";
    \$font-Flaticon-city: \"\\f102\";", "vendors/flaticon/_flaticon.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\flaticon\\_flaticon.scss");
    }
}
