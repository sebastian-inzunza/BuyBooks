<!DOCTYPE html>
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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>BuyBooks | Compras </title>
    
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
              <li><a href="contact.php">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
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
               <div class="table-responsive">
               
                  <table class="table">
                    <thead>
                      <tr>
                      
                        <th>ID</th>
                        <th>CORREO</th>
                        <th>LIBROS</th>
                        <th>TOTAL</th>
                        <th>ESTATUS</th>
                        <th>ENVIO</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                      <?php
                      require "php/conexion.php";
                      $SELECT= "SELECT * FROM tbventas";
                      $result= mysqli_query($conexion,$SELECT);
                      while($row = mysqli_fetch_array($result))
                      {
                          if($row['correo'] == $_SESSION['correo']){
                      ?>
                        <td><span class="aa-cart-title"><?php echo $row['id'];?></span></td>
                        <td><span><?php echo $row['correo'];?></span></td>
                        <td><span class="aa-cart-quantity"><?php echo $row['libros'];?></span></td>
                        <td><span>$</span><?php echo $row['total'];?></td>
                        <td><span><?php echo $row['estatus'];?></span></td>
                        <td><span><?php echo $row['envio'];?></span></td>
                      </tr>   
                      <?php
                        }
                      }
                      ?>                  
                      </tbody>
                  </table>
                </div>
             <!-- Cart Total view -->
           </div>
         </div>
       </div>
     </div>
   </div> 
 </section>

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

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <!-- Aqui trabajo yo -->
          <form class="aa-login-form" action="php/login.php" method = "post">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email" name = "correo" required>
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name = "contrasena" required>
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.php">Register now!</a>
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
  <!-- Carrito -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>
  </body>
</html>