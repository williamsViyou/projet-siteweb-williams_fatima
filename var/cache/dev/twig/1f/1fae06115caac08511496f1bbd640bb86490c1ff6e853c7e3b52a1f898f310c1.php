<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3e749325f71f34b9f399b59a2642fcbbe2191460dcaea746e5719e4912cce025 extends Twig_Template
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
        $__internal_0783892e172c87146b2c34491db6cb9b4dac49fdf15f8552b59ff05d06cda879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0783892e172c87146b2c34491db6cb9b4dac49fdf15f8552b59ff05d06cda879->enter($__internal_0783892e172c87146b2c34491db6cb9b4dac49fdf15f8552b59ff05d06cda879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0783892e172c87146b2c34491db6cb9b4dac49fdf15f8552b59ff05d06cda879->leave($__internal_0783892e172c87146b2c34491db6cb9b4dac49fdf15f8552b59ff05d06cda879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
