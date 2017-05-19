<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_747649ea9b69b263e84e5a5d9564100f614300285c6dd1facf5f46d17e692a96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd67ab6f5a5e33939b44198c7a76ddb38f770a3da0698d403c9d090efd002748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd67ab6f5a5e33939b44198c7a76ddb38f770a3da0698d403c9d090efd002748->enter($__internal_cd67ab6f5a5e33939b44198c7a76ddb38f770a3da0698d403c9d090efd002748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <title>ProEcommerce Website </title>

\t <meta charset=\"UTF-8\" />


        <title>";
        // line 16
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 17
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 18
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
       

\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />


<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">ProEcommerce Website</a>
            <div class=\"nav-collapse collapse\">

\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceEcommerceBundle:Produit:recherche"));
        echo "
                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheUnProduits");
        echo "\" class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"search_query\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>















        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    












    
\t<footer id=\"footer\" class=\"vspace20\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4 offset1\">
\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t<ul class=\"nav nav-stacked\">
\t\t\t
\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PagesPagesBundle:Page:menu"));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div> 

\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<h4>Notre entrepôt</h4>
\t\t\t   <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t\t<p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                \t <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<p>&copy; Copyright ";
        // line 102
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - WilloTimAGroup </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>\t

        ";
        // line 108
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "    
\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"> </script>
\t<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
    </body> 
</html>
";
        
        $__internal_cd67ab6f5a5e33939b44198c7a76ddb38f770a3da0698d403c9d090efd002748->leave($__internal_cd67ab6f5a5e33939b44198c7a76ddb38f770a3da0698d403c9d090efd002748_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b7fe431071167fe0e35ccf63c6829f1111308007596266e712400efa1c7a1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7fe431071167fe0e35ccf63c6829f1111308007596266e712400efa1c7a1dc->enter($__internal_9b7fe431071167fe0e35ccf63c6829f1111308007596266e712400efa1c7a1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b7fe431071167fe0e35ccf63c6829f1111308007596266e712400efa1c7a1dc->leave($__internal_9b7fe431071167fe0e35ccf63c6829f1111308007596266e712400efa1c7a1dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_793e930412fd21f3029da4a7355f9875749a0f528e6cca847141d2410b8adefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793e930412fd21f3029da4a7355f9875749a0f528e6cca847141d2410b8adefe->enter($__internal_793e930412fd21f3029da4a7355f9875749a0f528e6cca847141d2410b8adefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_793e930412fd21f3029da4a7355f9875749a0f528e6cca847141d2410b8adefe->leave($__internal_793e930412fd21f3029da4a7355f9875749a0f528e6cca847141d2410b8adefe_prof);

    }

    // line 16
    public function block_titre($context, array $blocks = array())
    {
        $__internal_3f49bbf4b22c1edfdfe9a5d34624327036a5a03dc68d0f5c08843ea65e281ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f49bbf4b22c1edfdfe9a5d34624327036a5a03dc68d0f5c08843ea65e281ce6->enter($__internal_3f49bbf4b22c1edfdfe9a5d34624327036a5a03dc68d0f5c08843ea65e281ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "ProEcommerce Website  - By WilloTim";
        
        $__internal_3f49bbf4b22c1edfdfe9a5d34624327036a5a03dc68d0f5c08843ea65e281ce6->leave($__internal_3f49bbf4b22c1edfdfe9a5d34624327036a5a03dc68d0f5c08843ea65e281ce6_prof);

    }

    // line 17
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_4031ec290c2547e32b4f62133951537fb14036423b5429e5ee417d76d38c7475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4031ec290c2547e32b4f62133951537fb14036423b5429e5ee417d76d38c7475->enter($__internal_4031ec290c2547e32b4f62133951537fb14036423b5429e5ee417d76d38c7475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_4031ec290c2547e32b4f62133951537fb14036423b5429e5ee417d76d38c7475->leave($__internal_4031ec290c2547e32b4f62133951537fb14036423b5429e5ee417d76d38c7475_prof);

    }

    // line 18
    public function block_description($context, array $blocks = array())
    {
        $__internal_597b665f8b7293d4c3494002e6aab400c187bf9fc6b39688a838ae0c06ccbdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597b665f8b7293d4c3494002e6aab400c187bf9fc6b39688a838ae0c06ccbdea->enter($__internal_597b665f8b7293d4c3494002e6aab400c187bf9fc6b39688a838ae0c06ccbdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_597b665f8b7293d4c3494002e6aab400c187bf9fc6b39688a838ae0c06ccbdea->leave($__internal_597b665f8b7293d4c3494002e6aab400c187bf9fc6b39688a838ae0c06ccbdea_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e249f90d96de9139112aaa8a6555e395888ebfb3a498a1c689ef4357df2cd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e249f90d96de9139112aaa8a6555e395888ebfb3a498a1c689ef4357df2cd52->enter($__internal_9e249f90d96de9139112aaa8a6555e395888ebfb3a498a1c689ef4357df2cd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e249f90d96de9139112aaa8a6555e395888ebfb3a498a1c689ef4357df2cd52->leave($__internal_9e249f90d96de9139112aaa8a6555e395888ebfb3a498a1c689ef4357df2cd52_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a08367fc1ead93abe4719919dd13b7d0495e3debebd5611bd37870efc52f6400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08367fc1ead93abe4719919dd13b7d0495e3debebd5611bd37870efc52f6400->enter($__internal_a08367fc1ead93abe4719919dd13b7d0495e3debebd5611bd37870efc52f6400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a08367fc1ead93abe4719919dd13b7d0495e3debebd5611bd37870efc52f6400->leave($__internal_a08367fc1ead93abe4719919dd13b7d0495e3debebd5611bd37870efc52f6400_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 108,  271 => 62,  260 => 18,  249 => 17,  237 => 16,  226 => 6,  214 => 5,  203 => 111,  199 => 110,  196 => 109,  194 => 108,  185 => 102,  176 => 96,  172 => 95,  164 => 90,  155 => 84,  132 => 63,  130 => 62,  104 => 39,  100 => 38,  94 => 35,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  62 => 18,  58 => 17,  54 => 16,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

    <title>ProEcommerce Website </title>

\t <meta charset=\"UTF-8\" />


        <title>{% block titre %}ProEcommerce Website  - By WilloTim{% endblock %}</title>
        <meta name=\"keywords\" content=\"{% block motsCles %}{% endblock %}\" />
        <meta name=\"description\" content=\"{% block description %}{% endblock %}\" />
       

\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
\t<link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />


<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"{{ path ('produits') }}\">ProEcommerce Website</a>
            <div class=\"nav-collapse collapse\">

\t\t\t\t\t{{ render (controller('EcommerceEcommerceBundle:Produit:recherche')) }}
                <form action=\"{{ path ('rechercheUnProduits') }}\" class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"search_query\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>















        {% block body %}{% endblock %}
    












    
\t<footer id=\"footer\" class=\"vspace20\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4 offset1\">
\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t<ul class=\"nav nav-stacked\">
\t\t\t
\t\t\t\t\t\t\t{{ render (controller('PagesPagesBundle:Page:menu')) }}
\t\t\t\t\t</ul>
\t\t\t\t</div> 

\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<h4>Notre entrepôt</h4>
\t\t\t   <p><i class=\"icon-map-marker\"></i>&nbsp;{{ adresse }}</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t\t<p><i class=\"icon-phone\"></i>&nbsp;Tel: {{ telephone }}</p>
                \t <p><i class=\"icon-print\"></i>&nbsp;Fax: {{ fax }}</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<p>&copy; Copyright {{ \"now\"|date('Y') }} - WilloTimAGroup </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>\t

        {% block javascripts %}{% endblock %}
    
\t<script src=\"{{ asset('js/jquery-1.10.0.min.js') }}\"> </script>
\t<script src=\"{{ asset('js/bootstrap.js') }}\"> </script>
    </body> 
</html>
", "::layout/layout.html.twig", "C:\\Users\\hp\\Documents\\WebProjectWilloTimFA\\app/Resources\\views/layout/layout.html.twig");
    }
}
