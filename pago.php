<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy Books pagos</title>
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
    <link href ="css/estilo.css" rel = "stylesheet">   

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    
   
</head>

<body>
 <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span class="fa fa-leanpub"></span>
        <p></p>
        <span>Cargando</span>
      </div>
    </div> 
    <header class="site-header">
        <div class="contenedor">
            <div class="barra">
               
                    <h1 class="no-margin">Seguimiento de pago</h1>
               
       
            </div>
            <div class=" texto-header">
                <h2 class="no-margin color">Escoge algun metodo para poder segir con los pagos</h2>

            </div>
        </div>
    </header>

    <main class="contenedor">

        <div class="grid centrar-columnas">
            <div class="columna-12">
                
            </div>

            <div class="columna-10 contacto-formulario">
                <form action="#">
                     <div class="aa-product-inner">
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#debito" data-toggle="tab"> <span class="fa fa-cc-mastercard"></span></a></li>
                                    <li><a href="#paypal" data-toggle="tab"><span class="fa fa-paypal"></span></a></li>
                                </ul>

                            <div class="tab-content">
                                 <div class="tab-pane fade in active" id="debito">
                                        <div class="panel panel-default aa-checkout-billaddress">
                                                 <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <select>
                                                            <option value="0">Selecciona la ubiación</option>
                                                            <option value="1">Australia</option>
                                                            <option value="2">Afganistan</option>
                                                            <option value="3">Bangladesh</option>
                                                            <option value="4">Belgium</option>
                                                            <option value="5">Brazil</option>
                                                            <option value="6">Canada</option>
                                                            <option value="7">China</option>
                                                            <option value="8">Denmark</option>
                                                            <option value="9">Egypt</option>
                                                            <option value="10">India</option>
                                                            <option value="11">Iran</option>
                                                            <option value="12">Israel</option>
                                                            <option value="13">Mexico</option>
                                                            <option value="14">UAE</option>
                                                            <option value="15">UK</option>
                                                            <option value="16">USA</option>
                                                            </select>
                                                        </div>                             
                                                        </div>                            
                                                    </div>    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="Nombre de la tarjeta*">
                                                        </div>                             
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="Numero de tarjeta*">
                                                        </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="month" placeholder="Date of birth">
                                                        </div>                             
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="csv" placeholder="CSV*">
                                                        </div>
                                                        </div>
                                                    </div>                      
                                            </div>
                                        </div>

                                        <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Pagar</a>

                                    </div>

                                    <div class="tab-pane fade" id="paypal">
                                
                                    <div class="tab-pane fade in active">
                                        <div class="panel panel-default aa-checkout-billaddress">
                                                <p> Para completar la transacción, te enviaremos a los servidores seguros de PayPal.</p>
                                                                        
                                            </div>
                                        </div>
                                            
                                                    <a href="https://www.paypal.com/webscr?cmd=_express-checkout&token=EC-0L864318A86502603&useraction=commit" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Pagar</a>

                                            </div>

                                    </div>
                         </div>
                    </div>
                            
                </form>
            </div>
        </div>

    </main>

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
  <script src="js/carrito.js"></script>
  <script src="js/pedido.js"></script>
  <script src="js/compra.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>


</body>

</html>
