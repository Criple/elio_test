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

/* @Storefront/storefront/component/address/address-form.html.twig */
class __TwigTemplate_ac22eb031d31c66a137150f72e9560fe494b236d695e89dbe8ab827a5bb62958 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_form' => [$this, 'block_component_address_form'],
            'component_address_form_addressId' => [$this, 'block_component_address_form_addressId'],
            'component_address_form_company' => [$this, 'block_component_address_form_company'],
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
            'component_address_form_company_vatId_label' => [$this, 'block_component_address_form_company_vatId_label'],
            'component_address_form_company_vatId_input' => [$this, 'block_component_address_form_company_vatId_input'],
            'component_address_form_company_vatId_input_error' => [$this, 'block_component_address_form_company_vatId_input_error'],
            'component_address_form_address_fields' => [$this, 'block_component_address_form_address_fields'],
            'component_address_form_street' => [$this, 'block_component_address_form_street'],
            'component_address_form_street_label' => [$this, 'block_component_address_form_street_label'],
            'component_address_form_street_input' => [$this, 'block_component_address_form_street_input'],
            'component_address_form_street_input_error' => [$this, 'block_component_address_form_street_input_error'],
            'component_address_form_zipcode_city' => [$this, 'block_component_address_form_zipcode_city'],
            'component_address_form_zipcode_label' => [$this, 'block_component_address_form_zipcode_label'],
            'component_address_form_zipcode_input' => [$this, 'block_component_address_form_zipcode_input'],
            'component_address_form_zipcode_error' => [$this, 'block_component_address_form_zipcode_error'],
            'component_address_form_city_label' => [$this, 'block_component_address_form_city_label'],
            'component_address_form_city_input' => [$this, 'block_component_address_form_city_input'],
            'component_address_form_city_error' => [$this, 'block_component_address_form_city_error'],
            'component_address_form_additional_field1' => [$this, 'block_component_address_form_additional_field1'],
            'component_address_form_additional_field1_label' => [$this, 'block_component_address_form_additional_field1_label'],
            'component_address_form_additional_field1_input' => [$this, 'block_component_address_form_additional_field1_input'],
            'component_address_form_additional_field2' => [$this, 'block_component_address_form_additional_field2'],
            'component_address_form_additional_field2_label' => [$this, 'block_component_address_form_additional_field2_label'],
            'component_address_form_additional_field2_input' => [$this, 'block_component_address_form_additional_field2_input'],
            'component_address_form_country' => [$this, 'block_component_address_form_country'],
            'component_address_form_country_label' => [$this, 'block_component_address_form_country_label'],
            'component_address_form_country_select' => [$this, 'block_component_address_form_country_select'],
            'component_address_form_country_state_label' => [$this, 'block_component_address_form_country_state_label'],
            'component_address_form_country_state_select' => [$this, 'block_component_address_form_country_state_select'],
            'component_address_form_country_error' => [$this, 'block_component_address_form_country_error'],
            'component_address_form_phone_number' => [$this, 'block_component_address_form_phone_number'],
            'component_address_form_phone_number_label' => [$this, 'block_component_address_form_phone_number_label'],
            'component_address_form_phone_number_input' => [$this, 'block_component_address_form_phone_number_input'],
            'component_address_form_phone_error' => [$this, 'block_component_address_form_phone_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-form.html.twig"));

        // line 1
        $this->displayBlock('component_address_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_address_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form"));

        // line 2
        echo "    ";
        $this->displayBlock('component_address_form_addressId', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('component_address_form_company', $context, $blocks);
        // line 129
        echo "
    ";
        // line 130
        $this->displayBlock('component_address_form_address_fields', $context, $blocks);
        // line 410
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_component_address_form_addressId($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_addressId"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_addressId"));

        // line 3
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 3)) {
            // line 4
            echo "            <input type=\"hidden\"
                   name=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[id]\"
                   value=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 6), "html", null, true);
            echo "\">
        ";
        }
        // line 8
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_component_address_form_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company"));

        // line 11
        echo "        ";
        if (($context["showFormCompany"] ?? null)) {
            // line 12
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 12), "core", [], "any", false, false, false, 12), "loginRegistration", [], "any", false, false, false, 12), "showAccountTypeSelection", [], "any", false, false, false, 12)) {
                // line 13
                echo "                ";
                $context["accountTypeRequired"] = true;
                // line 14
                echo "                ";
                // line 15
                echo "                ";
                $context["accounTypeRequired"] = true;
                // line 16
                echo "            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 18), "core", [], "any", false, false, false, 18), "loginRegistration", [], "any", false, false, false, 18), "showAccountTypeSelection", [], "any", false, false, false, 18) || (($context["prefix"] ?? null) == "address")) || (($context["prefix"] ?? null) == "shippingAddress")) || ($context["hasSelectedBusiness"] ?? null))) {
                // line 19
                echo "                <div class=\"";
                if (((($context["prefix"] ?? null) == "shippingAddress") || ($context["hasSelectedBusiness"] ?? null))) {
                    echo "address-contact-type-company";
                } elseif ((($context["prefix"] ?? null) == "address")) {
                    echo "js-field-toggle-contact-type-company d-block";
                } else {
                    echo "js-field-toggle-contact-type-company d-none";
                }
                echo "\">
                    ";
                // line 20
                $this->displayBlock('component_address_form_company_fields', $context, $blocks);
                // line 125
                echo "                </div>
            ";
            }
            // line 127
            echo "        ";
        }
        // line 128
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_component_address_form_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_fields"));

        // line 21
        echo "                        <div class=\"form-row\">
                            ";
        // line 22
        $this->displayBlock('component_address_form_company_name', $context, $blocks);
        // line 54
        echo "                        ";
        if (($context["showVatIdField"] ?? null)) {
            // line 55
            echo "                            </div>
                            <div class=\"form-row\">
                        ";
        }
        // line 58
        echo "                            ";
        $this->displayBlock('component_address_form_company_department', $context, $blocks);
        // line 89
        echo "
                            ";
        // line 90
        $this->displayBlock('component_address_form_company_vatId', $context, $blocks);
        // line 123
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_component_address_form_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name"));

        // line 23
        echo "                                <div class=\"form-group";
        if (($context["showVatIdField"] ?? null)) {
            echo " col-12";
        } else {
            echo " col-6";
        }
        echo "\">
                                    ";
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 24))) {
            // line 25
            echo "                                        ";
            $context["violationPath"] = "/company";
            // line 26
            echo "                                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/company")], "method", false, false, false, 26))) {
            // line 27
            echo "                                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/company");
            // line 28
            echo "                                    ";
        }
        // line 29
        echo "
                                    ";
        // line 30
        $this->displayBlock('component_address_form_company_name_label', $context, $blocks);
        // line 36
        echo "
                                    ";
        // line 37
        $this->displayBlock('component_address_form_company_name_input', $context, $blocks);
        // line 46
        echo "
                                    ";
        // line 47
        $this->displayBlock('component_address_form_company_name_input_error', $context, $blocks);
        // line 52
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_component_address_form_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_label"));

        // line 31
        echo "                                        <label class=\"form-label\"
                                               for=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "company\">
                                            ";
        // line 33
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        if (((($context["prefix"] ?? null) != "shippingAddress") && ($context["accountTypeRequired"] ?? null))) {
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        }
        // line 34
        echo "                                        </label>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_component_address_form_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input"));

        // line 38
        echo "                                        <input type=\"text\"
                                               class=\"form-control";
        // line 39
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "company\"
                                               placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                               name=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[company]\"
                                               value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 43), "html", null, true);
        echo "\"
                                               ";
        // line 44
        if (((($context["prefix"] ?? null) != "shippingAddress") && ($context["accountTypeRequired"] ?? null))) {
            echo "required=\"required\"";
        }
        echo ">
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_component_address_form_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input_error"));

        // line 48
        echo "                                        ";
        if (($context["violationPath"] ?? null)) {
            // line 49
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 49)->display($context);
            // line 50
            echo "                                        ";
        }
        // line 51
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_component_address_form_company_department($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department"));

        // line 59
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 60
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/department"], "method", false, false, false, 60))) {
            // line 61
            echo "                                        ";
            $context["violationPath"] = "/department";
            // line 62
            echo "                                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/department")], "method", false, false, false, 62))) {
            // line 63
            echo "                                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/department");
            // line 64
            echo "                                    ";
        }
        // line 65
        echo "
                                    ";
        // line 66
        $this->displayBlock('component_address_form_company_department_label', $context, $blocks);
        // line 72
        echo "
                                    ";
        // line 73
        $this->displayBlock('component_address_form_company_department_input', $context, $blocks);
        // line 81
        echo "
                                    ";
        // line 82
        $this->displayBlock('component_address_form_company_department_input_error', $context, $blocks);
        // line 87
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_component_address_form_company_department_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_label"));

        // line 67
        echo "                                        <label class=\"form-label\"
                                               for=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "department\">
                                            ";
        // line 69
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentLabel"));
        echo "
                                        </label>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_component_address_form_company_department_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input"));

        // line 74
        echo "                                        <input type=\"text\"
                                               class=\"form-control";
        // line 75
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "department\"
                                               placeholder=\"";
        // line 77
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[department]\"
                                               value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "department"], "method", false, false, false, 79), "html", null, true);
        echo "\">
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_component_address_form_company_department_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input_error"));

        // line 83
        echo "                                        ";
        if (($context["violationPath"] ?? null)) {
            // line 84
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 84)->display($context);
            // line 85
            echo "                                        ";
        }
        // line 86
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_component_address_form_company_vatId($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId"));

        // line 91
        echo "                                ";
        if (($context["showVatIdField"] ?? null)) {
            // line 92
            echo "                                    <div class=\"form-group col-md-6\">
                                        ";
            // line 93
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/vatId"], "method", false, false, false, 93))) {
                // line 94
                echo "                                            ";
                $context["violationPath"] = "/vatId";
                // line 95
                echo "                                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/vatId")], "method", false, false, false, 95))) {
                // line 96
                echo "                                            ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/vatId");
                // line 97
                echo "                                        ";
            }
            // line 98
            echo "
                                        ";
            // line 99
            $this->displayBlock('component_address_form_company_vatId_label', $context, $blocks);
            // line 105
            echo "
                                        ";
            // line 106
            $this->displayBlock('component_address_form_company_vatId_input', $context, $blocks);
            // line 114
            echo "
                                        ";
            // line 115
            $this->displayBlock('component_address_form_company_vatId_input_error', $context, $blocks);
            // line 120
            echo "                                    </div>
                                ";
        }
        // line 122
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_component_address_form_company_vatId_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_label"));

        // line 100
        echo "                                            <label class=\"form-label\"
                                                   for=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "vatId\">
                                                ";
        // line 102
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatLabel"));
        echo "
                                            </label>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_component_address_form_company_vatId_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_input"));

        // line 107
        echo "                                            <input type=\"text\"
                                                   class=\"form-control";
        // line 108
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                                   id=\"";
        // line 109
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "vatId\"
                                                   placeholder=\"";
        // line 110
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[vatId]\"
                                                   value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "vatId"], "method", false, false, false, 112), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_component_address_form_company_vatId_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_input_error"));

        // line 116
        echo "                                            ";
        if (($context["violationPath"] ?? null)) {
            // line 117
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 117)->display($context);
            // line 118
            echo "                                            ";
        }
        // line 119
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_component_address_form_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_address_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_address_fields"));

        // line 131
        echo "        <div class=\"form-row\">
            ";
        // line 132
        $this->displayBlock('component_address_form_street', $context, $blocks);
        // line 164
        echo "
            ";
        // line 165
        $this->displayBlock('component_address_form_zipcode_city', $context, $blocks);
        // line 248
        echo "
            ";
        // line 249
        $this->displayBlock('component_address_form_additional_field1', $context, $blocks);
        // line 271
        echo "
            ";
        // line 272
        $this->displayBlock('component_address_form_additional_field2', $context, $blocks);
        // line 294
        echo "        </div>

        <div class=\"form-row country-and-state-form-elements\" data-country-state-select=\"true\">
            ";
        // line 297
        $this->displayBlock('component_address_form_country', $context, $blocks);
        // line 371
        echo "        </div>

        <div class=\"form-row\">
            ";
        // line 374
        $this->displayBlock('component_address_form_phone_number', $context, $blocks);
        // line 408
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_component_address_form_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street"));

        // line 133
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 134
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/street"], "method", false, false, false, 134))) {
            // line 135
            echo "                        ";
            $context["violationPath"] = "/street";
            // line 136
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/street")], "method", false, false, false, 136))) {
            // line 137
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/street");
            // line 138
            echo "                    ";
        }
        // line 139
        echo "
                    ";
        // line 140
        $this->displayBlock('component_address_form_street_label', $context, $blocks);
        // line 146
        echo "
                    ";
        // line 147
        $this->displayBlock('component_address_form_street_input', $context, $blocks);
        // line 156
        echo "
                    ";
        // line 157
        $this->displayBlock('component_address_form_street_input_error', $context, $blocks);
        // line 162
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_component_address_form_street_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_label"));

        // line 141
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressStreet\">
                            ";
        // line 143
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_component_address_form_street_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_input"));

        // line 148
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 149
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 150
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressStreet\"
                               placeholder=\"";
        // line 151
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 152
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[street]\"
                               value=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "street"], "method", false, false, false, 153), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_component_address_form_street_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_input_error"));

        // line 158
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 159
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 159)->display($context);
            // line 160
            echo "                        ";
        }
        // line 161
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_component_address_form_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_city"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_city"));

        // line 166
        echo "                ";
        ob_start();
        // line 167
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/zipcode"], "method", false, false, false, 167))) {
            // line 168
            echo "                        ";
            $context["violationPath"] = "/zipcode";
            // line 169
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/zipcode")], "method", false, false, false, 169))) {
            // line 170
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/zipcode");
            // line 171
            echo "                    ";
        }
        // line 172
        echo "
                    ";
        // line 173
        $this->displayBlock('component_address_form_zipcode_label', $context, $blocks);
        // line 179
        echo "
                    ";
        // line 180
        $this->displayBlock('component_address_form_zipcode_input', $context, $blocks);
        // line 189
        echo "
                    ";
        // line 190
        $this->displayBlock('component_address_form_zipcode_error', $context, $blocks);
        // line 195
        echo "                ";
        $context["zipcodeField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 196
        echo "
                ";
        // line 197
        ob_start();
        // line 198
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/city"], "method", false, false, false, 198))) {
            // line 199
            echo "                        ";
            $context["violationPath"] = "/city";
            // line 200
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/city")], "method", false, false, false, 200))) {
            // line 201
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/city");
            // line 202
            echo "                    ";
        } else {
            // line 203
            echo "                        ";
            $context["violationPath"] = null;
            // line 204
            echo "                    ";
        }
        // line 205
        echo "
                    ";
        // line 206
        $this->displayBlock('component_address_form_city_label', $context, $blocks);
        // line 212
        echo "
                    ";
        // line 213
        $this->displayBlock('component_address_form_city_input', $context, $blocks);
        // line 222
        echo "
                    ";
        // line 223
        $this->displayBlock('component_address_form_city_error', $context, $blocks);
        // line 228
        echo "                ";
        $context["cityField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 229
        echo "
                ";
        // line 230
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 230), "core", [], "any", false, false, false, 230), "address", [], "any", false, false, false, 230), "showZipcodeInFrontOfCity", [], "any", false, false, false, 230)) {
            // line 231
            echo "                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 232
            echo twig_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 236
            echo twig_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        } else {
            // line 239
            echo "                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 240
            echo twig_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 244
            echo twig_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 247
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_component_address_form_zipcode_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_label"));

        // line 174
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 175
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressZipcode\">
                            ";
        // line 176
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodeLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_component_address_form_zipcode_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_input"));

        // line 181
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 182
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 183
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressZipcode\"
                               placeholder=\"";
        // line 184
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 185
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[zipcode]\"
                               value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "zipcode"], "method", false, false, false, 186), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_component_address_form_zipcode_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_error"));

        // line 191
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 192
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 192)->display($context);
            // line 193
            echo "                        ";
        }
        // line 194
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_component_address_form_city_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_label"));

        // line 207
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 208
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCity\">
                            ";
        // line 209
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 213
    public function block_component_address_form_city_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_input"));

        // line 214
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 215
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 216
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCity\"
                               placeholder=\"";
        // line 217
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 218
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[city]\"
                               value=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "city"], "method", false, false, false, 219), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 223
    public function block_component_address_form_city_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_error"));

        // line 224
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 225
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 225)->display($context);
            // line 226
            echo "                        ";
        }
        // line 227
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 249
    public function block_component_address_form_additional_field1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1"));

        // line 250
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 250), "core", [], "any", false, false, false, 250), "loginRegistration", [], "any", false, false, false, 250), "showAdditionalAddressField1", [], "any", false, false, false, 250)) {
            // line 251
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 252
            $this->displayBlock('component_address_form_additional_field1_label', $context, $blocks);
            // line 258
            echo "
                        ";
            // line 259
            $this->displayBlock('component_address_form_additional_field1_input', $context, $blocks);
            // line 268
            echo "                    </div>
                ";
        }
        // line 270
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_component_address_form_additional_field1_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1_label"));

        // line 253
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 254
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField1\">
                                ";
        // line 255
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Label"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 255), "core", [], "any", false, false, false, 255), "loginRegistration", [], "any", false, false, false, 255), "additionalAddressField1Required", [], "any", false, false, false, 255)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 259
    public function block_component_address_form_additional_field1_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1_input"));

        // line 260
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 262
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField1\"
                                   placeholder=\"";
        // line 263
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 264
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine1]\"
                                   value=\"";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine1"], "method", false, false, false, 265), "html", null, true);
        echo "\"
                                    ";
        // line 266
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 266), "core", [], "any", false, false, false, 266), "loginRegistration", [], "any", false, false, false, 266), "additionalAddressField1Required", [], "any", false, false, false, 266)) ? ("required=\"true\"") : (""));
        echo ">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 272
    public function block_component_address_form_additional_field2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2"));

        // line 273
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 273), "core", [], "any", false, false, false, 273), "loginRegistration", [], "any", false, false, false, 273), "showAdditionalAddressField2", [], "any", false, false, false, 273)) {
            // line 274
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 275
            $this->displayBlock('component_address_form_additional_field2_label', $context, $blocks);
            // line 281
            echo "
                        ";
            // line 282
            $this->displayBlock('component_address_form_additional_field2_input', $context, $blocks);
            // line 291
            echo "                    </div>
                ";
        }
        // line 293
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_component_address_form_additional_field2_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2_label"));

        // line 276
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 277
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField2\">
                                ";
        // line 278
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Label"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 278), "core", [], "any", false, false, false, 278), "loginRegistration", [], "any", false, false, false, 278), "additionalAddressField2Required", [], "any", false, false, false, 278)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 282
    public function block_component_address_form_additional_field2_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2_input"));

        // line 283
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 285
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField2\"
                                   placeholder=\"";
        // line 286
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 287
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine2]\"
                                   value=\"";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine2"], "method", false, false, false, 288), "html", null, true);
        echo "\"
                                    ";
        // line 289
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 289), "core", [], "any", false, false, false, 289), "loginRegistration", [], "any", false, false, false, 289), "additionalAddressField2Required", [], "any", false, false, false, 289)) ? ("required=\"true\"") : (""));
        echo ">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_component_address_form_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country"));

        // line 298
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 299
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryId"], "method", false, false, false, 299))) {
            // line 300
            echo "                        ";
            $context["violationPath"] = "/countryId";
            // line 301
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryId")], "method", false, false, false, 301))) {
            // line 302
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryId");
            // line 303
            echo "                    ";
        }
        // line 304
        echo "
                    ";
        // line 305
        $this->displayBlock('component_address_form_country_label', $context, $blocks);
        // line 311
        echo "
                    ";
        // line 312
        $this->displayBlock('component_address_form_country_select', $context, $blocks);
        // line 335
        echo "                </div>

                <div class=\"form-group col-md-6  d-none\">
                    ";
        // line 338
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryStateId"], "method", false, false, false, 338))) {
            // line 339
            echo "                        ";
            $context["violationPath"] = "/countryStateId";
            // line 340
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryStateId")], "method", false, false, false, 340))) {
            // line 341
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryStateId");
            // line 342
            echo "                    ";
        }
        // line 343
        echo "
                    ";
        // line 344
        $this->displayBlock('component_address_form_country_state_label', $context, $blocks);
        // line 350
        echo "
                    ";
        // line 351
        $this->displayBlock('component_address_form_country_state_select', $context, $blocks);
        // line 363
        echo "
                    ";
        // line 364
        $this->displayBlock('component_address_form_country_error', $context, $blocks);
        // line 369
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 305
    public function block_component_address_form_country_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_label"));

        // line 306
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 307
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 308
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 312
    public function block_component_address_form_country_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_select"));

        // line 313
        echo "                        <select class=\"country-select custom-select";
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 314
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountry\"
                                name=\"";
        // line 315
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryId]\"
                                required=\"required\"
                                data-initial-country-id=\"";
        // line 317
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 317), "html", null, true);
        echo "\">
                            ";
        // line 318
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 318)) {
            // line 319
            echo "                                <option disabled=\"disabled\"
                                        value=\"\"
                                        selected=\"selected\">
                                    ";
            // line 322
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 325
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 325));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 326
            echo "                                <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 326) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 326))) {
                // line 327
                echo "                                        selected=\"selected\"
                                        ";
            }
            // line 329
            echo "                                        value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 329), "html", null, true);
            echo "\">
                                    ";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "translated", [], "any", false, false, false, 330), "name", [], "any", false, false, false, 330), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 344
    public function block_component_address_form_country_state_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_state_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_state_label"));

        // line 345
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 346
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 347
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStateLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 351
    public function block_component_address_form_country_state_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_state_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_state_select"));

        // line 352
        echo "                        <select class=\"country-state-select custom-select";
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 353
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountryState\"
                                name=\"";
        // line 354
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryStateId]\"
                                data-initial-country-state-id=\"";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryStateId"], "method", false, false, false, 355), "html", null, true);
        echo "\">
                            <option value=\"\"
                                    selected=\"selected\"
                                    data-placeholder-option=\"true\">
                                ";
        // line 359
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStatePlaceholder"));
        echo "
                            </option>
                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 364
    public function block_component_address_form_country_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_error"));

        // line 365
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 366
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 366)->display($context);
            // line 367
            echo "                        ";
        }
        // line 368
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 374
    public function block_component_address_form_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number"));

        // line 375
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 375), "core", [], "any", false, false, false, 375), "loginRegistration", [], "any", false, false, false, 375), "showPhoneNumberField", [], "any", false, false, false, 375)) {
            // line 376
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 377
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/phoneNumber"], "method", false, false, false, 377))) {
                // line 378
                echo "                            ";
                $context["violationPath"] = "/phoneNumber";
                // line 379
                echo "                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/phoneNumber")], "method", false, false, false, 379))) {
                // line 380
                echo "                            ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/phoneNumber");
                // line 381
                echo "                        ";
            }
            // line 382
            echo "
                        ";
            // line 383
            $this->displayBlock('component_address_form_phone_number_label', $context, $blocks);
            // line 389
            echo "
                        ";
            // line 390
            $this->displayBlock('component_address_form_phone_number_input', $context, $blocks);
            // line 399
            echo "
                        ";
            // line 400
            $this->displayBlock('component_address_form_phone_error', $context, $blocks);
            // line 405
            echo "                    </div>
                ";
        }
        // line 407
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 383
    public function block_component_address_form_phone_number_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number_label"));

        // line 384
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 385
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressPhoneNumber\">
                                ";
        // line 386
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberLabel"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 386), "core", [], "any", false, false, false, 386), "loginRegistration", [], "any", false, false, false, 386), "phoneNumberFieldRequired", [], "any", false, false, false, 386)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 390
    public function block_component_address_form_phone_number_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number_input"));

        // line 391
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 393
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressPhoneNumber\"
                                   placeholder=\"";
        // line 394
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberPlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 395
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[phoneNumber]\"
                                   value=\"";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "phoneNumber"], "method", false, false, false, 396), "html", null, true);
        echo "\"
                                ";
        // line 397
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 397), "core", [], "any", false, false, false, 397), "loginRegistration", [], "any", false, false, false, 397), "phoneNumberFieldRequired", [], "any", false, false, false, 397)) ? ("required=\"true\"") : (""));
        echo ">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 400
    public function block_component_address_form_phone_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_error"));

        // line 401
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 402
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 402)->display($context);
            // line 403
            echo "                            ";
        }
        // line 404
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1982 => 404,  1979 => 403,  1976 => 402,  1973 => 401,  1963 => 400,  1951 => 397,  1947 => 396,  1943 => 395,  1939 => 394,  1935 => 393,  1931 => 391,  1921 => 390,  1907 => 386,  1903 => 385,  1900 => 384,  1890 => 383,  1880 => 407,  1876 => 405,  1874 => 400,  1871 => 399,  1869 => 390,  1866 => 389,  1864 => 383,  1861 => 382,  1858 => 381,  1855 => 380,  1852 => 379,  1849 => 378,  1847 => 377,  1844 => 376,  1841 => 375,  1831 => 374,  1821 => 368,  1818 => 367,  1815 => 366,  1812 => 365,  1802 => 364,  1788 => 359,  1781 => 355,  1777 => 354,  1773 => 353,  1766 => 352,  1756 => 351,  1742 => 347,  1738 => 346,  1735 => 345,  1725 => 344,  1714 => 333,  1705 => 330,  1700 => 329,  1696 => 327,  1693 => 326,  1688 => 325,  1682 => 322,  1677 => 319,  1675 => 318,  1671 => 317,  1666 => 315,  1662 => 314,  1655 => 313,  1645 => 312,  1631 => 308,  1627 => 307,  1624 => 306,  1614 => 305,  1603 => 369,  1601 => 364,  1598 => 363,  1596 => 351,  1593 => 350,  1591 => 344,  1588 => 343,  1585 => 342,  1582 => 341,  1579 => 340,  1576 => 339,  1574 => 338,  1569 => 335,  1567 => 312,  1564 => 311,  1562 => 305,  1559 => 304,  1556 => 303,  1553 => 302,  1550 => 301,  1547 => 300,  1545 => 299,  1542 => 298,  1532 => 297,  1520 => 289,  1516 => 288,  1512 => 287,  1508 => 286,  1504 => 285,  1500 => 283,  1490 => 282,  1476 => 278,  1472 => 277,  1469 => 276,  1459 => 275,  1449 => 293,  1445 => 291,  1443 => 282,  1440 => 281,  1438 => 275,  1435 => 274,  1432 => 273,  1422 => 272,  1410 => 266,  1406 => 265,  1402 => 264,  1398 => 263,  1394 => 262,  1390 => 260,  1380 => 259,  1366 => 255,  1362 => 254,  1359 => 253,  1349 => 252,  1339 => 270,  1335 => 268,  1333 => 259,  1330 => 258,  1328 => 252,  1325 => 251,  1322 => 250,  1312 => 249,  1302 => 227,  1299 => 226,  1296 => 225,  1293 => 224,  1283 => 223,  1270 => 219,  1266 => 218,  1262 => 217,  1258 => 216,  1252 => 215,  1249 => 214,  1239 => 213,  1225 => 209,  1221 => 208,  1218 => 207,  1208 => 206,  1198 => 194,  1195 => 193,  1192 => 192,  1189 => 191,  1179 => 190,  1166 => 186,  1162 => 185,  1158 => 184,  1154 => 183,  1148 => 182,  1145 => 181,  1135 => 180,  1121 => 176,  1117 => 175,  1114 => 174,  1104 => 173,  1094 => 247,  1088 => 244,  1081 => 240,  1078 => 239,  1072 => 236,  1065 => 232,  1062 => 231,  1060 => 230,  1057 => 229,  1054 => 228,  1052 => 223,  1049 => 222,  1047 => 213,  1044 => 212,  1042 => 206,  1039 => 205,  1036 => 204,  1033 => 203,  1030 => 202,  1027 => 201,  1024 => 200,  1021 => 199,  1018 => 198,  1016 => 197,  1013 => 196,  1010 => 195,  1008 => 190,  1005 => 189,  1003 => 180,  1000 => 179,  998 => 173,  995 => 172,  992 => 171,  989 => 170,  986 => 169,  983 => 168,  980 => 167,  977 => 166,  967 => 165,  957 => 161,  954 => 160,  951 => 159,  948 => 158,  938 => 157,  925 => 153,  921 => 152,  917 => 151,  913 => 150,  907 => 149,  904 => 148,  894 => 147,  880 => 143,  876 => 142,  873 => 141,  863 => 140,  852 => 162,  850 => 157,  847 => 156,  845 => 147,  842 => 146,  840 => 140,  837 => 139,  834 => 138,  831 => 137,  828 => 136,  825 => 135,  823 => 134,  820 => 133,  810 => 132,  799 => 408,  797 => 374,  792 => 371,  790 => 297,  785 => 294,  783 => 272,  780 => 271,  778 => 249,  775 => 248,  773 => 165,  770 => 164,  768 => 132,  765 => 131,  755 => 130,  745 => 119,  742 => 118,  739 => 117,  736 => 116,  726 => 115,  714 => 112,  710 => 111,  706 => 110,  702 => 109,  696 => 108,  693 => 107,  683 => 106,  670 => 102,  666 => 101,  663 => 100,  653 => 99,  643 => 122,  639 => 120,  637 => 115,  634 => 114,  632 => 106,  629 => 105,  627 => 99,  624 => 98,  621 => 97,  618 => 96,  615 => 95,  612 => 94,  610 => 93,  607 => 92,  604 => 91,  594 => 90,  584 => 86,  581 => 85,  578 => 84,  575 => 83,  565 => 82,  553 => 79,  549 => 78,  545 => 77,  541 => 76,  535 => 75,  532 => 74,  522 => 73,  509 => 69,  505 => 68,  502 => 67,  492 => 66,  481 => 87,  479 => 82,  476 => 81,  474 => 73,  471 => 72,  469 => 66,  466 => 65,  463 => 64,  460 => 63,  457 => 62,  454 => 61,  452 => 60,  449 => 59,  439 => 58,  429 => 51,  426 => 50,  423 => 49,  420 => 48,  410 => 47,  396 => 44,  392 => 43,  388 => 42,  384 => 41,  380 => 40,  374 => 39,  371 => 38,  361 => 37,  350 => 34,  345 => 33,  341 => 32,  338 => 31,  328 => 30,  317 => 52,  315 => 47,  312 => 46,  310 => 37,  307 => 36,  305 => 30,  302 => 29,  299 => 28,  296 => 27,  293 => 26,  290 => 25,  288 => 24,  279 => 23,  269 => 22,  258 => 123,  256 => 90,  253 => 89,  250 => 58,  245 => 55,  242 => 54,  240 => 22,  237 => 21,  227 => 20,  217 => 128,  214 => 127,  210 => 125,  208 => 20,  197 => 19,  195 => 18,  192 => 17,  189 => 16,  186 => 15,  184 => 14,  181 => 13,  178 => 12,  175 => 11,  165 => 10,  155 => 8,  150 => 6,  146 => 5,  143 => 4,  140 => 3,  130 => 2,  119 => 410,  117 => 130,  114 => 129,  112 => 10,  109 => 9,  106 => 2,  87 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_address_form %}
    {% block component_address_form_addressId %}
        {% if data.get('id') %}
            <input type=\"hidden\"
                   name=\"{{ prefix }}[id]\"
                   value=\"{{ data.get('id') }}\">
        {% endif %}
    {% endblock %}

    {% block component_address_form_company %}
        {% if showFormCompany %}
            {% if shopware.config.core.loginRegistration.showAccountTypeSelection %}
                {% set accountTypeRequired = true %}
                {# @deprecated tag:v6.4.0 - Variable \"accounTypeRequired\" will be removed. Use \"accountTypeRequired\" instead #}
                {% set accounTypeRequired = true %}
            {% endif %}

            {% if shopware.config.core.loginRegistration.showAccountTypeSelection or prefix == \"address\" or prefix == \"shippingAddress\" or hasSelectedBusiness %}
                <div class=\"{% if prefix == \"shippingAddress\" or hasSelectedBusiness %}address-contact-type-company{% elseif prefix == \"address\" %}js-field-toggle-contact-type-company d-block{% else %}js-field-toggle-contact-type-company d-none{% endif %}\">
                    {% block component_address_form_company_fields %}
                        <div class=\"form-row\">
                            {% block component_address_form_company_name %}
                                <div class=\"form-group{% if showVatIdField %} col-12{% else %} col-6{% endif %}\">
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
                                               value=\"{{ data.get('company') }}\"
                                               {% if prefix != \"shippingAddress\" and accountTypeRequired %}required=\"required\"{% endif %}>
                                    {% endblock %}

                                    {% block component_address_form_company_name_input_error %}
                                        {% if violationPath %}
                                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                        {% endif %}
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        {% if showVatIdField %}
                            </div>
                            <div class=\"form-row\">
                        {% endif %}
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
                                               value=\"{{ data.get('department') }}\">
                                    {% endblock %}

                                    {% block component_address_form_company_department_input_error %}
                                        {% if violationPath %}
                                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                        {% endif %}
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block component_address_form_company_vatId %}
                                {% if showVatIdField %}
                                    <div class=\"form-group col-md-6\">
                                        {% if formViolations.getViolations(\"/vatId\") is not empty %}
                                            {% set violationPath = \"/vatId\" %}
                                        {% elseif formViolations.getViolations(\"/#{prefix}/vatId\") is not empty %}
                                            {% set violationPath = \"/#{prefix}/vatId\" %}
                                        {% endif %}

                                        {% block component_address_form_company_vatId_label %}
                                            <label class=\"form-label\"
                                                   for=\"{{ prefix }}vatId\">
                                                {{ \"address.companyVatLabel\"|trans|sw_sanitize }}
                                            </label>
                                        {% endblock %}

                                        {% block component_address_form_company_vatId_input %}
                                            <input type=\"text\"
                                                   class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                                   id=\"{{ prefix }}vatId\"
                                                   placeholder=\"{{ \"address.companyVatPlaceholder\"|trans|striptags }}\"
                                                   name=\"{{ prefix }}[vatId]\"
                                                   value=\"{{ data.get('vatId') }}\">
                                        {% endblock %}

                                        {% block component_address_form_company_vatId_input_error %}
                                            {% if violationPath %}
                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                            {% endif %}
                                        {% endblock %}
                                    </div>
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endif %}
        {% endif %}
    {% endblock %}

    {% block component_address_form_address_fields %}
        <div class=\"form-row\">
            {% block component_address_form_street %}
                <div class=\"form-group col-md-6\">
                    {% if formViolations.getViolations(\"/street\") is not empty %}
                        {% set violationPath = \"/street\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/street\") is not empty %}
                        {% set violationPath = \"/#{prefix}/street\" %}
                    {% endif %}

                    {% block component_address_form_street_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressStreet\">
                            {{ \"address.streetLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_street_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                               id=\"{{ prefix }}AddressStreet\"
                               placeholder=\"{{ \"address.streetPlaceholder\"|trans|striptags }}\"
                               name=\"{{ prefix }}[street]\"
                               value=\"{{ data.get('street') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_form_street_input_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_form_zipcode_city %}
                {% set zipcodeField %}
                    {% if formViolations.getViolations(\"/zipcode\") is not empty %}
                        {% set violationPath = \"/zipcode\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/zipcode\") is not empty %}
                        {% set violationPath = \"/#{prefix}/zipcode\" %}
                    {% endif %}

                    {% block component_address_form_zipcode_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressZipcode\">
                            {{ \"address.zipcodeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_zipcode_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                               id=\"{{ prefix }}AddressZipcode\"
                               placeholder=\"{{ \"address.zipcodePlaceholder\"|trans|striptags }}\"
                               name=\"{{ prefix }}[zipcode]\"
                               value=\"{{ data.get('zipcode') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_form_zipcode_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                {% endset %}

                {% set cityField %}
                    {% if formViolations.getViolations(\"/city\") is not empty %}
                        {% set violationPath = \"/city\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/city\") is not empty %}
                        {% set violationPath = \"/#{prefix}/city\" %}
                    {% else %}
                        {% set violationPath = null %}
                    {% endif %}

                    {% block component_address_form_city_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressCity\">
                            {{ \"address.cityLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_city_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                               id=\"{{ prefix }}AddressCity\"
                               placeholder=\"{{ \"address.cityPlaceholder\"|trans|striptags }}\"
                               name=\"{{ prefix }}[city]\"
                               value=\"{{ data.get('city') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_form_city_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                {% endset %}

                {% if shopware.config.core.address.showZipcodeInFrontOfCity %}
                    <div class=\"form-group col-md-2 col-4\">
                        {{ zipcodeField }}
                    </div>

                    <div class=\"form-group col-md-4 col-8\">
                        {{ cityField }}
                    </div>
                {% else %}
                    <div class=\"form-group col-md-4 col-8\">
                        {{ cityField }}
                    </div>

                    <div class=\"form-group col-md-2 col-4\">
                        {{ zipcodeField }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_address_form_additional_field1 %}
                {% if shopware.config.core.loginRegistration.showAdditionalAddressField1 %}
                    <div class=\"form-group col-md-6\">
                        {% block component_address_form_additional_field1_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}AdditionalField1\">
                                {{ \"address.additionalField1Label\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.additionalAddressField1Required ? \"general.required\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_form_additional_field1_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"{{ prefix }}AdditionalField1\"
                                   placeholder=\"{{ \"address.additionalField1Placeholder\"|trans|striptags }}\"
                                   name=\"{{ prefix }}[additionalAddressLine1]\"
                                   value=\"{{ data.get('additionalAddressLine1') }}\"
                                    {{ shopware.config.core.loginRegistration.additionalAddressField1Required ? 'required=\"true\"' }}>
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_address_form_additional_field2 %}
                {% if shopware.config.core.loginRegistration.showAdditionalAddressField2 %}
                    <div class=\"form-group col-md-6\">
                        {% block component_address_form_additional_field2_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}AdditionalField2\">
                                {{ \"address.additionalField2Label\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.additionalAddressField2Required ? \"general.required\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_form_additional_field2_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"{{ prefix }}AdditionalField2\"
                                   placeholder=\"{{ \"address.additionalField2Placeholder\"|trans|striptags }}\"
                                   name=\"{{ prefix }}[additionalAddressLine2]\"
                                   value=\"{{ data.get('additionalAddressLine2') }}\"
                                    {{ shopware.config.core.loginRegistration.additionalAddressField2Required ? 'required=\"true\"' }}>
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>

        <div class=\"form-row country-and-state-form-elements\" data-country-state-select=\"true\">
            {% block component_address_form_country %}
                <div class=\"form-group col-md-6\">
                    {% if formViolations.getViolations(\"/countryId\") is not empty %}
                        {% set violationPath = \"/countryId\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/countryId\") is not empty %}
                        {% set violationPath = \"/#{prefix}/countryId\" %}
                    {% endif %}

                    {% block component_address_form_country_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressCountry\">
                            {{ \"address.countryLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_country_select %}
                        <select class=\"country-select custom-select{% if violationPath %} is-invalid{% endif %}\"
                                id=\"{{ prefix }}AddressCountry\"
                                name=\"{{ prefix }}[countryId]\"
                                required=\"required\"
                                data-initial-country-id=\"{{ data.get('countryId') }}\">
                            {% if not data.get('countryId') %}
                                <option disabled=\"disabled\"
                                        value=\"\"
                                        selected=\"selected\">
                                    {{ \"address.countryPlaceholder\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}
                            {% for country in page.countries %}
                                <option {% if country.id == data.get('countryId') %}
                                        selected=\"selected\"
                                        {% endif %}
                                        value=\"{{ country.id }}\">
                                    {{ country.translated.name }}
                                </option>
                            {% endfor %}
                        </select>
                    {% endblock %}
                </div>

                <div class=\"form-group col-md-6  d-none\">
                    {% if formViolations.getViolations(\"/countryStateId\") is not empty %}
                        {% set violationPath = \"/countryStateId\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/countryStateId\") is not empty %}
                        {% set violationPath = \"/#{prefix}/countryStateId\" %}
                    {% endif %}

                    {% block component_address_form_country_state_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressCountry\">
                            {{ \"address.countryStateLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_country_state_select %}
                        <select class=\"country-state-select custom-select{% if violationPath %} is-invalid{% endif %}\"
                                id=\"{{ prefix }}AddressCountryState\"
                                name=\"{{ prefix }}[countryStateId]\"
                                data-initial-country-state-id=\"{{ data.get('countryStateId') }}\">
                            <option value=\"\"
                                    selected=\"selected\"
                                    data-placeholder-option=\"true\">
                                {{ \"address.countryStatePlaceholder\"|trans|sw_sanitize }}
                            </option>
                        </select>
                    {% endblock %}

                    {% block component_address_form_country_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>

        <div class=\"form-row\">
            {% block component_address_form_phone_number %}
                {% if shopware.config.core.loginRegistration.showPhoneNumberField %}
                    <div class=\"form-group col-md-6\">
                        {% if formViolations.getViolations(\"/phoneNumber\") is not empty %}
                            {% set violationPath = \"/phoneNumber\" %}
                        {% elseif formViolations.getViolations(\"/#{prefix}/phoneNumber\") is not empty %}
                            {% set violationPath = \"/#{prefix}/phoneNumber\" %}
                        {% endif %}

                        {% block component_address_form_phone_number_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}AddressPhoneNumber\">
                                {{ \"address.phoneNumberLabel\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.phoneNumberFieldRequired ? \"general.required\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_form_phone_number_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"{{ prefix }}AddressPhoneNumber\"
                                   placeholder=\"{{ \"address.phoneNumberPlaceholder\"|trans|striptags }}\"
                                   name=\"{{ prefix }}[phoneNumber]\"
                                   value=\"{{ data.get('phoneNumber') }}\"
                                {{ shopware.config.core.loginRegistration.phoneNumberFieldRequired ? 'required=\"true\"' }}>
                        {% endblock %}

                        {% block component_address_form_phone_error %}
                            {% if violationPath %}
                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {#TODO: NEXT-2671 - country states#}
{% endblock %}
", "@Storefront/storefront/component/address/address-form.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/address/address-form.html.twig");
    }
}
