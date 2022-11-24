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

/* main/home.html.twig */
class __TwigTemplate_1cf43b2d75dcb4fab79e2b36cfd7e79c6dc934c6cfbed012c64f46607f541c52 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"welcome\">
      ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "      <h1 class=\"col-lg-3 mx-auto mt-5 text-center\">Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "nickname", [], "any", false, false, false, 9), "html", null, true);
            echo "</h1>
      ";
        } else {
            // line 11
            echo "      <h1 class=\"col-lg-3 mx-auto mt-5 text-center\">Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "nickname", [], "any", false, false, false, 11), "html", null, true);
            echo "</h1>
      ";
        }
        // line 13
        echo "      <h4 class=\"col-lg-4 mx-auto mb-5 pb-3 pt-3 border-bottom border-top text-center\">Que voulez-vous faire aujourd'hui ?</h1>
</div>

<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-5 g-2 container-fluid justify-content-around\">
";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Utilisateurs</h5>
        <p class=\"card-text\">Accéder à la liste des utilisateurs.</p>
        <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
";
        }
        // line 29
        echo "  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Histoires</h5>
        <p class=\"card-text\">Accéder à la liste des histoires.</p>
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_index");
        echo "\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Pages</h5>
        <p class=\"card-text\">Accéder à la liste des pages.</p>
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_index");
        echo "\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Choix</h5>
        <p class=\"card-text\">Accéder à la liste des choix.</p>
        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_choice_index");
        echo "\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Personnages</h5>
        <p class=\"card-text\">Accéder à la liste des personnages.</p>
        <a href=\"#\" class=\"btn btn-primary disabled\">Prochainement</a>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 55,  151 => 45,  138 => 35,  130 => 29,  122 => 24,  114 => 18,  112 => 17,  106 => 13,  100 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<div class=\"welcome\">
      {% if is_granted('ROLE_ADMIN') %}
      <h1 class=\"col-lg-3 mx-auto mt-5 text-center\">Bienvenue {{ app.user.nickname }}</h1>
      {% else %}
      <h1 class=\"col-lg-3 mx-auto mt-5 text-center\">Bienvenue {{ app.user.nickname }}</h1>
      {% endif %}
      <h4 class=\"col-lg-4 mx-auto mb-5 pb-3 pt-3 border-bottom border-top text-center\">Que voulez-vous faire aujourd'hui ?</h1>
</div>

<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-5 g-2 container-fluid justify-content-around\">
{% if is_granted('ROLE_ADMIN') %}
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Utilisateurs</h5>
        <p class=\"card-text\">Accéder à la liste des utilisateurs.</p>
        <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
{% endif %}
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Histoires</h5>
        <p class=\"card-text\">Accéder à la liste des histoires.</p>
        <a href=\"{{ path('app_story_index') }}\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Pages</h5>
        <p class=\"card-text\">Accéder à la liste des pages.</p>
        <a href=\"{{ path('app_page_index') }}\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Choix</h5>
        <p class=\"card-text\">Accéder à la liste des choix.</p>
        <a href=\"{{ path('app_choice_index') }}\" class=\"btn btn-primary\">Go !</a>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card h-100 text-center bg-light\">
      <img src=\"https://images.pexels.com/photos/1029141/pexels-photo-1029141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\" height=\"200px\" widght=\"150px\" class=\"rounded mx-auto d-block img-fluid\" alt=\"...\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Personnages</h5>
        <p class=\"card-text\">Accéder à la liste des personnages.</p>
        <a href=\"#\" class=\"btn btn-primary disabled\">Prochainement</a>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "main/home.html.twig", "/var/www/html/Apothéose/07-le-site-dont-vous-etes-le-heros-back/templates/main/home.html.twig");
    }
}
