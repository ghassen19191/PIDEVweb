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

/* scss/_responsive.scss */
class __TwigTemplate_60ed607b3dd93f8d3c7e125b2721628e5cc3edf04b3d74adfab09bc5e1ab391e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_responsive.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_responsive.scss"));

        // line 1
        echo "@media (max-width:1619px){
\t/* Main Menu Area css
\t============================================================================================ */
   .header_area .navbar .search {
\t\tmargin-left: 40px;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
}
@media (max-width:1300px){
}
@media (max-width:1199px){
\t/* Main Menu Area css
\t============================================================================================ */
\t.header_area .navbar .nav .nav-item {
\t\tmargin-right: 28px;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
\t/* Home Banner Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner {
\t\tpadding: 100px 0px;
\t}
\t/* End Home Banner Area css
\t============================================================================================ */
\t.header_area .navbar .primary_btn {
\t\tmargin-left: 40px;
\t}
\t.home_banner_area .banner_inner .banner_content h2 br {
\t\tdisplay: none;
\t\tfont-size: 36px;
\t}
\t.home_banner_area .banner_inner .banner_content h2 {
\t\tfont-size: 36px;
\t\tline-height: 45px;
\t}
}

@media (max-width:991px){
\t/* Main Menu Area css
\t============================================================================================ */
    .navbar-toggler {
        border: none;
        border-radius: 0px;
        padding: 0px;
        cursor: pointer;
        margin-top: 27px;
        margin-bottom: 23px;
    }
\t.header_area .navbar {
\t\tbackground: #000;
\t}
    .navbar-toggler[aria-expanded=\"false\"] span:nth-child(2) {
\t\topacity: 1;
\t}
\t.navbar-toggler[aria-expanded=\"true\"] span:nth-child(2) {
\t\topacity: 0;
\t}
\t.navbar-toggler[aria-expanded=\"true\"] span:first-child {
\t\ttransform: rotate(-45deg);
\t\tposition: relative;
\t\ttop: 7.5px;
\t}
\t.navbar-toggler[aria-expanded=\"true\"] span:last-child {
\t\ttransform: rotate(45deg);
\t\tbottom: 6px;
\t\tposition: relative;
\t}
\t.navbar-toggler span{
\t\tdisplay: block;
\t\twidth: 25px;
\t\theight: 3px;
\t\tbackground: #fff;
\t\tmargin: auto;
\t\tmargin-bottom: 4px;
\t\ttransition: all 400ms linear;
\t\tcursor: pointer;
\t}
    .navbar .container{
        padding-left: 15px;
        padding-right: 15px;
    }
    .nav{
        padding: 0px 0px;
    }
\t.header_area + section, .header_area + row, .header_area + div {
\t\tmargin-top: 117px;
\t}
    .header_top .nav{
        padding: 0px;
    }
    .header_area .navbar .nav .nav-item .nav-link{
        line-height: 40px;
        margin-right: 0px;
        display: block;
\t\tborder-bottom: 1px solid #ededed33;
\t\tborder-radius: 0px;
    }
    .header_area .navbar .search{
        margin-left: 0px;
    }
\t.header_area .navbar-collapse{
\t\tmax-height: 340px;
\t\toverflow-y: scroll;
\t}
\t.header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
\t\tpadding: 0px 15px;
\t}
\t.header_area .navbar .nav .nav-item {
\t\tmargin-right: 0px;
\t}
\t.header_area + section, .header_area + row, .header_area + div {
\t\tmargin-top: 71px;
\t}
\t.header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
\t\tline-height: 40px;
\t}
\t.header_area.white_menu.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
\t\tline-height: 40px;
\t}
\t.header_area.white_menu .navbar .nav .nav-item .nav-link {
\t\tcolor: #222;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
\t/* Blog page Area css
\t============================================================================================ */
\t.categories_post img{
        width: 100%;
    }
\t.categories_post {
\t\tmax-width: 360px;
\t\tmargin: 0 auto;
\t}
\t.blog_categorie_area .col-lg-4{
        margin-top: 30px;
    }
    .blog_area{
        padding-bottom: 80px;
    }
    .single-post-area .blog_right_sidebar{
        margin-top: 30px;
    }
\t/* End Blog page Area css
\t============================================================================================ */
\t
\t/* Contact Page Area css
\t============================================================================================ */
\t.contact_info{
\t\tmargin-bottom: 50px;
\t}
\t/* End Contact page Area css
\t============================================================================================ */
\t.home_banner_area .donation_inner{
\t\tmargin-bottom: -30px;
\t}
\t.home_banner_area .dontation_item{
\t\tmax-width: 350px;
\t\tmargin: auto;
\t}
\t/* Footer Area css
\t============================================================================================ */
\t.footer_area .col-sm-6{
\t\tmargin-bottom: 30px;
\t}
\t.footer_area .footer_inner{
\t\tmargin-bottom: -30px;
\t}
\t.news_widget {
\t\tpadding-left: 0px;
\t}
\t/* End End Footer Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner .home_left_img {
\t\tdisplay: none;
\t}
\t.header_area .navbar .primary_btn {
\t\tdisplay: none;
\t}
\t.home_banner_area .banner_inner {
\t\tpadding: 70px 0px 100px 0px;
\t}
\t.left_side_text {
\t\tmargin-bottom: 50px;
\t}
\t.price_item {
\t\tmax-width: 360px;
\t\tmargin: 0px auto 30px; 
\t}
\t.price_inner{
\t\tmargin-bottom: -30px;
\t}
}
@media (max-width:767px){
\t.home_banner_area {
\t\tmin-height: 500px;
\t}
\t.home_banner_area .banner_inner {
\t\tmin-height: 500px;
\t}
\t.home_banner_area .banner_inner .banner_content {
\t\tmargin-top: 0px;
\t}
\t/* Blog Page Area css
\t============================================================================================ */
    .blog_banner .banner_inner .blog_b_text h2 {
\t\tfont-size: 40px;
\t\tline-height: 50px;
\t}
\t.blog_info.text-right{
\t\ttext-align: left !important;
\t\tmargin-bottom: 10px;
\t}
\t/* End Blog Page Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner .banner_content h3 {
\t\tfont-size: 30px;
\t}
\t.home_banner_area .banner_inner .banner_content p br {
\t\tdisplay: none;
\t}
\t.home_banner_area .banner_inner .banner_content h3 span {
\t\tline-height: 45px;
\t\tpadding-bottom: 0px;
\t\tpadding-top: 0px;
\t}
\t/* Footer Area css
\t============================================================================================ */
\t.footer-bottom{
\t\ttext-align: center;
\t}
\t.footer-bottom .footer-social {
\t\ttext-align: center;
\t\tmargin-top: 15px;
\t}
\t/* End End Footer Area css
\t============================================================================================ */
\t.made_life_inner .nav.nav-tabs li {
\t\tflex: 0 0 50%;
\t\tmax-width: 50%;
\t\tmargin-bottom: 15px;
\t}
\t.made_life_inner .nav.nav-tabs {
\t\tmargin-bottom: -15px;
\t}
\t.made_life_area.made_white .left_side_text {
\t\tmargin-bottom: 0px;
\t\tmargin-top: 30px;
\t}
}
@media (max-width:600px){
\t
}
@media (max-width:575px){
\t.header_area + section, .header_area + row, .header_area + div {
\t\tmargin-top: 71px;
\t}
    /* Home Banner Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner .banner_content h2 {
\t\tfont-size: 28px;
\t\tline-height: 38px;
\t}
\t.home_banner_area {
\t\tmin-height: 450px;
\t}
\t.home_banner_area .banner_inner {
\t\tmin-height: 450px;
\t}
\t.blog_banner .banner_inner .blog_b_text {
\t\tmargin-top: 0px;
\t}
\t.home_banner_area .banner_inner .banner_content img{
\t\tdisplay: none;
\t}
\t.home_banner_area .banner_inner .banner_content h5 {
\t\tmargin-top: 0px;
\t}
\t/* End Home Banner Area css
\t============================================================================================ */
\t.section_gap {
\t\tpadding-top: 70px;
\t\tpadding-bottom: 70px;
\t}
\t/* Elements Area css
\t============================================================================================ */
\t.sample-text-area {
\t\tpadding: 70px 0 70px 0;
\t}
\t.generic-blockquote {
\t\tpadding: 30px 15px 30px 30px;
\t}
\t/* End Elements Area css
\t============================================================================================ */
\t
\t/* Blog Page Area css
\t============================================================================================ */
\t.blog_details h2 {
\t\tfont-size: 20px;
\t\tline-height: 30px;
\t}
\t.blog_banner .banner_inner .blog_b_text h2 {
\t\tfont-size: 28px;
\t\tline-height: 38px;
\t}
\t/* End Blog Page Area css
\t============================================================================================ */
\t/* Footer Area css
\t============================================================================================ */
\t.footer-area {
\t\tpadding: 70px 0px;
\t}
\t/* End End Footer Area css
\t============================================================================================ */
\t.pad_top {
\t\tpadding-top: 70px;
\t}
\t.pad_btm {
\t\tpadding-bottom: 70px;
\t}
}

@media (max-width:480px){
\t/* Main Menu Area css
\t============================================================================================ */
\t.header_area .navbar-collapse{
\t\tmax-height: 250px;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
\t
\t/* Home Banner Area css
\t============================================================================================ */
    .home_banner_area .banner_inner .banner_content {
\t\tpadding: 30px 0px;
\t\tmargin-top: 0px;
\t}
\t.home_banner_area .banner_inner .banner_content h3 {
\t\tfont-size: 24px;
\t}
\t/* End Home Banner Area css
\t============================================================================================ */
\t.banner_area .banner_inner .banner_content h2 {
\t\tfont-size: 32px;
\t}
\t/* Blog Page Area css
\t============================================================================================ */
\t.comments-area .thumb {
\t\tmargin-right: 10px;
\t}
\t/* End Blog Page Area css
\t============================================================================================ */
\t.testi_item .media .d-flex {
\t\tpadding-right: 0px;
\t}
\t.testi_item .media .d-flex img {
\t\twidth: auto;
\t\tmargin-bottom: 15px;
\t}
\t.testi_item .media{
\t\tdisplay: block;
\t}
}

// Home Page Responsive
// ========================================
// ========================================

@media only screen and (min-width : 992px) and (max-width : 1199px) {
\t.section_content {
\t\th3 {
\t\t\tfont-size: 32px;
\t\t\tline-height: 38px;
\t\t}
\t}
\t
\t.blog_area {
\t\t.blog_content {
\t\t\t.date a {
\t\t\t\tmargin-right: 22px !important;
\t\t\t}
\t\t}
\t} 

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 100px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 100px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 100px 0;
\t\t}
\t}
\t.section_content {
\t\tpadding: 68px 0px 68px 70px;
\t\th1 {
\t\t\tline-height: 40px;
\t\t\tpadding: 25px 0 25px;
\t\t\tfont-size: 30px;
\t\t}
\t}
\t
\t
}

@media only screen and (min-width : 768px) and (max-width : 991px) {
\t.section_gap {
\t\tpadding: 80px 0;
\t}
\t.section_gap_top {
\t\tpadding-top: 80px;
\t}
\t.main_title {
\t\tmargin-bottom: 50px;
\t}
\t.pricing_area {
\t\tpadding: 80px 0 50px;
\t}
\t.gallery_area {
\t\tpadding: 80px 0 50px;
\t}
\t.about_us_area {
\t\t.about_us_image_box {
\t\t\tdisplay: none;
\t\t}
\t\t.about_content {
\t\t\t&:before {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t}
\t.upcoming_games_area {
\t\tpadding: 80px 0 40px;
\t}
\t.chart_img {
\t\tdisplay: none;
\t}
\t.testi_item {
\t\tmargin-bottom: 0px;
\t}
\t.frequently_area {
\t\t.main_title h2 {
\t\t\tfont-size: 65px;
\t\t\tline-height: .6;
\t\t}
\t\t.frequent_inner:after {
\t\t\tdisplay: none;
\t\t}
\t\t.frequent_item {
\t\t\tp {
\t\t\t\tpadding: 16px 20px 0px 0;
\t\t\t\t&:after {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t.newsletter_area {
\t\t.newsletter_widget .btn.primary_btn {
\t\t\tpadding: 0px 12px;
\t\t\tline-height: 36px;
\t\t\ttop: 6px;
\t\t\tright: 5px;
\t\t\tfont-size: 10px !important;
\t\t}
\t}
\t
\t.newsletter_inner h1 {
\t\tfont-size: 28px;
\t}
\t.hidden-md {
\t\tdisplay: none;
\t}
\t.hidden-sm {
\t\tdisplay: none;
\t}

\t.footer_area {
\t\t.f_widget {
\t\t\tul {
\t\t\t\tmargin-bottom: 15px !important;
\t\t\t\tli {
\t\t\t\t\tpadding-bottom: 15px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.f_title {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t}
\t\t}
\t}

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 80px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 80px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 80px 0;
\t\t}
\t}
}

@media only screen and (min-width : 481px) and (max-width : 767px) {
\t.section_gap {
\t\tpadding: 70px 0;
\t}
\t.section_gap_top {
\t\tpadding-top: 70px;
\t}
\t.section_content {
\t\tpadding: 50px 10px 50px 50px;
\t\th3 {
\t\t\tline-height: 40px;
\t\t\tfont-size: 30px;
\t\t\tpadding: 25px 0 25px;
\t\t}
\t}
\t.main_title {
\t\tmargin-bottom: 40px;
\t\th2 {
\t\t\tfont-size: 60px;
\t\t}
\t}
\t
\t.about_us_area {
\t\t.about_us_image_box {
\t\t\tdisplay: none;
\t\t}
\t\t.about_content {
\t\t\t&:before {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t}
\t.upcoming_games_area {
\t\tpadding: 50px 0 20px;
\t}
\t.chart_img {
\t\tdisplay: none;
\t}
\t.recent_update_inner {
\t\t.nav.nav-tabs li a {
\t\t\theight: 45px;
\t\t\tline-height: 45px;
\t\t\tfont-size: 12px;
\t\t}
\t}
\t.gallery_area {
\t\tpadding: 70px 0 40px;
\t}
\t.testi_item {
\t\tmargin-bottom: 0px;
\t\tp {
\t\t\tfont-size: 14px;
\t\t}
\t\t.list {
\t\t\tmargin-bottom: 30px;
\t\t}
\t\th4 {
\t\t\tmargin-top: 10px;
\t\t}
\t}
\t.pricing_area {
\t\t&.section_gap {
\t\t\tpadding: 70px 0 40px;
\t\t}
\t}
\t.frequently_area {
\t\t.main_title {
\t\t\tmargin-bottom: 10px;
\t\t\th2 {
\t\t\t\tfont-size: 60px;
\t\t\t\tline-height: .6;
\t\t\t}
\t\t}
\t\t.frequent_inner:after {
\t\t\tdisplay: none;
\t\t}
\t\t.frequent_item {
\t\t\tp {
\t\t\t\tpadding: 16px 20px 0px 0;
\t\t\t\t&:after {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t.newsletter_area {
\t\tpadding: 60px 0;
\t\t.newsletter_inner {
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 20px;
\t\t\th1 {
\t\t\t\tfont-size: 28px;
\t\t\t}
\t\t}
\t}
\t
\t.blog_area {
\t\tpadding: 70px 0;
\t\t.blog_items {
\t\t\tmargin-bottom: 20px;
\t\t\t.blog_content {
\t\t\t\tp {
\t\t\t\t\tpadding: 15px 0 30px;
\t\t\t\t}
\t\t\t\t.date a {
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t}

\t.footer_area {
\t\t.f_widget {
\t\t\tul {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t\tli {
\t\t\t\t\tpadding-bottom: 10px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.f_title {
\t\t\t\tmargin-bottom: 25px !important;
\t\t\t}
\t\t}
\t\t.col-sm-6 {
\t\t\tmargin-bottom: 0px;
\t\t}
\t\t.single-footer-widget {
\t\t\ttext-align: center;
\t\t\t.social_widget {
\t\t\t\ttext-align: center !important;
\t\t\t\tmargin-top: 25px;
\t\t\t}
\t\t}
\t}

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 70px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 70px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 70px 0;
\t\t}
\t}
}

@media only screen and (min-width : 320px) and (max-width : 480px) {
\t.primary_btn {
\t\tline-height: 40px;
\t}
\t.section_gap {
\t\tpadding: 60px 0;
\t}
\t.section_gap_top {
\t\tpadding-top: 60px;
\t}
\t.section_content {
\t\tpadding: 35px 10px 35px 35px !important;
\t\th1 {
\t\t\tline-height: 30px;
\t\t\tfont-size: 20px;
\t\t\tpadding: 20px 0 16px;
\t\t}
\t\tp {
\t\t\tpadding-bottom: 30px;
\t\t}
\t}
\t.main_title {
\t\tmargin-bottom: 30px;
\t\th2 {
\t\t\tfont-size: 40px;
\t\t}
\t}
\t
\t.home_banner_area {
\t\t.banner_content {
\t\t\tmargin-left: 20px !important;
\t\t}
\t}
\t.gallery_area {
\t\tpadding: 60px 0 40px;
\t}
\t.about_us_area {
\t\t.about_us_image_box {
\t\t\tdisplay: none;
\t\t}
\t\t.about_content {
\t\t\t&:before {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t}
\t.upcoming_games_area {
\t\tpadding: 40px 0 20px;
\t}
\t.chart_img {
\t\tdisplay: none;
\t}
\t.recent_update_inner {
\t\t.nav.nav-tabs {
\t\t\t@include justify-content(center);
\t\t\tli {
\t\t\t\tflex: 0 0 50%;
\t\t\t\tmax-width: 50%;
\t\t\t\tpadding: 0px 12px;
\t\t\t\ta {
\t\t\t\t\theight: 40px;
\t\t\t\t\tline-height: 40px;
\t\t\t\t\tfont-size: 12px;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t
\t.testi_item {
\t\tmargin-bottom: 0px;
\t\tp {
\t\t\tfont-size: 12px;
\t\t}
\t\t.list {
\t\t\tmargin-bottom: 25px;
\t\t}
\t\th4 {
\t\t\tmargin-top: 10px;
\t\t}
\t}
\t.frequently_area {
\t\t.main_title {
\t\t\tmargin-bottom: 30px;
\t\t\th2 {
\t\t\t\tfont-size: 40px;
\t\t\t\tline-height: .6;
\t\t\t}
\t\t}
\t\t.frequent_inner:after {
\t\t\tdisplay: none;
\t\t}
\t\t.frequent_item {
\t\t\tp {
\t\t\t\tpadding: 16px 0px 25px;
\t\t\t\t&:after {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t\th3 {
\t\t\t\tpadding-top: 10px;
\t\t\t\tfont-size: 16px;
\t\t\t}
\t\t}
\t}
\t.newsletter_area {
\t\tpadding: 50px 0;
\t\t.newsletter_inner {
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 20px;
\t\t\th1 {
\t\t\t\tfont-size: 28px;
\t\t\t}
\t\t}
\t\t.newsletter_widget {
\t\t\t.btn.primary_btn {
\t\t\t\tpadding: 0px 12px;
\t\t\t\tline-height: 36px;
\t\t\t\ttop: 6px;
\t\t\t\tright: 5px;
\t\t\t\tfont-size: 10px !important;
\t\t\t}
\t\t}
\t}

\t.pricing_area {
\t\t&.section_gap {
\t\t\tpadding: 40px 0 15px;
\t\t}
\t}
\t
\t.blog_area {
\t\tpadding: 20px 0 40px;
\t\t.blog_items {
\t\t\tmargin-bottom: 20px;
\t\t\t.blog_content {
\t\t\t\tp {
\t\t\t\t\tpadding: 12px 0 20px;
\t\t\t\t}
\t\t\t\t.date a {
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t}

\t.footer_area {
\t\t.f_widget {
\t\t\tul {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t\tli {
\t\t\t\t\tpadding-bottom: 15px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.f_title {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t}
\t\t}
\t\t.col-sm-6 {
\t\t\tmargin-bottom: 0px;
\t\t}
\t\t.single-footer-widget {
\t\t\ttext-align: center;
\t\t\t.social_widget {
\t\t\t\ttext-align: center !important;
\t\t\t\tmargin-top: 20px;
\t\t\t}
\t\t\t.copy_right_text {
\t\t\t\tp {
\t\t\t\t\tmargin-left: 0;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 60px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 60px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 60px 0;
\t\t}
\t}
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_responsive.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@media (max-width:1619px){
\t/* Main Menu Area css
\t============================================================================================ */
   .header_area .navbar .search {
\t\tmargin-left: 40px;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
}
@media (max-width:1300px){
}
@media (max-width:1199px){
\t/* Main Menu Area css
\t============================================================================================ */
\t.header_area .navbar .nav .nav-item {
\t\tmargin-right: 28px;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
\t/* Home Banner Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner {
\t\tpadding: 100px 0px;
\t}
\t/* End Home Banner Area css
\t============================================================================================ */
\t.header_area .navbar .primary_btn {
\t\tmargin-left: 40px;
\t}
\t.home_banner_area .banner_inner .banner_content h2 br {
\t\tdisplay: none;
\t\tfont-size: 36px;
\t}
\t.home_banner_area .banner_inner .banner_content h2 {
\t\tfont-size: 36px;
\t\tline-height: 45px;
\t}
}

@media (max-width:991px){
\t/* Main Menu Area css
\t============================================================================================ */
    .navbar-toggler {
        border: none;
        border-radius: 0px;
        padding: 0px;
        cursor: pointer;
        margin-top: 27px;
        margin-bottom: 23px;
    }
\t.header_area .navbar {
\t\tbackground: #000;
\t}
    .navbar-toggler[aria-expanded=\"false\"] span:nth-child(2) {
\t\topacity: 1;
\t}
\t.navbar-toggler[aria-expanded=\"true\"] span:nth-child(2) {
\t\topacity: 0;
\t}
\t.navbar-toggler[aria-expanded=\"true\"] span:first-child {
\t\ttransform: rotate(-45deg);
\t\tposition: relative;
\t\ttop: 7.5px;
\t}
\t.navbar-toggler[aria-expanded=\"true\"] span:last-child {
\t\ttransform: rotate(45deg);
\t\tbottom: 6px;
\t\tposition: relative;
\t}
\t.navbar-toggler span{
\t\tdisplay: block;
\t\twidth: 25px;
\t\theight: 3px;
\t\tbackground: #fff;
\t\tmargin: auto;
\t\tmargin-bottom: 4px;
\t\ttransition: all 400ms linear;
\t\tcursor: pointer;
\t}
    .navbar .container{
        padding-left: 15px;
        padding-right: 15px;
    }
    .nav{
        padding: 0px 0px;
    }
\t.header_area + section, .header_area + row, .header_area + div {
\t\tmargin-top: 117px;
\t}
    .header_top .nav{
        padding: 0px;
    }
    .header_area .navbar .nav .nav-item .nav-link{
        line-height: 40px;
        margin-right: 0px;
        display: block;
\t\tborder-bottom: 1px solid #ededed33;
\t\tborder-radius: 0px;
    }
    .header_area .navbar .search{
        margin-left: 0px;
    }
\t.header_area .navbar-collapse{
\t\tmax-height: 340px;
\t\toverflow-y: scroll;
\t}
\t.header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
\t\tpadding: 0px 15px;
\t}
\t.header_area .navbar .nav .nav-item {
\t\tmargin-right: 0px;
\t}
\t.header_area + section, .header_area + row, .header_area + div {
\t\tmargin-top: 71px;
\t}
\t.header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
\t\tline-height: 40px;
\t}
\t.header_area.white_menu.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
\t\tline-height: 40px;
\t}
\t.header_area.white_menu .navbar .nav .nav-item .nav-link {
\t\tcolor: #222;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
\t/* Blog page Area css
\t============================================================================================ */
\t.categories_post img{
        width: 100%;
    }
\t.categories_post {
\t\tmax-width: 360px;
\t\tmargin: 0 auto;
\t}
\t.blog_categorie_area .col-lg-4{
        margin-top: 30px;
    }
    .blog_area{
        padding-bottom: 80px;
    }
    .single-post-area .blog_right_sidebar{
        margin-top: 30px;
    }
\t/* End Blog page Area css
\t============================================================================================ */
\t
\t/* Contact Page Area css
\t============================================================================================ */
\t.contact_info{
\t\tmargin-bottom: 50px;
\t}
\t/* End Contact page Area css
\t============================================================================================ */
\t.home_banner_area .donation_inner{
\t\tmargin-bottom: -30px;
\t}
\t.home_banner_area .dontation_item{
\t\tmax-width: 350px;
\t\tmargin: auto;
\t}
\t/* Footer Area css
\t============================================================================================ */
\t.footer_area .col-sm-6{
\t\tmargin-bottom: 30px;
\t}
\t.footer_area .footer_inner{
\t\tmargin-bottom: -30px;
\t}
\t.news_widget {
\t\tpadding-left: 0px;
\t}
\t/* End End Footer Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner .home_left_img {
\t\tdisplay: none;
\t}
\t.header_area .navbar .primary_btn {
\t\tdisplay: none;
\t}
\t.home_banner_area .banner_inner {
\t\tpadding: 70px 0px 100px 0px;
\t}
\t.left_side_text {
\t\tmargin-bottom: 50px;
\t}
\t.price_item {
\t\tmax-width: 360px;
\t\tmargin: 0px auto 30px; 
\t}
\t.price_inner{
\t\tmargin-bottom: -30px;
\t}
}
@media (max-width:767px){
\t.home_banner_area {
\t\tmin-height: 500px;
\t}
\t.home_banner_area .banner_inner {
\t\tmin-height: 500px;
\t}
\t.home_banner_area .banner_inner .banner_content {
\t\tmargin-top: 0px;
\t}
\t/* Blog Page Area css
\t============================================================================================ */
    .blog_banner .banner_inner .blog_b_text h2 {
\t\tfont-size: 40px;
\t\tline-height: 50px;
\t}
\t.blog_info.text-right{
\t\ttext-align: left !important;
\t\tmargin-bottom: 10px;
\t}
\t/* End Blog Page Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner .banner_content h3 {
\t\tfont-size: 30px;
\t}
\t.home_banner_area .banner_inner .banner_content p br {
\t\tdisplay: none;
\t}
\t.home_banner_area .banner_inner .banner_content h3 span {
\t\tline-height: 45px;
\t\tpadding-bottom: 0px;
\t\tpadding-top: 0px;
\t}
\t/* Footer Area css
\t============================================================================================ */
\t.footer-bottom{
\t\ttext-align: center;
\t}
\t.footer-bottom .footer-social {
\t\ttext-align: center;
\t\tmargin-top: 15px;
\t}
\t/* End End Footer Area css
\t============================================================================================ */
\t.made_life_inner .nav.nav-tabs li {
\t\tflex: 0 0 50%;
\t\tmax-width: 50%;
\t\tmargin-bottom: 15px;
\t}
\t.made_life_inner .nav.nav-tabs {
\t\tmargin-bottom: -15px;
\t}
\t.made_life_area.made_white .left_side_text {
\t\tmargin-bottom: 0px;
\t\tmargin-top: 30px;
\t}
}
@media (max-width:600px){
\t
}
@media (max-width:575px){
\t.header_area + section, .header_area + row, .header_area + div {
\t\tmargin-top: 71px;
\t}
    /* Home Banner Area css
\t============================================================================================ */
\t.home_banner_area .banner_inner .banner_content h2 {
\t\tfont-size: 28px;
\t\tline-height: 38px;
\t}
\t.home_banner_area {
\t\tmin-height: 450px;
\t}
\t.home_banner_area .banner_inner {
\t\tmin-height: 450px;
\t}
\t.blog_banner .banner_inner .blog_b_text {
\t\tmargin-top: 0px;
\t}
\t.home_banner_area .banner_inner .banner_content img{
\t\tdisplay: none;
\t}
\t.home_banner_area .banner_inner .banner_content h5 {
\t\tmargin-top: 0px;
\t}
\t/* End Home Banner Area css
\t============================================================================================ */
\t.section_gap {
\t\tpadding-top: 70px;
\t\tpadding-bottom: 70px;
\t}
\t/* Elements Area css
\t============================================================================================ */
\t.sample-text-area {
\t\tpadding: 70px 0 70px 0;
\t}
\t.generic-blockquote {
\t\tpadding: 30px 15px 30px 30px;
\t}
\t/* End Elements Area css
\t============================================================================================ */
\t
\t/* Blog Page Area css
\t============================================================================================ */
\t.blog_details h2 {
\t\tfont-size: 20px;
\t\tline-height: 30px;
\t}
\t.blog_banner .banner_inner .blog_b_text h2 {
\t\tfont-size: 28px;
\t\tline-height: 38px;
\t}
\t/* End Blog Page Area css
\t============================================================================================ */
\t/* Footer Area css
\t============================================================================================ */
\t.footer-area {
\t\tpadding: 70px 0px;
\t}
\t/* End End Footer Area css
\t============================================================================================ */
\t.pad_top {
\t\tpadding-top: 70px;
\t}
\t.pad_btm {
\t\tpadding-bottom: 70px;
\t}
}

@media (max-width:480px){
\t/* Main Menu Area css
\t============================================================================================ */
\t.header_area .navbar-collapse{
\t\tmax-height: 250px;
\t}
\t/* End Main Menu Area css
\t============================================================================================ */
\t
\t/* Home Banner Area css
\t============================================================================================ */
    .home_banner_area .banner_inner .banner_content {
\t\tpadding: 30px 0px;
\t\tmargin-top: 0px;
\t}
\t.home_banner_area .banner_inner .banner_content h3 {
\t\tfont-size: 24px;
\t}
\t/* End Home Banner Area css
\t============================================================================================ */
\t.banner_area .banner_inner .banner_content h2 {
\t\tfont-size: 32px;
\t}
\t/* Blog Page Area css
\t============================================================================================ */
\t.comments-area .thumb {
\t\tmargin-right: 10px;
\t}
\t/* End Blog Page Area css
\t============================================================================================ */
\t.testi_item .media .d-flex {
\t\tpadding-right: 0px;
\t}
\t.testi_item .media .d-flex img {
\t\twidth: auto;
\t\tmargin-bottom: 15px;
\t}
\t.testi_item .media{
\t\tdisplay: block;
\t}
}

// Home Page Responsive
// ========================================
// ========================================

@media only screen and (min-width : 992px) and (max-width : 1199px) {
\t.section_content {
\t\th3 {
\t\t\tfont-size: 32px;
\t\t\tline-height: 38px;
\t\t}
\t}
\t
\t.blog_area {
\t\t.blog_content {
\t\t\t.date a {
\t\t\t\tmargin-right: 22px !important;
\t\t\t}
\t\t}
\t} 

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 100px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 100px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 100px 0;
\t\t}
\t}
\t.section_content {
\t\tpadding: 68px 0px 68px 70px;
\t\th1 {
\t\t\tline-height: 40px;
\t\t\tpadding: 25px 0 25px;
\t\t\tfont-size: 30px;
\t\t}
\t}
\t
\t
}

@media only screen and (min-width : 768px) and (max-width : 991px) {
\t.section_gap {
\t\tpadding: 80px 0;
\t}
\t.section_gap_top {
\t\tpadding-top: 80px;
\t}
\t.main_title {
\t\tmargin-bottom: 50px;
\t}
\t.pricing_area {
\t\tpadding: 80px 0 50px;
\t}
\t.gallery_area {
\t\tpadding: 80px 0 50px;
\t}
\t.about_us_area {
\t\t.about_us_image_box {
\t\t\tdisplay: none;
\t\t}
\t\t.about_content {
\t\t\t&:before {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t}
\t.upcoming_games_area {
\t\tpadding: 80px 0 40px;
\t}
\t.chart_img {
\t\tdisplay: none;
\t}
\t.testi_item {
\t\tmargin-bottom: 0px;
\t}
\t.frequently_area {
\t\t.main_title h2 {
\t\t\tfont-size: 65px;
\t\t\tline-height: .6;
\t\t}
\t\t.frequent_inner:after {
\t\t\tdisplay: none;
\t\t}
\t\t.frequent_item {
\t\t\tp {
\t\t\t\tpadding: 16px 20px 0px 0;
\t\t\t\t&:after {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t.newsletter_area {
\t\t.newsletter_widget .btn.primary_btn {
\t\t\tpadding: 0px 12px;
\t\t\tline-height: 36px;
\t\t\ttop: 6px;
\t\t\tright: 5px;
\t\t\tfont-size: 10px !important;
\t\t}
\t}
\t
\t.newsletter_inner h1 {
\t\tfont-size: 28px;
\t}
\t.hidden-md {
\t\tdisplay: none;
\t}
\t.hidden-sm {
\t\tdisplay: none;
\t}

\t.footer_area {
\t\t.f_widget {
\t\t\tul {
\t\t\t\tmargin-bottom: 15px !important;
\t\t\t\tli {
\t\t\t\t\tpadding-bottom: 15px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.f_title {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t}
\t\t}
\t}

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 80px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 80px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 80px 0;
\t\t}
\t}
}

@media only screen and (min-width : 481px) and (max-width : 767px) {
\t.section_gap {
\t\tpadding: 70px 0;
\t}
\t.section_gap_top {
\t\tpadding-top: 70px;
\t}
\t.section_content {
\t\tpadding: 50px 10px 50px 50px;
\t\th3 {
\t\t\tline-height: 40px;
\t\t\tfont-size: 30px;
\t\t\tpadding: 25px 0 25px;
\t\t}
\t}
\t.main_title {
\t\tmargin-bottom: 40px;
\t\th2 {
\t\t\tfont-size: 60px;
\t\t}
\t}
\t
\t.about_us_area {
\t\t.about_us_image_box {
\t\t\tdisplay: none;
\t\t}
\t\t.about_content {
\t\t\t&:before {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t}
\t.upcoming_games_area {
\t\tpadding: 50px 0 20px;
\t}
\t.chart_img {
\t\tdisplay: none;
\t}
\t.recent_update_inner {
\t\t.nav.nav-tabs li a {
\t\t\theight: 45px;
\t\t\tline-height: 45px;
\t\t\tfont-size: 12px;
\t\t}
\t}
\t.gallery_area {
\t\tpadding: 70px 0 40px;
\t}
\t.testi_item {
\t\tmargin-bottom: 0px;
\t\tp {
\t\t\tfont-size: 14px;
\t\t}
\t\t.list {
\t\t\tmargin-bottom: 30px;
\t\t}
\t\th4 {
\t\t\tmargin-top: 10px;
\t\t}
\t}
\t.pricing_area {
\t\t&.section_gap {
\t\t\tpadding: 70px 0 40px;
\t\t}
\t}
\t.frequently_area {
\t\t.main_title {
\t\t\tmargin-bottom: 10px;
\t\t\th2 {
\t\t\t\tfont-size: 60px;
\t\t\t\tline-height: .6;
\t\t\t}
\t\t}
\t\t.frequent_inner:after {
\t\t\tdisplay: none;
\t\t}
\t\t.frequent_item {
\t\t\tp {
\t\t\t\tpadding: 16px 20px 0px 0;
\t\t\t\t&:after {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t.newsletter_area {
\t\tpadding: 60px 0;
\t\t.newsletter_inner {
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 20px;
\t\t\th1 {
\t\t\t\tfont-size: 28px;
\t\t\t}
\t\t}
\t}
\t
\t.blog_area {
\t\tpadding: 70px 0;
\t\t.blog_items {
\t\t\tmargin-bottom: 20px;
\t\t\t.blog_content {
\t\t\t\tp {
\t\t\t\t\tpadding: 15px 0 30px;
\t\t\t\t}
\t\t\t\t.date a {
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t}

\t.footer_area {
\t\t.f_widget {
\t\t\tul {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t\tli {
\t\t\t\t\tpadding-bottom: 10px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.f_title {
\t\t\t\tmargin-bottom: 25px !important;
\t\t\t}
\t\t}
\t\t.col-sm-6 {
\t\t\tmargin-bottom: 0px;
\t\t}
\t\t.single-footer-widget {
\t\t\ttext-align: center;
\t\t\t.social_widget {
\t\t\t\ttext-align: center !important;
\t\t\t\tmargin-top: 25px;
\t\t\t}
\t\t}
\t}

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 70px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 70px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 70px 0;
\t\t}
\t}
}

@media only screen and (min-width : 320px) and (max-width : 480px) {
\t.primary_btn {
\t\tline-height: 40px;
\t}
\t.section_gap {
\t\tpadding: 60px 0;
\t}
\t.section_gap_top {
\t\tpadding-top: 60px;
\t}
\t.section_content {
\t\tpadding: 35px 10px 35px 35px !important;
\t\th1 {
\t\t\tline-height: 30px;
\t\t\tfont-size: 20px;
\t\t\tpadding: 20px 0 16px;
\t\t}
\t\tp {
\t\t\tpadding-bottom: 30px;
\t\t}
\t}
\t.main_title {
\t\tmargin-bottom: 30px;
\t\th2 {
\t\t\tfont-size: 40px;
\t\t}
\t}
\t
\t.home_banner_area {
\t\t.banner_content {
\t\t\tmargin-left: 20px !important;
\t\t}
\t}
\t.gallery_area {
\t\tpadding: 60px 0 40px;
\t}
\t.about_us_area {
\t\t.about_us_image_box {
\t\t\tdisplay: none;
\t\t}
\t\t.about_content {
\t\t\t&:before {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t}
\t.upcoming_games_area {
\t\tpadding: 40px 0 20px;
\t}
\t.chart_img {
\t\tdisplay: none;
\t}
\t.recent_update_inner {
\t\t.nav.nav-tabs {
\t\t\t@include justify-content(center);
\t\t\tli {
\t\t\t\tflex: 0 0 50%;
\t\t\t\tmax-width: 50%;
\t\t\t\tpadding: 0px 12px;
\t\t\t\ta {
\t\t\t\t\theight: 40px;
\t\t\t\t\tline-height: 40px;
\t\t\t\t\tfont-size: 12px;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\t
\t.testi_item {
\t\tmargin-bottom: 0px;
\t\tp {
\t\t\tfont-size: 12px;
\t\t}
\t\t.list {
\t\t\tmargin-bottom: 25px;
\t\t}
\t\th4 {
\t\t\tmargin-top: 10px;
\t\t}
\t}
\t.frequently_area {
\t\t.main_title {
\t\t\tmargin-bottom: 30px;
\t\t\th2 {
\t\t\t\tfont-size: 40px;
\t\t\t\tline-height: .6;
\t\t\t}
\t\t}
\t\t.frequent_inner:after {
\t\t\tdisplay: none;
\t\t}
\t\t.frequent_item {
\t\t\tp {
\t\t\t\tpadding: 16px 0px 25px;
\t\t\t\t&:after {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t\th3 {
\t\t\t\tpadding-top: 10px;
\t\t\t\tfont-size: 16px;
\t\t\t}
\t\t}
\t}
\t.newsletter_area {
\t\tpadding: 50px 0;
\t\t.newsletter_inner {
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 20px;
\t\t\th1 {
\t\t\t\tfont-size: 28px;
\t\t\t}
\t\t}
\t\t.newsletter_widget {
\t\t\t.btn.primary_btn {
\t\t\t\tpadding: 0px 12px;
\t\t\t\tline-height: 36px;
\t\t\t\ttop: 6px;
\t\t\t\tright: 5px;
\t\t\t\tfont-size: 10px !important;
\t\t\t}
\t\t}
\t}

\t.pricing_area {
\t\t&.section_gap {
\t\t\tpadding: 40px 0 15px;
\t\t}
\t}
\t
\t.blog_area {
\t\tpadding: 20px 0 40px;
\t\t.blog_items {
\t\t\tmargin-bottom: 20px;
\t\t\t.blog_content {
\t\t\t\tp {
\t\t\t\t\tpadding: 12px 0 20px;
\t\t\t\t}
\t\t\t\t.date a {
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t}

\t.footer_area {
\t\t.f_widget {
\t\t\tul {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t\tli {
\t\t\t\t\tpadding-bottom: 15px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.f_title {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t}
\t\t}
\t\t.col-sm-6 {
\t\t\tmargin-bottom: 0px;
\t\t}
\t\t.single-footer-widget {
\t\t\ttext-align: center;
\t\t\t.social_widget {
\t\t\t\ttext-align: center !important;
\t\t\t\tmargin-top: 20px;
\t\t\t}
\t\t\t.copy_right_text {
\t\t\t\tp {
\t\t\t\t\tmargin-left: 0;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t.about_page, .upcoming_games {
\t\t.about_us_area {
\t\t\tpadding: 60px 0;
\t\t}
\t\t.section_gap {
\t\t\tpadding: 60px 0;
\t\t}
\t\t.frequently_area {
\t\t\tpadding: 60px 0;
\t\t}
\t}
}", "scss/_responsive.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_responsive.scss");
    }
}
