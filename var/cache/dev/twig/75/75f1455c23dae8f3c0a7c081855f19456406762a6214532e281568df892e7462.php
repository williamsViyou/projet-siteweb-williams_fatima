<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b08baf18878e80934a6111569315e2bb3833a2a7a3e56ecf82aabc7f8dc5a613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6d2666fc219164ef36a8e6d636bcfe8d13132677666a4846916caf0dd5a0c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d2666fc219164ef36a8e6d636bcfe8d13132677666a4846916caf0dd5a0c25->enter($__internal_a6d2666fc219164ef36a8e6d636bcfe8d13132677666a4846916caf0dd5a0c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d2666fc219164ef36a8e6d636bcfe8d13132677666a4846916caf0dd5a0c25->leave($__internal_a6d2666fc219164ef36a8e6d636bcfe8d13132677666a4846916caf0dd5a0c25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12fc9bfc28938babfc5bd41d36f0a5893acd0b30539978538ade69bfc5f31673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fc9bfc28938babfc5bd41d36f0a5893acd0b30539978538ade69bfc5f31673->enter($__internal_12fc9bfc28938babfc5bd41d36f0a5893acd0b30539978538ade69bfc5f31673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_12fc9bfc28938babfc5bd41d36f0a5893acd0b30539978538ade69bfc5f31673->leave($__internal_12fc9bfc28938babfc5bd41d36f0a5893acd0b30539978538ade69bfc5f31673_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab87ec67eec6fc6d3f93a3cd02f3216cb06c7e8d9858f25e9ddae53d33d6a0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab87ec67eec6fc6d3f93a3cd02f3216cb06c7e8d9858f25e9ddae53d33d6a0ad->enter($__internal_ab87ec67eec6fc6d3f93a3cd02f3216cb06c7e8d9858f25e9ddae53d33d6a0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ab87ec67eec6fc6d3f93a3cd02f3216cb06c7e8d9858f25e9ddae53d33d6a0ad->leave($__internal_ab87ec67eec6fc6d3f93a3cd02f3216cb06c7e8d9858f25e9ddae53d33d6a0ad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
