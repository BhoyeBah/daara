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

/* security/login.html.twig */
class __TwigTemplate_9a9f9bb32bf59bda12a2c8b62c23df43 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
\t<!-- Basic Page Info -->
\t<meta charset=\"utf-8\">
\t<title>Daara</title>

\t<!-- Site favicon -->
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"vendors/images/apple-touch-icon.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"vendors/images/favicon-32x32.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"vendors/images/favicon-16x16.png\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/core.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/icon-font.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/style.css\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>
<body class=\"login-page\">
\t<div class=\"login-header box-shadow\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t<img src=\"vendors/images/deskapp-logo.svg\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!-- <div class=\"login-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"register.html\"></a></li>
\t\t\t\t</ul>
\t\t\t</div> -->
\t\t</div>
\t</div>
\t<div class=\"login-wrap d-flex align-items-center flex-wrap justify-content-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-7\">
\t\t\t\t\t<img src=\"vendors/images/login-page-img.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t<div class=\"login-box bg-white box-shadow border-radius-10\">
\t\t\t\t\t\t<div class=\"login-title\">
\t\t\t\t\t\t\t<h2 class=\"text-center text-success\">Se Connecter</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"POST\">
                        ";
        // line 60
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 60, $this->source); })())) {
            // line 61
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageKey", [], "any", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageData", [], "any", false, false, false, 61), "security"), "html", null, true);
            yield "</div>
                        ";
        }
        // line 63
        yield "
                        ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) {
            // line 65
            yield "                            <div class=\"mb-3\">
                                You are logged in as ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "userIdentifier", [], "any", false, false, false, 66), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                            </div>
                        ";
        }
        // line 69
        yield "
\t\t\t\t\t\t\t<!-- <div class=\"select-role\">
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn active\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"admin\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><img src=\"vendors/images/briefcase.svg\" class=\"svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<span>I'm</span>
\t\t\t\t\t\t\t\t\t\tManager
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><img src=\"vendors/images/person.svg\" class=\"svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<span>I'm</span>
\t\t\t\t\t\t\t\t\t\tEmployee
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t<div class=\"input-group custom\">
                                <input type=\"email\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus class=\"form-control form-control-lg\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append custom\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-copy dw dw-user1\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group custom\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control form-control-lg\" placeholder=\"**********\" autocomplete=\"current-password\" required>
    \t\t\t\t\t\t\t\t<div class=\"input-group-append custom\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"dw dw-padlock1\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row pb-30\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"  name=\"_remember_me\" id=\"_remember_me\" class=\"custom-control-input\" id=\"customCheck1\">
\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"_remember_me\">Se souvenir</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"forgot-password\"><a href=\"forgot-password.html\">Mot de passe oublié</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group mb-0\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success btn-lg btn-block\" type=\"submit\" value=\"Se connecter\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 116
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 116, $this->source); })())) == 0)) {
            // line 117
            yield "\t\t\t\t\t\t\t\t<div class=\"font-16 weight-600 pt-10 pb-10 text-center\" data-color=\"#707373\">Vous n'avez pas de compte</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-0\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-primary btn-lg btn-block\" href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 122
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- js -->
\t<script src=\"vendors/scripts/core.js\"></script>
\t<script src=\"vendors/scripts/script.min.js\"></script>
\t<script src=\"vendors/scripts/process.js\"></script>
\t<script src=\"vendors/scripts/layout-settings.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  200 => 122,  194 => 119,  190 => 117,  188 => 116,  178 => 109,  153 => 87,  133 => 69,  125 => 66,  122 => 65,  120 => 64,  117 => 63,  111 => 61,  109 => 60,  48 => 1,);
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
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"vendors/images/apple-touch-icon.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"vendors/images/favicon-32x32.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"vendors/images/favicon-16x16.png\">

\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<!-- Google Font -->
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t<!-- CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/core.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/icon-font.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendors/styles/style.css\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-119386393-1');
\t</script>
</head>
<body class=\"login-page\">
\t<div class=\"login-header box-shadow\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t<img src=\"vendors/images/deskapp-logo.svg\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!-- <div class=\"login-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"register.html\"></a></li>
\t\t\t\t</ul>
\t\t\t</div> -->
\t\t</div>
\t</div>
\t<div class=\"login-wrap d-flex align-items-center flex-wrap justify-content-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-7\">
\t\t\t\t\t<img src=\"vendors/images/login-page-img.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t<div class=\"login-box bg-white box-shadow border-radius-10\">
\t\t\t\t\t\t<div class=\"login-title\">
\t\t\t\t\t\t\t<h2 class=\"text-center text-success\">Se Connecter</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"POST\">
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}

                        {% if app.user %}
                            <div class=\"mb-3\">
                                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                            </div>
                        {% endif %}

\t\t\t\t\t\t\t<!-- <div class=\"select-role\">
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn active\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"admin\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><img src=\"vendors/images/briefcase.svg\" class=\"svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<span>I'm</span>
\t\t\t\t\t\t\t\t\t\tManager
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><img src=\"vendors/images/person.svg\" class=\"svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<span>I'm</span>
\t\t\t\t\t\t\t\t\t\tEmployee
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t<div class=\"input-group custom\">
                                <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus class=\"form-control form-control-lg\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append custom\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-copy dw dw-user1\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group custom\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control form-control-lg\" placeholder=\"**********\" autocomplete=\"current-password\" required>
    \t\t\t\t\t\t\t\t<div class=\"input-group-append custom\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"dw dw-padlock1\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row pb-30\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"  name=\"_remember_me\" id=\"_remember_me\" class=\"custom-control-input\" id=\"customCheck1\">
\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"_remember_me\">Se souvenir</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"forgot-password\"><a href=\"forgot-password.html\">Mot de passe oublié</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group mb-0\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success btn-lg btn-block\" type=\"submit\" value=\"Se connecter\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if users|length == 0 %}
\t\t\t\t\t\t\t\t<div class=\"font-16 weight-600 pt-10 pb-10 text-center\" data-color=\"#707373\">Vous n'avez pas de compte</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-0\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-primary btn-lg btn-block\" href=\"{{ path('app_register') }}\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- js -->
\t<script src=\"vendors/scripts/core.js\"></script>
\t<script src=\"vendors/scripts/script.min.js\"></script>
\t<script src=\"vendors/scripts/process.js\"></script>
\t<script src=\"vendors/scripts/layout-settings.js\"></script>
</body>
</html>", "security/login.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\security\\login.html.twig");
    }
}
