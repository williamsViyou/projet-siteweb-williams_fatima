<?php

/* ::media/index.html.twig */
class __TwigTemplate_da6b15583d87334ff89b6e4db4976408c2efacfcb373b189f8be514a6cfd2084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "::media/index.html.twig", 1);
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
        $__internal_0f7b02a934ac73427692775ae95534220a53b5f4589f5103e0309a6416929c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7b02a934ac73427692775ae95534220a53b5f4589f5103e0309a6416929c0e->enter($__internal_0f7b02a934ac73427692775ae95534220a53b5f4589f5103e0309a6416929c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::media/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7b02a934ac73427692775ae95534220a53b5f4589f5103e0309a6416929c0e->leave($__internal_0f7b02a934ac73427692775ae95534220a53b5f4589f5103e0309a6416929c0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8bf55efcf30f577732d62c49d1ccfc41671737b8a05082f3e8780fb4222dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8bf55efcf30f577732d62c49d1ccfc41671737b8a05082f3e8780fb4222dc3->enter($__internal_9d8bf55efcf30f577732d62c49d1ccfc41671737b8a05082f3e8780fb4222dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Media list</h1>

    <table  class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Path</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "id", array()), "html", null, true);
            echo "</a></td>
                
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "alt", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_edit", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_new");
        echo "\">Create a new medium</a>
        </li>
    </ul>
";
        
        $__internal_9d8bf55efcf30f577732d62c49d1ccfc41671737b8a05082f3e8780fb4222dc3->leave($__internal_9d8bf55efcf30f577732d62c49d1ccfc41671737b8a05082f3e8780fb4222dc3_prof);

    }

    public function getTemplateName()
    {
        return "::media/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  92 => 32,  80 => 26,  74 => 23,  67 => 19,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Media list</h1>

    <table  class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Path</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for medium in media %}
            <tr>
                <td><a href=\"{{ path('yes_show', { 'id': medium.id }) }}\">{{ medium.id }}</a></td>
                
                <td>{{ medium.alt }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('yes_show', { 'id': medium.id }) }}\"><i class=\"icon-book\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('yes_edit', { 'id': medium.id }) }}\"><i class=\"icon-edit\"></i></a>
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
", "::media/index.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/media/index.html.twig");
    }
}
