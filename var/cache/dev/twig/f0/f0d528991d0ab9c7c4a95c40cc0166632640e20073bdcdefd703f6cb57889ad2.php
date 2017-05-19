<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_81527b522e73ddef4daee3b12e37a5c5f28975d80e8e3438d7be43847d605eeb extends Twig_Template
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
        $__internal_d0613e74bc1aef42a4ceb2759de0fca35812c3f4593ab74c0cf85c00a05ca7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0613e74bc1aef42a4ceb2759de0fca35812c3f4593ab74c0cf85c00a05ca7f2->enter($__internal_d0613e74bc1aef42a4ceb2759de0fca35812c3f4593ab74c0cf85c00a05ca7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d0613e74bc1aef42a4ceb2759de0fca35812c3f4593ab74c0cf85c00a05ca7f2->leave($__internal_d0613e74bc1aef42a4ceb2759de0fca35812c3f4593ab74c0cf85c00a05ca7f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
