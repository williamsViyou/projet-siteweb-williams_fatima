<?php

/* EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_e031aecc8cdbba936262e7d935a0808ec5b5836a82308cd4dbd5e9567cc5fe03 extends Twig_Template
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
        $__internal_c257cc3677db4ca33b83ec146b8a622f38e995b5fe0b30401bd7ad19a3d91ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c257cc3677db4ca33b83ec146b8a622f38e995b5fe0b30401bd7ad19a3d91ea2->enter($__internal_c257cc3677db4ca33b83ec146b8a622f38e995b5fe0b30401bd7ad19a3d91ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 8
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 9
                    $context["refTva"] = twig_array_merge(($context["refTva"] ?? $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($context["t"], "valeur", array())) => 0));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c257cc3677db4ca33b83ec146b8a622f38e995b5fe0b30401bd7ad19a3d91ea2->leave($__internal_c257cc3677db4ca33b83ec146b8a622f38e995b5fe0b30401bd7ad19a3d91ea2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_460e53567331d20ccedcc0a2e64a7d19760bb02b34313b4afc4a4f590e7fb8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460e53567331d20ccedcc0a2e64a7d19760bb02b34313b4afc4a4f590e7fb8b8->enter($__internal_460e53567331d20ccedcc0a2e64a7d19760bb02b34313b4afc4a4f590e7fb8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        <div class=\"span3\">
             ";
        // line 20
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 20)->display($context);
        echo " 
\t\t</div>
        
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"span9\">
                  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    <h2>Votre parnier</h2>
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
        // line 43
        $context["ii"] = 0;
        // line 44
        echo "                         ";
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
            // line 45
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                         ";
        }
        // line 49
        echo "                         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 50
            echo "                         <tr>
                    
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>
<form action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPlus", array("id" => $this->getAttribute($context["produit"], "id_produit", array()))), "html", null, true);
            echo "\" method=\"get\">
                         
                                 <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 58
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
            // line 60
            echo "                                </select>&nbsp;
                                
                        
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                          
                                </td>
                                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                            ";
            // line 69
            $context["ii"] = (($context["ii"] ?? $this->getContext($context, "ii")) + 1);
            // line 70
            echo "                               </form>

                               </tr>
               
                    ";
            // line 74
            $context["totalHT"] = (($context["totalHT"] ?? $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())));
            // line 75
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 76
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 77
                    echo "                            ";
                    $context["totalTTC"] = (($context["totalTTC"] ?? $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 78
                    echo "                        ";
                }
                // line 79
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "

                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 83
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 84
                    echo "                             ";
                    $context["totalTTC"] = (($context["totalTTC"] ?? $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 85
                    echo "                        ";
                }
                // line 86
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "

                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 90
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 91
                    echo "                            ";
                    $context["refTva"] = twig_array_merge(($context["refTva"] ?? $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($context["t"], "valeur", array())) => ($this->getAttribute(($context["refTva"] ?? $this->getContext($context, "refTva")), ("%" . $this->getAttribute($context["t"], "valeur", array())), array(), "array") + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())))));
                    // line 92
                    echo "                        ";
                }
                // line 93
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "               
       
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
      ";
        // line 110
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 111
            echo "               
                <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>";
            // line 113
            echo twig_escape_filter($this->env, ($context["totalHT"] ?? $this->getContext($context, "totalHT")), "html", null, true);
            echo " €</dd>
                
                ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["refTva"] ?? $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 116
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
            // line 118
            echo "
                <dt>Total TTC :</dt><dd>";
            // line 119
            echo twig_escape_filter($this->env, ($context["totalTTC"] ?? $this->getContext($context, "totalTTC")), "html", null, true);
            echo " €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
         ";
        }
        // line 124
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>";
        
        $__internal_460e53567331d20ccedcc0a2e64a7d19760bb02b34313b4afc4a4f590e7fb8b8->leave($__internal_460e53567331d20ccedcc0a2e64a7d19760bb02b34313b4afc4a4f590e7fb8b8_prof);

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
        return array (  320 => 124,  315 => 122,  309 => 119,  306 => 118,  295 => 116,  291 => 115,  286 => 113,  282 => 111,  280 => 110,  265 => 97,  257 => 94,  251 => 93,  248 => 92,  245 => 91,  242 => 90,  238 => 89,  234 => 87,  228 => 86,  225 => 85,  222 => 84,  219 => 83,  215 => 82,  211 => 80,  205 => 79,  202 => 78,  199 => 77,  196 => 76,  191 => 75,  189 => 74,  183 => 70,  181 => 69,  177 => 68,  173 => 67,  167 => 64,  161 => 60,  146 => 58,  142 => 57,  136 => 54,  131 => 52,  127 => 50,  122 => 49,  116 => 45,  113 => 44,  111 => 43,  97 => 31,  88 => 28,  85 => 27,  81 => 26,  72 => 20,  68 => 18,  62 => 17,  55 => 2,  44 => 9,  42 => 8,  38 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 2,);
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
{% for produit in produits %}
                    {% for t in tva %}
                        {% if(t.id == produit.tva) %}
                              {% set refTva = refTva|merge({ ('%' ~ t.valeur) : 0 }) %}
                        {% endif %}
                    {% endfor %}

{% endfor %}



{% block body %}

        <div class=\"span3\">
             {% include '::ModelUsed/navigation.html.twig' %} 
\t\t</div>
        
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"span9\">
                  {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
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
                         {% if produits|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                         {% endif %}
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


                    {% for t in tva %}
                        {% if(t.id == produit.tva) %}
                             {% set totalTTC = totalTTC + (produit.prix * produit.quantite)|tva(t.multiplicate) %}
                        {% endif %}
                    {% endfor %}


                    {% for t in tva %}
                        {% if(t.id == produit.tva) %}
                            {% set refTva = refTva|merge({ ('%' ~ t.valeur) : refTva['%' ~ t.valeur] + ( produit.prix * produit.quantite)|montantTva(t.multiplicate) }) %}
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
      {% if produits|length != 0 %}
               
                <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>
                
                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"{{ path ('validation') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
         {% endif %}
                <a href=\"{{ path('produits') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>{% endblock %}", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
