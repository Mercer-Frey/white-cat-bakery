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

			if(isset($_POST['for_order']) && isset($_POST['cost_deliver']) && isset($_POST['self_deliver']) && isset($_POST['number_c']) && isset($_POST['adress'])){

				if(trim($_POST['for_order']) !== '' && trim($_POST['cost_deliver']) !=='' && trim($_POST['self_deliver']) !==''	&& trim($_POST['number_c']) !==''	&& trim($_POST['adress']) !==''){

						$for_order = $_POST['for_order'];
						$cost_deliver = $_POST['cost_deliver'];
						$self_deliver = $_POST['self_deliver'];
						$number_c = $_POST['number_c'];
						$adress = $_POST['adress'];

						mysqli_query($conn, "UPDATE contacts SET for_order='$for_order',  cost_deliver='$cost_deliver',  
							self_deliver='$self_deliver',  number_c='$number_c',  adress='$adress'");

							echo 4;

				}else echo 1;

			}else header('Location: ../404.html');
			
		}else header('Location: ../../logout.php');
	}else header('Location: ../../logout.php');
close($conn);
?>