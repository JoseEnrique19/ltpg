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
        <li><a href="home_admin.php">Inicio Admin</a></li>
        <li><a href="cerrarsesion.php">Cerrar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>

<center><h1>Nueva noticia</h1></center>
    <center>
        <form name="noticia" method="POST" action="guarda_noticia.php" class="form-horizontal">
          <p><strong>Titulo </strong></p>
          <p><input type="text" name="titulo" placeholder="Titulo" required/></p>

  <p><strong>Contenido</strong></p>
  <p><textarea name="contenido" cols="40" rows="5" placeholder="Contenido" required></textarea></p>

  <p><input name="submit" type="submit" id="submit" tabindex="5" value="Guardar" />
  <input type="hidden" name="comment_post_ID" value="1542" />
  </p>
  <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="8724eb9da9" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="23"/></p>
  </form>
</center>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="static/bootstrap.min.js"></script>

    </body>
</html>