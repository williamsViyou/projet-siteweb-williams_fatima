<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f9bd07fe95f43d9b8800c035be20743a45e27eee75c3598463fcaecac0eeac7 extends Twig_Template
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
        $__internal_768f0a1a0e9a972bb444b016ce018825842108fc89d92732468092ecada62748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768f0a1a0e9a972bb444b016ce018825842108fc89d92732468092ecada62748->enter($__internal_768f0a1a0e9a972bb444b016ce018825842108fc89d92732468092ecada62748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_768f0a1a0e9a972bb444b016ce018825842108fc89d92732468092ecada62748->leave($__internal_768f0a1a0e9a972bb444b016ce018825842108fc89d92732468092ecada62748_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfb9553f237bb60c23e7b3c148ea62bcea0455ac7378bdf4f50149d443045ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb9553f237bb60c23e7b3c148ea62bcea0455ac7378bdf4f50149d443045ae9->enter($__internal_dfb9553f237bb60c23e7b3c148ea62bcea0455ac7378bdf4f50149d443045ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dfb9553f237bb60c23e7b3c148ea62bcea0455ac7378bdf4f50149d443045ae9->leave($__internal_dfb9553f237bb60c23e7b3c148ea62bcea0455ac7378bdf4f50149d443045ae9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_669a9d37cbe136f74e0ed1bf81e8415a403bf3084b59e6007fc5c5ff3212b919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669a9d37cbe136f74e0ed1bf81e8415a403bf3084b59e6007fc5c5ff3212b919->enter($__internal_669a9d37cbe136f74e0ed1bf81e8415a403bf3084b59e6007fc5c5ff3212b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_669a9d37cbe136f74e0ed1bf81e8415a403bf3084b59e6007fc5c5ff3212b919->leave($__internal_669a9d37cbe136f74e0ed1bf81e8415a403bf3084b59e6007fc5c5ff3212b919_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efab7de21f63c39ebb92e6b2fbafecad5b6377e4dc495789c3adc82738991c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efab7de21f63c39ebb92e6b2fbafecad5b6377e4dc495789c3adc82738991c49->enter($__internal_efab7de21f63c39ebb92e6b2fbafecad5b6377e4dc495789c3adc82738991c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_efab7de21f63c39ebb92e6b2fbafecad5b6377e4dc495789c3adc82738991c49->leave($__internal_efab7de21f63c39ebb92e6b2fbafecad5b6377e4dc495789c3adc82738991c49_prof);

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
