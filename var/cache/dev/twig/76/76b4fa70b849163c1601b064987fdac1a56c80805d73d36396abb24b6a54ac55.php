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

/* scss/style.scss */
class __TwigTemplate_83444906e4c4b8aae45c79a1a93eaad55d5b6d8cb9bd5562e0a8dd3b85e4ef99 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/style.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/style.scss"));

        // line 1
        echo "/*----------------------------------------------------
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
@import \"variables\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"mixins\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"reset\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"predefine\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"header\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"banner\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"blog\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"contact\";
/*---------------------------------------------------- */ 

/*----------------------------------------------------*/
@import \"elements\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"home\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"responsive\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"footer\";
/*---------------------------------------------------- */






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/style.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*----------------------------------------------------
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
@import \"variables\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"mixins\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"reset\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"predefine\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"header\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"banner\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"blog\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"contact\";
/*---------------------------------------------------- */ 

/*----------------------------------------------------*/
@import \"elements\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"home\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"responsive\";
/*---------------------------------------------------- */

/*----------------------------------------------------*/
@import \"footer\";
/*---------------------------------------------------- */






", "scss/style.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\style.scss");
    }
}
