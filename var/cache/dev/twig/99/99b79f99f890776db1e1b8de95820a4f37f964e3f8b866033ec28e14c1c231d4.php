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

/* scss/_footer.scss */
class __TwigTemplate_aeaa060119f519d8a827908019aae58945bcb4efc7456d7fd45fc34fc979042e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_footer.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_footer.scss"));

        // line 1
        echo "/* Footer Area css
============================================================================================ */

.footer_area {
    @include gradient2(to right, #231a60 0%, #3c338d 51%, #231a60 100%);
    .f_widget {
        .f_title {
            margin-bottom: 40px;
            h4 {
                color: #fff;
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 0px;
            }
        }
        ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 50px;
            li {
                display: block;
                padding-bottom: 20px;
                color: rgba(255, 255, 255, .5);
                cursor: pointer;
                &:hover {
                    color: \$primary-color;
                }
            }
        }
    }
}

.single-footer-widget {
    padding: 30px 0;
    border-top: 1px solid rgba(255, 255, 255, .1);
    .copy_right_text {
        p {
            margin: 0;
            color: #fff;
            margin-left: -15px;
            a {
                color: \$primary-color;
            }
        }
    }
    .social_widget {
        text-align: right;
        position: relative;
        margin-right: -15px;
        a {
            color: #fff;
            height: 30px;
            width: 30px;
            line-height: 30px;
            background: #4c4588;
            margin-left: 6px;
            display: inline-block;
            text-align: center;
            &:hover {
                background: \$primary-color;
            }
        }
    }
}

/* End Footer Area css
============================================================================================ */";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_footer.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Footer Area css
============================================================================================ */

.footer_area {
    @include gradient2(to right, #231a60 0%, #3c338d 51%, #231a60 100%);
    .f_widget {
        .f_title {
            margin-bottom: 40px;
            h4 {
                color: #fff;
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 0px;
            }
        }
        ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 50px;
            li {
                display: block;
                padding-bottom: 20px;
                color: rgba(255, 255, 255, .5);
                cursor: pointer;
                &:hover {
                    color: \$primary-color;
                }
            }
        }
    }
}

.single-footer-widget {
    padding: 30px 0;
    border-top: 1px solid rgba(255, 255, 255, .1);
    .copy_right_text {
        p {
            margin: 0;
            color: #fff;
            margin-left: -15px;
            a {
                color: \$primary-color;
            }
        }
    }
    .social_widget {
        text-align: right;
        position: relative;
        margin-right: -15px;
        a {
            color: #fff;
            height: 30px;
            width: 30px;
            line-height: 30px;
            background: #4c4588;
            margin-left: 6px;
            display: inline-block;
            text-align: center;
            &:hover {
                background: \$primary-color;
            }
        }
    }
}

/* End Footer Area css
============================================================================================ */", "scss/_footer.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_footer.scss");
    }
}
