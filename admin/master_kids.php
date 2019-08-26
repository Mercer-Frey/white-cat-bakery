<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<?php
$conn = connect();
$master_class_data = selectOneRow($conn, "SELECT * FROM master_class");
close($conn);
?>

<div class="admin-wrapper">
	<div class="title-department">Мастер класс - дети</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department edit-main nr">
			<div class="block-title"><p class="ml-4" >Панель редактирования</p></div>
			<p class="center mt-3">Мы рекомендуем загружать изображения в разрешении 972×972 Формат — JPG.</p>

			<div class="block-content d-flex justify-content-between pt-2">
				<div class="main-container d-flex">
					<div class="wrap-edit-img" >
						<img src="../img/master-class/<?php echo $master_class_data['image_1']?>" alt="" width="225px">
						<input type="file" class="form-control-file" id="new_image" name="files[]">
					</div>
					<div class="wrap-edit-master d-flex flex-column">
						<div>
							<input type="text" value="<?php echo $master_class_data['name']?>" id="name">
							<input type="text" value="<?php echo $master_class_data['cost']?>" id="cost">
						</div>
						<textarea name="" id="description" style="resize: none;"><?php echo $master_class_data['description']?></textarea>
						<textarea name="" id="to_order" style="resize: none;"><?php echo $master_class_data['to_order']?></textarea>
						<div class="btn-contacts mt-2" id="btn_master_data" data-old-img="<?php echo $master_class_data['image_1']?>">save</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'template/footer_master_kids.php';?>