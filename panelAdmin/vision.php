<?php
    include('includes/head.php');

	$consulta="SELECT * FROM nosotros ORDER BY id DESC LIMIT 1";
    $query=mysqli_query($conexion, $consulta); 
    while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $id=$f['id'];
        $vision=$f['vision'];

    }
?>

    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
        <h1><i class="fa fa-group"></i> Visión<small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-group"></i> NOSOTROS</li>
            <li class="active"><a href="vision.php"> Visión</a></li>
        </ol>
    </section>
  <?php
        include('includes/box.php');
    ?>  
    <form method="post" action="php/nosotros/vision.php">
    <section class="content">
        <div class="row">
            <h3 ><b> Visión</b></h3>
            <div class="col-md-8">
                <textarea name="vision" id="textarea" style="height: 300px;"><?php echo $vision;?></textarea>
            </div>
            <div class="col-md-4">
               
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </center>
            </div>
      </div>
    </form>

    </section>
    <script >
        document.getElementById("nosotros").className = "active treeview";
        document.getElementById("vision").className = "active";
    </script>

   <script src='http://tinymce.cachefly.net/4.2/tinymce.min.js'> </script>
    <script  src="js/editor/editor.js"></script>
    <script  src="js/editor/editor_2.js"></script>
    <script  src="js/editor/editor_3.js"></script>
    <script  src="js/editor/editor_4.js"></script>
    <script  src="js/editor/editor_5.js"></script>  

<?php
    include('includes/footer.php');
?>