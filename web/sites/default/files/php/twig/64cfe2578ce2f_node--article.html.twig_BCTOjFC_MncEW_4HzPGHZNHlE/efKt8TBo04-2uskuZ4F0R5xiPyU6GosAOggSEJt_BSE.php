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

/* themes/custom/mytheme/templates/node--article.html.twig */
class __TwigTemplate_355918897e6a23c426d6a800b2ab10ad extends Template
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
        // line 32
        echo "

<article>


\t<div class=\"single-blog-container\">
\t\t<main>

\t\t\t<div class=\"blog-container\">
\t\t\t\t<div class=\"blog\">
\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"byadmin\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"icon profile-male\"></span>
\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 48, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t<h2>";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div class=\"blog-tags\">
\t\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t\t0 Comments</span>
\t\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t\t";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 61, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "


\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"social py-5\">
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-google-plus\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-linkedin\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-dribbble\"></i>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"form px-3\">


\t\t\t\t<div class=\" comment-form \">

\t\t\t\t\t";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "


\t\t\t\t</div>


\t\t\t</div>

\t\t</main>
\t</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 98,  90 => 66,  82 => 61,  77 => 59,  69 => 54,  60 => 48,  52 => 43,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{# <article{{attributes}}>

\t{{ title_prefix }}
\t{% if label and not page %}
\t\t<h2{{title_attributes}}>
\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
\t\t</h2>
\t{% endif %}
\t{{ title_suffix }}

\t{% if display_submitted %}
\t\t<footer>
\t\t\t{{ author_picture }}
\t\t\t<div{{author_attributes}}>
\t\t\t\t{% trans %}Submitted by
\t\t\t\t{{ author_name }}
\t\t\t\ton
\t\t\t\t{{ date }}{% endtrans %}
\t\t\t\t{{ metadata }}
\t\t\t</div>
\t\t</footer>
\t{% endif %}

\t<div{{content_attributes}}>
\t\t{{ content }}

         {{ dump(content) }}

\t</div>

</article> #}


<article>


\t<div class=\"single-blog-container\">
\t\t<main>

\t\t\t<div class=\"blog-container\">
\t\t\t\t<div class=\"blog\">
\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t{{  content.field_image}}
\t\t\t\t\t\t<div class=\"byadmin\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"icon profile-male\"></span>
\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t{{ author_name }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t<h2>{{ label }}</h2>
\t\t\t\t\t\t<div class=\"blog-tags\">
\t\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t\t0 Comments</span>
\t\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t\t{{ content.field_tags}}</span>
\t\t\t\t\t\t\t<span class=\"text-dul-1\">
\t\t\t\t\t\t\t\t{{ date }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t{{ content.body }}


\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"social py-5\">
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-google-plus\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-linkedin\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\">
\t\t\t\t\t<i class=\"fa-brands fa-dribbble\"></i>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"form px-3\">


\t\t\t\t<div class=\" comment-form \">

\t\t\t\t\t{{ content.comment }}


\t\t\t\t</div>


\t\t\t</div>

\t\t</main>
\t</div>
</article>
", "themes/custom/mytheme/templates/node--article.html.twig", "/app/web/themes/custom/mytheme/templates/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
