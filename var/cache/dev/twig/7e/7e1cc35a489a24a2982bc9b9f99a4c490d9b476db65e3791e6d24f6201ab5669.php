<?php

/* ::ModelUsed/navigationAdmin.html.twig */
class __TwigTemplate_3c618667770de846b2ad52ab9aa661632aca89d3c574def94dcb6ecf7bfb2adb extends Twig_Template
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
        $__internal_3273c088208da88de23397b01de68ecd9fdca23d9cf1df1e20aa5da62a58b008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3273c088208da88de23397b01de68ecd9fdca23d9cf1df1e20aa5da62a58b008->enter($__internal_3273c088208da88de23397b01de68ecd9fdca23d9cf1df1e20aa5da62a58b008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/navigationAdmin.html.twig"));

        // line 1
        echo "<div class=\"span3\">
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                  <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Acceuil</a>
            </li>
            <li>
               <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Mode user</a>
            </li>
        </ul>
    </div>

    <div class=\"well\">
        <ul class=\"nav nav-list\">
        <li>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Medias</a>
            </li
            <li>
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Catégories produits</a>
            </li>
            <li>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits_index");
        echo "\">Produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Clients</a>
            </li>
            <li>
                <a  href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showfacture");
        echo "\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index\">Pages</a>
            </li>
        </ul>
    </div>    
</div>";
        
        $__internal_3273c088208da88de23397b01de68ecd9fdca23d9cf1df1e20aa5da62a58b008->leave($__internal_3273c088208da88de23397b01de68ecd9fdca23d9cf1df1e20aa5da62a58b008_prof);

    }

    public function getTemplateName()
    {
        return "::ModelUsed/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  68 => 30,  57 => 22,  51 => 19,  45 => 16,  34 => 8,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                  <a href=\"{{ path('produits') }}\">Acceuil</a>
            </li>
            <li>
               <a href=\"{{ path('produits') }}\">Mode user</a>
            </li>
        </ul>
    </div>

    <div class=\"well\">
        <ul class=\"nav nav-list\">
        <li>
                <a href=\"{{ path ('yes_index') }}\">Medias</a>
            </li
            <li>
                <a href=\"{{ path ('categorie_index') }}\">Catégories produits</a>
            </li>
            <li>
                <a href=\"{{ path ('produits_index') }}\">Produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('user_index') }}\">Clients</a>
            </li>
            <li>
                <a  href=\"{{ path ('showfacture') }}\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index\">Pages</a>
            </li>
        </ul>
    </div>    
</div>", "::ModelUsed/navigationAdmin.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/navigationAdmin.html.twig");
    }
}
