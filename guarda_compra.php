<?php 
	
	require('conexion.php');
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direccion=$_POST['direccion'];
	$municipio=$_POST['municipio'];
	$estado=$_POST['estado'];
	$correo=$_POST['correo'];
	
	$query="INSERT INTO ventas (nombre,apellido,direccion,municipio,estado,correo,fecha) values('$nombre','$apellido','$direccion','$municipio','$estado','$correo',now())";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Compra</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Gracias por tu compra</h1>
				<h2></h2>
				<?php }else{ ?>
				<h1>Error al hacer la compra</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Inicio</a>
			
		</center>
	</body>
</html>	