<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_2b9f22093dc1bc64e301988a616d25db1c94362f4d971dfa2cd62a07a5f7af3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_284f376fba2da7129b7d57c14394202100e0f9692850e4bc5242be8add961951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284f376fba2da7129b7d57c14394202100e0f9692850e4bc5242be8add961951->enter($__internal_284f376fba2da7129b7d57c14394202100e0f9692850e4bc5242be8add961951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284f376fba2da7129b7d57c14394202100e0f9692850e4bc5242be8add961951->leave($__internal_284f376fba2da7129b7d57c14394202100e0f9692850e4bc5242be8add961951_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d8c6ad96b276beb84b2ce90e8340938acfccdf11c77e9eedbd59d0585ba446b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8c6ad96b276beb84b2ce90e8340938acfccdf11c77e9eedbd59d0585ba446b->enter($__internal_2d8c6ad96b276beb84b2ce90e8340938acfccdf11c77e9eedbd59d0585ba446b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2d8c6ad96b276beb84b2ce90e8340938acfccdf11c77e9eedbd59d0585ba446b->leave($__internal_2d8c6ad96b276beb84b2ce90e8340938acfccdf11c77e9eedbd59d0585ba446b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
