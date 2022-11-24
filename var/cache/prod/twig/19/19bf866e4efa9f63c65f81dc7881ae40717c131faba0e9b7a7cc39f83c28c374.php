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

/* user/show.html.twig */
class __TwigTemplate_45fd5b1396e42d948361e6e5f8f3e566004d2e23d961ea51b0905a12359de991 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Utilisateur";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Revenir à la liste</a>
    
    <h1>Utilisateur</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Email</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                    ";
        // line 20
        if ((0 === twig_compare(((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 20)) ? (json_encode(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 20))) : ("")), "[\"ROLE_USER\"]"))) {
            // line 21
            echo "                        <td>Utilisateur</td>
                    ";
        } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,         // line 22
($context["user"] ?? null), "roles", [], "any", false, false, false, 22)) ? (json_encode(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 22))) : ("")), "[\"ROLE_MANAGER\"]"))) {
            // line 23
            echo "                        <td>Modérateur</td>
                    ";
        } elseif ((0 === twig_compare(((twig_get_attribute($this->env, $this->source,         // line 24
($context["user"] ?? null), "roles", [], "any", false, false, false, 24)) ? (json_encode(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 24))) : ("")), "[\"ROLE_ADMIN\"]"))) {
            // line 25
            echo "                        <td>Administrateur</td>
                    ";
        } else {
            // line 27
            echo "                        <td> </td>
                    ";
        }
        // line 29
        echo "            </tr>
            <tr>
                <th>Pseudo</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    

    <a class=\"btn btn-primary col-2 m-1\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  115 => 39,  105 => 32,  100 => 29,  96 => 27,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 20,  73 => 16,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/show.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/templates/user/show.html.twig");
    }
}
