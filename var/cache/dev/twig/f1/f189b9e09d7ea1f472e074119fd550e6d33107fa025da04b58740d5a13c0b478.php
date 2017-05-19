<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f6298dac26061e9f6a57ab4d0186ac35760b179a8ee795f906d69745fbd2b432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_3ac548573b9bd397b49d91fe28e4adcc25b07d67fdb7b3fb576a73bbc972bba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac548573b9bd397b49d91fe28e4adcc25b07d67fdb7b3fb576a73bbc972bba3->enter($__internal_3ac548573b9bd397b49d91fe28e4adcc25b07d67fdb7b3fb576a73bbc972bba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac548573b9bd397b49d91fe28e4adcc25b07d67fdb7b3fb576a73bbc972bba3->leave($__internal_3ac548573b9bd397b49d91fe28e4adcc25b07d67fdb7b3fb576a73bbc972bba3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47457473831af2cd7ccdb423d0fc2fdd7f80c6df1f4c25896b803b9f3a0d45b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47457473831af2cd7ccdb423d0fc2fdd7f80c6df1f4c25896b803b9f3a0d45b6->enter($__internal_47457473831af2cd7ccdb423d0fc2fdd7f80c6df1f4c25896b803b9f3a0d45b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_47457473831af2cd7ccdb423d0fc2fdd7f80c6df1f4c25896b803b9f3a0d45b6->leave($__internal_47457473831af2cd7ccdb423d0fc2fdd7f80c6df1f4c25896b803b9f3a0d45b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
