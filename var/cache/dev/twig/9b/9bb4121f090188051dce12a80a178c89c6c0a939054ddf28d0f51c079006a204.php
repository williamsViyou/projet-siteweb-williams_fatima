<?php

/* @MyUserUtilisateur/Default/ModelesUsed/utilisateurs.html.twig */
class __TwigTemplate_d10416a579cd8a918fe726326dfc3d541250a8cc0d94c61cf9db516939cc5b8d extends Twig_Template
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
        $__internal_bee85783ae8abc68e72445c3c3efde2f1db1db2a3b642b94dc5221a7420ec4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee85783ae8abc68e72445c3c3efde2f1db1db2a3b642b94dc5221a7420ec4f4->enter($__internal_bee85783ae8abc68e72445c3c3efde2f1db1db2a3b642b94dc5221a7420ec4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyUserUtilisateur/Default/ModelesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"connexion.php\">Se connecter</a>
            </li>
            <li>
                <a href=\"inscription.php\">S'inscrire</a>
            </li>
        </ul>
    </div>";
        
        $__internal_bee85783ae8abc68e72445c3c3efde2f1db1db2a3b642b94dc5221a7420ec4f4->leave($__internal_bee85783ae8abc68e72445c3c3efde2f1db1db2a3b642b94dc5221a7420ec4f4_prof);

    }

    public function getTemplateName()
    {
        return "@MyUserUtilisateur/Default/ModelesUsed/utilisateurs.html.twig";
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
        return new Twig_Source("<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"connexion.php\">Se connecter</a>
            </li>
            <li>
                <a href=\"inscription.php\">S'inscrire</a>
            </li>
        </ul>
    </div>", "@MyUserUtilisateur/Default/ModelesUsed/utilisateurs.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\MyUser\\UtilisateurBundle\\Resources\\views\\Default\\ModelesUsed\\utilisateurs.html.twig");
    }
}
