<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c4af26d6128f4e9664fbd5e6715e2dd53836421f8bd7fa4319aa6657aca7a6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2985a0b6186e9714d5d372b7a2dd53a2405d169cad33413d7d8bbd72fc54758e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2985a0b6186e9714d5d372b7a2dd53a2405d169cad33413d7d8bbd72fc54758e->enter($__internal_2985a0b6186e9714d5d372b7a2dd53a2405d169cad33413d7d8bbd72fc54758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2985a0b6186e9714d5d372b7a2dd53a2405d169cad33413d7d8bbd72fc54758e->leave($__internal_2985a0b6186e9714d5d372b7a2dd53a2405d169cad33413d7d8bbd72fc54758e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_931a9f032089953b1e2793af3266fb13f345c5f072284a7d2b41b3ef9b9e2a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931a9f032089953b1e2793af3266fb13f345c5f072284a7d2b41b3ef9b9e2a79->enter($__internal_931a9f032089953b1e2793af3266fb13f345c5f072284a7d2b41b3ef9b9e2a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "     



     <div class = \"container\" >
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "              
            ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "
        </div>
";
        
        $__internal_931a9f032089953b1e2793af3266fb13f345c5f072284a7d2b41b3ef9b9e2a79->leave($__internal_931a9f032089953b1e2793af3266fb13f345c5f072284a7d2b41b3ef9b9e2a79_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d7e1e1cd41ca18f8c7ecb084b96cbbe702cbe1797a9d831f3a3cf11f6e378d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7e1e1cd41ca18f8c7ecb084b96cbbe702cbe1797a9d831f3a3cf11f6e378d8->enter($__internal_4d7e1e1cd41ca18f8c7ecb084b96cbbe702cbe1797a9d831f3a3cf11f6e378d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_4d7e1e1cd41ca18f8c7ecb084b96cbbe702cbe1797a9d831f3a3cf11f6e378d8->leave($__internal_4d7e1e1cd41ca18f8c7ecb084b96cbbe702cbe1797a9d831f3a3cf11f6e378d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  91 => 18,  82 => 20,  80 => 18,  77 => 17,  71 => 16,  62 => 13,  57 => 12,  52 => 11,  48 => 10,  41 => 5,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '::layout/layout.html.twig' %}

{% block body %}
     



     <div class = \"container\" >
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
              
            {% block fos_user_content %}
            {% endblock fos_user_content %}

        </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
