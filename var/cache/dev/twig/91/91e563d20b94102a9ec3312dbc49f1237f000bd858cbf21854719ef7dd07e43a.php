<?php

/* @MyUserUtilisateur/Default/index.html.twig */
class __TwigTemplate_2293eefd695edcd3607dd1b804147f02c3e7dcdb7eee8a358c690f4d32effbaf extends Twig_Template
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
        $__internal_ecb34ed06f94bd1834efe081700b3726fbbd17d401cc96db116e61b53208d5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb34ed06f94bd1834efe081700b3726fbbd17d401cc96db116e61b53208d5d6->enter($__internal_ecb34ed06f94bd1834efe081700b3726fbbd17d401cc96db116e61b53208d5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyUserUtilisateur/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ecb34ed06f94bd1834efe081700b3726fbbd17d401cc96db116e61b53208d5d6->leave($__internal_ecb34ed06f94bd1834efe081700b3726fbbd17d401cc96db116e61b53208d5d6_prof);

    }

    public function getTemplateName()
    {
        return "@MyUserUtilisateur/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@MyUserUtilisateur/Default/index.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\MyUser\\UtilisateurBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
