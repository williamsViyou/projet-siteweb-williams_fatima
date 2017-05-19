<?php

/* ::ModelUsed/utilisateur.html.twig */
class __TwigTemplate_3705fdddad082030ae25aa54945baaf5c375da7cddb22dde86f4130cdbd46003 extends Twig_Template
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
        $__internal_485e8c8a25fa66138d1ad74d48e3d82137cee5d4233e51b2cb64e536d5e35a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485e8c8a25fa66138d1ad74d48e3d82137cee5d4233e51b2cb64e536d5e35a07->enter($__internal_485e8c8a25fa66138d1ad74d48e3d82137cee5d4233e51b2cb64e536d5e35a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/utilisateur.html.twig"));

        // line 1
        echo "
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
            </li>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
    </div>
    ";
        
        $__internal_485e8c8a25fa66138d1ad74d48e3d82137cee5d4233e51b2cb64e536d5e35a07->leave($__internal_485e8c8a25fa66138d1ad74d48e3d82137cee5d4233e51b2cb64e536d5e35a07_prof);

    }

    public function getTemplateName()
    {
        return "::ModelUsed/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 1,);
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
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path ('fos_user_security_login') }}\">Se connecter</a>
            </li>
            <li>
                <a href=\"{{ path ('fos_user_registration_register') }}\">S'inscrire</a>
            </li>
        </ul>
    </div>
    ", "::ModelUsed/utilisateur.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/utilisateur.html.twig");
    }
}
