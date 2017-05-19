<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f6218bb9f884b8f327b2cb55e9894677233be4c745b4476dd4d46748536fee63 extends Twig_Template
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
        $__internal_0d12645fbcfa7c510446a9106330bede4d8d941215d8edf28e5afb1bf00c5c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d12645fbcfa7c510446a9106330bede4d8d941215d8edf28e5afb1bf00c5c4a->enter($__internal_0d12645fbcfa7c510446a9106330bede4d8d941215d8edf28e5afb1bf00c5c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0d12645fbcfa7c510446a9106330bede4d8d941215d8edf28e5afb1bf00c5c4a->leave($__internal_0d12645fbcfa7c510446a9106330bede4d8d941215d8edf28e5afb1bf00c5c4a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1dc76cb108339a66e7b96648323a5f87467d932a4ccd3b4a03e9c761042e2269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc76cb108339a66e7b96648323a5f87467d932a4ccd3b4a03e9c761042e2269->enter($__internal_1dc76cb108339a66e7b96648323a5f87467d932a4ccd3b4a03e9c761042e2269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_1dc76cb108339a66e7b96648323a5f87467d932a4ccd3b4a03e9c761042e2269->leave($__internal_1dc76cb108339a66e7b96648323a5f87467d932a4ccd3b4a03e9c761042e2269_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a2bde321f0d31c78bd8105393380e18124936e4ef4b3c9be6d285f8543013aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bde321f0d31c78bd8105393380e18124936e4ef4b3c9be6d285f8543013aa1->enter($__internal_a2bde321f0d31c78bd8105393380e18124936e4ef4b3c9be6d285f8543013aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a2bde321f0d31c78bd8105393380e18124936e4ef4b3c9be6d285f8543013aa1->leave($__internal_a2bde321f0d31c78bd8105393380e18124936e4ef4b3c9be6d285f8543013aa1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6c89a2f3611bae452fdbe0bd6b5b249477e874c03a975ad5337931c275fe8e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c89a2f3611bae452fdbe0bd6b5b249477e874c03a975ad5337931c275fe8e18->enter($__internal_6c89a2f3611bae452fdbe0bd6b5b249477e874c03a975ad5337931c275fe8e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6c89a2f3611bae452fdbe0bd6b5b249477e874c03a975ad5337931c275fe8e18->leave($__internal_6c89a2f3611bae452fdbe0bd6b5b249477e874c03a975ad5337931c275fe8e18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
