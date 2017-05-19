<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_151ced0b7aa5bc33c1c2980047edbeca8d7e6d123249c11d2f7040e9ce630f74 extends Twig_Template
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
        $__internal_438ee42ac5c829e5ff34be97c7d1f1d37b5e80644f337ebf90b97d4fec3f9725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438ee42ac5c829e5ff34be97c7d1f1d37b5e80644f337ebf90b97d4fec3f9725->enter($__internal_438ee42ac5c829e5ff34be97c7d1f1d37b5e80644f337ebf90b97d4fec3f9725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "

<div class=\"container\">
    <div class=\"row\">

 <div class=\"span9\">

 
        <div class=\"span4\"> 
          
            ";
        // line 12
        $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "@FOSUser/Profile/edit_content.html.twig", 12)->display($context);
        // line 13
        echo "    
    \t</div>


            <h2>Informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Modifier mes informations</h4>
                        
                            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                                <div>
                                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </div>
                            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                            <br />
                        
                    </div>
                </div>
            </div>
        </div>

       </div>
        </div>
";
        
        $__internal_438ee42ac5c829e5ff34be97c7d1f1d37b5e80644f337ebf90b97d4fec3f9725->leave($__internal_438ee42ac5c829e5ff34be97c7d1f1d37b5e80644f337ebf90b97d4fec3f9725_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  58 => 27,  53 => 25,  49 => 24,  36 => 13,  34 => 12,  22 => 2,);
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

 <div class=\"span9\">

 
        <div class=\"span4\"> 
          
            {% include '::ModelUsed/utilisateurConnecter.html.twig' %}
    
    \t</div>


            <h2>Informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Modifier mes informations</h4>
                        
                            {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
                                {{ form_widget(form) }}
                                <div>
                                    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
                                </div>
                            {{ form_end(form) }}
                            <br />
                        
                    </div>
                </div>
            </div>
        </div>

       </div>
        </div>
", "@FOSUser/Profile/edit_content.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
