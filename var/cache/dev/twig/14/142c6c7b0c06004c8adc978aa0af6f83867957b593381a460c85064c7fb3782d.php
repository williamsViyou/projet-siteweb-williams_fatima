<?php

/* EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig */
class __TwigTemplate_2d60ecfe30802e159853f44d568b57810c1b680f3142f2ea10c5379b749c3c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig", 2);
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
        $__internal_e0201e2df371f2786756881a457f7bb9ab50bfee814e02f536de24bba3e7f70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0201e2df371f2786756881a457f7bb9ab50bfee814e02f536de24bba3e7f70c->enter($__internal_e0201e2df371f2786756881a457f7bb9ab50bfee814e02f536de24bba3e7f70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0201e2df371f2786756881a457f7bb9ab50bfee814e02f536de24bba3e7f70c->leave($__internal_e0201e2df371f2786756881a457f7bb9ab50bfee814e02f536de24bba3e7f70c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab2750eb8c32f069b5a747c1b1c5f0e20ebc98f8863529b20b419dd59f3ec923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2750eb8c32f069b5a747c1b1c5f0e20ebc98f8863529b20b419dd59f3ec923->enter($__internal_ab2750eb8c32f069b5a747c1b1c5f0e20ebc98f8863529b20b419dd59f3ec923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        
\t<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\">
                            <h4>Adresse de livraison</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            
                            <br /><br />
                            
                            <h4>Adresse de facturation</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                        </form>
                    </div>

<div class=\"span4\">
                        ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr"))) != 0)) {
            // line 49
            echo "                        <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" method=\"POST\">
                            
                            <h4>Adresse de livraison</h4>
                            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr")));
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 53
                echo "                            <label class=\"radio\">
                                <input type=\"checkbox\" id=\"optionsRadios1 name=\"livraison\" value=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["adresse"], "livraison", array()) == 1)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "CodePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Ville", array()), "html", null, true);
                echo " <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "  <br />";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Tel", array()), "html", null, true);
                echo "
                            </label>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                            
                       

                            <br /><br />

                         
                            <h4>Adresse de facturation</h4>
                            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr")));
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 67
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" id=\"optionsRadios1 name=\"facturation\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["adresse"], "facturation", array()) == 1)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "CodePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Ville", array()), "html", null, true);
                echo " <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "  <br />";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Tel", array()), "html", null, true);
                echo "
                            </label>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                            <br />
                          <button class=\"btn btn-primary\">Valider mes adresses</button>    
                        </form>
                        ";
        }
        // line 77
        echo "
     </div>




\t\t\t\t\t\t\t\t<div class=\"span4 offset2\">
\t\t\t\t\t\t\t\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t                   <td> 
                                <form action=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAdresse");
        echo "\" method=\"post\">
                                \t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"nom\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"prenom\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"addresse\">
\t\t\t\t\t\t\t\t\t\t
                                        <label>Complement</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"complement\">\t

\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"ville\">\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t<label>Pays</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"pays\">\t

                                        <label>Code postal</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"cp\">
                                                                                
\t\t\t\t\t\t\t\t\t\t<label>Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"tel\">                                        
                                        
                                        <br />
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
        \t\t</div>
\t</div>

                    ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr")));
        echo ";
";
        
        $__internal_ab2750eb8c32f069b5a747c1b1c5f0e20ebc98f8863529b20b419dd59f3ec923->leave($__internal_ab2750eb8c32f069b5a747c1b1c5f0e20ebc98f8863529b20b419dd59f3ec923_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 120,  195 => 86,  184 => 77,  178 => 73,  165 => 70,  157 => 69,  149 => 68,  146 => 67,  142 => 66,  133 => 59,  120 => 56,  112 => 55,  104 => 54,  101 => 53,  97 => 52,  90 => 49,  88 => 48,  50 => 13,  40 => 5,  34 => 4,  11 => 2,);
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
        
\t<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <form action=\"{{ path ('validation') }}\">
                            <h4>Adresse de livraison</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            
                            <br /><br />
                            
                            <h4>Adresse de facturation</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                        </form>
                    </div>

<div class=\"span4\">
                        {% if adr|length != 0 %}
                        <form action=\"{{ path('validation') }}\" method=\"POST\">
                            
                            <h4>Adresse de livraison</h4>
                            {% for adresse in adr %}
                            <label class=\"radio\">
                                <input type=\"checkbox\" id=\"optionsRadios1 name=\"livraison\" value=\"{{ adresse.id }}\" {% if adresse.livraison == 1 %}checked=\"checked\"{% endif %}>
                                {{ adresse.Adresse }}, {{ adresse.CodePostal }} {{ adresse.Ville }} <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                <br />{{ adresse.prenom }} {{ adresse.nom }}  <br />{{ adresse.Tel}}
                            </label>
                            {% endfor %}
                            
                       

                            <br /><br />

                         
                            <h4>Adresse de facturation</h4>
                            {% for adresse in adr %}
                            <label class=\"radio\">
                                <input type=\"radio\" id=\"optionsRadios1 name=\"facturation\" value=\"{{ adresse.id }}\" {% if adresse.facturation == 1 %}checked=\"checked\"{% endif %}>
                                {{ adresse.Adresse }}, {{ adresse.CodePostal }} {{ adresse.Ville }} <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                <br />{{ adresse.prenom }} {{ adresse.nom }}  <br />{{ adresse.Tel}}
                            </label>
                            {% endfor %}
                            <br />
                          <button class=\"btn btn-primary\">Valider mes adresses</button>    
                        </form>
                        {% endif %}

     </div>




\t\t\t\t\t\t\t\t<div class=\"span4 offset2\">
\t\t\t\t\t\t\t\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t                   <td> 
                                <form action=\"{{ path('addAdresse') }}\" method=\"post\">
                                \t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"nom\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"prenom\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"addresse\">
\t\t\t\t\t\t\t\t\t\t
                                        <label>Complement</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"complement\">\t

\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"ville\">\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t<label>Pays</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"pays\">\t

                                        <label>Code postal</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"cp\">
                                                                                
\t\t\t\t\t\t\t\t\t\t<label>Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name = \"tel\">                                        
                                        
                                        <br />
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
        \t\t</div>
\t</div>

                    {{ dump(adr)}};
{% endblock %}", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/livraison.html.twig");
    }
}
