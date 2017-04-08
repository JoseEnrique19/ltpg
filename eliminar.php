<?php 
	
	require('conexion.php');
	
	$id_noticia=$_GET['id_noticia'];
	
	$query="DELETE FROM noticias WHERE id_noticia=$id_noticia";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>LTPG</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Noticia eliminada</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Noticia</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="home_admin.php">Regresar</a>
			
		</center>
	</body>
</html>