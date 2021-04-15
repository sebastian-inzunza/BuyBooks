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
    
    if (mysqli_num_rows($verificar) > 0){
        echo'
         <script>
            alert("Ese Proveedor ya esta registrado, intente con otro");
            window.location = "../provedores.php";
        </script>';
        exit;
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar)
    {
        echo'<script>
             window.location = "../provedores.php";
            </script>';
    }else{
        echo'<script>
        alert("Hubo un problema en la captura de datos");
        window.location = "../provedores.php";
        </script>';
    }
        
    
    mysqli_close($conexion);

?>