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

/* scss/_home.scss */
class __TwigTemplate_f51c654ee684e25aeb47c84147b44e7a3dd46eb4b42debb813f7786ddfdd56ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_home.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_home.scss"));

        // line 1
        echo "/* Start About Us Area css
============================================================================================ */

.about_us_area {
    position: relative;
}

.about_content {
    position: relative;
    &:before {
        content: \"\";
        position: absolute;
        height: 100%;
        width: 89%;
        top: 0;
        left: 0;
        @include gradient2(to right, #231a60 0%, #3c338d 51%, #231a60 100%);
    }
}

/* End About Us Area css
============================================================================================ */

/* Start Upcoming Games Area css
============================================================================================ */

.upcoming_games_area {
    padding: 120px 0 80px;
}

.new_games_item {
    position: relative;
    display: inline-block;
    margin-bottom: 40px;
    &:hover {
        .upcoming_title {
            @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
            a {
                color: #22195e;
            }
        }
    }
    .upcoming_title {
        position: absolute;
        background: rgba(44, 37, 93, 0.8);
        top: 50%;
        width: 100%;
        text-align: center;
        transform: translateY(-50%);
        @include transition();
        h3 {
            font-size: 18px;
            margin: 0;
            padding: 20px;
            @include transition();
            a {
                color: #fff;
            }
        }
    }
}

/* End Upcoming Games Area css
============================================================================================ */

/* Start Recent Update Area css
============================================================================================ */

.recent_update_area {
    background: url(../img/recent_up_bg.png) no-repeat center;
    &.made_white {
        background: #fff;
    }
}

.recent_update_inner {
    .nav.nav-tabs {
        border: none;
        display: flex;
        flex-wrap: wrap;
        margin-left: -15px;
        margin-right: -15px;
        .nav-item {
            margin-bottom: 25px !important;
        }
        li {
            flex: 0 0 33%;
            max-width: 33%;
            padding: 0px 15px;
            a {
                position: relative;
                padding: 0px;
                border: 0px;
                border-radius: 0;
                text-align: center;
                height: 50px;
                line-height: 50px;
                font-size: 18px;
                font-family: \$title-font;
                font-weight: 600;
                color: #fff;
                &:after {
                    position: absolute;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    height: 100%;
                    width: 100%;
                    content: \"\";
                    border: 2px solid transparent;
                    @include border-gradient(90deg, #3fcaff, #a4ffb0);
                    border-image-slice: 1;
                }
                &.active,
                &:hover {
                    @extend .gradient-bg;
                    box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.1);
                    color: #000000;
                }
            }
        }
    }
    .tab-content {
        .tab-pane {
            border: none;
        }
    }
}

.recent_update_text {
    .chart_img {
        position: relative;
        z-index: 999;
        img {
            height: 100% !important;
            z-index: 999;
        }
        &:after {
            content: \"\";
            position: absolute;
            height: 100%;
            width: 20%;
            top: 0;
            right: -40px;
            background: #3e3590;
            z-index: -1;
        }
    }
    .section_content {
        @include gradient(to right, #3e3590 0%, #231a60 100%);
    }
}

/* End Recent Update Area css
============================================================================================ */

/* Start Gallery Area css
============================================================================================ */

.gallery_area {
    padding: 120px 0 90px;
}

.single-gallery {
    position: relative;
    margin-bottom: 30px;
    .content {
        max-height: 36px;
        max-width: 36px;
        @extend .overlay;
        left: 50%;
        top: 20%;
        @include transform(translate(-50%, -50%));
        i {
            font-size: 36px;
            font-weight: 600;
            color: #ffffff;
            opacity: 0;
            @include transition();
        }
    }
    &:hover {
        cursor: pointer;
        .overlay {
            background: rgba(73, 63, 157, 0.85);
        }
        .content {
            background: transparent;
            top: 50%;
            i {
                opacity: 1;
            }
        }
    }
    .overlay {
        @include transition();
    }
}

/* End Gallery Area css
============================================================================================ */

/* Start Testimonial Area css
============================================================================================ */

.testimonials_area {
    position: relative;
    background: url(../img/testimonial_bg.png) no-repeat center;
    background-size: cover;
}

.testi_slider {
    margin: auto;
    .testi_item {
        text-align: center;
        img {
            width: auto;
            margin: auto;
        }
    }
}

.testi_item {
    @media (max-width: 767px) {
        margin-bottom: 0;
    }
    h4 {
        font-size: 18px;
        color: #fff;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .list {
        margin-bottom: 40px;
        li {
            display: inline-block;
            a {
                color: #ffc000;
                font-size: 14px;
            }
        }
    }
    p {
        max-width: 555px;
        margin: auto;
        font-size: 18px;
        font-family: \$primary-font;
        font-style: italic;
        color: #fff;
    }
}

/* End Testimonial Area css
============================================================================================ */

/* Start Pricing Plan Area css
============================================================================================ */

.pricing_area {
    position: relative;
    padding: 120px 0 80px;
}

.pricing_item {
    @include gradient2(to right, #231a60 0%, #3c338d 51%, #231a60 100%);
    text-align: center;
    margin-bottom: 40px;
    h3.p_title {
        font-size: 18px;
        color: #fff;
        padding: 35px 30px 25px;
        margin: 0;
    }
    h1.p_price {
        font-weight: bold;
        color: #fff;
        margin: 0;
        padding: 30px;
        background: #342b7e;
    }
    ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
        padding: 35px 50px 18px;
        li {
            color: #ddd;
            font-weight: 400;
            padding: 14px 0;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.2);
            font-family: \$primary-font;
            &:nth-last-child(1) {
                border-bottom: transparent;
            }
        }
    }
    .p_btn {
        padding-bottom: 50px;
        .gradient_btn {
            position: relative;
            span {
                position: relative;
                z-index: 2;
            }
            &:after {
                content: \"\";
                position: absolute;
                top: 0px;
                left: 0px;
                right: 0;
                bottom: 0;
            }
        }
    }
    &.active,
    &:hover {
        .p_btn {
            .gradient_btn {
                color: #22195e;
                box-shadow: 0px 10px 30px rgba(130, 82, 250, 0.2);
                border: 2px solid transparent;
                &:after {
                    border-radius: 5px;
                    @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
                }
            }
        }
    }
}

/* End Pricing Plan Area css
============================================================================================ */

/* Start Frequently Asked Questions Area css
============================================================================================ */

.frequently_area {
    position: relative;
    .main_title {
        margin-bottom: 40px;
        h1 {
            color: #22195e;
        }
    }
}

.frequent_item {
    position: relative;
    h3 {
        font-size: 18px;
        color: #22195e;
        padding-top: 40px;
        margin: 0;
    }
    p {
        font-weight: 400;
        padding: 30px 20px 40px 0;
        margin: 0;
        &:after {
            content: \"\";
            position: absolute;
            width: 150%;
            border: 1px dashed rgba(199, 199, 199, 0.5);
            left: 0;
            bottom: 0;
        }
    }
    &.last-child p:after {
        display: none !important;
    }
}

.frequent_inner {
    position: relative;
    overflow: hidden;
    &:after {
        content: \"\";
        position: absolute;
        height: 86%;
        border: 1px dashed rgba(199, 199, 199, 0.5);
        left: 50%;
        transform: translateX(-50%);
        top: 40px;
    }
}

/* End Frequently Asked Questions Area css
============================================================================================ */

/* Start Blog Area css
============================================================================================ */

.blog_area {
    padding: 80px 0 120px;
    .blog_items {
        position: relative;
        &:hover {
            .blog_content {
                background: #22195e;
                a.title {
                    @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    @include transition();
                }
            }
        }
        &:hover {
            img {
                @include transform(scale(1.2));
            }
        }
        .blog_img_box {
            overflow: hidden;
            img {
                @include transition;
                min-width: 100%;
            }
        }
        .blog_content {
            background: #3b328b;
            padding: 40px 20px 50px;
            @include transition();
            a.title {
                font-size: 18px;
                font-weight: 600;
                color: #fff;
                font-family: \$title-font;
            }
            p {
                color: #ddd;
                font-weight: 400;
                padding: 20px 0 40px;
                margin: 0;
                font-family: \$primary-font;
            }
            .date {
                a {
                    font-size: 13px;
                    margin-right: 30px;
                    font-family: \$primary-font;
                    font-weight: 400;
                    color: #ddd;
                    i {
                        margin-right: 10px;
                        color: #fff;
                    }
                }
            }
        }
    }
}

/* End Blog Area css
============================================================================================ */

/* Start Newsletter Area css
============================================================================================ */

.newsletter_area {
    @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
    padding: 68px 0 60px;
    .newsletter_inner {
        h1 {
            color: #22195e;
        }
        p {
            margin: 0;
        }
    }
    .newsletter_widget {
        float: right;
        min-width: 100%;
        margin-top: 15px;
        input[type=\"email\"] {
            padding: 13px 30px;
            width: 100%;
            border: transparent;
            border-radius: 50px;
            outline: none;
        }
        .btn.primary_btn {
            position: absolute;
            right: 4px;
            line-height: 40px;
            border-radius: 40px;
            top: 4px;
            color: #22195e;
            box-shadow: none;
        }
    }
}

/* End Newsletter Area css
============================================================================================ */";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_home.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Start About Us Area css
============================================================================================ */

.about_us_area {
    position: relative;
}

.about_content {
    position: relative;
    &:before {
        content: \"\";
        position: absolute;
        height: 100%;
        width: 89%;
        top: 0;
        left: 0;
        @include gradient2(to right, #231a60 0%, #3c338d 51%, #231a60 100%);
    }
}

/* End About Us Area css
============================================================================================ */

/* Start Upcoming Games Area css
============================================================================================ */

.upcoming_games_area {
    padding: 120px 0 80px;
}

.new_games_item {
    position: relative;
    display: inline-block;
    margin-bottom: 40px;
    &:hover {
        .upcoming_title {
            @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
            a {
                color: #22195e;
            }
        }
    }
    .upcoming_title {
        position: absolute;
        background: rgba(44, 37, 93, 0.8);
        top: 50%;
        width: 100%;
        text-align: center;
        transform: translateY(-50%);
        @include transition();
        h3 {
            font-size: 18px;
            margin: 0;
            padding: 20px;
            @include transition();
            a {
                color: #fff;
            }
        }
    }
}

/* End Upcoming Games Area css
============================================================================================ */

/* Start Recent Update Area css
============================================================================================ */

.recent_update_area {
    background: url(../img/recent_up_bg.png) no-repeat center;
    &.made_white {
        background: #fff;
    }
}

.recent_update_inner {
    .nav.nav-tabs {
        border: none;
        display: flex;
        flex-wrap: wrap;
        margin-left: -15px;
        margin-right: -15px;
        .nav-item {
            margin-bottom: 25px !important;
        }
        li {
            flex: 0 0 33%;
            max-width: 33%;
            padding: 0px 15px;
            a {
                position: relative;
                padding: 0px;
                border: 0px;
                border-radius: 0;
                text-align: center;
                height: 50px;
                line-height: 50px;
                font-size: 18px;
                font-family: \$title-font;
                font-weight: 600;
                color: #fff;
                &:after {
                    position: absolute;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    height: 100%;
                    width: 100%;
                    content: \"\";
                    border: 2px solid transparent;
                    @include border-gradient(90deg, #3fcaff, #a4ffb0);
                    border-image-slice: 1;
                }
                &.active,
                &:hover {
                    @extend .gradient-bg;
                    box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.1);
                    color: #000000;
                }
            }
        }
    }
    .tab-content {
        .tab-pane {
            border: none;
        }
    }
}

.recent_update_text {
    .chart_img {
        position: relative;
        z-index: 999;
        img {
            height: 100% !important;
            z-index: 999;
        }
        &:after {
            content: \"\";
            position: absolute;
            height: 100%;
            width: 20%;
            top: 0;
            right: -40px;
            background: #3e3590;
            z-index: -1;
        }
    }
    .section_content {
        @include gradient(to right, #3e3590 0%, #231a60 100%);
    }
}

/* End Recent Update Area css
============================================================================================ */

/* Start Gallery Area css
============================================================================================ */

.gallery_area {
    padding: 120px 0 90px;
}

.single-gallery {
    position: relative;
    margin-bottom: 30px;
    .content {
        max-height: 36px;
        max-width: 36px;
        @extend .overlay;
        left: 50%;
        top: 20%;
        @include transform(translate(-50%, -50%));
        i {
            font-size: 36px;
            font-weight: 600;
            color: #ffffff;
            opacity: 0;
            @include transition();
        }
    }
    &:hover {
        cursor: pointer;
        .overlay {
            background: rgba(73, 63, 157, 0.85);
        }
        .content {
            background: transparent;
            top: 50%;
            i {
                opacity: 1;
            }
        }
    }
    .overlay {
        @include transition();
    }
}

/* End Gallery Area css
============================================================================================ */

/* Start Testimonial Area css
============================================================================================ */

.testimonials_area {
    position: relative;
    background: url(../img/testimonial_bg.png) no-repeat center;
    background-size: cover;
}

.testi_slider {
    margin: auto;
    .testi_item {
        text-align: center;
        img {
            width: auto;
            margin: auto;
        }
    }
}

.testi_item {
    @media (max-width: 767px) {
        margin-bottom: 0;
    }
    h4 {
        font-size: 18px;
        color: #fff;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .list {
        margin-bottom: 40px;
        li {
            display: inline-block;
            a {
                color: #ffc000;
                font-size: 14px;
            }
        }
    }
    p {
        max-width: 555px;
        margin: auto;
        font-size: 18px;
        font-family: \$primary-font;
        font-style: italic;
        color: #fff;
    }
}

/* End Testimonial Area css
============================================================================================ */

/* Start Pricing Plan Area css
============================================================================================ */

.pricing_area {
    position: relative;
    padding: 120px 0 80px;
}

.pricing_item {
    @include gradient2(to right, #231a60 0%, #3c338d 51%, #231a60 100%);
    text-align: center;
    margin-bottom: 40px;
    h3.p_title {
        font-size: 18px;
        color: #fff;
        padding: 35px 30px 25px;
        margin: 0;
    }
    h1.p_price {
        font-weight: bold;
        color: #fff;
        margin: 0;
        padding: 30px;
        background: #342b7e;
    }
    ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
        padding: 35px 50px 18px;
        li {
            color: #ddd;
            font-weight: 400;
            padding: 14px 0;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.2);
            font-family: \$primary-font;
            &:nth-last-child(1) {
                border-bottom: transparent;
            }
        }
    }
    .p_btn {
        padding-bottom: 50px;
        .gradient_btn {
            position: relative;
            span {
                position: relative;
                z-index: 2;
            }
            &:after {
                content: \"\";
                position: absolute;
                top: 0px;
                left: 0px;
                right: 0;
                bottom: 0;
            }
        }
    }
    &.active,
    &:hover {
        .p_btn {
            .gradient_btn {
                color: #22195e;
                box-shadow: 0px 10px 30px rgba(130, 82, 250, 0.2);
                border: 2px solid transparent;
                &:after {
                    border-radius: 5px;
                    @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
                }
            }
        }
    }
}

/* End Pricing Plan Area css
============================================================================================ */

/* Start Frequently Asked Questions Area css
============================================================================================ */

.frequently_area {
    position: relative;
    .main_title {
        margin-bottom: 40px;
        h1 {
            color: #22195e;
        }
    }
}

.frequent_item {
    position: relative;
    h3 {
        font-size: 18px;
        color: #22195e;
        padding-top: 40px;
        margin: 0;
    }
    p {
        font-weight: 400;
        padding: 30px 20px 40px 0;
        margin: 0;
        &:after {
            content: \"\";
            position: absolute;
            width: 150%;
            border: 1px dashed rgba(199, 199, 199, 0.5);
            left: 0;
            bottom: 0;
        }
    }
    &.last-child p:after {
        display: none !important;
    }
}

.frequent_inner {
    position: relative;
    overflow: hidden;
    &:after {
        content: \"\";
        position: absolute;
        height: 86%;
        border: 1px dashed rgba(199, 199, 199, 0.5);
        left: 50%;
        transform: translateX(-50%);
        top: 40px;
    }
}

/* End Frequently Asked Questions Area css
============================================================================================ */

/* Start Blog Area css
============================================================================================ */

.blog_area {
    padding: 80px 0 120px;
    .blog_items {
        position: relative;
        &:hover {
            .blog_content {
                background: #22195e;
                a.title {
                    @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    @include transition();
                }
            }
        }
        &:hover {
            img {
                @include transform(scale(1.2));
            }
        }
        .blog_img_box {
            overflow: hidden;
            img {
                @include transition;
                min-width: 100%;
            }
        }
        .blog_content {
            background: #3b328b;
            padding: 40px 20px 50px;
            @include transition();
            a.title {
                font-size: 18px;
                font-weight: 600;
                color: #fff;
                font-family: \$title-font;
            }
            p {
                color: #ddd;
                font-weight: 400;
                padding: 20px 0 40px;
                margin: 0;
                font-family: \$primary-font;
            }
            .date {
                a {
                    font-size: 13px;
                    margin-right: 30px;
                    font-family: \$primary-font;
                    font-weight: 400;
                    color: #ddd;
                    i {
                        margin-right: 10px;
                        color: #fff;
                    }
                }
            }
        }
    }
}

/* End Blog Area css
============================================================================================ */

/* Start Newsletter Area css
============================================================================================ */

.newsletter_area {
    @include gradient(to right, \$primary-color 0%, \$primary-color2 100%);
    padding: 68px 0 60px;
    .newsletter_inner {
        h1 {
            color: #22195e;
        }
        p {
            margin: 0;
        }
    }
    .newsletter_widget {
        float: right;
        min-width: 100%;
        margin-top: 15px;
        input[type=\"email\"] {
            padding: 13px 30px;
            width: 100%;
            border: transparent;
            border-radius: 50px;
            outline: none;
        }
        .btn.primary_btn {
            position: absolute;
            right: 4px;
            line-height: 40px;
            border-radius: 40px;
            top: 4px;
            color: #22195e;
            box-shadow: none;
        }
    }
}

/* End Newsletter Area css
============================================================================================ */", "scss/_home.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_home.scss");
    }
}
