<?php

require 'config.php';

$latitude  = mysqli_real_escape_string($link, $_GET['lat']);
$longitude = mysqli_real_escape_string($link, $_GET['lon']);
$local     = mysqli_real_escape_string($link, $_GET['local']);

$sql = "INSERT INTO `geodb`.`local` ( `lat`, `long`, `local`)
		VALUES ( '$latitude', '$longitude', '$local')";

$response = mysqli_query($link, $sql);

if ($response) {
	echo "registo inserido com sucesso";
}else{
	echo "registo NÃO inserido" . mysqli_error($link);
}
