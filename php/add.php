<?php 

    include 'conexion.php';

    $autor = $_POST['autor'];
    $titulo = $_POST['titulo']; 
    $genero =  $_POST['genero']; 
    $cantidad =  $_POST['cantidad']; 
    $precio =  $_POST['cantidad']; 
    $detalle =  $_POST['detalle']; 
    $imagen =  $_POST['imagen']; 

    $direccion = "img/";
    $direccion .= $genero;
    $direccion .= "/";

    $query = "INSERT INTO libro (titulo , genero, detalle, precio, cantidad, imagen, autor) VALUES ('$titulo', '$genero', '$detalle','$precio', '$cantidad', '$direccion$imagen', '$autor')";
    
    $verificar = mysqli_query($conexion, "SELECT * FROM libro WHERE titulo= '$titulo'");
    
    if (mysqli_num_rows($verificar) > 0){
        echo'
         <script>
            alert("Ese libro ya esta registrado, intnte con otro");
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