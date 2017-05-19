<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_aec6eb5707c0a863082e135452878163d4605c34616ee195ae94a5f54fb358a8 extends Twig_Template
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
        $__internal_c6f8f25c8ceb9e379e21df5d64bd9bbb64445aad7bd68c982cfa8b34d38b0915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f8f25c8ceb9e379e21df5d64bd9bbb64445aad7bd68c982cfa8b34d38b0915->enter($__internal_c6f8f25c8ceb9e379e21df5d64bd9bbb64445aad7bd68c982cfa8b34d38b0915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_c6f8f25c8ceb9e379e21df5d64bd9bbb64445aad7bd68c982cfa8b34d38b0915->leave($__internal_c6f8f25c8ceb9e379e21df5d64bd9bbb64445aad7bd68c982cfa8b34d38b0915_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
