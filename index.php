<?php
	require('conexion.php');
	
    $noti="SELECT id_noticia, titulo, fecha FROM noticias";
	
    $news=$mysqli->query($noti);
	
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
      <img src="static/img/logo.png">
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="compras.php">Compras</a></li>
        <li><a href="about.html">A cerca de</a></li>
        <li><a href="login.php">Administrador</a></li>
      </ul>
    </div>
  </div>
</nav>

        <center>
          <h1>Learn To Play Guitar</h1>
          <img src="static/img/logo-2.png">
        </center>
        
       
                <?php while ($row=$news->fetch_assoc()) {?>
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <a href="view.php?id_noticia=<?php echo $row['id_noticia'];?>"><font color="#FFFFF"><?php echo $row['titulo'];?></font></a>

                      </div>
                      <div class="panel-body">
                        <?php echo $row['fecha']; ?>
                      </div>
                    </div>
                 <?php } ?>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="static/bootstrap.min.js"></script>

    </body>
</html>
