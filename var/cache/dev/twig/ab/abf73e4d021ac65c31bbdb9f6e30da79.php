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

/* membres/show.html.twig */
class __TwigTemplate_07a6ea678b03af819f6a6b2496823223 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membres/show.html.twig", 1);
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

        yield "membre";
        
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
\t\t\t\t\t<h4>Details du membre ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), "html", null, true);
        yield "</h4>
\t\t\t\t</div>
\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Information du membre</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t    <div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_index");
        yield "\">
\t\t\t\t\t\tListe des membres
\t\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
        <div class=\"demo-inline-spacing mt-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex align-items-center\">
                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Prénom: </strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield "
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Adresse: </strong> ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 36, $this->source); })()), "adresse", [], "any", false, false, false, 36), "html", null, true);
        yield "
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Téléphone: </strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 40, $this->source); })()), "telephone", [], "any", false, false, false, 40), "html", null, true);
        yield "
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Email : </strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), "html", null, true);
        yield "
                </li>              
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Dahira : </strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 48, $this->source); })()), "dahiras", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
        yield "
                </li>

                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 51, $this->source); })()), "specialite", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
            // line 52
            yield "                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Profession : </strong> ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["specialite"], "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "
                </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['specialite'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "

";
        // line 61
        yield "
";
        // line 66
        yield "
";
        // line 69
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
        return "membres/show.html.twig";
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
        return array (  201 => 69,  198 => 66,  195 => 61,  191 => 58,  181 => 54,  177 => 52,  173 => 51,  167 => 48,  160 => 44,  153 => 40,  146 => 36,  139 => 32,  132 => 28,  121 => 20,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}membre{% endblock %}

{% block body %}
<div class=\"page-header\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Details du membre {{membre.nom}} {{membre.prenom}}</h4>
\t\t\t\t</div>
\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Information du membre</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t    <div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('app_membres_index') }}\">
\t\t\t\t\t\tListe des membres
\t\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
        <div class=\"demo-inline-spacing mt-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex align-items-center\">
                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> {{ membre.nom}}
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Prénom: </strong> {{ membre.prenom}}
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Adresse: </strong> {{ membre.adresse}}
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Téléphone: </strong> {{ membre.telephone}}
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Email : </strong> {{ membre.email}}
                </li>              
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Dahira : </strong> {{ membre.dahiras.nom}}
                </li>

                {% for specialite in membre.specialite %}
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-align-left me-2\"></i> Profession : </strong> {{ specialite.nom}}
                </li>

                {% endfor %}


{#                <li class=\"list-group-item d-flex align-items-center\">#}

{#                <strong class=\"mx-3\"> <i class=\"bx bx-calendar me-2\"></i> Date de création: </strong>#}
{#                {{ membre.createdAt ? membre.createdAt|date('Y-m-d H:i:s') : '' }}#}
{#                </li>#}
{#                <li class=\"list-group-item d-flex align-items-center\">#}

{#                <strong class=\"mx-3\"><i class=\"bx bx-calendar-edit me-2\"></i> Date de modification:</strong>#}
{#                {{ membre.updatedAt ? membre.updatedAt|date('Y-m-d H:i:s') : '' }}#}
            </ul>
        </div>
    </div>

\t</div>
        
{% endblock %}
", "membres/show.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\membres\\show.html.twig");
    }
}
