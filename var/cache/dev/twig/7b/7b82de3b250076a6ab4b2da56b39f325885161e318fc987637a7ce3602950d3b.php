<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_747c546decbe9e68d98e736955a9e4e42a3da8c52185a77cadb25d8bb893eb6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_06a754f425c9b46375fca7af0bfc28d665d6ff8b01de2ac20190f77024ed371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a754f425c9b46375fca7af0bfc28d665d6ff8b01de2ac20190f77024ed371d->enter($__internal_06a754f425c9b46375fca7af0bfc28d665d6ff8b01de2ac20190f77024ed371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06a754f425c9b46375fca7af0bfc28d665d6ff8b01de2ac20190f77024ed371d->leave($__internal_06a754f425c9b46375fca7af0bfc28d665d6ff8b01de2ac20190f77024ed371d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab49f1eb61530ec01fe67e68f129bf8077287d13c2cca5d3c0ab773fe6d087f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab49f1eb61530ec01fe67e68f129bf8077287d13c2cca5d3c0ab773fe6d087f3->enter($__internal_ab49f1eb61530ec01fe67e68f129bf8077287d13c2cca5d3c0ab773fe6d087f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ab49f1eb61530ec01fe67e68f129bf8077287d13c2cca5d3c0ab773fe6d087f3->leave($__internal_ab49f1eb61530ec01fe67e68f129bf8077287d13c2cca5d3c0ab773fe6d087f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
