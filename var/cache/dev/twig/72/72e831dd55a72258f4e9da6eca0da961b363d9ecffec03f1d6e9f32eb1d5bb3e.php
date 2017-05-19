<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2057d0af3187a0854e7a958ea870ba8145aac139bc53a59c98a0ba2db015e08d extends Twig_Template
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
        $__internal_524075e961c28e981bb7924921d77a8e7c9b38215d708c1ac253fb4b66e0b9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524075e961c28e981bb7924921d77a8e7c9b38215d708c1ac253fb4b66e0b9a1->enter($__internal_524075e961c28e981bb7924921d77a8e7c9b38215d708c1ac253fb4b66e0b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524075e961c28e981bb7924921d77a8e7c9b38215d708c1ac253fb4b66e0b9a1->leave($__internal_524075e961c28e981bb7924921d77a8e7c9b38215d708c1ac253fb4b66e0b9a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_688cfb2124e8ea9442d9c58e6bf0d6d32c4e3dbe6ac8112c0dd0aa69db83e6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688cfb2124e8ea9442d9c58e6bf0d6d32c4e3dbe6ac8112c0dd0aa69db83e6cd->enter($__internal_688cfb2124e8ea9442d9c58e6bf0d6d32c4e3dbe6ac8112c0dd0aa69db83e6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_688cfb2124e8ea9442d9c58e6bf0d6d32c4e3dbe6ac8112c0dd0aa69db83e6cd->leave($__internal_688cfb2124e8ea9442d9c58e6bf0d6d32c4e3dbe6ac8112c0dd0aa69db83e6cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47efb14ddcf9bf09684d396e5127582ab4232132b7a32c6429c15aa64f49fd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47efb14ddcf9bf09684d396e5127582ab4232132b7a32c6429c15aa64f49fd14->enter($__internal_47efb14ddcf9bf09684d396e5127582ab4232132b7a32c6429c15aa64f49fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47efb14ddcf9bf09684d396e5127582ab4232132b7a32c6429c15aa64f49fd14->leave($__internal_47efb14ddcf9bf09684d396e5127582ab4232132b7a32c6429c15aa64f49fd14_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcdc9d131adf7d5174bd0dbe9c437188a4011fd56a3dc056da8bf4b544a83fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdc9d131adf7d5174bd0dbe9c437188a4011fd56a3dc056da8bf4b544a83fa2->enter($__internal_dcdc9d131adf7d5174bd0dbe9c437188a4011fd56a3dc056da8bf4b544a83fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dcdc9d131adf7d5174bd0dbe9c437188a4011fd56a3dc056da8bf4b544a83fa2->leave($__internal_dcdc9d131adf7d5174bd0dbe9c437188a4011fd56a3dc056da8bf4b544a83fa2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
