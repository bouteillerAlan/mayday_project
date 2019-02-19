<?php

/* admin\admin.user.html.twig */
class __TwigTemplate_ee9dbfde7812e56a669ebd29d31e1b4beeb80f3f9c490c13a62540dd92076fba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.home.html.twig", "admin\\admin.user.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/admin.home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin\\admin.user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin\\admin.user.html.twig"));

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

        echo "Admin - User";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row container\">
        <div class=\"col s12 messages-top\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                <div class=\"col s12 green flash-card\">
                    <p class=\"valign-wrapper\">
                        <i class=\"material-icons\">layers</i>";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "error"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "                <div class=\"col s12 red flash-card\">
                    <p class=\"valign-wrapper\">
                        <i class=\"material-icons\">layers_clear</i>";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>

        <div class=\"col m6 offset-m3 s12\">
            <table class=\"highlight responsive-table\">
                <thead>
                <tr>
                    <th>Name</th>
                    <th><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.user.new");
        echo "\" class=\"waves-effect waves-light btn-small\">Nouveau<i class=\"material-icons left\">add_to_photos</i></a></th>
                    <th rowspan=\"2\"></th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "username", []), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"#\" class=\"waves-effect waves-light btn-small green\">Modifier<i class=\"material-icons left\">burst_mode</i></a>
                        </td>
                        <td>
                            <form method=\"post\" action=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.user.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [])]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes-vous sur de vouloir supprimer l\\'utilisateur ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "username", []), "html", null, true);
            echo "')\">
                                <input type=\"hidden\" name=\"_method\" value=\"delete\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["data"], "id", []))), "html", null, true);
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
        // line 51
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
        return "admin\\admin.user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  153 => 45,  146 => 43,  138 => 38,  135 => 37,  131 => 36,  122 => 30,  113 => 23,  103 => 19,  99 => 17,  94 => 16,  84 => 12,  80 => 10,  76 => 9,  72 => 7,  63 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/admin.home.html.twig' %}

{% block title %}Admin - User{% endblock %}


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

        <div class=\"col m6 offset-m3 s12\">
            <table class=\"highlight responsive-table\">
                <thead>
                <tr>
                    <th>Name</th>
                    <th><a href=\"{{ path('admin.user.new') }}\" class=\"waves-effect waves-light btn-small\">Nouveau<i class=\"material-icons left\">add_to_photos</i></a></th>
                    <th rowspan=\"2\"></th>
                </tr>
                </thead>

                <tbody>
                {% for data in result %}
                    <tr>
                        <td>{{ data.username }}</td>
                        <td>
                            <a href=\"#\" class=\"waves-effect waves-light btn-small green\">Modifier<i class=\"material-icons left\">burst_mode</i></a>
                        </td>
                        <td>
                            <form method=\"post\" action=\"{{ path('admin.user.delete', {id: data.id}) }}\" onsubmit=\"return confirm('Etes-vous sur de vouloir supprimer l\\'utilisateur {{data.username}}')\">
                                <input type=\"hidden\" name=\"_method\" value=\"delete\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~data.id) }}\">
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
", "admin\\admin.user.html.twig", "P:\\Developer_Tools\\laragon\\www\\siteperso\\templates\\admin\\admin.user.html.twig");
    }
}
