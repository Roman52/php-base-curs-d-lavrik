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

/* base/v_main.twig */
class __TwigTemplate_b70889f6499c451ec37a4e5c125c965b3efa41af99187e9cb773c816b974a8c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 5
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })());
        echo "</title>
\t<link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"assets/css/main.css\">
</head>
<body>
<header class=\"site-header\">
\t<div class=\"container\">
\t\t<div class=\"logo\">
\t\t\t<div class=\"logo__title h3\">My site</div>
\t\t\t<div class=\"logo__subtitle h6\">About some themes</div>
\t\t</div>
\t</div>
</header>
<nav class=\"site-nav\">
\t<div class=\"container\">
\t\t<ul class=\"nav\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"index.php\">Home</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"index.php?c=add\">Add</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"index.php?c=contacts\">Contacts</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>
<div class=\"site-content\">
\t<div class=\"container\">
\t\t";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 42
        echo "\t</div>
</div>
<footer class=\"site-footer\">
\t<div class=\"container\">
\t\t&copy; site about all
\t</div>
</footer>
</body>
</html>";
    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t\t\t<main>
\t\t\t\t<h1>";
        // line 37
        echo (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 37, $this->source); })());
        echo "</h1>
\t\t\t\t<hr>
\t\t\t\t";
        // line 39
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 39, $this->source); })());
        echo "
\t\t\t</main>
\t\t";
    }

    public function getTemplateName()
    {
        return "base/v_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  98 => 37,  95 => 36,  91 => 35,  79 => 42,  77 => 35,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/v_main.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/base/v_main.twig");
    }
}
