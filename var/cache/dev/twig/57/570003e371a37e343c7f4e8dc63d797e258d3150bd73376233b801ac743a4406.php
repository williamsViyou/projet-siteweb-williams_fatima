<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8aa4ba3b5532e13ad59f2145e36ef4140547f9bd1780f9318ceb884b8670055d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_826a20a32c33a2c69ca868a20c1390f520efb2a93e5f70033fd2f8536cdc5a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826a20a32c33a2c69ca868a20c1390f520efb2a93e5f70033fd2f8536cdc5a99->enter($__internal_826a20a32c33a2c69ca868a20c1390f520efb2a93e5f70033fd2f8536cdc5a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826a20a32c33a2c69ca868a20c1390f520efb2a93e5f70033fd2f8536cdc5a99->leave($__internal_826a20a32c33a2c69ca868a20c1390f520efb2a93e5f70033fd2f8536cdc5a99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba7e9fc1c2174400ca6199f2e7917e2e55f32be5199bfb2acd53ce9de298542f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7e9fc1c2174400ca6199f2e7917e2e55f32be5199bfb2acd53ce9de298542f->enter($__internal_ba7e9fc1c2174400ca6199f2e7917e2e55f32be5199bfb2acd53ce9de298542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ba7e9fc1c2174400ca6199f2e7917e2e55f32be5199bfb2acd53ce9de298542f->leave($__internal_ba7e9fc1c2174400ca6199f2e7917e2e55f32be5199bfb2acd53ce9de298542f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
