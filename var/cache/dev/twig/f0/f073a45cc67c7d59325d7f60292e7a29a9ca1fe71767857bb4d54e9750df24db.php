<?php

/* EcommerceEcommerceBundle:Default/Panier/layout:panier.html.twig */
class __TwigTemplate_1a0bf24f15165d6e0cf0614d94fc8704065f2c98cf6f6285ffe37c0341b5832e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default/Panier/layout:panier.html.twig", 2);
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
        $__internal_89d56159bc9498a587f3fa46797fed560f90dacc9f3cd7cf81818fd2aaf4ee81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d56159bc9498a587f3fa46797fed560f90dacc9f3cd7cf81818fd2aaf4ee81->enter($__internal_89d56159bc9498a587f3fa46797fed560f90dacc9f3cd7cf81818fd2aaf4ee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default/Panier/layout:panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d56159bc9498a587f3fa46797fed560f90dacc9f3cd7cf81818fd2aaf4ee81->leave($__internal_89d56159bc9498a587f3fa46797fed560f90dacc9f3cd7cf81818fd2aaf4ee81_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e6eb3c7708a19b0f90b3624530b2a55586f13531355fe4b05d2ae332eef315f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6eb3c7708a19b0f90b3624530b2a55586f13531355fe4b05d2ae332eef315f->enter($__internal_0e6eb3c7708a19b0f90b3624530b2a55586f13531355fe4b05d2ae332eef315f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        <div class=\"span3\">
             ";
        // line 7
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default/Panier/layout:panier.html.twig", 7)->display($context);
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            echo "                         <tr>
                    
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>
<form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                         
                                 <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
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
            // line 36
            echo "                                </select>&nbsp;
                                
                        
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                          
                                </td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                               </form>
                               </tr>
       
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>
                    
                    <dt>TVA :</dt>
                    <dd>200€</dd>
    
                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>";
        
        $__internal_0e6eb3c7708a19b0f90b3624530b2a55586f13531355fe4b05d2ae332eef315f->leave($__internal_0e6eb3c7708a19b0f90b3624530b2a55586f13531355fe4b05d2ae332eef315f_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default/Panier/layout:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 74,  130 => 49,  119 => 44,  115 => 43,  109 => 40,  103 => 36,  88 => 34,  84 => 33,  78 => 30,  73 => 28,  69 => 26,  65 => 25,  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
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
                         {% for produit in produits %}
                         <tr>
                    
                        <td>{{produit.nom}}</td>
                        <td>
<form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                         
                                 <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    {% for i in 1..10 %}
                                        <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                    {% endfor %}
                                </select>&nbsp;
                                
                        
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"{{ path('supprimer', { 'id' : produit.id }) }}\"><i class=\"icon-trash\"></i></a>
                          
                                </td>
                                <td>{{ produit.prix }} €</td>
                                <td>{{ produit.prix * panier[produit.id] }} €</td>
                               </form>
                               </tr>
       
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
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>
                    
                    <dt>TVA :</dt>
                    <dd>200€</dd>
    
                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"{{ path ('validation') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>{% endblock %}", "EcommerceEcommerceBundle:Default/Panier/layout:panier.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/panier.html.twig");
    }
}
