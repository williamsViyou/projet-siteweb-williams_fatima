<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_432eaeaa51b903b88ba422d93075620b170712ea903b10aea844d094e7c5f71c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d34a952df2571555efcb45a72f4b832ead8c361734734ca9798d4e065504b8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34a952df2571555efcb45a72f4b832ead8c361734734ca9798d4e065504b8ab->enter($__internal_d34a952df2571555efcb45a72f4b832ead8c361734734ca9798d4e065504b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d34a952df2571555efcb45a72f4b832ead8c361734734ca9798d4e065504b8ab->leave($__internal_d34a952df2571555efcb45a72f4b832ead8c361734734ca9798d4e065504b8ab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0f258d325366557d04f658f34a74470ae3eabc0153cb33df5d89c6f01513bb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f258d325366557d04f658f34a74470ae3eabc0153cb33df5d89c6f01513bb89->enter($__internal_0f258d325366557d04f658f34a74470ae3eabc0153cb33df5d89c6f01513bb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0f258d325366557d04f658f34a74470ae3eabc0153cb33df5d89c6f01513bb89->leave($__internal_0f258d325366557d04f658f34a74470ae3eabc0153cb33df5d89c6f01513bb89_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_50309ac871deeca49ef2212ac35fb405d9dcb06bedccc32008dcbac420f15b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50309ac871deeca49ef2212ac35fb405d9dcb06bedccc32008dcbac420f15b4d->enter($__internal_50309ac871deeca49ef2212ac35fb405d9dcb06bedccc32008dcbac420f15b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_50309ac871deeca49ef2212ac35fb405d9dcb06bedccc32008dcbac420f15b4d->leave($__internal_50309ac871deeca49ef2212ac35fb405d9dcb06bedccc32008dcbac420f15b4d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b0d722bf7d64a659dbbb68fe826aaad47cf939a2a11af56a696ee64dcd17cc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d722bf7d64a659dbbb68fe826aaad47cf939a2a11af56a696ee64dcd17cc36->enter($__internal_b0d722bf7d64a659dbbb68fe826aaad47cf939a2a11af56a696ee64dcd17cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b0d722bf7d64a659dbbb68fe826aaad47cf939a2a11af56a696ee64dcd17cc36->leave($__internal_b0d722bf7d64a659dbbb68fe826aaad47cf939a2a11af56a696ee64dcd17cc36_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
