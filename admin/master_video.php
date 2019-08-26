<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<?php
$conn = connect();
$master_class_data = selectOneRow($conn, "SELECT * FROM master_class");
close($conn);
?>
<link rel="stylesheet" href="css/video.css">
<div class="admin-wrapper">
	<div class="title-department">Мастер класс - видео</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department edit-main nr">
			<div class="block-title"><p class="ml-4" >Панель редактирования</p></div>
			<p class="center mt-3">К загрузке доступно видео только расширения mp4</p>

			<div class="block-content d-flex justify-content-between pt-2">

				<div class="main-container">

					<video poster="../img/master-class/<?php echo $master_class_data['poster']?>" width="100%" height="100%" preload="metadata" loop class="d-block video-master" id="video-master">
						<source src="../img/master-class/<?php echo $master_class_data['video']?>" type="video/mp4" codecs="vp8, vorbis">
					</video>	
					<div class="d-flex flex-column align-items-end">

						<input type="file" class="form-control-file" id="new_image" name="files[]" style="width:200px">
						<div class="btn-video mt-2" id="btn_master_data" data-old-video="<?php echo $master_class_data['video']?>">Update video</div>

					</div>	

					<div class="container-poster mt-5">

						<p class="center mt-3">Постер это картинка-фон на выключенном видео <br> желательно загружать кадр из видео что бы он был таких же размеров</p>
							<img src="../img/master-class/<?php echo $master_class_data['poster']?>" alt="poster">
						<div class="d-flex flex-column align-items-end">
							<input type="file" class="form-control-file" id="new_poster" name="files[]"  style="width:200px">

							<div class="btn-video mt-2" id="btn_master_poster" data-old-poster="<?php echo $master_class_data['poster']?>">Update poster</div>
						</div>	


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'template/footer_master_video.php';?>