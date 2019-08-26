<?php
require_once 'config.php';
require_once 'function.php';
$conn = connect();
$admin_logout = selectOneRow($conn, "SELECT cook_name_1, cook_name_2 FROM admins");
close($conn);
setcookie($admin_logout['cook_name_1'], "", time() - 3600*24*30*12, "/");
setcookie($admin_logout['cook_name_2'], "", time() - 3600*24*30*12, "/");
header('Location: ../../../../index.php');
?>