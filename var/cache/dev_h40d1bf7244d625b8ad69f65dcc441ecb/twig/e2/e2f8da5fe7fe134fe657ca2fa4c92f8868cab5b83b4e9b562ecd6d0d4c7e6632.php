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

/* @DockwareSamplePlugin/storefront/page/fastorder.html.twig */
class __TwigTemplate_3edda043e929da73f2fce73afa0a7b0e02dc03d7170c9a8b324cd83a4734c0b5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_content' => [$this, 'block_base_content'],
            'page_product_detail_buy_form_inner_csrf' => [$this, 'block_page_product_detail_buy_form_inner_csrf'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_buy_container' => [$this, 'block_page_product_buy_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DockwareSamplePlugin/storefront/page/fastorder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DockwareSamplePlugin/storefront/page/fastorder.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@DockwareSamplePlugin/storefront/page/fastorder.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-6 col-md-4\">
            <form
                    id=\"productDetailPageBuyProductForm\"
                    action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.fastorder.addtocart");
        echo "\"
                    method=\"post\">

                ";
        // line 12
        $this->displayBlock('page_product_detail_buy_form_inner_csrf', $context, $blocks);
        // line 15
        echo "                <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.cart.offcanvas\">
                ";
        // line 16
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 42
        echo "            </form>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 col-sm-5 col-md-3\">
            <div class=\"product-action\">
                <button class=\"btn btn-block btn-buy\" title=\"Add to shopping cart\" form=\"productDetailPageBuyProductForm\">Add to shopping cart</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_page_product_detail_buy_form_inner_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form_inner_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form_inner_csrf"));

        // line 13
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.fastorder.addtocart");
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        // line 17
        echo "
                    <div class=\"form-row buy-widget-container\">
                        ";
        // line 19
        $this->displayBlock('page_product_buy_container', $context, $blocks);
        // line 40
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_page_product_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_buy_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_buy_container"));

        // line 20
        echo "
                            <div class=\"col-8\">
                                <p>Article</p>
                            </div>
                            <div class=\"col-4\">
                                <p>Quantity</p>
                            </div>
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "                                <div class=\"col-8\">
                                    <div class=\"product-action\">
                                        <input type=\"text\" name=\"productData[";
            // line 30
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "][article]\" class=\"form-control\" placeholder=\"Article\" />
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"product-action\">
                                        <input type=\"number\" placeholder=\"Quantity\" class=\"form-control\" name=\"productData[";
            // line 35
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "][quantity]\" />
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@DockwareSamplePlugin/storefront/page/fastorder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 39,  197 => 35,  189 => 30,  185 => 28,  181 => 27,  172 => 20,  162 => 19,  151 => 40,  149 => 19,  145 => 17,  135 => 16,  122 => 13,  112 => 12,  91 => 42,  89 => 16,  86 => 15,  84 => 12,  78 => 9,  71 => 4,  61 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{% block base_content %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-6 col-md-4\">
            <form
                    id=\"productDetailPageBuyProductForm\"
                    action=\"{{ path('frontend.fastorder.addtocart') }}\"
                    method=\"post\">

                {% block page_product_detail_buy_form_inner_csrf %}
                    {{ sw_csrf('frontend.fastorder.addtocart') }}
                {% endblock %}
                <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.cart.offcanvas\">
                {% block page_product_detail_buy_container %}

                    <div class=\"form-row buy-widget-container\">
                        {% block page_product_buy_container %}

                            <div class=\"col-8\">
                                <p>Article</p>
                            </div>
                            <div class=\"col-4\">
                                <p>Quantity</p>
                            </div>
                            {% for i in 0..9 %}
                                <div class=\"col-8\">
                                    <div class=\"product-action\">
                                        <input type=\"text\" name=\"productData[{{ i }}][article]\" class=\"form-control\" placeholder=\"Article\" />
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"product-action\">
                                        <input type=\"number\" placeholder=\"Quantity\" class=\"form-control\" name=\"productData[{{ i }}][quantity]\" />
                                    </div>
                                </div>
                            {% endfor %}
                        {% endblock %}
                    </div>
                {% endblock %}
            </form>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 col-sm-5 col-md-3\">
            <div class=\"product-action\">
                <button class=\"btn btn-block btn-buy\" title=\"Add to shopping cart\" form=\"productDetailPageBuyProductForm\">Add to shopping cart</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "@DockwareSamplePlugin/storefront/page/fastorder.html.twig", "/var/www/html/custom/plugins/DockwareSamplePlugin/src/Resources/views/storefront/page/fastorder.html.twig");
    }
}
