<?php

/* PagesPagesBundle:Default/pages/layout:pages.html.twig */
class __TwigTemplate_14f8dd515039f48b2a1b5e4f016046396ca176cc90eebf9d5d2bc355a9e7fe9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesPagesBundle:Default/pages/layout:pages.html.twig", 2);
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
        $__internal_30c22b4864b2ec3c38f27c87cb8ab93c455ad7a264716f37e344083b5e2d13ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c22b4864b2ec3c38f27c87cb8ab93c455ad7a264716f37e344083b5e2d13ea->enter($__internal_30c22b4864b2ec3c38f27c87cb8ab93c455ad7a264716f37e344083b5e2d13ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesPagesBundle:Default/pages/layout:pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c22b4864b2ec3c38f27c87cb8ab93c455ad7a264716f37e344083b5e2d13ea->leave($__internal_30c22b4864b2ec3c38f27c87cb8ab93c455ad7a264716f37e344083b5e2d13ea_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef10d4b3439959ea5694745fdb8ef3c5c5fe69906386a2ac0822918dda4268a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef10d4b3439959ea5694745fdb8ef3c5c5fe69906386a2ac0822918dda4268a->enter($__internal_0ef10d4b3439959ea5694745fdb8ef3c5c5fe69906386a2ac0822918dda4268a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ef10d4b3439959ea5694745fdb8ef3c5c5fe69906386a2ac0822918dda4268a->leave($__internal_0ef10d4b3439959ea5694745fdb8ef3c5c5fe69906386a2ac0822918dda4268a_prof);

    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Default/pages/layout:pages.html.twig";
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
 {% endblock %}", "PagesPagesBundle:Default/pages/layout:pages.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Pages\\PagesBundle/Resources/views/Default/pages/layout/pages.html.twig");
    }
}
