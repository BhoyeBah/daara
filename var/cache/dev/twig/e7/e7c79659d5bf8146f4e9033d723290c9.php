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

/* membres/index.html.twig */
class __TwigTemplate_4051a95596fde2878d711bec9671e7c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membres/index.html.twig", 1);
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

        yield "Liste des membres";
        
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
                <h4>DataTable</h4>
            </div>
            <nav aria-label=\"breadcrumb\" role=\"navigation\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des membres</li>
                </ol>
            </nav>
        </div>
        <div class=\"col-md-6 col-sm-12 text-right\">
            ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENCADREUR")) {
            // line 21
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_new");
            yield "\" class=\"btn btn-success\">Créer un membre</a>
            ";
        }
        // line 23
        yield "        </div>
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
                    <th class=\"table-plus datatable-nosort\">Matricule</th>
                    <th class=\"table-plus datatable-nosort\">Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Poste</th>
                    <th>Professions</th>
                    ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 45
            yield "                    <th>Dahiras</th>
                    ";
        }
        // line 47
        yield "                    <th class=\"datatable-nosort\">Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 51, $this->source); })()));
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
            // line 52
            yield "                    <tr>
                        <td class=\"table-plus\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "numero", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                        <td class=\"table-plus\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                        <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "email", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                        <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "telephone", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                        <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "adresse", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "poste", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                        <td>
                        ";
            // line 61
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "specialite", [], "any", false, false, false, 61))) {
                // line 62
                yield "                            <ul>
                                ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "specialite", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
                    // line 64
                    yield "                                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["specialite"], "nom", [], "any", false, false, false, 64), "html", null, true);
                    yield "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['specialite'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                yield "                            </ul>
                        ";
            } else {
                // line 68
                yield "                            Pas de profession
                        ";
            }
            // line 70
            yield "                        </td>
                        ";
            // line 71
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 72
                yield "                        <td>";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "dahiras", [], "any", false, false, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "dahiras", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true)) : ("Pas de dahira"));
                yield "</td>
                        ";
            }
            // line 73
            yield "       
                        <td>
                        ";
            // line 75
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENCADREUR"))) {
                // line 76
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                            <a href=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                        ";
            }
            // line 79
            yield "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 80
                yield "                            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "membres/_delete_form.html.twig");
                yield "
                        ";
            }
            // line 82
            yield "                        </td>
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
        // line 84
        if (!$context['_iterated']) {
            // line 85
            yield "                    <tr>
                        <td colspan=\"7\">Aucun enregistrement trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membre'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "            </tbody>
        </table>
    </div>
</div>
<!-- Simple Datatable End -->

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
        return "membres/index.html.twig";
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
        return array (  296 => 89,  287 => 85,  285 => 84,  271 => 82,  265 => 80,  262 => 79,  257 => 77,  252 => 76,  250 => 75,  246 => 73,  240 => 72,  238 => 71,  235 => 70,  231 => 68,  227 => 66,  218 => 64,  214 => 63,  211 => 62,  209 => 61,  204 => 59,  200 => 58,  196 => 57,  192 => 56,  188 => 55,  184 => 54,  180 => 53,  177 => 52,  159 => 51,  153 => 47,  149 => 45,  147 => 44,  124 => 23,  118 => 21,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des membres{% endblock %}

{% block body %}
<div class=\"page-header\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12\">
            <div class=\"title\">
                <h4>DataTable</h4>
            </div>
            <nav aria-label=\"breadcrumb\" role=\"navigation\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des membres</li>
                </ol>
            </nav>
        </div>
        <div class=\"col-md-6 col-sm-12 text-right\">
            {% if is_granted('ROLE_ENCADREUR') %}
            <a href=\"{{ path('app_membres_new') }}\" class=\"btn btn-success\">Créer un membre</a>
            {% endif %}
        </div>
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
                    <th class=\"table-plus datatable-nosort\">Matricule</th>
                    <th class=\"table-plus datatable-nosort\">Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Poste</th>
                    <th>Professions</th>
                    {% if is_granted('ROLE_ADMIN') %}
                    <th>Dahiras</th>
                    {% endif %}
                    <th class=\"datatable-nosort\">Action</th>
                </tr>
            </thead>
            <tbody>
                {% for membre in membres %}
                    <tr>
                        <td class=\"table-plus\">{{ membre.numero }}</td>
                        <td class=\"table-plus\">{{ membre.nom }}</td>
                        <td>{{ membre.prenom }}</td>
                        <td>{{ membre.email }}</td>
                        <td>{{ membre.telephone }}</td>
                        <td>{{ membre.adresse }}</td>
                        <td>{{ membre.poste }}</td>
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
                        {% if is_granted('ROLE_ADMIN') %}
                        <td>{{ membre.dahiras ? membre.dahiras.nom : 'Pas de dahira'}}</td>
                        {% endif %}       
                        <td>
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ENCADREUR') %}
                            <a href=\"{{ path('app_membres_show', {'id': membre.id}) }}\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                            <a href=\"{{ path('app_membres_edit', {'id': membre.id}) }}\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {{ include('membres/_delete_form.html.twig') }}
                        {% endif %}
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
<!-- Simple Datatable End -->

{% endblock %}
", "membres/index.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\membres\\index.html.twig");
    }
}
