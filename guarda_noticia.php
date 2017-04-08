<?php 
	
	require('conexion.php');
	
	$titulo=$_POST['titulo'];
	$contenido=$_POST['contenido'];
	
	$query="INSERT INTO noticias (titulo,contenido,fecha) values('$titulo','$contenido',now())";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>LTPG</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Noticia publicada correctamente</h1>
				<h2></h2>
				<?php }else{ ?>
				<h1>Error al publicar noticia</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="home_admin.php">Inicio</a>
			
		</center>
	</body>
</html>	