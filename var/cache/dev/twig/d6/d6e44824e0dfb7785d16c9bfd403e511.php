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

/* specialites/show.html.twig */
class __TwigTemplate_1485afbaaf0f0b575b75dec7ca7aea9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specialites/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specialites/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "specialites/show.html.twig", 1);
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

        yield "specialite";
        
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
        yield "<div class=\"page-header\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Details du specialite ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["specialite"]) || array_key_exists("specialite", $context) ? $context["specialite"] : (function () { throw new RuntimeError('Variable "specialite" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield " </h4>
\t\t\t\t</div>
\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Information du specialite</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t    <div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_specialites_index");
        yield "\">
\t\t\t\t\t\tListe des specialites
\t\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
        <div class=\"demo-inline-spacing mt-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex align-items-center\">
                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["specialite"]) || array_key_exists("specialite", $context) ? $context["specialite"] : (function () { throw new RuntimeError('Variable "specialite" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "
                </li>
    
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Description : </strong> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["specialite"]) || array_key_exists("specialite", $context) ? $context["specialite"] : (function () { throw new RuntimeError('Variable "specialite" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
        yield "
                </li>


";
        // line 38
        yield "
";
        // line 43
        yield "
";
        // line 46
        yield "            </ul>
        </div>
    </div>

\t</div>
        
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
        return "specialites/show.html.twig";
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
        return array (  151 => 46,  148 => 43,  145 => 38,  138 => 33,  130 => 28,  119 => 20,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}specialite{% endblock %}

{% block body %}
<div class=\"page-header\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Details du specialite {{specialite.nom}} </h4>
\t\t\t\t</div>
\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Information du specialite</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t    <div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('app_specialites_index') }}\">
\t\t\t\t\t\tListe des specialites
\t\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
        <div class=\"demo-inline-spacing mt-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex align-items-center\">
                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> {{ specialite.nom }}
                </li>
    
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Description : </strong> {{ specialite.description }}
                </li>


{#                <li class=\"list-group-item d-flex align-items-center\">#}

{#                <strong class=\"mx-3\"> <i class=\"bx bx-calendar me-2\"></i> Date de création: </strong>#}
{#                {{ specialite.createdAt ? specialite.createdAt|date('Y-m-d H:i:s') : '' }}#}
{#                </li>#}
{#                <li class=\"list-group-item d-flex align-items-center\">#}

{#                <strong class=\"mx-3\"><i class=\"bx bx-calendar-edit me-2\"></i> Date de modification:</strong>#}
{#                {{ specialite.updatedAt ? specialite.updatedAt|date('Y-m-d H:i:s') : '' }}#}
            </ul>
        </div>
    </div>

\t</div>
        
{% endblock %}
", "specialites/show.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\specialites\\show.html.twig");
    }
}
