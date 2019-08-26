<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<div class="admin-wrapper">
	<div class="title-department">Чизкейки</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department edit-main">
			<div class="block-title d-flex justify-content-between"><p class="ml-4" >Добавление товара</p></div>
			<p class="center mt-3">Все поля должны быть заполнены, включая картинки!</p>
			<p class="center mt-3">Мы рекомендуем загружать изображения в разрешении 972×972. Формат — JPG.</p>
			<div class="block-content d-flex justify-content-between pt-2">
			<div class="img-add mr-5">

				<div class="gallery-add good-add">
					<label class=" d-flex align-items-center justify-content-center add-gallery flex-column">
						<?php require 'img/add-file.svg'?>
						<span id="name_file_1"></span>
						<input type="file" class="form-control-file" id="new_image_1" name="files[]" style="visibility: hidden; position: absolute;">
					</label>
				</div>

				<div class="gallery-add good-add mt-5">
					<label class=" d-flex align-items-center justify-content-center add-gallery flex-column">
						<?php require 'img/add-file.svg'?>
						<span id="name_file_2"></span>
						<input type="file" class="form-control-file" id="new_image_2" name="files[]" style="visibility: hidden; position: absolute;">
					</label>
				</div>

			</div>
				<div class="wrap-edit-master d-flex flex-column">
					<div>
						<input type="text" placeholder="name" id="name">
						<?php
							if($_GET['category'] === 'cakes'){

							}else{
						?>

							<input type="text" placeholder="cost" id="cost">

						<?php }?>

					</div>
					<textarea name="" placeholder="description" id="description" style="resize: none;"></textarea>
					<textarea name="" placeholder="to order" id="to_order" style="resize: none;"></textarea>
					<div class="btn-contacts mt-2" id="btn_master_data" data-category="<?php echo $_GET['category']?>">save</div>
				</div>

			</div>
		</div>
	</div>
</div>
<script src="js/add_good.js"></script>
<?php require_once 'template/footer_goods.php';?>