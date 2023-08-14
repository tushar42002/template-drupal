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

/* themes/custom/mytheme/templates/views/views-view-unformatted--banner--block-1.html.twig */
class __TwigTemplate_3609f3d68add715208c3cfca9a21e272 extends Template
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

\t<div class=\"s10-container\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "\t\t\t<h2>
\t\t\t\t";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6), "field_name", [], "any", false, false, true, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 6, $this->source), "html", null, true);
            echo "
\t\t\t</h2>
\t\t\t<p class=\"text-dul\">
\t\t\t\t";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 9), "body", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 9, $this->source), "html", null, true);
            echo "
\t\t\t</p>
\t\t\t<div class=\"s10-btns\">
\t\t\t\t<div class=\"btn\">
\t\t\t\t\t<a class=\"order-now\" href=";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 13), "field_btn", [], "any", false, false, true, 13)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), 13, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 13), "field_btn", [], "any", false, false, true, 13)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 13, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn\">
\t\t\t\t\t<a href=";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 16), "field_btn2", [], "any", false, false, true, 16)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#url"] ?? null) : null), 16, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 16), "field_btn2", [], "any", false, false, true, 16)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#title"] ?? null) : null), 16, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</div>


</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--banner--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  72 => 16,  64 => 13,  57 => 9,  51 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>

\t<div class=\"s10-container\">
\t\t{% for row in rows %}
\t\t\t<h2>
\t\t\t\t{{ row.content.field_name[0] }}
\t\t\t</h2>
\t\t\t<p class=\"text-dul\">
\t\t\t\t{{ row.content.body[0] }}
\t\t\t</p>
\t\t\t<div class=\"s10-btns\">
\t\t\t\t<div class=\"btn\">
\t\t\t\t\t<a class=\"order-now\" href={{row.content.field_btn[0]['#url'] }}>{{row.content.field_btn[0]['#title'] }}</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn\">
\t\t\t\t\t<a href={{row.content.field_btn2[0]['#url'] }}>{{row.content.field_btn2[0]['#title'] }}</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t{% endfor %}
\t</div>


</section>
", "themes/custom/mytheme/templates/views/views-view-unformatted--banner--block-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--banner--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4);
        static $filters = array("escape" => 6);
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
