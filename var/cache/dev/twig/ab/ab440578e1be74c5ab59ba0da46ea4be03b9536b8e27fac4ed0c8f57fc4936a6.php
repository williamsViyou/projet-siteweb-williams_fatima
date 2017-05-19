<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0e1a458b93a1b6994727d89e4819bed69854e2113a0cd1ce3cef71cba87e78a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_536f72ce9b78253c71584ff5ddb3242702a192cb021d4cfe75377b189679fdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536f72ce9b78253c71584ff5ddb3242702a192cb021d4cfe75377b189679fdaf->enter($__internal_536f72ce9b78253c71584ff5ddb3242702a192cb021d4cfe75377b189679fdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_536f72ce9b78253c71584ff5ddb3242702a192cb021d4cfe75377b189679fdaf->leave($__internal_536f72ce9b78253c71584ff5ddb3242702a192cb021d4cfe75377b189679fdaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9128a5bdce22bfe58542baa7f335c97589db82e5a2418cce2bf64d32e2d093b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9128a5bdce22bfe58542baa7f335c97589db82e5a2418cce2bf64d32e2d093b2->enter($__internal_9128a5bdce22bfe58542baa7f335c97589db82e5a2418cce2bf64d32e2d093b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9128a5bdce22bfe58542baa7f335c97589db82e5a2418cce2bf64d32e2d093b2->leave($__internal_9128a5bdce22bfe58542baa7f335c97589db82e5a2418cce2bf64d32e2d093b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba10825c54c67f19bc4a64dd7b0409f1bd90b87e7302bd2a5192fc51d2bb7132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba10825c54c67f19bc4a64dd7b0409f1bd90b87e7302bd2a5192fc51d2bb7132->enter($__internal_ba10825c54c67f19bc4a64dd7b0409f1bd90b87e7302bd2a5192fc51d2bb7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba10825c54c67f19bc4a64dd7b0409f1bd90b87e7302bd2a5192fc51d2bb7132->leave($__internal_ba10825c54c67f19bc4a64dd7b0409f1bd90b87e7302bd2a5192fc51d2bb7132_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_778ac8579a99025a04af5c021ffee4de52256b4fda878b5b5d6b81358ad5dc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778ac8579a99025a04af5c021ffee4de52256b4fda878b5b5d6b81358ad5dc93->enter($__internal_778ac8579a99025a04af5c021ffee4de52256b4fda878b5b5d6b81358ad5dc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_778ac8579a99025a04af5c021ffee4de52256b4fda878b5b5d6b81358ad5dc93->leave($__internal_778ac8579a99025a04af5c021ffee4de52256b4fda878b5b5d6b81358ad5dc93_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
