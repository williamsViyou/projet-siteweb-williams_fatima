<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_f7ff9c8926f6e0b93f534d4eb391dd88da51d3affbc50fccf4ad1f46cabe4dc2 extends Twig_Template
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
        $__internal_6278ecc366e35eeeaec1f8d61376a296784c79f83f0b406d8c22c8be8477cf29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6278ecc366e35eeeaec1f8d61376a296784c79f83f0b406d8c22c8be8477cf29->enter($__internal_6278ecc366e35eeeaec1f8d61376a296784c79f83f0b406d8c22c8be8477cf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6278ecc366e35eeeaec1f8d61376a296784c79f83f0b406d8c22c8be8477cf29->leave($__internal_6278ecc366e35eeeaec1f8d61376a296784c79f83f0b406d8c22c8be8477cf29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd2318084800dd125896ddf24348b0293d51cfd3a8a710ed7eebaaf20505f7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2318084800dd125896ddf24348b0293d51cfd3a8a710ed7eebaaf20505f7d8->enter($__internal_cd2318084800dd125896ddf24348b0293d51cfd3a8a710ed7eebaaf20505f7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_cd2318084800dd125896ddf24348b0293d51cfd3a8a710ed7eebaaf20505f7d8->leave($__internal_cd2318084800dd125896ddf24348b0293d51cfd3a8a710ed7eebaaf20505f7d8_prof);

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
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
