<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_2a1f2dee8522e8e58d11912a1807e2e223526f8e0097186d41680f370490c0a2 extends Twig_Template
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
        $__internal_68d2ad83ee35408557a86a515a5338ff0610a4e1b161f0d63c0ee13891defd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d2ad83ee35408557a86a515a5338ff0610a4e1b161f0d63c0ee13891defd0e->enter($__internal_68d2ad83ee35408557a86a515a5338ff0610a4e1b161f0d63c0ee13891defd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "



<div class=\"container\">
    <div class=\"row\">
    
        <div class=\"span10\">
        
                <div class=\"span4\"> 
                
                    ";
        // line 13
        $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "@FOSUser/ChangePassword/change_password_content.html.twig", 13)->display($context);
        // line 14
        echo "            
                </div>
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
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                            <div>
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            </div>
                        ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_68d2ad83ee35408557a86a515a5338ff0610a4e1b161f0d63c0ee13891defd0e->leave($__internal_68d2ad83ee35408557a86a515a5338ff0610a4e1b161f0d63c0ee13891defd0e_prof);

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
        return array (  67 => 33,  62 => 31,  57 => 29,  53 => 28,  37 => 14,  35 => 13,  22 => 2,);
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
    
        <div class=\"span10\">
        
                <div class=\"span4\"> 
                
                    {% include '::ModelUsed/utilisateurConnecter.html.twig' %}
            
                </div>
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


", "@FOSUser/ChangePassword/change_password_content.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password_content.html.twig");
    }
}