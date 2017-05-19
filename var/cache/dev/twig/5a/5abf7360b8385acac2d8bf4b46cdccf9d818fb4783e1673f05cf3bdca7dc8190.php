<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8c4792ce17bcb6fc57b57d4b31d65c10579b201f42ab828794bf7a197a35d7ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2f32413cf0848c9da5d625422109873166e1c6c81bc68d6f8b4bcdf912d41b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f32413cf0848c9da5d625422109873166e1c6c81bc68d6f8b4bcdf912d41b72->enter($__internal_2f32413cf0848c9da5d625422109873166e1c6c81bc68d6f8b4bcdf912d41b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f32413cf0848c9da5d625422109873166e1c6c81bc68d6f8b4bcdf912d41b72->leave($__internal_2f32413cf0848c9da5d625422109873166e1c6c81bc68d6f8b4bcdf912d41b72_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f93dc156b4feb6ff40706ca7bf34925975e8f14bb34aadebbead79d363ba6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f93dc156b4feb6ff40706ca7bf34925975e8f14bb34aadebbead79d363ba6a4->enter($__internal_8f93dc156b4feb6ff40706ca7bf34925975e8f14bb34aadebbead79d363ba6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 10
        echo "    Ceci est dans le fichier confirmed.html.twig
";
        
        $__internal_8f93dc156b4feb6ff40706ca7bf34925975e8f14bb34aadebbead79d363ba6a4->leave($__internal_8f93dc156b4feb6ff40706ca7bf34925975e8f14bb34aadebbead79d363ba6a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
    Ceci est dans le fichier confirmed.html.twig
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
