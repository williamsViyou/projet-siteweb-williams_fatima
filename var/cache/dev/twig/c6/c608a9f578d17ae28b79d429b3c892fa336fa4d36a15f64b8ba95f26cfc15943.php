<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8ca26255f92cdbe74ac364e0e8fc95b10c0cbbac8b60e9615bcf2f8cb8fbef5b extends Twig_Template
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
        $__internal_8bbf4551c83998ca16863ade1932303347b664149845aa23819ce181b1e7467e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbf4551c83998ca16863ade1932303347b664149845aa23819ce181b1e7467e->enter($__internal_8bbf4551c83998ca16863ade1932303347b664149845aa23819ce181b1e7467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bbf4551c83998ca16863ade1932303347b664149845aa23819ce181b1e7467e->leave($__internal_8bbf4551c83998ca16863ade1932303347b664149845aa23819ce181b1e7467e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2dcbf6c51753c29a40fb697eb86c03919e5a712aee410f2a225a96c2ce5b934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dcbf6c51753c29a40fb697eb86c03919e5a712aee410f2a225a96c2ce5b934->enter($__internal_a2dcbf6c51753c29a40fb697eb86c03919e5a712aee410f2a225a96c2ce5b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "     



     <div class = \"container\" >
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_a2dcbf6c51753c29a40fb697eb86c03919e5a712aee410f2a225a96c2ce5b934->leave($__internal_a2dcbf6c51753c29a40fb697eb86c03919e5a712aee410f2a225a96c2ce5b934_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebbb5256805b67755227b80d8fa8336d4318c66ba19851a2e3807fe820921f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbb5256805b67755227b80d8fa8336d4318c66ba19851a2e3807fe820921f7f->enter($__internal_ebbb5256805b67755227b80d8fa8336d4318c66ba19851a2e3807fe820921f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_ebbb5256805b67755227b80d8fa8336d4318c66ba19851a2e3807fe820921f7f->leave($__internal_ebbb5256805b67755227b80d8fa8336d4318c66ba19851a2e3807fe820921f7f_prof);

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
", "@FOSUser/layout.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
