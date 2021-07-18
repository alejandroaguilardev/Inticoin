<?php
	include('includes/head.php');
?>

   <script src='http://tinymce.cachefly.net/4.2/tinymce.min.js'> </script>

	    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
        <h1><i class="fa fa fa-cog"></i> noticias<small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="planes_web.php"><i class="fa fa fa-cog"></i> noticias</a></li>           
        </ol>
    </section>

  <?php
        include('includes/box.php');
    ?>  
    <section class="content">
    	<div class="row">
		<div class="col-md-12" style="text-align: right;">
				<a  data-toggle="modal" href="#agregar" >
					<button class="btn btn-success" >Agregar </button>
				</a>
				<hr > 
			<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
			 <thead>
	                <tr>
	                    <th>Nombre</th>
	                    <th>Fecha</th>
	                    <th>Imagen</th>
	                    <th>Acciones</th>
	                </tr>
	            </thead> 
	            <tbody>
				<?php
					$consulta_a="SELECT * FROM noticias  order by id desc";
					$query_a=mysqli_query($conexion, $consulta_a); 
					while ($a=mysqli_fetch_array($query_a,MYSQLI_ASSOC)) {

				?>
				 <tr>
	                 <td><?php  echo $a['nombre'];?></td>
	                 <td><?php  echo $a['fecha'];?></td>
	                 <td><img src="../images/noticias/<?php  echo $a['imagen1'];?>" class="img-responsive" style="width: 50px;height: 50px"></td>

	             <td>
	             	<a data-toggle="modal" href="#editar<?php  echo $a['id'];?>"><button class="btn btn-warning" style="width: 100%"><span class="fa fa-pencil"></span>  </button></a>
	             	<a data-toggle="modal" href="#eliminar<?php  echo $a['id'];?>"> <button class="btn btn-danger"  style="width: 100%"><span class="fa fa-trash"></span></button></a>  
	             </td> 

	            </tr>
		                 
				<div id="editar<?php  echo $a['id'];?>" class="modal fade in">
			        <div class="modal-dialog">
			            <div class="modal-content">
		    				<form  action="php/noticias/editar.php?id=<?php echo $a['id'];?>" method="post"enctype="multipart/form-data" >
				                <div class="modal-header">
						          	<div class="col-md-12">
											<label>Nombre</label>
											<input type="text" class="form-control" name="nombre" value="<?php echo $a['nombre'];?>"required><br>
											<label>Fecha</label>
											<input type="date" class="form-control" name="fecha" value="<?php echo $a['fecha'];?>"required><br>
		            						<label>Descripción del :</label>
							                <textarea name="general" class="form-control"><?php echo $a['general'];?></textarea>

											<img type="file" class="img-responsive" src="../images/noticias/<?php echo $a['imagen1']; ?>" ><br>
											<input type="file" class="form-control" name="imagen1" value=""><br>
						                    <label>Descripción:</label>
						                <textarea name="descripcion" id="textarea<?php echo $a['id'];?>" style="height: 300px;"><?php echo $a['descripcion'];?></textarea>
											<hr>
										<button class="btn btn-success"> Guardar Cambios </button>
										<br><br><br>
									</div>
				                </div>
				                
		 					</form >
			            </div><!-- /.modal-content -->
			        </div><!-- /.modal-dalog -->
			    </div><!-- /.modal -->

			    <script >
					tinymce.init({
					    selector: "#textarea<?php echo $a['id'];?>",
					    plugins: [
					        "advlist autolink lists link image charmap print preview anchor",
					        "searchreplace visualblocks code fullscreen",
					        "insertdatetime media table contextmenu paste"
					    ],
					    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
					});
					    	
			    </script>
		
				<div id="eliminar<?php  echo $a['id'];?>" class="modal fade in">
				        <div class="modal-dialog">
				            <div class="modal-content">
				 
				                <div class="modal-header">
				                    <h2 class="modal-title">Eliminar </h2> <hr> 
										<p class="modal-title">¿Está seguro de eliminar el elemento seleccionado?:<br> <b><?php  echo $a['nombre'];?></b></p>
				                </div>
				                
				                <div class="modal-footer">
				                    <div class="btn-group">
				                        <a href="#" ><button class="btn btn-danger" data-dismiss="modal">NO</button></a>
				                        <a href="php/noticias/eliminar.php?id=<?php  echo $a['id'];?>"type="submit"><button class="btn btn-success" > SI</button></a><br> <br> 
				                    </div>
				                </div>
				 
				            </div><!-- /.modal-content -->
				        </div><!-- /.modal-dalog -->
				    </div><!-- /.modal -->
				        <?php
				    	} 
				    ?>


				</tbody>

            </table>
           </div>
              <!--Fin Contenido-->
    	</section>

			<div id="agregar" class="modal fade in">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <h2 class="modal-title">Agregar </h2> <hr> 
									<form  action="php/noticias/agregar.php" method="post" enctype="multipart/form-data">
									<div class="col-md-12">
										<label>Nombre</label>
										<input type="text" class="form-control" name="nombre" value=""required><br>
										<label>Fecha</label>
										<input type="date" class="form-control" name="fecha" value=""required><br>
										<input type="file" class="form-control" name="imagen1" value=""required><br> 									
										<label>General</label>
					                	<textarea name="general"class="form-control"></textarea>									
										<br>							
					                    <label>Descripción del :</label>
					                	<textarea name="descripcion" id="textarea" style="height: 300px;"></textarea>
											<hr>
										<button class="btn btn-success"> Agregar  </button>
										<br><br><br>
									</div>
								</form>
			                </div>
			                				            
			             </div><!-- /.modal-content -->
			        </div><!-- /.modal-dalog -->
			    </div><!-- /.modal -->
			    </div>


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
	
    <script >
        document.getElementById("noticias").className = "active";
    </script>


	
<?php
	include('includes/footer.php');
?>