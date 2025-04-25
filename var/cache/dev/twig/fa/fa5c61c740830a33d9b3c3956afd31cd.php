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

/* reunion/show.html.twig */
class __TwigTemplate_7a6df1ec18b1620d37059de391aabf0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunion/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunion/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reunion/show.html.twig", 1);
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

        yield "Détails de la réunion";
        
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
        yield "    <div class=\"page-header\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <div class=\"title\">
                    <h4>Détails de la réunion</h4>
                </div>
                <nav aria-label=\"breadcrumb\" role=\"navigation\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails de la réunion</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class=\"pd-20 card-box mb-30\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h4 class=\"text-success\">Dahira : ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 25, $this->source); })()), "dahiras", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
        yield "</h4>
                <h4 class=\"text-success\">Date : ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
        yield "</h4>
                <h4 class=\"text-success\"><strong>Lieu :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 27, $this->source); })()), "lieu", [], "any", false, false, false, 27), "html", null, true);
        yield "</h4>
            </div>
            <div class=\"col-md-6 text-right\">
                <h4 class=\"text-success\">Encadreur : ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 30, $this->source); })()), "encadreur", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 30, $this->source); })()), "encadreur", [], "any", false, false, false, 30), "prenom", [], "any", false, false, false, 30), "html", null, true);
        yield "</h4>
            </div>
        </div>
        <h5 class=\"text-success mt-4\">Liste des présences</h5>

        <!-- Tableau avec ombre et marges -->
        <div class=\"table-responsive p-3 my-5 bg-white rounded\">
            <table class=\"table table-bordered data-table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Présent</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["presences"]) || array_key_exists("presences", $context) ? $context["presences"] : (function () { throw new RuntimeError('Variable "presences" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["presence"]) {
            // line 47
            yield "                        <tr>
                            <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "membre", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                            <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "membre", [], "any", false, false, false, 49), "prenom", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge ";
            // line 51
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "present", [], "any", false, false, false, 51)) ? ("badge-success") : ("badge-danger"));
            yield "\">
                                    ";
            // line 52
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "present", [], "any", false, false, false, 52)) ? ("Présent") : ("Absent"));
            yield "
                                </span>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 56
        if (!$context['_iterated']) {
            // line 57
            yield "                        <tr>
                            <td colspan=\"3\" class=\"text-center\">Aucune présence enregistrée.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['presence'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                </tbody>
            </table>
        </div>
        <!-- Suppression de la couleur verte pour le thème -->
        <h1 class=\"text-center my-4\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 65, $this->source); })()), "theme", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
        yield "</h1>

        <p><strong>Sujet abordé :</strong> ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 67, $this->source); })()), "sujetaborde", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
        <p><strong>Décisions prises :</strong> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 68, $this->source); })()), "decisionprise", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>

        <div class=\"mt-4 d-flex justify-content-between\">
             <a id=\"back\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reunion_index");
        yield "\" class=\"btn rounded-pill btn-primary\">
            <i class=\"bx bx-arrow-back\"></i> Retour
        </a>
        <a id=\"back\" href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reunion_print_Detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        yield "\" class=\"btn rounded-pill btn-success\">
            <i class=\"bx bx-arrow-back\"></i> imprimer
        </a>
        </div>
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
        return "reunion/show.html.twig";
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
        return array (  224 => 74,  218 => 71,  212 => 68,  208 => 67,  203 => 65,  197 => 61,  188 => 57,  186 => 56,  177 => 52,  173 => 51,  168 => 49,  164 => 48,  161 => 47,  156 => 46,  135 => 30,  129 => 27,  125 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la réunion{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <div class=\"title\">
                    <h4>Détails de la réunion</h4>
                </div>
                <nav aria-label=\"breadcrumb\" role=\"navigation\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails de la réunion</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class=\"pd-20 card-box mb-30\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h4 class=\"text-success\">Dahira : {{ reunion.dahiras.nom }}</h4>
                <h4 class=\"text-success\">Date : {{ reunion.date|date('d/m/Y H:i') }}</h4>
                <h4 class=\"text-success\"><strong>Lieu :</strong> {{ reunion.lieu }}</h4>
            </div>
            <div class=\"col-md-6 text-right\">
                <h4 class=\"text-success\">Encadreur : {{ reunion.encadreur.nom }} {{ reunion.encadreur.prenom }}</h4>
            </div>
        </div>
        <h5 class=\"text-success mt-4\">Liste des présences</h5>

        <!-- Tableau avec ombre et marges -->
        <div class=\"table-responsive p-3 my-5 bg-white rounded\">
            <table class=\"table table-bordered data-table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Présent</th>
                    </tr>
                </thead>
                <tbody>
                    {% for presence in presences %}
                        <tr>
                            <td>{{ presence.membre.nom }}</td>
                            <td>{{ presence.membre.prenom }}</td>
                            <td>
                                <span class=\"badge {{ presence.present ? 'badge-success' : 'badge-danger' }}\">
                                    {{ presence.present ? 'Présent' : 'Absent' }}
                                </span>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\" class=\"text-center\">Aucune présence enregistrée.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <!-- Suppression de la couleur verte pour le thème -->
        <h1 class=\"text-center my-4\">{{ reunion.theme.nom }}</h1>

        <p><strong>Sujet abordé :</strong> {{ reunion.sujetaborde }}</p>
        <p><strong>Décisions prises :</strong> {{ reunion.decisionprise }}</p>

        <div class=\"mt-4 d-flex justify-content-between\">
             <a id=\"back\" href=\"{{ path('app_reunion_index') }}\" class=\"btn rounded-pill btn-primary\">
            <i class=\"bx bx-arrow-back\"></i> Retour
        </a>
        <a id=\"back\" href=\"{{ path('reunion_print_Detail', { 'id': reunion.id }) }}\" class=\"btn rounded-pill btn-success\">
            <i class=\"bx bx-arrow-back\"></i> imprimer
        </a>
        </div>
    </div>
{% endblock %}
", "reunion/show.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\reunion\\show.html.twig");
    }
}
