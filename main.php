<?php require_once ('template/include.php');?>
<?php 
$conn = connect();
$adm_v = selectOneRow($conn, "SELECT cook_name_1 FROM admins");
if(isset($_COOKIE[$adm_v['cook_name_1']])){
	setcookie($adm_v['cook_name_1'], '', time() -10);
}
close($conn);
if(isset($_POST['qwerty'])){
	$conn = connect();
	$admin_login_1 = selectOneRow($conn, "SELECT login_1, cook_name_1 FROM admins");
	$loginCheck = $func->IsLogin($_POST['qwerty']);
	if($loginCheck !== false){
		if(md5($_POST['qwerty']) === $admin_login_1['login_1']){
			setcookie($admin_login_1['cook_name_1'], '', time() - 10);
			$hash_1 = md5($func->GenerateCode(20));
			$cook_name_1 = md5($func->GenerateCode(20));

	        $admin_1 = ['login_1' => $admin_login_1['login_1'], 'hash_1' => $hash_1, 'cook_name_1'=>$cook_name_1];
	        setcookie($cook_name_1, json_encode($admin_1), time() + 60);

	        mysqli_query($conn, "UPDATE admins SET hash_1='$hash_1', cook_name_1='$cook_name_1'");
	        header('Location: oaskoldmfk923joiwj4982sdpogfk43.php');
		}
	}
	close($conn);
}
?>
<?php require_once ('template/header.php');?>
<?php
$conn = connect();
$categories = selectRows($conn, "SELECT * FROM categories");
close($conn);
?>
<form class="overlay-v" action="" method="POSt"><input class="focus-input-v" type="password" name="qwerty" value="123123"><input type="submit" value="adminka"></form>
<main id="swup" class="transition-rotate">
	<div class="container">
		<div class="row">
			<div class="col m10 offset-m1 s12">
				<?php
					$out = '';
					for ($i=0; $i < count($categories); $i++) { 
						$out .= '       
						<div class="categories-item mb-3">
							<a href="/'.$categories[$i]['link'].'.php" class="d-block" data-type-sweet="'.$categories[$i]['link'].'"><img src="/img/categories/'.$categories[$i]['main_image'].'" alt="white-cat"><span>'.$categories[$i]['name'].'</span></a>
						</div>';
					}
					echo $out;
				?>
			</div>
			<!-- /.col s10 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</main>

<?php require_once('template/footer.php');?>
