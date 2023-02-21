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

/* @AdminLTE/Navbar/tasks.html.twig */
class __TwigTemplate_83e1cdd8686a1c4168ebd413cc1a9b34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/tasks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/tasks.html.twig"));

        // line 1
        if (( !array_key_exists("tasks", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 2
            echo "    ";
            $context["tasks"] = null;
            // line 3
            echo "    ";
            $context["adminlte_tasks"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getTasks();
            // line 4
            echo "    ";
            if ( !(null === (isset($context["adminlte_tasks"]) || array_key_exists("adminlte_tasks", $context) ? $context["adminlte_tasks"] : (function () { throw new RuntimeError('Variable "adminlte_tasks" does not exist.', 4, $this->source); })()))) {
                // line 5
                echo "        ";
                $context["tasks"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_tasks"]) || array_key_exists("adminlte_tasks", $context) ? $context["adminlte_tasks"] : (function () { throw new RuntimeError('Variable "adminlte_tasks" does not exist.', 5, $this->source); })()), "tasks", [], "any", false, false, false, 5);
                // line 6
                echo "        ";
                $context["total"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_tasks"]) || array_key_exists("adminlte_tasks", $context) ? $context["adminlte_tasks"] : (function () { throw new RuntimeError('Variable "adminlte_tasks" does not exist.', 6, $this->source); })()), "total", [], "any", false, false, false, 6);
                // line 7
                echo "    ";
            }
        }
        // line 9
        if ((array_key_exists("tasks", $context) &&  !(null === (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-flag\"></i>
        <span class=\"label label-danger\">";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% tasks", ["%count%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 16, $this->source); })())], "AdminLTEBundle"), "html", null, true);
            echo "</li>
        <li>
            <ul class=\"menu\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 20
                echo "                    <li>
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_task"), ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "identifier", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">
                            <h3>
                                ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "
                                <small class=\"pull-right\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 24), "html", null, true);
                echo "%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "color", [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                                     style=\"width: ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 28), "html", null, true);
                echo "%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 30), "html", null, true);
                echo "\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%progress%% Complete", ["%progress%" => twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 33)], "AdminLTEBundle"), "html", null, true);
                echo "</span>
                                </div>
                            </div>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </ul>
        <li class=\"footer\">
            <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_tasks"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
            echo "</a>
        </li>
    </ul>
</li>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  132 => 39,  120 => 33,  114 => 30,  109 => 28,  105 => 27,  99 => 24,  95 => 23,  90 => 21,  87 => 20,  83 => 19,  77 => 16,  71 => 13,  66 => 10,  64 => 9,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if tasks is not defined or adminlte_direct_include is defined %}
    {% set tasks = null %}
    {% set adminlte_tasks = adminlte_tasks() %}
    {% if adminlte_tasks is not null %}
        {% set tasks = adminlte_tasks.tasks %}
        {% set total = adminlte_tasks.total %}
    {% endif %}
{% endif %}
{% if tasks is defined and tasks is not null %}
<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-flag\"></i>
        <span class=\"label label-danger\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %count% tasks' |trans({'%count%': total}, 'AdminLTEBundle') }}</li>
        <li>
            <ul class=\"menu\">
                {% for task in tasks %}
                    <li>
                        <a href=\"{{ path('adminlte_task'|route_alias, {'id': task.identifier}) }}\">
                            <h3>
                                {{ task.title }}
                                <small class=\"pull-right\">{{ task.progress }}%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-{{ task.color }}\"
                                     style=\"width: {{ task.progress }}%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"{{ task.progress }}\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">{{ '%progress%% Complete'|trans({'%progress%':task.progress}, 'AdminLTEBundle') }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                {%  endfor  %}
            </ul>
        <li class=\"footer\">
            <a href=\"{{ path('adminlte_tasks'|route_alias) }}\">{{'View all'|trans({}, 'AdminLTEBundle')}}</a>
        </li>
    </ul>
</li>
{% endif %}
", "@AdminLTE/Navbar/tasks.html.twig", "/home/zaghrat/Projects/progest/php/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/tasks.html.twig");
    }
}
