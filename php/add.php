<?php 

    include 'conexion.php';

    $autor = $_POST['autor'];
    $titulo = $_POST['titulo']; 
    $genero =  $_POST['genero']; 
    $cantidad =  $_POST['cantidad']; 
    $precio =  $_POST['precio']; 
    $detalle =  $_POST['detalle']; 
    $imagen =  $_POST['imagen']; 
    $editorial =  $_POST['editorial']; 

    $direccion = "img/";
    $direccion .= $genero;
    $direccion .= "/";

    $query = "INSERT INTO libro (titulo , genero, detalle, precio, cantidad, imagen, autor, editorial) VALUES ('$titulo', '$genero', '$detalle','$precio', '$cantidad', '$direccion$imagen', '$autor', '$editorial')";
    
    $verificar = mysqli_query($conexion, "SELECT * FROM libro WHERE titulo= '$titulo'");
    
    if (mysqli_num_rows($verificar) > 0){
        echo'
         <script>
            alert("Ese libro ya esta registrado, intente con otro");
            window.location = "../index_Admin.php";
        </script>';
        exit;
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar)
    {
        echo'<script>
            alert("Libro registrado");
            window.location = "../index_Admin.php";
            </script>';
    }
    mysqli_close($conexion);

?>