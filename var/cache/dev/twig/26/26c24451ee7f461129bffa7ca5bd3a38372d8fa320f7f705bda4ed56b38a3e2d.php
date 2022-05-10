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

/* vendors/lightbox/simpleLightbox.css */
class __TwigTemplate_41aab3560fc9b8a4697e6f55260dda62e2a152465b4c96c54fbe01964faacc2e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/lightbox/simpleLightbox.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/lightbox/simpleLightbox.css"));

        // line 1
        echo ".slbOverlay, .slbWrapOuter, .slbWrap {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.slbOverlay {
  overflow: hidden;
  z-index: 2000;
  background-color: #000;
  opacity: 0.7;
  filter: alpha(opacity=70);
  -webkit-animation: slbOverlay 0.5s;
  -moz-animation: slbOverlay 0.5s;
  animation: slbOverlay 0.5s;
}

.slbWrapOuter {
  overflow-x: hidden;
  overflow-y: auto;
  z-index: 2010;
}

.slbWrap {
  position: absolute;
  text-align: center;
}

.slbWrap:before {
  content: \"\";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.slbContentOuter {
  display: inline-block;
  vertical-align: middle;
  margin: 0px auto;
  padding: 0 1em;
  box-sizing: border-box;
  z-index: 2020;
  text-align: left;
  max-width: 100%;
}

.slbContentEl .slbContentOuter {
  padding: 5em 1em;
}

.slbContent {
  position: relative;
}

.slbContentEl .slbContent {
  -webkit-animation: slbEnter 0.3s;
  -moz-animation: slbEnter 0.3s;
  animation: slbEnter 0.3s;
  background-color: #fff;
  box-shadow: 0 0.2em 1em rgba(0, 0, 0, 0.4);
}

.slbImageWrap {
  -webkit-animation: slbEnter 0.3s;
  -moz-animation: slbEnter 0.3s;
  animation: slbEnter 0.3s;
  position: relative;
}

.slbImageWrap:after {
  content: \"\";
  position: absolute;
  left: 0;
  right: 0;
  top: 5em;
  bottom: 5em;
  display: block;
  z-index: -1;
  box-shadow: 0 0.2em 1em rgba(0, 0, 0, 0.6);
  background-color: #FFF;
}

.slbImage {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 5em 0;
  margin: 0 auto;
}

.slbCaption {
  display: inline-block;
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  word-wrap: normal;
  font-size: 1.4em;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 0.71429em 0;
  color: #fff;
  color: rgba(255, 255, 255, 0.7);
  text-align: center;
}

.slbCloseBtn, .slbArrow {
  margin: 0;
  padding: 0;
  border: 0;
  cursor: pointer;
  background: none;
}

.slbCloseBtn::-moz-focus-inner, .slbArrow::-moz-focus-inner {
  padding: 0;
  border: 0;
}

.slbCloseBtn:hover, .slbArrow:hover {
  opacity: 0.5;
}

.slbCloseBtn:active, .slbArrow:active {
  opacity: 0.8;
}

.slbCloseBtn {
  -webkit-animation: slbEnter 0.3s;
  -moz-animation: slbEnter 0.3s;
  animation: slbEnter 0.3s;
  font-size: 3em;
  width: 1.66667em;
  height: 1.66667em;
  line-height: 1.66667em;
  position: absolute;
  right: -0.33333em;
  top: 0;
  color: #fff;
  color: rgba(255, 255, 255, 0.7);
  text-align: center;
    outline: none;
    box-shadow: none;
}

.slbLoading .slbCloseBtn {
  display: none;
}

.slbLoadingText {
  font-size: 1.4em;
  color: #fff;
  color: rgba(255, 255, 255, 0.9);
}

.slbArrows {
  position: fixed;
  top: 50%;
  left: 0;
  right: 0;
}

.slbLoading .slbArrows {
  display: none;
}

.slbArrow {
  position: absolute;
  top: 50%;
  margin-top: -5em;
  width: 5em;
  height: 10em;
  opacity: 0.7;
  text-indent: -999em;
  overflow: hidden;
    outline: none;
    box-shadow: none;
}

.slbArrow:before {
  content: \"\";
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -0.8em 0 0 -0.8em;
  border: 0.8em solid transparent;
}

.slbArrow.next {
  right: 0;
}

.slbArrow.next:before {
  border-left-color: #fff;
}

.slbArrow.prev {
  left: 0;
}

.slbArrow.prev:before {
  border-right-color: #fff;
}

.slbIframeCont {
  width: 80em;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%;
  margin: 5em 0;
}

.slbIframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0 0.2em 1em rgba(0, 0, 0, 0.6);
  background: #000;
}

@-webkit-keyframes slbOverlay {
  from {
    opacity: 0;
  }
  to {
    opacity: 0.7;
  }
}

@-moz-keyframes slbOverlay {
  from {
    opacity: 0;
  }
  to {
    opacity: 0.7;
  }
}

@keyframes slbOverlay {
  from {
    opacity: 0;
  }
  to {
    opacity: 0.7;
  }
}

@-webkit-keyframes slbEnter {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -1em, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
  }
}

@-moz-keyframes slbEnter {
  from {
    opacity: 0;
    -moz-transform: translate3d(0, -1em, 0);
  }
  to {
    opacity: 1;
    -moz-transform: translate3d(0, 0, 0);
  }
}

@keyframes slbEnter {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -1em, 0);
    -moz-transform: translate3d(0, -1em, 0);
    -ms-transform: translate3d(0, -1em, 0);
    -o-transform: translate3d(0, -1em, 0);
    transform: translate3d(0, -1em, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/lightbox/simpleLightbox.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".slbOverlay, .slbWrapOuter, .slbWrap {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.slbOverlay {
  overflow: hidden;
  z-index: 2000;
  background-color: #000;
  opacity: 0.7;
  filter: alpha(opacity=70);
  -webkit-animation: slbOverlay 0.5s;
  -moz-animation: slbOverlay 0.5s;
  animation: slbOverlay 0.5s;
}

.slbWrapOuter {
  overflow-x: hidden;
  overflow-y: auto;
  z-index: 2010;
}

.slbWrap {
  position: absolute;
  text-align: center;
}

.slbWrap:before {
  content: \"\";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.slbContentOuter {
  display: inline-block;
  vertical-align: middle;
  margin: 0px auto;
  padding: 0 1em;
  box-sizing: border-box;
  z-index: 2020;
  text-align: left;
  max-width: 100%;
}

.slbContentEl .slbContentOuter {
  padding: 5em 1em;
}

.slbContent {
  position: relative;
}

.slbContentEl .slbContent {
  -webkit-animation: slbEnter 0.3s;
  -moz-animation: slbEnter 0.3s;
  animation: slbEnter 0.3s;
  background-color: #fff;
  box-shadow: 0 0.2em 1em rgba(0, 0, 0, 0.4);
}

.slbImageWrap {
  -webkit-animation: slbEnter 0.3s;
  -moz-animation: slbEnter 0.3s;
  animation: slbEnter 0.3s;
  position: relative;
}

.slbImageWrap:after {
  content: \"\";
  position: absolute;
  left: 0;
  right: 0;
  top: 5em;
  bottom: 5em;
  display: block;
  z-index: -1;
  box-shadow: 0 0.2em 1em rgba(0, 0, 0, 0.6);
  background-color: #FFF;
}

.slbImage {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 5em 0;
  margin: 0 auto;
}

.slbCaption {
  display: inline-block;
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  word-wrap: normal;
  font-size: 1.4em;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 0.71429em 0;
  color: #fff;
  color: rgba(255, 255, 255, 0.7);
  text-align: center;
}

.slbCloseBtn, .slbArrow {
  margin: 0;
  padding: 0;
  border: 0;
  cursor: pointer;
  background: none;
}

.slbCloseBtn::-moz-focus-inner, .slbArrow::-moz-focus-inner {
  padding: 0;
  border: 0;
}

.slbCloseBtn:hover, .slbArrow:hover {
  opacity: 0.5;
}

.slbCloseBtn:active, .slbArrow:active {
  opacity: 0.8;
}

.slbCloseBtn {
  -webkit-animation: slbEnter 0.3s;
  -moz-animation: slbEnter 0.3s;
  animation: slbEnter 0.3s;
  font-size: 3em;
  width: 1.66667em;
  height: 1.66667em;
  line-height: 1.66667em;
  position: absolute;
  right: -0.33333em;
  top: 0;
  color: #fff;
  color: rgba(255, 255, 255, 0.7);
  text-align: center;
    outline: none;
    box-shadow: none;
}

.slbLoading .slbCloseBtn {
  display: none;
}

.slbLoadingText {
  font-size: 1.4em;
  color: #fff;
  color: rgba(255, 255, 255, 0.9);
}

.slbArrows {
  position: fixed;
  top: 50%;
  left: 0;
  right: 0;
}

.slbLoading .slbArrows {
  display: none;
}

.slbArrow {
  position: absolute;
  top: 50%;
  margin-top: -5em;
  width: 5em;
  height: 10em;
  opacity: 0.7;
  text-indent: -999em;
  overflow: hidden;
    outline: none;
    box-shadow: none;
}

.slbArrow:before {
  content: \"\";
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -0.8em 0 0 -0.8em;
  border: 0.8em solid transparent;
}

.slbArrow.next {
  right: 0;
}

.slbArrow.next:before {
  border-left-color: #fff;
}

.slbArrow.prev {
  left: 0;
}

.slbArrow.prev:before {
  border-right-color: #fff;
}

.slbIframeCont {
  width: 80em;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%;
  margin: 5em 0;
}

.slbIframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0 0.2em 1em rgba(0, 0, 0, 0.6);
  background: #000;
}

@-webkit-keyframes slbOverlay {
  from {
    opacity: 0;
  }
  to {
    opacity: 0.7;
  }
}

@-moz-keyframes slbOverlay {
  from {
    opacity: 0;
  }
  to {
    opacity: 0.7;
  }
}

@keyframes slbOverlay {
  from {
    opacity: 0;
  }
  to {
    opacity: 0.7;
  }
}

@-webkit-keyframes slbEnter {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -1em, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
  }
}

@-moz-keyframes slbEnter {
  from {
    opacity: 0;
    -moz-transform: translate3d(0, -1em, 0);
  }
  to {
    opacity: 1;
    -moz-transform: translate3d(0, 0, 0);
  }
}

@keyframes slbEnter {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -1em, 0);
    -moz-transform: translate3d(0, -1em, 0);
    -ms-transform: translate3d(0, -1em, 0);
    -o-transform: translate3d(0, -1em, 0);
    transform: translate3d(0, -1em, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
", "vendors/lightbox/simpleLightbox.css", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\lightbox\\simpleLightbox.css");
    }
}
