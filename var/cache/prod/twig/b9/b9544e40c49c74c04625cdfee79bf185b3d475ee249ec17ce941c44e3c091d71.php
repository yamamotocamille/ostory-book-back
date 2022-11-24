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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig */
class __TwigTemplate_5ccb8a25257c2f147940a0c1dc77c37b884663ff5eb9e7600ad12013a003aa7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-right\">
        ";
        // line 11
        if (($context["sorted"] ?? null)) {
            // line 12
            echo "            ";
            if ((0 === twig_compare(($context["direction"] ?? null), "desc"))) {
                // line 13
                echo "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 15
                echo "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 20
        echo "    </span>
    ";
        // line 21
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  74 => 20,  70 => 18,  67 => 17,  63 => 15,  59 => 13,  56 => 12,  54 => 11,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig");
    }
}
