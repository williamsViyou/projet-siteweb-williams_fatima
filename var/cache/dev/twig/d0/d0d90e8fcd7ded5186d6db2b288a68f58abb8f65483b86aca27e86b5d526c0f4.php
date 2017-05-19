<?php

/* EcommerceEcommerceBundle:Default:Panier/layout/facturePDF.html.twig */
class __TwigTemplate_940e00b11523d4f9049abc171b3ac721d81c44253f35a8fab6dfff51a4396c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/facturePDF.html.twig", 1);
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
        $__internal_8b7178bfc379e203864a55439c52314f7825a5781f7b9487cf3b181b4af6f9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7178bfc379e203864a55439c52314f7825a5781f7b9487cf3b181b4af6f9b6->enter($__internal_8b7178bfc379e203864a55439c52314f7825a5781f7b9487cf3b181b4af6f9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Panier/layout/facturePDF.html.twig"));

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
        
        $__internal_8b7178bfc379e203864a55439c52314f7825a5781f7b9487cf3b181b4af6f9b6->leave($__internal_8b7178bfc379e203864a55439c52314f7825a5781f7b9487cf3b181b4af6f9b6_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14356e24cf0bf07cfc2eac186c66586f92a8b12777a638be93e49b32b16ca07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14356e24cf0bf07cfc2eac186c66586f92a8b12777a638be93e49b32b16ca07->enter($__internal_c14356e24cf0bf07cfc2eac186c66586f92a8b12777a638be93e49b32b16ca07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<!-- 
\tcontent of this area will be the content of your PDF file 
\t-->
\t<div id=\"HTMLtoPDF\">



\t<p>










<div class=\"container\">
    <div class=\"row\">
        
        
        <div class=\"span12\">
            
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            
            <h2>Valider mon panier - Facture</h2>
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
        // line 56
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 57
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                            
                        </tr>
                    ";
        }
        // line 62
        echo "                    
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 64
            echo "                    <tr>
                        <form action=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>
                   
                    ";
            // line 75
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())));
            // line 76
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 77
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 78
                    echo "                            ";
                    $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
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
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 84
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 85
                    echo "                             ";
                    $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())));
                    // line 86
                    echo "                        ";
                }
                // line 87
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "

                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 91
                echo "                        ";
                if (($this->getAttribute($context["t"], "id", array()) == $this->getAttribute($context["produit"], "tva", array()))) {
                    // line 92
                    echo "                            ";
                    $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($context["t"], "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($context["t"], "valeur", array())), array(), "array") + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($context["produit"], "quantite", array())), $this->getAttribute($context["t"], "multiplicate", array())))));
                    // line 93
                    echo "                        ";
                }
                // line 94
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "               
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal \">
                     <dt>Total HT :</dt><dd>";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo " euro(s)</dd>
                
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 104
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo "  euro(s)</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo "  euro(s)</dd>
                </dl>
<br /><br />
                <h4>Adresse de facturation</h4></dt>
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
        echo "<br />
                 <h4>Adresse de livraison</h4></dt>
                      ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 119
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nom", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "Adresse", array()), "html", null, true);
            echo "</dt>
                    <dt>";
            // line 121
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
        // line 123
        echo "            
\t<!-- here we call the function that makes PDF -->
\t<a href=\"#\" class=\"dl-horizontal pull-rigth\" onclick=\"HTMLtoPDF()\">Download PDF</a>


            
            
            
            <div class=\"clearfix\"></div>
    </div>
</div>
</p>

\t</div>



    
";
        
        $__internal_c14356e24cf0bf07cfc2eac186c66586f92a8b12777a638be93e49b32b16ca07->leave($__internal_c14356e24cf0bf07cfc2eac186c66586f92a8b12777a638be93e49b32b16ca07_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:Panier/layout/facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 123,  327 => 121,  323 => 120,  316 => 119,  312 => 118,  308 => 116,  294 => 114,  290 => 113,  283 => 112,  279 => 111,  272 => 107,  269 => 106,  258 => 104,  254 => 103,  249 => 101,  243 => 97,  236 => 95,  230 => 94,  227 => 93,  224 => 92,  221 => 91,  217 => 90,  213 => 88,  207 => 87,  204 => 86,  201 => 85,  198 => 84,  194 => 83,  190 => 81,  184 => 80,  181 => 79,  178 => 78,  175 => 77,  170 => 76,  168 => 75,  161 => 71,  157 => 70,  152 => 68,  147 => 66,  143 => 65,  140 => 64,  136 => 63,  133 => 62,  126 => 57,  124 => 56,  110 => 44,  101 => 41,  98 => 40,  94 => 39,  68 => 15,  62 => 14,  55 => 1,  44 => 8,  42 => 7,  38 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
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
<!-- 
\tcontent of this area will be the content of your PDF file 
\t-->
\t<div id=\"HTMLtoPDF\">



\t<p>










<div class=\"container\">
    <div class=\"row\">
        
        
        <div class=\"span12\">
            
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            
            <h2>Valider mon panier - Facture</h2>
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
            
            <dl class=\"dl-horizontal \">
                     <dt>Total HT :</dt><dd>{{ totalHT }} euro(s)</dd>
                
                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }}  euro(s)</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }}  euro(s)</dd>
                </dl>
<br /><br />
                <h4>Adresse de facturation</h4></dt>
                      {% for f in facturation %}
                    <dt>{{f.prenom }} {{f.nom }}</dt>
                    <dt>{{f.Adresse }}</dt>
                    <dt>{{f.CodePostal }} {{f.Ville }}({{f.Pays }}) - ({{ f.Tel }} )</dt>
                    {% endfor %}
<br />
                 <h4>Adresse de livraison</h4></dt>
                      {% for l in livraison %}
                    <dt>{{ l.prenom }} {{ l.nom }}</dt>
                    <dt>{{ l.Adresse }}</dt>
                    <dt>{{ l.CodePostal }} {{ l.Ville }}({{ l.Pays }}) - ({{ l.Tel }} )</dt>
                    {% endfor %}
            
\t<!-- here we call the function that makes PDF -->
\t<a href=\"#\" class=\"dl-horizontal pull-rigth\" onclick=\"HTMLtoPDF()\">Download PDF</a>


            
            
            
            <div class=\"clearfix\"></div>
    </div>
</div>
</p>

\t</div>



    
{% endblock %}
", "EcommerceEcommerceBundle:Default:Panier/layout/facturePDF.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/facturePDF.html.twig");
    }
}
