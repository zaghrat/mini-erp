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

/* @AdminLTE/Navbar/messages.html.twig */
class __TwigTemplate_34bfd0b69ccbf77ceab0c95a48a70691 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/messages.html.twig"));

        // line 1
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Navbar/messages.html.twig", 1)->unwrap();
        // line 2
        if (( !array_key_exists("messages", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 3
            echo "    ";
            $context["messages"] = null;
            // line 4
            echo "    ";
            $context["adminlte_messages"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getMessages();
            // line 5
            echo "    ";
            if ( !(null === (isset($context["adminlte_messages"]) || array_key_exists("adminlte_messages", $context) ? $context["adminlte_messages"] : (function () { throw new RuntimeError('Variable "adminlte_messages" does not exist.', 5, $this->source); })()))) {
                // line 6
                echo "        ";
                $context["messages"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_messages"]) || array_key_exists("adminlte_messages", $context) ? $context["adminlte_messages"] : (function () { throw new RuntimeError('Variable "adminlte_messages" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6);
                // line 7
                echo "        ";
                $context["total"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_messages"]) || array_key_exists("adminlte_messages", $context) ? $context["adminlte_messages"] : (function () { throw new RuntimeError('Variable "adminlte_messages" does not exist.', 7, $this->source); })()), "total", [], "any", false, false, false, 7);
                // line 8
                echo "    ";
            }
        }
        // line 10
        if ((array_key_exists("messages", $context) &&  !(null === (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 10, $this->source); })())))) {
            // line 11
            echo "<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-envelope\"></i>
        <span class=\"label label-success\">";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% messages", ["%count%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 17, $this->source); })())], "AdminLTEBundle"), "html", null, true);
            echo "</li>
        <li>
            <ul class=\"menu\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 21
                echo "                    <li>
                        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_message"), ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "identifier", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">
                            <div class=\"pull-left\">
                                ";
                // line 24
                echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
                echo "
                            </div>
                            <h4>
                                ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
                echo "
                                <small><i class=\"far fa-clock\"></i> ";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "sentAt", [], "any", false, false, false, 28), "d.m.Y H:i"), "html", null, true);
                echo "</small>
                            </h4>
                            <p>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "subject", [], "any", false, false, false, 30), "html", null, true);
                echo "</p>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_messages"));
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
        return "@AdminLTE/Navbar/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  122 => 34,  112 => 30,  107 => 28,  103 => 27,  97 => 24,  92 => 22,  89 => 21,  85 => 20,  79 => 17,  73 => 14,  68 => 11,  66 => 10,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@AdminLTE/Macros/default.html.twig\" as macro %}
{% if messages is not defined or adminlte_direct_include is defined %}
    {% set messages = null %}
    {% set adminlte_messages = adminlte_messages() %}
    {% if adminlte_messages is not null %}
        {% set messages = adminlte_messages.messages %}
        {% set total = adminlte_messages.total %}
    {% endif %}
{% endif %}
{% if messages is defined and messages is not null %}
<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-envelope\"></i>
        <span class=\"label label-success\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %count% messages'|trans({'%count%': total}, 'AdminLTEBundle') }}</li>
        <li>
            <ul class=\"menu\">
                {% for msg in messages %}
                    <li>
                        <a href=\"{{ path('adminlte_message'|route_alias, {'id': msg.identifier}) }}\">
                            <div class=\"pull-left\">
                                {{ macro.avatar(msg.from.avatar, msg.from.username) }}
                            </div>
                            <h4>
                                {{ msg.from.username }}
                                <small><i class=\"far fa-clock\"></i> {{ msg.sentAt|date('d.m.Y H:i') }}</small>
                            </h4>
                            <p>{{ msg.subject }}</p>
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
        <li class=\"footer\"><a href=\"{{ path('adminlte_messages'|route_alias) }}\">{{'View all'|trans({}, 'AdminLTEBundle')}}</a></li>
    </ul>
</li>
{% endif %}
", "@AdminLTE/Navbar/messages.html.twig", "/var/www/app/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/messages.html.twig");
    }
}
