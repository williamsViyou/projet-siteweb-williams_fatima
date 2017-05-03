<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

use Ecommerce\EcommerceBundle\Using\Linker\Mesure ;
use MyUser\UtilisateurBundle\Repository\ UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Query\ResultSetMapping;
 

class PanierController extends Controller 
{
/*
public function isPresent($tab, $id)
{
   // for($i = 0; $i<)
    {
        if($tab)



    }
}
*/
/*

Attempted to call an undefined method named "get" of class "MyUser\UtilisateurBundle\Entity\User".
Did you mean to call e.g. "getAdresse", "getCommande", "getConfirmationToken", "getEmail", "getEmailCanonical",
7 "getGroupNames", "getGroups", "getId", "getLastLogin", "getPanier", "getPassword", "getPasswordRequestedAt", 
"getPlainPassword", "getRoles", "getSalt", "getUsername" or "getUsernameCanonical"?


setConfirmationToken", "setEmail", "setEmailCanonical", "setEnabled", "setLastLogin", "setPanier", "setPassword", 
"setPasswordRequestedAt", "setPlainPassword", "setRoles", "setSalt", "setSuperAdmin", "setUsername" or "setUsernameCanonical"?
*/



  public function ajouteProduit2Action($id, $quantity = 1, $x = false )
    {
        
             if( (isset($_GET['qte']) && (empty($_GET)==false) ) )
             {
             $produit = intval($id);
             $q = intval($_GET['qte']);
           
             }
return $this ->  ajouteProduitAction($produit, $q);
    }
    
       public function ajouteProduitAction($id, $quantity = 1, $x = false )
    {
             //var_dump( $quantity );
             //die();
        

        if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {
             var_dump($this->getUser()->getId());  
        $user = $this->getUser()->getId();
        $user_panier = $this->monPanier2($user);
        $length = count($user_panier);
       
        if(empty($user_panier))
        {
            
       
              $this->insert_Produi_in_Panier($quantity,$user, $id);
                               
                $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
            
        }
        
        else{              
  
                for($i = 0; $i < $length ; $i++)
                    {      
                        $index = (intval($user_panier[$i]['id_produit'])) ;

                        $y=$i;
                       // var_dump($index == intval($id));            
                        if(($index === intval($id)));
                        {
                         //   var_dump($i); var_dump(intval($user_panier[$i]['id_produit']));
         
                          if(($index === intval($id)) && ($x == false) ) $x = true ;

                $this->miseAjourPanierProdui($quantity,$user, $id);
                     
                         $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
             
                        }
  

                    }

                   
                    if($x == false)
                    {
  
             $a= $this->insert_Produi_in_Panier($quantity,$user, $id);

                    $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
                      $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
     

             
                    }


        }     
                        
            }


/*Did you mean to call e.g. "fetchAll", "fetchArray", "fetchAssoc" or "fetchColumn"?*/
/**/
       // $em = $this->getDoctrine()->getManager();
        //        $user_bd = $em->getRepository('MyUserUtilisateurBundle:User')->find(6);
        //$user_panier_final = $this->getUser()->getPanier();



/*Attempted to call an undefined method named "execute" of class "Doctrine\DBAL\Connection".
Did you mean to call e.g. "executeCacheQuery", "executeQuery" or "executeUpdate"?*/

/*$user_database = $this->getUserQuery($user);
$po = $this->UpdateUser_Panier_Query($user, $user_panier);
//$p = $this->f($user_panier, $user);
$p = $this->f1(1);*/
           

                var_dump( $this->monPanier2($user) );      
    return $this->redirect($this->generateUrl('panier'));  
}





public function supprimerAction($id)
    {


        if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {

                 var_dump($this->getUser()->getId());  
        $user = $this->getUser()->getId();
        if ($user != null)
        {
            $this->delete_Produi_in_Panier($id);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }
        else
        {
            echo('Cette action nécessite une connextion à un compte utilisateur') ;

        }
        }
        return $this->redirect($this->generateUrl('panier')); 
    }
    







public function monPanier2($user)
{
    

$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ');

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring = 'SELECT DISTINCT p.id, p.quantite, p.id_produit, p.id_user FROM panier_user p , user u WHERE p.id_user = ' ; 
$z = $user." ";
$myquerystring=$myquerystring.$z;

$user_database = $conn ->fetchAll($myquerystring);

return $user_database;



}


public function miseAjourPanierProdui($quantity,$iduser, $produit)
{
  
$conn = $this->get('database_connection');
  
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//$sql = "INSERT INTO `panier`(`id`, `contenu`) VALUES (?,?)";
//$sql = "UPDATE `panier` SET `contenu`= ? WHERE id = ?";
$sql = "UPDATE `panier_user`  SET `quantite`= ? WHERE id_user = ? and id_produit = ?";
 
//$xx = array(); 
$params = array($quantity, $iduser, $produit);

$stmt = $conn->executeUpdate( $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
return $stmt;

}

public function insert_Produi_in_Panier($quantity,$iduser, $produit)
{
  
$conn = $this->get('database_connection');
  
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//$sql = "INSERT INTO `panier`(`id`, `contenu`) VALUES (?,?)";
//$sql = "UPDATE `panier` SET `contenu`= ? WHERE id = ?";
$sql = "INSERT INTO `panier_user` (`id`, `id_user`, `quantite`, `id_produit`) VALUES (NULL, ?, ?, ?)";
//$xx = array(); 
$params = array ($iduser, $quantity, $produit);

$stmt = $conn->executeUpdate( $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
return $stmt;

}


public function delete_Produi_in_Panier($id_panier)
{
  
$conn = $this->get('database_connection');
  
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//$sql = "INSERT INTO `panier`(`id`, `contenu`) VALUES (?,?)";
//$sql = "UPDATE `panier` SET `contenu`= ? WHERE id = ?";
$sql = "DELETE FROM `panier_user` WHERE id = ?";
//$xx = array(); 
$params = array ($id_panier);

$stmt = $conn->executeUpdate( $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
return $stmt;

}

public function UpdateUser_Panier_Query($user, $panier_new)
{
    //UPDATE `user` SET `username`= 'tata' WHERE id = 6 ;

/*

UPDATE `user` SET `username`= tata,`username_canonical`=[value-3],`email`=[value-4],
`email_canonical`=[value-5],`enabled`=[value-6],`salt`=[value-7],`password`=[value-8],
`last_login`=[value-9],`confirmation_token`=[value-10],`password_requested_at`=[value-11],
`roles`=[value-12],`panier`=[value-13] WHERE 1
/**

*/
$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ')

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring_1 = 'UPDATE `user` SET `panier`' ; 
$z_1 = " ";
$myquerystring_1=$myquerystring_1.$z_1;

$myquerystring_2 = 'WHERE id = ';
$z_2 = $user." ";
$myquerystring_2=$myquerystring_2.$z_2;

$myquerystring_final = $myquerystring_1.$myquerystring_2;

//$user_database = $conn ->fetchAll($myquerystring);

return $myquerystring_final;



}








 //https://github.com/symfony/symfony/blob/master/UPGRADE-3.0.md







    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

 public function pre_livraisonAction($id1, $id2)
    {  if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {

            
                    
        $a=$this->all_adresse($this->getUser()->getId());
        $x = array  ("adr" => $a);
        return $this->render('EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig', $x);
    }}




    public function livraisonAction()
    
    {
        
          if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {

            
                  
        $a=$this->all_adresse($this->getUser()->getId());
        $x = array  ("adr" => $a);
        return $this->render('EcommerceEcommerceBundle:Default:Panier/layout/livraison.html.twig', $x);
    }}
    
    public function validationAction()

    {
          if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {
             $em = $this->getDoctrine()->getManager();
             $user = $this->getUser()->getId();
             $produits = $this->requete1($user);
             $user_panier = $this->monPanier2($user); 
             $livraison = $this->livraison($user);
             $facturation = $this->facturation($user);;
             $tva=$em->getRepository('EcommerceEcommerceBundle:Tva')->findAll();
             $x = array('id_user' => $user,
                        'produits' => $produits,
                        'panier' => $user_panier,
                        'livraison' => $livraison,
                        'facturation' => $facturation,
                        'tva' => $tva) ;
            var_dump($produits);
             
        return $this->render('EcommerceEcommerceBundle:Default:Panier/layout/validation.html.twig', $x );
    }}
    

    public function panierAction()
    {
       
        if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {

        $user = $this->getUser()->getId();
        $user_panier = $this->monPanier2($user); 
        
        $em = $this->getDoctrine()->getManager();
        $produits = $this->requete1($user);
       
        $medias= $em->getRepository('EcommerceEcommerceBundle:media')->findAll();
        $tva=$em->getRepository('EcommerceEcommerceBundle:Tva')->findAll();
       

        $x = array  ("produits" => $produits , "tva" => $tva, "panier" => $user_panier );
     //   var_dump($user_panier);
       // echo("////////////////////////////////////////////////////////////////////////////////////////////////////////////////////");
                 var_dump($user_panier);
       // var_dump($this->user_produi_inPanier($user_panier));
    //    $my_product = $this->user_produi_inPanier($user_panier);
        
        return $this->render('EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig',$x);
        }
    }
    

public function requete1($id_element)
{

$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ')

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring_1 = ' SELECT * FROM produits u, panier_user p WHERE p.id_produit = u.id and p.id_user =' ; 
$z_1 = " ".$id_element;
$myquerystring_1=$myquerystring_1.$z_1;

$produit_database = $conn ->fetchAll($myquerystring_1);

return $produit_database;



}
    public function user_produi_inPanier($panier)
    {

        $result = array();
        $length = count($panier);
        for( $i = 0; $i < $length; $i++)
        {
            $result[] = $this->requete1($panier[$i]["id_produit"]);
        }
        return $result ;
    }


public function panier_to_produit($id_element)
{
    
$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ')

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring_1 = 'SELECT * FROM `produits` WHERE id = ' ; 
$z_1 = " ".$id_element;
$myquerystring_1=$myquerystring_1.$z_1;

$produit_database = $conn ->fetchAll($myquerystring_1);

return $produit_database;


}
    public function  newAdresseAction()
{
    $x1 = $_POST['nom'];
    
    $x2 = $_POST['prenom'];
    
    $x3 = $_POST['addresse'];
    
    $x4 = $_POST['complement'];
    
    $x5 = $_POST['ville'];
    
    $x6 = intval($_POST['cp']);

    $x7 = intval($_POST['tel']);
   
    $x8 = $_POST['pays'];

if((is_integer($x7) && (is_integer($x6)) ))
{
$user = $this->getUser()->getId();
$user_panier = $this->monPanier2($user);
$result = $this->add_new_adresse($x1, $x2,$user, $x3, $x4, $x5, $x8, $x6, $x7);

$a=$this->all_adresse($user);
$x = array  ("adr" => $a);
 return $this->redirect($this->generateUrl('livraison')); 
//return $this->render('EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig',$x);
}


}















public function all_adresse($iduser)
{
$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ')

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring_1 = 'SELECT * FROM `utilisateur_adresse` WHERE id_User = ' ; 
$z_1 = " ".$iduser;
$myquerystring_1=$myquerystring_1.$z_1;

$adr_database = $conn ->fetchAll($myquerystring_1);

return $adr_database;
}





public function add_new_adresse($nom, $prenom, $u, $adrs, $com, $vil, $pa, $cp, $tel)
{
  
$conn = $this->get('database_connection');
  
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//$sql = "INSERT INTO `panier`(`id`, `contenu`) VALUES (?,?)";
//$sql = "UPDATE `panier` SET `contenu`= ? WHERE id = ?";
$sql = "INSERT INTO `utilisateur_adresse`( `nom`, `prenom`, `id_User`, `Adresse`, `Complement`, `Ville`, `Pays`, `CodePostal`, `Tel`) values (?, ?, ?, ?, ?, ?,?, ?, ?)";
//$xx = array(); 
$params = array ($nom, $prenom, $u, $adrs, $com, $vil, $pa, $cp, $tel);

$stmt = $conn->executeUpdate( $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
return $stmt;

}

public function modify_adresse_livraisonAction( $id1, $id2)
{
    $iduser = $this->getUser()->getId();
  die();
$conn = $this->get('database_connection');
  
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//$sql = "INSERT INTO `panier`(`id`, `contenu`) VALUES (?,?)";
//$sql = "UPDATE `panier` SET `contenu`= ? WHERE id = ?";
$sql = "UPDATE `utilisateur_adresse` SET `facturation` = '0' WHERE id_User = ?";
$sqll = "UPDATE `utilisateur_adresse` SET `livraison` = '0' WHERE id_User = ?";

//$xx = array(); 
$params = array ($iduser);

$paramss = array ($iduser);

$stmt = $conn->executeUpdate( $sql, $params);

$stmtt = $conn->executeUpdate( $sqll, $paramss);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
if( $stmtt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql1 = "UPDATE `utilisateur_adresse` SET `facturation` = '1' WHERE id_User = ? and id = ?";
$sql2 = "UPDATE `utilisateur_adresse` SET `livraison` = '1' WHERE id_User = ? and id = ?" ;

//$xx = array(); 
$param1 = array ($iduser, $id1);

$param2 = array ($iduser, $id2);

$stmt1 = $conn->executeUpdate( $sql1, $param1);

$stmt2 = $conn->executeUpdate( $sql2, $param2);


return ($stmt1 && $stmt2);

}
public function livraison($iduser)
{
    
$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ')

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring_1 = 'SELECT * FROM `utilisateur_adresse` WHERE livraison = 1 and id_User =' ; 
$z_1 = " ".$iduser;
$myquerystring_1=$myquerystring_1.$z_1;

$adr_database = $conn ->fetchAll($myquerystring_1);

return $adr_database;
}



public function facturation( $iduser)
{
    
$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ')

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring_1 = "SELECT * FROM `utilisateur_adresse` WHERE facturation = 1 and id_User ="; 
$z_1 = " ".$iduser;
$myquerystring_1=$myquerystring_1.$z_1;

$adr_database = $conn ->fetchAll($myquerystring_1);

return $adr_database;

}

public function newfacture($iduser, $prix)
{
     
$conn = $this->get('database_connection');
  
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//$sql = "INSERT INTO `panier`(`id`, `contenu`) VALUES (?,?)";
//$sql = "UPDATE `panier` SET `contenu`= ? WHERE id = ?";
$sql = "INSERT INTO `facture`( `idUser`, `PrixFacture`) VALUES (?,?) ";
//$xx = array(); 
$params = array ($iduser, $prix);

$stmt = $conn->executeUpdate( $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
return $stmt;
}


public function allfacture($iduser)
{
    
$conn = $this->get('database_connection');

// $conn ->prepare('SELECT * FROM user u WHERE u.id = ? ')

// $user_database[0]['panier'] = $user_panier_final ;

$myquerystring_1 = 'SELECT * FROM `facture` WHERE idUser =' ; 
$z_1 = " ".$iduser;
$myquerystring_1=$myquerystring_1.$z_1;

$adr_database = $conn ->fetchAll($myquerystring_1);

return $adr_database;

}

public function payerAction($montant)
{
   if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {
             $user = $this->getUser()->getId();
            
             $em = $this->getDoctrine()->getManager();
             $produits = $this->requete1($user);
             $user_panier = $this->monPanier2($user); 
             $livraison = $this->livraison($user);
             $facturation = $this->facturation($user);;
             $tva=$em->getRepository('EcommerceEcommerceBundle:Tva')->findAll();
             $this->newfacture($user, $montant);
             $factures=$this->allfacture($user);
             $x = array('id_user' => $user,
                        'produits' => $produits,
                        'panier' => $user_panier,
                        'livraison' => $livraison,
                        'facturation' => $facturation,
                        'tva' => $tva,
                        'factures' => $factures
                        ) ;
            
  ;
             
        return $this->render('EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig', $x );
    }}



public function generatePDFAction()
{
   if($this->getUser() == null)
        {
         $this->get('session')->getFlashBag()->add('notification','Vous devez vous identifier. ');
      return $this->redirect($this->generateUrl('fos_user_security_login'));   
     //  return $this->new RedirectResponse($this->router->generate('fos_user_security_login')));  
        }
        else
        {
             $user = $this->getUser()->getId();
            
             $em = $this->getDoctrine()->getManager();
             $produits = $this->requete1($user);
             $user_panier = $this->monPanier2($user); 
             $livraison = $this->livraison($user);
             $facturation = $this->facturation($user);;
             $tva=$em->getRepository('EcommerceEcommerceBundle:Tva')->findAll();
           //  $this->newfacture($user, $montant);
             $factures=$this->allfacture($user);
             $x = array('id_user' => $user,
                        'produits' => $produits,
                        'panier' => $user_panier,
                        'livraison' => $livraison,
                        'facturation' => $facturation,
                        'tva' => $tva,
                        'factures' => $factures
                        ) ;
            
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig', $x);
         
        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
 
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
 
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
         $html2pdf->pdf->Output('Facture.pdf');
        $html2pdf->pdf->SetAuthor('WilloTim');
         $html2pdf->pdf->SetTitle('Facture N° XYZ');
         $html2pdf->pdf->SetAuthor('WilloTim');
        $html2pdf->pdf->SetSubject('Facture WilloTim');
         $html2pdf->pdf->SetKeywords('facture, devandclik' );
          $html2pdf->Output('Facture.pdf');
        
        $response = new Response();
        $response->headers->set('Content-type', 'application/pdf');

       // return $this->render('EcommerceEcommerceBundle:Default:Panier/layout/facture.html.twig', $x );
    }}




































}
