﻿<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Multipager Template- Travelic </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

       <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">TUMERCADO</a>

            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-center">
                   <li><a href="Buscar.php">MOSTRAR-ADMINISTRADORES</a></li>
                   <li><a href="Buscarusu.php">MOSTRAR-USUARIOS</a></li>
                   <li><a href="Buscarpubli.php">MOSTRAR-PUBLICACIONES</a></li>
                   <li><a href="Registrarse.php">CREAR-ADMINISTRADOR</a></li>
                </ul>
            </div>

        </div>
    </div>

          <section  id="services-sec">
          </section>

     <section  id="services-sec">
       <form action="../logica/procesarnuevoadmin.php" method="POST">
         <div class="container">
           <form>
               <div class="col-md-6 ">
                   <div class="form-group">
                       <input type="text" class="form-control" id="ci" name="ci" required="required" placeholder="Cedula de identidad">
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-6 ">
                       <div class="form-group">
                           <input type="text" class="form-control" id="nombre" name="nombre" required="required" placeholder="Nombre">
                       </div>
                   </div>
                   <div class="col-md-6 ">
                       <div class="form-group">
                           <input type="text" class="form-control" id="apellido" name="apellido" required="required" placeholder="Apellido">
                       </div>
                   </div>
               </div>

               <div class="col-md-6 ">
                   <div class="form-group">
                       <input type="password" class="form-control" id="contrasena" name="contrasena" required="required" placeholder="Contraseña">
                   </div>
               </div>

               <div class="col-md-6 ">
                   <div class="form-group">
                       <input type="text" class="form-control" id="email" name="email" required="required" placeholder="CorreoElectronico">
                   </div>
               </div>

               <div class="col-md-6 ">
                   <div class="form-group">
                       <input type="text" class="form-control" id="telefono" name="telefono" required="required" placeholder="Telefono">
                   </div>
               </div>

               <div class="col-md-6 ">
                   <div class="form-group">
                       <input type="text" class="form-control" id="calle" name="calle" required="required" placeholder="Calle">
                   </div>
               </div>

               <div class="col-md-6 ">
                   <div class="form-group">
                       <input type="text" class="form-control" id="numero" name="numero" required="required" placeholder="Numeropuerta">
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-3 ">
                       <div class="form-group">
                          <select class="form-control" id="pais" name="pais" required="required" placeholder="Pais">
                            <option value="Uruguay">Uruguay</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Colombia">Colombia</option>
                          </select>
                       </div>
                   </div>
               </div>

               <div class="col-md-6 ">
                   <div class="form-group">
                       <input type="text" class="form-control" id="tarjeta" name="tarjeta" required="required" placeholder="NumeroTarjeta">
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-3 ">
                       <div class="form-group">
                          <select class="form-control" id="grado" name="grado" required="required" placeholder="Grado">
                            <option value="Penalizador">Penalizador</option>
                            <option value="Administrador del sistema">Administrador del sistema</option>
                            <option value="Administrador de frontend">Administrador de frontend</option>
                            <option value="Lector de registro">Lector de registro</option>
                          </select>
                       </div>
                   </div>
               </div>
              <button type="submit" class="btn btn-success">Registrar</button>
           </form>
         </div>
     </section>

    <div id="footer">
      2017 www.tumercado.com | Todos los derechos reservados

    </div>

    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>
    <script src="assets/js/custom.js"></script>

</body>
</html>
