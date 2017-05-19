<?php

/* @EcommerceEcommerce/Default/Produits/layout/presentation.html.twig */
class __TwigTemplate_b5344105962e2a363a63a6d6743bbbaa7d5a6ed12c68ed5862ef586f3f41320a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@EcommerceEcommerce/Default/Produits/layout/presentation.html.twig", 2);
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
        $__internal_2c609cc985ff4af791be31d5add909be6d35f0d1032183a4fb5bd2487de3c47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c609cc985ff4af791be31d5add909be6d35f0d1032183a4fb5bd2487de3c47e->enter($__internal_2c609cc985ff4af791be31d5add909be6d35f0d1032183a4fb5bd2487de3c47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/Default/Produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c609cc985ff4af791be31d5add909be6d35f0d1032183a4fb5bd2487de3c47e->leave($__internal_2c609cc985ff4af791be31d5add909be6d35f0d1032183a4fb5bd2487de3c47e_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = array())
    {
        $__internal_7c1aa222e660ffbd183a4cffdd5ef9b46eeef64a1789e2ede33171f24bb6cddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1aa222e660ffbd183a4cffdd5ef9b46eeef64a1789e2ede33171f24bb6cddf->enter($__internal_7c1aa222e660ffbd183a4cffdd5ef9b46eeef64a1789e2ede33171f24bb6cddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "  ";
        
        $__internal_7c1aa222e660ffbd183a4cffdd5ef9b46eeef64a1789e2ede33171f24bb6cddf->leave($__internal_7c1aa222e660ffbd183a4cffdd5ef9b46eeef64a1789e2ede33171f24bb6cddf_prof);

    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        $__internal_ce1eeb019b75b8ba3a88f7cd449f86fbee6ec608e76eca453c96e9588157cfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1eeb019b75b8ba3a88f7cd449f86fbee6ec608e76eca453c96e9588157cfee->enter($__internal_ce1eeb019b75b8ba3a88f7cd449f86fbee6ec608e76eca453c96e9588157cfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo " ";
        
        $__internal_ce1eeb019b75b8ba3a88f7cd449f86fbee6ec608e76eca453c96e9588157cfee->leave($__internal_ce1eeb019b75b8ba3a88f7cd449f86fbee6ec608e76eca453c96e9588157cfee_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_74daa886f1d4136bc22672f542f32bb6a0d4687e0ea963ce0bf6b611c1dbac2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74daa886f1d4136bc22672f542f32bb6a0d4687e0ea963ce0bf6b611c1dbac2a->enter($__internal_74daa886f1d4136bc22672f542f32bb6a0d4687e0ea963ce0bf6b611c1dbac2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
        <div class=\"span3\">
             ";
        // line 17
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "@EcommerceEcommerce/Default/Produits/layout/presentation.html.twig", 17)->display($context);
        echo " 
\t\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
           \t\t\t
\t\t\t <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medias"] ?? $this->getContext($context, "medias")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            echo "                            ";
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", array()) == $this->getAttribute($context["m"], "id", array()))) {
                // line 27
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "path", array()), "html", null, true);
                echo "\" alt=\"ProWebSite\" width=\"470\" height=\"310\">                    
                            ";
            }
            // line 29
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        
                         ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 36
            echo "                            ";
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "categorie", array()) == $this->getAttribute($context["c"], "id", array()))) {
                // line 37
                echo "                                 <h5>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
                echo "</h5>    
                            ";
            }
            // line 39
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "

                        <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                         ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Tva"] ?? $this->getContext($context, "Tva")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 44
            echo "                            ";
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "tva", array()) == $this->getAttribute($context["t"], "id", array()))) {
                // line 45
                echo "                                   <h4>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TVAExtension')->calculTva($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($context["t"], "multiplicate", array())), "html", null, true);
                echo " €</h4>
                            ";
            }
            // line 47
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                       
                       ";
        // line 49
        $context["p"] = 1;
        echo "   
                        <form action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPlus", array("id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
                            <select name=\"qte\" class=\"span1\" >
                       
                                 ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "                        
                            Quanité(s) : <option id=\"fuck\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>                                   
                     

 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        
        $__internal_74daa886f1d4136bc22672f542f32bb6a0d4687e0ea963ce0bf6b611c1dbac2a->leave($__internal_74daa886f1d4136bc22672f542f32bb6a0d4687e0ea963ce0bf6b611c1dbac2a_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/Default/Produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  179 => 55,  176 => 54,  172 => 53,  166 => 50,  162 => 49,  159 => 48,  153 => 47,  147 => 45,  144 => 44,  140 => 43,  136 => 42,  132 => 40,  126 => 39,  120 => 37,  117 => 36,  113 => 35,  108 => 33,  103 => 30,  97 => 29,  91 => 27,  88 => 26,  84 => 25,  73 => 17,  69 => 15,  63 => 14,  50 => 10,  36 => 8,  11 => 2,);
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

        <div class=\"span3\">
             {% include '::ModelUsed/navigation.html.twig' %} 
\t\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
           \t\t\t
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
{% endblock %}", "@EcommerceEcommerce/Default/Produits/layout/presentation.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\Default\\Produits\\layout\\presentation.html.twig");
    }
}
