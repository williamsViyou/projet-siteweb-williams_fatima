<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_603ce49b3646283235c6d1f9ae84731d4c8ea93b7e12b361c3f948931490a0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_05dd93528c1232b11c24d60cc7d32ce12ac523260f4c1567c6c38b253930003c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dd93528c1232b11c24d60cc7d32ce12ac523260f4c1567c6c38b253930003c->enter($__internal_05dd93528c1232b11c24d60cc7d32ce12ac523260f4c1567c6c38b253930003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05dd93528c1232b11c24d60cc7d32ce12ac523260f4c1567c6c38b253930003c->leave($__internal_05dd93528c1232b11c24d60cc7d32ce12ac523260f4c1567c6c38b253930003c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_015e8f72ac1af1ab58f06a2bd7f3c3411e75072a433c4e3f05b7d1371493efb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015e8f72ac1af1ab58f06a2bd7f3c3411e75072a433c4e3f05b7d1371493efb7->enter($__internal_015e8f72ac1af1ab58f06a2bd7f3c3411e75072a433c4e3f05b7d1371493efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_015e8f72ac1af1ab58f06a2bd7f3c3411e75072a433c4e3f05b7d1371493efb7->leave($__internal_015e8f72ac1af1ab58f06a2bd7f3c3411e75072a433c4e3f05b7d1371493efb7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
