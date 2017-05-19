<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_6cde805b4c609adad9e16a60c63d96212d8383175f53adcd0ea7afdb6bdfe693 extends Twig_Template
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
        $__internal_de3e03f7954f15d7e549ce9a3bab383df0c02937e43a8d22faa8415d84ec72d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3e03f7954f15d7e549ce9a3bab383df0c02937e43a8d22faa8415d84ec72d3->enter($__internal_de3e03f7954f15d7e549ce9a3bab383df0c02937e43a8d22faa8415d84ec72d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        echo twig_escape_filter($this->env, ($context["adresse"] ?? $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t\t<p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 95
        echo twig_escape_filter($this->env, ($context["telephone"] ?? $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                \t <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 96
        echo twig_escape_filter($this->env, ($context["fax"] ?? $this->getContext($context, "fax")), "html", null, true);
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
        
        $__internal_de3e03f7954f15d7e549ce9a3bab383df0c02937e43a8d22faa8415d84ec72d3->leave($__internal_de3e03f7954f15d7e549ce9a3bab383df0c02937e43a8d22faa8415d84ec72d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fab9072502f9d14e19b5e0aaeb32ffe9ee94d70bf858475a301300313972837c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab9072502f9d14e19b5e0aaeb32ffe9ee94d70bf858475a301300313972837c->enter($__internal_fab9072502f9d14e19b5e0aaeb32ffe9ee94d70bf858475a301300313972837c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fab9072502f9d14e19b5e0aaeb32ffe9ee94d70bf858475a301300313972837c->leave($__internal_fab9072502f9d14e19b5e0aaeb32ffe9ee94d70bf858475a301300313972837c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5bec3651c380a2203dffe6820b387eea5a675e0075bfb5ed42112aff5a37592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bec3651c380a2203dffe6820b387eea5a675e0075bfb5ed42112aff5a37592->enter($__internal_d5bec3651c380a2203dffe6820b387eea5a675e0075bfb5ed42112aff5a37592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5bec3651c380a2203dffe6820b387eea5a675e0075bfb5ed42112aff5a37592->leave($__internal_d5bec3651c380a2203dffe6820b387eea5a675e0075bfb5ed42112aff5a37592_prof);

    }

    // line 16
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d56e4fbb044639819733f798aede6c97bbcbb3421823a084ebe535f3aaa98a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56e4fbb044639819733f798aede6c97bbcbb3421823a084ebe535f3aaa98a40->enter($__internal_d56e4fbb044639819733f798aede6c97bbcbb3421823a084ebe535f3aaa98a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "ProEcommerce Website  - By WilloTim";
        
        $__internal_d56e4fbb044639819733f798aede6c97bbcbb3421823a084ebe535f3aaa98a40->leave($__internal_d56e4fbb044639819733f798aede6c97bbcbb3421823a084ebe535f3aaa98a40_prof);

    }

    // line 17
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_dc88fe0c606bf622d2f51134b824ae29ee3ff197c57a02359fdbfc03864f698d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc88fe0c606bf622d2f51134b824ae29ee3ff197c57a02359fdbfc03864f698d->enter($__internal_dc88fe0c606bf622d2f51134b824ae29ee3ff197c57a02359fdbfc03864f698d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_dc88fe0c606bf622d2f51134b824ae29ee3ff197c57a02359fdbfc03864f698d->leave($__internal_dc88fe0c606bf622d2f51134b824ae29ee3ff197c57a02359fdbfc03864f698d_prof);

    }

    // line 18
    public function block_description($context, array $blocks = array())
    {
        $__internal_6cc525f300f6b2faa5a8f1ffdd70f6bdb3188a86daaf1d4b3b7caeaa52ad8227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc525f300f6b2faa5a8f1ffdd70f6bdb3188a86daaf1d4b3b7caeaa52ad8227->enter($__internal_6cc525f300f6b2faa5a8f1ffdd70f6bdb3188a86daaf1d4b3b7caeaa52ad8227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_6cc525f300f6b2faa5a8f1ffdd70f6bdb3188a86daaf1d4b3b7caeaa52ad8227->leave($__internal_6cc525f300f6b2faa5a8f1ffdd70f6bdb3188a86daaf1d4b3b7caeaa52ad8227_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae217a33b5de8123fe491cc62f12ab9f9185fd0311bd822b4641225059af7b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae217a33b5de8123fe491cc62f12ab9f9185fd0311bd822b4641225059af7b6c->enter($__internal_ae217a33b5de8123fe491cc62f12ab9f9185fd0311bd822b4641225059af7b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae217a33b5de8123fe491cc62f12ab9f9185fd0311bd822b4641225059af7b6c->leave($__internal_ae217a33b5de8123fe491cc62f12ab9f9185fd0311bd822b4641225059af7b6c_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28c372e5d1e221b848522a75f804828e7f9ce09d568f7f4bcb0ac6378b1c0569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c372e5d1e221b848522a75f804828e7f9ce09d568f7f4bcb0ac6378b1c0569->enter($__internal_28c372e5d1e221b848522a75f804828e7f9ce09d568f7f4bcb0ac6378b1c0569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_28c372e5d1e221b848522a75f804828e7f9ce09d568f7f4bcb0ac6378b1c0569->leave($__internal_28c372e5d1e221b848522a75f804828e7f9ce09d568f7f4bcb0ac6378b1c0569_prof);

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
", "::layout/layout.html.twig", "C:\\Symfo depar\\WebProjectWilloTimFA\\app/Resources\\views/layout/layout.html.twig");
    }
}
