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

/* vendors/counter-up/jquery.counterup.min.js */
class __TwigTemplate_74c6499ad7507fc049552c2c97539134afc798d2960f44f98569b31cbfc12fa7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/counter-up/jquery.counterup.min.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/counter-up/jquery.counterup.min.js"));

        // line 1
        echo "(function(\$){\"use strict\";\$.fn.counterUp=function(options){var settings=\$.extend({time:400,delay:10,offset:100,beginAt:0,formatter:false,context:\"window\",callback:function(){}},options),s;return this.each(function(){var \$this=\$(this),counter={time:\$(this).data(\"counterup-time\")||settings.time,delay:\$(this).data(\"counterup-delay\")||settings.delay,offset:\$(this).data(\"counterup-offset\")||settings.offset,beginAt:\$(this).data(\"counterup-beginat\")||settings.beginAt,context:\$(this).data(\"counterup-context\")||settings.context};var counterUpper=function(){var nums=[];var divisions=counter.time/counter.delay;var num=\$(this).attr(\"data-num\")?\$(this).attr(\"data-num\"):\$this.text();var isComma=/[0-9]+,[0-9]+/.test(num);num=num.replace(/,/g,\"\");var decimalPlaces=(num.split(\".\")[1]||[]).length;if(counter.beginAt>num)counter.beginAt=num;var isTime=/[0-9]+:[0-9]+:[0-9]+/.test(num);if(isTime){var times=num.split(\":\"),m=1;s=0;while(times.length>0){s+=m*parseInt(times.pop(),10);m*=60}}for(var i=divisions;i>=counter.beginAt/num*divisions;i--){var newNum=parseFloat(num/divisions*i).toFixed(decimalPlaces);if(isTime){newNum=parseInt(s/divisions*i);var hours=parseInt(newNum/3600)%24;var minutes=parseInt(newNum/60)%60;var seconds=parseInt(newNum%60,10);newNum=(hours<10?\"0\"+hours:hours)+\":\"+(minutes<10?\"0\"+minutes:minutes)+\":\"+(seconds<10?\"0\"+seconds:seconds)}if(isComma){while(/(\\d+)(\\d{3})/.test(newNum.toString())){newNum=newNum.toString().replace(/(\\d+)(\\d{3})/,\"\$1\"+\",\"+\"\$2\")}}if(settings.formatter){newNum=settings.formatter.call(this,newNum)}nums.unshift(newNum)}\$this.data(\"counterup-nums\",nums);\$this.text(counter.beginAt);var f=function(){if(!\$this.data(\"counterup-nums\")){settings.callback.call(this);return}\$this.html(\$this.data(\"counterup-nums\").shift());if(\$this.data(\"counterup-nums\").length){setTimeout(\$this.data(\"counterup-func\"),counter.delay)}else{\$this.data(\"counterup-nums\",null);\$this.data(\"counterup-func\",null);settings.callback.call(this)}};\$this.data(\"counterup-func\",f);setTimeout(\$this.data(\"counterup-func\"),counter.delay)};\$this.waypoint(function(direction){counterUpper();this.destroy()},{offset:counter.offset+\"%\",context:counter.context})})}})(jQuery);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/counter-up/jquery.counterup.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(function(\$){\"use strict\";\$.fn.counterUp=function(options){var settings=\$.extend({time:400,delay:10,offset:100,beginAt:0,formatter:false,context:\"window\",callback:function(){}},options),s;return this.each(function(){var \$this=\$(this),counter={time:\$(this).data(\"counterup-time\")||settings.time,delay:\$(this).data(\"counterup-delay\")||settings.delay,offset:\$(this).data(\"counterup-offset\")||settings.offset,beginAt:\$(this).data(\"counterup-beginat\")||settings.beginAt,context:\$(this).data(\"counterup-context\")||settings.context};var counterUpper=function(){var nums=[];var divisions=counter.time/counter.delay;var num=\$(this).attr(\"data-num\")?\$(this).attr(\"data-num\"):\$this.text();var isComma=/[0-9]+,[0-9]+/.test(num);num=num.replace(/,/g,\"\");var decimalPlaces=(num.split(\".\")[1]||[]).length;if(counter.beginAt>num)counter.beginAt=num;var isTime=/[0-9]+:[0-9]+:[0-9]+/.test(num);if(isTime){var times=num.split(\":\"),m=1;s=0;while(times.length>0){s+=m*parseInt(times.pop(),10);m*=60}}for(var i=divisions;i>=counter.beginAt/num*divisions;i--){var newNum=parseFloat(num/divisions*i).toFixed(decimalPlaces);if(isTime){newNum=parseInt(s/divisions*i);var hours=parseInt(newNum/3600)%24;var minutes=parseInt(newNum/60)%60;var seconds=parseInt(newNum%60,10);newNum=(hours<10?\"0\"+hours:hours)+\":\"+(minutes<10?\"0\"+minutes:minutes)+\":\"+(seconds<10?\"0\"+seconds:seconds)}if(isComma){while(/(\\d+)(\\d{3})/.test(newNum.toString())){newNum=newNum.toString().replace(/(\\d+)(\\d{3})/,\"\$1\"+\",\"+\"\$2\")}}if(settings.formatter){newNum=settings.formatter.call(this,newNum)}nums.unshift(newNum)}\$this.data(\"counterup-nums\",nums);\$this.text(counter.beginAt);var f=function(){if(!\$this.data(\"counterup-nums\")){settings.callback.call(this);return}\$this.html(\$this.data(\"counterup-nums\").shift());if(\$this.data(\"counterup-nums\").length){setTimeout(\$this.data(\"counterup-func\"),counter.delay)}else{\$this.data(\"counterup-nums\",null);\$this.data(\"counterup-func\",null);settings.callback.call(this)}};\$this.data(\"counterup-func\",f);setTimeout(\$this.data(\"counterup-func\"),counter.delay)};\$this.waypoint(function(direction){counterUpper();this.destroy()},{offset:counter.offset+\"%\",context:counter.context})})}})(jQuery);
", "vendors/counter-up/jquery.counterup.min.js", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\counter-up\\jquery.counterup.min.js");
    }
}
