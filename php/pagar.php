<?php 
    include 'conexion.php';
    include 'carrito.php';
?>

<?php 
    if($_POST){
        $total=0;
        $nombre = $_POST['nombreSesion'];
        $numeroTar = $_POST['numeroTar'];
        $libo = "";

        foreach($_SESSION['CARRITO']  as $indice=>$producto){
                $total = $total +($producto['PRECIO']* $producto['CANTIDAD']);
            $libo .= $producto['titulo'];
            $libo .= ", ";
            }
            
            $query = "INSERT INTO tbventas(id,fecha,correo,total,estatus,numeroTarjeta,libros) 
            VALUES (NULL, now(), '$nombre', '$total', 'PENDIENTE', '$numeroTar', '$libo')";
            $ejecutar = mysqli_query($conexion, $query);

            if ($ejecutar)
            {
                echo'<script>
                    alert("JALO")
                    window.location = "../index.php";
                    </script>';
            }else{
                echo'<script>
                alert("nO")
                </script>';
            }
          
    }
        
?>