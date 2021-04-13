<?php
    class Archivo
    {
        private $idArchivo;
        private $nombreArchivo;
        private $tipoArchivo;
        private $url;

        public function __construct($idArchivo, $nombreArchivo, $tipoArchivo, $url)
        {
            $this->idArchivo = $idArchivo;
            $this->nombreArchivo = $nombreArchivo;
            $this->tipoArchivo = $$tipoArchivo;
            $this-$url = $url;
        }

        public static function obtenerArchivos($idUsuario)
        {
            $contenidoArchivoAlmacenamiento = file_get_contents('../data/almacenamiento.json');
            $files = json_decode($contenidoArchivoAlmacenamiento, true);

            for($i=0; $i<sizeof($files); $i++)
            {
                if($files[$i]["idUsuario"] == $idUsuario)
                {
                    $filesUsuario = $files[$i];
                    break;
                }
            }
            echo json_encode($filesUsuario);
        }

        public static function obtenerArchivo($idUsuario, $idArchivo)
        {
            $contenidoArchivoAlmacenamiento = file_get_contents('../data/almacenamiento.json');
            $files = json_decode($contenidoArchivoAlmacenamiento, true);

            for($i=0; $i<sizeof($files); $i++)
            {
                if($files[$i]["idUsuario"] == $idUsuario)
                {
                    $filesUsuario = $files[$i];

                    for($j=0; $j<sizeof($filesUsuario["archivos"]); $j++)
                    {
                        if($filesUsuario["archivos"][$j]["idArchivo"] == $jdArchivo)
                        {
                            $file = $filesUsuario["archivos"][$j];
                            break;
                        }
                    }
                    
                    break;
                }
            }

            echo json_encode($file);
        }

        public function guardarArchivo()
        {
            $contenidoArchivoAlmacenamiento = file_get_contents('../data/almacenamiento.json');
            $files = json_decode($contenidoArchivoAlmacenamiento, true);

            for($i=0; $i<sizeof($files); $i++)
            {
                if($files[$i]["idUsuario"] == $idUsuario)
                {
                    $filesUsuario = $files[$i];
                    break;
                }
            }

            $file = array(
                "idArchivo"=> $this->idArchivo,
                "nombreArchivo"=> $this->nombreArchivo,
                "tipoArchivo"=> $this->tipoArchivo,
                "url"=> $this->url
            );

            $filesUsuario["archivos"][] = $file;

            echo json_encode($file);
        }

        public function getIdArchivo()
        {
            return $this->idArchivo;
        }

        public function setIdArchivo($idArchivo)
        {
            $this->idArchivo = $idArchivo;

            return $this;
        }

        public function getNombreArchivo()
        {
            return $this->nombreArchivo;
        }

        public function setNombreArchivo($nombreArchivo)
        {
            $this->nombreArchivo = $nombreArchivo;

            return $this;
        }

        public function getTipoArchivo()
        {
            return $this->tipoArchivo;
        }

        public function setTipoArchivo($tipoArchivo)
        {
            $this->tipoArchivo = $tipoArchivo;

            return $this;
        }

        public function getUrl()
        {
            return $this->url;
        }

        public function setUrl($url)
        {
            $this->url = $url;

            return $this;
        }
    }
?>