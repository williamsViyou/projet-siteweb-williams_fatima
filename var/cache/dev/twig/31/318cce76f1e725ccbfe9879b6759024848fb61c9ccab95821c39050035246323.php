<?php

/* ModelUsed/navigation.html.twig */
class __TwigTemplate_a9ad35f14dae6aa1aadfb73dbc723a83c96ad433bb921d0043092cb61debb608 extends Twig_Template
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
        $__internal_a8a254373dd0f0c27ea6417ebef1cee9f7aa096943dd19691a011f617220b095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a254373dd0f0c27ea6417ebef1cee9f7aa096943dd19691a011f617220b095->enter($__internal_a8a254373dd0f0c27ea6417ebef1cee9f7aa096943dd19691a011f617220b095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModelUsed/navigation.html.twig"));

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
        
        $__internal_a8a254373dd0f0c27ea6417ebef1cee9f7aa096943dd19691a011f617220b095->leave($__internal_a8a254373dd0f0c27ea6417ebef1cee9f7aa096943dd19691a011f617220b095_prof);

    }

    public function getTemplateName()
    {
        return "ModelUsed/navigation.html.twig";
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


", "ModelUsed/navigation.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\views\\ModelUsed\\navigation.html.twig");
    }
}
