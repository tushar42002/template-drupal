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

/* core/modules/comment/templates/comment.html.twig */
class __TwigTemplate_637be839634096dae7b7830b401b8dda extends Template
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
        // line 71
        echo "
<article";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "js-comment"], "method", false, false, true, 72), 72, $this->source), "html", null, true);
        echo ">
  ";
        // line 78
        echo "  <mark class=\"hidden\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 78, $this->source), "html", null, true);
        echo "\"></mark>

  ";
        // line 80
        if (($context["submitted"] ?? null)) {
            // line 81
            echo "    <footer>
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 82, $this->source), "html", null, true);
            echo "
      <p>";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted"] ?? null), 83, $this->source), "html", null, true);
            echo "</p>

      ";
            // line 90
            echo "      ";
            if (($context["parent"] ?? null)) {
                // line 91
                echo "        <p class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 91, $this->source), "html", null, true);
                echo "</p>
      ";
            }
            // line 93
            echo "
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null), 94, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 97
        echo "
  <div";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 98, $this->source), "html", null, true);
        echo ">
    ";
        // line 99
        if (($context["title"] ?? null)) {
            // line 100
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 100, $this->source), "html", null, true);
            echo "
      <h3";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 101, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 101, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 102, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 104
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 104, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/comment/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 104,  104 => 102,  98 => 101,  93 => 100,  91 => 99,  87 => 98,  84 => 97,  78 => 94,  75 => 93,  69 => 91,  66 => 90,  61 => 83,  57 => 82,  54 => 81,  52 => 80,  46 => 78,  42 => 72,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for comments.
 *
 * Available variables:
 * - author: (optional) Comment author. Can be a link or plain text.
 * - content: The content-related items for the comment display. Use
 *   {{ content }} to print them all, or print a subset such as
 *   {{ content.field_example }}. Use the following code to temporarily suppress
 *   the printing of a given child element:
 *   @code
 *   {{ content|without('field_example') }}
 *   @endcode
 * - created: (optional) Formatted date and time for when the comment was
 *   created. Preprocess functions can reformat it by calling
 *   DateFormatter::format() with the desired parameters on the
 *   'comment.created' variable.
 * - changed: (optional) Formatted date and time for when the comment was last
 *   changed. Preprocess functions can reformat it by calling
 *   DateFormatter::format() with the desired parameters on the
 *   'comment.changed' variable.
 * - permalink: Comment permalink.
 * - submitted: (optional) Submission information created from author and
 *   created during template_preprocess_comment().
 * - user_picture: (optional) The comment author's profile picture.
 * - status: Comment status. Possible values are:
 *   unpublished, published, or preview.
 * - title: (optional) Comment title, linked to the comment.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class may contain one or more of the following classes:
 *   - comment: The current template type; for instance, 'theming hook'.
 *   - by-anonymous: Comment by an unregistered user.
 *   - by-{entity-type}-author: Comment by the author of the parent entity,
 *     eg. by-node-author.
 *   - preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - unpublished: An unpublished comment visible only to administrators.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - content_attributes: List of classes for the styling of the comment content.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - threaded: A flag indicating whether the comments are threaded or not.
 *
 * These variables are provided to give context about the parent comment (if
 * any, optional):
 * - parent_comment: Full parent comment entity (if any).
 * - parent_author: Equivalent to author for the parent comment.
 * - parent_created: Equivalent to created for the parent comment.
 * - parent_changed: Equivalent to changed for the parent comment.
 * - parent_title: Equivalent to title for the parent comment.
 * - parent_permalink: Equivalent to permalink for the parent comment.
 * - parent: A text string of parent comment submission information created from
 *   'parent_author' and 'parent_created' during template_preprocess_comment().
 *   This information is presented to help screen readers follow lengthy
 *   discussion threads. You can hide this from sighted users using the class
 *   visually-hidden.
 *
 * These two variables are provided for context:
 * - comment: Full comment object.
 * - commented_entity: Entity the comments are attached to.
 *
 * @see template_preprocess_comment()
 *
 * @ingroup themeable
 */
#}

<article{{ attributes.addClass('js-comment') }}>
  {#
    Hide the \"new\" indicator by default, let a piece of JavaScript ask the
    server which comments are new for the user. Rendering the final \"new\"
    indicator here would break the render cache.
  #}
  <mark class=\"hidden\" data-comment-timestamp=\"{{ new_indicator_timestamp }}\"></mark>

  {% if submitted %}
    <footer>
      {{ user_picture }}
      <p>{{ submitted }}</p>

      {#
        Indicate the semantic relationship between parent and child comments for
        accessibility. The list is difficult to navigate in a screen reader
        without this information.
      #}
      {% if parent %}
        <p class=\"visually-hidden\">{{ parent }}</p>
      {% endif %}

      {{ permalink }}
    </footer>
  {% endif %}

  <div{{ content_attributes }}>
    {% if title %}
      {{ title_prefix }}
      <h3{{ title_attributes }}>{{ title }}</h3>
      {{ title_suffix }}
    {% endif %}
    {{ content }}
  </div>
</article>
", "core/modules/comment/templates/comment.html.twig", "/app/web/core/modules/comment/templates/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 80);
        static $filters = array("escape" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
