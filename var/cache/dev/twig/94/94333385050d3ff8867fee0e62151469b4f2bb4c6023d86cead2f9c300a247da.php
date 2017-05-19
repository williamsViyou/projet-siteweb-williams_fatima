<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b47e0935a24e2b6df27d896e31db8b78c2a97241d49f58def099ee1e972d1c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_0f27cb913365e4383bcf7786e849517721188dfd10ba9ec4dbe69e2f9fe6ffa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f27cb913365e4383bcf7786e849517721188dfd10ba9ec4dbe69e2f9fe6ffa2->enter($__internal_0f27cb913365e4383bcf7786e849517721188dfd10ba9ec4dbe69e2f9fe6ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f27cb913365e4383bcf7786e849517721188dfd10ba9ec4dbe69e2f9fe6ffa2->leave($__internal_0f27cb913365e4383bcf7786e849517721188dfd10ba9ec4dbe69e2f9fe6ffa2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_822b5469bb0751222112caae5e9fd270ed1bd8d193a3f044375caaa60a3b847b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822b5469bb0751222112caae5e9fd270ed1bd8d193a3f044375caaa60a3b847b->enter($__internal_822b5469bb0751222112caae5e9fd270ed1bd8d193a3f044375caaa60a3b847b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_822b5469bb0751222112caae5e9fd270ed1bd8d193a3f044375caaa60a3b847b->leave($__internal_822b5469bb0751222112caae5e9fd270ed1bd8d193a3f044375caaa60a3b847b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
