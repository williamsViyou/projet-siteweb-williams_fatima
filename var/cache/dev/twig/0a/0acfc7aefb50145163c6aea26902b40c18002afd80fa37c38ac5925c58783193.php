<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4975b7c952314c76d869eb1469c73335d7d820f30288449d9c69db87517db0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb1048074faf1a07fc446e2436451e3a9ccd65cf83182420503139eeb6770992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1048074faf1a07fc446e2436451e3a9ccd65cf83182420503139eeb6770992->enter($__internal_bb1048074faf1a07fc446e2436451e3a9ccd65cf83182420503139eeb6770992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bb1048074faf1a07fc446e2436451e3a9ccd65cf83182420503139eeb6770992->leave($__internal_bb1048074faf1a07fc446e2436451e3a9ccd65cf83182420503139eeb6770992_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eab4bed70f61ad209b7c0f0b06a6cd285e39e2eb900a6d45369b1f9e5c49c888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab4bed70f61ad209b7c0f0b06a6cd285e39e2eb900a6d45369b1f9e5c49c888->enter($__internal_eab4bed70f61ad209b7c0f0b06a6cd285e39e2eb900a6d45369b1f9e5c49c888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eab4bed70f61ad209b7c0f0b06a6cd285e39e2eb900a6d45369b1f9e5c49c888->leave($__internal_eab4bed70f61ad209b7c0f0b06a6cd285e39e2eb900a6d45369b1f9e5c49c888_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
