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

/* @AdminLTE/layout/default-layout.html.twig */
class __TwigTemplate_826fb704f13fe58ef3f6395002b882f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_start' => [$this, 'block_html_start'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'logo_path' => [$this, 'block_logo_path'],
            'logo_mini' => [$this, 'block_logo_mini'],
            'logo_large' => [$this, 'block_logo_large'],
            'navbar_toggle' => [$this, 'block_navbar_toggle'],
            'navbar_start' => [$this, 'block_navbar_start'],
            'navbar_messages' => [$this, 'block_navbar_messages'],
            'navbar_notifications' => [$this, 'block_navbar_notifications'],
            'navbar_tasks' => [$this, 'block_navbar_tasks'],
            'navbar_user' => [$this, 'block_navbar_user'],
            'navbar_end' => [$this, 'block_navbar_end'],
            'navbar_control_sidebar_toggle' => [$this, 'block_navbar_control_sidebar_toggle'],
            'sidebar_user' => [$this, 'block_sidebar_user'],
            'sidebar_search' => [$this, 'block_sidebar_search'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_content_before' => [$this, 'block_page_content_before'],
            'page_content_class' => [$this, 'block_page_content_class'],
            'page_content_start' => [$this, 'block_page_content_start'],
            'page_content' => [$this, 'block_page_content'],
            'page_content_end' => [$this, 'block_page_content_end'],
            'page_content_after' => [$this, 'block_page_content_after'],
            'footer' => [$this, 'block_footer'],
            'control_sidebar' => [$this, 'block_control_sidebar'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/layout/default-layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/layout/default-layout.html.twig"));

        // line 9
        echo "<!DOCTYPE html";
        $this->displayBlock('html_start', $context, $blocks);
        echo ">
<html lang=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
<head>
    ";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>
";
        // line 29
        echo "<body";
        $this->displayBlock('body_start', $context, $blocks);
        echo " class=\"hold-transition ";
        echo twig_escape_filter($this->env, $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->bodyClass(((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "skin", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "skin", [], "any", false, false, false, 29), "")) : (""))), "html", null, true);
        echo "\">
";
        // line 30
        $this->displayBlock('after_body_start', $context, $blocks);
        // line 31
        echo "<div class=\"wrapper\">

    <header class=\"main-header\">
        <a href=\"";
        // line 34
        $this->displayBlock('logo_path', $context, $blocks);
        echo "\" class=\"logo\">
            <span class=\"logo-mini\">
                ";
        // line 36
        $this->displayBlock('logo_mini', $context, $blocks);
        // line 37
        echo "            </span>
            <span class=\"logo-lg\">
               ";
        // line 39
        $this->displayBlock('logo_large', $context, $blocks);
        // line 40
        echo "            </span>
        </a>

        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            ";
        // line 44
        $this->displayBlock('navbar_toggle', $context, $blocks);
        // line 49
        echo "            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 51
        $this->displayBlock('navbar_start', $context, $blocks);
        // line 52
        echo "                    ";
        $this->displayBlock('navbar_messages', $context, $blocks);
        // line 55
        echo "                    ";
        $this->displayBlock('navbar_notifications', $context, $blocks);
        // line 58
        echo "                    ";
        $this->displayBlock('navbar_tasks', $context, $blocks);
        // line 61
        echo "                    ";
        $this->displayBlock('navbar_user', $context, $blocks);
        // line 64
        echo "                    ";
        $this->displayBlock('navbar_end', $context, $blocks);
        // line 65
        echo "                    ";
        $this->displayBlock('navbar_control_sidebar_toggle', $context, $blocks);
        // line 72
        echo "                </ul>
            </div>
        </nav>
    </header>

    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            ";
        // line 79
        $this->displayBlock('sidebar_user', $context, $blocks);
        // line 84
        echo "
            ";
        // line 85
        $this->displayBlock('sidebar_search', $context, $blocks);
        // line 88
        echo "
            ";
        // line 89
        $this->displayBlock('sidebar_nav', $context, $blocks);
        // line 96
        echo "        </section>
    </aside>

    <div class=\"content-wrapper\">
        <section class=\"content-header\">
            <h1>
                ";
        // line 102
        $this->displayBlock('page_title', $context, $blocks);
        // line 103
        echo "                <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
            </h1>

            ";
        // line 106
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 113
        echo "        </section>

        ";
        // line 115
        $this->displayBlock('page_content_before', $context, $blocks);
        // line 116
        echo "
        <section class=\"";
        // line 117
        $this->displayBlock('page_content_class', $context, $blocks);
        echo "\">
            ";
        // line 118
        $this->displayBlock('page_content_start', $context, $blocks);
        // line 119
        echo "            ";
        $this->displayBlock('page_content', $context, $blocks);
        // line 120
        echo "            ";
        $this->displayBlock('page_content_end', $context, $blocks);
        // line 121
        echo "        </section>

        ";
        // line 123
        $this->displayBlock('page_content_after', $context, $blocks);
        // line 124
        echo "    </div>

    ";
        // line 126
        $this->displayBlock('footer', $context, $blocks);
        // line 129
        echo "    ";
        $this->displayBlock('control_sidebar', $context, $blocks);
        // line 134
        echo "
</div>

";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 140
        echo "
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_html_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 13
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayBlock("page_title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/adminlte/adminlte.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_after_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_body_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_body_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_logo_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_path"));

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_welcome"));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_logo_mini($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        echo "<b>P</b>G";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_logo_large($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_large"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_large"));

        echo " <b>Pro</b>Gest ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_navbar_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_toggle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_toggle"));

        // line 45
        echo "            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle navigation", [], "AdminLTEBundle"), "html", null, true);
        echo "</span>
            </a>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_navbar_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_navbar_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_messages"));

        // line 53
        echo "                        ";
        $this->loadTemplate("@AdminLTE/Navbar/messages.html.twig", "@AdminLTE/layout/default-layout.html.twig", 53)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
        // line 54
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_navbar_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_notifications"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_notifications"));

        // line 56
        echo "                        ";
        $this->loadTemplate("@AdminLTE/Navbar/notifications.html.twig", "@AdminLTE/layout/default-layout.html.twig", 56)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
        // line 57
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_navbar_tasks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_tasks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_tasks"));

        // line 59
        echo "                        ";
        $this->loadTemplate("@AdminLTE/Navbar/tasks.html.twig", "@AdminLTE/layout/default-layout.html.twig", 59)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
        // line 60
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_navbar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_user"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_user"));

        // line 62
        echo "                        ";
        $this->loadTemplate("@AdminLTE/Navbar/user.html.twig", "@AdminLTE/layout/default-layout.html.twig", 62)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
        // line 63
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_navbar_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_end"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_navbar_control_sidebar_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_control_sidebar_toggle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_control_sidebar_toggle"));

        // line 66
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", true, true, false, 66) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 66, $this->source); })()), "control_sidebar", [], "any", false, false, false, 66)))) {
            // line 67
            echo "                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fas fa-cogs\"></i></a>
                        </li>
                        ";
        }
        // line 71
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_sidebar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_user"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_user"));

        // line 80
        echo "                ";
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 81
            echo "                    ";
            $this->loadTemplate("@AdminLTE/Sidebar/user-panel.html.twig", "@AdminLTE/layout/default-layout.html.twig", 81)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
            // line 82
            echo "                ";
        }
        // line 83
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_sidebar_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_search"));

        // line 86
        echo "                ";
        $this->loadTemplate("@AdminLTE/Sidebar/search-form.html.twig", "@AdminLTE/layout/default-layout.html.twig", 86)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
        // line 87
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_sidebar_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_nav"));

        // line 90
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 90, $this->source); })()), "knp_menu", [], "any", false, false, false, 90), "enable", [], "any", false, false, false, 90)) {
            // line 91
            echo "                    ";
            $this->loadTemplate("@AdminLTE/Sidebar/knp-menu.html.twig", "@AdminLTE/layout/default-layout.html.twig", 91)->display($context);
            // line 92
            echo "                ";
        } else {
            // line 93
            echo "                    ";
            $this->loadTemplate("@AdminLTE/Sidebar/menu.html.twig", "@AdminLTE/layout/default-layout.html.twig", 93)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
            // line 94
            echo "                ";
        }
        // line 95
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin LTE", [], "AdminLTEBundle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A short subtitle for your page", [], "AdminLTEBundle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 107
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 107, $this->source); })()), "knp_menu", [], "any", false, false, false, 107), "enable", [], "any", false, false, false, 107)) {
            // line 108
            echo "                    ";
            $this->loadTemplate("@AdminLTE/Breadcrumb/knp-breadcrumb.html.twig", "@AdminLTE/layout/default-layout.html.twig", 108)->display($context);
            // line 109
            echo "                ";
        } else {
            // line 110
            echo "                    ";
            $this->loadTemplate("@AdminLTE/Breadcrumb/breadcrumb.html.twig", "@AdminLTE/layout/default-layout.html.twig", 110)->display(twig_array_merge($context, ["adminlte_direct_include" => true]));
            // line 111
            echo "                ";
        }
        // line 112
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_page_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_page_content_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_class"));

        echo "content";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 118
    public function block_page_content_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_start"));

        echo twig_include($this->env, $context, "@AdminLTE/Partials/_flash_messages.html.twig");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 119
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_page_content_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_end"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_page_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 127
        echo "        ";
        $this->loadTemplate("@AdminLTE/Partials/_footer.html.twig", "@AdminLTE/layout/default-layout.html.twig", 127)->display($context);
        // line 128
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_control_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "control_sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "control_sidebar"));

        // line 130
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 130, $this->source); })()), "control_sidebar", [], "any", false, false, false, 130)) {
            // line 131
            echo "            ";
            $this->loadTemplate("@AdminLTE/Partials/_control-sidebar.html.twig", "@AdminLTE/layout/default-layout.html.twig", 131)->display($context);
            // line 132
            echo "        ";
        }
        // line 133
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/adminlte/adminlte.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/default-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 138,  933 => 137,  923 => 133,  920 => 132,  917 => 131,  914 => 130,  904 => 129,  894 => 128,  891 => 127,  881 => 126,  863 => 123,  845 => 120,  827 => 119,  808 => 118,  789 => 117,  771 => 115,  761 => 112,  758 => 111,  755 => 110,  752 => 109,  749 => 108,  746 => 107,  736 => 106,  717 => 103,  698 => 102,  688 => 95,  685 => 94,  682 => 93,  679 => 92,  676 => 91,  673 => 90,  663 => 89,  653 => 87,  650 => 86,  640 => 85,  630 => 83,  627 => 82,  624 => 81,  621 => 80,  611 => 79,  601 => 71,  595 => 67,  592 => 66,  582 => 65,  564 => 64,  554 => 63,  551 => 62,  541 => 61,  531 => 60,  528 => 59,  518 => 58,  508 => 57,  505 => 56,  495 => 55,  485 => 54,  482 => 53,  472 => 52,  454 => 51,  441 => 46,  438 => 45,  428 => 44,  409 => 39,  390 => 36,  371 => 34,  353 => 30,  335 => 29,  322 => 19,  312 => 18,  293 => 17,  280 => 13,  270 => 12,  252 => 9,  239 => 140,  237 => 137,  232 => 134,  229 => 129,  227 => 126,  223 => 124,  221 => 123,  217 => 121,  214 => 120,  211 => 119,  209 => 118,  205 => 117,  202 => 116,  200 => 115,  196 => 113,  194 => 106,  187 => 103,  185 => 102,  177 => 96,  175 => 89,  172 => 88,  170 => 85,  167 => 84,  165 => 79,  156 => 72,  153 => 65,  150 => 64,  147 => 61,  144 => 58,  141 => 55,  138 => 52,  136 => 51,  132 => 49,  130 => 44,  124 => 40,  122 => 39,  118 => 37,  116 => 36,  111 => 34,  106 => 31,  104 => 30,  97 => 29,  94 => 21,  92 => 18,  87 => 17,  85 => 12,  80 => 10,  75 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Use this as your new starter template page, use it to start your new project,
    by adding this code to your own base template:

    {% extends '@AdminLTE/layout/default-layout.html.twig' %}

    Enjoy your AdminLTE theme!
#}
<!DOCTYPE html{% block html_start %}{% endblock %}>
<html lang=\"{{ app.request.locale }}\">
<head>
    {% block head %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    {% endblock %}
    <title>{% block title %}{{ block('page_title') }}{% endblock %}</title>
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/adminlte/adminlte.css') }}\">
    {% endblock %}
</head>
{#
Apply one of the following classes for the skin:
skin-blue, skin-black, skin-purple, skin-yellow, skin-red, skin-green

Apply one or more of the following classes for the layout options:
fixed, layout-boxed, layout-top-nav, sidebar-collapse, sidebar-mini
#}
<body{% block body_start %}{% endblock %} class=\"hold-transition {{ admin_lte_context.skin|default(\"\")|body_class }}\">
{% block after_body_start %}{% endblock %}
<div class=\"wrapper\">

    <header class=\"main-header\">
        <a href=\"{% block logo_path %}{{ path('adminlte_welcome'|route_alias) }}{% endblock %}\" class=\"logo\">
            <span class=\"logo-mini\">
                {% block logo_mini %}<b>P</b>G{% endblock %}
            </span>
            <span class=\"logo-lg\">
               {% block logo_large %} <b>Pro</b>Gest {% endblock %}
            </span>
        </a>

        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            {% block navbar_toggle %}
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">{{ 'Toggle navigation'|trans({}, 'AdminLTEBundle')  }}</span>
            </a>
            {% endblock %}
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    {% block navbar_start %}{% endblock %}
                    {% block navbar_messages %}
                        {% include '@AdminLTE/Navbar/messages.html.twig' with {'adminlte_direct_include': true} %}
                    {% endblock %}
                    {% block navbar_notifications %}
                        {% include '@AdminLTE/Navbar/notifications.html.twig' with {'adminlte_direct_include': true} %}
                    {% endblock %}
                    {% block navbar_tasks %}
                        {% include '@AdminLTE/Navbar/tasks.html.twig' with {'adminlte_direct_include': true} %}
                    {% endblock %}
                    {% block navbar_user %}
                        {% include '@AdminLTE/Navbar/user.html.twig' with {'adminlte_direct_include': true} %}
                    {% endblock %}
                    {% block navbar_end %}{% endblock %}
                    {% block navbar_control_sidebar_toggle %}
                        {% if admin_lte_context.control_sidebar is defined and admin_lte_context.control_sidebar is not empty %}
                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fas fa-cogs\"></i></a>
                        </li>
                        {% endif %}
                    {% endblock %}
                </ul>
            </div>
        </nav>
    </header>

    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            {% block sidebar_user %}
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% include '@AdminLTE/Sidebar/user-panel.html.twig' with {'adminlte_direct_include': true} %}
                {% endif %}
            {% endblock %}

            {% block sidebar_search %}
                {% include '@AdminLTE/Sidebar/search-form.html.twig' with {'adminlte_direct_include': true} %}
            {% endblock %}

            {% block sidebar_nav %}
                {% if admin_lte_context.knp_menu.enable %}
                    {% include '@AdminLTE/Sidebar/knp-menu.html.twig' %}
                {% else %}
                    {% include '@AdminLTE/Sidebar/menu.html.twig' with {'adminlte_direct_include': true} %}
                {% endif %}
            {% endblock %}
        </section>
    </aside>

    <div class=\"content-wrapper\">
        <section class=\"content-header\">
            <h1>
                {% block page_title %}{{ 'Admin LTE'|trans({}, 'AdminLTEBundle') }}{% endblock %}
                <small>{% block page_subtitle %}{{ 'A short subtitle for your page'|trans({}, 'AdminLTEBundle') }}{% endblock %}</small>
            </h1>

            {% block breadcrumb %}
                {% if admin_lte_context.knp_menu.enable %}
                    {% include '@AdminLTE/Breadcrumb/knp-breadcrumb.html.twig' %}
                {% else %}
                    {% include '@AdminLTE/Breadcrumb/breadcrumb.html.twig' with {'adminlte_direct_include': true} %}
                {% endif %}
            {% endblock %}
        </section>

        {% block page_content_before %}{% endblock %}

        <section class=\"{% block page_content_class %}content{% endblock %}\">
            {% block page_content_start %}{{ include('@AdminLTE/Partials/_flash_messages.html.twig') }}{% endblock %}
            {% block page_content %}{% endblock %}
            {% block page_content_end %}{% endblock %}
        </section>

        {% block page_content_after %}{% endblock %}
    </div>

    {% block footer %}
        {% include '@AdminLTE/Partials/_footer.html.twig' %}
    {% endblock %}
    {% block control_sidebar %}
        {% if admin_lte_context.control_sidebar %}
            {% include '@AdminLTE/Partials/_control-sidebar.html.twig' %}
        {% endif %}
    {% endblock %}

</div>

{% block javascripts %}
    <script src=\"{{ asset('bundles/adminlte/adminlte.js') }}\"></script>
{% endblock %}

</body>
</html>
", "@AdminLTE/layout/default-layout.html.twig", "/var/www/app/templates/bundles/AdminLTEBundle/layout/default-layout.html.twig");
    }
}
