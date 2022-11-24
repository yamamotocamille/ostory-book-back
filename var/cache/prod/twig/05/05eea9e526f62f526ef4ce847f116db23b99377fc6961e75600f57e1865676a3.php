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
class __TwigTemplate_c170f989606c044447bb5d3f113dd9ca239c85387b9da0b18971e6ec1b17f942 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "story/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des histoires";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["stories"] ?? null));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["story"], "content", [], "any", false, false, false, 25)), "truncate", [0 => 215, 1 => "..."], "method", false, false, false, 25), "html", null, true);
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["stories"] ?? null));
        echo "
        </div>

    
";
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
        return array (  138 => 45,  135 => 44,  131 => 42,  126 => 39,  117 => 35,  107 => 30,  103 => 29,  95 => 26,  91 => 25,  87 => 24,  84 => 23,  79 => 22,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "story/index.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/templates/story/index.html.twig");
    }
}
