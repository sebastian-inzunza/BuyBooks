<?php
require "php/carrito.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>BuyBooks | Inicio </title>
    
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
                   <li class="hidden-xs"><a href="tuspedidos.php">Mis compras</a></li>
                   <li><a href="" data-toggle="modal" data-target="#login-modal">Iniciar Sesión</a></li>  
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
             <!--  <div class="aa-cartbox">
                <a class="aa-cart-link" href="checkout.php">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Añadir a Carrito</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div id="carrito">
                    <div class="aa-cartbox-summary" id="lista-carrito">
                      <ul>
                      </ul>
                      <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                    </div>
                </div>
              </div>-->
              <!-- / cart box -->
               
              <!--<div class="aa-cartbox  collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                
                                <a href="">Carrito(<?php //; echo (empty($_SESSION['CARRITO'])) ?0: count($_SESSION['CARRITO']) ?>) </a></span>
                                
                                <div class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    
                                </div>
                            </li>
                        </ul>
                    </div> -->
                <!-- <div class="aa-cartbox">
                    <a class="aa-cart-link" href="#">
                      <span class="fa fa-shopping-basket"></span>
                      <span class="aa-cart-title">SHOPPING CART</span>
                      <span class="aa-cart-notify"><?php ; echo (empty($_SESSION['CARRITO'])) ?0: count($_SESSION['CARRITO']) ?></span>
                    </a>
               <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                </div>
              </div>-->
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

  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                   
                    <li class="active"><a href="#Filosofia" data-toggle="tab">Filosofia</a></li>
                    <?php
                      require "php/conexion.php";
                      $Distinc= "SELECT DISTINCT genero FROM libro";
                      $result= mysqli_query($conexion,$Distinc);
                      while($row = mysqli_fetch_array($result))
                           { 
                             if($row['genero']!= "Filosofia"){
                      ?>
                    <li><a href="#<?php echo $row['genero']?>" data-toggle="tab"><?php echo $row['genero']?></a></li>
                    
                    <?php
                             }
                            }
                    ?>
                  </ul>
                  <!-- Tab panes -->
                <div class="tab-content"  id="lista-product">
                    <!-- Inicio Categoria Filosofia-->
                  <div class="tab-pane fade in active" id="Filosofia">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <?php
                            
                             $consulta= "SELECT * FROM libro";
                             $resultado= mysqli_query($conexion,$consulta);
                             while($data = mysqli_fetch_array($resultado))
                             { 
                               if($data['genero']=="Filosofia"){
                        ?>
                        <li>
                          <figure>
                            
                            <a class="aa-product-img" href="#"><img class = "item-imagen" src="<?php echo $data['imagen'];?>" alt="polo shirt img"></a>
                            <form action="" method= "post">
                                <input type="hidden" name="id" id="id" value = "<?php echo $data['id'];?>">
                                <input type="hidden" name="titulo" id="titulo" value= "<?php echo $data['titulo'];?>">
                                <input type="hidden" name="precio" id="precio"  value= "<?php echo $data['precio'];?>">
                                <input type="hidden" name="imagen" id="imagen"  value= "<?php echo $data['imagen'];?>">
                                <input type="hidden" name="cantidad" id="cantidad"  value= "<?php echo 1?>">
                                <button class="aa-add-card-btn " name = "btnAction" type = "submit" value="Agregar"><span class=""></span>Añadir a carrito</button>
                            <!-- <a class="aa-add-card-btn agregar-carrito" href="#" name = "btnAction" type = "submit"><span class=""></span>Add To Cart</a>-->
                            </form>

                           
                              <figcaption>
                              <h4 class="aa-product-title item-title"><a href="#"> <?php echo $data['titulo'];?> </a></h4>
                              <span class="aa-product-price">$<span class="aa-product-price item-precio"><?php echo $data['precio'];?></span></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <!--<a href="#" data- ="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>-->
                            <a href="#" class="item-id" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#<?php echo $data['id'];?>" data-id="<?php echo $data['id'];?>"><span class="fa fa-search"></span></a>                          
                          </div>
                          <!-- product badge -->
                          <?php
                           if($data['cantidad'] > 0){
                              if($data['cantidad'] < 5){
                               
                             
                        ?>
                          <span class="aa-badge aa-hot" href="#">ULTIMOS!</span>
                          <?php
                               }
                               else{
                               ?>
                          <span class="aa-badge aa-sale" href="#">DISPONIBLE!</span>
                          <?php
                             }
                          }
                          else{
                        ?>
                         <span class="aa-badge S" href="#">AGOTADOS!</span>
                         <?php
                               }
                        ?>
                        </li>
                        <?php
                               }
                             }
                        ?>
                      </ul>
                      <a class="aa-browse-btn" href="product.php">Ver Todo los Libros <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                    <!-- / Categoria Filosofian -->
                    
                    <!-- Inicio Todas las demas Categorias-->
                    <?php
                      $Distinc= "SELECT DISTINCT genero FROM libro";
                      $result= mysqli_query($conexion,$Distinc);
                      while($row = mysqli_fetch_array($result))
                           { 
                             if($row['genero']!= "Filosofia"){
                      ?>
                  <div class="tab-pane fade" id="<?php echo $row['genero'];?>">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <?php
                            
                             $consulta= "SELECT * FROM libro";
                             $resultado= mysqli_query($conexion,$consulta);
                             while($data = mysqli_fetch_array($resultado))
                             { 
                               if($data['genero']==$row['genero']){
                        ?>
                        <li>
                          <figure>
                          <a class="aa-product-img" href="#"><img class = "item-imagen" src="<?php echo $data['imagen'];?>" alt="polo shirt img"></a>
                            <form action="" method= "post">
                                <input type="hidden" name="id" id="id" value = "<?php echo $data['id'];?>">
                                <input type="hidden" name="titulo" id="titulo" value= "<?php echo $data['titulo'];?>">
                                <input type="hidden" name="precio" id="precio"  value= "<?php echo $data['precio'];?>">
                                <input type="hidden" name="imagen" id="imagen"  value= "<?php echo $data['imagen'];?>">
                                <input type="hidden" name="cantidad" id="cantidad"  value= "<?php echo 1?>">
                                <button class="aa-add-card-btn " name = "btnAction" type = "submit" value="Agregar"><span class=""></span>Añadir a carrito</button>
                            <!-- <a class="aa-add-card-btn agregar-carrito" href="#" name = "btnAction" type = "submit"><span class=""></span>Add To Cart</a>-->
                            </form>
                              <figcaption>
                              <h4 class="aa-product-title item-title"><a href="#"> <?php echo $data['titulo'];?> </a></h4>
                              <span class="aa-product-price">$<span class="aa-product-price item-precio"><?php echo $data['precio'];?></span></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <!--<a href="#" data- ="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>-->
                            <a href="#" class="item-id" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#<?php echo $data['id'];?>" data-id="<?php echo $data['id'];?>"><span class="fa fa-search"></span></a>                          
                          </div>
                          
                          <!-- product badge -->
                          <?php
                           if($data['cantidad'] > 0){
                              if($data['cantidad'] < 5){
                               
                             
                        ?>
                          <span class="aa-badge aa-hot" href="#">ULTIMOS!</span>
                          <?php
                               }
                               else{
                               ?>
                          <span class="aa-badge aa-sale" href="#">DISPONIBLE!</span>
                          <?php
                             }
                          }
                          else{
                        ?>
                         <span class="aa-badge aa-sold-out" href="#">AGOTADOS!</span>
                         <?php
                               }
                        ?>
                        </li>
                        <?php
                               }
                             }
                        ?>
                      </ul>
                      <a class="aa-browse-btn" href="product.php">Ver Todo los Libros <span class="fa fa-long-arrow-right"></span></a>
                   </div>
                   <?php
                               }
                              }
                        ?>
                   <!--Fin Novela -->
              </div>

                  <!-- quick view modal -->
                  <?php
                            
                   $result= mysqli_query($conexion,$Distinc);
                  while($row = mysqli_fetch_array($result))
                    {       
                      $resultado= mysqli_query($conexion,$consulta);
                      while($data = mysqli_fetch_array($resultado))
                      { 
                        if($data['genero'] == $row['genero']){
                  ?>
                  <div class="modal fade" id="<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                              <img src="<?php echo $data['imagen'];?>" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3><?php echo $data['titulo'];?></h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$<?php echo $data['precio'];?></span>
                                  <p class="aa-product-avilability">Disponibilidad: <span>En stock</span></p>
                                </div>
                                <p><?php echo $data['detalle'];?></p>
                                <div class="aa-prod-quantity">
                                 <!-- <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>-->
                                  <p class="aa-prod-category">
                                    Category: <a href="#"><?php echo $data['genero'];?></a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                 <!-- <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>-->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->
                  <?php
                      }
                    }
                  }
                  ?>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="img/1.png" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div></div>
  </section>

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

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Iniciar Sesión o Registrarse</h4>
          <!-- Aqui trabajo yo -->
          <form class="aa-login-form" action="php/login.php" method = "post">
            <label for="">Nombre de Usuario<span>*</span></label>
            <input type="text" placeholder="Usuario" name = "correo" required>
            <label for="">Contraseña<span>*</span></label>
            <input type="password" placeholder="Contraseña" name = "contrasena" required>
            <button class="aa-browse-btn" type="submit">Inicar Sesión</button>
            <div class="aa-register-now">
              ¿No tienes cuenta?<a href="account.php">Registrase Ahora!</a>
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