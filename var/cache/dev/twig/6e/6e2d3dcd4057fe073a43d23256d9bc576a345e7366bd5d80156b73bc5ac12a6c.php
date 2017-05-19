<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f0e68d3d6c4b22fbe420909cdbae5945c022d28ae5c9c1885e095cd395aafa12 extends Twig_Template
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
        $__internal_5bf13076fad4f7418d591364ffe6eaeb93aab780b8bf7bdfcc91fd3189b45ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf13076fad4f7418d591364ffe6eaeb93aab780b8bf7bdfcc91fd3189b45ae9->enter($__internal_5bf13076fad4f7418d591364ffe6eaeb93aab780b8bf7bdfcc91fd3189b45ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5bf13076fad4f7418d591364ffe6eaeb93aab780b8bf7bdfcc91fd3189b45ae9->leave($__internal_5bf13076fad4f7418d591364ffe6eaeb93aab780b8bf7bdfcc91fd3189b45ae9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
