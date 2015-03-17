<?php

if (!empty($_GET["latitude"])) {
	print_r($_GET);
	die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>change geo</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script>

</head>
<body>
	<form action="change-geo.php" method="get" data-ajax="false">
		<label for="latitude">Latitude:</label>
		<input type="text" name="latitude" id="latitude">
		<label for="longitude">Longitude:</label>
		<input type="text" name="longitude" id="longitude">
		<label for="local">Local:</label>
		<input type="text" name="local" id="local">

		<input type="submit" value="enviar">

	</form>
</body>
</html>

<script>

window.onload = function() {

	function sucesso(pos) {
		var lat = pos.coords.latitude;
		var lon = pos.coords.longitude;

		document.getElementById("latitude").value = lat;
		document.getElementById("longitude").value = lon;
	}

	function erro() {
		alert("Ocorreu um erro");
	}

	options={timeout: 60000, enableHighAccuracy: true}

	navigator.geolocation.getCurrentPosition(sucesso, erro, options);

}
</script>
