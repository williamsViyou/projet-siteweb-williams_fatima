<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_086c03d1f0084bdd7a713f05f967bf963408c7ad4ee58f869d35557422f96d93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_6a37bded3490abffd075150688c4db0c65f52f68f8f2fa41fafc99b1a4e840b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a37bded3490abffd075150688c4db0c65f52f68f8f2fa41fafc99b1a4e840b4->enter($__internal_6a37bded3490abffd075150688c4db0c65f52f68f8f2fa41fafc99b1a4e840b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a37bded3490abffd075150688c4db0c65f52f68f8f2fa41fafc99b1a4e840b4->leave($__internal_6a37bded3490abffd075150688c4db0c65f52f68f8f2fa41fafc99b1a4e840b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6976f0482c17eabd238bbffdff3050f9c9b954e2bcfc5da8df0de1bce5875973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6976f0482c17eabd238bbffdff3050f9c9b954e2bcfc5da8df0de1bce5875973->enter($__internal_6976f0482c17eabd238bbffdff3050f9c9b954e2bcfc5da8df0de1bce5875973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6976f0482c17eabd238bbffdff3050f9c9b954e2bcfc5da8df0de1bce5875973->leave($__internal_6976f0482c17eabd238bbffdff3050f9c9b954e2bcfc5da8df0de1bce5875973_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
