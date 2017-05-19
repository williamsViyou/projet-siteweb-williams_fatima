<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_cd5220fe5260dacb9d87c35aba1f43f6f92fd5fa98a1e9c81a22e7a3f62638fd extends Twig_Template
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
        $__internal_ba383e7d2ad68d8d63c1320ecdb8e7d9f31054af0d80142c8ff7f7616927b27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba383e7d2ad68d8d63c1320ecdb8e7d9f31054af0d80142c8ff7f7616927b27f->enter($__internal_ba383e7d2ad68d8d63c1320ecdb8e7d9f31054af0d80142c8ff7f7616927b27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        
        $__internal_ba383e7d2ad68d8d63c1320ecdb8e7d9f31054af0d80142c8ff7f7616927b27f->leave($__internal_ba383e7d2ad68d8d63c1320ecdb8e7d9f31054af0d80142c8ff7f7616927b27f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c74821f0109103588da48f656829f8c52988d019eba437b28b2b8d61e709e982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74821f0109103588da48f656829f8c52988d019eba437b28b2b8d61e709e982->enter($__internal_c74821f0109103588da48f656829f8c52988d019eba437b28b2b8d61e709e982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c74821f0109103588da48f656829f8c52988d019eba437b28b2b8d61e709e982->leave($__internal_c74821f0109103588da48f656829f8c52988d019eba437b28b2b8d61e709e982_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44840a9bc40aaf896da814c8f6717801dab742e0eac3893a819ddbfa494263d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44840a9bc40aaf896da814c8f6717801dab742e0eac3893a819ddbfa494263d1->enter($__internal_44840a9bc40aaf896da814c8f6717801dab742e0eac3893a819ddbfa494263d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_44840a9bc40aaf896da814c8f6717801dab742e0eac3893a819ddbfa494263d1->leave($__internal_44840a9bc40aaf896da814c8f6717801dab742e0eac3893a819ddbfa494263d1_prof);

    }

    // line 16
    public function block_titre($context, array $blocks = array())
    {
        $__internal_f7e108c1791efa0248312260691e0721abbe9a3d26d783443dc0a6025e6948c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e108c1791efa0248312260691e0721abbe9a3d26d783443dc0a6025e6948c3->enter($__internal_f7e108c1791efa0248312260691e0721abbe9a3d26d783443dc0a6025e6948c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "ProEcommerce Website  - By WilloTimAGroup";
        
        $__internal_f7e108c1791efa0248312260691e0721abbe9a3d26d783443dc0a6025e6948c3->leave($__internal_f7e108c1791efa0248312260691e0721abbe9a3d26d783443dc0a6025e6948c3_prof);

    }

    // line 17
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_1f0f4dc19b06cfc963e7b096745271a29cd90b403b91ee5c04452c000cc2e73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0f4dc19b06cfc963e7b096745271a29cd90b403b91ee5c04452c000cc2e73a->enter($__internal_1f0f4dc19b06cfc963e7b096745271a29cd90b403b91ee5c04452c000cc2e73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_1f0f4dc19b06cfc963e7b096745271a29cd90b403b91ee5c04452c000cc2e73a->leave($__internal_1f0f4dc19b06cfc963e7b096745271a29cd90b403b91ee5c04452c000cc2e73a_prof);

    }

    // line 18
    public function block_description($context, array $blocks = array())
    {
        $__internal_220659d8efa9d294c7eb83e1c3feece3ab92be418b0698b424943fc6a9ccddfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220659d8efa9d294c7eb83e1c3feece3ab92be418b0698b424943fc6a9ccddfe->enter($__internal_220659d8efa9d294c7eb83e1c3feece3ab92be418b0698b424943fc6a9ccddfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_220659d8efa9d294c7eb83e1c3feece3ab92be418b0698b424943fc6a9ccddfe->leave($__internal_220659d8efa9d294c7eb83e1c3feece3ab92be418b0698b424943fc6a9ccddfe_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2d398e4192c6a624c6d50f917ca755c53e0f463bdf873797ccbb4c6ddc5b0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d398e4192c6a624c6d50f917ca755c53e0f463bdf873797ccbb4c6ddc5b0e4->enter($__internal_c2d398e4192c6a624c6d50f917ca755c53e0f463bdf873797ccbb4c6ddc5b0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2d398e4192c6a624c6d50f917ca755c53e0f463bdf873797ccbb4c6ddc5b0e4->leave($__internal_c2d398e4192c6a624c6d50f917ca755c53e0f463bdf873797ccbb4c6ddc5b0e4_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c51329feaeb590db08e36a12ea744c7ce711a00e50402854888fa26fe055750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c51329feaeb590db08e36a12ea744c7ce711a00e50402854888fa26fe055750->enter($__internal_4c51329feaeb590db08e36a12ea744c7ce711a00e50402854888fa26fe055750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c51329feaeb590db08e36a12ea744c7ce711a00e50402854888fa26fe055750->leave($__internal_4c51329feaeb590db08e36a12ea744c7ce711a00e50402854888fa26fe055750_prof);

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


        <title>{% block titre %}ProEcommerce Website  - By WilloTimAGroup{% endblock %}</title>
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
