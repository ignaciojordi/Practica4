<html>
    <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro</title>
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
                <h2>Introduce toda la información para poder registrarte</h2>
                <form action="alta.php" method="post">
                  <div>
                    <input type="text" name="nombr" class="form-control" placeholder="Introduce tu nombre"><br>
                    <input type="text" name="apell" class="form-control" placeholder="Introduce tu apellido"><br>
                    <input type="email" name ="correo" class="form-control mail" placeholder="Introduce email"><br>
                    <input type="text" name="user" class="form-control" placeholder="nombre usuario"><br>
                    <input type="password" name="contra" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                    <button type="submit" class="btn">Registrarse</button>
                  </div>
                </form>
                <a href="https://ignaciojordi.alwaysdata.net/p44/index.php"><h2 id="flecha">←</h2></a>
            </div>
        </div>
    </body>
</html>

<?php
 if ( isset($_GET['cm']) && $_GET['cm'] == 1 ){
  echo '<script type="text/JavaScript">alert("Rellene todos los campos.") </script>';
 }
 elseif ( isset($_GET['cm']) && $_GET['cm'] == 2 ){
  echo '<script type="text/JavaScript">alert("Error de conexión con la base de datos.") </script>';
 }
 elseif ( isset($_GET['cm']) && $_GET['cm'] == 3 ){
  echo '<script type="text/JavaScript">alert("Correo o nombre de usuario ya en uso . Utilice otro.") </script>';
 }
 elseif ( isset($_GET['cm']) && $_GET['cm'] == 4 ){
  echo '<script type="text/JavaScript">alert("Contraseña demasiado larga. Utilice 8 carácteres como máximo.") </script>';
 }   
?>