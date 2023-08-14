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

/* themes/custom/mytheme/templates/views/views-view-unformatted--plans-card--block-1.html.twig */
class __TwigTemplate_a41e11449c8de823f5960d7c1a7128ec extends Template
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

    <div class=\"s6-container\">
            <div class=\"plans\">
                <span class=\"planbtn month-btn\">monthly</span>
                <span class=\"planbtn year-btn\">yearly</span>
            </div>

            <div class=\"month-year-plan monthly-plan active\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            echo "
                <div class=\"plancard\">
                    <h3>";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 13), "field_category", [], "any", false, false, true, 13)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#context"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["value"] ?? null) : null), 13, $this->source), "html", null, true);
            echo "</h3>
                    <div class=\"plan-price\">
                        <p class=\"price\"><sup>\$</sup>";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 15), "field_cost1", [], "any", false, false, true, 15)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 15, $this->source), "html", null, true);
            echo "</p>
                        <span class=\"plan-d\">/month</span>
                    </div>
                    <ul class=\"text-dul\">
                     ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19), "body", [], "any", false, false, true, 19)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), 19, $this->source), "html", null, true);
            echo "
                    </ul>

                    <a class=\"order-now\" href=";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), "field_btn", [], "any", false, false, true, 22)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#url"] ?? null) : null), 22, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), "field_btn", [], "any", false, false, true, 22)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#title"] ?? null) : null), 22, $this->source), "html", null, true);
            echo "</a>

                </div>
                
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t
            </div>

            <div class=\"month-year-plan yearly-plan\">
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 31
            echo "                <div class=\"plancard\">
                    <h3>";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32), "field_category", [], "any", false, false, true, 32)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#context"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["value"] ?? null) : null), 32, $this->source), "html", null, true);
            echo "</h3>
                    <div class=\"plan-price\">
                        <p class=\"price\"><sup>\$</sup>";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34), "field_cost2", [], "any", false, false, true, 34)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), 34, $this->source), "html", null, true);
            echo "</p>
                        <span class=\"plan-d\">year</span>
                    </div>
                    <ul class=\"text-dul\">
                        ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38), "body", [], "any", false, false, true, 38)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), 38, $this->source), "html", null, true);
            echo "
                    </ul>

                  <a class=\"order-now\" href=";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_14 = (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41), "field_btn", [], "any", false, false, true, 41)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#url"] ?? null) : null), 41, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_16 = (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41), "field_btn", [], "any", false, false, true, 41)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[0] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#title"] ?? null) : null), 41, $this->source), "html", null, true);
            echo "</a>

                </div>
                

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t
            </div>
        </div>




</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--plans-card--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  120 => 41,  114 => 38,  107 => 34,  102 => 32,  99 => 31,  95 => 30,  89 => 26,  76 => 22,  70 => 19,  63 => 15,  58 => 13,  54 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>

    <div class=\"s6-container\">
            <div class=\"plans\">
                <span class=\"planbtn month-btn\">monthly</span>
                <span class=\"planbtn year-btn\">yearly</span>
            </div>

            <div class=\"month-year-plan monthly-plan active\">
\t\t\t{% for row in rows %}

                <div class=\"plancard\">
                    <h3>{{ row.content.field_category[0]['#context']['value'] }}</h3>
                    <div class=\"plan-price\">
                        <p class=\"price\"><sup>\$</sup>{{ row.content.field_cost1[0]}}</p>
                        <span class=\"plan-d\">/month</span>
                    </div>
                    <ul class=\"text-dul\">
                     {{ row.content.body[0]}}
                    </ul>

                    <a class=\"order-now\" href={{row.content.field_btn[0]['#url'] }}>{{row.content.field_btn[0]['#title'] }}</a>

                </div>
                
\t\t\t{% endfor %}\t
            </div>

            <div class=\"month-year-plan yearly-plan\">
\t\t\t{% for row in rows %}
                <div class=\"plancard\">
                    <h3>{{ row.content.field_category[0]['#context']['value']  }}</h3>
                    <div class=\"plan-price\">
                        <p class=\"price\"><sup>\$</sup>{{ row.content.field_cost2[0] }}</p>
                        <span class=\"plan-d\">year</span>
                    </div>
                    <ul class=\"text-dul\">
                        {{ row.content.body[0] }}
                    </ul>

                  <a class=\"order-now\" href={{row.content.field_btn[0]['#url'] }}>{{row.content.field_btn[0]['#title'] }}</a>

                </div>
                

\t\t\t{% endfor %}\t
            </div>
        </div>




</section>
", "themes/custom/mytheme/templates/views/views-view-unformatted--plans-card--block-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--plans-card--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10);
        static $filters = array("escape" => 13);
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
