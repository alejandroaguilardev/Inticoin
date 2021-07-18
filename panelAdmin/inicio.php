<?php
	include('includes/head.php');
?>

    <section class="content-header " id="header" style="background: white;padding: 15px;border-radius: 10px;">
            <h1>Inicio<small>Control panel</small></h1>
            <ol class="breadcrumb">
                <li><a href="inicio.php"><i class="fa fa-home"></i> INICIO</a></li>
            </ol>
    </section>
       <?php
            include('includes/box.php');
        ?>   
    <!-- Main content -->
    <section class="content">
        
    

            <div class="row">
                <div class="col-md-5">
                <center>
                    <br><br>
                    <center><img src="img/logo.png" class="img-responsive" style="width: 50%"></center>
                </center>
                </div>
                <div class="col-md-6">
                    <center><h1>Inticoin Panel </h1></center>
                    <p>Bienvenido al panel administrativo de la página web, desde este panel tienes el control de editar, agregar y eliminar aspectos importantes del sitio web. Cualquier consulta o problema debera ponerse en contacto con el <a href="mailto:alexaguilar281@gmail.com">webmaster</a>.</p>
                </div>
            </div>
    </section>
    
    <script >
        document.getElementById("inicio").className = "active";
    </script>
<?php
	include('includes/footer.php');
?>