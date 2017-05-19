<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_8d69faf02654ebebf4cc2ad9ca6829d3b9f724de4dea807666089417e9d270a2 extends Twig_Template
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
        $__internal_c3d734f39a121437c70fb3bc1af7cd64f0d9450cf40758032b276f5f35b90b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d734f39a121437c70fb3bc1af7cd64f0d9450cf40758032b276f5f35b90b5c->enter($__internal_c3d734f39a121437c70fb3bc1af7cd64f0d9450cf40758032b276f5f35b90b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d734f39a121437c70fb3bc1af7cd64f0d9450cf40758032b276f5f35b90b5c->leave($__internal_c3d734f39a121437c70fb3bc1af7cd64f0d9450cf40758032b276f5f35b90b5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe1e5186a78997e784ba1b6e265a79211898a458c08af3e1bcece7507367d3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1e5186a78997e784ba1b6e265a79211898a458c08af3e1bcece7507367d3ec->enter($__internal_fe1e5186a78997e784ba1b6e265a79211898a458c08af3e1bcece7507367d3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_fe1e5186a78997e784ba1b6e265a79211898a458c08af3e1bcece7507367d3ec->leave($__internal_fe1e5186a78997e784ba1b6e265a79211898a458c08af3e1bcece7507367d3ec_prof);

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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
