<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_5a0d81e41451ba735ce556ea44bf12b95613b276e1df1b4ce43c6d4a04e62679 extends Twig_Template
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
        $__internal_c573b929bd1e17c47daa58c93f394b85d79645f19f79ea51f269f7aecb050f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c573b929bd1e17c47daa58c93f394b85d79645f19f79ea51f269f7aecb050f0e->enter($__internal_c573b929bd1e17c47daa58c93f394b85d79645f19f79ea51f269f7aecb050f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo " <div class=\"row\">
          <div class=\"span3\"> 
            ";
        // line 8
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "@FOSUser/Security/login_content.html.twig", 8)->display($context);
        echo " 
            ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "@FOSUser/Security/login_content.html.twig", 10)->display($context);
            echo "  
            ";
        } else {
            // line 12
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "@FOSUser/Security/login_content.html.twig", 12)->display($context);
            echo " 
            ";
        }
        // line 13
        echo " 
            
</div>
        <div class=\"span9\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            Nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                        <br /><br />
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
                        
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            ";
        // line 34
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 35
            echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                            ";
        }
        // line 37
        echo "
                            <label for=\"username\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                            <label for=\"password\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />


</br>                        
                            <input  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
                        </form>

</br>
</br>
</br>
                    </div>
                    <div class=\"span10\">
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_c573b929bd1e17c47daa58c93f394b85d79645f19f79ea51f269f7aecb050f0e->leave($__internal_c573b929bd1e17c47daa58c93f394b85d79645f19f79ea51f269f7aecb050f0e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  112 => 46,  104 => 41,  99 => 39,  95 => 38,  92 => 37,  86 => 35,  84 => 34,  80 => 33,  71 => 27,  55 => 13,  49 => 12,  43 => 10,  41 => 9,  37 => 8,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
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
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            Nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                        <br /><br />
                        <a href=\"{{ path ('fos_user_registration_register') }}\" class=\"btn btn-primary\">S'inscrire</a>
                        
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                            {% if csrf_token %}
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                            {% endif %}

                            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

                            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />


</br>                        
                            <input  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-primary\" />
                        </form>

</br>
</br>
</br>
                    </div>
                    <div class=\"span10\">
                        <a href=\"{{ path ('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


", "@FOSUser/Security/login_content.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
