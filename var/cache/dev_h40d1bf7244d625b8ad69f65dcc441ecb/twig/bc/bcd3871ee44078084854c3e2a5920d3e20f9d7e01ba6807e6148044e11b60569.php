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

/* @Storefront/storefront/component/account/register.html.twig */
class __TwigTemplate_ab02a336dfc35521e941de96da05fda28994f709b6ba42e68a1f89ee92cb13dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_register' => [$this, 'block_component_account_register'],
            'component_account_register_header' => [$this, 'block_component_account_register_header'],
            'component_account_register_form' => [$this, 'block_component_account_register_form'],
            'component_account_register_form_csrf' => [$this, 'block_component_account_register_form_csrf'],
            'component_account_register_redirect' => [$this, 'block_component_account_register_redirect'],
            'component_account_register_form_action' => [$this, 'block_component_account_register_form_action'],
            'component_account_register_personal' => [$this, 'block_component_account_register_personal'],
            'component_account_register_personal_fields' => [$this, 'block_component_account_register_personal_fields'],
            'component_account_register_personal_address_fields' => [$this, 'block_component_account_register_personal_address_fields'],
            'component_account_register_company_fields' => [$this, 'block_component_account_register_company_fields'],
            'component_account_register_personal_mail' => [$this, 'block_component_account_register_personal_mail'],
            'component_account_register_personal_mail_label' => [$this, 'block_component_account_register_personal_mail_label'],
            'component_account_register_personal_mail_input' => [$this, 'block_component_account_register_personal_mail_input'],
            'component_account_register_personal_mail_input_error' => [$this, 'block_component_account_register_personal_mail_input_error'],
            'component_account_register_personal_mail_confirmation' => [$this, 'block_component_account_register_personal_mail_confirmation'],
            'component_account_register_personal_mail_confirmation_label' => [$this, 'block_component_account_register_personal_mail_confirmation_label'],
            'component_account_register_personal_mail_confirmation_input' => [$this, 'block_component_account_register_personal_mail_confirmation_input'],
            'component_account_register_personal_mail_confirmation_input_error' => [$this, 'block_component_account_register_personal_mail_confirmation_input_error'],
            'component_account_register_personal_password' => [$this, 'block_component_account_register_personal_password'],
            'component_account_register_personal_password_label' => [$this, 'block_component_account_register_personal_password_label'],
            'component_account_register_personal_password_input' => [$this, 'block_component_account_register_personal_password_input'],
            'component_account_register_personal_password_description' => [$this, 'block_component_account_register_personal_password_description'],
            'component_account_register_personal_password_input_error' => [$this, 'block_component_account_register_personal_password_input_error'],
            'component_account_register_personal_password_confirmation' => [$this, 'block_component_account_register_personal_password_confirmation'],
            'component_account_register_personal_password_confirmation_label' => [$this, 'block_component_account_register_personal_password_confirmation_label'],
            'component_account_register_personal_password_confirmation_input' => [$this, 'block_component_account_register_personal_password_confirmation_input'],
            'component_account_register_personal_password_confirmation_input_error' => [$this, 'block_component_account_register_personal_password_confirmation_input_error'],
            'component_account_register_personal_account_fields' => [$this, 'block_component_account_register_personal_account_fields'],
            'component_account_register_address' => [$this, 'block_component_account_register_address'],
            'component_account_register_address_fields' => [$this, 'block_component_account_register_address_fields'],
            'component_account_register_address_billing' => [$this, 'block_component_account_register_address_billing'],
            'component_account_register_address_billing_header' => [$this, 'block_component_account_register_address_billing_header'],
            'component_account_register_address_billing_fields' => [$this, 'block_component_account_register_address_billing_fields'],
            'component_account_register_address_different_shipping' => [$this, 'block_component_account_register_address_different_shipping'],
            'component_account_register_address_different_shipping_control' => [$this, 'block_component_account_register_address_different_shipping_control'],
            'component_account_register_address_different_shipping_input' => [$this, 'block_component_account_register_address_different_shipping_input'],
            'component_account_register_address_different_shipping_label' => [$this, 'block_component_account_register_address_different_shipping_label'],
            'component_account_register_address_shipping' => [$this, 'block_component_account_register_address_shipping'],
            'component_account_register_address_shipping_header' => [$this, 'block_component_account_register_address_shipping_header'],
            'component_account_register_address_shipping_fields' => [$this, 'block_component_account_register_address_shipping_fields'],
            'component_account_register_address_shipping_fields_personal' => [$this, 'block_component_account_register_address_shipping_fields_personal'],
            'component_account_register_address_shipping_fields_address' => [$this, 'block_component_account_register_address_shipping_fields_address'],
            'component_account_register_captcha' => [$this, 'block_component_account_register_captcha'],
            'component_account_register_privacy' => [$this, 'block_component_account_register_privacy'],
            'component_account_register_required_fields' => [$this, 'block_component_account_register_required_fields'],
            'component_account_register_submit' => [$this, 'block_component_account_register_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/register.html.twig"));

        // line 1
        $this->displayBlock('component_account_register', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_account_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register"));

        // line 2
        echo "    <div class=\"card register-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $this->displayBlock('component_account_register_header', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('component_account_register_form', $context, $blocks);
        // line 355
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_component_account_register_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_header"));

        // line 5
        echo "                ";
        if (($context["cardTitle"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-title\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["cardTitle"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_component_account_register_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form"));

        // line 13
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.register.save");
        echo "\"
                      class=\"register-form\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    ";
        // line 19
        $this->displayBlock('component_account_register_form_csrf', $context, $blocks);
        // line 22
        echo "
                    ";
        // line 23
        $this->displayBlock('component_account_register_redirect', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('component_account_register_form_action', $context, $blocks);
        // line 42
        echo "
                    ";
        // line 43
        $this->displayBlock('component_account_register_personal', $context, $blocks);
        // line 250
        echo "
                    ";
        // line 251
        $this->displayBlock('component_account_register_address', $context, $blocks);
        // line 330
        echo "
                    ";
        // line 331
        $this->displayBlock('component_account_register_captcha', $context, $blocks);
        // line 334
        echo "
                    ";
        // line 335
        $this->displayBlock('component_account_register_privacy', $context, $blocks);
        // line 338
        echo "
                    ";
        // line 339
        $this->displayBlock('component_account_register_required_fields', $context, $blocks);
        // line 344
        echo "
                    ";
        // line 345
        $this->displayBlock('component_account_register_submit', $context, $blocks);
        // line 353
        echo "                </form>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_component_account_register_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form_csrf"));

        // line 20
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.register.save");
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_component_account_register_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_redirect"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_redirect"));

        // line 24
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["redirectTo"] ?? null), "html", null, true);
        echo "\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["redirectParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_component_account_register_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form_action"));

        // line 34
        echo "                        <input type=\"hidden\"
                               name=\"errorRoute\"
                               value=\"frontend.account.register.page\"/>

                        <input type=\"hidden\"
                               name=\"errorParameters\"
                               value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["errorParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_component_account_register_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal"));

        // line 44
        echo "                        <div class=\"register-personal\">
                            ";
        // line 45
        $this->displayBlock('component_account_register_personal_fields', $context, $blocks);
        // line 248
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_component_account_register_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_fields"));

        // line 46
        echo "                                ";
        $this->displayBlock('component_account_register_personal_address_fields', $context, $blocks);
        // line 52
        echo "
                                ";
        // line 53
        $this->displayBlock('component_account_register_company_fields', $context, $blocks);
        // line 59
        echo "
                                ";
        // line 60
        ob_start();
        // line 61
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_mail', $context, $blocks);
        // line 91
        echo "                                ";
        $context["formGroupMail"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "
                                ";
        // line 93
        ob_start();
        // line 94
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_mail_confirmation', $context, $blocks);
        // line 129
        echo "                                ";
        $context["formGroupMailConfirmation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        echo "
                                ";
        // line 131
        ob_start();
        // line 132
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_password', $context, $blocks);
        // line 181
        echo "                                ";
        $context["formGroupPassword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        echo "
                                ";
        // line 183
        ob_start();
        // line 184
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_password_confirmation', $context, $blocks);
        // line 221
        echo "                                ";
        $context["formGroupPasswordConfirmation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 222
        echo "
                                ";
        // line 223
        $this->displayBlock('component_account_register_personal_account_fields', $context, $blocks);
        // line 247
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_component_account_register_personal_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_address_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_address_fields"));

        // line 47
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/component/account/register.html.twig", 47)->display(twig_array_merge($context, ["showBirthdayField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["shopware"] ?? null), "config", [], "any", false, false, false, 48), "core", [], "any", false, false, false, 48), "loginRegistration", [], "any", false, false, false, 48), "showBirthdayField", [], "any", false, false, false, 48), "accountType" => twig_get_attribute($this->env, $this->source,         // line 49
($context["data"] ?? null), "get", [0 => "accountType"], "method", false, false, false, 49)]));
        // line 51
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_component_account_register_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_company_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_company_fields"));

        // line 54
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-company.html.twig", "@Storefront/storefront/component/account/register.html.twig", 54)->display(twig_array_merge($context, ["prefix" => "billingAddress", "address" => twig_get_attribute($this->env, $this->source,         // line 56
($context["data"] ?? null), "get", [0 => "billingAddress"], "method", false, false, false, 56)]));
        // line 58
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_component_account_register_personal_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail"));

        // line 62
        echo "                                        ";
        $this->displayBlock('component_account_register_personal_mail_label', $context, $blocks);
        // line 68
        echo "
                                        ";
        // line 69
        $this->displayBlock('component_account_register_personal_mail_input', $context, $blocks);
        // line 82
        echo "
                                        ";
        // line 83
        $this->displayBlock('component_account_register_personal_mail_input_error', $context, $blocks);
        // line 90
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_component_account_register_personal_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_label"));

        // line 63
        echo "                                            <label class=\"form-label\"
                                                   for=\"personalMail\">
                                                ";
        // line 65
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                            </label>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_component_account_register_personal_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_input"));

        // line 70
        echo "                                            <input type=\"email\"
                                                   class=\"form-control";
        // line 71
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 71))) {
            echo " is-invalid";
        }
        echo "\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMail\"
                                                   placeholder=\"";
        // line 74
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"email\"
                                                   value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "email"], "method", false, false, false, 76), "html", null, true);
        echo "\"
                                                   ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 77), "core", [], "any", false, false, false, 77), "loginRegistration", [], "any", false, false, false, 77), "requireEmailConfirmation", [], "any", false, false, false, 77)) {
            // line 78
            echo "                                                   data-form-validation-equal=\"personalMail\"
                                                   ";
        }
        // line 80
        echo "                                                   required=\"required\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_component_account_register_personal_mail_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_input_error"));

        // line 84
        echo "                                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 84))) {
            // line 85
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 85)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 88
            echo "                                            ";
        }
        // line 89
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_component_account_register_personal_mail_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation"));

        // line 95
        echo "                                        ";
        $this->displayBlock('component_account_register_personal_mail_confirmation_label', $context, $blocks);
        // line 101
        echo "
                                        ";
        // line 102
        $this->displayBlock('component_account_register_personal_mail_confirmation_input', $context, $blocks);
        // line 114
        echo "
                                        ";
        // line 115
        $this->displayBlock('component_account_register_personal_mail_confirmation_input_error', $context, $blocks);
        // line 128
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_component_account_register_personal_mail_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_label"));

        // line 96
        echo "                                            <label class=\"form-label\"
                                                   for=\"personalMailConfirmation\">
                                                ";
        // line 98
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                            </label>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_component_account_register_personal_mail_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_input"));

        // line 103
        echo "                                            <input type=\"email\"
                                                   class=\"form-control";
        // line 104
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 104)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/emailConfirmation"], "method", false, false, false, 104)))) {
            echo " is-invalid";
        }
        echo "\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMailConfirmation\"
                                                   placeholder=\"";
        // line 107
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"emailConfirmation\"
                                                   value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "emailConfirmation"], "method", false, false, false, 109), "html", null, true);
        echo "\"
                                                   data-form-validation-equal=\"personalMail\"
                                                   data-form-validation-equal-message=\"";
        // line 111
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationInvalidMessage")), "html", null, true);
        echo "\"
                                                   required=\"required\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_component_account_register_personal_mail_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_input_error"));

        // line 116
        echo "                                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 116))) {
            // line 117
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 117)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 120
            echo "                                            ";
        }
        // line 121
        echo "
                                            ";
        // line 122
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/emailConfirmation"], "method", false, false, false, 122))) {
            // line 123
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 123)->display(twig_array_merge($context, ["violationPath" => "/emailConfirmation"]));
            // line 126
            echo "                                            ";
        }
        // line 127
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_component_account_register_personal_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password"));

        // line 133
        echo "                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            ";
        // line 134
        $this->displayBlock('component_account_register_personal_password_label', $context, $blocks);
        // line 140
        echo "
                                            ";
        // line 141
        $this->displayBlock('component_account_register_personal_password_input', $context, $blocks);
        // line 160
        echo "
                                            ";
        // line 161
        $this->displayBlock('component_account_register_personal_password_description', $context, $blocks);
        // line 171
        echo "
                                            ";
        // line 172
        $this->displayBlock('component_account_register_personal_password_input_error', $context, $blocks);
        // line 179
        echo "                                        </span>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_component_account_register_personal_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_label"));

        // line 135
        echo "                                                <label class=\"form-label\"
                                                       for=\"personalPassword\">
                                                    ";
        // line 137
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                </label>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_component_account_register_personal_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_input"));

        // line 142
        echo "                                                <input type=\"password\"
                                                       class=\"form-control";
        // line 143
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 143))) {
            echo " is-invalid";
        }
        echo "\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPassword\"
                                                       placeholder=\"";
        // line 146
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordPlaceholder")), "html", null, true);
        echo "\"
                                                       name=\"password\"
                                                       minlength=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 148), "core", [], "any", false, false, false, 148), "loginRegistration", [], "any", false, false, false, 148), "passwordMinLength", [], "any", false, false, false, 148), "html", null, true);
        echo "\"
                                                       ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 149), "core", [], "any", false, false, false, 149), "loginRegistration", [], "any", false, false, false, 149), "requirePasswordConfirmation", [], "any", false, false, false, 149)) {
            // line 150
            echo "                                                       data-form-validation-equal=\"newPassword\"
                                                       ";
        }
        // line 152
        echo "                                                       ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 152), "core", [], "any", false, false, false, 152), "loginRegistration", [], "any", false, false, false, 152), "passwordMinLength", [], "any", false, false, false, 152) != 0)) {
            // line 153
            echo "                                                       data-form-validation-length=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 153), "core", [], "any", false, false, false, 153), "loginRegistration", [], "any", false, false, false, 153), "passwordMinLength", [], "any", false, false, false, 153), "html", null, true);
            echo "\"
                                                       data-form-validation-length-message=\" ";
            // line 154
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 155
($context["shopware"] ?? null), "config", [], "any", false, false, false, 155), "core", [], "any", false, false, false, 155), "loginRegistration", [], "any", false, false, false, 155), "passwordMinLength", [], "any", false, false, false, 155)]));
            // line 156
            echo "\"
                                                       ";
        }
        // line 158
        echo "                                                       required=\"required\">
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 161
    public function block_component_account_register_personal_password_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_description"));

        // line 162
        echo "                                                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 162), "core", [], "any", false, false, false, 162), "loginRegistration", [], "any", false, false, false, 162), "passwordMinLength", [], "any", false, false, false, 162) != 0)) {
            // line 163
            echo "                                                    <small class=\"form-text js-validation-message\"
                                                           data-form-validation-length-text=\"true\">
                                                        ";
            // line 165
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 166
($context["shopware"] ?? null), "config", [], "any", false, false, false, 166), "core", [], "any", false, false, false, 166), "loginRegistration", [], "any", false, false, false, 166), "passwordMinLength", [], "any", false, false, false, 166)]));
            // line 167
            echo "
                                                    </small>
                                                ";
        }
        // line 170
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_component_account_register_personal_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_input_error"));

        // line 173
        echo "                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 173))) {
            // line 174
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 174)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 177
            echo "                                                ";
        }
        // line 178
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_component_account_register_personal_password_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation"));

        // line 185
        echo "                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            ";
        // line 186
        $this->displayBlock('component_account_register_personal_password_confirmation_label', $context, $blocks);
        // line 192
        echo "
                                            ";
        // line 193
        $this->displayBlock('component_account_register_personal_password_confirmation_input', $context, $blocks);
        // line 205
        echo "
                                            ";
        // line 206
        $this->displayBlock('component_account_register_personal_password_confirmation_input_error', $context, $blocks);
        // line 219
        echo "                                        </span>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_component_account_register_personal_password_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_label"));

        // line 187
        echo "                                                <label class=\"form-label\"
                                                       for=\"personalPasswordConfirmation\">
                                                    ";
        // line 189
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                </label>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_component_account_register_personal_password_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_input"));

        // line 194
        echo "                                                <input type=\"password\"
                                                       class=\"form-control";
        // line 195
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 195)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/passwordConfirmation"], "method", false, false, false, 195)))) {
            echo " is-invalid";
        }
        echo "\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPasswordConfirmation\"
                                                       placeholder=\"";
        // line 198
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationPlaceholder")), "html", null, true);
        echo "\"
                                                       name=\"passwordConfirmation\"
                                                       minlength=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 200), "core", [], "any", false, false, false, 200), "loginRegistration", [], "any", false, false, false, 200), "passwordMinLength", [], "any", false, false, false, 200), "html", null, true);
        echo "\"
                                                       data-form-validation-equal=\"newPassword\"
                                                       data-form-validation-equal-message=\"";
        // line 202
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationInvalidMessage")), "html", null, true);
        echo "\"
                                                       required=\"required\">
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_component_account_register_personal_password_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_input_error"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_input_error"));

        // line 207
        echo "                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 207))) {
            // line 208
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 208)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 211
            echo "                                                ";
        }
        // line 212
        echo "
                                                ";
        // line 213
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/passwordConfirmation"], "method", false, false, false, 213))) {
            // line 214
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 214)->display(twig_array_merge($context, ["violationPath" => "/passwordConfirmation"]));
            // line 217
            echo "                                                ";
        }
        // line 218
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 223
    public function block_component_account_register_personal_account_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_account_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_account_fields"));

        // line 224
        echo "                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 226
        echo twig_escape_filter($this->env, ($context["formGroupMail"] ?? null), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 229), "core", [], "any", false, false, false, 229), "loginRegistration", [], "any", false, false, false, 229), "requireEmailConfirmation", [], "any", false, false, false, 229)) {
            // line 230
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupMailConfirmation"] ?? null), "html", null, true);
            echo "
                                            ";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 231
($context["shopware"] ?? null), "config", [], "any", false, false, false, 231), "core", [], "any", false, false, false, 231), "loginRegistration", [], "any", false, false, false, 231), "requirePasswordConfirmation", [], "any", false, false, false, 231)) {
            // line 232
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupPassword"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 234
        echo "                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 236
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 236), "core", [], "any", false, false, false, 236), "loginRegistration", [], "any", false, false, false, 236), "requireEmailConfirmation", [], "any", false, false, false, 236) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 236), "core", [], "any", false, false, false, 236), "loginRegistration", [], "any", false, false, false, 236), "requirePasswordConfirmation", [], "any", false, false, false, 236))) {
            // line 237
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupPassword"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 239
        echo "                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 241
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 241), "core", [], "any", false, false, false, 241), "loginRegistration", [], "any", false, false, false, 241), "requirePasswordConfirmation", [], "any", false, false, false, 241)) {
            // line 242
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupPasswordConfirmation"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 244
        echo "                                        </div>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 251
    public function block_component_account_register_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address"));

        // line 252
        echo "                        <div class=\"register-address\">
                            ";
        // line 253
        $this->displayBlock('component_account_register_address_fields', $context, $blocks);
        // line 328
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_component_account_register_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_fields"));

        // line 254
        echo "                                ";
        $this->displayBlock('component_account_register_address_billing', $context, $blocks);
        // line 272
        echo "
                                ";
        // line 273
        $this->displayBlock('component_account_register_address_different_shipping', $context, $blocks);
        // line 327
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 254
    public function block_component_account_register_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing"));

        // line 255
        echo "                                    <div class=\"register-billing\">
                                        ";
        // line 256
        $this->displayBlock('component_account_register_address_billing_header', $context, $blocks);
        // line 261
        echo "
                                        ";
        // line 262
        $this->displayBlock('component_account_register_address_billing_fields', $context, $blocks);
        // line 270
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_component_account_register_address_billing_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing_header"));

        // line 257
        echo "                                            <div class=\"card-title\">
                                                ";
        // line 258
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAddressBillingHeader"));
        echo "
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_component_account_register_address_billing_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing_fields"));

        // line 263
        echo "                                            ";
        // line 264
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-form.html.twig", "@Storefront/storefront/component/account/register.html.twig", 264)->display(twig_array_merge($context, ["prefix" => "billingAddress", "data" => twig_get_attribute($this->env, $this->source,         // line 266
($context["data"] ?? null), "get", [0 => "billingAddress"], "method", false, false, false, 266), "hasSelectedBusiness" => (twig_get_attribute($this->env, $this->source,         // line 267
($context["data"] ?? null), "get", [0 => "accountType"], "method", false, false, false, 267) == twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"))]));
        // line 269
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 273
    public function block_component_account_register_address_different_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping"));

        // line 274
        echo "                                    <div>
                                        ";
        // line 275
        $this->displayBlock('component_account_register_address_different_shipping_control', $context, $blocks);
        // line 297
        echo "
                                        ";
        // line 298
        $this->displayBlock('component_account_register_address_shipping', $context, $blocks);
        // line 325
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_component_account_register_address_different_shipping_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_control"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_control"));

        // line 276
        echo "                                            <div class=\"custom-control custom-checkbox register-different-shipping\">
                                                ";
        // line 277
        $this->displayBlock('component_account_register_address_different_shipping_input', $context, $blocks);
        // line 288
        echo "
                                                ";
        // line 289
        $this->displayBlock('component_account_register_address_different_shipping_label', $context, $blocks);
        // line 295
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 277
    public function block_component_account_register_address_different_shipping_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_input"));

        // line 278
        echo "                                                    <input type=\"checkbox\"
                                                           class=\"custom-control-input js-different-shipping-checkbox\"
                                                           name=\"differentShippingAddress\"
                                                           value=\"1\"
                                                           id=\"differentShippingAddress\"
                                                           ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "differentShippingAddress"], "method", false, false, false, 283)) {
            echo "checked=\"checked\"";
        }
        // line 284
        echo "                                                           data-form-field-toggle=\"true\"
                                                           data-form-field-toggle-target=\".js-form-field-toggle-shipping-address\"
                                                           data-form-field-toggle-value=\"true\">
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 289
    public function block_component_account_register_address_different_shipping_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_label"));

        // line 290
        echo "                                                    <label class=\"custom-control-label no-validation\"
                                                           for=\"differentShippingAddress\">
                                                        ";
        // line 292
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerDifferentShipping"));
        echo "
                                                    </label>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 298
    public function block_component_account_register_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping"));

        // line 299
        echo "                                            <div class=\"register-shipping js-form-field-toggle-shipping-address d-none\">
                                                ";
        // line 300
        $this->displayBlock('component_account_register_address_shipping_header', $context, $blocks);
        // line 305
        echo "
                                                ";
        // line 306
        $this->displayBlock('component_account_register_address_shipping_fields', $context, $blocks);
        // line 323
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 300
    public function block_component_account_register_address_shipping_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_header"));

        // line 301
        echo "                                                    <div class=\"card-title\">
                                                        ";
        // line 302
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAddressShippingHeader"));
        echo "
                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 306
    public function block_component_account_register_address_shipping_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields"));

        // line 307
        echo "                                                    ";
        $this->displayBlock('component_account_register_address_shipping_fields_personal', $context, $blocks);
        // line 315
        echo "
                                                    ";
        // line 316
        $this->displayBlock('component_account_register_address_shipping_fields_address', $context, $blocks);
        // line 322
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 307
    public function block_component_account_register_address_shipping_fields_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields_personal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields_personal"));

        // line 308
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/component/account/register.html.twig", 308)->display(twig_array_merge($context, ["prefix" => "shippingAddress", "data" => twig_get_attribute($this->env, $this->source,         // line 310
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 310), "hideCustomerTypeSelect" => true, "accountType" => twig_get_attribute($this->env, $this->source,         // line 312
($context["data"] ?? null), "get", [0 => "accountType"], "method", false, false, false, 312)]));
        // line 314
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 316
    public function block_component_account_register_address_shipping_fields_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields_address"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields_address"));

        // line 317
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-form.html.twig", "@Storefront/storefront/component/account/register.html.twig", 317)->display(twig_array_merge($context, ["prefix" => "shippingAddress", "data" => twig_get_attribute($this->env, $this->source,         // line 319
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 319)]));
        // line 321
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 331
    public function block_component_account_register_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_captcha"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_captcha"));

        // line 332
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/captcha/base.html.twig", "@Storefront/storefront/component/account/register.html.twig", 332)->display(twig_array_merge($context, ["captchas" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 332), "core", [], "any", false, false, false, 332), "basicInformation", [], "any", false, false, false, 332), "activeCaptchas", [], "any", false, false, false, 332)]));
        // line 333
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 335
    public function block_component_account_register_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_privacy"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_privacy"));

        // line 336
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/privacy-notice.html.twig", "@Storefront/storefront/component/account/register.html.twig", 336)->display($context);
        // line 337
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 339
    public function block_component_account_register_required_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_required_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_required_fields"));

        // line 340
        echo "                        <p class=\"register-required-info\">
                            ";
        // line 341
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                        </p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 345
    public function block_component_account_register_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_submit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_submit"));

        // line 346
        echo "                        <div class=\"register-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-lg\">
                                ";
        // line 349
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerSubmit"));
        echo "
                            </button>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1652 => 349,  1647 => 346,  1637 => 345,  1624 => 341,  1621 => 340,  1611 => 339,  1601 => 337,  1598 => 336,  1588 => 335,  1578 => 333,  1575 => 332,  1565 => 331,  1555 => 321,  1553 => 319,  1551 => 317,  1541 => 316,  1531 => 314,  1529 => 312,  1528 => 310,  1526 => 308,  1516 => 307,  1506 => 322,  1504 => 316,  1501 => 315,  1498 => 307,  1488 => 306,  1475 => 302,  1472 => 301,  1462 => 300,  1451 => 323,  1449 => 306,  1446 => 305,  1444 => 300,  1441 => 299,  1431 => 298,  1418 => 292,  1414 => 290,  1404 => 289,  1391 => 284,  1387 => 283,  1380 => 278,  1370 => 277,  1359 => 295,  1357 => 289,  1354 => 288,  1352 => 277,  1349 => 276,  1339 => 275,  1328 => 325,  1326 => 298,  1323 => 297,  1321 => 275,  1318 => 274,  1308 => 273,  1298 => 269,  1296 => 267,  1295 => 266,  1293 => 264,  1291 => 263,  1281 => 262,  1268 => 258,  1265 => 257,  1255 => 256,  1244 => 270,  1242 => 262,  1239 => 261,  1237 => 256,  1234 => 255,  1224 => 254,  1214 => 327,  1212 => 273,  1209 => 272,  1206 => 254,  1196 => 253,  1185 => 328,  1183 => 253,  1180 => 252,  1170 => 251,  1158 => 244,  1152 => 242,  1150 => 241,  1146 => 239,  1140 => 237,  1138 => 236,  1134 => 234,  1128 => 232,  1126 => 231,  1121 => 230,  1119 => 229,  1113 => 226,  1109 => 224,  1099 => 223,  1089 => 218,  1086 => 217,  1083 => 214,  1081 => 213,  1078 => 212,  1075 => 211,  1072 => 208,  1069 => 207,  1059 => 206,  1046 => 202,  1041 => 200,  1036 => 198,  1028 => 195,  1025 => 194,  1015 => 193,  1001 => 189,  997 => 187,  987 => 186,  976 => 219,  974 => 206,  971 => 205,  969 => 193,  966 => 192,  964 => 186,  961 => 185,  951 => 184,  941 => 178,  938 => 177,  935 => 174,  932 => 173,  922 => 172,  912 => 170,  907 => 167,  905 => 166,  904 => 165,  900 => 163,  897 => 162,  887 => 161,  876 => 158,  872 => 156,  870 => 155,  869 => 154,  864 => 153,  861 => 152,  857 => 150,  855 => 149,  851 => 148,  846 => 146,  838 => 143,  835 => 142,  825 => 141,  811 => 137,  807 => 135,  797 => 134,  786 => 179,  784 => 172,  781 => 171,  779 => 161,  776 => 160,  774 => 141,  771 => 140,  769 => 134,  766 => 133,  756 => 132,  746 => 127,  743 => 126,  740 => 123,  738 => 122,  735 => 121,  732 => 120,  729 => 117,  726 => 116,  716 => 115,  703 => 111,  698 => 109,  693 => 107,  685 => 104,  682 => 103,  672 => 102,  658 => 98,  654 => 96,  644 => 95,  634 => 128,  632 => 115,  629 => 114,  627 => 102,  624 => 101,  621 => 95,  611 => 94,  601 => 89,  598 => 88,  595 => 85,  592 => 84,  582 => 83,  571 => 80,  567 => 78,  565 => 77,  561 => 76,  556 => 74,  548 => 71,  545 => 70,  535 => 69,  521 => 65,  517 => 63,  507 => 62,  497 => 90,  495 => 83,  492 => 82,  490 => 69,  487 => 68,  484 => 62,  474 => 61,  464 => 58,  462 => 56,  460 => 54,  450 => 53,  440 => 51,  438 => 49,  437 => 48,  435 => 47,  425 => 46,  415 => 247,  413 => 223,  410 => 222,  407 => 221,  404 => 184,  402 => 183,  399 => 182,  396 => 181,  393 => 132,  391 => 131,  388 => 130,  385 => 129,  382 => 94,  380 => 93,  377 => 92,  374 => 91,  371 => 61,  369 => 60,  366 => 59,  364 => 53,  361 => 52,  358 => 46,  348 => 45,  337 => 248,  335 => 45,  332 => 44,  322 => 43,  310 => 40,  302 => 34,  292 => 33,  280 => 30,  273 => 26,  269 => 24,  259 => 23,  246 => 20,  236 => 19,  225 => 353,  223 => 345,  220 => 344,  218 => 339,  215 => 338,  213 => 335,  210 => 334,  208 => 331,  205 => 330,  203 => 251,  200 => 250,  198 => 43,  195 => 42,  193 => 33,  190 => 32,  188 => 23,  185 => 22,  183 => 19,  173 => 13,  163 => 12,  153 => 10,  147 => 7,  144 => 6,  141 => 5,  131 => 4,  119 => 355,  117 => 12,  114 => 11,  112 => 4,  108 => 2,  89 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_account_register %}
    <div class=\"card register-card\">
        <div class=\"card-body\">
            {% block component_account_register_header %}
                {% if cardTitle %}
                    <div class=\"card-title\">
                        {{ cardTitle }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_account_register_form %}
                <form action=\"{{ path('frontend.account.register.save') }}\"
                      class=\"register-form\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    {% block component_account_register_form_csrf %}
                        {{ sw_csrf('frontend.account.register.save') }}
                    {% endblock %}

                    {% block component_account_register_redirect %}
                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"{{ redirectTo }}\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"{{ redirectParameters }}\">
                    {% endblock %}

                    {% block component_account_register_form_action %}
                        <input type=\"hidden\"
                               name=\"errorRoute\"
                               value=\"frontend.account.register.page\"/>

                        <input type=\"hidden\"
                               name=\"errorParameters\"
                               value=\"{{ errorParameters }}\">
                    {% endblock %}

                    {% block component_account_register_personal %}
                        <div class=\"register-personal\">
                            {% block component_account_register_personal_fields %}
                                {% block component_account_register_personal_address_fields %}
                                    {% sw_include '@Storefront/storefront/component/address/address-personal.html.twig' with {
                                        'showBirthdayField': shopware.config.core.loginRegistration.showBirthdayField,
                                        'accountType': data.get('accountType')
                                    } %}
                                {% endblock %}

                                {% block component_account_register_company_fields %}
                                    {% sw_include '@Storefront/storefront/component/address/address-personal-company.html.twig' with {
                                        'prefix': 'billingAddress',
                                        'address': data.get('billingAddress')
                                    } %}
                                {% endblock %}

                                {% set formGroupMail %}
                                    {% block component_account_register_personal_mail %}
                                        {% block component_account_register_personal_mail_label %}
                                            <label class=\"form-label\"
                                                   for=\"personalMail\">
                                                {{ \"account.personalMailLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                            </label>
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_input %}
                                            <input type=\"email\"
                                                   class=\"form-control{% if formViolations.getViolations('/email') is not empty %} is-invalid{% endif %}\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMail\"
                                                   placeholder=\"{{ \"account.personalMailPlaceholder\"|trans|striptags }}\"
                                                   name=\"email\"
                                                   value=\"{{ data.get('email') }}\"
                                                   {% if shopware.config.core.loginRegistration.requireEmailConfirmation %}
                                                   data-form-validation-equal=\"personalMail\"
                                                   {% endif %}
                                                   required=\"required\">
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_input_error %}
                                            {% if formViolations.getViolations('/email') is not empty %}
                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                    violationPath: '/email'
                                                } %}
                                            {% endif %}
                                        {% endblock %}
                                    {% endblock %}
                                {% endset %}

                                {% set formGroupMailConfirmation %}
                                    {% block component_account_register_personal_mail_confirmation %}
                                        {% block component_account_register_personal_mail_confirmation_label %}
                                            <label class=\"form-label\"
                                                   for=\"personalMailConfirmation\">
                                                {{ \"account.personalMailConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                            </label>
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_confirmation_input %}
                                            <input type=\"email\"
                                                   class=\"form-control{% if formViolations.getViolations('/email') is not empty or formViolations.getViolations('/emailConfirmation') is not empty %} is-invalid{% endif %}\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMailConfirmation\"
                                                   placeholder=\"{{ \"account.personalMailConfirmationPlaceholder\"|trans|striptags }}\"
                                                   name=\"emailConfirmation\"
                                                   value=\"{{ data.get('emailConfirmation') }}\"
                                                   data-form-validation-equal=\"personalMail\"
                                                   data-form-validation-equal-message=\"{{ \"account.personalMailConfirmationInvalidMessage\"|trans|striptags }}\"
                                                   required=\"required\">
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_confirmation_input_error %}
                                            {% if formViolations.getViolations('/email') is not empty %}
                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                    violationPath: '/email'
                                                } %}
                                            {% endif %}

                                            {% if formViolations.getViolations('/emailConfirmation') is not empty %}
                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                    violationPath: '/emailConfirmation'
                                                } %}
                                            {% endif %}
                                        {% endblock %}
                                    {% endblock %}
                                {% endset %}

                                {% set formGroupPassword %}
                                    {% block component_account_register_personal_password %}
                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            {% block component_account_register_personal_password_label %}
                                                <label class=\"form-label\"
                                                       for=\"personalPassword\">
                                                    {{ \"account.personalPasswordLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                </label>
                                            {% endblock %}

                                            {% block component_account_register_personal_password_input %}
                                                <input type=\"password\"
                                                       class=\"form-control{% if formViolations.getViolations('/password') is not empty %} is-invalid{% endif %}\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPassword\"
                                                       placeholder=\"{{ \"account.personalPasswordPlaceholder\"|trans|striptags }}\"
                                                       name=\"password\"
                                                       minlength=\"{{ shopware.config.core.loginRegistration.passwordMinLength }}\"
                                                       {% if shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                       data-form-validation-equal=\"newPassword\"
                                                       {% endif %}
                                                       {% if shopware.config.core.loginRegistration.passwordMinLength != 0 %}
                                                       data-form-validation-length=\"{{ shopware.config.core.loginRegistration.passwordMinLength }}\"
                                                       data-form-validation-length-message=\" {{ \"account.personalPasswordDescription\"|trans({
                                                           '%minLength%': shopware.config.core.loginRegistration.passwordMinLength
                                                       })|sw_sanitize }}\"
                                                       {% endif %}
                                                       required=\"required\">
                                            {% endblock %}

                                            {% block component_account_register_personal_password_description %}
                                                {% if shopware.config.core.loginRegistration.passwordMinLength != 0 %}
                                                    <small class=\"form-text js-validation-message\"
                                                           data-form-validation-length-text=\"true\">
                                                        {{ \"account.personalPasswordDescription\"|trans({
                                                            '%minLength%': shopware.config.core.loginRegistration.passwordMinLength
                                                        })|sw_sanitize }}
                                                    </small>
                                                {% endif %}
                                            {% endblock %}

                                            {% block component_account_register_personal_password_input_error %}
                                                {% if formViolations.getViolations('/password') is not empty %}
                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                        violationPath: '/password'
                                                    } %}
                                                {% endif %}
                                            {% endblock %}
                                        </span>
                                    {% endblock %}
                                {% endset %}

                                {% set formGroupPasswordConfirmation %}
                                    {% block component_account_register_personal_password_confirmation %}
                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            {% block component_account_register_personal_password_confirmation_label %}
                                                <label class=\"form-label\"
                                                       for=\"personalPasswordConfirmation\">
                                                    {{ \"account.personalPasswordConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                </label>
                                            {% endblock %}

                                            {% block component_account_register_personal_password_confirmation_input %}
                                                <input type=\"password\"
                                                       class=\"form-control{% if formViolations.getViolations('/password') is not empty or formViolations.getViolations('/passwordConfirmation') is not empty %} is-invalid{% endif %}\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPasswordConfirmation\"
                                                       placeholder=\"{{ \"account.personalPasswordConfirmationPlaceholder\"|trans|striptags }}\"
                                                       name=\"passwordConfirmation\"
                                                       minlength=\"{{ shopware.config.core.loginRegistration.passwordMinLength }}\"
                                                       data-form-validation-equal=\"newPassword\"
                                                       data-form-validation-equal-message=\"{{ \"account.personalPasswordConfirmationInvalidMessage\"|trans|striptags }}\"
                                                       required=\"required\">
                                            {% endblock %}

                                            {% block component_account_register_personal_password_confirmation_input_error %}
                                                {% if formViolations.getViolations('/password') is not empty %}
                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                        violationPath: '/password'
                                                    } %}
                                                {% endif %}

                                                {% if formViolations.getViolations('/passwordConfirmation') is not empty %}
                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                        violationPath: '/passwordConfirmation'
                                                    } %}
                                                {% endif %}
                                            {% endblock %}
                                        </span>
                                    {% endblock %}
                                {% endset %}

                                {% block component_account_register_personal_account_fields %}
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            {{ formGroupMail }}
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            {% if shopware.config.core.loginRegistration.requireEmailConfirmation %}
                                                {{ formGroupMailConfirmation }}
                                            {% elseif not shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                {{ formGroupPassword }}
                                            {% endif %}
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            {% if shopware.config.core.loginRegistration.requireEmailConfirmation or shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                {{ formGroupPassword }}
                                            {% endif %}
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            {% if shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                {{ formGroupPasswordConfirmation }}
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endblock %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_register_address %}
                        <div class=\"register-address\">
                            {% block component_account_register_address_fields %}
                                {% block component_account_register_address_billing %}
                                    <div class=\"register-billing\">
                                        {% block component_account_register_address_billing_header %}
                                            <div class=\"card-title\">
                                                {{ \"account.registerAddressBillingHeader\"|trans|sw_sanitize }}
                                            </div>
                                        {% endblock %}

                                        {% block component_account_register_address_billing_fields %}
                                            {# @deprecated tag:v6.4.0 hasSelectedBusiness variable will be removed #}
                                            {% sw_include '@Storefront/storefront/component/address/address-form.html.twig' with {
                                                'prefix': 'billingAddress',
                                                'data': data.get('billingAddress'),
                                                'hasSelectedBusiness': data.get('accountType') == constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS')
                                            } %}
                                        {% endblock %}
                                    </div>
                                {% endblock %}

                                {% block component_account_register_address_different_shipping %}
                                    <div>
                                        {% block component_account_register_address_different_shipping_control %}
                                            <div class=\"custom-control custom-checkbox register-different-shipping\">
                                                {% block component_account_register_address_different_shipping_input %}
                                                    <input type=\"checkbox\"
                                                           class=\"custom-control-input js-different-shipping-checkbox\"
                                                           name=\"differentShippingAddress\"
                                                           value=\"1\"
                                                           id=\"differentShippingAddress\"
                                                           {% if data.get('differentShippingAddress') %}checked=\"checked\"{% endif %}
                                                           data-form-field-toggle=\"true\"
                                                           data-form-field-toggle-target=\".js-form-field-toggle-shipping-address\"
                                                           data-form-field-toggle-value=\"true\">
                                                {% endblock %}

                                                {% block component_account_register_address_different_shipping_label %}
                                                    <label class=\"custom-control-label no-validation\"
                                                           for=\"differentShippingAddress\">
                                                        {{ \"account.registerDifferentShipping\"|trans|sw_sanitize }}
                                                    </label>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block component_account_register_address_shipping %}
                                            <div class=\"register-shipping js-form-field-toggle-shipping-address d-none\">
                                                {% block component_account_register_address_shipping_header %}
                                                    <div class=\"card-title\">
                                                        {{ \"account.registerAddressShippingHeader\"|trans|sw_sanitize }}
                                                    </div>
                                                {% endblock %}

                                                {% block component_account_register_address_shipping_fields %}
                                                    {% block component_account_register_address_shipping_fields_personal %}
                                                        {% sw_include '@Storefront/storefront/component/address/address-personal.html.twig' with {
                                                            'prefix': 'shippingAddress',
                                                            'data': data.get('shippingAddress'),
                                                            'hideCustomerTypeSelect': true,
                                                            'accountType': data.get('accountType')
                                                        } %}
                                                    {% endblock %}

                                                    {% block component_account_register_address_shipping_fields_address %}
                                                        {% sw_include '@Storefront/storefront/component/address/address-form.html.twig' with {
                                                            'prefix': 'shippingAddress',
                                                            'data': data.get('shippingAddress')
                                                        } %}
                                                    {% endblock %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_register_captcha %}
                        {% sw_include '@Storefront/storefront/component/captcha/base.html.twig' with { 'captchas': shopware.config.core.basicInformation.activeCaptchas } %}
                    {% endblock %}

                    {% block component_account_register_privacy %}
                        {% sw_include '@Storefront/storefront/component/privacy-notice.html.twig' %}
                    {% endblock %}

                    {% block component_account_register_required_fields %}
                        <p class=\"register-required-info\">
                            {{ \"general.requiredFields\"|trans|sw_sanitize }}
                        </p>
                    {% endblock %}

                    {% block component_account_register_submit %}
                        <div class=\"register-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-lg\">
                                {{ \"account.registerSubmit\"|trans|sw_sanitize }}
                            </button>
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/component/account/register.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/account/register.html.twig");
    }
}
