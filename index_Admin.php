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
        <h2>Registrar o Eliminar Libros</h2>
        <ol class="breadcrumb">
          <li><a href="index_Admin.php">Inicio</a></li>                   
          <li class="active">Libros</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->

<section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Registrar Libro </h4>
                 <form action="php/add.php"  method = "post" class="aa-login-form">
                  <label for="">Titulo<span>*</span></label>
                  <input type="text" placeholder="Titulo" class="form-control" name="titulo">
                  <label for="">Genero<span>*</span></label>
                  <input type="text" placeholder="Genero" class="form-control" name="genero">
                  <label for="">Autor<span>*</span></label>
                  <input type="text" placeholder="Autor" class="form-control" name = "autor">
                  <label for="">Cantidad<span>*</span></label>
                  <input type="number" placeholder="Cantidad" min = "0" class="form-control" name ="cantidad">
                  <label for="">Precio<span>*</span></label>
                  <input type="number" placeholder="Precio" min ="0" step = ".01" class="form-control" name= "precio">
                  <label for="">Portada de Libro<span>*</span></label>
                  <input type="file" accept="image/*" style="color: transparent"  capture="camera" onChange="actualiza(this.files[0].name)"class="form-control" >
                  <button type="submit" class="aa-browse-btn">Registrar</button>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Eliminar Libro</h4>
                 <!--Aqui voy -->
                 <form  action="php/delete.php" class="aa-login-form" method = "post">
                    <label for="">Titulo<span>*</span></label>
                    <input type="text" placeholder="Titulo" class="form-control" name="title" required>
                    <button type="submit" class="aa-browse-btn">Eliminar</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
<!--
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
             <h2>Registro de libros</h2>
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">

                   <form class="comments-form contact-form" action="php/add.php"  method = "post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Autor" class="form-control" name = "autor">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Titulo" class="form-control" name="titulo">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="number" placeholder="cantidad" min = "0" class="form-control" name ="cantidad">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="number" placeholder="Precio" min ="0" step = ".01" class="form-control" name= "precio">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Genero" class="form-control" name="genero">
                        </div>
                      </div>
                    </div> 
                      
                      <div class="col-md-6">  
                        <script src = "js/main.js"></script> 
                      <div class="form-group"> 
                                        
                        <input type="file" accept="image/*" style="color: transparent"  capture="camera" onChange="actualiza(this.files[0].name)"class="form-control" >
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">                        
                        <input type="text" readonly="readonly"  id="m1" value="Imagen" class="form-control" name = "imagen">
                        </div>
                      </div>

                    <div class="form-group">                        
                      <textarea class="form-control" rows="3" placeholder="Detalle" name = "detalle"></textarea>
                    </div>
                    <button class="aa-secondary-btn" >Registrar</button>
                  </form>

                  
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                       <img src="img/2.png" alt="">
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <section id="aa-contact">
      <div class="col-md-12">
         <div class="aa-contact-area">
             <h2>Eliminar libros</h2>
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">

                   <form class="comments-form contact-form" action="php/delete.php"  method = "post">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Titulo" class="form-control" name="title" required>
                        </div>
                      </div>
                    <button class="aa-secondary-btn" >Eliminar</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                       <img src="img/libro.png" alt="">
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
 </section>
-->


       </div>
     </div>
   </div>
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

</html>