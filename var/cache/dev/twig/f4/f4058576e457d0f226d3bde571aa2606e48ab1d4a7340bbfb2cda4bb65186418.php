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

/* scss/_blog.scss */
class __TwigTemplate_e767e0d82d5eb7a2e921e1a7a9fa49d4bd47bbb9a4072561bea7aa0e51dd3143 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_blog.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_blog.scss"));

        // line 1
        echo "
/* Latest Blog Area css
============================================================================================ */
//.latest_blog_area{
//\t
//}
//.latest_blog_inner{
//\t
//}
//.l_blog_item{
//\t.l_blog_img{
//\t\t
//\t}
//\t.l_blog_text{
//\t\t.date{
//\t\t\tmargin-top: 24px;
//\t\t\tmargin-bottom: 15px;
//\t\t\ta{
//\t\t\t\tcolor: \$text-color;
//\t\t\t\tfont-size: 12px;
//\t\t\t\tfont-family: \$primary-font;
//\t\t\t}
//\t\t}
//\t\th4{
//\t\t\tfont-size: 21px;
//\t\t\tcolor: \$title-color;
//\t\t\tmargin-bottom: 20px;
//\t\t\t@include transition;
//\t\t\tfont-family: \$title-font;
//\t\t\tfont-weight: bold;
//\t\t\ttext-transform: uppercase;
//\t\t\tmax-width: 300px;
//\t\t\t&:hover{
//\t\t\t\tcolor: \$primary-color;
//\t\t\t}
//\t\t}
//\t\tp{
//\t\t\tmargin-bottom: 0px;
//\t\t\tfont-size: 14px;
//\t\t\tfont-family: \$primary-font;
//\t\t}
//\t}
//}
/* End Latest Blog Area css
============================================================================================ */

.blog_btn {
    border: 1px solid #fff;
    background: #fff;
    padding: 0px 32px;
    font-size: 13px;
    font-weight: 500;
    font-family: \$primary-font;
    color: \$title-color;
    line-height: 34px;
    display: inline-block;
    &:hover {
        background: \$primary-color;
        border-color: \$primary-color;
        color: #fff;
    }
}

.white_bg_btn {
    background: #fff;
    display: inline-block;
    color: \$title-color;
    line-height: 40px;
    padding: 0px 28px;
    font-size: 14px;
    font-family: \$primary-font;
    font-weight: 500;
    text-transform: uppercase;
    @include transition;
    border: none;
    &:hover {
        background: \$primary-color;
        color: #fff;
    }
}

body.blog_page {
    background: #f9f9ff;
    h1, h2, h3, h4, h5, h6 {
        font-family: \$primary-font;
    }
    p {
        font-family: \$primary-font;
        font-weight: 400;
    }
}


/* Causes Area css
============================================================================================ */
.causes_area{
}
.causes_slider{
\t.owl-dots{
\t\ttext-align: center;
\t\tmargin-top: 80px;
\t\t.owl-dot{
\t\t\theight: 14px;
\t\t\twidth: 14px;
\t\t\tbackground: #eeeeee;
\t\t\tdisplay: inline-block;
\t\t\tmargin-right: 7px;
\t\t\t&:last-child{
\t\t\t\tmargin-right: 0px;
\t\t\t}
\t\t\t&.active{
\t\t\t\tbackground: \$primary-color;
\t\t\t}
\t\t}
\t}
}
.causes_item{
\tbackground: #fff;
\t.causes_img{
\t\tposition: relative;
\t\t.c_parcent{
\t\t\tposition: absolute;
\t\t\tbottom: 0px;
\t\t\twidth: 100%;
\t\t\tleft: 0px;
\t\t\theight: 3px;
\t\t\tbackground: rgba(255, 255, 255, .5);
\t\t\tspan{
\t\t\t\twidth: 70%;
\t\t\t\theight: 3px;
\t\t\t\tbackground: \$primary-color;
\t\t\t\tposition: absolute;
\t\t\t\tleft: 0px;
\t\t\t\tbottom: 0px;
\t\t\t\t&:before{
\t\t\t\t\tcontent: \"75%\";
\t\t\t\t\tposition: absolute;
\t\t\t\t\tright: -10px;
\t\t\t\t\tbottom: 0px;
\t\t\t\t\tbackground: \$primary-color; 
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tpadding: 0px 5px;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t.causes_text{
\t\tpadding: 30px 35px 40px 30px;
\t\th4{
\t\t\tcolor: \$title-color;
\t\t\tfont-family: \$primary-font;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: 600;
\t\t\tmargin-bottom: 15px;
\t\t\tcursor: pointer;
\t\t\t&:hover{
\t\t\t\tcolor: \$primary-color;
\t\t\t}
\t\t}
\t\tp{
\t\t\tfont-size: 14px;
\t\t\tline-height: 24px;
\t\t\tcolor: \$text-color;
\t\t\tfont-weight: 300;
\t\t\tmargin-bottom: 0px;
\t\t}
\t}
\t.causes_bottom{
\t\ta{
\t\t\twidth: 50%;
\t\t\tborder: 1px solid \$primary-color;
\t\t\ttext-align: center;
\t\t\tfloat: left;
\t\t\tline-height: 50px;
\t\t\tbackground: \$primary-color;
\t\t\tcolor: #fff;
\t\t\tfont-family: \$primary-font;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 500;
\t\t\t& + a{
\t\t\t\tborder-color: #eeeeee;
\t\t\t\tbackground: #fff;
\t\t\t\tfont-size: 14px;
\t\t\t\tcolor: \$title-color;
\t\t\t}
\t\t}
\t}
}
/* End Causes Area css
============================================================================================ */



/*================= latest_blog_area css =============*/
.latest_blog_area{
    
}
.single-recent-blog-post{
    margin-bottom: 30px;
    .thumb{
        overflow: hidden;
        img{
            transition: all 0.7s linear;
        }
    }
    .details{
        padding-top: 30px;
        .sec_h4{
            line-height: 24px;
            padding: 10px 0px 13px;
            transition: all 0.3s linear;
            &:hover{
                color: \$text-color;
            }
        }
    }
    .date{
        font-size: 14px;
        line-height: 24px;
        font-weight: 400;
    }
    &:hover{
        img{
            transform: scale(1.23) rotate(10deg);
        }
    }
}
.tags{
    .tag_btn{
        font-size: 12px;
        font-weight: 500;
        line-height: 20px;
        border: 1px solid #eeeeee;
        display: inline-block;
        padding: 1px 18px;
        text-align: center;
        color: \$title-color;
        &:before{
            background: \$primary-color;
        }
        & + .tag_btn{
            margin-left: 2px;
        }
    }
}

/*========= blog_categorie_area css ===========*/
.blog_categorie_area{
    padding-top: 80px;
\tpadding-bottom: 80px;
}
.categories_post{
    position: relative;
    text-align: center;
    cursor: pointer;
    img{
        max-width: 100%;
    }
    .categories_details{
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        background: rgba(34, 34, 34, 0.80);
        color: #fff;
        transition: all 0.3s linear;
        display: flex;
        align-items: center;
        justify-content: center;
        h5{
            margin-bottom: 0px;
            font-size: 18px;
            line-height: 26px;
            text-transform: uppercase;
            color: #fff;
\t\t\tposition: relative;
//\t\t\t&:before{
//\t\t\t\tcontent: \"\";
//\t\t\t\theight: 1px;
//\t\t\t\twidth: 100%;
//\t\t\t\tbackground: #fff;
//\t\t\t\tposition: absolute;
//\t\t\t\tbottom: 0px;
//\t\t\t\tleft: 0px;
//\t\t\t}
        }
        p{
            font-weight: 300;
            font-size: 14px;
            line-height: 26px;
            margin-bottom: 0px;
        }
        .border_line{
            margin: 10px 0px;
            background: #fff;
\t\t\twidth: 100%;
    \t\theight: 1px;
        }
    }
    &:hover{
        .categories_details{
            background: rgba(63, 202, 255, 0.85);
        }
    }
}



/*============ blog_left_sidebar css ==============*/
.blog_area{
}
.blog_left_sidebar{
    
}
.blog_post {
    overflow: hidden;
}
.blog_item{
    margin-bottom: 40px;
}
.blog_info{
    padding-top: 30px;
    .post_tag{
        padding-bottom: 20px;
        a{
            font: 300 14px/21px \$primary-font;
            color: \$title-color;
            &:hover{
                color: \$text-color;
            }
\t\t\t&.active{
\t\t\t\tcolor: \$primary-color;
\t\t\t}
        }
    }
    .blog_meta{
        li{
            a{
                font: 300 14px/20px \$primary-font;
                color: #777777;
                vertical-align: middle;
                padding-bottom: 12px;
                display: inline-block;
                i{
                    color: \$title-color;
                    font-size: 16px;
                    font-weight: 600;
                    padding-left: 15px;
                    line-height: 20px;
                    vertical-align: middle;
                }
                &:hover{
                    color: \$primary-color;
                }
            }
        }
    }
}
.blog_post{
    img{
        max-width: 100%;
    }
}
.blog_details{
    padding-top: 20px;
    h2{
        font-size: 24px;
        line-height: 36px;
        color: \$title-color;
        font-weight: 500;
        transition: all 0.3s linear;
        &:hover{
            color: \$primary-color;
        }
    }
    p{
        margin-bottom: 26px;
    }
}
.view_btn{
    font-size: 14px;
    line-height: 36px;
    display: inline-block;
    color: \$title-color;
    font-weight: 500;
    padding: 0px 30px;
    background: #fff;
}

.blog_right_sidebar{
    border: 1px solid #eeeeee;
    padding: 30px;
    .widget_title{
        font-size: 18px;
        line-height: 25px;
        background: \$primary-color;
        text-align: center;
        color: #fff;
        padding: 8px 0px;
        margin-bottom: 30px;
    }
    .search_widget{
        .input-group{
            .form-control{
                font-size: 14px;
                line-height: 29px;
                border: 0px;
                width: 100%;
                font-weight: 300;
                color: #fff;
                padding-left: 20px;
                border-radius: 45px;
                z-index: 0;
\t\t\t\tbackground: \$primary-color;
                @include placeholder{
                    color: #fff;
                }
                &:focus{
                    box-shadow: none;
                }
            }
            .btn-default{
                position: absolute;
                right: 20px;;
                background: transparent;
                border: 0px;
                box-shadow: none;
                font-size: 14px;
                color: #fff;
                padding: 0px;
                top: 50%;
                transform: translateY(-50%);
                z-index: 1;
            }
        }
    }
    .author_widget{
        text-align: center;
        h4{
            font-size: 18px;
            line-height: 20px;
            color: \$title-color;
            margin-bottom: 0px;
\t\t\tmargin-top: 30px;
        }
        p{
            margin-bottom: 0px;
        }
        .social_icon{
            padding: 7px 0px 15px;
            a{
                font-size: 14px;
                color: \$title-color;
                transition: all 0.2s linear;
                & + a{
                    margin-left: 20px;
                }
                &:hover{
                    color: \$primary-color;
                }
            }
        }
    }
    .popular_post_widget{
        .post_item{
            .media-body{
                justify-content: center;
                align-self: center;
                padding-left: 20px;
                h3{
                    font-size: 14px;
                    line-height: 20px;
                    color: \$title-color;
                    margin-bottom: 4px;
                    font-weight: 500;
                    transition: all 0.3s linear;
                    &:hover{
                        color: \$primary-color;
                    }
                }
                p{
                    font-size:12px;
                    line-height: 21px;
                    margin-bottom: 0px;
                }
            }
            & + .post_item{
                margin-top: 20px;
            }
        }   
    }
    .post_category_widget{
        .cat-list{
            li{
                border-bottom: 2px dotted #eee;
                transition: all 0.3s ease 0s;
                padding-bottom: 12px;
                a{
                    font-size: 14px;
                    line-height: 20px;
                    color: #777;
                    p{
                        margin-bottom: 0px; 
                    }
                }
                & + li{
                    padding-top: 15px;
                }
                &:hover{
                    border-color: \$primary-color;
                    a{
                        color: \$primary-color;
                    }
                }
            }
        }
    }
    .newsletter_widget{
        text-align: center;
        p{
            
        }
        .form-group{
            margin-bottom: 8px;
        }
        .input-group-prepend {
            margin-right: -1px;
        }
        .input-group-text {
            background: #fff;
            border-radius: 0px;
            vertical-align: top;
            font-size: 12px;
            line-height: 36px;
            padding: 0px 0px 0px 15px;
            border: 1px solid #eeeeee;
            border-right: 0px;
        }
        .form-control{
            font-size: 12px;
            line-height: 24px;
            color: #cccccc;
            border: 1px solid #eeeeee;
            border-left: 0px;
\t\t\tborder-radius: 0px;
            @include placeholder{
                color: #cccccc;
            }
            &:focus{
                outline: none;
                box-shadow: none;
            }
        }
        .bbtns{
\t\t\tbackground: \$primary-color;
            color: #fff;
            font-size: 12px;
            line-height: 38px;
            display: inline-block;
            font-weight: 500;
            padding: 0px 24px 0px 24px;
            border-radius: 0;
        }
        .text-bottom{
            font-size: 12px;
        }
    }
    .tag_cloud_widget{
        ul{
            li{
                display: inline-block;
                a{
                    display: inline-block;
                    border: 1px solid #eee;
                    background: #fff;
                    padding: 0px 13px;
                    margin-bottom: 8px;
                    transition: all 0.3s ease 0s;
                    color: \$title-color;
                    font-size: 12px;
                    &:hover{
\t\t\t\t\t\tbackground: \$primary-color;
                        color: #fff;
                    }
                }
            }
        }
    }
    .br{
        width: 100%;
        height: 1px;
        background: rgb(238, 238, 238);
        margin: 30px 0px;
    }
}

.blog-pagination {
    padding-top: 25px;
    padding-bottom: 95px;
    .page-link {
        border-radius: 0;
    }
    .page-item {
        border: none;
    }
}

.page-link {
    background: transparent;
    font-weight: 400;
}

.blog-pagination .page-item.active .page-link {
    background-color: \$primary-color;
    border-color: transparent;
    color:#fff;
}

.blog-pagination .page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #8a8a8a;
    border: none;
}

.blog-pagination .page-link .lnr {
    font-weight: 600;
}

.blog-pagination .page-item:last-child .page-link,
.blog-pagination .page-item:first-child .page-link {
    border-radius: 0;
}

.blog-pagination .page-link:hover {
    color: #fff;
    text-decoration: none;
    background-color: \$primary-color;
    border-color: #eee;
}



/*============ Start Blog Single Styles  =============*/

.single-post-area {
    .social-links {
        padding-top: 10px;
        li {
            display: inline-block;
            margin-bottom: 10px;
            a {
                color: #cccccc;
                padding: 7px;
                font-size: 14px;
                transition: all 0.2s linear;
                &:hover {
                    color: \$title-color;
                }
            }
        }
    }
    .blog_details{
        padding-top: 26px;
        p{
            margin-bottom: 10px;
        }
    }
    .quotes {
        margin-top: 20px;
        margin-bottom: 30px;
        padding: 24px 35px 24px 30px;
        background-color: rgb(255, 255, 255);
        box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
        font-size: 14px;
        line-height: 24px;
        color: #777;
        font-style: italic;
    }
    .arrow {
        position: absolute;
        .lnr {
            font-size: 20px;
            font-weight: 600;
        }
    }
    .thumb {
        .overlay-bg {
            background: rgba(#000, .8);
        }
    }
    .navigation-area {
        border-top: 1px solid #eee;
        padding-top: 30px;
        margin-top: 60px;
        p{
            margin-bottom: 0px;
        }
        h4{
            font-size: 18px;
            line-height: 25px;
            color: \$title-color;
        }
        .nav-left {
            text-align: left;
            .thumb {
                margin-right: 20px;
                background: #000;
                img {
                    @include transition();
                }
            }
            .lnr {
                margin-left: 20px;
                opacity: 0;
                @include transition();
            }
            &:hover {
                .lnr {
                    opacity: 1;
                }
                .thumb {
                    img {
                        opacity: .5;
                    }
                }
            }
            @media(max-width:767px) {
                margin-bottom: 30px;
            }
        }
        .nav-right {
            text-align: right;
            .thumb {
                margin-left: 20px;
                background: #000;
                img {
                    @include transition();
                }
            }
            .lnr {
                margin-right: 20px;
                opacity: 0;
                @include transition();
            }
            &:hover {
                .lnr {
                    opacity: 1;
                }
                .thumb {
                    img {
                        opacity: .5;
                    }
                }
            }
        }
    }

    .sidebar-widgets{
        @media(max-width:991px){
            padding-bottom:0px;
        }
    }
}

.comments-area {
    background:#fafaff;
    border: 1px solid #eee;
    padding: 50px 30px;
    margin-top: 50px;
    @media(max-width: 414px) {
        padding: 50px 8px;
    }
    h4 {
        text-align: center;
        margin-bottom: 50px;
        color: \$title-color;
        font-size: 18px;
    }
    h5 {
        font-size: 16px;
        margin-bottom: 0px;
    }
    a {
        color: \$title-color;
    }
    .comment-list {
        padding-bottom: 48px;
        &:last-child {
            padding-bottom: 0px;
        }
        &.left-padding {
            padding-left: 25px;
        }
        @media(max-width:413px) {
            .single-comment {
                h5 {
                    font-size: 12px;
                }
                .date {
                    font-size: 11px;
                }
                .comment {
                    font-size: 10px;
                }
            }
        }
    }
    .thumb {
        margin-right: 20px;
    }
    .date {
        font-size: 13px;
        color: #cccccc;
        margin-bottom: 13px;
    }
    .comment {
        color: #777777;
        margin-bottom: 0px;
    }
    .btn-reply {
        background-color: #fff;
        color: \$title-color;
        border:1px solid #fff;
        padding: 2px 18px;
        font-size: 12px;
        display: block;
        font-weight:600;
        @include transition();
        &:hover {
            background-color: \$primary-color;
            color: #fff;
        }
    }
}

.comment-form {
    background:#fafaff;
    text-align: center;
    border: 1px solid #eee;
    padding: 47px 30px 43px;
    margin-top: 50px;
    margin-bottom: 40px;
    h4 {
        text-align: center;
        margin-bottom: 50px;
        font-size: 18px;
        line-height: 22px;
        color: \$title-color;
    }
    .name {
        padding-left: 0px;
        @media(max-width: 767px) {
            padding-right: 0px;
            margin-bottom: 1rem;
        }
    }
    .email {
        padding-right: 0px;
        @media(max-width: 991px) {
            padding-left: 0px;
        }
    }
    .form-control {
        padding: 8px 20px;
        background: #fff;
        border: none;
        border-radius: 0px;
        width: 100%;
        font-size: 14px;
        color: #777777;
        border: 1px solid transparent;
        &:focus {
            box-shadow: none;
            border: 1px solid #eee;
        }
    }
    textarea{
        &.form-control{
            height: 140px;
\t\t\tresize: none;
        }
    }
    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        font-size: 13px;
        color: #777;
    }
    ::-moz-placeholder {
        /* Firefox 19+ */
        font-size: 13px;
        color: #777;
    }
    :-ms-input-placeholder {
        /* IE 10+ */
        font-size: 13px;
        color: #777;
    }
    :-moz-placeholder {
        /* Firefox 18- */
        font-size: 13px;
        color: #777;
    }
    .primary-btn {
        text-transform: unset;
        color: #fff;
        font-size: 13px;
    }
}


/*============ End Blog Single Styles  =============*/
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_blog.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
/* Latest Blog Area css
============================================================================================ */
//.latest_blog_area{
//\t
//}
//.latest_blog_inner{
//\t
//}
//.l_blog_item{
//\t.l_blog_img{
//\t\t
//\t}
//\t.l_blog_text{
//\t\t.date{
//\t\t\tmargin-top: 24px;
//\t\t\tmargin-bottom: 15px;
//\t\t\ta{
//\t\t\t\tcolor: \$text-color;
//\t\t\t\tfont-size: 12px;
//\t\t\t\tfont-family: \$primary-font;
//\t\t\t}
//\t\t}
//\t\th4{
//\t\t\tfont-size: 21px;
//\t\t\tcolor: \$title-color;
//\t\t\tmargin-bottom: 20px;
//\t\t\t@include transition;
//\t\t\tfont-family: \$title-font;
//\t\t\tfont-weight: bold;
//\t\t\ttext-transform: uppercase;
//\t\t\tmax-width: 300px;
//\t\t\t&:hover{
//\t\t\t\tcolor: \$primary-color;
//\t\t\t}
//\t\t}
//\t\tp{
//\t\t\tmargin-bottom: 0px;
//\t\t\tfont-size: 14px;
//\t\t\tfont-family: \$primary-font;
//\t\t}
//\t}
//}
/* End Latest Blog Area css
============================================================================================ */

.blog_btn {
    border: 1px solid #fff;
    background: #fff;
    padding: 0px 32px;
    font-size: 13px;
    font-weight: 500;
    font-family: \$primary-font;
    color: \$title-color;
    line-height: 34px;
    display: inline-block;
    &:hover {
        background: \$primary-color;
        border-color: \$primary-color;
        color: #fff;
    }
}

.white_bg_btn {
    background: #fff;
    display: inline-block;
    color: \$title-color;
    line-height: 40px;
    padding: 0px 28px;
    font-size: 14px;
    font-family: \$primary-font;
    font-weight: 500;
    text-transform: uppercase;
    @include transition;
    border: none;
    &:hover {
        background: \$primary-color;
        color: #fff;
    }
}

body.blog_page {
    background: #f9f9ff;
    h1, h2, h3, h4, h5, h6 {
        font-family: \$primary-font;
    }
    p {
        font-family: \$primary-font;
        font-weight: 400;
    }
}


/* Causes Area css
============================================================================================ */
.causes_area{
}
.causes_slider{
\t.owl-dots{
\t\ttext-align: center;
\t\tmargin-top: 80px;
\t\t.owl-dot{
\t\t\theight: 14px;
\t\t\twidth: 14px;
\t\t\tbackground: #eeeeee;
\t\t\tdisplay: inline-block;
\t\t\tmargin-right: 7px;
\t\t\t&:last-child{
\t\t\t\tmargin-right: 0px;
\t\t\t}
\t\t\t&.active{
\t\t\t\tbackground: \$primary-color;
\t\t\t}
\t\t}
\t}
}
.causes_item{
\tbackground: #fff;
\t.causes_img{
\t\tposition: relative;
\t\t.c_parcent{
\t\t\tposition: absolute;
\t\t\tbottom: 0px;
\t\t\twidth: 100%;
\t\t\tleft: 0px;
\t\t\theight: 3px;
\t\t\tbackground: rgba(255, 255, 255, .5);
\t\t\tspan{
\t\t\t\twidth: 70%;
\t\t\t\theight: 3px;
\t\t\t\tbackground: \$primary-color;
\t\t\t\tposition: absolute;
\t\t\t\tleft: 0px;
\t\t\t\tbottom: 0px;
\t\t\t\t&:before{
\t\t\t\t\tcontent: \"75%\";
\t\t\t\t\tposition: absolute;
\t\t\t\t\tright: -10px;
\t\t\t\t\tbottom: 0px;
\t\t\t\t\tbackground: \$primary-color; 
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tpadding: 0px 5px;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t.causes_text{
\t\tpadding: 30px 35px 40px 30px;
\t\th4{
\t\t\tcolor: \$title-color;
\t\t\tfont-family: \$primary-font;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: 600;
\t\t\tmargin-bottom: 15px;
\t\t\tcursor: pointer;
\t\t\t&:hover{
\t\t\t\tcolor: \$primary-color;
\t\t\t}
\t\t}
\t\tp{
\t\t\tfont-size: 14px;
\t\t\tline-height: 24px;
\t\t\tcolor: \$text-color;
\t\t\tfont-weight: 300;
\t\t\tmargin-bottom: 0px;
\t\t}
\t}
\t.causes_bottom{
\t\ta{
\t\t\twidth: 50%;
\t\t\tborder: 1px solid \$primary-color;
\t\t\ttext-align: center;
\t\t\tfloat: left;
\t\t\tline-height: 50px;
\t\t\tbackground: \$primary-color;
\t\t\tcolor: #fff;
\t\t\tfont-family: \$primary-font;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 500;
\t\t\t& + a{
\t\t\t\tborder-color: #eeeeee;
\t\t\t\tbackground: #fff;
\t\t\t\tfont-size: 14px;
\t\t\t\tcolor: \$title-color;
\t\t\t}
\t\t}
\t}
}
/* End Causes Area css
============================================================================================ */



/*================= latest_blog_area css =============*/
.latest_blog_area{
    
}
.single-recent-blog-post{
    margin-bottom: 30px;
    .thumb{
        overflow: hidden;
        img{
            transition: all 0.7s linear;
        }
    }
    .details{
        padding-top: 30px;
        .sec_h4{
            line-height: 24px;
            padding: 10px 0px 13px;
            transition: all 0.3s linear;
            &:hover{
                color: \$text-color;
            }
        }
    }
    .date{
        font-size: 14px;
        line-height: 24px;
        font-weight: 400;
    }
    &:hover{
        img{
            transform: scale(1.23) rotate(10deg);
        }
    }
}
.tags{
    .tag_btn{
        font-size: 12px;
        font-weight: 500;
        line-height: 20px;
        border: 1px solid #eeeeee;
        display: inline-block;
        padding: 1px 18px;
        text-align: center;
        color: \$title-color;
        &:before{
            background: \$primary-color;
        }
        & + .tag_btn{
            margin-left: 2px;
        }
    }
}

/*========= blog_categorie_area css ===========*/
.blog_categorie_area{
    padding-top: 80px;
\tpadding-bottom: 80px;
}
.categories_post{
    position: relative;
    text-align: center;
    cursor: pointer;
    img{
        max-width: 100%;
    }
    .categories_details{
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        background: rgba(34, 34, 34, 0.80);
        color: #fff;
        transition: all 0.3s linear;
        display: flex;
        align-items: center;
        justify-content: center;
        h5{
            margin-bottom: 0px;
            font-size: 18px;
            line-height: 26px;
            text-transform: uppercase;
            color: #fff;
\t\t\tposition: relative;
//\t\t\t&:before{
//\t\t\t\tcontent: \"\";
//\t\t\t\theight: 1px;
//\t\t\t\twidth: 100%;
//\t\t\t\tbackground: #fff;
//\t\t\t\tposition: absolute;
//\t\t\t\tbottom: 0px;
//\t\t\t\tleft: 0px;
//\t\t\t}
        }
        p{
            font-weight: 300;
            font-size: 14px;
            line-height: 26px;
            margin-bottom: 0px;
        }
        .border_line{
            margin: 10px 0px;
            background: #fff;
\t\t\twidth: 100%;
    \t\theight: 1px;
        }
    }
    &:hover{
        .categories_details{
            background: rgba(63, 202, 255, 0.85);
        }
    }
}



/*============ blog_left_sidebar css ==============*/
.blog_area{
}
.blog_left_sidebar{
    
}
.blog_post {
    overflow: hidden;
}
.blog_item{
    margin-bottom: 40px;
}
.blog_info{
    padding-top: 30px;
    .post_tag{
        padding-bottom: 20px;
        a{
            font: 300 14px/21px \$primary-font;
            color: \$title-color;
            &:hover{
                color: \$text-color;
            }
\t\t\t&.active{
\t\t\t\tcolor: \$primary-color;
\t\t\t}
        }
    }
    .blog_meta{
        li{
            a{
                font: 300 14px/20px \$primary-font;
                color: #777777;
                vertical-align: middle;
                padding-bottom: 12px;
                display: inline-block;
                i{
                    color: \$title-color;
                    font-size: 16px;
                    font-weight: 600;
                    padding-left: 15px;
                    line-height: 20px;
                    vertical-align: middle;
                }
                &:hover{
                    color: \$primary-color;
                }
            }
        }
    }
}
.blog_post{
    img{
        max-width: 100%;
    }
}
.blog_details{
    padding-top: 20px;
    h2{
        font-size: 24px;
        line-height: 36px;
        color: \$title-color;
        font-weight: 500;
        transition: all 0.3s linear;
        &:hover{
            color: \$primary-color;
        }
    }
    p{
        margin-bottom: 26px;
    }
}
.view_btn{
    font-size: 14px;
    line-height: 36px;
    display: inline-block;
    color: \$title-color;
    font-weight: 500;
    padding: 0px 30px;
    background: #fff;
}

.blog_right_sidebar{
    border: 1px solid #eeeeee;
    padding: 30px;
    .widget_title{
        font-size: 18px;
        line-height: 25px;
        background: \$primary-color;
        text-align: center;
        color: #fff;
        padding: 8px 0px;
        margin-bottom: 30px;
    }
    .search_widget{
        .input-group{
            .form-control{
                font-size: 14px;
                line-height: 29px;
                border: 0px;
                width: 100%;
                font-weight: 300;
                color: #fff;
                padding-left: 20px;
                border-radius: 45px;
                z-index: 0;
\t\t\t\tbackground: \$primary-color;
                @include placeholder{
                    color: #fff;
                }
                &:focus{
                    box-shadow: none;
                }
            }
            .btn-default{
                position: absolute;
                right: 20px;;
                background: transparent;
                border: 0px;
                box-shadow: none;
                font-size: 14px;
                color: #fff;
                padding: 0px;
                top: 50%;
                transform: translateY(-50%);
                z-index: 1;
            }
        }
    }
    .author_widget{
        text-align: center;
        h4{
            font-size: 18px;
            line-height: 20px;
            color: \$title-color;
            margin-bottom: 0px;
\t\t\tmargin-top: 30px;
        }
        p{
            margin-bottom: 0px;
        }
        .social_icon{
            padding: 7px 0px 15px;
            a{
                font-size: 14px;
                color: \$title-color;
                transition: all 0.2s linear;
                & + a{
                    margin-left: 20px;
                }
                &:hover{
                    color: \$primary-color;
                }
            }
        }
    }
    .popular_post_widget{
        .post_item{
            .media-body{
                justify-content: center;
                align-self: center;
                padding-left: 20px;
                h3{
                    font-size: 14px;
                    line-height: 20px;
                    color: \$title-color;
                    margin-bottom: 4px;
                    font-weight: 500;
                    transition: all 0.3s linear;
                    &:hover{
                        color: \$primary-color;
                    }
                }
                p{
                    font-size:12px;
                    line-height: 21px;
                    margin-bottom: 0px;
                }
            }
            & + .post_item{
                margin-top: 20px;
            }
        }   
    }
    .post_category_widget{
        .cat-list{
            li{
                border-bottom: 2px dotted #eee;
                transition: all 0.3s ease 0s;
                padding-bottom: 12px;
                a{
                    font-size: 14px;
                    line-height: 20px;
                    color: #777;
                    p{
                        margin-bottom: 0px; 
                    }
                }
                & + li{
                    padding-top: 15px;
                }
                &:hover{
                    border-color: \$primary-color;
                    a{
                        color: \$primary-color;
                    }
                }
            }
        }
    }
    .newsletter_widget{
        text-align: center;
        p{
            
        }
        .form-group{
            margin-bottom: 8px;
        }
        .input-group-prepend {
            margin-right: -1px;
        }
        .input-group-text {
            background: #fff;
            border-radius: 0px;
            vertical-align: top;
            font-size: 12px;
            line-height: 36px;
            padding: 0px 0px 0px 15px;
            border: 1px solid #eeeeee;
            border-right: 0px;
        }
        .form-control{
            font-size: 12px;
            line-height: 24px;
            color: #cccccc;
            border: 1px solid #eeeeee;
            border-left: 0px;
\t\t\tborder-radius: 0px;
            @include placeholder{
                color: #cccccc;
            }
            &:focus{
                outline: none;
                box-shadow: none;
            }
        }
        .bbtns{
\t\t\tbackground: \$primary-color;
            color: #fff;
            font-size: 12px;
            line-height: 38px;
            display: inline-block;
            font-weight: 500;
            padding: 0px 24px 0px 24px;
            border-radius: 0;
        }
        .text-bottom{
            font-size: 12px;
        }
    }
    .tag_cloud_widget{
        ul{
            li{
                display: inline-block;
                a{
                    display: inline-block;
                    border: 1px solid #eee;
                    background: #fff;
                    padding: 0px 13px;
                    margin-bottom: 8px;
                    transition: all 0.3s ease 0s;
                    color: \$title-color;
                    font-size: 12px;
                    &:hover{
\t\t\t\t\t\tbackground: \$primary-color;
                        color: #fff;
                    }
                }
            }
        }
    }
    .br{
        width: 100%;
        height: 1px;
        background: rgb(238, 238, 238);
        margin: 30px 0px;
    }
}

.blog-pagination {
    padding-top: 25px;
    padding-bottom: 95px;
    .page-link {
        border-radius: 0;
    }
    .page-item {
        border: none;
    }
}

.page-link {
    background: transparent;
    font-weight: 400;
}

.blog-pagination .page-item.active .page-link {
    background-color: \$primary-color;
    border-color: transparent;
    color:#fff;
}

.blog-pagination .page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #8a8a8a;
    border: none;
}

.blog-pagination .page-link .lnr {
    font-weight: 600;
}

.blog-pagination .page-item:last-child .page-link,
.blog-pagination .page-item:first-child .page-link {
    border-radius: 0;
}

.blog-pagination .page-link:hover {
    color: #fff;
    text-decoration: none;
    background-color: \$primary-color;
    border-color: #eee;
}



/*============ Start Blog Single Styles  =============*/

.single-post-area {
    .social-links {
        padding-top: 10px;
        li {
            display: inline-block;
            margin-bottom: 10px;
            a {
                color: #cccccc;
                padding: 7px;
                font-size: 14px;
                transition: all 0.2s linear;
                &:hover {
                    color: \$title-color;
                }
            }
        }
    }
    .blog_details{
        padding-top: 26px;
        p{
            margin-bottom: 10px;
        }
    }
    .quotes {
        margin-top: 20px;
        margin-bottom: 30px;
        padding: 24px 35px 24px 30px;
        background-color: rgb(255, 255, 255);
        box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
        font-size: 14px;
        line-height: 24px;
        color: #777;
        font-style: italic;
    }
    .arrow {
        position: absolute;
        .lnr {
            font-size: 20px;
            font-weight: 600;
        }
    }
    .thumb {
        .overlay-bg {
            background: rgba(#000, .8);
        }
    }
    .navigation-area {
        border-top: 1px solid #eee;
        padding-top: 30px;
        margin-top: 60px;
        p{
            margin-bottom: 0px;
        }
        h4{
            font-size: 18px;
            line-height: 25px;
            color: \$title-color;
        }
        .nav-left {
            text-align: left;
            .thumb {
                margin-right: 20px;
                background: #000;
                img {
                    @include transition();
                }
            }
            .lnr {
                margin-left: 20px;
                opacity: 0;
                @include transition();
            }
            &:hover {
                .lnr {
                    opacity: 1;
                }
                .thumb {
                    img {
                        opacity: .5;
                    }
                }
            }
            @media(max-width:767px) {
                margin-bottom: 30px;
            }
        }
        .nav-right {
            text-align: right;
            .thumb {
                margin-left: 20px;
                background: #000;
                img {
                    @include transition();
                }
            }
            .lnr {
                margin-right: 20px;
                opacity: 0;
                @include transition();
            }
            &:hover {
                .lnr {
                    opacity: 1;
                }
                .thumb {
                    img {
                        opacity: .5;
                    }
                }
            }
        }
    }

    .sidebar-widgets{
        @media(max-width:991px){
            padding-bottom:0px;
        }
    }
}

.comments-area {
    background:#fafaff;
    border: 1px solid #eee;
    padding: 50px 30px;
    margin-top: 50px;
    @media(max-width: 414px) {
        padding: 50px 8px;
    }
    h4 {
        text-align: center;
        margin-bottom: 50px;
        color: \$title-color;
        font-size: 18px;
    }
    h5 {
        font-size: 16px;
        margin-bottom: 0px;
    }
    a {
        color: \$title-color;
    }
    .comment-list {
        padding-bottom: 48px;
        &:last-child {
            padding-bottom: 0px;
        }
        &.left-padding {
            padding-left: 25px;
        }
        @media(max-width:413px) {
            .single-comment {
                h5 {
                    font-size: 12px;
                }
                .date {
                    font-size: 11px;
                }
                .comment {
                    font-size: 10px;
                }
            }
        }
    }
    .thumb {
        margin-right: 20px;
    }
    .date {
        font-size: 13px;
        color: #cccccc;
        margin-bottom: 13px;
    }
    .comment {
        color: #777777;
        margin-bottom: 0px;
    }
    .btn-reply {
        background-color: #fff;
        color: \$title-color;
        border:1px solid #fff;
        padding: 2px 18px;
        font-size: 12px;
        display: block;
        font-weight:600;
        @include transition();
        &:hover {
            background-color: \$primary-color;
            color: #fff;
        }
    }
}

.comment-form {
    background:#fafaff;
    text-align: center;
    border: 1px solid #eee;
    padding: 47px 30px 43px;
    margin-top: 50px;
    margin-bottom: 40px;
    h4 {
        text-align: center;
        margin-bottom: 50px;
        font-size: 18px;
        line-height: 22px;
        color: \$title-color;
    }
    .name {
        padding-left: 0px;
        @media(max-width: 767px) {
            padding-right: 0px;
            margin-bottom: 1rem;
        }
    }
    .email {
        padding-right: 0px;
        @media(max-width: 991px) {
            padding-left: 0px;
        }
    }
    .form-control {
        padding: 8px 20px;
        background: #fff;
        border: none;
        border-radius: 0px;
        width: 100%;
        font-size: 14px;
        color: #777777;
        border: 1px solid transparent;
        &:focus {
            box-shadow: none;
            border: 1px solid #eee;
        }
    }
    textarea{
        &.form-control{
            height: 140px;
\t\t\tresize: none;
        }
    }
    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        font-size: 13px;
        color: #777;
    }
    ::-moz-placeholder {
        /* Firefox 19+ */
        font-size: 13px;
        color: #777;
    }
    :-ms-input-placeholder {
        /* IE 10+ */
        font-size: 13px;
        color: #777;
    }
    :-moz-placeholder {
        /* Firefox 18- */
        font-size: 13px;
        color: #777;
    }
    .primary-btn {
        text-transform: unset;
        color: #fff;
        font-size: 13px;
    }
}


/*============ End Blog Single Styles  =============*/
", "scss/_blog.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_blog.scss");
    }
}
