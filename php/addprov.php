<?php 

    include 'conexion.php';

   $empresa = $_POST['empresa'];
   $telefono = $_POST['telefono'];
   $direccion = $_POST['direccion'];
   $sitio = $_POST['sitio'];
   $email = $_POST['email'];
    //para encriptar 
  
    $query = "INSERT INTO provedor (nombreEmpresa,telefono,correo,direccion,paginaweb) VALUES ('$empresa', '$telefono', '$email' ,'$direccion','$sitio')";
    
    $verificar = mysqli_query($conexion, "SELECT * FROM provedor WHERE nombreEmpresa= '$empresa'");
    
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar)
    {
        echo'<script>
             window.location = "../agregarProve.php";
            </script>';
    }else{
        echo'<script>
        alert("Hubo en la captura de datos");
        window.location = "../agregarProve.php";
        </script>';
    }
        
    
    mysqli_close($conexion);

?>