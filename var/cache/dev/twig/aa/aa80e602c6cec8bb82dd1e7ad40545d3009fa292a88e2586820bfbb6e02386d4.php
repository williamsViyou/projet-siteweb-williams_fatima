<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9333b78c27e10fc3180f6e1751f5b2bfe9f1b5d5738a11ba41e98df5f6e08f8b extends Twig_Template
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
        $__internal_8ab4e7532e72df50693e9fd1d230eb534dd296c06be2b2cea2f10e36816037cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab4e7532e72df50693e9fd1d230eb534dd296c06be2b2cea2f10e36816037cf->enter($__internal_8ab4e7532e72df50693e9fd1d230eb534dd296c06be2b2cea2f10e36816037cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab4e7532e72df50693e9fd1d230eb534dd296c06be2b2cea2f10e36816037cf->leave($__internal_8ab4e7532e72df50693e9fd1d230eb534dd296c06be2b2cea2f10e36816037cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efb12275c604143d1a639f30dc314ee4757cc31f038ad3e02514fc002e37e4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb12275c604143d1a639f30dc314ee4757cc31f038ad3e02514fc002e37e4b2->enter($__internal_efb12275c604143d1a639f30dc314ee4757cc31f038ad3e02514fc002e37e4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_efb12275c604143d1a639f30dc314ee4757cc31f038ad3e02514fc002e37e4b2->leave($__internal_efb12275c604143d1a639f30dc314ee4757cc31f038ad3e02514fc002e37e4b2_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
