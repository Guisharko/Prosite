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

/* themes/contrib/bootstrap4/templates/navigation/menu--main.html.twig */
class __TwigTemplate_185beee3751a8c3799ee9dc220ca05e916b223381889eb4584414fbf8362fd73 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 29, "if" => 31, "for" => 34, "set" => 36];
        $filters = ["escape" => 33];
        $functions = ["link" => 52];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "  <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => [0 => "navbar-nav", 1 => "mr-auto"]], "method")), "html", null, true);
                    echo ">
      ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 35
                        echo "        ";
                        // line 36
                        $context["classes_list_item"] = [0 => "nav-item", 1 => (($this->getAttribute(                        // line 38
$context["item"], "is_expanded", [])) ? ("dropdown") : (""))];
                        // line 41
                        echo "        ";
                        // line 42
                        $context["classes_link"] = [0 => "nav-item", 1 => "nav-link", 2 => (($this->getAttribute(                        // line 45
$context["item"], "is_expanded", [])) ? ("dropdown-toggle") : ("")), 3 => (($this->getAttribute(                        // line 46
$context["item"], "is_collapsed", [])) ? ("dropdown-toggle") : ("")), 4 => (($this->getAttribute(                        // line 47
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                        // line 50
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes_list_item"] ?? null)], "method")), "html", null, true);
                        echo ">
          ";
                        // line 51
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 52
                            echo "            ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["classes_link"] ?? null), "data-toggle" => "dropdown"]), "html", null, true);
                            echo "
            ";
                            // line 53
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
          ";
                        } else {
                            // line 55
                            echo "            ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["classes_link"] ?? null)]), "html", null, true);
                            echo "
          ";
                        }
                        // line 57
                        echo "        </li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "  </ul>
    ";
                } else {
                    // line 61
                    echo "<div class=\"dropdown-menu dropdown-menu-right\">
  ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 63
                        echo "    ";
                        // line 64
                        $context["classes_link"] = [0 => "dropdown-item", 1 => (($this->getAttribute(                        // line 66
$context["item"], "is_expanded", [])) ? ("dropdown-toggle") : ("")), 2 => (($this->getAttribute(                        // line 67
$context["item"], "is_collapsed", [])) ? ("dropdown-toggle") : ("")), 3 => (($this->getAttribute(                        // line 68
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                        // line 71
                        echo "    ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["classes_link"] ?? null)]), "html", null, true);
                        echo "
    ";
                        // line 72
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 73
                            echo "      ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
    ";
                        }
                        // line 75
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "</div>
    ";
                }
                // line 78
                echo "  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap4/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 78,  178 => 76,  172 => 75,  166 => 73,  164 => 72,  159 => 71,  157 => 68,  156 => 67,  155 => 66,  154 => 64,  152 => 63,  148 => 62,  145 => 61,  141 => 59,  134 => 57,  128 => 55,  123 => 53,  118 => 52,  116 => 51,  111 => 50,  109 => 47,  108 => 46,  107 => 45,  106 => 42,  104 => 41,  102 => 38,  101 => 36,  99 => 35,  95 => 34,  90 => 33,  87 => 32,  84 => 31,  81 => 30,  67 => 29,  60 => 27,  57 => 22,  55 => 21,);
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
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
  <ul{{ attributes.addClass(['navbar-nav', 'mr-auto']) }}>
      {% for item in items %}
        {%
          set classes_list_item = [
            'nav-item',
            item.is_expanded ? 'dropdown',
          ]
        %}
        {%
          set classes_link = [
            'nav-item',
            'nav-link',
            item.is_expanded ? 'dropdown-toggle',
            item.is_collapsed ? 'dropdown-toggle',
            item.in_active_trail ? 'active',
          ]
        %}
        <li{{ item.attributes.addClass(classes_list_item) }}>
          {% if item.below %}
            {{ link(item.title, item.url, { 'class': classes_link, 'data-toggle' : 'dropdown' }) }}
            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
          {% else %}
            {{ link(item.title, item.url, { 'class': classes_link }) }}
          {% endif %}
        </li>
      {% endfor %}
  </ul>
    {% else %}
<div class=\"dropdown-menu dropdown-menu-right\">
  {% for item in items %}
    {%
      set classes_link = [
      'dropdown-item',
      item.is_expanded ? 'dropdown-toggle',
      item.is_collapsed ? 'dropdown-toggle',
      item.in_active_trail ? 'active',
    ]
    %}
    {{ link(item.title, item.url, { 'class': classes_link }) }}
    {% if item.below %}
      {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
    {% endif %}
  {% endfor %}
</div>
    {% endif %}
  {% endif %}
{% endmacro %}
", "themes/contrib/bootstrap4/templates/navigation/menu--main.html.twig", "D:\\wamp64\\www\\drupalSite\\themes\\contrib\\bootstrap4\\templates\\navigation\\menu--main.html.twig");
    }
}
