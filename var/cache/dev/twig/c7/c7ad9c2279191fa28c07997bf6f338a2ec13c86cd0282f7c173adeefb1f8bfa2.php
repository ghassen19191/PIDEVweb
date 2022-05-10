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

/* css/main.css */
class __TwigTemplate_0f0ccecd6a82cba76824a042c03325df6ef9f36c98c56ed15b66e9aadc06fcbc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/main.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/main.css"));

        // line 1
        echo "/*
Errno::ENOENT: No such file or directory @ rb_sysopen - scss/main.scss

Backtrace:
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:454:in `read'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:454:in `update_stylesheet'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:215:in `block in update_stylesheets'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:209:in `each'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:209:in `update_stylesheets'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:294:in `watch'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin.rb:109:in `method_missing'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/sass_scss.rb:358:in `watch_or_update'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/sass_scss.rb:51:in `process_result'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/base.rb:50:in `parse'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/base.rb:18:in `parse!'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/bin/sass:13:in `<top (required)>'
/usr/local/bin/sass:22:in `load'
/usr/local/bin/sass:22:in `<main>'
*/
body:before {
  white-space: pre;
  font-family: monospace;
  content: \"Errno::ENOENT: No such file or directory @ rb_sysopen - scss/main.scss\"; }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/main.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*
Errno::ENOENT: No such file or directory @ rb_sysopen - scss/main.scss

Backtrace:
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:454:in `read'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:454:in `update_stylesheet'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:215:in `block in update_stylesheets'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:209:in `each'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:209:in `update_stylesheets'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin/compiler.rb:294:in `watch'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/plugin.rb:109:in `method_missing'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/sass_scss.rb:358:in `watch_or_update'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/sass_scss.rb:51:in `process_result'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/base.rb:50:in `parse'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/lib/sass/exec/base.rb:18:in `parse!'
/Library/Ruby/Gems/2.3.0/gems/sass-3.6.0/bin/sass:13:in `<top (required)>'
/usr/local/bin/sass:22:in `load'
/usr/local/bin/sass:22:in `<main>'
*/
body:before {
  white-space: pre;
  font-family: monospace;
  content: \"Errno::ENOENT: No such file or directory @ rb_sysopen - scss/main.scss\"; }
", "css/main.css", "C:\\xampp\\htdocs\\PIDEV\\templates\\css\\main.css");
    }
}
