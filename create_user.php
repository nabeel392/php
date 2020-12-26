

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");




if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(isset($_POST['sub']))
{	 
	$cust_name = $_POST['cust_name'];
	if(preg_match("/[A-Za-z]/",$cust_name)){
	//	$nameErr = "invalid username";
	//echo " matching";
	$name = 1;
	}
	else{
		$name = 0;
	}

	 $cust_fname = $_POST['cust_fname'];
	 if(preg_match("/[A-Za-z]/",$cust_fname)){
	//echo " matching";
	$fname = 1;
	}
	else{
		$fname= 0;
	}
    $cust_email = $_POST['cust_email'];
	if(preg_match("/[A-Za-z0-9]+@+[a-z]+.+[a-z]/",$cust_email)){
	//	$nameErr = "invalid username";
	//echo " matching";
	$email = 1;
	}
	else{
		$email = 0;
	}
	
	 $cust_address= $_POST['cust_address'];
	 if(preg_match("/[A-Za-z0-9]/",$cust_address)){
	//echo " matching";
	$address = 1;}
	else{
		$address = 0;
    }
    if($cust_pass = password_hash($_POST['cust_pass'] , PASSWORD_DEFAULT))
	 {
	 //$hash_password = password_hash($password , PASSWORD_DEFAULT);
     //$is_verify = password_verify($password , $hash_password);
		//echo " matching";
		//if($is_verify)
			$c= 1;	
	}
	else{
		$c= 0;
	}

       
	
  if(($name >= 1) && ($fname >=1) && ($email >=1)&& ($address >=1)&& ($c >=1)){
	 $sql = "INSERT INTO test.customer_tbl (cust_name, cust_fname,cust_email, cust_address ,cust_pass)
	 VALUES ('$cust_name','$cust_fname','$cust_email','$cust_address','$cust_pass')";
	   if (mysqli_query($conn, $sql )) {
?>
<script>
alert("new user added sucessfully");
</script>
    <?php
    header("location:user_login.php");
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	    mysqli_close($conn);
}
}
else{
	?>
<script>
alert("invalid");
</script>
	<?php
}
}
include_once("top.php");
    ?>


<body class="animsition">
   
<div class="page-content--bge5">
    <div class="container">
<div class="login-wrap">
    <div class="login-content">
<div class="login-logo">
<h1>  Add User</h1>
</div>
<div class="login-form">
    <form action="" method="post">
<div class="form-group">
    <label>Name</label>
    <input class="au-input au-input--full" class="text" type="text" name="cust_name" placeholder="your name" required >
</div>
<div class="form-group">
    <label>Fathername</label>
    <input class="au-input au-input--full"  class="text " type="text" name="cust_fname" placeholder="father name" required>
</div>
<div class="form-group">
    <label>Email</label>
    <input class="au-input au-input--full"type="text"  name="cust_email" placeholder="email here" required >
</div>
<div class="form-group">
    <label>Address</label>
    <input class="au-input au-input--full" type="text" name="cust_address" placeholder="address here" required>
</div>
<div class="form-group">
    <label>Password</label>
    <input class="au-input au-input--full" type="text" name="cust_pass" placeholder="password" required>
</div>

      

<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="sub">Click to Add</button>

    </form>
   
</div>
    </div>
</div>
    </div>
</div>
<?php

include_once("bottom.php");
?>

</body>

</html>
<!-- end document-->