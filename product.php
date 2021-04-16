<?php
require "php/carrito.php";
//ESto es una prueba
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>BuyBooks | Catalogo</title>
    
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
                  <p>Buy<strong>Books</strong> <span>Tus Libros Favoritos </span></p>
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
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="product-detail.php"  method = "post">
                  <input type="text" name="buscar" id="" placeholder="Buscar...">
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
              <li><a href="product.php">Catalogo <span></span></a></li>
              <li><a href="contact.php">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
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
        <h2>Libros de todo tipo</h2>
        <ol class="breadcrumb"></ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
          
              <div class="aa-product-catg-head-left">
                
            
                 <!-- <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Nombre</option>
                    <option value="3">Autor</option>
                    <option value="4">Genero</option>
                  </select>
                </form>-->
              </div>
              <div class="aa-product-catg-head-right">
                <!--<a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>-->
              </div>
            
            <div class="aa-product-catg-body" id="lista-product">
              <ul class="aa-product-catg">
                <?php
                  require "php/conexion.php";
                  $consulta = "SELECT * FROM libro";
                  $resultado= mysqli_query($conexion,$consulta);
                  while($data = mysqli_fetch_array($resultado))
                  { 
                ?>
                <!-- start single product item -->
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
               
              <!-- quick view modal -->                  
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
                                      <a class="simpleLens-lens-image" data-lens-image="<?php echo $data['imagen'];?>">
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
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p><?php echo $data['detalle'];?></p>
                           
                            <div class="aa-prod-quantity">
                              <p class="aa-prod-category">
                                Categoria: <span><?php echo $data['genero'];?></span>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <?php
                }
              ?>
              <!-- / quick view modal -->   
            </div>
            <!--<div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>-->
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <!-- single sidebar -->
            <!-- single sidebar -->
            <!-- single sidebar -->
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Agregados recientemente</h3>
              <div class="aa-recently-views">
                <ul>
                <?php
                            
                            $consulta= "SELECT * FROM libro";
                            $resultado= mysqli_query($conexion,$consulta);
                            while($data = mysqli_fetch_array($resultado))
                            { 
                              $cont = 32;
                              if($data['id']>=$cont){
                       ?>

                  <li>
                    <img class="aa-cartbox-img"alt="img" src="<?php echo $data['imagen'];?>">
                    <div class="aa-cartbox-info">
                    <h4 class="aa-product-title item-title"><?php echo $data['titulo'];?></h4>
                    <span class="aa-product-price">$<span class="aa-product-price item-precio"><?php echo $data['precio'];?></span></span>
                    </div>                    
                  </li>
                  <?php
                        }
                        $cont++;
                      }
                    ?>
                </ul>
              </div>                            
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Productos mejor valorados</h3>
              <div class="aa-recently-views">
                <ul>
                <?php
                            
                            $consulta= "SELECT * FROM libro";
                            $resultado= mysqli_query($conexion,$consulta);
                            while($data = mysqli_fetch_array($resultado))
                            { 
                          
                              if($data['precio']>=400){
                       ?>
                  <li>
                    <img  class="aa-cartbox-img "alt="img" src="<?php echo $data['imagen'];?>">
                    <div class="aa-cartbox-info">
                    <h4 class="aa-product-title item-title"><?php echo $data['titulo'];?></h4>
                    <span class="aa-product-price">$<span class="aa-product-price item-precio"><?php echo $data['precio'];?></span></span>
                    </div>                    
                  </li>
                  <?php
                        }
              
                      }
                    ?>

                </ul>
              </div>                            
            </div>
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->


  <!-- Subscribe section -->
  <!-- / Subscribe section -->

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
                    <li><a href="#">catalogo</a></li>
                    <li><a href="#">Contacto</a></li>
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
    </div>
    <!-- footer-bottom -->
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area"></div>
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
  </body>
</html>