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

/* themes/custom/mytheme/templates/block/block--mytheme-bmtemplates.html.twig */
class __TwigTemplate_3f961787db0fc29a50772286da28c5d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 4), 4, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null), 5, $this->source))), 3 => ((        // line 6
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 6, $this->source)))) : (""))];
        // line 9
        echo "

<div";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 12, $this->source), "html", null, true);
        echo "
\t";
        // line 13
        if (($context["label"] ?? null)) {
            // line 14
            echo "\t\t<h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block__title"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 14, $this->source), "html", null, true);
            echo "</h2>
\t";
        }
        // line 16
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 16, $this->source), "html", null, true);
        echo "

\t";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
</div>
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t\t";
        // line 20
        echo "

\t\t<div class=\"s7-container\">
\t\t\t<div class=\"image\">
\t\t\t\t";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"s7-detail\">
\t\t\t\t<h2>
\t\t\t\t\t";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
\t\t\t\t</h2>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text1", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"text-dul\">
\t\t\t\t\t";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"read-more-btn\" href=";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_btn", [], "any", false, false, true, 37)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 37, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_btn", [], "any", false, false, true, 37)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 37, $this->source), "html", null, true);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/block/block--mytheme-bmtemplates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  112 => 34,  106 => 31,  100 => 28,  93 => 24,  87 => 20,  85 => 19,  81 => 18,  75 => 43,  73 => 18,  67 => 16,  59 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 9,  43 => 6,  42 => 5,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    layout ? 'layout--' ~ layout|clean_class,
  ]
%}


<div{{attributes.addClass(classes)}}>
\t{{ title_prefix }}
\t{% if label %}
\t\t<h2{{title_attributes.addClass('block__title')}}>{{ label }}</h2>
\t{% endif %}
\t{{ title_suffix }}

\t{% block content %}
\t\t{# {{dump(content)}} #}


\t\t<div class=\"s7-container\">
\t\t\t<div class=\"image\">
\t\t\t\t{{content.field_image}}
\t\t\t</div>
\t\t\t<div class=\"s7-detail\">
\t\t\t\t<h2>
\t\t\t\t\t{{content.field_name}}
\t\t\t\t</h2>
\t\t\t\t<div>
\t\t\t\t\t{{content.field_text1}}
\t\t\t\t</div>
\t\t\t\t<div class=\"text-dul\">
\t\t\t\t\t{{content.body}}
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a class=\"read-more-btn\" href={{content.field_btn[0]['#url']}}>{{content.field_btn[0]['#title']}}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% endblock %}

</div>
", "themes/custom/mytheme/templates/block/block--mytheme-bmtemplates.html.twig", "/app/web/themes/custom/mytheme/templates/block/block--mytheme-bmtemplates.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 13, "block" => 18);
        static $filters = array("clean_class" => 4, "escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
