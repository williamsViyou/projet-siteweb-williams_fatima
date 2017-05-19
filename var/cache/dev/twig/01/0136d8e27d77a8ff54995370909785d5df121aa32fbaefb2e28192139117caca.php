<?php

/* ::media/edit.html.twig */
class __TwigTemplate_3bd4629eb14939565a669dac7c6a30641c53ccf71b208869a200e29200bf18d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "::media/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbb7c8864253b7efe68de88a5e245a0537f6052f4b4cba0765744753bfb4084b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb7c8864253b7efe68de88a5e245a0537f6052f4b4cba0765744753bfb4084b->enter($__internal_cbb7c8864253b7efe68de88a5e245a0537f6052f4b4cba0765744753bfb4084b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::media/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbb7c8864253b7efe68de88a5e245a0537f6052f4b4cba0765744753bfb4084b->leave($__internal_cbb7c8864253b7efe68de88a5e245a0537f6052f4b4cba0765744753bfb4084b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a577acc92a46a9343c49aa405bec2d3e0f79972eee517103faaa14df0a2cd5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a577acc92a46a9343c49aa405bec2d3e0f79972eee517103faaa14df0a2cd5c7->enter($__internal_a577acc92a46a9343c49aa405bec2d3e0f79972eee517103faaa14df0a2cd5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edition de Media</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Retour</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\"  class=\"btn btn-primary\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a577acc92a46a9343c49aa405bec2d3e0f79972eee517103faaa14df0a2cd5c7->leave($__internal_a577acc92a46a9343c49aa405bec2d3e0f79972eee517103faaa14df0a2cd5c7_prof);

    }

    public function getTemplateName()
    {
        return "::media/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layoutAdmin.html.twig' %}

{% block body %}
    <h1>Edition de Media</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Retour</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\"  class=\"btn btn-primary\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "::media/edit.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/media/edit.html.twig");
    }
}
