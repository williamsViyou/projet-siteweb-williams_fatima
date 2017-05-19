<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_0e068463a390afd7ea603086f1ab32d4b805960fb1cbd9b419dfbdc11b6203c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_2eec22f80b24e2c3a230b2f3b04b978448e32b525bbe0551ab1151f6cdbfd4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eec22f80b24e2c3a230b2f3b04b978448e32b525bbe0551ab1151f6cdbfd4dc->enter($__internal_2eec22f80b24e2c3a230b2f3b04b978448e32b525bbe0551ab1151f6cdbfd4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eec22f80b24e2c3a230b2f3b04b978448e32b525bbe0551ab1151f6cdbfd4dc->leave($__internal_2eec22f80b24e2c3a230b2f3b04b978448e32b525bbe0551ab1151f6cdbfd4dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bb5c0c7177597959b7dd0a52697e2299d7f8ef2ed57d0063fa7579bfe3dfda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb5c0c7177597959b7dd0a52697e2299d7f8ef2ed57d0063fa7579bfe3dfda3->enter($__internal_1bb5c0c7177597959b7dd0a52697e2299d7f8ef2ed57d0063fa7579bfe3dfda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_1bb5c0c7177597959b7dd0a52697e2299d7f8ef2ed57d0063fa7579bfe3dfda3->leave($__internal_1bb5c0c7177597959b7dd0a52697e2299d7f8ef2ed57d0063fa7579bfe3dfda3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
