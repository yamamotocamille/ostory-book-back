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

/* page/index.html.twig */
class __TwigTemplate_7f68d44b00b0481f159bde24f4d0a0cad1980420382f7b74c0fab71e9a4701e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
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

        echo "Liste des pages";
        
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
        echo "<div class=\"my-5 py-5\">
    <div class=\"col-lg-9 mx-auto\">
        <h1>Liste des pages</h1>

        <a class=\"btn btn-primary float-end m-2\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_new");
        echo "\">Créer une nouvelle page</a>

        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre de la page</th>
                    <th>Image</th>
                    <th>Contenu</th>
                    <th>Histoire liée</th>
                    <th>Page de démarrage</th>
                    <th>Type de page</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "image", [], "any", false, false, false, 30), "html", null, true);
            echo "\" height=\"100px\" alt=\"poster de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 31)), 80))) ? ((twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 31), 0, 80), " "), 0,  -1), " ") . "…")) : (twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 31))), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "story", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["page"], "start", [], "any", false, false, false, 33)) ? ("Oui") : ("Non"));
            echo "</td>
                    <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["page"], "pageEnd", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["page"], "pageEnd", [], "any", false, false, false, 34), ", "), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>
                    <div class=\"btn-group-vertical\">
                        <a class=\"btn btn-info m-1\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_show", ["id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Voir</a>
                        <a class=\"btn btn-warning m-1\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                    </div>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "                <tr>
                    <td colspan=\"7\">Pas de pages trouvées</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>

        <a class=\"btn btn-primary float-end m-2\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_new");
        echo "\">Créer une nouvelle page</a>

        ";
        // line 53
        echo "        <div class=\"navigation d-flex justify-content-center\">
            ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 54, $this->source); })()));
        echo "
        </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  186 => 53,  181 => 50,  176 => 47,  167 => 43,  157 => 38,  153 => 37,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  129 => 30,  125 => 29,  121 => 28,  118 => 27,  113 => 26,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des pages{% endblock %}

{% block body %}
<div class=\"my-5 py-5\">
    <div class=\"col-lg-9 mx-auto\">
        <h1>Liste des pages</h1>

        <a class=\"btn btn-primary float-end m-2\" href=\"{{ path('app_page_new') }}\">Créer une nouvelle page</a>

        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre de la page</th>
                    <th>Image</th>
                    <th>Contenu</th>
                    <th>Histoire liée</th>
                    <th>Page de démarrage</th>
                    <th>Type de page</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            {% for page in pages %}
                <tr>
                    <td>{{ page.id }}</td>
                    <td>{{ page.title }}</td>
                    <td><img src=\"{{ page.image }}\" height=\"100px\" alt=\"poster de {{ page.title }}\"></td>
                    <td>{{ page.content|length > 80 ? page.content|slice(0, 80)|split(' ')|slice(0, -1)|join(' ') ~ '…' : page.content }}</td>
                    <td>{{ page.story }}</td>
                    <td>{{ page.start ? 'Oui' : 'Non' }}</td>
                    <td>{{ page.pageEnd ? page.pageEnd|join(', ') : '' }}</td>
                    <td>
                    <div class=\"btn-group-vertical\">
                        <a class=\"btn btn-info m-1\" href=\"{{ path('app_page_show', {'id': page.id}) }}\">Voir</a>
                        <a class=\"btn btn-warning m-1\" href=\"{{ path('app_page_edit', {'id': page.id}) }}\">Modifier</a>
                    </td>
                    </div>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">Pas de pages trouvées</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a class=\"btn btn-primary float-end m-2\" href=\"{{ path('app_page_new') }}\">Créer une nouvelle page</a>

        {# display navigation #}
        <div class=\"navigation d-flex justify-content-center\">
            {{ knp_pagination_render(pages) }}
        </div>

    </div>
</div>

{% endblock %}
", "page/index.html.twig", "/var/www/html/Apothéose/07-le-site-dont-vous-etes-le-heros-back/templates/page/index.html.twig");
    }
}
