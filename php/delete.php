<?php 
    include 'conexion.php';

    $titulo = $_POST['title'];

    $validar_login_usuario =  mysqli_query($conexion, "SELECT * FROM libro WHERE titulo= '$titulo'");
  
    if (mysqli_num_rows($validar_login_usuario) > 0){

        $query = "DELETE FROM libro WHERE titulo = $titulo";
        $ejecutar = mysqli_query($conexion, $query);
        echo'<script>
            alert("Libro eliminado");
            window.location = "../index_Admin.php";
            </script>';
         exit();

    }else{
        echo'<script>
            alert("El libro no existe o ya fue eliminado");
            window.location = "../index_Admin.php";
            </script>';
        exit();
    }
    
?>