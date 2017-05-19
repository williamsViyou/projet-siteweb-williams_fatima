<?php

/* EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig */
class __TwigTemplate_376862aa1d40a47435d1ec9e14cfe4b464397041113137b77c7172a2038c33fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig", 2);
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
        $__internal_a8322c517f63a8bfdb010e70df97cd2df39b3863c1d5c2d023dd786a57b3a908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8322c517f63a8bfdb010e70df97cd2df39b3863c1d5c2d023dd786a57b3a908->enter($__internal_a8322c517f63a8bfdb010e70df97cd2df39b3863c1d5c2d023dd786a57b3a908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8322c517f63a8bfdb010e70df97cd2df39b3863c1d5c2d023dd786a57b3a908->leave($__internal_a8322c517f63a8bfdb010e70df97cd2df39b3863c1d5c2d023dd786a57b3a908_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17d9e7fac7d98c2a51dc62cef219fb468b08cabbe604baa2f13eae5bc4ab523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17d9e7fac7d98c2a51dc62cef219fb468b08cabbe604baa2f13eae5bc4ab523->enter($__internal_d17d9e7fac7d98c2a51dc62cef219fb468b08cabbe604baa2f13eae5bc4ab523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"row\">
        
               ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        echo "
        <div class=\"span3\">
           ";
        // line 10
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig", 10)->display($context);
        echo " 

        </div>
        
        <div class=\"span9\">
            
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
            
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "                <div class=\"alert alert-errors\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            
            
            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Date</th>
                        <th>Prix unitaire</th>
                        <th> Une copie </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 41
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 42
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 46
        echo "                    
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 48
            echo "                    <tr>
                        <form >
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "idFacture", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "Date", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "PrixFacture", array()), "html", null, true);
            echo " €</td>
                            <td>  <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["facture"], "idFacture", array()))), "html", null, true);
            echo "\"><i class=\"icon-refresh\"></i></a> </td>
                        </form>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </tbody>
            </table>
           


                                        <br />
                                        <br />
                                        <br />
\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generatePDF");
        echo "\"  class=\"btn btn-primary\">Facture Actuelle</a>
    </div>
</div>
";
        
        $__internal_d17d9e7fac7d98c2a51dc62cef219fb468b08cabbe604baa2f13eae5bc4ab523->leave($__internal_d17d9e7fac7d98c2a51dc62cef219fb468b08cabbe604baa2f13eae5bc4ab523_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 67,  153 => 59,  143 => 55,  139 => 54,  134 => 52,  129 => 50,  125 => 48,  121 => 47,  118 => 46,  112 => 42,  110 => 41,  95 => 28,  86 => 25,  83 => 24,  79 => 23,  75 => 21,  66 => 18,  63 => 17,  59 => 16,  50 => 10,  45 => 8,  40 => 5,  34 => 4,  11 => 2,);
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
        
               {{ dump(factures)}}
        <div class=\"span3\">
           {% include '::ModelUsed/navigation.html.twig' %} 

        </div>
        
        <div class=\"span9\">
            
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}

            
            {% for flashMessage in app.session.flashbag.get('error') %}
                <div class=\"alert alert-errors\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            
            
            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Date</th>
                        <th>Prix unitaire</th>
                        <th> Une copie </th>
                    </tr>
                </thead>
                <tbody>
                    {% if factures|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    {% endif %}
                    
                    {% for facture in factures %}
                    <tr>
                        <form >
                            <td>{{facture.idFacture}}</td>
                            <td>
                                {{facture.Date }}
                            </td>
                            <td>{{facture.PrixFacture }} €</td>
                            <td>  <a href=\"{{ path('supprimer', { 'id' : facture.idFacture }) }}\"><i class=\"icon-refresh\"></i></a> </td>
                        </form>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
           


                                        <br />
                                        <br />
                                        <br />
\t\t\t\t\t\t\t\t\t\t<a  href=\"{{ path('generatePDF') }}\"  class=\"btn btn-primary\">Facture Actuelle</a>
    </div>
</div>
{% endblock %}", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/facture.html.twig");
    }
}
