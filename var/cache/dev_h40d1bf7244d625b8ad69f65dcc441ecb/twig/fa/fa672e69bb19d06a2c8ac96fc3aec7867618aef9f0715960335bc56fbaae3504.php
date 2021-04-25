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

/* @Storefront/storefront/component/listing/filter/filter-rating.html.twig */
class __TwigTemplate_32474350f36a8a7ef2854b279f75869ef3d4a84d7ca1ec7943fbc8fab1d55ac8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_rating' => [$this, 'block_component_filter_rating'],
            'component_filter_rating_toggle' => [$this, 'block_component_filter_rating_toggle'],
            'component_filter_rating_display_name' => [$this, 'block_component_filter_rating_display_name'],
            'component_filter_rating_count' => [$this, 'block_component_filter_rating_count'],
            'component_filter_rating_toggle_icon' => [$this, 'block_component_filter_rating_toggle_icon'],
            'component_filter_rating_dropdown' => [$this, 'block_component_filter_rating_dropdown'],
            'component_filter_rating_container' => [$this, 'block_component_filter_rating_container'],
            'component_filter_rating_point_label' => [$this, 'block_component_filter_rating_point_label'],
            'component_filter_rating_point_radio' => [$this, 'block_component_filter_rating_point_radio'],
            'component_filter_rating_point_radio_element' => [$this, 'block_component_filter_rating_point_radio_element'],
            'component_filter_rating_text_placeholder' => [$this, 'block_component_filter_rating_text_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . twig_random($this->env));
        // line 4
        echo "
";
        // line 5
        if ( !(isset($context["maxPoints"]) || array_key_exists("maxPoints", $context))) {
            // line 6
            echo "    ";
            $context["maxPoints"] = 5;
        }
        // line 8
        echo "
";
        // line 9
        if ( !(isset($context["filterRatingActiveLabelStart"]) || array_key_exists("filterRatingActiveLabelStart", $context))) {
            // line 10
            echo "    ";
            $context["filterRatingActiveLabelStart"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelStart"));
        }
        // line 12
        echo "
";
        // line 13
        if ( !(isset($context["filterRatingActiveLabelEndSingular"]) || array_key_exists("filterRatingActiveLabelEndSingular", $context))) {
            // line 14
            echo "    ";
            $context["filterRatingActiveLabelEndSingular"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEndSingular"));
        }
        // line 16
        echo "
";
        // line 17
        if ( !(isset($context["filterRatingActiveLabelEnd"]) || array_key_exists("filterRatingActiveLabelEnd", $context))) {
            // line 18
            echo "    ";
            $context["filterRatingActiveLabelEnd"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEnd"));
        }
        // line 20
        echo "
";
        // line 21
        $context["filterRatingOptions"] = ["name" =>         // line 22
($context["name"] ?? null), "maxPoints" =>         // line 23
($context["maxPoints"] ?? null), "snippets" => ["filterRatingActiveLabelStart" =>         // line 25
($context["filterRatingActiveLabelStart"] ?? null), "filterRatingActiveLabelEndSingular" =>         // line 26
($context["filterRatingActiveLabelEndSingular"] ?? null), "filterRatingActiveLabelEnd" =>         // line 27
($context["filterRatingActiveLabelEnd"] ?? null), "disabledFilterText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip"))]];
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('component_filter_rating', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_filter_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating"));

        // line 33
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 33), "core", [], "any", false, false, false, 33), "listing", [], "any", false, false, false, 33), "showReview", [], "any", false, false, false, 33)) {
            // line 34
            echo "        <div class=\"filter-rating filter-panel-item";
            if ( !($context["sidebar"] ?? null)) {
                echo " dropdown";
            }
            echo "\"
             data-filter-rating=\"true\"
             data-filter-rating-options='";
            // line 36
            echo twig_escape_filter($this->env, json_encode(($context["filterRatingOptions"] ?? null)), "html", null, true);
            echo "'>

            ";
            // line 38
            $this->displayBlock('component_filter_rating_toggle', $context, $blocks);
            // line 64
            echo "
            ";
            // line 65
            $this->displayBlock('component_filter_rating_dropdown', $context, $blocks);
            // line 100
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_component_filter_rating_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle"));

        // line 39
        echo "                <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                        aria-expanded=\"false\"
                        ";
        // line 41
        if (($context["sidebar"] ?? null)) {
            // line 42
            echo "                            data-toggle=\"collapse\"
                            data-target=\"#";
            // line 43
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                        ";
        } else {
            // line 45
            echo "                            data-toggle=\"dropdown\"
                            data-boundary=\"viewport\"
                            data-offset=\"0,8\"
                            aria-haspopup=\"true\"
                        ";
        }
        // line 49
        echo ">

                    ";
        // line 51
        $this->displayBlock('component_filter_rating_display_name', $context, $blocks);
        // line 54
        echo "
                    ";
        // line 55
        $this->displayBlock('component_filter_rating_count', $context, $blocks);
        // line 58
        echo "
                    ";
        // line 59
        $this->displayBlock('component_filter_rating_toggle_icon', $context, $blocks);
        // line 62
        echo "                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_component_filter_rating_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_display_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_display_name"));

        // line 52
        echo "                        ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_component_filter_rating_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_count"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_count"));

        // line 56
        echo "                        <span class=\"filter-rating-count\"></span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_component_filter_rating_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle_icon"));

        // line 60
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 60);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 61
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_component_filter_rating_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_dropdown"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_dropdown"));

        // line 66
        echo "                <div class=\"filter-rating-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                     id=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                    ";
        // line 69
        $this->displayBlock('component_filter_rating_container', $context, $blocks);
        // line 98
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_component_filter_rating_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_container"));

        // line 70
        echo "                        <div class=\"filter-rating-container\" data-rating-system=\"true\">
                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPoints"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 72
            echo "
                                ";
            // line 73
            $this->displayBlock('component_filter_rating_point_label', $context, $blocks);
            // line 91
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
                            ";
        // line 93
        $this->displayBlock('component_filter_rating_text_placeholder', $context, $blocks);
        // line 96
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_component_filter_rating_point_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_label"));

        // line 74
        echo "                                    <label data-review-form-point=\"";
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\"
                                           class=\"filter-rating-star ";
        // line 75
        if ((($context["currentPoints"] ?? null) >= ($context["point"] ?? null))) {
            echo " is-active";
        }
        echo "\">

                                        ";
        // line 77
        $this->displayBlock('component_filter_rating_point_radio', $context, $blocks);
        // line 83
        echo "
                                        ";
        // line 84
        $this->displayBlock('component_filter_rating_point_radio_element', $context, $blocks);
        // line 89
        echo "                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_component_filter_rating_point_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio"));

        // line 78
        echo "                                            <input class=\"product-detail-review-form-radio\"
                                                   type=\"radio\"
                                                   name=\"points\"
                                                   value=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_component_filter_rating_point_radio_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio_element"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio_element"));

        // line 85
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 85)->display(twig_array_merge($context, ["type" => "blank"]));
        // line 88
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_component_filter_rating_text_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_text_placeholder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_text_placeholder"));

        // line 94
        echo "                                <div data-rating-text=\"true\"></div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 94,  489 => 93,  479 => 88,  476 => 85,  466 => 84,  454 => 81,  449 => 78,  439 => 77,  428 => 89,  426 => 84,  423 => 83,  421 => 77,  414 => 75,  409 => 74,  399 => 73,  388 => 96,  386 => 93,  383 => 92,  369 => 91,  367 => 73,  364 => 72,  347 => 71,  344 => 70,  334 => 69,  323 => 98,  321 => 69,  316 => 67,  307 => 66,  297 => 65,  287 => 61,  278 => 60,  268 => 59,  257 => 56,  247 => 55,  234 => 52,  224 => 51,  213 => 62,  211 => 59,  208 => 58,  206 => 55,  203 => 54,  201 => 51,  197 => 49,  190 => 45,  185 => 43,  182 => 42,  180 => 41,  172 => 39,  162 => 38,  150 => 100,  148 => 65,  145 => 64,  143 => 38,  138 => 36,  130 => 34,  127 => 33,  108 => 32,  105 => 31,  103 => 27,  102 => 26,  101 => 25,  100 => 23,  99 => 22,  98 => 21,  95 => 20,  91 => 18,  89 => 17,  86 => 16,  82 => 14,  80 => 13,  77 => 12,  73 => 10,  71 => 9,  68 => 8,  64 => 6,  62 => 5,  59 => 4,  57 => 3,  54 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @deprecated tag:v6.4.0.0 file will be removed #}

{% set filterItemId = 'filter-' ~ name ~ '-' ~ random() %}

{% if maxPoints is not defined %}
    {% set maxPoints = 5 %}
{% endif %}

{% if filterRatingActiveLabelStart is not defined %}
    {% set filterRatingActiveLabelStart = 'listing.filterRatingActiveLabelStart'|trans|sw_sanitize %}
{% endif %}

{% if filterRatingActiveLabelEndSingular is not defined %}
    {% set filterRatingActiveLabelEndSingular = 'listing.filterRatingActiveLabelEndSingular'|trans|sw_sanitize %}
{% endif %}

{% if filterRatingActiveLabelEnd is not defined %}
    {% set filterRatingActiveLabelEnd = 'listing.filterRatingActiveLabelEnd'|trans|sw_sanitize %}
{% endif %}

{% set filterRatingOptions = {
    name: name,
    maxPoints: maxPoints,
    snippets: {
        filterRatingActiveLabelStart: filterRatingActiveLabelStart,
        filterRatingActiveLabelEndSingular: filterRatingActiveLabelEndSingular,
        filterRatingActiveLabelEnd: filterRatingActiveLabelEnd,
        disabledFilterText: 'listing.disabledFilterTooltip'|trans|sw_sanitize
    }
} %}

{% block component_filter_rating %}
    {% if shopware.config.core.listing.showReview %}
        <div class=\"filter-rating filter-panel-item{% if not sidebar %} dropdown{% endif %}\"
             data-filter-rating=\"true\"
             data-filter-rating-options='{{ filterRatingOptions|json_encode }}'>

            {% block component_filter_rating_toggle %}
                <button class=\"filter-panel-item-toggle btn{% if sidebar %} btn-block{% endif %}\"
                        aria-expanded=\"false\"
                        {% if sidebar %}
                            data-toggle=\"collapse\"
                            data-target=\"#{{ filterItemId }}\"
                        {% else %}
                            data-toggle=\"dropdown\"
                            data-boundary=\"viewport\"
                            data-offset=\"0,8\"
                            aria-haspopup=\"true\"
                        {% endif %}>

                    {% block component_filter_rating_display_name %}
                        {{ displayName }}
                    {% endblock %}

                    {% block component_filter_rating_count %}
                        <span class=\"filter-rating-count\"></span>
                    {% endblock %}

                    {% block component_filter_rating_toggle_icon %}
                        {% sw_icon 'arrow-medium-down' style {'pack': 'solid', 'size': 'xs', 'class': 'filter-panel-item-toggle'} %}
                    {% endblock %}
                </button>
            {% endblock %}

            {% block component_filter_rating_dropdown %}
                <div class=\"filter-rating-dropdown filter-panel-item-dropdown{% if sidebar %} collapse{% else %} dropdown-menu{% endif %}\"
                     id=\"{{ filterItemId }}\">

                    {% block component_filter_rating_container %}
                        <div class=\"filter-rating-container\" data-rating-system=\"true\">
                            {% for point in 1..maxPoints %}

                                {% block component_filter_rating_point_label %}
                                    <label data-review-form-point=\"{{ point }}\"
                                           class=\"filter-rating-star {% if currentPoints >= point %} is-active{% endif %}\">

                                        {% block component_filter_rating_point_radio %}
                                            <input class=\"product-detail-review-form-radio\"
                                                   type=\"radio\"
                                                   name=\"points\"
                                                   value=\"{{ point }}\">
                                        {% endblock %}

                                        {% block component_filter_rating_point_radio_element %}
                                            {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                                                type: 'blank'
                                            } %}
                                        {% endblock %}
                                    </label>
                                {% endblock %}
                            {% endfor %}

                            {% block component_filter_rating_text_placeholder %}
                                <div data-rating-text=\"true\"></div>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-rating.html.twig");
    }
}
