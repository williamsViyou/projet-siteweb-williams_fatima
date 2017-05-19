<?php

/* ::ModelUsed/menuCategorie.html.twig */
class __TwigTemplate_894be710dfc61ddd808ed6c02ef1b50c73326af32c88bb48788c24582beb4a45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f8c054916a21a12a2a0ca937ad4e7c5a8e5e82555ecabb600c0583f913874bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8c054916a21a12a2a0ca937ad4e7c5a8e5e82555ecabb600c0583f913874bc->enter($__internal_6f8c054916a21a12a2a0ca937ad4e7c5a8e5e82555ecabb600c0583f913874bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/menuCategorie.html.twig"));

        // line 1
        echo "  <li>
                <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Acceuil</a>
            </li>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 5
            echo "    <li>
        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("idcategorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f8c054916a21a12a2a0ca937ad4e7c5a8e5e82555ecabb600c0583f913874bc->leave($__internal_6f8c054916a21a12a2a0ca937ad4e7c5a8e5e82555ecabb600c0583f913874bc_prof);

    }

    public function getTemplateName()
    {
        return "::ModelUsed/menuCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <li>
                <a href=\"{{ path ('produits') }}\">Acceuil</a>
            </li>
{% for categorie in categories %}
    <li>
        <a href=\"{{ path('categorieProduits', { 'idcategorie' : categorie.id }) }}\">{{ categorie.nom }}</a>
    </li>
{% endfor %}", "::ModelUsed/menuCategorie.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/menuCategorie.html.twig");
    }
}
