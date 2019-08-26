<?php
require_once 'config.php';
require_once 'function.php';

$conn = connect();
$admin_check = selectOneRow($conn, "SELECT login_1, login_2, hash_1, hash_2, cook_name_1, cook_name_2 FROM admins");
	if($_COOKIE[$admin_check['cook_name_2']]){
		$admin_data_check = json_decode($_COOKIE[$admin_check['cook_name_2']]);
		if($admin_check['login_1'] === $admin_data_check->{'login_1'} 
			&& $admin_check['login_2'] === $admin_data_check->{'login_2'}
				&& $admin_check['hash_1'] === $admin_data_check->{'hash_1'} 
					&& $admin_check['hash_2'] === $admin_data_check->{'hash_2'} 
						&& $admin_check['cook_name_1'] === $admin_data_check->{'cook_name_1'} 
							&& $admin_check['cook_name_2'] === $admin_data_check->{'cook_name_2'}){



								$gallery_id = $_POST['gallery_id'];
								$gallery_image = $_POST['gallery_image'];

								mysqli_query($conn, "DELETE FROM master_gallery WHERE id='$gallery_id'");

								$path = '../../img/master-class/';
								$old = $path.$gallery_image;

								unlink($old);

								echo 4;

		}else header('Location: ../../logout.php');
	}else header('Location: ../../logout.php');
close($conn);
?>