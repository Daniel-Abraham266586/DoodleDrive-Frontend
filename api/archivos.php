<?php
    header("Content-Type: application/json");
    include_once("../class/class-archivo.php");

    $_POST = json_decode(file_get_contents('php://input'), true);

    switch($_SERVER['REQUEST_METHOD'])
    {
        case 'POST':
            if(isset($_POST["idUsuario"], $_POST["idArchivo"], $_POST["nombreArchivo"], $_POST["tipoArchivo"], $_POST["url"]))
            {
                $archivo = new Archivo($_POST["idUsuario"], $_POST["idArchivo"], $_POST["nombreArchivo"], $_POST["tipoArchivo"], $_POST["url"]);
                $archivo->guardarArchivo();
            }
            else
            {
                echo '{"Mensaje":"Error"}';
            }
        break;
        
        case 'GET':
            if (isset($_GET['idUsuario'], isset($_GET['idArchivo']))
            {
                Archivo::obtenerArchivo($_GET['idUsuario'], isset($_GET['idArchivo']);
            }
            else if (isset($_GET['idUsuario'])
            {
                Archivo::obtenerArchivos($_GET['idUsuario']);
            }
        break;
        
        case 'PUT':
            //Actualizar
        break;
        
        case 'DELETE':
            //Eliminar
        break;
    }
?>