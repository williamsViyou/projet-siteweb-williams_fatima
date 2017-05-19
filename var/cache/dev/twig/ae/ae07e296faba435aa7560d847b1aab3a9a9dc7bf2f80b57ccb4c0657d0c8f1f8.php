<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_261630e7635b41f0661eb50505af62fe5c4287e7260d06198b3f3776cae7a2be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_08090937d26e7bacf3e9c4c06ebafb8cd3235163ec10e9f7c0c3688d1b10d44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08090937d26e7bacf3e9c4c06ebafb8cd3235163ec10e9f7c0c3688d1b10d44f->enter($__internal_08090937d26e7bacf3e9c4c06ebafb8cd3235163ec10e9f7c0c3688d1b10d44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08090937d26e7bacf3e9c4c06ebafb8cd3235163ec10e9f7c0c3688d1b10d44f->leave($__internal_08090937d26e7bacf3e9c4c06ebafb8cd3235163ec10e9f7c0c3688d1b10d44f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0be4b8b108f57204250391bacc5be9c56ced90f98619037bbed97d715715c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0be4b8b108f57204250391bacc5be9c56ced90f98619037bbed97d715715c1f->enter($__internal_c0be4b8b108f57204250391bacc5be9c56ced90f98619037bbed97d715715c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c0be4b8b108f57204250391bacc5be9c56ced90f98619037bbed97d715715c1f->leave($__internal_c0be4b8b108f57204250391bacc5be9c56ced90f98619037bbed97d715715c1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
