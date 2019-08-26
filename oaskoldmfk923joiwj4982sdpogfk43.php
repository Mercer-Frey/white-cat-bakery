<?php require_once ('template/include.php');?>
<?php
$conn = connect();
$admin_cook_2 = selectOneRow($conn, "SELECT cook_name_1, cook_name_2 FROM admins");
setcookie($admin_cook_2['cook_name_2'], '', time() - 10);
if($_COOKIE[$admin_cook_2['cook_name_1']]){
	if(isset($_POST['login_2']) && isset($_POST['password']) && trim($_POST['login_2']) !== '' && trim($_POST['password']) !== ''){
	$input_login_2 = $func->IsLogin($_POST['login_2']);	
	$input_password = $func->IsPassword($_POST['password']);	
		if($input_login_2 !== false){
			if($input_password !== false){
			$admin_login_2 = selectOneRow($conn, "SELECT * FROM admins");
			$admin_data = json_decode($_COOKIE[$admin_login_2['cook_name_1']]);
				if($admin_login_2['cook_name_1'] === $admin_data->{'cook_name_1'} && $admin_login_2['hash_1'] === $admin_data->{'hash_1'} && $admin_login_2['login_1'] === $admin_data->{'login_1'}){
					if(md5($input_login_2) === $admin_login_2['login_2'] && md5($input_password) === $admin_login_2['password']){


						$time = time();
						$ip = $_SERVER['REMOTE_ADDR'];
						$hash_2 = md5($func->GenerateCode(20));
						$cook_name_2 = md5($func->GenerateCode(20));

						$admin_2 = ['login_1' => $admin_login_2['login_1'],
						 'login_2' => $admin_login_2['login_2'],
						  'hash_1' => $admin_login_2['hash_1'],
						   'hash_2' => $hash_2,
						    'cook_name_1' => $admin_login_2['cook_name_1'],
						     'cook_name_2' => $cook_name_2];

						setcookie($admin_cook_2['cook_name_1'], '', time() - 10);
						setcookie($admin_cook_2['cook_name_2'], '', time() - 10);
						setcookie($cook_name_2, json_encode($admin_2), time() + 60*60);

	       				mysqli_query($conn, "UPDATE admins SET hash_2='$hash_2', cook_name_2='$cook_name_2', time_last_online='$time', last_ip='$ip'");

						header('Location: admin/dashboard.php');

					}else echo 5;
				}else echo 4;
			}else echo 3;
		}else echo 2;
	}else echo 1;
}else{
	setcookie($admin_cook_2['cook_name_2'], '', time() - 10);
	setcookie($admin_cook_2['cook_name_1'], '', time() - 10);
	header('Location: index.php');
}
close($conn);
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>White Cat Backery</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/M_grid.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrap">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col s10 offset-s1 center mt-3 mb-md-5">
							<a href='/'	id="logo" class="d-block">
								<img src="../../img/Logo.png" alt="white cat">
							</a>
						</div>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
				<main>
					<div class="container">
						<div class="row">
							<div class="col s12 d-flex justify-content-center align-items-center">
								<form action="" method="POST" class="d-flex justify-content-center align-items-center flex-column">
									<input type="text" placeholder="login" name="login_2" value="123123">
									<input type="password" placeholder="password" name="password" value="123123">
									<input type="submit" value="knock knock">
								</form>
							</div>
						</div>
					</div>
				</main>
			</div>
			<!--content-->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col s10 offset-s1 center mt-5">@white_cat_bakery</div>
						<!-- /.col s12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</footer>
		</div><!--wrap-->
	</body>
	<style>
		form{
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
	<script> document.querySelector('input[type=submit]').focus();</script>
</html>