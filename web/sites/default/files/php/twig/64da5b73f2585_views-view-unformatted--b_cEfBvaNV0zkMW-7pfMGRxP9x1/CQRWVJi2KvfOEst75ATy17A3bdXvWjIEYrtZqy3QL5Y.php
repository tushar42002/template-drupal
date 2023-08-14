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

/* themes/custom/mytheme/templates/views/views-view-unformatted--blogs--page-1.html.twig */
class __TwigTemplate_4236653496d100da0e9aa561bacdbbce extends Template
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
        echo "<div class=\"blogs-container container\">
\t";
        // line 2
        if (($context["title"] ?? null)) {
            // line 3
            echo "\t\t<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
            echo "</h3>

\t";
        }
        // line 6
        echo "\t<div class=\"blogs-box\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "
\t\t\t<div class=\"blog\">
\t\t\t\t<div class=\"blog-img\">

\t\t\t\t\t";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 12)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 12), "render_tokens", [], "any", false, false, true, 12)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 12)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_image }}"] ?? null) : null), 12, $this->source), "html", null, true);
            echo "

\t\t\t\t\t<div class=\"byadmin\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span class=\"icon profile-male\"></span>
\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 18)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 18), "render_tokens", [], "any", false, false, true, 18)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 18)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ uid }}"] ?? null) : null), 18, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t<h2>
\t\t\t\t\t\t";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ title }}"] ?? null) : null), 26, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"blog-tags\">
\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t0 Comments</span>
\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 32), "render_tokens", [], "any", false, false, true, 32)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 32)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_tags }}"] ?? null) : null), 32, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"text-dul-1\">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 33), "render_tokens", [], "any", false, false, true, 33)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 33)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ created }}"] ?? null) : null), 33, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"pt-4 text-dul\">
\t\t\t\t\t\t";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 37), "render_tokens", [], "any", false, false, true, 37)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 37)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ body }}"] ?? null) : null), 37, $this->source), "html", null, true);
            echo "</p>

\t\t\t\t</div>

\t\t\t</div>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</div>


</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--blogs--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  117 => 37,  110 => 33,  106 => 32,  97 => 26,  86 => 18,  77 => 12,  71 => 8,  54 => 7,  51 => 6,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blogs-container container\">
\t{% if title %}
\t\t<h3>{{ title }}</h3>

\t{% endif %}
\t<div class=\"blogs-box\">
\t\t{% for row in rows %}

\t\t\t<div class=\"blog\">
\t\t\t\t<div class=\"blog-img\">

\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_image }}'] }}

\t\t\t\t\t<div class=\"byadmin\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span class=\"icon profile-male\"></span>
\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ uid }}'] }}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t<h2>
\t\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ title }}'] }}
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"blog-tags\">
\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t0 Comments</span>
\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_tags }}'] }}</span>
\t\t\t\t\t\t<span class=\"text-dul-1\">{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ created }}'] }}</span>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"pt-4 text-dul\">
\t\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ body }}'] }}</p>

\t\t\t\t</div>

\t\t\t</div>
\t\t{% endfor %}
\t</div>


</div>
", "themes/custom/mytheme/templates/views/views-view-unformatted--blogs--page-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--blogs--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 7);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
