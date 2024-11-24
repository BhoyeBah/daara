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

/* base.html.twig */
class __TwigTemplate_5f185751839422ba25658b08f3c113d5 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
\t<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>Daara</title>

\t<!-- Site favicon -->
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/apple-touch-icon.png"), "html", null, true);
        yield "\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/favicon-32x32.png"), "html", null, true);
        yield "\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/favicon-16x16.png"), "html", null, true);
        yield "\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/styles/core.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/styles/icon-font.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/css/responsive.bootstrap4.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/styles/style.css"), "html", null, true);
        yield "\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>
    <body>

\t<div class=\"header\">
\t\t<div class=\"header-left\">
\t\t\t<div class=\"menu-icon dw dw-menu\"></div>
\t\t\t<div class=\"search-toggle-icon dw dw-search2\" data-toggle=\"header_search\"></div>
\t\t\t<div class=\"header-search\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t\t<i class=\"dw dw-search2 search-icon\"></i>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control search-input\" placeholder=\"Search Here\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"ion-arrow-down-c\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 col-md-2 col-form-label\">From</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-10\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm form-control-line\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 col-md-2 col-form-label\">To</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-10\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm form-control-line\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 col-md-2 col-form-label\">Subject</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-10\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm form-control-line\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Search</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-right\">
\t\t\t<div class=\"dashboard-setting user-notification\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"javascript:;\" data-toggle=\"right-sidebar\">
\t\t\t\t\t\t<i class=\"dw dw-settings2\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"user-notification\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"icon-copy dw dw-notification\"></i>
\t\t\t\t\t\t<span class=\"badge notification-active\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t<div class=\"notification-list mx-h-350 customscroll\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/img.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/photo1.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Lea R. Frith</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/photo2.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Erik L. Richards</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/photo3.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/photo4.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Renee I. Hansen</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/img.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Vicki M. Coleman</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"user-info-dropdown\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<span class=\"user-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/deskapp-logo.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"user-name\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "nom", [], "any", false, false, false, 148), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "prenom", [], "any", false, false, false, 148), "html", null, true);
        yield "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"profile.html\"><i class=\"dw dw-user1\"></i> Profile</a>
\t\t\t\t\t\t<!-- <a class=\"dropdown-item\" href=\"profile.html\"><i class=\"dw dw-settings2\"></i> Setting</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"faq.html\"><i class=\"dw dw-help\"></i> Help</a> -->
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"><i class=\"dw dw-logout text-danger\"></i> Deconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"right-sidebar\">
\t\t<div class=\"sidebar-title\">
\t\t\t<h3 class=\"weight-600 font-16 text-blue\">
\t\t\t\tLayout Settings
\t\t\t\t<span class=\"btn-block font-weight-400 font-12\">User Interface Settings</span>
\t\t\t</h3>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"right-sidebar-close\">
\t\t\t\t<i class=\"icon-copy ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"right-sidebar-body customscroll\">
\t\t\t<div class=\"right-sidebar-body-content\">
\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Header Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-white active\">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-dark\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Sidebar Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-light \">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-dark active\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu Dropdown Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-10 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-1\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-1\"><i class=\"fa fa-angle-down\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-2\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-2\"><i class=\"ion-plus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-3\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-3\"><i class=\"fa fa-angle-double-right\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu List Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-30 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-1\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-1\"><i class=\"ion-minus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-2\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-2\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-3\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-3\"><i class=\"dw dw-check\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-4\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-4\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-4\"><i class=\"icon-copy dw dw-next-2\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-5\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-5\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-5\"><i class=\"dw dw-fast-forward-1\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-6\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-6\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-6\"><i class=\"dw dw-next\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"reset-options pt-30 text-center\">
\t\t\t\t\t<button class=\"btn btn-danger\" id=\"reset-settings\">Reset Settings</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"left-side-bar\">
\t\t<div class=\"brand-logo\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/deskapp-logo.svg"), "html", null, true);
        yield "\" alt=\"\" class=\"dark-logo\">
\t\t\t\t<img src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/deskapp-logo-white.svg"), "html", null, true);
        yield "\" alt=\"\" class=\"light-logo\">
\t\t\t</a>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-block customscroll\">
\t\t\t<div class=\"sidebar-menu\">
\t\t\t\t<ul id=\"accordion-menu\">
\t\t\t\t";
        // line 249
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENCADREUR"))) {
            // line 250
            yield "\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"/\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-house-1\"></span><span class=\"mtext\">Tableau de bord</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 255
        yield "\t
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-library\"></span><span class=\"mtext\">Dahiras</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">

\t\t\t\t\t\t\t";
        // line 262
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 263
            yield "\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dahiras_index");
            yield "\">Gestion des dahiras</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 264
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_encadreur_index");
            yield "\">Gestion des encadreurs</a></li>
\t\t\t\t\t\t\t";
        }
        // line 266
        yield "\t\t\t\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENCADREUR"))) {
            // line 267
            yield "\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_index");
            yield "\">Gestion des membres</a></li>
\t\t\t\t\t\t\t";
        }
        // line 269
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 271
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENCADREUR"))) {
            // line 272
            yield "\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user\"></span><span class=\"mtext\"> Reunion </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 277
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_themes_index");
            yield "\">Gestion des thémes</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 278
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reunion_index");
            yield "\">Gestion des Reunions</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 282
        yield "\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 283
            yield "\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user\"></span><span class=\"mtext\"> Utilisateurs </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 288
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
            yield "\">Gestion des utilisateurs</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 292
        yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 295
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENCADREUR"))) {
            // line 296
            yield "\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon ion-android-menu\"></span><span class=\"mtext\">Autres</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 301
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_specialites_index");
            yield "\">Spécialités</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 305
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"main-container\">
\t\t<div class=\"pd-ltr-20 xs-pd-20-10\">
\t\t\t<div class=\"min-height-200px\">
        ";
        // line 312
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 313
        yield "   
        <div class=\"footer-wrap pd-20 mb-20 card-box\">
\t\t\t\tDaara - design By <a href=\"https://github.com/dropways\" target=\"_blank\"></a>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!-- JS inclusions -->
\t<script src=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/core.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/script.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/process.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/layout-settings.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/dataTables.buttons.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.print.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.html5.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.flash.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/pdfmake.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/vfs_fonts.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/datatable-setting.js"), "html", null, true);
        yield "\"></script>
\t<!-- js -->
\t<script src=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/dashboard.js"), "html", null, true);
        yield "\"></script>
\t
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 312
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  564 => 312,  549 => 338,  545 => 337,  540 => 335,  536 => 334,  532 => 333,  528 => 332,  524 => 331,  520 => 330,  516 => 329,  512 => 328,  508 => 327,  504 => 326,  500 => 325,  496 => 324,  492 => 323,  488 => 322,  484 => 321,  480 => 320,  471 => 313,  469 => 312,  460 => 305,  453 => 301,  446 => 296,  444 => 295,  439 => 292,  432 => 288,  425 => 283,  422 => 282,  415 => 278,  411 => 277,  404 => 272,  402 => 271,  398 => 269,  392 => 267,  389 => 266,  384 => 264,  379 => 263,  377 => 262,  368 => 255,  360 => 250,  358 => 249,  346 => 240,  342 => 239,  254 => 154,  243 => 148,  238 => 146,  221 => 132,  211 => 125,  201 => 118,  191 => 111,  181 => 104,  171 => 97,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  67 => 11,  63 => 10,  59 => 9,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>Daara</title>

\t<!-- Site favicon -->
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('vendors/images/apple-touch-icon.png')}}\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('vendors/images/favicon-32x32.png')}}\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('vendors/images/favicon-16x16.png')}}\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendors/styles/core.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendors/styles/icon-font.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendors/styles/style.css')}}\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>
    <body>

\t<div class=\"header\">
\t\t<div class=\"header-left\">
\t\t\t<div class=\"menu-icon dw dw-menu\"></div>
\t\t\t<div class=\"search-toggle-icon dw dw-search2\" data-toggle=\"header_search\"></div>
\t\t\t<div class=\"header-search\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t\t<i class=\"dw dw-search2 search-icon\"></i>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control search-input\" placeholder=\"Search Here\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"ion-arrow-down-c\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 col-md-2 col-form-label\">From</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-10\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm form-control-line\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 col-md-2 col-form-label\">To</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-10\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm form-control-line\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 col-md-2 col-form-label\">Subject</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-10\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm form-control-line\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Search</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-right\">
\t\t\t<div class=\"dashboard-setting user-notification\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"javascript:;\" data-toggle=\"right-sidebar\">
\t\t\t\t\t\t<i class=\"dw dw-settings2\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"user-notification\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle no-arrow\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"icon-copy dw dw-notification\"></i>
\t\t\t\t\t\t<span class=\"badge notification-active\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t<div class=\"notification-list mx-h-350 customscroll\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('vendors/images/img.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('vendors/images/photo1.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Lea R. Frith</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('vendors/images/photo2.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Erik L. Richards</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('vendors/images/photo3.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('vendors/images/photo4.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Renee I. Hansen</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('vendors/images/img.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Vicki M. Coleman</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"user-info-dropdown\">
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<span class=\"user-icon\">
\t\t\t\t\t\t\t<img src=\"{{ asset('vendors/images/deskapp-logo.jpg')}}\" alt=\"\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"user-name\">{{ app.user.nom }} {{ app.user.prenom }}</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"profile.html\"><i class=\"dw dw-user1\"></i> Profile</a>
\t\t\t\t\t\t<!-- <a class=\"dropdown-item\" href=\"profile.html\"><i class=\"dw dw-settings2\"></i> Setting</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"faq.html\"><i class=\"dw dw-help\"></i> Help</a> -->
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"dw dw-logout text-danger\"></i> Deconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"right-sidebar\">
\t\t<div class=\"sidebar-title\">
\t\t\t<h3 class=\"weight-600 font-16 text-blue\">
\t\t\t\tLayout Settings
\t\t\t\t<span class=\"btn-block font-weight-400 font-12\">User Interface Settings</span>
\t\t\t</h3>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"right-sidebar-close\">
\t\t\t\t<i class=\"icon-copy ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"right-sidebar-body customscroll\">
\t\t\t<div class=\"right-sidebar-body-content\">
\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Header Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-white active\">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary header-dark\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Sidebar Background</h4>
\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-light \">White</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-outline-primary sidebar-dark active\">Dark</a>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu Dropdown Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-10 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-1\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-1\"><i class=\"fa fa-angle-down\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-2\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-2\"><i class=\"ion-plus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebaricon-3\" name=\"menu-dropdown-icon\" class=\"custom-control-input\" value=\"icon-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-3\"><i class=\"fa fa-angle-double-right\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu List Icon</h4>
\t\t\t\t<div class=\"sidebar-radio-group pb-30 mb-10\">
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-1\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-1\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-1\"><i class=\"ion-minus-round\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-2\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-2\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-2\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-3\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-3\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-3\"><i class=\"dw dw-check\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-4\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-4\" checked=\"\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-4\"><i class=\"icon-copy dw dw-next-2\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-5\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-5\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-5\"><i class=\"dw dw-fast-forward-1\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t<input type=\"radio\" id=\"sidebariconlist-6\" name=\"menu-list-icon\" class=\"custom-control-input\" value=\"icon-list-style-6\">
\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-6\"><i class=\"dw dw-next\"></i></label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"reset-options pt-30 text-center\">
\t\t\t\t\t<button class=\"btn btn-danger\" id=\"reset-settings\">Reset Settings</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"left-side-bar\">
\t\t<div class=\"brand-logo\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"{{ asset('vendors/images/deskapp-logo.svg')}}\" alt=\"\" class=\"dark-logo\">
\t\t\t\t<img src=\"{{ asset('vendors/images/deskapp-logo-white.svg')}}\" alt=\"\" class=\"light-logo\">
\t\t\t</a>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-block customscroll\">
\t\t\t<div class=\"sidebar-menu\">
\t\t\t\t<ul id=\"accordion-menu\">
\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ENCADREUR') %}
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"/\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-house-1\"></span><span class=\"mtext\">Tableau de bord</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}\t
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-library\"></span><span class=\"mtext\">Dahiras</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">

\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_dahiras_index') }}\">Gestion des dahiras</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_encadreur_index') }}\">Gestion des encadreurs</a></li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ENCADREUR') %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_membres_index') }}\">Gestion des membres</a></li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ENCADREUR') %}
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user\"></span><span class=\"mtext\"> Reunion </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_themes_index') }}\">Gestion des thémes</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_reunion_index') }}\">Gestion des Reunions</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user\"></span><span class=\"mtext\"> Utilisateurs </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_users_index') }}\">Gestion des utilisateurs</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ENCADREUR') %}
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon ion-android-menu\"></span><span class=\"mtext\">Autres</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_specialites_index') }}\">Spécialités</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"main-container\">
\t\t<div class=\"pd-ltr-20 xs-pd-20-10\">
\t\t\t<div class=\"min-height-200px\">
        {% block body %}{% endblock %}
   
        <div class=\"footer-wrap pd-20 mb-20 card-box\">
\t\t\t\tDaara - design By <a href=\"https://github.com/dropways\" target=\"_blank\"></a>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!-- JS inclusions -->
\t<script src=\"{{ asset('vendors/scripts/core.js') }}\"></script>
\t<script src=\"{{ asset('vendors/scripts/script.min.js') }}\"></script>
\t<script src=\"{{ asset('vendors/scripts/process.js') }}\"></script>
\t<script src=\"{{ asset('vendors/scripts/layout-settings.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}\"></script>
\t<script src=\"{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}\"></script>
\t<script src=\"{{ asset('vendors/scripts/datatable-setting.js') }}\"></script>
\t<!-- js -->
\t<script src=\"{{ asset('src/plugins/apexcharts/apexcharts.min.js')}}\"></script>
\t<script src=\"{{ asset('vendors/scripts/dashboard.js')}}\"></script>
\t
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\base.html.twig");
    }
}
