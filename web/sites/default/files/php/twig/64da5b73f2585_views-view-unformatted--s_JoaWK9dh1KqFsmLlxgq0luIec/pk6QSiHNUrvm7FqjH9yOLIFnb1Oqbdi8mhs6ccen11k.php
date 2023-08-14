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

/* themes/custom/mytheme/templates/views/views-view-unformatted--section8--block-1.html.twig */
class __TwigTemplate_1fdbd10373519e58cc4a6452937e4d58 extends Template
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
\t\t<div class=\"s8-container\">
\t\t\t<div class=\"s8-bg\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"s8-heading\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 10), "field_name", [], "any", false, false, true, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 10, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 12), "body", [], "any", false, false, true, 12)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 12, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s8-box\">
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 17), "field_icon1", [], "any", false, false, true, 17)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 17, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), "field_number_text", [], "any", false, false, true, 20)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 20, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">projects</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), "field_icon2", [], "any", false, false, true, 28)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), 28, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31), "field_number_text2", [], "any", false, false, true, 31)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), 31, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">completed</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39), "field_icon3", [], "any", false, false, true, 39)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), 39, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42), "field_number_text3", [], "any", false, false, true, 42)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), 42, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">happy clients</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 50), "field_icon4", [], "any", false, false, true, 50)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), 50, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 53), "field_number_text4", [], "any", false, false, true, 53)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), 53, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">awards</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--section8--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 66,  125 => 53,  119 => 50,  108 => 42,  102 => 39,  91 => 31,  85 => 28,  74 => 20,  68 => 17,  60 => 12,  55 => 10,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>

\t{% for row in rows %}

\t\t<div class=\"s8-container\">
\t\t\t<div class=\"s8-bg\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"s8-heading\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t{{ row.content.field_name[0] }}
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t{{ row.content.body[0] }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s8-box\">
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">{{ row.content.field_icon1[0]}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t{{ row.content.field_number_text[0] }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">projects</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">{{ row.content.field_icon2[0] }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t{{ row.content.field_number_text2[0] }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">completed</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">{{ row.content.field_icon3[0] }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t{{ row.content.field_number_text3[0] }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">happy clients</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-item\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"icon\">{{ row.content.field_icon4[0] }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"number\">
\t\t\t\t\t\t\t\t{{ row.content.field_number_text4[0] }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<span class=\"text\">awards</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t{% endfor %}

</section>
", "themes/custom/mytheme/templates/views/views-view-unformatted--section8--block-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--section8--block-1.html.twig");
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
