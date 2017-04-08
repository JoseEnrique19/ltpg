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
        <li><a href="about.html">A cerca de</a></li>
        <li><a href="login.php">Administrador</a></li>
      </ul>
    </div>
  </div>
</nav>

        <center>
        	<h1>Comprame</h1>
        	<h2>Inserta tus datos personales para que hagamos<br>llegar el producto a tus manos</h2>
        </center>

		<center>
		<form name="compra" method="POST" action="guarda_compra.php" class="form-horizontal">
			<table>
				<tr>
					<td width="20"><b>Nombre(s)</b></td>
					<td width="30"><input type="text" name="nombre" size="25" placeholder="Jose" required/></td>
				</tr>
				<tr>
					<td width="20"><b>Apellidos</b></td>
					<td width="30"><input type="text" name="apellido" size="25" placeholder="Perez" required/></td>
				</tr>
				<tr>
					<td width="20"><b>Direccion</b></td>
					<td width="30"><input type="text" name="direccion" size="25" placeholder="Calle, Numero, Colonia" required/></td>
				</tr>
				<tr>
					<td width="20"><b>Municipio</b></td>
					<td width="30"><input type="text" name="municipio" size="25" placeholder="Tulancingo" required/></td>
				</tr>
				<tr>
					<td width="20"><b>Estado</b></td>
					<td width="30"><input type="text" name="estado" size="25" placeholder="Hidalgo" required/></td>
				</tr>
				<tr>
					<td width="20"><b>Correo</b></td>
					<td width="30"><input type="text" name="correo" size="25" placeholder="jose@mail.com" required/></td>
				</tr>
				<tr>
					<td width="20"><b>HEY</b></td>
					<td width="30"><b>Verifica tus datos</b></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="2"><input type="submit" name="eviar" value="Comprar" /></td>
				</tr>
			</table>
		</form>
        </center>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="static/bootstrap.min.js"></script>

    </body>
</html>