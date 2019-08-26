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


			if ($_FILES){

				$name = $_POST['name'];
				$cost = $_POST['cost'];
				$description = $_POST['description'];
				$to_order = $_POST['to_order'];
				$good_category = $_POST['good_category'];

				if(isset($_POST['name']) && isset($_POST['cost']) && isset($_POST['description']) && isset($_POST['to_order'])){

				    if (isset($_FILES['files_1']) && isset($_FILES['files_2'])) {

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

						$extensions = ['jpg', 'jpeg', 'png', 'gif'];
						
						$file_name_1 = $_FILES['files_1']['name'][0];
						$file_tmp_1 = $_FILES['files_1']['tmp_name'][0];
						$file_type_1 = $_FILES['files_1']['type'][0];
						$file_size_1 = $_FILES['files_1']['size'][0];
						$file_ext_1 = strtolower(end(explode('.', $_FILES['files_1']['name'][0])));

						$temp_1 = explode(".",$_FILES['files_1']['name'][0]);
						$newfilename_1 = rand(1,999999) . '_' . rand(1,999999) . '.' . end($temp_1);

						$file_1 = $path . $newfilename_1;

						$file_name_2 = $_FILES['files_2']['name'][0];
						$file_tmp_2 = $_FILES['files_2']['tmp_name'][0];
						$file_type_2 = $_FILES['files_2']['type'][0];
						$file_size_2 = $_FILES['files_2']['size'][0];
						$file_ext_2 = strtolower(end(explode('.', $_FILES['files_2']['name'][0])));

						$temp_2 = explode(".",$_FILES['files_2']['name'][0]);
						$newfilename_2 = rand(1,999999) . '_' . rand(1,999999) . '.' . end($temp_1);

						$file_2 = $path . $newfilename_2;					

						if ($file_size_1 < 3145728 && $file_size_2 < 3145728 ) {
							if (in_array($file_ext_1, $extensions) && in_array($file_ext_2, $extensions)) {

								move_uploaded_file($file_tmp_1, $file_1);
								move_uploaded_file($file_tmp_2, $file_2);

								if($good_category === 'cakes'){
									mysqli_query($conn, "INSERT INTO cakes (name, description, to_order, image_1, image_2) VALUES ('$name', '$description', '$to_order', '$newfilename_1', '$newfilename_2')");
								}
								elseif ($good_category === 'cakes_price'){
									mysqli_query($conn, "INSERT INTO cakes_price (name, description, cost, to_order, image_1, image_2) VALUES ('$name', '$description','$cost', '$to_order', '$newfilename_1', '$newfilename_2')");
								}
								elseif ($good_category === 'pasta_price'){
									mysqli_query($conn, "INSERT INTO pasta_price (name, description, cost, to_order, image_1, image_2) VALUES ('$name', '$description','$cost', '$to_order', '$newfilename_1', '$newfilename_2')");
								}
								elseif ($good_category === 'cupcakes_price'){
									mysqli_query($conn, "INSERT INTO cupcakes_price (name, description, cost, to_order, image_1, image_2) VALUES ('$name', '$description','$cost', '$to_order', '$newfilename_1', '$newfilename_2')");
								}
								elseif ($good_category === 'cheesecakes_price'){
									mysqli_query($conn, "INSERT INTO cheesecakes_price (name, description, cost, to_order, image_1, image_2) VALUES ('$name', '$description','$cost', '$to_order', '$newfilename_1', '$newfilename_2')");
								}

								echo 4;
								
							}else echo 6;
						}else echo 7;

					}
						
				}else echo 1;
						
			}else echo 8;

		}else header('Location: ../../logout.php');
	}else header('Location: ../../logout.php');
close($conn);
?>