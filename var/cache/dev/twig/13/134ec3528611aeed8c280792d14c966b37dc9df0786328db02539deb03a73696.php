<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8fad747b70f3e385e0bb6bf1e138672775fecfe6c9ee92daab9e77f0f099793e extends Twig_Template
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
        $__internal_7561a0513f18e3f42ae3340be2cc6649f9b636c2621902cab6fb9ee7453ae831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7561a0513f18e3f42ae3340be2cc6649f9b636c2621902cab6fb9ee7453ae831->enter($__internal_7561a0513f18e3f42ae3340be2cc6649f9b636c2621902cab6fb9ee7453ae831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7561a0513f18e3f42ae3340be2cc6649f9b636c2621902cab6fb9ee7453ae831->leave($__internal_7561a0513f18e3f42ae3340be2cc6649f9b636c2621902cab6fb9ee7453ae831_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
