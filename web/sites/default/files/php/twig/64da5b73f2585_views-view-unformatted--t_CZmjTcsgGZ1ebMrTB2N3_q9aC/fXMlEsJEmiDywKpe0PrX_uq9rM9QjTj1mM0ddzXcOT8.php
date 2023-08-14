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

/* themes/custom/mytheme/templates/views/views-view-unformatted--thought-card--block-1.html.twig */
class __TwigTemplate_3c28b3fbe11c8f6d82e166fc893157af extends Template
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
        echo "


<div class=\"s11-container\">
    <div class=\"container \">
       <div class=\"s9-heading\">
\t\t  
\t\t\t<h2>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "getTitle", [], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</h2>

\t\t</div>

        <div class=\"row row-cols-1 row-cols-md-3 px-5 g-4\">

\t\t";
        // line 14
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
            // line 15
            echo "            <div class=\"col-md-4\">
                <div class=\"card h-100 \">
                    <img class=\"card-img-top\" src=";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 17)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 17), "field_image", [], "any", false, false, true, 17), "entity", [], "any", false, false, true, 17), "fileuri", [], "any", false, false, true, 17), 17, $this->source)), "html", null, true);
            echo " alt=\"\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <img src=\"/sites/default/files/2023-08/29.png\" alt=\"\">
                        </h5>
                        <p class=\"card-text\">
                           \t";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 23), "render_tokens", [], "any", false, false, true, 23)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 23)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["{{ body }}"] ?? null) : null), 23, $this->source), "html", null, true);
            echo "
                        </p>
                        <p class=\"name\">
                           ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["{{ field_name }}"] ?? null) : null), 26, $this->source), "html", null, true);
            echo "
                        </p>
                        <p>
                            <span>\t";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 29), "render_tokens", [], "any", false, false, true, 29)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 29)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["{{ field_post }}"] ?? null) : null), 29, $this->source), "html", null, true);
            echo "</span>
                        </p>
                    </div>
                </div>
            </div>
        ";
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
        // line 34
        echo "  
           
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/views/views-view-unformatted--thought-card--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  99 => 29,  93 => 26,  87 => 23,  78 => 17,  74 => 15,  57 => 14,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<div class=\"s11-container\">
    <div class=\"container \">
       <div class=\"s9-heading\">
\t\t  
\t\t\t<h2>{{ view.getTitle() }}</h2>

\t\t</div>

        <div class=\"row row-cols-1 row-cols-md-3 px-5 g-4\">

\t\t{% for row in rows %}
            <div class=\"col-md-4\">
                <div class=\"card h-100 \">
                    <img class=\"card-img-top\" src={{file_url(row.content['#row']._entity.field_image.entity.fileuri)}} alt=\"\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <img src=\"/sites/default/files/2023-08/29.png\" alt=\"\">
                        </h5>
                        <p class=\"card-text\">
                           \t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ body }}'] }}
                        </p>
                        <p class=\"name\">
                           {{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_name }}'] }}
                        </p>
                        <p>
                            <span>\t{{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_post }}'] }}</span>
                        </p>
                    </div>
                </div>
            </div>
        {% endfor %}  
           
        </div>
    </div>
</div>", "themes/custom/mytheme/templates/views/views-view-unformatted--thought-card--block-1.html.twig", "/app/web/themes/custom/mytheme/templates/views/views-view-unformatted--thought-card--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 14);
        static $filters = array("escape" => 8);
        static $functions = array("file_url" => 17);

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
