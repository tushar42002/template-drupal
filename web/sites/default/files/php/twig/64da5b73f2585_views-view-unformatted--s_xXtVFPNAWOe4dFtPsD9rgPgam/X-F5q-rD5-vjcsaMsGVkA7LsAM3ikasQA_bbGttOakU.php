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

/* themes/custom/mytheme/templates/views/views-view-unformatted--section2--block-1.html.twig */
class __TwigTemplate_e29a30a75ffda6772a42db81277550c3 extends Template
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
\t\t<div class=\"s2-container\">
\t\t\t<div class=\"image\">
\t\t\t\t";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 7), "field_image", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo " 
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<h2>
\t\t\t\t\t";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 11), "field_name", [], "any", false, false, true, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 11, $this->source), "html", null, true);
            echo "
\t\t\t\t</h2>
\t\t\t\t<p>
                  ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 14), "body", [], "any", false, false, true, 14)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 14, $this->source), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<div class=\"s2-cards\">
\t\t\t\t\t<div class=\"card-box\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t   ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), "field_icon1", [], "any", false, false, true, 20)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 20, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 24), "field_number_text", [], "any", false, false, true, 24)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 24, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27), "field_text1", [], "any", false, false, true, 27)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), 27, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-box\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t    ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33), "field_icon2", [], "any", false, false, true, 33)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), 33, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), "field_number_text2", [], "any", false, false, true, 37)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), 37, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 40), "field_text2", [], "any", false, false, true, 40)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), 40, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--section2--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 49,  109 => 40,  103 => 37,  96 => 33,  87 => 27,  81 => 24,  74 => 20,  65 => 14,  59 => 11,  52 => 7,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>

\t{% for row in rows %}

\t\t<div class=\"s2-container\">
\t\t\t<div class=\"image\">
\t\t\t\t{{row.content.field_image}} 
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<h2>
\t\t\t\t\t{{ row.content.field_name[0] }}
\t\t\t\t</h2>
\t\t\t\t<p>
                  {{ row.content.body[0] }}
\t\t\t\t</p>
\t\t\t\t<div class=\"s2-cards\">
\t\t\t\t\t<div class=\"card-box\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t   {{ row.content.field_icon1[0]}}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t{{ row.content.field_number_text[0]}}
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ row.content.field_text1[0]}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-box\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t    {{ row.content.field_icon2[0]}}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t{{ row.content.field_number_text2[0]}}
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ row.content.field_text2[0]}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t{% endfor %}
</section>
", "themes/custom/mytheme/templates/views/views-view-unformatted--section2--block-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--section2--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("escape" => 7);
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
