<?php
include '../controller/stockC.php';
$stockc = new stockc();
$stockc->deletestock($_GET["id"]);
header('Liststock.php');
?>
<button><a href="Liststock.php">Back to list</a></button>