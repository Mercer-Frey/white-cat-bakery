<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<?php
$conn = connect();
if($_GET['good_category'] === 'cakes'){
	$good_data = selectOneRow($conn, "SELECT * FROM cakes WHERE id=".$_GET['good_id']);
}elseif($_GET['good_category'] === 'cakes_price'){
	$good_data = selectOneRow($conn, "SELECT * FROM cakes_price WHERE id=".$_GET['good_id']);
}elseif($_GET['good_category'] === 'pasta_price'){
	$good_data = selectOneRow($conn, "SELECT * FROM pasta_price WHERE id=".$_GET['good_id']);
}elseif($_GET['good_category'] === 'cupcakes_price'){
	$good_data = selectOneRow($conn, "SELECT * FROM cupcakes_price WHERE id=".$_GET['good_id']);
}elseif($_GET['good_category'] === 'cheesecakes_price'){
	$good_data = selectOneRow($conn, "SELECT * FROM cheesecakes_price WHERE id=".$_GET['good_id']);
}
close($conn);
?>
<div class="admin-wrapper">
	<div class="title-department">Чизкейки</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department edit-main">
			<div class="block-title d-flex justify-content-between"><p class="ml-4" >Добавление товара</p></div>
			<p class="center mt-3">Мы рекомендуем загружать изображения в разрешении 972×972. Формат — JPG.</p>
			<div class="block-content d-flex justify-content-between pt-2">
			<div class="img-add mr-5">

				<div class="gallery-add good-add">
					<img src="../img/<?php echo $_GET['folder']?>/<?php echo $good_data['image_1']?>" alt="sweet edit" style="width: 100%; height: 100%;">
				</div>
						<input type="file" class="form-control-file ml-5" id="new_image_1" name="files[]">

				<div class="gallery-add good-add mt-5">
					<img src="../img/<?php echo $_GET['folder']?>/<?php echo $good_data['image_2']?>" alt="sweet edit" style="width: 100%; height: 100%;">
				</div>
						<input type="file" class="form-control-file ml-5" id="new_image_2" name="files[]">

			</div>
				<div class="wrap-edit-master d-flex flex-column">
					<div>
						<input type="text" id="name"  value="<?php echo $good_data['name']?>">
						<?php
							if($_GET['good_category'] === 'cakes'){

							}else{
						?>

							<input type="text" id="cost" value="<?php echo $good_data['cost']?>">

						<?php }?>

					</div>
					<textarea name="" id="description" style="resize: none;"><?php echo $good_data['description']?></textarea>
					<textarea name="" id="to_order" style="resize: none;"><?php echo $good_data['to_order']?></textarea>
					<div class="btn-contacts mt-2" id="btn_master_data" data-category="<?php echo $_GET['good_category']?>" data-image_1-old="<?php echo $good_data['image_1']?>" data-image_2-old="<?php echo $good_data['image_2']?>" data-id="<?php echo $_GET['good_id']?>">Update</div>
				</div>

			</div>
		</div>
	</div>
</div>
<script src="js/edit_good.js"></script>
<?php require_once 'template/footer_goods.php';?>