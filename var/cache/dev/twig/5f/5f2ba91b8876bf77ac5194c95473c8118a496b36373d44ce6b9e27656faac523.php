<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d12ddcdaa278ba3eb983ff1cf7275ee16c5e642eac599de703a95872a018b076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98a29c432c51789a85bfa426f16263aae85c2d98ef004e660991f59d950e1196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a29c432c51789a85bfa426f16263aae85c2d98ef004e660991f59d950e1196->enter($__internal_98a29c432c51789a85bfa426f16263aae85c2d98ef004e660991f59d950e1196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a29c432c51789a85bfa426f16263aae85c2d98ef004e660991f59d950e1196->leave($__internal_98a29c432c51789a85bfa426f16263aae85c2d98ef004e660991f59d950e1196_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a9620e14fd4ddf3b84d2cb1cba4fbab8eb384145f7caca220f954a7f1491bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9620e14fd4ddf3b84d2cb1cba4fbab8eb384145f7caca220f954a7f1491bfb->enter($__internal_7a9620e14fd4ddf3b84d2cb1cba4fbab8eb384145f7caca220f954a7f1491bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a9620e14fd4ddf3b84d2cb1cba4fbab8eb384145f7caca220f954a7f1491bfb->leave($__internal_7a9620e14fd4ddf3b84d2cb1cba4fbab8eb384145f7caca220f954a7f1491bfb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b07c15515943da521e53b20f49cedb3cf972fff9df71d625db860e9176cd614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b07c15515943da521e53b20f49cedb3cf972fff9df71d625db860e9176cd614->enter($__internal_5b07c15515943da521e53b20f49cedb3cf972fff9df71d625db860e9176cd614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5b07c15515943da521e53b20f49cedb3cf972fff9df71d625db860e9176cd614->leave($__internal_5b07c15515943da521e53b20f49cedb3cf972fff9df71d625db860e9176cd614_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
