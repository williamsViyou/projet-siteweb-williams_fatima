<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_32bc2054095f6749ddd4a14d813bb7404c6d3d4dd9386e96b135e72055c88084 extends Twig_Template
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
        $__internal_b4d8942462ae366da5a08afdcd2556ae47b2b5bb1a63b52103b050a4ebf83b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d8942462ae366da5a08afdcd2556ae47b2b5bb1a63b52103b050a4ebf83b51->enter($__internal_b4d8942462ae366da5a08afdcd2556ae47b2b5bb1a63b52103b050a4ebf83b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b4d8942462ae366da5a08afdcd2556ae47b2b5bb1a63b52103b050a4ebf83b51->leave($__internal_b4d8942462ae366da5a08afdcd2556ae47b2b5bb1a63b52103b050a4ebf83b51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
