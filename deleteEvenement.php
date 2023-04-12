<?php
include_once "../Controller/crud.php";
echo '<br>';
$CrudEvenement = new CrudEvenement ();
if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    $CrudReclamation->Delete($_GET['nom']);
    header('location:listEvenement.php');
} else {
    echo "nom is not defined";
}
?>