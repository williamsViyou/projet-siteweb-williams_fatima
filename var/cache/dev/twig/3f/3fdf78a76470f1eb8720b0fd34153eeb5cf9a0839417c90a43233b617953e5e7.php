<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_0a5ee9fc30bb45d98b3828d7a45acca58108fe2ee13e5ca1bfeedf90fc4ebf07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_841a2797b123b419153217aa35c4245f738d6c3af92fb1d4dc48e857afd7f3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841a2797b123b419153217aa35c4245f738d6c3af92fb1d4dc48e857afd7f3b6->enter($__internal_841a2797b123b419153217aa35c4245f738d6c3af92fb1d4dc48e857afd7f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_841a2797b123b419153217aa35c4245f738d6c3af92fb1d4dc48e857afd7f3b6->leave($__internal_841a2797b123b419153217aa35c4245f738d6c3af92fb1d4dc48e857afd7f3b6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffdb69e1a2b7b4d3922a2b8a39352be17b7808a220211a44305e496e1cce70e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdb69e1a2b7b4d3922a2b8a39352be17b7808a220211a44305e496e1cce70e1->enter($__internal_ffdb69e1a2b7b4d3922a2b8a39352be17b7808a220211a44305e496e1cce70e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ffdb69e1a2b7b4d3922a2b8a39352be17b7808a220211a44305e496e1cce70e1->leave($__internal_ffdb69e1a2b7b4d3922a2b8a39352be17b7808a220211a44305e496e1cce70e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
