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



								$good_id = $_POST['good_id'];
								$good_category = $_POST['good_category'];

								$old_image1 = $_POST['old_image_1'];
								$old_image2 = $_POST['old_image_2'];

								if($good_category === 'cakes'){
									mysqli_query($conn, "DELETE FROM cakes WHERE id='$good_id'");
								}
								elseif ($good_category === 'cakes_price'){
									mysqli_query($conn, "DELETE FROM cakes_price WHERE id='$good_id'");
								}
								elseif ($good_category === 'pasta_price'){
									mysqli_query($conn, "DELETE FROM pasta_price WHERE id='$good_id'");
								}
								elseif ($good_category === 'cupcakes_price'){
									mysqli_query($conn, "DELETE FROM cupcakes_price WHERE id='$good_id'");
								}
								elseif ($good_category === 'cheesecakes_price'){
									mysqli_query($conn, "DELETE FROM cheesecakes_price WHERE id='$good_id'");
								}


								$path = '';
								if($good_category === 'cakes' OR $good_category === 'cakes_price'){
									$path = '../../img/cakes/';
								}
								elseif ($good_category === 'pasta_price'){
									$path = '../../img/pasta/';
								}
								elseif ($good_category === 'cupcakes_price'){
									$path = '../../img/cupcakes/';
								}
								elseif ($good_category === 'cheesecakes_price'){
									$path = '../../img/cheesecakes/';
								}


								$old1 = $path.$old_image1;
								$old2 = $path.$old_image2;

								unlink($old1);
								unlink($old2);

								echo 4;

		}else header('Location: ../../logout.php');
	}else header('Location: ../../logout.php');
close($conn);
?>