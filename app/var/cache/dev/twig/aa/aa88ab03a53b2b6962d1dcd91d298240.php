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

/* @AdminLTE/Navbar/notifications.html.twig */
class __TwigTemplate_cf2ab16a999581a283cdebd6253c3746 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/notifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/notifications.html.twig"));

        // line 1
        if (( !array_key_exists("notifications", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 2
            echo "    ";
            $context["notifications"] = null;
            // line 3
            echo "    ";
            $context["adminlte_notifications"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getNotifications();
            // line 4
            echo "    ";
            if ( !(null === (isset($context["adminlte_notifications"]) || array_key_exists("adminlte_notifications", $context) ? $context["adminlte_notifications"] : (function () { throw new RuntimeError('Variable "adminlte_notifications" does not exist.', 4, $this->source); })()))) {
                // line 5
                echo "        ";
                $context["notifications"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_notifications"]) || array_key_exists("adminlte_notifications", $context) ? $context["adminlte_notifications"] : (function () { throw new RuntimeError('Variable "adminlte_notifications" does not exist.', 5, $this->source); })()), "notifications", [], "any", false, false, false, 5);
                // line 6
                echo "        ";
                $context["total"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_notifications"]) || array_key_exists("adminlte_notifications", $context) ? $context["adminlte_notifications"] : (function () { throw new RuntimeError('Variable "adminlte_notifications" does not exist.', 6, $this->source); })()), "total", [], "any", false, false, false, 6);
                // line 7
                echo "    ";
            }
        }
        // line 9
        if ((array_key_exists("notifications", $context) &&  !(null === (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-bell\"></i>
        <span class=\"label label-warning\">";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% notifications", ["%count%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 16, $this->source); })())], "AdminLTEBundle"), "html", null, true);
            echo "</li>
        <li>
            <ul class=\"menu\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 20
                echo "                    <li>
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_notification"), ["id" => twig_get_attribute($this->env, $this->source, $context["notice"], "identifier", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">
                            <i class=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "icon", [], "any", false, false, false, 22), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getTextType(twig_get_attribute($this->env, $this->source, $context["notice"], "type", [], "any", false, false, false, 22)), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "message", [], "any", false, false, false, 22), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_notifications"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
            echo "</a></li>
    </ul>
</li>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  108 => 26,  94 => 22,  90 => 21,  87 => 20,  83 => 19,  77 => 16,  71 => 13,  66 => 10,  64 => 9,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if notifications is not defined or adminlte_direct_include is defined %}
    {% set notifications = null %}
    {% set adminlte_notifications = adminlte_notifications() %}
    {% if adminlte_notifications is not null %}
        {% set notifications = adminlte_notifications.notifications %}
        {% set total = adminlte_notifications.total %}
    {% endif %}
{% endif %}
{% if notifications is defined and notifications is not null %}
<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-bell\"></i>
        <span class=\"label label-warning\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %count% notifications'|trans({'%count%': total}, 'AdminLTEBundle') }}</li>
        <li>
            <ul class=\"menu\">
                {% for notice in notifications %}
                    <li>
                        <a href=\"{{ path('adminlte_notification'|route_alias, {'id': notice.identifier}) }}\">
                            <i class=\"{{ notice.icon }} {{ notice.type|text_type }}\"></i> {{ notice.message }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
        <li class=\"footer\"><a href=\"{{ path('adminlte_notifications'|route_alias) }}\">{{'View all'|trans({}, 'AdminLTEBundle')}}</a></li>
    </ul>
</li>
{% endif %}
", "@AdminLTE/Navbar/notifications.html.twig", "/var/www/app/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/notifications.html.twig");
    }
}
