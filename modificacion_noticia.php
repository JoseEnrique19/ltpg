<?php 
	
	require('conexion.php');
	
	$id_noticia=$_POST['id_noticia'];
	$titulo=$_POST['titulo'];
	$contenido=$_POST['contenido'];
	
	$query="UPDATE noticias SET titulo='$titulo', contenido='$contenido', fecha=now() WHERE id_noticia='$id_noticia'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Noticia</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Noticia Modificada</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Noticia</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="home_admin.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				