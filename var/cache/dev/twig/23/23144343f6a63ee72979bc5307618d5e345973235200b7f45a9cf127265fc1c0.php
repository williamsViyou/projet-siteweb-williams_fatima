<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_97961b13129b244db00a4ed93691ba9afaa7abf4060c0ef96ea4356deb2127ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_60c8437ae32f0d030e37a4f3606b4fd4e64797733c2c88be05df23db2857c972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c8437ae32f0d030e37a4f3606b4fd4e64797733c2c88be05df23db2857c972->enter($__internal_60c8437ae32f0d030e37a4f3606b4fd4e64797733c2c88be05df23db2857c972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60c8437ae32f0d030e37a4f3606b4fd4e64797733c2c88be05df23db2857c972->leave($__internal_60c8437ae32f0d030e37a4f3606b4fd4e64797733c2c88be05df23db2857c972_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_220f1a48e492dd8ed1f1557b3005eb4752b711a22fe1a221162bcfb927be2d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220f1a48e492dd8ed1f1557b3005eb4752b711a22fe1a221162bcfb927be2d01->enter($__internal_220f1a48e492dd8ed1f1557b3005eb4752b711a22fe1a221162bcfb927be2d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_220f1a48e492dd8ed1f1557b3005eb4752b711a22fe1a221162bcfb927be2d01->leave($__internal_220f1a48e492dd8ed1f1557b3005eb4752b711a22fe1a221162bcfb927be2d01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
