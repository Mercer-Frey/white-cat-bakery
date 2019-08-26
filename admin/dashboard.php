<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<div class="admin-wrapper">
	<div class="title-department">Dashboard</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department stat-visits">
			<div class="block-title center"><p>Статистика посещения сайта</p></div>
			<div class="block-content d-flex justify-content-center pt-2"></div>
		</div>
		<div class="block-department local-time">
			<div class="block-title"><p>Киевское время</p></div>
			<div class="block-content main_clock d-flex justify-content-center">
				
				<div id="main_clock"></div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'template/footer_dashboard.php';?>