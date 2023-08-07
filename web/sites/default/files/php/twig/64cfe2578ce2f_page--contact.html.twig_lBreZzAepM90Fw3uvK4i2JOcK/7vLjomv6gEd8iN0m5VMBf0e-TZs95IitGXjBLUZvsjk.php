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

/* themes/custom/mytheme/templates/layout/page--contact.html.twig */
class __TwigTemplate_33f6be30e5bc8394a9b8ea9258c648b8 extends Template
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
    <section>
        <div class=\"contact-container1\">
            <div class=\"contact1\">
            <div class=\"form w-100\">

                    <h3>contact form</h3>

                ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "

                </div>
                <div class=\"address-map\">
                ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "aside", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "
                    
                </div>
            </div>
        </div>
    </section>

    ";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "

    </main>


    <footer class=\"site-footer\">
      <div class=\"footer-container\">
       
        <div class=\"footer1\">
        ";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"footer2\">
        ";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_2", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "
        </div>
        
        <div class=\"footer3\">
        ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_3", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"footer4\">
        ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_4", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
        </div>
        
      </div>  
       <div class=\"copyright p-4\">
           ";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "
        </div>
    </footer>




    ";
        // line 166
        echo "
        ";
        // line 168
        echo "        ";
        // line 178
        echo "
          ";
        // line 180
        echo "          ";
        // line 202
        echo "    ";
        // line 203
        echo "
    ";
        // line 236
        echo "
    ";
        // line 243
        echo "
    ";
        // line 245
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/page--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 245,  221 => 243,  218 => 236,  215 => 203,  213 => 202,  211 => 180,  208 => 178,  206 => 168,  203 => 166,  193 => 157,  185 => 152,  178 => 148,  171 => 144,  164 => 140,  152 => 131,  142 => 124,  135 => 120,  122 => 110,  116 => 106,  98 => 91,  85 => 80,  78 => 76,  74 => 74,  72 => 73,  61 => 65,  50 => 57,  39 => 48,);
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
    <section>
        <div class=\"contact-container1\">
            <div class=\"contact1\">
            <div class=\"form w-100\">

                    <h3>contact form</h3>

                {{ page.content }}

                </div>
                <div class=\"address-map\">
                {{ page.aside}}
                    
                </div>
            </div>
        </div>
    </section>

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
", "themes/custom/mytheme/templates/layout/page--contact.html.twig", "/app/web/themes/custom/mytheme/templates/layout/page--contact.html.twig");
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
