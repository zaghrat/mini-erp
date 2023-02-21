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

/* @AdminLTE/Sidebar/menu.html.twig */
class __TwigTemplate_8adf8b67cd57dcd0dc07623887d616b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Sidebar/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Sidebar/menu.html.twig"));

        // line 1
        $macros["__internal_parse_2"] = $this->macros["__internal_parse_2"] = $this->loadTemplate("@AdminLTE/Macros/menu.html.twig", "@AdminLTE/Sidebar/menu.html.twig", 1)->unwrap();
        // line 2
        if (( !array_key_exists("menu", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 3
            echo "    ";
            $context["menu"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getMenu(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3));
        }
        // line 5
        if ((array_key_exists("menu", $context) &&  !(null === (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 5, $this->source); })())))) {
            // line 6
            echo "<ul class=\"sidebar-menu\" data-widget=\"tree\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        ";
                echo twig_call_macro($macros["__internal_parse_2"], "macro_menu_item", [$context["item"]], 8, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Sidebar/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  60 => 8,  56 => 7,  53 => 6,  51 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"@AdminLTE/Macros/menu.html.twig\" import menu_item %}
{% if menu is not defined or adminlte_direct_include is defined %}
    {% set menu = adminlte_menu(app.request) %}
{% endif %}
{% if menu is defined and menu is not null %}
<ul class=\"sidebar-menu\" data-widget=\"tree\">
    {% for item in menu %}
        {{ menu_item(item) }}
    {% endfor %}
</ul>
{% endif %}
", "@AdminLTE/Sidebar/menu.html.twig", "/home/zaghrat/Projects/progest/php/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/menu.html.twig");
    }
}
