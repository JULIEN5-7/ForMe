<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* julien/portfolio.html.twig */
class __TwigTemplate_6ceb6e90b62da86e78a55aed658cb2f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "julien/portfolio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Compétences";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Compétences et Apprentissage critiques</h1>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">RT1 - Administrer les réseaux et l'internet</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Savoir identifier les dysfonctionnements du réseau local</li>
            <li class=\"list-group-item\">Configurer les fonctions de base du réseau local</li>
            <li class=\"list-group-item\">Installer un poste client</li>
            <li class=\"list-group-item\">Maitriser les lois fondamentales de l'électricité afin d'intervenir sur des équipements de R&T</li>
        </ul>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">RT2 - Connecter les entreprises et les usagers</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Mesurer et analyser les signaux</li>
            <li class=\"list-group-item\">Déployer des supports de transmissions</li>
            <li class=\"list-group-item\">Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</li>
            <li class=\"list-group-item\">Communiquer avec un client ou collaborateur</li>
        </ul>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">RT3 - Créer des outils et applications informatiques pour les R&T</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Lire, exécuter, corriger et modifier un programme</li>
            <li class=\"list-group-item\">Traduire un algorithme en langage C ou Python</li>
            <li class=\"list-group-item\">Utiliser les outils informatiques</li>
            <li class=\"list-group-item\">Connaître l'architecture et les technologies d'un site Web</li>
            <li class=\"list-group-item\">Utiliser un système informatique et ses outils (infos système, fichiers, CLI, zips, outils collaboratifs sur internet, hygiène informatique...;référentiels PIX et CyberEdu).</li>
            <li class=\"list-group-item\">Connaitre l'architecture et les technologies d'un site Web (langage et outils : HTML, CSS, CMS, JS, responsive).</li>
        </ul>
    </section>
    <footer class=\"text-center mt-5\">
        <p>&copy; 2024 JulienNkoma - Tous droits réservés. | Contact : juliennkoma75@gmail.com</p>
        <p>Ce site est protégé contre la copie. Toute reproduction non autorisée est interdite.</p>
    </footer>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "julien/portfolio.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compétences{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Compétences et Apprentissage critiques</h1>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">RT1 - Administrer les réseaux et l'internet</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Savoir identifier les dysfonctionnements du réseau local</li>
            <li class=\"list-group-item\">Configurer les fonctions de base du réseau local</li>
            <li class=\"list-group-item\">Installer un poste client</li>
            <li class=\"list-group-item\">Maitriser les lois fondamentales de l'électricité afin d'intervenir sur des équipements de R&T</li>
        </ul>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">RT2 - Connecter les entreprises et les usagers</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Mesurer et analyser les signaux</li>
            <li class=\"list-group-item\">Déployer des supports de transmissions</li>
            <li class=\"list-group-item\">Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</li>
            <li class=\"list-group-item\">Communiquer avec un client ou collaborateur</li>
        </ul>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">RT3 - Créer des outils et applications informatiques pour les R&T</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Lire, exécuter, corriger et modifier un programme</li>
            <li class=\"list-group-item\">Traduire un algorithme en langage C ou Python</li>
            <li class=\"list-group-item\">Utiliser les outils informatiques</li>
            <li class=\"list-group-item\">Connaître l'architecture et les technologies d'un site Web</li>
            <li class=\"list-group-item\">Utiliser un système informatique et ses outils (infos système, fichiers, CLI, zips, outils collaboratifs sur internet, hygiène informatique...;référentiels PIX et CyberEdu).</li>
            <li class=\"list-group-item\">Connaitre l'architecture et les technologies d'un site Web (langage et outils : HTML, CSS, CMS, JS, responsive).</li>
        </ul>
    </section>
    <footer class=\"text-center mt-5\">
        <p>&copy; 2024 JulienNkoma - Tous droits réservés. | Contact : juliennkoma75@gmail.com</p>
        <p>Ce site est protégé contre la copie. Toute reproduction non autorisée est interdite.</p>
    </footer>
</div>
{% endblock %}
", "julien/portfolio.html.twig", "C:\\Users\\julie\\mon_portfolio\\templates\\julien\\portfolio.html.twig");
    }
}
