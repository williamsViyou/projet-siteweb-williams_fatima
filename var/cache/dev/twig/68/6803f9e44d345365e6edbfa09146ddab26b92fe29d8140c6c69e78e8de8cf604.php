<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_649b3bd80be5dd9628af8d1ab4e94332ac4908894d0137e1caee8fdde747bf34 extends Twig_Template
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
        $__internal_8e1eaf4d1da21bf7ca634027e63d43fbc7ca5a7f67a374af6b11f2ae77d18540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1eaf4d1da21bf7ca634027e63d43fbc7ca5a7f67a374af6b11f2ae77d18540->enter($__internal_8e1eaf4d1da21bf7ca634027e63d43fbc7ca5a7f67a374af6b11f2ae77d18540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1eaf4d1da21bf7ca634027e63d43fbc7ca5a7f67a374af6b11f2ae77d18540->leave($__internal_8e1eaf4d1da21bf7ca634027e63d43fbc7ca5a7f67a374af6b11f2ae77d18540_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa4660261d582993107d47e220c33a804ed2f67a11b6d8d6fc8282bf779062f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4660261d582993107d47e220c33a804ed2f67a11b6d8d6fc8282bf779062f4->enter($__internal_aa4660261d582993107d47e220c33a804ed2f67a11b6d8d6fc8282bf779062f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa4660261d582993107d47e220c33a804ed2f67a11b6d8d6fc8282bf779062f4->leave($__internal_aa4660261d582993107d47e220c33a804ed2f67a11b6d8d6fc8282bf779062f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffed681d501737716cc9c7eec3758ea885c143680ce8879bd3000aed6612adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffed681d501737716cc9c7eec3758ea885c143680ce8879bd3000aed6612adb5->enter($__internal_ffed681d501737716cc9c7eec3758ea885c143680ce8879bd3000aed6612adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ffed681d501737716cc9c7eec3758ea885c143680ce8879bd3000aed6612adb5->leave($__internal_ffed681d501737716cc9c7eec3758ea885c143680ce8879bd3000aed6612adb5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cc92b8f6422f437c6da41d1229970c2a1ce480bcf49228265dbb235283d16b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc92b8f6422f437c6da41d1229970c2a1ce480bcf49228265dbb235283d16b4->enter($__internal_6cc92b8f6422f437c6da41d1229970c2a1ce480bcf49228265dbb235283d16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6cc92b8f6422f437c6da41d1229970c2a1ce480bcf49228265dbb235283d16b4->leave($__internal_6cc92b8f6422f437c6da41d1229970c2a1ce480bcf49228265dbb235283d16b4_prof);

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
