<?php


//conection: 
$link = mysqli_connect("localhost","root","","noticiasdb") or die("Error " . mysqli_error($link)); 

$sql = 'SELECT * FROM noticia';

$result = mysqli_query($link, $sql);


?>


<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Europeia News</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script>


	
	<style type="text/css">
		
		#contentor {
		margin: auto;
		width:300px;
		height:400px;
		}

	
	</style>
</head>


<body>

	<header data-role="header"><h1> Europeia News </h1></header>
    	<div class="content" data-role="content">
        <p> Primeira pagina</p>
        
		<ul data-role="listview" data-inset="true">
		<?php
		while($row = mysqli_fetch_array($result)) { ?>
		<li>
		<a href="detalhe_combd.php?id=<?php echo $row["Id_noticia"]?>" dat-ajax="false">
		<img src="<?php echo $row["imagem"]?>">
		<h3><?php echo $row["titulo"]?></h3>
		<p><?php echo $row["lead"]?></p>
		</a>
		</li>

		<?php } ?>
		</ul>
		
		
        </div>
        <footer data-role="footer"><h1>Europeia</h1></footer>

        
        
		
		
		
</body>
</html>