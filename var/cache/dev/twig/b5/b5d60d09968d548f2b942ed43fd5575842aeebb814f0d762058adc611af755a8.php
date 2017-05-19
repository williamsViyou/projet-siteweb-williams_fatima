<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0b7a93886094db129f263543f7b343eabdc8b890cd67fb9d4d0c2437089c2085 extends Twig_Template
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
        $__internal_4d7c139a98219b3453109710ddab87b5baae58ad14a048ae13cd40b585e4efbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7c139a98219b3453109710ddab87b5baae58ad14a048ae13cd40b585e4efbd->enter($__internal_4d7c139a98219b3453109710ddab87b5baae58ad14a048ae13cd40b585e4efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7c139a98219b3453109710ddab87b5baae58ad14a048ae13cd40b585e4efbd->leave($__internal_4d7c139a98219b3453109710ddab87b5baae58ad14a048ae13cd40b585e4efbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfa57187aff0064cbefa3c0b7e057ce67fac06ee4aba5342bab56ded5ee0e8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa57187aff0064cbefa3c0b7e057ce67fac06ee4aba5342bab56ded5ee0e8e3->enter($__internal_dfa57187aff0064cbefa3c0b7e057ce67fac06ee4aba5342bab56ded5ee0e8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_dfa57187aff0064cbefa3c0b7e057ce67fac06ee4aba5342bab56ded5ee0e8e3->leave($__internal_dfa57187aff0064cbefa3c0b7e057ce67fac06ee4aba5342bab56ded5ee0e8e3_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
