<?php 
    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];  
    //para encriptar
    $contrasena = hash('sha512',$contrasena);  
   

    $validar_login_usuario =  mysqli_query($conexion, "SELECT * FROM usuario WHERE correo= '$correo' and contrasena = '$contrasena' and tipo = 'u'" );
    $validar_login_admin =  mysqli_query($conexion, "SELECT * FROM usuario WHERE correo= '$correo' and contrasena = '$contrasena' and tipo = 'a'" );
    if (mysqli_num_rows($validar_login_usuario) > 0){
        //Aqui hacemos lo de la otra pagina
        $_SESSION['correo'] = $correo;
         header("location: ../index.php");
         exit();
    } elseif (mysqli_num_rows($validar_login_admin) > 0) {
        $_SESSION['correo'] = $correo;
        header("location: ../index_Admin.php");
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