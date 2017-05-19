<?php

/* EcommerceEcommerceBundle:Default:Produits/layout/acc.html.twig */
class __TwigTemplate_000f50c729ae55586d06e02b904e5156831e80fd1dd1fefa3a53c9353ee72878 extends Twig_Template
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
        $__internal_6c6c43240065fa739fb736cc1d8fdd5e42779abb73a2aa8466d3992a69581120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6c43240065fa739fb736cc1d8fdd5e42779abb73a2aa8466d3992a69581120->enter($__internal_6c6c43240065fa739fb736cc1d8fdd5e42779abb73a2aa8466d3992a69581120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Produits/layout/acc.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
\t<head>
\t</head>
\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">

\t<body>
<h1>\tUn seul clique peux faire votre bonheur. </h1>
\t\t<div class=\"parallax first\">
\t\t\t<div class=\"right-heading\">
\t\t\t\t<h1> Autaumobile</h1>
\t\t\t\t<div class=\"caption-text\">
\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("idcategorie" => 1));
        echo "\">Là ou certains voient une voiture, nous, nous voyons une étoile de légende.  </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"band\">
\t\t\t\t<h1> Jeux videos </h1>
\t\t</div>

\t\t<div class=\"parallax second\">
\t\t\t<div class=\"sub-caption\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("idcategorie" => 2));
        echo "\">\tQui relève le defit? Soyez le premier à l'obligez à degainer .. du moins s'il vous en laisse le temps !!</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"band\">
\t\t\t<h1> High Tech  </h1>
\t\t</div>

\t\t<div class=\"parallax three\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("idcategorie" => 3));
        echo "\"> Et si vos reves devenaient une réalité</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


<div class=\"band\">
\t\t\t<h1>Telephone  </h1>
\t\t</div>

\t\t<div class=\"parallax four\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("idcategorie" => 4));
        echo "\"> Le smarphone du futur.. un seul appel peux le confirmer</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



\t\t

\t
\t\t
<div class=\"band\">
\t\t\t<h1>Vetements</h1>
\t\t</div>

\t\t<div class=\"parallax fourrr\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("idcategorie" => 5));
        echo "\">\tL'élégance à droit à son prix </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"band\">
\t\t\t<h1>Sport</h1>
\t\t</div>

\t\t<div class=\"parallax fourr\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t<a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("idcategorie" => 6));
        echo "\">\tUne belle forme nécésite des sacrifices </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>




\t</body>
</html>";
        
        $__internal_6c6c43240065fa739fb736cc1d8fdd5e42779abb73a2aa8466d3992a69581120->leave($__internal_6c6c43240065fa739fb736cc1d8fdd5e42779abb73a2aa8466d3992a69581120_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:Produits/layout/acc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 83,  105 => 70,  84 => 52,  68 => 39,  53 => 27,  37 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
\t<head>
\t</head>
\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">

\t<body>
<h1>\tUn seul clique peux faire votre bonheur. </h1>
\t\t<div class=\"parallax first\">
\t\t\t<div class=\"right-heading\">
\t\t\t\t<h1> Autaumobile</h1>
\t\t\t\t<div class=\"caption-text\">
\t\t<a href=\"{{ path ('categorieProduits', { 'idcategorie' : 1}) }}\">Là ou certains voient une voiture, nous, nous voyons une étoile de légende.  </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"band\">
\t\t\t\t<h1> Jeux videos </h1>
\t\t</div>

\t\t<div class=\"parallax second\">
\t\t\t<div class=\"sub-caption\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t<a href=\"{{ path ('categorieProduits', { 'idcategorie' : 2 }) }}\">\tQui relève le defit? Soyez le premier à l'obligez à degainer .. du moins s'il vous en laisse le temps !!</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"band\">
\t\t\t<h1> High Tech  </h1>
\t\t</div>

\t\t<div class=\"parallax three\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t<a href=\"{{ path ('categorieProduits', { 'idcategorie' : 3 }) }}\"> Et si vos reves devenaient une réalité</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


<div class=\"band\">
\t\t\t<h1>Telephone  </h1>
\t\t</div>

\t\t<div class=\"parallax four\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t<a href=\"{{ path ('categorieProduits', { 'idcategorie' : 4 }) }}\"> Le smarphone du futur.. un seul appel peux le confirmer</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



\t\t

\t
\t\t
<div class=\"band\">
\t\t\t<h1>Vetements</h1>
\t\t</div>

\t\t<div class=\"parallax fourrr\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t<a href=\"{{ path ('categorieProduits', { 'idcategorie' : 5 }) }}\">\tL'élégance à droit à son prix </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"band\">
\t\t\t<h1>Sport</h1>
\t\t</div>

\t\t<div class=\"parallax fourr\">
\t\t\t<div class=\"sub-caption left\">
\t\t\t\t<div class=\"caption-text\">
\t\t\t\t<a href=\"{{ path ('categorieProduits', { 'idcategorie' : 6 }) }}\">\tUne belle forme nécésite des sacrifices </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>




\t</body>
</html>", "EcommerceEcommerceBundle:Default:Produits/layout/acc.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produits/layout/acc.html.twig");
    }
}
