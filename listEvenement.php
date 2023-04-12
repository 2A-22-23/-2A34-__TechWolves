<?php
include "../Controller/crud.php";

$CrudEvenement = new CrudEvenement();
$list = $CrudEvenement->Display_evenements();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Gym </title>

	<style>
		td {
			padding: 10px;
		}
	</style>
</head>

<body>
	<div>
		<button>
			<a href="/gestion_evenement/view/insert.php">ADD</a>
		</button>
	</div>
	<!-- ALL EVENEMENTS -->
	<div>
		<h3>EVENEMENTS:</h3>
		<table border="1">
			<?php

			foreach ($list as $row) {
				echo "<tr>";
				echo ("<td>" . $row["id"] . "</td>");
				echo ("<td>" . $row["nom"] . "</td>");
				echo ("<td>" . $row["date"] . "</td>");
				


				echo ("<td> <a href='http://localhost/gestion_evenement/Actions/deleteEvenement.php?id=" . $row["id"] . "'>delete</a></td>");
				echo ("<td> <a href='http://localhost/gestion_evenement/View/update.php?id=" . $row["id"] . "'>update</a></td>");
				echo "</tr>";
			}
			?>
		</table>

	</div>
</body>

</html>