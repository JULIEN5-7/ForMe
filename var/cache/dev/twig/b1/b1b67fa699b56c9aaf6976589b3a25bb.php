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

/* julien/index.html.twig */
class __TwigTemplate_fa2cd74f16ce4748776a2d53ce709a06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "julien/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "julien/index.html.twig", 1);
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

        echo "Bienvenue sur mon ePortfolio - Julien Nkoma";
        
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
        echo "    <section class=\"hero is-primary is-fullheight-with-navbar\">
        <div class=\"hero-body\">
            <div class=\"container\">
                <h1 class=\"title is-size-1\">
                    Welcome to my Personal Website
                </h1>
                <h2 class=\"subtitle is-size-4\">
                    I am Julien Nkoma, a Gabonese student currently in my first year of Networking and Telecommunications at the IUT of Roanne in France. I hold a Baccalaureate degree in Mathematics and Physics (Bac C).
                </h2>
                <p class=\"is-size-5\">
                    Passionate about the art and science of connecting the world, I immerse myself in the fascinating mysteries of networking and telecommunications.
                </p>
                <p class=\"is-size-5\">
                    As a determined student, I am committed to exploring the complexities of this dynamic field. My ePortfolio serves as a virtual window into my academic journey, innovative projects, and ongoing quest for technical mastery.
                </p>
                <p class=\"is-size-5\">
                    Join me on this exciting adventure where technology meets connectivity, and discover how I contribute to shaping the future of communication.
                </p>

                <!-- Section: Personal Information -->
                <div class=\"personal-info mt-5\">
                    <h2 class=\"is-size-3\">Personal Information</h2>
                    <p>Email: juliennkoma75@gmail.com</p>
                    <p>Phone: +667220297</p>
                    <p>Location: Roanne 42300, France</p>
                    <!-- Add more personal information as needed -->
                </div>

                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ensavoirplus");
        echo "\" class=\"button is-secondary is-rounded is-medium mt-5\">
                    Learn More
                </a>
            </div>
            <footer class=\"text-center mt-5\">
        <p>&copy; 2024 JulienNkoma - Tous droits réservés. | Contact : juliennkoma75@gmail.com</p>
        <p>Ce site est protégé contre la copie. Toute reproduction non autorisée est interdite.</p>
    </footer>
    
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "julien/index.html.twig";
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
        return array (  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur mon ePortfolio - Julien Nkoma{% endblock %}

{% block body %}
    <section class=\"hero is-primary is-fullheight-with-navbar\">
        <div class=\"hero-body\">
            <div class=\"container\">
                <h1 class=\"title is-size-1\">
                    Welcome to my Personal Website
                </h1>
                <h2 class=\"subtitle is-size-4\">
                    I am Julien Nkoma, a Gabonese student currently in my first year of Networking and Telecommunications at the IUT of Roanne in France. I hold a Baccalaureate degree in Mathematics and Physics (Bac C).
                </h2>
                <p class=\"is-size-5\">
                    Passionate about the art and science of connecting the world, I immerse myself in the fascinating mysteries of networking and telecommunications.
                </p>
                <p class=\"is-size-5\">
                    As a determined student, I am committed to exploring the complexities of this dynamic field. My ePortfolio serves as a virtual window into my academic journey, innovative projects, and ongoing quest for technical mastery.
                </p>
                <p class=\"is-size-5\">
                    Join me on this exciting adventure where technology meets connectivity, and discover how I contribute to shaping the future of communication.
                </p>

                <!-- Section: Personal Information -->
                <div class=\"personal-info mt-5\">
                    <h2 class=\"is-size-3\">Personal Information</h2>
                    <p>Email: juliennkoma75@gmail.com</p>
                    <p>Phone: +667220297</p>
                    <p>Location: Roanne 42300, France</p>
                    <!-- Add more personal information as needed -->
                </div>

                <a href=\"{{ path('ensavoirplus') }}\" class=\"button is-secondary is-rounded is-medium mt-5\">
                    Learn More
                </a>
            </div>
            <footer class=\"text-center mt-5\">
        <p>&copy; 2024 JulienNkoma - Tous droits réservés. | Contact : juliennkoma75@gmail.com</p>
        <p>Ce site est protégé contre la copie. Toute reproduction non autorisée est interdite.</p>
    </footer>
    
        </div>
    </section>
{% endblock %}
", "julien/index.html.twig", "C:\\Users\\julie\\mon_portfolio\\templates\\julien\\index.html.twig");
    }
}
