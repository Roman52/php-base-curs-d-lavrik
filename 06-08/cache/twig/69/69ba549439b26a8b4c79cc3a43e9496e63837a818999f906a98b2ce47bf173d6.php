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

/* base/v_main2c.twig */
class __TwigTemplate_212acdfd5bf52de7dabbbd378421930b4fab194629587343e2f13897feffadcf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/v_main.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/v_main.twig", "base/v_main2c.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"row\">
        <aside class=\"col col-12 col-md-3\">
            ";
        // line 5
        echo (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 5, $this->source); })());
        echo "
        </aside>
        <main class=\"col col-12 col-md-9\">
            <h1>";
        // line 8
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })());
        echo "</h1>
            <hr>
            ";
        // line 10
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 10, $this->source); })());
        echo "
        </main>
    </div>
";
    }

    public function getTemplateName()
    {
        return "base/v_main2c.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  60 => 8,  54 => 5,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/v_main2c.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/base/v_main2c.twig");
    }
}
