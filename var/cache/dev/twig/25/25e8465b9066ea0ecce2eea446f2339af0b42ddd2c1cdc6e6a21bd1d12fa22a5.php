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

/* scss/_variables.scss */
class __TwigTemplate_c940a845414bd6db8dc9656474ec2b6ff54c4add19d39105b4dcf3af2607b5a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_variables.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_variables.scss"));

        // line 1
        echo "/*font Variables*/
\$primary-font: 'Roboto', sans-serif;
\$title-font: 'Rajdhani', sans-serif;


/*Color Variables*/
\$primary-color: #3fcaff;
\$primary-color2: #a4ffb0;
\$title-color: #222222;
\$text-color: #777777;


/*=================== fonts ====================*/
@import url('https://fonts.googleapis.com/css?family=Rajdhani:600,700|Roboto:400,500,500i');


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_variables.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*font Variables*/
\$primary-font: 'Roboto', sans-serif;
\$title-font: 'Rajdhani', sans-serif;


/*Color Variables*/
\$primary-color: #3fcaff;
\$primary-color2: #a4ffb0;
\$title-color: #222222;
\$text-color: #777777;


/*=================== fonts ====================*/
@import url('https://fonts.googleapis.com/css?family=Rajdhani:600,700|Roboto:400,500,500i');


", "scss/_variables.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_variables.scss");
    }
}
