<?php

/* categorie/show.html.twig */
class __TwigTemplate_6c75b11cd1dfca396fc4a0b03430bf287368c51cbdf6f3a4d575cb5bc0e08e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "categorie/show.html.twig", 1);
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
        $__internal_03b17777c900bb5423d85ad1a0e27a14a01f9dba618bd0787db9818f2bab0358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b17777c900bb5423d85ad1a0e27a14a01f9dba618bd0787db9818f2bab0358->enter($__internal_03b17777c900bb5423d85ad1a0e27a14a01f9dba618bd0787db9818f2bab0358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b17777c900bb5423d85ad1a0e27a14a01f9dba618bd0787db9818f2bab0358->leave($__internal_03b17777c900bb5423d85ad1a0e27a14a01f9dba618bd0787db9818f2bab0358_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bff1c22221d485a646b2ae80ffb23d8a7f91ff0424ccd2f65381ff0e653861c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bff1c22221d485a646b2ae80ffb23d8a7f91ff0424ccd2f65381ff0e653861c->enter($__internal_4bff1c22221d485a646b2ae80ffb23d8a7f91ff0424ccd2f65381ff0e653861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imageid</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "imageId", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\"> Retour </a>
        </li>
        <li>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
        </li>
        <li>
            ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4bff1c22221d485a646b2ae80ffb23d8a7f91ff0424ccd2f65381ff0e653861c->leave($__internal_4bff1c22221d485a646b2ae80ffb23d8a7f91ff0424ccd2f65381ff0e653861c_prof);

    }

    public function getTemplateName()
    {
        return "categorie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  84 => 30,  78 => 27,  72 => 24,  62 => 17,  55 => 13,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ categorie.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ categorie.nom }}</td>
            </tr>
            <tr>
                <th>Imageid</th>
                <td>{{ categorie.imageId }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('categorie_index') }}\"> Retour </a>
        </li>
        <li>
            <a href=\"{{ path('categorie_edit', { 'id': categorie.id }) }}\">Edition</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "categorie/show.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\views\\categorie\\show.html.twig");
    }
}
