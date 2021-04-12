<?php 

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena']; 
    //para encriptar 
    $contrasena = hash('sha512',$contrasena);  
    $query = "INSERT INTO usuario(correo, contrasena, tipo) VALUES ('$correo', '$contrasena', 'u')";
    
    $verificar = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo= '$correo'");
    
    if (mysqli_num_rows($verificar) > 0){
        echo'
         <script>
            alert("Ese correo ya esta registrado, intnte con otro");
            window.location = "../account.php";
        </script>';
        exit;
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar)
    {
        echo'<script>
            alert("Usuario registrado");
            window.location = "../index.php";
            </script>';
    }
    mysqli_close($conexion);

?>