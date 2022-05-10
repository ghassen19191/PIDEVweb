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

/* scss/_banner.scss */
class __TwigTemplate_d1f963468cf4fc762f75a6dc224181ba0d101c875e3b7a9897a14219c18a1731 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_banner.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_banner.scss"));

        // line 1
        echo "/* Home Banner Area css
============================================================================================ */

.home_banner_area {
    z-index: 1;
    background: url(../img/banner/home-banner.jpg) no-repeat center center;
    background-size: cover;
    .banner_inner {
        width: 100%;
        .home_left_img {
            padding-top: 230px;
            padding-bottom: 230px;
        }
        .col-lg-6 {
            vertical-align: middle;
            align-self: center;
        }
        .banner_content {
            text-align: left;
            color: #fff;
            margin-left: 70px;
            h2 {
                margin-top: 0px;
                font-size: 60px;
                font-weight: bold;
                line-height: 72px;
                margin-bottom: 20px;
            }
            p {
                color: #fff;
                font-size: 16px;
                margin-bottom: 20px;
            }
            .watch_video {
                margin: 0 30px;
                font-size: 12px;
                text-transform: uppercase;
            }
        }
    }
}

.blog_banner {
    min-height: 780px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    margin-bottom: 0px;
    .banner_inner {
        background: #04091e;
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 780px;
        z-index: 1;
        .overlay {
            background: url(../img/banner/banner-2.jpg) no-repeat scroll center center;
            opacity: .5;
            height: 125%;
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            z-index: -1;
        }
        .blog_b_text {
            max-width: 700px;
            margin: auto;
            color: #fff;
            margin-top: 40px;
            h2 {
                font-size: 60px;
                font-weight: 500;
                font-family: \$primary-font;
                line-height: 66px;
                margin-bottom: 15px;
            }
            p {
                font-size: 16px;
                margin-bottom: 35px;
            }
            .white_bg_btn {
                line-height: 42px;
                padding: 0px 45px;
            }
        }
    }
}

.banner_box {
    max-width: 1620px;
    margin: auto;
}

.banner_area {
    position: relative;
    min-height: 430px;
    z-index: 1;
    background: url(../img/banner/home-banner.jpg) no-repeat center center;
    background-size: cover;
    .banner_inner {
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 430px;
        z-index: 1; //\t\t.overlay{
        //\t\t\tbackground: url(../img/banner/banner.jpg) no-repeat scroll center center;
        //\t\t\tposition: absolute;
        //\t\t\tleft: 0;
        //\t\t\tright: 0;
        //\t\t\ttop: 0;
        //\t\t\theight: 125%;
        //\t\t\tbottom: 0;
        //\t\t\tz-index: -1;
        //\t\t\topacity: 1;
        //\t\t}
        .banner_content {
            h2 {
                color: #fff;
                font-size: 36px;
                font-family: \$title-font;
                margin-bottom: 0px;
                text-transform: uppercase;
                font-weight: bold;
                padding-top: 15px;
            }
            .page_link {
                margin-top: 50px;
                a {
                    font-size: 14px;
                    color: #fff;
                    font-family: \$primary-font;
                    margin-right: 32px;
                    position: relative;
                    &:before {
                        content: \"\\e87a\";
                        font-family: 'Linearicons-Free';
                        font-size: 14px;
                        position: absolute;
                        right: -25px;
                        top: 54%;
                        transform: translateY(-50%);
                    }
                    &:last-child {
                        margin-right: 0px;
                        &:before {
                            display: none;
                        }
                    }
                    &:hover {
                        color: \$primary-color;
                    }
                }
            }
        }
    }
}

/* End Home Banner Area css
============================================================================================ */

/* Start Pages Area css
============================================================================================ */

.about_page {
    .about_us_area {
        padding-bottom: 120px;
    }
    .frequently_area {
        padding: 120px 0;
    }
}

.upcoming_games {
    .frequently_area {
        padding: 120px 0;
    }
}

/* End Pages Area css
============================================================================================ */";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_banner.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Home Banner Area css
============================================================================================ */

.home_banner_area {
    z-index: 1;
    background: url(../img/banner/home-banner.jpg) no-repeat center center;
    background-size: cover;
    .banner_inner {
        width: 100%;
        .home_left_img {
            padding-top: 230px;
            padding-bottom: 230px;
        }
        .col-lg-6 {
            vertical-align: middle;
            align-self: center;
        }
        .banner_content {
            text-align: left;
            color: #fff;
            margin-left: 70px;
            h2 {
                margin-top: 0px;
                font-size: 60px;
                font-weight: bold;
                line-height: 72px;
                margin-bottom: 20px;
            }
            p {
                color: #fff;
                font-size: 16px;
                margin-bottom: 20px;
            }
            .watch_video {
                margin: 0 30px;
                font-size: 12px;
                text-transform: uppercase;
            }
        }
    }
}

.blog_banner {
    min-height: 780px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    margin-bottom: 0px;
    .banner_inner {
        background: #04091e;
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 780px;
        z-index: 1;
        .overlay {
            background: url(../img/banner/banner-2.jpg) no-repeat scroll center center;
            opacity: .5;
            height: 125%;
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            z-index: -1;
        }
        .blog_b_text {
            max-width: 700px;
            margin: auto;
            color: #fff;
            margin-top: 40px;
            h2 {
                font-size: 60px;
                font-weight: 500;
                font-family: \$primary-font;
                line-height: 66px;
                margin-bottom: 15px;
            }
            p {
                font-size: 16px;
                margin-bottom: 35px;
            }
            .white_bg_btn {
                line-height: 42px;
                padding: 0px 45px;
            }
        }
    }
}

.banner_box {
    max-width: 1620px;
    margin: auto;
}

.banner_area {
    position: relative;
    min-height: 430px;
    z-index: 1;
    background: url(../img/banner/home-banner.jpg) no-repeat center center;
    background-size: cover;
    .banner_inner {
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 430px;
        z-index: 1; //\t\t.overlay{
        //\t\t\tbackground: url(../img/banner/banner.jpg) no-repeat scroll center center;
        //\t\t\tposition: absolute;
        //\t\t\tleft: 0;
        //\t\t\tright: 0;
        //\t\t\ttop: 0;
        //\t\t\theight: 125%;
        //\t\t\tbottom: 0;
        //\t\t\tz-index: -1;
        //\t\t\topacity: 1;
        //\t\t}
        .banner_content {
            h2 {
                color: #fff;
                font-size: 36px;
                font-family: \$title-font;
                margin-bottom: 0px;
                text-transform: uppercase;
                font-weight: bold;
                padding-top: 15px;
            }
            .page_link {
                margin-top: 50px;
                a {
                    font-size: 14px;
                    color: #fff;
                    font-family: \$primary-font;
                    margin-right: 32px;
                    position: relative;
                    &:before {
                        content: \"\\e87a\";
                        font-family: 'Linearicons-Free';
                        font-size: 14px;
                        position: absolute;
                        right: -25px;
                        top: 54%;
                        transform: translateY(-50%);
                    }
                    &:last-child {
                        margin-right: 0px;
                        &:before {
                            display: none;
                        }
                    }
                    &:hover {
                        color: \$primary-color;
                    }
                }
            }
        }
    }
}

/* End Home Banner Area css
============================================================================================ */

/* Start Pages Area css
============================================================================================ */

.about_page {
    .about_us_area {
        padding-bottom: 120px;
    }
    .frequently_area {
        padding: 120px 0;
    }
}

.upcoming_games {
    .frequently_area {
        padding: 120px 0;
    }
}

/* End Pages Area css
============================================================================================ */", "scss/_banner.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_banner.scss");
    }
}
