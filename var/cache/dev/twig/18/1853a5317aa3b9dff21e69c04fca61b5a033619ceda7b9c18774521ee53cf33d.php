<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_477bf718e2c19970d8a8e2345cb431b8d76dabd83111bb9441abdacfe83a4f96 extends Twig_Template
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
        $__internal_aec88aff7b2ff83cf48f8cfde64e3528095bf940ad0ea3510e5af6fbdd98638d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec88aff7b2ff83cf48f8cfde64e3528095bf940ad0ea3510e5af6fbdd98638d->enter($__internal_aec88aff7b2ff83cf48f8cfde64e3528095bf940ad0ea3510e5af6fbdd98638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "

<div class=\"container\">
    <div class=\"row\">

 <div class=\"span9\">

 
        <div class=\"span4\"> 
          
            ";
        // line 12
        $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 12)->display($context);
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
        
        $__internal_aec88aff7b2ff83cf48f8cfde64e3528095bf940ad0ea3510e5af6fbdd98638d->leave($__internal_aec88aff7b2ff83cf48f8cfde64e3528095bf940ad0ea3510e5af6fbdd98638d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
