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

/* messages/v_add.twig */
class __TwigTemplate_2056e4a570ab57724e611592e825078417f71862176b0bce0895ff632df72f7e extends Template
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
        echo "<form method=\"post\">
\t<div class=\"form-group\">
\t\t<label for=\"msgFormName\">Name</label>
\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"msgFormName\" value=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4);
        echo "\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"msgFormText\">Name</label>
\t\t<textarea type=\"text\" name=\"text\" class=\"form-control\" id=\"msgFormText\">";
        // line 8
        echo twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8);
        echo "</textarea>
\t</div>
\t<button class=\"btn btn-success\">Send</button>
\t<div class=\"alert error-list\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["validateErrors"]) || array_key_exists("validateErrors", $context) ? $context["validateErrors"] : (function () { throw new RuntimeError('Variable "validateErrors" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "\t\t\t<p class=\"text-danger\">";
            echo $context["error"];
            echo "</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "messages/v_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  60 => 13,  56 => 12,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "messages/v_add.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/messages/v_add.twig");
    }
}
