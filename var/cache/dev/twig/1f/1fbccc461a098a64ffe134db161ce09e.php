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

/* encadreur/index.html.twig */
class __TwigTemplate_56f663eb54a8e3a8e0d49d10c6d2ebbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encadreur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encadreur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "encadreur/index.html.twig", 1);
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

        yield "Liste des encadreurs";
        
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
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h4>DataTable</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Listes des encadreurs</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12 text-right\">
                    \t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_encadreur_new");
        yield "\" class=\"btn btn-success\">Créer un encadreurs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Simple Datatable start -->
\t\t\t\t<div class=\"card-box mb-30\">
\t\t\t\t\t<div class=\"pd-20\">
\t\t\t\t\t\t<h4 class=\"text-success h4\">Liste des encadreurs</h4>
\t\t\t\t\t\t<!-- <p class=\"mb-0\">you can find more options <a class=\"text-primary\" href=\"https://datatables.net/\" target=\"_blank\">Click Here</a></p> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pb-20\">
\t\t\t\t\t\t<table class=\"data-table table stripe hover nowrap table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t<th>Téléphon</th>
\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["encadreurs"]) || array_key_exists("encadreurs", $context) ? $context["encadreurs"] : (function () { throw new RuntimeError('Variable "encadreurs" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["encadreur"]) {
            // line 44
            yield "                                <tr>
\t\t\t\t\t\t\t\t\t<td class=\"table-plus\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "prenom", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "email", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "telephone", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "adresse", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>
                                        <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_encadreur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                                        <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_encadreur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                               \t\t\t";
            // line 53
            yield Twig\Extension\CoreExtension::include($this->env, $context, "encadreur/_delete_form.html.twig");
            yield "
           \t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            yield "                                <tr>
                                    <td colspan=\"7\">no records found</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['encadreur'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Simple Datatable End -->\t\t
\t\t\t

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
        return "encadreur/index.html.twig";
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
        return array (  218 => 61,  209 => 57,  192 => 53,  188 => 52,  184 => 51,  179 => 49,  175 => 48,  171 => 47,  167 => 46,  163 => 45,  160 => 44,  142 => 43,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des encadreurs{% endblock %}

{% block body %}
<div class=\"page-header\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h4>DataTable</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Listes des encadreurs</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12 text-right\">
                    \t<a href=\"{{ path('app_encadreur_new') }}\" class=\"btn btn-success\">Créer un encadreurs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Simple Datatable start -->
\t\t\t\t<div class=\"card-box mb-30\">
\t\t\t\t\t<div class=\"pd-20\">
\t\t\t\t\t\t<h4 class=\"text-success h4\">Liste des encadreurs</h4>
\t\t\t\t\t\t<!-- <p class=\"mb-0\">you can find more options <a class=\"text-primary\" href=\"https://datatables.net/\" target=\"_blank\">Click Here</a></p> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pb-20\">
\t\t\t\t\t\t<table class=\"data-table table stripe hover nowrap table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t<th>Téléphon</th>
\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
                            {% for encadreur in encadreurs %}
                                <tr>
\t\t\t\t\t\t\t\t\t<td class=\"table-plus\">{{encadreur.nom}}</td>
\t\t\t\t\t\t\t\t\t<td>{{encadreur.prenom}}</td>
\t\t\t\t\t\t\t\t\t<td>{{encadreur.email}}</td>
\t\t\t\t\t\t\t\t\t<td>{{encadreur.telephone}}</td>
\t\t\t\t\t\t\t\t\t<td>{{encadreur.adresse}}</td>
\t\t\t\t\t\t\t\t\t<td>
                                        <a href=\"{{ path('app_encadreur_show', {'id': encadreur.id}) }}\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                                        <a href=\"{{ path('app_encadreur_edit', {'id': encadreur.id}) }}\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                               \t\t\t{{ include('encadreur/_delete_form.html.twig') }}
           \t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"7\">no records found</td>
                                </tr>
                                {% endfor %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Simple Datatable End -->\t\t
\t\t\t

{% endblock %}
", "encadreur/index.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\encadreur\\index.html.twig");
    }
}
