<?php


//conection: 
$link = mysqli_connect("127.0.0.1","root","","noticiasdb", "3306")
or die
("Error
 " . mysqli_error($link));

$id = $_REQUEST['id'];


$sql = "SELECT * FROM noticia where Id_noticia = '$id'";



$result = mysqli_query($link, $sql);


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Europeia News</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script>


	

</head>


<body>

        

	<header data-role="header"><h1> Primeira Aplicação </h1></header>
	
	
	
    	<div class="content" data-role="content">
		<?php
		while($row = mysqli_fetch_array($result)) { ?>
        <img src="<?php echo $row["imagem"]?>"><p><?php echo $row["titulo"]?></p>
		
		<p>
		<?php echo $row["texto"]?>
		</p>
		<p><?php echo $row["data"]?></p>
		<?php } ?>
        <p><a href="exercicio10-03_combd.php" data-role="button" data-transition="slide" data-ajax="false">Ir para primeira pagina </a></p>
        </div>
        <footer data-role="footer"><h1>Europeia</h1></footer>

		

		
		
		
</body>
</html>
