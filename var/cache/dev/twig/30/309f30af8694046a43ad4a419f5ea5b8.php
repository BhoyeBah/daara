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

/* encadreur/_form.html.twig */
class __TwigTemplate_e72b0feb776cbf668bda691f4b2fde24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encadreur/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encadreur/_form.html.twig"));

        // line 1
        yield "<!-- Default Basic Forms Start -->


    ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        yield "
    
    <div class=\"form-group row\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "telephone", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "telephone", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "adresse", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "adresse", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        yield "
        </div>
    </div>
    <div class=\"form-group row\">
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dahiras", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dahiras", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col-sm-12 col-md-10 offset-md-2\">
            <button type=\"submit\" class=\"btn btn-success\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Enrégistrer")) : ("Enrégistrer")), "html", null, true);
        yield "</button>
        </div>
    </div>
    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
</div>
<!-- Default Basic Forms End -->
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
        return "encadreur/_form.html.twig";
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
        return array (  143 => 52,  137 => 49,  128 => 43,  123 => 41,  116 => 37,  111 => 35,  103 => 30,  98 => 28,  90 => 23,  85 => 21,  77 => 16,  72 => 14,  64 => 9,  59 => 7,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Default Basic Forms Start -->


    {{ form_start(form) }}
    
    <div class=\"form-group row\">
        {{ form_label(form.email, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(form.nom, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(form.prenom, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(form.telephone, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Téléphone'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(form.adresse, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse'}}) }}
        </div>
    </div>
    <div class=\"form-group row\">
        {{ form_label(form.dahiras, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.dahiras, {'attr': {'class': 'form-control', 'placeholder': 'Adresse'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col-sm-12 col-md-10 offset-md-2\">
            <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Enrégistrer') }}</button>
        </div>
    </div>
    {{ form_end(form) }}
</div>
<!-- Default Basic Forms End -->
 ", "encadreur/_form.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\encadreur\\_form.html.twig");
    }
}
