<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_bacbd3fdb29497be124e91b13f6abd21cda1407e8b6c99ae95ba5092554094b4 extends Twig_Template
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
        $__internal_8f43e93b2b5e89b64d47354d4a914ad62832ca712862fe5ebccfc5fad5e336ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f43e93b2b5e89b64d47354d4a914ad62832ca712862fe5ebccfc5fad5e336ee->enter($__internal_8f43e93b2b5e89b64d47354d4a914ad62832ca712862fe5ebccfc5fad5e336ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8f43e93b2b5e89b64d47354d4a914ad62832ca712862fe5ebccfc5fad5e336ee->leave($__internal_8f43e93b2b5e89b64d47354d4a914ad62832ca712862fe5ebccfc5fad5e336ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Symfo depar\\WebProjectWilloTimFA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
