<?php

/* EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_251ab2c2451328ade7e25ad954cd291fae78d36823f90c8af4abf259cdd9f2b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 2);
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
        $__internal_906246a008894420cc0b5f69eac14a65f8364850aff4743f5a0e24a7b9720457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906246a008894420cc0b5f69eac14a65f8364850aff4743f5a0e24a7b9720457->enter($__internal_906246a008894420cc0b5f69eac14a65f8364850aff4743f5a0e24a7b9720457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_906246a008894420cc0b5f69eac14a65f8364850aff4743f5a0e24a7b9720457->leave($__internal_906246a008894420cc0b5f69eac14a65f8364850aff4743f5a0e24a7b9720457_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d135f181b397b09146bbc9a31866688e38f4507669196239e2f0e20ef73ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d135f181b397b09146bbc9a31866688e38f4507669196239e2f0e20ef73ed5->enter($__internal_c4d135f181b397b09146bbc9a31866688e38f4507669196239e2f0e20ef73ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
        <div class=\"span3\">
             ";
        // line 9
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 9)->display($context);
        echo " 
\t\t</div>
        
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"span9\">
                    <h2>Votre parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 27
        $context["ii"] = 0;
        // line 28
        echo "                         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 29
            echo "                         <tr>
                    
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>
<form action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPlus", array("id" => $this->getAttribute($context["produit"], "id_produit", array()))), "html", null, true);
            echo "\" method=\"get\">
                         
                                 <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "                             <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute($context["produit"], "quantite", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                                </select>&nbsp;
                                
                        
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                          
                                </td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                            ";
            // line 48
            $context["ii"] = (($context["ii"] ?? $this->getContext($context, "ii")) + 1);
            // line 49
            echo "                               </form>

                               </tr>

                    ";
            // line 53
            $context["totalHT"] = (($context["totalHT"] ?? $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())));
            // line 54
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 55
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 56
                    echo "                            ";
                    $context["totalTTC"] = (($context["totalTTC"] ?? $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 57
                    echo "                        ";
                }
                // line 58
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "       
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                       <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
                <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>";
        // line 76
        echo twig_escape_filter($this->env, ($context["totalHT"] ?? $this->getContext($context, "totalHT")), "html", null, true);
        echo " €</dd>
                
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["refTva"] ?? $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 79
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 82
        echo twig_escape_filter($this->env, ($context["totalTTC"] ?? $this->getContext($context, "totalTTC")), "html", null, true);
        echo " €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>";
        
        $__internal_c4d135f181b397b09146bbc9a31866688e38f4507669196239e2f0e20ef73ed5->leave($__internal_c4d135f181b397b09146bbc9a31866688e38f4507669196239e2f0e20ef73ed5_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 85,  210 => 82,  207 => 81,  196 => 79,  192 => 78,  187 => 76,  170 => 61,  163 => 59,  157 => 58,  154 => 57,  151 => 56,  148 => 55,  143 => 54,  141 => 53,  135 => 49,  133 => 48,  129 => 47,  125 => 46,  119 => 43,  113 => 39,  98 => 37,  94 => 36,  88 => 33,  83 => 31,  79 => 29,  74 => 28,  72 => 27,  51 => 9,  47 => 7,  41 => 6,  34 => 2,  32 => 5,  30 => 4,  28 => 3,  11 => 2,);
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
{% set totalHT = 0 %}
{% set totalTTC = 0%}
{% set refTva = {} %}
{% block body %}

        <div class=\"span3\">
             {% include '::ModelUsed/navigation.html.twig' %} 
\t\t</div>
        
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"span9\">
                    <h2>Votre parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% set ii = 0 %}
                         {% for produit in produits %}
                         <tr>
                    
                        <td>{{produit.nom}}</td>
                        <td>
<form action=\"{{ path('ajouterPlus', { 'id' : produit.id_produit }) }}\" method=\"get\">
                         
                                 <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    {% for i in 1..10 %}
                             <option value=\"{{ i }}\" {% if i == produit.quantite %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                    {% endfor %}
                                </select>&nbsp;
                                
                        
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"{{ path('supprimer', { 'id' : produit.id }) }}\"><i class=\"icon-trash\"></i></a>
                          
                                </td>
                                <td>{{ produit.prix }} €</td>
                                <td>{{ produit.prix * produit.quantite}} €</td>
                            {% set ii = ii +  1 %}
                               </form>

                               </tr>

                    {% set totalHT = totalHT + (produit.prix * produit.quantite) %}
                    {% for t in tva %}
                        {% if(t.id == produit.tva) %}
                            {% set totalTTC = totalTTC + (produit.prix * produit.quantite)|tva(t.multiplicate) %}
                        {% endif %}
                    {% endfor %}
       
 {% endfor %}
                       <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
                <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>
                
                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"{{ path ('validation') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>{% endblock %}", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
