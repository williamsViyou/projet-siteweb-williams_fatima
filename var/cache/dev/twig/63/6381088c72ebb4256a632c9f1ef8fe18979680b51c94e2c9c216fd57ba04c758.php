<?php

/* @PagesPages/Default/pages/layout/pages.html.twig */
class __TwigTemplate_8334bca23a47439b0a14b5ce0655a3e056b18ef4c20a41ef6613e16dfe4796d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@PagesPages/Default/pages/layout/pages.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c60f9e3735e68a6ac86388c2d9088b52d1c2be2583608d32abf4033108759c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60f9e3735e68a6ac86388c2d9088b52d1c2be2583608d32abf4033108759c96->enter($__internal_c60f9e3735e68a6ac86388c2d9088b52d1c2be2583608d32abf4033108759c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PagesPages/Default/pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c60f9e3735e68a6ac86388c2d9088b52d1c2be2583608d32abf4033108759c96->leave($__internal_c60f9e3735e68a6ac86388c2d9088b52d1c2be2583608d32abf4033108759c96_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b97336d0a3d21c1ee069543e730b64953ed26cc2e1dfaccddb9e2ebc156292a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b97336d0a3d21c1ee069543e730b64953ed26cc2e1dfaccddb9e2ebc156292a->enter($__internal_0b97336d0a3d21c1ee069543e730b64953ed26cc2e1dfaccddb9e2ebc156292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "titre", array()), "html", null, true);
        echo "</h1>
        <div class=\"span12\">
            ";
        // line 11
        echo $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "contenu", array());
        echo "
        </div>
    </div>
</div>
 ";
        
        $__internal_0b97336d0a3d21c1ee069543e730b64953ed26cc2e1dfaccddb9e2ebc156292a->leave($__internal_0b97336d0a3d21c1ee069543e730b64953ed26cc2e1dfaccddb9e2ebc156292a_prof);

    }

    public function getTemplateName()
    {
        return "@PagesPages/Default/pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  40 => 7,  34 => 6,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '::layout/layout.html.twig' %}



{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <h1>{{ pages.titre }}</h1>
        <div class=\"span12\">
            {{ pages.contenu|raw }}
        </div>
    </div>
</div>
 {% endblock %}", "@PagesPages/Default/pages/layout/pages.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Pages\\PagesBundle\\Resources\\views\\Default\\pages\\layout\\pages.html.twig");
    }
}
