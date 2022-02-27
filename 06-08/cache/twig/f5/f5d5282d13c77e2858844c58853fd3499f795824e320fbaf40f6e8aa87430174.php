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

/* messages/v_index.twig */
class __TwigTemplate_306905b042a5105b9c1813dee1718e75ecc518df3741f2acfe2a2df46c1a6333 extends Template
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
        echo "<a href=\"index.php?view=table\">View as table</a>
<hr>
<div>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "\t\t<div>
\t\t\t<strong>";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["message"], "name", [], "any", false, false, false, 6);
            echo "</strong>
\t\t\t<em>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["message"], "dt_add", [], "any", false, false, false, 7);
            echo "</em>
\t\t\t<div>";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["message"], "text", [], "any", false, false, false, 8);
            echo "</div>
\t\t\t<a href=\"index.php?c=message&id=";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["message"], "id_message", [], "any", false, false, false, 9);
            echo "\">
\t\t\t\tRead more
\t\t\t</a>
\t\t\t<hr>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "messages/v_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "messages/v_index.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/messages/v_index.twig");
    }
}
