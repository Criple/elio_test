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

/* @Storefront/storefront/component/product/card/price-unit.html.twig */
class __TwigTemplate_81b0196608e1eace282f4c69e09f215dedaee85ad4c816cd6f21114937bed79d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_price_info' => [$this, 'block_component_product_box_price_info'],
            'component_product_box_price_unit' => [$this, 'block_component_product_box_price_unit'],
            'component_product_box_price_purchase_unit' => [$this, 'block_component_product_box_price_purchase_unit'],
            'component_product_box_price_reference_unit' => [$this, 'block_component_product_box_price_reference_unit'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_block_list_price_wrapper' => [$this, 'block_component_product_box_block_list_price_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_price_info', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_price_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        // line 2
        echo "    ";
        $context["purchaseUnit"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseUnit", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["listingPrice"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["fromPrice"] = twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "from", [], "any", false, false, false, 4);
        // line 5
        echo "    ";
        $context["referncePrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 5), "referencePrice", [], "any", false, false, false, 5);
        // line 6
        echo "
    <div class=\"product-price-info\">
        ";
        // line 8
        $this->displayBlock('component_product_box_price_unit', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 86
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_component_product_box_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        // line 9
        echo "            <p class=\"product-price-unit\">
                ";
        // line 11
        echo "                ";
        $this->displayBlock('component_product_box_price_purchase_unit', $context, $blocks);
        // line 21
        echo "
                ";
        // line 23
        echo "                ";
        $this->displayBlock('component_product_box_price_reference_unit', $context, $blocks);
        // line 34
        echo "            </p>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_component_product_box_price_purchase_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        // line 12
        echo "                    ";
        if ((($context["purchaseUnit"] ?? null) && (($context["purchaseUnit"] ?? null) != 0))) {
            // line 13
            echo "                        <span class=\"product-unit-label\">
                            ";
            // line 14
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxUnitLabel"));
            echo "
                        </span>
                        <span class=\"price-unit-content\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, ($context["purchaseUnit"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 17), "translation", [0 => "name"], "method", false, false, false, 17), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 20
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_component_product_box_price_reference_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        // line 24
        echo "                    ";
        if ( !(null === ($context["referncePrice"] ?? null))) {
            // line 25
            echo "                        <span class=\"price-unit-reference\">
                            ";
            // line 26
            if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 26) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 26)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26) > 1))) {
                // line 27
                echo "                                (";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "referenceUnit", [], "any", false, false, false, 27), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "unitName", [], "any", false, false, false, 27), "html", null, true);
                echo ")
                            ";
            } else {
                // line 29
                echo "                                (";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "price", [], "any", false, false, false, 29)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "unitName", [], "any", false, false, false, 29), "html", null, true);
                echo ")
                            ";
            }
            // line 31
            echo "                        </span>
                    ";
        }
        // line 33
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 38
        echo "            ";
        $context["listPrice"] = (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 38) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38) > 0))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 38), "listPrice", [], "any", false, false, false, 38)));
        // line 39
        echo "            ";
        $context["advancedPricesFlag"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 39), "count", [], "any", false, false, false, 39) > 0);
        // line 40
        echo "
            ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 41), "count", [], "any", false, false, false, 41) < 2)) {
            // line 42
            echo "                ";
            $context["advancedPricesFlag"] = false;
            // line 43
            echo "            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if (((null === ($context["listPrice"] ?? null)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 45)) == 1))) {
            // line 46
            echo "                ";
            $context["listPrice"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 46)), "listPrice", [], "any", false, false, false, 46);
            // line 47
            echo "            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if ((($context["advancedPricesFlag"] ?? null) && (null === ($context["listPrice"] ?? null)))) {
            // line 50
            echo "                ";
            $this->displayBlock('component_product_box_block_list_price_wrapper', $context, $blocks);
            // line 62
            echo "            ";
        } else {
            // line 63
            echo "                <p class=\"product-price";
            if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 63) > 0)) {
                echo " with-list-price";
            }
            echo "\">
                    ";
            // line 64
            if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 64) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 64)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 64), "count", [], "any", false, false, false, 64) > 1))) {
                // line 65
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "unitPrice", [], "any", false, false, false, 65)), "html", null, true);
                echo "
                        -
                        ";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "to", [], "any", false, false, false, 67), "unitPrice", [], "any", false, false, false, 67)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo "
                    ";
            } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 68
($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 68)) == 1)) {
                // line 69
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 69), "first", [], "any", false, false, false, 69), "unitPrice", [], "any", false, false, false, 69)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo "
                        ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 70) > 0)) {
                    // line 71
                    echo "                            <span class=\"list-price";
                    if (((twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")) > 0) || (twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")) > 0))) {
                        echo " list-price-no-line-through";
                    }
                    echo "\">
                                ";
                    // line 72
                    echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 72)), "html", null, true);
                    echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), "html", null, true);
                    echo "
                            </span>
                        ";
                }
                // line 75
                echo "                    ";
            } else {
                // line 76
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 76), "unitPrice", [], "any", false, false, false, 76)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo "
                            ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 77) > 0)) {
                    // line 78
                    echo "                                <span class=\"list-price";
                    if (((twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")) > 0) || (twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")) > 0))) {
                        echo " list-price-no-line-through";
                    }
                    echo "\">
                                    ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 79)), "html", null, true);
                    echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), "html", null, true);
                    echo "
                                </span>
                            ";
                }
                // line 82
                echo "                    ";
            }
            // line 83
            echo "                </p>
            ";
        }
        // line 85
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_component_product_box_block_list_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_block_list_price_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_block_list_price_wrapper"));

        // line 51
        echo "                    ";
        $context["cheapestPrice"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 51));
        // line 52
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["calcPrice"]) {
            // line 53
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["cheapestPrice"] ?? null), "unitPrice", [], "any", false, false, false, 53) > twig_get_attribute($this->env, $this->source, $context["calcPrice"], "unitPrice", [], "any", false, false, false, 53))) {
                // line 54
                echo "                            ";
                $context["cheapestPrice"] = $context["calcPrice"];
                // line 55
                echo "                        ";
            }
            // line 56
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calcPrice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                    <span class=\"product-price product-advanced-list-price-wrapper\">
                        ";
        // line 59
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
        echo " <b>";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["cheapestPrice"] ?? null), "unitPrice", [], "any", false, false, false, 59)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "</b>
                    </span>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/price-unit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  411 => 59,  407 => 57,  401 => 56,  398 => 55,  395 => 54,  392 => 53,  387 => 52,  384 => 51,  374 => 50,  364 => 85,  360 => 83,  357 => 82,  346 => 79,  339 => 78,  337 => 77,  331 => 76,  328 => 75,  317 => 72,  310 => 71,  308 => 70,  302 => 69,  300 => 68,  295 => 67,  289 => 65,  287 => 64,  280 => 63,  277 => 62,  274 => 50,  272 => 49,  269 => 48,  266 => 47,  263 => 46,  261 => 45,  258 => 44,  255 => 43,  252 => 42,  250 => 41,  247 => 40,  244 => 39,  241 => 38,  231 => 37,  221 => 33,  217 => 31,  206 => 29,  193 => 27,  191 => 26,  188 => 25,  185 => 24,  175 => 23,  165 => 20,  157 => 17,  151 => 14,  148 => 13,  145 => 12,  135 => 11,  124 => 34,  121 => 23,  118 => 21,  115 => 11,  112 => 9,  102 => 8,  91 => 86,  89 => 37,  86 => 36,  84 => 8,  80 => 6,  77 => 5,  74 => 4,  71 => 3,  68 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_price_info %}
    {% set purchaseUnit = product.purchaseUnit %}
    {% set listingPrice = product.calculatedListingPrice %}
    {% set fromPrice = listingPrice.from %}
    {% set referncePrice = product.calculatedPrice.referencePrice %}

    <div class=\"product-price-info\">
        {% block component_product_box_price_unit %}
            <p class=\"product-price-unit\">
                {# Price is based on the purchase unit #}
                {% block component_product_box_price_purchase_unit %}
                    {% if purchaseUnit and purchaseUnit != 0 %}
                        <span class=\"product-unit-label\">
                            {{ \"listing.boxUnitLabel\"|trans|sw_sanitize }}
                        </span>
                        <span class=\"price-unit-content\">
                            {{ purchaseUnit }} {{ product.unit.translation('name') }}
                        </span>
                    {% endif %}
                {% endblock %}

                {# Item price is based on a reference unit #}
                {% block component_product_box_price_reference_unit %}
                    {% if referncePrice is not null %}
                        <span class=\"price-unit-reference\">
                            {% if (product.priceRange and product.isGrouped) or product.calculatedPrices.count > 1 %}
                                ({{ \"listing.listingTextFrom\"|trans|sw_sanitize }} {{ fromPrice.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ fromPrice.referencePrice.referenceUnit }}&nbsp;{{ fromPrice.referencePrice.unitName }})
                            {% else %}
                                ({{ referncePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ referncePrice.referenceUnit }} {{ referncePrice.unitName }})
                            {% endif %}
                        </span>
                    {% endif %}
                {% endblock %}
            </p>
        {% endblock %}

        {% block component_product_box_price %}
            {% set listPrice = product.priceRange or product.calculatedPrices.count > 0 ? null : product.calculatedPrice.listPrice %}
            {% set advancedPricesFlag = product.calculatedPrices.count > 0 %}

            {% if product.calculatedPrices.count < 2 %}
                {% set advancedPricesFlag = false %}
            {% endif %}

            {% if listPrice is null and product.calculatedPrices|length == 1 %}
                {% set listPrice = product.calculatedPrices|first.listPrice %}
            {% endif %}

            {% if advancedPricesFlag and listPrice is null %}
                {% block component_product_box_block_list_price_wrapper %}
                    {% set cheapestPrice = product.calculatedPrices|first %}
                    {% for calcPrice in product.calculatedPrices %}
                        {% if cheapestPrice.unitPrice > calcPrice.unitPrice %}
                            {% set cheapestPrice = calcPrice %}
                        {% endif %}
                    {% endfor %}

                    <span class=\"product-price product-advanced-list-price-wrapper\">
                        {{ \"listing.listingTextFrom\"|trans|sw_sanitize }} <b>{{ cheapestPrice.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}</b>
                    </span>
                {% endblock %}
            {% else %}
                <p class=\"product-price{% if listPrice.percentage > 0 %} with-list-price{% endif %}\">
                    {% if (product.priceRange and product.isGrouped) or product.calculatedPrices.count > 1 %}
                        {{ fromPrice.unitPrice|currency }}
                        -
                        {{ listingPrice.to.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                    {% elseif product.calculatedPrices|length == 1 %}
                        {{ product.calculatedPrices.first.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                        {% if listPrice.percentage > 0 %}
                            <span class=\"list-price{% if \"listing.beforeListPrice\"|trans|length > 0 or \"listing.afterListPrice\"|trans|length > 0  %} list-price-no-line-through{% endif %}\">
                                {{\"listing.beforeListPrice\"|trans|trim}} {{ listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} {{\"listing.afterListPrice\"|trans|trim}}
                            </span>
                        {% endif %}
                    {% else %}
                        {{ product.calculatedPrice.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                            {% if listPrice.percentage > 0 %}
                                <span class=\"list-price{% if \"listing.beforeListPrice\"|trans|length > 0 or \"listing.afterListPrice\"|trans|length > 0  %} list-price-no-line-through{% endif %}\">
                                    {{\"listing.beforeListPrice\"|trans|trim}} {{ listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} {{\"listing.afterListPrice\"|trans|trim}}
                                </span>
                            {% endif %}
                    {% endif %}
                </p>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/card/price-unit.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/price-unit.html.twig");
    }
}
