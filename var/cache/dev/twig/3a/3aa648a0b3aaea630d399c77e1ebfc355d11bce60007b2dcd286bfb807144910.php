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

/* scss/_header.scss */
class __TwigTemplate_99b06ae267ab4e527b5c60f281647baa397eb4fdd737d1c33ec0822bfe8e1ffb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_header.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_header.scss"));

        // line 1
        echo "//header_area css
.header_area {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 9999;
    background: #2c2172;
    .navbar-brand {
        margin-right: 30px;
    }
    .menu_nav {
        width: 100%;
    }
    .navbar {
        background: transparent;
        padding: 0px;
        border: 0px;
        border-radius: 0px;
        width: 100%;
        .nav {
            .nav-item {
                margin-right: 45px;
                .nav-link {
                    font: 500 12px/100px \$primary-font;
                    text-transform: uppercase;
                    color: #fff;
                    padding: 0px;
                    display: inline-block;
                    &:after {
                        display: none;
                    }
                }
                &:hover,
                &.active {
                    .nav-link {
                        color: \$primary-color;
                    }
                }
                &.submenu {
                    position: relative;
                    ul {
                        border: none;
                        padding: 0px;
                        border-radius: 0px;
                        box-shadow: none;
                        margin: 0px;
                        background: #fff;
                        @media (min-width: 992px) {
                            position: absolute;
                            top: 120%;
                            left: 0px;
                            min-width: 200px;
                            text-align: left;
                            opacity: 0;
                            transition: all 300ms ease-in;
                            visibility: hidden;
                            display: block;
                            border: none;
                            padding: 0px;
                            border-radius: 0px;
                            box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.4);
                        }
                        &:before {
                            content: \"\";
                            width: 0;
                            height: 0;
                            border-style: solid;
                            border-width: 10px 10px 0 10px;
                            border-color: #eeeeee transparent transparent transparent;
                            position: absolute;
                            right: 24px;
                            top: 45px;
                            z-index: 3;
                            opacity: 0;
                            transition: all 400ms linear;
                        }
                        .nav-item {
                            display: block;
                            float: none;
                            margin-right: 0px;
                            border-bottom: 1px solid #ededed;
                            margin-left: 0px;
                            transition: all 0.4s linear;
                            .nav-link {
                                line-height: 45px;
                                color: \$title-color;
                                padding: 0px 30px;
                                transition: all 150ms linear;
                                display: block;
                                margin-right: 0px;
                            }
                            &:last-child {
                                border-bottom: none;
                            }
                            &:hover {
                                .nav-link {
                                    background-image: -moz-linear-gradient( 0deg, rgb(77, 171, 255) 0%, rgb(98, 221, 255) 100%);
                                    background-image: -webkit-linear-gradient( 0deg, rgb(77, 171, 255) 0%, rgb(98, 221, 255) 100%);
                                    background-image: -ms-linear-gradient( 0deg, rgb(77, 171, 255) 0%, rgb(98, 221, 255) 100%);
                                    color: #fff;
                                }
                            }
                        }
                    }
                    &:hover {
                        ul {
                            @media (min-width: 992px) {
                                visibility: visible;
                                opacity: 1;
                                top: 100%;
                            }
                            .nav-item {
                                margin-top: 0px;
                            }
                        }
                    }
                }
                &:last-child {
                    margin-right: 0px;
                }
            }
        }
    }
    &.navbar_fixed {
        .main_menu {
            position: fixed;
            width: 100%;
            top: -70px;
            left: 0;
            right: 0;
            background: #2c2172;
            transform: translateY(70px);
            transition: transform 500ms ease, background 500ms ease;
            -webkit-transition: transform 500ms ease, background 500ms ease;
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1);
            .navbar {
                .nav {
                    .nav-item {
                        .nav-link {
                            line-height: 70px;
                        }
                    }
                }
            }
        }
    }
    &.white_menu {
        .navbar {
            .navbar-brand {
                @media(min-width: 992px) {
                    img {
                        display: none;
                        &+img {
                            display: inline-block;
                        }
                    }
                }
                @media(max-width: 991px) {
                    img {
                        display: inline-block;
                        &+img {
                            display: none;
                        }
                    }
                }
            }
            .nav {
                .nav-item {
                    .nav-link {
                        color: #fff;
                    }
                }
            }
        }
        &.navbar_fixed {
            .main_menu {
                .navbar {
                    .navbar-brand {
                        img {
                            display: inline-block;
                            &+img {
                                display: none;
                            }
                        }
                    }
                    .nav {
                        .nav-item {
                            .nav-link {
                                line-height: 70px;
                                color: \$title-color;
                            }
                        }
                    }
                }
            }
        }
    }
    .navbar-right {
        .primary_btn {
            min-width: 135px;
            text-transform: uppercase;
            border-radius: 50px;
            line-height: 40px;
        }
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_header.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//header_area css
.header_area {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 9999;
    background: #2c2172;
    .navbar-brand {
        margin-right: 30px;
    }
    .menu_nav {
        width: 100%;
    }
    .navbar {
        background: transparent;
        padding: 0px;
        border: 0px;
        border-radius: 0px;
        width: 100%;
        .nav {
            .nav-item {
                margin-right: 45px;
                .nav-link {
                    font: 500 12px/100px \$primary-font;
                    text-transform: uppercase;
                    color: #fff;
                    padding: 0px;
                    display: inline-block;
                    &:after {
                        display: none;
                    }
                }
                &:hover,
                &.active {
                    .nav-link {
                        color: \$primary-color;
                    }
                }
                &.submenu {
                    position: relative;
                    ul {
                        border: none;
                        padding: 0px;
                        border-radius: 0px;
                        box-shadow: none;
                        margin: 0px;
                        background: #fff;
                        @media (min-width: 992px) {
                            position: absolute;
                            top: 120%;
                            left: 0px;
                            min-width: 200px;
                            text-align: left;
                            opacity: 0;
                            transition: all 300ms ease-in;
                            visibility: hidden;
                            display: block;
                            border: none;
                            padding: 0px;
                            border-radius: 0px;
                            box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.4);
                        }
                        &:before {
                            content: \"\";
                            width: 0;
                            height: 0;
                            border-style: solid;
                            border-width: 10px 10px 0 10px;
                            border-color: #eeeeee transparent transparent transparent;
                            position: absolute;
                            right: 24px;
                            top: 45px;
                            z-index: 3;
                            opacity: 0;
                            transition: all 400ms linear;
                        }
                        .nav-item {
                            display: block;
                            float: none;
                            margin-right: 0px;
                            border-bottom: 1px solid #ededed;
                            margin-left: 0px;
                            transition: all 0.4s linear;
                            .nav-link {
                                line-height: 45px;
                                color: \$title-color;
                                padding: 0px 30px;
                                transition: all 150ms linear;
                                display: block;
                                margin-right: 0px;
                            }
                            &:last-child {
                                border-bottom: none;
                            }
                            &:hover {
                                .nav-link {
                                    background-image: -moz-linear-gradient( 0deg, rgb(77, 171, 255) 0%, rgb(98, 221, 255) 100%);
                                    background-image: -webkit-linear-gradient( 0deg, rgb(77, 171, 255) 0%, rgb(98, 221, 255) 100%);
                                    background-image: -ms-linear-gradient( 0deg, rgb(77, 171, 255) 0%, rgb(98, 221, 255) 100%);
                                    color: #fff;
                                }
                            }
                        }
                    }
                    &:hover {
                        ul {
                            @media (min-width: 992px) {
                                visibility: visible;
                                opacity: 1;
                                top: 100%;
                            }
                            .nav-item {
                                margin-top: 0px;
                            }
                        }
                    }
                }
                &:last-child {
                    margin-right: 0px;
                }
            }
        }
    }
    &.navbar_fixed {
        .main_menu {
            position: fixed;
            width: 100%;
            top: -70px;
            left: 0;
            right: 0;
            background: #2c2172;
            transform: translateY(70px);
            transition: transform 500ms ease, background 500ms ease;
            -webkit-transition: transform 500ms ease, background 500ms ease;
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1);
            .navbar {
                .nav {
                    .nav-item {
                        .nav-link {
                            line-height: 70px;
                        }
                    }
                }
            }
        }
    }
    &.white_menu {
        .navbar {
            .navbar-brand {
                @media(min-width: 992px) {
                    img {
                        display: none;
                        &+img {
                            display: inline-block;
                        }
                    }
                }
                @media(max-width: 991px) {
                    img {
                        display: inline-block;
                        &+img {
                            display: none;
                        }
                    }
                }
            }
            .nav {
                .nav-item {
                    .nav-link {
                        color: #fff;
                    }
                }
            }
        }
        &.navbar_fixed {
            .main_menu {
                .navbar {
                    .navbar-brand {
                        img {
                            display: inline-block;
                            &+img {
                                display: none;
                            }
                        }
                    }
                    .nav {
                        .nav-item {
                            .nav-link {
                                line-height: 70px;
                                color: \$title-color;
                            }
                        }
                    }
                }
            }
        }
    }
    .navbar-right {
        .primary_btn {
            min-width: 135px;
            text-transform: uppercase;
            border-radius: 50px;
            line-height: 40px;
        }
    }
}", "scss/_header.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_header.scss");
    }
}
