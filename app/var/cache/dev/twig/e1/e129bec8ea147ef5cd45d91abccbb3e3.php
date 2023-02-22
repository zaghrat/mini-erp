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

/* @AdminLTE/Widgets/box-widget.html.twig */
class __TwigTemplate_e6c9304934845f7a5752543d20be67d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Widgets/box-widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Widgets/box-widget.html.twig"));

        // line 1
        $macros["button"] = $this->macros["button"] = $this->loadTemplate("@AdminLTE/Macros/buttons.html.twig", "@AdminLTE/Widgets/box-widget.html.twig", 1)->unwrap();
        // line 2
        if (        $this->hasBlock("box_before", $context, $blocks)) {
            $this->displayBlock("box_before", $context, $blocks);
        }
        // line 3
        echo "
";
        // line 4
        $context["_collapsed"] = ((array_key_exists("collapsed", $context)) ? (_twig_default_filter((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 4, $this->source); })()), false)) : (false));
        // line 5
        $context["_solid"] = ((array_key_exists("solid", $context)) ? (_twig_default_filter((isset($context["solid"]) || array_key_exists("solid", $context) ? $context["solid"] : (function () { throw new RuntimeError('Variable "solid" does not exist.', 5, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "widget", [], "any", false, false, false, 5), "solid", [], "any", false, false, false, 5))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "widget", [], "any", false, false, false, 5), "solid", [], "any", false, false, false, 5)));
        // line 6
        $context["_border"] = ((array_key_exists("border", $context)) ? (_twig_default_filter((isset($context["border"]) || array_key_exists("border", $context) ? $context["border"] : (function () { throw new RuntimeError('Variable "border" does not exist.', 6, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 6, $this->source); })()), "widget", [], "any", false, false, false, 6), "bordered", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 6, $this->source); })()), "widget", [], "any", false, false, false, 6), "bordered", [], "any", false, false, false, 6)));
        // line 7
        $context["_footer"] = (((array_key_exists("use_footer", $context)) ? (_twig_default_filter((isset($context["use_footer"]) || array_key_exists("use_footer", $context) ? $context["use_footer"] : (function () { throw new RuntimeError('Variable "use_footer" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 7, $this->source); })()), "widget", [], "any", false, false, false, 7), "use_footer", [], "any", false, false, false, 7))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 7, $this->source); })()), "widget", [], "any", false, false, false, 7), "use_footer", [], "any", false, false, false, 7))) ||         $this->hasBlock("box_footer", $context, $blocks));
        // line 8
        echo "
";
        // line 9
        if ( !array_key_exists("removable", $context)) {
            // line 10
            echo "    ";
            $context["removable"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 10, $this->source); })()), "widget", [], "any", false, false, false, 10), "removable", [], "any", false, false, false, 10);
        }
        // line 12
        if ( !array_key_exists("collapsible", $context)) {
            // line 13
            echo "    ";
            $context["collapsible"] = ((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 13, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 13, $this->source); })()), "widget", [], "any", false, false, false, 13), "collapsible", [], "any", false, false, false, 13));
        }
        // line 15
        echo "<div class=\"box box-";
        echo twig_escape_filter($this->env, ((array_key_exists("boxtype", $context)) ? (_twig_default_filter((isset($context["boxtype"]) || array_key_exists("boxtype", $context) ? $context["boxtype"] : (function () { throw new RuntimeError('Variable "boxtype" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "widget", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "widget", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15))), "html", null, true);
        echo (((isset($context["_solid"]) || array_key_exists("_solid", $context) ? $context["_solid"] : (function () { throw new RuntimeError('Variable "_solid" does not exist.', 15, $this->source); })())) ? (" box-solid") : (""));
        echo (((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 15, $this->source); })())) ? (" collapsed-box") : (""));
        echo "\"";
        if (        $this->hasBlock("box_attributes", $context, $blocks)) {
            echo " ";
            $this->displayBlock("box_attributes", $context, $blocks);
        }
        echo ">
    ";
        // line 16
        if (((        $this->hasBlock("box_title", $context, $blocks) || (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 16, $this->source); })())) || (isset($context["removable"]) || array_key_exists("removable", $context) ? $context["removable"] : (function () { throw new RuntimeError('Variable "removable" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "    <div class=\"box-header";
            echo (((isset($context["_border"]) || array_key_exists("_border", $context) ? $context["_border"] : (function () { throw new RuntimeError('Variable "_border" does not exist.', 17, $this->source); })())) ? (" with-border") : (""));
            echo "\">
        ";
            // line 18
            if (            $this->hasBlock("box_title", $context, $blocks)) {
                echo "<h3 class=\"box-title\">";
                $this->displayBlock("box_title", $context, $blocks);
                echo "</h3>";
            }
            // line 19
            echo "        <div class=\"box-tools pull-right\"";
            if (            $this->hasBlock("box_tools_attributes", $context, $blocks)) {
                echo " ";
                $this->displayBlock("box_tools_attributes", $context, $blocks);
            }
            echo ">
            ";
            // line 21
            echo "            ";
            if (            $this->hasBlock("box_tools", $context, $blocks)) {
                $this->displayBlock("box_tools", $context, $blocks);
            }
            // line 22
            echo "            ";
            if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 22, $this->source); })())) {
                // line 23
                echo "                ";
                echo twig_call_macro($macros["button"], "macro_action_toolbutton", [((                // line 24
(isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 24, $this->source); })())) ? ("fas fa-plus") : ("fas fa-minus")), "collapse", ((                // line 26
array_key_exists("collapsible_title", $context)) ? (_twig_default_filter((isset($context["collapsible_title"]) || array_key_exists("collapsible_title", $context) ? $context["collapsible_title"] : (function () { throw new RuntimeError('Variable "collapsible_title" does not exist.', 26, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", false, false, false, 26))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", false, false, false, 26))) : ("")), [], "AdminLTEBundle")))], 23, $context, $this->getSourceContext());
                // line 27
                echo "
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if ((isset($context["removable"]) || array_key_exists("removable", $context) ? $context["removable"] : (function () { throw new RuntimeError('Variable "removable" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                ";
                echo twig_call_macro($macros["button"], "macro_action_toolbutton", ["fas fa-times", "remove", ((                // line 34
array_key_exists("removable_title", $context)) ? (_twig_default_filter((isset($context["removable_title"]) || array_key_exists("removable_title", $context) ? $context["removable_title"] : (function () { throw new RuntimeError('Variable "removable_title" does not exist.', 34, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", false, false, false, 34))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", false, false, false, 34))) : ("")), [], "AdminLTEBundle")))], 31, $context, $this->getSourceContext());
                // line 35
                echo "
            ";
            }
            // line 37
            echo "        </div>
    </div>
    ";
        }
        // line 40
        echo "    <div class=\"box-body";
        if (        $this->hasBlock("box_body_class", $context, $blocks)) {
            echo " ";
            $this->displayBlock("box_body_class", $context, $blocks);
        }
        echo "\">";
        $this->displayBlock("box_body", $context, $blocks);
        echo "</div>
    ";
        // line 41
        if (((isset($context["_footer"]) || array_key_exists("_footer", $context) ? $context["_footer"] : (function () { throw new RuntimeError('Variable "_footer" does not exist.', 41, $this->source); })()) &&         $this->hasBlock("box_footer", $context, $blocks))) {
            // line 42
            echo "        ";
            // line 46
            echo "        ";
            $context["boxFooter"] =             $this->renderBlock("box_footer", $context, $blocks);
            // line 47
            echo "        ";
            if ( !twig_test_empty((isset($context["boxFooter"]) || array_key_exists("boxFooter", $context) ? $context["boxFooter"] : (function () { throw new RuntimeError('Variable "boxFooter" does not exist.', 47, $this->source); })()))) {
                // line 48
                echo "            <div class=\"box-footer\">";
                echo (isset($context["boxFooter"]) || array_key_exists("boxFooter", $context) ? $context["boxFooter"] : (function () { throw new RuntimeError('Variable "boxFooter" does not exist.', 48, $this->source); })());
                echo "</div>
        ";
            }
            // line 50
            echo "    ";
        }
        // line 51
        echo "</div>
";
        // line 52
        if (        $this->hasBlock("box_after", $context, $blocks)) {
            $this->displayBlock("box_after", $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 52,  172 => 51,  169 => 50,  163 => 48,  160 => 47,  157 => 46,  155 => 42,  153 => 41,  143 => 40,  138 => 37,  134 => 35,  132 => 34,  130 => 31,  128 => 30,  125 => 29,  121 => 27,  119 => 26,  118 => 24,  116 => 23,  113 => 22,  108 => 21,  100 => 19,  94 => 18,  89 => 17,  87 => 16,  75 => 15,  71 => 13,  69 => 12,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@AdminLTE/Macros/buttons.html.twig' as button %}
{% if block('box_before') is defined %}{{ block('box_before') }}{% endif %}

{% set _collapsed = collapsed|default(false) %}
{% set _solid     = solid|default(admin_lte_context.widget.solid)  %}
{% set _border    = border|default(admin_lte_context.widget.bordered)  %}
{% set _footer    = use_footer|default(admin_lte_context.widget.use_footer) or block('box_footer') is defined %}

{% if removable is not defined %}
    {% set removable = admin_lte_context.widget.removable %}
{% endif %}
{% if collapsible is not defined %}
    {% set collapsible =  (_collapsed or admin_lte_context.widget.collapsible) %}
{% endif %}
<div class=\"box box-{{ boxtype|default(admin_lte_context.widget.type) }}{{ _solid ? ' box-solid' : '' }}{{ _collapsed ? ' collapsed-box' : '' }}\"{% if block('box_attributes') is defined %} {{ block('box_attributes') }}{% endif %}>
    {% if block('box_title') is defined or collapsible or removable %}
    <div class=\"box-header{{ _border ? ' with-border' : '' }}\">
        {% if block('box_title') is defined %}<h3 class=\"box-title\">{{ block('box_title') }}</h3>{% endif %}
        <div class=\"box-tools pull-right\"{% if block('box_tools_attributes') is defined %} {{ block('box_tools_attributes') }}{% endif %}>
            {# Buttons, labels, and many other things can be placed here! #}
            {% if block('box_tools') is defined %}{{ block('box_tools') }}{% endif %}
            {% if collapsible %}
                {{ button.action_toolbutton(
                    _collapsed ? 'fas fa-plus'  : 'fas fa-minus' ,
                    'collapse',
                    collapsible_title|default(admin_lte_context.widget.collapsible_title|default()|trans({}, 'AdminLTEBundle'))
                ) }}
            {% endif %}

            {% if removable %}
                {{ button.action_toolbutton(
                'fas fa-times',
                'remove',
                removable_title|default(admin_lte_context.widget.removable_title|default()|trans({}, 'AdminLTEBundle'))
                ) }}
            {% endif %}
        </div>
    </div>
    {% endif %}
    <div class=\"box-body{% if block('box_body_class') is defined %} {{ block('box_body_class') }}{% endif %}\">{{ block('box_body') }}</div>
    {% if _footer and block('box_footer') is defined %}
        {# 
            If there is a form in the block_footer, it will be rendered when checking \"is not empty\". 
            Therefor we have to cache the output first and then perform the checks. 
        #}
        {% set boxFooter = block('box_footer') %}
        {% if boxFooter is not empty %}
            <div class=\"box-footer\">{{ boxFooter|raw }}</div>
        {% endif %}
    {% endif %}
</div>
{% if block('box_after') is defined %}{{ block('box_after') }}{% endif %}
", "@AdminLTE/Widgets/box-widget.html.twig", "/var/www/app/vendor/kevinpapst/adminlte-bundle/Resources/views/Widgets/box-widget.html.twig");
    }
}
