<?php 
    include 'conexion.php';
    include 'carrito.php';
?>

<?php 
    if($_POST){
        $total=0;
        $nombre = $_POST['nombreSesion'];
        $numeroTar = $_POST['numeroTar'];
        $Envio = $_POST['Envio'];        
        $libo = "";

        foreach($_SESSION['CARRITO']  as $indice=>$producto){
                $total = $total +($producto['PRECIO']* $producto['CANTIDAD']);
                $libo .= $producto['titulo'];
                $libo .= ", ";
            }

            $total += $Envio;

            if($Envio == '100')
            {
                $compania = 'Estafeta Agilizado ($100)';
            }
            else{
                $compania = 'FEDEX ($0)';
            }
            
            $query = "INSERT INTO tbventas(id,fecha,correo,total,estatus,numeroTarjeta,libros, envio ) 
            VALUES (NULL, now(), '$nombre', '$total', 'PENDIENTE', '$numeroTar', '$libo','$compania')";
            $ejecutar = mysqli_query($conexion, $query);
            if ($ejecutar)
            {
                foreach($_SESSION['CARRITO']  as $indice=>$producto){              
                    unset($_SESSION['CARRITO'][$indice]);
                } 
                echo'<script>
                    window.location = "../index.php";
                    </script>';
            }else{
                echo'<script>
                alert("Hubo un problema con la transaccion")
                </script>';
            }
          
    }
        
?>