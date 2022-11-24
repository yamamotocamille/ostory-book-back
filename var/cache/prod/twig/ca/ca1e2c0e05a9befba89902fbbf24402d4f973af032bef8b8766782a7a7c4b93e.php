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
class __TwigTemplate_e02f1bf47c25226fa85ef00750201e2774a90700a99c134077699e2a9ea19a33 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des pages";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"my-5 py-5\">
    <div class=\"col-lg-9 mx-auto overflow-auto\">
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
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
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
                        ";
            // line 34
            if ((0 === twig_compare(((twig_get_attribute($this->env, $this->source, $context["page"], "pageEnd", [], "any", false, false, false, 34)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, $context["page"], "pageEnd", [], "any", false, false, false, 34), ", ")) : ("")), false))) {
                // line 35
                echo "                            <td>Aller vers une autre page</td>
                        ";
            } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,             // line 36
$context["page"], "pageEnd", [], "any", false, false, false, 36)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, $context["page"], "pageEnd", [], "any", false, false, false, 36), ", ")) : ("")), 1))) {
                // line 37
                echo "                            <td>Victoire</td>
                        ";
            } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,             // line 38
$context["page"], "pageEnd", [], "any", false, false, false, 38)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, $context["page"], "pageEnd", [], "any", false, false, false, 38), ", ")) : ("")), 2))) {
                // line 39
                echo "                            <td>Défaite</td>
                        ";
            } else {
                // line 41
                echo "                            <td> test</td>
                        ";
            }
            // line 43
            echo "                    <td>
                    <div class=\"btn-group-vertical\">
                        <a class=\"btn btn-info m-1\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_show", ["id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Voir</a>
                        <a class=\"btn btn-warning m-1\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                    </div>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                <tr>
                    <td colspan=\"7\">Pas de pages trouvées</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>

        <a class=\"btn btn-primary float-end m-2\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page_new");
        echo "\">Créer une nouvelle page</a>

        ";
        // line 61
        echo "        <div class=\"navigation d-flex justify-content-center\">
            ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pages"] ?? null));
        echo "
        </div>

    </div>
</div>

";
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
        return array (  177 => 62,  174 => 61,  169 => 58,  164 => 55,  155 => 51,  145 => 46,  141 => 45,  137 => 43,  133 => 41,  129 => 39,  127 => 38,  124 => 37,  122 => 36,  119 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  99 => 30,  95 => 29,  91 => 28,  88 => 27,  83 => 26,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page/index.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/templates/page/index.html.twig");
    }
}
