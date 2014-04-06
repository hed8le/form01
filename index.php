<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<h3>Kleines Beispiel mit großer Logik: Zusammenspiel Client-Server</h3>
	<form action="index.php" method="get">
		<label for="vorname">Vorname: </label><br>
		<input type="text" name="vorname" maxlength="5" id="vorname"><br>
		<label for="nachname">Nachname: </label><br>
		<input type="text" name="nachname" maxlength="5" id="nachname"><br>
		<input type="submit" value="Abschicken"><br><br>
	</form>

	<!-- PHP Coding -->
	<?php  
		echo "Hier beginnt die PHP-Ausgabe: <br>";
		$a = $_GET["vorname"];
		echo "<br>Vorname: $a";
		$a = $_GET["nachname"];
		echo "<br>Nachname: $a";
		echo '<br><br>Ausgabe des assoziativen Arrays $_GET:';
		foreach ($_GET as $key => $value) {
			echo "<br>Schluessel: $key. Value: $value";
		}
		echo '<br><br>Ausgabe des assoziativen Arrays $_SERVER:';
		echo "<table border=1><tr><th>Key</th><th>Value</th></tr>";
		foreach ($_SERVER as $key => $value) {
			echo "<tr>";
			echo "<td>$key</td><td>$value</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>

</body>

</html>