<?php

/* ::user/show.html.twig */
class __TwigTemplate_361eeab502326ba41d629d1571b5ac0de5df983c792eb62e7c1b351a20b1add3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "::user/show.html.twig", 1);
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
        $__internal_ee246c24ee4fbf42b601ea816a7427cebb038dfd89e39e5a9733b9bb9e28ce99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee246c24ee4fbf42b601ea816a7427cebb038dfd89e39e5a9733b9bb9e28ce99->enter($__internal_ee246c24ee4fbf42b601ea816a7427cebb038dfd89e39e5a9733b9bb9e28ce99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee246c24ee4fbf42b601ea816a7427cebb038dfd89e39e5a9733b9bb9e28ce99->leave($__internal_ee246c24ee4fbf42b601ea816a7427cebb038dfd89e39e5a9733b9bb9e28ce99_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d99bfcb045a9bc1de46bba9c1688c2dbc903f0c87f97a1605a8dfc6ae1ff4a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99bfcb045a9bc1de46bba9c1688c2dbc903f0c87f97a1605a8dfc6ae1ff4a71->enter($__internal_d99bfcb045a9bc1de46bba9c1688c2dbc903f0c87f97a1605a8dfc6ae1ff4a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Panier</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "panier", array())) {
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "panier", array()), ", "), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d99bfcb045a9bc1de46bba9c1688c2dbc903f0c87f97a1605a8dfc6ae1ff4a71->leave($__internal_d99bfcb045a9bc1de46bba9c1688c2dbc903f0c87f97a1605a8dfc6ae1ff4a71_prof);

    }

    public function getTemplateName()
    {
        return "::user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  79 => 27,  73 => 24,  67 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Panier</th>
                <td>{% if user.panier %}{{ user.panier|join(', ') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "::user/show.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/user/show.html.twig");
    }
}
