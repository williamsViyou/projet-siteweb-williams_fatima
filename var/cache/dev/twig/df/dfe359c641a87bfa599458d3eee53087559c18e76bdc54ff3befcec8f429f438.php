<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b29b04297b49d297df4e78b4c0aa54b5678280f924e758835e60216b86d6350a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b06a2334e5331b55a6e44bde4e7efebba380b47ed3168647d23ae4f82ffd2254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06a2334e5331b55a6e44bde4e7efebba380b47ed3168647d23ae4f82ffd2254->enter($__internal_b06a2334e5331b55a6e44bde4e7efebba380b47ed3168647d23ae4f82ffd2254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06a2334e5331b55a6e44bde4e7efebba380b47ed3168647d23ae4f82ffd2254->leave($__internal_b06a2334e5331b55a6e44bde4e7efebba380b47ed3168647d23ae4f82ffd2254_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_699f32dc4438b6def5d0de23e6c5a674a30ea7eb9d5986812276a596fe50bfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699f32dc4438b6def5d0de23e6c5a674a30ea7eb9d5986812276a596fe50bfb5->enter($__internal_699f32dc4438b6def5d0de23e6c5a674a30ea7eb9d5986812276a596fe50bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_699f32dc4438b6def5d0de23e6c5a674a30ea7eb9d5986812276a596fe50bfb5->leave($__internal_699f32dc4438b6def5d0de23e6c5a674a30ea7eb9d5986812276a596fe50bfb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
