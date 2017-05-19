<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a080c55e2abd4be4c4b2b345996f626677c05d4641965a293fdf3978975b9224 extends Twig_Template
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
        $__internal_a1b9126426de8607231b6fbdd7e0823054f45c09133a6ebda0cbcc7230e752d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b9126426de8607231b6fbdd7e0823054f45c09133a6ebda0cbcc7230e752d9->enter($__internal_a1b9126426de8607231b6fbdd7e0823054f45c09133a6ebda0cbcc7230e752d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b9126426de8607231b6fbdd7e0823054f45c09133a6ebda0cbcc7230e752d9->leave($__internal_a1b9126426de8607231b6fbdd7e0823054f45c09133a6ebda0cbcc7230e752d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d3d05ac7550aebd8bc89abeb2e4a3c514eefcf80f10d5b40cbea6cb38abd5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3d05ac7550aebd8bc89abeb2e4a3c514eefcf80f10d5b40cbea6cb38abd5bf->enter($__internal_7d3d05ac7550aebd8bc89abeb2e4a3c514eefcf80f10d5b40cbea6cb38abd5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7d3d05ac7550aebd8bc89abeb2e4a3c514eefcf80f10d5b40cbea6cb38abd5bf->leave($__internal_7d3d05ac7550aebd8bc89abeb2e4a3c514eefcf80f10d5b40cbea6cb38abd5bf_prof);

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
