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

/* themes/contrib/bootstrap4/templates/calendar/views-view-fullcalendar.html.twig */
class __TwigTemplate_5fd012e34e0eacbad36f9fb187637a5937bcfd4d41077c4f07f930675525a597 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 18, "if" => 25];
        $filters = ["escape" => 22, "t" => 29];
        $functions = ["path" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                ['path']
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
        // line 18
        $context["classes"] = [0 => $this->getAttribute(        // line 19
($context["options"] ?? null), "classes", [])];
        // line 22
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div id=\"calendar\"></div>
  <div id=\"bottom-buttons fc-button-group\">
    ";
        // line 25
        if (($context["showAddEvent"] ?? null)) {
            // line 26
            echo "    <div class=\"fullcalendar-bottom-btn add-event-btn mt-3\">
      <button type=\"button\" class=\"btn btn-success\">
        <a id=\"calendar-add-rendez-vous\"  href=\"";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null)), "html", null, true);
            echo "fullcalendar-view-event-add?entity=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null)), "html", null, true);
            echo "&bundle=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "bundle_type", [])), "html", null, true);
            echo "&start_field=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "start", [])), "html", null, true);
            echo "&end_field=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "end", [])), "html", null, true);
            echo "&destination=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>"));
            echo "\" class=\"use-ajax\" data-dialog-type=\"dialog\" data-dialog-renderer=\"off_canvas\"
            data-dialog-options=\"{&quot;width&quot;:400}\">";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Ajouter un rendez vous"));
            echo "
        </a>
      </button>
      <button type=\"button\" class=\"btn btn-secondary\">
        <a id=\"calendar-add-devis\"  href=\"";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null)), "html", null, true);
            echo "fullcalendar-view-event-add?entity=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null)), "html", null, true);
            echo "&bundle=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("intervention");
            echo "&start_field=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "start", [])), "html", null, true);
            echo "&end_field=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "end", [])), "html", null, true);
            echo "&destination=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>"));
            echo "\" class=\"use-ajax\" data-dialog-type=\"dialog\" data-dialog-renderer=\"off_canvas\"
           data-dialog-options=\"{&quot;width&quot;:400}\">";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Ajouter une intervention"));
            echo "</a>
      </button>
    </div>
    ";
        }
        // line 38
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap4/templates/calendar/views-view-fullcalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  106 => 34,  92 => 33,  85 => 29,  71 => 28,  67 => 26,  65 => 25,  58 => 22,  56 => 19,  55 => 18,);
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
 * Default theme implementation for Views to output a Fullcalendar View.
 *
 * Available variables:
 * - options: View plugin style options:
 *   - classes: CSS classes.
 *   - defaultDate: Default date of the calendar
 *   - start: Field name of start date
 *   - end: Field name of end date
 *
 * @see template_preprocess_views_view_fullcalendar()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    options.classes
  ]
%}
<div{{ attributes.addClass(classes) }}>
  <div id=\"calendar\"></div>
  <div id=\"bottom-buttons fc-button-group\">
    {% if showAddEvent %}
    <div class=\"fullcalendar-bottom-btn add-event-btn mt-3\">
      <button type=\"button\" class=\"btn btn-success\">
        <a id=\"calendar-add-rendez-vous\"  href=\"{{ language }}fullcalendar-view-event-add?entity={{ entity_id }}&bundle={{ options.bundle_type }}&start_field={{ options.start }}&end_field={{ options.end }}&destination={{ path('<current>') }}\" class=\"use-ajax\" data-dialog-type=\"dialog\" data-dialog-renderer=\"off_canvas\"
            data-dialog-options=\"{&quot;width&quot;:400}\">{{ 'Ajouter un rendez vous'|t }}
        </a>
      </button>
      <button type=\"button\" class=\"btn btn-secondary\">
        <a id=\"calendar-add-devis\"  href=\"{{ language }}fullcalendar-view-event-add?entity={{ entity_id }}&bundle={{ 'intervention' }}&start_field={{ options.start }}&end_field={{ options.end }}&destination={{ path('<current>') }}\" class=\"use-ajax\" data-dialog-type=\"dialog\" data-dialog-renderer=\"off_canvas\"
           data-dialog-options=\"{&quot;width&quot;:400}\">{{ 'Ajouter une intervention'|t }}</a>
      </button>
    </div>
    {% endif %}
  </div>
</div>
", "themes/contrib/bootstrap4/templates/calendar/views-view-fullcalendar.html.twig", "D:\\wamp64\\www\\drupalSite\\themes\\contrib\\bootstrap4\\templates\\calendar\\views-view-fullcalendar.html.twig");
    }
}
