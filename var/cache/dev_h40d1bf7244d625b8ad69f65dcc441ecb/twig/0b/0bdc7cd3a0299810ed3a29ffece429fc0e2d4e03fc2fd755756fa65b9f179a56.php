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

/* @Storefront/storefront/component/address/address-personal.html.twig */
class __TwigTemplate_c03b5eb711dd3ee19b58359e913b00d07dc0a594ac6e99ce7f940481e66a3e70 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_personal_fields' => [$this, 'block_component_address_personal_fields'],
            'component_address_personal_account_type' => [$this, 'block_component_address_personal_account_type'],
            'component_address_personal_account_type_label' => [$this, 'block_component_address_personal_account_type_label'],
            'component_address_personal_account_type_select' => [$this, 'block_component_address_personal_account_type_select'],
            'component_address_personal_account_type_error' => [$this, 'block_component_address_personal_account_type_error'],
            'component_address_personal_fields_salutation_title' => [$this, 'block_component_address_personal_fields_salutation_title'],
            'component_address_personal_fields_salutation' => [$this, 'block_component_address_personal_fields_salutation'],
            'component_address_personal_fields_salutation_label' => [$this, 'block_component_address_personal_fields_salutation_label'],
            'component_address_form_salutation_select' => [$this, 'block_component_address_form_salutation_select'],
            'component_address_form_salutation_select_error' => [$this, 'block_component_address_form_salutation_select_error'],
            'component_address_personal_fields_title' => [$this, 'block_component_address_personal_fields_title'],
            'component_address_personal_fields_title_label' => [$this, 'block_component_address_personal_fields_title_label'],
            'component_address_personal_fields_title_input' => [$this, 'block_component_address_personal_fields_title_input'],
            'component_address_personal_fields_name' => [$this, 'block_component_address_personal_fields_name'],
            'component_address_personal_fields_first_name' => [$this, 'block_component_address_personal_fields_first_name'],
            'component_address_personal_fields_first_name_label' => [$this, 'block_component_address_personal_fields_first_name_label'],
            'component_address_personal_fields_first_name_input' => [$this, 'block_component_address_personal_fields_first_name_input'],
            'component_address_personal_fields_first_name_input_error' => [$this, 'block_component_address_personal_fields_first_name_input_error'],
            'component_address_personal_fields_last_name' => [$this, 'block_component_address_personal_fields_last_name'],
            'component_address_personal_fields_last_name_label' => [$this, 'block_component_address_personal_fields_last_name_label'],
            'component_address_personal_fields_last_name_input' => [$this, 'block_component_address_personal_fields_last_name_input'],
            'component_address_personal_fields_last_name_input_error' => [$this, 'block_component_address_personal_fields_last_name_input_error'],
            'component_address_personal_company' => [$this, 'block_component_address_personal_company'],
            'component_address_personal_company_fields' => [$this, 'block_component_address_personal_company_fields'],
            'component_address_personal_company_name' => [$this, 'block_component_address_personal_company_name'],
            'component_address_personal_company_name_label' => [$this, 'block_component_address_personal_company_name_label'],
            'component_address_personal_company_name_input' => [$this, 'block_component_address_personal_company_name_input'],
            'component_address_personal_company_name_input_error' => [$this, 'block_component_address_personal_company_name_input_error'],
            'component_address_personal_vat_id' => [$this, 'block_component_address_personal_vat_id'],
            'component_address_personal_vat_id_fields' => [$this, 'block_component_address_personal_vat_id_fields'],
            'component_address_personal_fields_birthday' => [$this, 'block_component_address_personal_fields_birthday'],
            'component_address_personal_fields_birthday_label' => [$this, 'block_component_address_personal_fields_birthday_label'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'component_address_personal_fields_birthday_select_day' => [$this, 'block_component_address_personal_fields_birthday_select_day'],
            'component_address_personal_fields_birthday_select_day_error' => [$this, 'block_component_address_personal_fields_birthday_select_day_error'],
            'component_address_personal_fields_birthday_select_month' => [$this, 'block_component_address_personal_fields_birthday_select_month'],
            'component_address_personal_fields_birthday_select_month_error' => [$this, 'block_component_address_personal_fields_birthday_select_month_error'],
            'component_address_personal_fields_birthday_select_year' => [$this, 'block_component_address_personal_fields_birthday_select_year'],
            'component_address_personal_fields_birthday_select_year_error' => [$this, 'block_component_address_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-personal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-personal.html.twig"));

        // line 2
        $this->displayBlock('component_address_personal_fields', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_address_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields"));

        // line 3
        echo "    ";
        $this->displayBlock('component_address_personal_account_type', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('component_address_personal_fields_salutation_title', $context, $blocks);
        // line 140
        echo "
    ";
        // line 141
        $this->displayBlock('component_address_personal_fields_name', $context, $blocks);
        // line 204
        echo "
    ";
        // line 205
        $this->displayBlock('component_address_personal_company', $context, $blocks);
        // line 244
        echo "
    ";
        // line 245
        $this->displayBlock('component_address_personal_vat_id', $context, $blocks);
        // line 263
        echo "
    ";
        // line 264
        $this->displayBlock('component_address_personal_fields_birthday', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_component_address_personal_account_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type"));

        // line 4
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 4), "core", [], "any", false, false, false, 4), "loginRegistration", [], "any", false, false, false, 4), "showAccountTypeSelection", [], "any", false, false, false, 4) &&  !($context["hideCustomerTypeSelect"] ?? null))) {
            // line 5
            echo "            <div class=\"form-row\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    ";
            // line 7
            $this->displayBlock('component_address_personal_account_type_label', $context, $blocks);
            // line 13
            echo "
                    ";
            // line 14
            $this->displayBlock('component_address_personal_account_type_select', $context, $blocks);
            // line 62
            echo "
                    ";
            // line 63
            $this->displayBlock('component_address_personal_account_type_error', $context, $blocks);
            // line 65
            echo "                </div>
            </div>
        ";
        } elseif ( !        // line 67
($context["hideCustomerTypeSelect"] ?? null)) {
            // line 68
            echo "            <input type=\"hidden\" name=\"accountType\">
        ";
        }
        // line 70
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_component_address_personal_account_type_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_label"));

        // line 8
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "accountType\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_component_address_personal_account_type_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_select"));

        // line 15
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 15), "core", [], "any", false, false, false, 15), "loginRegistration", [], "any", false, false, false, 15), "showAccountTypeSelection", [], "any", false, false, false, 15)) {
            // line 16
            echo "                                <select name=\"";
            if (($context["prefix"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                echo "[accountType]";
            } else {
                echo "accountType";
            }
            echo "\"
                                    id=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "accountType\"
                                    required=\"required\"
                                    class=\"custom-select contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company\"
                                    data-form-field-toggle-value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\"
                                    data-form-field-toggle-scope=\"";
            // line 23
            if ((($context["scope"] ?? null) == "parent")) {
                echo "parent";
            } else {
                echo "all";
            }
            echo "\"
                                    ";
            // line 24
            if ((($context["scope"] ?? null) == "parent")) {
                echo "data-form-field-toggle-parent-selector=";
                echo twig_escape_filter($this->env, ($context["parentSelector"] ?? null), "html", null, true);
            }
            // line 25
            echo "                                >
                            ";
        }
        // line 27
        echo "
                            ";
        // line 28
        $context["isCompany"] = false;
        // line 29
        echo "
                            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 30), "company", [], "any", false, false, false, 30) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "company", [], "any", false, false, false, 30)))) {
            // line 31
            echo "                                ";
            $context["isCompany"] = true;
            // line 32
            echo "                            ";
        }
        // line 33
        echo "
                            ";
        // line 34
        if ((($context["accountType"] ?? null) && (($context["accountType"] ?? null) == twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS")))) {
            // line 35
            echo "                                ";
            $context["isCompany"] = true;
            // line 36
            echo "                            ";
        }
        // line 37
        echo "
                            ";
        // line 38
        $context["isLoginPage"] = false;
        // line 39
        echo "                            ";
        if ((($context["activeRoute"] ?? null) == "frontend.account.login.page")) {
            // line 40
            echo "                                ";
            $context["isLoginPage"] = true;
            // line 41
            echo "                            ";
        }
        // line 42
        echo "
                            ";
        // line 43
        if (($context["isLoginPage"] ?? null)) {
            // line 44
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 47
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
            echo "
                                </option>
                            ";
        }
        // line 50
        echo "
                            <option value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_PRIVATE"), "html", null, true);
        echo "\"
                                ";
        // line 52
        if (((($context["isCompany"] ?? null) == false) && (($context["isLoginPage"] ?? null) == false))) {
            echo " selected=\"selected\"";
        }
        echo ">
                                ";
        // line 53
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypePrivate"));
        echo "
                            </option>

                            <option value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
        echo "\"
                                ";
        // line 57
        if (((($context["isCompany"] ?? null) == true) && (($context["isLoginPage"] ?? null) == false))) {
            echo " selected=\"selected\"";
        }
        echo ">
                                ";
        // line 58
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeBusiness"));
        echo "
                            </option>
                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_component_address_personal_account_type_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_error"));

        // line 64
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_component_address_personal_fields_salutation_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_title"));

        // line 73
        echo "        <div class=\"form-row\">
            ";
        // line 74
        $this->displayBlock('component_address_personal_fields_salutation', $context, $blocks);
        // line 115
        echo "
            ";
        // line 116
        $this->displayBlock('component_address_personal_fields_title', $context, $blocks);
        // line 138
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_component_address_personal_fields_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation"));

        // line 75
        echo "                <div class=\"form-group col-md-3 col-sm-6\">
                    ";
        // line 76
        $this->displayBlock('component_address_personal_fields_salutation_label', $context, $blocks);
        // line 82
        echo "
                    ";
        // line 83
        $this->displayBlock('component_address_form_salutation_select', $context, $blocks);
        // line 105
        echo "
                    ";
        // line 106
        $this->displayBlock('component_address_form_salutation_select_error', $context, $blocks);
        // line 113
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_component_address_personal_fields_salutation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_label"));

        // line 77
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalSalutation\">
                            ";
        // line 79
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_component_address_form_salutation_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select"));

        // line 84
        echo "                        <select id=\"";
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalSalutation\"
                                class=\"custom-select";
        // line 85
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 85))) {
            echo " is-invalid";
        }
        echo "\"
                                name=\"";
        // line 86
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[salutationId]";
        } else {
            echo "salutationId";
        }
        echo "\"
                                required=\"required\">
                            ";
        // line 88
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 88)) {
            // line 89
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 92
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 95
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salutations", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["salutation"]) {
            // line 96
            echo "                                <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 96) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 96))) {
                // line 97
                echo "                                    selected=\"selected\"
                                ";
            }
            // line 99
            echo "                                        value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\">
                                    ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["salutation"], "translated", [], "any", false, false, false, 100), "displayName", [], "any", false, false, false, 100), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salutation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_component_address_form_salutation_select_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select_error"));

        // line 107
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 107))) {
            // line 108
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 108)->display(twig_array_merge($context, ["violationPath" => "/salutationId"]));
            // line 111
            echo "                        ";
        }
        // line 112
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_component_address_personal_fields_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title"));

        // line 117
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 117), "core", [], "any", false, false, false, 117), "loginRegistration", [], "any", false, false, false, 117), "showTitleField", [], "any", false, false, false, 117)) {
            // line 118
            echo "                    <div class=\"form-group col-md-3 col-sm-6\">
                        ";
            // line 119
            $this->displayBlock('component_address_personal_fields_title_label', $context, $blocks);
            // line 125
            echo "
                        ";
            // line 126
            $this->displayBlock('component_address_personal_fields_title_input', $context, $blocks);
            // line 135
            echo "                    </div>
                ";
        }
        // line 137
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_component_address_personal_fields_title_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_label"));

        // line 120
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalTitle\">
                                ";
        // line 122
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitleLabel"));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_component_address_personal_fields_title_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_input"));

        // line 127
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"";
        // line 130
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalTitle\"
                                   placeholder=\"";
        // line 131
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitlePlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 132
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[title]";
        } else {
            echo "title";
        }
        echo "\"
                                   value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "title"], "method", false, false, false, 133), "html", null, true);
        echo "\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_component_address_personal_fields_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_name"));

        // line 142
        echo "        <div class=\"form-row\">
            ";
        // line 143
        $this->displayBlock('component_address_personal_fields_first_name', $context, $blocks);
        // line 172
        echo "
            ";
        // line 173
        $this->displayBlock('component_address_personal_fields_last_name', $context, $blocks);
        // line 202
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_component_address_personal_fields_first_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name"));

        // line 144
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 145
        $this->displayBlock('component_address_personal_fields_first_name_label', $context, $blocks);
        // line 151
        echo "
                    ";
        // line 152
        $this->displayBlock('component_address_personal_fields_first_name_input', $context, $blocks);
        // line 162
        echo "
                    ";
        // line 163
        $this->displayBlock('component_address_personal_fields_first_name_input_error', $context, $blocks);
        // line 170
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_component_address_personal_fields_first_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_label"));

        // line 146
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalFirstName\">
                            ";
        // line 148
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNameLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_component_address_personal_fields_first_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input"));

        // line 153
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 154
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 154))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal given-name\"
                               id=\"";
        // line 156
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalFirstName\"
                               placeholder=\"";
        // line 157
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 158
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[firstName]";
        } else {
            echo "firstName";
        }
        echo "\"
                               value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "firstName"], "method", false, false, false, 159), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_component_address_personal_fields_first_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input_error"));

        // line 164
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 164))) {
            // line 165
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 165)->display(twig_array_merge($context, ["violationPath" => "/firstName"]));
            // line 168
            echo "                        ";
        }
        // line 169
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_component_address_personal_fields_last_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name"));

        // line 174
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 175
        $this->displayBlock('component_address_personal_fields_last_name_label', $context, $blocks);
        // line 181
        echo "
                    ";
        // line 182
        $this->displayBlock('component_address_personal_fields_last_name_input', $context, $blocks);
        // line 192
        echo "
                    ";
        // line 193
        $this->displayBlock('component_address_personal_fields_last_name_input_error', $context, $blocks);
        // line 200
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_component_address_personal_fields_last_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_label"));

        // line 176
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 177
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalLastName\">
                            ";
        // line 178
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNameLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_component_address_personal_fields_last_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input"));

        // line 183
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 184
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 184))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal family-name\"
                               id=\"";
        // line 186
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalLastName\"
                               placeholder=\"";
        // line 187
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 188
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[lastName]";
        } else {
            echo "lastName";
        }
        echo "\"
                               value=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "lastName"], "method", false, false, false, 189), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_component_address_personal_fields_last_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input_error"));

        // line 194
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 194))) {
            // line 195
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 195)->display(twig_array_merge($context, ["violationPath" => "/lastName"]));
            // line 198
            echo "                        ";
        }
        // line 199
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 205
    public function block_component_address_personal_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company"));

        // line 206
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 206), "core", [], "any", false, false, false, 206), "loginRegistration", [], "any", false, false, false, 206), "showAccountTypeSelection", [], "any", false, false, false, 206) && (($context["activeRoute"] ?? null) == "frontend.account.profile.page"))) {
            // line 207
            echo "            <div class=\"js-field-toggle-contact-type-company\">
                ";
            // line 208
            $this->displayBlock('component_address_personal_company_fields', $context, $blocks);
            // line 241
            echo "            </div>
        ";
        }
        // line 243
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 208
    public function block_component_address_personal_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_fields"));

        // line 209
        echo "                    <div class=\"form-row\">
                        ";
        // line 210
        $this->displayBlock('component_address_personal_company_name', $context, $blocks);
        // line 239
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_component_address_personal_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name"));

        // line 211
        echo "                            <div class=\"form-group col-12\">
                                ";
        // line 212
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 212))) {
            // line 213
            echo "                                    ";
            $context["violationPath"] = "/company";
            // line 214
            echo "                                ";
        }
        // line 215
        echo "
                                ";
        // line 216
        $this->displayBlock('component_address_personal_company_name_label', $context, $blocks);
        // line 221
        echo "
                                ";
        // line 222
        $this->displayBlock('component_address_personal_company_name_input', $context, $blocks);
        // line 231
        echo "
                                ";
        // line 232
        $this->displayBlock('component_address_personal_company_name_input_error', $context, $blocks);
        // line 237
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 216
    public function block_component_address_personal_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_label"));

        // line 217
        echo "                                    <label class=\"form-label\" for=\"company\">
                                        ";
        // line 218
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_component_address_personal_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input"));

        // line 223
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 224
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"company\"
                                           placeholder=\"";
        // line 226
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                           name=\"company\"
                                           value=\"";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 228), "html", null, true);
        echo "\"
                                           required=\"required\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 232
    public function block_component_address_personal_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input_error"));

        // line 233
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 234
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 234)->display($context);
            // line 235
            echo "                                    ";
        }
        // line 236
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 245
    public function block_component_address_personal_vat_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id"));

        // line 246
        echo "        ";
        if (($context["showVatIdField"] ?? null)) {
            // line 247
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 247), "core", [], "any", false, false, false, 247), "loginRegistration", [], "any", false, false, false, 247), "showAccountTypeSelection", [], "any", false, false, false, 247)) {
                // line 248
                echo "                <div class=\"js-field-toggle-contact-type-company js-field-toggle-contact-type-vat-id\">
                    ";
                // line 249
                $this->displayBlock('component_address_personal_vat_id_fields', $context, $blocks);
                // line 259
                echo "                </div>
            ";
            }
            // line 261
            echo "        ";
        }
        // line 262
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 249
    public function block_component_address_personal_vat_id_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id_fields"));

        // line 250
        echo "                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                ";
        // line 252
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 252)->display(twig_array_merge($context, ["vatIds" => twig_get_attribute($this->env, $this->source,         // line 253
($context["data"] ?? null), "get", [0 => "vatIds"], "method", false, false, false, 253), "editMode" => true]));
        // line 256
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_component_address_personal_fields_birthday($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday"));

        // line 265
        echo "        ";
        if (($context["showBirthdayField"] ?? null)) {
            // line 266
            echo "            ";
            $this->displayBlock('component_address_personal_fields_birthday_label', $context, $blocks);
            // line 271
            echo "
            ";
            // line 272
            $this->displayBlock('component_address_personal_fields_birthday_selects', $context, $blocks);
            // line 366
            echo "        ";
        }
        // line 367
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 266
    public function block_component_address_personal_fields_birthday_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_label"));

        // line 267
        echo "                <label for=\"";
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalBirthday\">
                    ";
        // line 268
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdayLabel"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 268), "core", [], "any", false, false, false, 268), "loginRegistration", [], "any", false, false, false, 268), "birthdayFieldRequired", [], "any", false, false, false, 268)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                </label>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 272
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        // line 273
        echo "                <div class=\"form-row\">
                    ";
        // line 274
        $this->displayBlock('component_address_personal_fields_birthday_select_day', $context, $blocks);
        // line 303
        echo "
                    ";
        // line 304
        $this->displayBlock('component_address_personal_fields_birthday_select_month', $context, $blocks);
        // line 332
        echo "
                    ";
        // line 333
        $this->displayBlock('component_address_personal_fields_birthday_select_year', $context, $blocks);
        // line 364
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 274
    public function block_component_address_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day"));

        // line 275
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"";
        // line 276
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalBirthday\"
                                    name=\"";
        // line 277
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayDay]";
        } else {
            echo "birthdayDay";
        }
        echo "\"
                                    class=\"custom-select";
        // line 278
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 278))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 279
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 279), "core", [], "any", false, false, false, 279), "loginRegistration", [], "any", false, false, false, 279), "birthdayFieldRequired", [], "any", false, false, false, 279)) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 280
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 280)) {
            // line 281
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 283
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                                    </option>
                                ";
        }
        // line 286
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 287
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                            ";
            // line 288
            if (($context["day"] == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 288))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 289
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                            </select>

                            ";
        // line 294
        $this->displayBlock('component_address_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 301
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 294
    public function block_component_address_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day_error"));

        // line 295
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 295))) {
            // line 296
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 296)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 299
            echo "                                ";
        }
        // line 300
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 304
    public function block_component_address_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month"));

        // line 305
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"";
        // line 306
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayMonth]";
        } else {
            echo "birthdayMonth";
        }
        echo "\"
                                    class=\"custom-select";
        // line 307
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 307))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 308
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 308), "core", [], "any", false, false, false, 308), "loginRegistration", [], "any", false, false, false, 308), "birthdayFieldRequired", [], "any", false, false, false, 308)) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 309
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 309)) {
            // line 310
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 312
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                                    </option>
                                ";
        }
        // line 315
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 316
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                            ";
            // line 317
            if (($context["month"] == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 317))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 318
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                            </select>

                            ";
        // line 323
        $this->displayBlock('component_address_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 330
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 323
    public function block_component_address_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month_error"));

        // line 324
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 324))) {
            // line 325
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 325)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 328
            echo "                                ";
        }
        // line 329
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 333
    public function block_component_address_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year"));

        // line 334
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            ";
        // line 335
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 336
        echo "                            ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 337
        echo "
                            <select name=\"";
        // line 338
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayYear]";
        } else {
            echo "birthdayYear";
        }
        echo "\"
                                    class=\"custom-select";
        // line 339
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 339))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 340
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 340), "core", [], "any", false, false, false, 340), "loginRegistration", [], "any", false, false, false, 340), "birthdayFieldRequired", [], "any", false, false, false, 340)) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 341
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 341)) {
            // line 342
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 344
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                                    </option>
                                ";
        }
        // line 347
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 348
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                            ";
            // line 349
            if (($context["year"] == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 349))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 350
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                            </select>

                            ";
        // line 355
        $this->displayBlock('component_address_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 362
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 355
    public function block_component_address_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year_error"));

        // line 356
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 356))) {
            // line 357
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 357)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 360
            echo "                                ";
        }
        // line 361
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1744 => 361,  1741 => 360,  1738 => 357,  1735 => 356,  1725 => 355,  1714 => 362,  1712 => 355,  1708 => 353,  1699 => 350,  1693 => 349,  1688 => 348,  1683 => 347,  1677 => 344,  1673 => 342,  1671 => 341,  1667 => 340,  1661 => 339,  1652 => 338,  1649 => 337,  1646 => 336,  1644 => 335,  1641 => 334,  1631 => 333,  1621 => 329,  1618 => 328,  1615 => 325,  1612 => 324,  1602 => 323,  1591 => 330,  1589 => 323,  1585 => 321,  1576 => 318,  1570 => 317,  1565 => 316,  1560 => 315,  1554 => 312,  1550 => 310,  1548 => 309,  1544 => 308,  1538 => 307,  1529 => 306,  1526 => 305,  1516 => 304,  1506 => 300,  1503 => 299,  1500 => 296,  1497 => 295,  1487 => 294,  1476 => 301,  1474 => 294,  1470 => 292,  1461 => 289,  1455 => 288,  1450 => 287,  1445 => 286,  1439 => 283,  1435 => 281,  1433 => 280,  1429 => 279,  1423 => 278,  1414 => 277,  1410 => 276,  1407 => 275,  1397 => 274,  1386 => 364,  1384 => 333,  1381 => 332,  1379 => 304,  1376 => 303,  1374 => 274,  1371 => 273,  1361 => 272,  1347 => 268,  1342 => 267,  1332 => 266,  1322 => 367,  1319 => 366,  1317 => 272,  1314 => 271,  1311 => 266,  1308 => 265,  1298 => 264,  1286 => 256,  1284 => 253,  1283 => 252,  1279 => 250,  1269 => 249,  1259 => 262,  1256 => 261,  1252 => 259,  1250 => 249,  1247 => 248,  1244 => 247,  1241 => 246,  1231 => 245,  1221 => 236,  1218 => 235,  1215 => 234,  1212 => 233,  1202 => 232,  1189 => 228,  1184 => 226,  1177 => 224,  1174 => 223,  1164 => 222,  1150 => 218,  1147 => 217,  1137 => 216,  1126 => 237,  1124 => 232,  1121 => 231,  1119 => 222,  1116 => 221,  1114 => 216,  1111 => 215,  1108 => 214,  1105 => 213,  1103 => 212,  1100 => 211,  1090 => 210,  1079 => 239,  1077 => 210,  1074 => 209,  1064 => 208,  1054 => 243,  1050 => 241,  1048 => 208,  1045 => 207,  1042 => 206,  1032 => 205,  1022 => 199,  1019 => 198,  1016 => 195,  1013 => 194,  1003 => 193,  990 => 189,  981 => 188,  977 => 187,  973 => 186,  966 => 184,  963 => 183,  953 => 182,  939 => 178,  935 => 177,  932 => 176,  922 => 175,  911 => 200,  909 => 193,  906 => 192,  904 => 182,  901 => 181,  899 => 175,  896 => 174,  886 => 173,  876 => 169,  873 => 168,  870 => 165,  867 => 164,  857 => 163,  844 => 159,  835 => 158,  831 => 157,  827 => 156,  820 => 154,  817 => 153,  807 => 152,  793 => 148,  789 => 147,  786 => 146,  776 => 145,  765 => 170,  763 => 163,  760 => 162,  758 => 152,  755 => 151,  753 => 145,  750 => 144,  740 => 143,  729 => 202,  727 => 173,  724 => 172,  722 => 143,  719 => 142,  709 => 141,  697 => 133,  688 => 132,  684 => 131,  680 => 130,  675 => 127,  665 => 126,  652 => 122,  648 => 121,  645 => 120,  635 => 119,  625 => 137,  621 => 135,  619 => 126,  616 => 125,  614 => 119,  611 => 118,  608 => 117,  598 => 116,  588 => 112,  585 => 111,  582 => 108,  579 => 107,  569 => 106,  558 => 103,  549 => 100,  544 => 99,  540 => 97,  537 => 96,  532 => 95,  526 => 92,  521 => 89,  519 => 88,  509 => 86,  503 => 85,  498 => 84,  488 => 83,  474 => 79,  470 => 78,  467 => 77,  457 => 76,  446 => 113,  444 => 106,  441 => 105,  439 => 83,  436 => 82,  434 => 76,  431 => 75,  421 => 74,  410 => 138,  408 => 116,  405 => 115,  403 => 74,  400 => 73,  390 => 72,  380 => 64,  370 => 63,  356 => 58,  350 => 57,  346 => 56,  340 => 53,  334 => 52,  330 => 51,  327 => 50,  320 => 47,  315 => 44,  313 => 43,  310 => 42,  307 => 41,  304 => 40,  301 => 39,  299 => 38,  296 => 37,  293 => 36,  290 => 35,  288 => 34,  285 => 33,  282 => 32,  279 => 31,  277 => 30,  274 => 29,  272 => 28,  269 => 27,  265 => 25,  260 => 24,  252 => 23,  248 => 22,  240 => 17,  230 => 16,  227 => 15,  217 => 14,  203 => 10,  199 => 9,  196 => 8,  186 => 7,  176 => 70,  172 => 68,  170 => 67,  166 => 65,  164 => 63,  161 => 62,  159 => 14,  156 => 13,  154 => 7,  150 => 5,  147 => 4,  137 => 3,  127 => 264,  124 => 263,  122 => 245,  119 => 244,  117 => 205,  114 => 204,  112 => 141,  109 => 140,  107 => 72,  104 => 71,  101 => 3,  82 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Provides customer type, salutation, title, firstname, lastname and birthday fields for address forms (e.g. registering a user, creating or updating an address) #}
{% block component_address_personal_fields %}
    {% block component_address_personal_account_type %}
        {% if shopware.config.core.loginRegistration.showAccountTypeSelection and not hideCustomerTypeSelect %}
            <div class=\"form-row\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    {% block component_address_personal_account_type_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}accountType\">
                            {{ \"account.personalTypeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_account_type_select %}
                            {% if shopware.config.core.loginRegistration.showAccountTypeSelection %}
                                <select name=\"{% if prefix %}{{ prefix }}[accountType]{% else %}accountType{% endif %}\"
                                    id=\"{{ prefix }}accountType\"
                                    required=\"required\"
                                    class=\"custom-select contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company\"
                                    data-form-field-toggle-value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') }}\"
                                    data-form-field-toggle-scope=\"{% if scope == 'parent' %}parent{% else %}all{% endif %}\"
                                    {% if scope == 'parent' %}data-form-field-toggle-parent-selector={{ parentSelector }}{% endif %}
                                >
                            {% endif %}

                            {% set isCompany = false %}

                            {% if page.address.company or data.company is not empty %}
                                {% set isCompany  = true %}
                            {% endif %}

                            {% if accountType and accountType == constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') %}
                                {% set isCompany  = true %}
                            {% endif %}

                            {% set isLoginPage = false %}
                            {% if activeRoute == 'frontend.account.login.page' %}
                                {% set isLoginPage = true %}
                            {% endif %}

                            {% if isLoginPage %}
                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    {{ \"account.personalTypeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}

                            <option value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_PRIVATE') }}\"
                                {% if isCompany == false and isLoginPage == false %} selected=\"selected\"{% endif %}>
                                {{ \"account.personalTypePrivate\"|trans|sw_sanitize }}
                            </option>

                            <option value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') }}\"
                                {% if isCompany == true and isLoginPage == false %} selected=\"selected\"{% endif %}>
                                {{ \"account.personalTypeBusiness\"|trans|sw_sanitize }}
                            </option>
                        </select>
                    {% endblock %}

                    {% block component_address_personal_account_type_error %}
                    {% endblock %}
                </div>
            </div>
        {% elseif not hideCustomerTypeSelect %}
            <input type=\"hidden\" name=\"accountType\">
        {% endif %}
    {% endblock %}

    {% block component_address_personal_fields_salutation_title %}
        <div class=\"form-row\">
            {% block component_address_personal_fields_salutation %}
                <div class=\"form-group col-md-3 col-sm-6\">
                    {% block component_address_personal_fields_salutation_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}personalSalutation\">
                            {{ \"account.personalSalutationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_salutation_select %}
                        <select id=\"{{ prefix }}personalSalutation\"
                                class=\"custom-select{% if formViolations.getViolations('/salutationId') is not empty %} is-invalid{% endif %}\"
                                name=\"{% if prefix %}{{ prefix }}[salutationId]{% else %}salutationId{% endif %}\"
                                required=\"required\">
                            {% if not data.get('salutationId') %}
                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    {{ \"account.personalSalutationPlaceholder\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}
                            {% for salutation in page.salutations %}
                                <option {% if salutation.id == data.get('salutationId') %}
                                    selected=\"selected\"
                                {% endif %}
                                        value=\"{{ salutation.id }}\">
                                    {{ salutation.translated.displayName }}
                                </option>
                            {% endfor %}
                        </select>
                    {% endblock %}

                    {% block component_address_form_salutation_select_error %}
                        {% if formViolations.getViolations('/salutationId') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/salutationId'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_personal_fields_title %}
                {% if shopware.config.core.loginRegistration.showTitleField %}
                    <div class=\"form-group col-md-3 col-sm-6\">
                        {% block component_address_personal_fields_title_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}personalTitle\">
                                {{ \"account.personalTitleLabel\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_personal_fields_title_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"{{ prefix }}personalTitle\"
                                   placeholder=\"{{ \"account.personalTitlePlaceholder\"|trans|striptags }}\"
                                   name=\"{% if prefix %}{{ prefix }}[title]{% else %}title{% endif %}\"
                                   value=\"{{ data.get('title') }}\">
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block component_address_personal_fields_name %}
        <div class=\"form-row\">
            {% block component_address_personal_fields_first_name %}
                <div class=\"form-group col-sm-6\">
                    {% block component_address_personal_fields_first_name_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}personalFirstName\">
                            {{ \"account.personalFirstNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_fields_first_name_input %}
                        <input type=\"text\"
                               class=\"form-control{% if formViolations.getViolations('/firstName') is not empty %} is-invalid{% endif %}\"
                               autocomplete=\"section-personal given-name\"
                               id=\"{{ prefix }}personalFirstName\"
                               placeholder=\"{{ \"account.personalFirstNamePlaceholder\"|trans|striptags }}\"
                               name=\"{% if prefix %}{{ prefix }}[firstName]{% else %}firstName{% endif %}\"
                               value=\"{{ data.get('firstName') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_personal_fields_first_name_input_error %}
                        {% if formViolations.getViolations('/firstName') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/firstName'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_personal_fields_last_name %}
                <div class=\"form-group col-sm-6\">
                    {% block component_address_personal_fields_last_name_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}personalLastName\">
                            {{ \"account.personalLastNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_fields_last_name_input %}
                        <input type=\"text\"
                               class=\"form-control{% if formViolations.getViolations('/lastName') is not empty %} is-invalid{% endif %}\"
                               autocomplete=\"section-personal family-name\"
                               id=\"{{ prefix }}personalLastName\"
                               placeholder=\"{{ \"account.personalLastNamePlaceholder\"|trans|striptags }}\"
                               name=\"{% if prefix %}{{ prefix }}[lastName]{% else %}lastName{% endif %}\"
                               value=\"{{ data.get('lastName') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_personal_fields_last_name_input_error %}
                        {% if formViolations.getViolations('/lastName') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/lastName'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block component_address_personal_company %}
        {% if shopware.config.core.loginRegistration.showAccountTypeSelection and activeRoute == 'frontend.account.profile.page' %}
            <div class=\"js-field-toggle-contact-type-company\">
                {% block component_address_personal_company_fields %}
                    <div class=\"form-row\">
                        {% block component_address_personal_company_name %}
                            <div class=\"form-group col-12\">
                                {% if formViolations.getViolations(\"/company\") is not empty %}
                                    {% set violationPath = \"/company\" %}
                                {% endif %}

                                {% block component_address_personal_company_name_label %}
                                    <label class=\"form-label\" for=\"company\">
                                        {{ \"address.companyNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                    </label>
                                {% endblock %}

                                {% block component_address_personal_company_name_input %}
                                    <input type=\"text\"
                                           class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                           id=\"company\"
                                           placeholder=\"{{ \"address.companyNamePlaceholder\"|trans|striptags }}\"
                                           name=\"company\"
                                           value=\"{{ data.get('company') }}\"
                                           required=\"required\">
                                {% endblock %}

                                {% block component_address_personal_company_name_input_error %}
                                    {% if violationPath %}
                                        {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                    {% endif %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endif %}
    {% endblock %}

    {% block component_address_personal_vat_id %}
        {% if showVatIdField %}
            {% if shopware.config.core.loginRegistration.showAccountTypeSelection %}
                <div class=\"js-field-toggle-contact-type-company js-field-toggle-contact-type-vat-id\">
                    {% block component_address_personal_vat_id_fields %}
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                {% sw_include '@Storefront/storefront/component/address/address-personal-vat-id.html.twig' with {
                                    'vatIds': data.get('vatIds'),
                                    'editMode': true
                                } %}
                            </div>
                        </div>
                    {% endblock %}
                </div>
            {% endif %}
        {% endif %}
    {% endblock %}

    {% block component_address_personal_fields_birthday %}
        {% if showBirthdayField %}
            {% block component_address_personal_fields_birthday_label %}
                <label for=\"{{ prefix }}personalBirthday\">
                    {{ \"account.personalBirthdayLabel\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.birthdayFieldRequired ? \"general.required\"|trans|sw_sanitize }}
                </label>
            {% endblock %}

            {% block component_address_personal_fields_birthday_selects %}
                <div class=\"form-row\">
                    {% block component_address_personal_fields_birthday_select_day %}
                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"{{ prefix }}personalBirthday\"
                                    name=\"{% if prefix %}{{ prefix }}[birthdayDay]{% else %}birthdayDay{% endif %}\"
                                    class=\"custom-select{% if formViolations.getViolations('/birthdayDay') is not empty %} is-invalid{% endif %}\"
                                    {{ shopware.config.core.loginRegistration.birthdayFieldRequired ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayDay') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectDay\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for day in range(1, 31) %}
                                    <option value=\"{{ day }}\"
                                            {% if day == data.get('birthdayDay') %} selected=\"selected\"{% endif %}>
                                        {{ day }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_day_error %}
                                {% if formViolations.getViolations('/birthdayDay') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayDay'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_address_personal_fields_birthday_select_month %}
                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"{% if prefix %}{{ prefix }}[birthdayMonth]{% else %}birthdayMonth{% endif %}\"
                                    class=\"custom-select{% if formViolations.getViolations('/birthdayMonth') is not empty %} is-invalid{% endif %}\"
                                    {{ shopware.config.core.loginRegistration.birthdayFieldRequired ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayMonth') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectMonth\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for month in range(1, 12) %}
                                    <option value=\"{{ month }}\"
                                            {% if month == data.get('birthdayMonth') %} selected=\"selected\"{% endif %}>
                                        {{ month }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_month_error %}
                                {% if formViolations.getViolations('/birthdayMonth') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayMonth'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_address_personal_fields_birthday_select_year %}
                        <div class=\"form-group col-md-2 col-4\">
                            {% set currentYear = \"now\"|date('Y') %}
                            {% set startYear = currentYear - 120 %}

                            <select name=\"{% if prefix %}{{ prefix }}[birthdayYear]{% else %}birthdayYear{% endif %}\"
                                    class=\"custom-select{% if formViolations.getViolations('/birthdayYear') is not empty %} is-invalid{% endif %}\"
                                    {{ shopware.config.core.loginRegistration.birthdayFieldRequired ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayYear') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectYear\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for year in range(currentYear, startYear) %}
                                    <option value=\"{{ year }}\"
                                            {% if year == data.get('birthdayYear') %} selected=\"selected\"{% endif %}>
                                        {{ year }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_year_error %}
                                {% if formViolations.getViolations('/birthdayYear') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayYear'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        {% endif %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/address/address-personal.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal.html.twig");
    }
}
