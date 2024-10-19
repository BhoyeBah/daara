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

/* user/_form.html.twig */
class __TwigTemplate_d422a4725e48b977acc0ed1fcffe909b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<!-- Default Basic Forms Start -->


    ";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 5, $this->source); })()), 'form_start');
        yield "
    
    <div class=\"form-group row\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 36, $this->source); })()), "adresse", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 38, $this->source); })()), "adresse", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col-sm-12 col-md-10 offset-md-2\">
            <button type=\"submit\" class=\"btn btn-success\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 51, $this->source); })()), "Enrégistrer")) : ("Enrégistrer")), "html", null, true);
        yield "</button>
        </div>
    </div>
    ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 54, $this->source); })()), 'form_end');
        yield "
</div>
<!-- Default Basic Forms End -->
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
        return "user/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  168 => 54,  162 => 51,  153 => 45,  148 => 43,  140 => 38,  135 => 36,  127 => 31,  122 => 29,  114 => 24,  109 => 22,  101 => 17,  96 => 15,  88 => 10,  83 => 8,  77 => 5,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<!-- Default Basic Forms Start -->


    {{ form_start(formUser) }}
    
    <div class=\"form-group row\">
        {{ form_label(formUser.email, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(formUser.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(formUser.nom, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(formUser.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(formUser.prenom, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(formUser.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(formUser.telephone, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(formUser.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Téléphone'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(formUser.adresse, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(formUser.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(formUser.plainPassword, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(formUser.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col-sm-12 col-md-10 offset-md-2\">
            <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Enrégistrer') }}</button>
        </div>
    </div>
    {{ form_end(formUser) }}
</div>
<!-- Default Basic Forms End -->
{% endblock %}
", "user/_form.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\user\\_form.html.twig");
    }
}
