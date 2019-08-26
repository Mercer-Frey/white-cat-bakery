<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<?php
$conn = connect();
$main_data = selectRows($conn, "SELECT * FROM categories");
close($conn);
?>
<div class="admin-wrapper">
	<div class="title-department">Главная</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department edit-main nr">
			<div class="block-title"><p class="ml-4" >Панель редактирования главной страницы</p></div>
					<p class="center mt-3">Мы рекомендуем загружать изображения в разрешении 1962×826. Формат — JPG.</p>
			<div class="block-content d-flex justify-content-between pt-2">
				<div class="main-container">

	                    <?php
	                        $out = '';
	                        for ($i=0; $i < count($main_data); $i++) { 
	                            $out .= ' 

									<div class="main-item-edit d-flex align-items-center">
										<img src="../img/categories/'.$main_data[$i]['main_image'].'" id="main_img_'.$main_data[$i]['link'].'"  alt="main-item" width="400px" class="mr-4">
										<div class="d-flex flex-column justify-content-between wrap-item-data">
											<input type="file" class="form-control-file" id="new_image" name="files[]">
											<input type="text" value="'.$main_data[$i]['name'].'" id="main_input_'.$main_data[$i]['link'].'" class="main-input-edit">
											<div class="btn-save-main" data-main-id="'.$main_data[$i]['id'].'" data-main-img-name="'.$main_data[$i]['main_image'].'" >save</div>
										</div>
									</div>

	                            ';
	                        }
	                        echo $out;
	                    ?> 
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'template/footer_main.php';?>
