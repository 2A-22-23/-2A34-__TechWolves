
<?php

include '../controller/stockC.php';



$error = "";

// create equipment
$stock = null;

// create an instance of the controller
$stockc = new stockc();

if (
    isset($_POST["id_stock"]) &&
    isset($_POST["nb_casque"]) &&
    isset($_POST["nb_velo"]) &&
    isset($_POST["nb_sac"])
) {
    if (
        !empty($_POST['id_stock']) &&
        !empty($_POST['nb_casque']) &&
        !empty($_POST["nb_velo"]) &&
        !empty($_POST["nb_sac"])
    ) {
        $stock = new stock(
            $_POST['id_stock'],
			$_POST['nb_sac'],
            $_POST['nb_velo'],
            $_POST['nb_casque']

        );
        $stockc->updatestock($stock,$_POST['id_stock']);
        header('Location: Liststock.php');
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
    <button><a href="Liststock.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_stock'])) {
        $stock = $stockc->showstock($_POST['id_stock']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
    
                <tr>
                    <td>
                        <label for="id_stock">id_stock:
                        </label>
                    </td>
                    <td><input nb_velo="text" name="id_stock" id="id_stock" value="<?php echo $stock['id_stock']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nb_casque">nb_casque:
                        </label>
                    </td>
                    <td><input nb_velo="text" name="nb_casque" id="nb_casque" value="<?php echo $stock['nb_casque']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nb_sac">image:
                        </label>
                    </td>
                    <td>
                        <input nb_velo="text" name="nb_sac" value="<?php echo $stock['nb_sac']; ?>" id="nb_sac">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">nb_velo:
                        </label>
                    </td>
                    <td>
                        <input nb_velo="text" name="nb_velo" id="nb_velo" value="<?php echo $stock['nb_velo']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input nb_velo="submit" value="Update">
                    </td>
                    <td>
                        <input nb_velo="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>