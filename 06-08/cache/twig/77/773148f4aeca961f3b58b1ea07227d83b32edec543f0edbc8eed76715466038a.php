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

/* base/v_con2col.twig */
class __TwigTemplate_7623b45bded94f6431a0f3e09478adcebc4e015762265f90c5be82f88c48e5f6 extends Template
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
        echo "<div class=\"row\">
\t<aside class=\"col col-12 col-md-3\">
        ";
        // line 3
        echo (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 3, $this->source); })());
        echo "
\t</aside>
\t<main class=\"col col-12 col-md-9\">
\t\t<h1>";
        // line 6
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })());
        echo "</h1>
\t\t";
        // line 7
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })());
        echo "
\t</main>
</div>";
    }

    public function getTemplateName()
    {
        return "base/v_con2col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/v_con2col.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/base/v_con2col.twig");
    }
}
