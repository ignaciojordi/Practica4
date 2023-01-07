<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CV</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link href="css/style1.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway"
    />
    <script
      src="https://kit.fontawesome.com/4d12c0f1c9.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header class="d-flex justify-content-end" id="nav">
    <h5 class="white">
      <?php
      session_start();
      echo $_SESSION['nombreUsuario'].' '.$_SESSION['apellidoUsuario'];
      ?>
    </h5>
    <a href="https://ignaciojordi.alwaysdata.net/p44/logout.php"><h5>Logout</h5></a>
    </header>
    <header class="text-center">
      <img id="kiko" src="img/ignacio.jpeg" class="img-fluid" />
    </header>
    <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido al CV de Ignacio</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="diseño/css/style.css">
  </head>
  <body>
    <?php require 'cabecerita/header.php' ?>

    <?php if(!empty($user)): ?>
        <!DOCTYPE html>
<html>
<head>
<title>CURRICULUM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
</head>
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-third">

      <div class="w3-white w3-text-black w3-card-4">
        <div class="w3-display-container">
          <img src="ignacio.png" style="width:100%">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Ignacio Jordi</h2>
          </div>
        </div>
        <div class="w3-container">
          <p class="w3-large"><h3><strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Datos personales</h3></strong></p>
          <hr>
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>Ignacio Jordi</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Barcelona, España</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1234 5678</p>
          <p><i class="fa fa-at fa-fw w3-margin-right w3-large w3-text-teal"></i>ignaciojordi@gmail.com</p>
          <p><i class="fa fa-calendar fa-fw w3-margin-right w3-large w3-text-teal"></i>09/10/2002</p>
          <p><i class="fa fa-flag fa-fw w3-margin-right w3-large w3-text-teal"></i>España</p>
          <p><i class="fa fa-mobile fa-fw w3-margin-right w3-large w3-text-teal"></i>+34 672 73 72 79</p>
          <p><i class="fa fa-male fa-fw w3-margin-right w3-large w3-text-teal"></i>Casado</p>
          <p><i class="fa fa-car fa-fw w3-margin-right w3-large w3-text-teal"></i>Clase C</p>
          <br>
          <p class="w3-large"><h3><strong></strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Habilidades</h3></strong></p>
          <hr>
          <p>Disciplinado</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:85%;height:18px"></div>
          </div>
          <p>Liderazgo</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:85%;height:18px">
              <div class="w3-center w3-text-white"></div>
            </div>
          </div>
          <p>Visionario</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:85%;height:18px"></div>
          </div>
          <p>Habilidad numérica</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:100%;height:18px"></div>
          </div>
          <p>Relaciones públicas</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%;height:18px"></div>
          </div>
          <br>

          <p class="w3-large"><h3><strong></strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Idiomas</h3></strong></p>
          <hr>          
          <p>Español</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:100%"></div>
          </div>
          <p>Inglés</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:80%"></div>
          </div>
          <p>Francés</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:80%"></div>
          </div>
          <p>Portugués</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:40%"></div>
          </div>

          <p class="w3-large"><h3><strong></strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Informática</h3></strong></p>
          <hr> 
          <p>Microsoft Excel</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:100%"></div>
          </div>
          <p>Microsoft Word</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:80%"></div>
          </div>
          <p>Software DelBol</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:40%"></div>
          </div>
          <p>Contalux</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:80%"></div>
          </div>
          <p>Cegit</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:18px;width:20%"></div>
          </div>

          <p class="w3-large"><h3><strong></strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Competencias</h3></strong></p>
          <hr> 
          <p>Comunicación</p>
          <p>Trabajo en equipo</p>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <p class="w3-large"><h3><strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Perfil</h3></strong></p>
        <hr>
        <div class="w3-container">
          <p>Estudiante de Comunicación Interactiva en la Universidad Autónoma de Barcelona y paralelamente trabajando como Community Manager con varias cuentas de Instagram</p>
          
        </div>
        <p class="w3-large"><h3><strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Experiencia de trabajo</h3></strong></p>
        <hr>
        <table>
          <tr>
            <td>01/2018 - Presente </td>
            <td> <p>Community Manager </p>
              <p>@conceptosdeestilo</p>
              <p>Apoyo en el desarrollo, crecimiento y en la

              gestión de la estrategia de redes sociales de la

              cuenta de Instagram@conceptosdeestilo (Maica Jáuregui)

              con un total de 130 mil seguidores.</p></td>

          </tr>
          
          
          <tr>
            <td>09/2022 - 10/2022</td>
            <td><p>Ejecutivo comercial Banco Santander</p>
              <p>Universidad Autónoma de Barcleona</p>
              <p>Campaña Universitaria de realización 

              de tarjetas de estudiantes.</p></td>
          </tr>
          
          <tr>
            <td>01/2015 - 07/2016</td>
            <td> <p> Espcialista 8AP FI</p>
              <p>Accenture Argentina</p>
             <p>Consultor funcional del modulo FI cresción de

              nueves socledades FI, configuración de apersciones

              bancarias de extractos automáticos, configuracion

              de nuevas estructuras de balances, configuración de

              nuevas cuentas bancarias en ls distinta sociedades

              del grupo de empresas, configuración parcisi módulo

              salivo fio, con"@ursción de nuevos Indicadores de

              Impuestos, soporte fundional a sustos del módulo

              Fl-AR, FI-TR. FI-GL, Fl-AF</p> </td>
          </tr>
          </table>
          <p class="w3-large"><h3><strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Educación</h3></strong></p>
          <hr>
          <table>
            <tr>
              <td>09/2020 - Presente </td>
              <td> <p>Comunicación Interactiva </p>
                <p>Universidad Autónoma de Barcelona (UAB)</p>
                <p>

                  

                  

                  

                  ---------------------------------------------------------------

                ---------------------------------------------------------------</p></td>
                

            </tr>
            <tr>
              <td>09/2020 - Presente </td>
              <td> <p>Bachillerato </p>
                <p>Colegio La Salle Bonanova</p>
                <p>

                  

                  

                  

                  ---------------------------------------------------------------

                ---------------------------------------------------------------</p></td>
                

            </tr>
            <tr>

            <table>
            <p class="w3-large"><h3><strong><i class="fa fa-angle-double-right fa-fw w3-margin-right w3-text-teal"></i>Contacta conmigo</h3></strong></p>
            <div class="contact_form">

                <div class="formulario">      
                  
            
            
                      <form action="submeter-formulario.php" method="post">       
            
                        
                            <p>
                              <label for="nombre" class="colocar_nombre">Nombre
                                <span class="obligatorio">*</span>
                              </label>
                                <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                            </p>
                          
                            <p>
                              <label for="email" class="colocar_email">Email
                                <span class="obligatorio">*</span>
                              </label>
                                <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                            </p>
                        
                            <p>
                              <label for="telefone" class="colocar_telefono">Teléfono
                              </label>
                                <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                            </p>    
                          
                          
                            <p>
                              <label for="asunto" class="colocar_asunto">Asunto
                                <span class="obligatorio">*</span>
                              </label>
                                <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                            </p>    
                          
                            <p>
                              <label for="mensaje" class="colocar_mensaje">Mensaje
                                <span class="obligatorio">*</span>
                              </label>                     
                                                <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                            </p>                    
                          
                            <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
            
                            <p class="aviso">
                              <span class="obligatorio"> * </span>los campos son obligatorios.
                            </p>          
                        
                      </form>
                </div>  
              </div>
        </table>
            </tr>
    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

  <!-- End Page Container -->
</div>



</body>
</html>

