<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_ff1a2236b07787d256ebdacb7ca0c9b3c9ba52bc1fe4810b6325778a936f426a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7e5cedc85be13cd9529d2d52230149bc9c19e54f422a3b7e57a3b19dffa2b9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5cedc85be13cd9529d2d52230149bc9c19e54f422a3b7e57a3b19dffa2b9fd->enter($__internal_7e5cedc85be13cd9529d2d52230149bc9c19e54f422a3b7e57a3b19dffa2b9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5cedc85be13cd9529d2d52230149bc9c19e54f422a3b7e57a3b19dffa2b9fd->leave($__internal_7e5cedc85be13cd9529d2d52230149bc9c19e54f422a3b7e57a3b19dffa2b9fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1aa2f313e3b1db7dd854f2d81cc6df6dc7901375922853e45cebe202d32f94ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa2f313e3b1db7dd854f2d81cc6df6dc7901375922853e45cebe202d32f94ee->enter($__internal_1aa2f313e3b1db7dd854f2d81cc6df6dc7901375922853e45cebe202d32f94ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_1aa2f313e3b1db7dd854f2d81cc6df6dc7901375922853e45cebe202d32f94ee->leave($__internal_1aa2f313e3b1db7dd854f2d81cc6df6dc7901375922853e45cebe202d32f94ee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
