<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_user_utilisateur_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateurBundle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pages' => array (  0 =>   array (    0 => 'num_page',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PageController::pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'num_page',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'about' => array (  0 =>   array (    0 => 'num_page',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PageController::pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'num_page',    ),    1 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/livraison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouteProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/addProduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'catch' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::catchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/addProduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterPlus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouteProduit2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/addProduct2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'linker' => array (  0 =>   array (    0 => 'mavar',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::linkedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mavar',    ),    1 =>     array (      0 => 'text',      1 => '/panier/linke',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'payement' => array (  0 =>   array (    0 => 'montant',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::payerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'montant',    ),    1 =>     array (      0 => 'text',      1 => '/panier/finalisation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generatePDF' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::generatePDFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/facture_pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'DFacture' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::generatePDFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/detail_facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showfacture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::showFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/all_facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'expediction' => array (  0 =>   array (    0 => 'id',    1 => 'iduser',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::expedieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduser',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/panier/all_facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraisonfin' => array (  0 =>   array (    0 => 'id',    1 => 'iduser',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonfinalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduser',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/panier/all_facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::produitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'presentation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::presentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TestController::ajouteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'testform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TestController::testFormulaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorieProduits' => array (  0 =>   array (    0 => 'idcategorie',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::categorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcategorie',    ),    1 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rechercheProduits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rechercheUnProduits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::rechercheTraitementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::acceuilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addAdresse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::newAdresseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adresse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addmodifiy_livraison_factu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::modify_adresse_livraison2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/factuLivrai_modify',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'maj_addr_livrai' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::majAddrsLivraisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/maj_adresse_livraison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sup_addr_livrai' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::delAddrsLivraisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supr_adresse_livraison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'maj_addr_factu' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::majAddrsfactuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/maj_adresse_facturation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listeCommande' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandeAdminController::commandesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commande_client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UneFacture' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandeAdminController::showFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/media/media',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/media/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produits_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produits_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produits_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produits_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produits_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}