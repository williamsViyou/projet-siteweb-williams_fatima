<?php

/* EcommerceEcommerceBundle:Administration:Commande/detail.html.twig */
class __TwigTemplate_1574651b804801b51ba48fdcc0feafb4ec0c3f9ee8d96398c7f94f788fe71bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceEcommerceBundle:Administration:Commande/detail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aab9e5bd072fab7e808587875bf81143fcaccb937839e38322bf87b56f3407ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab9e5bd072fab7e808587875bf81143fcaccb937839e38322bf87b56f3407ee->enter($__internal_aab9e5bd072fab7e808587875bf81143fcaccb937839e38322bf87b56f3407ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Administration:Commande/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aab9e5bd072fab7e808587875bf81143fcaccb937839e38322bf87b56f3407ee->leave($__internal_aab9e5bd072fab7e808587875bf81143fcaccb937839e38322bf87b56f3407ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b7306182857743e249433f7abd50468720f20285784fb2604bdca418e066153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7306182857743e249433f7abd50468720f20285784fb2604bdca418e066153->enter($__internal_1b7306182857743e249433f7abd50468720f20285784fb2604bdca418e066153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commandes list</h1>



    <table class=\"table table-striped table-hover\">

        <thead>

            <tr>

                <th>Article ( Matricule ) </th>

                <th>Categorie</th>

                <th>Prix</th>

                <th>Quantite</th>

            </tr>

        </thead>

        <tbody>
 ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["details"]) ? $context["details"] : $this->getContext($context, "details"))) == 0)) {
            // line 28
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun article(s) </center></td>
                        </tr>
";
        } else {
            // line 32
            echo "       
 ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 34
                echo "
            <tr>

                   ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 38
                    echo "                      ";
                    if (($this->getAttribute($context["d"], "idProduit", array()) == $this->getAttribute($context["p"], "id", array()))) {
                        // line 39
                        echo "                          <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
                        echo " ( ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
                        echo " ) </td>

                             ";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 42
                            echo "                                 ";
                            if (($this->getAttribute($context["c"], "id", array()) == $this->getAttribute($context["p"], "categorie", array()))) {
                                // line 43
                                echo "                                        <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
                                echo "</td>
                                 ";
                            }
                            // line 45
                            echo "                             ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 46
                        echo "                               <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
                        echo "</td>
                               
          <td>";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "quantite", array()), "html", null, true);
                        echo "</td>
                      ";
                    }
                    // line 50
                    echo "                   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "                                      
              

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tr>
        </tbody>

    </table>
";
        }
        // line 59
        echo "

       <h5>Toatl :</h5>
         <br> <br> <br>

         Et les adressess ... 


";
        
        $__internal_1b7306182857743e249433f7abd50468720f20285784fb2604bdca418e066153->leave($__internal_1b7306182857743e249433f7abd50468720f20285784fb2604bdca418e066153_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Administration:Commande/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  144 => 54,  130 => 50,  125 => 48,  119 => 46,  113 => 45,  107 => 43,  104 => 42,  100 => 41,  92 => 39,  89 => 38,  85 => 37,  80 => 34,  76 => 33,  73 => 32,  67 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layoutAdmin.html.twig' %}

{% block body %}
    <h1>Commandes list</h1>



    <table class=\"table table-striped table-hover\">

        <thead>

            <tr>

                <th>Article ( Matricule ) </th>

                <th>Categorie</th>

                <th>Prix</th>

                <th>Quantite</th>

            </tr>

        </thead>

        <tbody>
 {% if details|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun article(s) </center></td>
                        </tr>
{% else %}
       
 {% for d in details %}

            <tr>

                   {% for p in produits  %}
                      {% if ( d.idProduit  == p.id) %}
                          <td>{{ p.nom }} ( {{ p.id}} ) </td>

                             {% for c in categories %}
                                 {% if (c.id == p.categorie) %}
                                        <td>{{ c.nom }}</td>
                                 {% endif %}
                             {% endfor %}
                               <td>{{ p.prix }}</td>
                               
          <td>{{ d.quantite }}</td>
                      {% endif %}
                   {% endfor %}                                      
              

        {% endfor %}
            </tr>
        </tbody>

    </table>
{% endif %}


       <h5>Toatl :</h5>
         <br> <br> <br>

         Et les adressess ... 


{% endblock %}", "EcommerceEcommerceBundle:Administration:Commande/detail.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/Commande/detail.html.twig");
    }
}
