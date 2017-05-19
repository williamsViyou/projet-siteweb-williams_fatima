<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cc897ed0ce5134dcd13988586111705b59128cde34a4e8c73a51c6b48666a7b7 extends Twig_Template
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
        $__internal_d62c7658ab1423815067c156b8d7e5f861a27743c5aef993648fc47d0099721f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62c7658ab1423815067c156b8d7e5f861a27743c5aef993648fc47d0099721f->enter($__internal_d62c7658ab1423815067c156b8d7e5f861a27743c5aef993648fc47d0099721f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d62c7658ab1423815067c156b8d7e5f861a27743c5aef993648fc47d0099721f->leave($__internal_d62c7658ab1423815067c156b8d7e5f861a27743c5aef993648fc47d0099721f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be24ca7c13fa64ab567329c339e3bff37354e7ac649fa2bea5e465b190121fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be24ca7c13fa64ab567329c339e3bff37354e7ac649fa2bea5e465b190121fae->enter($__internal_be24ca7c13fa64ab567329c339e3bff37354e7ac649fa2bea5e465b190121fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_be24ca7c13fa64ab567329c339e3bff37354e7ac649fa2bea5e465b190121fae->leave($__internal_be24ca7c13fa64ab567329c339e3bff37354e7ac649fa2bea5e465b190121fae_prof);

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
