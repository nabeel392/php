<?php

session_start();
$mysqli=new mysqli('localhost','root','',"test");


if(isset($_GET['delete'])){
    $id =$_GET['delete'];
    $mysqli->query("Delete from customer_tbl where cust_id = $id") or die($mysqli->error());
    $_SESSION['message'] = "record has been deleted";
    $_SESSION['msg_type'] = "danger";
    header("location:view_user.php");
}


?>