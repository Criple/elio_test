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

/* @Storefront/storefront/base.html.twig */
class __TwigTemplate_51ac79722ecd2ab30fbeffc746b22cd655ab907d95232ec5d50dd8323495ce77 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_doctype' => [$this, 'block_base_doctype'],
            'base_html' => [$this, 'block_base_html'],
            'base_head' => [$this, 'block_base_head'],
            'base_body' => [$this, 'block_base_body'],
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'base_noscript' => [$this, 'block_base_noscript'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_offcanvas_navigation' => [$this, 'block_base_offcanvas_navigation'],
            'base_offcanvas_navigation_inner' => [$this, 'block_base_offcanvas_navigation_inner'],
            'base_main' => [$this, 'block_base_main'],
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'base_main_container' => [$this, 'block_base_main_container'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_content' => [$this, 'block_base_content'],
            'base_footer' => [$this, 'block_base_footer'],
            'base_footer_inner' => [$this, 'block_base_footer_inner'],
            'base_scroll_up' => [$this, 'block_base_scroll_up'],
            'base_cookie_permission' => [$this, 'block_base_cookie_permission'],
            'base_pseudo_modal' => [$this, 'block_base_pseudo_modal'],
            'base_body_script' => [$this, 'block_base_body_script'],
            'base_script_token' => [$this, 'block_base_script_token'],
            'base_script_router' => [$this, 'block_base_script_router'],
            'base_script_breakpoints' => [$this, 'block_base_script_breakpoints'],
            'base_script_csrf' => [$this, 'block_base_script_csrf'],
            'base_script_wishlist_state' => [$this, 'block_base_script_wishlist_state'],
            'base_script_hmr_mode' => [$this, 'block_base_script_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/base.html.twig"));

        // line 2
        $context["isHMRMode"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "headers", [], "any", false, false, false, 2), "get", [0 => "hot-reload-mode"], "method", false, false, false, 2) && (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 2) == "dev"));
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('base_doctype', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('base_html', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('base_head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('base_body', $context, $blocks);
        // line 184
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_base_doctype($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_doctype"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_doctype"));

        // line 5
        echo "<!DOCTYPE html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_base_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_html"));

        // line 9
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        // line 15
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/base.html.twig", 15)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_base_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body"));

        // line 19
        echo "    <body class=\"";
        $this->displayBlock('base_body_classes', $context, $blocks);
        echo "\">

    ";
        // line 21
        $this->displayBlock('base_body_inner', $context, $blocks);
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock('base_scroll_up', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('base_cookie_permission', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('base_pseudo_modal', $context, $blocks);
        // line 109
        echo "
    ";
        // line 110
        $this->displayBlock('base_body_script', $context, $blocks);
        // line 182
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_base_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_classes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_classes"));

        echo "is-ctl-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        echo " is-act-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_base_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_inner"));

        // line 22
        echo "        ";
        $this->displayBlock('base_noscript', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('base_header', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('base_navigation', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('base_offcanvas_navigation', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('base_main', $context, $blocks);
        // line 86
        echo "
        ";
        // line 87
        $this->displayBlock('base_footer', $context, $blocks);
        // line 96
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_base_noscript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_noscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_noscript"));

        // line 23
        echo "            <noscript class=\"noscript-main\">
                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 24)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.noscriptNotice"))]));
        // line 28
        echo "            </noscript>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        // line 32
        echo "            <header class=\"header-main\">
                ";
        // line 33
        $this->displayBlock('base_header_inner', $context, $blocks);
        // line 38
        echo "            </header>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_base_header_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header_inner"));

        // line 34
        echo "                    <div class=\"container\">
                        ";
        // line 35
        $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/base.html.twig", 35)->display($context);
        // line 36
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        // line 42
        echo "            <div class=\"nav-main\">
                ";
        // line 43
        $this->displayBlock('base_navigation_inner', $context, $blocks);
        // line 46
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_base_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation_inner"));

        // line 44
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@Storefront/storefront/base.html.twig", 44)->display($context);
        // line 45
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_base_offcanvas_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_offcanvas_navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_offcanvas_navigation"));

        // line 50
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "navigation", [], "any", false, false, false, 50)) {
            // line 51
            echo "                <div class=\"d-none js-navigation-offcanvas-initial-content\">
                    ";
            // line 52
            $this->displayBlock('base_offcanvas_navigation_inner', $context, $blocks);
            // line 55
            echo "                </div>
            ";
        }
        // line 57
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_base_offcanvas_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_offcanvas_navigation_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_offcanvas_navigation_inner"));

        // line 53
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@Storefront/storefront/base.html.twig", 53)->display(twig_array_merge($context, ["navigation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 53), "navigation", [], "any", false, false, false, 53)]));
        // line 54
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_base_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main"));

        // line 60
        echo "            <main class=\"content-main\">
                ";
        // line 61
        $this->displayBlock('base_flashbags', $context, $blocks);
        // line 68
        echo "
                ";
        // line 69
        $this->displayBlock('base_main_inner', $context, $blocks);
        // line 84
        echo "            </main>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_flashbags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_flashbags"));

        // line 62
        echo "                    <div class=\"flashbags container\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 63));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 64
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 64)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 65
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        // line 70
        echo "                    <div class=\"container\">
                        ";
        // line 71
        $this->displayBlock('base_main_container', $context, $blocks);
        // line 82
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_base_main_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_container"));

        // line 72
        echo "                            <div class=\"container-main\">
                                ";
        // line 73
        $this->displayBlock('base_breadcrumb', $context, $blocks);
        // line 78
        echo "
                                ";
        // line 79
        $this->displayBlock('base_content', $context, $blocks);
        // line 80
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_base_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_breadcrumb"));

        // line 74
        echo "                                    ";
        if (($context["breadcrumbList"] ?? null)) {
            // line 75
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/base.html.twig", 75)->display($context);
            // line 76
            echo "                                    ";
        }
        // line 77
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer"));

        // line 88
        echo "            <footer class=\"footer-main\">
                ";
        // line 89
        $this->displayBlock('base_footer_inner', $context, $blocks);
        // line 94
        echo "            </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_base_footer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer_inner"));

        // line 90
        echo "                    <div class=\"container\">
                        ";
        // line 91
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/base.html.twig", 91)->display($context);
        // line 92
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_base_scroll_up($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_scroll_up"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_scroll_up"));

        // line 99
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/scroll-up.html.twig", "@Storefront/storefront/base.html.twig", 99)->display($context);
        // line 100
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_base_cookie_permission($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_cookie_permission"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_cookie_permission"));

        // line 103
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@Storefront/storefront/base.html.twig", 103)->display($context);
        // line 104
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_base_pseudo_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_pseudo_modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_pseudo_modal"));

        // line 107
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/pseudo-modal.html.twig", "@Storefront/storefront/base.html.twig", 107)->display($context);
        // line 108
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_base_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_script"));

        // line 111
        echo "        ";
        $this->displayBlock('base_script_token', $context, $blocks);
        // line 117
        echo "
        ";
        // line 118
        $this->displayBlock('base_script_router', $context, $blocks);
        // line 138
        echo "
        ";
        // line 139
        $this->displayBlock('base_script_breakpoints', $context, $blocks);
        // line 145
        echo "
        ";
        // line 146
        $this->displayBlock('base_script_csrf', $context, $blocks);
        // line 154
        echo "
        ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 155), "core", [], "any", false, false, false, 155), "cart", [], "any", false, false, false, 155), "wishlistEnabled", [], "any", false, false, false, 155)) {
            // line 156
            echo "            ";
            $this->displayBlock('base_script_wishlist_state', $context, $blocks);
            // line 163
            echo "        ";
        }
        // line 164
        echo "
        ";
        // line 165
        $this->displayBlock('base_script_hmr_mode', $context, $blocks);
        // line 181
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_base_script_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_token"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_token"));

        // line 112
        echo "            <script>
                ";
        // line 114
        echo "                window.apiAccessUrl = \"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.api-access");
        echo "\";
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_base_script_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_router"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_router"));

        // line 119
        echo "            ";
        // line 120
        echo "            <script>
                window.activeNavigationId = '";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 121), "navigation", [], "any", false, false, false, 121), "active", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
        echo "';
                window.router = {
                    'frontend.cart.offcanvas': '";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                    'frontend.cookie.offcanvas': '";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                    'frontend.checkout.finish.page': '";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                    'frontend.checkout.info': '";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                    'frontend.menu.offcanvas': '";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                    'frontend.cms.page': '";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                    'frontend.cms.navigation.page': '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                    'frontend.account.addressbook': '";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                    'frontend.csrf.generateToken': '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                    'frontend.country.country-data': '";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                    'frontend.store-api.proxy': '";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.store-api.proxy");
        echo "',
                };
                window.storeApiProxyToken = '";
        // line 135
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.store-api.proxy", ["mode" => "token"]);
        echo "';
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_base_script_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_breakpoints"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_breakpoints"));

        // line 140
        echo "            ";
        // line 141
        echo "            <script>
                window.breakpoints = ";
        // line 142
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 142), "breakpoint", [], "any", false, false, false, 142));
        echo ";
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_base_script_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_csrf"));

        // line 147
        echo "            <script>
                window.csrf = {
                    'enabled': '";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 149), "html", null, true);
        echo "',
                    'mode': '";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 150), "html", null, true);
        echo "'
                }
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_base_script_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_wishlist_state"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_wishlist_state"));

        // line 157
        echo "                <script>
                    window.customerLoggedInState = ";
        // line 158
        echo ((( !(null === twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 158)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 158), "guest", [], "any", false, false, false, 158))) ? (1) : (0));
        echo ";

                    window.wishlistEnabled = ";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 160), "core", [], "any", false, false, false, 160), "cart", [], "any", false, false, false, 160), "wishlistEnabled", [], "any", false, false, false, 160), "html", null, true);
        echo ";
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_base_script_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_hmr_mode"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_script_hmr_mode"));

        // line 166
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 167
            echo "                ";
            $context["baseUrl"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 167), "getScheme", [], "method", false, false, false, 167) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 167), "getHost", [], "method", false, false, false, 167));
            // line 168
            echo "                ";
            $context["port"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 168), "headers", [], "any", false, false, false, 168), "get", [0 => "hot-reload-port"], "method", false, false, false, 168);
            // line 169
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/vendor-node.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 170
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/vendor-shared.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 171
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/runtime.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/app.js\"></script>
                ";
            // line 174
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/storefront.js\"></script>
            ";
        } else {
            // line 176
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 176), "assets", [], "any", false, false, false, 176), "js", [], "any", false, false, false, 176));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 177
                echo "                    <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\" async></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            ";
        }
        // line 180
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1108 => 180,  1105 => 179,  1096 => 177,  1091 => 176,  1083 => 174,  1077 => 172,  1071 => 171,  1065 => 170,  1058 => 169,  1055 => 168,  1052 => 167,  1049 => 166,  1039 => 165,  1026 => 160,  1021 => 158,  1018 => 157,  1008 => 156,  994 => 150,  990 => 149,  986 => 147,  976 => 146,  963 => 142,  960 => 141,  958 => 140,  948 => 139,  935 => 135,  930 => 133,  926 => 132,  922 => 131,  918 => 130,  914 => 129,  910 => 128,  906 => 127,  902 => 126,  898 => 125,  894 => 124,  890 => 123,  885 => 121,  882 => 120,  880 => 119,  870 => 118,  856 => 114,  853 => 112,  843 => 111,  833 => 181,  831 => 165,  828 => 164,  825 => 163,  822 => 156,  820 => 155,  817 => 154,  815 => 146,  812 => 145,  810 => 139,  807 => 138,  805 => 118,  802 => 117,  799 => 111,  789 => 110,  779 => 108,  776 => 107,  766 => 106,  756 => 104,  753 => 103,  743 => 102,  733 => 100,  730 => 99,  720 => 98,  709 => 92,  707 => 91,  704 => 90,  694 => 89,  683 => 94,  681 => 89,  678 => 88,  668 => 87,  650 => 79,  640 => 77,  637 => 76,  634 => 75,  631 => 74,  621 => 73,  610 => 80,  608 => 79,  605 => 78,  603 => 73,  600 => 72,  590 => 71,  579 => 82,  577 => 71,  574 => 70,  564 => 69,  553 => 66,  539 => 65,  536 => 64,  519 => 63,  516 => 62,  506 => 61,  495 => 84,  493 => 69,  490 => 68,  488 => 61,  485 => 60,  475 => 59,  465 => 54,  462 => 53,  452 => 52,  442 => 57,  438 => 55,  436 => 52,  433 => 51,  430 => 50,  420 => 49,  410 => 45,  407 => 44,  397 => 43,  386 => 46,  384 => 43,  381 => 42,  371 => 41,  360 => 36,  358 => 35,  355 => 34,  345 => 33,  334 => 38,  332 => 33,  329 => 32,  319 => 31,  308 => 28,  306 => 24,  303 => 23,  293 => 22,  283 => 96,  281 => 87,  278 => 86,  276 => 59,  273 => 58,  271 => 49,  268 => 48,  266 => 41,  263 => 40,  261 => 31,  258 => 30,  255 => 22,  245 => 21,  223 => 19,  212 => 182,  210 => 110,  207 => 109,  205 => 106,  202 => 105,  200 => 102,  197 => 101,  195 => 98,  192 => 97,  190 => 21,  184 => 19,  174 => 18,  163 => 15,  153 => 14,  138 => 9,  128 => 8,  117 => 5,  107 => 4,  96 => 184,  94 => 18,  91 => 17,  89 => 14,  86 => 13,  84 => 8,  81 => 7,  79 => 4,  76 => 3,  74 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Set variable to \"true\" to enable HMR (hot page reloading) mode #}
{% set isHMRMode = app.request.headers.get('hot-reload-mode') and app.environment == 'dev' %}

{% block base_doctype %}
<!DOCTYPE html>
{% endblock %}

{% block base_html %}
<html lang=\"{{ app.request.locale }}\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
{% endblock %}

{% block base_head %}
    {% sw_include '@Storefront/storefront/layout/meta.html.twig' %}
{% endblock %}

{% block base_body %}
    <body class=\"{% block base_body_classes %}is-ctl-{{ controllerName|lower }} is-act-{{ controllerAction|lower }}{% endblock %}\">

    {% block base_body_inner %}
        {% block base_noscript %}
            <noscript class=\"noscript-main\">
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type: 'info',
                    content: 'general.noscriptNotice'|trans|sw_sanitize
                } %}
            </noscript>
        {% endblock %}

        {% block base_header %}
            <header class=\"header-main\">
                {% block base_header_inner %}
                    <div class=\"container\">
                        {% sw_include '@Storefront/storefront/layout/header/header.html.twig' %}
                    </div>
                {% endblock %}
            </header>
        {% endblock %}

        {% block base_navigation %}
            <div class=\"nav-main\">
                {% block base_navigation_inner %}
                    {% sw_include '@Storefront/storefront/layout/navigation/navigation.html.twig' %}
                {% endblock %}
            </div>
        {% endblock %}

        {% block base_offcanvas_navigation %}
            {% if page.header.navigation %}
                <div class=\"d-none js-navigation-offcanvas-initial-content\">
                    {% block base_offcanvas_navigation_inner %}
                        {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig' with { navigation: page.header.navigation } %}
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}

        {% block base_main %}
            <main class=\"content-main\">
                {% block base_flashbags %}
                    <div class=\"flashbags container\">
                        {% for type, messages in app.flashes %}
                            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with { type: type, list: messages } %}
                        {% endfor %}
                    </div>
                {% endblock %}

                {% block base_main_inner %}
                    <div class=\"container\">
                        {% block base_main_container %}
                            <div class=\"container-main\">
                                {% block base_breadcrumb %}
                                    {% if breadcrumbList %}
                                        {% sw_include '@Storefront/storefront/layout/breadcrumb.html.twig' %}
                                    {% endif %}
                                {% endblock %}

                                {% block base_content %}{% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </main>
        {% endblock %}

        {% block base_footer %}
            <footer class=\"footer-main\">
                {% block base_footer_inner %}
                    <div class=\"container\">
                        {% sw_include '@Storefront/storefront/layout/footer/footer.html.twig' %}
                    </div>
                {% endblock %}
            </footer>
        {% endblock %}
    {% endblock %}

    {% block base_scroll_up %}
        {% sw_include '@Storefront/storefront/layout/scroll-up.html.twig' %}
    {% endblock %}

    {% block base_cookie_permission %}
        {% sw_include '@Storefront/storefront/layout/cookie/cookie-permission.html.twig' %}
    {% endblock %}

    {% block base_pseudo_modal %}
        {% sw_include '@Storefront/storefront/component/pseudo-modal.html.twig' %}
    {% endblock %}

    {% block base_body_script %}
        {% block base_script_token %}
            <script>
                {# @deprecated tag:v6.4.0 apiAccessUrl will be removed #}
                window.apiAccessUrl = \"{{ url('frontend.api-access') }}\";
            </script>
        {% endblock %}

        {% block base_script_router %}
            {# Register all routes that will be needed in JavaScript to the window.router object #}
            <script>
                window.activeNavigationId = '{{ page.header.navigation.active.id }}';
                window.router = {
                    'frontend.cart.offcanvas': '{{ path('frontend.cart.offcanvas') }}',
                    'frontend.cookie.offcanvas': '{{ path('frontend.cookie.offcanvas') }}',
                    'frontend.checkout.finish.page': '{{ path('frontend.checkout.finish.page') }}',
                    'frontend.checkout.info': '{{ path('frontend.checkout.info') }}',
                    'frontend.menu.offcanvas': '{{ path('frontend.menu.offcanvas') }}',
                    'frontend.cms.page': '{{ path('frontend.cms.page') }}',
                    'frontend.cms.navigation.page': '{{ path('frontend.cms.navigation.page') }}',
                    'frontend.account.addressbook': '{{ path('frontend.account.addressbook') }}',
                    'frontend.csrf.generateToken': '{{ path('frontend.csrf.generateToken') }}',
                    'frontend.country.country-data': '{{ path('frontend.country.country.data') }}',
                    'frontend.store-api.proxy': '{{ path('frontend.store-api.proxy') }}',
                };
                window.storeApiProxyToken = '{{ sw_csrf(\"frontend.store-api.proxy\", {\"mode\": \"token\"}) }}';
            </script>
        {% endblock %}

        {% block base_script_breakpoints %}
            {# Register the available viewport breakpoints the window.breakpoints object #}
            <script>
                window.breakpoints = {{ shopware.theme.breakpoint|json_encode()|raw }};
            </script>
        {% endblock %}

        {% block base_script_csrf %}
            <script>
                window.csrf = {
                    'enabled': '{{ shopware.csrfEnabled }}',
                    'mode': '{{ shopware.csrfMode }}'
                }
            </script>
        {% endblock %}

        {% if shopware.config.core.cart.wishlistEnabled %}
            {% block base_script_wishlist_state %}
                <script>
                    window.customerLoggedInState = {{ context.customer is not null and not context.customer.guest ? 1 : 0 }};

                    window.wishlistEnabled = {{ shopware.config.core.cart.wishlistEnabled }};
                </script>
            {% endblock %}
        {% endif %}

        {% block base_script_hmr_mode %}
            {% if isHMRMode %}
                {% set baseUrl = app.request.getScheme() ~ '://' ~ app.request.getHost() %}
                {% set port = app.request.headers.get('hot-reload-port') %}
                <script type=\"text/javascript\" src=\"{{ baseUrl }}:{{ port }}/js/vendor-node.js\"></script>
                <script type=\"text/javascript\" src=\"{{ baseUrl }}:{{ port }}/js/vendor-shared.js\"></script>
                <script type=\"text/javascript\" src=\"{{ baseUrl }}:{{ port }}/js/runtime.js\"></script>
                <script type=\"text/javascript\" src=\"{{ baseUrl }}:{{ port }}/js/app.js\"></script>
                {# The storefront entry is a combined entry point which contains all plugins & themes #}
                <script type=\"text/javascript\" src=\"{{ baseUrl }}:{{ port }}/js/storefront.js\"></script>
            {% else %}
                {% for file in shopware.theme.assets.js %}
                    <script type=\"text/javascript\" src=\"{{ asset(file, 'theme') }}\" async></script>
                {% endfor %}
            {% endif %}
        {% endblock %}
    {% endblock %}
    </body>
{% endblock %}
</html>
", "@Storefront/storefront/base.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/base.html.twig");
    }
}
