<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/u')) {
            if (0 === strpos($pathinfo, '/user')) {
                // user_index
                if (rtrim($pathinfo, '/') === '/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_index');
                    }

                    return array (  '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_show
                if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::showAction',));
                }
                not_user_show:

                // user_new
                if ($pathinfo === '/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_edit
                if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::editAction',));
                }
                not_user_edit:

                // user_delete
                if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            // my_user_utilisateur_homepage
            if ($pathinfo === '/utilisateurBundle') {
                return array (  '_controller' => 'MyUser\\UtilisateurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_user_utilisateur_homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminpageDDDD33PCCCCCDDs_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index');
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::indexAction',  '_route' => 'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_index',);
            }
            not_adminpageDDDD33PCCCCCDDs_index:

            // adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminpageDDDD33PCCCCCDDs_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_show')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::showAction',));
            }
            not_adminpageDDDD33PCCCCCDDs_show:

            // adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_new
            if ($pathinfo === '/admin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminpageDDDD33PCCCCCDDs_new;
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::newAction',  '_route' => 'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_new',);
            }
            not_adminpageDDDD33PCCCCCDDs_new:

            // adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminpageDDDD33PCCCCCDDs_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_edit')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::editAction',));
            }
            not_adminpageDDDD33PCCCCCDDs_edit:

            // adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_adminpageDDDD33PCCCCCDDs_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpage[D[D[D[D[3~[3~P[C[C[C[C[C[D[Ds_delete')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageAdminController::deleteAction',));
            }
            not_adminpageDDDD33PCCCCCDDs_delete:

        }

        // pages
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<num_page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageController::pageAction',));
        }

        // about
        if (0 === strpos($pathinfo, '/about') && preg_match('#^/about/(?P<num_page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'about')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageController::pageAction',));
        }

        if (0 === strpos($pathinfo, '/panier')) {
            // panier
            if (rtrim($pathinfo, '/') === '/panier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'panier');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
            }

            // livraison
            if ($pathinfo === '/panier/livraison') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
            }

            // validation
            if ($pathinfo === '/panier/validation') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
            }

            // supprimer
            if (0 === strpos($pathinfo, '/panier/supprimer') && preg_match('#^/panier/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerAction',));
            }

            if (0 === strpos($pathinfo, '/panier/addProduct')) {
                // ajouter
                if (preg_match('#^/panier/addProduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouteProduitAction',));
                }

                // catch
                if (preg_match('#^/panier/addProduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'catch')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::catchAction',));
                }

                // ajouterPlus
                if (0 === strpos($pathinfo, '/panier/addProduct2') && preg_match('#^/panier/addProduct2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterPlus')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouteProduit2Action',));
                }

            }

            // linker
            if (0 === strpos($pathinfo, '/panier/linke') && preg_match('#^/panier/linke/(?P<mavar>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'linker')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::linkedAction',));
            }

            if (0 === strpos($pathinfo, '/panier/f')) {
                // payement
                if (0 === strpos($pathinfo, '/panier/finalisation') && preg_match('#^/panier/finalisation/(?P<montant>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payement')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::payerAction',));
                }

                // generatePDF
                if ($pathinfo === '/panier/facture_pdf') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::generatePDFAction',  '_route' => 'generatePDF',);
                }

            }

            // DFacture
            if (0 === strpos($pathinfo, '/panier/detail_facture') && preg_match('#^/panier/detail_facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'DFacture')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::generatePDFAction',));
            }

            if (0 === strpos($pathinfo, '/panier/all_facture')) {
                // showfacture
                if ($pathinfo === '/panier/all_facture') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::showFactureAction',  '_route' => 'showfacture',);
                }

                // expediction
                if (preg_match('#^/panier/all_facture/(?P<id>[^/]++)/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'expediction')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::expedieAction',));
                }

                // livraisonfin
                if (preg_match('#^/panier/all_facture/(?P<id>[^/]++)/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonfin')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonfinalAction',));
                }

            }

        }

        // produits
        if ($pathinfo === '/all') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::produitsAction',  '_route' => 'produits',);
        }

        // presentation
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::presentationAction',));
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TestController::ajouteAction',  '_route' => 'test',);
        }

        // testform
        if ($pathinfo === '/form1') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TestController::testFormulaireAction',  '_route' => 'testform',);
        }

        // categorieProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<idcategorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::categorieAction',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            // rechercheProduits
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::rechercheAction',  '_route' => 'rechercheProduits',);
            }

            // rechercheUnProduits
            if ($pathinfo === '/results') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::rechercheTraitementAction',  '_route' => 'rechercheUnProduits',);
            }

        }

        // acc
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acc');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::acceuilAction',  '_route' => 'acc',);
        }

        // addAdresse
        if ($pathinfo === '/adresse') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::newAdresseAction',  '_route' => 'addAdresse',);
        }

        // addmodifiy_livraison_factu
        if ($pathinfo === '/factuLivrai_modify') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::modify_adresse_livraison2Action',  '_route' => 'addmodifiy_livraison_factu',);
        }

        // maj_addr_livrai
        if (0 === strpos($pathinfo, '/maj_adresse_livraison') && preg_match('#^/maj_adresse_livraison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'maj_addr_livrai')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::majAddrsLivraisonAction',));
        }

        // sup_addr_livrai
        if (0 === strpos($pathinfo, '/supr_adresse_livraison') && preg_match('#^/supr_adresse_livraison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sup_addr_livrai')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::delAddrsLivraisonAction',));
        }

        // maj_addr_factu
        if (0 === strpos($pathinfo, '/maj_adresse_facturation') && preg_match('#^/maj_adresse_facturation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'maj_addr_factu')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::majAddrsfactuAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // listeCommande
            if ($pathinfo === '/admin/commande_client') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandeAdminController::commandesAction',  '_route' => 'listeCommande',);
            }

            // UneFacture
            if (0 === strpos($pathinfo, '/admin/facture') && preg_match('#^/admin/facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UneFacture')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandeAdminController::showFactureAction',));
            }

            if (0 === strpos($pathinfo, '/admin/media')) {
                // yes_index
                if ($pathinfo === '/admin/media/media') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_yes_index;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::indexAction',  '_route' => 'yes_index',);
                }
                not_yes_index:

                // yes_show
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_yes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::showAction',));
                }
                not_yes_show:

                // yes_new
                if ($pathinfo === '/admin/media/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_yes_new;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::newAction',  '_route' => 'yes_new',);
                }
                not_yes_new:

                // yes_edit
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_yes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::editAction',));
                }
                not_yes_edit:

                // yes_delete
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_yes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\mediaController::deleteAction',));
                }
                not_yes_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categorie')) {
                // categorie_index
                if (rtrim($pathinfo, '/') === '/admin/categorie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorie_index');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::indexAction',  '_route' => 'categorie_index',);
                }
                not_categorie_index:

                // categorie_show
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::showAction',));
                }
                not_categorie_show:

                // categorie_new
                if ($pathinfo === '/admin/categorie/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_new;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::newAction',  '_route' => 'categorie_new',);
                }
                not_categorie_new:

                // categorie_edit
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::editAction',));
                }
                not_categorie_edit:

                // categorie_delete
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategorieAdminController::deleteAction',));
                }
                not_categorie_delete:

            }

            if (0 === strpos($pathinfo, '/admin/produits')) {
                // produits_index
                if (rtrim($pathinfo, '/') === '/admin/produits') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produits_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'produits_index');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::indexAction',  '_route' => 'produits_index',);
                }
                not_produits_index:

                // produits_show
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produits_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produits_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::showAction',));
                }
                not_produits_show:

                // produits_new
                if ($pathinfo === '/admin/produits/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_produits_new;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::newAction',  '_route' => 'produits_new',);
                }
                not_produits_new:

                // produits_edit
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_produits_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produits_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::editAction',));
                }
                not_produits_edit:

                // produits_delete
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_produits_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produits_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::deleteAction',));
                }
                not_produits_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
