<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7ad4dbdd0158db05c93eea299d58f6562acef6f500bb1c47c5f91b3b69d3bcf2 extends Twig_Template
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
        $__internal_cb68d038a8392032c9d3d81db3b7bf74c9bbea7eaf5a24b320068907a2e8e027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb68d038a8392032c9d3d81db3b7bf74c9bbea7eaf5a24b320068907a2e8e027->enter($__internal_cb68d038a8392032c9d3d81db3b7bf74c9bbea7eaf5a24b320068907a2e8e027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cb68d038a8392032c9d3d81db3b7bf74c9bbea7eaf5a24b320068907a2e8e027->leave($__internal_cb68d038a8392032c9d3d81db3b7bf74c9bbea7eaf5a24b320068907a2e8e027_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
