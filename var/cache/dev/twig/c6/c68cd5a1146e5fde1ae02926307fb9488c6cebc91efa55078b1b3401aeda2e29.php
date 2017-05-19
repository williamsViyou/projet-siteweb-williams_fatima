<?php

/* :ModelUsed:navigation.html.twig */
class __TwigTemplate_f4d09768a415dadaecf44d9fe53b30611148255b48bf676c05d30f488c3c7dc6 extends Twig_Template
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
        $__internal_e09984c8de042de0afc4b042ce6355e1ebcf7388a70506b786c94932398cc827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09984c8de042de0afc4b042ce6355e1ebcf7388a70506b786c94932398cc827->enter($__internal_e09984c8de042de0afc4b042ce6355e1ebcf7388a70506b786c94932398cc827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ModelUsed:navigation.html.twig"));

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
        
        $__internal_e09984c8de042de0afc4b042ce6355e1ebcf7388a70506b786c94932398cc827->leave($__internal_e09984c8de042de0afc4b042ce6355e1ebcf7388a70506b786c94932398cc827_prof);

    }

    public function getTemplateName()
    {
        return ":ModelUsed:navigation.html.twig";
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


", ":ModelUsed:navigation.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/navigation.html.twig");
    }
}
