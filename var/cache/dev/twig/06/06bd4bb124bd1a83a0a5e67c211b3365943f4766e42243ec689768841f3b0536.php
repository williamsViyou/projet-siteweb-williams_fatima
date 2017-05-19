<?php

/* MyUserUtilisateurBundle:Default/ModelesUsed:utilisateurs.html.twig */
class __TwigTemplate_3b7c3abf7ff45a106d1ae76da7ad0a96355451b92a4f600f50c6e3c426aa1df9 extends Twig_Template
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
        $__internal_44aad840d701116cc37696d1eacf3047efa3ab7c8edac880456320d4a21caccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44aad840d701116cc37696d1eacf3047efa3ab7c8edac880456320d4a21caccf->enter($__internal_44aad840d701116cc37696d1eacf3047efa3ab7c8edac880456320d4a21caccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyUserUtilisateurBundle:Default/ModelesUsed:utilisateurs.html.twig"));

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
        
        $__internal_44aad840d701116cc37696d1eacf3047efa3ab7c8edac880456320d4a21caccf->leave($__internal_44aad840d701116cc37696d1eacf3047efa3ab7c8edac880456320d4a21caccf_prof);

    }

    public function getTemplateName()
    {
        return "MyUserUtilisateurBundle:Default/ModelesUsed:utilisateurs.html.twig";
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
    </div>", "MyUserUtilisateurBundle:Default/ModelesUsed:utilisateurs.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\src\\MyUser\\UtilisateurBundle/Resources/views/Default/ModelesUsed/utilisateurs.html.twig");
    }
}
