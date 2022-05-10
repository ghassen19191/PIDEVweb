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

/* scss/style.css */
class __TwigTemplate_9f6a04e404868eb673792c1c8ac0bcb0f2cace2459edf5d392c3d7166fea438e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/style.css"));

        // line 1
        echo "@charset \"UTF-8\";
/*----------------------------------------------------
@File: Default Styles
@Author: SPONDON IT

This file contains the styling for the actual theme, this
is the file you need to edit to change the look of the
theme.
---------------------------------------------------- */
/*=====================================================================
@Template Name: HostHub Construction 
@Developed By: Naim Lasker
Author E-mail: naimlasker@gmail.com

=====================================================================*/
/*----------------------------------------------------*/
/*font Variables*/
/*Color Variables*/
/*=================== fonts ====================*/
@import url(\"https://fonts.googleapis.com/css?family=Rajdhani:600,700|Roboto:400,500,500i\");
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Medium Layout: 1280px */
/* Tablet Layout: 768px */
/* Mobile Layout: 320px */
/* Wide Mobile Layout: 480px */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
body {
  line-height: 24px;
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 500;
  color: #777777;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: \"Rajdhani\", sans-serif;
  font-weight: bold;
}

.list {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

a {
  text-decoration: none;
  transition: all 0.3s ease-in-out;
}
a:hover, a:focus {
  text-decoration: none;
  outline: none;
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

/*---------------------------------------------------- */
/*----------------------------------------------------*/
.section_gap {
  padding: 120px 0;
}
@media (max-width: 767px) {
  .section_gap {
    padding: 60px 0;
  }
}

.section_gap_top {
  padding-top: 120px;
}
@media (max-width: 767px) {
  .section_gap_top {
    padding-top: 60px;
  }
}

.section_gap_bottom {
  padding-bottom: 120px;
}
@media (max-width: 767px) {
  .section_gap_bottom {
    padding-bottom: 60px;
  }
}

/* Main Title Area css
============================================================================================ */
.main_title {
  text-align: center;
  margin-bottom: 75px;
}
.main_title h2 {
  font-family: \"Rajdhani\", sans-serif;
  font-size: 36px;
  color: #222222;
  font-weight: bold;
  margin-bottom: 15px;
  text-transform: uppercase;
}
.main_title p {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  line-height: 24px;
  color: #777777;
  margin-bottom: 0px;
  max-width: 570px;
  margin: auto;
}
.main_title.white h2 {
  color: #fff;
}
.main_title.white p {
  color: #fff;
  opacity: 0.6;
}

/* End Main Title Area css
============================================================================================ */
/* Start Common Section Area css
============================================================================================ */
.section_content h6 {
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  font-family: \"Rajdhani\", sans-serif;
}
.section_content h3 {
  color: #222222;
  line-height: 45px;
  font-size: 36px;
  font-family: \"Rajdhani\", sans-serif;
  font-weight: bold;
  margin-bottom: 20px;
}
.section_content p {
  margin-bottom: 0px;
}

/* End Common Section Area css
============================================================================================ */
/* Start Gradient Area css
============================================================================================ */
.gradient-bg, .recent_update_inner .nav.nav-tabs li a.active, .recent_update_inner .nav.nav-tabs li a:hover, .video-play-button:before, .video-play-button:after {
  background: -webkit-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -moz-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -o-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
}

.gradient-bg2 {
  background: -webkit-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -moz-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -o-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
}

.gradient-color {
  background: -webkit-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -moz-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -o-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* End Gradient Area css
============================================================================================ */
.primary_btn {
  display: inline-block;
  background: -webkit-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: -moz-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: -ms-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: -o-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background-size: 200% auto;
  padding: 0px 35px;
  color: #222222;
  letter-spacing: 1px;
  font-family: \"Roboto\", sans-serif;
  font-size: 12px;
  font-weight: 500;
  line-height: 50px;
  border-radius: 5px;
  outline: none !important;
  box-shadow: 0px 10px 30px rgba(163, 255, 177, 0.2);
  text-align: center;
  cursor: pointer;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.primary_btn:hover {
  background-position: right center;
  color: #fff;
}

.overlay, .single-gallery .content {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
}

/* Start Video Play css
============================================================================================ */
.video-play-button {
  position: relative;
  box-sizing: content-box;
  display: inline-block;
  width: 32px;
  height: 44px;
  border-radius: 50%;
  padding: 46px 8px 18px 28px;
}
.video-play-button:before, .video-play-button:after {
  content: \"\";
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
}
.video-play-button:before {
  z-index: 0;
  -webkit-animation: pulse-border 2000ms ease-out infinite;
  -moz-animation: pulse-border 2000ms ease-out infinite;
  -o-animation: pulse-border 2000ms ease-out infinite;
  animation: pulse-border 2000ms ease-out infinite;
}
.video-play-button:after {
  z-index: 1;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.video-play-button span {
  display: block;
  position: relative;
  z-index: 3;
  width: 0;
  height: 0;
  border-left: 16px solid #000000;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
}
.video-play-button:hover:after {
  background-color: #0cbcff;
}

@-webkit-keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
@-moz-keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
@-o-keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
@keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
/* End Video Play css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
.header_area {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 9999;
  background: #2c2172;
}
.header_area .navbar-brand {
  margin-right: 30px;
}
.header_area .menu_nav {
  width: 100%;
}
.header_area .navbar {
  background: transparent;
  padding: 0px;
  border: 0px;
  border-radius: 0px;
  width: 100%;
}
.header_area .navbar .nav .nav-item {
  margin-right: 45px;
}
.header_area .navbar .nav .nav-item .nav-link {
  font: 500 12px/100px \"Roboto\", sans-serif;
  text-transform: uppercase;
  color: #fff;
  padding: 0px;
  display: inline-block;
}
.header_area .navbar .nav .nav-item .nav-link:after {
  display: none;
}
.header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
  color: #3fcaff;
}
.header_area .navbar .nav .nav-item.submenu {
  position: relative;
}
.header_area .navbar .nav .nav-item.submenu ul {
  border: none;
  padding: 0px;
  border-radius: 0px;
  box-shadow: none;
  margin: 0px;
  background: #fff;
}
@media (min-width: 992px) {
  .header_area .navbar .nav .nav-item.submenu ul {
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
}
.header_area .navbar .nav .nav-item.submenu ul:before {
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
.header_area .navbar .nav .nav-item.submenu ul .nav-item {
  display: block;
  float: none;
  margin-right: 0px;
  border-bottom: 1px solid #ededed;
  margin-left: 0px;
  transition: all 0.4s linear;
}
.header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
  line-height: 45px;
  color: #222222;
  padding: 0px 30px;
  transition: all 150ms linear;
  display: block;
  margin-right: 0px;
}
.header_area .navbar .nav .nav-item.submenu ul .nav-item:last-child {
  border-bottom: none;
}
.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {
  background-image: -moz-linear-gradient(0deg, #4dabff 0%, #62ddff 100%);
  background-image: -webkit-linear-gradient(0deg, #4dabff 0%, #62ddff 100%);
  background-image: -ms-linear-gradient(0deg, #4dabff 0%, #62ddff 100%);
  color: #fff;
}
@media (min-width: 992px) {
  .header_area .navbar .nav .nav-item.submenu:hover ul {
    visibility: visible;
    opacity: 1;
    top: 100%;
  }
}
.header_area .navbar .nav .nav-item.submenu:hover ul .nav-item {
  margin-top: 0px;
}
.header_area .navbar .nav .nav-item:last-child {
  margin-right: 0px;
}
.header_area.navbar_fixed .main_menu {
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
}
.header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
  line-height: 70px;
}
@media (min-width: 992px) {
  .header_area.white_menu .navbar .navbar-brand img {
    display: none;
  }
  .header_area.white_menu .navbar .navbar-brand img + img {
    display: inline-block;
  }
}
@media (max-width: 991px) {
  .header_area.white_menu .navbar .navbar-brand img {
    display: inline-block;
  }
  .header_area.white_menu .navbar .navbar-brand img + img {
    display: none;
  }
}
.header_area.white_menu .navbar .nav .nav-item .nav-link {
  color: #fff;
}
.header_area.white_menu.navbar_fixed .main_menu .navbar .navbar-brand img {
  display: inline-block;
}
.header_area.white_menu.navbar_fixed .main_menu .navbar .navbar-brand img + img {
  display: none;
}
.header_area.white_menu.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
  line-height: 70px;
  color: #222222;
}
.header_area .navbar-right .primary_btn {
  min-width: 135px;
  text-transform: uppercase;
  border-radius: 50px;
  line-height: 40px;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Home Banner Area css
============================================================================================ */
.home_banner_area {
  z-index: 1;
  background: url(../img/banner/home-banner.jpg) no-repeat center center;
  background-size: cover;
}
.home_banner_area .banner_inner {
  width: 100%;
}
.home_banner_area .banner_inner .home_left_img {
  padding-top: 230px;
  padding-bottom: 230px;
}
.home_banner_area .banner_inner .col-lg-6 {
  vertical-align: middle;
  align-self: center;
}
.home_banner_area .banner_inner .banner_content {
  text-align: left;
  color: #fff;
  margin-left: 70px;
}
.home_banner_area .banner_inner .banner_content h2 {
  margin-top: 0px;
  font-size: 60px;
  font-weight: bold;
  line-height: 72px;
  margin-bottom: 20px;
}
.home_banner_area .banner_inner .banner_content p {
  color: #fff;
  font-size: 16px;
  margin-bottom: 20px;
}
.home_banner_area .banner_inner .banner_content .watch_video {
  margin: 0 30px;
  font-size: 12px;
  text-transform: uppercase;
}

.blog_banner {
  min-height: 780px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  margin-bottom: 0px;
}
.blog_banner .banner_inner {
  background: #04091e;
  position: relative;
  overflow: hidden;
  width: 100%;
  min-height: 780px;
  z-index: 1;
}
.blog_banner .banner_inner .overlay, .blog_banner .banner_inner .single-gallery .content, .single-gallery .blog_banner .banner_inner .content {
  background: url(../img/banner/banner-2.jpg) no-repeat scroll center center;
  opacity: 0.5;
  height: 125%;
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  z-index: -1;
}
.blog_banner .banner_inner .blog_b_text {
  max-width: 700px;
  margin: auto;
  color: #fff;
  margin-top: 40px;
}
.blog_banner .banner_inner .blog_b_text h2 {
  font-size: 60px;
  font-weight: 500;
  font-family: \"Roboto\", sans-serif;
  line-height: 66px;
  margin-bottom: 15px;
}
.blog_banner .banner_inner .blog_b_text p {
  font-size: 16px;
  margin-bottom: 35px;
}
.blog_banner .banner_inner .blog_b_text .white_bg_btn {
  line-height: 42px;
  padding: 0px 45px;
}

.banner_box {
  max-width: 1620px;
  margin: auto;
}

.banner_area {
  position: relative;
  z-index: 1;
  min-height: 430px;
}
.banner_area .banner_inner {
  position: relative;
  overflow: hidden;
  width: 100%;
  min-height: 430px;
  background: #3fcaff;
  z-index: 1;
}
.banner_area .banner_inner .banner_content {
  margin-top: 70px;
}
.banner_area .banner_inner .banner_content h2 {
  color: #fff;
  font-size: 36px;
  font-family: \"Rajdhani\", sans-serif;
  margin-bottom: 0px;
  text-transform: uppercase;
  font-weight: bold;
}
.banner_area .banner_inner .banner_content .page_link a {
  font-size: 14px;
  color: #fff;
  font-family: \"Roboto\", sans-serif;
  margin-right: 32px;
  position: relative;
}
.banner_area .banner_inner .banner_content .page_link a:before {
  content: \"\";
  font-family: \"Linearicons-Free\";
  font-size: 14px;
  position: absolute;
  right: -25px;
  top: 54%;
  transform: translateY(-50%);
}
.banner_area .banner_inner .banner_content .page_link a:last-child {
  margin-right: 0px;
}
.banner_area .banner_inner .banner_content .page_link a:last-child:before {
  display: none;
}

/* End Home Banner Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Latest Blog Area css
============================================================================================ */
/* End Latest Blog Area css
============================================================================================ */
.blog_btn {
  border: 1px solid #eeeeee;
  background: #f9f9ff;
  padding: 0px 32px;
  font-size: 13px;
  font-weight: 500;
  font-family: \"Roboto\", sans-serif;
  color: #222222;
  line-height: 34px;
  display: inline-block;
}
.blog_btn:hover {
  background: #3fcaff;
  border-color: #3fcaff;
  color: #fff;
}

.white_bg_btn {
  background: #fff;
  display: inline-block;
  color: #222222;
  line-height: 40px;
  padding: 0px 28px;
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  border: none;
}
.white_bg_btn:hover {
  background: #3fcaff;
  color: #fff;
}

/* Causes Area css
============================================================================================ */
.causes_slider .owl-dots {
  text-align: center;
  margin-top: 80px;
}
.causes_slider .owl-dots .owl-dot {
  height: 14px;
  width: 14px;
  background: #eeeeee;
  display: inline-block;
  margin-right: 7px;
}
.causes_slider .owl-dots .owl-dot:last-child {
  margin-right: 0px;
}
.causes_slider .owl-dots .owl-dot.active {
  background: #3fcaff;
}

.causes_item {
  background: #fff;
}
.causes_item .causes_img {
  position: relative;
}
.causes_item .causes_img .c_parcent {
  position: absolute;
  bottom: 0px;
  width: 100%;
  left: 0px;
  height: 3px;
  background: rgba(255, 255, 255, 0.5);
}
.causes_item .causes_img .c_parcent span {
  width: 70%;
  height: 3px;
  background: #3fcaff;
  position: absolute;
  left: 0px;
  bottom: 0px;
}
.causes_item .causes_img .c_parcent span:before {
  content: \"75%\";
  position: absolute;
  right: -10px;
  bottom: 0px;
  background: #3fcaff;
  color: #fff;
  padding: 0px 5px;
}
.causes_item .causes_text {
  padding: 30px 35px 40px 30px;
}
.causes_item .causes_text h4 {
  color: #222222;
  font-family: \"Roboto\", sans-serif;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 15px;
  cursor: pointer;
}
.causes_item .causes_text h4:hover {
  color: #3fcaff;
}
.causes_item .causes_text p {
  font-size: 14px;
  line-height: 24px;
  color: #777777;
  font-weight: 300;
  margin-bottom: 0px;
}
.causes_item .causes_bottom a {
  width: 50%;
  border: 1px solid #3fcaff;
  text-align: center;
  float: left;
  line-height: 50px;
  background: #3fcaff;
  color: #fff;
  font-family: \"Roboto\", sans-serif;
  font-size: 14px;
  font-weight: 500;
}
.causes_item .causes_bottom a + a {
  border-color: #eeeeee;
  background: #fff;
  font-size: 14px;
  color: #222222;
}

/* End Causes Area css
============================================================================================ */
/*================= latest_blog_area css =============*/
.single-recent-blog-post {
  margin-bottom: 30px;
}
.single-recent-blog-post .thumb {
  overflow: hidden;
}
.single-recent-blog-post .thumb img {
  transition: all 0.7s linear;
}
.single-recent-blog-post .details {
  padding-top: 30px;
}
.single-recent-blog-post .details .sec_h4 {
  line-height: 24px;
  padding: 10px 0px 13px;
  transition: all 0.3s linear;
}
.single-recent-blog-post .details .sec_h4:hover {
  color: #777777;
}
.single-recent-blog-post .date {
  font-size: 14px;
  line-height: 24px;
  font-weight: 400;
}
.single-recent-blog-post:hover img {
  transform: scale(1.23) rotate(10deg);
}

.tags .tag_btn {
  font-size: 12px;
  font-weight: 500;
  line-height: 20px;
  border: 1px solid #eeeeee;
  display: inline-block;
  padding: 1px 18px;
  text-align: center;
  color: #222222;
}
.tags .tag_btn:before {
  background: #3fcaff;
}
.tags .tag_btn + .tag_btn {
  margin-left: 2px;
}

/*========= blog_categorie_area css ===========*/
.blog_categorie_area {
  padding-top: 80px;
  padding-bottom: 80px;
}

.categories_post {
  position: relative;
  text-align: center;
  cursor: pointer;
}
.categories_post img {
  max-width: 100%;
}
.categories_post .categories_details {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: rgba(34, 34, 34, 0.8);
  color: #fff;
  transition: all 0.3s linear;
  display: flex;
  align-items: center;
  justify-content: center;
}
.categories_post .categories_details h5 {
  margin-bottom: 0px;
  font-size: 18px;
  line-height: 26px;
  text-transform: uppercase;
  color: #fff;
  position: relative;
}
.categories_post .categories_details p {
  font-weight: 300;
  font-size: 14px;
  line-height: 26px;
  margin-bottom: 0px;
}
.categories_post .categories_details .border_line {
  margin: 10px 0px;
  background: #fff;
  width: 100%;
  height: 1px;
}
.categories_post:hover .categories_details {
  background: rgba(56, 152, 248, 0.85);
}

/*============ blog_left_sidebar css ==============*/
.blog_item {
  margin-bottom: 40px;
}

.blog_info {
  padding-top: 30px;
}
.blog_info .post_tag {
  padding-bottom: 20px;
}
.blog_info .post_tag a {
  font: 300 14px/21px \"Roboto\", sans-serif;
  color: #222222;
}
.blog_info .post_tag a:hover {
  color: #777777;
}
.blog_info .post_tag a.active {
  color: #3fcaff;
}
.blog_info .blog_meta li a {
  font: 300 14px/20px \"Roboto\", sans-serif;
  color: #777777;
  vertical-align: middle;
  padding-bottom: 12px;
  display: inline-block;
}
.blog_info .blog_meta li a i {
  color: #222222;
  font-size: 16px;
  font-weight: 600;
  padding-left: 15px;
  line-height: 20px;
  vertical-align: middle;
}
.blog_info .blog_meta li a:hover {
  color: #3fcaff;
}

.blog_post img {
  max-width: 100%;
}

.blog_details {
  padding-top: 20px;
}
.blog_details h2 {
  font-size: 24px;
  line-height: 36px;
  color: #222222;
  font-weight: 600;
  transition: all 0.3s linear;
}
.blog_details h2:hover {
  color: #3fcaff;
}
.blog_details p {
  margin-bottom: 26px;
}

.view_btn {
  font-size: 14px;
  line-height: 36px;
  display: inline-block;
  color: #222222;
  font-weight: 500;
  padding: 0px 30px;
  background: #fff;
}

.blog_right_sidebar {
  border: 1px solid #eeeeee;
  background: #fafaff;
  padding: 30px;
}
.blog_right_sidebar .widget_title {
  font-size: 18px;
  line-height: 25px;
  background: #3fcaff;
  text-align: center;
  color: #fff;
  padding: 8px 0px;
  margin-bottom: 30px;
}
.blog_right_sidebar .search_widget .input-group .form-control {
  font-size: 14px;
  line-height: 29px;
  border: 0px;
  width: 100%;
  font-weight: 300;
  color: #fff;
  padding-left: 20px;
  border-radius: 45px;
  z-index: 0;
  background: #3fcaff;
}
.blog_right_sidebar .search_widget .input-group .form-control.placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control:-moz-placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control::-moz-placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control::-webkit-input-placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control:focus {
  box-shadow: none;
}
.blog_right_sidebar .search_widget .input-group .btn-default {
  position: absolute;
  right: 20px;
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
.blog_right_sidebar .author_widget {
  text-align: center;
}
.blog_right_sidebar .author_widget h4 {
  font-size: 18px;
  line-height: 20px;
  color: #222222;
  margin-bottom: 5px;
  margin-top: 30px;
}
.blog_right_sidebar .author_widget p {
  margin-bottom: 0px;
}
.blog_right_sidebar .author_widget .social_icon {
  padding: 7px 0px 15px;
}
.blog_right_sidebar .author_widget .social_icon a {
  font-size: 14px;
  color: #222222;
  transition: all 0.2s linear;
}
.blog_right_sidebar .author_widget .social_icon a + a {
  margin-left: 20px;
}
.blog_right_sidebar .author_widget .social_icon a:hover {
  color: #3fcaff;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body {
  justify-content: center;
  align-self: center;
  padding-left: 20px;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
  font-size: 14px;
  line-height: 20px;
  color: #222222;
  margin-bottom: 4px;
  transition: all 0.3s linear;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body h3:hover {
  color: #3fcaff;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body p {
  font-size: 12px;
  line-height: 21px;
  margin-bottom: 0px;
}
.blog_right_sidebar .popular_post_widget .post_item + .post_item {
  margin-top: 20px;
}
.blog_right_sidebar .post_category_widget .cat-list li {
  border-bottom: 2px dotted #eee;
  transition: all 0.3s ease 0s;
  padding-bottom: 12px;
}
.blog_right_sidebar .post_category_widget .cat-list li a {
  font-size: 14px;
  line-height: 20px;
  color: #777;
}
.blog_right_sidebar .post_category_widget .cat-list li a p {
  margin-bottom: 0px;
}
.blog_right_sidebar .post_category_widget .cat-list li + li {
  padding-top: 15px;
}
.blog_right_sidebar .post_category_widget .cat-list li:hover {
  border-color: #3fcaff;
}
.blog_right_sidebar .post_category_widget .cat-list li:hover a {
  color: #3fcaff;
}
.blog_right_sidebar .newsletter_widget {
  text-align: center;
}
.blog_right_sidebar .newsletter_widget .form-group {
  margin-bottom: 8px;
}
.blog_right_sidebar .newsletter_widget .input-group-prepend {
  margin-right: -1px;
}
.blog_right_sidebar .newsletter_widget .input-group-text {
  background: #fff;
  border-radius: 0px;
  vertical-align: top;
  font-size: 12px;
  line-height: 36px;
  padding: 0px 0px 0px 15px;
  border: 1px solid #eeeeee;
  border-right: 0px;
}
.blog_right_sidebar .newsletter_widget .form-control {
  font-size: 12px;
  line-height: 24px;
  color: #cccccc;
  border: 1px solid #eeeeee;
  border-left: 0px;
  border-radius: 0px;
}
.blog_right_sidebar .newsletter_widget .form-control.placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control:-moz-placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control::-moz-placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control::-webkit-input-placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control:focus {
  outline: none;
  box-shadow: none;
}
.blog_right_sidebar .newsletter_widget .bbtns {
  background: #3fcaff;
  color: #fff;
  font-size: 12px;
  line-height: 38px;
  display: inline-block;
  font-weight: 500;
  padding: 0px 24px 0px 24px;
  border-radius: 0;
}
.blog_right_sidebar .newsletter_widget .text-bottom {
  font-size: 12px;
}
.blog_right_sidebar .tag_cloud_widget ul li {
  display: inline-block;
}
.blog_right_sidebar .tag_cloud_widget ul li a {
  display: inline-block;
  border: 1px solid #eee;
  background: #fff;
  padding: 0px 13px;
  margin-bottom: 8px;
  transition: all 0.3s ease 0s;
  color: #222222;
  font-size: 12px;
}
.blog_right_sidebar .tag_cloud_widget ul li a:hover {
  background: #3fcaff;
  color: #fff;
}
.blog_right_sidebar .br {
  width: 100%;
  height: 1px;
  background: #eeeeee;
  margin: 30px 0px;
}

.blog-pagination {
  padding-top: 25px;
  padding-bottom: 95px;
}
.blog-pagination .page-link {
  border-radius: 0;
}
.blog-pagination .page-item {
  border: none;
}

.page-link {
  background: transparent;
  font-weight: 400;
}

.blog-pagination .page-item.active .page-link {
  background-color: #3fcaff;
  border-color: transparent;
  color: #fff;
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
  background-color: #3fcaff;
  border-color: #eee;
}

/*============ Start Blog Single Styles  =============*/
.single-post-area .social-links {
  padding-top: 10px;
}
.single-post-area .social-links li {
  display: inline-block;
  margin-bottom: 10px;
}
.single-post-area .social-links li a {
  color: #cccccc;
  padding: 7px;
  font-size: 14px;
  transition: all 0.2s linear;
}
.single-post-area .social-links li a:hover {
  color: #222222;
}
.single-post-area .blog_details {
  padding-top: 26px;
}
.single-post-area .blog_details p {
  margin-bottom: 10px;
}
.single-post-area .quotes {
  margin-top: 20px;
  margin-bottom: 30px;
  padding: 24px 35px 24px 30px;
  background-color: white;
  box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
  font-size: 14px;
  line-height: 24px;
  color: #777;
  font-style: italic;
}
.single-post-area .arrow {
  position: absolute;
}
.single-post-area .arrow .lnr {
  font-size: 20px;
  font-weight: 600;
}
.single-post-area .thumb .overlay-bg {
  background: rgba(0, 0, 0, 0.8);
}
.single-post-area .navigation-area {
  border-top: 1px solid #eee;
  padding-top: 30px;
  margin-top: 60px;
}
.single-post-area .navigation-area p {
  margin-bottom: 0px;
}
.single-post-area .navigation-area h4 {
  font-size: 18px;
  line-height: 25px;
  color: #222222;
}
.single-post-area .navigation-area .nav-left {
  text-align: left;
}
.single-post-area .navigation-area .nav-left .thumb {
  margin-right: 20px;
  background: #000;
}
.single-post-area .navigation-area .nav-left .thumb img {
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-left .lnr {
  margin-left: 20px;
  opacity: 0;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-left:hover .lnr {
  opacity: 1;
}
.single-post-area .navigation-area .nav-left:hover .thumb img {
  opacity: 0.5;
}
@media (max-width: 767px) {
  .single-post-area .navigation-area .nav-left {
    margin-bottom: 30px;
  }
}
.single-post-area .navigation-area .nav-right {
  text-align: right;
}
.single-post-area .navigation-area .nav-right .thumb {
  margin-left: 20px;
  background: #000;
}
.single-post-area .navigation-area .nav-right .thumb img {
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-right .lnr {
  margin-right: 20px;
  opacity: 0;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-right:hover .lnr {
  opacity: 1;
}
.single-post-area .navigation-area .nav-right:hover .thumb img {
  opacity: 0.5;
}
@media (max-width: 991px) {
  .single-post-area .sidebar-widgets {
    padding-bottom: 0px;
  }
}

.comments-area {
  background: #fafaff;
  border: 1px solid #eee;
  padding: 50px 30px;
  margin-top: 50px;
}
@media (max-width: 414px) {
  .comments-area {
    padding: 50px 8px;
  }
}
.comments-area h4 {
  text-align: center;
  margin-bottom: 50px;
  color: #222222;
  font-size: 18px;
}
.comments-area h5 {
  font-size: 16px;
  margin-bottom: 0px;
}
.comments-area a {
  color: #222222;
}
.comments-area .comment-list {
  padding-bottom: 48px;
}
.comments-area .comment-list:last-child {
  padding-bottom: 0px;
}
.comments-area .comment-list.left-padding {
  padding-left: 25px;
}
@media (max-width: 413px) {
  .comments-area .comment-list .single-comment h5 {
    font-size: 12px;
  }
  .comments-area .comment-list .single-comment .date {
    font-size: 11px;
  }
  .comments-area .comment-list .single-comment .comment {
    font-size: 10px;
  }
}
.comments-area .thumb {
  margin-right: 20px;
}
.comments-area .date {
  font-size: 13px;
  color: #cccccc;
  margin-bottom: 13px;
}
.comments-area .comment {
  color: #777777;
  margin-bottom: 0px;
}
.comments-area .btn-reply {
  background-color: #fff;
  color: #222222;
  border: 1px solid #eee;
  padding: 2px 18px;
  font-size: 12px;
  display: block;
  font-weight: 600;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.comments-area .btn-reply:hover {
  background-color: #3fcaff;
  color: #fff;
}

.comment-form {
  background: #fafaff;
  text-align: center;
  border: 1px solid #eee;
  padding: 47px 30px 43px;
  margin-top: 50px;
  margin-bottom: 40px;
}
.comment-form h4 {
  text-align: center;
  margin-bottom: 50px;
  font-size: 18px;
  line-height: 22px;
  color: #222222;
}
.comment-form .name {
  padding-left: 0px;
}
@media (max-width: 767px) {
  .comment-form .name {
    padding-right: 0px;
    margin-bottom: 1rem;
  }
}
.comment-form .email {
  padding-right: 0px;
}
@media (max-width: 991px) {
  .comment-form .email {
    padding-left: 0px;
  }
}
.comment-form .form-control {
  padding: 8px 20px;
  background: #fff;
  border: none;
  border-radius: 0px;
  width: 100%;
  font-size: 14px;
  color: #777777;
  border: 1px solid transparent;
}
.comment-form .form-control:focus {
  box-shadow: none;
  border: 1px solid #eee;
}
.comment-form textarea.form-control {
  height: 140px;
  resize: none;
}
.comment-form ::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  font-size: 13px;
  color: #777;
}
.comment-form ::-moz-placeholder {
  /* Firefox 19+ */
  font-size: 13px;
  color: #777;
}
.comment-form :-ms-input-placeholder {
  /* IE 10+ */
  font-size: 13px;
  color: #777;
}
.comment-form :-moz-placeholder {
  /* Firefox 18- */
  font-size: 13px;
  color: #777;
}

/*============ End Blog Single Styles  =============*/
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Home Map Area css
============================================================================================ */
.home_map_area {
  position: relative;
}
.home_map_area .mapBox2 {
  min-height: 600px;
}
.home_map_area .home_details {
  position: absolute;
  right: 0px;
  width: 100%;
  z-index: 10;
  top: 50%;
  transform: translateY(-50%);
}
.home_map_area .home_details .box_home_details {
  background: #fff;
  max-width: 457px;
  float: right;
  width: 100%;
  padding-left: 92px;
  padding-right: 92px;
  padding-top: 112px;
  padding-bottom: 112px;
  border-radius: 10px;
}
.home_map_area .home_details .box_home_details .media {
  margin-bottom: 26px;
}
.home_map_area .home_details .box_home_details .media:last-child {
  margin-bottom: 0px;
}
.home_map_area .home_details .box_home_details .media .d-flex {
  padding-right: 20px;
}
.home_map_area .home_details .box_home_details .media .d-flex i {
  font-size: 20px;
  background: linear-gradient(to right, #2c28b1 0%, #9b5cf6 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.home_map_area .home_details .box_home_details .media .media-body h4 {
  font-size: 14px;
  color: #222222;
  text-transform: uppercase;
}
.home_map_area .home_details .box_home_details .media .media-body p {
  margin-bottom: 0px;
}

/* End Home Map Form Area css
============================================================================================ */
/* Reservation Form Area css
============================================================================================ */
.reservation_form_area .res_form_inner {
  max-width: 555px;
  margin: auto;
  box-shadow: 0px 10px 30px 0px rgba(153, 153, 153, 0.1);
  padding: 75px 50px;
  position: relative;
}
.reservation_form_area .res_form_inner:before {
  content: \"\";
  background: url(../img/contact-shap-1.png);
  position: absolute;
  left: -125px;
  height: 421px;
  width: 98px;
  top: 50%;
  transform: translateY(-50%);
}
.reservation_form_area .res_form_inner:after {
  content: \"\";
  background: url(../img/contact-shap-2.png);
  position: absolute;
  right: -125px;
  height: 421px;
  width: 98px;
  top: 50%;
  transform: translateY(-50%);
}

.reservation_form .form-group input {
  height: 40px;
  border-radius: 0px;
  border: 1px solid #eeeeee;
  outline: none;
  box-shadow: none;
  padding: 0px 15px;
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input.placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input:-moz-placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input::-moz-placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input::-webkit-input-placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group .res_select {
  height: 40px;
  border: 1px solid #eeeeee;
  border-radius: 0px;
  width: 100%;
  padding: 0px 15px;
  line-height: 36px;
}
.reservation_form .form-group .res_select .current {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group .res_select:after {
  content: \"\";
  font-family: \"Linearicons-Free\";
  color: #cccccc;
  transform: rotate(0deg);
  border: none;
  margin-top: -17px;
  font-size: 13px;
  right: 22px;
}
.reservation_form .form-group:last-child {
  text-align: center;
}

/* End Reservation Form Area css
============================================================================================ */
/*============== contact_area css ================*/
.mapBox {
  height: 420px;
  margin-bottom: 80px;
}

.contact_info .info_item {
  position: relative;
  padding-left: 45px;
}
.contact_info .info_item i {
  position: absolute;
  left: 0;
  top: 0;
  font-size: 20px;
  line-height: 24px;
  color: #3fcaff;
  font-weight: 600;
}
.contact_info .info_item h6 {
  font-size: 16px;
  line-height: 24px;
  color: \"Roboto\", sans-serif;
  font-weight: bold;
  margin-bottom: 0px;
  color: #222222;
}
.contact_info .info_item h6 a {
  color: #222222;
}
.contact_info .info_item p {
  font-size: 14px;
  line-height: 24px;
  padding: 2px 0px;
}

.contact_form .form-group {
  margin-bottom: 10px;
}
.contact_form .form-group .form-control {
  font-size: 13px;
  line-height: 26px;
  color: #999;
  border: 1px solid #eeeeee;
  font-family: \"Roboto\", sans-serif;
  border-radius: 0px;
  padding-left: 20px;
}
.contact_form .form-group .form-control:focus {
  box-shadow: none;
  outline: none;
}
.contact_form .form-group .form-control.placeholder {
  color: #999;
}
.contact_form .form-group .form-control:-moz-placeholder {
  color: #999;
}
.contact_form .form-group .form-control::-moz-placeholder {
  color: #999;
}
.contact_form .form-group .form-control::-webkit-input-placeholder {
  color: #999;
}
.contact_form .form-group textarea {
  resize: none;
}
.contact_form .form-group textarea.form-control {
  height: 140px;
}
.contact_form .primary_btn {
  margin-top: 20px;
  cursor: pointer;
}

/* Contact Success and error Area css
============================================================================================ */
.modal-message .modal-dialog {
  position: absolute;
  top: 36%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%) !important;
  margin: 0px;
  max-width: 500px;
  width: 100%;
}
.modal-message .modal-dialog .modal-content .modal-header {
  text-align: center;
  display: block;
  border-bottom: none;
  padding-top: 50px;
  padding-bottom: 50px;
}
.modal-message .modal-dialog .modal-content .modal-header .close {
  position: absolute;
  right: -15px;
  top: -15px;
  padding: 0px;
  color: #fff;
  opacity: 1;
  cursor: pointer;
}
.modal-message .modal-dialog .modal-content .modal-header h2 {
  display: block;
  text-align: center;
  color: #3fcaff;
  padding-bottom: 10px;
  font-family: \"Roboto\", sans-serif;
}
.modal-message .modal-dialog .modal-content .modal-header p {
  display: block;
}

/* End Contact Success and error Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/*============== Elements Area css ================*/
.mb-20 {
  margin-bottom: 20px;
}

.mb-30 {
  margin-bottom: 30px;
}

.sample-text-area {
  padding: 100px 0px;
}
.sample-text-area .title_color {
  margin-bottom: 30px;
}
.sample-text-area p {
  line-height: 26px;
}
.sample-text-area p b {
  font-weight: bold;
  color: #3fcaff;
}
.sample-text-area p i {
  color: #3fcaff;
  font-style: italic;
}
.sample-text-area p sup {
  color: #3fcaff;
  font-style: italic;
}
.sample-text-area p sub {
  color: #3fcaff;
  font-style: italic;
}
.sample-text-area p del {
  color: #3fcaff;
}
.sample-text-area p u {
  color: #3fcaff;
}

/*============== End Elements Area css ================*/
/*==============Elements Button Area css ================*/
.elements_button .title_color {
  margin-bottom: 30px;
  color: #222222;
}

.title_color {
  color: #222222;
}

.button-group-area {
  margin-top: 15px;
}
.button-group-area:nth-child(odd) {
  margin-top: 40px;
}
.button-group-area:first-child {
  margin-top: 0px;
}
.button-group-area .theme_btn {
  margin-right: 10px;
}
.button-group-area .link {
  text-decoration: underline;
  color: #222222;
  background: transparent;
}
.button-group-area .link:hover {
  color: #fff;
}
.button-group-area .disable {
  background: transparent;
  color: #007bff;
  cursor: not-allowed;
}
.button-group-area .disable:before {
  display: none;
}

.primary {
  background: #52c5fd;
}
.primary:before {
  background: #2faae6;
}

.success {
  background: #4cd3e3;
}
.success:before {
  background: #2ebccd;
}

.info {
  background: #38a4ff;
}
.info:before {
  background: #298cdf;
}

.warning {
  background: #f4e700;
}
.warning:before {
  background: #e1d608;
}

.danger {
  background: #f54940;
}
.danger:before {
  background: #e13b33;
}

.primary-border {
  background: transparent;
  border: 1px solid #52c5fd;
  color: #52c5fd;
}
.primary-border:before {
  background: #52c5fd;
}

.success-border {
  background: transparent;
  border: 1px solid #4cd3e3;
  color: #4cd3e3;
}
.success-border:before {
  background: #4cd3e3;
}

.info-border {
  background: transparent;
  border: 1px solid #38a4ff;
  color: #38a4ff;
}
.info-border:before {
  background: #38a4ff;
}

.warning-border {
  background: #fff;
  border: 1px solid #f4e700;
  color: #f4e700;
}
.warning-border:before {
  background: #f4e700;
}

.danger-border {
  background: transparent;
  border: 1px solid #f54940;
  color: #f54940;
}
.danger-border:before {
  background: #f54940;
}

.link-border {
  background: transparent;
  border: 1px solid #3fcaff;
  color: #3fcaff;
}
.link-border:before {
  background: #3fcaff;
}

.radius {
  border-radius: 3px;
}

.circle {
  border-radius: 20px;
}

.arrow span {
  padding-left: 5px;
}

.e-large {
  line-height: 50px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.large {
  line-height: 45px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.medium {
  line-height: 30px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.small {
  line-height: 25px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.general {
  line-height: 38px;
  padding-top: 0px;
  padding-bottom: 0px;
}

/*==============End Elements Button Area css ================*/
/* =================================== */
/*  Elements Page Styles
/* =================================== */
/*---------- Start Elements Page -------------*/
.generic-banner {
  margin-top: 60px;
  text-align: center;
}

.generic-banner .height {
  height: 600px;
}

@media (max-width: 767.98px) {
  .generic-banner .height {
    height: 400px;
  }
}
.generic-banner .generic-banner-content h2 {
  line-height: 1.2em;
  margin-bottom: 20px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content h2 br {
    display: none;
  }
}
.generic-banner .generic-banner-content p {
  text-align: center;
  font-size: 16px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content p br {
    display: none;
  }
}
.generic-content h1 {
  font-weight: 600;
}

.about-generic-area {
  background: #fff;
}

.about-generic-area p {
  margin-bottom: 20px;
}

.white-bg {
  background: #fff;
}

.section-top-border {
  padding: 50px 0;
  border-top: 1px dotted #eee;
}

.switch-wrap {
  margin-bottom: 10px;
}

.switch-wrap p {
  margin: 0;
}

/*---------- End Elements Page -------------*/
.sample-text-area {
  padding: 100px 0 70px 0;
}

.sample-text {
  margin-bottom: 0;
}

.text-heading {
  margin-bottom: 30px;
  font-size: 24px;
}

.typo-list {
  margin-bottom: 10px;
}

@media (max-width: 767px) {
  .typo-sec {
    margin-bottom: 30px;
  }
}
@media (max-width: 767px) {
  .element-wrap {
    margin-top: 30px;
  }
}
b, sup, sub, u, del {
  color: #f8b600;
}

h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 24px;
}

h4 {
  font-size: 18px;
}

h5 {
  font-size: 16px;
}

h6 {
  font-size: 14px;
}

.typography h1, .typography h2, .typography h3, .typography h4, .typography h5, .typography h6 {
  color: #777777;
}

.button-area .border-top-generic {
  padding: 70px 15px;
  border-top: 1px dotted #eee;
}

.button-group-area .genric-btn {
  margin-right: 10px;
  margin-top: 10px;
}

.button-group-area .genric-btn:last-child {
  margin-right: 0;
}

.circle {
  border-radius: 20px;
}

.genric-btn {
  display: inline-block;
  outline: none;
  line-height: 40px;
  padding: 0 30px;
  font-size: 0.8em;
  text-align: center;
  text-decoration: none;
  font-weight: 500;
  cursor: pointer;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.genric-btn:focus {
  outline: none;
}

.genric-btn.e-large {
  padding: 0 40px;
  line-height: 50px;
}

.genric-btn.large {
  line-height: 45px;
}

.genric-btn.medium {
  line-height: 30px;
}

.genric-btn.small {
  line-height: 25px;
}

.genric-btn.radius {
  border-radius: 3px;
}

.genric-btn.circle {
  border-radius: 20px;
}

.genric-btn.arrow {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.genric-btn.arrow span {
  margin-left: 10px;
}

.genric-btn.default {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.default:hover {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.primary {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.primary:hover {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border:hover {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.success {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.success:hover {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border:hover {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.info {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.info:hover {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border:hover {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.warning {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.warning:hover {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border:hover {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.danger {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.danger:hover {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border:hover {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.link {
  color: #222222;
  background: #f9f9ff;
  text-decoration: underline;
  border: 1px solid transparent;
}

.genric-btn.link:hover {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.link-border {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
  text-decoration: underline;
}

.genric-btn.link-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.disable {
  color: #222222, 0.3;
  background: #f9f9ff;
  border: 1px solid transparent;
  cursor: not-allowed;
}

.generic-blockquote {
  padding: 30px 50px 30px 30px;
  background: #fff;
  border-left: 2px solid #f8b600;
}

@media (max-width: 991px) {
  .progress-table-wrap {
    overflow-x: scroll;
  }
}
.progress-table {
  background: #fff;
  padding: 15px 0px 30px 0px;
  min-width: 800px;
}

.progress-table .serial {
  width: 11.83%;
  padding-left: 30px;
}

.progress-table .country {
  width: 28.07%;
}

.progress-table .visit {
  width: 19.74%;
}

.progress-table .percentage {
  width: 40.36%;
  padding-right: 50px;
}

.progress-table .table-head {
  display: flex;
}

.progress-table .table-head .serial, .progress-table .table-head .country, .progress-table .table-head .visit, .progress-table .table-head .percentage {
  color: #222222;
  line-height: 40px;
  text-transform: uppercase;
  font-weight: 500;
}

.progress-table .table-row {
  padding: 15px 0;
  border-top: 1px solid #edf3fd;
  display: flex;
}

.progress-table .table-row .serial, .progress-table .table-row .country, .progress-table .table-row .visit, .progress-table .table-row .percentage {
  display: flex;
  align-items: center;
}

.progress-table .table-row .country img {
  margin-right: 15px;
}

.progress-table .table-row .percentage .progress {
  width: 80%;
  border-radius: 0px;
  background: transparent;
}

.progress-table .table-row .percentage .progress .progress-bar {
  height: 5px;
  line-height: 5px;
}

.progress-table .table-row .percentage .progress .progress-bar.color-1 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-2 {
  background-color: #e66686;
}

.progress-table .table-row .percentage .progress .progress-bar.color-3 {
  background-color: #f09359;
}

.progress-table .table-row .percentage .progress .progress-bar.color-4 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-5 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-6 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-7 {
  background-color: #a367e7;
}

.progress-table .table-row .percentage .progress .progress-bar.color-8 {
  background-color: #e66686;
}

.single-gallery-image {
  margin-top: 30px;
  background-repeat: no-repeat !important;
  background-position: center center !important;
  background-size: cover !important;
  height: 200px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.single-gallery-image:hover {
  opacity: 0.8;
}

.list-style {
  width: 14px;
  height: 14px;
}

.unordered-list li {
  position: relative;
  padding-left: 30px;
  line-height: 1.82em !important;
}

.unordered-list li:before {
  content: \"\";
  position: absolute;
  width: 14px;
  height: 14px;
  border: 3px solid #f8b600;
  background: #fff;
  top: 4px;
  left: 0;
  border-radius: 50%;
}

.ordered-list {
  margin-left: 30px;
}

.ordered-list li {
  list-style-type: decimal-leading-zero;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-alpha li {
  margin-left: 30px;
  list-style-type: lower-alpha;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-alpha li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-roman li {
  margin-left: 30px;
  list-style-type: lower-roman;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-roman li span {
  font-weight: 300;
  color: #777777;
}

.single-input {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input:focus {
  outline: none;
}

.input-group-icon {
  position: relative;
}

.input-group-icon .icon {
  position: absolute;
  left: 20px;
  top: 0;
  line-height: 40px;
  z-index: 3;
}

.input-group-icon .icon i {
  color: #797979;
}

.input-group-icon .single-input {
  padding-left: 45px;
}

.single-textarea {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
  height: 100px;
  resize: none;
}

.single-textarea:focus {
  outline: none;
}

.single-input-primary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-primary:focus {
  outline: none;
  border: 1px solid #f8b600;
}

.single-input-accent {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-accent:focus {
  outline: none;
  border: 1px solid #eb6b55;
}

.single-input-secondary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-secondary:focus {
  outline: none;
  border: 1px solid #f09359;
}

.default-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.default-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.default-switch input + label {
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #f8b600;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.default-switch input:checked + label {
  left: 19px;
}

.single-element-widget {
  margin-bottom: 30px;
}

.primary-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.primary-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}

.primary-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.primary-switch input:checked + label:after {
  left: 19px;
}

.primary-switch input:checked + label:before {
  background: #f8b600;
}

.confirm-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.confirm-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  cursor: pointer;
}

.confirm-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.confirm-switch input:checked + label:after {
  left: 19px;
}

.confirm-switch input:checked + label:before {
  background: #4cd3e3;
}

.primary-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.single-defination h4 {
  color: #222222;
}

.primary-checkbox input:checked + label {
  background: url(../img/elements/primary-check.png) no-repeat center center/cover;
  border: none;
}

.confirm-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-checkbox input:checked + label {
  background: url(../img/elements/success-check.png) no-repeat center center/cover;
  border: none;
}

.disabled-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-checkbox input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.disabled-checkbox input:checked + label {
  background: url(../img/elements/disabled-check.png) no-repeat center center/cover;
  border: none;
}

.primary-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.primary-radio input:checked + label {
  background: url(../img/elements/primary-radio.png) no-repeat center center/cover;
  border: none;
}

.confirm-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-radio input:checked + label {
  background: url(../img/elements/success-radio.png) no-repeat center center/cover;
  border: none;
}

.disabled-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-radio input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.unordered-list {
  list-style: none;
  padding: 0px;
  margin: 0px;
}

.ordered-list {
  list-style: none;
  padding: 0px;
}

.disabled-radio input:checked + label {
  background: url(../img/elements/disabled-radio.png) no-repeat center center/cover;
  border: none;
}

.default-select {
  height: 40px;
}

.default-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #fff;
  padding-left: 20px;
  padding-right: 40px;
}

.default-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.default-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 20px;
}

.default-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.default-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.default-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.default-select .nice-select::after {
  right: 20px;
}

@media (max-width: 991px) {
  .left-align-p p {
    margin-top: 20px;
  }
}
.form-select {
  height: 40px;
  width: 100%;
}

.form-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #f9f9ff !important;
  padding-left: 45px;
  padding-right: 40px;
  width: 100%;
}

.form-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.mt-10 {
  margin-top: 10px;
}

.form-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 45px;
}

.form-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.form-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.form-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.form-select .nice-select::after {
  right: 20px;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* End Work Area css
============================================================================================ */
.recent_update_area {
  background: url(../img/recent_up_bg.png) no-repeat center;
}
.recent_update_area.made_white {
  background: #fff;
}

.recent_update_inner .nav.nav-tabs {
  border: none;
  display: flex;
  flex-wrap: wrap;
  margin-left: -15px;
  margin-right: -15px;
}
.recent_update_inner .nav.nav-tabs li {
  flex: 0 0 25%;
  max-width: 25%;
  padding: 0px 15px;
}
.recent_update_inner .nav.nav-tabs li a {
  border: none;
  padding: 0px;
  background: #fff;
  border-radius: 0px;
  text-align: center;
  line-height: 60px;
  border-radius: 5px;
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  color: #222222;
}
.recent_update_inner .nav.nav-tabs li a.active, .recent_update_inner .nav.nav-tabs li a:hover {
  box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.1);
  color: #222222;
}
.recent_update_inner .tab-content .tab-pane {
  border: none;
  padding-top: 80px;
}

.recent_update_text .col-lg-6 {
  vertical-align: middle;
  align-self: center;
}
.recent_update_text .primary_btn {
  margin-top: 35px;
}

/* End Work Area css
============================================================================================ */
/* Gallery Area css
============================================================================================ */
.gallery_area {
  padding: 180px 0 120px;
}
@media (max-width: 992px) {
  .gallery_area {
    padding: 50px 0;
  }
}

.single-gallery {
  position: relative;
  margin-bottom: 30px;
}
.single-gallery:hover {
  cursor: pointer;
}
.single-gallery:hover .overlay, .single-gallery:hover .content {
  background: rgba(255, 255, 255, 0.7);
}
.single-gallery:hover .content i {
  opacity: 1;
}
.single-gallery .overlay, .single-gallery .content {
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-gallery .content {
  max-height: 35px;
  max-width: 35px;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.single-gallery .content i {
  font-size: 35px;
  color: #000000;
  opacity: 0;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}

/* Gallery Area css
============================================================================================ */
/*
//--------- Testimonials Area -------------//*/
.testimonials_area {
  position: relative;
  background: url(../img/testimonial_bg.png) no-repeat center;
  background-size: cover;
}
.testimonials_area .owl-controls {
  text-align: center;
}
@media (max-width: 767px) {
  .testimonials_area .owl-controls {
    display: none;
  }
}
.testimonials_area .owl-controls .owl-nav {
  position: relative;
  top: 29px;
}
.testimonials_area .owl-controls .owl-nav .owl-prev,
.testimonials_area .owl-controls .owl-nav .owl-next {
  display: inline-block;
  margin-right: 31px;
  color: #000;
}
.testimonials_area .owl-controls .owl-nav .owl-prev {
  margin-right: 80px;
}
.testimonials_area .owl-controls .owl-nav .owl-next {
  margin-left: 80px;
  margin-right: 0;
}
.testimonials_area .owl-controls .owl-dots .owl-dot {
  height: 4px;
  width: 40px;
  background: #eeeeee;
  display: inline-block;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.testimonials_area .owl-controls .owl-dots .owl-dot:last-child {
  margin-right: 0px;
}
.testimonials_area .owl-controls .owl-dots .owl-dot:hover, .testimonials_area .owl-controls .owl-dots .owl-dot.active {
  background: #3fcaff;
}

.testi_slider {
  margin: auto;
}
.testi_slider .testi_item {
  text-align: center;
}
.testi_slider .testi_item img {
  width: auto;
  margin: auto;
}

.testi_item {
  margin-bottom: 50px;
}
@media (max-width: 767px) {
  .testi_item {
    margin-bottom: 0;
  }
}
.testi_item h4 {
  font-size: 21px;
  font-weight: 700;
  margin-top: 40px;
  margin-bottom: 10px;
}
.testi_item .list {
  margin-bottom: 35px;
}
.testi_item .list li {
  display: inline-block;
}
.testi_item .list li a {
  color: #ffc000;
  font-size: 14px;
}
.testi_item p {
  max-width: 570px;
  margin: auto;
}

/*//--------- End Testimonials Area -------------//*/
/*---------------------------------------------------- */
/*----------------------------------------------------*/
@media (max-width: 1619px) {
  /* Main Menu Area css
  ============================================================================================ */
  .header_area .navbar .search {
    margin-left: 40px;
  }

  /* End Main Menu Area css
  ============================================================================================ */
}
@media (max-width: 1199px) {
  /* Main Menu Area css
  ============================================================================================ */
  .header_area .navbar .nav .nav-item {
    margin-right: 28px;
  }

  /* End Main Menu Area css
  ============================================================================================ */
  /* Home Banner Area css
  ============================================================================================ */
  .home_banner_area .banner_inner {
    padding: 100px 0px;
  }

  /* End Home Banner Area css
  ============================================================================================ */
  .header_area .navbar .primary_btn {
    margin-left: 40px;
  }

  .home_banner_area .banner_inner .banner_content h2 br {
    display: none;
    font-size: 36px;
  }

  .home_banner_area .banner_inner .banner_content h2 {
    font-size: 36px;
    line-height: 45px;
  }
}
@media (max-width: 991px) {
  /* Main Menu Area css
  ============================================================================================ */
  .navbar-toggler {
    border: none;
    border-radius: 0px;
    padding: 0px;
    cursor: pointer;
    margin-top: 27px;
    margin-bottom: 23px;
  }

  .header_area .navbar {
    background: #000;
  }

  .navbar-toggler[aria-expanded=false] span:nth-child(2) {
    opacity: 1;
  }

  .navbar-toggler[aria-expanded=true] span:nth-child(2) {
    opacity: 0;
  }

  .navbar-toggler[aria-expanded=true] span:first-child {
    transform: rotate(-45deg);
    position: relative;
    top: 7.5px;
  }

  .navbar-toggler[aria-expanded=true] span:last-child {
    transform: rotate(45deg);
    bottom: 6px;
    position: relative;
  }

  .navbar-toggler span {
    display: block;
    width: 25px;
    height: 3px;
    background: #fff;
    margin: auto;
    margin-bottom: 4px;
    transition: all 400ms linear;
    cursor: pointer;
  }

  .navbar .container {
    padding-left: 15px;
    padding-right: 15px;
  }

  .nav {
    padding: 0px 0px;
  }

  .header_area + section, .header_area + row, .header_area + div {
    margin-top: 117px;
  }

  .header_top .nav {
    padding: 0px;
  }

  .header_area .navbar .nav .nav-item .nav-link {
    line-height: 40px;
    margin-right: 0px;
    display: block;
    border-bottom: 1px solid #ededed33;
    border-radius: 0px;
  }

  .header_area .navbar .search {
    margin-left: 0px;
  }

  .header_area .navbar-collapse {
    max-height: 340px;
    overflow-y: scroll;
  }

  .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
    padding: 0px 15px;
  }

  .header_area .navbar .nav .nav-item {
    margin-right: 0px;
  }

  .header_area + section, .header_area + row, .header_area + div {
    margin-top: 71px;
  }

  .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
    line-height: 40px;
  }

  .header_area.white_menu.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
    line-height: 40px;
  }

  .header_area.white_menu .navbar .nav .nav-item .nav-link {
    color: #222;
  }

  /* End Main Menu Area css
  ============================================================================================ */
  /* Blog page Area css
  ============================================================================================ */
  .categories_post img {
    width: 100%;
  }

  .categories_post {
    max-width: 360px;
    margin: 0 auto;
  }

  .blog_categorie_area .col-lg-4 {
    margin-top: 30px;
  }

  .blog_area {
    padding-bottom: 80px;
  }

  .single-post-area .blog_right_sidebar {
    margin-top: 30px;
  }

  /* End Blog page Area css
  ============================================================================================ */
  /* Contact Page Area css
  ============================================================================================ */
  .contact_info {
    margin-bottom: 50px;
  }

  /* End Contact page Area css
  ============================================================================================ */
  .home_banner_area .donation_inner {
    margin-bottom: -30px;
  }

  .home_banner_area .dontation_item {
    max-width: 350px;
    margin: auto;
  }

  /* Footer Area css
  ============================================================================================ */
  .footer_area .col-sm-6 {
    margin-bottom: 30px;
  }

  .footer_area .footer_inner {
    margin-bottom: -30px;
  }

  .news_widget {
    padding-left: 0px;
  }

  /* End End Footer Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .home_left_img {
    display: none;
  }

  .header_area .navbar .primary_btn {
    display: none;
  }

  .home_banner_area .banner_inner {
    padding: 70px 0px 100px 0px;
  }

  .left_side_text {
    margin-bottom: 50px;
  }

  .price_item {
    max-width: 360px;
    margin: 0px auto 30px;
  }

  .price_inner {
    margin-bottom: -30px;
  }
}
@media (max-width: 767px) {
  .home_banner_area {
    min-height: 500px;
  }

  .home_banner_area .banner_inner {
    min-height: 500px;
  }

  .home_banner_area .banner_inner .banner_content {
    margin-top: 0px;
  }

  /* Blog Page Area css
  ============================================================================================ */
  .blog_banner .banner_inner .blog_b_text h2 {
    font-size: 40px;
    line-height: 50px;
  }

  .blog_info.text-right {
    text-align: left !important;
    margin-bottom: 10px;
  }

  /* End Blog Page Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .banner_content h3 {
    font-size: 30px;
  }

  .home_banner_area .banner_inner .banner_content p br {
    display: none;
  }

  .home_banner_area .banner_inner .banner_content h3 span {
    line-height: 45px;
    padding-bottom: 0px;
    padding-top: 0px;
  }

  /* Footer Area css
  ============================================================================================ */
  .footer-bottom {
    text-align: center;
  }

  .footer-bottom .footer-social {
    text-align: center;
    margin-top: 15px;
  }

  /* End End Footer Area css
  ============================================================================================ */
  .made_life_inner .nav.nav-tabs li {
    flex: 0 0 50%;
    max-width: 50%;
    margin-bottom: 15px;
  }

  .made_life_inner .nav.nav-tabs {
    margin-bottom: -15px;
  }

  .made_life_area.made_white .left_side_text {
    margin-bottom: 0px;
    margin-top: 30px;
  }
}
@media (max-width: 575px) {
  .header_area + section, .header_area + row, .header_area + div {
    margin-top: 71px;
  }

  /* Home Banner Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .banner_content h2 {
    font-size: 28px;
    line-height: 38px;
  }

  .home_banner_area {
    min-height: 450px;
  }

  .home_banner_area .banner_inner {
    min-height: 450px;
  }

  .blog_banner .banner_inner .blog_b_text {
    margin-top: 0px;
  }

  .home_banner_area .banner_inner .banner_content img {
    display: none;
  }

  .home_banner_area .banner_inner .banner_content h5 {
    margin-top: 0px;
  }

  /* End Home Banner Area css
  ============================================================================================ */
  .section_gap {
    padding-top: 70px;
    padding-bottom: 70px;
  }

  .main_title h2 {
    font-size: 25px;
  }

  /* Elements Area css
  ============================================================================================ */
  .sample-text-area {
    padding: 70px 0 70px 0;
  }

  .generic-blockquote {
    padding: 30px 15px 30px 30px;
  }

  /* End Elements Area css
  ============================================================================================ */
  /* Blog Page Area css
  ============================================================================================ */
  .blog_details h2 {
    font-size: 20px;
    line-height: 30px;
  }

  .blog_banner .banner_inner .blog_b_text h2 {
    font-size: 28px;
    line-height: 38px;
  }

  /* End Blog Page Area css
  ============================================================================================ */
  /* Footer Area css
  ============================================================================================ */
  .footer-area {
    padding: 70px 0px;
  }

  /* End End Footer Area css
  ============================================================================================ */
  .pad_top {
    padding-top: 70px;
  }

  .pad_btm {
    padding-bottom: 70px;
  }
}
@media (max-width: 480px) {
  /* Main Menu Area css
  ============================================================================================ */
  .header_area .navbar-collapse {
    max-height: 250px;
  }

  /* End Main Menu Area css
  ============================================================================================ */
  /* Home Banner Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .banner_content {
    padding: 30px 15px;
    margin-top: 0px;
  }

  .home_banner_area .banner_inner .banner_content h3 {
    font-size: 24px;
  }

  /* End Home Banner Area css
  ============================================================================================ */
  .banner_area .banner_inner .banner_content h2 {
    font-size: 32px;
  }

  /* Blog Page Area css
  ============================================================================================ */
  .comments-area .thumb {
    margin-right: 10px;
  }

  /* End Blog Page Area css
  ============================================================================================ */
  .testi_item .media .d-flex {
    padding-right: 0px;
  }

  .testi_item .media .d-flex img {
    width: auto;
    margin-bottom: 15px;
  }

  .testi_item .media {
    display: block;
  }
}
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Footer Area css
============================================================================================ */
.footer_area {
  background: #000410;
}

.f_title {
  margin-bottom: 35px;
}
.f_title h3 {
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  font-family: \"Rajdhani\", sans-serif;
  margin-bottom: 0px;
}

.ab_widget p {
  font-size: 14px;
  line-height: 24px;
  font-family: \"Roboto\", sans-serif;
  color: #777777;
  margin-bottom: 30px;
}
.ab_widget p a {
  color: #3fcaff;
}
.ab_widget p + p {
  margin-bottom: 0px;
}

.news_widget {
  padding-left: 15px;
}
.news_widget p {
  font-size: 14px;
  line-height: 24px;
  font-family: \"Roboto\", sans-serif;
  color: #777777;
  margin-bottom: 15px;
}
.news_widget .input-group input {
  height: 40px;
  background: #fff;
  border-radius: 0px;
  width: 80%;
  border: none;
  padding: 0px 15px;
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  color: #cccccc;
  outline: none;
  box-shadow: none;
}
.news_widget .input-group input.placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group input:-moz-placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group input::-moz-placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group input::-webkit-input-placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group .sub-btn {
  border-radius: 0px;
  background: #3fcaff;
  outline: none !important;
  box-shadow: none !important;
  padding: 0px;
  width: 42px;
  cursor: pointer;
  color: #fff;
}

.social_widget p {
  font-size: 14px;
  line-height: 24px;
  font-family: \"Roboto\", sans-serif;
  color: #777777;
  margin-bottom: 10px;
}
.social_widget .list li {
  margin-right: 17px;
  display: inline-block;
}
.social_widget .list li a {
  color: #cccccc;
  font-size: 14px;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.social_widget .list li:last-child {
  margin-right: 0px;
}
.social_widget .list li:hover a {
  color: #3fcaff;
}

.copy_right_text {
  text-align: center;
  margin-top: 60px;
}
.copy_right_text p a {
  color: #3fcaff;
}

/* End Footer Area css
============================================================================================ */
/*---------------------------------------------------- */

/*# sourceMappingURL=style.css.map */
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@charset \"UTF-8\";
/*----------------------------------------------------
@File: Default Styles
@Author: SPONDON IT

This file contains the styling for the actual theme, this
is the file you need to edit to change the look of the
theme.
---------------------------------------------------- */
/*=====================================================================
@Template Name: HostHub Construction 
@Developed By: Naim Lasker
Author E-mail: naimlasker@gmail.com

=====================================================================*/
/*----------------------------------------------------*/
/*font Variables*/
/*Color Variables*/
/*=================== fonts ====================*/
@import url(\"https://fonts.googleapis.com/css?family=Rajdhani:600,700|Roboto:400,500,500i\");
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Medium Layout: 1280px */
/* Tablet Layout: 768px */
/* Mobile Layout: 320px */
/* Wide Mobile Layout: 480px */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
body {
  line-height: 24px;
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 500;
  color: #777777;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: \"Rajdhani\", sans-serif;
  font-weight: bold;
}

.list {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

a {
  text-decoration: none;
  transition: all 0.3s ease-in-out;
}
a:hover, a:focus {
  text-decoration: none;
  outline: none;
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

/*---------------------------------------------------- */
/*----------------------------------------------------*/
.section_gap {
  padding: 120px 0;
}
@media (max-width: 767px) {
  .section_gap {
    padding: 60px 0;
  }
}

.section_gap_top {
  padding-top: 120px;
}
@media (max-width: 767px) {
  .section_gap_top {
    padding-top: 60px;
  }
}

.section_gap_bottom {
  padding-bottom: 120px;
}
@media (max-width: 767px) {
  .section_gap_bottom {
    padding-bottom: 60px;
  }
}

/* Main Title Area css
============================================================================================ */
.main_title {
  text-align: center;
  margin-bottom: 75px;
}
.main_title h2 {
  font-family: \"Rajdhani\", sans-serif;
  font-size: 36px;
  color: #222222;
  font-weight: bold;
  margin-bottom: 15px;
  text-transform: uppercase;
}
.main_title p {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  line-height: 24px;
  color: #777777;
  margin-bottom: 0px;
  max-width: 570px;
  margin: auto;
}
.main_title.white h2 {
  color: #fff;
}
.main_title.white p {
  color: #fff;
  opacity: 0.6;
}

/* End Main Title Area css
============================================================================================ */
/* Start Common Section Area css
============================================================================================ */
.section_content h6 {
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  font-family: \"Rajdhani\", sans-serif;
}
.section_content h3 {
  color: #222222;
  line-height: 45px;
  font-size: 36px;
  font-family: \"Rajdhani\", sans-serif;
  font-weight: bold;
  margin-bottom: 20px;
}
.section_content p {
  margin-bottom: 0px;
}

/* End Common Section Area css
============================================================================================ */
/* Start Gradient Area css
============================================================================================ */
.gradient-bg, .recent_update_inner .nav.nav-tabs li a.active, .recent_update_inner .nav.nav-tabs li a:hover, .video-play-button:before, .video-play-button:after {
  background: -webkit-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -moz-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -o-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
}

.gradient-bg2 {
  background: -webkit-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -moz-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -o-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
}

.gradient-color {
  background: -webkit-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -moz-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: -o-linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  background: linear-gradient(90deg, #3fcaff 0%, #a4ffb0 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* End Gradient Area css
============================================================================================ */
.primary_btn {
  display: inline-block;
  background: -webkit-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: -moz-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: -ms-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: -o-linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
  background-size: 200% auto;
  padding: 0px 35px;
  color: #222222;
  letter-spacing: 1px;
  font-family: \"Roboto\", sans-serif;
  font-size: 12px;
  font-weight: 500;
  line-height: 50px;
  border-radius: 5px;
  outline: none !important;
  box-shadow: 0px 10px 30px rgba(163, 255, 177, 0.2);
  text-align: center;
  cursor: pointer;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.primary_btn:hover {
  background-position: right center;
  color: #fff;
}

.overlay, .single-gallery .content {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
}

/* Start Video Play css
============================================================================================ */
.video-play-button {
  position: relative;
  box-sizing: content-box;
  display: inline-block;
  width: 32px;
  height: 44px;
  border-radius: 50%;
  padding: 46px 8px 18px 28px;
}
.video-play-button:before, .video-play-button:after {
  content: \"\";
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
}
.video-play-button:before {
  z-index: 0;
  -webkit-animation: pulse-border 2000ms ease-out infinite;
  -moz-animation: pulse-border 2000ms ease-out infinite;
  -o-animation: pulse-border 2000ms ease-out infinite;
  animation: pulse-border 2000ms ease-out infinite;
}
.video-play-button:after {
  z-index: 1;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.video-play-button span {
  display: block;
  position: relative;
  z-index: 3;
  width: 0;
  height: 0;
  border-left: 16px solid #000000;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
}
.video-play-button:hover:after {
  background-color: #0cbcff;
}

@-webkit-keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
@-moz-keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
@-o-keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
@keyframes pulse-border {
  0% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1);
    transform: translate(-50%, -50%) translateZ(0) scale(1);
    opacity: 0.7;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -moz-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -ms-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    -o-transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
    opacity: 0.1;
  }
}
/* End Video Play css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
.header_area {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 9999;
  background: #2c2172;
}
.header_area .navbar-brand {
  margin-right: 30px;
}
.header_area .menu_nav {
  width: 100%;
}
.header_area .navbar {
  background: transparent;
  padding: 0px;
  border: 0px;
  border-radius: 0px;
  width: 100%;
}
.header_area .navbar .nav .nav-item {
  margin-right: 45px;
}
.header_area .navbar .nav .nav-item .nav-link {
  font: 500 12px/100px \"Roboto\", sans-serif;
  text-transform: uppercase;
  color: #fff;
  padding: 0px;
  display: inline-block;
}
.header_area .navbar .nav .nav-item .nav-link:after {
  display: none;
}
.header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
  color: #3fcaff;
}
.header_area .navbar .nav .nav-item.submenu {
  position: relative;
}
.header_area .navbar .nav .nav-item.submenu ul {
  border: none;
  padding: 0px;
  border-radius: 0px;
  box-shadow: none;
  margin: 0px;
  background: #fff;
}
@media (min-width: 992px) {
  .header_area .navbar .nav .nav-item.submenu ul {
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
}
.header_area .navbar .nav .nav-item.submenu ul:before {
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
.header_area .navbar .nav .nav-item.submenu ul .nav-item {
  display: block;
  float: none;
  margin-right: 0px;
  border-bottom: 1px solid #ededed;
  margin-left: 0px;
  transition: all 0.4s linear;
}
.header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
  line-height: 45px;
  color: #222222;
  padding: 0px 30px;
  transition: all 150ms linear;
  display: block;
  margin-right: 0px;
}
.header_area .navbar .nav .nav-item.submenu ul .nav-item:last-child {
  border-bottom: none;
}
.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {
  background-image: -moz-linear-gradient(0deg, #4dabff 0%, #62ddff 100%);
  background-image: -webkit-linear-gradient(0deg, #4dabff 0%, #62ddff 100%);
  background-image: -ms-linear-gradient(0deg, #4dabff 0%, #62ddff 100%);
  color: #fff;
}
@media (min-width: 992px) {
  .header_area .navbar .nav .nav-item.submenu:hover ul {
    visibility: visible;
    opacity: 1;
    top: 100%;
  }
}
.header_area .navbar .nav .nav-item.submenu:hover ul .nav-item {
  margin-top: 0px;
}
.header_area .navbar .nav .nav-item:last-child {
  margin-right: 0px;
}
.header_area.navbar_fixed .main_menu {
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
}
.header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
  line-height: 70px;
}
@media (min-width: 992px) {
  .header_area.white_menu .navbar .navbar-brand img {
    display: none;
  }
  .header_area.white_menu .navbar .navbar-brand img + img {
    display: inline-block;
  }
}
@media (max-width: 991px) {
  .header_area.white_menu .navbar .navbar-brand img {
    display: inline-block;
  }
  .header_area.white_menu .navbar .navbar-brand img + img {
    display: none;
  }
}
.header_area.white_menu .navbar .nav .nav-item .nav-link {
  color: #fff;
}
.header_area.white_menu.navbar_fixed .main_menu .navbar .navbar-brand img {
  display: inline-block;
}
.header_area.white_menu.navbar_fixed .main_menu .navbar .navbar-brand img + img {
  display: none;
}
.header_area.white_menu.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
  line-height: 70px;
  color: #222222;
}
.header_area .navbar-right .primary_btn {
  min-width: 135px;
  text-transform: uppercase;
  border-radius: 50px;
  line-height: 40px;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Home Banner Area css
============================================================================================ */
.home_banner_area {
  z-index: 1;
  background: url(../img/banner/home-banner.jpg) no-repeat center center;
  background-size: cover;
}
.home_banner_area .banner_inner {
  width: 100%;
}
.home_banner_area .banner_inner .home_left_img {
  padding-top: 230px;
  padding-bottom: 230px;
}
.home_banner_area .banner_inner .col-lg-6 {
  vertical-align: middle;
  align-self: center;
}
.home_banner_area .banner_inner .banner_content {
  text-align: left;
  color: #fff;
  margin-left: 70px;
}
.home_banner_area .banner_inner .banner_content h2 {
  margin-top: 0px;
  font-size: 60px;
  font-weight: bold;
  line-height: 72px;
  margin-bottom: 20px;
}
.home_banner_area .banner_inner .banner_content p {
  color: #fff;
  font-size: 16px;
  margin-bottom: 20px;
}
.home_banner_area .banner_inner .banner_content .watch_video {
  margin: 0 30px;
  font-size: 12px;
  text-transform: uppercase;
}

.blog_banner {
  min-height: 780px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  margin-bottom: 0px;
}
.blog_banner .banner_inner {
  background: #04091e;
  position: relative;
  overflow: hidden;
  width: 100%;
  min-height: 780px;
  z-index: 1;
}
.blog_banner .banner_inner .overlay, .blog_banner .banner_inner .single-gallery .content, .single-gallery .blog_banner .banner_inner .content {
  background: url(../img/banner/banner-2.jpg) no-repeat scroll center center;
  opacity: 0.5;
  height: 125%;
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  z-index: -1;
}
.blog_banner .banner_inner .blog_b_text {
  max-width: 700px;
  margin: auto;
  color: #fff;
  margin-top: 40px;
}
.blog_banner .banner_inner .blog_b_text h2 {
  font-size: 60px;
  font-weight: 500;
  font-family: \"Roboto\", sans-serif;
  line-height: 66px;
  margin-bottom: 15px;
}
.blog_banner .banner_inner .blog_b_text p {
  font-size: 16px;
  margin-bottom: 35px;
}
.blog_banner .banner_inner .blog_b_text .white_bg_btn {
  line-height: 42px;
  padding: 0px 45px;
}

.banner_box {
  max-width: 1620px;
  margin: auto;
}

.banner_area {
  position: relative;
  z-index: 1;
  min-height: 430px;
}
.banner_area .banner_inner {
  position: relative;
  overflow: hidden;
  width: 100%;
  min-height: 430px;
  background: #3fcaff;
  z-index: 1;
}
.banner_area .banner_inner .banner_content {
  margin-top: 70px;
}
.banner_area .banner_inner .banner_content h2 {
  color: #fff;
  font-size: 36px;
  font-family: \"Rajdhani\", sans-serif;
  margin-bottom: 0px;
  text-transform: uppercase;
  font-weight: bold;
}
.banner_area .banner_inner .banner_content .page_link a {
  font-size: 14px;
  color: #fff;
  font-family: \"Roboto\", sans-serif;
  margin-right: 32px;
  position: relative;
}
.banner_area .banner_inner .banner_content .page_link a:before {
  content: \"\";
  font-family: \"Linearicons-Free\";
  font-size: 14px;
  position: absolute;
  right: -25px;
  top: 54%;
  transform: translateY(-50%);
}
.banner_area .banner_inner .banner_content .page_link a:last-child {
  margin-right: 0px;
}
.banner_area .banner_inner .banner_content .page_link a:last-child:before {
  display: none;
}

/* End Home Banner Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Latest Blog Area css
============================================================================================ */
/* End Latest Blog Area css
============================================================================================ */
.blog_btn {
  border: 1px solid #eeeeee;
  background: #f9f9ff;
  padding: 0px 32px;
  font-size: 13px;
  font-weight: 500;
  font-family: \"Roboto\", sans-serif;
  color: #222222;
  line-height: 34px;
  display: inline-block;
}
.blog_btn:hover {
  background: #3fcaff;
  border-color: #3fcaff;
  color: #fff;
}

.white_bg_btn {
  background: #fff;
  display: inline-block;
  color: #222222;
  line-height: 40px;
  padding: 0px 28px;
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  border: none;
}
.white_bg_btn:hover {
  background: #3fcaff;
  color: #fff;
}

/* Causes Area css
============================================================================================ */
.causes_slider .owl-dots {
  text-align: center;
  margin-top: 80px;
}
.causes_slider .owl-dots .owl-dot {
  height: 14px;
  width: 14px;
  background: #eeeeee;
  display: inline-block;
  margin-right: 7px;
}
.causes_slider .owl-dots .owl-dot:last-child {
  margin-right: 0px;
}
.causes_slider .owl-dots .owl-dot.active {
  background: #3fcaff;
}

.causes_item {
  background: #fff;
}
.causes_item .causes_img {
  position: relative;
}
.causes_item .causes_img .c_parcent {
  position: absolute;
  bottom: 0px;
  width: 100%;
  left: 0px;
  height: 3px;
  background: rgba(255, 255, 255, 0.5);
}
.causes_item .causes_img .c_parcent span {
  width: 70%;
  height: 3px;
  background: #3fcaff;
  position: absolute;
  left: 0px;
  bottom: 0px;
}
.causes_item .causes_img .c_parcent span:before {
  content: \"75%\";
  position: absolute;
  right: -10px;
  bottom: 0px;
  background: #3fcaff;
  color: #fff;
  padding: 0px 5px;
}
.causes_item .causes_text {
  padding: 30px 35px 40px 30px;
}
.causes_item .causes_text h4 {
  color: #222222;
  font-family: \"Roboto\", sans-serif;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 15px;
  cursor: pointer;
}
.causes_item .causes_text h4:hover {
  color: #3fcaff;
}
.causes_item .causes_text p {
  font-size: 14px;
  line-height: 24px;
  color: #777777;
  font-weight: 300;
  margin-bottom: 0px;
}
.causes_item .causes_bottom a {
  width: 50%;
  border: 1px solid #3fcaff;
  text-align: center;
  float: left;
  line-height: 50px;
  background: #3fcaff;
  color: #fff;
  font-family: \"Roboto\", sans-serif;
  font-size: 14px;
  font-weight: 500;
}
.causes_item .causes_bottom a + a {
  border-color: #eeeeee;
  background: #fff;
  font-size: 14px;
  color: #222222;
}

/* End Causes Area css
============================================================================================ */
/*================= latest_blog_area css =============*/
.single-recent-blog-post {
  margin-bottom: 30px;
}
.single-recent-blog-post .thumb {
  overflow: hidden;
}
.single-recent-blog-post .thumb img {
  transition: all 0.7s linear;
}
.single-recent-blog-post .details {
  padding-top: 30px;
}
.single-recent-blog-post .details .sec_h4 {
  line-height: 24px;
  padding: 10px 0px 13px;
  transition: all 0.3s linear;
}
.single-recent-blog-post .details .sec_h4:hover {
  color: #777777;
}
.single-recent-blog-post .date {
  font-size: 14px;
  line-height: 24px;
  font-weight: 400;
}
.single-recent-blog-post:hover img {
  transform: scale(1.23) rotate(10deg);
}

.tags .tag_btn {
  font-size: 12px;
  font-weight: 500;
  line-height: 20px;
  border: 1px solid #eeeeee;
  display: inline-block;
  padding: 1px 18px;
  text-align: center;
  color: #222222;
}
.tags .tag_btn:before {
  background: #3fcaff;
}
.tags .tag_btn + .tag_btn {
  margin-left: 2px;
}

/*========= blog_categorie_area css ===========*/
.blog_categorie_area {
  padding-top: 80px;
  padding-bottom: 80px;
}

.categories_post {
  position: relative;
  text-align: center;
  cursor: pointer;
}
.categories_post img {
  max-width: 100%;
}
.categories_post .categories_details {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: rgba(34, 34, 34, 0.8);
  color: #fff;
  transition: all 0.3s linear;
  display: flex;
  align-items: center;
  justify-content: center;
}
.categories_post .categories_details h5 {
  margin-bottom: 0px;
  font-size: 18px;
  line-height: 26px;
  text-transform: uppercase;
  color: #fff;
  position: relative;
}
.categories_post .categories_details p {
  font-weight: 300;
  font-size: 14px;
  line-height: 26px;
  margin-bottom: 0px;
}
.categories_post .categories_details .border_line {
  margin: 10px 0px;
  background: #fff;
  width: 100%;
  height: 1px;
}
.categories_post:hover .categories_details {
  background: rgba(56, 152, 248, 0.85);
}

/*============ blog_left_sidebar css ==============*/
.blog_item {
  margin-bottom: 40px;
}

.blog_info {
  padding-top: 30px;
}
.blog_info .post_tag {
  padding-bottom: 20px;
}
.blog_info .post_tag a {
  font: 300 14px/21px \"Roboto\", sans-serif;
  color: #222222;
}
.blog_info .post_tag a:hover {
  color: #777777;
}
.blog_info .post_tag a.active {
  color: #3fcaff;
}
.blog_info .blog_meta li a {
  font: 300 14px/20px \"Roboto\", sans-serif;
  color: #777777;
  vertical-align: middle;
  padding-bottom: 12px;
  display: inline-block;
}
.blog_info .blog_meta li a i {
  color: #222222;
  font-size: 16px;
  font-weight: 600;
  padding-left: 15px;
  line-height: 20px;
  vertical-align: middle;
}
.blog_info .blog_meta li a:hover {
  color: #3fcaff;
}

.blog_post img {
  max-width: 100%;
}

.blog_details {
  padding-top: 20px;
}
.blog_details h2 {
  font-size: 24px;
  line-height: 36px;
  color: #222222;
  font-weight: 600;
  transition: all 0.3s linear;
}
.blog_details h2:hover {
  color: #3fcaff;
}
.blog_details p {
  margin-bottom: 26px;
}

.view_btn {
  font-size: 14px;
  line-height: 36px;
  display: inline-block;
  color: #222222;
  font-weight: 500;
  padding: 0px 30px;
  background: #fff;
}

.blog_right_sidebar {
  border: 1px solid #eeeeee;
  background: #fafaff;
  padding: 30px;
}
.blog_right_sidebar .widget_title {
  font-size: 18px;
  line-height: 25px;
  background: #3fcaff;
  text-align: center;
  color: #fff;
  padding: 8px 0px;
  margin-bottom: 30px;
}
.blog_right_sidebar .search_widget .input-group .form-control {
  font-size: 14px;
  line-height: 29px;
  border: 0px;
  width: 100%;
  font-weight: 300;
  color: #fff;
  padding-left: 20px;
  border-radius: 45px;
  z-index: 0;
  background: #3fcaff;
}
.blog_right_sidebar .search_widget .input-group .form-control.placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control:-moz-placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control::-moz-placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control::-webkit-input-placeholder {
  color: #fff;
}
.blog_right_sidebar .search_widget .input-group .form-control:focus {
  box-shadow: none;
}
.blog_right_sidebar .search_widget .input-group .btn-default {
  position: absolute;
  right: 20px;
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
.blog_right_sidebar .author_widget {
  text-align: center;
}
.blog_right_sidebar .author_widget h4 {
  font-size: 18px;
  line-height: 20px;
  color: #222222;
  margin-bottom: 5px;
  margin-top: 30px;
}
.blog_right_sidebar .author_widget p {
  margin-bottom: 0px;
}
.blog_right_sidebar .author_widget .social_icon {
  padding: 7px 0px 15px;
}
.blog_right_sidebar .author_widget .social_icon a {
  font-size: 14px;
  color: #222222;
  transition: all 0.2s linear;
}
.blog_right_sidebar .author_widget .social_icon a + a {
  margin-left: 20px;
}
.blog_right_sidebar .author_widget .social_icon a:hover {
  color: #3fcaff;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body {
  justify-content: center;
  align-self: center;
  padding-left: 20px;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
  font-size: 14px;
  line-height: 20px;
  color: #222222;
  margin-bottom: 4px;
  transition: all 0.3s linear;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body h3:hover {
  color: #3fcaff;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body p {
  font-size: 12px;
  line-height: 21px;
  margin-bottom: 0px;
}
.blog_right_sidebar .popular_post_widget .post_item + .post_item {
  margin-top: 20px;
}
.blog_right_sidebar .post_category_widget .cat-list li {
  border-bottom: 2px dotted #eee;
  transition: all 0.3s ease 0s;
  padding-bottom: 12px;
}
.blog_right_sidebar .post_category_widget .cat-list li a {
  font-size: 14px;
  line-height: 20px;
  color: #777;
}
.blog_right_sidebar .post_category_widget .cat-list li a p {
  margin-bottom: 0px;
}
.blog_right_sidebar .post_category_widget .cat-list li + li {
  padding-top: 15px;
}
.blog_right_sidebar .post_category_widget .cat-list li:hover {
  border-color: #3fcaff;
}
.blog_right_sidebar .post_category_widget .cat-list li:hover a {
  color: #3fcaff;
}
.blog_right_sidebar .newsletter_widget {
  text-align: center;
}
.blog_right_sidebar .newsletter_widget .form-group {
  margin-bottom: 8px;
}
.blog_right_sidebar .newsletter_widget .input-group-prepend {
  margin-right: -1px;
}
.blog_right_sidebar .newsletter_widget .input-group-text {
  background: #fff;
  border-radius: 0px;
  vertical-align: top;
  font-size: 12px;
  line-height: 36px;
  padding: 0px 0px 0px 15px;
  border: 1px solid #eeeeee;
  border-right: 0px;
}
.blog_right_sidebar .newsletter_widget .form-control {
  font-size: 12px;
  line-height: 24px;
  color: #cccccc;
  border: 1px solid #eeeeee;
  border-left: 0px;
  border-radius: 0px;
}
.blog_right_sidebar .newsletter_widget .form-control.placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control:-moz-placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control::-moz-placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control::-webkit-input-placeholder {
  color: #cccccc;
}
.blog_right_sidebar .newsletter_widget .form-control:focus {
  outline: none;
  box-shadow: none;
}
.blog_right_sidebar .newsletter_widget .bbtns {
  background: #3fcaff;
  color: #fff;
  font-size: 12px;
  line-height: 38px;
  display: inline-block;
  font-weight: 500;
  padding: 0px 24px 0px 24px;
  border-radius: 0;
}
.blog_right_sidebar .newsletter_widget .text-bottom {
  font-size: 12px;
}
.blog_right_sidebar .tag_cloud_widget ul li {
  display: inline-block;
}
.blog_right_sidebar .tag_cloud_widget ul li a {
  display: inline-block;
  border: 1px solid #eee;
  background: #fff;
  padding: 0px 13px;
  margin-bottom: 8px;
  transition: all 0.3s ease 0s;
  color: #222222;
  font-size: 12px;
}
.blog_right_sidebar .tag_cloud_widget ul li a:hover {
  background: #3fcaff;
  color: #fff;
}
.blog_right_sidebar .br {
  width: 100%;
  height: 1px;
  background: #eeeeee;
  margin: 30px 0px;
}

.blog-pagination {
  padding-top: 25px;
  padding-bottom: 95px;
}
.blog-pagination .page-link {
  border-radius: 0;
}
.blog-pagination .page-item {
  border: none;
}

.page-link {
  background: transparent;
  font-weight: 400;
}

.blog-pagination .page-item.active .page-link {
  background-color: #3fcaff;
  border-color: transparent;
  color: #fff;
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
  background-color: #3fcaff;
  border-color: #eee;
}

/*============ Start Blog Single Styles  =============*/
.single-post-area .social-links {
  padding-top: 10px;
}
.single-post-area .social-links li {
  display: inline-block;
  margin-bottom: 10px;
}
.single-post-area .social-links li a {
  color: #cccccc;
  padding: 7px;
  font-size: 14px;
  transition: all 0.2s linear;
}
.single-post-area .social-links li a:hover {
  color: #222222;
}
.single-post-area .blog_details {
  padding-top: 26px;
}
.single-post-area .blog_details p {
  margin-bottom: 10px;
}
.single-post-area .quotes {
  margin-top: 20px;
  margin-bottom: 30px;
  padding: 24px 35px 24px 30px;
  background-color: white;
  box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
  font-size: 14px;
  line-height: 24px;
  color: #777;
  font-style: italic;
}
.single-post-area .arrow {
  position: absolute;
}
.single-post-area .arrow .lnr {
  font-size: 20px;
  font-weight: 600;
}
.single-post-area .thumb .overlay-bg {
  background: rgba(0, 0, 0, 0.8);
}
.single-post-area .navigation-area {
  border-top: 1px solid #eee;
  padding-top: 30px;
  margin-top: 60px;
}
.single-post-area .navigation-area p {
  margin-bottom: 0px;
}
.single-post-area .navigation-area h4 {
  font-size: 18px;
  line-height: 25px;
  color: #222222;
}
.single-post-area .navigation-area .nav-left {
  text-align: left;
}
.single-post-area .navigation-area .nav-left .thumb {
  margin-right: 20px;
  background: #000;
}
.single-post-area .navigation-area .nav-left .thumb img {
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-left .lnr {
  margin-left: 20px;
  opacity: 0;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-left:hover .lnr {
  opacity: 1;
}
.single-post-area .navigation-area .nav-left:hover .thumb img {
  opacity: 0.5;
}
@media (max-width: 767px) {
  .single-post-area .navigation-area .nav-left {
    margin-bottom: 30px;
  }
}
.single-post-area .navigation-area .nav-right {
  text-align: right;
}
.single-post-area .navigation-area .nav-right .thumb {
  margin-left: 20px;
  background: #000;
}
.single-post-area .navigation-area .nav-right .thumb img {
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-right .lnr {
  margin-right: 20px;
  opacity: 0;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-post-area .navigation-area .nav-right:hover .lnr {
  opacity: 1;
}
.single-post-area .navigation-area .nav-right:hover .thumb img {
  opacity: 0.5;
}
@media (max-width: 991px) {
  .single-post-area .sidebar-widgets {
    padding-bottom: 0px;
  }
}

.comments-area {
  background: #fafaff;
  border: 1px solid #eee;
  padding: 50px 30px;
  margin-top: 50px;
}
@media (max-width: 414px) {
  .comments-area {
    padding: 50px 8px;
  }
}
.comments-area h4 {
  text-align: center;
  margin-bottom: 50px;
  color: #222222;
  font-size: 18px;
}
.comments-area h5 {
  font-size: 16px;
  margin-bottom: 0px;
}
.comments-area a {
  color: #222222;
}
.comments-area .comment-list {
  padding-bottom: 48px;
}
.comments-area .comment-list:last-child {
  padding-bottom: 0px;
}
.comments-area .comment-list.left-padding {
  padding-left: 25px;
}
@media (max-width: 413px) {
  .comments-area .comment-list .single-comment h5 {
    font-size: 12px;
  }
  .comments-area .comment-list .single-comment .date {
    font-size: 11px;
  }
  .comments-area .comment-list .single-comment .comment {
    font-size: 10px;
  }
}
.comments-area .thumb {
  margin-right: 20px;
}
.comments-area .date {
  font-size: 13px;
  color: #cccccc;
  margin-bottom: 13px;
}
.comments-area .comment {
  color: #777777;
  margin-bottom: 0px;
}
.comments-area .btn-reply {
  background-color: #fff;
  color: #222222;
  border: 1px solid #eee;
  padding: 2px 18px;
  font-size: 12px;
  display: block;
  font-weight: 600;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.comments-area .btn-reply:hover {
  background-color: #3fcaff;
  color: #fff;
}

.comment-form {
  background: #fafaff;
  text-align: center;
  border: 1px solid #eee;
  padding: 47px 30px 43px;
  margin-top: 50px;
  margin-bottom: 40px;
}
.comment-form h4 {
  text-align: center;
  margin-bottom: 50px;
  font-size: 18px;
  line-height: 22px;
  color: #222222;
}
.comment-form .name {
  padding-left: 0px;
}
@media (max-width: 767px) {
  .comment-form .name {
    padding-right: 0px;
    margin-bottom: 1rem;
  }
}
.comment-form .email {
  padding-right: 0px;
}
@media (max-width: 991px) {
  .comment-form .email {
    padding-left: 0px;
  }
}
.comment-form .form-control {
  padding: 8px 20px;
  background: #fff;
  border: none;
  border-radius: 0px;
  width: 100%;
  font-size: 14px;
  color: #777777;
  border: 1px solid transparent;
}
.comment-form .form-control:focus {
  box-shadow: none;
  border: 1px solid #eee;
}
.comment-form textarea.form-control {
  height: 140px;
  resize: none;
}
.comment-form ::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  font-size: 13px;
  color: #777;
}
.comment-form ::-moz-placeholder {
  /* Firefox 19+ */
  font-size: 13px;
  color: #777;
}
.comment-form :-ms-input-placeholder {
  /* IE 10+ */
  font-size: 13px;
  color: #777;
}
.comment-form :-moz-placeholder {
  /* Firefox 18- */
  font-size: 13px;
  color: #777;
}

/*============ End Blog Single Styles  =============*/
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Home Map Area css
============================================================================================ */
.home_map_area {
  position: relative;
}
.home_map_area .mapBox2 {
  min-height: 600px;
}
.home_map_area .home_details {
  position: absolute;
  right: 0px;
  width: 100%;
  z-index: 10;
  top: 50%;
  transform: translateY(-50%);
}
.home_map_area .home_details .box_home_details {
  background: #fff;
  max-width: 457px;
  float: right;
  width: 100%;
  padding-left: 92px;
  padding-right: 92px;
  padding-top: 112px;
  padding-bottom: 112px;
  border-radius: 10px;
}
.home_map_area .home_details .box_home_details .media {
  margin-bottom: 26px;
}
.home_map_area .home_details .box_home_details .media:last-child {
  margin-bottom: 0px;
}
.home_map_area .home_details .box_home_details .media .d-flex {
  padding-right: 20px;
}
.home_map_area .home_details .box_home_details .media .d-flex i {
  font-size: 20px;
  background: linear-gradient(to right, #2c28b1 0%, #9b5cf6 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.home_map_area .home_details .box_home_details .media .media-body h4 {
  font-size: 14px;
  color: #222222;
  text-transform: uppercase;
}
.home_map_area .home_details .box_home_details .media .media-body p {
  margin-bottom: 0px;
}

/* End Home Map Form Area css
============================================================================================ */
/* Reservation Form Area css
============================================================================================ */
.reservation_form_area .res_form_inner {
  max-width: 555px;
  margin: auto;
  box-shadow: 0px 10px 30px 0px rgba(153, 153, 153, 0.1);
  padding: 75px 50px;
  position: relative;
}
.reservation_form_area .res_form_inner:before {
  content: \"\";
  background: url(../img/contact-shap-1.png);
  position: absolute;
  left: -125px;
  height: 421px;
  width: 98px;
  top: 50%;
  transform: translateY(-50%);
}
.reservation_form_area .res_form_inner:after {
  content: \"\";
  background: url(../img/contact-shap-2.png);
  position: absolute;
  right: -125px;
  height: 421px;
  width: 98px;
  top: 50%;
  transform: translateY(-50%);
}

.reservation_form .form-group input {
  height: 40px;
  border-radius: 0px;
  border: 1px solid #eeeeee;
  outline: none;
  box-shadow: none;
  padding: 0px 15px;
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input.placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input:-moz-placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input::-moz-placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group input::-webkit-input-placeholder {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group .res_select {
  height: 40px;
  border: 1px solid #eeeeee;
  border-radius: 0px;
  width: 100%;
  padding: 0px 15px;
  line-height: 36px;
}
.reservation_form .form-group .res_select .current {
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 300;
  color: #999999;
}
.reservation_form .form-group .res_select:after {
  content: \"\";
  font-family: \"Linearicons-Free\";
  color: #cccccc;
  transform: rotate(0deg);
  border: none;
  margin-top: -17px;
  font-size: 13px;
  right: 22px;
}
.reservation_form .form-group:last-child {
  text-align: center;
}

/* End Reservation Form Area css
============================================================================================ */
/*============== contact_area css ================*/
.mapBox {
  height: 420px;
  margin-bottom: 80px;
}

.contact_info .info_item {
  position: relative;
  padding-left: 45px;
}
.contact_info .info_item i {
  position: absolute;
  left: 0;
  top: 0;
  font-size: 20px;
  line-height: 24px;
  color: #3fcaff;
  font-weight: 600;
}
.contact_info .info_item h6 {
  font-size: 16px;
  line-height: 24px;
  color: \"Roboto\", sans-serif;
  font-weight: bold;
  margin-bottom: 0px;
  color: #222222;
}
.contact_info .info_item h6 a {
  color: #222222;
}
.contact_info .info_item p {
  font-size: 14px;
  line-height: 24px;
  padding: 2px 0px;
}

.contact_form .form-group {
  margin-bottom: 10px;
}
.contact_form .form-group .form-control {
  font-size: 13px;
  line-height: 26px;
  color: #999;
  border: 1px solid #eeeeee;
  font-family: \"Roboto\", sans-serif;
  border-radius: 0px;
  padding-left: 20px;
}
.contact_form .form-group .form-control:focus {
  box-shadow: none;
  outline: none;
}
.contact_form .form-group .form-control.placeholder {
  color: #999;
}
.contact_form .form-group .form-control:-moz-placeholder {
  color: #999;
}
.contact_form .form-group .form-control::-moz-placeholder {
  color: #999;
}
.contact_form .form-group .form-control::-webkit-input-placeholder {
  color: #999;
}
.contact_form .form-group textarea {
  resize: none;
}
.contact_form .form-group textarea.form-control {
  height: 140px;
}
.contact_form .primary_btn {
  margin-top: 20px;
  cursor: pointer;
}

/* Contact Success and error Area css
============================================================================================ */
.modal-message .modal-dialog {
  position: absolute;
  top: 36%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%) !important;
  margin: 0px;
  max-width: 500px;
  width: 100%;
}
.modal-message .modal-dialog .modal-content .modal-header {
  text-align: center;
  display: block;
  border-bottom: none;
  padding-top: 50px;
  padding-bottom: 50px;
}
.modal-message .modal-dialog .modal-content .modal-header .close {
  position: absolute;
  right: -15px;
  top: -15px;
  padding: 0px;
  color: #fff;
  opacity: 1;
  cursor: pointer;
}
.modal-message .modal-dialog .modal-content .modal-header h2 {
  display: block;
  text-align: center;
  color: #3fcaff;
  padding-bottom: 10px;
  font-family: \"Roboto\", sans-serif;
}
.modal-message .modal-dialog .modal-content .modal-header p {
  display: block;
}

/* End Contact Success and error Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/*============== Elements Area css ================*/
.mb-20 {
  margin-bottom: 20px;
}

.mb-30 {
  margin-bottom: 30px;
}

.sample-text-area {
  padding: 100px 0px;
}
.sample-text-area .title_color {
  margin-bottom: 30px;
}
.sample-text-area p {
  line-height: 26px;
}
.sample-text-area p b {
  font-weight: bold;
  color: #3fcaff;
}
.sample-text-area p i {
  color: #3fcaff;
  font-style: italic;
}
.sample-text-area p sup {
  color: #3fcaff;
  font-style: italic;
}
.sample-text-area p sub {
  color: #3fcaff;
  font-style: italic;
}
.sample-text-area p del {
  color: #3fcaff;
}
.sample-text-area p u {
  color: #3fcaff;
}

/*============== End Elements Area css ================*/
/*==============Elements Button Area css ================*/
.elements_button .title_color {
  margin-bottom: 30px;
  color: #222222;
}

.title_color {
  color: #222222;
}

.button-group-area {
  margin-top: 15px;
}
.button-group-area:nth-child(odd) {
  margin-top: 40px;
}
.button-group-area:first-child {
  margin-top: 0px;
}
.button-group-area .theme_btn {
  margin-right: 10px;
}
.button-group-area .link {
  text-decoration: underline;
  color: #222222;
  background: transparent;
}
.button-group-area .link:hover {
  color: #fff;
}
.button-group-area .disable {
  background: transparent;
  color: #007bff;
  cursor: not-allowed;
}
.button-group-area .disable:before {
  display: none;
}

.primary {
  background: #52c5fd;
}
.primary:before {
  background: #2faae6;
}

.success {
  background: #4cd3e3;
}
.success:before {
  background: #2ebccd;
}

.info {
  background: #38a4ff;
}
.info:before {
  background: #298cdf;
}

.warning {
  background: #f4e700;
}
.warning:before {
  background: #e1d608;
}

.danger {
  background: #f54940;
}
.danger:before {
  background: #e13b33;
}

.primary-border {
  background: transparent;
  border: 1px solid #52c5fd;
  color: #52c5fd;
}
.primary-border:before {
  background: #52c5fd;
}

.success-border {
  background: transparent;
  border: 1px solid #4cd3e3;
  color: #4cd3e3;
}
.success-border:before {
  background: #4cd3e3;
}

.info-border {
  background: transparent;
  border: 1px solid #38a4ff;
  color: #38a4ff;
}
.info-border:before {
  background: #38a4ff;
}

.warning-border {
  background: #fff;
  border: 1px solid #f4e700;
  color: #f4e700;
}
.warning-border:before {
  background: #f4e700;
}

.danger-border {
  background: transparent;
  border: 1px solid #f54940;
  color: #f54940;
}
.danger-border:before {
  background: #f54940;
}

.link-border {
  background: transparent;
  border: 1px solid #3fcaff;
  color: #3fcaff;
}
.link-border:before {
  background: #3fcaff;
}

.radius {
  border-radius: 3px;
}

.circle {
  border-radius: 20px;
}

.arrow span {
  padding-left: 5px;
}

.e-large {
  line-height: 50px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.large {
  line-height: 45px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.medium {
  line-height: 30px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.small {
  line-height: 25px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.general {
  line-height: 38px;
  padding-top: 0px;
  padding-bottom: 0px;
}

/*==============End Elements Button Area css ================*/
/* =================================== */
/*  Elements Page Styles
/* =================================== */
/*---------- Start Elements Page -------------*/
.generic-banner {
  margin-top: 60px;
  text-align: center;
}

.generic-banner .height {
  height: 600px;
}

@media (max-width: 767.98px) {
  .generic-banner .height {
    height: 400px;
  }
}
.generic-banner .generic-banner-content h2 {
  line-height: 1.2em;
  margin-bottom: 20px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content h2 br {
    display: none;
  }
}
.generic-banner .generic-banner-content p {
  text-align: center;
  font-size: 16px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content p br {
    display: none;
  }
}
.generic-content h1 {
  font-weight: 600;
}

.about-generic-area {
  background: #fff;
}

.about-generic-area p {
  margin-bottom: 20px;
}

.white-bg {
  background: #fff;
}

.section-top-border {
  padding: 50px 0;
  border-top: 1px dotted #eee;
}

.switch-wrap {
  margin-bottom: 10px;
}

.switch-wrap p {
  margin: 0;
}

/*---------- End Elements Page -------------*/
.sample-text-area {
  padding: 100px 0 70px 0;
}

.sample-text {
  margin-bottom: 0;
}

.text-heading {
  margin-bottom: 30px;
  font-size: 24px;
}

.typo-list {
  margin-bottom: 10px;
}

@media (max-width: 767px) {
  .typo-sec {
    margin-bottom: 30px;
  }
}
@media (max-width: 767px) {
  .element-wrap {
    margin-top: 30px;
  }
}
b, sup, sub, u, del {
  color: #f8b600;
}

h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 24px;
}

h4 {
  font-size: 18px;
}

h5 {
  font-size: 16px;
}

h6 {
  font-size: 14px;
}

.typography h1, .typography h2, .typography h3, .typography h4, .typography h5, .typography h6 {
  color: #777777;
}

.button-area .border-top-generic {
  padding: 70px 15px;
  border-top: 1px dotted #eee;
}

.button-group-area .genric-btn {
  margin-right: 10px;
  margin-top: 10px;
}

.button-group-area .genric-btn:last-child {
  margin-right: 0;
}

.circle {
  border-radius: 20px;
}

.genric-btn {
  display: inline-block;
  outline: none;
  line-height: 40px;
  padding: 0 30px;
  font-size: 0.8em;
  text-align: center;
  text-decoration: none;
  font-weight: 500;
  cursor: pointer;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.genric-btn:focus {
  outline: none;
}

.genric-btn.e-large {
  padding: 0 40px;
  line-height: 50px;
}

.genric-btn.large {
  line-height: 45px;
}

.genric-btn.medium {
  line-height: 30px;
}

.genric-btn.small {
  line-height: 25px;
}

.genric-btn.radius {
  border-radius: 3px;
}

.genric-btn.circle {
  border-radius: 20px;
}

.genric-btn.arrow {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.genric-btn.arrow span {
  margin-left: 10px;
}

.genric-btn.default {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.default:hover {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.primary {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.primary:hover {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border:hover {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.success {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.success:hover {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border:hover {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.info {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.info:hover {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border:hover {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.warning {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.warning:hover {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border:hover {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.danger {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.danger:hover {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border:hover {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.link {
  color: #222222;
  background: #f9f9ff;
  text-decoration: underline;
  border: 1px solid transparent;
}

.genric-btn.link:hover {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.link-border {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
  text-decoration: underline;
}

.genric-btn.link-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.disable {
  color: #222222, 0.3;
  background: #f9f9ff;
  border: 1px solid transparent;
  cursor: not-allowed;
}

.generic-blockquote {
  padding: 30px 50px 30px 30px;
  background: #fff;
  border-left: 2px solid #f8b600;
}

@media (max-width: 991px) {
  .progress-table-wrap {
    overflow-x: scroll;
  }
}
.progress-table {
  background: #fff;
  padding: 15px 0px 30px 0px;
  min-width: 800px;
}

.progress-table .serial {
  width: 11.83%;
  padding-left: 30px;
}

.progress-table .country {
  width: 28.07%;
}

.progress-table .visit {
  width: 19.74%;
}

.progress-table .percentage {
  width: 40.36%;
  padding-right: 50px;
}

.progress-table .table-head {
  display: flex;
}

.progress-table .table-head .serial, .progress-table .table-head .country, .progress-table .table-head .visit, .progress-table .table-head .percentage {
  color: #222222;
  line-height: 40px;
  text-transform: uppercase;
  font-weight: 500;
}

.progress-table .table-row {
  padding: 15px 0;
  border-top: 1px solid #edf3fd;
  display: flex;
}

.progress-table .table-row .serial, .progress-table .table-row .country, .progress-table .table-row .visit, .progress-table .table-row .percentage {
  display: flex;
  align-items: center;
}

.progress-table .table-row .country img {
  margin-right: 15px;
}

.progress-table .table-row .percentage .progress {
  width: 80%;
  border-radius: 0px;
  background: transparent;
}

.progress-table .table-row .percentage .progress .progress-bar {
  height: 5px;
  line-height: 5px;
}

.progress-table .table-row .percentage .progress .progress-bar.color-1 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-2 {
  background-color: #e66686;
}

.progress-table .table-row .percentage .progress .progress-bar.color-3 {
  background-color: #f09359;
}

.progress-table .table-row .percentage .progress .progress-bar.color-4 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-5 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-6 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-7 {
  background-color: #a367e7;
}

.progress-table .table-row .percentage .progress .progress-bar.color-8 {
  background-color: #e66686;
}

.single-gallery-image {
  margin-top: 30px;
  background-repeat: no-repeat !important;
  background-position: center center !important;
  background-size: cover !important;
  height: 200px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.single-gallery-image:hover {
  opacity: 0.8;
}

.list-style {
  width: 14px;
  height: 14px;
}

.unordered-list li {
  position: relative;
  padding-left: 30px;
  line-height: 1.82em !important;
}

.unordered-list li:before {
  content: \"\";
  position: absolute;
  width: 14px;
  height: 14px;
  border: 3px solid #f8b600;
  background: #fff;
  top: 4px;
  left: 0;
  border-radius: 50%;
}

.ordered-list {
  margin-left: 30px;
}

.ordered-list li {
  list-style-type: decimal-leading-zero;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-alpha li {
  margin-left: 30px;
  list-style-type: lower-alpha;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-alpha li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-roman li {
  margin-left: 30px;
  list-style-type: lower-roman;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-roman li span {
  font-weight: 300;
  color: #777777;
}

.single-input {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input:focus {
  outline: none;
}

.input-group-icon {
  position: relative;
}

.input-group-icon .icon {
  position: absolute;
  left: 20px;
  top: 0;
  line-height: 40px;
  z-index: 3;
}

.input-group-icon .icon i {
  color: #797979;
}

.input-group-icon .single-input {
  padding-left: 45px;
}

.single-textarea {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
  height: 100px;
  resize: none;
}

.single-textarea:focus {
  outline: none;
}

.single-input-primary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-primary:focus {
  outline: none;
  border: 1px solid #f8b600;
}

.single-input-accent {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-accent:focus {
  outline: none;
  border: 1px solid #eb6b55;
}

.single-input-secondary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-secondary:focus {
  outline: none;
  border: 1px solid #f09359;
}

.default-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.default-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.default-switch input + label {
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #f8b600;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.default-switch input:checked + label {
  left: 19px;
}

.single-element-widget {
  margin-bottom: 30px;
}

.primary-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.primary-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}

.primary-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.primary-switch input:checked + label:after {
  left: 19px;
}

.primary-switch input:checked + label:before {
  background: #f8b600;
}

.confirm-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.confirm-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  cursor: pointer;
}

.confirm-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.confirm-switch input:checked + label:after {
  left: 19px;
}

.confirm-switch input:checked + label:before {
  background: #4cd3e3;
}

.primary-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.single-defination h4 {
  color: #222222;
}

.primary-checkbox input:checked + label {
  background: url(../img/elements/primary-check.png) no-repeat center center/cover;
  border: none;
}

.confirm-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-checkbox input:checked + label {
  background: url(../img/elements/success-check.png) no-repeat center center/cover;
  border: none;
}

.disabled-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-checkbox input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.disabled-checkbox input:checked + label {
  background: url(../img/elements/disabled-check.png) no-repeat center center/cover;
  border: none;
}

.primary-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.primary-radio input:checked + label {
  background: url(../img/elements/primary-radio.png) no-repeat center center/cover;
  border: none;
}

.confirm-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-radio input:checked + label {
  background: url(../img/elements/success-radio.png) no-repeat center center/cover;
  border: none;
}

.disabled-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-radio input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.unordered-list {
  list-style: none;
  padding: 0px;
  margin: 0px;
}

.ordered-list {
  list-style: none;
  padding: 0px;
}

.disabled-radio input:checked + label {
  background: url(../img/elements/disabled-radio.png) no-repeat center center/cover;
  border: none;
}

.default-select {
  height: 40px;
}

.default-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #fff;
  padding-left: 20px;
  padding-right: 40px;
}

.default-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.default-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 20px;
}

.default-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.default-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.default-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.default-select .nice-select::after {
  right: 20px;
}

@media (max-width: 991px) {
  .left-align-p p {
    margin-top: 20px;
  }
}
.form-select {
  height: 40px;
  width: 100%;
}

.form-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #f9f9ff !important;
  padding-left: 45px;
  padding-right: 40px;
  width: 100%;
}

.form-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.mt-10 {
  margin-top: 10px;
}

.form-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 45px;
}

.form-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.form-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.form-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.form-select .nice-select::after {
  right: 20px;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* End Work Area css
============================================================================================ */
.recent_update_area {
  background: url(../img/recent_up_bg.png) no-repeat center;
}
.recent_update_area.made_white {
  background: #fff;
}

.recent_update_inner .nav.nav-tabs {
  border: none;
  display: flex;
  flex-wrap: wrap;
  margin-left: -15px;
  margin-right: -15px;
}
.recent_update_inner .nav.nav-tabs li {
  flex: 0 0 25%;
  max-width: 25%;
  padding: 0px 15px;
}
.recent_update_inner .nav.nav-tabs li a {
  border: none;
  padding: 0px;
  background: #fff;
  border-radius: 0px;
  text-align: center;
  line-height: 60px;
  border-radius: 5px;
  font-size: 13px;
  font-family: \"Roboto\", sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  color: #222222;
}
.recent_update_inner .nav.nav-tabs li a.active, .recent_update_inner .nav.nav-tabs li a:hover {
  box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.1);
  color: #222222;
}
.recent_update_inner .tab-content .tab-pane {
  border: none;
  padding-top: 80px;
}

.recent_update_text .col-lg-6 {
  vertical-align: middle;
  align-self: center;
}
.recent_update_text .primary_btn {
  margin-top: 35px;
}

/* End Work Area css
============================================================================================ */
/* Gallery Area css
============================================================================================ */
.gallery_area {
  padding: 180px 0 120px;
}
@media (max-width: 992px) {
  .gallery_area {
    padding: 50px 0;
  }
}

.single-gallery {
  position: relative;
  margin-bottom: 30px;
}
.single-gallery:hover {
  cursor: pointer;
}
.single-gallery:hover .overlay, .single-gallery:hover .content {
  background: rgba(255, 255, 255, 0.7);
}
.single-gallery:hover .content i {
  opacity: 1;
}
.single-gallery .overlay, .single-gallery .content {
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.single-gallery .content {
  max-height: 35px;
  max-width: 35px;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.single-gallery .content i {
  font-size: 35px;
  color: #000000;
  opacity: 0;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}

/* Gallery Area css
============================================================================================ */
/*
//--------- Testimonials Area -------------//*/
.testimonials_area {
  position: relative;
  background: url(../img/testimonial_bg.png) no-repeat center;
  background-size: cover;
}
.testimonials_area .owl-controls {
  text-align: center;
}
@media (max-width: 767px) {
  .testimonials_area .owl-controls {
    display: none;
  }
}
.testimonials_area .owl-controls .owl-nav {
  position: relative;
  top: 29px;
}
.testimonials_area .owl-controls .owl-nav .owl-prev,
.testimonials_area .owl-controls .owl-nav .owl-next {
  display: inline-block;
  margin-right: 31px;
  color: #000;
}
.testimonials_area .owl-controls .owl-nav .owl-prev {
  margin-right: 80px;
}
.testimonials_area .owl-controls .owl-nav .owl-next {
  margin-left: 80px;
  margin-right: 0;
}
.testimonials_area .owl-controls .owl-dots .owl-dot {
  height: 4px;
  width: 40px;
  background: #eeeeee;
  display: inline-block;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.testimonials_area .owl-controls .owl-dots .owl-dot:last-child {
  margin-right: 0px;
}
.testimonials_area .owl-controls .owl-dots .owl-dot:hover, .testimonials_area .owl-controls .owl-dots .owl-dot.active {
  background: #3fcaff;
}

.testi_slider {
  margin: auto;
}
.testi_slider .testi_item {
  text-align: center;
}
.testi_slider .testi_item img {
  width: auto;
  margin: auto;
}

.testi_item {
  margin-bottom: 50px;
}
@media (max-width: 767px) {
  .testi_item {
    margin-bottom: 0;
  }
}
.testi_item h4 {
  font-size: 21px;
  font-weight: 700;
  margin-top: 40px;
  margin-bottom: 10px;
}
.testi_item .list {
  margin-bottom: 35px;
}
.testi_item .list li {
  display: inline-block;
}
.testi_item .list li a {
  color: #ffc000;
  font-size: 14px;
}
.testi_item p {
  max-width: 570px;
  margin: auto;
}

/*//--------- End Testimonials Area -------------//*/
/*---------------------------------------------------- */
/*----------------------------------------------------*/
@media (max-width: 1619px) {
  /* Main Menu Area css
  ============================================================================================ */
  .header_area .navbar .search {
    margin-left: 40px;
  }

  /* End Main Menu Area css
  ============================================================================================ */
}
@media (max-width: 1199px) {
  /* Main Menu Area css
  ============================================================================================ */
  .header_area .navbar .nav .nav-item {
    margin-right: 28px;
  }

  /* End Main Menu Area css
  ============================================================================================ */
  /* Home Banner Area css
  ============================================================================================ */
  .home_banner_area .banner_inner {
    padding: 100px 0px;
  }

  /* End Home Banner Area css
  ============================================================================================ */
  .header_area .navbar .primary_btn {
    margin-left: 40px;
  }

  .home_banner_area .banner_inner .banner_content h2 br {
    display: none;
    font-size: 36px;
  }

  .home_banner_area .banner_inner .banner_content h2 {
    font-size: 36px;
    line-height: 45px;
  }
}
@media (max-width: 991px) {
  /* Main Menu Area css
  ============================================================================================ */
  .navbar-toggler {
    border: none;
    border-radius: 0px;
    padding: 0px;
    cursor: pointer;
    margin-top: 27px;
    margin-bottom: 23px;
  }

  .header_area .navbar {
    background: #000;
  }

  .navbar-toggler[aria-expanded=false] span:nth-child(2) {
    opacity: 1;
  }

  .navbar-toggler[aria-expanded=true] span:nth-child(2) {
    opacity: 0;
  }

  .navbar-toggler[aria-expanded=true] span:first-child {
    transform: rotate(-45deg);
    position: relative;
    top: 7.5px;
  }

  .navbar-toggler[aria-expanded=true] span:last-child {
    transform: rotate(45deg);
    bottom: 6px;
    position: relative;
  }

  .navbar-toggler span {
    display: block;
    width: 25px;
    height: 3px;
    background: #fff;
    margin: auto;
    margin-bottom: 4px;
    transition: all 400ms linear;
    cursor: pointer;
  }

  .navbar .container {
    padding-left: 15px;
    padding-right: 15px;
  }

  .nav {
    padding: 0px 0px;
  }

  .header_area + section, .header_area + row, .header_area + div {
    margin-top: 117px;
  }

  .header_top .nav {
    padding: 0px;
  }

  .header_area .navbar .nav .nav-item .nav-link {
    line-height: 40px;
    margin-right: 0px;
    display: block;
    border-bottom: 1px solid #ededed33;
    border-radius: 0px;
  }

  .header_area .navbar .search {
    margin-left: 0px;
  }

  .header_area .navbar-collapse {
    max-height: 340px;
    overflow-y: scroll;
  }

  .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
    padding: 0px 15px;
  }

  .header_area .navbar .nav .nav-item {
    margin-right: 0px;
  }

  .header_area + section, .header_area + row, .header_area + div {
    margin-top: 71px;
  }

  .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
    line-height: 40px;
  }

  .header_area.white_menu.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
    line-height: 40px;
  }

  .header_area.white_menu .navbar .nav .nav-item .nav-link {
    color: #222;
  }

  /* End Main Menu Area css
  ============================================================================================ */
  /* Blog page Area css
  ============================================================================================ */
  .categories_post img {
    width: 100%;
  }

  .categories_post {
    max-width: 360px;
    margin: 0 auto;
  }

  .blog_categorie_area .col-lg-4 {
    margin-top: 30px;
  }

  .blog_area {
    padding-bottom: 80px;
  }

  .single-post-area .blog_right_sidebar {
    margin-top: 30px;
  }

  /* End Blog page Area css
  ============================================================================================ */
  /* Contact Page Area css
  ============================================================================================ */
  .contact_info {
    margin-bottom: 50px;
  }

  /* End Contact page Area css
  ============================================================================================ */
  .home_banner_area .donation_inner {
    margin-bottom: -30px;
  }

  .home_banner_area .dontation_item {
    max-width: 350px;
    margin: auto;
  }

  /* Footer Area css
  ============================================================================================ */
  .footer_area .col-sm-6 {
    margin-bottom: 30px;
  }

  .footer_area .footer_inner {
    margin-bottom: -30px;
  }

  .news_widget {
    padding-left: 0px;
  }

  /* End End Footer Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .home_left_img {
    display: none;
  }

  .header_area .navbar .primary_btn {
    display: none;
  }

  .home_banner_area .banner_inner {
    padding: 70px 0px 100px 0px;
  }

  .left_side_text {
    margin-bottom: 50px;
  }

  .price_item {
    max-width: 360px;
    margin: 0px auto 30px;
  }

  .price_inner {
    margin-bottom: -30px;
  }
}
@media (max-width: 767px) {
  .home_banner_area {
    min-height: 500px;
  }

  .home_banner_area .banner_inner {
    min-height: 500px;
  }

  .home_banner_area .banner_inner .banner_content {
    margin-top: 0px;
  }

  /* Blog Page Area css
  ============================================================================================ */
  .blog_banner .banner_inner .blog_b_text h2 {
    font-size: 40px;
    line-height: 50px;
  }

  .blog_info.text-right {
    text-align: left !important;
    margin-bottom: 10px;
  }

  /* End Blog Page Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .banner_content h3 {
    font-size: 30px;
  }

  .home_banner_area .banner_inner .banner_content p br {
    display: none;
  }

  .home_banner_area .banner_inner .banner_content h3 span {
    line-height: 45px;
    padding-bottom: 0px;
    padding-top: 0px;
  }

  /* Footer Area css
  ============================================================================================ */
  .footer-bottom {
    text-align: center;
  }

  .footer-bottom .footer-social {
    text-align: center;
    margin-top: 15px;
  }

  /* End End Footer Area css
  ============================================================================================ */
  .made_life_inner .nav.nav-tabs li {
    flex: 0 0 50%;
    max-width: 50%;
    margin-bottom: 15px;
  }

  .made_life_inner .nav.nav-tabs {
    margin-bottom: -15px;
  }

  .made_life_area.made_white .left_side_text {
    margin-bottom: 0px;
    margin-top: 30px;
  }
}
@media (max-width: 575px) {
  .header_area + section, .header_area + row, .header_area + div {
    margin-top: 71px;
  }

  /* Home Banner Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .banner_content h2 {
    font-size: 28px;
    line-height: 38px;
  }

  .home_banner_area {
    min-height: 450px;
  }

  .home_banner_area .banner_inner {
    min-height: 450px;
  }

  .blog_banner .banner_inner .blog_b_text {
    margin-top: 0px;
  }

  .home_banner_area .banner_inner .banner_content img {
    display: none;
  }

  .home_banner_area .banner_inner .banner_content h5 {
    margin-top: 0px;
  }

  /* End Home Banner Area css
  ============================================================================================ */
  .section_gap {
    padding-top: 70px;
    padding-bottom: 70px;
  }

  .main_title h2 {
    font-size: 25px;
  }

  /* Elements Area css
  ============================================================================================ */
  .sample-text-area {
    padding: 70px 0 70px 0;
  }

  .generic-blockquote {
    padding: 30px 15px 30px 30px;
  }

  /* End Elements Area css
  ============================================================================================ */
  /* Blog Page Area css
  ============================================================================================ */
  .blog_details h2 {
    font-size: 20px;
    line-height: 30px;
  }

  .blog_banner .banner_inner .blog_b_text h2 {
    font-size: 28px;
    line-height: 38px;
  }

  /* End Blog Page Area css
  ============================================================================================ */
  /* Footer Area css
  ============================================================================================ */
  .footer-area {
    padding: 70px 0px;
  }

  /* End End Footer Area css
  ============================================================================================ */
  .pad_top {
    padding-top: 70px;
  }

  .pad_btm {
    padding-bottom: 70px;
  }
}
@media (max-width: 480px) {
  /* Main Menu Area css
  ============================================================================================ */
  .header_area .navbar-collapse {
    max-height: 250px;
  }

  /* End Main Menu Area css
  ============================================================================================ */
  /* Home Banner Area css
  ============================================================================================ */
  .home_banner_area .banner_inner .banner_content {
    padding: 30px 15px;
    margin-top: 0px;
  }

  .home_banner_area .banner_inner .banner_content h3 {
    font-size: 24px;
  }

  /* End Home Banner Area css
  ============================================================================================ */
  .banner_area .banner_inner .banner_content h2 {
    font-size: 32px;
  }

  /* Blog Page Area css
  ============================================================================================ */
  .comments-area .thumb {
    margin-right: 10px;
  }

  /* End Blog Page Area css
  ============================================================================================ */
  .testi_item .media .d-flex {
    padding-right: 0px;
  }

  .testi_item .media .d-flex img {
    width: auto;
    margin-bottom: 15px;
  }

  .testi_item .media {
    display: block;
  }
}
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Footer Area css
============================================================================================ */
.footer_area {
  background: #000410;
}

.f_title {
  margin-bottom: 35px;
}
.f_title h3 {
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  font-family: \"Rajdhani\", sans-serif;
  margin-bottom: 0px;
}

.ab_widget p {
  font-size: 14px;
  line-height: 24px;
  font-family: \"Roboto\", sans-serif;
  color: #777777;
  margin-bottom: 30px;
}
.ab_widget p a {
  color: #3fcaff;
}
.ab_widget p + p {
  margin-bottom: 0px;
}

.news_widget {
  padding-left: 15px;
}
.news_widget p {
  font-size: 14px;
  line-height: 24px;
  font-family: \"Roboto\", sans-serif;
  color: #777777;
  margin-bottom: 15px;
}
.news_widget .input-group input {
  height: 40px;
  background: #fff;
  border-radius: 0px;
  width: 80%;
  border: none;
  padding: 0px 15px;
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  color: #cccccc;
  outline: none;
  box-shadow: none;
}
.news_widget .input-group input.placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group input:-moz-placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group input::-moz-placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group input::-webkit-input-placeholder {
  font-size: 14px;
  font-family: \"Roboto\", sans-serif;
  font-weight: normal;
  color: #cccccc;
}
.news_widget .input-group .sub-btn {
  border-radius: 0px;
  background: #3fcaff;
  outline: none !important;
  box-shadow: none !important;
  padding: 0px;
  width: 42px;
  cursor: pointer;
  color: #fff;
}

.social_widget p {
  font-size: 14px;
  line-height: 24px;
  font-family: \"Roboto\", sans-serif;
  color: #777777;
  margin-bottom: 10px;
}
.social_widget .list li {
  margin-right: 17px;
  display: inline-block;
}
.social_widget .list li a {
  color: #cccccc;
  font-size: 14px;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
.social_widget .list li:last-child {
  margin-right: 0px;
}
.social_widget .list li:hover a {
  color: #3fcaff;
}

.copy_right_text {
  text-align: center;
  margin-top: 60px;
}
.copy_right_text p a {
  color: #3fcaff;
}

/* End Footer Area css
============================================================================================ */
/*---------------------------------------------------- */

/*# sourceMappingURL=style.css.map */
", "scss/style.css", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\style.css");
    }
}
