<?php
session_start();
$cookie_name = "username";
setcookie($cookie_name,$_SESSION['username'], time() - (86400 * 30));

$_SESSION['username'] = null;
session_destroy();
header('location:index.php');
exit();
?>