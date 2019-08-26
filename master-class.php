<?php require_once ('template/include.php');?>
<?php require_once('template/header.php');?>
<?php
$conn = connect();
$master = selectOneRow($conn, "SELECT * FROM master_class WHERE id = 1 ");
$master_gallery = selectRows($conn, "SELECT * FROM master_gallery ORDER BY RAND()");
close($conn);
// echo '<pre>';
// var_dump($master_gallery[4]['image']);
// echo '</pre>';
?>
<main id="swup" class="transition-rotate">
<link rel="stylesheet" href="/libs/fancybox-3.2/css/jquery.fancybox.min.css">
	<div class="container">
		<div class="row"> 
			<div class="col offset-l1 l10 m12">
				<h3 class="master-name d-md-none center d-sm-block mb-lg-5"><?php echo $master['name']?></h3>
                <div class="master-one-conteiner">
                    <div class="master-one-block">
                        <img src="/img/master-class/<?php echo $master['image_1']?>" alt="master"> 
                    </div>
                    <!-- /.master-one-block -->
                    <div class="master-one-block">
                        <div class="master-one-description right-align">
	                        <h3 class="master-name d-md-block d-sm-none d-none mb-lg-5"><?php echo $master['name']?></h3>
	                        <p class="master-description"><?php echo $master['description']?></p>
	                        <span class="order d-block mb-2">Заказ</span>
	                        <p class="to-order mb-5"><?php echo $master['to_order']?></p>
                         	<span class="price d-block"><?php echo $master['cost']?></span>
                        </div>
                        <!-- /.master-one-description -->
                    </div>
                    <!-- /.master-one-block -->
                </div>
                <!-- /.master-one-conteiner -->
                <p class="center title-gallery mb-2 mt-4">Фотогалерея</p>
            	<div class="slider mb-5">
					<ul class="thumb master-gallery-container">
	                    <?php
	                        $out = '';
	                        for ($i=0; $i < count($master_gallery); $i++) { 
	                            $out .= '       
			                    	<li>
			                    		<a rel="group_fotos" data-fancybox="gallery" href="/img/master-class/'.$master_gallery[$i]['image'].'" data-no-swup target="data-select_foto">
			                    			<img src="" data-src-image="/img/master-class/'.$master_gallery[$i]['image'].'" alt="">
			                    		</a>
			                    	</li>
	                            ';
	                        }
	                        echo $out;
	                    ?>  

					</ul>
					<!-- /.thumb -->
				</div>
				<!-- /.slider -->
					<video poster="img/master-class/<?php echo $master['poster']?>" width="100%" height="100%" preload="metadata" loop class="d-block video-master" id="video-master">
						<source src="/img/master-class/<?php echo $master['video']?>" type="video/mp4" codecs="vp8, vorbis">
					</video>					
			</div>
			<!-- /.col s10 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</main>
<?php require_once('template/footer_master_class.php');?>