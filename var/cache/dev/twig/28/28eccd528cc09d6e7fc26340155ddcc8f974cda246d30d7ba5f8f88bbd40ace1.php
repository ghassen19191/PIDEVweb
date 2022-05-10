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

/* chat/index.html.twig */
class __TwigTemplate_c91eb34861747453eccb93484e8092e2091da57cd97a37ca5e2abbb947fd4f5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://vikbert.github.io/pixss/build/styles/pixss.min.css\"/>
    <title>Hello World!</title>
</head>
<body>
<header class=\"header\">
    <nav class=\"topbar space-between\">
        <div class=\"burger mx-2\">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div>Symfony Chatbot Demo</div>
        <div class=\"mx-1\">
            <div class=\"emoji\">
                👨🏻‍💻
            </div>
        </div>
    </nav>
</header>
<main class=\"main\">
    <div class=\"hero is-primary\">
    </div>
</main>
<script>
    var botmanWidget = {
        frameEndpoint: '";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_frame");
        echo "',
        chatServer: '";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_message");
        echo "',
        introMessage: 'Hello, I am a Chatbot',
        title: 'My Chatbot',
        mainColor: '#f59e08',
        color: '#ffffff',
        bubbleBackground: '#e39206',
        aboutText: ''
    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://vikbert.github.io/pixss/build/styles/pixss.min.css\"/>
    <title>Hello World!</title>
</head>
<body>
<header class=\"header\">
    <nav class=\"topbar space-between\">
        <div class=\"burger mx-2\">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div>Symfony Chatbot Demo</div>
        <div class=\"mx-1\">
            <div class=\"emoji\">
                👨🏻‍💻
            </div>
        </div>
    </nav>
</header>
<main class=\"main\">
    <div class=\"hero is-primary\">
    </div>
</main>
<script>
    var botmanWidget = {
        frameEndpoint: '{{ path(\"chat_frame\") }}',
        chatServer: '{{ path(\"chat_message\") }}',
        introMessage: 'Hello, I am a Chatbot',
        title: 'My Chatbot',
        mainColor: '#f59e08',
        color: '#ffffff',
        bubbleBackground: '#e39206',
        aboutText: ''
    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>
</html>
", "chat/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\chat\\index.html.twig");
    }
}
