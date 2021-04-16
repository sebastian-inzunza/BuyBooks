<?php 

    include 'conexion.php';

   $provedor = $_POST['provedor'];
   $estado = $_POST['estatus'];
    //para encriptar 
  
    $query = "UPDATE provedor SET pago='$estado' WHERE nombreEmpresa = '$provedor'";
    
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar)
    {
        echo'<script>
            window.location = "../pagos_proveedores.php";
            </script>';
    }else{
        echo'<script>
        alert("Hubo un problema en la captura de datos");
        window.location = "../pagos_proveedores.php";
        </script>';
    }
        
    
    mysqli_close($conexion);

?>