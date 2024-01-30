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

/* julien/ensavoirplus.html.twig */
class __TwigTemplate_9a5988f775a82702a50dbed7a28976e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/ensavoirplus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/ensavoirplus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "julien/ensavoirplus.html.twig", 1);
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

        echo "Learn more about JulienNkoma";
        
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
        echo "<div class=\"container mt-5 text-center\">
    <h1>Learn more about JulienNkoma</h1>

    <section class=\"my-4\">
        <h2>My Hobbies</h2>
        <p>Since childhood, I have enjoyed cooking African and foreign dishes. Whenever I can, I indulge in this passion. In my free time, I watch anime and conduct research related to my education and topics that interest me.</p>
        <div class=\"image-gallery d-flex justify-content-between\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poulet-a-la-sauce-graine-gabon..jpg"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"img-fluid img-thumbnail\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dragon-ball-z-poster-cell-saga-.jpg"), "html", null, true);
        echo "\" alt=\"Image 2\" class=\"img-fluid img-thumbnail\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/info.jpg"), "html", null, true);
        echo "\" alt=\"Image 3\" class=\"img-fluid img-thumbnail\">
        </div>
    </section>

    <section class=\"my-4\">
        <h2>My Passions</h2>
        <p>I really enjoy playing football; it helps me forget all my problems when I'm on the field. I've also developed a passion for anime, and I'm quite skilled at drawing. Additionally, Christianity has been a significant part of my life since childhood, and the Christian faith is important to me.</p>
        <div class=\"image-gallery\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Ronaldo.jpg"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"img-fluid img-thumbnail\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dessin-coiffure-fille-manga.jpg"), "html", null, true);
        echo "\" alt=\"Image 2\" class=\"img-fluid img-thumbnail\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/croix.jpg"), "html", null, true);
        echo "\" alt=\"Image 3\" class=\"img-fluid img-thumbnail\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/piano.jpg"), "html", null, true);
        echo "\" alt=\"Image 4\" class=\"img-fluid img-thumbnail\">
        </div>
    </section>

    <section class=\"my-4\">
        <h2>My Desires</h2>
        <p>To become wealthy, achieve stability, and be on good terms with everyone.</p>
        <div class=\"image-gallery d-flex justify-content-between\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/argent.jpg"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"img-fluid img-thumbnail\">
            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Sans titre.jpg"), "html", null, true);
        echo "\" alt=\"Image 2\" class=\"img-fluid img-thumbnail\">
        </div>
    </section>
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
        return "julien/ensavoirplus.html.twig";
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
        return array (  143 => 35,  139 => 34,  128 => 26,  124 => 25,  120 => 24,  116 => 23,  105 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Learn more about JulienNkoma{% endblock %}

{% block body %}
<div class=\"container mt-5 text-center\">
    <h1>Learn more about JulienNkoma</h1>

    <section class=\"my-4\">
        <h2>My Hobbies</h2>
        <p>Since childhood, I have enjoyed cooking African and foreign dishes. Whenever I can, I indulge in this passion. In my free time, I watch anime and conduct research related to my education and topics that interest me.</p>
        <div class=\"image-gallery d-flex justify-content-between\">
            <img src=\"{{ asset('images/poulet-a-la-sauce-graine-gabon..jpg') }}\" alt=\"Image 1\" class=\"img-fluid img-thumbnail\">
            <img src=\"{{ asset('images/dragon-ball-z-poster-cell-saga-.jpg') }}\" alt=\"Image 2\" class=\"img-fluid img-thumbnail\">
            <img src=\"{{ asset('images/info.jpg') }}\" alt=\"Image 3\" class=\"img-fluid img-thumbnail\">
        </div>
    </section>

    <section class=\"my-4\">
        <h2>My Passions</h2>
        <p>I really enjoy playing football; it helps me forget all my problems when I'm on the field. I've also developed a passion for anime, and I'm quite skilled at drawing. Additionally, Christianity has been a significant part of my life since childhood, and the Christian faith is important to me.</p>
        <div class=\"image-gallery\">
            <img src=\"{{ asset('images/Ronaldo.jpg') }}\" alt=\"Image 1\" class=\"img-fluid img-thumbnail\">
            <img src=\"{{ asset('images/dessin-coiffure-fille-manga.jpg') }}\" alt=\"Image 2\" class=\"img-fluid img-thumbnail\">
            <img src=\"{{ asset('images/croix.jpg') }}\" alt=\"Image 3\" class=\"img-fluid img-thumbnail\">
            <img src=\"{{ asset('images/piano.jpg') }}\" alt=\"Image 4\" class=\"img-fluid img-thumbnail\">
        </div>
    </section>

    <section class=\"my-4\">
        <h2>My Desires</h2>
        <p>To become wealthy, achieve stability, and be on good terms with everyone.</p>
        <div class=\"image-gallery d-flex justify-content-between\">
            <img src=\"{{ asset('images/argent.jpg') }}\" alt=\"Image 1\" class=\"img-fluid img-thumbnail\">
            <img src=\"{{ asset('images/Sans titre.jpg') }}\" alt=\"Image 2\" class=\"img-fluid img-thumbnail\">
        </div>
    </section>
</div>
{% endblock %}
", "julien/ensavoirplus.html.twig", "C:\\Users\\julie\\OneDrive\\Dokumenti\\mon_portfolio\\templates\\julien\\ensavoirplus.html.twig");
    }
}
