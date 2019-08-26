<?php
require_once 'config.php';
require_once 'function.php';

$conn = connect();
$admin_check = selectOneRow($conn, "SELECT login_1, login_2, password, hash_1, hash_2, cook_name_1, cook_name_2 FROM admins");
	if($_COOKIE[$admin_check['cook_name_2']]){
		$admin_data_check = json_decode($_COOKIE[$admin_check['cook_name_2']]);
		if($admin_check['login_1'] === $admin_data_check->{'login_1'} 
			&& $admin_check['login_2'] === $admin_data_check->{'login_2'}
				&& $admin_check['hash_1'] === $admin_data_check->{'hash_1'} 
					&& $admin_check['hash_2'] === $admin_data_check->{'hash_2'} 
						&& $admin_check['cook_name_1'] === $admin_data_check->{'cook_name_1'} 
							&& $admin_check['cook_name_2'] === $admin_data_check->{'cook_name_2'}){

			if(isset($_POST['new_pass']) AND isset($_POST['old_pass'])){
				if(trim($_POST['new_pass']) !== '' AND trim($_POST['old_pass']) !==''){
					$new_pass = $func->IsLogin($_POST['new_pass']);
					$old_pass = $func->IsLogin($_POST['old_pass']);
					if($new_pass !== false AND $old_pass !== false){

						if(md5($_POST['old_pass']) === $admin_check['password']){

							$new_pass_md = md5($_POST['new_pass']);

							mysqli_query($conn, "UPDATE admins SET password='$new_pass_md'");
							
							echo 4;

						}else echo 3;
					}else echo 2;
				}else echo 1;
			}else header('Location: ../404.html');
			
		}else header('Location: ../../logout.php');
	}else header('Location: ../../logout.php');
close($conn);

?>