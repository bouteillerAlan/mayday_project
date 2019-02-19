<?php

/* admin\admin.login.html.twig */
class __TwigTemplate_b8a2b32d4e5b0cc17b68f8703e42a069d00452410e0aca25bcd7ffb69e01e909 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.home.html.twig", "admin\\admin.login.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/admin.home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin\\admin.login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin\\admin.login.html.twig"));

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

        echo "Admin - Login";
        
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
            </ul>
        </div>
    </nav>

    <!--Mobile structure-->
    <ul class=\"sidenav\" id=\"slide-out\">
        <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil du site</a></li>
    </ul>
    <!--navbar end-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    <div class=\"row container\">
        ";
        // line 26
        $this->displayBlock('form', $context, $blocks);
        // line 56
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 27
        echo "            <div class=\"col s12 content\">
                <form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">

                    <div class=\"input-field col m6 s12\">
                        <input id=\"username\" type=\"text\" class=\"validate ";
        // line 31
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->source); })())) {
            echo "invalid";
        }
        echo "\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["lastUser"]) || array_key_exists("lastUser", $context) ? $context["lastUser"] : (function () { throw new Twig_Error_Runtime('Variable "lastUser" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" required=\"required\">
                        <label for=\"username\">Username</label>
                        <span class=\"helper-text\" data-error=\"
                            ";
        // line 34
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 35, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 35, $this->source); })()), "messagedata", []), "security"), "html", null, true);
            echo "
                            ";
        }
        // line 37
        echo "                        \"></span>
                    </div>
                    <div class=\"input-field col m6 s12\">
                        <input id=\"password\" type=\"password\" class=\"validate ";
        // line 40
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 40, $this->source); })())) {
            echo "invalid";
        }
        echo "\" name=\"_password\" required=\"required\">
                        <label for=\"password\">Password</label>
                    </div>

                    <div class=\"col s12 paramBlog\">
                        <div>
                            <button class=\"btn waves-effect waves-light\" type=\"submit\">Me connecter
                                <i class=\"material-icons right\">send</i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin\\admin.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 40,  167 => 37,  161 => 35,  159 => 34,  149 => 31,  143 => 28,  140 => 27,  131 => 26,  120 => 56,  118 => 26,  115 => 25,  106 => 24,  92 => 19,  82 => 12,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/admin.home.html.twig' %}

{% block title %}Admin - Login{% endblock %}

{% block nav %}
    <!--navbar-->
    <nav id=\"spy\">
        <div class=\"nav-wrapper\" data-target=\"top\">
            <a href=\"#\" class=\"brand-logo center\">mayday<span class=\"blink\">_</span></a>
            <a href=\"#\" data-target=\"slide-out\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
            <ul class=\"left hide-on-med-and-down\">
                <li><a href=\"{{ path('home') }}\">Accueil du site</a></li>
            </ul>
        </div>
    </nav>

    <!--Mobile structure-->
    <ul class=\"sidenav\" id=\"slide-out\">
        <li><a href=\"{{ path('home') }}\">Accueil du site</a></li>
    </ul>
    <!--navbar end-->
{% endblock %}

{% block body %}
    <div class=\"row container\">
        {% block form %}
            <div class=\"col s12 content\">
                <form action=\"{{ path('login') }}\" method=\"post\">

                    <div class=\"input-field col m6 s12\">
                        <input id=\"username\" type=\"text\" class=\"validate {% if error %}invalid{% endif %}\" name=\"_username\" value=\"{{ lastUser }}\" required=\"required\">
                        <label for=\"username\">Username</label>
                        <span class=\"helper-text\" data-error=\"
                            {% if error %}
                                {{ error.messageKey | trans(error.messagedata, 'security') }}
                            {% endif %}
                        \"></span>
                    </div>
                    <div class=\"input-field col m6 s12\">
                        <input id=\"password\" type=\"password\" class=\"validate {% if error %}invalid{% endif %}\" name=\"_password\" required=\"required\">
                        <label for=\"password\">Password</label>
                    </div>

                    <div class=\"col s12 paramBlog\">
                        <div>
                            <button class=\"btn waves-effect waves-light\" type=\"submit\">Me connecter
                                <i class=\"material-icons right\">send</i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "admin\\admin.login.html.twig", "P:\\Developer_Tools\\laragon\\www\\siteperso\\templates\\admin\\admin.login.html.twig");
    }
}
