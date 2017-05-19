<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_578ec50ba0139458c7b771e756caa17a75bf0332d9e7c0776540e0e2bb95a9bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d354367790f0ac6458cb59456efeb37840adbc4dc35f004d2ea2a2904b58be50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d354367790f0ac6458cb59456efeb37840adbc4dc35f004d2ea2a2904b58be50->enter($__internal_d354367790f0ac6458cb59456efeb37840adbc4dc35f004d2ea2a2904b58be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d354367790f0ac6458cb59456efeb37840adbc4dc35f004d2ea2a2904b58be50->leave($__internal_d354367790f0ac6458cb59456efeb37840adbc4dc35f004d2ea2a2904b58be50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a05e431b95023ab3040c1c210aac35cbfcb35dbe716f79959d9937c89e033e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05e431b95023ab3040c1c210aac35cbfcb35dbe716f79959d9937c89e033e1f->enter($__internal_a05e431b95023ab3040c1c210aac35cbfcb35dbe716f79959d9937c89e033e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a05e431b95023ab3040c1c210aac35cbfcb35dbe716f79959d9937c89e033e1f->leave($__internal_a05e431b95023ab3040c1c210aac35cbfcb35dbe716f79959d9937c89e033e1f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
