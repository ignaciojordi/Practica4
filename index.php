<html>
    <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio de sesión</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins"
    />
  </head>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container-fluid text-center" id="center">
                <h2>Log-in</h2>
                <h5>Introduce tus datos</h5>
                <form action="valida.php" method="post">
                  <div>
                    <input type="text" name ="us" class="form-control mail" placeholder="Introduce nombre de usuario">
                    <input type="password" name="passw" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                    <a href="valida.php"><button type="submit" class="btn">Log in</button></a>
                  </div>
                </form>
                <h6><a href="https://ignaciojordi.alwaysdata.net/p44/registre.php">Regístrese</a></h6>
            </div>
        </div>
    </body>
</html>


<?php
 if ( isset($_GET['error']) && $_GET['error'] == 1 ){
  echo '<script type="text/JavaScript">alert("Campos vacíos. Revise esos campos.") </script>';
 } 
 elseif ( isset($_GET['error']) && $_GET['error'] == 2 ){
  echo '<script type="text/JavaScript">alert("Error de conexión con la base de datos.") </script>';
 }
 elseif ( isset($_GET['error']) && $_GET['error'] == 3 ){
  echo '<script type="text/JavaScript">alert("Error en el nombre de usuario o en la contraseña.") </script>';
 } 
 elseif ( isset($_GET['exito']) && $_GET['exito'] == 1 ){
  echo '<script type="text/JavaScript">alert("Se ha registrado con éxito.") </script>';
 }
?>