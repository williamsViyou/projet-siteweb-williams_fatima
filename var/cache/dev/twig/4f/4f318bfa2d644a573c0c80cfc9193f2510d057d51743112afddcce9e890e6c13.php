<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1295e65195d1efcbf29fbda3b88cd196c438468cbdff91b15ddcaa4aded4eff6 extends Twig_Template
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
        $__internal_afee176a6e6ee4dac9f492fd11ca3d20bff9b208cf31f310dc24d3062dbcdad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afee176a6e6ee4dac9f492fd11ca3d20bff9b208cf31f310dc24d3062dbcdad3->enter($__internal_afee176a6e6ee4dac9f492fd11ca3d20bff9b208cf31f310dc24d3062dbcdad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_afee176a6e6ee4dac9f492fd11ca3d20bff9b208cf31f310dc24d3062dbcdad3->leave($__internal_afee176a6e6ee4dac9f492fd11ca3d20bff9b208cf31f310dc24d3062dbcdad3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_79264d7a73d9903931f32b72ccaa99a8cde85a93bc18f18655adccef4f0b0c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79264d7a73d9903931f32b72ccaa99a8cde85a93bc18f18655adccef4f0b0c6e->enter($__internal_79264d7a73d9903931f32b72ccaa99a8cde85a93bc18f18655adccef4f0b0c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_79264d7a73d9903931f32b72ccaa99a8cde85a93bc18f18655adccef4f0b0c6e->leave($__internal_79264d7a73d9903931f32b72ccaa99a8cde85a93bc18f18655adccef4f0b0c6e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3235e42b198f36804a1896b1d74b74bdcf58f2b70cbfb1d45f113e61ba3696e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3235e42b198f36804a1896b1d74b74bdcf58f2b70cbfb1d45f113e61ba3696e7->enter($__internal_3235e42b198f36804a1896b1d74b74bdcf58f2b70cbfb1d45f113e61ba3696e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3235e42b198f36804a1896b1d74b74bdcf58f2b70cbfb1d45f113e61ba3696e7->leave($__internal_3235e42b198f36804a1896b1d74b74bdcf58f2b70cbfb1d45f113e61ba3696e7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5ab45e6afaccecf2ec3f6404ecbf9bc2c33feb7a32d211655fa1df1ba735ef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab45e6afaccecf2ec3f6404ecbf9bc2c33feb7a32d211655fa1df1ba735ef9b->enter($__internal_5ab45e6afaccecf2ec3f6404ecbf9bc2c33feb7a32d211655fa1df1ba735ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5ab45e6afaccecf2ec3f6404ecbf9bc2c33feb7a32d211655fa1df1ba735ef9b->leave($__internal_5ab45e6afaccecf2ec3f6404ecbf9bc2c33feb7a32d211655fa1df1ba735ef9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
