<?php
    include('includes/head.php');

	$consulta="SELECT * FROM nosotros ORDER BY id DESC LIMIT 1";
    $query=mysqli_query($conexion, $consulta); 
    while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $id=$f['id'];
        $quienes=$f['quienes'];

    }
?>

    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
        <h1><i class="fa fa-group"></i> ¿Quiénes Somos?<small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-group"></i> NOSOTROS</li>
            <li class="active"><a href="quienes.php">¿QUIÉNES SOMOS?</a></li>
        </ol>
    </section>
        <?php
            include('includes/box.php');
        ?>  
        <section class="content">
            <div class="row"> 
               

                <form method="post" action="php/nosotros/quienes.php?id=<?php  echo $id;?>" enctype="multipart/form-data">
                    <h3 class="animated pulse">¿Quiénes <b> somos?</b></h3>
                    <div class="col-md-12">
                        <textarea name="quienes" id="textarea" style="height: 300px;"><?php echo $quienes;?></textarea><hr>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </div>
                    
                </form>
               </div>
        </section>
   



    <script >
        document.getElementById("nosotros").className = "active treeview";
        document.getElementById("quienes").className = "active";
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