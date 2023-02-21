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

/* @AdminLTE/Macros/menu.html.twig */
class __TwigTemplate_f68a07a053e35d6399e5c92ace22ac2e extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Macros/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Macros/menu.html.twig"));

        // line 38
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 2
            echo "    ";
            $macros["menu"] = $this;
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "route", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "hasChildren", [], "any", false, false, false, 3))) {
                // line 4
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "identifier", [], "any", false, false, false, 4), "html", null, true);
                echo "\" class=\" ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "isActive", [], "any", false, false, false, 4)) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "hasChildren", [], "any", false, false, false, 4)) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 5
                ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "hasChildren", [], "any", false, false, false, 5)) ? (print ("#")) : (print (twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5))) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5)), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "routeArgs", [], "any", false, false, false, 5)))), "html", null, true))));
                echo "\">
                ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "icon", [], "any", false, false, false, 6)) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "icon", [], "any", false, false, false, 6), "html", null, true);
                    echo "\"></i> ";
                }
                // line 7
                echo "                ";
                if ( !(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "badge", [], "any", false, false, false, 7) === false)) {
                    // line 8
                    echo "                <span class=\"pull-right-container\">
                    <small class=\"label pull-right bg-";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "badgeColor", [], "any", false, false, false, 9), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "badge", [], "any", false, false, false, 9), "html", null, true);
                    echo "</small>
                </span>
                ";
                }
                // line 12
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "hasChildren", [], "any", false, false, false, 12)) {
                    echo "<i class=\"fas fa-angle-left pull-right\"></i>";
                }
                // line 13
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "label", [], "any", false, false, false, 13)), "html", null, true);
                echo "</span>
            </a>

            ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "hasChildren", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 19
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "hasChildren", [], "any", false, false, false, 19)) {
                            // line 20
                            echo "                           ";
                            echo twig_call_macro($macros["menu"], "macro_menu_item", [$context["child"]], 20, $context, $this->getSourceContext());
                            echo "
                        ";
                        } else {
                            // line 22
                            echo "                            <li class=\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 22)) ? ("active") : (""));
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "identifier", [], "any", false, false, false, 22), "html", null, true);
                            echo "\">
                                <a href=\"";
                            // line 23
                            echo twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 23))) ? (twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 23)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 23)), twig_get_attribute($this->env, $this->source, $context["child"], "routeArgs", [], "any", false, false, false, 23)))), "html", null, true);
                            echo "\">
                                    ";
                            // line 24
                            echo twig_call_macro($macros["menu"], "macro_menu_item_content", [$context["child"], ""], 24, $context, $this->getSourceContext());
                            echo "
                                </a>
                            </li>
                        ";
                        }
                        // line 28
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                </ul>
            ";
                }
                // line 31
                echo "        </li>
    ";
            } else {
                // line 33
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "identifier", [], "any", false, false, false, 33), "html", null, true);
                echo "\" class=\"header\">
            ";
                // line 34
                echo twig_call_macro($macros["menu"], "macro_menu_item_content", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), ""], 34, $context, $this->getSourceContext());
                echo "
        </li>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_menu_item_content($__item__ = null, $__defaultIcon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "defaultIcon" => $__defaultIcon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item_content"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item_content"));

            // line 40
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 40), (isset($context["defaultIcon"]) || array_key_exists("defaultIcon", $context) ? $context["defaultIcon"] : (function () { throw new RuntimeError('Variable "defaultIcon" does not exist.', 40, $this->source); })()))) : ((isset($context["defaultIcon"]) || array_key_exists("defaultIcon", $context) ? $context["defaultIcon"] : (function () { throw new RuntimeError('Variable "defaultIcon" does not exist.', 40, $this->source); })()))), "html", null, true);
            echo "\"></i>
    <span>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "label", [], "any", false, false, false, 41)), "html", null, true);
            echo "</span>
    ";
            // line 42
            if ( !(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "badge", [], "any", false, false, false, 42) === false)) {
                // line 43
                echo "    <span class=\"pull-right-container\">
        <small class=\"label pull-right bg-";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "badgeColor", [], "any", false, false, false, 44), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "badge", [], "any", false, false, false, 44), "html", null, true);
                echo "</small>
    </span>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Macros/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 44,  229 => 43,  227 => 42,  223 => 41,  218 => 40,  198 => 39,  179 => 34,  174 => 33,  170 => 31,  166 => 29,  160 => 28,  153 => 24,  149 => 23,  142 => 22,  136 => 20,  133 => 19,  129 => 18,  126 => 17,  124 => 16,  117 => 13,  112 => 12,  104 => 9,  101 => 8,  98 => 7,  92 => 6,  88 => 5,  79 => 4,  76 => 3,  73 => 2,  54 => 1,  43 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro menu_item(item) %}
    {% import _self as menu %}
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\" class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
            <a href=\"{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route|route_alias, item.routeArgs) }}\">
                {% if item.icon %} <i class=\"{{ item.icon }}\"></i> {% endif %}
                {% if item.badge is not same as(false) %}
                <span class=\"pull-right-container\">
                    <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
                </span>
                {% endif %}
                {% if item.hasChildren %}<i class=\"fas fa-angle-left pull-right\"></i>{% endif %}
                <span>{{ item.label|trans }}</span>
            </a>

            {% if item.hasChildren %}
                <ul class=\"treeview-menu\">
                    {% for child in item.children %}
                        {% if child.hasChildren %}
                           {{ menu.menu_item(child) }}
                        {% else %}
                            <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                                <a href=\"{{ '/' in child.route ? child.route : path(child.route|route_alias, child.routeArgs) }}\">
                                    {{ menu.menu_item_content(child, '') }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li id=\"{{ item.identifier }}\" class=\"header\">
            {{ menu.menu_item_content(item, '') }}
        </li>
    {% endif %}
{% endmacro %}

{% macro menu_item_content(item, defaultIcon) %}
    <i class=\"{{ item.icon|default(defaultIcon) }}\"></i>
    <span>{{ item.label|trans }}</span>
    {% if item.badge is not same as(false) %}
    <span class=\"pull-right-container\">
        <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
    </span>
    {% endif %}
{% endmacro %}
", "@AdminLTE/Macros/menu.html.twig", "/home/zaghrat/Projects/progest/php/vendor/kevinpapst/adminlte-bundle/Resources/views/Macros/menu.html.twig");
    }
}
