<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_2254ca6ecd92fcd62b8edeecd817d7f7e8b89f9a667a697c043ab5ea69fbf909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_99d61c6838dae2f11a809de6d377aba199035f89393c4e3efdcb9e4b2d6786e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d61c6838dae2f11a809de6d377aba199035f89393c4e3efdcb9e4b2d6786e6->enter($__internal_99d61c6838dae2f11a809de6d377aba199035f89393c4e3efdcb9e4b2d6786e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99d61c6838dae2f11a809de6d377aba199035f89393c4e3efdcb9e4b2d6786e6->leave($__internal_99d61c6838dae2f11a809de6d377aba199035f89393c4e3efdcb9e4b2d6786e6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c27fb6a291140fa30b8e56d98fe76548e5361fd99bd37f0a7c76e04ebd435ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c27fb6a291140fa30b8e56d98fe76548e5361fd99bd37f0a7c76e04ebd435ba->enter($__internal_6c27fb6a291140fa30b8e56d98fe76548e5361fd99bd37f0a7c76e04ebd435ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6c27fb6a291140fa30b8e56d98fe76548e5361fd99bd37f0a7c76e04ebd435ba->leave($__internal_6c27fb6a291140fa30b8e56d98fe76548e5361fd99bd37f0a7c76e04ebd435ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
