<?php

/* ::ModelUsed/navigation.html.twig */
class __TwigTemplate_d5483109c2e333dcfb59aa8a70c3b61fc5fb123cc4618aa533cfcee81f3bf021 extends Twig_Template
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
        $__internal_d2838893eeae07c8270c8d5b4b31c3d5d179b15e2bc76ef175db4bfbfc59e011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2838893eeae07c8270c8d5b4b31c3d5d179b15e2bc76ef175db4bfbfc59e011->enter($__internal_d2838893eeae07c8270c8d5b4b31c3d5d179b15e2bc76ef175db4bfbfc59e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
       
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceEcommerceBundle:Categorie:menu"));
        echo "
    </ul>
</div>


";
        
        $__internal_d2838893eeae07c8270c8d5b4b31c3d5d179b15e2bc76ef175db4bfbfc59e011->leave($__internal_d2838893eeae07c8270c8d5b4b31c3d5d179b15e2bc76ef175db4bfbfc59e011_prof);

    }

    public function getTemplateName()
    {
        return "::ModelUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
       
        {{ render (controller('EcommerceEcommerceBundle:Categorie:menu')) }}
    </ul>
</div>


", "::ModelUsed/navigation.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/navigation.html.twig");
    }
}
