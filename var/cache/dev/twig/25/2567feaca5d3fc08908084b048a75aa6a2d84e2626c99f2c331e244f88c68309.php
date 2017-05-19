<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_5607ed963e2b8405c19e527fcecde34fa808fa3c91e92e989dfb162d320a1814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7533ea12d7dfef5010fa53761cdd18fc6b619d4372ae6d3f9a3e339b5f3cf532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7533ea12d7dfef5010fa53761cdd18fc6b619d4372ae6d3f9a3e339b5f3cf532->enter($__internal_7533ea12d7dfef5010fa53761cdd18fc6b619d4372ae6d3f9a3e339b5f3cf532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7533ea12d7dfef5010fa53761cdd18fc6b619d4372ae6d3f9a3e339b5f3cf532->leave($__internal_7533ea12d7dfef5010fa53761cdd18fc6b619d4372ae6d3f9a3e339b5f3cf532_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f912cbab2460a7d9e06a0021468e32ba0c4d2c7a044e1bcefdf1bb5cd8e5c57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f912cbab2460a7d9e06a0021468e32ba0c4d2c7a044e1bcefdf1bb5cd8e5c57a->enter($__internal_f912cbab2460a7d9e06a0021468e32ba0c4d2c7a044e1bcefdf1bb5cd8e5c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "     



     <div class = \"container\" >
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "              
            ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "
        </div>
";
        
        $__internal_f912cbab2460a7d9e06a0021468e32ba0c4d2c7a044e1bcefdf1bb5cd8e5c57a->leave($__internal_f912cbab2460a7d9e06a0021468e32ba0c4d2c7a044e1bcefdf1bb5cd8e5c57a_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1962c49cb276f2c215cacce05829d44bba1d8e0d698363092ac503b14dcd040f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1962c49cb276f2c215cacce05829d44bba1d8e0d698363092ac503b14dcd040f->enter($__internal_1962c49cb276f2c215cacce05829d44bba1d8e0d698363092ac503b14dcd040f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_1962c49cb276f2c215cacce05829d44bba1d8e0d698363092ac503b14dcd040f->leave($__internal_1962c49cb276f2c215cacce05829d44bba1d8e0d698363092ac503b14dcd040f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  91 => 18,  82 => 20,  80 => 18,  77 => 17,  71 => 16,  62 => 13,  57 => 12,  52 => 11,  48 => 10,  41 => 5,  35 => 4,  11 => 2,);
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
     



     <div class = \"container\" >
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
              
            {% block fos_user_content %}
            {% endblock fos_user_content %}

        </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
