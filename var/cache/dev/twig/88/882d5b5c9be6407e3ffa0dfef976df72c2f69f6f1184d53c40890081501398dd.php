<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cc12908047241ef66242e6e1824cf737c55f3b01bce4c036672b4aba5307deeb extends Twig_Template
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
        $__internal_1d3fcea0e0240dbbd2c0b57f5ee790ef3124b1b05e5010a3d339e816ebae233a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3fcea0e0240dbbd2c0b57f5ee790ef3124b1b05e5010a3d339e816ebae233a->enter($__internal_1d3fcea0e0240dbbd2c0b57f5ee790ef3124b1b05e5010a3d339e816ebae233a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1d3fcea0e0240dbbd2c0b57f5ee790ef3124b1b05e5010a3d339e816ebae233a->leave($__internal_1d3fcea0e0240dbbd2c0b57f5ee790ef3124b1b05e5010a3d339e816ebae233a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
