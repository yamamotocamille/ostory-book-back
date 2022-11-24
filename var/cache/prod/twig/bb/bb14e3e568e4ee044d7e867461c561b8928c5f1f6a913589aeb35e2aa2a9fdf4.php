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
class __TwigTemplate_2b0a8e83d85073302b85d5f20f5561f02c074cf098b09d08d4bf0d135637ebbd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"welcome\">
      ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "      <h1 class=\"col-lg-3 mx-auto mt-5 text-center\">Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "nickname", [], "any", false, false, false, 9), "html", null, true);
            echo "</h1>
      ";
        } else {
            // line 11
            echo "      <h1 class=\"col-lg-3 mx-auto mt-5 text-center\">Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "nickname", [], "any", false, false, false, 11), "html", null, true);
            echo "</h1>
      ";
        }
        // line 13
        echo "      <h4 class=\"col-lg-4 mx-auto mb-5 pb-3 pt-3 border-bottom border-top text-center\">Que voulez-vous faire aujourd'hui ?</h1>
</div>

<div class=\"row row-cols-1 row-cols-md-1 row-cols-lg-5 g-1 container-fluid justify-content-between\">
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
        return array (  134 => 55,  121 => 45,  108 => 35,  100 => 29,  92 => 24,  84 => 18,  82 => 17,  76 => 13,  70 => 11,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/home.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/templates/main/home.html.twig");
    }
}
