<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecommerce\EcommerceBundle\Form\RechercheRType;

 use Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension ;


class ProduitController extends Controller
{
      public function produitsAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $findproduits = $em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();
        $medias= $em->getRepository('EcommerceEcommerceBundle:media')->findAll();
        $tva=$em->getRepository('EcommerceEcommerceBundle:Tva')->findAll();

        $x = array  ("produits" => $produits , "medias" => $medias, "Tva" => $tva );

        $produits  = $this->get('knp_paginator')->paginate($findproduits,$this->get('request')->query->get('page', 1),3);
       
        return $this->render('EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig', $x);
    }
        
  /*   public function presentationAction()
    {
        return $this->render('EcommerceEcommerceBundle:Default:Produits/layout/presentation.html.twig');
    }
    */
 public function categorieAction($idcategorie)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie($idcategorie);
        $categorie = $em->getRepository('EcommerceEcommerceBundle:Categorie')->find($idcategorie);
        if (!$categorie) throw $this->createNotFoundException('La page n\'existe pas.');
        
        $medias= $em->getRepository('EcommerceEcommerceBundle:media')->findAll();

         $tva=$em->getRepository('EcommerceEcommerceBundle:Tva')->findAll();
        $x = array  ("produits" => $produits , "medias" => $medias , "Tva" => $tva );
      
        return $this->render('EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig', $x);
    }

        public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
        $medias= $em->getRepository('EcommerceEcommerceBundle:media')->findAll();
        $categories= $em->getRepository('EcommerceEcommerceBundle:Categorie')->findAll();

        $produitalpha = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
        if (!$produitalpha) throw $this->createNotFoundException('La page n\'existe pas.');
        
        $tva=$em->getRepository('EcommerceEcommerceBundle:Tva')->findAll();

        $x = array  ("produit" => $produit , "medias" => $medias, "categories" => $categories, "Tva" => $tva );
      
        return $this->render('EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig',$x);
    }






     public function rechercheAction() 
    {    

$x = new RechercheRType();
               
        $form = $this->createForm(  'Symfony\Component\Form\Extension\Core\Type\FormType', new RechercheRType());
       
        return $this->render('EcommerceEcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView(), "label" => false,
                                                'attr' => array('class' => 'input-medium search-query')));
    }
    
    public function rechercheTraitementAction() 
    {
       // $form = $this->createForm(new RechercheType());
        
          $em = $this->getDoctrine()->getManager();
         $produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->recherche($_GET['search_query']);
          $medias= $em->getRepository('EcommerceEcommerceBundle:media')->findAll();
 //     echo($_GET['search_query']);


         $x = array  ("produits" => $produits , "medias" => $medias );

   //         var_dump($_GET);
    //        var_dump($produits);
       
       
        
        return $this->render('EcommerceEcommerceBundle:Default:Produits/layout/produit.html.twig', $x);
  }
}
