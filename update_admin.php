

<?php
Session_start();

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
$id = 0;
$update = false;
$name = "";
$fname = "";
$pass = "";
$add = "";
$phone = "";
$email = "";
$status = "";


if(isset($_GET['update'])){
	$id = $_GET['update'];
	$update = true;
	$result  = mysqli_query($conn,"SELECT * from admin_tbl where admin_id = $id") ; 
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	$admin_name = $row['admin_name'];
	$admin_address = $row['admin_address'];
	$admin_pass = $row['admin_pass'];
	

	}
	}

$update = true;	


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
 if(preg_match("/[A-Za-z]/",$admin_address)){
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
	$sql = "UPDATE admin_tbl Set admin_name = $admin_name ,admin_address = $admin_address,admin_pass = $admin_pass where admin_id = $id";
	if (mysqli_query($conn, $sql )) {
		echo "record updated successfully !";
		?>
		<script>
		alert("record updated successfully");
		</script>
			<?php
	
	}
	header("location:fetch.php");
}
	 else {
		?>
		<script>
		alert("invalid");
		</script>
			<?php
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
	 
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
   
<div class="page-content--bge5">
    <div class="container">
<div class="login-wrap">
    <div class="login-content">
<div class="login-logo">
    <a href="#">
<img src="images/icon/logo.png" alt="CoolAdmin">
    </a>
</div>
<div class="login-form">
    <form action="" method="post">
<div class="form-group">
    <label>Name</label>
    <input class="au-input au-input--full" class="text" type="text" name="admin_name" placeholder="your name" required >
</div>
<div class="form-group">
    <label>Address</label>
    <input class="au-input au-input--full"  class="text " type="text" name="admin_address" placeholder="address" required>
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

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->