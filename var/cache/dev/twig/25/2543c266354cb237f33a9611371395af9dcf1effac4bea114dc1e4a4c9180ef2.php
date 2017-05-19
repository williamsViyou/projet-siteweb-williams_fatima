<?php

/* EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig */
class __TwigTemplate_64f9bddb6eaa5a76bc50e279cf2cf74c069207a150a032ce9c70e8764fbc4615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig", 3);
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
        $__internal_367e6c9490b0f69061f7974d6a34a44602c916a70a43ffa777a6551087a38738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367e6c9490b0f69061f7974d6a34a44602c916a70a43ffa777a6551087a38738->enter($__internal_367e6c9490b0f69061f7974d6a34a44602c916a70a43ffa777a6551087a38738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367e6c9490b0f69061f7974d6a34a44602c916a70a43ffa777a6551087a38738->leave($__internal_367e6c9490b0f69061f7974d6a34a44602c916a70a43ffa777a6551087a38738_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e51e2627174b1797d42bc9bc77b09d67446ae705f3061fedbe91f0ebbc1e9eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51e2627174b1797d42bc9bc77b09d67446ae705f3061fedbe91f0ebbc1e9eae->enter($__internal_e51e2627174b1797d42bc9bc77b09d67446ae705f3061fedbe91f0ebbc1e9eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


<div class=\"container\">
    <div class=\"row\">\t
        <div class=\"span3\"> ";
        // line 10
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig", 10)->display($context);
        echo " </div>
                  
             ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 13
            echo "               <div class=\"span3\"> ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig", 13)->display($context);
            echo "  </div>
            ";
        } else {
            // line 15
            echo "               <div class=\"span3\"> ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig", 15)->display($context);
            echo " </div>
            ";
        }
        // line 16
        echo " 
            

        <div class=\"span9\">

            <ul class=\"thumbnails\">
          ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 23
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 24
                echo "                  <li class=\"span3\">
                    <div class=\"thumbnail\">
                       
           

                          ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")));
                foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                    // line 30
                    echo "                            ";
                    if (($this->getAttribute($context["produit"], "image", array()) == $this->getAttribute($context["m"], "id", array()))) {
                        // line 31
                        echo "                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "path", array()), "html", null, true);
                        echo "\" alt=\"WebSItePro\" width=\"300\" height=\"250\">                        
                            ";
                    }
                    // line 33
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                        <div class=\"caption\">
                            <h4>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                             ";
                // line 36
                $context["var"] = twig_split_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "");
                // line 37
                echo "                           
                        <p>";
                // line 38
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($context["produit"], "description", array())) == 50), "html", null, true);
                echo "</p>
                         ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Tva"]) ? $context["Tva"] : $this->getContext($context, "Tva")));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 40
                    echo "                            ";
                    if (($this->getAttribute($context["produit"], "tva", array()) == $this->getAttribute($context["t"], "id", array()))) {
                        // line 41
                        echo "                                   <h4>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($context["t"], "multiplicate", array())), "html", null, true);
                        echo " €</h4>
                            ";
                    }
                    // line 43
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "
                            <a class=\"btn btn-primary\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
            
            
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                
            </ul>

          

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

            ";
        } else {
            // line 71
            echo "             <li class=\"span3\">
                    
                        
            Désolé, ce produit n'existe plus dans nos stocks.
                     
            </li> 
            ";
        }
        // line 78
        echo "        </div>
    </div>
</div>
";
        
        $__internal_e51e2627174b1797d42bc9bc77b09d67446ae705f3061fedbe91f0ebbc1e9eae->leave($__internal_e51e2627174b1797d42bc9bc77b09d67446ae705f3061fedbe91f0ebbc1e9eae_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 78,  182 => 71,  162 => 53,  149 => 46,  145 => 45,  142 => 44,  136 => 43,  130 => 41,  127 => 40,  123 => 39,  119 => 38,  116 => 37,  114 => 36,  110 => 35,  107 => 34,  101 => 33,  95 => 31,  92 => 30,  88 => 29,  81 => 24,  76 => 23,  74 => 22,  66 => 16,  60 => 15,  54 => 13,  52 => 12,  47 => 10,  40 => 5,  34 => 4,  11 => 3,);
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

{% extends \"::layout/layout.html.twig\" %}
{% block body %}



<div class=\"container\">
    <div class=\"row\">\t
        <div class=\"span3\"> {% include '::ModelUsed/navigation.html.twig' %} </div>
                  
             {% if is_granted('IS_AUTHENTICATED_FULLY') %}
               <div class=\"span3\"> {% include '::ModelUsed/utilisateurConnecter.html.twig' %}  </div>
            {% else %}
               <div class=\"span3\"> {% include '::ModelUsed/utilisateur.html.twig' %} </div>
            {% endif %} 
            

        <div class=\"span9\">

            <ul class=\"thumbnails\">
          {% if produits|length != 0 %}
               {% for produit in produits %}
                  <li class=\"span3\">
                    <div class=\"thumbnail\">
                       
           

                          {% for m in medias %}
                            {% if produit.image == m.id %}
                                <img src=\"{{ m.path }}\" alt=\"WebSItePro\" width=\"300\" height=\"250\">                        
                            {% endif %}
                          {% endfor %}
                        <div class=\"caption\">
                            <h4>{{ produit.nom }}</h4>
                             {% set var = produit.description|split('')%}
                           
                        <p>{{ produit.description|length == 50 }}</p>
                         {% for t in Tva %}
                            {% if produit.tva == t.id %}
                                   <h4>{{ produit.prix|tva(t.multiplicate) }} €</h4>
                            {% endif %}
                          {% endfor %}

                            <a class=\"btn btn-primary\" href=\"{{ path('presentation', { 'id' : produit.id }) }}\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"{{ path('ajouter', { 'id' : produit.id }) }}\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
            
            
                {% endfor %}
                
            </ul>

          

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

            {% else %}
             <li class=\"span3\">
                    
                        
            Désolé, ce produit n'existe plus dans nos stocks.
                     
            </li> 
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produits/layout/produit.html.twig");
    }
}
