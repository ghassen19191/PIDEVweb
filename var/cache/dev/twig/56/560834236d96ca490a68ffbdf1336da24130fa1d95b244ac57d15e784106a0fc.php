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

/* vendors/flipclock/timer.js */
class __TwigTemplate_5918454417e5b405a4c38a733dc11f6fe59ba3f65a4f5b3fc895c68165cda3f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/flipclock/timer.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/flipclock/timer.js"));

        // line 1
        echo "var today = new Date();

var timer = function() {};
timer.countdownDate = new Date();

// set date to 10 days in the future for testing purposes
timer.countdownDate.setDate( timer.countdownDate.getDate() + 10 );

/*
* Get thing started
*/
timer.init = function() {
  timer.getReferences();
  
  
  timer.getTimes();
  setInterval(function() { timer.update() }, 1000);
}

/*
* Save references of timer section
*/
timer.getReferences = function() {
  timer.timer = document.getElementById(\"timer\");
  timer.days = timer.timer.querySelectorAll(\".days .timer__number\")[0];
  timer.hours = timer.timer.querySelectorAll(\".hours .timer__number\")[0];
  timer.minutes = timer.timer.querySelectorAll(\".minutes .timer__number\")[0];
  timer.seconds = timer.timer.querySelectorAll(\".seconds .timer__number\")[0];
}

/*
* remember time units for later use
*/
timer.getTimes = function() {
  timer.times = {};
  timer.times.second = 1000;
  timer.times.minute = timer.times.second * 60;
  timer.times.hour = timer.times.minute * 60;
  timer.times.day = timer.times.hour * 24;
}

/*
* Update the countdown
*/
timer.update = function() {
  if ( timer.timer.style.opacity !== 1 ) {
    timer.timer.style.opacity = 1;
  }
  
  timer.currentDate = new Date();
  timer.difference = timer.countdownDate - timer.currentDate;
  
  timer.days.innerHTML = timer.getTimeRemaining(timer.times.day, 1);
  timer.hours.innerHTML = timer.getTimeRemaining(timer.times.hour, 24);
  timer.minutes.innerHTML = timer.getTimeRemaining(timer.times.minute, 60);
  timer.seconds.innerHTML = timer.getTimeRemaining(timer.times.second, 60);
}

/*
* calculate remaining time based on a unit of time
*/
timer.getTimeRemaining = function( timeUnit, divisor ) {
  var n;
  if ( divisor == 1 ) {
    n = Math.floor(timer.difference / timeUnit );
  }
  else {
    n = Math.floor((timer.difference / timeUnit) % divisor );
  }
  
  if ( String(n).length < 2 ) {
    n = \"0\" + n;
  }
  
  return n;
}

window.addEventListener(\"load\", function() {
  timer.init();
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/flipclock/timer.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("var today = new Date();

var timer = function() {};
timer.countdownDate = new Date();

// set date to 10 days in the future for testing purposes
timer.countdownDate.setDate( timer.countdownDate.getDate() + 10 );

/*
* Get thing started
*/
timer.init = function() {
  timer.getReferences();
  
  
  timer.getTimes();
  setInterval(function() { timer.update() }, 1000);
}

/*
* Save references of timer section
*/
timer.getReferences = function() {
  timer.timer = document.getElementById(\"timer\");
  timer.days = timer.timer.querySelectorAll(\".days .timer__number\")[0];
  timer.hours = timer.timer.querySelectorAll(\".hours .timer__number\")[0];
  timer.minutes = timer.timer.querySelectorAll(\".minutes .timer__number\")[0];
  timer.seconds = timer.timer.querySelectorAll(\".seconds .timer__number\")[0];
}

/*
* remember time units for later use
*/
timer.getTimes = function() {
  timer.times = {};
  timer.times.second = 1000;
  timer.times.minute = timer.times.second * 60;
  timer.times.hour = timer.times.minute * 60;
  timer.times.day = timer.times.hour * 24;
}

/*
* Update the countdown
*/
timer.update = function() {
  if ( timer.timer.style.opacity !== 1 ) {
    timer.timer.style.opacity = 1;
  }
  
  timer.currentDate = new Date();
  timer.difference = timer.countdownDate - timer.currentDate;
  
  timer.days.innerHTML = timer.getTimeRemaining(timer.times.day, 1);
  timer.hours.innerHTML = timer.getTimeRemaining(timer.times.hour, 24);
  timer.minutes.innerHTML = timer.getTimeRemaining(timer.times.minute, 60);
  timer.seconds.innerHTML = timer.getTimeRemaining(timer.times.second, 60);
}

/*
* calculate remaining time based on a unit of time
*/
timer.getTimeRemaining = function( timeUnit, divisor ) {
  var n;
  if ( divisor == 1 ) {
    n = Math.floor(timer.difference / timeUnit );
  }
  else {
    n = Math.floor((timer.difference / timeUnit) % divisor );
  }
  
  if ( String(n).length < 2 ) {
    n = \"0\" + n;
  }
  
  return n;
}

window.addEventListener(\"load\", function() {
  timer.init();
});
", "vendors/flipclock/timer.js", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\flipclock\\timer.js");
    }
}
