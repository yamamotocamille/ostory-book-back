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

/* story/show.html.twig */
class __TwigTemplate_4ba0869592ceca126fb48d8d5fd8181630311058893c27a3a8a95dbe13dee50c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "story/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Histoires";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"my-5 py-5\">
    <div class=\"col-lg-6 mx-auto\">
    <a class=\"btn btn-info m-1 float-end\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_index");
        echo "\">Revenir à la liste</a>

    <h1>Histoires</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Titre</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "content", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "image", [], "any", false, false, false, 25), "html", null, true);
        echo "\" height=\"100px\" alt=\"poster de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "\"></td>
            </tr>
        </tbody>
    </table>

    

    <a class=\"btn btn-primary col-2 m-1\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 34
        echo twig_include($this->env, $context, "story/_delete_form.html.twig");
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "story/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  100 => 32,  88 => 25,  81 => 21,  74 => 17,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "story/show.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/templates/story/show.html.twig");
    }
}
