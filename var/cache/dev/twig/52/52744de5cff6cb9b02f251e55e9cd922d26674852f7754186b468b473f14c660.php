<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_5d42504065f3d4b3e56d5a7ebc132dde9d9eb40a3484ad2f85b8494f5f3bb7df extends Twig_Template
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
        $__internal_3d31a922fefc9357462b0e015e614652a7e5c17c13131a69062c42de57c18215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d31a922fefc9357462b0e015e614652a7e5c17c13131a69062c42de57c18215->enter($__internal_3d31a922fefc9357462b0e015e614652a7e5c17c13131a69062c42de57c18215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <div class=\"row\">
        
                
        <div class=\"span9\">
    
            
                <div class=\"span4\"> 
                
                    ";
        // line 12
        $this->loadTemplate("::ModelUsed/utilisateurConnecter.html.twig", "@FOSUser/Profile/show_content.html.twig", 12)->display($context);
        // line 13
        echo "            
                </div>
            
            
    
            <h2>  Mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Mes informations</h4>
                      

                            <div class=\"fos_user_user_show\">
                                <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                                <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                            </div>
                            <button class=\"btn btn-primary\">Modifier</button>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_3d31a922fefc9357462b0e015e614652a7e5c17c13131a69062c42de57c18215->leave($__internal_3d31a922fefc9357462b0e015e614652a7e5c17c13131a69062c42de57c18215_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 28,  52 => 27,  36 => 13,  34 => 12,  22 => 2,);
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
            
                </div>
            
            
    
            <h2>  Mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Mes informations</h4>
                      

                            <div class=\"fos_user_user_show\">
                                <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
                                <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                            </div>
                            <button class=\"btn btn-primary\">Modifier</button>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


", "@FOSUser/Profile/show_content.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
