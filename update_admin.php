

<?php
Session_start();

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
// $id = 0;
// $update = false;
// $name = "";
// $fname = "";
// $pass = "";
// $add = "";
// $phone = "";
// $email = "";
// $status = "";


if(isset($_GET['update'])){
	$id = $_GET['update'];
	// $update = true;
	$result  = mysqli_query($conn,"SELECT * from admin_tbl where admin_id = $id") ; 
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	$admin_name = $row['admin_name'];
	$admin_address = $row['admin_address'];
	$admin_pass = $row['admin_pass'];
	

	}
	}

// $update = true;	


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
 if(preg_match("/[A-Za-z0-9]/",$admin_address)){
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
	$sql = "UPDATE admin_tbl SET admin_name = '$admin_name' ,admin_address = '$admin_address',
    admin_pass = '$admin_pass' WHERE admin_id = '$id'";
	if (mysqli_query($conn, $sql )) {
		echo "record updated successfully !";
		?>
		<script>
		alert("record updated successfully");
		</script>
			<?php
	header("location:view_admin.php");
	}
	// header("location:view_admin.php");
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
include_once("top.php");	 
    ?>

<body class="animsition">
   
<div class="page-content--bge5">
    <div class="container">
<div class="login-wrap">
    <div class="login-content">
<div class="login-logo">
    <a href="#">
<!-- <img src="images/icon/logo.png" alt="CoolAdmin"> -->
    </a>
</div>
<div class="login-form">
    <form action="update_admin.php?update=<?=$_GET['update'] ?>" method="post">
<div class="form-group">
<input type="hidden" name="admin_id" value="<?php echo $id; ?>">
    <label>Name</label>
    <input class="au-input au-input--full" class="text" type="text" name="admin_name" value="<?php echo $admin_name; ?>" placeholder="your name" required >
</div>
<div class="form-group">
    <label>Address</label>
    <input class="au-input au-input--full"  class="text " type="text" name="admin_address" value="<?php echo $admin_address; ?>" placeholder="address" required>
</div>
<div class="form-group">
    <label>Password</label>
    <input class="au-input au-input--full"type="text"  name="admin_pass" placeholder="Password" required >
</div>
<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="sub">register</button>

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