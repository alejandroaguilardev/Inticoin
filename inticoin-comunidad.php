<?php include("include/header.php");?>
<?php include("php/conex_bd.php");
if(isset($_GET['id'])) {
    $test = $_GET['id'] -1;
} else {
    $test = 0;
}


$count=null;
$consulta="SELECT * FROM noticias ";
$query=mysqli_query($conexion, $consulta); 
while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {  
    $count=$count + 1;
}   
$count=$count / 3 ; 
$test2=3+$test;     
?>


    <div class="wd_scroll_wrap">
        <div class="btc_blog_index_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="btc_blog_index_heading_main_wrapper">
                            <div class="btc_blog_index_heading_wrapper">
                                <p>Nuestro Blog</p>
                                <h1>Últimas noticias del mercado</h1>
                                <span></span>
                                <h5></h5>
                            </div>
                        </div>
                    </div>

                    <?php $consulta="SELECT * FROM noticias order by fecha desc limit $test,$test2";
                      $query=mysqli_query($conexion, $consulta); 
                      while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {  
                        $dia= $f['fecha'];
                        $dia=date("d");
                        $mes= $f['fecha'];
                        $mes=date("m-y");
                        $general=substr($f['general'], 0,50);
                        ?>                        
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="btc_blog_indx_box_wrapper">
                            <div class="btc_blog_indx_img_wrapper">
                               <a href="inticoin-post?id=<?php echo $f['id'];?>"> <img class="lazy" data-src="images/noticias/<?php echo $f['imagen1'];?>" alt="inticoin" style="height: 250px;"></a>
                                <div class="btc_blog_indx_date_wrapper">
                                    <ul>
                                        <li><?php echo $dia ?></li>
                                        <li><?php echo $mes ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btc_blog_indx_cont_wrapper">
                                <a href="inticoin-post?id=<?php echo $f['id'];?>"> <h5><?php echo $f['nombre'];?></h5></a>
                                <p><?php echo $general;?>...</p>
                                <h4><a href="#">Leer Más</a></h4>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
                </div>

                    <!-- Pagination-->
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="page-item">
                            </li>
                            <?php  for ($i=1; $i <=$count ; $i++) { ?>
                            <li class="page-item"><a class="page-link active" href="qolkex-blog?id=<?php echo $i;?>"><?php echo $i;?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!--/ Pagination-->

            </div>
        </div>
    </div>
    <!-- btc blog Wrapper End -->
		
<script type="text/javascript">
      document.getElementById("inticoin-comunidad").className = "active";
</script>

<?php include("include/footer.php");?>