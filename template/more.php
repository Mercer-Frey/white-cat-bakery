<?php require_once '../core/config.php';?>
<?php require_once '../core/function.php';?>
<?php 
$startFrom = $_POST['startFrom'];
$sweetType = $_POST['sweetType'];
$conn = connect();
$cakes_more = selectRows($conn, 'SELECT id, image_1, image_2 FROM '.$sweetType.' LIMIT '.$startFrom.', 6');
close($conn);
echo json_encode($cakes_more);
?>

