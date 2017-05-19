<?php

/* ModelUsed/utilisateurConnecter.html.twig */
class __TwigTemplate_6ac19376b04c535a1236ddad7108850239287f0c5938b6f91d4f4da241863844 extends Twig_Template
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
        $__internal_6a67a1a308ba5d723cfa88e24ed80f952ef729eed6a3a8ffc64deb170b94bd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a67a1a308ba5d723cfa88e24ed80f952ef729eed6a3a8ffc64deb170b94bd28->enter($__internal_6a67a1a308ba5d723cfa88e24ed80f952ef729eed6a3a8ffc64deb170b94bd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModelUsed/utilisateurConnecter.html.twig"));

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
        
        $__internal_6a67a1a308ba5d723cfa88e24ed80f952ef729eed6a3a8ffc64deb170b94bd28->leave($__internal_6a67a1a308ba5d723cfa88e24ed80f952ef729eed6a3a8ffc64deb170b94bd28_prof);

    }

    public function getTemplateName()
    {
        return "ModelUsed/utilisateurConnecter.html.twig";
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
", "ModelUsed/utilisateurConnecter.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app\\Resources\\views\\ModelUsed\\utilisateurConnecter.html.twig");
    }
}
