<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_a7621d3c97392053ec45a4738d8597f499dc2e7f82d2c6898abcc960977a89e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df6be436d57ced59cf0b66784103f114ed3cbb86b14bebf5544be0107aad0af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6be436d57ced59cf0b66784103f114ed3cbb86b14bebf5544be0107aad0af9->enter($__internal_df6be436d57ced59cf0b66784103f114ed3cbb86b14bebf5544be0107aad0af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"index.php\">Administration</a>
                </div>
            </div>
        </div>
            
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 33
        $this->loadTemplate("::ModelUsed/navigationAdmin.html.twig", "::layout/layoutAdmin.html.twig", 33)->display($context);
        // line 34
        echo "                <div class=\"span9\">
                    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "                </div>
            </div>
        </div>

        <hr />
\t<footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
\t\t\t\t\t<p>&copy; Copyright ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - WilloTimAGroup </p>
                </div>
            </div>
\t</footer>\t
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
        
        $__internal_df6be436d57ced59cf0b66784103f114ed3cbb86b14bebf5544be0107aad0af9->leave($__internal_df6be436d57ced59cf0b66784103f114ed3cbb86b14bebf5544be0107aad0af9_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_ecf3d52527b4412b31f505bab81d14187453184c83f5468ddb9a29b4cead2b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf3d52527b4412b31f505bab81d14187453184c83f5468ddb9a29b4cead2b01->enter($__internal_ecf3d52527b4412b31f505bab81d14187453184c83f5468ddb9a29b4cead2b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Ecommerce Fruits & légumes - By DevAndClick";
        
        $__internal_ecf3d52527b4412b31f505bab81d14187453184c83f5468ddb9a29b4cead2b01->leave($__internal_ecf3d52527b4412b31f505bab81d14187453184c83f5468ddb9a29b4cead2b01_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_874068d4ea1904468f9fe61b05c4740199eb68dce42ea5ac347c32fdb7e27b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874068d4ea1904468f9fe61b05c4740199eb68dce42ea5ac347c32fdb7e27b36->enter($__internal_874068d4ea1904468f9fe61b05c4740199eb68dce42ea5ac347c32fdb7e27b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_874068d4ea1904468f9fe61b05c4740199eb68dce42ea5ac347c32fdb7e27b36->leave($__internal_874068d4ea1904468f9fe61b05c4740199eb68dce42ea5ac347c32fdb7e27b36_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_bff7dfec0668a9759a114eeef90c8b31dba6dec1b0ce3371552cb00ac13850f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff7dfec0668a9759a114eeef90c8b31dba6dec1b0ce3371552cb00ac13850f6->enter($__internal_bff7dfec0668a9759a114eeef90c8b31dba6dec1b0ce3371552cb00ac13850f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_bff7dfec0668a9759a114eeef90c8b31dba6dec1b0ce3371552cb00ac13850f6->leave($__internal_bff7dfec0668a9759a114eeef90c8b31dba6dec1b0ce3371552cb00ac13850f6_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b748fa5be70efe723b0aa6546137235cf9b01af012b6a494cb0ebb60619cc9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b748fa5be70efe723b0aa6546137235cf9b01af012b6a494cb0ebb60619cc9cd->enter($__internal_b748fa5be70efe723b0aa6546137235cf9b01af012b6a494cb0ebb60619cc9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b748fa5be70efe723b0aa6546137235cf9b01af012b6a494cb0ebb60619cc9cd->leave($__internal_b748fa5be70efe723b0aa6546137235cf9b01af012b6a494cb0ebb60619cc9cd_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_685ef08258bdb305bb42dbcee6b4f032cd32b8e375fa08ab443b772ca020004e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685ef08258bdb305bb42dbcee6b4f032cd32b8e375fa08ab443b772ca020004e->enter($__internal_685ef08258bdb305bb42dbcee6b4f032cd32b8e375fa08ab443b772ca020004e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_685ef08258bdb305bb42dbcee6b4f032cd32b8e375fa08ab443b772ca020004e->leave($__internal_685ef08258bdb305bb42dbcee6b4f032cd32b8e375fa08ab443b772ca020004e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a76c251cde7deb5aa64fa1b8f98a68fdf6749a4da7e1ef2c7c6cfbc8bd44b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a76c251cde7deb5aa64fa1b8f98a68fdf6749a4da7e1ef2c7c6cfbc8bd44b0d->enter($__internal_2a76c251cde7deb5aa64fa1b8f98a68fdf6749a4da7e1ef2c7c6cfbc8bd44b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a76c251cde7deb5aa64fa1b8f98a68fdf6749a4da7e1ef2c7c6cfbc8bd44b0d->leave($__internal_2a76c251cde7deb5aa64fa1b8f98a68fdf6749a4da7e1ef2c7c6cfbc8bd44b0d_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  189 => 35,  178 => 14,  167 => 7,  156 => 6,  144 => 5,  136 => 56,  134 => 55,  130 => 54,  125 => 52,  120 => 50,  116 => 49,  109 => 45,  98 => 36,  96 => 35,  93 => 34,  91 => 33,  69 => 15,  67 => 14,  63 => 13,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block titre %}Ecommerce Fruits & légumes - By DevAndClick{% endblock %}</title>
        <meta name=\"keywords\" content=\"{% block motsCles %}{% endblock %}\" />
        <meta name=\"description\" content=\"{% block description %}{% endblock %}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />

        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"index.php\">Administration</a>
                </div>
            </div>
        </div>
            
        <div class=\"container\">
            <div class=\"row\">
                {% include '::ModelUsed/navigationAdmin.html.twig' %}
                <div class=\"span9\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>

        <hr />
\t<footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
\t\t\t\t\t<p>&copy; Copyright {{ \"now\"|date('Y') }} - WilloTimAGroup </p>
                </div>
            </div>
\t</footer>\t
        <script src=\"{{ asset('js/jquery-1.10.0.min.js') }}\"></script>
        <script src=\"{{ asset('../js/bootstrap.js') }}\"></script>

<script src=\"{{ asset('../js/bootstrap.js') }}\"></script>

        <script src=\"{{ asset('ckeditor/ckeditor.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>", "::layout/layoutAdmin.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/layout/layoutAdmin.html.twig");
    }
}
