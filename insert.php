<form method="POST" action="../Actions/addEvenement.php">
    <ul>
        <li>
            <h3>Ecrire votre evenement :</h3>
        </li>

        <label for="id">Id:</label>
        <input type="text" id="id" name="id">
        <button type="button" onclick="clearField('id')">Remove</button>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <button type="button" onclick="clearField('nom')">Remove</button>

        <label for="date">Date:</label>
        <input type="text" id="date" name="date">
        <button type="button" onclick="clearField('date')">Remove</button>
        <input type="submit" name="Add" value="Submit">
</form>


<script>
    function clearField(fieldName) {
        document.getElementById(fieldName).value = "";
    }
</script>