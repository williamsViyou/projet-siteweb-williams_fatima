<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5c7a73f12e1bd7dee241ce535dbb5cb211cf3bb028b98164b734fb675fa151b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d46bbeaff74fabf1c23e56c5154c34c3c2be91085a6025bdec0c83df27d979e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46bbeaff74fabf1c23e56c5154c34c3c2be91085a6025bdec0c83df27d979e7->enter($__internal_d46bbeaff74fabf1c23e56c5154c34c3c2be91085a6025bdec0c83df27d979e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46bbeaff74fabf1c23e56c5154c34c3c2be91085a6025bdec0c83df27d979e7->leave($__internal_d46bbeaff74fabf1c23e56c5154c34c3c2be91085a6025bdec0c83df27d979e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c646d4d51e36051c997ae261e531084912c3feba1f6d1fa27eeeefe148e55e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c646d4d51e36051c997ae261e531084912c3feba1f6d1fa27eeeefe148e55e1b->enter($__internal_c646d4d51e36051c997ae261e531084912c3feba1f6d1fa27eeeefe148e55e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c646d4d51e36051c997ae261e531084912c3feba1f6d1fa27eeeefe148e55e1b->leave($__internal_c646d4d51e36051c997ae261e531084912c3feba1f6d1fa27eeeefe148e55e1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
