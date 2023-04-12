<style>
    h4 {
        display: inline-block;
        width: 100px;
    }
</style>

<?php
include "../Controller/crud.php";
$row;
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $CrudEvenement = new CrudEvenement();
    $row = $CrudEvenement->searchById($_GET['id']);
} else {
    die("");
}

?>

<div>
    <h3>UPDATE:</h3>
    <form method="POST" action="../Actions/updateEvenement.php">
        <h4 for="id">Id:</h4>
        <input type="text" value="<?php echo $row["id"] ?>" name="id">
        <br />

        <h4 for="nom">Nom:</h4>
        <input type="text" value="<?php echo $row["nom"] ?>" name="nom">
        <br />

        <h4 for="date">Date:</h4>
        <input type="text" value="<?php echo $row["date"] ?>" name="date">
        <br />

        <input type="submit" name="Update" value="Submit">
    </form>
</div>