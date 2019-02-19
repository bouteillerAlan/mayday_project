<?php

/* admin/admin.home.html.twig */
class __TwigTemplate_83045b4c32c2d9500d7e1a08d4c089fce2eb693d4b9c8aeaa13e84e8b5b7a134 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.home.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration du blog";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "    <!--navbar-->
    <nav id=\"spy\">
        <div class=\"nav-wrapper\" data-target=\"top\">
            <a href=\"#\" class=\"brand-logo center\">mayday<span class=\"blink\">_</span></a>
            <a href=\"#\" data-target=\"slide-out\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
            <ul class=\"left hide-on-med-and-down\">
                <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil du site</a></li>
                <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Administration</a></li>
                <li><a href=\"#\">Categorie</a></li>
                <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.user");
        echo "\">Utilisateur</a></li>
            </ul>
            <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Me déconnecter</a></li>
            </ul>
        </div>
    </nav>

    <!--Mobile structure-->
    <ul class=\"sidenav\" id=\"slide-out\">
        <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil du site</a></li>
        <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Administration</a></li>
        <li><a href=\"#\">Categorie</a></li>
        <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.user");
        echo "\">Utilisateur</a></li>
        <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Me déconnecter</a></li>
    </ul>
    <!--navbar end-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    <div class=\"row container\">
        <div class=\"col s12 messages-top\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "                <div class=\"col s12 green flash-card\">
                    <p class=\"valign-wrapper\">
                        <i class=\"material-icons\">layers</i>";
            // line 40
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [0 => "error"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            echo "                <div class=\"col s12 red flash-card\">
                    <p class=\"valign-wrapper\">
                        <i class=\"material-icons\">layers_clear</i>";
            // line 47
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>

        <div class=\"col s12\">
            <table class=\"highlight responsive-table\">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Date de création</th>
                    <th>Status</th>
                    <th><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.unique.new");
        echo "\" class=\"waves-effect waves-light btn-small\">Nouveau<i class=\"material-icons left\">add_to_photos</i></a></th>
                    <th rowspan=\"2\"></th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 67
            echo "                    <tr>
                        <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog.unique", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", []), "slug" => twig_get_attribute($this->env, $this->source, $context["data"], "slug", [])]), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["data"], "title", []);
            echo "</a></td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "date", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "status", []), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.unique.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", []), "slug" => twig_get_attribute($this->env, $this->source, $context["data"], "slug", [])]), "html", null, true);
            echo "\" class=\"waves-effect waves-light btn-small green\">Modifier<i class=\"material-icons left\">burst_mode</i></a>
                        </td>
                        <td>
                            <form method=\"post\" action=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.unique.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", []), "slug" => twig_get_attribute($this->env, $this->source, $context["data"], "slug", [])]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes-vous sur de vouloir supprimer l\\'article ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "slug", []), "html", null, true);
            echo "')\">
                                <input type=\"hidden\" name=\"_method\" value=\"delete\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((("delete" . twig_get_attribute($this->env, $this->source, $context["data"], "slug", [])) . twig_get_attribute($this->env, $this->source, $context["data"], "id", []))), "html", null, true);
            echo "\">
                                <button class=\"btn waves-effect waves-light btn-small red\">Supprimer<i class=\"material-icons left\">backspace</i></button>
                            </form>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 83,  238 => 77,  231 => 75,  225 => 72,  220 => 70,  216 => 69,  210 => 68,  207 => 67,  203 => 66,  194 => 60,  183 => 51,  173 => 47,  169 => 45,  164 => 44,  154 => 40,  150 => 38,  146 => 37,  142 => 35,  133 => 34,  119 => 29,  115 => 28,  110 => 26,  106 => 25,  96 => 18,  90 => 15,  85 => 13,  81 => 12,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Administration du blog{% endblock %}

{% block nav %}
    <!--navbar-->
    <nav id=\"spy\">
        <div class=\"nav-wrapper\" data-target=\"top\">
            <a href=\"#\" class=\"brand-logo center\">mayday<span class=\"blink\">_</span></a>
            <a href=\"#\" data-target=\"slide-out\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
            <ul class=\"left hide-on-med-and-down\">
                <li><a href=\"{{ path('home') }}\">Accueil du site</a></li>
                <li><a href=\"{{ path('admin') }}\">Administration</a></li>
                <li><a href=\"#\">Categorie</a></li>
                <li><a href=\"{{ path('admin.user') }}\">Utilisateur</a></li>
            </ul>
            <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"{{ path('logout') }}\">Me déconnecter</a></li>
            </ul>
        </div>
    </nav>

    <!--Mobile structure-->
    <ul class=\"sidenav\" id=\"slide-out\">
        <li><a href=\"{{ path('home') }}\">Accueil du site</a></li>
        <li><a href=\"{{ path('admin') }}\">Administration</a></li>
        <li><a href=\"#\">Categorie</a></li>
        <li><a href=\"{{ path('admin.user') }}\">Utilisateur</a></li>
        <li><a href=\"{{ path('logout') }}\">Me déconnecter</a></li>
    </ul>
    <!--navbar end-->
{% endblock %}

{% block body %}
    <div class=\"row container\">
        <div class=\"col s12 messages-top\">
            {% for message in app.flashes('success') %}
                <div class=\"col s12 green flash-card\">
                    <p class=\"valign-wrapper\">
                        <i class=\"material-icons\">layers</i>{{ message }}
                    </p>
                </div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div class=\"col s12 red flash-card\">
                    <p class=\"valign-wrapper\">
                        <i class=\"material-icons\">layers_clear</i>{{ message }}
                    </p>
                </div>
            {% endfor %}
        </div>

        <div class=\"col s12\">
            <table class=\"highlight responsive-table\">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Date de création</th>
                    <th>Status</th>
                    <th><a href=\"{{ path('admin.unique.new') }}\" class=\"waves-effect waves-light btn-small\">Nouveau<i class=\"material-icons left\">add_to_photos</i></a></th>
                    <th rowspan=\"2\"></th>
                </tr>
                </thead>

                <tbody>
                {% for data in result %}
                    <tr>
                        <td><a href=\"{{ path('blog.unique', {id: data.id, slug: data.slug}) }}\" target=\"_blank\">{{ data.title|raw }}</a></td>
                        <td>{{ data.date }}</td>
                        <td>{{ data.status }}</td>
                        <td>
                            <a href=\"{{ path('admin.unique.edit', {id: data.id, slug: data.slug}) }}\" class=\"waves-effect waves-light btn-small green\">Modifier<i class=\"material-icons left\">burst_mode</i></a>
                        </td>
                        <td>
                            <form method=\"post\" action=\"{{ path('admin.unique.delete', {id: data.id, slug: data.slug}) }}\" onsubmit=\"return confirm('Etes-vous sur de vouloir supprimer l\\'article {{data.slug}}')\">
                                <input type=\"hidden\" name=\"_method\" value=\"delete\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~data.slug~data.id) }}\">
                                <button class=\"btn waves-effect waves-light btn-small red\">Supprimer<i class=\"material-icons left\">backspace</i></button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "admin/admin.home.html.twig", "P:\\Developer_Tools\\laragon\\www\\siteperso\\templates\\admin\\admin.home.html.twig");
    }
}
