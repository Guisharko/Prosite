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

/* themes/contrib/bootstrap4/templates/views/views-bootstrap-grid.html.twig */
class __TwigTemplate_cf4b8f84eaf1c468a6f9c549813dc6cdf0f8d69c391205bcc8dff3f8101734c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 15, "if" => 19, "for" => 24];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        // line 15
        $context["classes"] = [0 => "views-view-grid", 1 => $this->getAttribute(        // line 17
($context["options"] ?? null), "alignment", [])];
        // line 19
        if (($context["title"] ?? null)) {
            // line 20
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 22
        echo "<div id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 23
        if (($this->getAttribute(($context["options"] ?? null), "alignment", []) == "horizontal")) {
            // line 24
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 25
                echo "  <div class=\"row\">
    ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 27
                    echo "    ";
                    if (($this->getAttribute($context["loop"], "index", []) == 3)) {
                        // line 28
                        echo "    <div class=\"col ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_sm"] ?? null)), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "row_class", [])), "html", null, true);
                        echo "\">
      ";
                    } else {
                        // line 30
                        echo "      <div class=\"col ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_xs"] ?? null)), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_sm"] ?? null)), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_md"] ?? null)), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_lg"] ?? null)), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "row_class", [])), "html", null, true);
                        echo "\">
        ";
                    }
                    // line 32
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "      <div class=\"row\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 40
                echo "          <div
            class=\"col ";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_xs"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_sm"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_md"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_lg"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "row_class", [])), "html", null, true);
                echo " text-align-center\">
            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 43
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </div>

          ";
                // line 47
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "xs", []))) {
                    // line 48
                    echo "            <div class=\"clearfix visible-xs-block\"></div>
          ";
                }
                // line 50
                echo "
          ";
                // line 51
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "sm", []))) {
                    // line 52
                    echo "            <div class=\"clearfix visible-sm-block\"></div>
          ";
                }
                // line 54
                echo "
          ";
                // line 55
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "md", []))) {
                    // line 56
                    echo "            <div class=\"clearfix visible-md-block\"></div>
          ";
                }
                // line 58
                echo "
          ";
                // line 59
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "lg", []))) {
                    // line 60
                    echo "            <div class=\"clearfix visible-lg-block\"></div>
          ";
                }
                // line 62
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      </div>
    ";
        }
        // line 65
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap4/templates/views/views-bootstrap-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 65,  252 => 63,  238 => 62,  234 => 60,  232 => 59,  229 => 58,  225 => 56,  223 => 55,  220 => 54,  216 => 52,  214 => 51,  211 => 50,  207 => 48,  205 => 47,  201 => 45,  192 => 43,  188 => 42,  176 => 41,  173 => 40,  156 => 39,  153 => 38,  150 => 37,  143 => 35,  125 => 32,  111 => 30,  103 => 28,  100 => 27,  83 => 26,  80 => 25,  75 => 24,  73 => 23,  66 => 22,  60 => 20,  58 => 19,  56 => 17,  55 => 15,);
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
 * @file views-bootstrap-grid.html.twig
 * Default simple view template to display Bootstrap Grids.
 *
 *
 * - columns: Contains rows grouped by columns.
 * - rows: Contains a nested array of rows. Each row contains an array of
 *   columns.
 * - column_type: Contains a number (default Bootstrap grid system column type).
 *
 * @ingroup views_templates
 */
#}
{% set classes = [
  'views-view-grid',
  options.alignment,
] %}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div id=\"{{ id }}\" {{ attributes.addClass(classes) }}>
  {% if options.alignment  == 'horizontal' %}
  {% for row in items %}
  <div class=\"row\">
    {% for column in row.content %}
    {% if loop.index == 3 %}
    <div class=\"col {{ col_sm }} {{ options.row_class }}\">
      {% else %}
      <div class=\"col {{ col_xs }} {{ col_sm }} {{ col_md }} {{ col_lg }} {{ options.row_class }}\">
        {% endif %}
        {{ column.content }}
      </div>
      {% endfor %}
    </div>
    {% endfor %}
    {% else %}
      <div class=\"row\">
        {% for column in items %}
          <div
            class=\"col {{ col_xs }} {{ col_sm }} {{ col_md }} {{ col_lg }} {{ options.row_class }} text-align-center\">
            {% for row in column.content %}
              {{ row.content }}
            {% endfor %}
          </div>

          {% if loop.index is divisible by (sizes.xs) %}
            <div class=\"clearfix visible-xs-block\"></div>
          {% endif %}

          {% if loop.index is divisible by (sizes.sm) %}
            <div class=\"clearfix visible-sm-block\"></div>
          {% endif %}

          {% if loop.index is divisible by (sizes.md) %}
            <div class=\"clearfix visible-md-block\"></div>
          {% endif %}

          {% if loop.index is divisible by (sizes.lg) %}
            <div class=\"clearfix visible-lg-block\"></div>
          {% endif %}
        {% endfor %}
      </div>
    {% endif %}
  </div>
", "themes/contrib/bootstrap4/templates/views/views-bootstrap-grid.html.twig", "D:\\wamp64\\www\\drupalSite\\themes\\contrib\\bootstrap4\\templates\\views\\views-bootstrap-grid.html.twig");
    }
}
