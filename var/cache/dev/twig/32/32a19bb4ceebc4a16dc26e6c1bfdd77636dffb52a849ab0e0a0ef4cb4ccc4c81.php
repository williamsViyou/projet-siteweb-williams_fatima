<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_ddf347169d07382e89e5c156560ea2db514451f56d7a0df4a2df7155602120c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5158c6aaba8acea5689d963651525fcec9cc17aecab40d317021fc52f06aa833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5158c6aaba8acea5689d963651525fcec9cc17aecab40d317021fc52f06aa833->enter($__internal_5158c6aaba8acea5689d963651525fcec9cc17aecab40d317021fc52f06aa833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5158c6aaba8acea5689d963651525fcec9cc17aecab40d317021fc52f06aa833->leave($__internal_5158c6aaba8acea5689d963651525fcec9cc17aecab40d317021fc52f06aa833_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41877756cb40f536f79be361ef39818f5ea14d5e24068a5362b0330482846d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41877756cb40f536f79be361ef39818f5ea14d5e24068a5362b0330482846d87->enter($__internal_41877756cb40f536f79be361ef39818f5ea14d5e24068a5362b0330482846d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_41877756cb40f536f79be361ef39818f5ea14d5e24068a5362b0330482846d87->leave($__internal_41877756cb40f536f79be361ef39818f5ea14d5e24068a5362b0330482846d87_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
