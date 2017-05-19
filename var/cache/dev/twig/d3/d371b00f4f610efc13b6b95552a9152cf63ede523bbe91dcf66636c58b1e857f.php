<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_10535348441b6d1b5083432562cd636a94d0844497026625dde114b9c11dc209 extends Twig_Template
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
        $__internal_719b30fddc69ad1c1fab81ac4e4f12416fbfcb59df414df9afa64787a15bce5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719b30fddc69ad1c1fab81ac4e4f12416fbfcb59df414df9afa64787a15bce5e->enter($__internal_719b30fddc69ad1c1fab81ac4e4f12416fbfcb59df414df9afa64787a15bce5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_719b30fddc69ad1c1fab81ac4e4f12416fbfcb59df414df9afa64787a15bce5e->leave($__internal_719b30fddc69ad1c1fab81ac4e4f12416fbfcb59df414df9afa64787a15bce5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
