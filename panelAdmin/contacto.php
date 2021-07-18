<?php
    include('includes/head.php');

	$consulta="SELECT * FROM contacto ORDER BY id DESC LIMIT 1";
    $query=mysqli_query($conexion, $consulta); 
    while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $id=$f['id'];
        $telefono=$f['telefono'];
        $celular=$f['celular'];
        $correo=$f['correo'];
        $direccion=$f['direccion'];
        $urldireccion=$f['urldireccion'];

    }
?>

    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
        <h1>Contacto<small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li class="active"><a href="contacto.php"> CONTACTO</a></li>
        </ol>
    </section>
  <?php
        include('includes/box.php');
    ?>  
    <form method="post" action="php/contacto/editar_contacto.php">
    <section class="content">
        <div class="row"> 
            <div class="col-md-12">
                <h3><b> CORREO</b></h3>
                <textarea name="correo" id="textarea" style="width: 100%;height: 50px;"><?php echo $correo;?></textarea>
            </div>
            <div class="col-md-12">
                <h3 ><b> Telefono</b></h3>
                <textarea name="telefono" id="textarea5" style="width: 100%;height: 50px;"><?php echo $telefono;?></textarea>
            </div>
            <div class="col-md-12">
                <h3 ><b> Celular</b></h3>
                <textarea name="celular" id="textarea3" style="width: 100%;height: 50px;"><?php echo $celular;?></textarea>
            </div>            
            <div class="col-md-12">
                <h3 ><b> Ubicación</b></h3>
                <textarea name="direccion" id="textarea4" style="width: 100%;height: 50px;"><?php echo $direccion;?></textarea>
            </div>
           <div class="col-md-12">
                <h3 ><b> Ubicación URL (Insertar Mapa google, width: 100%;height: 50px;) :</b></h3>
                <textarea name="urldireccion" rows="4" style="width: 100%;height: 50px;"><?php echo $urldireccion;?></textarea>
            </div>    
 
            <div class="col-md-12">
                <hr>
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
      </div>
    </form>

    </section>
    <script >
        document.getElementById("contacto").className = "active";
    </script>



<?php
    include('includes/footer.php');
?>