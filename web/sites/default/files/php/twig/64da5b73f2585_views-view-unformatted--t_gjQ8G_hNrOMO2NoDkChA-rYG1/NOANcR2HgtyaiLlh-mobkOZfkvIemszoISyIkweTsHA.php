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

/* themes/custom/mytheme/templates/views/views-view-unformatted--team-card--block-1.html.twig */
class __TwigTemplate_5bab10ea258e601b426c04480460cd04 extends Template
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

\t<div class=\"s9-container\">
\t\t<div class=\"s9-heading\">
\t\t  
\t\t\t<h2>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "getTitle", [], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>

\t\t</div>
\t\t<div class=\"s9-cards\">

\t\t\t";
        // line 11
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
            // line 12
            echo "

\t\t\t\t<div class=\"s9-card\">

\t\t\t\t\t<img src=";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 16)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 16), "field_image", [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "fileuri", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
            echo " alt=\"\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"detail\">
\t\t\t\t\t\t<h4 class=\"mb-0\">
\t\t\t\t\t\t\t";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 20), "render_tokens", [], "any", false, false, true, 20)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["{{ field_name }}"] ?? null) : null), 20, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"pt-1 mb-2\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 24)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 24), "render_tokens", [], "any", false, false, true, 24)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["{{ field_post }}"] ?? null) : null), 24, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"py-1\">
\t\t\t\t\t\t\t";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 28), "render_tokens", [], "any", false, false, true, 28)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 28)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["{{ body }}"] ?? null) : null), 28, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
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
        // line 36
        echo "\t\t</div>

\t</div>

</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--team-card--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  98 => 28,  91 => 24,  84 => 20,  77 => 16,  71 => 12,  54 => 11,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>

\t<div class=\"s9-container\">
\t\t<div class=\"s9-heading\">
\t\t  
\t\t\t<h2>{{ view.getTitle() }}</h2>

\t\t</div>
\t\t<div class=\"s9-cards\">

\t\t\t{% for row in rows %}


\t\t\t\t<div class=\"s9-card\">

\t\t\t\t\t<img src={{file_url(row.content['#row']._entity.field_image.entity.fileuri)}} alt=\"\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"detail\">
\t\t\t\t\t\t<h4 class=\"mb-0\">
\t\t\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_name }}'] }}
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"pt-1 mb-2\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_post }}'] }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"py-1\">
\t\t\t\t\t\t\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ body }}'] }}
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t</div>

</section>
", "themes/custom/mytheme/templates/views/views-view-unformatted--team-card--block-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--team-card--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11);
        static $filters = array("escape" => 6);
        static $functions = array("file_url" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['file_url']
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
