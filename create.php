

<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_SESSION['message'])):?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>


</div>

<?php
endif;


if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(isset($_POST['sub']))
{	 
	$car_name = $_POST['car_name'];
	if(preg_match("/[A-Za-z]/",$car_name)){
	//	$nameErr = "invalid username";
	//echo " matching";
	$name = 1;
	}
	else{
		$name = 0;
	}

	 $car_brand = $_POST['car_brand'];
	 if(preg_match("/[A-Za-z]/",$car_brand)){
	//echo " matching";
	$brand = 1;
	}
	else{
		$brand= 0;
	}
    $car_model = $_POST['car_model'];
	if(preg_match("/[A-Za-z0-9]/",$car_model)){
	//	$nameErr = "invalid username";
	//echo " matching";
	$model = 1;
	}
	else{
		$model = 0;
	}
	
	 $car_color= $_POST['car_color'];
	 if(preg_match("/[A-Za-z0-9]/",$car_color)){
	//echo " matching";
	$color = 1;}
	else{
		$color = 0;
    }
    $car_discription = $_POST['car_discription'];
	 if(preg_match("/[A-Za-z0-9]/",$car_discription)){
	//echo " matching";
	$discription = 1;}
	else{
		$discription = 0;
    }
   
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["car_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["car_image"]["tmp_name"], $target_file)) 
    
    $image=basename( $_FILES["car_image"]["name"]); 

    if (($name >= 1) && ($brand >= 1) && 
($model >= 1) && ($color >= 1) && 
($discription >= 1)) {
$sql = "INSERT INTO test.cars_tbl (car_name, car_brand,car_model, car_color ,car_discription,car_image )
VALUES ('$car_name','$car_brand','$car_model','$car_color','$car_discription','$image')";
	    if (mysqli_query($conn, $sql )) {
?>
<script>
alert("record added successfully");
</script>
<?php
		//$_SESSION['message'] = "record has been Added";
    //$_SESSION['msg_type'] = "danger";
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
<h1>  Add Cars</h1>
</div>
<div class="login-form">
    <form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label>Car Name</label>
    <input class="au-input au-input--full" class="text" type="text" name="car_name" placeholder="your name" required >
</div>
<div class="form-group">
    <label>Car Brand</label>
    <input class="au-input au-input--full"  class="text " type="text" name="car_brand" placeholder="brand name" required>
</div>
<div class="form-group">
    <label>Model</label>
    <input class="au-input au-input--full"type="text"  name="car_model" placeholder="model here" required >
</div>
<div class="form-group">
    <label>Color</label>
    <input class="au-input au-input--full" type="text" name="car_color" placeholder="color here" required>
</div>
<div class="form-group">
    <label>Description</label>
    <input class="au-input au-input--full" type="text" name="car_discription" placeholder="description here" required>
</div>
<div class="form-group">
    <label>Image</label>
    <input class="au-input au-input--full" type="file" name="car_image" required>
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