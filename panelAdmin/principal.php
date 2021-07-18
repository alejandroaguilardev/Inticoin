<?php
	include('includes/head.php');

	$consulta="SELECT * FROM inicio ";
    $query=mysqli_query($conexion, $consulta); 
    while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {

        $slider1=$f['slider1'];
        $slider2=$f['slider2'];
        $slider3=$f['slider3'];
        $titulo1=$f['titulo1'];
        $titulo2=$f['titulo2'];
        $titulo3=$f['titulo3'];
        $parrafo1=$f['parrafo1'];
        $parrafo2=$f['parrafo2'];
        $parrafo3=$f['parrafo3'];
        $boton1=$f['boton1'];
        $boton2=$f['boton2'];
        $boton3=$f['boton3'];     }
?>

    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
        <h1>Redes Sociales<small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="active"><i class=""></i> PRINCIPAL</a></li>
        </ol>
    </section>
  <?php
        include('includes/box.php');
    ?>  


    <section class="content">
        <div class="row">
            <div class="col-md-8">
         
        <form method="post" action="php/principal/editar2.php" >       
        <h4>TITULO</h4>        
                <input class="form-control" name="titulo1" value="<?php echo $titulo1;?>">
                <center> <button type="submit" class="btn btn-success">Guardar Cambios</button></center>    

         </form >
            <!--<div class="col-md-8">
			<form method="post" action="php/principal/editar.php" enctype="multipart/form-data">
	            <h3>Título 1</h3>
	            <input class="form-control" name="titulo1" value="<?php echo $titulo1;?>">
	            <h3>Párrafo 1</h3>
	            <input class="form-control" name="parrafo1" value="<?php echo $parrafo1;?>">
                <h3>Boton 1</h3>
                <input class="form-control" name="boton1" value="<?php echo $boton1;?>">
                <hr>
 				<h3>Título 2</h3>
	            <input class="form-control" name="titulo2" value="<?php echo $titulo2;?>">
	            <h3>Párrafo 2</h3>
	            <input class="form-control" name="parrafo2" value="<?php echo $parrafo2;?>">
                <h3>Boton 2</h3>
                <input class="form-control" name="boton2" value="<?php echo $boton1;?>"> 				
                <h3>Título 3</h3>
	            <input class="form-control" name="titulo3" value="<?php echo $titulo3;?>">
	            <h3>Párrafo 3</h3>
	            <input class="form-control" name="parrafo3" value="<?php echo $parrafo3;?>">
                <h3>Boton 3</h3>
                <input class="form-control" name="boton3" value="<?php echo $boton1;?>">                    
                <center> <button type="submit" class="btn btn-success">Guardar Cambios</button></center>	
			</form >
            </div>
	         <div class="col-md-4">
	         	<h3>Slider 1</h3>
	         	<img src="../img/<?php echo $slider1;?>" class="img-responsive">
                <a data-toggle="modal" href="#img1" class="btn btn-warning"> Cambiar imagen</a>
                <hr>
       			<img src="../img/<?php echo $slider2;?>" class="img-responsive">
                <a data-toggle="modal" href="#img2" class="btn btn-warning"> Cambiar imagen</a>
                <hr>
   				<img src="../img/<?php echo $slider3;?>" class="img-responsive">
                <a data-toggle="modal" href="#img3" class="btn btn-warning"> Cambiar imagen</a>
	         </div>


	     </div>-->
        
      </div>

    </section>

<form method="post" action="php/principal/modificar_img1.php?id=1" enctype="multipart/form-data">

    <div id="img1" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <h4 class="modal-title">Cambiar imagen 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Buscar foto</h4>
                      <input type="file" name="slider1" class="form-control" required>
                 
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                    
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->
</form>
 <form method="post" action="php/principal/modificar_img2.php?id=1" enctype="multipart/form-data">

    <div id="img2" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <h4 class="modal-title">Cambiar imagen 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Buscar foto</h4>
                      <input type="file" name="slider2" class="form-control" required>
                    
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                   
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->
 </form>
<form method="post" action="php/principal/modificar_img3.php?id=1" enctype="multipart/form-data">
    <div id="img3" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <h4 class="modal-title">Cambiar imagen 3</h4>
                </div>
                <div class="modal-body">
                    <h4>Buscar foto</h4>
                      <input type="file" name="slider3" class="form-control" required>
                    
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                   
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->
 </form>

    <script >
        document.getElementById("principal").className = "active";
    </script>
    
</script>
<?php
	include('includes/footer.php');
?>