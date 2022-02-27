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

/* contacts/v_menu.twig */
class __TwigTemplate_0da144c6f5afd822e5e088668610e70088f41534519e97db11726355b3e38d92 extends Template
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
\t<li class=\"list-group-item\">Phone</li>
\t<li class=\"list-group-item\">Email</li>
\t<li class=\"list-group-item\">Form</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "contacts/v_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contacts/v_menu.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/contacts/v_menu.twig");
    }
}
