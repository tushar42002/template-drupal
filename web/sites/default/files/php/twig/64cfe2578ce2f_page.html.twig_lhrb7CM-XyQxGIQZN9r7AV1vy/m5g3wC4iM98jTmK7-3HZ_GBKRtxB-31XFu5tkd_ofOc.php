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
class __TwigTemplate_61ad8f825d58983b84a6c94184b64b7a extends Template
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
  <div id=\"page\">



     <div class=\"nav w-100 bg-transparent\">
        <nav class=\"navbar navbar-expand-lg navbar-dark\">
            <div class=\"container-fluid px-5\">
                       ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
                
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                          ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "

                    </div>
                </div>
            </div>
        </nav>
    </div>

    ";
        // line 73
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == "/home")) {
            // line 74
            echo "
     <section>
          ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
      </section>

      ";
        } else {
            // line 80
            echo "
     <section>


     
        <div class=\"header-container\">

            <div class=\"header-items\">
                <div class=\"page-heading\">
                    <div class=\"page-heading-container\">
                        <div class=\"text\">
                             ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title_hero", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
                            <p>GET MANY MORE FEATURES</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>


         
      </section>

      ";
        }
        // line 106
        echo "
   


    ";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "

    <main>

      ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "

      ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "
    </main>


    <footer class=\"site-footer\">
      <div class=\"footer-container\">
       
        <div class=\"footer1\">
        ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"footer2\">
        ";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_2", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
        </div>
        
        <div class=\"footer3\">
        ";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_3", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"footer4\">
        ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_4", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "
        </div>
        
      </div>  
       <div class=\"copyright p-4\">
           ";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "
        </div>
    </footer>




    ";
        // line 150
        echo "
        ";
        // line 152
        echo "        ";
        // line 162
        echo "
          ";
        // line 164
        echo "          ";
        // line 186
        echo "    ";
        // line 187
        echo "
    ";
        // line 220
        echo "
    ";
        // line 227
        echo "
    ";
        // line 229
        echo "
  </div>
</div>
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
        return array (  205 => 229,  202 => 227,  199 => 220,  196 => 187,  194 => 186,  192 => 164,  189 => 162,  187 => 152,  184 => 150,  174 => 141,  166 => 136,  159 => 132,  152 => 128,  145 => 124,  134 => 116,  129 => 114,  122 => 110,  116 => 106,  98 => 91,  85 => 80,  78 => 76,  74 => 74,  72 => 73,  61 => 65,  50 => 57,  39 => 48,);
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
  <div id=\"page\">



     <div class=\"nav w-100 bg-transparent\">
        <nav class=\"navbar navbar-expand-lg navbar-dark\">
            <div class=\"container-fluid px-5\">
                       {{ page.header }}
                
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                          {{ page.primary_menu }}

                    </div>
                </div>
            </div>
        </nav>
    </div>

    {% if path('<current>') == '/home' %}

     <section>
          {{page.hero}}
      </section>

      {% else %}

     <section>


     
        <div class=\"header-container\">

            <div class=\"header-items\">
                <div class=\"page-heading\">
                    <div class=\"page-heading-container\">
                        <div class=\"text\">
                             {{page.page_title_hero}}
                            <p>GET MANY MORE FEATURES</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>


         
      </section>

      {% endif %}

   


    {{page.breadcrumb}}

    <main>

      {{page.content}}

      {{ page.content2 }}
    </main>


    <footer class=\"site-footer\">
      <div class=\"footer-container\">
       
        <div class=\"footer1\">
        {{ page.footer_1 }}
        </div>

        <div class=\"footer2\">
        {{ page.footer_2 }}
        </div>
        
        <div class=\"footer3\">
        {{ page.footer_3 }}
        </div>

        <div class=\"footer4\">
        {{ page.footer_4 }}
        </div>
        
      </div>  
       <div class=\"copyright p-4\">
           {{ page.footer_copyright }}
        </div>
    </footer>




    {# {% if page.header or page.primary_menu or page.secondary_menu %}
      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\"> #}

        {# Gets fixed by JavaScript at wide widths. #}
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

    {# <div class=\"overlay\" data-drupal-selector=\"overlay\"></div> #}

  </div>
</div>
", "themes/custom/mytheme/templates/layout/page.html.twig", "/app/web/themes/custom/mytheme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 73);
        static $filters = array("escape" => 57);
        static $functions = array("path" => 73);

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
