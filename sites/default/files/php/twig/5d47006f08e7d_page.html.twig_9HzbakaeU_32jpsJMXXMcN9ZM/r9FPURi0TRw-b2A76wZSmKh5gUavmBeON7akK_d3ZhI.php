<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bootstrap4/templates/layout/page.html.twig */
class __TwigTemplate_7805e7ef9f4232b551785917004b94508f266a938dd396c9e6d8d3f16cbbe56c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 67, "if" => 72];
        $filters = ["escape" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 45
        echo "<header>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse mr-auto\" id=\"navbarSupportedContent\">
      <div class=\"navbar-nav mr-auto\">
        <div class=\"form-inline\">
          ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </nav>
</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 66
        echo "
  ";
        // line 67
        $context["sidebar_first_classes"] = (($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) ? ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) ? ("col-sm-3") : ("col-sm-4"))) : ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) ? ("col-sm-4") : (""))));
        // line 68
        echo "  ";
        $context["sidebar_second_classes"] = (($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) ? ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) ? ("col-sm-3") : ("col-sm-4"))) : ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) ? ("col-sm-4") : (""))));
        // line 69
        echo "  ";
        $context["content_classes"] = (($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) ? ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) ? ("col-sm-6") : ("col-sm-8"))) : ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) ? ("col-sm-6") : ("col-sm-12"))));
        // line 70
        echo "
  <div class=\"";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null)), "html", null, true);
        echo "-fluid\">
    ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 73
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
    ";
        }
        // line 75
        echo "    <div class=\"row\">
      ";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 77
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 81
        echo "      <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>
      ";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 85
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 89
        echo "    </div>
  </div>

</main>

";
        // line 94
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 95
            echo "<footer>
  <div class=\"";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null)), "html", null, true);
            echo "\">
    ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
  </div>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap4/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 97,  160 => 96,  157 => 95,  155 => 94,  148 => 89,  142 => 86,  137 => 85,  135 => 84,  130 => 82,  125 => 81,  119 => 78,  114 => 77,  112 => 76,  109 => 75,  103 => 73,  101 => 72,  97 => 71,  94 => 70,  91 => 69,  88 => 68,  86 => 67,  83 => 66,  72 => 57,  59 => 47,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
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
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<header>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    {{ page.header }}
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse mr-auto\" id=\"navbarSupportedContent\">
      <div class=\"navbar-nav mr-auto\">
        <div class=\"form-inline\">
          {{ page.navigation }}
        </div>
      </div>
    </div>
  </nav>
</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

  {% set sidebar_first_classes = page.sidebar_first ? ( page.sidebar_second ? 'col-sm-3' : 'col-sm-4' ) : ( page.sidebar_second ? 'col-sm-4' ) %}
  {% set sidebar_second_classes = page.sidebar_first ? ( page.sidebar_second ? 'col-sm-3' : 'col-sm-4' ) : ( page.sidebar_second ? 'col-sm-4' ) %}
  {% set content_classes = page.sidebar_first ? ( page.sidebar_second ? 'col-sm-6' : 'col-sm-8' ) : ( page.sidebar_second ? 'col-sm-6' : 'col-sm-12' ) %}

  <div class=\"{{ b4_top_container }}-fluid\">
    {% if page.breadcrumb %}
      {{ page.breadcrumb }}
    {% endif %}
    <div class=\"row\">
      {% if page.sidebar_first %}
        <div class=\"{{ sidebar_first_classes }}\">
          {{ page.sidebar_first }}
        </div>
      {% endif %}
      <div class=\"{{ content_classes }}\">
        {{ page.content }}
      </div>
      {% if page.sidebar_second %}
        <div class=\"{{ sidebar_second_classes }}\">
          {{ page.sidebar_second }}
        </div>
      {% endif %}
    </div>
  </div>

</main>

{% if page.footer %}
<footer>
  <div class=\"{{ b4_top_container }}\">
    {{ page.footer }}
  </div>
</footer>
{% endif %}
", "themes/contrib/bootstrap4/templates/layout/page.html.twig", "D:\\wamp64\\www\\drupalSite\\themes\\contrib\\bootstrap4\\templates\\layout\\page.html.twig");
    }
}
