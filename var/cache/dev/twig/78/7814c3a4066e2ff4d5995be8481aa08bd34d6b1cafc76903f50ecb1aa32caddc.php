<?php

/* page/index.html.twig */
class __TwigTemplate_0591dd9edac52f98b6a531deafc67fc164f00dcc725f4233b21fbdd06551abaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "page/index.html.twig", 1);
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
        $__internal_7d21635e46ab0a85f8351e52f03602e05600ce9b93e015fc557604ead05f9334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d21635e46ab0a85f8351e52f03602e05600ce9b93e015fc557604ead05f9334->enter($__internal_7d21635e46ab0a85f8351e52f03602e05600ce9b93e015fc557604ead05f9334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d21635e46ab0a85f8351e52f03602e05600ce9b93e015fc557604ead05f9334->leave($__internal_7d21635e46ab0a85f8351e52f03602e05600ce9b93e015fc557604ead05f9334_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_838ee96da66a95bf77eb9550bb1ed308562ce11cc692d26e059ddaf1b0a70094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838ee96da66a95bf77eb9550bb1ed308562ce11cc692d26e059ddaf1b0a70094->enter($__internal_838ee96da66a95bf77eb9550bb1ed308562ce11cc692d26e059ddaf1b0a70094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Pages</h1>

   <table class=\"table table-striped table-hover\"> 
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</td>
             <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"icon-edit\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_new");
        echo "\">Create une nouvelle page</a>
        </li>
    </ul>
";
        
        $__internal_838ee96da66a95bf77eb9550bb1ed308562ce11cc692d26e059ddaf1b0a70094->leave($__internal_838ee96da66a95bf77eb9550bb1ed308562ce11cc692d26e059ddaf1b0a70094_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  92 => 32,  80 => 26,  74 => 23,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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

    <h1>Pages</h1>

   <table class=\"table table-striped table-hover\"> 
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for page in pages %}
            <tr>
                <td><a href=\"{{ path('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_show', { 'id': page.id }) }}\">{{ page.id }}</a></td>
                <td>{{ page.titre }}</td>
             <td>
                    <ul>
                        <li>
                            <a href=\"{{ path ('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_show', { 'id': page.id }) }}\"><i class=\"icon-book\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path ('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_edit', { 'id': page.id }) }}\" ><i class=\"icon-edit\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_new') }}\">Create une nouvelle page</a>
        </li>
    </ul>
{% endblock %}
", "page/index.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\views\\page\\index.html.twig");
    }
}
