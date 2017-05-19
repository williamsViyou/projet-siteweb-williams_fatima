<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f9a31fa43454e10f9480f2106efdb47a564243d75c9d136ba908efa5fcc7195d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_21652e9acf0097180a3f0064851ea9688b84e4cb01c3af0af6fbf96b8bdc5e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21652e9acf0097180a3f0064851ea9688b84e4cb01c3af0af6fbf96b8bdc5e1e->enter($__internal_21652e9acf0097180a3f0064851ea9688b84e4cb01c3af0af6fbf96b8bdc5e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21652e9acf0097180a3f0064851ea9688b84e4cb01c3af0af6fbf96b8bdc5e1e->leave($__internal_21652e9acf0097180a3f0064851ea9688b84e4cb01c3af0af6fbf96b8bdc5e1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_477ee8d463e41f8eab53aa9b0500c2383d2d405baa845826787ea69996671818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477ee8d463e41f8eab53aa9b0500c2383d2d405baa845826787ea69996671818->enter($__internal_477ee8d463e41f8eab53aa9b0500c2383d2d405baa845826787ea69996671818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_477ee8d463e41f8eab53aa9b0500c2383d2d405baa845826787ea69996671818->leave($__internal_477ee8d463e41f8eab53aa9b0500c2383d2d405baa845826787ea69996671818_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
