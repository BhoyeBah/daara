<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* registration/register.html.twig */
class __TwigTemplate_38dce160e8c43a4732d97145bc19f6f2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
\t<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

\t<!-- Site favicon -->
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"vendors/images/apple-touch-icon.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"vendors/images/favicon-32x32.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"vendors/images/favicon-16x16.png\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/core.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/icon-font.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/style.css\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>
<body class=\"login-page\">
\t<div class=\"login-header box-shadow\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t<img src=\"vendors/images/deskapp-logo.svg\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"login-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield " \">Se connecter</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"login-wrap d-flex align-items-center flex-wrap justify-content-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-7\">
\t\t\t\t\t<img src=\"vendors/images/login-page-img.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t<div class=\"login-box bg-white box-shadow border-radius-10\">
\t\t\t\t\t\t<div class=\"login-title\">
\t\t\t\t\t\t\t<h2 class=\"text-center text-success\">Inscription</h2>
\t\t\t\t\t\t</div>          
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 61
            yield "                            <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                        
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), 'errors');
        yield "

                        ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), 'form_start');
        yield "
                        
                        <div class=\"form-group\">
                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "nom", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "nom", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "prenom", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "prenom", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "telephone", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "telephone", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "adresse", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "adresse", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "plainPassword", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "plainPassword", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        yield "
                        </div>

                        <div class=\"form-check\">
                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "agreeTerms", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "agreeTerms", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
                        </div>

                        <button type=\"submit\" class=\"btn btn-success btn-block\">S'inscrire</button>
                        ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 104, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<!-- js -->
\t<script src=\"vendors/scripts/core.js\"></script>
\t<script src=\"vendors/scripts/script.min.js\"></script>
\t<script src=\"vendors/scripts/process.js\"></script>
\t<script src=\"vendors/scripts/layout-settings.js\"></script>
\t<script src=\"src/plugins/jquery-steps/jquery.steps.js\"></script>
\t<script src=\"vendors/scripts/steps-setting.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  216 => 104,  209 => 100,  205 => 99,  198 => 95,  194 => 94,  187 => 90,  183 => 89,  176 => 85,  172 => 84,  165 => 80,  161 => 79,  154 => 75,  150 => 74,  143 => 70,  139 => 69,  133 => 66,  128 => 64,  125 => 63,  116 => 61,  112 => 60,  92 => 43,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

\t<!-- Site favicon -->
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"vendors/images/apple-touch-icon.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"vendors/images/favicon-32x32.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"vendors/images/favicon-16x16.png\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/core.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/icon-font.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/style.css\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>
<body class=\"login-page\">
\t<div class=\"login-header box-shadow\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t<img src=\"vendors/images/deskapp-logo.svg\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"login-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ path('app_login')}} \">Se connecter</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"login-wrap d-flex align-items-center flex-wrap justify-content-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-7\">
\t\t\t\t\t<img src=\"vendors/images/login-page-img.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t<div class=\"login-box bg-white box-shadow border-radius-10\">
\t\t\t\t\t\t<div class=\"login-title\">
\t\t\t\t\t\t\t<h2 class=\"text-center text-success\">Inscription</h2>
\t\t\t\t\t\t</div>          
                        {% for flash_error in app.flashes('verify_email_error') %}
                            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                        {% endfor %}
                        
                        {{ form_errors(registrationForm) }}

                        {{ form_start(registrationForm) }}
                        
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.nom, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.prenom, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.email, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.telephone, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Téléphone'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.adresse, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.plainPassword, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}}) }}
                        </div>

                        <div class=\"form-check\">
                            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                            {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'form-check-label'}}) }}
                        </div>

                        <button type=\"submit\" class=\"btn btn-success btn-block\">S'inscrire</button>
                        {{ form_end(registrationForm) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<!-- js -->
\t<script src=\"vendors/scripts/core.js\"></script>
\t<script src=\"vendors/scripts/script.min.js\"></script>
\t<script src=\"vendors/scripts/process.js\"></script>
\t<script src=\"vendors/scripts/layout-settings.js\"></script>
\t<script src=\"src/plugins/jquery-steps/jquery.steps.js\"></script>
\t<script src=\"vendors/scripts/steps-setting.js\"></script>
</body>
</html>
", "registration/register.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\registration\\register.html.twig");
    }
}
