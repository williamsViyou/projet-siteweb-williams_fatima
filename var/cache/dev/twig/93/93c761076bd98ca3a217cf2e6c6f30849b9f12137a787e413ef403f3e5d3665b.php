<?php

/* page/show.html.twig */
class __TwigTemplate_a892519be77353a3e15e003c6c22434e20c5c081290067e9733874ec84cb2985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "page/show.html.twig", 1);
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
        $__internal_b5fe9bd37ad4909112ad193821f1314475e6d99d48bfa60d4f4b4a94c659eb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fe9bd37ad4909112ad193821f1314475e6d99d48bfa60d4f4b4a94c659eb3b->enter($__internal_b5fe9bd37ad4909112ad193821f1314475e6d99d48bfa60d4f4b4a94c659eb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5fe9bd37ad4909112ad193821f1314475e6d99d48bfa60d4f4b4a94c659eb3b->leave($__internal_b5fe9bd37ad4909112ad193821f1314475e6d99d48bfa60d4f4b4a94c659eb3b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62559a51f6934621393b7a34dad5fc885294229d3c728d1d4d6cf0a28aa77b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62559a51f6934621393b7a34dad5fc885294229d3c728d1d4d6cf0a28aa77b85->enter($__internal_62559a51f6934621393b7a34dad5fc885294229d3c728d1d4d6cf0a28aa77b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_62559a51f6934621393b7a34dad5fc885294229d3c728d1d4d6cf0a28aa77b85->leave($__internal_62559a51f6934621393b7a34dad5fc885294229d3c728d1d4d6cf0a28aa77b85_prof);

    }

    public function getTemplateName()
    {
        return "page/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Page</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ page.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ page.titre }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ page.contenu }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_edit', { 'id': page.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "page/show.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\views\\page\\show.html.twig");
    }
}
