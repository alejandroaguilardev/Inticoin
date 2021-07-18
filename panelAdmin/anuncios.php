<?php
	include('includes/head.php');
?>
   <script src='http://tinymce.cachefly.net/4.2/tinymce.min.js'> </script>

	    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
        <h1><i class="fa fa fa-cog"></i> Listado de anuncios<small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="anuncios.php"><i class="fa fa fa-cog"></i> anuncioS</a></li>           

        </ol>
    </section>
  <?php
        include('includes/box.php');
    ?>  
    <section class="content">
    	<div class="row">
		<div class="col-md-12" style="text-align: right;">
				<a  data-toggle="modal" href="#agregar" >
					<button class="btn btn-success" >Agregar anuncio</button>
				</a>
				<hr >
		<div class="table-responsive">	
		<table id="example" class="table table-striped table-bordered" >
		 <thead>
                <tr>
                    <th>ID</th>
                    <th>Anuncio</th>
                    <th>Fecha</th>
                    <th>Sueldo</th>
                    <th>Dirección</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead> 
            <tbody>
			<?php
				$consulta_a="SELECT * FROM anuncios order by id asc";
				$query_a=mysqli_query($conexion, $consulta_a); 
				while ($a=mysqli_fetch_array($query_a,MYSQLI_ASSOC)) {

			?>
			 <tr>
				<td><?php  echo $a['id'];?></td>
                 <td><?php  echo $a['anuncio'];?></td>
                 <td><?php  echo $a['fecha'];?></td>
                 <td><?php  echo $a['sueldo'];?></td>
                 <td><?php  echo $a['direccion'];?></td>
                 <?php if($a['imagen1']!=null){?>
            		 <td><img src="../images/anuncios/<?php  echo $a['imagen1'];?>" class="img-responsive" style="width: 50px;height: 50px"></td>

                 <?php }else {?> 
            		 <td><img src="../images/anuncios/default.jpg" class="img-responsive" style="width: 50px;height: 50px"></td>
                  <?php } ?>
             <td><a data-toggle="modal" href="#editar<?php  echo $a['id'];?>"><button class="btn btn-warning" style="width: 100%"><span class="fa fa-pencil"></span>  </button></a>
             	<a data-toggle="modal" href="#eliminar<?php  echo $a['id'];?>"> <button class="btn btn-danger"  style="width: 100%"><span class="fa fa-trash"></span></button></a>  </td> 
             </tr>
			<div id="editar<?php  echo $a['id'];?>" class="modal fade in">
				        <div class="modal-dialog">
				            <div class="modal-content">
							 <form action="php/anuncio/modificar_anuncios.php?id=<?php echo $a['id'];?>"  method="post"enctype="multipart/form-data">
				                <div class="modal-header" style="text-align: left;">
						           <h2 class="modal-title" >Editar Miembro</h2> <hr> 						                
					                    <label>Nombre</label><br>
					                    <input type="text" class="form-control" name="anuncio" value="<?php  echo $a['anuncio'];?>" required><br>
					                    <label>Sueldo</label><br>
					                    <input type="number" class="form-control" name="sueldo" value="<?php  echo $a['sueldo'];?>" required><br>
					                    <label>Fecha</label><br>
					                    <input type="date" class="form-control" name="fecha" value="<?php  echo $a['fecha'];?>" required><br>					                    
					                    <label>Dirección</label><br>
					                    <input type="text" class="form-control" name="direccion" value="<?php  echo $a['direccion'];?>" required><br>	
					                    <label>Descripción</label>
						                <textarea name="descripcion" id="textarea<?php  echo $a['id'];?>" style="height: 300px;"><?php  echo $a['descripcion'];?></textarea>
						                 <hr>
					                    <center>
				                            <label>Imagen 1:</label>
				                            <?php if($a['imagen1']!=null){ ?>
				                            <img src="../images/anuncios/<?php  echo $a['imagen1'];?>" class="img-responsive" style="width: 70%;height: auto">
				                            <?php }else{ ?>
				                            <img src="../images/anuncios/default.jpg" class="img-responsive" style="width: 70%;height: auto">
				                            <?php } ?>


	                    					<input type="file" name="imagen1" class="form-control">
					                    </center>
					                    <br><hr>
				                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
		                			 </div> 
		 					</form >
				            </div><!-- /.modal-content -->
				        </div><!-- /.modal-dalog -->
				    </div><!-- /.modal -->


				<div id="eliminar<?php  echo $a['id'];?>" class="modal fade in">
				        <div class="modal-dialog">
				            <div class="modal-content">
				 
				                <div class="modal-header">
				                    <h2 class="modal-title">Eliminar anuncio</h2> <hr> 
										<p class="modal-title">¿Está seguro de eliminar el elemento seleccionado?:<br> <b><?php  echo $a['anuncio'];?></b></p>
				                </div>
				                
				                <div class="modal-footer">
				                    <div class="btn-group">
				                        <a href="#" ><button class="btn btn-danger" data-dismiss="modal">NO</button></a>
				                        <a href="php/anuncio/eliminar_anuncio.php?id=<?php  echo $a['id'];?>"type="submit"><button class="btn btn-success" > SI</button></a><br> <br> 
				                    </div>
				                </div>
				 
				            </div><!-- /.modal-content -->
				        </div><!-- /.modal-dalog -->
				    </div><!-- /.modal -->

				    <script >
				tinymce.init({
				    selector: "#textarea<?php  echo $a['id'];?>",
				    plugins: [
				        "advlist autolink lists link image charmap print preview anchor",
				        "searchreplace visualblocks code fullscreen",
				        "insertdatetime media table contextmenu paste"
				    ],
				    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
				});
				    	
				    </script>

				        <?php
				    	}
				    ?>


   					 </tbody>

                </table>
               </div>
              </div></div>
                  <!--Fin Contenido-->
    	</section>




			<div id="agregar" class="modal fade in">
				        <div class="modal-dialog">
				            <div class="modal-content">
				                <div class="modal-header">
				                    <h2 class="modal-title">Agregar anuncio</h2> <hr> 
									<form method="post" action="php/anuncio/agregar.php" enctype="multipart/form-data">
										<div class="col-md-12">
											<label>Nombre</label><br>
											<input type="text" class="form-control" name="anuncio" required><br>
											<label>Fecha</label><br>
											<input type="date" class="form-control" name="fecha" required><br>
											<label>Sueldo</label><br>
											<input type="number" class="form-control" name="sueldo" required><br>
						                    <label>Dirección</label><br>
						                    <input type="text" class="form-control" name="direccion" value="" required><br>												
						                    <label>Descripción</label>
						                <textarea name="descripcion" id="textarea" style="height: 300px;"></textarea>
											<br>
											<label>Imagen 1</label><br>
											<input type="file" name="imagen1" class="form-control" ><br>
											<button class="btn btn-success"> Agregar anuncio </button>
											<br><br><br>
										</div>
									</form>
				                </div>
				                				            
				             </div><!-- /.modal-content -->
				        </div><!-- /.modal-dalog -->
				    </div><!-- /.modal -->



			    <script >
			        document.getElementById("anuncios").className = "active";
			    </script>

			    <script >
			tinymce.init({
			    selector: "#textarea",
			    plugins: [
			        "advlist autolink lists link image charmap print preview anchor",
			        "searchreplace visualblocks code fullscreen",
			        "insertdatetime media table contextmenu paste"
			    ],
			    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
			});
			    	
			    </script>
	
<?php
	include('includes/footer.php');
?>