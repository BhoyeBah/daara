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

/* membres/edit.html.twig */
class __TwigTemplate_a09091c5722cc3eefc933a92753df678 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membres/edit.html.twig", 1);
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

        yield "Modifier un membres";
        
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
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12\">
            <div class=\"title\">
                <h4>Formulaire de modification</h4>
            </div>
            <nav aria-label=\"breadcrumb\" role=\"navigation\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formulaire de modification d'un membre</li>
                </ol>
            </nav>
        </div>
        <div class=\"col-md-6 col-sm-12 text-right\">
            <a class=\"btn btn-success\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_index");
        yield "\">
                Liste des membress
            </a>
        </div>
    </div>
</div>

<div class=\"pd-20 card-box mb-30\">
    <div class=\"clearfix\">
        <div class=\"pull-left\">
            <h4 class=\"text-success h4\">Modifier un membres</h4>
            <p class=\"mb-30\">Veuillez remplir les informations ci-dessous</p>
        </div>
    </div>

    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "membres/_form.html.twig", ["button_label" => "Modifier"]);
        yield "
</div>

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
        return "membres/edit.html.twig";
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
        return array (  134 => 35,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un membres{% endblock %}

{% block body %}
<div class=\"page-header\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12\">
            <div class=\"title\">
                <h4>Formulaire de modification</h4>
            </div>
            <nav aria-label=\"breadcrumb\" role=\"navigation\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formulaire de modification d'un membre</li>
                </ol>
            </nav>
        </div>
        <div class=\"col-md-6 col-sm-12 text-right\">
            <a class=\"btn btn-success\" href=\"{{ path('app_membres_index') }}\">
                Liste des membress
            </a>
        </div>
    </div>
</div>

<div class=\"pd-20 card-box mb-30\">
    <div class=\"clearfix\">
        <div class=\"pull-left\">
            <h4 class=\"text-success h4\">Modifier un membres</h4>
            <p class=\"mb-30\">Veuillez remplir les informations ci-dessous</p>
        </div>
    </div>

    {{ include('membres/_form.html.twig', {'button_label': 'Modifier'}) }}
</div>

{% endblock %}
", "membres/edit.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\membres\\edit.html.twig");
    }
}
