<?php
    Function connectDB(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $bd = "e-commerce";

        $conexion = mysql_connect($server, $user, $pass, $bd) or die ("Ha sucedido un error con la conexion");

        return $conexion;
    }
?>