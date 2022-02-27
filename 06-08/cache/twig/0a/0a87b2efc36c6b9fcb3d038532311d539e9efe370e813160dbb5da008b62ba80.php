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

/* messages/v_index_table.twig */
class __TwigTemplate_25d2a771622cbaded71b344703de7c620c4ee591fd551a1193ecaf800b5f850a extends Template
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
        echo "<a href=\"index.php\">View as list</a>
<hr>
<table class=\"table table-bordered\">
\t<tbody>
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["message"], "name", [], "any", false, false, false, 7);
            echo "</td>
\t\t\t\t<td>";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["message"], "dt_add", [], "any", false, false, false, 8);
            echo "</td>
\t\t\t\t<td>";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["message"], "status", [], "any", false, false, false, 9);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "messages/v_index_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  58 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "messages/v_index_table.twig", "/Users/roman52/domains/php-lavrik.loc/06-08/views/messages/v_index_table.twig");
    }
}
