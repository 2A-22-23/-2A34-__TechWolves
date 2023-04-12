<?php

include '../controller/ClientC.php';





$error = "";

// create client
$client = null;

// create an instance of the controller
$equipementCC = new EquipementC();

if (
    isset($_POST["matricule"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["Type"]) &&
    isset($_POST["img"])
) {
    if (
        !empty($_POST["matricule"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["Type"]) &&
        !empty($_POST["img"]) 
    ) {
        $client = new Client(
            $_POST['matricule'],
            $_POST['img'],
            $_POST['Type'],
            $_POST['prix']
        );
        $equipementCC->updateEquipement($client, $_POST["matricule"]);
        header('Location: ListEquipements.php');
    } else {
        $error = "Missing information";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
    <button><a href="ListEquipements.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id'])) 
        $client = $equipementCC->showEquipement($_POST['id']);
       
    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="matricule">Matricule de l'equipement:
                        </label>
                        
                       
                    </td>
                    <td><input type="text" name="matricule" id="matricule" value="<?php echo $client['matricule']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td><input type="text" name="prix" id="prix" value="<?php echo $client['prix']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Type">type d'equipement:
                        </label>
                    </td>
                    <td><input type="text" name="Type" id="Type" value="<?php echo $client['Type']; ?>"></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    
    ?>
</body>
                        