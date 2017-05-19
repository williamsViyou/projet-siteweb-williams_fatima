<?php

/* ::user/new.html.twig */
class __TwigTemplate_fa734e130f9c9516a70b7ed5727e241ee3579711b7699bede037bdf3dcaa628c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "::user/new.html.twig", 1);
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
        $__internal_dd25699351b19b78fdea38ce3e7381edcd9c0f23c3a7e6770b7a5774f0261e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd25699351b19b78fdea38ce3e7381edcd9c0f23c3a7e6770b7a5774f0261e7a->enter($__internal_dd25699351b19b78fdea38ce3e7381edcd9c0f23c3a7e6770b7a5774f0261e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd25699351b19b78fdea38ce3e7381edcd9c0f23c3a7e6770b7a5774f0261e7a->leave($__internal_dd25699351b19b78fdea38ce3e7381edcd9c0f23c3a7e6770b7a5774f0261e7a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_330178a21060b1fb3e3a2c037e6e2523b0002af9bc398e3a3f7623a4b8ab72d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330178a21060b1fb3e3a2c037e6e2523b0002af9bc398e3a3f7623a4b8ab72d3->enter($__internal_330178a21060b1fb3e3a2c037e6e2523b0002af9bc398e3a3f7623a4b8ab72d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_330178a21060b1fb3e3a2c037e6e2523b0002af9bc398e3a3f7623a4b8ab72d3->leave($__internal_330178a21060b1fb3e3a2c037e6e2523b0002af9bc398e3a3f7623a4b8ab72d3_prof);

    }

    public function getTemplateName()
    {
        return "::user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "::user/new.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/user/new.html.twig");
    }
}
