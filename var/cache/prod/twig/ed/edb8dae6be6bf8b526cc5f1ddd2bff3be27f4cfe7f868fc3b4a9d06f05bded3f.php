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

/* @email/default/notification/body.html.twig */
class __TwigTemplate_55bb6306c8c81a12816e72fa8d8f4c4ef7b73aa8f84875f3eaf0c46ad304558c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@email/zurb_2/notification/body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@email/zurb_2/notification/body.html.twig", "@email/default/notification/body.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@email/default/notification/body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/default/notification/body.html.twig", "/var/www/html/Apothéose/Front et back/07-le-site-dont-vous-etes-le-heros-back/vendor/symfony/twig-bridge/Resources/views/Email/default/notification/body.html.twig");
    }
}
