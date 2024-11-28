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
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css\">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }
        .login-box {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            overflow: hidden;
            max-width: 800px; /* Limite la largeur totale */
            width: 100%;
        }
        .form-container {
            padding: 20px;
            width: 45%; /* Réduit la taille du formulaire */
        }
        .form-image {
            width: 55%; /* Réduit la taille de l'image */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            align-items: center;
        }
        .logo-container img {
            max-width: 100px; /* Réduit la taille du logo */
            margin-bottom: 15px;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-outline-success {
            border-color: #28a745;
            color: #28a745;
        }
        .btn-outline-success:hover {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class=\"container login-container\">
        <div class=\"login-box\">
            <!-- Image -->
            <div class=\"form-image cover\">
                <img src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/login-page-img.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
            </div>
            <!-- Form -->
            <div class=\"form-container\">
                <div class=\"text-center logo-container\">
                    <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/images/deskapp-logo.jpg"), "html", null, true);
        yield "\" alt=\"Logo\">
                </div>
                <h3 class=\"text-center text-success mb-3\">Se Connecter</h3>
                <form method=\"POST\">
                    ";
        // line 77
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 77, $this->source); })())) {
            // line 78
            yield "                    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 78, $this->source); })()), "messageKey", [], "any", false, false, false, 78), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 78, $this->source); })()), "messageData", [], "any", false, false, false, 78), "security"), "html", null, true);
            yield "</div>
                    ";
        }
        // line 80
        yield "                    <div class=\"mb-3\">
                        <label for=\"username\" class=\"form-label\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Votre email\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Mot de passe</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"********\" required>
                    </div>
                    <div class=\"mb-3 form-check\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\">
                        <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                    </div>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <a href=\"forgot-password.html\" class=\"text-muted\">Mot de passe oublié ?</a>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-success btn-lg w-100\">Se connecter</button>
                    
                    ";
        // line 98
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 98, $this->source); })())) == 0)) {
            // line 99
            yield "                    <div class=\"text-center mt-3\">
                        <p class=\"mb-2\">Vous n'avez pas de compte ?</p>
                        <a href=\"";
            // line 101
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-outline-success btn-lg\">S'inscrire</a>
                    </div>
                    ";
        }
        // line 104
        yield "                </form>
            </div>
        </div>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
        
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
        return array (  178 => 104,  172 => 101,  168 => 99,  166 => 98,  160 => 95,  144 => 82,  140 => 80,  134 => 78,  132 => 77,  125 => 73,  117 => 68,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css\">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }
        .login-box {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            overflow: hidden;
            max-width: 800px; /* Limite la largeur totale */
            width: 100%;
        }
        .form-container {
            padding: 20px;
            width: 45%; /* Réduit la taille du formulaire */
        }
        .form-image {
            width: 55%; /* Réduit la taille de l'image */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            align-items: center;
        }
        .logo-container img {
            max-width: 100px; /* Réduit la taille du logo */
            margin-bottom: 15px;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-outline-success {
            border-color: #28a745;
            color: #28a745;
        }
        .btn-outline-success:hover {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class=\"container login-container\">
        <div class=\"login-box\">
            <!-- Image -->
            <div class=\"form-image cover\">
                <img src=\"{{ asset('vendors/images/login-page-img.jpg') }}\" alt=\"Image\">
            </div>
            <!-- Form -->
            <div class=\"form-container\">
                <div class=\"text-center logo-container\">
                    <img src=\"{{ asset('vendors/images/deskapp-logo.jpg') }}\" alt=\"Logo\">
                </div>
                <h3 class=\"text-center text-success mb-3\">Se Connecter</h3>
                <form method=\"POST\">
                    {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <div class=\"mb-3\">
                        <label for=\"username\" class=\"form-label\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Votre email\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Mot de passe</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"********\" required>
                    </div>
                    <div class=\"mb-3 form-check\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\">
                        <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                    </div>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <a href=\"forgot-password.html\" class=\"text-muted\">Mot de passe oublié ?</a>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    <button type=\"submit\" class=\"btn btn-success btn-lg w-100\">Se connecter</button>
                    
                    {% if users|length == 0 %}
                    <div class=\"text-center mt-3\">
                        <p class=\"mb-2\">Vous n'avez pas de compte ?</p>
                        <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-success btn-lg\">S'inscrire</a>
                    </div>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
", "security/login.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\security\\login.html.twig");
    }
}
