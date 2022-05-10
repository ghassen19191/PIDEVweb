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

/* scss/_contact.scss */
class __TwigTemplate_279592156818cde60dc393a631f882a17a6577172b63b01aaa6ae0b6c0ceee4b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_contact.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_contact.scss"));

        // line 1
        echo "/* Home Map Area css
============================================================================================ */

.home_map_area {
    position: relative;
    .mapBox2 {
        min-height: 600px;
    }
    .home_details {
        position: absolute;
        right: 0px;
        width: 100%;
        z-index: 10;
        top: 50%;
        transform: translateY(-50%);
        .box_home_details {
            background: #fff;
            max-width: 457px;
            float: right;
            width: 100%;
            padding-left: 92px;
            padding-right: 92px;
            padding-top: 112px;
            padding-bottom: 112px;
            border-radius: 10px;
            .media {
                margin-bottom: 26px;
                &:last-child {
                    margin-bottom: 0px;
                }
                .d-flex {
                    padding-right: 20px;
                    i {
                        font-size: 20px;
                        background: linear-gradient(to right, #2c28b1 0%, #9b5cf6 70%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }
                }
                .media-body {
                    h4 {
                        font-size: 14px;
                        color: \$title-color;
                        text-transform: uppercase;
                    }
                    p {
                        margin-bottom: 0px;
                    }
                }
            }
        }
    }
}

/* End Home Map Form Area css
============================================================================================ */

/* Reservation Form Area css
============================================================================================ */

.reservation_form_area {
    .res_form_inner {
        max-width: 555px;
        margin: auto;
        box-shadow: 0px 10px 30px 0px rgba(153, 153, 153, 0.1);
        padding: 75px 50px;
        position: relative;
        &:before {
            content: \"\";
            background: url(../img/contact-shap-1.png);
            position: absolute;
            left: -125px;
            height: 421px;
            width: 98px;
            top: 50%;
            transform: translateY(-50%);
        }
        &:after {
            content: \"\";
            background: url(../img/contact-shap-2.png);
            position: absolute;
            right: -125px;
            height: 421px;
            width: 98px;
            top: 50%;
            transform: translateY(-50%);
        }
    }
}

.reservation_form {
    .form-group {
        input {
            height: 40px;
            border-radius: 0px;
            border: 1px solid #eeeeee;
            outline: none;
            box-shadow: none;
            padding: 0px 15px;
            font-size: 13px;
            font-family: \$primary-font;
            font-weight: 300;
            color: #999999;
            @include placeholder {
                font-size: 13px;
                font-family: \$primary-font;
                font-weight: 300;
                color: #999999;
            }
        }
        .res_select {
            height: 40px;
            border: 1px solid #eeeeee;
            border-radius: 0px;
            width: 100%;
            padding: 0px 15px;
            line-height: 36px;
            .current {
                font-size: 13px;
                font-family: \$primary-font;
                font-weight: 300;
                color: #999999;
            }
            &:after {
                content: \"\\e874\";
                font-family: 'Linearicons-Free';
                color: #cccccc;
                transform: rotate(0deg);
                border: none;
                margin-top: -17px;
                font-size: 13px;
                right: 22px;
            }
        }
        &:last-child {
            text-align: center;
        }
    }
}

/* End Reservation Form Area css
============================================================================================ */

/*============== contact_area css ================*/

.contact_area {}

.mapBox {
    height: 420px;
    margin-bottom: 80px;
}

.contact_info {
    .info_item {
        position: relative;
        padding-left: 45px;
        i {
            position: absolute;
            left: 0;
            top: 0;
            font-size: 20px;
            line-height: 24px;
            color: \$primary-color;
            font-weight: 600;
        }
        h6 {
            font-size: 16px;
            line-height: 24px;
            color: \$primary-font;
            font-weight: bold;
            margin-bottom: 0px;
            color: \$title-color;
            a {
                color: \$title-color;
            }
        }
        p {
            font-size: 14px;
            line-height: 24px;
            padding: 2px 0px;
        }
    }
}

.contact_form {
    .form-group {
        margin-bottom: 10px;
        .form-control {
            font-size: 13px;
            line-height: 26px;
            color: #999;
            border: 1px solid #eeeeee;
            font-family: \$primary-font;
            border-radius: 0px;
            padding-left: 20px;
            &:focus {
                box-shadow: none;
                outline: none;
            }
            @include placeholder {
                color: #999;
            }
        }
        textarea {
            resize: none;
            &.form-control {
                height: 134px;
            }
        }
    }
    .primary_btn {
        margin-top: 20px;
        cursor: pointer;
        border-style: none;
    }
    button.primary_btn:active {
        border-style: none !important;
    }
}

/* Contact Success and error Area css
============================================================================================ */

.modal-message {
    .modal-dialog {
        position: absolute;
        top: 36%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%) !important;
        margin: 0px;
        max-width: 500px;
        width: 100%;
        .modal-content {
            .modal-header {
                text-align: center;
                display: block;
                border-bottom: none;
                padding-top: 50px;
                padding-bottom: 50px;
                .close {
                    position: absolute;
                    right: -15px;
                    top: -15px;
                    padding: 0px;
                    color: #fff;
                    opacity: 1;
                    cursor: pointer;
                }
                h2 {
                    display: block;
                    text-align: center;
                    color: \$primary-color;
                    padding-bottom: 10px;
                    font-family: \$primary-font;
                }
                p {
                    display: block;
                }
            }
        }
    }
}

/* End Contact Success and error Area css
============================================================================================ */";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_contact.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Home Map Area css
============================================================================================ */

.home_map_area {
    position: relative;
    .mapBox2 {
        min-height: 600px;
    }
    .home_details {
        position: absolute;
        right: 0px;
        width: 100%;
        z-index: 10;
        top: 50%;
        transform: translateY(-50%);
        .box_home_details {
            background: #fff;
            max-width: 457px;
            float: right;
            width: 100%;
            padding-left: 92px;
            padding-right: 92px;
            padding-top: 112px;
            padding-bottom: 112px;
            border-radius: 10px;
            .media {
                margin-bottom: 26px;
                &:last-child {
                    margin-bottom: 0px;
                }
                .d-flex {
                    padding-right: 20px;
                    i {
                        font-size: 20px;
                        background: linear-gradient(to right, #2c28b1 0%, #9b5cf6 70%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }
                }
                .media-body {
                    h4 {
                        font-size: 14px;
                        color: \$title-color;
                        text-transform: uppercase;
                    }
                    p {
                        margin-bottom: 0px;
                    }
                }
            }
        }
    }
}

/* End Home Map Form Area css
============================================================================================ */

/* Reservation Form Area css
============================================================================================ */

.reservation_form_area {
    .res_form_inner {
        max-width: 555px;
        margin: auto;
        box-shadow: 0px 10px 30px 0px rgba(153, 153, 153, 0.1);
        padding: 75px 50px;
        position: relative;
        &:before {
            content: \"\";
            background: url(../img/contact-shap-1.png);
            position: absolute;
            left: -125px;
            height: 421px;
            width: 98px;
            top: 50%;
            transform: translateY(-50%);
        }
        &:after {
            content: \"\";
            background: url(../img/contact-shap-2.png);
            position: absolute;
            right: -125px;
            height: 421px;
            width: 98px;
            top: 50%;
            transform: translateY(-50%);
        }
    }
}

.reservation_form {
    .form-group {
        input {
            height: 40px;
            border-radius: 0px;
            border: 1px solid #eeeeee;
            outline: none;
            box-shadow: none;
            padding: 0px 15px;
            font-size: 13px;
            font-family: \$primary-font;
            font-weight: 300;
            color: #999999;
            @include placeholder {
                font-size: 13px;
                font-family: \$primary-font;
                font-weight: 300;
                color: #999999;
            }
        }
        .res_select {
            height: 40px;
            border: 1px solid #eeeeee;
            border-radius: 0px;
            width: 100%;
            padding: 0px 15px;
            line-height: 36px;
            .current {
                font-size: 13px;
                font-family: \$primary-font;
                font-weight: 300;
                color: #999999;
            }
            &:after {
                content: \"\\e874\";
                font-family: 'Linearicons-Free';
                color: #cccccc;
                transform: rotate(0deg);
                border: none;
                margin-top: -17px;
                font-size: 13px;
                right: 22px;
            }
        }
        &:last-child {
            text-align: center;
        }
    }
}

/* End Reservation Form Area css
============================================================================================ */

/*============== contact_area css ================*/

.contact_area {}

.mapBox {
    height: 420px;
    margin-bottom: 80px;
}

.contact_info {
    .info_item {
        position: relative;
        padding-left: 45px;
        i {
            position: absolute;
            left: 0;
            top: 0;
            font-size: 20px;
            line-height: 24px;
            color: \$primary-color;
            font-weight: 600;
        }
        h6 {
            font-size: 16px;
            line-height: 24px;
            color: \$primary-font;
            font-weight: bold;
            margin-bottom: 0px;
            color: \$title-color;
            a {
                color: \$title-color;
            }
        }
        p {
            font-size: 14px;
            line-height: 24px;
            padding: 2px 0px;
        }
    }
}

.contact_form {
    .form-group {
        margin-bottom: 10px;
        .form-control {
            font-size: 13px;
            line-height: 26px;
            color: #999;
            border: 1px solid #eeeeee;
            font-family: \$primary-font;
            border-radius: 0px;
            padding-left: 20px;
            &:focus {
                box-shadow: none;
                outline: none;
            }
            @include placeholder {
                color: #999;
            }
        }
        textarea {
            resize: none;
            &.form-control {
                height: 134px;
            }
        }
    }
    .primary_btn {
        margin-top: 20px;
        cursor: pointer;
        border-style: none;
    }
    button.primary_btn:active {
        border-style: none !important;
    }
}

/* Contact Success and error Area css
============================================================================================ */

.modal-message {
    .modal-dialog {
        position: absolute;
        top: 36%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%) !important;
        margin: 0px;
        max-width: 500px;
        width: 100%;
        .modal-content {
            .modal-header {
                text-align: center;
                display: block;
                border-bottom: none;
                padding-top: 50px;
                padding-bottom: 50px;
                .close {
                    position: absolute;
                    right: -15px;
                    top: -15px;
                    padding: 0px;
                    color: #fff;
                    opacity: 1;
                    cursor: pointer;
                }
                h2 {
                    display: block;
                    text-align: center;
                    color: \$primary-color;
                    padding-bottom: 10px;
                    font-family: \$primary-font;
                }
                p {
                    display: block;
                }
            }
        }
    }
}

/* End Contact Success and error Area css
============================================================================================ */", "scss/_contact.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_contact.scss");
    }
}
