

<?php
Session_start();

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_GET['update'])){
	$id = $_GET['update'];
    // $update = true;
    
	$result  = mysqli_query($conn,"SELECT * from cars_tbl where car_id = $id") ; 
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	$car_name = $row['car_name'];
	$car_brand = $row['car_brand'];
	$car_model = $row['car_model'];
	$car_color = $row['car_color'];
	$car_discription = $row['car_discription'];
	$car_image = $row['car_image'];

	}
	}

// $update = true;	


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['sub']))
    {	 
$car_name = $_POST['car_name'];
if(preg_match("/[A-Za-z0-9]/",$car_name)){
//	$nameErr = "invalid username";
//echo " matching";
$name = 1;
}
else{
    $name = 0;
}
    
 $car_brand = $_POST['car_brand'];
 if(preg_match("/[A-Za-z0-9]/",$car_brand)){
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

   

  if(($name >= 1) && ($brand >=1) && ($model >=1)&& ($color >=1)&& ($discription >=1)){
	$sql = "UPDATE cars_tbl SET car_name = '$car_name' , car_brand = '$car_brand', car_model = '$car_model',
    car_color = '$car_color' , car_discription = '$car_discription', car_image = '$image' WHERE car_id = '$id'";
	if (mysqli_query($conn, $sql )) {
        echo "record updated successfully !";
        header("location:view.php");
		?>
		<script>
		alert("record updated successfully");
		</script>
			<?php
	
	}
	// header("location:view.php");

	 else {
		?>
		<script>
		alert("invalid");
		</script>
			<?php
		echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
    }
	 mysqli_close($conn);
}
else{
    echo "invalid sub";
}
}
include_once("top.php");	 
    ?>


<body class="animsition">
    <div class="page-wrapper">
<div class="page-content--bge5">
    <div class="container">
<div class="login-wrap">
    <div class="login-content">
<!-- <div class="login-logo">
    <a href="#">
<img src="images/icon/logo.png" alt="CoolAdmin">
    </a>
</div> -->
<div class="login-form">
    <form action="update.php?update=<?=$_GET['update'] ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="car_id" value="<?php echo $id;?>"   >
    <div class="form-group">
    <label>Car Name</label>
    <input class="au-input au-input--full" class="text" type="text" name="car_name" value="<?php echo $car_name; ?>" placeholder="car name" required >
</div>
<div class="form-group">
    <label>Car Brand</label>
    <input class="au-input au-input--full"  class="text " type="text" name="car_brand" value="<?php echo $car_brand; ?>" placeholder="brand name" required>
</div>
<div class="form-group">
    <label>Model</label>
    <input class="au-input au-input--full"type="text"  name="car_model" value="<?php echo $car_model; ?>" placeholder="model here" required >
</div>
<div class="form-group">
    <label>Color</label>
    <input class="au-input au-input--full" type="text" name="car_color" value="<?php echo $car_color; ?>" placeholder="color here" required>
</div>
<div class="form-group">
    <label>Description</label>
    <input class="au-input au-input--full" type="text" name="car_discription" value="<?php echo $car_discription; ?>" placeholder="description here" required>
</div>
<div class="form-group">
    <label>Image</label>
    <input class="au-input au-input--full" type="file" name="car_image" required>
</div>
      
<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="sub">Update</button>


    </form>
    
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