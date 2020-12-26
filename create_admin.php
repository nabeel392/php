

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(isset($_POST['sub']))
{	 
	$admin_name = $_POST['admin_name'];
	if(preg_match("/[A-Za-z]/",$admin_name)){
	//	$nameErr = "invalid username";
	//echo " matching";
	$name = 1;
	}
	else{
		$name = 0;
	}

	 $admin_address = $_POST['admin_address'];
	 if(preg_match("/[A-Za-z0-9]+@+[a-z]+.+[a-z]/",$admin_address)){
	//echo " matching";
	$address = 1;
	}
	else{
		$address = 0;
	}
	 
	 if($admin_pass = password_hash($_POST['admin_pass'] , PASSWORD_DEFAULT))
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
	 
  if(($name >= 1) && ($address >=1) && ($c >=1)){
	 $sql = "INSERT INTO test.admin_tbl (admin_name, admin_address ,admin_pass)
	 VALUES ('$admin_name','$admin_address','$admin_pass')";
	   if (mysqli_query($conn, $sql )) {
   ?>
<script>
alert("record created successfully");
</script>
<?php
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
else{
    //echo "Regex Is Used Do Not Be Smart";
	?>
<script>
alert("invalid");
</script>

	<?php
}
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
    
<h1>  Add Admin</h1>
    
</div>
<div class="login-form">
    <form action="" method="post">
   <div class="form-group">
       <label>Name</label>
       <input class="au-input au-input--full" class="text" type="text" name="admin_name" placeholder="your name" required >
   </div>
   <div class="form-group">
       <label>Email</label>
       <input class="au-input au-input--full"  class="text " type="text" name="admin_address" placeholder="Email address" required>
   </div>
   <div class="form-group">
       <label>Password</label>
       <input class="au-input au-input--full"type="text"  name="admin_pass" placeholder="Password" required >
   </div>
   <div class="login-checkbox">
       <label>
   <input type="checkbox" name="aggree">Agree the terms and policy
       </label>
   </div>
   <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="sub">register</button>
   <div class="social-login-content">
       <div class="social-button">
   <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
   <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
       </div>
   </div>
    </form>
    <div class="register-link">
   <p>
       Already have account?
       <a href="#">Sign In</a>
   </p>
    </div>
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