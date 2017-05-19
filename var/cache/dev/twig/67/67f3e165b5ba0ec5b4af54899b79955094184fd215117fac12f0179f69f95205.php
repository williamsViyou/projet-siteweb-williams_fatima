<?php

/* ::ModelUsed/menu.html.twig */
class __TwigTemplate_9879f1f44a2e337445ed402d3bd6d40748d3311438427af49b3fd29fa41f79d3 extends Twig_Template
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
        $__internal_be0858d84f5ec5cc6dc4c861ec505db62a347c17486453548adc3a894220b403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0858d84f5ec5cc6dc4c861ec505db62a347c17486453548adc3a894220b403->enter($__internal_be0858d84f5ec5cc6dc4c861ec505db62a347c17486453548adc3a894220b403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about", array("num_page" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_be0858d84f5ec5cc6dc4c861ec505db62a347c17486453548adc3a894220b403->leave($__internal_be0858d84f5ec5cc6dc4c861ec505db62a347c17486453548adc3a894220b403_prof);

    }

    public function getTemplateName()
    {
        return "::ModelUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for page in pages %}
    <li><a href=\"{{ path ('about', { 'num_page' : page.id }) }}\">{{ page.titre }}</a>
{% endfor %}", "::ModelUsed/menu.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/menu.html.twig");
    }
}
