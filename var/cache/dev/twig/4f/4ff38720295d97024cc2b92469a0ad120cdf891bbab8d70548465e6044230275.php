<?php

/* media/index.html.twig */
class __TwigTemplate_5ce785940c635b499ca452fba835a2522da2c0ae8918c9afbec68a5716c98ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "media/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7065b4f68565d81fc127d6e9340e8d6bebecbc4e4a257cf1c4881f815ea58fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7065b4f68565d81fc127d6e9340e8d6bebecbc4e4a257cf1c4881f815ea58fa->enter($__internal_b7065b4f68565d81fc127d6e9340e8d6bebecbc4e4a257cf1c4881f815ea58fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7065b4f68565d81fc127d6e9340e8d6bebecbc4e4a257cf1c4881f815ea58fa->leave($__internal_b7065b4f68565d81fc127d6e9340e8d6bebecbc4e4a257cf1c4881f815ea58fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_892a7decb011b146240c2f857ed298a8ca46e15158c4c506f9921f552eba8b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892a7decb011b146240c2f857ed298a8ca46e15158c4c506f9921f552eba8b32->enter($__internal_892a7decb011b146240c2f857ed298a8ca46e15158c4c506f9921f552eba8b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Media list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Path</th>
                <th>Alt</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "alt", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_edit", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_new");
        echo "\">Create a new medium</a>
        </li>
    </ul>
";
        
        $__internal_892a7decb011b146240c2f857ed298a8ca46e15158c4c506f9921f552eba8b32->leave($__internal_892a7decb011b146240c2f857ed298a8ca46e15158c4c506f9921f552eba8b32_prof);

    }

    public function getTemplateName()
    {
        return "media/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Media list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Path</th>
                <th>Alt</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for medium in media %}
            <tr>
                <td><a href=\"{{ path('yes_show', { 'id': medium.id }) }}\">{{ medium.id }}</a></td>
                <td>{{ medium.path }}</td>
                <td>{{ medium.alt }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('yes_show', { 'id': medium.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('yes_edit', { 'id': medium.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('yes_new') }}\">Create a new medium</a>
        </li>
    </ul>
{% endblock %}
", "media/index.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\views\\media\\index.html.twig");
    }
}
