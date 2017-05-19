<?php

/* ::ModelUsed/navigation.html.twig */
class __TwigTemplate_71a592ceef0d1adfb539625f37789283525e36f994b2536d7303a05608d34e50 extends Twig_Template
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
        $__internal_bb45d5d0e020157154f6cc91629eb8a75ef20115c6d9dce339ebb462d52e2ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb45d5d0e020157154f6cc91629eb8a75ef20115c6d9dce339ebb462d52e2ac5->enter($__internal_bb45d5d0e020157154f6cc91629eb8a75ef20115c6d9dce339ebb462d52e2ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/navigation.html.twig"));

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
        
        $__internal_bb45d5d0e020157154f6cc91629eb8a75ef20115c6d9dce339ebb462d52e2ac5->leave($__internal_bb45d5d0e020157154f6cc91629eb8a75ef20115c6d9dce339ebb462d52e2ac5_prof);

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
