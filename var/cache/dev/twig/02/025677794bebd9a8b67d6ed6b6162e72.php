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

/* home/dashboard_encadreur.html.twig */
class __TwigTemplate_91a6bde144c5dfd983daeaebc747eaff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard_encadreur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard_encadreur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/dashboard_encadreur.html.twig", 1);
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
\t\t\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">Bienvenue Monsieur
                             <div class=\"weight-600 font-30 text-blue\">
                                ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "prenom", [], "any", false, false, false, 14), "html", null, true);
        yield "
                            </div>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"font-18 max-width-600\">
\t\t\t\t\t\t\tVous êtes connecté en tant qu'
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
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["membreCount"]) || array_key_exists("membreCount", $context) ? $context["membreCount"] : (function () { throw new RuntimeError('Variable "membreCount" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Membres</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reunionCount"]) || array_key_exists("reunionCount", $context) ? $context["reunionCount"] : (function () { throw new RuntimeError('Variable "reunionCount" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "/12</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Reunion</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart3\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">0 / ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["membreCount"]) || array_key_exists("membreCount", $context) ? $context["membreCount"] : (function () { throw new RuntimeError('Variable "membreCount" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Nouveau membres</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
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
\t\t\t</div>
\t
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
        return "home/dashboard_encadreur.html.twig";
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
        return array (  190 => 66,  174 => 53,  158 => 40,  143 => 27,  137 => 26,  133 => 24,  131 => 23,  128 => 22,  125 => 21,  121 => 20,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
\t\t\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">Bienvenue Monsieur
                             <div class=\"weight-600 font-30 text-blue\">
                                {{ app.user.nom }} {{ app.user.prenom }}
                            </div>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"font-18 max-width-600\">
\t\t\t\t\t\t\tVous êtes connecté en tant qu'
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
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">{{ membreCount }}</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Membres</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">{{ reunionCount }}/12</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Reunion</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart3\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">0 / {{ membreCount }}</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Nouveau membres</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
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
\t\t\t</div>
\t
{% endblock body %}", "home/dashboard_encadreur.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\home\\dashboard_encadreur.html.twig");
    }
}
