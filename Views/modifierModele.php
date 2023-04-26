<?php
include '../Controller/modeleC.php';
include '../Controller/livreurC.php';

$id = $_GET["id"];
$livraisonsC=new livraisonsC();
$livreursC=new livreursC();
if(
    isset($_POST['adresse']) &&isset($_POST['type']) &&isset($_POST['prix']) &&isset($_POST['id_livreur'])
    
){
    $livraisons = new livraisons($_POST['adresse'],$_POST['type'],$_POST['prix'],$_POST['id_livreur']);
    $livraisonsC->modifierLivraison($id, $livraisons);
}
else if( isset($_POST['nom']) &&isset($_POST['heure']) &&isset($_POST['tarif']) &&isset($_POST['email']))
{
    $livreurs = new livreurs($_POST['nom'],$_POST['heure'],$_POST['tarif'],$_POST['email']);
    $livreursC->modifierlivreur($id, $livreurs); 
}
else
echo 'erreur';
header('Location: modifiersupp.php');
?>