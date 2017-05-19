<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2a918d20c91eb519f572db2fbd6957b2d9d0d69f3a0e344a7fc9bae9b2900932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1ce6467313192d2ba6b01759ef174453d6479d356f3725954e994e54cfd3d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ce6467313192d2ba6b01759ef174453d6479d356f3725954e994e54cfd3d91->enter($__internal_c1ce6467313192d2ba6b01759ef174453d6479d356f3725954e994e54cfd3d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1ce6467313192d2ba6b01759ef174453d6479d356f3725954e994e54cfd3d91->leave($__internal_c1ce6467313192d2ba6b01759ef174453d6479d356f3725954e994e54cfd3d91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc083694ad9202f2265b9ab40e3a6a3f8cc0df42ef06fb682a1fdc969369a0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc083694ad9202f2265b9ab40e3a6a3f8cc0df42ef06fb682a1fdc969369a0b6->enter($__internal_fc083694ad9202f2265b9ab40e3a6a3f8cc0df42ef06fb682a1fdc969369a0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fc083694ad9202f2265b9ab40e3a6a3f8cc0df42ef06fb682a1fdc969369a0b6->leave($__internal_fc083694ad9202f2265b9ab40e3a6a3f8cc0df42ef06fb682a1fdc969369a0b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb4836c93441a52c35d2e809cd8c12c2d38bcdbb29de8b39f16a28a95ac7f585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4836c93441a52c35d2e809cd8c12c2d38bcdbb29de8b39f16a28a95ac7f585->enter($__internal_bb4836c93441a52c35d2e809cd8c12c2d38bcdbb29de8b39f16a28a95ac7f585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bb4836c93441a52c35d2e809cd8c12c2d38bcdbb29de8b39f16a28a95ac7f585->leave($__internal_bb4836c93441a52c35d2e809cd8c12c2d38bcdbb29de8b39f16a28a95ac7f585_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1e8032c759eb73da57013923d2c0fb0224d0242a2fb430333caea20dc59075a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e8032c759eb73da57013923d2c0fb0224d0242a2fb430333caea20dc59075a->enter($__internal_a1e8032c759eb73da57013923d2c0fb0224d0242a2fb430333caea20dc59075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a1e8032c759eb73da57013923d2c0fb0224d0242a2fb430333caea20dc59075a->leave($__internal_a1e8032c759eb73da57013923d2c0fb0224d0242a2fb430333caea20dc59075a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
