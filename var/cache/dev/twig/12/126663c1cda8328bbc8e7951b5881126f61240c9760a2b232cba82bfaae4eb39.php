<?php

/* EcommerceEcommerceBundle:Administration:Commande/index.html.twig */
class __TwigTemplate_4e9b42f610133d01bf3ecef0991d567a65f02ad02f80d88f8476126d037d10dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceEcommerceBundle:Administration:Commande/index.html.twig", 1);
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
        $__internal_aa70f7b7d0468d59c9a6f69b88eaaba54c805610426a7c79b2d9f7c2eb883e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa70f7b7d0468d59c9a6f69b88eaaba54c805610426a7c79b2d9f7c2eb883e9b->enter($__internal_aa70f7b7d0468d59c9a6f69b88eaaba54c805610426a7c79b2d9f7c2eb883e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Administration:Commande/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa70f7b7d0468d59c9a6f69b88eaaba54c805610426a7c79b2d9f7c2eb883e9b->leave($__internal_aa70f7b7d0468d59c9a6f69b88eaaba54c805610426a7c79b2d9f7c2eb883e9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7767cf06c91da93492f500dfaa24c3e35f2d038e222424c010b5707b3150baad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7767cf06c91da93492f500dfaa24c3e35f2d038e222424c010b5707b3150baad->enter($__internal_7767cf06c91da93492f500dfaa24c3e35f2d038e222424c010b5707b3150baad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commandes list</h1>



    <table class=\"table table-striped table-hover\">

        <thead>

            <tr>

                <th>Référence</th>

                <th>Date de commande</th>

                <th>Date de livraison</th>

                <th>Client</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>
 ";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes"))) == 0)) {
            // line 30
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucune commande en cours</center></td>
                        </tr>
";
        } else {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 35
                echo "
            <tr>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_briefing", array()), "html", null, true);
                echo "</td>


                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "Date_de_commande", array()), "html", null, true);
                echo "</td>

                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "Date_livraison_prevue", array()), "html", null, true);
                echo "</td>
 ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 44
                    echo "      ";
                    if (($this->getAttribute($context["d"], "_data_adrre", array()) == $this->getAttribute($context["commande"], "id_briefing", array()))) {
                        // line 45
                        echo "           ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                            // line 46
                            echo "               ";
                            if (($this->getAttribute($context["d"], "idUser", array()) == $this->getAttribute($context["u"], "id", array()))) {
                                // line 47
                                echo "

                <td>";
                                // line 49
                                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
                                echo " </td>


               ";
                            }
                            // line 53
                            echo "           ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "      ";
                    }
                    // line 55
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                <td>

                    <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UneFacture", array("id" => $this->getAttribute($context["commande"], "id_briefing", array()))), "html", null, true);
                echo "\" target = \"_blank\"><i class=\"icon-book\"></i></a>

                </td>

            </tr>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
        </tbody>

    </table>
                    ";
        }
        // line 70
        echo "     
";
        
        $__internal_7767cf06c91da93492f500dfaa24c3e35f2d038e222424c010b5707b3150baad->leave($__internal_7767cf06c91da93492f500dfaa24c3e35f2d038e222424c010b5707b3150baad_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Administration:Commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 70,  157 => 65,  144 => 58,  140 => 56,  134 => 55,  131 => 54,  125 => 53,  118 => 49,  114 => 47,  111 => 46,  106 => 45,  103 => 44,  99 => 43,  95 => 42,  90 => 40,  84 => 37,  80 => 35,  75 => 34,  69 => 30,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
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

                <th>Référence</th>

                <th>Date de commande</th>

                <th>Date de livraison</th>

                <th>Client</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>
 {% if commandes|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucune commande en cours</center></td>
                        </tr>
{% else %}
        {% for commande in commandes %}

            <tr>
                <td>{{ commande.id_briefing}}</td>


                <td>{{ commande.Date_de_commande }}</td>

                <td>{{ commande.Date_livraison_prevue }}</td>
 {% for d in details %}
      {% if(d._data_adrre  == commande.id_briefing ) %}
           {% for u in users %}
               {% if (d.idUser == u.id) %}


                <td>{{ u.username }} </td>


               {% endif %}
           {% endfor %}
      {% endif %}
 {% endfor %}
                <td>

                    <a href=\"{{ path('UneFacture', { 'id' : commande.id_briefing }) }}\" target = \"_blank\"><i class=\"icon-book\"></i></a>

                </td>

            </tr>

        {% endfor %}

        </tbody>

    </table>
                    {% endif %}
     
{% endblock %}", "EcommerceEcommerceBundle:Administration:Commande/index.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/Commande/index.html.twig");
    }
}
