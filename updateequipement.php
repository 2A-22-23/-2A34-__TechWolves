
<?php

include '../controller/equipementC.php';



$error = "";

// create equipment
$equipement = null;

// create an instance of the controller
$equipementC = new EquipementC();

if (
    isset($_POST["matricule"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["type"]) &&
    isset($_POST["id_stock"]) &&
    isset($_POST["img"])
) {
    if (
        !empty($_POST['matricule']) &&
        !empty($_POST['prix']) &&
        !empty($_POST["type"]) &&
        !empty($_POST['id_stock']) &&
        !empty($_POST["img"])
    ) {
        $equipement = new equipement(
            $_POST['matricule'],
			$_POST['img'],
            $_POST['type'],
            $_POST['prix'],
            $_POST['id_stock']

        );
        $equipementC->updateequipement($equipement,$_POST['matricule']);
        header('Location: listequipement.php');
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
    <button><a href="listequipement.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['matricule'])) {
        $equipement = $equipementC->showClient($_POST['matricule']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
    
                <tr>
                    <td>
                        <label for="matricule">Matricule:
                        </label>
                    </td>
                    <td><input type="text" name="matricule" id="matricule" value="<?php echo $equipement['matricule']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">Prix:
                        </label>
                    </td>
                    <td><input type="text" name="prix" id="prix" value="<?php echo $equipement['prix']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="img">image:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="img" value="<?php echo $equipement['img']; ?>" id="img">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">type:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="type" id="type" value="<?php echo $equipement['type']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">id du stock:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_stock" id="id_stock" value="<?php echo $equipement['id_stock']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>