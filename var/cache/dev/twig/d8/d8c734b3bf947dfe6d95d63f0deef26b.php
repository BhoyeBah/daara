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

/* home/dashboard_admin.html.twig */
class __TwigTemplate_2ec8f78f624363da04d7d31bb514d2d4 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard_admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/dashboard_admin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tableau de board!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "\t\t\t<div class=\"card-box pd-20 height-100-p mb-30\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"vendors/images/banner-img.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
\t\t\t\t\t\t\tBienvenue Monsieur
                             <div class=\"weight-600 font-30 text-blue\">
                                ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15), "html", null, true);
        yield "
                            </div>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"font-18 max-width-600\">Vous êtes connecté en tant qu'
\t\t\t\t\t\t\t <strong>
\t\t\t\t\t\t\t ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 21
            yield "\t\t\t\t\t\t\t";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 22
                yield "\t\t\t\t\t\t\t\tAdministrateur
\t\t\t\t\t\t\t";
            } elseif ((            // line 23
$context["role"] == "ROLE_ENCADREUR")) {
                // line 24
                yield "\t\t\t\t\t\t\t\tEncadreur
\t\t\t\t\t\t\t";
            }
            // line 26
            yield "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "\t\t\t\t\t\t\t</strong>!
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"xs-pd-20-10 pd-ltr-20\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h4>Dashboard</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Dashboard</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\tSelectionnez un mois
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 1]);
        yield "\">Janvier</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 2]);
        yield "\">Février</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 3]);
        yield "\">Mars</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 4]);
        yield "\">Avril</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 5]);
        yield "\">Mai</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 6]);
        yield "\">Juin</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 7]);
        yield "\">Juillet</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 8]);
        yield "\">Août</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 9]);
        yield "\">Septembre</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 10]);
        yield "\">Octobre</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 11]);
        yield "\">Novembre</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["mois" => 12]);
        yield "\">Décembre</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dahiraCount"]) || array_key_exists("dahiraCount", $context) ? $context["dahiraCount"] : (function () { throw new RuntimeError('Variable "dahiraCount" does not exist.', 78, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Dahiras</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["membreCount"]) || array_key_exists("membreCount", $context) ? $context["membreCount"] : (function () { throw new RuntimeError('Variable "membreCount" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Membres</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart3\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["encadreurCount"]) || array_key_exists("encadreurCount", $context) ? $context["encadreurCount"] : (function () { throw new RuntimeError('Variable "encadreurCount" does not exist.', 104, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Encadreur</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart4\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Reunions/Dahiras</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- <div class=\"row\">
\t\t\t\t<div class=\"col-xl-8 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p pd-20\">
\t\t\t\t\t\t<h2 class=\"h4 mb-20\">Activity</h2>
\t\t\t\t\t\t<div id=\"chart5\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p pd-20\">
\t\t\t\t\t\t<h2 class=\"h4 mb-20\">Lead Target</h2>
\t\t\t\t\t\t<div id=\"chart6\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/dashboard_admin.html.twig";
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
        return array (  280 => 117,  264 => 104,  248 => 91,  232 => 78,  215 => 64,  211 => 63,  207 => 62,  203 => 61,  199 => 60,  195 => 59,  191 => 58,  187 => 57,  183 => 56,  179 => 55,  175 => 54,  171 => 53,  143 => 27,  137 => 26,  133 => 24,  131 => 23,  128 => 22,  125 => 21,  121 => 20,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de board!{% endblock %}

{% block body %}
\t\t\t<div class=\"card-box pd-20 height-100-p mb-30\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"vendors/images/banner-img.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
\t\t\t\t\t\t\tBienvenue Monsieur
                             <div class=\"weight-600 font-30 text-blue\">
                                {{ app.user.nom }} {{ app.user.prenom }}
                            </div>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"font-18 max-width-600\">Vous êtes connecté en tant qu'
\t\t\t\t\t\t\t <strong>
\t\t\t\t\t\t\t {% for role in app.user.roles %}
\t\t\t\t\t\t\t{% if role == 'ROLE_ADMIN' %}
\t\t\t\t\t\t\t\tAdministrateur
\t\t\t\t\t\t\t{% elseif role == 'ROLE_ENCADREUR' %}
\t\t\t\t\t\t\t\tEncadreur
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</strong>!
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"xs-pd-20-10 pd-ltr-20\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h4>Dashboard</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Dashboard</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\tSelectionnez un mois
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 1 }) }}\">Janvier</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 2 }) }}\">Février</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 3 }) }}\">Mars</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 4 }) }}\">Avril</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 5 }) }}\">Mai</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 6 }) }}\">Juin</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 7 }) }}\">Juillet</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 8 }) }}\">Août</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 9 }) }}\">Septembre</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 10 }) }}\">Octobre</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 11 }) }}\">Novembre</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home', { mois: 12 }) }}\">Décembre</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">{{ dahiraCount }}</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Dahiras</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">{{ membreCount }}</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Membres</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart3\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">{{ encadreurCount }}</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Encadreur</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart4\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">{{ ratio }}</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Reunions/Dahiras</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- <div class=\"row\">
\t\t\t\t<div class=\"col-xl-8 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p pd-20\">
\t\t\t\t\t\t<h2 class=\"h4 mb-20\">Activity</h2>
\t\t\t\t\t\t<div id=\"chart5\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p pd-20\">
\t\t\t\t\t\t<h2 class=\"h4 mb-20\">Lead Target</h2>
\t\t\t\t\t\t<div id=\"chart6\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> -->

{% endblock %}
", "home/dashboard_admin.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\home\\dashboard_admin.html.twig");
    }
}
