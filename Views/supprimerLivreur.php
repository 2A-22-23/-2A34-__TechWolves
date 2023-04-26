<?php
include '../controller/livreurC.php';
include '../config.php';

$livreursC = new livreursC();
$livreursC->supprimerLivreur($_GET["id"]);

header('Location: modifiersupp.php');

?>


