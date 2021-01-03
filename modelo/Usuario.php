<?php 

    include_once 'Conexion.php';

    class Usuario {

        var $objetos; 

        public function __construct() {

            $db = new Conexion();
            /* echo "<br>";
            echo "<pre>";
                print_r($db);
            echo "</pre>"; */
            $this->acceso = $db->pdo;

            /* echo "<br>";
            echo "<pre>";
                print_r($this->acceso);
            echo "</pre>"; */
        }

        function loguearse( $dni, $pass ) {
            /* Sintaxis usada para hacer una consulta a la BD mediante cuando se usa la API MySQLi, no recomendable. */
            /* $sql = "SELECT * FROM usuario inner join tipo_us on us_tipo = id_tipo_us where dni_user = '$dni' and contrasena_us = '$pass'"; */
        
            $sql = "SELECT * FROM usuario inner join tipo_us on us_tipo=id_tipo_us where dni_us=:dni and contrasena_us=:pass";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':dni'=>$dni, ':pass'=>$pass));
            $this->objetos = $query->fetchall();

            return $this->objetos;
        }



    }

?>