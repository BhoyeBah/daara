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

/* dahiras/show.html.twig */
class __TwigTemplate_015f79be0f092271be9779b930bc5a94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dahiras/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dahiras/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dahiras/show.html.twig", 1);
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

        yield "dahira";
        
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
\t\t\t\t\t<h4>Details du dahira : ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield " </h4>
\t\t\t\t</div>
\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Information de la dahiras</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t    <div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dahiras_index");
        yield "\">
\t\t\t\t\t\tListe des dahiras
\t\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
        <div class=\"demo-inline-spacing mt-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex align-items-center\">
                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Adresse: </strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
        yield "
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Description: </strong> ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
        yield "
                </li>

";
        // line 40
        yield "
";
        // line 45
        yield "
";
        // line 48
        yield "            </ul>
        </div>
    </div>
<!-- Simple Datatable start -->
<div class=\"card-box mb-30\">
    <div class=\"pd-20\">
        <h4 class=\"text-success h4\">Liste des membres</h4>
    </div>
    <div class=\"pb-20\">
        <table class=\"data-table table stripe hover nowrap table-bordered\">
            <thead>
                <tr>
                    <th class=\"table-plus datatable-nosort\">id</th>
                    <th class=\"table-plus datatable-nosort\">Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Dahiras</th>
                    <th>Professions</th>
                    <th class=\"datatable-nosort\">Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 72, $this->source); })()), "membres", [], "any", false, false, false, 72));
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
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 73
            yield "                    <tr>
                        <td class=\"table-plus\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                        <td class=\"table-plus\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                        <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                        <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "email", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                        <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "telephone", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                        <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "adresse", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                        <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "dahiras", [], "any", false, false, false, 80), "nom", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                        <td>
                        ";
            // line 82
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "specialite", [], "any", false, false, false, 82))) {
                // line 83
                yield "                            <ul>
                                ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "specialite", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
                    // line 85
                    yield "                                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["specialite"], "nom", [], "any", false, false, false, 85), "html", null, true);
                    yield "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['specialite'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                yield "                            </ul>
                        ";
            } else {
                // line 89
                yield "                            Pas de profession
                        ";
            }
            // line 91
            yield "                    </td>
                                
                        <td>
                            <a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                            <a href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                            ";
            // line 96
            yield Twig\Extension\CoreExtension::include($this->env, $context, "membres/_delete_form.html.twig");
            yield "
                        </td>
                    </tr>
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
            // line 100
            yield "                    <tr>
                        <td colspan=\"7\">Aucun enregistrement trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membre'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "            </tbody>
        </table>
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
        return "dahiras/show.html.twig";
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
        return array (  297 => 104,  288 => 100,  271 => 96,  267 => 95,  263 => 94,  258 => 91,  254 => 89,  250 => 87,  241 => 85,  237 => 84,  234 => 83,  232 => 82,  227 => 80,  223 => 79,  219 => 78,  215 => 77,  211 => 76,  207 => 75,  203 => 74,  200 => 73,  182 => 72,  156 => 48,  153 => 45,  150 => 40,  144 => 36,  137 => 32,  130 => 28,  119 => 20,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}dahira{% endblock %}

{% block body %}
<div class=\"page-header\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Details du dahira : {{dahira.nom}} </h4>
\t\t\t\t</div>
\t\t\t\t<nav aria-label=\"breadcrumb\" role=\"navigation\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Tableau de board</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Information de la dahiras</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t    <div class=\"col-md-6 col-sm-12 text-right\">
\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('app_dahiras_index') }}\">
\t\t\t\t\t\tListe des dahiras
\t\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
        <div class=\"demo-inline-spacing mt-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex align-items-center\">
                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> {{ dahira.nom}}
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                       <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Adresse: </strong> {{ dahira.adresse}}
                </li>
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Description: </strong> {{ dahira.description}}
                </li>

{#                <li class=\"list-group-item d-flex align-items-center\">#}

{#                <strong class=\"mx-3\"> <i class=\"bx bx-calendar me-2\"></i> Date de création: </strong>#}
{#                {{ dahira.createdAt ? dahira.createdAt|date('Y-m-d H:i:s') : '' }}#}
{#                </li>#}
{#                <li class=\"list-group-item d-flex align-items-center\">#}

{#                <strong class=\"mx-3\"><i class=\"bx bx-calendar-edit me-2\"></i> Date de modification:</strong>#}
{#                {{ dahira.updatedAt ? dahira.updatedAt|date('Y-m-d H:i:s') : '' }}#}
            </ul>
        </div>
    </div>
<!-- Simple Datatable start -->
<div class=\"card-box mb-30\">
    <div class=\"pd-20\">
        <h4 class=\"text-success h4\">Liste des membres</h4>
    </div>
    <div class=\"pb-20\">
        <table class=\"data-table table stripe hover nowrap table-bordered\">
            <thead>
                <tr>
                    <th class=\"table-plus datatable-nosort\">id</th>
                    <th class=\"table-plus datatable-nosort\">Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Dahiras</th>
                    <th>Professions</th>
                    <th class=\"datatable-nosort\">Action</th>
                </tr>
            </thead>
            <tbody>
                {% for membre in dahira.membres %}
                    <tr>
                        <td class=\"table-plus\">{{ membre.id }}</td>
                        <td class=\"table-plus\">{{ membre.nom }}</td>
                        <td>{{ membre.prenom }}</td>
                        <td>{{ membre.email }}</td>
                        <td>{{ membre.telephone }}</td>
                        <td>{{ membre.adresse }}</td>
                        <td>{{ membre.dahiras.nom }}</td>
                        <td>
                        {% if membre.specialite is not empty %}
                            <ul>
                                {% for specialite in membre.specialite %}
                                    <li>{{ specialite.nom }}</li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            Pas de profession
                        {% endif %}
                    </td>
                                
                        <td>
                            <a href=\"{{ path('app_membres_show', {'id': membre.id}) }}\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                            <a href=\"{{ path('app_membres_edit', {'id': membre.id}) }}\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                            {{ include('membres/_delete_form.html.twig') }}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\">Aucun enregistrement trouvé</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
\t</div>
        
{% endblock %}
", "dahiras/show.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\dahiras\\show.html.twig");
    }
}
