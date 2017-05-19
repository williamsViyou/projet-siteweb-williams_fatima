<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_26be5bd534b4536347afaab3dddd2360f58514cbdd56034e398b2bea7167a9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_87441669ae65ac26dfa913c8836af7ddf93b84cf359d1bcf60ed31e5c8e842d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87441669ae65ac26dfa913c8836af7ddf93b84cf359d1bcf60ed31e5c8e842d9->enter($__internal_87441669ae65ac26dfa913c8836af7ddf93b84cf359d1bcf60ed31e5c8e842d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87441669ae65ac26dfa913c8836af7ddf93b84cf359d1bcf60ed31e5c8e842d9->leave($__internal_87441669ae65ac26dfa913c8836af7ddf93b84cf359d1bcf60ed31e5c8e842d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25f72af55776d29f94e012f7f151847b7f1cff025e2a8649a4f662a8a0c61fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f72af55776d29f94e012f7f151847b7f1cff025e2a8649a4f662a8a0c61fd1->enter($__internal_25f72af55776d29f94e012f7f151847b7f1cff025e2a8649a4f662a8a0c61fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_25f72af55776d29f94e012f7f151847b7f1cff025e2a8649a4f662a8a0c61fd1->leave($__internal_25f72af55776d29f94e012f7f151847b7f1cff025e2a8649a4f662a8a0c61fd1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
