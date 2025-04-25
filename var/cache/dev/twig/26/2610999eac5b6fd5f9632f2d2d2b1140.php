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

/* user/index.html.twig */
class __TwigTemplate_d124dc300be42ab89ca24e58e7cce138 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "Liste des utilisateurs";
        
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
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Listes des utilisateurs</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12 text-right\">
                    \t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new");
        yield "\" class=\"btn btn-success\">Créer un utilisateur</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Simple Datatable start -->
\t\t\t\t<div class=\"card-box mb-30\">
\t\t\t\t\t<div class=\"pd-20\">
\t\t\t\t\t\t<h4 class=\"text-success h4\">Liste des utilisateurs</h4>
\t\t\t\t\t\t<!-- <p class=\"mb-0\">you can find more options <a class=\"text-primary\" href=\"https://datatables.net/\" target=\"_blank\">Click Here</a></p> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pb-20\">
\t\t\t\t\t\t<table class=\"data-table table stripe hover nowrap table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>

                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 45, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            yield "                                <tr>
\t\t\t\t\t\t\t\t\t<td class=\"table-plus\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_state", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" method=\"POST\">
                                
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle_user"), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isStatus", [], "method", false, false, false, 56) != true)) {
                // line 57
                yield "\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-danger\" type=\"submit\" onclick=\"return confirm('Voulez-vous activer le user ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-label-danger me-1\">Désactivé</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                yield "\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-success\" type=\"submit\" onclick=\"return confirm('Voulez-vous désactiver le user ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-label-success me-1\">Activé</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 65
            yield "                           \t\t\t</form>
\t\t\t\t\t\t\t\t\t</td>
                                    <td>
                                        <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                                        <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                               \t\t\t";
            // line 70
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
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
        // line 73
        if (!$context['_iterated']) {
            // line 74
            yield "                                <tr>
                                    <td colspan=\"7\">no records found</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        return "user/index.html.twig";
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
        return array (  249 => 78,  240 => 74,  238 => 73,  222 => 70,  218 => 69,  214 => 68,  209 => 65,  203 => 61,  197 => 57,  195 => 56,  191 => 55,  186 => 53,  181 => 51,  177 => 50,  173 => 49,  169 => 48,  165 => 47,  162 => 46,  144 => 45,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs{% endblock %}

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
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Listes des utilisateurs</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12 text-right\">
                    \t<a href=\"{{ path('app_users_new') }}\" class=\"btn btn-success\">Créer un utilisateur</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Simple Datatable start -->
\t\t\t\t<div class=\"card-box mb-30\">
\t\t\t\t\t<div class=\"pd-20\">
\t\t\t\t\t\t<h4 class=\"text-success h4\">Liste des utilisateurs</h4>
\t\t\t\t\t\t<!-- <p class=\"mb-0\">you can find more options <a class=\"text-primary\" href=\"https://datatables.net/\" target=\"_blank\">Click Here</a></p> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pb-20\">
\t\t\t\t\t\t<table class=\"data-table table stripe hover nowrap table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>

                                {% for user in users %}
                                <tr>
\t\t\t\t\t\t\t\t\t<td class=\"table-plus\">{{user.nom}}</td>
\t\t\t\t\t\t\t\t\t<td>{{user.prenom}}</td>
\t\t\t\t\t\t\t\t\t<td>{{user.email}}</td>
\t\t\t\t\t\t\t\t\t<td>{{user.telephone}}</td>
\t\t\t\t\t\t\t\t\t<td>{{user.adresse}}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<form action=\"{{ path('app_users_state', { 'id': user.id }) }}\" method=\"POST\">
                                
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_user') }}\">
\t\t\t\t\t\t\t\t\t\t{% if user.isStatus() != true %}
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-danger\" type=\"submit\" onclick=\"return confirm('Voulez-vous activer le user ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-label-danger me-1\">Désactivé</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-success\" type=\"submit\" onclick=\"return confirm('Voulez-vous désactiver le user ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-label-success me-1\">Activé</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}
                           \t\t\t</form>
\t\t\t\t\t\t\t\t\t</td>
                                    <td>
                                        <a href=\"{{ path('app_users_show', {'id': user.id}) }}\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                                        <a href=\"{{ path('app_users_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                               \t\t\t{{ include('user/_delete_form.html.twig') }}
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
", "user/index.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\user\\index.html.twig");
    }
}
