<?php
    session_start();

    if (!isset($_SESSION['correo'])){
        echo '
        <script>
            alert("Por favor debes iniciar session");
           
            </script>
        ';
        session_destroy();
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>BuyBooks | Admin</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/dark-red-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 
    <!-- wpf loader Two -->
  
    <!-- / wpf loader Two -->       
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->



  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                
                <!-- / language -->

                <!-- start currency -->
              
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-user-circle"></span>Sesion iniciada <?php echo $_SESSION['correo']; ?> </p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                <li><a href="php/logout.php"  class="hidden-xs">Cerrar Sesión</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index_Admin.php">
                  <span class="fa fa-leanpub"></span>
                  <p>Buy<strong>Books</strong> <span>Tus Libros Favoritos</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
             
           
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index_Admin.php">Inicio</a></li>
              <li><a href="segumiento_Admin.php">Seguimientos</a></li>
              <li><a href="Provedores.php">Proveedores</a></li>
              <li><a href="pagos_proveedores.php">Pagos a proveedores</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/banner2.png" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Proveedores</h2>
        <ol class="breadcrumb">
          <li><a href="index_Admin.php">Inicio</a></li>                   
          <li class="active">Proveedores</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
               <div class="table-responsive">
               
                  <table class="table">
                    <thead>
                      <tr>
                      
                        <th>Provedor</th>
                        <th>Pago</th>
                        <th>Deuda</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                      <?php
                      require "php/conexion.php";
                      $SELECT = "SELECT *  FROM provedor";
                      $result = mysqli_query($conexion,$SELECT);
                    

                      while($row = mysqli_fetch_array($result))
                      {
                        $nya= "SELECT * from libro";
                        $resulta = mysqli_query($conexion,$nya);
                        $cont = 0;
                        $cona = 0;
                        while($data = mysqli_fetch_array($resulta))
                        {
                          
                            if ( $data['editorial'] == $row['nombreEmpresa'] ){
                                
                                $cont += $data['cantidad'];
                                $cona += $data['precio']*$data['cantidad'];

                              }
                              
                            }
                            if($cona!=0){
                            $porcentaje = ($cont *100)/601;
                            $pagar = $cona/$porcentaje;
                            }
                            
                            if ($row['pago']!="Pagado" && $cona!=0){


                          ?>
                        <td><span class="aa-cart-title"><?php echo $row['nombreEmpresa'];?></span></td>
                        <td><span class="aa-cart-quantity">$<?php echo number_format($pagar,2) ;?></span></td>
                        <td><span class="aa-cart-title"><?php echo $row['pago'];?></span></td>
                      </tr>   
                      <?php
                            }
                      }
                      ?>                  
                      </tbody>
                  </table>
                </div>
         </div>
       </div>
     </div>
   </div> 
 </section>

 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">

           <style> 
                            
                            input[type=number]::-webkit-inner-spin-button, 
                            input[type=number]::-webkit-outer-spin-button { 
                              -webkit-appearance: none; 
                              margin: 0; 
                            }
                    </style>
            
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Provedores</h4>
               <table class="aa-totals-table">
                 <tbody>

                   <form action="php/deuda_prov.php" method="post">   
                     <tr>
                        <td  colspan = "3"> <h3 for="my-input">Provedor:</h3></td>
                        <td><span><input type="text" name="provedor" placeholder="Proveedor" required></span></td>
                      </tr> 
                        
                          <tr>
                          <td colspan = "3"><h3>Estatus:</h3></td>
                          <td colspan = "3"><select name="estatus">
                                  <option value="Pagado">Pagado</option>
                                  <option value="Pendiente">Pendiente</option>
                              </select></td>
                          </tr>
                     </td>
                   </tr>
                  </tbody>
               </table>
               <button class="aa-secondary-btn"  type="submit" >Continuar</button>
            </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div> 
 </section>
 <!-- / Cart view section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Catalogo</a></li>
                    <li><a href="#">Contactanos</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6"></div>
              <div class="col-md-3 col-sm-6"></div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contactanos</h3>
                    <address>
                      <p>Guadalajara Jalisco</p>
                      <p><span class="fa fa-phone"></span>33-62-658-658</p>
                      <p><span class="fa fa-envelope"></span>BuyBooks@correo.com</p>
                    </address>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>

    </footer>
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>  
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
    <!-- To Slider JS -->
    <script src="js/sequence.js"></script>
    <script src="js/sequence-theme.modern-slide-in.js"></script>  
    <!-- Product view slider -->
    <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="js/nouislider.js"></script>
    <!-- Custom js -->
    <script src="js/custom.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/compra.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>
  </body>
</html>