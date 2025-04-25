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

/* dahiras/_form.html.twig */
class __TwigTemplate_e99c79de339b56736a1906a6fee5b47f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dahiras/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dahiras/_form.html.twig"));

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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        yield "
    
    <div class=\"form-group row\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
        </div>
    </div>


    <div class=\"form-group row\">
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "adresse", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "adresse", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "col-sm-12 col-md-2 col-form-label"]]);
        yield "
        <div class=\"col-sm-12 col-md-10\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col-sm-12 col-md-10 offset-md-2\">
            <button type=\"submit\" class=\"btn btn-success\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 31, $this->source); })()), "Enrégistrer")) : ("Enrégistrer")), "html", null, true);
        yield "</button>
        </div>
    </div>
    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
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
        return "dahiras/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  130 => 34,  124 => 31,  115 => 25,  110 => 23,  102 => 18,  97 => 16,  88 => 10,  83 => 8,  77 => 5,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<!-- Default Basic Forms Start -->


    {{ form_start(form) }}
    
    <div class=\"form-group row\">
        {{ form_label(form.nom, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
        </div>
    </div>


    <div class=\"form-group row\">
        {{ form_label(form.adresse, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse'}}) }}
        </div>
    </div>

    <div class=\"form-group row\">
        {{ form_label(form.description, null, {'label_attr': {'class': 'col-sm-12 col-md-2 col-form-label'}}) }}
        <div class=\"col-sm-12 col-md-10\">
            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description'}}) }}
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
{% endblock %}
", "dahiras/_form.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\dahiras\\_form.html.twig");
    }
}
