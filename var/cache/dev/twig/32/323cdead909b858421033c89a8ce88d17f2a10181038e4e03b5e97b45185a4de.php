<?php

/* EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig */
class __TwigTemplate_7d46607e1d754afcf20e9b2f595fce3a653c47af7446c6940fba3383810ca459 extends Twig_Template
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
        $__internal_ab6597d8be50f3f3a31984edd81b349ccfa146bb29a557e9b5a1cb4bb53e41da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6597d8be50f3f3a31984edd81b349ccfa146bb29a557e9b5a1cb4bb53e41da->enter($__internal_ab6597d8be50f3f3a31984edd81b349ccfa146bb29a557e9b5a1cb4bb53e41da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6597d8be50f3f3a31984edd81b349ccfa146bb29a557e9b5a1cb4bb53e41da->leave($__internal_ab6597d8be50f3f3a31984edd81b349ccfa146bb29a557e9b5a1cb4bb53e41da_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bccc9d47edfe06987b33f9c9b570f7981ed38da355baf8b78dd4a277cd86ef3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccc9d47edfe06987b33f9c9b570f7981ed38da355baf8b78dd4a277cd86ef3e->enter($__internal_bccc9d47edfe06987b33f9c9b570f7981ed38da355baf8b78dd4a277cd86ef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"row\">
        
          
         <div class=\"span3\"> 
            ";
        // line 10
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig", 10)->display($context);
        echo " 
            ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig", 12)->display($context);
            echo "  
            ";
        } else {
            // line 14
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig", 14)->display($context);
            echo " 
            ";
        }
        // line 15
        echo " 
            
</div>
        <div class=\"span9\">
            
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
            
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                <div class=\"alert alert-errors\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            
            <h1>Valider mon panier</h1>
            
            <h1>En cours de livraison</h1>
            
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Date de commande</th>
                        <th>Prix unitaire</th>
                        <th>Supprimer</th>
                        <th>Details</th>
                        <th>Etat commande</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 51
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 52
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                        ";
        } else {
            // line 56
            echo "                  
                    
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
            foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                // line 59
                echo "                    <tr>
                        <form >
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "idFacture", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "Date", array()), "html", null, true);
                echo "
                            </td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "PrixFacture", array()), "html", null, true);
                echo " €</td>
                            <td>  <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["facture"], "idFacture", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a> </td>
                            <td>  <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("DFacture", array("id" => $this->getAttribute($context["facture"], "idFacture", array()))), "html", null, true);
                echo "\"><i class=\"icon-book\"></i></a> </td>
                                ";
                // line 68
                if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                    // line 69
                    echo "                             
                                 <td>
                                             <a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("expediction", array("id" => $this->getAttribute($context["facture"], "idFacture", array()), "iduser" => $this->getAttribute($context["facture"], "idUser", array()))), "html", null, true);
                    echo "\">     Expédiction    <i class=\"icon-ok-sign\"></i></a>   <br />    <br />       
                                          <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraisonfin", array("id" => $this->getAttribute($context["facture"], "idFacture", array()), "iduser" => $this->getAttribute($context["facture"], "idUser", array()))), "html", null, true);
                    echo "\"> Livraison <i class=\"icon-plane\"></i></a>   
                                 
                                 </td>
                                ";
                } else {
                    // line 76
                    echo "                                 <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "Livré", array()), "html", null, true);
                    echo "</td>
                                
                                                    
                                ";
                }
                // line 79
                echo " 
                                
                        </form>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                      ";
        }
        // line 85
        echo "                </tbody>
            </table>
           










                                        <br />
                                        <br />
                                        <br />
\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acc");
        echo "\"  class=\"btn btn-primary\" target =\"_blank\">Acceuil</a>
                                        <br />
                                        <br />
                                        <br />
    </div>
</div>
";
        
        $__internal_bccc9d47edfe06987b33f9c9b570f7981ed38da355baf8b78dd4a277cd86ef3e->leave($__internal_bccc9d47edfe06987b33f9c9b570f7981ed38da355baf8b78dd4a277cd86ef3e_prof);

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
        return array (  227 => 101,  209 => 85,  206 => 84,  196 => 79,  188 => 76,  181 => 72,  177 => 71,  173 => 69,  171 => 68,  167 => 67,  163 => 66,  159 => 65,  154 => 63,  149 => 61,  145 => 59,  141 => 58,  137 => 56,  131 => 52,  129 => 51,  110 => 34,  99 => 29,  96 => 28,  92 => 27,  88 => 25,  79 => 22,  76 => 21,  72 => 20,  65 => 15,  59 => 14,  53 => 12,  51 => 11,  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
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

            
            {% for flashMessage in app.session.flashbag.get('error') %}
                <div class=\"alert alert-errors\">
                    {{ flashMessage }}
                </div>
            
            
            {% endfor %}
            
            <h1>Valider mon panier</h1>
            
            <h1>En cours de livraison</h1>
            
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Date de commande</th>
                        <th>Prix unitaire</th>
                        <th>Supprimer</th>
                        <th>Details</th>
                        <th>Etat commande</th>
                    </tr>
                </thead>
                <tbody>
                    {% if factures|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                        {% else %}
                  
                    
                    {% for facture in factures %}
                    <tr>
                        <form >
                            <td>{{facture.idFacture}}</td>
                            <td>
                                {{facture.Date }}
                            </td>
                            <td>{{facture.PrixFacture }} €</td>
                            <td>  <a href=\"{{ path('supprimer', { 'id' : facture.idFacture }) }}\"><i class=\"icon-trash\"></i></a> </td>
                            <td>  <a href=\"{{ path('DFacture', { 'id' : facture.idFacture }) }}\"><i class=\"icon-book\"></i></a> </td>
                                {% if app.user is not null and is_granted('ROLE_ADMIN') %}
                             
                                 <td>
                                             <a href=\"{{ path('expediction', { 'id' : facture.idFacture , 'iduser' : facture.idUser }) }}\">     Expédiction    <i class=\"icon-ok-sign\"></i></a>   <br />    <br />       
                                          <a href=\"{{ path('livraisonfin',  { 'id' : facture.idFacture , 'iduser' : facture.idUser }) }}\"> Livraison <i class=\"icon-plane\"></i></a>   
                                 
                                 </td>
                                {% else %}
                                 <td>{{facture.Livré }}</td>
                                
                                                    
                                {% endif %} 
                                
                        </form>
                    </tr>
                    {% endfor %}
                      {% endif %}
                </tbody>
            </table>
           










                                        <br />
                                        <br />
                                        <br />
\t\t\t\t\t\t\t\t\t\t<a  href=\"{{ path('acc') }}\"  class=\"btn btn-primary\" target =\"_blank\">Acceuil</a>
                                        <br />
                                        <br />
                                        <br />
    </div>
</div>
{% endblock %}", "EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/facture.html.twig");
    }
}
