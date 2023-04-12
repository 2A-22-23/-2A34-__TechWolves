<?php

include_once '../Controller/crud.php';

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
        $evenement = new evenement
        (
            $_POST['id'],
            $_POST['nom'],
            $_POST['date']
            
        );
        $result = CrudEvenement::insert($evenement);
        if ($result == null) {
            print("ADDED SUCCESSFULLY");
        } else {
            print("OPPS, we had some errors:" . $result);
        }
    } else {
        print("OPPS, some fields are empty.");
    }
} else {
    print("OPPS, missing some fields.");
}
?>