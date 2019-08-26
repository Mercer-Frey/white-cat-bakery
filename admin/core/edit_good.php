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


			$name = $_POST['name'];
			$cost = $_POST['cost'];
			$description = $_POST['description'];
			$to_order = $_POST['to_order'];
			$good_category = $_POST['good_category'];
			$image_1 = $_POST['image_1'];
			$image_2 = $_POST['image_2'];
			$good_id = $_POST['good_id'];

			if(isset($_POST['name']) && isset($_POST['cost']) && isset($_POST['description']) && isset($_POST['to_order'])){

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
				if($_FILES['files_1']){

					$file_name_1 = $_FILES['files_1']['name'][0];
					$file_tmp_1 = $_FILES['files_1']['tmp_name'][0];
					$file_type_1 = $_FILES['files_1']['type'][0];
					$file_size_1 = $_FILES['files_1']['size'][0];
					$file_ext_1 = strtolower(end(explode('.', $_FILES['files_1']['name'][0])));

					if ($file_size_1 < 3145728) {
						if (in_array($file_ext_1, $extensions)) {		
							$temp_1 = explode(".",$_FILES['files_1']['name'][0]);
							$newfilename_1 = rand(1,999999) . '_' . rand(1,999999) . '.' . end($temp_1);

							$file_1 = $path . $newfilename_1;
						
							move_uploaded_file($file_tmp_1, $file_1);
							$old1 = $path.$image_1;
							unlink($old1);
					
						}else {echo 6; goto end_;}
					}else {echo 7; goto end_;}

				}else $newfilename_1 = $image_1;

				if($_FILES['files_2']){

					$file_name_2 = $_FILES['files_2']['name'][0];
					$file_tmp_2 = $_FILES['files_2']['tmp_name'][0];
					$file_type_2 = $_FILES['files_2']['type'][0];
					$file_size_2 = $_FILES['files_2']['size'][0];
					$file_ext_2 = strtolower(end(explode('.', $_FILES['files_2']['name'][0])));

					if ($file_size_2 < 3145728) {
						if (in_array($file_ext_2, $extensions)) {		

							$temp_2 = explode(".",$_FILES['files_2']['name'][0]);
							$newfilename_2 = rand(1,999999) . '_' . rand(1,999999) . '.' . end($temp_2);

							$file_2 = $path . $newfilename_2;

							move_uploaded_file($file_tmp_2, $file_2);
							$old2 = $path.$image_2;
							unlink($old2);
					
						}else {echo 6; goto end_;}
					}else {echo 7; goto end_;}

				}else $newfilename_2 = $image_2;

					

				if($good_category === 'cakes'){
					mysqli_query($conn, "UPDATE cakes SET name='$name',  description='$description', to_order='$to_order',  image_1='$newfilename_1',  image_2='$newfilename_2' WHERE id='$good_id'");
				}
				elseif ($good_category === 'cakes_price'){
					mysqli_query($conn, "UPDATE cakes_price SET name='$name',  description='$description', cost='$cost', to_order='$to_order',  image_1='$newfilename_1',  image_2='$newfilename_2' WHERE id='$good_id'");
				}
				elseif ($good_category === 'pasta_price'){
					mysqli_query($conn, "UPDATE pasta_price SET name='$name',  description='$description', cost='$cost', to_order='$to_order',  image_1='$newfilename_1',  image_2='$newfilename_2' WHERE id='$good_id'");
				}
				elseif ($good_category === 'cupcakes_price'){
					mysqli_query($conn, "UPDATE cupcakes_price SET name='$name',  description='$description', cost='$cost', to_order='$to_order',  image_1='$newfilename_1',  image_2='$newfilename_2' WHERE id='$good_id'");
				}
				elseif ($good_category === 'cheesecakes_price'){
					mysqli_query($conn, "UPDATE cheesecakes_price SET name='$name',  description='$description', cost='$cost', to_order='$to_order',  image_1='$newfilename_1',  image_2='$newfilename_2' WHERE id='$good_id'");
				}

				echo 4;

			}else echo 1;
						
		}else header('Location: ../../logout.php');
	}else header('Location: ../../logout.php');
end_:
close($conn);
?>