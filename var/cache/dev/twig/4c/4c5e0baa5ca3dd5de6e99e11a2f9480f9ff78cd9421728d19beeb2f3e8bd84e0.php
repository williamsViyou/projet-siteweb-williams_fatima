<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_110969093dd668857077b0a876ae62201876ad67435a2d893aebea55c39b141a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_62a175126a265c2fc39b60c137ded351af4d843b5c8f06133013e8e0df19a17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a175126a265c2fc39b60c137ded351af4d843b5c8f06133013e8e0df19a17e->enter($__internal_62a175126a265c2fc39b60c137ded351af4d843b5c8f06133013e8e0df19a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a175126a265c2fc39b60c137ded351af4d843b5c8f06133013e8e0df19a17e->leave($__internal_62a175126a265c2fc39b60c137ded351af4d843b5c8f06133013e8e0df19a17e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ea4adf3d3bc16690c4fa848df0dc962b76045d59075bd6afc9cbb778def8aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea4adf3d3bc16690c4fa848df0dc962b76045d59075bd6afc9cbb778def8aa5->enter($__internal_0ea4adf3d3bc16690c4fa848df0dc962b76045d59075bd6afc9cbb778def8aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0ea4adf3d3bc16690c4fa848df0dc962b76045d59075bd6afc9cbb778def8aa5->leave($__internal_0ea4adf3d3bc16690c4fa848df0dc962b76045d59075bd6afc9cbb778def8aa5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
