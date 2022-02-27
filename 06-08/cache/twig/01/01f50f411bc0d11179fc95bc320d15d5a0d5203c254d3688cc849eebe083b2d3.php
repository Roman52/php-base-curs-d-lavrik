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

/* messages/v_message.twig */
class __TwigTemplate_af624a0f3a7cd8006136ff7bc3b79d247a415b1c70b23a7a874376a0c4b8b819 extends Template
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
        echo "<div>
\t<h1>";
        // line 2
        echo twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2);
        echo "</h1>
\t<div>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()), "text", [], "any", false, false, false, 3);
        echo "</div>
\t<hr>
\t<a href=\"index.php\">Main Page</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "messages/v_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "messages/v_message.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/messages/v_message.twig");
    }
}
