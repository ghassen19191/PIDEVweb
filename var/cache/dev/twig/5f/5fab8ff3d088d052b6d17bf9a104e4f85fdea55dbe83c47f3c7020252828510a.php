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

/* vendors/nice-select/js/jquery.nice-select.min.js */
class __TwigTemplate_5d6e3c264844b248db3e3f349f4a060159d4d64ff5ca567cfc50784637de182e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/nice-select/js/jquery.nice-select.min.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/nice-select/js/jquery.nice-select.min.js"));

        // line 1
        echo "/*  jQuery Nice Select - v1.0
    https://github.com/hernansartorio/jquery-nice-select
    Made by Hernán Sartorio  */
!function(e){e.fn.niceSelect=function(t){function s(t){t.after(e(\"<div></div>\").addClass(\"nice-select\").addClass(t.attr(\"class\")||\"\").addClass(t.attr(\"disabled\")?\"disabled\":\"\").attr(\"tabindex\",t.attr(\"disabled\")?null:\"0\").html('<span class=\"current\"></span><ul class=\"list\"></ul>'));var s=t.next(),n=t.find(\"option\"),i=t.find(\"option:selected\");s.find(\".current\").html(i.data(\"display\")||i.text()),n.each(function(t){var n=e(this),i=n.data(\"display\");s.find(\"ul\").append(e(\"<li></li>\").attr(\"data-value\",n.val()).attr(\"data-display\",i||null).addClass(\"option\"+(n.is(\":selected\")?\" selected\":\"\")+(n.is(\":disabled\")?\" disabled\":\"\")).html(n.text()))})}if(\"string\"==typeof t)return\"update\"==t?this.each(function(){var t=e(this),n=e(this).next(\".nice-select\"),i=n.hasClass(\"open\");n.length&&(n.remove(),s(t),i&&t.next().trigger(\"click\"))}):\"destroy\"==t?(this.each(function(){var t=e(this),s=e(this).next(\".nice-select\");s.length&&(s.remove(),t.css(\"display\",\"\"))}),0==e(\".nice-select\").length&&e(document).off(\".nice_select\")):console.log('Method \"'+t+'\" does not exist.'),this;this.hide(),this.each(function(){var t=e(this);t.next().hasClass(\"nice-select\")||s(t)}),e(document).off(\".nice_select\"),e(document).on(\"click.nice_select\",\".nice-select\",function(t){var s=e(this);e(\".nice-select\").not(s).removeClass(\"open\"),s.toggleClass(\"open\"),s.hasClass(\"open\")?(s.find(\".option\"),s.find(\".focus\").removeClass(\"focus\"),s.find(\".selected\").addClass(\"focus\")):s.focus()}),e(document).on(\"click.nice_select\",function(t){0===e(t.target).closest(\".nice-select\").length&&e(\".nice-select\").removeClass(\"open\").find(\".option\")}),e(document).on(\"click.nice_select\",\".nice-select .option:not(.disabled)\",function(t){var s=e(this),n=s.closest(\".nice-select\");n.find(\".selected\").removeClass(\"selected\"),s.addClass(\"selected\");var i=s.data(\"display\")||s.text();n.find(\".current\").text(i),n.prev(\"select\").val(s.data(\"value\")).trigger(\"change\")}),e(document).on(\"keydown.nice_select\",\".nice-select\",function(t){var s=e(this),n=e(s.find(\".focus\")||s.find(\".list .option.selected\"));if(32==t.keyCode||13==t.keyCode)return s.hasClass(\"open\")?n.trigger(\"click\"):s.trigger(\"click\"),!1;if(40==t.keyCode){if(s.hasClass(\"open\")){var i=n.nextAll(\".option:not(.disabled)\").first();i.length>0&&(s.find(\".focus\").removeClass(\"focus\"),i.addClass(\"focus\"))}else s.trigger(\"click\");return!1}if(38==t.keyCode){if(s.hasClass(\"open\")){var l=n.prevAll(\".option:not(.disabled)\").first();l.length>0&&(s.find(\".focus\").removeClass(\"focus\"),l.addClass(\"focus\"))}else s.trigger(\"click\");return!1}if(27==t.keyCode)s.hasClass(\"open\")&&s.trigger(\"click\");else if(9==t.keyCode&&s.hasClass(\"open\"))return!1});var n=document.createElement(\"a\").style;return n.cssText=\"pointer-events:auto\",\"auto\"!==n.pointerEvents&&e(\"html\").addClass(\"no-csspointerevents\"),this}}(jQuery);";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/nice-select/js/jquery.nice-select.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*  jQuery Nice Select - v1.0
    https://github.com/hernansartorio/jquery-nice-select
    Made by Hernán Sartorio  */
!function(e){e.fn.niceSelect=function(t){function s(t){t.after(e(\"<div></div>\").addClass(\"nice-select\").addClass(t.attr(\"class\")||\"\").addClass(t.attr(\"disabled\")?\"disabled\":\"\").attr(\"tabindex\",t.attr(\"disabled\")?null:\"0\").html('<span class=\"current\"></span><ul class=\"list\"></ul>'));var s=t.next(),n=t.find(\"option\"),i=t.find(\"option:selected\");s.find(\".current\").html(i.data(\"display\")||i.text()),n.each(function(t){var n=e(this),i=n.data(\"display\");s.find(\"ul\").append(e(\"<li></li>\").attr(\"data-value\",n.val()).attr(\"data-display\",i||null).addClass(\"option\"+(n.is(\":selected\")?\" selected\":\"\")+(n.is(\":disabled\")?\" disabled\":\"\")).html(n.text()))})}if(\"string\"==typeof t)return\"update\"==t?this.each(function(){var t=e(this),n=e(this).next(\".nice-select\"),i=n.hasClass(\"open\");n.length&&(n.remove(),s(t),i&&t.next().trigger(\"click\"))}):\"destroy\"==t?(this.each(function(){var t=e(this),s=e(this).next(\".nice-select\");s.length&&(s.remove(),t.css(\"display\",\"\"))}),0==e(\".nice-select\").length&&e(document).off(\".nice_select\")):console.log('Method \"'+t+'\" does not exist.'),this;this.hide(),this.each(function(){var t=e(this);t.next().hasClass(\"nice-select\")||s(t)}),e(document).off(\".nice_select\"),e(document).on(\"click.nice_select\",\".nice-select\",function(t){var s=e(this);e(\".nice-select\").not(s).removeClass(\"open\"),s.toggleClass(\"open\"),s.hasClass(\"open\")?(s.find(\".option\"),s.find(\".focus\").removeClass(\"focus\"),s.find(\".selected\").addClass(\"focus\")):s.focus()}),e(document).on(\"click.nice_select\",function(t){0===e(t.target).closest(\".nice-select\").length&&e(\".nice-select\").removeClass(\"open\").find(\".option\")}),e(document).on(\"click.nice_select\",\".nice-select .option:not(.disabled)\",function(t){var s=e(this),n=s.closest(\".nice-select\");n.find(\".selected\").removeClass(\"selected\"),s.addClass(\"selected\");var i=s.data(\"display\")||s.text();n.find(\".current\").text(i),n.prev(\"select\").val(s.data(\"value\")).trigger(\"change\")}),e(document).on(\"keydown.nice_select\",\".nice-select\",function(t){var s=e(this),n=e(s.find(\".focus\")||s.find(\".list .option.selected\"));if(32==t.keyCode||13==t.keyCode)return s.hasClass(\"open\")?n.trigger(\"click\"):s.trigger(\"click\"),!1;if(40==t.keyCode){if(s.hasClass(\"open\")){var i=n.nextAll(\".option:not(.disabled)\").first();i.length>0&&(s.find(\".focus\").removeClass(\"focus\"),i.addClass(\"focus\"))}else s.trigger(\"click\");return!1}if(38==t.keyCode){if(s.hasClass(\"open\")){var l=n.prevAll(\".option:not(.disabled)\").first();l.length>0&&(s.find(\".focus\").removeClass(\"focus\"),l.addClass(\"focus\"))}else s.trigger(\"click\");return!1}if(27==t.keyCode)s.hasClass(\"open\")&&s.trigger(\"click\");else if(9==t.keyCode&&s.hasClass(\"open\"))return!1});var n=document.createElement(\"a\").style;return n.cssText=\"pointer-events:auto\",\"auto\"!==n.pointerEvents&&e(\"html\").addClass(\"no-csspointerevents\"),this}}(jQuery);", "vendors/nice-select/js/jquery.nice-select.min.js", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\nice-select\\js\\jquery.nice-select.min.js");
    }
}
