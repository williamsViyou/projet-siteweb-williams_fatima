<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5c744dd903e61887b96b9c234c35f221fce2372de29ee969c4fcbb14fcc3d5ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_744d6309084edac5a7c2d299341f703add89c54a67113651c9a6b339759c7922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744d6309084edac5a7c2d299341f703add89c54a67113651c9a6b339759c7922->enter($__internal_744d6309084edac5a7c2d299341f703add89c54a67113651c9a6b339759c7922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_744d6309084edac5a7c2d299341f703add89c54a67113651c9a6b339759c7922->leave($__internal_744d6309084edac5a7c2d299341f703add89c54a67113651c9a6b339759c7922_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_834ae8db88bc708818be3f977572a812707adab0da464c6e631c19bfd4d17b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834ae8db88bc708818be3f977572a812707adab0da464c6e631c19bfd4d17b36->enter($__internal_834ae8db88bc708818be3f977572a812707adab0da464c6e631c19bfd4d17b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_834ae8db88bc708818be3f977572a812707adab0da464c6e631c19bfd4d17b36->leave($__internal_834ae8db88bc708818be3f977572a812707adab0da464c6e631c19bfd4d17b36_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
