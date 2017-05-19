<?php

/* EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig */
class __TwigTemplate_72690d72854e1e7433e79f723b84715fb26fe211f32d98cb309c21d5d81ee4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig", 1);
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
        $__internal_a5daca20431b66ae9b272415725f094c2173238c04f09e2a50218a30092c9d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5daca20431b66ae9b272415725f094c2173238c04f09e2a50218a30092c9d33->enter($__internal_a5daca20431b66ae9b272415725f094c2173238c04f09e2a50218a30092c9d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig"));

        // line 2
        $context["totalHT"] = 0;
        // line 3
        $context["totalTTC"] = 0;
        // line 4
        $context["refTva"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 7
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 8
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
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5daca20431b66ae9b272415725f094c2173238c04f09e2a50218a30092c9d33->leave($__internal_a5daca20431b66ae9b272415725f094c2173238c04f09e2a50218a30092c9d33_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ce3c1170710a8c17ef34158cb63bd1ee3d24f6f60934cfff95cca9b5a8b601d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce3c1170710a8c17ef34158cb63bd1ee3d24f6f60934cfff95cca9b5a8b601d->enter($__internal_7ce3c1170710a8c17ef34158cb63bd1ee3d24f6f60934cfff95cca9b5a8b601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<div class=\"container\">
    <div class=\"row\">
        
                <?php include '../layout/col-left.php'; ?>
        <div class=\"span3\">
           ";
        // line 20
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig", 20)->display($context);
        echo " 

        </div>
        
        <div class=\"span9\">
            
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
        echo "            
            <h2>Valider mon panier</h2>
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
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
            // line 44
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 48
        echo "                    
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 50
            echo "                    <tr>
                        <form action=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>
                   
                    ";
            // line 61
            $context["totalHT"] = (($context["totalHT"] ?? $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())));
            // line 62
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 63
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 64
                    echo "                            ";
                    $context["totalTTC"] = (($context["totalTTC"] ?? $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 65
                    echo "                        ";
                }
                // line 66
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "

                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 70
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 71
                    echo "                             ";
                    $context["totalTTC"] = (($context["totalTTC"] ?? $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 72
                    echo "                        ";
                }
                // line 73
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "

                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 77
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 78
                    echo "                            ";
                    $context["refTva"] = twig_array_merge(($context["refTva"] ?? $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($context["t"], "valeur", array())) => ($this->getAttribute(($context["refTva"] ?? $this->getContext($context, "refTva")), ("%" . $this->getAttribute($context["t"], "valeur", array())), array(), "array") + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())))));
                    // line 79
                    echo "                        ";
                }
                // line 80
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "               
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>";
        // line 87
        echo twig_escape_filter($this->env, ($context["totalHT"] ?? $this->getContext($context, "totalHT")), "html", null, true);
        echo " €</dd>
                
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["refTva"] ?? $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 90
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
        // line 92
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 93
        echo twig_escape_filter($this->env, ($context["totalTTC"] ?? $this->getContext($context, "totalTTC")), "html", null, true);
        echo " €</dd>
                </dl>
            <div class=\"span3 pull-left\">
        <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                      ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livraison"] ?? $this->getContext($context, "livraison")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 99
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nom", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "Adresse", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "CodePostal", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "Ville", array()), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "Pays", array()), "html", null, true);
            echo ") - (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "Tel", array()), "html", null, true);
            echo " )</dt>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                      ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["facturation"] ?? $this->getContext($context, "facturation")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 110
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "Adresse", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "CodePostal", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "Ville", array()), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "Pays", array()), "html", null, true);
            echo ") - (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "Tel", array()), "html", null, true);
            echo " )</dt>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
";
        
        $__internal_7ce3c1170710a8c17ef34158cb63bd1ee3d24f6f60934cfff95cca9b5a8b601d->leave($__internal_7ce3c1170710a8c17ef34158cb63bd1ee3d24f6f60934cfff95cca9b5a8b601d_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 119,  335 => 114,  321 => 112,  317 => 111,  310 => 110,  306 => 109,  298 => 103,  284 => 101,  280 => 100,  273 => 99,  269 => 98,  261 => 93,  258 => 92,  247 => 90,  243 => 89,  238 => 87,  232 => 83,  225 => 81,  219 => 80,  216 => 79,  213 => 78,  210 => 77,  206 => 76,  202 => 74,  196 => 73,  193 => 72,  190 => 71,  187 => 70,  183 => 69,  179 => 67,  173 => 66,  170 => 65,  167 => 64,  164 => 63,  159 => 62,  157 => 61,  150 => 57,  146 => 56,  141 => 54,  136 => 52,  132 => 51,  129 => 50,  125 => 49,  122 => 48,  116 => 44,  114 => 43,  100 => 31,  91 => 28,  88 => 27,  84 => 26,  75 => 20,  68 => 15,  62 => 14,  55 => 1,  44 => 8,  42 => 7,  38 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layout.html.twig' %}
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
<div class=\"container\">
    <div class=\"row\">
        
                <?php include '../layout/col-left.php'; ?>
        <div class=\"span3\">
           {% include '::ModelUsed/navigation.html.twig' %} 

        </div>
        
        <div class=\"span9\">
            
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            
            <h2>Valider mon panier</h2>
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
                    {% if produits|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    {% endif %}
                    
                    {% for produit in produits %}
                    <tr>
                        <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                            <td>{{ produit.nom }}</td>
                            <td>
                                {{ produit.quantite }}
                            </td>
                            <td>{{ produit.prix }} €</td>
                            <td>{{ produit.prix * produit.quantite }} €</td>
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
                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>
                
                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
                </dl>
            <div class=\"span3 pull-left\">
        <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                      {% for l in livraison %}
                    <dt>{{ l.prenom }} {{ l.nom }}</dt>
                    <dt>{{ l.Adresse }}</dt>
                    <dt>{{ l.CodePostal }} {{ l.Ville }}({{ l.Pays }}) - ({{ l.Tel }} )</dt>
                    {% endfor %}
                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                      {% for f in facturation %}
                    <dt>{{f.prenom }} {{f.nom }}</dt>
                    <dt>{{f.Adresse }}</dt>
                    <dt>{{f.CodePostal }} {{f.Ville }}({{f.Pays }}) - ({{ f.Tel }} )</dt>
                    {% endfor %}
                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            <a href=\"{{ path('livraison') }}\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
{% endblock %}", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/validation.html.twig");
    }
}
