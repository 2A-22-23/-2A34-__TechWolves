<?php
include '../Controller/modeleC.php';
include '../Controller/livreurC.php';
include '../Controller/mail.php';
include '../vendor/autoload.php';

$livraisonC=new livraisonsC();
$livreurC=new livreursC();

if( isset($_POST['register-adresse'])&&isset($_POST['register-type']) &&isset($_POST['register-prix'])&&isset($_POST['register-id_livreur']) )
{ 
    $email = $livreurC->returnEmail($_POST['register-id_livreur']);
    $livraisons = new livraisons($_POST['register-adresse'],$_POST['register-type'],$_POST['register-prix'],$_POST['register-id_livreur']);
    $livraisonC->ajouterLivraison($livraisons);
    $addresse = $_POST['register-adresse']; 
    $type = $_POST['register-type'];
    $prix = $_POST['register-prix'] ;
    // Envoyer Un Email
    $email_content = array(
       'Subject' => 'Nouvelle Livraison',
       'body' => "Bonjour Mr/Mme ,
       Vous Avez Une Nouvelle Livraison : <br>
       Adresse : $addresse <br>
       Type :   $type <br>
       Prix : $prix TND <br>
       cordialement,"
   );
   sendemail($email,$email_content);

    header('Location: backadmin.php');
}
else if( isset($_POST['register-nom'])&&isset($_POST['register-heure']) &&isset($_POST['register-tarif']) &&isset($_POST['register-email']))
{
    $livreurs = new livreurs($_POST['register-nom'],$_POST['register-heure'],$_POST['register-tarif'],$_POST['register-email']);
    $livreurC->ajouterLivreur($livreurs);
    header('Location: backadmin.php');
} 
else
{
echo 'Erreur';
}

?>
