<?php

/* materialize_layout.html.twig */
class __TwigTemplate_597e127fdbb8196b9296df107fd2e45b156520648459ba8bbd2dd5412ed683b5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "materialize_layout.html.twig", 3);
        $this->blocks = [
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_row' => [$this, 'block_form_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'range_widget' => [$this, 'block_range_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_form_start($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 8
        echo "    <div class=\"row\">
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_form_end($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 13
        echo "    ";
        $this->displayParentBlock("form_end", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_form_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 20
        echo "        <div class=\"input-field\" ";
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 20, $this->source); })()) == "range"))) {
            echo " style=\"margin-top:0\" ";
        }
        echo ">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), 'widget');
        echo "
            ";
        // line 22
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 22, $this->source); })()), [0 => "file", 1 => "range", 2 => "hidden"]))) {
            // line 23
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'label');
            echo "
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), 'errors');
            echo "
            ";
        }
        // line 26
        echo "        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_checkbox_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 30
        echo "<div class=\"input-field\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_form_errors($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 38
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 38, $this->source); })())) > 0)) {
            // line 39
            echo "<span class=\"helper-text\"";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 41
                echo "data-error=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", []), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</span>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 49
        echo "    ";
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 49, $this->source); })()), [0 => "file", 1 => "range", 2 => "hidden"]))) {
            // line 50
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 50, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "validate")) : ("validate")))]);
            // line 51
            echo "        ";
            if ((isset($context["prefix"]) || array_key_exists("prefix", $context))) {
                // line 52
                echo "            <i class=\"material-icons prefix\">";
                echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "</i>
        ";
            }
            // line 54
            echo "        ";
            if (((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context)) && ((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 54, $this->source); })()) == "true"))) {
                // line 55
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " autocomplete"))]);
                // line 56
                echo "        ";
            }
            // line 57
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 57, $this->source); })())) > 0)) {
                // line 58
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 58, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " invalid"))]);
                // line 59
                echo "        ";
            }
            // line 60
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "any", true, true)) {
                // line 61
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 61, $this->source); })()), ["data-length" => twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 61, $this->source); })()), "maxlength", [])]);
                // line 62
                echo "        ";
            }
            // line 63
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } elseif ((        // line 64
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 64, $this->source); })()) == "file")) {
            // line 65
            echo "        ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 65, $this->source); })()));
            // line 66
            echo "        <div class=\"file-field input-field\">
            <div class=\"btn\">
                <span>";
            // line 68
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 68, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 68, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 68, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 68, $this->source); })())))), "html", null, true);
            echo "</span>
                <input type=\"file\">
            </div>
            <div class=\"file-path-wrapper\">
                <input class=\"file-path validate\" type=\"text\">
            </div>
        </div>
    ";
        } elseif ((        // line 75
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 75, $this->source); })()) == "range")) {
            // line 76
            echo "        ";
            $this->displayBlock("range_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 78
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 80
        echo "    ";
        if ((( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new Twig_Error_Runtime('Variable "help" does not exist.', 80, $this->source); })())) || (isset($context["help_error"]) || array_key_exists("help_error", $context))) || (isset($context["help_success"]) || array_key_exists("help_success", $context)))) {
            // line 81
            echo "        <span class=\"helper-text\"
            ";
            // line 82
            if ((isset($context["help_error"]) || array_key_exists("help_error", $context))) {
                // line 83
                echo "                data-error=\"";
                echo twig_escape_filter($this->env, (isset($context["help_error"]) || array_key_exists("help_error", $context) ? $context["help_error"] : (function () { throw new Twig_Error_Runtime('Variable "help_error" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "\"
            ";
            }
            // line 85
            echo "            ";
            if ((isset($context["help_success"]) || array_key_exists("help_success", $context))) {
                // line 86
                echo "                  data-success=\"";
                echo twig_escape_filter($this->env, (isset($context["help_success"]) || array_key_exists("help_success", $context) ? $context["help_success"] : (function () { throw new Twig_Error_Runtime('Variable "help_success" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "\">
            ";
            }
            // line 88
            echo "            ";
            if ((isset($context["help"]) || array_key_exists("help", $context))) {
                // line 89
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new Twig_Error_Runtime('Variable "help" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "
            ";
            }
            // line 91
            echo "        </span>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_textarea_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 97
        echo "    ";
        if ((isset($context["prefix"]) || array_key_exists("prefix", $context))) {
            // line 98
            echo "        <i class=\"material-icons prefix\">";
            echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 98, $this->source); })()), "html", null, true);
            echo "</i>
    ";
        }
        // line 100
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 100, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "materialize-textarea validate")) : ("materialize-textarea validate")))]);
        // line 101
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 101, $this->source); })())) > 0)) {
            // line 102
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 102, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " invalid"))]);
            // line 103
            echo "    ";
        }
        // line 104
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 109
        echo "    ";
        $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 109, $this->source); })()));
        // line 110
        echo "    <p>
        <label>
            <input type=\"checkbox\" ";
        // line 112
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 112, $this->source); })())) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <span>";
        // line 113
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 113, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 113, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 113, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 113, $this->source); })())))), "html", null, true);
        echo "</span>
        </label>
    </p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_range_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 120
        echo "    ";
        if ((isset($context["prefix"]) || array_key_exists("prefix", $context))) {
            // line 121
            echo "        <i class=\"material-icons prefix\">";
            echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 121, $this->source); })()), "html", null, true);
            echo "</i>
    ";
        }
        // line 123
        echo "    <div class=\"range_label\">
        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), 'label');
        echo "
    </div>
    <div class=\"range_content\">
        <p class=\"range-field\">
            <input type=\"range\" ";
        // line 128
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo " />
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "materialize_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 128,  442 => 124,  439 => 123,  433 => 121,  430 => 120,  421 => 119,  407 => 113,  395 => 112,  391 => 110,  388 => 109,  379 => 108,  366 => 104,  363 => 103,  360 => 102,  357 => 101,  354 => 100,  348 => 98,  345 => 97,  336 => 96,  324 => 91,  318 => 89,  315 => 88,  309 => 86,  306 => 85,  300 => 83,  298 => 82,  295 => 81,  292 => 80,  286 => 78,  280 => 76,  278 => 75,  268 => 68,  264 => 66,  261 => 65,  259 => 64,  254 => 63,  251 => 62,  248 => 61,  245 => 60,  242 => 59,  239 => 58,  236 => 57,  233 => 56,  230 => 55,  227 => 54,  221 => 52,  218 => 51,  215 => 50,  212 => 49,  203 => 48,  192 => 43,  184 => 41,  180 => 40,  178 => 39,  176 => 38,  167 => 37,  154 => 31,  151 => 30,  142 => 29,  131 => 26,  126 => 24,  121 => 23,  119 => 22,  115 => 21,  108 => 20,  99 => 19,  85 => 13,  76 => 12,  64 => 9,  61 => 8,  52 => 7,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Based on div layout #}
{# Work with materialize 1.0.0 #}
{% extends 'form_div_layout.html.twig' %}

{# @form #}
{# put the form in the div.row #}
{% block form_start %}
    <div class=\"row\">
    {{ parent() }}
{% endblock form_start %}

{% block form_end %}
    {{ parent() }}
    </div>
{% endblock form_end %}

{# @row #}
{# put the row in the div.input-field #}
{% block form_row %}
        <div class=\"input-field\" {% if type is defined and type == 'range' %} style=\"margin-top:0\" {% endif %}>
            {{ form_widget(form) }}
            {% if type is not defined or type not in ['file', 'range', 'hidden'] %}
                {{ form_label(form) }}
                {{ form_errors(form) }}
            {% endif %}
        </div>
{% endblock form_row %}

{% block checkbox_row -%}
    <div class=\"input-field\">
        {{ form_widget(form) }}
    </div>
{% endblock checkbox_row %}

{# @widget #}
{# @error #}
{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <span class=\"helper-text\"
            {%- for error in errors -%}
                  data-error=\"{{ error.message }}\"
            {%- endfor -%}
        </span>
    {%- endif -%}
{%- endblock form_errors -%}

{# @input #}
{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'range', 'hidden'] %}
        {% set attr = attr|merge({class: (attr.class|default('validate'))|trim}) %}
        {% if prefix is defined %}
            <i class=\"material-icons prefix\">{{ prefix }}</i>
        {% endif %}
        {% if autocomplete is defined and autocomplete == 'true' %}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' autocomplete')|trim}) %}
        {% endif %}
        {% if errors|length > 0 %}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' invalid')|trim}) %}
        {% endif %}
        {% if attr.maxlength is defined %}
            {% set attr = attr|merge({'data-length': attr.maxlength}) %}
        {% endif %}
        {{ parent() }}
    {% elseif type == 'file' %}
        {% set label = name|humanize %}
        <div class=\"file-field input-field\">
            <div class=\"btn\">
                <span>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</span>
                <input type=\"file\">
            </div>
            <div class=\"file-path-wrapper\">
                <input class=\"file-path validate\" type=\"text\">
            </div>
        </div>
    {% elseif type == 'range' %}
        {{ block('range_widget') }}
    {% else %}
        {{ parent() }}
    {% endif %}
    {% if help is not empty or help_error is defined or help_success is defined %}
        <span class=\"helper-text\"
            {% if help_error is defined %}
                data-error=\"{{ help_error }}\"
            {% endif %}
            {% if help_success is defined %}
                  data-success=\"{{ help_success }}\">
            {% endif %}
            {% if help is defined %}
                {{ help }}
            {% endif %}
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{# @textarea #}
{% block textarea_widget %}
    {% if prefix is defined %}
        <i class=\"material-icons prefix\">{{ prefix }}</i>
    {% endif %}
    {% set attr = attr|merge({class: (attr.class|default('materialize-textarea validate'))|trim}) %}
    {% if errors|length > 0 %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' invalid')|trim}) %}
    {% endif %}
    {{ parent() }}
{% endblock textarea_widget %}

{# @checkbox #}
{% block checkbox_widget %}
    {% set label = name|humanize %}
    <p>
        <label>
            <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
            <span>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</span>
        </label>
    </p>
{% endblock checkbox_widget %}

{# @range #}
{% block range_widget %}
    {% if prefix is defined %}
        <i class=\"material-icons prefix\">{{ prefix }}</i>
    {% endif %}
    <div class=\"range_label\">
        {{ form_label(form) }}
    </div>
    <div class=\"range_content\">
        <p class=\"range-field\">
            <input type=\"range\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %} />
        </p>
    </div>
{% endblock range_widget %}
", "materialize_layout.html.twig", "P:\\Developer_Tools\\laragon\\www\\siteperso\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\materialize_layout.html.twig");
    }
}
