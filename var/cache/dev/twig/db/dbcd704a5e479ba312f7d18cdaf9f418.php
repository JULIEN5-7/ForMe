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

/* julien/Moncv.html.twig */
class __TwigTemplate_4842663e99cc94eb45272001a95ca1b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/Moncv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/Moncv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "julien/Moncv.html.twig", 1);
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

        echo "Mon CV";
        
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
    <header class=\"text-center mb-4\">
        <h1>Mon CV (Curriculum Vitae)</h1>
        <p class=\"lead\">Aspirant au poste d'expert en cybersécurité</p>
    </header>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Formation</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">BUT en Réseaux et Télécommunications(première année)</h3>
            
            </div>
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Expériences Professionnelles</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">Employés chez des particuliers</h3>
                <p class=\"card-text\">Dans la construction de batiment</p>
            </div>
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Compétences</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Réseaux et Télécommunications</li>
            <li class=\"list-group-item\">Programmation (C, Python, HTML, CSS, PHP)</li>
            <li class=\"list-group-item\">Administration Système</li>
            <li class=\"list-group-item\">Protocoles réseau (TCP/IP, DNS, DHCP)</li>
            <li class=\"list-group-item\">Travaux manuels</li>
            <li class=\"list-group-item\">Doué en mathématique</li>
        </ul>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Langues</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">Niveau de Langues</h3>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Français (Langue maternelle)</li>
                    <li class=\"list-group-item\">Anglais (Intermédiaire)</li>
                    <li class=\"list-group-item\">Espagnol (Débutant)</li>
                </ul>
            </div>
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Diplômes Obtenu</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">BEPC</h3>
                <p class=\"card-text\">Lycée Thuriaf, 2020/2021</p>
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">BAC C (Maths et Sciences physiques)</h3>
                <p class=\"card-text\">Lycée Thuriaf(Gabon), 2022/2023</p>
            </div>
            <!-- Ajouter plus de cartes pour d'autres diplômes si nécessaire -->
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Objectif Professionnel</h2>
        <p>Développer mes compétences en réseaux et télécommunications, contribuer de manière significative à des projets innovants et évoluer professionnellement dans le domaine de la technologie de l'information.</p>
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
        return "julien/Moncv.html.twig";
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

{% block title %}Mon CV{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <header class=\"text-center mb-4\">
        <h1>Mon CV (Curriculum Vitae)</h1>
        <p class=\"lead\">Aspirant au poste d'expert en cybersécurité</p>
    </header>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Formation</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">BUT en Réseaux et Télécommunications(première année)</h3>
            
            </div>
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Expériences Professionnelles</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">Employés chez des particuliers</h3>
                <p class=\"card-text\">Dans la construction de batiment</p>
            </div>
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Compétences</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Réseaux et Télécommunications</li>
            <li class=\"list-group-item\">Programmation (C, Python, HTML, CSS, PHP)</li>
            <li class=\"list-group-item\">Administration Système</li>
            <li class=\"list-group-item\">Protocoles réseau (TCP/IP, DNS, DHCP)</li>
            <li class=\"list-group-item\">Travaux manuels</li>
            <li class=\"list-group-item\">Doué en mathématique</li>
        </ul>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Langues</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">Niveau de Langues</h3>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Français (Langue maternelle)</li>
                    <li class=\"list-group-item\">Anglais (Intermédiaire)</li>
                    <li class=\"list-group-item\">Espagnol (Débutant)</li>
                </ul>
            </div>
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Diplômes Obtenu</h2>
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">BEPC</h3>
                <p class=\"card-text\">Lycée Thuriaf, 2020/2021</p>
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">BAC C (Maths et Sciences physiques)</h3>
                <p class=\"card-text\">Lycée Thuriaf(Gabon), 2022/2023</p>
            </div>
            <!-- Ajouter plus de cartes pour d'autres diplômes si nécessaire -->
        </div>
    </section>

    <section class=\"my-4\">
        <h2 class=\"mb-3\">Objectif Professionnel</h2>
        <p>Développer mes compétences en réseaux et télécommunications, contribuer de manière significative à des projets innovants et évoluer professionnellement dans le domaine de la technologie de l'information.</p>
    </section>
    <footer class=\"text-center mt-5\">
        <p>&copy; 2024 JulienNkoma - Tous droits réservés. | Contact : juliennkoma75@gmail.com</p>
        <p>Ce site est protégé contre la copie. Toute reproduction non autorisée est interdite.</p>
    </footer>
    
</div>
{% endblock %}
", "julien/Moncv.html.twig", "C:\\Users\\julie\\mon_portfolio\\templates\\julien\\Moncv.html.twig");
    }
}
