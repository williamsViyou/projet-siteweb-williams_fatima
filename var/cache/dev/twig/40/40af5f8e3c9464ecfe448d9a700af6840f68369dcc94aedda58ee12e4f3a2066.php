<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_261e2fbed80541f26f3fc3e4c9b3e7237a3edca0fba7db9baa00ca1b050dc640 extends Twig_Template
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
        $__internal_117ebbfe5b4f00cf414108a15730757095e8b797a768e45cc320111b2ef84670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117ebbfe5b4f00cf414108a15730757095e8b797a768e45cc320111b2ef84670->enter($__internal_117ebbfe5b4f00cf414108a15730757095e8b797a768e45cc320111b2ef84670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117ebbfe5b4f00cf414108a15730757095e8b797a768e45cc320111b2ef84670->leave($__internal_117ebbfe5b4f00cf414108a15730757095e8b797a768e45cc320111b2ef84670_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13e59f96f195b737d49932c00d4c0fdfd9ec74b77626fe67f3b56f5afd32dc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e59f96f195b737d49932c00d4c0fdfd9ec74b77626fe67f3b56f5afd32dc85->enter($__internal_13e59f96f195b737d49932c00d4c0fdfd9ec74b77626fe67f3b56f5afd32dc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_13e59f96f195b737d49932c00d4c0fdfd9ec74b77626fe67f3b56f5afd32dc85->leave($__internal_13e59f96f195b737d49932c00d4c0fdfd9ec74b77626fe67f3b56f5afd32dc85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bca7f4c49dbd92cec89eb51c4824d18e6883ceff6c22210f44ae177b23cdb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bca7f4c49dbd92cec89eb51c4824d18e6883ceff6c22210f44ae177b23cdb46->enter($__internal_8bca7f4c49dbd92cec89eb51c4824d18e6883ceff6c22210f44ae177b23cdb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8bca7f4c49dbd92cec89eb51c4824d18e6883ceff6c22210f44ae177b23cdb46->leave($__internal_8bca7f4c49dbd92cec89eb51c4824d18e6883ceff6c22210f44ae177b23cdb46_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e49c650c57aaeef2881efe2acb3fd03b159a7c60562f14ca3ff5864c3f85d1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49c650c57aaeef2881efe2acb3fd03b159a7c60562f14ca3ff5864c3f85d1cc->enter($__internal_e49c650c57aaeef2881efe2acb3fd03b159a7c60562f14ca3ff5864c3f85d1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e49c650c57aaeef2881efe2acb3fd03b159a7c60562f14ca3ff5864c3f85d1cc->leave($__internal_e49c650c57aaeef2881efe2acb3fd03b159a7c60562f14ca3ff5864c3f85d1cc_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
