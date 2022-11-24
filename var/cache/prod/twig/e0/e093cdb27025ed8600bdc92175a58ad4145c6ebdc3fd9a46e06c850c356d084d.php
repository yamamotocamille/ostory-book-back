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

/* page/show.html.twig */
class __TwigTemplate_877bd5da299a82ca00ba2f297a1b3395a3d5f1aa9698cf23e0d5ab45d4f48d62 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"my-5 py-5\">
    <div class=\"col-lg-6 mx-auto\">
    <a class=\"btn btn-info m-1 float-end\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_index");
        echo "\">Revenir à la liste</a>
    <h1>Page</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", false, false, false, 23), "html", null, true);
        echo "\" height=\"100px\" alt=\"poster de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Page de démarrage</th>
                <td>";
        // line 31
        echo ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "start", [], "any", false, false, false, 31)) ? ("Oui") : ("Non"));
        echo "</td>
            </tr>
            <tr>
                <th>Type de page</th>
                    ";
        // line 35
        if ((0 === twig_compare(((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pageEnd", [], "any", false, false, false, 35)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pageEnd", [], "any", false, false, false, 35), ", ")) : ("")), false))) {
            // line 36
            echo "                        <td>Aller vers une autre page</td>
                    ";
        } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,         // line 37
($context["page"] ?? null), "pageEnd", [], "any", false, false, false, 37)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pageEnd", [], "any", false, false, false, 37), ", ")) : ("")), 1))) {
            // line 38
            echo "                        <td>Victoire</td>
                    ";
        } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,         // line 39
($context["page"] ?? null), "pageEnd", [], "any", false, false, false, 39)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pageEnd", [], "any", false, false, false, 39), ", ")) : ("")), 2))) {
            // line 40
            echo "                        <td>Défaite</td>
                    ";
        } else {
            // line 42
            echo "                        <td> test</td>
                    ";
        }
        // line 44
        echo "            </tr>
        </tbody>
    </table>


    <a class=\"btn btn-primary col-2 m-1\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\">Modifier</a></button>

    ";
        // line 51
        echo twig_include($this->env, $context, "page/_delete_form.html.twig");
        echo "
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "page/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  136 => 49,  129 => 44,  125 => 42,  121 => 40,  119 => 39,  116 => 38,  114 => 37,  111 => 36,  109 => 35,  102 => 31,  95 => 27,  86 => 23,  79 => 19,  72 => 15,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page/show.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/templates/page/show.html.twig");
    }
}
