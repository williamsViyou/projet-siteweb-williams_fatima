<?php

/* EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig */
class __TwigTemplate_862d3a1de8ad72fc92db817247ce22c5b0207de33adb4e734e23286e44781adb extends Twig_Template
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
        $__internal_1ba1de1914f0a6d5c09007c3a50baf2f91173fca921617ea0b07736674b8b303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba1de1914f0a6d5c09007c3a50baf2f91173fca921617ea0b07736674b8b303->enter($__internal_1ba1de1914f0a6d5c09007c3a50baf2f91173fca921617ea0b07736674b8b303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig"));

        // line 2
        $context["totalHT"] = 0;
        // line 3
        $context["totalTTC"] = 0;
        // line 4
        $context["refTva"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 7
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 8
                    $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($context["t"], "valeur", array())) => 0));
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
        
        $__internal_1ba1de1914f0a6d5c09007c3a50baf2f91173fca921617ea0b07736674b8b303->leave($__internal_1ba1de1914f0a6d5c09007c3a50baf2f91173fca921617ea0b07736674b8b303_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_696729866a6f8f1f5f12f9e9f17afee6f8bbd799c416bfd43bd943d330d5ded5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696729866a6f8f1f5f12f9e9f17afee6f8bbd799c416bfd43bd943d330d5ded5->enter($__internal_696729866a6f8f1f5f12f9e9f17afee6f8bbd799c416bfd43bd943d330d5ded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<div class=\"container\">
      <div class=\"row\">\t
       <div class=\"span3\"> 
            ";
        // line 18
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig", 18)->display($context);
        echo " 
            ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 20
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig", 20)->display($context);
            echo "  
            ";
        } else {
            // line 22
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig", 22)->display($context);
            echo " 
            ";
        }
        // line 23
        echo " 
            
</div>
        <div class=\"span9\">
            
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        // line 45
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 46
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 50
        echo "                    
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 52
            echo "                    <tr>
                        <form action=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>
                   
                    ";
            // line 63
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())));
            // line 64
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 65
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 66
                    echo "                            ";
                    $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 67
                    echo "                        ";
                }
                // line 68
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "

                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 72
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 73
                    echo "                             ";
                    $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 74
                    echo "                        ";
                }
                // line 75
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "

                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 79
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 80
                    echo "                            ";
                    $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($context["t"], "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($context["t"], "valeur", array())), array(), "array") + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())))));
                    // line 81
                    echo "                        ";
                }
                // line 82
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "               
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo " €</dd>
                
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 92
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
        // line 94
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo " €</dd>
                </dl>
            <div class=\"span3 pull-left\">
        <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                      ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 101
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nom", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "Adresse", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 103
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
        // line 105
        echo "                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                      ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 112
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "Adresse", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 114
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
        // line 116
        echo "                </dl>
            </div>
            
            <div class=\"clearfix\"></div>

            
            <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("payement", array("montant" => (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")))), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\">Payer</a>
            <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
";
        
        $__internal_696729866a6f8f1f5f12f9e9f17afee6f8bbd799c416bfd43bd943d330d5ded5->leave($__internal_696729866a6f8f1f5f12f9e9f17afee6f8bbd799c416bfd43bd943d330d5ded5_prof);

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
        return array (  361 => 123,  357 => 122,  349 => 116,  335 => 114,  331 => 113,  324 => 112,  320 => 111,  312 => 105,  298 => 103,  294 => 102,  287 => 101,  283 => 100,  275 => 95,  272 => 94,  261 => 92,  257 => 91,  252 => 89,  246 => 85,  239 => 83,  233 => 82,  230 => 81,  227 => 80,  224 => 79,  220 => 78,  216 => 76,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  197 => 71,  193 => 69,  187 => 68,  184 => 67,  181 => 66,  178 => 65,  173 => 64,  171 => 63,  164 => 59,  160 => 58,  155 => 56,  150 => 54,  146 => 53,  143 => 52,  139 => 51,  136 => 50,  130 => 46,  128 => 45,  114 => 33,  105 => 30,  102 => 29,  98 => 28,  91 => 23,  85 => 22,  79 => 20,  77 => 19,  73 => 18,  68 => 15,  62 => 14,  55 => 1,  44 => 8,  42 => 7,  38 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
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
      <div class=\"row\">\t
       <div class=\"span3\"> 
            {% include '::ModelUsed/navigation.html.twig' %} 
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
               {% include '::ModelUsed/utilisateurConnecter.html.twig' %}  
            {% else %}
               {% include '::ModelUsed/utilisateur.html.twig' %} 
            {% endif %} 
            
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

            
            <a href=\"{{ path('payement', {'montant' : totalTTC }) }}\" class=\"btn btn-success pull-right\">Payer</a>
            <a href=\"{{ path('livraison') }}\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
{% endblock %}", "EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/validation.html.twig");
    }
}
