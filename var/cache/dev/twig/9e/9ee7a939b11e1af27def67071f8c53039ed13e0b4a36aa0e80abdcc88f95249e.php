<?php

/* ::ModelUsed/menu.html.twig */
class __TwigTemplate_72f1fe47c8a01b67c56eba62fd6c6d526b6dac785beecac2e033cee2c5136392 extends Twig_Template
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
        $__internal_9feb1cf5b67b08c3bfa870f75adf02f3b900cf6201e38c7a4e8b3eabde404f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feb1cf5b67b08c3bfa870f75adf02f3b900cf6201e38c7a4e8b3eabde404f8a->enter($__internal_9feb1cf5b67b08c3bfa870f75adf02f3b900cf6201e38c7a4e8b3eabde404f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/menu.html.twig"));

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
        
        $__internal_9feb1cf5b67b08c3bfa870f75adf02f3b900cf6201e38c7a4e8b3eabde404f8a->leave($__internal_9feb1cf5b67b08c3bfa870f75adf02f3b900cf6201e38c7a4e8b3eabde404f8a_prof);

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
