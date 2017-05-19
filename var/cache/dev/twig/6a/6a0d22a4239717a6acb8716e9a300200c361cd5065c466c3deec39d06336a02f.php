<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_dd66a312952a22a830b693ebb66cf976f78e06fc94d0dec99e0a2589183e80ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_ed9c2aa8f86c48e2af08287f921cca7323039066fd92be78943be829848e0653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9c2aa8f86c48e2af08287f921cca7323039066fd92be78943be829848e0653->enter($__internal_ed9c2aa8f86c48e2af08287f921cca7323039066fd92be78943be829848e0653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9c2aa8f86c48e2af08287f921cca7323039066fd92be78943be829848e0653->leave($__internal_ed9c2aa8f86c48e2af08287f921cca7323039066fd92be78943be829848e0653_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9463c58873a8dc597f230c5f21c7ec9e599f943da7f219f6990fb8d5de3dbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9463c58873a8dc597f230c5f21c7ec9e599f943da7f219f6990fb8d5de3dbb5->enter($__internal_a9463c58873a8dc597f230c5f21c7ec9e599f943da7f219f6990fb8d5de3dbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_a9463c58873a8dc597f230c5f21c7ec9e599f943da7f219f6990fb8d5de3dbb5->leave($__internal_a9463c58873a8dc597f230c5f21c7ec9e599f943da7f219f6990fb8d5de3dbb5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
