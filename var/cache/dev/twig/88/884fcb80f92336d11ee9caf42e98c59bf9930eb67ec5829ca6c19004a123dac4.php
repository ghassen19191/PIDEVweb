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

/* js/contact.js */
class __TwigTemplate_b2b7ea72cd8bb21e28a830ea7a94f80af07771a4711b2f34baddd08dca9b4e5a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/contact.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/contact.js"));

        // line 1
        echo "\$(document).ready(function(){
    
    (function(\$) {
        \"use strict\";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\\bcat\\b\$/.test(value)
    }, \"type the correct answer -_-\");

    // validate contactForm form
    \$(function() {
        \$('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: \"come on, you have a name, don't you?\",
                    minlength: \"your name must consist of at least 2 characters\"
                },
                subject: {
                    required: \"come on, you have a subject, don't you?\",
                    minlength: \"your subject must consist of at least 4 characters\"
                },
                number: {
                    required: \"come on, you have a number, don't you?\",
                    minlength: \"your Number must consist of at least 5 characters\"
                },
                email: {
                    required: \"no email, no message\"
                },
                message: {
                    required: \"um...yea, you have to write something to send this form.\",
                    minlength: \"thats all? really?\"
                }
            },
            submitHandler: function(form) {
                \$(form).ajaxSubmit({
                    type:\"POST\",
                    data: \$(form).serialize(),
                    url:\"contact_process.php\",
                    success: function() {
                        \$('#contactForm :input').attr('disabled', 'disabled');
                        \$('#contactForm').fadeTo( \"slow\", 1, function() {
                            \$(this).find(':input').attr('disabled', 'disabled');
                            \$(this).find('label').css('cursor','default');
                            \$('#success').fadeIn()
                            \$('.modal').modal('hide');
\t\t                \t\$('#success').modal('show');
                        })
                    },
                    error: function() {
                        \$('#contactForm').fadeTo( \"slow\", 1, function() {
                            \$('#error').fadeIn()
                            \$('.modal').modal('hide');
\t\t                \t\$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/contact.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$(document).ready(function(){
    
    (function(\$) {
        \"use strict\";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\\bcat\\b\$/.test(value)
    }, \"type the correct answer -_-\");

    // validate contactForm form
    \$(function() {
        \$('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: \"come on, you have a name, don't you?\",
                    minlength: \"your name must consist of at least 2 characters\"
                },
                subject: {
                    required: \"come on, you have a subject, don't you?\",
                    minlength: \"your subject must consist of at least 4 characters\"
                },
                number: {
                    required: \"come on, you have a number, don't you?\",
                    minlength: \"your Number must consist of at least 5 characters\"
                },
                email: {
                    required: \"no email, no message\"
                },
                message: {
                    required: \"um...yea, you have to write something to send this form.\",
                    minlength: \"thats all? really?\"
                }
            },
            submitHandler: function(form) {
                \$(form).ajaxSubmit({
                    type:\"POST\",
                    data: \$(form).serialize(),
                    url:\"contact_process.php\",
                    success: function() {
                        \$('#contactForm :input').attr('disabled', 'disabled');
                        \$('#contactForm').fadeTo( \"slow\", 1, function() {
                            \$(this).find(':input').attr('disabled', 'disabled');
                            \$(this).find('label').css('cursor','default');
                            \$('#success').fadeIn()
                            \$('.modal').modal('hide');
\t\t                \t\$('#success').modal('show');
                        })
                    },
                    error: function() {
                        \$('#contactForm').fadeTo( \"slow\", 1, function() {
                            \$('#error').fadeIn()
                            \$('.modal').modal('hide');
\t\t                \t\$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})", "js/contact.js", "C:\\xampp\\htdocs\\PIDEV\\templates\\js\\contact.js");
    }
}
