<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_085bd61c57018c5abe9f42497c9477e8c64065994ad943d7ebdb8a88889f1264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e94d5b2eb754b1f8cb78a1c4a4a6f39185f1e3f4c9871ade09e21d5372b13de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94d5b2eb754b1f8cb78a1c4a4a6f39185f1e3f4c9871ade09e21d5372b13de2->enter($__internal_e94d5b2eb754b1f8cb78a1c4a4a6f39185f1e3f4c9871ade09e21d5372b13de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e94d5b2eb754b1f8cb78a1c4a4a6f39185f1e3f4c9871ade09e21d5372b13de2->leave($__internal_e94d5b2eb754b1f8cb78a1c4a4a6f39185f1e3f4c9871ade09e21d5372b13de2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_752b37ff160c01502ab99d13c9609536f3e49d758410562d7946de43107497e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752b37ff160c01502ab99d13c9609536f3e49d758410562d7946de43107497e3->enter($__internal_752b37ff160c01502ab99d13c9609536f3e49d758410562d7946de43107497e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_752b37ff160c01502ab99d13c9609536f3e49d758410562d7946de43107497e3->leave($__internal_752b37ff160c01502ab99d13c9609536f3e49d758410562d7946de43107497e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
