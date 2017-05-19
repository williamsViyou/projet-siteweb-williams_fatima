<?php

/* ::produits/index.html.twig */
class __TwigTemplate_356a4270bc9ca788b4f5473f3670ec675e06793f25ed3a35a21800691080df29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "::produits/index.html.twig", 1);
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
        $__internal_031d18ba54bd1a3f6c96df1329824026983f62d36cc6913ec4578246ef611b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031d18ba54bd1a3f6c96df1329824026983f62d36cc6913ec4578246ef611b40->enter($__internal_031d18ba54bd1a3f6c96df1329824026983f62d36cc6913ec4578246ef611b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::produits/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031d18ba54bd1a3f6c96df1329824026983f62d36cc6913ec4578246ef611b40->leave($__internal_031d18ba54bd1a3f6c96df1329824026983f62d36cc6913ec4578246ef611b40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46f22b8cdbc9f32da77cc477af2b75e7cfe0f1256c548abffe50d22042e2763e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f22b8cdbc9f32da77cc477af2b75e7cfe0f1256c548abffe50d22042e2763e->enter($__internal_46f22b8cdbc9f32da77cc477af2b75e7cfe0f1256c548abffe50d22042e2763e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Categorie</th>
                <th>Image</th>
                <th>Tva</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits_show", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["produit"], "disponible", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "tva", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits_show", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits_edit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits_new");
        echo "\">Create a new produit</a>
        </li>
    </ul>
";
        
        $__internal_46f22b8cdbc9f32da77cc477af2b75e7cfe0f1256c548abffe50d22042e2763e->leave($__internal_46f22b8cdbc9f32da77cc477af2b75e7cfe0f1256c548abffe50d22042e2763e_prof);

    }

    public function getTemplateName()
    {
        return "::produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  125 => 43,  113 => 37,  107 => 34,  100 => 30,  96 => 29,  92 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Categorie</th>
                <th>Image</th>
                <th>Tva</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td><a href=\"{{ path('produits_show', { 'id': produit.id }) }}\">{{ produit.id }}</a></td>
                <td>{{ produit.nom }}</td>
                <td>{{ produit.description }}</td>
                <td>{{ produit.prix }}</td>
                <td>{% if produit.disponible %}Yes{% else %}No{% endif %}</td>
                <td>{{ produit.categorie }}</td>
                <td>{{ produit.image }}</td>
                <td>{{ produit.tva }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('produits_show', { 'id': produit.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('produits_edit', { 'id': produit.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('produits_new') }}\">Create a new produit</a>
        </li>
    </ul>
{% endblock %}
", "::produits/index.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/produits/index.html.twig");
    }
}
