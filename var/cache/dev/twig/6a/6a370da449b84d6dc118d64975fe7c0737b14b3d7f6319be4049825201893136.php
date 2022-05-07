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

/* post/index.html.twig */
class __TwigTemplate_3590bf232bd419f839452d8f99c165ee6c16db22464cfa3f7632236d22ece013 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'search' => [$this, 'block_search'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back/news.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("back/news.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Post</h1>
";
        // line 4
        $this->displayBlock('search', $context, $blocks);
        // line 14
        echo "




    <table id =\"t\" class=\"table\">
        <thead>
            <tr>
                
                <th>Titre</th>
                <th>Auteur</th>
                <th>ImgPost</th>
                <th>DatePost</th>
               
                <th>Image</th>
                 <th>Rate</th>
                <th>.....</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 37
            echo "            <tr>
                
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "auteur", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "imgPost", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            ((twig_get_attribute($this->env, $this->source, $context["post"], "datePost", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "datePost", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
              <td><img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" alt=\"\" width=\"80\" height=\"50\">
\t\t\t\t\t</td> 
                     <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "rate", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
             
                <td> ";
            // line 47
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "enable", [], "any", false, false, false, 47), 1))) {
                echo " Masqué
                            ";
            } else {
                // line 48
                echo " Affiché";
            }
            echo "</td>
                        <td>

                            <a style=color:#00c94a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["idPost" => twig_get_attribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">   <input class=\"btn btn-warning \" type=\"submit\" value=\"Update\"/>
                            </a>
                            <a style=color:red href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["idPost" => twig_get_attribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"> <input class=\"btn btn-danger \" type=\"submit\" value=\"show\"/>
                            </a>
                            ";
            // line 55
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "enable", [], "any", false, false, false, 55), 1))) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("masquer_evenement", ["idPost" => twig_get_attribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\" class=\"btn btn-success text-white\" href=\"#\">Afficher</a>
                            ";
            } else {
                // line 56
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_evenement", ["idPost" => twig_get_attribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"btn btn-success text-white\"
                                         href=\"#\">Masquer</a> ";
            }
            // line 58
            echo "                        </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "      </tbody>
         <tbody id=\"search\"></tbody>


    </table>
    <div class=\"navigation\">
            ";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 71, $this->source); })()));
        echo "
        </div>

    <button class=\"btn\" style=\"background-color:#F1C40F;border-color: black;color: purple\"> <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create new</a></button>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                           // window.alert(\"sometext\");

                            \$.each(JSON.parse(retour), function(o, obj) {

                                \$('#t tbody#all').hide();


                                \$('#t tbody#search').append(\" <tr>\");
\t\t\t\t\t\t\t    \$('#t tbody#search').append(\" <td>\"+obj.titre+\"</td>\");
                               \$('#t tbody#search').append(\" <td>\"+obj.auteur+\"</td>\");
                               \$('#t tbody#search').append(\" <td>\"+obj.imgPost+\"</td>\"); 
                               \$('#t tbody#search').append(\" <td>\"+obj.datePost+\"</td>\");
                               \$('#t tbody#search').append(\" <td>\"+obj.rate+\"</td>\"); 
                                var p=\"/PIDEV/public/uploads/\"+obj.image;
                                var img = \"<img src=\"+p+\" width='100' height='100'/>\";
                                \$('#t tbody#search').append(\" <td>\"+img+\"</td>\");
\t\t\t\t\t\t\t   
                                
                                
                                \$('#t tbody#search').append(\" <td><button class='btn btn-outline-primary' type='submit' href=\"+obj.idPost+\">show</button> <button class='btn btn-outline-primary' type='submit'  href=\"+obj.idPost+\">edit </button></td>\");

                             //   \$('#t tbody#search').append(\"<td> <button class='btn btn-outline-primary' type='submit' onclick='window.location.href =\" +obj.id_post+\"'; role='button'> Show </button>\");
                                //\$('#t tbody#search').append(\" <button class='btn btn-outline-primary' type='submit' onclick='window.location.href =\" +obj.id_post+\"'; role='button'> Edit </button></td>\");



                                \$('#t tbody#search').append(\"</tr>\");
                                // <td>'+obj.description+'</td><td>'+obj.dateajout+'  </td><td></td><td><a href=\"article/'+obj.id+'\">show</a> </br><a href=\"article/'+obj.id+'/edit\">edit</a></td></tr>');
                            });
                        }
                        //\$('#t tbody#search').append('<tr><td> '+obj.lieu+'  </td><td>    '+obj.nbPlace+'  </td><td>'+obj.descriptions+' </td><td>'+obj.dateEvent+' </td><td>'+obj.getcategory+' </td><td>'+obj.Description+'</td><td><td><a href=\"event/'+obj.idEvent+'/edit\">Modifier</a></td></tr>');
                        else
                        {

                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
             });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 5
        echo "        <form>
            <div class=\"input-group input-group-dynamic mb-8\">
                <span class=\"input-group-text\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>

                <input class=\"form-control\" id=\"search\" placeholder=\"Search\" type=\"text\" >

            </div>
        </form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 5,  278 => 4,  212 => 85,  198 => 74,  192 => 71,  184 => 65,  175 => 61,  168 => 58,  162 => 56,  155 => 55,  150 => 53,  145 => 51,  138 => 48,  133 => 47,  128 => 45,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 37,  98 => 36,  74 => 14,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/news.html.twig' %}
{% block body %}
<h1>Post</h1>
{% block search %}
        <form>
            <div class=\"input-group input-group-dynamic mb-8\">
                <span class=\"input-group-text\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>

                <input class=\"form-control\" id=\"search\" placeholder=\"Search\" type=\"text\" >

            </div>
        </form>
    {% endblock %}





    <table id =\"t\" class=\"table\">
        <thead>
            <tr>
                
                <th>Titre</th>
                <th>Auteur</th>
                <th>ImgPost</th>
                <th>DatePost</th>
               
                <th>Image</th>
                 <th>Rate</th>
                <th>.....</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">

        {% for post in posts %}
            <tr>
                
                <td>{{ post.titre }}</td>
                <td>{{ post.auteur }}</td>
                <td>{{ post.imgPost }}</td>
                <td>{{ post.datePost ? post.datePost|date('Y-m-d') : '' }}</td>
              <td><img src=\"{{ asset('uploads/' ~ post.image) }}\" alt=\"\" width=\"80\" height=\"50\">
\t\t\t\t\t</td> 
                     <td>{{ post.rate }}</td>
             
                <td> {% if post.enable == 1 %} Masqué
                            {% else %} Affiché{% endif %}</td>
                        <td>

                            <a style=color:#00c94a href=\"{{ path('app_post_edit',{'idPost':post.idPost}) }}\">   <input class=\"btn btn-warning \" type=\"submit\" value=\"Update\"/>
                            </a>
                            <a style=color:red href=\"{{ path('app_post_show',{'idPost':post.idPost}) }}\"> <input class=\"btn btn-danger \" type=\"submit\" value=\"show\"/>
                            </a>
                            {% if post.enable == 1 %} <a href=\"{{ path('masquer_evenement', {'idPost' : post.idPost})}}\" class=\"btn btn-success text-white\" href=\"#\">Afficher</a>
                            {% else %}<a href=\"{{ path('afficher_evenement', {'idPost' : post.idPost})}}\" class=\"btn btn-success text-white\"
                                         href=\"#\">Masquer</a> {% endif %}
                        </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
      </tbody>
         <tbody id=\"search\"></tbody>


    </table>
    <div class=\"navigation\">
            {{ knp_pagination_render(posts) }}
        </div>

    <button class=\"btn\" style=\"background-color:#F1C40F;border-color: black;color: purple\"> <a href=\"{{ path('app_post_new') }}\">Create new</a></button>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('search') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                           // window.alert(\"sometext\");

                            \$.each(JSON.parse(retour), function(o, obj) {

                                \$('#t tbody#all').hide();


                                \$('#t tbody#search').append(\" <tr>\");
\t\t\t\t\t\t\t    \$('#t tbody#search').append(\" <td>\"+obj.titre+\"</td>\");
                               \$('#t tbody#search').append(\" <td>\"+obj.auteur+\"</td>\");
                               \$('#t tbody#search').append(\" <td>\"+obj.imgPost+\"</td>\"); 
                               \$('#t tbody#search').append(\" <td>\"+obj.datePost+\"</td>\");
                               \$('#t tbody#search').append(\" <td>\"+obj.rate+\"</td>\"); 
                                var p=\"/PIDEV/public/uploads/\"+obj.image;
                                var img = \"<img src=\"+p+\" width='100' height='100'/>\";
                                \$('#t tbody#search').append(\" <td>\"+img+\"</td>\");
\t\t\t\t\t\t\t   
                                
                                
                                \$('#t tbody#search').append(\" <td><button class='btn btn-outline-primary' type='submit' href=\"+obj.idPost+\">show</button> <button class='btn btn-outline-primary' type='submit'  href=\"+obj.idPost+\">edit </button></td>\");

                             //   \$('#t tbody#search').append(\"<td> <button class='btn btn-outline-primary' type='submit' onclick='window.location.href =\" +obj.id_post+\"'; role='button'> Show </button>\");
                                //\$('#t tbody#search').append(\" <button class='btn btn-outline-primary' type='submit' onclick='window.location.href =\" +obj.id_post+\"'; role='button'> Edit </button></td>\");



                                \$('#t tbody#search').append(\"</tr>\");
                                // <td>'+obj.description+'</td><td>'+obj.dateajout+'  </td><td></td><td><a href=\"article/'+obj.id+'\">show</a> </br><a href=\"article/'+obj.id+'/edit\">edit</a></td></tr>');
                            });
                        }
                        //\$('#t tbody#search').append('<tr><td> '+obj.lieu+'  </td><td>    '+obj.nbPlace+'  </td><td>'+obj.descriptions+' </td><td>'+obj.dateEvent+' </td><td>'+obj.getcategory+' </td><td>'+obj.Description+'</td><td><td><a href=\"event/'+obj.idEvent+'/edit\">Modifier</a></td></tr>');
                        else
                        {

                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
             });
</script>
{% endblock %}
", "post/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\post\\index.html.twig");
    }
}
