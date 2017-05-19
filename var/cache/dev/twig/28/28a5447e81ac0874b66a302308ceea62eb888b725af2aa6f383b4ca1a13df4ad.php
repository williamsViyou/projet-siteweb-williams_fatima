<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3a45ae5aea6d783277969de317d276c87cdb11ab303da697b00cfbe806059a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fca6572c9067554ad47fb299d370a443979fb88b84cb7a7a30b76d6c4caef921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca6572c9067554ad47fb299d370a443979fb88b84cb7a7a30b76d6c4caef921->enter($__internal_fca6572c9067554ad47fb299d370a443979fb88b84cb7a7a30b76d6c4caef921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca6572c9067554ad47fb299d370a443979fb88b84cb7a7a30b76d6c4caef921->leave($__internal_fca6572c9067554ad47fb299d370a443979fb88b84cb7a7a30b76d6c4caef921_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab144f2f439dfb4f1462898ec135a093ff82ebe80a82b6f0836fdce853c19b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab144f2f439dfb4f1462898ec135a093ff82ebe80a82b6f0836fdce853c19b99->enter($__internal_ab144f2f439dfb4f1462898ec135a093ff82ebe80a82b6f0836fdce853c19b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ab144f2f439dfb4f1462898ec135a093ff82ebe80a82b6f0836fdce853c19b99->leave($__internal_ab144f2f439dfb4f1462898ec135a093ff82ebe80a82b6f0836fdce853c19b99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
