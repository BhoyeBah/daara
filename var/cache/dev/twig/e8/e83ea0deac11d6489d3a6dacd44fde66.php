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

/* home/index.html.twig */
class __TwigTemplate_baa08d5ec19672bdf5d258caeda4c657 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Hello HomeController!";
        
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
        yield "<div class=\"main-container\">
<!-- <div class=\"main-container\">
\t\t<div class=\"pd-ltr-20\">
\t\t\t<div class=\"card-box pd-20 height-100-p mb-30\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"vendors/images/banner-img.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
\t\t\t\t\t\t\tWelcome back <div class=\"weight-600 font-30 text-blue\">Johnny Brown!</div>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"font-18 max-width-600\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">2020</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Contact</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">400</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Deals</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart3\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">350</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Campaign</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart4\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">\$6060</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Worth</div>
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
\t\t\t<div class=\"card-box mb-30\">
\t\t\t\t<h2 class=\"h4 pd-20\">Best Selling Products</h2>
\t\t\t\t<table class=\"data-table table nowrap\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Product</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Color</th>
\t\t\t\t\t\t\t<th>Size</th>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<th>Oty</th>
\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-1.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Shirt</h5>
\t\t\t\t\t\t\t\tby John Doe
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Black</td>
\t\t\t\t\t\t\t<td>M</td>
\t\t\t\t\t\t\t<td>\$1000</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-2.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Boots</h5>
\t\t\t\t\t\t\t\tby Lea R. Frith
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>brown</td>
\t\t\t\t\t\t\t<td>9UK</td>
\t\t\t\t\t\t\t<td>\$900</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-3.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Hat</h5>
\t\t\t\t\t\t\t\tby Erik L. Richards
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Orange</td>
\t\t\t\t\t\t\t<td>M</td>
\t\t\t\t\t\t\t<td>\$100</td>
\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-4.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Long Dress</h5>
\t\t\t\t\t\t\t\tby Renee I. Hansen
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Gray</td>
\t\t\t\t\t\t\t<td>L</td>
\t\t\t\t\t\t\t<td>\$1000</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-5.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Blazer</h5>
\t\t\t\t\t\t\t\tby Vicki M. Coleman
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Blue</td>
\t\t\t\t\t\t\t<td>M</td>
\t\t\t\t\t\t\t<td>\$1000</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div> -->

<h1>Tableau de Bord</h1>

";
        // line 236
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 237
            yield "    <p>Bienvenue,role Super Admin ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "user", [], "any", false, false, false, 237), "nom", [], "any", false, false, false, 237), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "user", [], "any", false, false, false, 237), "prenom", [], "any", false, false, false, 237), "html", null, true);
            yield "!</p>
\t";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "user", [], "any", false, false, false, 238), "roles", [], "any", false, false, false, 238));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 239
                yield "    <p>Role: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "    <!-- Contenu spécifique au super-admin -->
";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 243
            yield "    <p>Bienvenue,role Admin ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [], "any", false, false, false, 243), "nom", [], "any", false, false, false, 243), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [], "any", false, false, false, 243), "prenom", [], "any", false, false, false, 243), "html", null, true);
            yield "!</p>
\t";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "user", [], "any", false, false, false, 244), "roles", [], "any", false, false, false, 244));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 245
                yield "    <p>Role: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            yield "    <!-- Contenu spécifique à l'admin -->
";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 249
            yield "    <p>Bienvenue,role Utilisateur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249), "nom", [], "any", false, false, false, 249), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249), "prenom", [], "any", false, false, false, 249), "html", null, true);
            yield "!</p>
\t";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 250, $this->source); })()), "user", [], "any", false, false, false, 250), "roles", [], "any", false, false, false, 250));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 251
                yield "    <p>Role: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            yield "    <!-- Contenu spécifique à l'utilisateur -->
";
        } else {
            // line 255
            yield "    <p>Accès refusé.</p>
";
        }
        // line 257
        yield "
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
        return "home/index.html.twig";
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
        return array (  410 => 257,  406 => 255,  402 => 253,  393 => 251,  389 => 250,  382 => 249,  378 => 247,  369 => 245,  365 => 244,  358 => 243,  354 => 241,  345 => 239,  341 => 238,  334 => 237,  332 => 236,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<div class=\"main-container\">
<!-- <div class=\"main-container\">
\t\t<div class=\"pd-ltr-20\">
\t\t\t<div class=\"card-box pd-20 height-100-p mb-30\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"vendors/images/banner-img.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
\t\t\t\t\t\t\tWelcome back <div class=\"weight-600 font-30 text-blue\">Johnny Brown!</div>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"font-18 max-width-600\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">2020</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Contact</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">400</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Deals</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart3\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">350</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Campaign</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 mb-30\">
\t\t\t\t\t<div class=\"card-box height-100-p widget-style1\">
\t\t\t\t\t\t<div class=\"d-flex flex-wrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"progress-data\">
\t\t\t\t\t\t\t\t<div id=\"chart4\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-data\">
\t\t\t\t\t\t\t\t<div class=\"h4 mb-0\">\$6060</div>
\t\t\t\t\t\t\t\t<div class=\"weight-600 font-14\">Worth</div>
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
\t\t\t<div class=\"card-box mb-30\">
\t\t\t\t<h2 class=\"h4 pd-20\">Best Selling Products</h2>
\t\t\t\t<table class=\"data-table table nowrap\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"table-plus datatable-nosort\">Product</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Color</th>
\t\t\t\t\t\t\t<th>Size</th>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<th>Oty</th>
\t\t\t\t\t\t\t<th class=\"datatable-nosort\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-1.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Shirt</h5>
\t\t\t\t\t\t\t\tby John Doe
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Black</td>
\t\t\t\t\t\t\t<td>M</td>
\t\t\t\t\t\t\t<td>\$1000</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-2.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Boots</h5>
\t\t\t\t\t\t\t\tby Lea R. Frith
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>brown</td>
\t\t\t\t\t\t\t<td>9UK</td>
\t\t\t\t\t\t\t<td>\$900</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-3.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Hat</h5>
\t\t\t\t\t\t\t\tby Erik L. Richards
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Orange</td>
\t\t\t\t\t\t\t<td>M</td>
\t\t\t\t\t\t\t<td>\$100</td>
\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-4.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Long Dress</h5>
\t\t\t\t\t\t\t\tby Renee I. Hansen
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Gray</td>
\t\t\t\t\t\t\t<td>L</td>
\t\t\t\t\t\t\t<td>\$1000</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"table-plus\">
\t\t\t\t\t\t\t\t<img src=\"vendors/images/product-5.jpg\" width=\"70\" height=\"70\" alt=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 class=\"font-16\">Blazer</h5>
\t\t\t\t\t\t\t\tby Vicki M. Coleman
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Blue</td>
\t\t\t\t\t\t\t<td>M</td>
\t\t\t\t\t\t\t<td>\$1000</td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dw dw-more\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-edit2\"></i> Edit</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-delete-3\"></i> Delete</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div> -->

<h1>Tableau de Bord</h1>

{% if is_granted('ROLE_SUPER_ADMIN') %}
    <p>Bienvenue,role Super Admin {{ app.user.nom }} {{ app.user.prenom }}!</p>
\t{% for role in app.user.roles %}
    <p>Role: {{ role }}</p>
{% endfor %}
    <!-- Contenu spécifique au super-admin -->
{% elseif is_granted('ROLE_ADMIN') %}
    <p>Bienvenue,role Admin {{ app.user.nom }} {{ app.user.prenom }}!</p>
\t{% for role in app.user.roles %}
    <p>Role: {{ role }}</p>
{% endfor %}
    <!-- Contenu spécifique à l'admin -->
{% elseif is_granted('ROLE_USER') %}
    <p>Bienvenue,role Utilisateur {{ app.user.nom }} {{ app.user.prenom }}!</p>
\t{% for role in app.user.roles %}
    <p>Role: {{ role }}</p>
{% endfor %}
    <!-- Contenu spécifique à l'utilisateur -->
{% else %}
    <p>Accès refusé.</p>
{% endif %}

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\home\\index.html.twig");
    }
}
