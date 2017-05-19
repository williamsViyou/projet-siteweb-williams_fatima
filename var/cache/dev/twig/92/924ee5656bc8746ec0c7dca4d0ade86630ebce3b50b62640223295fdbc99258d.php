<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d945df02b7ea4df95107a787a6b8eeb22fda9ed74295472dde12fcbe8aefd76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_0be1d680d14cc6882d54c4635dccb6f0c29bbd8b5b327d172f41116a3b439ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be1d680d14cc6882d54c4635dccb6f0c29bbd8b5b327d172f41116a3b439ed2->enter($__internal_0be1d680d14cc6882d54c4635dccb6f0c29bbd8b5b327d172f41116a3b439ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be1d680d14cc6882d54c4635dccb6f0c29bbd8b5b327d172f41116a3b439ed2->leave($__internal_0be1d680d14cc6882d54c4635dccb6f0c29bbd8b5b327d172f41116a3b439ed2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0bbd6a9752652b44ce1635dcb76bb973cb999ff72fffd952f213b41878a490a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbd6a9752652b44ce1635dcb76bb973cb999ff72fffd952f213b41878a490a9->enter($__internal_0bbd6a9752652b44ce1635dcb76bb973cb999ff72fffd952f213b41878a490a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0bbd6a9752652b44ce1635dcb76bb973cb999ff72fffd952f213b41878a490a9->leave($__internal_0bbd6a9752652b44ce1635dcb76bb973cb999ff72fffd952f213b41878a490a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98d996b1cbf9016299a631c4ad4b777c60b5cb7296d8c9b3cb197907541a73e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d996b1cbf9016299a631c4ad4b777c60b5cb7296d8c9b3cb197907541a73e8->enter($__internal_98d996b1cbf9016299a631c4ad4b777c60b5cb7296d8c9b3cb197907541a73e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98d996b1cbf9016299a631c4ad4b777c60b5cb7296d8c9b3cb197907541a73e8->leave($__internal_98d996b1cbf9016299a631c4ad4b777c60b5cb7296d8c9b3cb197907541a73e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f0287a7d4692306ee7f5f0dbeed5cd984a3f25fbe1ec48cd7a1ebe5c551047e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0287a7d4692306ee7f5f0dbeed5cd984a3f25fbe1ec48cd7a1ebe5c551047e->enter($__internal_3f0287a7d4692306ee7f5f0dbeed5cd984a3f25fbe1ec48cd7a1ebe5c551047e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f0287a7d4692306ee7f5f0dbeed5cd984a3f25fbe1ec48cd7a1ebe5c551047e->leave($__internal_3f0287a7d4692306ee7f5f0dbeed5cd984a3f25fbe1ec48cd7a1ebe5c551047e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
