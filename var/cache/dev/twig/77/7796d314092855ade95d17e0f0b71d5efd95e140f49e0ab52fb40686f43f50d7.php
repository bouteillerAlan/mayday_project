<?php

/* pages/home.html.twig */
class __TwigTemplate_974debc64c29809d618c3af76e204617319b2fb9d1c4f51424e91b6422665548 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <!--heros-->
    <div class=\"row fullHeight\">
        <div class=\"col offset-m4 m6 s12 hero valign-wrapper\">
            <div> <!--This div debug text position-->
                <h2 class=\"blur\">Alan Bouteiller</h2>
                <h1><span class=\"greenP\">Developpeur</span><br/><span class=\"yellow-text\">& amateur de stout</span></h1>
                <div class=\"divider\"></div>
                <blockquote>
                    La passion au service de vos <span>idées</span>, <span>projets</span>, <span>clients</span> et <span>utilisateurs</span>.
                </blockquote>
            </div>
        </div>
        <div class=\"col s12 center-align drop\">
            <p>See below</p>
            <p><i class=\"material-icons\">arrow_drop_down</i></p>
        </div>
    </div>
    <!--heros end-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "<!--content-->
<div class=\"row\">
    <div class=\"col s12 center-align actu\" id=\"home\">
        <p><i>Actuellement je suis en recherche de missions. <a class=\"show\" href=\"#contact\">Me contacter.</a></i></p>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"je_fait\">
        <h3 class=\"pinkP\">Ce que je fais ?</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Améliorer des choses.</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Améliorer des choses.</h4>
        <p>Je peux vous aider pour les petites choses comme pour les grandes.</p>
        <h4>Depuis le <span class=\"code\">#!</span></h4>
        <ul class=\"browser-default\">
            <li>Integrations/front-end</li>
            <li>Back-end</li>
            <li>Référencement naturel</li>
            <li>Gestions des données</li>
            <li>Transformation des données</li>
        </ul>
        <h4>Jusqu'au <span class=\"code\">.style {}</span></h4>
        <ul class=\"browser-default\">
            <li>Responsive design</li>
            <li>Flat design</li>
        </ul>
        <h4>(^_^)b</h4>
        <p>Vous n'êtes pas sûr de savoir ce que vous voulez? Je peux vous aider aussi!</p>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"je_suis\">
        <h3 class=\"blueP\">Qui je suis ?</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Tl;dr</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Tl;dr</h4>
        <p>
            Bordelais de vie, Normand de naissance et Breton de coeur, concepteur-dévellopeur professionnel, <a class=\"show\" href=\"https://fr.wikipedia.org/wiki/Bi%C3%A9rologie\" target=\"_blank\">zythologue</a> amateur, mordu de sport, passionné de code et du web,
            <span class=\"show\" onclick=\"var mess = new message('a', 'J\\'aime apprendre de nouvelles choses, j\\'ai fait de nombreux mooc : Design, Langage de programation, Dessin 3D, Entreprenariat, Big Data, RH, ...');\">touche-à-tout</span>
            et amoureux des crêpes.
        </p>
        <p id=\"a\"></p>

        <h4>Histoire</h4>
        <p>Electricien de
            <span class=\"show\" onclick=\"var mess = new message('b', 'BEP et BAC PRO ainsi que plusieurs chantiers en solitaire à mon actif (conception des plans jusqu\\'au consuel). L\\'entreprise (milon3j) chez qui j\\'ai passé mes 4 ans de scolarité m\\'a appris le gout du travail bien fait.');\">formation</span> je suis rentré à
            <span class=\"show\" onclick=\"var mess = new message('b', 'Ecole des sous-officer d\\'active de Saint-Maixent-l\\'École.');\">l'armée</span> puis j'ai passé un
            <span class=\"show\" onclick=\"var mess = new message('b', 'Diplôme de niveau 3 au site informatique à Bordeaux.');\">diplôme</span> dans les \"réseaux informatiques en entreprise\" pour finir par apprendre tout ce que je sais aujourd'hui
            <span class=\"show\" onclick=\"var mess = new message('b', 'Depuis mon entrée au collège, après avoir fini de bidouiller avec un vieux xp et linux, j\\'ai fini par m\\'intéresser au code et à la programation en général. Merci à (rip) Le site du Zero, devellopez.com et grafikart.fr.');\">tout seul grâce au web</span>.
        </p>
        <p id=\"b\"></p>

        <h4>Intérêts</h4>
        <p>
            Je suis passioné du web depuis très longtemps, de simulateur de vol également, je me suis énormément formé tout seul car mon grand intéret dans la vie c'est d'apprendre dès qu'un sujet m'intéresse!<br/>
            Pour cela je me sers de tout ce que l'on trouve sur des sites tels que openclassroom, developpez ou bien d'autres et également de tout ce qui peut exister sur le net!
            Je m'intéresse aussi à la zythologie (<a class=\"show\" href=\"https://fr.wikipedia.org/wiki/Bi%C3%A9rologie\" target=\"_blank\">wtf?!?</a>) et au café!<br/>
            Je maintiens également ce site qui, je l'espére, pourra en aider certains via mon blog ou mes notes.
        </p>

        <h4>Skills/langages</h4>
        <ul>
            <li>Niveaux :
                <span class=\"new badge home\" data-badge-caption=\"Débutant\"></span>
                <span class=\"new badge home\" data-badge-caption=\"Junior\"></span>
                <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span>
                <span class=\"new badge home\" data-badge-caption=\"Expert\"></span>
            </li>
        </ul>
        <ul class=\"browser-default\">
            <li>Français <span class=\"new badge home\" data-badge-caption=\"Langue de naissance\"></span></li>
            <li>Anglais <span class=\"new badge home\" data-badge-caption=\"Niveau moyen\"></span></li>

            <li>Windows (xp, 7, 10, server) <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Linux (Debian) <span class=\"new badge home\" data-badge-caption=\"Bonnes notions\"></span></li>

            <li>PHPStorm <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Git/GitHub <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>GitKraken <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Composer <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>

            <li>Laragon <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>

            <li>HTML5/CSS3 <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>

            <li>JavaScript <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>
            <li>Python 3<span class=\"new badge home\" data-badge-caption=\"Débutant\"></span></li>

            <li>PHP7 <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>
            <li>POO/Design pattern <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>

            <li>SQL <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>MySQL <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>PhpMyAdmin <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>HeidiSql <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Oracle <span class=\"new badge home\" data-badge-caption=\"Notions\"></span></li>
            <li>Oracle SQL Developer <span class=\"new badge home\" data-badge-caption=\"Notions\"></span></li>
            <li>Teradata <span class=\"new badge home\" data-badge-caption=\"Notions\"></span></li>


            <li>REACT <span class=\"new badge home\" data-badge-caption=\"Intérêt\"></span></li>
            <li>JSX <span class=\"new badge home\" data-badge-caption=\"Intérêt\"></span></li>

            <li>Dart <span class=\"new badge home\" data-badge-caption=\"Intérêt\"></span></li>

            <li>Wordpress <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>Symfony <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>

            <li>Méthode Agile <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>Cycle de vie d'un projet <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>Principe de fonctionnement serveur/réseaux <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>

        </ul>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"a_propos\">
        <h3 class=\"greenP\">A propos</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Vous pouvez mayday?</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Vous pouvez mayday?</h4>
        <p>
            J'ai choisi Mayday car c'est ce que l'on lance à la radio quand l'on est face à un problème majeur (<span class=\"show\" onclick=\"var mess = new message('c', 'Mayday est une expression utilisée internationalement dans les communications radio-téléphoniques pour signaler qu\\'un avion ou qu\\'un bateau est en détresse et que la vie humaine est immédiatement menacée, par exemple en cas d\\'incendie à bord, ou de naufrage.')\">et souvent très grave</span>).
            Et j'ai la conviction que mon blog ou mes notes peuvent aider d'autre personnes que ma propre mémoire (:
        </p>
        <p id=\"c\"></p>
        <h4>Mes notes</h4>
        <p>Mes notes sont juste la retranscription \"informatique\" et \"en ligne\" de celles que j'ai prise lors d'un cours, mooc, ou apprentissage.</p>
        <h4>Le blog</h4>
        <p>Le blog me permet de noter des solutions à certains problèmes rencontrés ou encore d'écrire des petits textes très courts sur des actualités qui m'intéresse ou d'en faire un signalement.</p>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"blog\">
        <h3 class=\"yellowP\">Blog/Notes</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Où est-il</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Où est-il</h4>
        <p>Le site est actuellement en reconstruction même du côté du back!<br/>
            En effet je souhaite passer tout le système de mon site sur une API Rest Symfony et React.</p>
        <p>Vous pouvez cependant retrouver les derniers billets de blog ici : </p>
        <!--POST-->
        <ul>

            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 175
            echo "                <li>
                    <a class=\"show\" href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog.unique", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", []), "slug" => twig_get_attribute($this->env, $this->source, $context["data"], "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["data"], "title", []);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
        </ul>
        <!--POST END-->
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"contact\">
        <h3 class=\"blueP\">Rencontrez moi!</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Pour un café, ou un projet!</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Pour un café, ou un projet!</h4>
        ";
        // line 190
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 190, $this->source); })()), 'form_start');
        echo "
            <div class=\"col s12 m6\">";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 191, $this->source); })()), "lastname", []), 'row');
        echo "</div>
            <div class=\"col s12 m6\">";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 192, $this->source); })()), "firstname", []), 'row');
        echo "</div>
            <div class=\"col s12 m12\">";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->source); })()), "email", []), 'row');
        echo "</div>
            <div class=\"col s12 m12\">";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 194, $this->source); })()), "message", []), 'row');
        echo "</div>
            <div class=\"col s12\">

                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Envoyer
                    <i class=\"material-icons right\">send</i>
                </button>

                ";
        // line 201
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 201, $this->source); })()), "vars", []), "valid", [])) {
            // line 202
            echo "                    <div class=\"col s12 red flash-card\">
                        <p class=\"valign-wrapper\">
                            <i class=\"material-icons\">layers_clear</i>Il y a une erreur
                        </p>
                    </div>
                ";
        }
        // line 208
        echo "
                ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 209, $this->source); })()), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 210
            echo "                    <div class=\"col s12 green flash-card\">
                        <p class=\"valign-wrapper\">
                            <i class=\"material-icons\">layers</i>";
            // line 212
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "
            </div>
        ";
        // line 218
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 218, $this->source); })()), 'form_end');
        echo "
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 218,  346 => 216,  336 => 212,  332 => 210,  328 => 209,  325 => 208,  317 => 202,  315 => 201,  305 => 194,  301 => 193,  297 => 192,  293 => 191,  289 => 190,  276 => 179,  265 => 176,  262 => 175,  258 => 174,  112 => 30,  103 => 29,  75 => 9,  66 => 8,  55 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block title %}
    Accueil
{% endblock %}

{% block header %}
    <!--heros-->
    <div class=\"row fullHeight\">
        <div class=\"col offset-m4 m6 s12 hero valign-wrapper\">
            <div> <!--This div debug text position-->
                <h2 class=\"blur\">Alan Bouteiller</h2>
                <h1><span class=\"greenP\">Developpeur</span><br/><span class=\"yellow-text\">& amateur de stout</span></h1>
                <div class=\"divider\"></div>
                <blockquote>
                    La passion au service de vos <span>idées</span>, <span>projets</span>, <span>clients</span> et <span>utilisateurs</span>.
                </blockquote>
            </div>
        </div>
        <div class=\"col s12 center-align drop\">
            <p>See below</p>
            <p><i class=\"material-icons\">arrow_drop_down</i></p>
        </div>
    </div>
    <!--heros end-->
{% endblock %}

{% block body %}
<!--content-->
<div class=\"row\">
    <div class=\"col s12 center-align actu\" id=\"home\">
        <p><i>Actuellement je suis en recherche de missions. <a class=\"show\" href=\"#contact\">Me contacter.</a></i></p>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"je_fait\">
        <h3 class=\"pinkP\">Ce que je fais ?</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Améliorer des choses.</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Améliorer des choses.</h4>
        <p>Je peux vous aider pour les petites choses comme pour les grandes.</p>
        <h4>Depuis le <span class=\"code\">#!</span></h4>
        <ul class=\"browser-default\">
            <li>Integrations/front-end</li>
            <li>Back-end</li>
            <li>Référencement naturel</li>
            <li>Gestions des données</li>
            <li>Transformation des données</li>
        </ul>
        <h4>Jusqu'au <span class=\"code\">.style {}</span></h4>
        <ul class=\"browser-default\">
            <li>Responsive design</li>
            <li>Flat design</li>
        </ul>
        <h4>(^_^)b</h4>
        <p>Vous n'êtes pas sûr de savoir ce que vous voulez? Je peux vous aider aussi!</p>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"je_suis\">
        <h3 class=\"blueP\">Qui je suis ?</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Tl;dr</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Tl;dr</h4>
        <p>
            Bordelais de vie, Normand de naissance et Breton de coeur, concepteur-dévellopeur professionnel, <a class=\"show\" href=\"https://fr.wikipedia.org/wiki/Bi%C3%A9rologie\" target=\"_blank\">zythologue</a> amateur, mordu de sport, passionné de code et du web,
            <span class=\"show\" onclick=\"var mess = new message('a', 'J\\'aime apprendre de nouvelles choses, j\\'ai fait de nombreux mooc : Design, Langage de programation, Dessin 3D, Entreprenariat, Big Data, RH, ...');\">touche-à-tout</span>
            et amoureux des crêpes.
        </p>
        <p id=\"a\"></p>

        <h4>Histoire</h4>
        <p>Electricien de
            <span class=\"show\" onclick=\"var mess = new message('b', 'BEP et BAC PRO ainsi que plusieurs chantiers en solitaire à mon actif (conception des plans jusqu\\'au consuel). L\\'entreprise (milon3j) chez qui j\\'ai passé mes 4 ans de scolarité m\\'a appris le gout du travail bien fait.');\">formation</span> je suis rentré à
            <span class=\"show\" onclick=\"var mess = new message('b', 'Ecole des sous-officer d\\'active de Saint-Maixent-l\\'École.');\">l'armée</span> puis j'ai passé un
            <span class=\"show\" onclick=\"var mess = new message('b', 'Diplôme de niveau 3 au site informatique à Bordeaux.');\">diplôme</span> dans les \"réseaux informatiques en entreprise\" pour finir par apprendre tout ce que je sais aujourd'hui
            <span class=\"show\" onclick=\"var mess = new message('b', 'Depuis mon entrée au collège, après avoir fini de bidouiller avec un vieux xp et linux, j\\'ai fini par m\\'intéresser au code et à la programation en général. Merci à (rip) Le site du Zero, devellopez.com et grafikart.fr.');\">tout seul grâce au web</span>.
        </p>
        <p id=\"b\"></p>

        <h4>Intérêts</h4>
        <p>
            Je suis passioné du web depuis très longtemps, de simulateur de vol également, je me suis énormément formé tout seul car mon grand intéret dans la vie c'est d'apprendre dès qu'un sujet m'intéresse!<br/>
            Pour cela je me sers de tout ce que l'on trouve sur des sites tels que openclassroom, developpez ou bien d'autres et également de tout ce qui peut exister sur le net!
            Je m'intéresse aussi à la zythologie (<a class=\"show\" href=\"https://fr.wikipedia.org/wiki/Bi%C3%A9rologie\" target=\"_blank\">wtf?!?</a>) et au café!<br/>
            Je maintiens également ce site qui, je l'espére, pourra en aider certains via mon blog ou mes notes.
        </p>

        <h4>Skills/langages</h4>
        <ul>
            <li>Niveaux :
                <span class=\"new badge home\" data-badge-caption=\"Débutant\"></span>
                <span class=\"new badge home\" data-badge-caption=\"Junior\"></span>
                <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span>
                <span class=\"new badge home\" data-badge-caption=\"Expert\"></span>
            </li>
        </ul>
        <ul class=\"browser-default\">
            <li>Français <span class=\"new badge home\" data-badge-caption=\"Langue de naissance\"></span></li>
            <li>Anglais <span class=\"new badge home\" data-badge-caption=\"Niveau moyen\"></span></li>

            <li>Windows (xp, 7, 10, server) <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Linux (Debian) <span class=\"new badge home\" data-badge-caption=\"Bonnes notions\"></span></li>

            <li>PHPStorm <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Git/GitHub <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>GitKraken <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Composer <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>

            <li>Laragon <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>

            <li>HTML5/CSS3 <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>

            <li>JavaScript <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>
            <li>Python 3<span class=\"new badge home\" data-badge-caption=\"Débutant\"></span></li>

            <li>PHP7 <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>
            <li>POO/Design pattern <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>

            <li>SQL <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>MySQL <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>PhpMyAdmin <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>HeidiSql <span class=\"new badge home\" data-badge-caption=\"Utilisation courante\"></span></li>
            <li>Oracle <span class=\"new badge home\" data-badge-caption=\"Notions\"></span></li>
            <li>Oracle SQL Developer <span class=\"new badge home\" data-badge-caption=\"Notions\"></span></li>
            <li>Teradata <span class=\"new badge home\" data-badge-caption=\"Notions\"></span></li>


            <li>REACT <span class=\"new badge home\" data-badge-caption=\"Intérêt\"></span></li>
            <li>JSX <span class=\"new badge home\" data-badge-caption=\"Intérêt\"></span></li>

            <li>Dart <span class=\"new badge home\" data-badge-caption=\"Intérêt\"></span></li>

            <li>Wordpress <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>Symfony <span class=\"new badge home\" data-badge-caption=\"Junior\"></span></li>

            <li>Méthode Agile <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>Cycle de vie d'un projet <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>
            <li>Principe de fonctionnement serveur/réseaux <span class=\"new badge home\" data-badge-caption=\"Confirmé\"></span></li>

        </ul>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"a_propos\">
        <h3 class=\"greenP\">A propos</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Vous pouvez mayday?</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Vous pouvez mayday?</h4>
        <p>
            J'ai choisi Mayday car c'est ce que l'on lance à la radio quand l'on est face à un problème majeur (<span class=\"show\" onclick=\"var mess = new message('c', 'Mayday est une expression utilisée internationalement dans les communications radio-téléphoniques pour signaler qu\\'un avion ou qu\\'un bateau est en détresse et que la vie humaine est immédiatement menacée, par exemple en cas d\\'incendie à bord, ou de naufrage.')\">et souvent très grave</span>).
            Et j'ai la conviction que mon blog ou mes notes peuvent aider d'autre personnes que ma propre mémoire (:
        </p>
        <p id=\"c\"></p>
        <h4>Mes notes</h4>
        <p>Mes notes sont juste la retranscription \"informatique\" et \"en ligne\" de celles que j'ai prise lors d'un cours, mooc, ou apprentissage.</p>
        <h4>Le blog</h4>
        <p>Le blog me permet de noter des solutions à certains problèmes rencontrés ou encore d'écrire des petits textes très courts sur des actualités qui m'intéresse ou d'en faire un signalement.</p>
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"blog\">
        <h3 class=\"yellowP\">Blog/Notes</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Où est-il</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Où est-il</h4>
        <p>Le site est actuellement en reconstruction même du côté du back!<br/>
            En effet je souhaite passer tout le système de mon site sur une API Rest Symfony et React.</p>
        <p>Vous pouvez cependant retrouver les derniers billets de blog ici : </p>
        <!--POST-->
        <ul>

            {% for data in result %}
                <li>
                    <a class=\"show\" href=\"{{ path('blog.unique', {id: data.id, slug: data.slug}) }}\">{{ data.title|raw }}</a>
                </li>
            {% endfor %}

        </ul>
        <!--POST END-->
    </div>

    <div class=\"col offset-m2 m4 right-align scrollspy\" id=\"contact\">
        <h3 class=\"blueP\">Rencontrez moi!</h3>
    </div>
    <div class=\"col s12 m4\">
        <h4 class=\"title hide-on-small-only\">Pour un café, ou un projet!</h4>
        <h4 class=\"title-mobile show-on-small hide-on-med-and-up\">Pour un café, ou un projet!</h4>
        {{ form_start(form) }}
            <div class=\"col s12 m6\">{{ form_row(form.lastname) }}</div>
            <div class=\"col s12 m6\">{{ form_row(form.firstname) }}</div>
            <div class=\"col s12 m12\">{{ form_row(form.email) }}</div>
            <div class=\"col s12 m12\">{{ form_row(form.message) }}</div>
            <div class=\"col s12\">

                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Envoyer
                    <i class=\"material-icons right\">send</i>
                </button>

                {% if not form.vars.valid %}
                    <div class=\"col s12 red flash-card\">
                        <p class=\"valign-wrapper\">
                            <i class=\"material-icons\">layers_clear</i>Il y a une erreur
                        </p>
                    </div>
                {% endif %}

                {% for message in app.flashes('success') %}
                    <div class=\"col s12 green flash-card\">
                        <p class=\"valign-wrapper\">
                            <i class=\"material-icons\">layers</i>{{ message }}
                        </p>
                    </div>
                {% endfor %}

            </div>
        {{ form_end(form) }}
    </div>

</div>
{% endblock %}
", "pages/home.html.twig", "P:\\Developer_Tools\\laragon\\www\\siteperso\\templates\\pages\\home.html.twig");
    }
}
