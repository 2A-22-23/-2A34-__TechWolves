<!DOCTYPE html>

<html>
<head>
	<title></title>
	<style>
		form {
			display: inline-flex;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
			margin: 20px;
		}
		label {
			display: inline-block;
			width: 100px;
			text-align: right;
			margin-right: 10px;
		}
		input[type=text], textarea
        {
			width: 250;
			padding: 4px;
			margin: 5px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
<form action="insert.php" method="post">
  <label for="id">Id:</label>
  <input type="text" id="id" name="id">
  <button type="button" onclick="clearField('id')">Remove</button>

  <label for="nom">Nom:</label>
  <input type="text" id="nom" name="nom">
  <button type="button" onclick="clearField('nom')">Remove</button>

  <label for="date">Date:</label>
  <input type="text" id="date" name="date">
  <button type="button" onclick="clearField('date')">Remove</button>

  <button type="submit">Submit</button>
</form>
<script>
        function clearField(fieldName)
        {
            document.getElementById(fieldName).value = "";
        }
    </script>

    
    
</body>

</html>

