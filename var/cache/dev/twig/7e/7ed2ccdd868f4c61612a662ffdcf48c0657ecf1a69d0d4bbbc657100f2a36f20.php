<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b67afbe692e44db62e462ac761afec5536ddc110ccece5eb9e2dc76fea2b739b extends Twig_Template
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
        $__internal_b596848015a69a6b48e747cbfc374eaa69b340b1c003f4ef76ed9d398bf7c7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b596848015a69a6b48e747cbfc374eaa69b340b1c003f4ef76ed9d398bf7c7ba->enter($__internal_b596848015a69a6b48e747cbfc374eaa69b340b1c003f4ef76ed9d398bf7c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b596848015a69a6b48e747cbfc374eaa69b340b1c003f4ef76ed9d398bf7c7ba->leave($__internal_b596848015a69a6b48e747cbfc374eaa69b340b1c003f4ef76ed9d398bf7c7ba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0c39f96753dc044ad64195c3fdf9141634c3d2e7e6677131a3967442c8fee382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c39f96753dc044ad64195c3fdf9141634c3d2e7e6677131a3967442c8fee382->enter($__internal_0c39f96753dc044ad64195c3fdf9141634c3d2e7e6677131a3967442c8fee382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0c39f96753dc044ad64195c3fdf9141634c3d2e7e6677131a3967442c8fee382->leave($__internal_0c39f96753dc044ad64195c3fdf9141634c3d2e7e6677131a3967442c8fee382_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7d7f3fe8c77b9a6a33865342899d7faf00a98d4294286d7a6770f6d9c3e6a0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7f3fe8c77b9a6a33865342899d7faf00a98d4294286d7a6770f6d9c3e6a0de->enter($__internal_7d7f3fe8c77b9a6a33865342899d7faf00a98d4294286d7a6770f6d9c3e6a0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7d7f3fe8c77b9a6a33865342899d7faf00a98d4294286d7a6770f6d9c3e6a0de->leave($__internal_7d7f3fe8c77b9a6a33865342899d7faf00a98d4294286d7a6770f6d9c3e6a0de_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a763162ae51e46692b0e2755e6f94f78d825a686e98bd45a6aaf80d248eef0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a763162ae51e46692b0e2755e6f94f78d825a686e98bd45a6aaf80d248eef0b1->enter($__internal_a763162ae51e46692b0e2755e6f94f78d825a686e98bd45a6aaf80d248eef0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a763162ae51e46692b0e2755e6f94f78d825a686e98bd45a6aaf80d248eef0b1->leave($__internal_a763162ae51e46692b0e2755e6f94f78d825a686e98bd45a6aaf80d248eef0b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
