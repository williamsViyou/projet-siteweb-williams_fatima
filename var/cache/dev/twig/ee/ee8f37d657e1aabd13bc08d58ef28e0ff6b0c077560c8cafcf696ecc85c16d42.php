<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_97f439b1c1640448fa96a0278cdf7300184af3ff8ccac76469949da5facb7bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_921692d82129465f52bb238e9d652c37aad8c2dc8fe4650852bfaca9097d2514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921692d82129465f52bb238e9d652c37aad8c2dc8fe4650852bfaca9097d2514->enter($__internal_921692d82129465f52bb238e9d652c37aad8c2dc8fe4650852bfaca9097d2514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921692d82129465f52bb238e9d652c37aad8c2dc8fe4650852bfaca9097d2514->leave($__internal_921692d82129465f52bb238e9d652c37aad8c2dc8fe4650852bfaca9097d2514_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b34a4bac5c7291084efd98c27dbeb8e6f3e1c6ec4f442ce15e058a15b3aae208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34a4bac5c7291084efd98c27dbeb8e6f3e1c6ec4f442ce15e058a15b3aae208->enter($__internal_b34a4bac5c7291084efd98c27dbeb8e6f3e1c6ec4f442ce15e058a15b3aae208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b34a4bac5c7291084efd98c27dbeb8e6f3e1c6ec4f442ce15e058a15b3aae208->leave($__internal_b34a4bac5c7291084efd98c27dbeb8e6f3e1c6ec4f442ce15e058a15b3aae208_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44a25a8f55a169c5bb05ef7ef66cc406e85cd6674d522e457acc8f7d7446c281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a25a8f55a169c5bb05ef7ef66cc406e85cd6674d522e457acc8f7d7446c281->enter($__internal_44a25a8f55a169c5bb05ef7ef66cc406e85cd6674d522e457acc8f7d7446c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44a25a8f55a169c5bb05ef7ef66cc406e85cd6674d522e457acc8f7d7446c281->leave($__internal_44a25a8f55a169c5bb05ef7ef66cc406e85cd6674d522e457acc8f7d7446c281_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb2888971675918aa6deec02fafea3ad1b27b257b22cc319c9c1207e9cc7deaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2888971675918aa6deec02fafea3ad1b27b257b22cc319c9c1207e9cc7deaf->enter($__internal_bb2888971675918aa6deec02fafea3ad1b27b257b22cc319c9c1207e9cc7deaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bb2888971675918aa6deec02fafea3ad1b27b257b22cc319c9c1207e9cc7deaf->leave($__internal_bb2888971675918aa6deec02fafea3ad1b27b257b22cc319c9c1207e9cc7deaf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
