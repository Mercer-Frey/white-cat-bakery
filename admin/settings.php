<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<div class="admin-wrapper">
	<div class="title-department">Settings</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department settings nr">
			<div class="block-title center"><p>Смена логинов и пароля</p></div>
			<div class="block-content d-flex justify-content-center pt-2">
				<div class="ff">
					<form class="d-flex justify-content-center align-items-center flex-column m-2">
						<input type="text" placeholder="old login 1" name="old_login_1" id="old_login_1">
						<input type="password" placeholder="new login 1" name="new_login_1" id="new_login_1">
						<input type="submit" value="knock knock" id="change_login_1">
					</form>
					<form class="d-flex justify-content-center align-items-center flex-column m-2">
						<input type="text" placeholder="old login 2" name="old_login_2" id="old_login_2">
						<input type="password" placeholder="new login 2" name="new_login_2" id="new_login_2">						
						<input type="submit" value="knock knock" id="change_login_2">
					</form>
					<form class="d-flex justify-content-center align-items-center flex-column m-2">
						<input type="text" placeholder="old password" name="old_password" id="old_password">
						<input type="password" placeholder="new password" name="new_password" id="new_password">
						<input type="submit" value="knock knock" id="change_password">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

	<style>
		form{
			float: left;
			padding: 54px 37px;	
			background: linear-gradient(180deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%), #111111;;
		}
		form > input{
			width: 248px;	
			height: 48px;	
		}
		input{
			margin-bottom: 26px;
			padding-left: 10px;
		}
		input[type=submit]{
			color: red;
			margin-bottom: 0;
			padding: 0;
			background-color: transparent;
			border: 1px solid #fff;
			color: #fff;
			cursor: pointer;
		}
	</style>
<?php require_once 'template/footer_settings.php';?>