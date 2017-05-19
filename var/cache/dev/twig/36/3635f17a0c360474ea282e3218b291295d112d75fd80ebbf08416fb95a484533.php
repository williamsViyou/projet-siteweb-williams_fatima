<?php

/* ::ModelUsed/menuCategorie.html.twig */
class __TwigTemplate_3168af3fad1aa5bdb06031340d5b9ae2ce976b03c7e0c1607ce672c75ba4ec75 extends Twig_Template
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
        $__internal_57549308cf6108f25f378fad319bc034a968c37fb39505ec1008feaf304c717d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57549308cf6108f25f378fad319bc034a968c37fb39505ec1008feaf304c717d->enter($__internal_57549308cf6108f25f378fad319bc034a968c37fb39505ec1008feaf304c717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/menuCategorie.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li>
        <a href=\"";
            // line 3
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
        
        $__internal_57549308cf6108f25f378fad319bc034a968c37fb39505ec1008feaf304c717d->leave($__internal_57549308cf6108f25f378fad319bc034a968c37fb39505ec1008feaf304c717d_prof);

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
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for categorie in categories %}
    <li>
        <a href=\"{{ path('categorieProduits', { 'idcategorie' : categorie.id }) }}\">{{ categorie.nom }}</a>
    </li>
{% endfor %}", "::ModelUsed/menuCategorie.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/menuCategorie.html.twig");
    }
}
