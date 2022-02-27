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

/* messages/v_message_menu.twig */
class __TwigTemplate_5878bba8c455bf0c3476de0c0a9101c58251232a2d0a033d602eb71a3717d530 extends Template
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
        // line 1
        echo "<ul class=\"list-group\">
\t<li class=\"list-group-item\">Edit</li>
\t<li class=\"list-group-item\">Delete</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "messages/v_message_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "messages/v_message_menu.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/messages/v_message_menu.twig");
    }
}
