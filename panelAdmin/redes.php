<?php
	include('includes/head.php');

	$consulta="SELECT * FROM redes ";
    $query=mysqli_query($conexion, $consulta); 
    while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $facebook=$f['facebook'];
        $instagram=$f['instagram'];
        $twitter=$f['twitter'];
        $email=$f['pinterest'];
        $linkedin=$f['linkedin'];
        $whatsapp=$f['whatsapp'];
        $google=$f['google'];  
        $youtube=$f['youtube'];   
        
         }
?>

    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
        <h1>Redes Sociales<small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="active"><i class="fa fa-facebook"></i> REDES SOCIALES</a></li>
        </ol>
    </section>
  <?php
        include('includes/box.php');
    ?>  
    <form method="post" action="php/redes/redes.php">
    <section class="content">
        <div class="row">
            <div class="col-md-8  ">
	            <h3>Facebook</h3>
	            <input class="form-control" name="facebook" value="<?php echo $facebook;?>">
	           <hr>
	            <h3>Messenger</h3>
	            <input class="form-control" name="instagram" value="<?php echo $instagram;?>">
	            <hr>
	            <h3>Whatsapp</h3>
	            <input class="form-control" name="whatsapp" value="<?php echo $whatsapp;?>">
	            <hr>
	      </div>
		  <div class="col-md-4  ">

                    <hr>
                    <center> <button type="submit" class="btn btn-success">Guardar Cambios</button></center>
            </div>
      </div>
    </form>

    </section>



    <script >
        document.getElementById("redes").className = "active";
    </script>
    
</script>
<?php
	include('includes/footer.php');
?>