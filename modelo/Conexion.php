<?php

    class Conexion {

        /* ATTRIBUTES */
        
        private $db = "farmacia1";
        private $servidor = "localhost";
        private $puerto = "3306";
        private $charset = "utf8";
        private $usuario = "root";
        private $contrasena = "";
        
        /* https://www.php.net/manual/es/pdo.setattribute.php */
        private $atributos = [
            PDO::ATTR_CASE => PDO::CASE_LOWER, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,
            /* https://www.php.net/manual/es/pdostatement.fetch.php */
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];
        
        public $pdo = null; /* Variable que sera retornoda la defino como de acceso publico*/
        
        /* METHODS */

        /* Método Constructor */
        function __construct() {
            $this->pdo = new PDO(
                "mysql:dbname={$this->db};
                    host={$this->servidor};
                    port={$this->puerto};
                    charset={$this->charset};
                ",
                $this->usuario,
                $this->contrasena,
                $this->atributos    
            );
        }/* __construct */

    }/* Conexion */

?>