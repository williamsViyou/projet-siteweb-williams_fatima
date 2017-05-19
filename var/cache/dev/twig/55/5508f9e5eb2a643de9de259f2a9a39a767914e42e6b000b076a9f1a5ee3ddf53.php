<?php

/* categorie/index.html.twig */
class __TwigTemplate_3071f960d79c539af1bce2d6bf327d143055517571d6a15d6a527d641876fa5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "categorie/index.html.twig", 1);
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
        $__internal_0e2afe03d94e10ad9a441a382e924b7e6462fb5c355ba40b969c77db6bbaff11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2afe03d94e10ad9a441a382e924b7e6462fb5c355ba40b969c77db6bbaff11->enter($__internal_0e2afe03d94e10ad9a441a382e924b7e6462fb5c355ba40b969c77db6bbaff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2afe03d94e10ad9a441a382e924b7e6462fb5c355ba40b969c77db6bbaff11->leave($__internal_0e2afe03d94e10ad9a441a382e924b7e6462fb5c355ba40b969c77db6bbaff11_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_732805d9243f5705e1c0b286f73b836e32137e3c80e9d65fcd6a3b046187772b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732805d9243f5705e1c0b286f73b836e32137e3c80e9d65fcd6a3b046187772b->enter($__internal_732805d9243f5705e1c0b286f73b836e32137e3c80e9d65fcd6a3b046187772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Categories </h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
        echo "\">Nouvelle categorie</a>
        </li>
    </ul>
";
        
        $__internal_732805d9243f5705e1c0b286f73b836e32137e3c80e9d65fcd6a3b046187772b->leave($__internal_732805d9243f5705e1c0b286f73b836e32137e3c80e9d65fcd6a3b046187772b_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  91 => 30,  79 => 24,  73 => 21,  66 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>Categories </h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for categorie in categories %}
            <tr>
                <td><a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\">{{ categorie.id }}</a></td>
                <td>{{ categorie.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\"><i class=\"icon-book\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('categorie_edit', { 'id': categorie.id }) }}\"><i class=\"icon-edit\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('categorie_new') }}\">Nouvelle categorie</a>
        </li>
    </ul>
{% endblock %}
", "categorie/index.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\views\\categorie\\index.html.twig");
    }
}
