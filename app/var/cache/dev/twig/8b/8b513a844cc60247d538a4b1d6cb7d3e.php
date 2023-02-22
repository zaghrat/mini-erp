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

/* registration/email.html.twig */
class __TwigTemplate_f1d9cd3c1b17164ed293f6ac13b2874f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/email.html.twig"));

        // line 2
        echo "
<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi!", [], "emails"), "html", null, true);
        echo "</h1>

<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To activate your account, please visit the following link", [], "emails"), "html", null, true);
        echo "</p>

<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["validationUrl"]) || array_key_exists("validationUrl", $context) ? $context["validationUrl"] : (function () { throw new RuntimeError('Variable "validationUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["validationUrl"]) || array_key_exists("validationUrl", $context) ? $context["validationUrl"] : (function () { throw new RuntimeError('Variable "validationUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</a>

<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cheers!", [], "emails"), "html", null, true);
        echo "</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  56 => 7,  51 => 5,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'emails' %}

<h1>{{ \"Hi!\"|trans }}</h1>

<p>{{ \"To activate your account, please visit the following link\"|trans }}</p>

<a href=\"{{ validationUrl }}\">{{ validationUrl }}</a>

<p>{{ \"Cheers!\"|trans }}</p>
", "registration/email.html.twig", "/var/www/app/templates/registration/email.html.twig");
    }
}
