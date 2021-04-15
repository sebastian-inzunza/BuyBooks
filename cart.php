<?php
require "php/carrito.php";

    if (!isset($_SESSION['correo'])){
        echo '
        <script>
            alert("Por favor debes iniciar session");
            window.location = "index.php";
            </script>
        ';
        //session_destroy();
        die();
    }

?>
<style> 
                            
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
  }
</style>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>BuyBooks | Carrito </title>
    
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
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
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
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span class="fa fa-leanpub"></span>
        <p></p>
        <span>Cargando</span>
      </div>
    </div> 
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
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="cart.php">Mi Carrito</a></li>
                  <!-- < li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>-->
                  <!-- <li class="hidden-xs"><a href="cart.html">My Cart</a></li>-->
                   <li class="hidden-xs"><a href="tuspedidos.php">Mis Compras</a></li> 
                   <li class="hidden-xs"><a href="php/logout.php">Cerrar Sesión</a></li>
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
                <a href="index.php">
                  <span class="fa fa-leanpub"></span>
                  <p>Buy<strong>Books</strong> <span>Tus Libros Favoritos</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">CARRITO</span>
                  <span class="aa-cart-notify"><?php echo (empty($_SESSION['CARRITO'])) ?0: count($_SESSION['CARRITO']) ?></span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                      <?php if (!empty($_SESSION['CARRITO'])){?>
                      <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
                        <li>
                          <a class="aa-cartbox-img" href="#"><img src="<?php echo $producto['IMAGEN'];?>" alt="img"></a>
                          <div class="aa-cartbox-info">
                            <h4><a href="#"><?php echo $producto['titulo'];?></a></h4>
                            <p><span>$</span><?php echo $producto['PRECIO'];?></p>
                          </div>
                          <form action="" method="post">
                            <input type="hidden" name= "id" value ="<?php echo $producto['ID'];?>">
                            <button class="aa-remove-product" type= "submit" name = "btnAction" value="eliminar"><span class="fa fa-times"></span></button>
                          </form>
                        </li>
                      <?php }?>
                    </ul>
                         <a class="aa-cartbox-checkout aa-primary-btn" href="cart.php">Checkout</a>
                    <?php }else{?>
                      <ul><li></li>
                      </ul>
                      <a class="aa-cartbox-checkout aa-primary-btn" href="cart.php">Checkout</a>   
                    <?php }?>
                 </div>
              </div>
              <div class="aa-search-box">
                <form action="product-detail.php"  method = "post">
                  <input type="text" name="buscar" id="" placeholder="Buscar... ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
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
              <li><a href="index.php">Inicio</a></li>
              <li><a href="product.php">Catalogo</a></li>
              <!--  <li><a href="product-detail.html">Shop Single</a></li>-->
               <li><a href="contact.php">Contacto</a></li>
               <!--<li><a href="404.html">404 Page</a></li>-->

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
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Inicio</a></li>                   
          <li class="active">Cart</li>
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
                 <?php  if (!empty($_SESSION['CARRITO'])){ ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>TOTAL</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $total =  0;?>
                      <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
                      <tr>
                      <td>
                          <form action="" method="post">
                              <input type="hidden" name= "id" value ="<?php echo $producto['ID'];?>">
                              <button class="remove" type= "submit" name = "btnAction" value="eliminar"><fa class="fa fa-close" ></fa></button>
                          </form>
                      </td>
                        <td><img src="<?php echo $producto['IMAGEN'];?>" alt="img"></td>
                        <td><span class="aa-cart-title"><?php echo $producto['titulo'];?></span></td>
                        <td><span>$</span> <?php echo $producto['PRECIO'];?></td>
                        <td><span class="aa-cart-quantity" type="number"><?php echo $producto['CANTIDAD'];?></span></td>
                        <td><span>$</span><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
                        
                      </tr>
                      <?php $total = $total + ($producto['PRECIO']*$producto['CANTIDAD']);?>
                      <?php } ?>
                      </tbody>
                  </table>
                </div>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <td colspan="3"><h3>Total</h3></td>
                     <td>$<span><?php echo $total ?> </span></td>
                   </tr>
                        
                   <form action="php/pagar.php" method="post">   
                     <tr>
                        <td  colspan = "3"> <h3 for="my-input">Usuario:</h3></td>
                        <td><span><input type="text" name="nombreSesion" readonly="readonly"  value = "<?php echo $_SESSION['correo']?>"></span></td>
                      </tr> 
                          <tr>
                            <td colspan = "3"><h3>Tarjeta:</h3></td>
                            <td> <input type="number" value="" maxlength="16"  name = "numeroTar" placeholder="Numero de tarjeta*" required></td>
                          </tr>
                          <tr>
                            <td colspan = "3"><h3>CSV:</h3></td>
                            <td> <input type="csv" placeholder="CSV*" required></td>
                          </tr>
                          <tr>
                            <td colspan = "3">Fecha Expiracion</td>
                            <td> <input type="month" placeholder="Date of birth" name = "fechaEx"required></td>
                          </tr>
                          <tr>
                            <td colspan = "3"><h3>Envio:</h3></td>
                            <td>
                              <select name="Envio">
                                  <option value="100">Estafeta Agilizado (2-3 dias) $100</option>
                                  <option value="0">FEDEX (4-10 dias) Gratis</option>
                              </select>                   
                             </td>
                          </tr> 
                     </td>
                   </tr>
                  </tbody>
               </table>
               <button class="aa-secondary-btn" name="btnAction" value ="pagar" type="submit" >Proceder a pagar</button>
                          </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div> 
   <?php }else{ ?>

    echo'<script type="text/javascript">
        alert("El carrito esta vacio");
        window.location.href="index.php";
        </script>';
        <?php }?>
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
  <!-- / footer -->



    
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>
  </body>
</html>