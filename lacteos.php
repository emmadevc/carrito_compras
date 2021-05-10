<?php
    include_once 'connection/conn.php';
    $conexion = conectar_bd();
    $query= "SELECT * FROM productos WHERE categoria = 'LACTEOS Y HUEVOS' ORDER BY nombre_producto ASC";
    $result = mysqli_query( $conexion, $query);


    while ($row = mysqli_fetch_array($result)) { echo 
                '<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/productos/'.$row['foto'].'.png" alt="Colorlib Template">
    						<span class="status">Desc</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">'.$row['nombre_producto'].'</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$'.$row['precio'].' por '.$row['unidad_medida'].'</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<!--<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>-->
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<!--<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							--></a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>';
                                                    }
    
?>