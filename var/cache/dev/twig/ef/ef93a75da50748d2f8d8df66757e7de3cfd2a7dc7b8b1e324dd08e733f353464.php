<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab64882a5d884093826de7c4048d8d18a3e778bccf3458747774c4d2b9f33a1e extends Twig_Template
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
        $__internal_5a4ed6cd02c312e6551605356ab0518b77686daca9bf246a35dfd270325cadda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4ed6cd02c312e6551605356ab0518b77686daca9bf246a35dfd270325cadda->enter($__internal_5a4ed6cd02c312e6551605356ab0518b77686daca9bf246a35dfd270325cadda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a4ed6cd02c312e6551605356ab0518b77686daca9bf246a35dfd270325cadda->leave($__internal_5a4ed6cd02c312e6551605356ab0518b77686daca9bf246a35dfd270325cadda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f797a37e61173d728dc7d2735718b8631902d3f828e7a8bb5895690e7b9de128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f797a37e61173d728dc7d2735718b8631902d3f828e7a8bb5895690e7b9de128->enter($__internal_f797a37e61173d728dc7d2735718b8631902d3f828e7a8bb5895690e7b9de128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f797a37e61173d728dc7d2735718b8631902d3f828e7a8bb5895690e7b9de128->leave($__internal_f797a37e61173d728dc7d2735718b8631902d3f828e7a8bb5895690e7b9de128_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d06f9ecda2ab2ecf14296c2420cb0738da5c0a977e382abf981259b7a8ae511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06f9ecda2ab2ecf14296c2420cb0738da5c0a977e382abf981259b7a8ae511b->enter($__internal_d06f9ecda2ab2ecf14296c2420cb0738da5c0a977e382abf981259b7a8ae511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d06f9ecda2ab2ecf14296c2420cb0738da5c0a977e382abf981259b7a8ae511b->leave($__internal_d06f9ecda2ab2ecf14296c2420cb0738da5c0a977e382abf981259b7a8ae511b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02287bf06d5d1536ebbc22d36db99d47b7185e96a2d06677f9b2c75b86682dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02287bf06d5d1536ebbc22d36db99d47b7185e96a2d06677f9b2c75b86682dd4->enter($__internal_02287bf06d5d1536ebbc22d36db99d47b7185e96a2d06677f9b2c75b86682dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_02287bf06d5d1536ebbc22d36db99d47b7185e96a2d06677f9b2c75b86682dd4->leave($__internal_02287bf06d5d1536ebbc22d36db99d47b7185e96a2d06677f9b2c75b86682dd4_prof);

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
