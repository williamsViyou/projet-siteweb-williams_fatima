<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_436b5342c1204a68c6429e57c848e8c061cc801e4ccf055fd181d513e9290502 extends Twig_Template
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
        $__internal_caf86144f035a55a36b1514ed34d9fb0cd853e804406b9a02493dc6cb785a6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf86144f035a55a36b1514ed34d9fb0cd853e804406b9a02493dc6cb785a6b2->enter($__internal_caf86144f035a55a36b1514ed34d9fb0cd853e804406b9a02493dc6cb785a6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_caf86144f035a55a36b1514ed34d9fb0cd853e804406b9a02493dc6cb785a6b2->leave($__internal_caf86144f035a55a36b1514ed34d9fb0cd853e804406b9a02493dc6cb785a6b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
