<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7fd2b8c3053111afeb26ca70c1842308725d85557db7d1b33735dad8dc0c175b extends Twig_Template
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
        $__internal_66b5611746d63b7a6ba11b7d3ee8374adcca47b6e8a9bdb0c84d23f5e2493875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b5611746d63b7a6ba11b7d3ee8374adcca47b6e8a9bdb0c84d23f5e2493875->enter($__internal_66b5611746d63b7a6ba11b7d3ee8374adcca47b6e8a9bdb0c84d23f5e2493875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_66b5611746d63b7a6ba11b7d3ee8374adcca47b6e8a9bdb0c84d23f5e2493875->leave($__internal_66b5611746d63b7a6ba11b7d3ee8374adcca47b6e8a9bdb0c84d23f5e2493875_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
