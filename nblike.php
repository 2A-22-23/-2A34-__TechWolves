<?php

include '../Controller/equipementC.php';

$error = "";

// create produit
$produit = null;

// create an instance of the controller
$equipementC = new equipementC();



echo $_POST['matricule'];
echo $_POST['prix'];
echo $_POST['type'];
echo $_POST['img'];
echo $_POST['id_stock'];
echo $_POST['nb_like'];



if (
    isset($_POST["matricule"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["type"]) &&
    isset($_POST["img"]) &&
    isset($_POST["id_stock"])
) {
    if (
        !empty($_POST["matricule"]) &&
        !empty($_POST['prix']) &&
        !empty($_POST["type"]) &&
        !empty($_POST["img"]) &&
        !empty($_POST["id_stock"])
    ) {


		
        $equipement = new equipement(
            $_POST['matricule'],
            $_POST['img'],
            $_POST['type'],
            $_POST['prix'],
            $_POST['id_stock'],
            $_POST['nb_like']
        );
		
        $equipementC->updateequipement($equipement, $_POST['matricule']);
        header('Location:listequipement.php');
    } else
        $error = "Missing information";
}
?>