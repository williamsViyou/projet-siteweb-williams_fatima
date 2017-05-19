<?php

/* EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_66df2e2bd2ec9f7c2fcbca5a944fbb170fd38aeb306723af8cac7c174baef1f1 extends Twig_Template
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
        $__internal_0436e34b316ccea3ecd945674eb1c1f5edcd31c0f0e029ab76c5e4d950880cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0436e34b316ccea3ecd945674eb1c1f5edcd31c0f0e029ab76c5e4d950880cbc->enter($__internal_0436e34b316ccea3ecd945674eb1c1f5edcd31c0f0e029ab76c5e4d950880cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 8
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 9
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
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0436e34b316ccea3ecd945674eb1c1f5edcd31c0f0e029ab76c5e4d950880cbc->leave($__internal_0436e34b316ccea3ecd945674eb1c1f5edcd31c0f0e029ab76c5e4d950880cbc_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e156ccd41dc7a1856b84321e94af52e3a929f84068a0ee4a1f790ee10678cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e156ccd41dc7a1856b84321e94af52e3a929f84068a0ee4a1f790ee10678cc1->enter($__internal_6e156ccd41dc7a1856b84321e94af52e3a929f84068a0ee4a1f790ee10678cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "

\t<div class=\"container\">
\t\t<div class=\"row\">
         <div class=\"span3\"> 
            ";
        // line 23
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 23)->display($context);
        echo " 
            ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 25)->display($context);
            echo "  
            ";
        } else {
            // line 27
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 27)->display($context);
            echo " 
            ";
        }
        // line 28
        echo " 
            
</div>
\t\t\t\t<div class=\"span9\">
                  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 34
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        // line 49
        $context["ii"] = 0;
        // line 50
        echo "                         ";
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 51
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                         ";
        }
        // line 55
        echo "                         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 56
            echo "                         <tr>
                    
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>
<form action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPlus", array("id" => $this->getAttribute($context["produit"], "id_produit", array()))), "html", null, true);
            echo "\" method=\"get\">
                         
                                 <select name=\"qte\" class=\"span1\" onChange = \"this.form.submit()\">
                                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 64
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
            // line 66
            echo "                                </select>&nbsp;
                                
                        
                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPlus", array("id" => $this->getAttribute($context["produit"], "id_produit", array()))), "html", null, true);
            echo "\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                          
                                </td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                            ";
            // line 75
            $context["ii"] = ((isset($context["ii"]) ? $context["ii"] : $this->getContext($context, "ii")) + 1);
            // line 76
            echo "                               </form>

                               </tr>
               
                    ";
            // line 80
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())));
            // line 81
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 82
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 83
                    echo "                            ";
                    $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 84
                    echo "                        ";
                }
                // line 85
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "

                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 89
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 90
                    echo "                             ";
                    $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 91
                    echo "                        ";
                }
                // line 92
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "

                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 96
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 97
                    echo "                            ";
                    $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($context["t"], "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($context["t"], "valeur", array())), array(), "array") + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())))));
                    // line 98
                    echo "                        ";
                }
                // line 99
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "               
       
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                          </tbody>
                    </table>
                </form>
      ";
        // line 106
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 107
            echo "               
                <dl class=\"dl-horizontal pull-right\">
                     <dt>Total HT :</dt><dd>";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " €</dd>
                
                ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 112
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
            // line 114
            echo "
                <dt>Total TTC :</dt><dd>";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
         ";
        }
        // line 120
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>";
        
        $__internal_6e156ccd41dc7a1856b84321e94af52e3a929f84068a0ee4a1f790ee10678cc1->leave($__internal_6e156ccd41dc7a1856b84321e94af52e3a929f84068a0ee4a1f790ee10678cc1_prof);

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
        return array (  331 => 120,  326 => 118,  320 => 115,  317 => 114,  306 => 112,  302 => 111,  297 => 109,  293 => 107,  291 => 106,  286 => 103,  278 => 100,  272 => 99,  269 => 98,  266 => 97,  263 => 96,  259 => 95,  255 => 93,  249 => 92,  246 => 91,  243 => 90,  240 => 89,  236 => 88,  232 => 86,  226 => 85,  223 => 84,  220 => 83,  217 => 82,  212 => 81,  210 => 80,  204 => 76,  202 => 75,  198 => 74,  194 => 73,  188 => 70,  184 => 69,  179 => 66,  164 => 64,  160 => 63,  154 => 60,  149 => 58,  145 => 56,  140 => 55,  134 => 51,  131 => 50,  129 => 49,  115 => 37,  106 => 34,  103 => 33,  99 => 32,  93 => 28,  87 => 27,  81 => 25,  79 => 24,  75 => 23,  68 => 18,  62 => 17,  55 => 2,  44 => 9,  42 => 8,  38 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 2,);
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


\t<div class=\"container\">
\t\t<div class=\"row\">
         <div class=\"span3\"> 
            {% include '::ModelUsed/navigation.html.twig' %} 
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
               {% include '::ModelUsed/utilisateurConnecter.html.twig' %}  
            {% else %}
               {% include '::ModelUsed/utilisateur.html.twig' %} 
            {% endif %} 
            
</div>
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
                         
                                 <select name=\"qte\" class=\"span1\" onChange = \"this.form.submit()\">
                                    {% for i in 1..10 %}
                             <option value=\"{{ i }}\" {% if i == produit.quantite %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                    {% endfor %}
                                </select>&nbsp;
                                
                        
                                <a href=\"{{ path('ajouterPlus', { 'id' : produit.id_produit }) }}\"><i class=\"icon-refresh\"></i></a>
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
                <a href=\"{{ path ('produits') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>{% endblock %}", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
