<?php
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
		
		if(validarUsuario($usuario,$password) == true)
		{			
			$sesion->set("usuario",$usuario);
			
			header("location: home_admin.php");
		}
		else 
		{
			echo "Verifica tu nombre de usuario y password";
		}
	}
	
	function validarUsuario($usuario, $password)
	{
		$conexion = new mysqli("wvulqmhjj9tbtc1w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ucjsvnpfzsvn8to7","g2dr3ikdzxoadkl5","m1odu6lldk32kjbw");
		$consulta = "select password from usuarios where user = '$usuario';";
		
		$result = $conexion->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["password"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}

?>
<!DOCTYPE html>
<html>
<head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <title>LTPG</title>

<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Inicio</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="compras.php">Compras</a></li>
        <li><a href="about.html">A cerca de</a></li>
      </ul>
    </div>
  </div>
</nav>
<center>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
   <div class="panel-heading"><label>Usuario: </label> <input type="text" name = "usuario" placeholder="Pancho" required /></div>
    <div class="panel-heading"><label>Password: </label> <input type="password" name = "contrasenia" placeholder="*****" required/></div>
    <div class="panel-heading"><input type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
  </div>
</form>
</center>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="static/bootstrap.min.js"></script>

    </body>
</html>