<?php

/* EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig */
class __TwigTemplate_87882b6c97f9ef26d61cacf0938b4f87ad4dcc5b219513a268e623d613fc53de extends Twig_Template
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
        $__internal_43676edf49432f024f3d40aecae1df51bd15379d7d6cedfff2584abbc836805e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43676edf49432f024f3d40aecae1df51bd15379d7d6cedfff2584abbc836805e->enter($__internal_43676edf49432f024f3d40aecae1df51bd15379d7d6cedfff2584abbc836805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43676edf49432f024f3d40aecae1df51bd15379d7d6cedfff2584abbc836805e->leave($__internal_43676edf49432f024f3d40aecae1df51bd15379d7d6cedfff2584abbc836805e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b34197d306ae4b29c1816b7f9957dd9dd0f0fc9f0cb576523798b08580e02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b34197d306ae4b29c1816b7f9957dd9dd0f0fc9f0cb576523798b08580e02b->enter($__internal_99b34197d306ae4b29c1816b7f9957dd9dd0f0fc9f0cb576523798b08580e02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        
\t<div class=\"container\">
    <div class=\"row\">
     <div class=\"span3\"> 
            ";
        // line 9
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig", 9)->display($context);
        echo " 
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig", 11)->display($context);
            echo "  
            ";
        } else {
            // line 13
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig", 13)->display($context);
            echo " 
            ";
        }
        // line 14
        echo " 
            
</div>
        <div class=\"span7\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
<div class=\"span5\">
                        ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr"))) != 0)) {
            // line 24
            echo "                        <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" method=\"POST\">
                            
                            <h4>Adresse de livraison</h4>
                            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr")));
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 28
                echo "                            <label class=\"radio\">
                                <input type=\"checkbox\" id=\"optionsRadios1 name=\"livraison\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["adresse"], "livraison", array()) == 1)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "CodePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maj_addr_livrai", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-refresh\"></i></a> 
                                <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sup_addr_livrai", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 32
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
            // line 35
            echo "                            
                       

                            <br /><br />

                         
                            <h4>Adresse de facturation</h4>
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr")));
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 43
                echo "                            <label class=\"radio\">
                                <input type=\"checkbox\" id=\"optionsRadios1 name=\"facturation\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["adresse"], "facturation", array()) == 1)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "CodePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "Ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maj_addr_factu", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-refresh\"></i></a> 
                                <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sup_addr_livrai", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 47
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
            // line 50
            echo "                            <br />
                            <a href=\"#\"><i class=\"glyphicon glyphicon-floppy-disk\"></i></a>
                          <button class=\"btn btn-primary\">Valider mes adresses</button>    
                        </form>
                        ";
        }
        // line 55
        echo "
     </div>


\t\t\t\t\t\t\t\t<div class=\"span4 offset2\">
\t\t\t\t\t\t\t\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t                   <td> 
                                <form action=\"";
        // line 62
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
        
        $__internal_99b34197d306ae4b29c1816b7f9957dd9dd0f0fc9f0cb576523798b08580e02b->leave($__internal_99b34197d306ae4b29c1816b7f9957dd9dd0f0fc9f0cb576523798b08580e02b_prof);

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
        return array (  193 => 62,  184 => 55,  177 => 50,  164 => 47,  160 => 46,  150 => 45,  142 => 44,  139 => 43,  135 => 42,  126 => 35,  113 => 32,  109 => 31,  99 => 30,  91 => 29,  88 => 28,  84 => 27,  77 => 24,  75 => 23,  64 => 14,  58 => 13,  52 => 11,  50 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
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
     <div class=\"span3\"> 
            {% include '::ModelUsed/navigation.html.twig' %} 
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
               {% include '::ModelUsed/utilisateurConnecter.html.twig' %}  
            {% else %}
               {% include '::ModelUsed/utilisateur.html.twig' %} 
            {% endif %} 
            
</div>
        <div class=\"span7\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
<div class=\"span5\">
                        {% if adr|length != 0 %}
                        <form action=\"{{ path('validation') }}\" method=\"POST\">
                            
                            <h4>Adresse de livraison</h4>
                            {% for adresse in adr %}
                            <label class=\"radio\">
                                <input type=\"checkbox\" id=\"optionsRadios1 name=\"livraison\" value=\"{{ adresse.id }}\" {% if adresse.livraison == 1 %}checked=\"checked\"{% endif %}>
                                {{ adresse.Adresse }}, {{ adresse.CodePostal }} {{ adresse.Ville }} <a href=\"{{ path('maj_addr_livrai', { 'id' : adresse.id}) }}\"><i class=\"icon-refresh\"></i></a> 
                                <a href=\"{{ path('sup_addr_livrai', { 'id' : adresse.id}) }}\"><i class=\"icon-trash\"></i></a>
                                <br />{{ adresse.prenom }} {{ adresse.nom }}  <br />{{ adresse.Tel}}
                            </label>
                            {% endfor %}
                            
                       

                            <br /><br />

                         
                            <h4>Adresse de facturation</h4>
                            {% for adresse in adr %}
                            <label class=\"radio\">
                                <input type=\"checkbox\" id=\"optionsRadios1 name=\"facturation\" value=\"{{ adresse.id }}\" {% if adresse.facturation == 1 %}checked=\"checked\"{% endif %}>
                                {{ adresse.Adresse }}, {{ adresse.CodePostal }} {{ adresse.Ville }} <a href=\"{{ path('maj_addr_factu', { 'id' : adresse.id}) }}\"><i class=\"icon-refresh\"></i></a> 
                                <a href=\"{{ path('sup_addr_livrai', { 'id' : adresse.id}) }}\"><i class=\"icon-trash\"></i></a>
                                <br />{{ adresse.prenom }} {{ adresse.nom }}  <br />{{ adresse.Tel}}
                            </label>
                            {% endfor %}
                            <br />
                            <a href=\"#\"><i class=\"glyphicon glyphicon-floppy-disk\"></i></a>
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

                 
{% endblock %}", "EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Panier/layout/livraison.html.twig");
    }
}
