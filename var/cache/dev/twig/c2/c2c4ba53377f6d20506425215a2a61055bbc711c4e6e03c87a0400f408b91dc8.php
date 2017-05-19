<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_490380cb260e0eb6805cefe05feed4b514d0a52c5b0841afa629ff2cd13b5f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af56256f9c7b90f299ec61a0cb1508a373ca7b60f8608a17f48bddb34da4dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af56256f9c7b90f299ec61a0cb1508a373ca7b60f8608a17f48bddb34da4dc9->enter($__internal_1af56256f9c7b90f299ec61a0cb1508a373ca7b60f8608a17f48bddb34da4dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1af56256f9c7b90f299ec61a0cb1508a373ca7b60f8608a17f48bddb34da4dc9->leave($__internal_1af56256f9c7b90f299ec61a0cb1508a373ca7b60f8608a17f48bddb34da4dc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03474c6bfb87bb8de9f59df0ee467f53e60af6c743488c8bf468dfa56a63ddad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03474c6bfb87bb8de9f59df0ee467f53e60af6c743488c8bf468dfa56a63ddad->enter($__internal_03474c6bfb87bb8de9f59df0ee467f53e60af6c743488c8bf468dfa56a63ddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03474c6bfb87bb8de9f59df0ee467f53e60af6c743488c8bf468dfa56a63ddad->leave($__internal_03474c6bfb87bb8de9f59df0ee467f53e60af6c743488c8bf468dfa56a63ddad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f78cbdd8f86eccd50cc3076ff5e143381212f04eb498ab27ee3e179c9a3355b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f78cbdd8f86eccd50cc3076ff5e143381212f04eb498ab27ee3e179c9a3355b->enter($__internal_8f78cbdd8f86eccd50cc3076ff5e143381212f04eb498ab27ee3e179c9a3355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f78cbdd8f86eccd50cc3076ff5e143381212f04eb498ab27ee3e179c9a3355b->leave($__internal_8f78cbdd8f86eccd50cc3076ff5e143381212f04eb498ab27ee3e179c9a3355b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6b4bb94f549042c1cf40434a0a754a4ec5a0235d53b6296820989d5419d3e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b4bb94f549042c1cf40434a0a754a4ec5a0235d53b6296820989d5419d3e38->enter($__internal_e6b4bb94f549042c1cf40434a0a754a4ec5a0235d53b6296820989d5419d3e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e6b4bb94f549042c1cf40434a0a754a4ec5a0235d53b6296820989d5419d3e38->leave($__internal_e6b4bb94f549042c1cf40434a0a754a4ec5a0235d53b6296820989d5419d3e38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
