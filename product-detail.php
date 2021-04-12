<?php
require "php/carrito.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Product Detail</title>
    
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
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
               
                </div>
                <!-- / language -->

         
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">My Account</a></li>
                  <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
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
                  <p>Buy <strong>Books</strong> <span>Tus Libros Favoritos</span></p>
                </a>
              </div>
              <!-- / logo  -->
               <!-- cart box -->
             <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
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
                         <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                    <?php }else{?>
                      <ul><li></li>
                      </ul>
                      <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>   
                    <?php }?>
                 </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="product-detail.php"  method = "post">
                  <input type="text" name="buscar" id="" placeholder="Buscar... " >
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
              <li><a href="product.php">Catalogo </span></a></li>
              <li><a href="contact.html">Contacto</a></li>    
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
      </div>
    </div>
  </section>
  <!-- / menu -->  
 
  <?php
    require "php/conexion.php";
    if(isset($_POST['buscar']))
    {
      $serch = $_POST['buscar'];
      $consulta = "SELECT * FROM libro WHERE titulo = '$serch'";
      $resultado= mysqli_query($conexion,$consulta);
      if(mysqli_num_rows($resultado) > 0)
      {
          $data = mysqli_fetch_array($resultado);

      ?>
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/banner2.png" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2><?php echo $data['titulo'];?></h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Inicio</a></li>         
          <li><a href="product.php">Catalogo</a></li>
          <li class="active"><?php echo $data['titulo'];?></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row" id="lista-product">
                <div class="col-md-5 col-sm-5 col-xs-12">  
                  <img class = "item-imagen" src="<?php echo $data['imagen'];?>" alt="polo shirt img"></a>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <h3 class=" item-title"><?php echo $data['titulo'];?></h3>
                    <span>$<span class="aa-product-view-price item-precio"><?php echo $data['precio'];?></span></span>
                    <p class="aa-product-avilability">Disponibles: <span><?php echo $data['cantidad'];?></span></p>
                    <p><?php echo $data['detalle'];?></p>
                    <div class="aa-prod-quantity">
                      <p class="aa-prod-category">Genero: <a href="#"><?php echo $data['genero'];?></a>
                      </p>
                    </div>     
                    <form action="index.php" method= "post">
                                <input type="hidden" name="id" id="id" value = "<?php echo $data['id'];?>">
                                <input type="hidden" name="titulo" id="titulo" value= "<?php echo $data['titulo'];?>">
                                <input type="hidden" name="precio" id="precio"  value= "<?php echo $data['precio'];?>">
                                <input type="hidden" name="imagen" id="imagen"  value= "<?php echo $data['imagen'];?>">
                                <input type="hidden" name="cantidad" id="cantidad"  value= "<?php echo 1?>">
                                <button class="aa-add-to-cart-btn " name = "btnAction" type = "submit" value="Agregar" ><span class=""></span>Add To Cart</button>
                            <!-- <a class="aa-add-card-btn agregar-carrito" href="#" name = "btnAction" type = "submit"><span class=""></span>Add To Cart</a>-->
                            </form>        
                      <!--<a class="aa-add-to-cart-btn agregar-carrito" href="#">Añadir a Carrito</a>-->
                                                              
                </div>

              </div><!--AQUIIII-->
      </div>
            <!--<div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#review" data-toggle="tab">Reviews</a></li>                
              </ul>

              < Tab panes -->
              <!--<div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.</p>
                </div>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>2 Reviews for T-Shirt</h4> 
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                  
                 <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                    review form 
                   <<form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div>

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div>            
              </div>
            </div>-->
            <!-- Related product -->
            
            <div class="aa-product-related-item">
              <h3>Productos Relacionados</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                <!-- start single product item -->
                <?php
                  $genero = $data['genero'];
                  $Query = "SELECT * FROM libro WHERE genero = '$genero'";
                  $resultado= mysqli_query($conexion,$Query);
                  while($row = mysqli_fetch_array($resultado))
                  { 
                             
                  if($row['titulo'] != $data['titulo'])
                  {
                 ?>
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="<?php echo $row['imagen'];?>" alt="polo shirt img"></a>
                    <form action="index.php" method= "post">
                                <input type="hidden" name="id" id="id" value = "<?php echo $row['id'];?>">
                                <input type="hidden" name="titulo" id="titulo" value= "<?php echo $row['titulo'];?>">
                                <input type="hidden" name="precio" id="precio"  value= "<?php echo $row['precio'];?>">
                                <input type="hidden" name="imagen" id="imagen"  value= "<?php echo $row['imagen'];?>">
                                <input type="hidden" name="cantidad" id="cantidad"  value= "<?php echo 1?>">
                                <button class="aa-add-card-btn " name = "btnAction" type = "submit" value="Agregar"><span class=""></span>Add To Cart</button>
                            <!-- <a class="aa-add-card-btn agregar-carrito" href="#" name = "btnAction" type = "submit"><span class=""></span>Add To Cart</a>-->
                            </form>
                     <figcaption>
                      <h4 class="aa-product-title"><a href="#"><?php echo $row['titulo'];?></a></h4>
                      <span class="aa-product-price">$<?php echo $row['precio'];?></span>
                    </figcaption>
                  </figure>                     
                  <div class="aa-product-hvr-content">
                    <!--<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>-->
                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#<?php echo $row['id'];?>"><span class="fa fa-search"></span></a>                            
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
                 <!-- start single product item -->
                <?php
                  }
                }
                ?>                                                                             
              </ul>
              <?php
              //$Query = "SELECT * FROM libro WHERE genero = '$genero'";
              $resultado= mysqli_query($conexion,$Query);
              while($row = mysqli_fetch_array($resultado))
              { 
                if($row['titulo'] != $data['titulo'])
                {
              ?>
              <!-- quick view modal -->                  
              <div class="modal fade" id="<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="<?php echo $row['imagen'];?>" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3><?php echo $row['titulo'];?></h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$<?php echo $row['precio'];?></span>
                              <p class="aa-product-avilability">Disponibles: <span><?php echo $row['cantidad'];?></span></p>
                            </div>
                            <p><?php echo $row['detalle'];?></p>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Genero: <a href="#"><?php echo $row['genero'];?></a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div> 
            <?php
              }
            }
          }
          else{
          ?>
           <section id="aa-catg-head-banner">
              <img src="img/banner2.png" alt="fashion img">
                <div class="aa-catg-head-banner-area">
                  <div class="container">
                    <div class="aa-catg-head-banner-content">
                      <h2>Upps.. No fue posible encontrar el libro...</h2>
                      <ol class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>         
                        <li><a href="product.php">Catalogo</a></li>
                       
                      </ol>
                    </div>  
                  </div>
                </div>
            </section>
          <?php
          }
        }
?>
          </div>
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
    <!-- footer-bottom -->
    <!--<div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>-->
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


  </body>
</html>