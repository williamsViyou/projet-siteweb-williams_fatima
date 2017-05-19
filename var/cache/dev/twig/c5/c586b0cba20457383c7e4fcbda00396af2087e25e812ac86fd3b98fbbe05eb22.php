<?php

/* @EcommerceEcommerce/Default/Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_b532d4d533a73352469df6021bd70b083c82452edd80ed4497da9e54282c3e21 extends Twig_Template
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
        $__internal_2553cb2c63c25d158a356b9e07eceb38b00a975eb430b1de429692ee8883b9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2553cb2c63c25d158a356b9e07eceb38b00a975eb430b1de429692ee8883b9f6->enter($__internal_2553cb2c63c25d158a356b9e07eceb38b00a975eb430b1de429692ee8883b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/Default/Recherche/modulesUsed/recherche.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
 


";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</form>";
        
        $__internal_2553cb2c63c25d158a356b9e07eceb38b00a975eb430b1de429692ee8883b9f6->leave($__internal_2553cb2c63c25d158a356b9e07eceb38b00a975eb430b1de429692ee8883b9f6_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/Default/Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  30 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('rechercheProduits') }}\" method=\"POST\" class=\"navbar-form form-search pull-right\">
 


{{ form_start(form) }}
{{ form_widget(form) }}

{{ form_end(form) }}

</form>", "@EcommerceEcommerce/Default/Recherche/modulesUsed/recherche.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\Default\\Recherche\\modulesUsed\\recherche.html.twig");
    }
}
