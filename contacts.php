<?php require_once ('template/include.php');?>
<?php require_once('template/header.php');?>
<?php
$conn = connect();
$contacts = selectOneRow($conn, "SELECT * FROM contacts WHERE id = 0 ");
close($conn);
// echo '<pre>';
// var_dump($contacts);
// echo '</pre>';
?>
<main id="swup" class="transition-rotate">
	<div class="container">
		<div class="row">
			<div class="col l8 offset-l2 m12">
				<div class="contacs-container mt-4 mb-5">
					<div class="contacts-block pl-md-2 pr-sm-5">
						<p class="mb-5"><?php echo $contacts['for_order'];?></p>
						<p class="mb-5"><?php echo $contacts['cost_deliver'];?></p>
						<p class="mb-0"><?php echo $contacts['self_deliver'];?></p>
					</div>
					<!-- /.contacts-block -->
					<div class="contacts-block pl-md-5 pr-md-2 mt-md-0">
						<h3 class="mb-2"><?php echo $contacts['number_c'];?></h3>
						<p class="mb-5"><?php echo $contacts['adress'];?></p>
						<div class="contacts-map mb-0">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2148.520092115312!2d30.31273636043322!3d50.17917481288021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4a54dfe5d8d7f%3A0xddd5aa3a25aecdd1!2sFurshet!5e0!3m2!1sru!2sua!4v1565546788055!5m2!1sru!2sua" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
							<!-- /.contact-map -->	
					</div>
					<!-- /.contacts-block -->
				</div>
				<!-- /.contacs-container -->
			</div>
			<!-- /.col s8 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</main>
<?php require_once('template/footer.php');?>
