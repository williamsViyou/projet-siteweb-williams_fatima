<?php

/* PagesPagesBundle:Default/Pages/layout:pages.html.twig */
class __TwigTemplate_6ce400aeca7f19d61557782a288c3e00b34f9f20cf778b20fe2d6b790714d764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesPagesBundle:Default/Pages/layout:pages.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9150ed52c69c2bf59b834dac13dcfce75a2faad6e7cd6415cea0e3c142834e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9150ed52c69c2bf59b834dac13dcfce75a2faad6e7cd6415cea0e3c142834e83->enter($__internal_9150ed52c69c2bf59b834dac13dcfce75a2faad6e7cd6415cea0e3c142834e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesPagesBundle:Default/Pages/layout:pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9150ed52c69c2bf59b834dac13dcfce75a2faad6e7cd6415cea0e3c142834e83->leave($__internal_9150ed52c69c2bf59b834dac13dcfce75a2faad6e7cd6415cea0e3c142834e83_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_74f803eef8517682c265d40f9286a7ffe742458dbdff956c0c350e7b2dba1b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f803eef8517682c265d40f9286a7ffe742458dbdff956c0c350e7b2dba1b60->enter($__internal_74f803eef8517682c265d40f9286a7ffe742458dbdff956c0c350e7b2dba1b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "titre", array()), "html", null, true);
        echo "</h1>
        <div class=\"span12\">
            ";
        // line 11
        echo $this->getAttribute((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "contenu", array());
        echo "
        </div>
    </div>
</div>
 ";
        
        $__internal_74f803eef8517682c265d40f9286a7ffe742458dbdff956c0c350e7b2dba1b60->leave($__internal_74f803eef8517682c265d40f9286a7ffe742458dbdff956c0c350e7b2dba1b60_prof);

    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Default/Pages/layout:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  40 => 7,  34 => 6,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '::layout/layout.html.twig' %}



{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <h1>{{ pages.titre }}</h1>
        <div class=\"span12\">
            {{ pages.contenu|raw }}
        </div>
    </div>
</div>
 {% endblock %}", "PagesPagesBundle:Default/Pages/layout:pages.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Pages\\PagesBundle/Resources/views/Default/Pages/layout/pages.html.twig");
    }
}
