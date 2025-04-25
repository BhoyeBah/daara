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

/* reunion/new.html.twig */
class __TwigTemplate_b81265e3f6bed1174097972625e38d27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunion/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunion/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reunion/new.html.twig", 1);
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

        yield "New Reunion";
        
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
                <h4>Form</h4>
            </div>
            <nav aria-label=\"breadcrumb\" role=\"navigation\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formulaire de création d'une réunion</li>
                </ol>
            </nav>
        </div>
        <div class=\"col-md-6 col-sm-12 text-right\">
            <a class=\"btn btn-success\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reunion_index");
        yield "\">
                Historique des réunions
            </a>
        </div>
    </div>
</div>

<div class=\"pd-20 card-box mb-30\">
    <div class=\"clearfix\">
        <div class=\"pull-left\">
            <h4 class=\"text-success h4\">Créer une nouvelle réunion</h4>
            <p class=\"mb-30\">Remplissez les informations ci-dessous</p>
        </div>
    </div>

    ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        yield "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <!-- Date -->
                <div class=\"form-group row\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
                    <div class=\"col-sm-12 col-md-10\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "jj/mm/aaaa --:--"]]);
        yield "
                    </div>
                </div>
                <!-- Thèmes -->
                <div class=\"form-group row\">
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "theme", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
                    <div class=\"col-sm-12 col-md-10\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "theme", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Notre premier thème"]]);
        yield "
                    </div>
                </div>
                <!-- Lieu -->
                <div class=\"form-group row\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "lieu", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
                    <div class=\"col-sm-12 col-md-10\">
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "lieu", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Lieu"]]);
        yield "
                    </div>
                </div>
                <!-- Sujet Abordés -->
                <div class=\"form-group row\">
                    <label for=\"sujetaborde\" class=\"col-sm-12 col-md-2 col-form-label\">Sujet Abordés</label>
                    <div class=\"col-sm-12 col-md-10\">
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "sujetaborde", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Entrez les sujets abordés"]]);
        yield "
                    </div>
                </div>
                <!-- Décisions Prises -->
                <div class=\"form-group row\">
                    <label for=\"decisionprise\" class=\"col-sm-12 col-md-2 col-form-label\">Décisions Prises</label>
                    <div class=\"col-sm-12 col-md-10\">
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "decisionprise", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Entrez les décisions prises"]]);
        yield "
                    </div>
                </div>
           <!-- Intervenants -->
                <div class=\"form-group row\">
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "membres", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
                    <div class=\"col-sm-12 col-md-10\">
                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "membres", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Notre premier thème"]]);
        yield "
                    </div>
                </div>
                 
                <!-- Submit Button -->
                <div class=\"form-group row\">
                    <div class=\"col-sm-12 col-md-10 offset-md-2\">
                        <button type=\"submit\" class=\"btn btn-success\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 85, $this->source); })()), "Enrégistrer")) : ("Enrégistrer")), "html", null, true);
        yield "</button>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-5\">
                <div class=\"container\">
                    <div class=\"card member-selection\">
                        <div class=\"card-header\">
                            <h4 class=\"text-success\">Liste des Membres</h4>
                        </div>
                        <div class=\"card-body\">
                            <!-- Conteneur table-responsive avec d-flex -->
                            <div class=\"d-flex justify-content-center\">
                                <div class=\"table-responsive\">
                                    <table class=\"data-table table stripe hover wrap table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Présent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 110
            yield "                                                <tr>
                                                    <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                                    <td>
                                                        <input type=\"checkbox\" name=\"membre_";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 114), "html", null, true);
            yield "\" value=\"present\" checked>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "                                                <tr>
                                                    <td colspan=\"3\">Aucun enregistrement trouvé</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
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
        return "reunion/new.html.twig";
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
        return array (  292 => 132,  280 => 122,  271 => 118,  269 => 117,  261 => 114,  256 => 112,  252 => 111,  249 => 110,  244 => 109,  217 => 85,  207 => 78,  202 => 76,  194 => 71,  184 => 64,  174 => 57,  169 => 55,  161 => 50,  156 => 48,  148 => 43,  143 => 41,  134 => 35,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Reunion{% endblock %}

{% block body %}
<div class=\"page-header\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12\">
            <div class=\"title\">
                <h4>Form</h4>
            </div>
            <nav aria-label=\"breadcrumb\" role=\"navigation\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Tableau de bord</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formulaire de création d'une réunion</li>
                </ol>
            </nav>
        </div>
        <div class=\"col-md-6 col-sm-12 text-right\">
            <a class=\"btn btn-success\" href=\"{{ path('app_reunion_index') }}\">
                Historique des réunions
            </a>
        </div>
    </div>
</div>

<div class=\"pd-20 card-box mb-30\">
    <div class=\"clearfix\">
        <div class=\"pull-left\">
            <h4 class=\"text-success h4\">Créer une nouvelle réunion</h4>
            <p class=\"mb-30\">Remplissez les informations ci-dessous</p>
        </div>
    </div>

    {{ form_start(form) }}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <!-- Date -->
                <div class=\"form-group row\">
                    {{ form_label(form.date, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
                    <div class=\"col-sm-12 col-md-10\">
                        {{ form_widget(form.date, {'attr': {'class': 'form-control', 'placeholder': 'jj/mm/aaaa --:--'}}) }}
                    </div>
                </div>
                <!-- Thèmes -->
                <div class=\"form-group row\">
                    {{ form_label(form.theme, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
                    <div class=\"col-sm-12 col-md-10\">
                        {{ form_widget(form.theme, {'attr': {'class': 'form-control', 'placeholder': 'Notre premier thème'}}) }}
                    </div>
                </div>
                <!-- Lieu -->
                <div class=\"form-group row\">
                    {{ form_label(form.lieu, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
                    <div class=\"col-sm-12 col-md-10\">
                        {{ form_widget(form.lieu, {'attr': {'class': 'form-control', 'placeholder': 'Lieu'}}) }}
                    </div>
                </div>
                <!-- Sujet Abordés -->
                <div class=\"form-group row\">
                    <label for=\"sujetaborde\" class=\"col-sm-12 col-md-2 col-form-label\">Sujet Abordés</label>
                    <div class=\"col-sm-12 col-md-10\">
                        {{ form_widget(form.sujetaborde, {'attr': {'class': 'form-control', 'rows': '4', 'placeholder': 'Entrez les sujets abordés'}}) }}
                    </div>
                </div>
                <!-- Décisions Prises -->
                <div class=\"form-group row\">
                    <label for=\"decisionprise\" class=\"col-sm-12 col-md-2 col-form-label\">Décisions Prises</label>
                    <div class=\"col-sm-12 col-md-10\">
                        {{ form_widget(form.decisionprise, {'attr': {'class': 'form-control', 'rows': '4', 'placeholder': 'Entrez les décisions prises'}}) }}
                    </div>
                </div>
           <!-- Intervenants -->
                <div class=\"form-group row\">
                    {{ form_label(form.membres, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
                    <div class=\"col-sm-12 col-md-10\">
                        {{ form_widget(form.membres, {'attr': {'class': 'form-control', 'placeholder': 'Notre premier thème'}}) }}
                    </div>
                </div>
                 
                <!-- Submit Button -->
                <div class=\"form-group row\">
                    <div class=\"col-sm-12 col-md-10 offset-md-2\">
                        <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Enrégistrer') }}</button>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-5\">
                <div class=\"container\">
                    <div class=\"card member-selection\">
                        <div class=\"card-header\">
                            <h4 class=\"text-success\">Liste des Membres</h4>
                        </div>
                        <div class=\"card-body\">
                            <!-- Conteneur table-responsive avec d-flex -->
                            <div class=\"d-flex justify-content-center\">
                                <div class=\"table-responsive\">
                                    <table class=\"data-table table stripe hover wrap table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Présent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for membre in membres %}
                                                <tr>
                                                    <td>{{ membre.nom }}</td>
                                                    <td>{{ membre.prenom }}</td>
                                                    <td>
                                                        <input type=\"checkbox\" name=\"membre_{{ membre.id }}\" value=\"present\" checked>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"3\">Aucun enregistrement trouvé</td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}
</div>

{% endblock %}", "reunion/new.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\reunion\\new.html.twig");
    }
}
