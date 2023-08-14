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

/* themes/custom/mytheme/templates/layout/page.html.twig */
class __TwigTemplate_cc4a9a230c614a04e6ea5da11cf83fde extends Template
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
        // line 48
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
\t<div id=\"page\">


\t\t<div class=\"nav w-100 bg-transparent\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t\t\t\t<div class=\"container-fluid px-5\">
\t\t\t\t\t";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "

\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
</div>

";
        // line 70
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == "/home")) {
            // line 71
            echo "
\t<section>
\t\t<div class=\"header-container\">
\t\t\t<div class=\"header-items\">
\t\t\t\t";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t</section>

";
        } else {
            // line 81
            echo "
\t<section>


\t\t<div class=\"header-container\">

\t\t\t<div class=\"header-items\">
\t\t\t\t<div class=\"page-heading\">
\t\t\t\t\t<div class=\"page-heading-container\">
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title_hero", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t<p>GET MANY MORE FEATURES</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t</section>

";
        }
        // line 105
        echo "

";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "

<main>

\t";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "

\t";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
</main>


<footer class=\"site-footer\">
\t<div class=\"footer-container\">

\t\t<div class=\"footer1\">
\t\t\t";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "
\t\t</div>

\t\t<div class=\"footer2\">
\t\t\t";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_2", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
        echo "
\t\t</div>

\t\t<div class=\"footer3\">
\t\t\t";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_3", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
\t\t</div>

\t\t<div class=\"footer4\">
\t\t\t";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_4", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "
\t\t</div>

\t</div>
\t<div class=\"copyright p-4\">
\t\t";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "
\t</div>
</footer>


";
        // line 155
        echo "
";
        // line 180
        echo "
";
        // line 213
        echo "
";
        // line 220
        echo "
";
        // line 221
        echo "</div></div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 221,  188 => 220,  185 => 213,  182 => 180,  179 => 155,  171 => 138,  163 => 133,  156 => 129,  149 => 125,  142 => 121,  131 => 113,  126 => 111,  119 => 107,  115 => 105,  98 => 91,  86 => 81,  77 => 75,  71 => 71,  69 => 70,  58 => 62,  49 => 56,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<div id=\"page-wrapper\" class=\"page-wrapper\">
\t<div id=\"page\">


\t\t<div class=\"nav w-100 bg-transparent\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t\t\t\t<div class=\"container-fluid px-5\">
\t\t\t\t\t{{ page.header }}

\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t{{ page.primary_menu }}

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
</div>

{% if path('<current>') == '/home' %}

\t<section>
\t\t<div class=\"header-container\">
\t\t\t<div class=\"header-items\">
\t\t\t\t{{page.hero}}
\t\t\t</div>
\t\t</div>
\t</section>

{% else %}

\t<section>


\t\t<div class=\"header-container\">

\t\t\t<div class=\"header-items\">
\t\t\t\t<div class=\"page-heading\">
\t\t\t\t\t<div class=\"page-heading-container\">
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t{{page.page_title_hero}}
\t\t\t\t\t\t\t<p>GET MANY MORE FEATURES</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t</section>

{% endif %}


{{page.breadcrumb}}

<main>

\t{{page.content}}

\t{{ page.content2 }}
</main>


<footer class=\"site-footer\">
\t<div class=\"footer-container\">

\t\t<div class=\"footer1\">
\t\t\t{{ page.footer_1 }}
\t\t</div>

\t\t<div class=\"footer2\">
\t\t\t{{ page.footer_2 }}
\t\t</div>

\t\t<div class=\"footer3\">
\t\t\t{{ page.footer_3 }}
\t\t</div>

\t\t<div class=\"footer4\">
\t\t\t{{ page.footer_4 }}
\t\t</div>

\t</div>
\t<div class=\"copyright p-4\">
\t\t{{ page.footer_copyright }}
\t</div>
</footer>


{# {% if page.header or page.primary_menu or page.secondary_menu %}
      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\"> #}{# Gets fixed by JavaScript at wide widths. #}
{# <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"{{ 'Sticky header'|t }}\" aria-checked=\"false\">
              <span class=\"sticky-header-toggle__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div> #}

{# Needs to extend full width so box shadow will also extend. #}
{# <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">

              {{ page.header }}

              {% if page.primary_menu or page.secondary_menu %}
                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"{{ 'Main Menu'|t }}\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">{{ 'Menu'|t }}</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  {{ page.primary_menu }}
                  {{ page.secondary_menu }}
                </div>
              {% endif %}
            </div>
          </div>
        </div>
      </header> #}
{# {% endif %} #}

{# <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          {{ page.hero }}
          <div class=\"main-content__container container\">
            {{ page.highlighted }}
            {{ page.breadcrumb }}

            {% if page.sidebar %}
              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  {{ page.content_above }}
                  {{ page.content }}
                </main>

                {{ page.sidebar }}
              </div>
            {% else %}
              <main role=\"main\">
                {{ page.content_above }}
                {{ page.content }}
              </main>
            {% endif %}
            {{ page.content_below }}
          </div>
        </div>
        <div class=\"social-bar\">
          {{ page.social }}
        </div>
      </div>
    </div> #}

{# <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        {{ page.footer_top }}
        {{ page.footer_bottom }}
      </div>
    </footer> #}

{# <div class=\"overlay\" data-drupal-selector=\"overlay\"></div> #}</div></div>
", "themes/custom/mytheme/templates/layout/page.html.twig", "/app/web/themes/custom/mytheme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 70);
        static $filters = array("escape" => 56);
        static $functions = array("path" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
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
