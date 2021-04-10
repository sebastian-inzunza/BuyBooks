<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Product</title>
    
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
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">  
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
                  <li><a href="cart.html">Mi Carrito</a></li>
                
                  <!-- < li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>-->
                  <!-- <li class="hidden-xs"><a href="cart.html">My Cart</a></li>-->
                  
                   <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>  
                   <li class="hidden-xs"><a href="php/logout.php">Logout</a></li>
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
                     <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <span class="aa-cart-link nav-link dropdown-toggle fa fa-shopping-basket" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></span>
                                    <span>Añadir a Carrito</span>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                               <!-- <th>Imagen</th>
                                                <th>Titulo</th>
                                                <th>Precio</th>
                                                <th></th> -->
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>
                                </div>
                            </li>
                        </ul>
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
              <li><a href="contact.html">Contacto</a></li>
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
                <form action="" class="aa-sort-form">
            
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
                  <img class = "item-imagen" src="<?php echo $data['imagen'];?>" alt="polo shirt img"></a>
                  <a class="aa-add-card-btn agregar-carrito" href="#"><span class=""></span>Add To Cart</a>
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
   <!-- Carrito js -->
   <script src="js/carrito.js"></script>
  <script src="js/pedido.js"></script>
  <script src="js/compra.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>

  </body>
</html>