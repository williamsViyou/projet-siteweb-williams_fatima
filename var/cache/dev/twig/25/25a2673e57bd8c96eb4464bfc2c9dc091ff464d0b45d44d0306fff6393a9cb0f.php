<?php

/* @EcommerceEcommerce/Default/Panier/layout/validation.html.twig */
class __TwigTemplate_ed575e21bac9ea06105f3786b9e99a8abd54015bf26613487111dc5eefdf8e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@EcommerceEcommerce/Default/Panier/layout/validation.html.twig", 2);
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
        $__internal_32b514a65db7b5fd064c4f8db395e1945b94b9e8cc54e46800de5255cd07d3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b514a65db7b5fd064c4f8db395e1945b94b9e8cc54e46800de5255cd07d3b6->enter($__internal_32b514a65db7b5fd064c4f8db395e1945b94b9e8cc54e46800de5255cd07d3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/Default/Panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b514a65db7b5fd064c4f8db395e1945b94b9e8cc54e46800de5255cd07d3b6->leave($__internal_32b514a65db7b5fd064c4f8db395e1945b94b9e8cc54e46800de5255cd07d3b6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_31530f12636b1e1614ecdd694901ae06408ab5af05d7988c3eba68e401d40a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31530f12636b1e1614ecdd694901ae06408ab5af05d7988c3eba68e401d40a0f->enter($__internal_31530f12636b1e1614ecdd694901ae06408ab5af05d7988c3eba68e401d40a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        <div class=\"span3\">
             ";
        // line 7
        $this->loadTemplate("::ModelUsed/navigation.html.twig", "@EcommerceEcommerce/Default/Panier/layout/validation.html.twig", 7)->display($context);
        echo " 
\t\t</div>
        
      \t<div class=\"container\">
\t\t<div class=\"row\">
                <?php include '../layout/col-left.php'; ?>
\t\t\t\t<div class=\"span9\">
                    <h2>Valider mon parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    2
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    1
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>
                    
                    <dt>TVA :</dt>
                    <dd>200€</dd>
    
                    <dt>Total:</dt>
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            </div>
\t\t
\t\t</div>
\t</div>


";
        
        $__internal_31530f12636b1e1614ecdd694901ae06408ab5af05d7988c3eba68e401d40a0f->leave($__internal_31530f12636b1e1614ecdd694901ae06408ab5af05d7988c3eba68e401d40a0f_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/Default/Panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
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

        <div class=\"span3\">
             {% include '::ModelUsed/navigation.html.twig' %} 
\t\t</div>
        
      \t<div class=\"container\">
\t\t<div class=\"row\">
                <?php include '../layout/col-left.php'; ?>
\t\t\t\t<div class=\"span9\">
                    <h2>Valider mon parnier</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    2
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    1
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>
                    
                    <dt>TVA :</dt>
                    <dd>200€</dd>
    
                    <dt>Total:</dt>
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            </div>
\t\t
\t\t</div>
\t</div>


{% endblock %}", "@EcommerceEcommerce/Default/Panier/layout/validation.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\Default\\Panier\\layout\\validation.html.twig");
    }
}
