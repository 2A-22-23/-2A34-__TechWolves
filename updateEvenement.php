<?php
include_once "../Controller/crud.php";

$CrudEvenement = new $CrudEvenement();

var_dump($_POST);
if (
    isset($_POST['id']) &&
    isset($_POST['nom']) &&
    isset($_POST['date'])
) {
    if (
        !empty($_POST['id']) &&
        !empty($_POST['nom']) &&
        !empty($_POST['date'])
    ) {
        $o = new evenement
        (
            $_POST['id'],
            $_POST['nom'],
            $_POST['date'],
        );
        $CrudEvenement::Update($o);

        header('location:../View/listEvenement.php');

    } else {
        header('location:../View/listEvenement.php');
    }
} else {
    header('location:../View/listEvenement.php');
}
?>