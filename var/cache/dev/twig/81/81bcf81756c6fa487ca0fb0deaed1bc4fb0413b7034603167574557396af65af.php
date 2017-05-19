<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_138c458efedf33ac644f6d828af18ed7fca96e2e110d4dc184a0c9c82fd1c3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c36633602e573a1a89a3014a67501299b6237d1e98d698e64e17ba83e0833ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36633602e573a1a89a3014a67501299b6237d1e98d698e64e17ba83e0833ac3->enter($__internal_c36633602e573a1a89a3014a67501299b6237d1e98d698e64e17ba83e0833ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c36633602e573a1a89a3014a67501299b6237d1e98d698e64e17ba83e0833ac3->leave($__internal_c36633602e573a1a89a3014a67501299b6237d1e98d698e64e17ba83e0833ac3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e68fd7ec2270a41f6aba9081320e60d1381b4a89717b849c56f522b35f791c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e68fd7ec2270a41f6aba9081320e60d1381b4a89717b849c56f522b35f791c2->enter($__internal_9e68fd7ec2270a41f6aba9081320e60d1381b4a89717b849c56f522b35f791c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_9e68fd7ec2270a41f6aba9081320e60d1381b4a89717b849c56f522b35f791c2->leave($__internal_9e68fd7ec2270a41f6aba9081320e60d1381b4a89717b849c56f522b35f791c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
