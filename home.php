<?php
    session_start();
    if(!isset($_SESSION["token"]))
    {
        header("Location: login.html");
    }

    if(!isset($_COOKIE["token"]))
    {
        header("Location: login.html");
    }

    if(!isset($_SESSION["token"] != $_COOKIE["token"])))
    {
        header("Location: login.html");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Unidad</title>

    <link rel="stylesheet" href="css/all.min.css"><!--FontAwesome-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/><!--Bootstrap-->
	<link rel="stylesheet" href="css/normalize.css"><!--Normalize-->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!--Navbarhref="#"-->
    <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
        <a class="navbar-brand texto-Gris" onclick=""><i class="fas fa-tasks"></i> Drive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <form class="form-inline my-2 my-lg-0" style="margin-left: auto;">
                <input type="text" id="" placeholder="Buscar en Drive" class="form-control">
                <button type="button" id="" class="btn btn-invisible-redondo texto-Gris my-2 my-sm-0 ml-1 mr-1" onclick=""><i class="fas fa-plus"></i></button>
                <button type="button" id="" class="btn btn-invisible-redondo texto-Gris my-2 my-sm-0 ml-1 mr-1" onclick=""><i class="fas fa-th"></i></button>
                <select id="lista-Usuarios" class="form-control ml-4" onchange="cambiarUsuario()">
                </select>
            </form>
        </div>
    </nav>
    <!--Navbar-->

    <main class="container-fluid" style="margin-top: 5rem;">
        <div class="row">
            <div class="col-3">
                <div>
                    <button id="btn-nuevo" class="shadow btn"><i class="fas fa-plus"> </i>  Nuevo</button>
                </div>
                <br>
                
                <div>
                    <a class="texto-Gris"><i class="fas fa-plus icon"> </i> Mi Unidad</a><br>
                    <a class="texto-Gris"><i class="fas fa-plus icon"> </i> Compartidos conmigo</a><br>
                    <a class="texto-Gris"><i class="fas fa-plus icon"> </i> Recientes</a><br>
                    <a class="texto-Gris"><i class="fas fa-plus icon"> </i> Destacados</a><br>
                    <a class="texto-Gris"><i class="fas fa-plus icon"> </i> Papelera</a><br>

                    <hr>

                    <span class="texto-Gris">Almacenamiento</span><br>
                    <button class="btn form-control texto-Azul-medium btn-blanco-bordeAzul">Comprar Almacenamiento</button><br>
                </div>
            </div>
            
            <div class="col-9">
                <div id="panel-contenido">
                    <div>
                        <span id="lbl-direccion">Mi Unidad > POO</span>
                        <i class="fas fa-plus icon" style="float: right;"></i>
                        <i class="fas fa-plus icon" style="float: right;"></i>
                        <hr>

                        <div class="row">
                            <div class="col-3">Nombre</div>
                            <div class="col-3">Propietario</div>
                            <div class="col-3">Última modificación</div>
                            <div class="col-3">Tamaño del archivo</div>
                        </div>
                        <hr>

                        <div id="contenido" class="row">
                            <div class="col-3">nombreArchivo</div>
                            <div class="col-3">nombrePropietario</div>
                            <div class="col-3">fecha</div>
                            <div class="col-3"> tamanioArchivo</div>
                        </div>
                        <hr>
                    </div>

                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="js/jquery-3.5.1.min.js"></script><!--JQuery-->
    <script src="js/popper.min.js"></script><!--Popper-->
    <script src="js/all.min.js"></script><!--FontAwesome-->
    <script src="js/bootstrap.min.js"></script><!--Bootstrap-->
    <script src="js/axios.min.js"></script><!--Axios-->
    <script src="js/controlador.js"></script>
</body>
</html>