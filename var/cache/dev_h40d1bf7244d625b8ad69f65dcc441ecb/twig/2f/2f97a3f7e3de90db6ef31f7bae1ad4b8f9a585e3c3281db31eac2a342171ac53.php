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

/* @Storefront/storefront/component/address/address-personal-company.html.twig */
class __TwigTemplate_74e202dc1c3a45ecbb613e8a90ed84a2f42016d9abc41c3907561748e25276f4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_register_company_fields' => [$this, 'block_component_account_register_company_fields'],
            'component_address_form_company_fields' => [$this, 'block_component_address_form_company_fields'],
            'component_address_form_company_name' => [$this, 'block_component_address_form_company_name'],
            'component_address_form_company_name_label' => [$this, 'block_component_address_form_company_name_label'],
            'component_address_form_company_name_input' => [$this, 'block_component_address_form_company_name_input'],
            'component_address_form_company_name_input_error' => [$this, 'block_component_address_form_company_name_input_error'],
            'component_address_form_company_department' => [$this, 'block_component_address_form_company_department'],
            'component_address_form_company_department_label' => [$this, 'block_component_address_form_company_department_label'],
            'component_address_form_company_department_input' => [$this, 'block_component_address_form_company_department_input'],
            'component_address_form_company_department_input_error' => [$this, 'block_component_address_form_company_department_input_error'],
            'component_address_form_company_vatId' => [$this, 'block_component_address_form_company_vatId'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-personal-company.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-personal-company.html.twig"));

        // line 1
        $this->displayBlock('component_account_register_company_fields', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_account_register_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_company_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_company_fields"));

        // line 2
        echo "    ";
        $context["accountTypeRequired"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 2), "core", [], "any", false, false, false, 2), "loginRegistration", [], "any", false, false, false, 2), "showAccountTypeSelection", [], "any", false, false, false, 2);
        // line 3
        echo "
    ";
        // line 4
        if ((((($context["accountTypeRequired"] ?? null) || (($context["prefix"] ?? null) == "address")) || (($context["prefix"] ?? null) == "shippingAddress")) || ($context["hasSelectedBusiness"] ?? null))) {
            // line 5
            echo "        <div class=\"";
            if (((($context["prefix"] ?? null) == "shippingAddress") || ($context["hasSelectedBusiness"] ?? null))) {
                echo "address-contact-type-company";
            } elseif ((($context["prefix"] ?? null) == "address")) {
                echo "js-field-toggle-contact-type-company d-block";
            } else {
                echo "js-field-toggle-contact-type-company d-none";
            }
            echo "\">
            ";
            // line 6
            $this->displayBlock('component_address_form_company_fields', $context, $blocks);
            // line 83
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_component_address_form_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_fields"));

        // line 7
        echo "                <div class=\"form-row\">
                    ";
        // line 8
        $this->displayBlock('component_address_form_company_name', $context, $blocks);
        // line 40
        echo "                </div>
                <div class=\"form-row\">
                    ";
        // line 42
        $this->displayBlock('component_address_form_company_department', $context, $blocks);
        // line 73
        echo "
                    ";
        // line 74
        $this->displayBlock('component_address_form_company_vatId', $context, $blocks);
        // line 81
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_component_address_form_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name"));

        // line 9
        echo "                        <div class=\"form-group col-12\">
                            ";
        // line 10
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 10))) {
            // line 11
            echo "                                ";
            $context["violationPath"] = "/company";
            // line 12
            echo "                            ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/company")], "method", false, false, false, 12))) {
            // line 13
            echo "                                ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/company");
            // line 14
            echo "                            ";
        }
        // line 15
        echo "
                            ";
        // line 16
        $this->displayBlock('component_address_form_company_name_label', $context, $blocks);
        // line 22
        echo "
                            ";
        // line 23
        $this->displayBlock('component_address_form_company_name_input', $context, $blocks);
        // line 32
        echo "
                            ";
        // line 33
        $this->displayBlock('component_address_form_company_name_input_error', $context, $blocks);
        // line 38
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_component_address_form_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_label"));

        // line 17
        echo "                                <label class=\"form-label\"
                                       for=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "company\">
                                    ";
        // line 19
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        if (((($context["prefix"] ?? null) != "shippingAddress") && ($context["accountTypeRequired"] ?? null))) {
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        }
        // line 20
        echo "                                </label>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_component_address_form_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input"));

        // line 24
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 25
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "company\"
                                       placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                       name=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[company]\"
                                       value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "get", [0 => "company"], "method", false, false, false, 29), "html", null, true);
        echo "\"
                                       ";
        // line 30
        if (((($context["prefix"] ?? null) != "shippingAddress") && ($context["accountTypeRequired"] ?? null))) {
            echo "required=\"required\"";
        }
        echo ">
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_component_address_form_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input_error"));

        // line 34
        echo "                                ";
        if (($context["violationPath"] ?? null)) {
            // line 35
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 35)->display($context);
            // line 36
            echo "                                ";
        }
        // line 37
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_component_address_form_company_department($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department"));

        // line 43
        echo "                        <div class=\"form-group col-md-6\">
                            ";
        // line 44
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/department"], "method", false, false, false, 44))) {
            // line 45
            echo "                                ";
            $context["violationPath"] = "/department";
            // line 46
            echo "                            ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/department")], "method", false, false, false, 46))) {
            // line 47
            echo "                                ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/department");
            // line 48
            echo "                            ";
        }
        // line 49
        echo "
                            ";
        // line 50
        $this->displayBlock('component_address_form_company_department_label', $context, $blocks);
        // line 56
        echo "
                            ";
        // line 57
        $this->displayBlock('component_address_form_company_department_input', $context, $blocks);
        // line 65
        echo "
                            ";
        // line 66
        $this->displayBlock('component_address_form_company_department_input_error', $context, $blocks);
        // line 71
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_component_address_form_company_department_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_label"));

        // line 51
        echo "                                <label class=\"form-label\"
                                       for=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "department\">
                                    ";
        // line 53
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentLabel"));
        echo "
                                </label>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_component_address_form_company_department_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input"));

        // line 58
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 59
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "department\"
                                       placeholder=\"";
        // line 61
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentPlaceholder")), "html", null, true);
        echo "\"
                                       name=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[department]\"
                                       value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "get", [0 => "department"], "method", false, false, false, 63), "html", null, true);
        echo "\">
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_component_address_form_company_department_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input_error"));

        // line 67
        echo "                                ";
        if (($context["violationPath"] ?? null)) {
            // line 68
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 68)->display($context);
            // line 69
            echo "                                ";
        }
        // line 70
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_component_address_form_company_vatId($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId"));

        // line 75
        echo "                        <div class=\"form-group col-md-6\">
                            ";
        // line 76
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 76)->display(twig_array_merge($context, ["vatIds" => twig_get_attribute($this->env, $this->source,         // line 77
($context["data"] ?? null), "get", [0 => "vatIds"], "method", false, false, false, 77)]));
        // line 79
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal-company.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  478 => 79,  476 => 77,  475 => 76,  472 => 75,  462 => 74,  452 => 70,  449 => 69,  446 => 68,  443 => 67,  433 => 66,  421 => 63,  417 => 62,  413 => 61,  409 => 60,  403 => 59,  400 => 58,  390 => 57,  377 => 53,  373 => 52,  370 => 51,  360 => 50,  349 => 71,  347 => 66,  344 => 65,  342 => 57,  339 => 56,  337 => 50,  334 => 49,  331 => 48,  328 => 47,  325 => 46,  322 => 45,  320 => 44,  317 => 43,  307 => 42,  297 => 37,  294 => 36,  291 => 35,  288 => 34,  278 => 33,  264 => 30,  260 => 29,  256 => 28,  252 => 27,  248 => 26,  242 => 25,  239 => 24,  229 => 23,  218 => 20,  213 => 19,  209 => 18,  206 => 17,  196 => 16,  185 => 38,  183 => 33,  180 => 32,  178 => 23,  175 => 22,  173 => 16,  170 => 15,  167 => 14,  164 => 13,  161 => 12,  158 => 11,  156 => 10,  153 => 9,  143 => 8,  132 => 81,  130 => 74,  127 => 73,  125 => 42,  121 => 40,  119 => 8,  116 => 7,  106 => 6,  94 => 83,  92 => 6,  81 => 5,  79 => 4,  76 => 3,  73 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_account_register_company_fields %}
    {% set accountTypeRequired = shopware.config.core.loginRegistration.showAccountTypeSelection %}

    {% if accountTypeRequired or prefix == \"address\" or prefix == \"shippingAddress\" or hasSelectedBusiness %}
        <div class=\"{% if prefix == \"shippingAddress\" or hasSelectedBusiness %}address-contact-type-company{% elseif prefix == \"address\" %}js-field-toggle-contact-type-company d-block{% else %}js-field-toggle-contact-type-company d-none{% endif %}\">
            {% block component_address_form_company_fields %}
                <div class=\"form-row\">
                    {% block component_address_form_company_name %}
                        <div class=\"form-group col-12\">
                            {% if formViolations.getViolations(\"/company\") is not empty %}
                                {% set violationPath = \"/company\" %}
                            {% elseif formViolations.getViolations(\"/#{prefix}/company\") is not empty %}
                                {% set violationPath = \"/#{prefix}/company\" %}
                            {% endif %}

                            {% block component_address_form_company_name_label %}
                                <label class=\"form-label\"
                                       for=\"{{ prefix }}company\">
                                    {{ \"address.companyNameLabel\"|trans|sw_sanitize }}{% if prefix != \"shippingAddress\" and accountTypeRequired %}{{ \"general.required\"|trans|sw_sanitize }}{% endif %}
                                </label>
                            {% endblock %}

                            {% block component_address_form_company_name_input %}
                                <input type=\"text\"
                                       class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                       id=\"{{ prefix }}company\"
                                       placeholder=\"{{ \"address.companyNamePlaceholder\"|trans|striptags }}\"
                                       name=\"{{ prefix }}[company]\"
                                       value=\"{{ address.get('company') }}\"
                                       {% if prefix != \"shippingAddress\" and accountTypeRequired %}required=\"required\"{% endif %}>
                            {% endblock %}

                            {% block component_address_form_company_name_input_error %}
                                {% if violationPath %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
                <div class=\"form-row\">
                    {% block component_address_form_company_department %}
                        <div class=\"form-group col-md-6\">
                            {% if formViolations.getViolations(\"/department\") is not empty %}
                                {% set violationPath = \"/department\" %}
                            {% elseif formViolations.getViolations(\"/#{prefix}/department\") is not empty %}
                                {% set violationPath = \"/#{prefix}/department\" %}
                            {% endif %}

                            {% block component_address_form_company_department_label %}
                                <label class=\"form-label\"
                                       for=\"{{ prefix }}department\">
                                    {{ \"address.companyDepartmentLabel\"|trans|sw_sanitize }}
                                </label>
                            {% endblock %}

                            {% block component_address_form_company_department_input %}
                                <input type=\"text\"
                                       class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                       id=\"{{ prefix }}department\"
                                       placeholder=\"{{ \"address.companyDepartmentPlaceholder\"|trans|striptags }}\"
                                       name=\"{{ prefix }}[department]\"
                                       value=\"{{ address.get('department') }}\">
                            {% endblock %}

                            {% block component_address_form_company_department_input_error %}
                                {% if violationPath %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_address_form_company_vatId %}
                        <div class=\"form-group col-md-6\">
                            {% sw_include '@Storefront/storefront/component/address/address-personal-vat-id.html.twig' with {
                                'vatIds': data.get('vatIds')
                            } %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/address/address-personal-company.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal-company.html.twig");
    }
}
