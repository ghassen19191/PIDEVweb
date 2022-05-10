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

/* message/browse.html.twig */
class __TwigTemplate_d1f20dc016b1590e800c9a2cc32078142fe34bd05062d9e582f3647a9fbea509 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/browse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/browse.html.twig"));

        $this->parent = $this->loadTemplate("user/layout.html.twig", "message/browse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"connected-user\">
            <p>Connecté en tant que : ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "getUsername", [], "any", false, false, false, 6), "html", null, true);
            echo " <a  class=\"btn btn-danger\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a></p>
        </div>
    ";
        }
        // line 9
        echo "<div class=\"messages-list col-12\">
    <div class=\"container my-3\">
        ";
        // line 11
        if (array_key_exists("conversation", $context)) {
            // line 12
            echo "            <a  class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conversation_browse");
            echo "\">Liste des Conversations</a>
            <a class=\"btn btn-success\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_ping", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Ping Mercure (EventSource)</a>
            <h2>Conversation : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</h2>
            ";
            // line 15
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 15, $this->source); })()), "admin", [], "any", false, false, false, 15), "getId", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "getId", [], "any", false, false, false, 15)))) {
                // line 16
                echo "                <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conversation_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">supprimer</a>
            ";
            }
            // line 18
            echo "        ";
        }
        // line 19
        echo "    </div>

    <div class=\"container \">
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 22, $this->source); })()), "admin", [], "any", false, false, false, 22), "getUsername", [], "any", false, false, false, 22)) {
            // line 23
            echo "            <div class=\"connected-user\">
                <p>Administrateur : ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 24, $this->source); })()), "admin", [], "any", false, false, false, 24), "getUsername", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 27
        echo "        <div class=\"conversation\">
            ";
        // line 28
        if (twig_test_empty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "                <div class=\"row\">
                    <div class=\"media mr-auto mb-3\">
                        <div class=\"col-12 media-body\">
                            Envoyez le premier message.
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 38
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["message"], "getMine", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                        <!-- Sender Message-->
                        <div class=\"chat--message \">
                            <div class=\"d-flex flex-row-reverse\">
                                <div class=\"content bg-info p-1\">
                                    <p class=\"text-white mb-0\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "getUser", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
                    echo " : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getContent", [], "any", false, false, false, 43), "html", null, true);
                    echo "</p>
                                </div>
                            </div>
                            <div class=\"d-flex flex-row-reverse mb-2\">
                                <div class=\"message--info--right\">
                                    <div class=\"message--date\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "created", [], "any", false, false, false, 48), "H:i"), "html", null, true);
                    echo "</div>
                                </div>
                            </div>
                        </div>
                    ";
                } else {
                    // line 53
                    echo "                        <!-- Reciever Message-->
                        <div class=\"chat--message\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"content bg-secondary p-1\">
                                    <p class=\"text-white mb-0\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "getUser", [], "any", false, false, false, 57), "username", [], "any", false, false, false, 57), "html", null, true);
                    echo " : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getContent", [], "any", false, false, false, 57), "html", null, true);
                    echo "</p>
                                </div>
                            </div>
                            <div class=\"d-flex flex-row mb-2\">
                                <div class=\"message--info--left\">
                                    <div class=\"message--date\">";
                    // line 62
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "created", [], "any", false, false, false, 62), "H:i"), "html", null, true);
                    echo "</div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                // line 67
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            ";
        }
        // line 69
        echo "        </div>
        <div id=\"bottom\"></div>
        <div class=\"controls d-flex justify-content-between\">
            ";
        // line 72
        if (array_key_exists("conversation", $context)) {
            // line 73
            echo "            <div class=\"control--input\">
                <textarea id=\"message-box\" name=\"message-box\" aria-describedby=\"button-send\" class=\"input--controls\" placeholder=\"Saisir un message\"></textarea>
            </div>
            <input id=\"button-send\" type=\"submit\" class=\"btn-send btn btn-primary\" value=\"Envoyer\"/>
            ";
        }
        // line 78
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    <script type=\"application/javascript\">

        /**
         * autoscroll bottom
         */
        function autoBottomScroll() {
            const objDiv = document.querySelector(\".conversation\");
            objDiv.scrollIntoView({block: \"end\", inline: \"nearest\"});
        }

        /**
         * Gestion envoit de messages temps réel avec Mercure
         */
        document.getElementById( 'bottom' ).scrollIntoView();
        document.addEventListener('DOMContentLoaded', function () {

            let messageBox    = document.querySelector('#message-box');
            let pathUri       = window.location.pathname;

            messageBox.addEventListener('keyup', (event) => {
                if(event.keyCode === 13) {
                    sendMessage(event.target.value);
                    messageBox.value= \"\";
                }
            })

            document.getElementById(\"button-send\").addEventListener(\"click\", (event) => {
                sendMessage(messageBox.value);
                messageBox.value= \"\";
            })

            //console.log('URI = ' + pathUri);
            fetch(pathUri).then(result => {

                // Extract the hub URL from the Link header
                const hubUrl   = new URL('";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["mercure_publish_url"]) || array_key_exists("mercure_publish_url", $context) ? $context["mercure_publish_url"] : (function () { throw new RuntimeError('Variable "mercure_publish_url" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "');
                //console.log(\"hubUrl = \" + hubUrl);
                const url      = new URL(hubUrl);

                // Append the topic(s) to subscribe as query parameter
                url.searchParams.append('topic', pathUri);
                //console.log('fetch = ' + pathUri);

                // Subscribe to updates
                const eventSource = new EventSource(url, {
                    withCredentials: true //send cookies by browser
                });

                //console.debug(eventSource);

                if (typeof(eventSource !== undefined)) {
                    eventSource.onmessage = (event) => {
                        //console.dir(event);

                        if (event.data !== null) {
                            const data = JSON.parse(event.data);
                            const newMessageHTML =
                                '<div class=\"chat--message\">'+
                                '    <div class=\"d-flex flex-row\">'+
                                '        <div class=\"content bg-secondary p-1\"><p class=\"text-white mb-0\">'+ data.message +'</p></div>'+
                                '    </div>'+
                                '    <div class=\"message--info--left\">'+
                                '        <div class=\"message--date\">'+ data.date +'</div>'+
                                '    </div>'+
                                '</div>';

                            document.querySelector('.conversation').insertAdjacentHTML('beforeend', '<div class=\"row\">' + newMessageHTML + '</div>');
                            autoBottomScroll();
                        }
                    }
                }
            });

        });

        function sendMessage(data) {

            if(data === \"\")
                return;

            let formData = new FormData();
            //set URI path to add a message ex: /messages/1/add
            const pathUri = window.location.pathname + '/add'
            //get textarea value to save
            formData.append('message-box', data);
            console.log('ADD MESSAGE URI : ' + pathUri);

            fetch( pathUri, {
                method: 'POST',
                body: formData
            }).then(result => {
                // update chat-message
                let newMessageHTML =
                    '<div class=\"chat--message\">'+
                    '<div class=\"d-flex flex-row-reverse\">'+
                    '   <div class=\"content bg-info p-1 mb-3\">'+
                    '       <p class=\"text-white mb-0\">'+data+'</p>'+
                    '   </div>'+
                    '</div>'+
                    '</div>';
                document.querySelector('.conversation').insertAdjacentHTML('beforeend', '<div class=\"row\">' + newMessageHTML + '</div>');
                autoBottomScroll();
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "message/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 118,  246 => 83,  236 => 82,  223 => 78,  216 => 73,  214 => 72,  209 => 69,  206 => 68,  200 => 67,  192 => 62,  182 => 57,  176 => 53,  168 => 48,  158 => 43,  152 => 39,  149 => 38,  144 => 37,  134 => 29,  132 => 28,  129 => 27,  123 => 24,  120 => 23,  118 => 22,  113 => 19,  110 => 18,  104 => 16,  102 => 15,  98 => 14,  94 => 13,  89 => 12,  87 => 11,  83 => 9,  75 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/layout.html.twig' %}

{% block body %}
    {% if app.user %}
        <div class=\"connected-user\">
            <p>Connecté en tant que : {{ app.user.getUsername }} <a  class=\"btn btn-danger\" href=\"{{ path(\"logout\") }}\">Déconnexion</a></p>
        </div>
    {% endif %}
<div class=\"messages-list col-12\">
    <div class=\"container my-3\">
        {% if conversation is defined %}
            <a  class=\"btn btn-primary\" href=\"{{ path(\"conversation_browse\") }}\">Liste des Conversations</a>
            <a class=\"btn btn-success\" href=\"{{ path(\"messages_ping\", {'id' : conversation.id}) }}\">Ping Mercure (EventSource)</a>
            <h2>Conversation : {{ conversation.name }}</h2>
            {% if conversation.admin.getId == app.user.getId %}
                <a class=\"btn btn-danger\" href=\"{{ path(\"conversation_delete\", {'id' : conversation.id}) }}\">supprimer</a>
            {% endif %}
        {% endif %}
    </div>

    <div class=\"container \">
        {% if(conversation.admin.getUsername) %}
            <div class=\"connected-user\">
                <p>Administrateur : {{ conversation.admin.getUsername }}</p>
            </div>
        {% endif %}
        <div class=\"conversation\">
            {% if messages is empty %}
                <div class=\"row\">
                    <div class=\"media mr-auto mb-3\">
                        <div class=\"col-12 media-body\">
                            Envoyez le premier message.
                        </div>
                    </div>
                </div>
            {% else %}
                {% for key, message in messages %}
                    {% if message.getMine %}
                        <!-- Sender Message-->
                        <div class=\"chat--message \">
                            <div class=\"d-flex flex-row-reverse\">
                                <div class=\"content bg-info p-1\">
                                    <p class=\"text-white mb-0\">{{ message.getUser.username }} : {{ message.getContent }}</p>
                                </div>
                            </div>
                            <div class=\"d-flex flex-row-reverse mb-2\">
                                <div class=\"message--info--right\">
                                    <div class=\"message--date\">{{ message.created | date(\"H:i\") }}</div>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <!-- Reciever Message-->
                        <div class=\"chat--message\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"content bg-secondary p-1\">
                                    <p class=\"text-white mb-0\">{{ message.getUser.username }} : {{ message.getContent }}</p>
                                </div>
                            </div>
                            <div class=\"d-flex flex-row mb-2\">
                                <div class=\"message--info--left\">
                                    <div class=\"message--date\">{{ message.created | date(\"H:i\") }}</div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}
        </div>
        <div id=\"bottom\"></div>
        <div class=\"controls d-flex justify-content-between\">
            {% if conversation is defined %}
            <div class=\"control--input\">
                <textarea id=\"message-box\" name=\"message-box\" aria-describedby=\"button-send\" class=\"input--controls\" placeholder=\"Saisir un message\"></textarea>
            </div>
            <input id=\"button-send\" type=\"submit\" class=\"btn-send btn btn-primary\" value=\"Envoyer\"/>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
    <script type=\"application/javascript\">

        /**
         * autoscroll bottom
         */
        function autoBottomScroll() {
            const objDiv = document.querySelector(\".conversation\");
            objDiv.scrollIntoView({block: \"end\", inline: \"nearest\"});
        }

        /**
         * Gestion envoit de messages temps réel avec Mercure
         */
        document.getElementById( 'bottom' ).scrollIntoView();
        document.addEventListener('DOMContentLoaded', function () {

            let messageBox    = document.querySelector('#message-box');
            let pathUri       = window.location.pathname;

            messageBox.addEventListener('keyup', (event) => {
                if(event.keyCode === 13) {
                    sendMessage(event.target.value);
                    messageBox.value= \"\";
                }
            })

            document.getElementById(\"button-send\").addEventListener(\"click\", (event) => {
                sendMessage(messageBox.value);
                messageBox.value= \"\";
            })

            //console.log('URI = ' + pathUri);
            fetch(pathUri).then(result => {

                // Extract the hub URL from the Link header
                const hubUrl   = new URL('{{ mercure_publish_url }}');
                //console.log(\"hubUrl = \" + hubUrl);
                const url      = new URL(hubUrl);

                // Append the topic(s) to subscribe as query parameter
                url.searchParams.append('topic', pathUri);
                //console.log('fetch = ' + pathUri);

                // Subscribe to updates
                const eventSource = new EventSource(url, {
                    withCredentials: true //send cookies by browser
                });

                //console.debug(eventSource);

                if (typeof(eventSource !== undefined)) {
                    eventSource.onmessage = (event) => {
                        //console.dir(event);

                        if (event.data !== null) {
                            const data = JSON.parse(event.data);
                            const newMessageHTML =
                                '<div class=\"chat--message\">'+
                                '    <div class=\"d-flex flex-row\">'+
                                '        <div class=\"content bg-secondary p-1\"><p class=\"text-white mb-0\">'+ data.message +'</p></div>'+
                                '    </div>'+
                                '    <div class=\"message--info--left\">'+
                                '        <div class=\"message--date\">'+ data.date +'</div>'+
                                '    </div>'+
                                '</div>';

                            document.querySelector('.conversation').insertAdjacentHTML('beforeend', '<div class=\"row\">' + newMessageHTML + '</div>');
                            autoBottomScroll();
                        }
                    }
                }
            });

        });

        function sendMessage(data) {

            if(data === \"\")
                return;

            let formData = new FormData();
            //set URI path to add a message ex: /messages/1/add
            const pathUri = window.location.pathname + '/add'
            //get textarea value to save
            formData.append('message-box', data);
            console.log('ADD MESSAGE URI : ' + pathUri);

            fetch( pathUri, {
                method: 'POST',
                body: formData
            }).then(result => {
                // update chat-message
                let newMessageHTML =
                    '<div class=\"chat--message\">'+
                    '<div class=\"d-flex flex-row-reverse\">'+
                    '   <div class=\"content bg-info p-1 mb-3\">'+
                    '       <p class=\"text-white mb-0\">'+data+'</p>'+
                    '   </div>'+
                    '</div>'+
                    '</div>';
                document.querySelector('.conversation').insertAdjacentHTML('beforeend', '<div class=\"row\">' + newMessageHTML + '</div>');
                autoBottomScroll();
            });
        }
    </script>
{% endblock %}", "message/browse.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\message\\browse.html.twig");
    }
}
