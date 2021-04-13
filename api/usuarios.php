<?php
    session_start();

    header("Content-Type: application/json");
    include_once("../class/class-usuario.php");

    $_POST = json_decode(file_get_contents('php://input'), true);

    switch($_SERVER['REQUEST_METHOD'])
    {
        case 'POST':
            
            $usuario = Usuario::verificarUsuario($_POST["correo"], $_POST["password"]);
            
            if($usuario)
            {
                $resultado = array(
                    "codigoResultado"=> 1,
                    "mensaje"=> "Usuario autenticado",
                    "token"=> sha1(uniqid(rand(), true))
                );
                $_SESSION["token"] = $resultado["token"];

                setcookie("token", $resultado["token"], time()+(60*60*24*31), "/");
                setcookie("idUsuario", $usuario["idUsuario"], time()+(60*60*24*31), "/");

                echo json_encode($resultado);
            }
            else
            {
                setcookie("token", "", time()-1, "/");
                setcookie("idUsuario", "", time()-1, "/");

                echo '{"codigoResultado":0, "mensaje":"Usuario Incorrecto"}';
            }

        break;
        
        case 'GET':
            if (isset($_GET['id']))
            {
                Usuario::obtenerUsuario($_GET['id']);
            }
            else
            {
                Usuario::obtenerUsuarios();
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