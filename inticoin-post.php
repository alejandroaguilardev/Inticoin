<?php include("include/header.php");include("php/conex_bd.php");
	$id=$_GET['id'];
	$consulta="SELECT * FROM noticias where id='$id'";
	$query=mysqli_query($conexion, $consulta); 
	while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {       
		$nombre=$f['nombre'];
		$imagen1=$f['imagen1'];
		$descripcion=$f['descripcion'];
		$fecha=$f['fecha'];
	}
	$fecha = date("d/m/yy"); 
 ?>

    <div class="btc_main_slider_main_wrapper" >
        <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="website-intro" data-source="gallery" style="background:#000000;padding:0px;">
			<section style="background:  linear-gradient(40deg, #F9B400 20%, #FAA100 51%, #F9B400 90%);">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:4em">
							<h4  style="color: #fff;font-weight: bold"><a href="inticoin-comunidad" style="color: #fff">Blog </a> / <span> <?php echo $nombre;?></span></h4>
						</div>					
					</div>
				</div>
			</section>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

    <div class="wd_scroll_wrap">
        <div class="btc_blog_index_main_wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
                    	<img src="images/noticias/<?php echo $imagen1;?>">
                    	<br><b><p><?php echo $fecha;?></p></b><hr>
       					<h2 class="card-title"><?php echo $nombre;?></h2>
						<?php echo $descripcion;?>
                    </div>
                
                </div>


            </div>
        </div>

<?php include("include/contacto.php"); ?>

<?php include("include/footer.php"); ?>
