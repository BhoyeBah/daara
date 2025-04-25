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

/* reunion/rapport_print.html.twig */
class __TwigTemplate_e3b87e7a85f125f1d6547d2fa844221a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunion/rapport_print.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunion/rapport_print.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" 
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <title>Fiche de Compte Rendu de Réunion</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Utilisation de flexbox pour garantir que le footer soit en bas */
        }

        .container {
            margin-top: 20px; /* Réduit la marge supérieure */
            flex: 1; /* Permet à la section principale de se développer pour occuper l'espace */
        }

        .header {
            text-align: center;
            margin-bottom: 15px; /* Réduit la marge inférieure */
        }

        .header img {
            max-width: 150px; /* Contrôle la largeur maximale du logo */
            width: 100%; /* Le logo est réactif */
            height: auto; /* Conserve les proportions de l'image */
            margin-bottom: 10px; /* Espacement sous le logo */
        }

        .titre {
            font-size: 32px;
            font-weight: bold;
            color: #039c4f;
            text-decoration: underline;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #039c4f;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .text {
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .table thead {
            background-color: #c5fbae;
            color: #000;
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #ddd !important;
            padding: 6px; /* Réduit l'espace dans les cellules */
        }

        .table-success-light {
            background-color: #f9f9f9;
        }

        .badge-success {
            background-color: #28a745;
        }

        .badge-danger {
            background-color: #dc3545;
        }

        .footer-line {
            border-top: 2px solid #039c4f;
            margin-top: 30px;
        }

        .footer {
            margin-top: 15px;
            text-align: center;
            font-size: 12px;
            color: #666;
            padding: 10px 0; /* Ajout d'un peu de padding pour espacement */
        }

        .footer a {
            color: #039c4f;
            text-decoration: none;
        }

        /* Styles for printing */
        @media print {
            .no-print {
                display: none;
            }

            .table-bordered {
                border: 1px solid #000 !important;
            }

            .footer {
                font-size: 10px;
                margin-top: 20px;
            }

            .section-title {
                font-size: 18px;
                font-weight: bold;
                color: #039c4f;
                text-align: left;
            }
        }
    </style>
</head>

<body onload=\"window.print()\" onafterprint=\"window.location.href='";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reunion_index");
        yield "'\">

<div class=\"container\">
    <!-- Header Section -->
    <div class=\"header\">
        <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/logorap/logo.jpg"), "html", null, true);
        yield "\" alt=\"Logo\"> <!-- Le logo sera redimensionné ici -->
        <div class=\"titre\">FICHE DE COMPTE RENDU DE RÉUNION</div>
    </div>

    <!-- Informations de la Réunion -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p><strong>Date de la Réunion : </strong> ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 142, $this->source); })()), "date", [], "any", false, false, false, 142), "d/m/Y H:i"), "html", null, true);
        yield "</p>
            <p><strong>Nom de la Dahira : </strong> ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 143, $this->source); })()), "dahiras", [], "any", false, false, false, 143), "nom", [], "any", false, false, false, 143), "html", null, true);
        yield "</p>
            <p><strong>Lieu de la Réunion : </strong> ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 144, $this->source); })()), "lieu", [], "any", false, false, false, 144), "html", null, true);
        yield "</p>
        </div>
        <div class=\"col-md-6 text-end\">
            <p><strong>Encadreur : </strong> ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 147, $this->source); })()), "encadreur", [], "any", false, false, false, 147), "nom", [], "any", false, false, false, 147), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 147, $this->source); })()), "encadreur", [], "any", false, false, false, 147), "prenom", [], "any", false, false, false, 147), "html", null, true);
        yield "</p>
            <p><strong>Président de la Dahira : </strong> M. Alioune Diop</p>
        </div>
    </div>

    <!-- Liste des Présences -->
    <div class=\"section-title\">Liste des Présences</div>
    <table class=\"table table-bordered table-success-light text-center\">
        <thead>
            <tr>
                <th>Nom</th>
                <th class=\"tt\">Prénom</th>
                <th>Poste</th>
                <th>Présent</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["presences"]) || array_key_exists("presences", $context) ? $context["presences"] : (function () { throw new RuntimeError('Variable "presences" does not exist.', 164, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["presence"]) {
            // line 165
            yield "            <tr>
                <td>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "membre", [], "any", false, false, false, 166), "nom", [], "any", false, false, false, 166), "html", null, true);
            yield "</td>
                <td class=\"tt\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "membre", [], "any", false, false, false, 167), "prenom", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
                <td>Tresorerie</td>
                <td>
                    <span class=\"badge ";
            // line 170
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "present", [], "any", false, false, false, 170)) ? ("badge-success") : ("badge-danger"));
            yield "\">
                        ";
            // line 171
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "present", [], "any", false, false, false, 171)) ? ("Présent") : ("Absent"));
            yield "
                    </span>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 175
        if (!$context['_iterated']) {
            // line 176
            yield "            <tr>
                <td colspan=\"3\" class=\"text-center\">Aucune présence enregistrée.</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['presence'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "        </tbody>
    </table>

    <!-- Thème -->
    <div class=\"section-title\">THÈME CAUSERIE DU MARABOUT</div>
    <p>
        Le thème de la réunion était : \"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 186, $this->source); })()), "theme", [], "any", false, false, false, 186), "nom", [], "any", false, false, false, 186), "html", null, true);
        yield "\".
    </p>

    <!-- Sujet Abordé (Paragraphes) -->
    <div class=\"section-title\">SUJETS ABORDÉS</div>
    <p>
        ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 192, $this->source); })()), "sujetaborde", [], "any", false, false, false, 192), "html", null, true);
        yield "
    </p>

    <!-- Décisions Prises (Paragraphes) -->
    <div class=\"section-title\">Décisions Prises</div>
    <p>
    ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 198, $this->source); })()), "decisionprise", [], "any", false, false, false, 198), "html", null, true);
        yield "
    </p>

    <!-- Intervenants -->
    <div class=\"section-title\">Intervenants</div>
    <p>
        Les intervenants principaux lors de cette réunion étaient :
    </p>
    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 206, $this->source); })()), "membres", [], "any", false, false, false, 206));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 207
            yield "
    <ul>
        <li><strong>";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 209), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 209), "html", null, true);
            yield "</strong> - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "poste", [], "any", false, false, false, 209), "html", null, true);
            yield "</li>
    </ul>
    ";
            $context['_iterated'] = true;
        }
        // line 211
        if (!$context['_iterated']) {
            // line 212
            yield "        <li>
            <strong colspan=\"3\" class=\"text-center\">Aucun intervenant enregistré.</strong>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "</div>

<!-- Footer Section -->
<div class=\"footer-line\"></div>
<div class=\"footer\">
    Siège : Sicap Liberté 3, Villa N° 1974 Dakar - Tél: + 221 33 824 33 70 / 77 532 94 60 (SG) <br>
    Email: <a href=\"mailto:dahiratoul_salihate@yahoo.fr\">dahiratoul_salihate@yahoo.fr</a> - 
    Site web: <a href=\"http://www.al-ihsaane.org\" target=\"_blank\">www.al-ihsaane.org</a>
</div>

<!-- Print Buttons -->
<div class=\"no-print text-center mt-4\">
    <button class=\"btn btn-warning\" onclick=\"window.print()\">
        <i class=\"bx bx-printer\"></i> Imprimer
    </button>
    <a href=\"";
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reunion_index");
        yield "\" class=\"btn btn-success\">
        <i class=\"bx bx-arrow-back\"></i> Retour
    </a>
</div>

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
        return "reunion/rapport_print.html.twig";
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
        return array (  360 => 231,  343 => 216,  334 => 212,  332 => 211,  321 => 209,  317 => 207,  312 => 206,  301 => 198,  292 => 192,  283 => 186,  275 => 180,  266 => 176,  264 => 175,  255 => 171,  251 => 170,  245 => 167,  241 => 166,  238 => 165,  233 => 164,  211 => 147,  205 => 144,  201 => 143,  197 => 142,  187 => 135,  179 => 130,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" 
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <title>Fiche de Compte Rendu de Réunion</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Utilisation de flexbox pour garantir que le footer soit en bas */
        }

        .container {
            margin-top: 20px; /* Réduit la marge supérieure */
            flex: 1; /* Permet à la section principale de se développer pour occuper l'espace */
        }

        .header {
            text-align: center;
            margin-bottom: 15px; /* Réduit la marge inférieure */
        }

        .header img {
            max-width: 150px; /* Contrôle la largeur maximale du logo */
            width: 100%; /* Le logo est réactif */
            height: auto; /* Conserve les proportions de l'image */
            margin-bottom: 10px; /* Espacement sous le logo */
        }

        .titre {
            font-size: 32px;
            font-weight: bold;
            color: #039c4f;
            text-decoration: underline;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #039c4f;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .text {
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .table thead {
            background-color: #c5fbae;
            color: #000;
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #ddd !important;
            padding: 6px; /* Réduit l'espace dans les cellules */
        }

        .table-success-light {
            background-color: #f9f9f9;
        }

        .badge-success {
            background-color: #28a745;
        }

        .badge-danger {
            background-color: #dc3545;
        }

        .footer-line {
            border-top: 2px solid #039c4f;
            margin-top: 30px;
        }

        .footer {
            margin-top: 15px;
            text-align: center;
            font-size: 12px;
            color: #666;
            padding: 10px 0; /* Ajout d'un peu de padding pour espacement */
        }

        .footer a {
            color: #039c4f;
            text-decoration: none;
        }

        /* Styles for printing */
        @media print {
            .no-print {
                display: none;
            }

            .table-bordered {
                border: 1px solid #000 !important;
            }

            .footer {
                font-size: 10px;
                margin-top: 20px;
            }

            .section-title {
                font-size: 18px;
                font-weight: bold;
                color: #039c4f;
                text-align: left;
            }
        }
    </style>
</head>

<body onload=\"window.print()\" onafterprint=\"window.location.href='{{ path('app_reunion_index') }}'\">

<div class=\"container\">
    <!-- Header Section -->
    <div class=\"header\">
        <img src=\"{{ asset('vendors/logorap/logo.jpg') }}\" alt=\"Logo\"> <!-- Le logo sera redimensionné ici -->
        <div class=\"titre\">FICHE DE COMPTE RENDU DE RÉUNION</div>
    </div>

    <!-- Informations de la Réunion -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p><strong>Date de la Réunion : </strong> {{ reunion.date|date('d/m/Y H:i') }}</p>
            <p><strong>Nom de la Dahira : </strong> {{ reunion.dahiras.nom }}</p>
            <p><strong>Lieu de la Réunion : </strong> {{ reunion.lieu}}</p>
        </div>
        <div class=\"col-md-6 text-end\">
            <p><strong>Encadreur : </strong> {{ reunion.encadreur.nom}} {{ reunion.encadreur.prenom }}</p>
            <p><strong>Président de la Dahira : </strong> M. Alioune Diop</p>
        </div>
    </div>

    <!-- Liste des Présences -->
    <div class=\"section-title\">Liste des Présences</div>
    <table class=\"table table-bordered table-success-light text-center\">
        <thead>
            <tr>
                <th>Nom</th>
                <th class=\"tt\">Prénom</th>
                <th>Poste</th>
                <th>Présent</th>
            </tr>
        </thead>
        <tbody>
        {% for presence in presences %}
            <tr>
                <td>{{ presence.membre.nom }}</td>
                <td class=\"tt\">{{ presence.membre.prenom }}</td>
                <td>Tresorerie</td>
                <td>
                    <span class=\"badge {{ presence.present ? 'badge-success' : 'badge-danger' }}\">
                        {{ presence.present ? 'Présent' : 'Absent' }}
                    </span>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"3\" class=\"text-center\">Aucune présence enregistrée.</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <!-- Thème -->
    <div class=\"section-title\">THÈME CAUSERIE DU MARABOUT</div>
    <p>
        Le thème de la réunion était : \"{{ reunion.theme.nom }}\".
    </p>

    <!-- Sujet Abordé (Paragraphes) -->
    <div class=\"section-title\">SUJETS ABORDÉS</div>
    <p>
        {{ reunion.sujetaborde}}
    </p>

    <!-- Décisions Prises (Paragraphes) -->
    <div class=\"section-title\">Décisions Prises</div>
    <p>
    {{ reunion.decisionprise }}
    </p>

    <!-- Intervenants -->
    <div class=\"section-title\">Intervenants</div>
    <p>
        Les intervenants principaux lors de cette réunion étaient :
    </p>
    {% for membre in reunion.membres %}

    <ul>
        <li><strong>{{ membre.nom }} {{ membre.prenom }}</strong> - {{ membre.poste }}</li>
    </ul>
    {% else %}
        <li>
            <strong colspan=\"3\" class=\"text-center\">Aucun intervenant enregistré.</strong>
        </li>
    {% endfor %}
</div>

<!-- Footer Section -->
<div class=\"footer-line\"></div>
<div class=\"footer\">
    Siège : Sicap Liberté 3, Villa N° 1974 Dakar - Tél: + 221 33 824 33 70 / 77 532 94 60 (SG) <br>
    Email: <a href=\"mailto:dahiratoul_salihate@yahoo.fr\">dahiratoul_salihate@yahoo.fr</a> - 
    Site web: <a href=\"http://www.al-ihsaane.org\" target=\"_blank\">www.al-ihsaane.org</a>
</div>

<!-- Print Buttons -->
<div class=\"no-print text-center mt-4\">
    <button class=\"btn btn-warning\" onclick=\"window.print()\">
        <i class=\"bx bx-printer\"></i> Imprimer
    </button>
    <a href=\"{{ path('app_reunion_index') }}\" class=\"btn btn-success\">
        <i class=\"bx bx-arrow-back\"></i> Retour
    </a>
</div>

</body>
</html>
", "reunion/rapport_print.html.twig", "C:\\xampp\\htdocs\\mydaara\\templates\\reunion\\rapport_print.html.twig");
    }
}
