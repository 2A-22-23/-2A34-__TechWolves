<?php
include '../controller/ClientC.php';
$equipementC = new equipementC();
$equipementC->deleteClient($_GET["id"]);
header('ListClients.php');
?>
<button><a href="ListClients.php">Back to list</a></button>