<?php

/* ::ModelUsed/utilisateurConnecter.html.twig */
class __TwigTemplate_22b524cea570421f8a5de5e9ddb5bdaf6b54f7fa353a3a49ecce024a6f344992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e955f7b8c27333895b619833cc2670dbea3ddf9ec05be0c4e3ede59eac1f92e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e955f7b8c27333895b619833cc2670dbea3ddf9ec05be0c4e3ede59eac1f92e4->enter($__internal_e955f7b8c27333895b619833cc2670dbea3ddf9ec05be0c4e3ede59eac1f92e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/utilisateurConnecter.html.twig"));

        // line 1
        echo "    <div class=\"well\">
       <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Changer mot de passe</a>
            </li>
            <li>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\">Mes adresses</a>
            </li>
            <li>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">Mon panier</a>
            </li>

             <li>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showfacture");
        echo "\">Mes commandes </a>
            </li>
            <li>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
            </li>
        </ul>
    </div>


 ";
        // line 29
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 30
            echo "       <div class=\"well\">
       <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
            echo "\">Mode admin</a>
            </li>
        </ul>
    </div>
                       
                                                                                  
";
        }
        // line 39
        echo " ";
        
        $__internal_e955f7b8c27333895b619833cc2670dbea3ddf9ec05be0c4e3ede59eac1f92e4->leave($__internal_e955f7b8c27333895b619833cc2670dbea3ddf9ec05be0c4e3ede59eac1f92e4_prof);

    }

    public function getTemplateName()
    {
        return "::ModelUsed/utilisateurConnecter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  80 => 33,  75 => 30,  73 => 29,  64 => 23,  58 => 20,  51 => 16,  45 => 13,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"well\">
       <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path ('fos_user_profile_show') }}\">Mes informations</a>
            </li>
            <li>
                <a href=\"{{ path ('fos_user_profile_edit') }}\">Editer mes informations</a>
            </li>
            <li>
                <a href=\"{{ path ('fos_user_change_password') }}\">Changer mot de passe</a>
            </li>
            <li>
                <a href=\"{{ path ('livraison') }}\">Mes adresses</a>
            </li>
            <li>
                <a href=\"{{ path ('panier') }}\">Mon panier</a>
            </li>

             <li>
                <a href=\"{{ path ('showfacture')}}\">Mes commandes </a>
            </li>
            <li>
                <a href=\"{{ path ('fos_user_security_logout') }}\">Deconnexion</a>
            </li>
        </ul>
    </div>


 {% if app.user is not null and is_granted('ROLE_ADMIN') %}
       <div class=\"well\">
       <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path ('yes_index') }}\">Mode admin</a>
            </li>
        </ul>
    </div>
                       
                                                                                  
{% endif %} ", "::ModelUsed/utilisateurConnecter.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/utilisateurConnecter.html.twig");
    }
}
