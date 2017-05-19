<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c5d552debecedb3af009283e6ff6c763bdd7c2654b58620e308a2321dade2bd5 extends Twig_Template
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
        $__internal_1bebae4c353d275c78f0702ee0051c873777d5c06856a1e635d02cc54116a461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bebae4c353d275c78f0702ee0051c873777d5c06856a1e635d02cc54116a461->enter($__internal_1bebae4c353d275c78f0702ee0051c873777d5c06856a1e635d02cc54116a461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bebae4c353d275c78f0702ee0051c873777d5c06856a1e635d02cc54116a461->leave($__internal_1bebae4c353d275c78f0702ee0051c873777d5c06856a1e635d02cc54116a461_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d46fcc84097986ad604e301f6deb06177d3c9d924807ebe10034792270c7932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46fcc84097986ad604e301f6deb06177d3c9d924807ebe10034792270c7932c->enter($__internal_d46fcc84097986ad604e301f6deb06177d3c9d924807ebe10034792270c7932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d46fcc84097986ad604e301f6deb06177d3c9d924807ebe10034792270c7932c->leave($__internal_d46fcc84097986ad604e301f6deb06177d3c9d924807ebe10034792270c7932c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b224fb9f728969ebe5f79c0900a47e327a0baf54a4dbb9cc74b36cb05c97114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b224fb9f728969ebe5f79c0900a47e327a0baf54a4dbb9cc74b36cb05c97114->enter($__internal_7b224fb9f728969ebe5f79c0900a47e327a0baf54a4dbb9cc74b36cb05c97114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b224fb9f728969ebe5f79c0900a47e327a0baf54a4dbb9cc74b36cb05c97114->leave($__internal_7b224fb9f728969ebe5f79c0900a47e327a0baf54a4dbb9cc74b36cb05c97114_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dab6e0715b1e67517fe6bff23c654e59c3f2d1c11d42a906ee2943e0e507cbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab6e0715b1e67517fe6bff23c654e59c3f2d1c11d42a906ee2943e0e507cbc3->enter($__internal_dab6e0715b1e67517fe6bff23c654e59c3f2d1c11d42a906ee2943e0e507cbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dab6e0715b1e67517fe6bff23c654e59c3f2d1c11d42a906ee2943e0e507cbc3->leave($__internal_dab6e0715b1e67517fe6bff23c654e59c3f2d1c11d42a906ee2943e0e507cbc3_prof);

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
