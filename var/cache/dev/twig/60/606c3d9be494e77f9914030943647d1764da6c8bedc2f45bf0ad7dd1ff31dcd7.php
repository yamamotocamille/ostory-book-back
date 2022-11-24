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

/* story/index.html.twig */
class __TwigTemplate_1b122215e5bb289b600adf7bc7e897d4ccf590a05b10d7ef4573e5d7770d6cf5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "story/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "story/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "story/index.html.twig", 1);
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

        echo "Liste des histoires";
        
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
<div class=\"my-5 py-5\">
    <div class=\"col-lg-9 mx-auto\">
    <h1>Liste des histoires</h1>
    <a class=\"btn btn-primary float-end m-2\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_new");
        echo "\">Créer une nouvelle histoire</a>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Image</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stories"]) || array_key_exists("stories", $context) ? $context["stories"] : (function () { throw new RuntimeError('Variable "stories" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "content", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "image", [], "any", false, false, false, 26), "html", null, true);
            echo "\" height=\"100px\" alt=\"poster de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "\"></td>
                <td>
                <div class=\"btn-group-vertical\">
                    <a class=\"btn btn-info m-1\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_show", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Voir</a>
                    <a class=\"btn btn-warning m-1\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Modifier</a>
                </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr>
                <td colspan=\"6\">Pas d'histoires trouvées</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

     <a class=\"btn btn-primary float-end m-2\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_new");
        echo "\">Créer une nouvelle histoire</a>
    ";
        // line 44
        echo "        <div class=\"navigation d-flex justify-content-center\">
            ";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["stories"]) || array_key_exists("stories", $context) ? $context["stories"] : (function () { throw new RuntimeError('Variable "stories" does not exist.', 45, $this->source); })()));
        echo "
        </div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "story/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 45,  165 => 44,  161 => 42,  156 => 39,  147 => 35,  137 => 30,  133 => 29,  125 => 26,  121 => 25,  117 => 24,  114 => 23,  109 => 22,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des histoires{% endblock %}

{% block body %}

<div class=\"my-5 py-5\">
    <div class=\"col-lg-9 mx-auto\">
    <h1>Liste des histoires</h1>
    <a class=\"btn btn-primary float-end m-2\" href=\"{{ path('app_story_new') }}\">Créer une nouvelle histoire</a>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Image</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for story in stories %}
            <tr>
                <td>{{ story.title }}</td>
                <td>{{ story.content }}</td>
                <td><img src=\"{{ story.image }}\" height=\"100px\" alt=\"poster de {{ story.title }}\"></td>
                <td>
                <div class=\"btn-group-vertical\">
                    <a class=\"btn btn-info m-1\" href=\"{{ path('app_story_show', {'id': story.id}) }}\">Voir</a>
                    <a class=\"btn btn-warning m-1\" href=\"{{ path('app_story_edit', {'id': story.id}) }}\">Modifier</a>
                </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Pas d'histoires trouvées</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

     <a class=\"btn btn-primary float-end m-2\" href=\"{{ path('app_story_new') }}\">Créer une nouvelle histoire</a>
    {# display navigation #}
        <div class=\"navigation d-flex justify-content-center\">
            {{ knp_pagination_render(stories) }}
        </div>

    
{% endblock %}
", "story/index.html.twig", "/var/www/html/Apothéose/07-le-site-dont-vous-etes-le-heros-back/templates/story/index.html.twig");
    }
}
