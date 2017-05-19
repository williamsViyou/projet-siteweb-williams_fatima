<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f0dc89b20415db29f1b3ef5cbe316756546f3be1a26ce7aa7c94029e2b42362e extends Twig_Template
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
        $__internal_75e50060d5e83ee0c58120c3b8f198ecd47c1a92ace9a60068f3a6daea42934c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e50060d5e83ee0c58120c3b8f198ecd47c1a92ace9a60068f3a6daea42934c->enter($__internal_75e50060d5e83ee0c58120c3b8f198ecd47c1a92ace9a60068f3a6daea42934c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_75e50060d5e83ee0c58120c3b8f198ecd47c1a92ace9a60068f3a6daea42934c->leave($__internal_75e50060d5e83ee0c58120c3b8f198ecd47c1a92ace9a60068f3a6daea42934c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
