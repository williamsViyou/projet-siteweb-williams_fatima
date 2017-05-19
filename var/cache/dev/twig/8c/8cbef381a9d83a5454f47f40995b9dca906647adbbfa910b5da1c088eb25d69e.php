<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_958be54e14ae54a0dae7c9f22d78db63d37ca7d958dfbad295f3172e6ab47c53 extends Twig_Template
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
        $__internal_8016bad46ae1e64791a6aaa2e5f74f087f72ed5022e92fc23dd08344f5e969e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8016bad46ae1e64791a6aaa2e5f74f087f72ed5022e92fc23dd08344f5e969e3->enter($__internal_8016bad46ae1e64791a6aaa2e5f74f087f72ed5022e92fc23dd08344f5e969e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8016bad46ae1e64791a6aaa2e5f74f087f72ed5022e92fc23dd08344f5e969e3->leave($__internal_8016bad46ae1e64791a6aaa2e5f74f087f72ed5022e92fc23dd08344f5e969e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e4a847bdd19bff20a49f079a3cf133a68e7f71725e551373773a3103853daf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4a847bdd19bff20a49f079a3cf133a68e7f71725e551373773a3103853daf6->enter($__internal_8e4a847bdd19bff20a49f079a3cf133a68e7f71725e551373773a3103853daf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8e4a847bdd19bff20a49f079a3cf133a68e7f71725e551373773a3103853daf6->leave($__internal_8e4a847bdd19bff20a49f079a3cf133a68e7f71725e551373773a3103853daf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
