<?php 
    include "config.php" ;
    include "carrito.php";

    include_once 'connection/conn.php';
    $conexion = conectar_bd();
    $query= "SELECT * FROM cat_producto ORDER BY nombre_prod ASC";
    $result = mysqli_query( $conexion, $query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><link rel="stylesheet" href="css/style_search.css">
      
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      
      
    <script src="js/jquery1.min.js"></script>  


<!--
<script>
  $(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"buscar.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#cont').html(data);
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data(); 
    }
  });
});
</script>
-->


      
<script>
  $(document).on('ready',function(){       
    $('#todos').click(function(){
        $('#todos').addClass('active');
        $('#ba').removeClass('active');
        $('#la').removeClass('active');
        $('#pe').removeClass('active');
        $('#ce').removeClass('active');
        $('#hi').removeClass('active');
        var url = "todos.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: "todos", 
           success: function(data)             
           {
             $('#cont').html(data);               
           }
       });
    });
});
</script>  
      
<script>
  $(document).on('ready',function(){       
    $('#ba').click(function(){
        $('#todos').removeClass('active');
        $('#ba').addClass('active');
        $('#la').removeClass('active');
        $('#pe').removeClass('active');
        $('#ce').removeClass('active');
        $('#hi').removeClass('active');
        var url = "basicos.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: "basicos", 
           success: function(data)             
           {
             $('#cont').html(data);               
           }
       });
    });
});
</script>  

<script>
  $(document).on('ready',function(){       
    $('#la').click(function(){
        $('#todos').removeClass('active');
        $('#ba').removeClass('active');
        $('#la').addClass('active');
        $('#pe').removeClass('active');
        $('#ce').removeClass('active');
        $('#hi').removeClass('active');
        var url = "lacteos.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: "lacteos", 
           success: function(data)             
           {
             $('#cont').html(data);               
           }
       });
    });
});
</script>  

<script>
  $(document).on('ready',function(){       
    $('#pe').click(function(){
        $('#todos').removeClass('active');
        $('#ba').removeClass('active');
        $('#la').removeClass('active');
        $('#pe').addClass('active');
        $('#ce').removeClass('active');
        $('#hi').removeClass('active');
        var url = "perecederos.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: "perecederos", 
           success: function(data)             
           {
             $('#cont').html(data);               
           }
       });
    });
});
</script>  

<script>
  $(document).on('ready',function(){       
    $('#ce').click(function(){
        $('#todos').removeClass('active');
        $('#ba').removeClass('active');
        $('#la').removeClass('active');
        $('#pe').removeClass('active');
        $('#ce').addClass('active');
        $('#hi').removeClass('active');
        var url = "cereales.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: "cereales", 
           success: function(data)             
           {
             $('#cont').html(data);               
           }
       });
    });
});
</script>  

<script>
  $(document).on('ready',function(){       
    $('#hi').click(function(){
        $('#todos').removeClass('active');
        $('#ba').removeClass('active');
        $('#la').removeClass('active');
        $('#pe').removeClass('active');
        $('#ce').removeClass('active');
        $('#hi').addClass('active');
        var url = "higiene.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: "higiene", 
           success: function(data)             
           {
             $('#cont').html(data);               
           }
       });
    });
});
</script>  
 

      
      
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">VCarranza</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comprar</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="productos.php">Productos</a>
              	<a class="dropdown-item" href="carrito.php">Carrito</a>
              </div>
            </li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Iniciar Sesión</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo (empty($_SESSION['carro']))?0:count($_SESSION['carro']); ?>]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Hasta</a></span> <span>tu Casa</span></p>
            <h1 class="mb-0 bread">Escoge tus Productos</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section" id="indice">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a id="todos" href="#indice" class="active">Todos</a></li>
    					<li><a id="ba" href="#indice">Básicos</a></li>
    					<li><a id="la" href="#indice">Lácteos y huevos</a></li>
    					<li><a id="pe" href="#indice">Perecederos</a></li>
    					<li><a id="ce" href="#indice">Cereales</a></li>
    					<li><a id="hi" href="#indice">Higiene</a></li>
    					<li>
   <div class="search">
      <input type="text" class="searchTerm" name="search_text" id="search_text" placeholder="Buscar">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</li>
    				</ul>
    			</div>
    		</div>
            
            
            
    		<div class="row" id="cont">
                
                
                
  <?php  	echo $mensaje;		
         while ($row = mysqli_fetch_array($result)) { echo 
                '<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/productos/'.$row['foto'].'.png" >
    						<span class="status">Desc</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">'.$row['nombre_prod'].'</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$'.$row['precio'].' por '.$row['unidad_med'].'</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<!--<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>-->
                                    <form action="" method="post">
                                    
                                     <input hidden type="text" name="foto" id="foto" value="'.openssl_encrypt($row['foto'],COD,KEY).'">
                                     <input hidden type="text" name="id" id="id" value="'.openssl_encrypt($row['id_producto'],COD,KEY).'">
                                     <input hidden type="text" name="nombre" id="nombre" value="'.openssl_encrypt($row['nombre_prod'],COD,KEY).'">
                                     <input hidden type="text" name="precio" id="precio" value="'.openssl_encrypt($row['precio'],COD,KEY).'">
                                     <input hidden type="text" name="cant" id="cant" value="'.openssl_encrypt(1,COD,KEY).'">
                                    
	    							<!--<a href="#" id="add" class="buy-now d-flex justify-content-center align-items-center mx-1" type="submit" name="btnAccion"></a>-->
	    								<button class="buy-now d-flex justify-content-center align-items-center mx-1 " value="Agregar" name="btnAccion"><span><i class="ion-ios-cart"></i></span></button>
                                    </form>
	    							<!--<a href="#" class="ion-ios-heart">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>-->
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>';
                                                    }
 ?>   			
                
                
                
                
                
    		</div>
<!--
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
-->
    	</div>
    </section>

     <?php include "footer.php" ;
   ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>