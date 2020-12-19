<?php
	include 'database1.php';
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$pass = $_POST['pass'];
    //$pass = password_hash($_POST['cust_pass'] , PASSWORD_DEFAULT);
	$sql = "
		INSERT INTO `customer_tbl`( `cust_name`, `cust_fname`, `cust_email`, 
		`cust_address`,  `cust_pass` ) 
		VALUES ('$name','$fname','$email','$address' ,'$pass')";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 