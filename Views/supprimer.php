<?php
include '../controller/modeleC.php';

$livraisonsC = new livraisonsC();
$livraisonsC->supprimerLivraison($_GET["id"]);

header('Location: modifiersupp.php');

?>


