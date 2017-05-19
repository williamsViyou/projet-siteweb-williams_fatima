<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_03409082068639092fa69b144526bcf2512d016e2ec9ea449e01b7ad5c599a57 extends Twig_Template
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
        $__internal_195895011d040c8565e5167350b423ee08ea61ff6b7c1a6fbf218e73b724cb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195895011d040c8565e5167350b423ee08ea61ff6b7c1a6fbf218e73b724cb20->enter($__internal_195895011d040c8565e5167350b423ee08ea61ff6b7c1a6fbf218e73b724cb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "



<div class=\"container\">
    <div class=\"row\">
             <div class=\"span3\"> 
            ";
        // line 9
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "@FOSUser/ChangePassword/change_password_content.html.twig", 9)->display($context);
        echo " 
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "@FOSUser/ChangePassword/change_password_content.html.twig", 11)->display($context);
            echo "  
            ";
        } else {
            // line 13
            echo "               ";
            $this->loadTemplate("::ModelUsed/utilisateur.html.twig", "@FOSUser/ChangePassword/change_password_content.html.twig", 13)->display($context);
            echo " 
            ";
        }
        // line 14
        echo " 
            
</div>
        <div class=\"span5\">
        
              
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span5\">
                        <h4>Récupération du mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                            Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                        </em>
                    </div>
                    
                    <div class=\"span5 offset2\">
                        ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <div>
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            </div>
                        ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            <br />
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_195895011d040c8565e5167350b423ee08ea61ff6b7c1a6fbf218e73b724cb20->leave($__internal_195895011d040c8565e5167350b423ee08ea61ff6b7c1a6fbf218e73b724cb20_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  78 => 35,  73 => 33,  69 => 32,  49 => 14,  43 => 13,  37 => 11,  35 => 10,  31 => 9,  22 => 2,);
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




<div class=\"container\">
    <div class=\"row\">
             <div class=\"span3\"> 
            {% include '::ModelUsed/navigation.html.twig' %} 
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
               {% include '::ModelUsed/utilisateurConnecter.html.twig' %}  
            {% else %}
               {% include '::ModelUsed/utilisateur.html.twig' %} 
            {% endif %} 
            
</div>
        <div class=\"span5\">
        
              
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span5\">
                        <h4>Récupération du mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                            Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                        </em>
                    </div>
                    
                    <div class=\"span5 offset2\">
                        {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
                            {{ form_widget(form) }}
                            <div>
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
                            </div>
                        {{ form_end(form) }}
                            <br />
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


", "@FOSUser/ChangePassword/change_password_content.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
