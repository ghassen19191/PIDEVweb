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

/* scss/_mixins.scss */
class __TwigTemplate_25f617f663c895891b2e7dc4cbbf270cdcb0cf1c0d9ea34925a284212046d110 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_mixins.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_mixins.scss"));

        // line 1
        echo "//    Mixins
@mixin transition(\$args: all 0.4s ease 0s) {
    -webkit-transition: \$args;
    -moz-transition: \$args;
    -o-transition: \$args;
    transition: \$args;
}

@mixin transition-duration(\$args1, \$args2) {
    -webkit-transition-duration: \$args1, \$args2;
    -moz-transition-duration: \$args1, \$args2;
    -o-transition-duration: \$args1, \$args2;
    transition-duration: \$args1, \$args2;
}

@mixin transition-delay(\$args1, \$args2) {
    -webkit-transition-delay: \$args1, \$args2;
    -moz-transition-delay: \$args1, \$args2;
    -o-transition-delay: \$args1, \$args2;
    transition-delay: \$args1, \$args2;
}

@mixin transition-property(\$args1, \$args2) {
    -webkit-transition-property: \$args1, \$args2;
    -moz-transition-property: \$args1, \$args2;
    -o-transition-property: \$args1, \$args2;
    transition-property: \$args1, \$args2;
}

@mixin gradient(\$deg, \$args1, \$args2) {
    background: -webkit-linear-gradient(\$deg, \$args1, \$args2);
    background: -moz-linear-gradient(\$deg, \$args1, \$args2);
    background: -o-linear-gradient(\$deg, \$args1, \$args2);
    background: linear-gradient(\$deg, \$args1, \$args2);
}

@mixin border-gradient(\$deg, \$args1, \$args2) {
    border-image: -webkit-linear-gradient(\$deg, \$args1, \$args2);
    border-image: -moz-linear-gradient(\$deg, \$args1, \$args2);
    border-image: -o-linear-gradient(\$deg, \$args1, \$args2);
    border-image: linear-gradient(\$deg, \$args1, \$args2);
}

@mixin gradient2(\$deg, \$args1,\$args2, \$args3){
  background: -webkit-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: -moz-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: -ms-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: -o-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: linear-gradient(\$deg, \$args1, \$args2, \$args3);
}

@mixin transform(\$transform) {
    -webkit-transform: \$transform;
    -moz-transform: \$transform;
    -ms-transform: \$transform;
    -o-transform: \$transform;
    transform: \$transform;
}

@mixin transform-origin(\$value) {
    -webkit-transform-origin: \$value;
    -moz-transform-origin: \$value;
    -ms-transform-origin: \$value;
    -o-transform-origin: \$value;
    transform-origin: \$value;
}

@mixin justify-content(\$value) {
    -webkit-justify-content: \$value;
    -moz-justify-content: \$value;
    -ms-justify-content: \$value;
    -o-justify-content: \$value;
    justify-content: \$value;
}

@mixin backface-visibility(\$value) {
    -webkit-backface-visibility: \$value;
    -moz-backface-visibility: \$value;
    backface-visibility: \$value;
}

@mixin calc ( \$property, \$expression) {
    #{\$property}: -webkit-calc(#{\$expression});
    #{\$property}: -moz-calc(#{\$expression});
    #{\$property}: calc(#{\$expression});
}

@mixin keyframes ( \$animation-name) {
    @-webkit-keyframes #{\$animation-name} {
        @content;
    }
    @-moz-keyframes #{\$animation-name} {
        @content;
    }
    @-o-keyframes #{\$animation-name} {
        @content;
    }
    @keyframes #{\$animation-name} {
        @content;
    }
}

// Placeholder Mixins
@mixin placeholder {
    &.placeholder {
        @content;
    }
    &:-moz-placeholder {
        @content;
    }
    &::-moz-placeholder {
        @content;
    }
    &::-webkit-input-placeholder {
        @content;
    }
}

@mixin animation (\$args) {
    -webkit-animation: \$args;
    -moz-animation: \$args;
    -o-animation: \$args;
    animation: \$args;
}

/* Medium Layout: 1280px */

@mixin medium {
    @media (min-width: 992px) and (max-width: 1400px) {
        @content;
    }
}

/* Tablet Layout: 768px */

@mixin tablet {
    @media (min-width: 768px) and (max-width: 1200px) {
        @content;
    }
}

/* Mobile Layout: 320px */

@mixin mobile {
    @media (max-width: 767px) {
        @content;
    }
}

/* Wide Mobile Layout: 480px */

@mixin wide-mobile {
    @media (min-width: 480px) and (max-width: 767px) {
        @content;
    }
}

@mixin cmq (\$min, \$max) {
    @media (min-width: \$min) and (max-width: \$max) {
        @content;
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_mixins.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//    Mixins
@mixin transition(\$args: all 0.4s ease 0s) {
    -webkit-transition: \$args;
    -moz-transition: \$args;
    -o-transition: \$args;
    transition: \$args;
}

@mixin transition-duration(\$args1, \$args2) {
    -webkit-transition-duration: \$args1, \$args2;
    -moz-transition-duration: \$args1, \$args2;
    -o-transition-duration: \$args1, \$args2;
    transition-duration: \$args1, \$args2;
}

@mixin transition-delay(\$args1, \$args2) {
    -webkit-transition-delay: \$args1, \$args2;
    -moz-transition-delay: \$args1, \$args2;
    -o-transition-delay: \$args1, \$args2;
    transition-delay: \$args1, \$args2;
}

@mixin transition-property(\$args1, \$args2) {
    -webkit-transition-property: \$args1, \$args2;
    -moz-transition-property: \$args1, \$args2;
    -o-transition-property: \$args1, \$args2;
    transition-property: \$args1, \$args2;
}

@mixin gradient(\$deg, \$args1, \$args2) {
    background: -webkit-linear-gradient(\$deg, \$args1, \$args2);
    background: -moz-linear-gradient(\$deg, \$args1, \$args2);
    background: -o-linear-gradient(\$deg, \$args1, \$args2);
    background: linear-gradient(\$deg, \$args1, \$args2);
}

@mixin border-gradient(\$deg, \$args1, \$args2) {
    border-image: -webkit-linear-gradient(\$deg, \$args1, \$args2);
    border-image: -moz-linear-gradient(\$deg, \$args1, \$args2);
    border-image: -o-linear-gradient(\$deg, \$args1, \$args2);
    border-image: linear-gradient(\$deg, \$args1, \$args2);
}

@mixin gradient2(\$deg, \$args1,\$args2, \$args3){
  background: -webkit-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: -moz-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: -ms-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: -o-linear-gradient(\$deg, \$args1, \$args2, \$args3);
  background: linear-gradient(\$deg, \$args1, \$args2, \$args3);
}

@mixin transform(\$transform) {
    -webkit-transform: \$transform;
    -moz-transform: \$transform;
    -ms-transform: \$transform;
    -o-transform: \$transform;
    transform: \$transform;
}

@mixin transform-origin(\$value) {
    -webkit-transform-origin: \$value;
    -moz-transform-origin: \$value;
    -ms-transform-origin: \$value;
    -o-transform-origin: \$value;
    transform-origin: \$value;
}

@mixin justify-content(\$value) {
    -webkit-justify-content: \$value;
    -moz-justify-content: \$value;
    -ms-justify-content: \$value;
    -o-justify-content: \$value;
    justify-content: \$value;
}

@mixin backface-visibility(\$value) {
    -webkit-backface-visibility: \$value;
    -moz-backface-visibility: \$value;
    backface-visibility: \$value;
}

@mixin calc ( \$property, \$expression) {
    #{\$property}: -webkit-calc(#{\$expression});
    #{\$property}: -moz-calc(#{\$expression});
    #{\$property}: calc(#{\$expression});
}

@mixin keyframes ( \$animation-name) {
    @-webkit-keyframes #{\$animation-name} {
        @content;
    }
    @-moz-keyframes #{\$animation-name} {
        @content;
    }
    @-o-keyframes #{\$animation-name} {
        @content;
    }
    @keyframes #{\$animation-name} {
        @content;
    }
}

// Placeholder Mixins
@mixin placeholder {
    &.placeholder {
        @content;
    }
    &:-moz-placeholder {
        @content;
    }
    &::-moz-placeholder {
        @content;
    }
    &::-webkit-input-placeholder {
        @content;
    }
}

@mixin animation (\$args) {
    -webkit-animation: \$args;
    -moz-animation: \$args;
    -o-animation: \$args;
    animation: \$args;
}

/* Medium Layout: 1280px */

@mixin medium {
    @media (min-width: 992px) and (max-width: 1400px) {
        @content;
    }
}

/* Tablet Layout: 768px */

@mixin tablet {
    @media (min-width: 768px) and (max-width: 1200px) {
        @content;
    }
}

/* Mobile Layout: 320px */

@mixin mobile {
    @media (max-width: 767px) {
        @content;
    }
}

/* Wide Mobile Layout: 480px */

@mixin wide-mobile {
    @media (min-width: 480px) and (max-width: 767px) {
        @content;
    }
}

@mixin cmq (\$min, \$max) {
    @media (min-width: \$min) and (max-width: \$max) {
        @content;
    }
}", "scss/_mixins.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_mixins.scss");
    }
}
