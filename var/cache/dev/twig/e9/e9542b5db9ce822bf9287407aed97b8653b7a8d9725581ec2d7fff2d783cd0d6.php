<?php

/* ::ModelUsed/menu.html.twig */
class __TwigTemplate_067200a8f42ef065afeaf30eb3aaafebbc586b256f817ebcb44b09d4a102bf21 extends Twig_Template
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
        $__internal_ce4ed90ed3e63688c2900c6df4982660a61941dfc11c75997242e350d33e92b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4ed90ed3e63688c2900c6df4982660a61941dfc11c75997242e350d33e92b4->enter($__internal_ce4ed90ed3e63688c2900c6df4982660a61941dfc11c75997242e350d33e92b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
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
        
        $__internal_ce4ed90ed3e63688c2900c6df4982660a61941dfc11c75997242e350d33e92b4->leave($__internal_ce4ed90ed3e63688c2900c6df4982660a61941dfc11c75997242e350d33e92b4_prof);

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
{% endfor %}", "::ModelUsed/menu.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/menu.html.twig");
    }
}
