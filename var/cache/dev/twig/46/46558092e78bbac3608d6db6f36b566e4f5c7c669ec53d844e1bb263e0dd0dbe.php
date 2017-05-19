<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1cf9c78e48b3994f58da37f4511c505605ec1dd6c3e7f23c1b6648b886ec5cb0 extends Twig_Template
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
        $__internal_653ad05cadeea4f7a7a9a14ea5c6a6b04834841caea9c22882a8d306254d7fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653ad05cadeea4f7a7a9a14ea5c6a6b04834841caea9c22882a8d306254d7fa7->enter($__internal_653ad05cadeea4f7a7a9a14ea5c6a6b04834841caea9c22882a8d306254d7fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_653ad05cadeea4f7a7a9a14ea5c6a6b04834841caea9c22882a8d306254d7fa7->leave($__internal_653ad05cadeea4f7a7a9a14ea5c6a6b04834841caea9c22882a8d306254d7fa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
