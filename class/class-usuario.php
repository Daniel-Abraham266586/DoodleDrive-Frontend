<?php
    class Usuario
    {
        private $idUsuario;
        private $nombreUsuario;
        private $correo;
        private $password;
        private $tipoUsuario;
        private $limiteArchivos;

        public function __construct($idUsuario, $nombreUsuario, $correo, $password, $tipoUsuario, $limiteArchivos)
        {
            $this->idUsuario = $idUsuario;
            $this->nombreUsuario = $nombreUsuario;
            $this->correo = $correo;
            $this->password = $password;
            $this->tipoUsuario = $$tipoUsuario;
            $this-$limiteArchivos = $limiteArchivos;
        }


        public static function obtenerUsuarios()
        {
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            echo $contenidoArchivo;
        }

        public static function obtenerUsuario($id)
        {
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            $usuarios = json_decode($contenidoArchivo, true);

            for($i=0; $i<sizeof($usuarios); $i++)
            {
                if($usuarios[$i]["idUsuario"] == $id)
                {
                    $usuario = $usuarios[$i];
                    break;
                }
            }
            echo json_encode($usuario);
        }

        public static function verificarUsuario($email, $password)
        {
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            $usuarios = json_decode($contenidoArchivo, true);

            for($i=0; $i<sizeof($usuarios); $i++)
            {
                if($usuarios[$i]["correo"]==$email && $usuarios[$i]["correo"]==$email)
                {
                    return $usuarios[$i];
                    break;
                }
            }

            return null;
        }
        

        public function getIdUsuario()
        {
            return $this->idUsuario;
        }

        public function setIdUsuario($idUsuario)
        {
            $this->idUsuario = $idUsuario;

            return $this;
        }

        public function getNombreUsuario()
        {
            return $this->nombreUsuario;
        }

        public function setNombreUsuario($nombreUsuario)
        {
            $this->nombreUsuario = $nombreUsuario;

            return $this;
        }

        public function getCorreo()
        {
            return $this->correo;
        }

        public function setCorreo($correo)
        {
            $this->correo = $correo;

            return $this;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;

            return $this;
        }

        public function getTipoUsuario()
        {
            return $this->tipoUsuario;
        }

        public function setTipoUsuario($tipoUsuario)
        {
            $this->tipoUsuario = $tipoUsuario;

            return $this;
        }

        public function getLimiteArchivos()
        {
            return $this->limiteArchivos;
        }

        public function setLimiteArchivos($limiteArchivos)
        {
            $this->limiteArchivos = $limiteArchivos;

            return $this;
        }
    }
?>