<?php

/* page/edit.html.twig */
class __TwigTemplate_f2eaee9fb0bd5fc2e1241158e36bab4f115539c622f23321255e0c9364a35a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "page/edit.html.twig", 1);
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
        $__internal_55b370293a9bd9300181d37157e5bd4b6a31358b0d7d8ec3b1f1f343072d3e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b370293a9bd9300181d37157e5bd4b6a31358b0d7d8ec3b1f1f343072d3e81->enter($__internal_55b370293a9bd9300181d37157e5bd4b6a31358b0d7d8ec3b1f1f343072d3e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55b370293a9bd9300181d37157e5bd4b6a31358b0d7d8ec3b1f1f343072d3e81->leave($__internal_55b370293a9bd9300181d37157e5bd4b6a31358b0d7d8ec3b1f1f343072d3e81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8719aded60687b2b3758c7043cf66457b1ed3820b64339e03f9b4ba1a24e0801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8719aded60687b2b3758c7043cf66457b1ed3820b64339e03f9b4ba1a24e0801->enter($__internal_8719aded60687b2b3758c7043cf66457b1ed3820b64339e03f9b4ba1a24e0801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index");
        echo "\">Retour</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-primary\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
    
";
        
        $__internal_8719aded60687b2b3758c7043cf66457b1ed3820b64339e03f9b4ba1a24e0801->leave($__internal_8719aded60687b2b3758c7043cf66457b1ed3820b64339e03f9b4ba1a24e0801_prof);

    }

    public function getTemplateName()
    {
        return "page/edit.html.twig";
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
    <h1>Page edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index') }}\">Retour</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-primary\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    
{% endblock %}
", "page/edit.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\views\\page\\edit.html.twig");
    }
}
