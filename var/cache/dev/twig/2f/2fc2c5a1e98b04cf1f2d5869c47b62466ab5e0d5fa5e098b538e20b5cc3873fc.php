<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_1dc6750a215066b422f6e7dc87310d71220361d4b47a940cee8f2d961bfe84dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_800ed7198d22b92dec74b3260a76ebcb9f465a1e5e9487d56bdf8827250a8a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800ed7198d22b92dec74b3260a76ebcb9f465a1e5e9487d56bdf8827250a8a3c->enter($__internal_800ed7198d22b92dec74b3260a76ebcb9f465a1e5e9487d56bdf8827250a8a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800ed7198d22b92dec74b3260a76ebcb9f465a1e5e9487d56bdf8827250a8a3c->leave($__internal_800ed7198d22b92dec74b3260a76ebcb9f465a1e5e9487d56bdf8827250a8a3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cb37beb7194ece4b4d1b5270e3f1c645680ee869d0f02c2873e7c86bb88201e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb37beb7194ece4b4d1b5270e3f1c645680ee869d0f02c2873e7c86bb88201e->enter($__internal_6cb37beb7194ece4b4d1b5270e3f1c645680ee869d0f02c2873e7c86bb88201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_6cb37beb7194ece4b4d1b5270e3f1c645680ee869d0f02c2873e7c86bb88201e->leave($__internal_6cb37beb7194ece4b4d1b5270e3f1c645680ee869d0f02c2873e7c86bb88201e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
