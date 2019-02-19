<?php

/* base.html.twig */
class __TwigTemplate_2deceab04a3e47d3e3172a36bcc8a5b561c8ab9d7887de64c5a1b2e7dd00ba64 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- _      _ _                _____          _             _        _
    | |    (_) |              / ____|        | |           | |      | |
\t| |     _| |__   ___ _ __| |     ___   __| | _____  __ | | _____| |__
\t| |    | | '_ \\ / _ \\ '__| |    / _ \\ / _` |/ _ \\ \\/ / | |/ / __| '_ \\
\t| |____| | |_) |  __/ |  | |___| (_) | (_| |  __/>  < _|   <\\__ \\ | | |
\t|______|_|_.__/ \\___|_|   \\_____\\___/ \\__,_|\\___/_/\\_(_)_|\\_\\___/_| |_|-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- @Google Icon Font -->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!-- @materialize -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
        <!-- @personal style -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/style_gen.css\"  media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/custom_style_materialize.css\"  media=\"screen,projection\"/>
        <!-- @prism -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/prism.css\"/>

        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "

        <div id=\"nav\">
            ";
        // line 34
        $this->displayBlock('nav', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "
            ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "
            <!--Action button-->
            <div class=\"fixed-action-btn hide\" id=\"btn-spy\">
                <a class=\"btn-floating btn-large backGreen waves-effect waves-light\" href=\"#home\">
                    <i class=\"large material-icons\">arrow_drop_up</i>
                </a>
            </div>

        </div>

        <!--JavaScript-->
        <!--@Jquery-->
        <script type=\"text/javascript\" src=\"../js/jquery.js\"></script>
        <!--@materialize-->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
        <!--@prism component-->
        <script type=\"text/javascript\" src=\"../js/prism.js\"></script>
        <!--@materialize component-->
        <script type=\"text/javascript\" src=\"../js/init.js\"></script>
        <!--@custom component and object-->
        <script type=\"text/javascript\" src=\"../js/custom.js\"></script>

        ";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 35
        echo "            <!--navbar-->
            <nav class=\"pushpin pin-bottom\" data-target=\"nav\" id=\"spy\">
                <div class=\"nav-wrapper pushpin\" data-target=\"top\">
                    <a href=\"#\" class=\"brand-logo center\">mayday<span class=\"blink\">_</span></a>
                    <a href=\"#\" data-target=\"slide-out\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
                    <ul class=\"left hide-on-med-and-down\">
                        <li><a href=\"#je_fait\">Je fais</a></li>
                        <li><a href=\"#je_suis\">Je suis</a></li>
                        <li><a href=\"#a_propos\">A propos</a></li>
                        <li><a href=\"#blog\">Blog</a></li>
                        <li><a href=\"#blog\">Notes</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                </div>
            </nav>

            <!--Mobile structure-->
            <ul class=\"sidenav\" id=\"slide-out\">
                <li><a href=\"#je_fait\">Je fais</a></li>
                <li><a href=\"#je_suis\">Je suis</a></li>
                <li><a href=\"#a_propos\">A propos</a></li>
                <li><a href=\"#blog\">Blog</a></li>
                <li><a href=\"#blog\">Notes</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
            <!--navbar end-->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 66
        echo "                <!--Footer-->
                <div class=\"row footer\">
                    <div class=\"col s12 center-align\">
                        <div class=\"col s4 offset-s4 divider pink-p\"></div>
                        <p><i>That's all folks!</i></p>
                    </div>
                    <div class=\"col s12 center-align\">
                        <p>© Alan Bouteiller - 2019</p>
                    </div>
                </div>
                <!--Footer end-->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  273 => 100,  252 => 66,  243 => 65,  226 => 63,  190 => 35,  181 => 34,  164 => 30,  147 => 23,  130 => 11,  118 => 101,  116 => 100,  92 => 78,  90 => 65,  87 => 64,  85 => 63,  82 => 62,  80 => 34,  75 => 31,  73 => 30,  65 => 24,  63 => 23,  48 => 11,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- _      _ _                _____          _             _        _
    | |    (_) |              / ____|        | |           | |      | |
\t| |     _| |__   ___ _ __| |     ___   __| | _____  __ | | _____| |__
\t| |    | | '_ \\ / _ \\ '__| |    / _ \\ / _` |/ _ \\ \\/ / | |/ / __| '_ \\
\t| |____| | |_) |  __/ |  | |___| (_) | (_| |  __/>  < _|   <\\__ \\ | | |
\t|______|_|_.__/ \\___|_|   \\_____\\___/ \\__,_|\\___/_/\\_(_)_|\\_\\___/_| |_|-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>

        <!-- @Google Icon Font -->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!-- @materialize -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
        <!-- @personal style -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/style_gen.css\"  media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/custom_style_materialize.css\"  media=\"screen,projection\"/>
        <!-- @prism -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/prism.css\"/>

        {% block stylesheets %}{% endblock %}

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    </head>
    <body>
        {% block header %}{% endblock %}


        <div id=\"nav\">
            {% block nav %}
            <!--navbar-->
            <nav class=\"pushpin pin-bottom\" data-target=\"nav\" id=\"spy\">
                <div class=\"nav-wrapper pushpin\" data-target=\"top\">
                    <a href=\"#\" class=\"brand-logo center\">mayday<span class=\"blink\">_</span></a>
                    <a href=\"#\" data-target=\"slide-out\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
                    <ul class=\"left hide-on-med-and-down\">
                        <li><a href=\"#je_fait\">Je fais</a></li>
                        <li><a href=\"#je_suis\">Je suis</a></li>
                        <li><a href=\"#a_propos\">A propos</a></li>
                        <li><a href=\"#blog\">Blog</a></li>
                        <li><a href=\"#blog\">Notes</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                </div>
            </nav>

            <!--Mobile structure-->
            <ul class=\"sidenav\" id=\"slide-out\">
                <li><a href=\"#je_fait\">Je fais</a></li>
                <li><a href=\"#je_suis\">Je suis</a></li>
                <li><a href=\"#a_propos\">A propos</a></li>
                <li><a href=\"#blog\">Blog</a></li>
                <li><a href=\"#blog\">Notes</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
            <!--navbar end-->
            {% endblock %}

            {% block body %}{% endblock %}

            {% block footer %}
                <!--Footer-->
                <div class=\"row footer\">
                    <div class=\"col s12 center-align\">
                        <div class=\"col s4 offset-s4 divider pink-p\"></div>
                        <p><i>That's all folks!</i></p>
                    </div>
                    <div class=\"col s12 center-align\">
                        <p>© Alan Bouteiller - 2019</p>
                    </div>
                </div>
                <!--Footer end-->
            {% endblock %}

            <!--Action button-->
            <div class=\"fixed-action-btn hide\" id=\"btn-spy\">
                <a class=\"btn-floating btn-large backGreen waves-effect waves-light\" href=\"#home\">
                    <i class=\"large material-icons\">arrow_drop_up</i>
                </a>
            </div>

        </div>

        <!--JavaScript-->
        <!--@Jquery-->
        <script type=\"text/javascript\" src=\"../js/jquery.js\"></script>
        <!--@materialize-->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
        <!--@prism component-->
        <script type=\"text/javascript\" src=\"../js/prism.js\"></script>
        <!--@materialize component-->
        <script type=\"text/javascript\" src=\"../js/init.js\"></script>
        <!--@custom component and object-->
        <script type=\"text/javascript\" src=\"../js/custom.js\"></script>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "P:\\Developer_Tools\\laragon\\www\\siteperso\\templates\\base.html.twig");
    }
}
