<?php 
    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];  
    //para encriptar
    $contrasena = hash('sha512',$contrasena);  
   

    $validar_login =  mysqli_query($conexion, "SELECT * FROM usuario WHERE correo= '$correo' and contrasena = '$contrasena'" );
    

    
    if (mysqli_num_rows($validar_login) > 0){
        //Aqui hacemos lo de la otra pagina
        $_SESSION['correo'] = $correo;
         header("location: ../index.php");
         exit();
    }
    else{
        echo'<script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
            </script>';
        exit();
    }
    
?>