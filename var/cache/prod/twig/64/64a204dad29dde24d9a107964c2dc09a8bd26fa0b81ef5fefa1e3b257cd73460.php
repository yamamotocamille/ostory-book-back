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

/* user/index.html.twig */
class __TwigTemplate_88c700ca03c9e968c219c8bc6d265d1b34193d6476f8f9ac9a7e543c4f846232 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"my-5 py-5\">
    <div class=\"col-lg-9 mx-auto\">
    <h1>Liste des utilisateurs</h1>
    <a class=\"btn btn-primary float-end m-2\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Créer un nouvel utilisateur</a>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Rôles</th>
                <th>Pseudo</th>
                <th class=\"col-1\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 25)) {
                // line 26
                echo "                    ";
                if ((0 === twig_compare(((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 26)) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 26))) : ("")), "[\"ROLE_USER\"]"))) {
                    // line 27
                    echo "                        <td>Utilisateur</td>
                    ";
                } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,                 // line 28
$context["user"], "roles", [], "any", false, false, false, 28)) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 28))) : ("")), "[\"ROLE_MANAGER\"]"))) {
                    // line 29
                    echo "                        <td>Modérateur</td>
                    ";
                } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,                 // line 30
$context["user"], "roles", [], "any", false, false, false, 30)) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 30))) : ("")), "[\"ROLE_ADMIN\"]"))) {
                    // line 31
                    echo "                        <td>Administrateur</td>
                    ";
                } else {
                    // line 33
                    echo "                        <td> </td>
                    ";
                }
                // line 35
                echo "                ";
            }
            // line 36
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nickname", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>
                <div class=\"btn-group-vertical\">
                    <a class=\"btn btn-info m-1\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Voir</a>
                    <a class=\"btn btn-warning m-1\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Modifier</a>
                </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <tr>
                <td colspan=\"6\">Pas d'utilisateurs trouvés</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

     <a class=\"btn btn-primary float-end m-2\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Créer un nouvel utilisateur</a>
    ";
        // line 54
        echo "        <div class=\"navigation d-flex justify-content-center\">
            ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["users"] ?? null));
        echo "
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 55,  156 => 54,  152 => 52,  147 => 49,  138 => 45,  128 => 40,  124 => 39,  117 => 36,  114 => 35,  110 => 33,  106 => 31,  104 => 30,  101 => 29,  99 => 28,  96 => 27,  93 => 26,  91 => 25,  87 => 24,  84 => 23,  79 => 22,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/templates/user/index.html.twig");
    }
}
