<?php

/* page/new.html.twig */
class __TwigTemplate_e24a5437b34778003bdced0169bc13225fe144774120b69fee1e5b509ced8fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "page/new.html.twig", 1);
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
        $__internal_a9aa032b3d59b050d08735f560052ac830b2fc8bdf299ead3231767836868e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9aa032b3d59b050d08735f560052ac830b2fc8bdf299ead3231767836868e0c->enter($__internal_a9aa032b3d59b050d08735f560052ac830b2fc8bdf299ead3231767836868e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9aa032b3d59b050d08735f560052ac830b2fc8bdf299ead3231767836868e0c->leave($__internal_a9aa032b3d59b050d08735f560052ac830b2fc8bdf299ead3231767836868e0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e04c169147703afbd71ab680de920334bcf172d74186c0bb69c4f0fcbd4ce95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e04c169147703afbd71ab680de920334bcf172d74186c0bb69c4f0fcbd4ce95->enter($__internal_6e04c169147703afbd71ab680de920334bcf172d74186c0bb69c4f0fcbd4ce95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index");
        echo "\">Retour</a>
        </li>
    </ul>
";
        
        $__internal_6e04c169147703afbd71ab680de920334bcf172d74186c0bb69c4f0fcbd4ce95->leave($__internal_6e04c169147703afbd71ab680de920334bcf172d74186c0bb69c4f0fcbd4ce95_prof);

    }

    public function getTemplateName()
    {
        return "page/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Page creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index') }}\">Retour</a>
        </li>
    </ul>
{% endblock %}
", "page/new.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\views\\page\\new.html.twig");
    }
}
