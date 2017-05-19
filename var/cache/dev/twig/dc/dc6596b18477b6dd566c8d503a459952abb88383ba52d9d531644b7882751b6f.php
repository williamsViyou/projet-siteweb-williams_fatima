<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_50d2ec3e4285c712dec51935eaeafeca39623cc5a241394948283cfb6cc14eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_dff830c6e662bdc1128f621a503f3201689b047598e706ccb80c8053cd8864d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff830c6e662bdc1128f621a503f3201689b047598e706ccb80c8053cd8864d0->enter($__internal_dff830c6e662bdc1128f621a503f3201689b047598e706ccb80c8053cd8864d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff830c6e662bdc1128f621a503f3201689b047598e706ccb80c8053cd8864d0->leave($__internal_dff830c6e662bdc1128f621a503f3201689b047598e706ccb80c8053cd8864d0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24243ab610e5faf4b96e4a7443010a2dcfefd8ba2999e615b6c5efc6a927f6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24243ab610e5faf4b96e4a7443010a2dcfefd8ba2999e615b6c5efc6a927f6b2->enter($__internal_24243ab610e5faf4b96e4a7443010a2dcfefd8ba2999e615b6c5efc6a927f6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_24243ab610e5faf4b96e4a7443010a2dcfefd8ba2999e615b6c5efc6a927f6b2->leave($__internal_24243ab610e5faf4b96e4a7443010a2dcfefd8ba2999e615b6c5efc6a927f6b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
