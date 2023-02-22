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

/* @AdminLTE/Navbar/user.html.twig */
class __TwigTemplate_70a9681d567b6f70eb81b1d90650e0e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'member_since' => [$this, 'block_member_since'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/user.html.twig"));

        // line 1
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Navbar/user.html.twig", 1)->unwrap();
        // line 2
        if (( !array_key_exists("user", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 3
            echo "    ";
            $context["user"] = null;
            // line 4
            echo "    ";
            $context["adminlte_userdetails"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getUserDetails();
            // line 5
            echo "    ";
            if ( !(null === (isset($context["adminlte_userdetails"]) || array_key_exists("adminlte_userdetails", $context) ? $context["adminlte_userdetails"] : (function () { throw new RuntimeError('Variable "adminlte_userdetails" does not exist.', 5, $this->source); })()))) {
                // line 6
                echo "        ";
                $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_userdetails"]) || array_key_exists("adminlte_userdetails", $context) ? $context["adminlte_userdetails"] : (function () { throw new RuntimeError('Variable "adminlte_userdetails" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6);
                // line 7
                echo "        ";
                $context["links"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_userdetails"]) || array_key_exists("adminlte_userdetails", $context) ? $context["adminlte_userdetails"] : (function () { throw new RuntimeError('Variable "adminlte_userdetails" does not exist.', 7, $this->source); })()), "links", [], "any", false, false, false, 7);
                // line 8
                echo "        ";
                $context["showProfileLink"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_userdetails"]) || array_key_exists("adminlte_userdetails", $context) ? $context["adminlte_userdetails"] : (function () { throw new RuntimeError('Variable "adminlte_userdetails" does not exist.', 8, $this->source); })()), "showProfileLink", [], "any", false, false, false, 8);
                // line 9
                echo "        ";
                $context["showLogoutLink"] = twig_get_attribute($this->env, $this->source, (isset($context["adminlte_userdetails"]) || array_key_exists("adminlte_userdetails", $context) ? $context["adminlte_userdetails"] : (function () { throw new RuntimeError('Variable "adminlte_userdetails" does not exist.', 9, $this->source); })()), "showLogoutLink", [], "any", false, false, false, 9);
                // line 10
                echo "    ";
            }
        }
        // line 12
        if ((array_key_exists("user", $context) &&  !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })())))) {
            // line 13
            echo "    <li class=\"dropdown user user-menu\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            ";
            // line 15
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "avatar", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "user-image"], 15, $context, $this->getSourceContext());
            echo "
            <span class=\"hidden-xs\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
        </a>
        <ul class=\"dropdown-menu\">
            <!-- User image -->
            <li class=\"user-header\">
                ";
            // line 21
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "avatar", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21)], 21, $context, $this->getSourceContext());
            echo "
                <p>
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "
                    ";
            // line 24
            $this->displayBlock('member_since', $context, $blocks);
            // line 27
            echo "                </p>
            </li>
            ";
            // line 29
            if ((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "                <!-- Menu Body -->
                <li class=\"user-body\">
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 32, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 33
                    echo "                        <div class=\"col-xs-4 text-center\">
                            <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["link"], "path", [], "any", false, false, false, 34)), twig_get_attribute($this->env, $this->source, $context["link"], "parameters", [], "any", false, false, false, 34)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 34), "html", null, true);
                    echo "</a>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                </li>
            ";
            }
            // line 39
            echo "            ";
            if (((isset($context["showLogoutLink"]) || array_key_exists("showLogoutLink", $context) ? $context["showLogoutLink"] : (function () { throw new RuntimeError('Variable "showLogoutLink" does not exist.', 39, $this->source); })()) || (isset($context["showProfileLink"]) || array_key_exists("showProfileLink", $context) ? $context["showProfileLink"] : (function () { throw new RuntimeError('Variable "showProfileLink" does not exist.', 39, $this->source); })()))) {
                // line 40
                echo "                <!-- Menu Footer-->
                <li class=\"user-footer\">
                    ";
                // line 42
                if ((isset($context["showProfileLink"]) || array_key_exists("showProfileLink", $context) ? $context["showProfileLink"] : (function () { throw new RuntimeError('Variable "showProfileLink" does not exist.', 42, $this->source); })())) {
                    // line 43
                    echo "                        <div class=\"pull-left\">
                            <a href=\"";
                    // line 44
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_profile"));
                    echo "\"
                               class=\"btn btn-default btn-flat\">";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile", [], "AdminLTEBundle"), "html", null, true);
                    echo "</a>
                        </div>
                    ";
                }
                // line 48
                echo "                    ";
                if ((isset($context["showLogoutLink"]) || array_key_exists("showLogoutLink", $context) ? $context["showLogoutLink"] : (function () { throw new RuntimeError('Variable "showLogoutLink" does not exist.', 48, $this->source); })())) {
                    // line 49
                    echo "                        <div class=\"pull-right\">
                            <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
                    echo "\"
                               class=\"btn btn-default btn-flat\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "AdminLTEBundle"), "html", null, true);
                    echo "</a>
                        </div>
                    ";
                }
                // line 54
                echo "                </li>
            ";
            }
            // line 56
            echo "        </ul>
    </li>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_member_since($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "member_since"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "member_since"));

        // line 25
        echo "                        <small>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Member since %date%", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "memberSince", [], "any", false, false, false, 25), "m.Y")], "AdminLTEBundle"), "html", null, true);
        echo "</small>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 25,  191 => 24,  178 => 56,  174 => 54,  168 => 51,  164 => 50,  161 => 49,  158 => 48,  152 => 45,  148 => 44,  145 => 43,  143 => 42,  139 => 40,  136 => 39,  132 => 37,  121 => 34,  118 => 33,  114 => 32,  110 => 30,  108 => 29,  104 => 27,  102 => 24,  96 => 23,  91 => 21,  83 => 16,  79 => 15,  75 => 13,  73 => 12,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@AdminLTE/Macros/default.html.twig\" as macro %}
{% if user is not defined or adminlte_direct_include is defined %}
    {% set user = null %}
    {% set adminlte_userdetails = adminlte_user() %}
    {% if adminlte_userdetails is not null %}
        {% set user = adminlte_userdetails.user %}
        {% set links = adminlte_userdetails.links %}
        {% set showProfileLink = adminlte_userdetails.showProfileLink %}
        {% set showLogoutLink = adminlte_userdetails.showLogoutLink %}
    {% endif %}
{% endif %}
{% if user is defined and user is not null %}
    <li class=\"dropdown user user-menu\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            {{ macro.avatar(user.avatar, user.username, 'user-image') }}
            <span class=\"hidden-xs\">{{ user.name }}</span>
        </a>
        <ul class=\"dropdown-menu\">
            <!-- User image -->
            <li class=\"user-header\">
                {{ macro.avatar(user.avatar, user.username) }}
                <p>
                    {{ user.name }} - {{ user.title }}
                    {% block member_since %}
                        <small>{{ 'Member since %date%'|trans({'%date%': user.memberSince|date('m.Y') }, 'AdminLTEBundle') }}</small>
                    {% endblock %}
                </p>
            </li>
            {% if links %}
                <!-- Menu Body -->
                <li class=\"user-body\">
                    {% for link in links %}
                        <div class=\"col-xs-4 text-center\">
                            <a href=\"{{ path(link.path|route_alias, link.parameters) }}\">{{ link.title }}</a>
                        </div>
                    {% endfor %}
                </li>
            {% endif %}
            {% if showLogoutLink or showProfileLink %}
                <!-- Menu Footer-->
                <li class=\"user-footer\">
                    {% if showProfileLink %}
                        <div class=\"pull-left\">
                            <a href=\"{{ path('adminlte_profile'|route_alias) }}\"
                               class=\"btn btn-default btn-flat\">{{ 'Profile'|trans({}, 'AdminLTEBundle') }}</a>
                        </div>
                    {% endif %}
                    {% if showLogoutLink %}
                        <div class=\"pull-right\">
                            <a href=\"{{ logout_path() }}\"
                               class=\"btn btn-default btn-flat\">{{ 'Sign out'|trans({}, 'AdminLTEBundle') }}</a>
                        </div>
                    {% endif %}
                </li>
            {% endif %}
        </ul>
    </li>
{% endif %}
", "@AdminLTE/Navbar/user.html.twig", "/var/www/app/templates/bundles/AdminLTEBundle/Navbar/user.html.twig");
    }
}
