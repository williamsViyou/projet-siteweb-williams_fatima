<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2df80318637a4e7acc57639ba80f18da39b46b4780d81ea44b0952b33a3cabba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a28bdcf7126e1b174c68df75de4ae762180872c2c82d6b214bb57e856acbf377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28bdcf7126e1b174c68df75de4ae762180872c2c82d6b214bb57e856acbf377->enter($__internal_a28bdcf7126e1b174c68df75de4ae762180872c2c82d6b214bb57e856acbf377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a28bdcf7126e1b174c68df75de4ae762180872c2c82d6b214bb57e856acbf377->leave($__internal_a28bdcf7126e1b174c68df75de4ae762180872c2c82d6b214bb57e856acbf377_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f3d40b147c757e723e8ad17828445b7f08b42ebd37d26fd1570eb327a7e12e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3d40b147c757e723e8ad17828445b7f08b42ebd37d26fd1570eb327a7e12e7->enter($__internal_9f3d40b147c757e723e8ad17828445b7f08b42ebd37d26fd1570eb327a7e12e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9f3d40b147c757e723e8ad17828445b7f08b42ebd37d26fd1570eb327a7e12e7->leave($__internal_9f3d40b147c757e723e8ad17828445b7f08b42ebd37d26fd1570eb327a7e12e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
