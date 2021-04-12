<?php
session_start();

    $mensaje = "";


    if(isset($_POST['btnAction'])){

        switch($_POST['btnAction']){

            case 'Agregar':

                

                    if(is_numeric(( $_POST['id']))){

                        $ID =  $_POST['id'];

                        $mensaje.="ID Correcto... ".$ID."<br/>";

                    }else{

                        $mensaje.="Upss... ID Incorecto".$ID."<br/>";

                    }





                    if(is_string(( $_POST['titulo']))){

                        $titulo =  $_POST['titulo'];

                        $mensaje.="titulo ".$titulo."<br/>";

                    }else{

                        $mensaje.="Upss... Algo paso con tu titulo".$titulo."<br/>";

                    }


                    if(is_numeric(( $_POST['cantidad']))){

                        $CANTIDAD =  $_POST['cantidad'];

                        $mensaje.="Cantidad ".$CANTIDAD."<br/>";

                    }else{

                        $mensaje.="Upss... ID Incorecto".$CANTIDAD."<br/>";

                    }

                    if(is_numeric(( $_POST['precio']))){

                        $PRECIO =  $_POST['precio'];

                        $mensaje.="El precio es... ".$PRECIO."<br/>";

                    }else{

                        $mensaje.="Upss... ID Incorecto".$PRECIO."<br/>";

                    }

                    if(is_string(( $_POST['imagen']))){

                        $imagen =  $_POST['imagen'];

                        $mensaje.="imagen ".$imagen."<br/>";

                    }else{

                        $mensaje.="Upss... Algo paso con tu imagen".$imagen."<br/>";

                    }



                    if(!isset($_SESSION['CARRITO'])){    //no se olviden poner el " ! "

                        $producto=array(

                           'ID'=>$ID,

                           'titulo'=>$titulo,

                           'CANTIDAD'=>$CANTIDAD,

                           'PRECIO'=>$PRECIO, 

                           'IMAGEN' =>$imagen

                        );

                        $_SESSION['CARRITO'][0]=$producto;



                    }else{
                        $idProductos = array_column($_SESSION['CARRITO'], 'ID');

                        if(in_array($ID, $idProductos)){
                            echo'<script > alert("El producto ya a sido seleccionado");</script>';
                        }else{
                            $NumeroProductos=count($_SESSION['CARRITO']);
                            $producto=array(
    
                                'ID'=>$ID,
    
                                'titulo'=>$titulo,
    
                                'CANTIDAD'=>$CANTIDAD,
    
                                'PRECIO'=>$PRECIO, 
    
                                'IMAGEN' =>$imagen
    
                             );
    
                             $_SESSION['CARRITO'][$NumeroProductos]=$producto;
    
                        }
    
                        $mensaje=print_r($_SESSION,true);
    
                        }

                break;

                case 'eliminar':
                    if(is_numeric(( $_POST['id']))){

                        $ID =  $_POST['id'];

                        foreach($_SESSION['CARRITO']  as $indice=>$producto){
                            if($producto['ID'] == $ID){                 
                                unset($_SESSION['CARRITO'][$indice]);
                                echo'<script > alert("Elemento borrado");</script>';
                            }

                        }

                    }else{

                        $mensaje.="Upss... ID Incorecto".$ID."<br/>";

                    }
                break;

                case 'pagar':
                    foreach($_SESSION['CARRITO']  as $indice=>$producto){              
                            unset($_SESSION['CARRITO'][$indice]); 
                        }

        }

    }

?>