<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<?php
$conn = connect();
$master_gallery_data = selectRows($conn, "SELECT * FROM master_gallery");
close($conn);
?>
<link rel="stylesheet" href="libs/fancybox-3.2/css/jquery.fancybox.min.css">
<div class="admin-wrapper">
	<div class="title-department">Мастер класс - галлерея</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department edit-main nr">
			<div class="block-title"><p class="ml-4" >Панель редактирования</p></div>
			<p class="center mt-3">Мы рекомендуем загружать изображения в разрешении 972×550. Формат — JPG.</p>
			<div class="block-content pt-2">
				<div class="main-container-dallery">
                    <?php
                        $out = '';
                        for ($i=0; $i < count($master_gallery_data); $i++) { 
                            $out .= '       

								<div class="item-gallery d-flex align-items-center">

									<div data-gallery-edit="'.$master_gallery_data[$i]['id'].'" data-gallery-image="'.$master_gallery_data[$i]['image'].'" class="delete-gallery">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.00016 12.6667C4.00016 13.4 4.60016 14 5.3335 14H10.6668C11.4002 14 12.0002 13.4 12.0002 12.6667V4.66667H4.00016V12.6667ZM12.6668 2.66667H10.3335L9.66683 2H6.3335L5.66683 2.66667H3.3335V4H12.6668V2.66667Z" fill="#C2CFE0"/>
										</svg>
									</div>


									<a rel="group_fotos" data-fancybox="gallery" href="../img/master-class/'.$master_gallery_data[$i]['image'].'" data-no-swup target="data-select_foto">
										<img src="../img/master-class/'.$master_gallery_data[$i]['image'].'" alt="gallery edit" class="edit-item-gallery">
									</a>


								</div>

                            ';
                        }
                        echo $out;
                    ?>  
                    <div class="gallery-btn">
						<div class="gallery-add">
							<label class=" d-flex align-items-center justify-content-center add-gallery flex-column">
								<?php require_once 'img/add-file.svg'?>
								<span id="name_file"></span>
								<input type="file" class="form-control-file" id="new_image" name="files[]" style="visibility: hidden; position: absolute;">
							</label>
						</div>

						<div class="btn-gallery mt-2" id="btn_master_data">add</div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'template/footer_master_gallery.php';?>