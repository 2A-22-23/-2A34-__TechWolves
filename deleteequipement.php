<?php
include '../controller/equipementC.php';
$equipementC = new equipementC();
$equipementC->deleteequipement($_GET["id"]);
header('listequipement.php');
?>
<button><a href="listequipement.php">Back to list</a></button>