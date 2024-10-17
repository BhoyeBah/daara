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
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/img.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Lea R. Frith</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Erik L. Richards</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Renee I. Hansen</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/img.jpg\" alt=\"\">
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
\t\t\t\t\t\t\t<img src=\"vendors/images/photo1.jpg\" alt=\"\">
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
\t\t\t<a href=\"index.html\">
\t\t\t\t<img src=\"vendors/images/deskapp-logo.svg\" alt=\"\" class=\"dark-logo\">
\t\t\t\t<img src=\"vendors/images/deskapp-logo-white.svg\" alt=\"\" class=\"light-logo\">
\t\t\t</a>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-block customscroll\">
\t\t\t<div class=\"sidebar-menu\">
\t\t\t\t<ul id=\"accordion-menu\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-house-1\"></span><span class=\"mtext\">Tableau de board</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Dashboard style 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"index2.html\">Dashboard style 2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-edit2\"></span><span class=\"mtext\">Gestion des dahiras</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- <ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"form-basic.html\">Form Basic</a></li>
\t\t\t\t\t\t\t<li><a href=\"advanced-components.html\">Advanced Components</a></li>
\t\t\t\t\t\t\t<li><a href=\"form-wizard.html\">Form Wizard</a></li>
\t\t\t\t\t\t\t<li><a href=\"html5-editor.html\">HTML5 Editor</a></li>
\t\t\t\t\t\t\t<li><a href=\"form-pickers.html\">Form Pickers</a></li>
\t\t\t\t\t\t\t<li><a href=\"image-cropper.html\">Image Cropper</a></li>
\t\t\t\t\t\t\t<li><a href=\"image-dropzone.html\">Image Dropzone</a></li>
\t\t\t\t\t\t</ul> -->
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-library\"></span><span class=\"mtext\">Gestion des encadreurs</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 277
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_encadreur_index");
        yield "\">Liste des encadreurs</a></li>
\t\t\t\t\t\t\t<li><a href=\"datatable.html\">DataTables</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        yield "\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user1\"></span><span class=\"mtext\">Gestion des Membres</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 287
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        yield "\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user1\"></span><span class=\"mtext\">Gestion des utilisateurs</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- <li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-apartment\"></span><span class=\"mtext\"> UI Elements </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"ui-buttons.html\">Buttons</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-cards.html\">Cards</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-cards-hover.html\">Cards Hover</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-modals.html\">Modals</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-tabs.html\">Tabs</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-tooltip-popover.html\">Tooltip &amp; Popover</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-sweet-alert.html\">Sweet Alert</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-notification.html\">Notification</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-timeline.html\">Timeline</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-progressbar.html\">Progressbar</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-typography.html\">Typography</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-list-group.html\">List group</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-range-slider.html\">Range slider</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-carousel.html\">Carousel</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-paint-brush\"></span><span class=\"mtext\">Icons</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"font-awesome.html\">FontAwesome Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"foundation.html\">Foundation Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"ionicons.html\">Ionicons Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"themify.html\">Themify Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"custom-icon.html\">Custom Icons</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-analytics-21\"></span><span class=\"mtext\">Charts</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"highchart.html\">Highchart</a></li>
\t\t\t\t\t\t\t<li><a href=\"knob-chart.html\">jQuery Knob</a></li>
\t\t\t\t\t\t\t<li><a href=\"jvectormap.html\">jvectormap</a></li>
\t\t\t\t\t\t\t<li><a href=\"apexcharts.html\">Apexcharts</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-right-arrow1\"></span><span class=\"mtext\">Additional Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"video-player.html\">Video Player</a></li>
\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t<li><a href=\"forgot-password.html\">Forgot Password</a></li>
\t\t\t\t\t\t\t<li><a href=\"reset-password.html\">Reset Password</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-browser2\"></span><span class=\"mtext\">Error Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"400.html\">400</a></li>
\t\t\t\t\t\t\t<li><a href=\"403.html\">403</a></li>
\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t<li><a href=\"500.html\">500</a></li>
\t\t\t\t\t\t\t<li><a href=\"503.html\">503</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-copy\"></span><span class=\"mtext\">Extra Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"blank.html\">Blank</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact-directory.html\">Contact Directory</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog-detail.html\">Blog Detail</a></li>
\t\t\t\t\t\t\t<li><a href=\"product.html\">Product</a></li>
\t\t\t\t\t\t\t<li><a href=\"product-detail.html\">Product Detail</a></li>
\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ</a></li>
\t\t\t\t\t\t\t<li><a href=\"profile.html\">Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"gallery.html\">Gallery</a></li>
\t\t\t\t\t\t\t<li><a href=\"pricing-table.html\">Pricing Tables</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-list3\"></span><span class=\"mtext\">Multi Level Menu</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<span class=\"micon fa fa-plug\"></span><span class=\"mtext\">Level 2</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"submenu child\">
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 2</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"sitemap.html\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-diagram\"></span><span class=\"mtext\">Sitemap</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"chat.html\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-chat3\"></span><span class=\"mtext\">Chat</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"invoice.html\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-invoice\"></span><span class=\"mtext\">Invoice</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t</li> -->
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"sidebar-small-cap\">Extra</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-edit-2\"></span><span class=\"mtext\">Documentation</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"introduction.html\">Introduction</a></li>
\t\t\t\t\t\t\t<li><a href=\"getting-started.html\">Getting Started</a></li>
\t\t\t\t\t\t\t<li><a href=\"color-settings.html\">Color Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"third-party-plugins.html\">Third Party Plugins</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://dropways.github.io/deskapp-free-single-page-website-template/\" target=\"_blank\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-paper-plane1\"></span>
\t\t\t\t\t\t\t<span class=\"mtext\">Landing Page <img src=\"vendors/images/coming-soon.png\" alt=\"\" width=\"25\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"main-container\">
\t\t<div class=\"pd-ltr-20 xs-pd-20-10\">
\t\t\t<div class=\"min-height-200px\">
        ";
        // line 443
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 444
        yield "   
        <div class=\"footer-wrap pd-20 mb-20 card-box\">
\t\t\t\tDeskApp - Bootstrap 4 Admin Template By <a href=\"https://github.com/dropways\" target=\"_blank\">Ankit Hingarajiya</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!-- JS inclusions -->
\t<script src=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/core.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/script.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/process.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/layout-settings.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/dataTables.buttons.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.print.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.html5.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/buttons.flash.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/pdfmake.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/datatables/js/vfs_fonts.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/datatable-setting.js"), "html", null, true);
        yield "\"></script>
\t<!-- js -->
\t<script src=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/plugins/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/scripts/dashboard.js"), "html", null, true);
        yield "\"></script>
\t
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 443
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
        return array (  629 => 443,  614 => 469,  610 => 468,  605 => 466,  601 => 465,  597 => 464,  593 => 463,  589 => 462,  585 => 461,  581 => 460,  577 => 459,  573 => 458,  569 => 457,  565 => 456,  561 => 455,  557 => 454,  553 => 453,  549 => 452,  545 => 451,  536 => 444,  534 => 443,  375 => 287,  367 => 282,  359 => 277,  233 => 154,  222 => 148,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  67 => 11,  63 => 10,  59 => 9,  49 => 1,);
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
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/img.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Lea R. Frith</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Erik L. Richards</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/photo4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<h3>Renee I. Hansen</h3>
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"vendors/images/img.jpg\" alt=\"\">
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
\t\t\t\t\t\t\t<img src=\"vendors/images/photo1.jpg\" alt=\"\">
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
\t\t\t<a href=\"index.html\">
\t\t\t\t<img src=\"vendors/images/deskapp-logo.svg\" alt=\"\" class=\"dark-logo\">
\t\t\t\t<img src=\"vendors/images/deskapp-logo-white.svg\" alt=\"\" class=\"light-logo\">
\t\t\t</a>
\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu-block customscroll\">
\t\t\t<div class=\"sidebar-menu\">
\t\t\t\t<ul id=\"accordion-menu\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-house-1\"></span><span class=\"mtext\">Tableau de board</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Dashboard style 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"index2.html\">Dashboard style 2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-edit2\"></span><span class=\"mtext\">Gestion des dahiras</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- <ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"form-basic.html\">Form Basic</a></li>
\t\t\t\t\t\t\t<li><a href=\"advanced-components.html\">Advanced Components</a></li>
\t\t\t\t\t\t\t<li><a href=\"form-wizard.html\">Form Wizard</a></li>
\t\t\t\t\t\t\t<li><a href=\"html5-editor.html\">HTML5 Editor</a></li>
\t\t\t\t\t\t\t<li><a href=\"form-pickers.html\">Form Pickers</a></li>
\t\t\t\t\t\t\t<li><a href=\"image-cropper.html\">Image Cropper</a></li>
\t\t\t\t\t\t\t<li><a href=\"image-dropzone.html\">Image Dropzone</a></li>
\t\t\t\t\t\t</ul> -->
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-library\"></span><span class=\"mtext\">Gestion des encadreurs</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_encadreur_index') }}\">Liste des encadreurs</a></li>
\t\t\t\t\t\t\t<li><a href=\"datatable.html\">DataTables</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_users_index') }}\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user1\"></span><span class=\"mtext\">Gestion des Membres</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_users_index') }}\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-user1\"></span><span class=\"mtext\">Gestion des utilisateurs</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- <li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-apartment\"></span><span class=\"mtext\"> UI Elements </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"ui-buttons.html\">Buttons</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-cards.html\">Cards</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-cards-hover.html\">Cards Hover</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-modals.html\">Modals</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-tabs.html\">Tabs</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-tooltip-popover.html\">Tooltip &amp; Popover</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-sweet-alert.html\">Sweet Alert</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-notification.html\">Notification</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-timeline.html\">Timeline</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-progressbar.html\">Progressbar</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-typography.html\">Typography</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-list-group.html\">List group</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-range-slider.html\">Range slider</a></li>
\t\t\t\t\t\t\t<li><a href=\"ui-carousel.html\">Carousel</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-paint-brush\"></span><span class=\"mtext\">Icons</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"font-awesome.html\">FontAwesome Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"foundation.html\">Foundation Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"ionicons.html\">Ionicons Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"themify.html\">Themify Icons</a></li>
\t\t\t\t\t\t\t<li><a href=\"custom-icon.html\">Custom Icons</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-analytics-21\"></span><span class=\"mtext\">Charts</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"highchart.html\">Highchart</a></li>
\t\t\t\t\t\t\t<li><a href=\"knob-chart.html\">jQuery Knob</a></li>
\t\t\t\t\t\t\t<li><a href=\"jvectormap.html\">jvectormap</a></li>
\t\t\t\t\t\t\t<li><a href=\"apexcharts.html\">Apexcharts</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-right-arrow1\"></span><span class=\"mtext\">Additional Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"video-player.html\">Video Player</a></li>
\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t<li><a href=\"forgot-password.html\">Forgot Password</a></li>
\t\t\t\t\t\t\t<li><a href=\"reset-password.html\">Reset Password</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-browser2\"></span><span class=\"mtext\">Error Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"400.html\">400</a></li>
\t\t\t\t\t\t\t<li><a href=\"403.html\">403</a></li>
\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t<li><a href=\"500.html\">500</a></li>
\t\t\t\t\t\t\t<li><a href=\"503.html\">503</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-copy\"></span><span class=\"mtext\">Extra Pages</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"blank.html\">Blank</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact-directory.html\">Contact Directory</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog-detail.html\">Blog Detail</a></li>
\t\t\t\t\t\t\t<li><a href=\"product.html\">Product</a></li>
\t\t\t\t\t\t\t<li><a href=\"product-detail.html\">Product Detail</a></li>
\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ</a></li>
\t\t\t\t\t\t\t<li><a href=\"profile.html\">Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"gallery.html\">Gallery</a></li>
\t\t\t\t\t\t\t<li><a href=\"pricing-table.html\">Pricing Tables</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-list3\"></span><span class=\"mtext\">Multi Level Menu</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<span class=\"micon fa fa-plug\"></span><span class=\"mtext\">Level 2</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"submenu child\">
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 2</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Level 1</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"sitemap.html\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-diagram\"></span><span class=\"mtext\">Sitemap</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"chat.html\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-chat3\"></span><span class=\"mtext\">Chat</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"invoice.html\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-invoice\"></span><span class=\"mtext\">Invoice</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t</li> -->
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"sidebar-small-cap\">Extra</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-edit-2\"></span><span class=\"mtext\">Documentation</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li><a href=\"introduction.html\">Introduction</a></li>
\t\t\t\t\t\t\t<li><a href=\"getting-started.html\">Getting Started</a></li>
\t\t\t\t\t\t\t<li><a href=\"color-settings.html\">Color Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"third-party-plugins.html\">Third Party Plugins</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://dropways.github.io/deskapp-free-single-page-website-template/\" target=\"_blank\" class=\"dropdown-toggle no-arrow\">
\t\t\t\t\t\t\t<span class=\"micon dw dw-paper-plane1\"></span>
\t\t\t\t\t\t\t<span class=\"mtext\">Landing Page <img src=\"vendors/images/coming-soon.png\" alt=\"\" width=\"25\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"main-container\">
\t\t<div class=\"pd-ltr-20 xs-pd-20-10\">
\t\t\t<div class=\"min-height-200px\">
        {% block body %}{% endblock %}
   
        <div class=\"footer-wrap pd-20 mb-20 card-box\">
\t\t\t\tDeskApp - Bootstrap 4 Admin Template By <a href=\"https://github.com/dropways\" target=\"_blank\">Ankit Hingarajiya</a>
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
