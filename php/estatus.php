<?php
require "conexion.php";

$id = $_POST['id-pedido'];
$estatus = $_POST['estatus'];

$validar_login_usuario =  mysqli_query($conexion, "SELECT * FROM tbventas WHERE id= '$id'");

if (mysqli_num_rows($validar_login_usuario) > 0){
    $data=mysqli_fetch_array($validar_login_usuario);
    $id = $data['id'];
    $query = "UPDATE tbventas SET estatus = '$estatus' WHERE id= '$id'";
    $ejecutar = mysqli_query($conexion, $query);

    echo'<script>
        window.location = "../segumiento_Admin.php";
        </script>';
     exit();
}else{
    echo'<script>
        alert("El libro no existe o ya fue eliminado");
        window.location = "../segumiento_Admin.php";
        </script>';
    exit();
}
?>