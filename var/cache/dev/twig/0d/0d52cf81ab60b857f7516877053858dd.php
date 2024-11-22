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
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Description: </strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        yield "
                </li>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 42, $this->source); })()), "encadreurs", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["encadreur"]) {
            // line 43
            yield "                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Encadreur: </strong> ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encadreur"], "prenom", [], "any", false, false, false, 45), "html", null, true);
            yield " 
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['encadreur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "
";
        // line 54
        yield "
";
        // line 57
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
                    <th class=\"table-plus datatable-nosort\">Matricule</th>
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
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 81, $this->source); })()), "membres", [], "any", false, false, false, 81));
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
            // line 82
            yield "                    <tr>
                        <td class=\"table-plus\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "numero", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                        <td class=\"table-plus\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                        <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                        <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "email", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                        <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "telephone", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                        <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "adresse", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                        <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "dahiras", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                        <td>
                        ";
            // line 91
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "specialite", [], "any", false, false, false, 91))) {
                // line 92
                yield "                            <ul>
                                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "specialite", [], "any", false, false, false, 93));
                foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
                    // line 94
                    yield "                                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["specialite"], "nom", [], "any", false, false, false, 94), "html", null, true);
                    yield "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['specialite'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                yield "                            </ul>
                        ";
            } else {
                // line 98
                yield "                            Pas de profession
                        ";
            }
            // line 100
            yield "                    </td>
                                
                        <td>
                            <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                            <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-secondary\"><i class=\"dw dw-edit2\"></i></a>
                            ";
            // line 105
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
            // line 109
            yield "                    <tr>
                        <td colspan=\"7\">Aucun enregistrement trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membre'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "            </tbody>
        </table>
    </div>
</div>
</div>
<!-- Simple Datatable start -->
<div class=\"card-box mb-30\">
    <div class=\"pd-20\">
        <h4 class=\"text-success h4\">Liste des reunion</h4>
    </div>
    <div class=\"pb-20\">
        <table class=\"data-table table stripe hover nowrap table-bordered\">
            <thead>
                <tr>
                    <th class=\"table-plus datatable-nosort\">Réference</th>
                    <th class=\"table-plus datatable-nosort\">Date reunion</th>
                    <th class=\"table-plus datatable-nosort\">Thème reunion</th>
                    <th>Dahira</th>
                    <th>Lieu reunion</th>
                    <th class=\"datatable-nosort\">Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dahira"]) || array_key_exists("dahira", $context) ? $context["dahira"] : (function () { throw new RuntimeError('Variable "dahira" does not exist.', 136, $this->source); })()), "reunions", [], "any", false, false, false, 136));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 137
            yield "                    <tr>
                        <td class=\"table-plus\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reunion"], "numero", [], "any", false, false, false, 138), "html", null, true);
            yield "</td>
                        <td class=\"table-plus\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reunion"], "date", [], "any", false, false, false, 139), "H:i:s d/m/Y"), "html", null, true);
            yield "</td>
                        <td>";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reunion"], "lieu", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reunion"], "theme", [], "any", false, false, false, 141), "nom", [], "any", false, false, false, 141), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reunion"], "dahiras", [], "any", false, false, false, 142), "nom", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>                            
                        <td>
                            <a href=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reunion"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 148
            yield "                    <tr>
                        <td colspan=\"7\">Aucun enregistrement trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reunion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "            </tbody>
        </table>
    </div>
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
        return array (  394 => 152,  385 => 148,  376 => 144,  371 => 142,  367 => 141,  363 => 140,  359 => 139,  355 => 138,  352 => 137,  347 => 136,  322 => 113,  313 => 109,  296 => 105,  292 => 104,  288 => 103,  283 => 100,  279 => 98,  275 => 96,  266 => 94,  262 => 93,  259 => 92,  257 => 91,  252 => 89,  248 => 88,  244 => 87,  240 => 86,  236 => 85,  232 => 84,  228 => 83,  225 => 82,  207 => 81,  181 => 57,  178 => 54,  175 => 49,  164 => 45,  160 => 43,  156 => 42,  151 => 40,  144 => 36,  137 => 32,  130 => 28,  119 => 20,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Description: </strong> {{ dahira.description}}
                </li>
                {% for encadreur in dahira.encadreurs %}
                <li class=\"list-group-item d-flex align-items-center\">

                    <strong class=\"mx-3\"><i class=\"bx bx-pencil me-2\"></i> Encadreur: </strong> {{ encadreur.nom}} {{ encadreur.prenom}} 
                </li>
                {% endfor %}
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
                    <th class=\"table-plus datatable-nosort\">Matricule</th>
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
                        <td class=\"table-plus\">{{ membre.numero }}</td>
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
</div>
<!-- Simple Datatable start -->
<div class=\"card-box mb-30\">
    <div class=\"pd-20\">
        <h4 class=\"text-success h4\">Liste des reunion</h4>
    </div>
    <div class=\"pb-20\">
        <table class=\"data-table table stripe hover nowrap table-bordered\">
            <thead>
                <tr>
                    <th class=\"table-plus datatable-nosort\">Réference</th>
                    <th class=\"table-plus datatable-nosort\">Date reunion</th>
                    <th class=\"table-plus datatable-nosort\">Thème reunion</th>
                    <th>Dahira</th>
                    <th>Lieu reunion</th>
                    <th class=\"datatable-nosort\">Action</th>
                </tr>
            </thead>
            <tbody>
                {% for reunion in dahira.reunions %}
                    <tr>
                        <td class=\"table-plus\">{{ reunion.numero }}</td>
                        <td class=\"table-plus\">{{ reunion.date|date('H:i:s d/m/Y') }}</td>
                        <td>{{ reunion.lieu }}</td>
\t\t\t\t\t\t<td>{{ reunion.theme.nom }}</td>
\t\t\t\t\t\t<td>{{ reunion.dahiras.nom }}</td>                            
                        <td>
                            <a href=\"{{ path('app_reunion_show', {'id': reunion.id}) }}\" class=\"btn btn-sm btn-success\"><i class=\"dw dw-eye\"></i></a>
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
</div>  
{% endblock %}
", "dahiras/show.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\dahiras\\show.html.twig");
    }
}
