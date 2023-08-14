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

/* themes/custom/mytheme/templates/views/views-view-unformatted--section5--block-1.html.twig */
class __TwigTemplate_a209e79dead1450d84b7791447fd637b extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section>

\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "

\t\t<div class=\"s5-allcontainer\">
\t\t\t<div class=\"s5-container\">
\t\t\t\t<div class=\"s5-heading\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 10), "field_name", [], "any", false, false, true, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 10, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s5-container2\">
\t\t\t\t<div class=\"s5-cards\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 18), "field_icon1", [], "any", false, false, true, 18)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 18, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h4>
\t\t\t\t\t\t";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), "field_number_text", [], "any", false, false, true, 22)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 22, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</h4>
\t\t\t\t\t<div class=\"pb-5\">
\t\t\t\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25), "field_text1", [], "any", false, false, true, 25)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 25, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"read-more-btn\" href=";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), "field_btn", [], "any", false, false, true, 28)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url"] ?? null) : null), 28, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), "field_btn", [], "any", false, false, true, 28)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#title"] ?? null) : null), 28, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s5-cards\">
\t\t\t\t<div>
\t\t\t\t\t<span class=\"icon\">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33), "field_icon2", [], "any", false, false, true, 33)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), 33, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<h4>
\t\t\t\t\t";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36), "field_number_text2", [], "any", false, false, true, 36)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), 36, $this->source), "html", null, true);
            echo "
\t\t\t\t</h4>
\t\t\t\t<div class=\"pb-5\">
\t\t\t\t\t";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39), "field_text2", [], "any", false, false, true, 39)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), 39, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"read-more-btn\" href=";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_11 = (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42), "field_btn2", [], "any", false, false, true, 42)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#url"] ?? null) : null), 42, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_13 = (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42), "field_btn2", [], "any", false, false, true, 42)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[0] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#title"] ?? null) : null), 42, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s5-cards\">
\t\t\t\t<div>
\t\t\t\t\t<span class=\"icon\">";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 47), "field_icon3", [], "any", false, false, true, 47)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), 47, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<h4>
\t\t\t\t\t";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 50), "field_number_text3", [], "any", false, false, true, 50)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null), 50, $this->source), "html", null, true);
            echo "
\t\t\t\t</h4>
\t\t\t\t<div class=\"pb-5\">
\t\t\t\t\t";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 53), "field_text3", [], "any", false, false, true, 53)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[0] ?? null) : null), 53, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t
\t\t\t<div>
\t\t\t\t<a class=\"read-more-btn\" href=";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 57), "field_btn3", [], "any", false, false, true, 57)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[0] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#url"] ?? null) : null), 57, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_20 = (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 57), "field_btn3", [], "any", false, false, true, 57)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[0] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#title"] ?? null) : null), 57, $this->source), "html", null, true);
            echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>


</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--section5--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  142 => 57,  135 => 53,  129 => 50,  123 => 47,  113 => 42,  107 => 39,  101 => 36,  95 => 33,  85 => 28,  79 => 25,  73 => 22,  66 => 18,  55 => 10,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>

\t{% for row in rows %}


\t\t<div class=\"s5-allcontainer\">
\t\t\t<div class=\"s5-container\">
\t\t\t\t<div class=\"s5-heading\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t{{ row.content.field_name[0] }}
\t\t\t\t\t</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s5-container2\">
\t\t\t\t<div class=\"s5-cards\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t{{ row.content.field_icon1[0]}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h4>
\t\t\t\t\t\t{{ row.content.field_number_text[0] }}
\t\t\t\t\t</h4>
\t\t\t\t\t<div class=\"pb-5\">
\t\t\t\t\t\t{{ row.content.field_text1[0] }}
\t\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"read-more-btn\" href={{row.content.field_btn[0]['#url'] }}>{{row.content.field_btn[0]['#title'] }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s5-cards\">
\t\t\t\t<div>
\t\t\t\t\t<span class=\"icon\">{{ row.content.field_icon2[0] }}</span>
\t\t\t\t</div>
\t\t\t\t<h4>
\t\t\t\t\t{{ row.content.field_number_text2[0] }}
\t\t\t\t</h4>
\t\t\t\t<div class=\"pb-5\">
\t\t\t\t\t{{ row.content.field_text2[0] }}
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"read-more-btn\" href={{row.content.field_btn2[0]['#url'] }}>{{row.content.field_btn2[0]['#title'] }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s5-cards\">
\t\t\t\t<div>
\t\t\t\t\t<span class=\"icon\">{{ row.content.field_icon3[0] }}</span>
\t\t\t\t</div>
\t\t\t\t<h4>
\t\t\t\t\t{{ row.content.field_number_text3[0] }}
\t\t\t\t</h4>
\t\t\t\t<div class=\"pb-5\">
\t\t\t\t\t{{ row.content.field_text3[0] }}
\t\t\t\t</div>
\t\t\t
\t\t\t<div>
\t\t\t\t<a class=\"read-more-btn\" href={{row.content.field_btn3[0]['#url'] }}>{{row.content.field_btn3[0]['#title'] }}</a>
\t\t\t</div>
\t\t</div>
\t</div>


</div>{% endfor %}</section>
", "themes/custom/mytheme/templates/views/views-view-unformatted--section5--block-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--section5--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
