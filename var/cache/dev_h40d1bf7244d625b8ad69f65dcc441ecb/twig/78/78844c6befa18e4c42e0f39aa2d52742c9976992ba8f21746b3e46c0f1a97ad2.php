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

/* @Storefront/storefront/page/product-detail/buy-widget-price.html.twig */
class __TwigTemplate_97203b4f0a538655db8f8f2ddee6c9294d56ea9685d2d2644877ddbbb7fa4341 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_price_inner' => [$this, 'block_page_product_detail_price_inner'],
            'page_product_detail_price_block' => [$this, 'block_page_product_detail_price_block'],
            'page_product_detail_price_block_table' => [$this, 'block_page_product_detail_price_block_table'],
            'page_product_detail_price_block_table_head' => [$this, 'block_page_product_detail_price_block_table_head'],
            'page_product_detail_price_block_table_head_inner' => [$this, 'block_page_product_detail_price_block_table_head_inner'],
            'page_product_detail_price_block_table_body' => [$this, 'block_page_product_detail_price_block_table_body'],
            'page_product_detail_price_block_table_body_inner' => [$this, 'block_page_product_detail_price_block_table_body_inner'],
            'page_product_detail_price_block_table_body_row' => [$this, 'block_page_product_detail_price_block_table_body_row'],
            'page_product_detail_price_block_table_body_cell_quantity' => [$this, 'block_page_product_detail_price_block_table_body_cell_quantity'],
            'page_product_detail_price_block_table_body_cell_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_price'],
            'page_product_detail_price_block_table_body_cell_reference_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_reference_price'],
            'page_product_detail_price_content' => [$this, 'block_page_product_detail_price_content'],
            'page_product_detail_was_price' => [$this, 'block_page_product_detail_was_price'],
            'page_product_detail_was_price_badge' => [$this, 'block_page_product_detail_was_price_badge'],
            'page_product_detail_was_price_wrapper' => [$this, 'block_page_product_detail_was_price_wrapper'],
            'page_product_detail_price_unit' => [$this, 'block_page_product_detail_price_unit'],
            'page_product_detail_price_unit_label' => [$this, 'block_page_product_detail_price_unit_label'],
            'page_product_detail_price_unit_content' => [$this, 'block_page_product_detail_price_unit_content'],
            'page_product_detail_price_unit_reference_content' => [$this, 'block_page_product_detail_price_unit_reference_content'],
            'page_product_detail_price_unit_refrence_content' => [$this, 'block_page_product_detail_price_unit_refrence_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_price_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_inner"));

        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 2), "calculatedPrices", [], "any", false, false, false, 2)) > 1)) {
            // line 3
            echo "        ";
            $this->displayBlock('page_product_detail_price_block', $context, $blocks);
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        ";
            $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 79), "calculatedPrice", [], "any", false, false, false, 79);
            // line 80
            echo "
        ";
            // line 81
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 81), "calculatedPrices", [], "any", false, false, false, 81)) == 1)) {
                // line 82
                echo "            ";
                $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 82), "calculatedPrices", [], "any", false, false, false, 82), "first", [], "any", false, false, false, 82);
                // line 83
                echo "        ";
            }
            // line 84
            echo "
        <meta itemprop=\"price\"
              content=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 86), "html", null, true);
            echo "\">

        ";
            // line 88
            $this->displayBlock('page_product_detail_price_content', $context, $blocks);
            // line 115
            echo "
        ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 116), "purchaseUnit", [], "any", false, false, false, 116)) {
                // line 117
                echo "            ";
                $this->displayBlock('page_product_detail_price_unit', $context, $blocks);
                // line 145
                echo "        ";
            }
            // line 146
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_page_product_detail_price_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block"));

        // line 4
        echo "            <div class=\"product-block-prices\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_price_block_table', $context, $blocks);
        // line 76
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_product_detail_price_block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table"));

        // line 6
        echo "                    <table class=\"table table-sm table-bordered product-block-prices-table\">
                        ";
        // line 7
        $this->displayBlock('page_product_detail_price_block_table_head', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('page_product_detail_price_block_table_body', $context, $blocks);
        // line 74
        echo "                    </table>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_page_product_detail_price_block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head"));

        // line 8
        echo "                            <thead class=\"product-block-prices-head\">
                                ";
        // line 9
        $this->displayBlock('page_product_detail_price_block_table_head_inner', $context, $blocks);
        // line 24
        echo "                            </thead>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_product_detail_price_block_table_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head_inner"));

        // line 10
        echo "                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 12
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnQuantity"));
        echo "
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 15
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnPrice"));
        echo "
                                        </th>
                                        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 17), "calculatedPrice", [], "any", false, false, false, 17), "referencePrice", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                ";
            // line 19
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnReferencePrice"));
            echo "
                                            </th>
                                        ";
        }
        // line 22
        echo "                                    </tr>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_page_product_detail_price_block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body"));

        // line 28
        echo "                            <tbody class=\"product-block-prices-body\">
                                ";
        // line 29
        $this->displayBlock('page_product_detail_price_block_table_body_inner', $context, $blocks);
        // line 72
        echo "                            </tbody>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_page_product_detail_price_block_table_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_inner"));

        // line 30
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 30), "calculatedPrices", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 31
            echo "                                        ";
            $this->displayBlock('page_product_detail_price_block_table_body_row', $context, $blocks);
            // line 70
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_page_product_detail_price_block_table_body_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_row"));

        // line 32
        echo "                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                ";
        // line 36
        $this->displayBlock('page_product_detail_price_block_table_body_cell_quantity', $context, $blocks);
        // line 52
        echo "
                                                ";
        // line 53
        $this->displayBlock('page_product_detail_price_block_table_body_cell_price', $context, $blocks);
        // line 60
        echo "
                                                ";
        // line 61
        $this->displayBlock('page_product_detail_price_block_table_body_cell_reference_price', $context, $blocks);
        // line 68
        echo "                                            </tr>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_page_product_detail_price_block_table_body_cell_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_quantity"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_quantity"));

        // line 37
        echo "                                                    <th scope=\"row\" class=\"product-block-prices-cell\">
                                                        <meta itemprop=\"priceCurrency\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "activeCurrency", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" />
                                                        <meta itemprop=\"price\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 39), "html", null, true);
        echo "\" />
                                                        <link itemprop=\"availability\" href=\"https://schema.org/InStock\" />

                                                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoFrom"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>

                                                        ";
        } else {
            // line 47
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoUntil"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                                                        ";
        }
        // line 50
        echo "                                                    </th>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_page_product_detail_price_block_table_body_cell_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_price"));

        // line 54
        echo "                                                    <td class=\"product-block-prices-cell\">
                                                        ";
        // line 55
        $this->loadTemplate("@Storefront/storefront/component/product/block-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", 55)->display(twig_to_array(["price" =>         // line 56
($context["price"] ?? null)]));
        // line 58
        echo "                                                    </td>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_page_product_detail_price_block_table_body_cell_reference_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_reference_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_reference_price"));

        // line 62
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62))) {
            // line 63
            echo "                                                        <td class=\"product-block-prices-cell\">
                                                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 64), "price", [], "any", false, false, false, 64)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 64), "referenceUnit", [], "any", false, false, false, 64), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 64), "unitName", [], "any", false, false, false, 64), "html", null, true);
            echo "
                                                        </td>
                                                    ";
        }
        // line 67
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_page_product_detail_price_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_content"));

        // line 89
        echo "            ";
        $context["listPrice"] = twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 89);
        // line 90
        echo "
            <p class=\"product-detail-price";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 91) > 0)) {
            echo " with-list-price";
        }
        echo "\">
                ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 92)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
            </p>

            ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 95) > 0)) {
            // line 96
            echo "                ";
            $this->displayBlock('page_product_detail_was_price', $context, $blocks);
            // line 113
            echo "            ";
        }
        // line 114
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_page_product_detail_was_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price"));

        // line 97
        echo "
                    ";
        // line 98
        $this->displayBlock('page_product_detail_was_price_badge', $context, $blocks);
        // line 101
        echo "
                    ";
        // line 102
        $this->displayBlock('page_product_detail_was_price_wrapper', $context, $blocks);
        // line 112
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_page_product_detail_was_price_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_badge"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_badge"));

        // line 99
        echo "                        <span class=\"list-price-badge\">&#37;</span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_page_product_detail_was_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_wrapper"));

        // line 103
        echo "                        <span class=\"product-detail-list-price-wrapper\">
                            ";
        // line 104
        echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), "html", null, true);
        echo "
                            <span ";
        // line 105
        if ( !((twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")) > 0) || (twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")) > 0))) {
            echo "class=\"list-price-price\"";
        }
        echo ">
                                ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 106)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                            </span>
                            ";
        // line 108
        echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), "html", null, true);
        echo "
                            <span class=\"list-price-percentage\">";
        // line 109
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 109)]));
        echo "</span>
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_page_product_detail_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit"));

        // line 118
        echo "                <div class=\"product-detail-price-unit\">
                    ";
        // line 119
        $this->displayBlock('page_product_detail_price_unit_label', $context, $blocks);
        // line 124
        echo "
                    ";
        // line 125
        $this->displayBlock('page_product_detail_price_unit_content', $context, $blocks);
        // line 130
        echo "
                    ";
        // line 131
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 131))) {
            // line 132
            echo "                        ";
            $this->displayBlock('page_product_detail_price_unit_reference_content', $context, $blocks);
            // line 142
            echo "                    ";
        }
        // line 143
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_page_product_detail_price_unit_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_label"));

        // line 120
        echo "                        <span class=\"price-unit-label\">
                            ";
        // line 121
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceUnitName"));
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_page_product_detail_price_unit_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_content"));

        // line 126
        echo "                        <span class=\"price-unit-content\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 127), "purchaseUnit", [], "any", false, false, false, 127), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 127), "unit", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true);
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_page_product_detail_price_unit_reference_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_reference_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_reference_content"));

        // line 133
        echo "
                        ";
        // line 135
        echo "                        ";
        $this->displayBlock('page_product_detail_price_unit_refrence_content', $context, $blocks);
        // line 140
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_page_product_detail_price_unit_refrence_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_refrence_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_refrence_content"));

        // line 136
        echo "                            <span class=\"price-unit-reference-content\">
                                (";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 137), "price", [], "any", false, false, false, 137)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 137), "referenceUnit", [], "any", false, false, false, 137), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 137), "unitName", [], "any", false, false, false, 137), "html", null, true);
        echo ")
                            </span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  789 => 137,  786 => 136,  776 => 135,  765 => 140,  762 => 135,  759 => 133,  749 => 132,  734 => 127,  731 => 126,  721 => 125,  708 => 121,  705 => 120,  695 => 119,  684 => 143,  681 => 142,  678 => 132,  676 => 131,  673 => 130,  671 => 125,  668 => 124,  666 => 119,  663 => 118,  653 => 117,  640 => 109,  636 => 108,  630 => 106,  624 => 105,  620 => 104,  617 => 103,  607 => 102,  596 => 99,  586 => 98,  576 => 112,  574 => 102,  571 => 101,  569 => 98,  566 => 97,  556 => 96,  546 => 114,  543 => 113,  540 => 96,  538 => 95,  531 => 92,  525 => 91,  522 => 90,  519 => 89,  509 => 88,  499 => 67,  488 => 64,  485 => 63,  482 => 62,  472 => 61,  461 => 58,  459 => 56,  458 => 55,  455 => 54,  445 => 53,  434 => 50,  429 => 48,  424 => 47,  418 => 44,  413 => 43,  411 => 42,  405 => 39,  401 => 38,  398 => 37,  388 => 36,  377 => 68,  375 => 61,  372 => 60,  370 => 53,  367 => 52,  365 => 36,  359 => 32,  349 => 31,  339 => 71,  325 => 70,  322 => 31,  304 => 30,  294 => 29,  283 => 72,  281 => 29,  278 => 28,  268 => 27,  257 => 22,  251 => 19,  248 => 18,  246 => 17,  241 => 15,  235 => 12,  231 => 10,  221 => 9,  210 => 24,  208 => 9,  205 => 8,  195 => 7,  184 => 74,  182 => 27,  179 => 26,  177 => 7,  174 => 6,  164 => 5,  153 => 76,  151 => 5,  148 => 4,  138 => 3,  127 => 146,  124 => 145,  121 => 117,  119 => 116,  116 => 115,  114 => 88,  109 => 86,  105 => 84,  102 => 83,  99 => 82,  97 => 81,  94 => 80,  91 => 79,  88 => 78,  85 => 3,  82 => 2,  63 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_price_inner %}
    {% if page.product.calculatedPrices|length > 1 %}
        {% block page_product_detail_price_block %}
            <div class=\"product-block-prices\">
                {% block page_product_detail_price_block_table %}
                    <table class=\"table table-sm table-bordered product-block-prices-table\">
                        {% block page_product_detail_price_block_table_head %}
                            <thead class=\"product-block-prices-head\">
                                {% block page_product_detail_price_block_table_head_inner %}
                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            {{ \"detail.dataColumnQuantity\"|trans|sw_sanitize }}
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            {{ \"detail.dataColumnPrice\"|trans|sw_sanitize }}
                                        </th>
                                        {% if page.product.calculatedPrice.referencePrice %}
                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                {{ \"detail.dataColumnReferencePrice\"|trans|sw_sanitize }}
                                            </th>
                                        {% endif %}
                                    </tr>
                                {% endblock %}
                            </thead>
                        {% endblock %}

                        {% block page_product_detail_price_block_table_body %}
                            <tbody class=\"product-block-prices-body\">
                                {% block page_product_detail_price_block_table_body_inner %}
                                    {% for price in page.product.calculatedPrices %}
                                        {% block page_product_detail_price_block_table_body_row %}
                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                {% block page_product_detail_price_block_table_body_cell_quantity %}
                                                    <th scope=\"row\" class=\"product-block-prices-cell\">
                                                        <meta itemprop=\"priceCurrency\" content=\"{{ page.header.activeCurrency.id }}\" />
                                                        <meta itemprop=\"price\" content=\"{{ price.unitPrice }}\" />
                                                        <link itemprop=\"availability\" href=\"https://schema.org/InStock\" />

                                                        {% if loop.last %}
                                                            {{ \"detail.priceDataInfoFrom\"|trans|sw_sanitize }}
                                                            <span class=\"product-block-prices-quantity\">{{ price.quantity }}</span>

                                                        {% else %}
                                                            {{ \"detail.priceDataInfoUntil\"|trans|sw_sanitize }}
                                                            <span class=\"product-block-prices-quantity\">{{ price.quantity }}</span>
                                                        {% endif %}
                                                    </th>
                                                {% endblock %}

                                                {% block page_product_detail_price_block_table_body_cell_price %}
                                                    <td class=\"product-block-prices-cell\">
                                                        {% sw_include '@Storefront/storefront/component/product/block-price.html.twig' with {
                                                            price: price
                                                        } only %}
                                                    </td>
                                                {% endblock %}

                                                {% block page_product_detail_price_block_table_body_cell_reference_price %}
                                                    {% if price.referencePrice is not null %}
                                                        <td class=\"product-block-prices-cell\">
                                                            {{ price.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ price.referencePrice.referenceUnit }} {{ price.referencePrice.unitName }}
                                                        </td>
                                                    {% endif %}
                                                {% endblock %}
                                            </tr>
                                        {% endblock %}
                                    {% endfor %}
                                {% endblock %}
                            </tbody>
                        {% endblock %}
                    </table>
                {% endblock %}
            </div>
        {% endblock %}
    {% else %}
        {% set price = page.product.calculatedPrice %}

        {% if page.product.calculatedPrices|length == 1 %}
            {% set price = page.product.calculatedPrices.first %}
        {% endif %}

        <meta itemprop=\"price\"
              content=\"{{ price.unitPrice }}\">

        {% block page_product_detail_price_content %}
            {% set listPrice = price.listPrice %}

            <p class=\"product-detail-price{% if listPrice.percentage > 0 %} with-list-price{% endif %}\">
                {{ price.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
            </p>

            {% if listPrice.percentage > 0 %}
                {% block page_product_detail_was_price %}

                    {% block page_product_detail_was_price_badge %}
                        <span class=\"list-price-badge\">&#37;</span>
                    {% endblock %}

                    {% block page_product_detail_was_price_wrapper %}
                        <span class=\"product-detail-list-price-wrapper\">
                            {{\"listing.beforeListPrice\"|trans|trim}}
                            <span {% if not (\"listing.beforeListPrice\"|trans|length > 0 or \"listing.afterListPrice\"|trans|length > 0) %}class=\"list-price-price\"{% endif %}>
                                {{ listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                            </span>
                            {{\"listing.afterListPrice\"|trans|trim}}
                            <span class=\"list-price-percentage\">{{ \"detail.listPricePercentage\"|trans({'%price%': listPrice.percentage })|sw_sanitize }}</span>
                        </span>
                    {% endblock %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% if page.product.purchaseUnit %}
            {% block page_product_detail_price_unit %}
                <div class=\"product-detail-price-unit\">
                    {% block page_product_detail_price_unit_label %}
                        <span class=\"price-unit-label\">
                            {{ \"detail.priceUnitName\"|trans|sw_sanitize }}
                        </span>
                    {% endblock %}

                    {% block page_product_detail_price_unit_content %}
                        <span class=\"price-unit-content\">
                            {{ page.product.purchaseUnit }} {{ page.product.unit.name }}
                        </span>
                    {% endblock %}

                    {% if price.referencePrice is not null %}
                        {% block page_product_detail_price_unit_reference_content %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_product_detail_price_unit_refrence_content %}
                            <span class=\"price-unit-reference-content\">
                                ({{ price.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ price.referencePrice.referenceUnit }} {{ price.referencePrice.unitName }})
                            </span>
                        {% endblock %}

                        {% endblock %}
                    {% endif %}
                </div>
            {% endblock %}
        {% endif %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-price.html.twig");
    }
}
