<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_504d77e4d85100898e1c074bcc6f128e7f1581d01ad2a76092c2e0f316f3ae17 extends Twig_Template
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
        $__internal_a619be2fe13e746eedbad3bf74c99632a14f7b2c296edabbfccd9246f6bdc5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a619be2fe13e746eedbad3bf74c99632a14f7b2c296edabbfccd9246f6bdc5c2->enter($__internal_a619be2fe13e746eedbad3bf74c99632a14f7b2c296edabbfccd9246f6bdc5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a619be2fe13e746eedbad3bf74c99632a14f7b2c296edabbfccd9246f6bdc5c2->leave($__internal_a619be2fe13e746eedbad3bf74c99632a14f7b2c296edabbfccd9246f6bdc5c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
