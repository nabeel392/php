<?php 
//include 'admin-login.php';
function logoutAction()
{
//logoutAction1();
    
$cookie_name = "username";
setcookie($cookie_name,$_SESSION['username'], time() - (86400 * 30), "/");

}
?>