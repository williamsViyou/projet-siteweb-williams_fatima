<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_95814cbc2d0bcf8602e2a75a2cf125b789f6a128e713b60d2c7ed6858a501f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1330e009431c7dba1795273ef075255d43f654e9dcf270e9c50b4a5f6372199b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1330e009431c7dba1795273ef075255d43f654e9dcf270e9c50b4a5f6372199b->enter($__internal_1330e009431c7dba1795273ef075255d43f654e9dcf270e9c50b4a5f6372199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1330e009431c7dba1795273ef075255d43f654e9dcf270e9c50b4a5f6372199b->leave($__internal_1330e009431c7dba1795273ef075255d43f654e9dcf270e9c50b4a5f6372199b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_961d9873282ee3bff39332a68ee202f079f5b933117700033a4b3ec171113e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961d9873282ee3bff39332a68ee202f079f5b933117700033a4b3ec171113e95->enter($__internal_961d9873282ee3bff39332a68ee202f079f5b933117700033a4b3ec171113e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_961d9873282ee3bff39332a68ee202f079f5b933117700033a4b3ec171113e95->leave($__internal_961d9873282ee3bff39332a68ee202f079f5b933117700033a4b3ec171113e95_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
