<?php

/* ::ModelUsed/utilisateurConnecter.html.twig */
class __TwigTemplate_70932cd0ef35d060e7cae24cbc69efffaefad2eafc57b0e27b49d8a30ff73951 extends Twig_Template
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
        $__internal_f7f526ab4f27a230351467ebf7f0840ce5ae80954330a606fa415ab209e1c7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f526ab4f27a230351467ebf7f0840ce5ae80954330a606fa415ab209e1c7ff->enter($__internal_f7f526ab4f27a230351467ebf7f0840ce5ae80954330a606fa415ab209e1c7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ModelUsed/utilisateurConnecter.html.twig"));

        // line 1
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Changer mot de passe</a>
            </li>
            <li>
                <a href=\"facture.php\">Mes factures</a>
            </li>
            <li>
                <a href=\"adresses.php\">Mes adresses</a>
            </li>
            <li>
                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
            </li>
        </ul>
    </div>
</div>
";
        
        $__internal_f7f526ab4f27a230351467ebf7f0840ce5ae80954330a606fa415ab209e1c7ff->leave($__internal_f7f526ab4f27a230351467ebf7f0840ce5ae80954330a606fa415ab209e1c7ff_prof);

    }

    public function getTemplateName()
    {
        return "::ModelUsed/utilisateurConnecter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 21,  41 => 12,  35 => 9,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path ('fos_user_profile_show') }}\">Mes informations</a>
            </li>
            <li>
                <a href=\"{{ path ('fos_user_profile_edit') }}\">Editer mes informations</a>
            </li>
            <li>
                <a href=\"{{ path ('fos_user_change_password') }}\">Changer mot de passe</a>
            </li>
            <li>
                <a href=\"facture.php\">Mes factures</a>
            </li>
            <li>
                <a href=\"adresses.php\">Mes adresses</a>
            </li>
            <li>
                <a href=\"{{ path ('fos_user_security_logout') }}\">deconnexion</a>
            </li>
        </ul>
    </div>
</div>
", "::ModelUsed/utilisateurConnecter.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources\\views/ModelUsed/utilisateurConnecter.html.twig");
    }
}
