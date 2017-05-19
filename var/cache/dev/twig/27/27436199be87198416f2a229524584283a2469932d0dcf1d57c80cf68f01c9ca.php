<?php

/* EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_d57fff5ed26e9e70eb351a5ea247413804ae7522d7cc8119e607f52dbaba73c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", 2);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f24a3146aa13564fa85738a130098057ba4653bb3d17e43b904288f49dd0a9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24a3146aa13564fa85738a130098057ba4653bb3d17e43b904288f49dd0a9b0->enter($__internal_f24a3146aa13564fa85738a130098057ba4653bb3d17e43b904288f49dd0a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f24a3146aa13564fa85738a130098057ba4653bb3d17e43b904288f49dd0a9b0->leave($__internal_f24a3146aa13564fa85738a130098057ba4653bb3d17e43b904288f49dd0a9b0_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = array())
    {
        $__internal_19268e70a35ea8e36dca25e61641a35ac8bae60eceebbde8ed916e65abd26a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19268e70a35ea8e36dca25e61641a35ac8bae60eceebbde8ed916e65abd26a0d->enter($__internal_19268e70a35ea8e36dca25e61641a35ac8bae60eceebbde8ed916e65abd26a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "  ";
        
        $__internal_19268e70a35ea8e36dca25e61641a35ac8bae60eceebbde8ed916e65abd26a0d->leave($__internal_19268e70a35ea8e36dca25e61641a35ac8bae60eceebbde8ed916e65abd26a0d_prof);

    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        $__internal_6c71d77cfeef16a35411df5b3195e97421950f664c3c639e246c2fcd461b1e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c71d77cfeef16a35411df5b3195e97421950f664c3c639e246c2fcd461b1e06->enter($__internal_6c71d77cfeef16a35411df5b3195e97421950f664c3c639e246c2fcd461b1e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo " ";
        
        $__internal_6c71d77cfeef16a35411df5b3195e97421950f664c3c639e246c2fcd461b1e06->leave($__internal_6c71d77cfeef16a35411df5b3195e97421950f664c3c639e246c2fcd461b1e06_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d7ce53a9dd9567d15ae78818a4daada74af8121ebf6e58287d316f6c7756d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7ce53a9dd9567d15ae78818a4daada74af8121ebf6e58287d316f6c7756d5a->enter($__internal_3d7ce53a9dd9567d15ae78818a4daada74af8121ebf6e58287d316f6c7756d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
           \t\t\t\t
        <div class=\"span3\"> 
            ";
        // line 20
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", 20)->display($context);
        echo " 
            ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", 22)->display($context);
            echo "  
            ";
        } else {
            // line 24
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", 24)->display($context);
            echo " 
            ";
        }
        // line 25
        echo " 
            
</div>
\t\t\t <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 32
            echo "                            ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()) == $this->getAttribute($context["m"], "id", array()))) {
                // line 33
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "path", array()), "html", null, true);
                echo "\" alt=\"ProWebSite\" width=\"470\" height=\"310\">                    
                            ";
            }
            // line 35
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        
                         ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 42
            echo "                            ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()) == $this->getAttribute($context["c"], "id", array()))) {
                // line 43
                echo "                                 <h5>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
                echo "</h5>    
                            ";
            }
            // line 45
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

                        <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                         ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tva"]) ? $context["Tva"] : $this->getContext($context, "Tva")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 50
            echo "                            ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()) == $this->getAttribute($context["t"], "id", array()))) {
                // line 51
                echo "                                   <h4>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($context["t"], "multiplicate", array())), "html", null, true);
                echo " €</h4>
                            ";
            }
            // line 53
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                       
                       ";
        // line 55
        $context["p"] = 1;
        echo "   
                        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPlus", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
                            <select name=\"qte\" class=\"span1\" >
                       
                                 ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            echo "                        
                            Quanité(s) : <option id=\"fuck\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>                                   
                     

 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </select>
                           
                            <div>
  <input class=\"btn btn-primary\" type =\"submit\" value =\"Ajouter au panier\">
 </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_3d7ce53a9dd9567d15ae78818a4daada74af8121ebf6e58287d316f6c7756d5a->leave($__internal_3d7ce53a9dd9567d15ae78818a4daada74af8121ebf6e58287d316f6c7756d5a_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 66,  197 => 61,  194 => 60,  190 => 59,  184 => 56,  180 => 55,  177 => 54,  171 => 53,  165 => 51,  162 => 50,  158 => 49,  154 => 48,  150 => 46,  144 => 45,  138 => 43,  135 => 42,  131 => 41,  126 => 39,  121 => 36,  115 => 35,  109 => 33,  106 => 32,  102 => 31,  94 => 25,  88 => 24,  82 => 22,  80 => 21,  76 => 20,  69 => 15,  63 => 14,  50 => 10,  36 => 8,  11 => 2,);
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





 {% block titre %}  {{ produit.nom }}  {% endblock %}

{% block description %}{{ produit.description }} {% endblock %}



{% block body %}

\t<div class=\"container\">
\t\t<div class=\"row\">
           \t\t\t\t
        <div class=\"span3\"> 
            {% include '::ModelUsed/navigation.html.twig' %} 
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
               {% include '::ModelUsed/utilisateurConnecter.html.twig' %}  
            {% else %}
               {% include '::ModelUsed/utilisateur.html.twig' %} 
            {% endif %} 
            
</div>
\t\t\t <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        {% for m in medias %}
                            {% if produit.image == m.id %}
                                <img src=\"{{ m.path}}\" alt=\"ProWebSite\" width=\"470\" height=\"310\">                    
                            {% endif %}
                          {% endfor %}
                    </div>

                    <div class=\"span4\">
                        <h4>{{ produit.nom }}</h4>
                        
                         {% for c in categories %}
                            {% if produit.categorie == c.id %}
                                 <h5>{{ c.nom }}</h5>    
                            {% endif %}
                          {% endfor %}


                        <p>{{ produit.description }}</p>
                         {% for t in Tva %}
                            {% if produit.tva == t.id %}
                                   <h4>{{ produit.prix|tva(t.multiplicate) }} €</h4>
                            {% endif %}
                          {% endfor %}
                       
                       {% set p = 1 %}   
                        <form action=\"{{ path('ajouterPlus', { 'id' : produit.id } ) }}\" method=\"get\">
                            <select name=\"qte\" class=\"span1\" >
                       
                                 {% for i in 1..10 %}
                        
                            Quanité(s) : <option id=\"fuck\" value=\"{{ i }}\">{{ i }}</option>                                   
                     

 
                                {% endfor %}
                            </select>
                           
                            <div>
  <input class=\"btn btn-primary\" type =\"submit\" value =\"Ajouter au panier\">
 </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/presentation.html.twig");
    }
}
