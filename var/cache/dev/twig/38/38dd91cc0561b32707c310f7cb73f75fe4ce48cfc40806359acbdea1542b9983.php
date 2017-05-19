<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ee53c478632f46c7031335c43687013dfc425fb90b4cb17a148d8eb43e07022d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a749ea38f83a15ccffc127fc318563f64af90c8de279a2039f8fce635d0f5d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a749ea38f83a15ccffc127fc318563f64af90c8de279a2039f8fce635d0f5d81->enter($__internal_a749ea38f83a15ccffc127fc318563f64af90c8de279a2039f8fce635d0f5d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a749ea38f83a15ccffc127fc318563f64af90c8de279a2039f8fce635d0f5d81->leave($__internal_a749ea38f83a15ccffc127fc318563f64af90c8de279a2039f8fce635d0f5d81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d94d9bbcc41e0a45b2997b85a609e8bd7777597014ff8560435ee7595a354f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94d9bbcc41e0a45b2997b85a609e8bd7777597014ff8560435ee7595a354f3e->enter($__internal_d94d9bbcc41e0a45b2997b85a609e8bd7777597014ff8560435ee7595a354f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d94d9bbcc41e0a45b2997b85a609e8bd7777597014ff8560435ee7595a354f3e->leave($__internal_d94d9bbcc41e0a45b2997b85a609e8bd7777597014ff8560435ee7595a354f3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
