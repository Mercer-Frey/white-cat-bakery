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


		if (!$_FILES){

					if(isset($_POST['main_name']) && isset($_POST['main_id'])){

						if(trim($_POST['main_name']) !== '' && trim($_POST['main_id']) !==''){

								$main_name = $_POST['main_name'];
								$main_id = $_POST['main_id'];

								mysqli_query($conn, "UPDATE categories SET name='$main_name' WHERE id='$main_id'");
								 echo 4;

						}else echo 1;

					}else header('Location: ../404.html');
					
		}else{

					if(isset($_POST['main_name']) && isset($_POST['main_id']) && isset($_POST['old_image'])){

						if(trim($_POST['main_name']) !== '' && trim($_POST['main_id']) !=='' && trim($_POST['old_image']) !==''){

								$old_image = $_POST['old_image'];
								$main_name = $_POST['main_name'];
								$main_id = $_POST['main_id'];


								    if (isset($_FILES['files'])) {

								        $path = '../../img/categories/';
										$extensions = ['jpg', 'jpeg', 'png', 'gif'];
										
								        $all_files = count($_FILES['files']['tmp_name']);

									    for ($i = 0; $i < $all_files; $i++) {  
											$file_name = $_FILES['files']['name'][$i];
											$file_tmp = $_FILES['files']['tmp_name'][$i];
											$file_type = $_FILES['files']['type'][$i];
											$file_size = $_FILES['files']['size'][$i];
											$file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

										$temp = explode(".",$_FILES['files']['name'][$i]);
										$newfilename = rand(1,999999) . '_' . rand(1,999999) . '.' . end($temp);

											$file = $path . $newfilename;


											if ($file_size < 3145728) {
												if (in_array($file_ext, $extensions)) {

													move_uploaded_file($file_tmp, $file);

													mysqli_query($conn, "UPDATE categories SET name='$main_name', main_image='$newfilename' WHERE id='$main_id'");

													$old = $path.$old_image;

														unlink($old);

													echo 4;

												}else echo 6;
											}else echo 7;

										}
									}

						}else echo 1;

					}else header('Location: ../404.html');

		}



		}else header('Location: ../../logout.php');
	}else header('Location: ../../logout.php');
close($conn);
?>