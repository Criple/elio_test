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

/* @Storefront/storefront/layout/cookie/cookie-permission.html.twig */
class __TwigTemplate_833fbf786a117eedd40d9e6408ff23e235053b868cb33b7c741b000f0c3ff8c5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_cookie_permission_inner' => [$this, 'block_layout_cookie_permission_inner'],
            'layout_cookie_permission_inner_content' => [$this, 'block_layout_cookie_permission_inner_content'],
            'layout_cookie_permission_inner_button' => [$this, 'block_layout_cookie_permission_inner_button'],
            'layout_cookie_permission_inner_button_deny' => [$this, 'block_layout_cookie_permission_inner_button_deny'],
            'layout_cookie_permission_inner_button_configuration' => [$this, 'block_layout_cookie_permission_inner_button_configuration'],
            'layout_cookie_permission_inner_button_accept_all' => [$this, 'block_layout_cookie_permission_inner_button_accept_all'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig"));

        // line 1
        $this->displayBlock('layout_cookie_permission_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_cookie_permission_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner"));

        // line 2
        echo "    ";
        $context["acceptAllCookies"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 2), "core", [], "any", false, false, false, 2), "basicInformation", [], "any", false, false, false, 2), "acceptAllCookies", [], "any", false, false, false, 2);
        // line 3
        echo "    <div
        class=\"cookie-permission-container\"
        data-cookie-permission=\"true\">
        <div class=\"container\">
            <div class=\"row align-items-center\">

                ";
        // line 9
        $this->displayBlock('layout_cookie_permission_inner_content', $context, $blocks);
        // line 16
        echo "
                ";
        // line 17
        $this->displayBlock('layout_cookie_permission_inner_button', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_layout_cookie_permission_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_content"));

        // line 10
        echo "                    <div class=\"col cookie-permission-content\">
                        ";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.message", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["shopware"] ?? null), "config", [], "any", false, false, false, 12), "core", [], "any", false, false, false, 12), "basicInformation", [], "any", false, false, false, 12), "privacyPage", [], "any", false, false, false, 12)])]);
        // line 13
        echo "
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_layout_cookie_permission_inner_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button"));

        // line 18
        echo "                    <div class=\"col-12 col-md-auto pr-2 \">
                        ";
        // line 19
        $this->displayBlock('layout_cookie_permission_inner_button_deny', $context, $blocks);
        // line 28
        echo "
                        ";
        // line 29
        $this->displayBlock('layout_cookie_permission_inner_button_configuration', $context, $blocks);
        // line 38
        echo "
                        ";
        // line 39
        if (($context["acceptAllCookies"] ?? null)) {
            // line 40
            echo "                            ";
            $this->displayBlock('layout_cookie_permission_inner_button_accept_all', $context, $blocks);
            // line 49
            echo "                        ";
        }
        // line 50
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_layout_cookie_permission_inner_button_deny($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_deny"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_deny"));

        // line 20
        echo "                            <span class=\"cookie-permission-button js-cookie-permission-button\">
                                <button
                                    type=\"submit\"
                                    class=\"btn ";
        // line 23
        echo ((($context["acceptAllCookies"] ?? null)) ? ("btn-outline-danger") : ("btn-secondary"));
        echo "\">
                                    ";
        // line 24
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.deny"));
        echo "
                                </button>
                            </span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_layout_cookie_permission_inner_button_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_configuration"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_configuration"));

        // line 30
        echo "                            <span class=\"js-cookie-configuration-button\">
                                <button
                                    type=\"submit\"
                                    class=\"btn ";
        // line 33
        echo ((($context["acceptAllCookies"] ?? null)) ? ("btn-secondary") : ("btn-primary"));
        echo "\">
                                    ";
        // line 34
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.configure"));
        echo "
                                </button>
                            </span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_layout_cookie_permission_inner_button_accept_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_accept_all"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_accept_all"));

        // line 41
        echo "                                <span class=\"js-cookie-accept-all-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 45
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.acceptAll"));
        echo "
                                    </button>
                                </span>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/cookie/cookie-permission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  251 => 45,  245 => 41,  235 => 40,  221 => 34,  217 => 33,  212 => 30,  202 => 29,  188 => 24,  184 => 23,  179 => 20,  169 => 19,  158 => 50,  155 => 49,  152 => 40,  150 => 39,  147 => 38,  145 => 29,  142 => 28,  140 => 19,  137 => 18,  127 => 17,  115 => 13,  113 => 12,  112 => 11,  109 => 10,  99 => 9,  86 => 52,  84 => 17,  81 => 16,  79 => 9,  71 => 3,  68 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_cookie_permission_inner %}
    {% set acceptAllCookies = shopware.config.core.basicInformation.acceptAllCookies %}
    <div
        class=\"cookie-permission-container\"
        data-cookie-permission=\"true\">
        <div class=\"container\">
            <div class=\"row align-items-center\">

                {% block layout_cookie_permission_inner_content %}
                    <div class=\"col cookie-permission-content\">
                        {{ \"cookie.message\"|trans({
                            '%url%': path('frontend.cms.page', { id: shopware.config.core.basicInformation.privacyPage })
                        })|raw }}
                    </div>
                {% endblock %}

                {% block layout_cookie_permission_inner_button %}
                    <div class=\"col-12 col-md-auto pr-2 \">
                        {% block layout_cookie_permission_inner_button_deny %}
                            <span class=\"cookie-permission-button js-cookie-permission-button\">
                                <button
                                    type=\"submit\"
                                    class=\"btn {{ acceptAllCookies ? 'btn-outline-danger' : 'btn-secondary' }}\">
                                    {{ \"cookie.deny\"|trans|sw_sanitize }}
                                </button>
                            </span>
                        {% endblock %}

                        {% block layout_cookie_permission_inner_button_configuration %}
                            <span class=\"js-cookie-configuration-button\">
                                <button
                                    type=\"submit\"
                                    class=\"btn {{ acceptAllCookies ? 'btn-secondary' : 'btn-primary' }}\">
                                    {{ \"cookie.configure\"|trans|sw_sanitize }}
                                </button>
                            </span>
                        {% endblock %}

                        {% if acceptAllCookies %}
                            {% block layout_cookie_permission_inner_button_accept_all %}
                                <span class=\"js-cookie-accept-all-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        {{ \"cookie.acceptAll\"|trans|sw_sanitize }}
                                    </button>
                                </span>
                            {% endblock %}
                        {% endif %}
                    </div>
                {% endblock %}
            </div>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/cookie/cookie-permission.html.twig");
    }
}
