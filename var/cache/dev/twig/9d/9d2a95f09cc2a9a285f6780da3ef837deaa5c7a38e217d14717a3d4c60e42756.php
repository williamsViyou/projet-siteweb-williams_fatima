<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7d25052881dd13eadfbf132475802c43d2e791041bafe9d0e700add78cba1439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_27471cccf2b126414d9e4233dfe9f1b3b702834d58568b039b0c7af528cadeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27471cccf2b126414d9e4233dfe9f1b3b702834d58568b039b0c7af528cadeff->enter($__internal_27471cccf2b126414d9e4233dfe9f1b3b702834d58568b039b0c7af528cadeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27471cccf2b126414d9e4233dfe9f1b3b702834d58568b039b0c7af528cadeff->leave($__internal_27471cccf2b126414d9e4233dfe9f1b3b702834d58568b039b0c7af528cadeff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9f34640ceff03bef9822b9d515a42e41e5b46c63343cd17995fc82fc090e3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f34640ceff03bef9822b9d515a42e41e5b46c63343cd17995fc82fc090e3e2->enter($__internal_c9f34640ceff03bef9822b9d515a42e41e5b46c63343cd17995fc82fc090e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c9f34640ceff03bef9822b9d515a42e41e5b46c63343cd17995fc82fc090e3e2->leave($__internal_c9f34640ceff03bef9822b9d515a42e41e5b46c63343cd17995fc82fc090e3e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
